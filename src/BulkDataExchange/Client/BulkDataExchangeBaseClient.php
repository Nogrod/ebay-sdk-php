<?php

namespace Nogrod\eBaySDK\BulkDataExchange\Client;

/**
 * Class representing BulkDataExchangeServicePort
 */
class BulkDataExchangeBaseClient extends \Nogrod\XMLClientRuntime\Client
{
    /**
     * Call createUploadJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\CreateUploadJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\CreateUploadJobResponse
     */
    public function createUploadJob(\Nogrod\eBaySDK\BulkDataExchange\CreateUploadJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\CreateUploadJobResponse
    {
        return $this->call('createUploadJob', 'Nogrod\eBaySDK\BulkDataExchange\CreateUploadJobResponse', $params);
    }

    /**
     * Call startUploadJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\StartUploadJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\StartUploadJobResponse
     */
    public function startUploadJob(\Nogrod\eBaySDK\BulkDataExchange\StartUploadJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\StartUploadJobResponse
    {
        return $this->call('startUploadJob', 'Nogrod\eBaySDK\BulkDataExchange\StartUploadJobResponse', $params);
    }

    /**
     * Call abortJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\AbortJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\AbortJobResponse
     */
    public function abortJob(\Nogrod\eBaySDK\BulkDataExchange\AbortJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\AbortJobResponse
    {
        return $this->call('abortJob', 'Nogrod\eBaySDK\BulkDataExchange\AbortJobResponse', $params);
    }

    /**
     * Call getJobs
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\GetJobsRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\GetJobsResponse
     */
    public function getJobs(\Nogrod\eBaySDK\BulkDataExchange\GetJobsRequest $params): \Nogrod\eBaySDK\BulkDataExchange\GetJobsResponse
    {
        return $this->call('getJobs', 'Nogrod\eBaySDK\BulkDataExchange\GetJobsResponse', $params);
    }

    /**
     * Call getJobStatus
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\GetJobStatusRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\GetJobStatusResponse
     */
    public function getJobStatus(\Nogrod\eBaySDK\BulkDataExchange\GetJobStatusRequest $params): \Nogrod\eBaySDK\BulkDataExchange\GetJobStatusResponse
    {
        return $this->call('getJobStatus', 'Nogrod\eBaySDK\BulkDataExchange\GetJobStatusResponse', $params);
    }

    /**
     * Call startDownloadJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\StartDownloadJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\StartDownloadJobResponse
     */
    public function startDownloadJob(\Nogrod\eBaySDK\BulkDataExchange\StartDownloadJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\StartDownloadJobResponse
    {
        return $this->call('startDownloadJob', 'Nogrod\eBaySDK\BulkDataExchange\StartDownloadJobResponse', $params);
    }

    /**
     * Call createRecurringJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\CreateRecurringJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\CreateRecurringJobResponse
     */
    public function createRecurringJob(\Nogrod\eBaySDK\BulkDataExchange\CreateRecurringJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\CreateRecurringJobResponse
    {
        return $this->call('createRecurringJob', 'Nogrod\eBaySDK\BulkDataExchange\CreateRecurringJobResponse', $params);
    }

    /**
     * Call deleteRecurringJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\DeleteRecurringJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\DeleteRecurringJobResponse
     */
    public function deleteRecurringJob(\Nogrod\eBaySDK\BulkDataExchange\DeleteRecurringJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\DeleteRecurringJobResponse
    {
        return $this->call('deleteRecurringJob', 'Nogrod\eBaySDK\BulkDataExchange\DeleteRecurringJobResponse', $params);
    }

    /**
     * Call getRecurringJobs
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobsRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobsResponse
     */
    public function getRecurringJobs(\Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobsRequest $params): \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobsResponse
    {
        return $this->call('getRecurringJobs', 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobsResponse', $params);
    }

    /**
     * Call getRecurringJobExecutionStatus
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionStatusRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionStatusResponse
     */
    public function getRecurringJobExecutionStatus(\Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionStatusRequest $params): \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionStatusResponse
    {
        return $this->call('getRecurringJobExecutionStatus', 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionStatusResponse', $params);
    }

    /**
     * Call getRecurringJobExecutionHistory
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionHistoryRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionHistoryResponse
     */
    public function getRecurringJobExecutionHistory(\Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionHistoryRequest $params): \Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionHistoryResponse
    {
        return $this->call('getRecurringJobExecutionHistory', 'Nogrod\eBaySDK\BulkDataExchange\GetRecurringJobExecutionHistoryResponse', $params);
    }

    /**
     * Call activateRecurringJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\ActivateRecurringJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\ActivateRecurringJobResponse
     */
    public function activateRecurringJob(\Nogrod\eBaySDK\BulkDataExchange\ActivateRecurringJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\ActivateRecurringJobResponse
    {
        return $this->call('activateRecurringJob', 'Nogrod\eBaySDK\BulkDataExchange\ActivateRecurringJobResponse', $params);
    }

    /**
     * Call suspendRecurringJob
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\SuspendRecurringJobRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\SuspendRecurringJobResponse
     */
    public function suspendRecurringJob(\Nogrod\eBaySDK\BulkDataExchange\SuspendRecurringJobRequest $params): \Nogrod\eBaySDK\BulkDataExchange\SuspendRecurringJobResponse
    {
        return $this->call('suspendRecurringJob', 'Nogrod\eBaySDK\BulkDataExchange\SuspendRecurringJobResponse', $params);
    }

    /**
     * Call abortRecurringJobExecution
     *
     * @param \Nogrod\eBaySDK\BulkDataExchange\AbortRecurringJobExecutionRequest $params
     * @return \Nogrod\eBaySDK\BulkDataExchange\AbortRecurringJobExecutionResponse
     */
    public function abortRecurringJobExecution(\Nogrod\eBaySDK\BulkDataExchange\AbortRecurringJobExecutionRequest $params): \Nogrod\eBaySDK\BulkDataExchange\AbortRecurringJobExecutionResponse
    {
        return $this->call('abortRecurringJobExecution', 'Nogrod\eBaySDK\BulkDataExchange\AbortRecurringJobExecutionResponse', $params);
    }

    protected function getJmsMetaPath()
    {
        return [
            'Nogrod\eBaySDK\BulkDataExchange' => __DIR__.'/../../../metadata/BulkDataExchange',
        ];
    }

    protected function getSabre()
    {
        $service = new \Sabre\Xml\Service();
        $service->classMap = BulkDataExchangeClassMap::Get();
        $service->elementMap = BulkDataExchangeClassMap::GetElements();
        $service->namespaceMap = BulkDataExchangeClassMap::GetNamespaces();
        return $service;
    }
}
