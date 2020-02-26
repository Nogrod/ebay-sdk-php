<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/funcs.php';

use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\FileGenerator;
use Symfony\Component\Yaml\Yaml;

$files = Yaml::parseFile(__DIR__ . '/config.yaml');

$outputDir = __DIR__ . '/wsdl/';
rrmdir($outputDir);
mkdir($outputDir);

$phpFile = new FileGenerator();
$phpFile->setDocBlock(new DocBlockGenerator('This file is auto-generated. DO NOT EDIT!'));
$class = new ClassGenerator('Version', 'Nogrod\eBaySDK\Constants');
$phpFile->setClass($class);

foreach ($files as $key => $value) {
    $wsdlFile = $outputDir . $key . '.wsdl';
    if (!empty($value['url'])) {
        file_put_contents($wsdlFile, file_get_contents($value['url']));
        $xml = new \SimpleXMLElement($wsdlFile, 0, true);
        $xml->registerXpathNamespace("wsdl", 'http://schemas.xmlsoap.org/wsdl/');
        $xml->registerXpathNamespace("ns", 'urn:ebay:apis:eBLBaseComponents');
        $version = $xml->xpath('//wsdl:service//wsdl:Version|//wsdl:service//wsdl:version|//wsdl:service//ns:Version')[0];
        echo $key . ' - ' . $version . PHP_EOL;
        $class->addConstant(strtoupper($key), (string) $version);
    } elseif (!empty($value['xsd'])) {
        file_put_contents($outputDir . $key . '.xsd', file_get_contents($value['xsd']));
    }
}

$phpFile->setFilename(__DIR__ . '/src/Constants/Version.php');
$phpFile->write();
