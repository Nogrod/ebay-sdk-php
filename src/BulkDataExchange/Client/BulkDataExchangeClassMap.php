<?php

namespace Nogrod\eBaySDK\BulkDataExchange\Client;

use \Sabre\Xml\Writer;

class BulkDataExchangeClassMap
{
    public static function Get()
    {
        return ['Time' => function (Writer $writer, $elem) {
            $value = $elem->format('H:i:s');
            if ($elem->getTimezone()->getOffset($elem) !== (new \DateTimeZone('UTC'))->getOffset($elem)) {
                $value .= $date->format('P');
            }
            $writer->write($value);
        },
        'DateTime' => function (Writer $writer, $elem) {
            $writer->write($elem->format(\DateTime::W3C));
        },
        'Date' => function (Writer $writer, $elem) {
            $writer->write($elem->format('Y-m-d'));
        },];
    }

    public static function GetElements()
    {
        return ['{http://www.ebay.com/marketplace/services}abortRecurringJobExecutionResponse' => 'Nogrod\eBaySDK\BulkDataExchange\AbortRecurringJobExecutionResponse',
        '{http://www.ebay.com/marketplace/services}createRecurringJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\CreateRecurringJobResponse',
        '{http://www.ebay.com/marketplace/services}createUploadJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\CreateUploadJobRequest',
        '{http://www.ebay.com/marketplace/services}createUploadJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\CreateUploadJobResponse',
        '{http://www.ebay.com/marketplace/services}startUploadJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\StartUploadJobRequest',
        '{http://www.ebay.com/marketplace/services}startUploadJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\StartUploadJobResponse',
        '{http://www.ebay.com/marketplace/services}abortJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\AbortJobRequest',
        '{http://www.ebay.com/marketplace/services}abortJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\AbortJobResponse',
        '{http://www.ebay.com/marketplace/services}getJobsResponse' => 'Nogrod\eBaySDK\BulkDataExchange\GetJobsResponse',
        '{http://www.ebay.com/marketplace/services}getJobStatusRequest' => 'Nogrod\eBaySDK\BulkDataExchange\GetJobStatusRequest',
        '{http://www.ebay.com/marketplace/services}getJobStatusResponse' => 'Nogrod\eBaySDK\BulkDataExchange\GetJobStatusResponse',
        '{http://www.ebay.com/marketplace/services}startDownloadJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\StartDownloadJobRequest',
        '{http://www.ebay.com/marketplace/services}startDownloadJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\StartDownloadJobResponse',
        '{http://www.ebay.com/marketplace/services}createRecurringJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\CreateRecurringJobRequest',
        '{http://www.ebay.com/marketplace/services}getJobsRequest' => 'Nogrod\eBaySDK\BulkDataExchange\GetJobsRequest',
        '{http://www.ebay.com/marketplace/services}deleteRecurringJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\DeleteRecurringJobRequest',
        '{http://www.ebay.com/marketplace/services}getRecurringJobExecutionHistoryResponse' => 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionHistoryResponse',
        '{http://www.ebay.com/marketplace/services}deleteRecurringJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\DeleteRecurringJobResponse',
        '{http://www.ebay.com/marketplace/services}abortRecurringJobExecutionRequest' => 'Nogrod\eBaySDK\BulkDataExchange\AbortRecurringJobExecutionRequest',
        '{http://www.ebay.com/marketplace/services}suspendRecurringJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\SuspendRecurringJobResponse',
        '{http://www.ebay.com/marketplace/services}suspendRecurringJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\SuspendRecurringJobRequest',
        '{http://www.ebay.com/marketplace/services}activateRecurringJobRequest' => 'Nogrod\eBaySDK\BulkDataExchange\ActivateRecurringJobRequest',
        '{http://www.ebay.com/marketplace/services}activateRecurringJobResponse' => 'Nogrod\eBaySDK\BulkDataExchange\ActivateRecurringJobResponse',
        '{http://www.ebay.com/marketplace/services}getRecurringJobExecutionHistoryRequest' => 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionHistoryRequest',
        '{http://www.ebay.com/marketplace/services}getRecurringJobExecutionStatusResponse' => 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionStatusResponse',
        '{http://www.ebay.com/marketplace/services}getRecurringJobExecutionStatusRequest' => 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionStatusRequest',
        '{http://www.ebay.com/marketplace/services}getRecurringJobsResponse' => 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobsResponse',
        '{http://www.ebay.com/marketplace/services}getRecurringJobsRequest' => 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobsRequest',];
    }

    public static function GetNamespaces()
    {
        return ['http://www.ebay.com/marketplace/services' => '',];
    }
}
