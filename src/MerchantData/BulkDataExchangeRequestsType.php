<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BulkDataExchangeRequestsType
 *
 * Container for Bulk Data Exchange Requests.
 * XSD Type: BulkDataExchangeRequestsType
 */
class BulkDataExchangeRequestsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Defines default or required values for requests in the payload.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MerchantDataRequestHeaderType $header
     */
    private $header = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequestType[] $addFixedPriceItemRequest
     */
    private $addFixedPriceItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AddItemRequestType[] $addItemRequest
     */
    private $addItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemRequestType[] $endFixedPriceItemRequest
     */
    private $endFixedPriceItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\EndItemRequestType[] $endItemRequest
     */
    private $endItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\OrderAckRequestType[] $orderAckRequest
     */
    private $orderAckRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemRequestType[] $relistFixedPriceItemRequest
     */
    private $relistFixedPriceItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\RelistItemRequestType[] $relistItemRequest
     */
    private $relistItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemRequestType[] $reviseFixedPriceItemRequest
     */
    private $reviseFixedPriceItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusRequestType[] $reviseInventoryStatusRequest
     */
    private $reviseInventoryStatusRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\ReviseItemRequestType[] $reviseItemRequest
     */
    private $reviseItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoRequestType[] $setShipmentTrackingInfoRequest
     */
    private $setShipmentTrackingInfoRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesRequestType[] $uploadSiteHostedPicturesRequest
     */
    private $uploadSiteHostedPicturesRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemRequestType[] $verifyAddFixedPriceItemRequest
     */
    private $verifyAddFixedPriceItemRequest = [
        
    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\VerifyAddItemRequestType[] $verifyAddItemRequest
     */
    private $verifyAddItemRequest = [
        
    ];

    /**
     * Gets as header
     *
     * Defines default or required values for requests in the payload.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MerchantDataRequestHeaderType
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * Defines default or required values for requests in the payload.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MerchantDataRequestHeaderType $header
     * @return self
     */
    public function setHeader(\Nogrod\eBaySDK\MerchantData\MerchantDataRequestHeaderType $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Adds as addFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequestType $addFixedPriceItemRequest
     */
    public function addToAddFixedPriceItemRequest(\Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequestType $addFixedPriceItemRequest)
    {
        $this->addFixedPriceItemRequest[] = $addFixedPriceItemRequest;
        return $this;
    }

    /**
     * isset addFixedPriceItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddFixedPriceItemRequest($index)
    {
        return isset($this->addFixedPriceItemRequest[$index]);
    }

    /**
     * unset addFixedPriceItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddFixedPriceItemRequest($index)
    {
        unset($this->addFixedPriceItemRequest[$index]);
    }

    /**
     * Gets as addFixedPriceItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequestType[]
     */
    public function getAddFixedPriceItemRequest()
    {
        return $this->addFixedPriceItemRequest;
    }

    /**
     * Sets a new addFixedPriceItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequestType[] $addFixedPriceItemRequest
     * @return self
     */
    public function setAddFixedPriceItemRequest(array $addFixedPriceItemRequest)
    {
        $this->addFixedPriceItemRequest = $addFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as addItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AddItemRequestType $addItemRequest
     */
    public function addToAddItemRequest(\Nogrod\eBaySDK\MerchantData\AddItemRequestType $addItemRequest)
    {
        $this->addItemRequest[] = $addItemRequest;
        return $this;
    }

    /**
     * isset addItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddItemRequest($index)
    {
        return isset($this->addItemRequest[$index]);
    }

    /**
     * unset addItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddItemRequest($index)
    {
        unset($this->addItemRequest[$index]);
    }

    /**
     * Gets as addItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddItemRequestType[]
     */
    public function getAddItemRequest()
    {
        return $this->addItemRequest;
    }

    /**
     * Sets a new addItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddItemRequestType[] $addItemRequest
     * @return self
     */
    public function setAddItemRequest(array $addItemRequest)
    {
        $this->addItemRequest = $addItemRequest;
        return $this;
    }

    /**
     * Adds as endFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemRequestType $endFixedPriceItemRequest
     */
    public function addToEndFixedPriceItemRequest(\Nogrod\eBaySDK\MerchantData\EndFixedPriceItemRequestType $endFixedPriceItemRequest)
    {
        $this->endFixedPriceItemRequest[] = $endFixedPriceItemRequest;
        return $this;
    }

    /**
     * isset endFixedPriceItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndFixedPriceItemRequest($index)
    {
        return isset($this->endFixedPriceItemRequest[$index]);
    }

    /**
     * unset endFixedPriceItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndFixedPriceItemRequest($index)
    {
        unset($this->endFixedPriceItemRequest[$index]);
    }

    /**
     * Gets as endFixedPriceItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemRequestType[]
     */
    public function getEndFixedPriceItemRequest()
    {
        return $this->endFixedPriceItemRequest;
    }

    /**
     * Sets a new endFixedPriceItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemRequestType[] $endFixedPriceItemRequest
     * @return self
     */
    public function setEndFixedPriceItemRequest(array $endFixedPriceItemRequest)
    {
        $this->endFixedPriceItemRequest = $endFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as endItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\EndItemRequestType $endItemRequest
     */
    public function addToEndItemRequest(\Nogrod\eBaySDK\MerchantData\EndItemRequestType $endItemRequest)
    {
        $this->endItemRequest[] = $endItemRequest;
        return $this;
    }

    /**
     * isset endItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndItemRequest($index)
    {
        return isset($this->endItemRequest[$index]);
    }

    /**
     * unset endItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndItemRequest($index)
    {
        unset($this->endItemRequest[$index]);
    }

    /**
     * Gets as endItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\EndItemRequestType[]
     */
    public function getEndItemRequest()
    {
        return $this->endItemRequest;
    }

    /**
     * Sets a new endItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\EndItemRequestType[] $endItemRequest
     * @return self
     */
    public function setEndItemRequest(array $endItemRequest)
    {
        $this->endItemRequest = $endItemRequest;
        return $this;
    }

    /**
     * Adds as orderAckRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderAckRequestType $orderAckRequest
     */
    public function addToOrderAckRequest(\Nogrod\eBaySDK\MerchantData\OrderAckRequestType $orderAckRequest)
    {
        $this->orderAckRequest[] = $orderAckRequest;
        return $this;
    }

    /**
     * isset orderAckRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderAckRequest($index)
    {
        return isset($this->orderAckRequest[$index]);
    }

    /**
     * unset orderAckRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderAckRequest($index)
    {
        unset($this->orderAckRequest[$index]);
    }

    /**
     * Gets as orderAckRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderAckRequestType[]
     */
    public function getOrderAckRequest()
    {
        return $this->orderAckRequest;
    }

    /**
     * Sets a new orderAckRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderAckRequestType[] $orderAckRequest
     * @return self
     */
    public function setOrderAckRequest(array $orderAckRequest)
    {
        $this->orderAckRequest = $orderAckRequest;
        return $this;
    }

    /**
     * Adds as relistFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest
     */
    public function addToRelistFixedPriceItemRequest(\Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest)
    {
        $this->relistFixedPriceItemRequest[] = $relistFixedPriceItemRequest;
        return $this;
    }

    /**
     * isset relistFixedPriceItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelistFixedPriceItemRequest($index)
    {
        return isset($this->relistFixedPriceItemRequest[$index]);
    }

    /**
     * unset relistFixedPriceItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelistFixedPriceItemRequest($index)
    {
        unset($this->relistFixedPriceItemRequest[$index]);
    }

    /**
     * Gets as relistFixedPriceItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemRequestType[]
     */
    public function getRelistFixedPriceItemRequest()
    {
        return $this->relistFixedPriceItemRequest;
    }

    /**
     * Sets a new relistFixedPriceItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemRequestType[] $relistFixedPriceItemRequest
     * @return self
     */
    public function setRelistFixedPriceItemRequest(array $relistFixedPriceItemRequest)
    {
        $this->relistFixedPriceItemRequest = $relistFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as relistItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\RelistItemRequestType $relistItemRequest
     */
    public function addToRelistItemRequest(\Nogrod\eBaySDK\MerchantData\RelistItemRequestType $relistItemRequest)
    {
        $this->relistItemRequest[] = $relistItemRequest;
        return $this;
    }

    /**
     * isset relistItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelistItemRequest($index)
    {
        return isset($this->relistItemRequest[$index]);
    }

    /**
     * unset relistItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelistItemRequest($index)
    {
        unset($this->relistItemRequest[$index]);
    }

    /**
     * Gets as relistItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\RelistItemRequestType[]
     */
    public function getRelistItemRequest()
    {
        return $this->relistItemRequest;
    }

    /**
     * Sets a new relistItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\RelistItemRequestType[] $relistItemRequest
     * @return self
     */
    public function setRelistItemRequest(array $relistItemRequest)
    {
        $this->relistItemRequest = $relistItemRequest;
        return $this;
    }

    /**
     * Adds as reviseFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest
     */
    public function addToReviseFixedPriceItemRequest(\Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest)
    {
        $this->reviseFixedPriceItemRequest[] = $reviseFixedPriceItemRequest;
        return $this;
    }

    /**
     * isset reviseFixedPriceItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviseFixedPriceItemRequest($index)
    {
        return isset($this->reviseFixedPriceItemRequest[$index]);
    }

    /**
     * unset reviseFixedPriceItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviseFixedPriceItemRequest($index)
    {
        unset($this->reviseFixedPriceItemRequest[$index]);
    }

    /**
     * Gets as reviseFixedPriceItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemRequestType[]
     */
    public function getReviseFixedPriceItemRequest()
    {
        return $this->reviseFixedPriceItemRequest;
    }

    /**
     * Sets a new reviseFixedPriceItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemRequestType[] $reviseFixedPriceItemRequest
     * @return self
     */
    public function setReviseFixedPriceItemRequest(array $reviseFixedPriceItemRequest)
    {
        $this->reviseFixedPriceItemRequest = $reviseFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as reviseInventoryStatusRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest
     */
    public function addToReviseInventoryStatusRequest(\Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest)
    {
        $this->reviseInventoryStatusRequest[] = $reviseInventoryStatusRequest;
        return $this;
    }

    /**
     * isset reviseInventoryStatusRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviseInventoryStatusRequest($index)
    {
        return isset($this->reviseInventoryStatusRequest[$index]);
    }

    /**
     * unset reviseInventoryStatusRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviseInventoryStatusRequest($index)
    {
        unset($this->reviseInventoryStatusRequest[$index]);
    }

    /**
     * Gets as reviseInventoryStatusRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusRequestType[]
     */
    public function getReviseInventoryStatusRequest()
    {
        return $this->reviseInventoryStatusRequest;
    }

    /**
     * Sets a new reviseInventoryStatusRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusRequestType[] $reviseInventoryStatusRequest
     * @return self
     */
    public function setReviseInventoryStatusRequest(array $reviseInventoryStatusRequest)
    {
        $this->reviseInventoryStatusRequest = $reviseInventoryStatusRequest;
        return $this;
    }

    /**
     * Adds as reviseItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ReviseItemRequestType $reviseItemRequest
     */
    public function addToReviseItemRequest(\Nogrod\eBaySDK\MerchantData\ReviseItemRequestType $reviseItemRequest)
    {
        $this->reviseItemRequest[] = $reviseItemRequest;
        return $this;
    }

    /**
     * isset reviseItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviseItemRequest($index)
    {
        return isset($this->reviseItemRequest[$index]);
    }

    /**
     * unset reviseItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviseItemRequest($index)
    {
        unset($this->reviseItemRequest[$index]);
    }

    /**
     * Gets as reviseItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReviseItemRequestType[]
     */
    public function getReviseItemRequest()
    {
        return $this->reviseItemRequest;
    }

    /**
     * Sets a new reviseItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseItemRequestType[] $reviseItemRequest
     * @return self
     */
    public function setReviseItemRequest(array $reviseItemRequest)
    {
        $this->reviseItemRequest = $reviseItemRequest;
        return $this;
    }

    /**
     * Adds as setShipmentTrackingInfoRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoRequestType $setShipmentTrackingInfoRequest
     */
    public function addToSetShipmentTrackingInfoRequest(\Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoRequestType $setShipmentTrackingInfoRequest)
    {
        $this->setShipmentTrackingInfoRequest[] = $setShipmentTrackingInfoRequest;
        return $this;
    }

    /**
     * isset setShipmentTrackingInfoRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSetShipmentTrackingInfoRequest($index)
    {
        return isset($this->setShipmentTrackingInfoRequest[$index]);
    }

    /**
     * unset setShipmentTrackingInfoRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSetShipmentTrackingInfoRequest($index)
    {
        unset($this->setShipmentTrackingInfoRequest[$index]);
    }

    /**
     * Gets as setShipmentTrackingInfoRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoRequestType[]
     */
    public function getSetShipmentTrackingInfoRequest()
    {
        return $this->setShipmentTrackingInfoRequest;
    }

    /**
     * Sets a new setShipmentTrackingInfoRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoRequestType[] $setShipmentTrackingInfoRequest
     * @return self
     */
    public function setSetShipmentTrackingInfoRequest(array $setShipmentTrackingInfoRequest)
    {
        $this->setShipmentTrackingInfoRequest = $setShipmentTrackingInfoRequest;
        return $this;
    }

    /**
     * Adds as uploadSiteHostedPicturesRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesRequestType $uploadSiteHostedPicturesRequest
     */
    public function addToUploadSiteHostedPicturesRequest(\Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesRequestType $uploadSiteHostedPicturesRequest)
    {
        $this->uploadSiteHostedPicturesRequest[] = $uploadSiteHostedPicturesRequest;
        return $this;
    }

    /**
     * isset uploadSiteHostedPicturesRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUploadSiteHostedPicturesRequest($index)
    {
        return isset($this->uploadSiteHostedPicturesRequest[$index]);
    }

    /**
     * unset uploadSiteHostedPicturesRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUploadSiteHostedPicturesRequest($index)
    {
        unset($this->uploadSiteHostedPicturesRequest[$index]);
    }

    /**
     * Gets as uploadSiteHostedPicturesRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesRequestType[]
     */
    public function getUploadSiteHostedPicturesRequest()
    {
        return $this->uploadSiteHostedPicturesRequest;
    }

    /**
     * Sets a new uploadSiteHostedPicturesRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesRequestType[] $uploadSiteHostedPicturesRequest
     * @return self
     */
    public function setUploadSiteHostedPicturesRequest(array $uploadSiteHostedPicturesRequest)
    {
        $this->uploadSiteHostedPicturesRequest = $uploadSiteHostedPicturesRequest;
        return $this;
    }

    /**
     * Adds as verifyAddFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest
     */
    public function addToVerifyAddFixedPriceItemRequest(\Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest)
    {
        $this->verifyAddFixedPriceItemRequest[] = $verifyAddFixedPriceItemRequest;
        return $this;
    }

    /**
     * isset verifyAddFixedPriceItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerifyAddFixedPriceItemRequest($index)
    {
        return isset($this->verifyAddFixedPriceItemRequest[$index]);
    }

    /**
     * unset verifyAddFixedPriceItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerifyAddFixedPriceItemRequest($index)
    {
        unset($this->verifyAddFixedPriceItemRequest[$index]);
    }

    /**
     * Gets as verifyAddFixedPriceItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemRequestType[]
     */
    public function getVerifyAddFixedPriceItemRequest()
    {
        return $this->verifyAddFixedPriceItemRequest;
    }

    /**
     * Sets a new verifyAddFixedPriceItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemRequestType[] $verifyAddFixedPriceItemRequest
     * @return self
     */
    public function setVerifyAddFixedPriceItemRequest(array $verifyAddFixedPriceItemRequest)
    {
        $this->verifyAddFixedPriceItemRequest = $verifyAddFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as verifyAddItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddItemRequestType $verifyAddItemRequest
     */
    public function addToVerifyAddItemRequest(\Nogrod\eBaySDK\MerchantData\VerifyAddItemRequestType $verifyAddItemRequest)
    {
        $this->verifyAddItemRequest[] = $verifyAddItemRequest;
        return $this;
    }

    /**
     * isset verifyAddItemRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerifyAddItemRequest($index)
    {
        return isset($this->verifyAddItemRequest[$index]);
    }

    /**
     * unset verifyAddItemRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerifyAddItemRequest($index)
    {
        unset($this->verifyAddItemRequest[$index]);
    }

    /**
     * Gets as verifyAddItemRequest
     *
     * @return \Nogrod\eBaySDK\MerchantData\VerifyAddItemRequestType[]
     */
    public function getVerifyAddItemRequest()
    {
        return $this->verifyAddItemRequest;
    }

    /**
     * Sets a new verifyAddItemRequest
     *
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddItemRequestType[] $verifyAddItemRequest
     * @return self
     */
    public function setVerifyAddItemRequest(array $verifyAddItemRequest)
    {
        $this->verifyAddItemRequest = $verifyAddItemRequest;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getHeader();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Header", $value);
        }
        $value = $this->getAddFixedPriceItemRequest();
        if (null !== $value && !empty($this->getAddFixedPriceItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["AddFixedPriceItemRequest" => $v];
            }, $value));
        }
        $value = $this->getAddItemRequest();
        if (null !== $value && !empty($this->getAddItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["AddItemRequest" => $v];
            }, $value));
        }
        $value = $this->getEndFixedPriceItemRequest();
        if (null !== $value && !empty($this->getEndFixedPriceItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["EndFixedPriceItemRequest" => $v];
            }, $value));
        }
        $value = $this->getEndItemRequest();
        if (null !== $value && !empty($this->getEndItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["EndItemRequest" => $v];
            }, $value));
        }
        $value = $this->getOrderAckRequest();
        if (null !== $value && !empty($this->getOrderAckRequest())) {
            $writer->write(array_map(function ($v) {
                return ["OrderAckRequest" => $v];
            }, $value));
        }
        $value = $this->getRelistFixedPriceItemRequest();
        if (null !== $value && !empty($this->getRelistFixedPriceItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["RelistFixedPriceItemRequest" => $v];
            }, $value));
        }
        $value = $this->getRelistItemRequest();
        if (null !== $value && !empty($this->getRelistItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["RelistItemRequest" => $v];
            }, $value));
        }
        $value = $this->getReviseFixedPriceItemRequest();
        if (null !== $value && !empty($this->getReviseFixedPriceItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["ReviseFixedPriceItemRequest" => $v];
            }, $value));
        }
        $value = $this->getReviseInventoryStatusRequest();
        if (null !== $value && !empty($this->getReviseInventoryStatusRequest())) {
            $writer->write(array_map(function ($v) {
                return ["ReviseInventoryStatusRequest" => $v];
            }, $value));
        }
        $value = $this->getReviseItemRequest();
        if (null !== $value && !empty($this->getReviseItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["ReviseItemRequest" => $v];
            }, $value));
        }
        $value = $this->getSetShipmentTrackingInfoRequest();
        if (null !== $value && !empty($this->getSetShipmentTrackingInfoRequest())) {
            $writer->write(array_map(function ($v) {
                return ["SetShipmentTrackingInfoRequest" => $v];
            }, $value));
        }
        $value = $this->getUploadSiteHostedPicturesRequest();
        if (null !== $value && !empty($this->getUploadSiteHostedPicturesRequest())) {
            $writer->write(array_map(function ($v) {
                return ["UploadSiteHostedPicturesRequest" => $v];
            }, $value));
        }
        $value = $this->getVerifyAddFixedPriceItemRequest();
        if (null !== $value && !empty($this->getVerifyAddFixedPriceItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["VerifyAddFixedPriceItemRequest" => $v];
            }, $value));
        }
        $value = $this->getVerifyAddItemRequest();
        if (null !== $value && !empty($this->getVerifyAddItemRequest())) {
            $writer->write(array_map(function ($v) {
                return ["VerifyAddItemRequest" => $v];
            }, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Header');
        if (null !== $value) {
            $this->setHeader(\Nogrod\eBaySDK\MerchantData\MerchantDataRequestHeaderType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddFixedPriceItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setAddFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setAddItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AddItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndFixedPriceItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setEndFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setEndItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\EndItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderAckRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderAckRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\OrderAckRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistFixedPriceItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setRelistFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setRelistItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\RelistItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseFixedPriceItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setReviseFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseInventoryStatusRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setReviseInventoryStatusRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setReviseItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ReviseItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SetShipmentTrackingInfoRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setSetShipmentTrackingInfoRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UploadSiteHostedPicturesRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setUploadSiteHostedPicturesRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\UploadSiteHostedPicturesRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddFixedPriceItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setVerifyAddFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddItemRequest', true);
        if (null !== $value && !empty($value)) {
            $this->setVerifyAddItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\VerifyAddItemRequestType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
