<?php

namespace Nogrod\eBaySDK\FileTransfer\Client;

use Sabre\Xml\Writer;

class FileTransferClassMap
{
    public static function Get()
    {
        return ['Time' => function (Writer $writer, $elem) {
            $value = $elem->format('H:i:s');
            if ($elem->getTimezone()->getOffset($elem) !== (new \DateTimeZone('UTC'))->getOffset($elem)) {
                $value .= $date->format('P');
            }$writer->write($value);
        },
        'DateTime' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d\TH:i:s.v\Z'));
        },
        'Date' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d'));
        },];
    }

    public static function GetElements()
    {
        return ['{http://www.ebay.com/marketplace/services}downloadFileResponse' => 'Nogrod\eBaySDK\FileTransfer\DownloadFileResponse',
        '{http://www.ebay.com/marketplace/services}downloadFileRequest' => 'Nogrod\eBaySDK\FileTransfer\DownloadFileRequest',
        '{http://www.ebay.com/marketplace/services}uploadFileResponse' => 'Nogrod\eBaySDK\FileTransfer\UploadFileResponse',
        '{http://www.ebay.com/marketplace/services}uploadFileRequest' => 'Nogrod\eBaySDK\FileTransfer\UploadFileRequest',];
    }

    public static function GetNamespaces()
    {
        return ['http://www.ebay.com/marketplace/services' => '',];
    }
}
