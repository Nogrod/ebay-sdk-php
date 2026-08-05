<?php

/**
 * Merges the element map generated for the MerchantData schema into TradingClassMap.
 *
 * MerchantData is generated into src/MerchantData and its classes are then copied into
 * src/Trading by copy.bat, which deletes the rest of the directory afterwards. Its
 * generated class map goes with it, so without this step every element declared only by
 * that schema (BulkDataExchangeRequests, BulkDataExchangeResponses,
 * SetShipmentTrackingInfoRequest/Response, OrderAck*, OrderReport*, FeeSettlementReport*,
 * ActiveInventoryReport*) silently disappears from TradingClassMap::GetElements() on
 * every rebuild, and deserializing those payloads stops working.
 *
 * Run from copy.bat before the MerchantData directories are removed. Safe to run twice:
 * entries already present are left untouched.
 */
$root = __DIR__;
$target = $root.'/src/Trading/Client/TradingClassMap.php';

$sources = glob($root.'/src/MerchantData/Client/*ClassMap.php');
if ([] === $sources) {
    fwrite(STDERR, "mergeclassmap: no MerchantData class map found, nothing to merge\n");

    exit(0);
}

if (!is_file($target)) {
    fwrite(STDERR, "mergeclassmap: $target not found\n");

    exit(1);
}

// The generated class is named after the destination directory, so find it by loading
// the file and looking at what appeared.
$before = get_declared_classes();
require $sources[0];
$declared = array_values(array_diff(get_declared_classes(), $before));
if ([] === $declared) {
    fwrite(STDERR, "mergeclassmap: {$sources[0]} declared no class\n");

    exit(1);
}

$sourceClass = $declared[0];
if (!method_exists($sourceClass, 'GetElements')) {
    fwrite(STDERR, "mergeclassmap: $sourceClass has no GetElements()\n");

    exit(1);
}

$incoming = $sourceClass::GetElements();

$code = file_get_contents($target);
$pattern = '/(public static function GetElements\(\): array\s*\R\s*\{\s*\R\s*return \[\s*\R)(.*?)(\s*\];)/s';
if (!preg_match($pattern, $code, $m)) {
    fwrite(STDERR, "mergeclassmap: could not locate GetElements() in $target\n");

    exit(1);
}

// Keep whatever line ending the file already uses.
$eol = false !== strpos($code, "\r\n") ? "\r\n" : "\n";

$existing = [];
foreach (preg_split('/\R/', $m[2]) as $line) {
    if (preg_match("/^\s*'(.*?)'\s*=>\s*'(.*?)',\s*$/", $line, $e)) {
        $existing[$e[1]] = $e[2];
    }
}

if ([] === $existing) {
    fwrite(STDERR, "mergeclassmap: parsed no entries out of $target\n");

    exit(1);
}

// Entries already in the Trading map win: it is the authoritative one for its own schema.
$merged = $existing + $incoming;
$added = array_diff_key($incoming, $existing);
ksort($merged);

$lines = [];
foreach ($merged as $element => $class) {
    $lines[] = "        '".$element."' => '".$class."',";
}

$code = preg_replace($pattern, '$1'.str_replace('$', '\$', implode($eol, $lines)).'$3', $code, 1);
file_put_contents($target, $code);

printf(
    "mergeclassmap: %d entries merged into TradingClassMap (%d added)%s\n",
    count($merged),
    count($added),
    [] === $added ? '' : ': '.implode(', ', array_map(static function (string $e): string {
        return substr($e, (int) strrpos($e, '}') + 1);
    }, array_keys($added)))
);
