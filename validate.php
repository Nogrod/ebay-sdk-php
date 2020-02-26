<?php
require_once __DIR__ . '/vendor/autoload.php';
libxml_use_internal_errors(true);

use Symfony\Component\Yaml\Yaml;

$files = Yaml::parseFile(__DIR__ . '/config.yaml');
foreach ($files as $key => $value) {
    if (empty($value['url'])) {
        continue;
    }
    $feed = new DOMDocument();
    $feed->preserveWhitespace = false;
    $feed->load($value['url']);
    if (@($feed->schemaValidate($value['xsd']))) {
        echo "+ Document is valid!\n";
    } else {
        echo "! Document is not valid:\n";
        // var_dump the error messages
        $errors = libxml_get_errors();
        foreach ($errors as $error) {
            echo "---\n";
            printf(
                "Error: %s \nfile: %s, line: %s, column: %s, level: %s, code: %s\n",
                $error->message,
                $error->file,
                $error->line,
                $error->column,
                $error->level,
                $error->code
            );
        }
    }
    //$feed->save($key . '.wsdl');
}
