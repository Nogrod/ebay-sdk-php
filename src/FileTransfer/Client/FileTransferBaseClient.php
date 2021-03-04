<?php

namespace Nogrod\eBaySDK\FileTransfer\Client;

/**
 * Class representing FileTransferServicePort
 */
class FileTransferBaseClient extends \Nogrod\XMLClientRuntime\Client
{
    /**
     * Call uploadFile
     *
     * @param \Nogrod\eBaySDK\FileTransfer\UploadFileRequest $params
     * @return \Nogrod\eBaySDK\FileTransfer\UploadFileResponse
     */
    public function uploadFile(\Nogrod\eBaySDK\FileTransfer\UploadFileRequest $params) : \Nogrod\eBaySDK\FileTransfer\UploadFileResponse
    {
        return $this->call('uploadFile', 'Nogrod\eBaySDK\FileTransfer\UploadFileResponse', $params);
    }

    /**
     * Call downloadFile
     *
     * @param \Nogrod\eBaySDK\FileTransfer\DownloadFileRequest $params
     * @return \Nogrod\eBaySDK\FileTransfer\DownloadFileResponse
     */
    public function downloadFile(\Nogrod\eBaySDK\FileTransfer\DownloadFileRequest $params) : \Nogrod\eBaySDK\FileTransfer\DownloadFileResponse
    {
        return $this->call('downloadFile', 'Nogrod\eBaySDK\FileTransfer\DownloadFileResponse', $params);
    }

    protected function getJmsMetaPath()
    {
        return [
            'Nogrod\eBaySDK\FileTransfer' => __DIR__.'/../../../metadata/FileTransfer',
        ];
    }

    protected function getSabre()
    {
        $service = new \Sabre\Xml\Service();
        $service->classMap = FileTransferClassMap::Get();
        $service->elementMap = FileTransferClassMap::GetElements();
        $service->namespaceMap = FileTransferClassMap::GetNamespaces();
        return $service;
    }
}
