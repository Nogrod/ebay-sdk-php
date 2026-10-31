<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BulkDataExchangeRequestsType
 *
 *
 * XSD Type: BulkDataExchangeRequestsType
 */
class BulkDataExchangeRequestsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * @var \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType $header
     */
    private $header = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType $merchantDataRequestHeader
     */
    private $merchantDataRequestHeader = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest[] $addFixedPriceItemRequest
     */
    private $addFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest[] $endFixedPriceItemRequest
     */
    private $endFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest[] $reviseFixedPriceItemRequest
     */
    private $reviseFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest[] $relistFixedPriceItemRequest
     */
    private $relistFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest[] $verifyAddFixedPriceItemRequest
     */
    private $verifyAddFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\AddItemRequest[] $addItemRequest
     */
    private $addItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndItemRequest[] $endItemRequest
     */
    private $endItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseItemRequest[] $reviseItemRequest
     */
    private $reviseItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistItemRequest[] $relistItemRequest
     */
    private $relistItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddItemRequest[] $verifyAddItemRequest
     */
    private $verifyAddItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest[] $reviseInventoryStatusRequest
     */
    private $reviseInventoryStatusRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\OrderAckRequest[] $orderAckRequest
     */
    private $orderAckRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequest[] $setShipmentTrackingInfoRequest
     */
    private $setShipmentTrackingInfoRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ActiveInventoryReportRequest[] $activeInventoryReportRequest
     */
    private $activeInventoryReportRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\OrderReportRequest[] $orderReportRequest
     */
    private $orderReportRequest = [

    ];

    /**
     * Gets as header
     *
     * @return \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType $header
     * @return self
     */
    public function setHeader(\Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Gets as merchantDataRequestHeader
     *
     * @return \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType
     */
    public function getMerchantDataRequestHeader()
    {
        return $this->merchantDataRequestHeader;
    }

    /**
     * Sets a new merchantDataRequestHeader
     *
     * @param \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType $merchantDataRequestHeader
     * @return self
     */
    public function setMerchantDataRequestHeader(\Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType $merchantDataRequestHeader)
    {
        $this->merchantDataRequestHeader = $merchantDataRequestHeader;
        return $this;
    }

    /**
     * Adds as addFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest $addFixedPriceItemRequest
     */
    public function addToAddFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest $addFixedPriceItemRequest)
    {
        $this->addFixedPriceItemRequest ??= [];
        if (!is_array($this->addFixedPriceItemRequest)) {
            throw new \LogicException('addFixedPriceItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest>
     */
    public function getAddFixedPriceItemRequest()
    {
        return $this->addFixedPriceItemRequest;
    }

    /**
     * Sets a new addFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest> $addFixedPriceItemRequest
     * @return self
     */
    public function setAddFixedPriceItemRequest(iterable $addFixedPriceItemRequest)
    {
        $this->addFixedPriceItemRequest = $addFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as endFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest $endFixedPriceItemRequest
     */
    public function addToEndFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest $endFixedPriceItemRequest)
    {
        $this->endFixedPriceItemRequest ??= [];
        if (!is_array($this->endFixedPriceItemRequest)) {
            throw new \LogicException('endFixedPriceItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest>
     */
    public function getEndFixedPriceItemRequest()
    {
        return $this->endFixedPriceItemRequest;
    }

    /**
     * Sets a new endFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest> $endFixedPriceItemRequest
     * @return self
     */
    public function setEndFixedPriceItemRequest(iterable $endFixedPriceItemRequest)
    {
        $this->endFixedPriceItemRequest = $endFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as reviseFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest $reviseFixedPriceItemRequest
     */
    public function addToReviseFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest $reviseFixedPriceItemRequest)
    {
        $this->reviseFixedPriceItemRequest ??= [];
        if (!is_array($this->reviseFixedPriceItemRequest)) {
            throw new \LogicException('reviseFixedPriceItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest>
     */
    public function getReviseFixedPriceItemRequest()
    {
        return $this->reviseFixedPriceItemRequest;
    }

    /**
     * Sets a new reviseFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest> $reviseFixedPriceItemRequest
     * @return self
     */
    public function setReviseFixedPriceItemRequest(iterable $reviseFixedPriceItemRequest)
    {
        $this->reviseFixedPriceItemRequest = $reviseFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as relistFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest $relistFixedPriceItemRequest
     */
    public function addToRelistFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest $relistFixedPriceItemRequest)
    {
        $this->relistFixedPriceItemRequest ??= [];
        if (!is_array($this->relistFixedPriceItemRequest)) {
            throw new \LogicException('relistFixedPriceItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest>
     */
    public function getRelistFixedPriceItemRequest()
    {
        return $this->relistFixedPriceItemRequest;
    }

    /**
     * Sets a new relistFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest> $relistFixedPriceItemRequest
     * @return self
     */
    public function setRelistFixedPriceItemRequest(iterable $relistFixedPriceItemRequest)
    {
        $this->relistFixedPriceItemRequest = $relistFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as verifyAddFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest $verifyAddFixedPriceItemRequest
     */
    public function addToVerifyAddFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest $verifyAddFixedPriceItemRequest)
    {
        $this->verifyAddFixedPriceItemRequest ??= [];
        if (!is_array($this->verifyAddFixedPriceItemRequest)) {
            throw new \LogicException('verifyAddFixedPriceItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest>
     */
    public function getVerifyAddFixedPriceItemRequest()
    {
        return $this->verifyAddFixedPriceItemRequest;
    }

    /**
     * Sets a new verifyAddFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest> $verifyAddFixedPriceItemRequest
     * @return self
     */
    public function setVerifyAddFixedPriceItemRequest(iterable $verifyAddFixedPriceItemRequest)
    {
        $this->verifyAddFixedPriceItemRequest = $verifyAddFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as addItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemRequest $addItemRequest
     */
    public function addToAddItemRequest(\Nogrod\eBaySDK\Trading\AddItemRequest $addItemRequest)
    {
        $this->addItemRequest ??= [];
        if (!is_array($this->addItemRequest)) {
            throw new \LogicException('addItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AddItemRequest>
     */
    public function getAddItemRequest()
    {
        return $this->addItemRequest;
    }

    /**
     * Sets a new addItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddItemRequest> $addItemRequest
     * @return self
     */
    public function setAddItemRequest(iterable $addItemRequest)
    {
        $this->addItemRequest = $addItemRequest;
        return $this;
    }

    /**
     * Adds as endItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndItemRequest $endItemRequest
     */
    public function addToEndItemRequest(\Nogrod\eBaySDK\Trading\EndItemRequest $endItemRequest)
    {
        $this->endItemRequest ??= [];
        if (!is_array($this->endItemRequest)) {
            throw new \LogicException('endItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\EndItemRequest>
     */
    public function getEndItemRequest()
    {
        return $this->endItemRequest;
    }

    /**
     * Sets a new endItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndItemRequest> $endItemRequest
     * @return self
     */
    public function setEndItemRequest(iterable $endItemRequest)
    {
        $this->endItemRequest = $endItemRequest;
        return $this;
    }

    /**
     * Adds as reviseItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseItemRequest $reviseItemRequest
     */
    public function addToReviseItemRequest(\Nogrod\eBaySDK\Trading\ReviseItemRequest $reviseItemRequest)
    {
        $this->reviseItemRequest ??= [];
        if (!is_array($this->reviseItemRequest)) {
            throw new \LogicException('reviseItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseItemRequest>
     */
    public function getReviseItemRequest()
    {
        return $this->reviseItemRequest;
    }

    /**
     * Sets a new reviseItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseItemRequest> $reviseItemRequest
     * @return self
     */
    public function setReviseItemRequest(iterable $reviseItemRequest)
    {
        $this->reviseItemRequest = $reviseItemRequest;
        return $this;
    }

    /**
     * Adds as relistItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistItemRequest $relistItemRequest
     */
    public function addToRelistItemRequest(\Nogrod\eBaySDK\Trading\RelistItemRequest $relistItemRequest)
    {
        $this->relistItemRequest ??= [];
        if (!is_array($this->relistItemRequest)) {
            throw new \LogicException('relistItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistItemRequest>
     */
    public function getRelistItemRequest()
    {
        return $this->relistItemRequest;
    }

    /**
     * Sets a new relistItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistItemRequest> $relistItemRequest
     * @return self
     */
    public function setRelistItemRequest(iterable $relistItemRequest)
    {
        $this->relistItemRequest = $relistItemRequest;
        return $this;
    }

    /**
     * Adds as verifyAddItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddItemRequest $verifyAddItemRequest
     */
    public function addToVerifyAddItemRequest(\Nogrod\eBaySDK\Trading\VerifyAddItemRequest $verifyAddItemRequest)
    {
        $this->verifyAddItemRequest ??= [];
        if (!is_array($this->verifyAddItemRequest)) {
            throw new \LogicException('verifyAddItemRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemRequest>
     */
    public function getVerifyAddItemRequest()
    {
        return $this->verifyAddItemRequest;
    }

    /**
     * Sets a new verifyAddItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemRequest> $verifyAddItemRequest
     * @return self
     */
    public function setVerifyAddItemRequest(iterable $verifyAddItemRequest)
    {
        $this->verifyAddItemRequest = $verifyAddItemRequest;
        return $this;
    }

    /**
     * Adds as reviseInventoryStatusRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest $reviseInventoryStatusRequest
     */
    public function addToReviseInventoryStatusRequest(\Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest $reviseInventoryStatusRequest)
    {
        $this->reviseInventoryStatusRequest ??= [];
        if (!is_array($this->reviseInventoryStatusRequest)) {
            throw new \LogicException('reviseInventoryStatusRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest>
     */
    public function getReviseInventoryStatusRequest()
    {
        return $this->reviseInventoryStatusRequest;
    }

    /**
     * Sets a new reviseInventoryStatusRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest> $reviseInventoryStatusRequest
     * @return self
     */
    public function setReviseInventoryStatusRequest(iterable $reviseInventoryStatusRequest)
    {
        $this->reviseInventoryStatusRequest = $reviseInventoryStatusRequest;
        return $this;
    }

    /**
     * Adds as orderAckRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderAckRequest $orderAckRequest
     */
    public function addToOrderAckRequest(\Nogrod\eBaySDK\Trading\OrderAckRequest $orderAckRequest)
    {
        $this->orderAckRequest ??= [];
        if (!is_array($this->orderAckRequest)) {
            throw new \LogicException('orderAckRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderAckRequest>
     */
    public function getOrderAckRequest()
    {
        return $this->orderAckRequest;
    }

    /**
     * Sets a new orderAckRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderAckRequest> $orderAckRequest
     * @return self
     */
    public function setOrderAckRequest(iterable $orderAckRequest)
    {
        $this->orderAckRequest = $orderAckRequest;
        return $this;
    }

    /**
     * Adds as setShipmentTrackingInfoRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequest $setShipmentTrackingInfoRequest
     */
    public function addToSetShipmentTrackingInfoRequest(\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequest $setShipmentTrackingInfoRequest)
    {
        $this->setShipmentTrackingInfoRequest ??= [];
        if (!is_array($this->setShipmentTrackingInfoRequest)) {
            throw new \LogicException('setShipmentTrackingInfoRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequest>
     */
    public function getSetShipmentTrackingInfoRequest()
    {
        return $this->setShipmentTrackingInfoRequest;
    }

    /**
     * Sets a new setShipmentTrackingInfoRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequest> $setShipmentTrackingInfoRequest
     * @return self
     */
    public function setSetShipmentTrackingInfoRequest(iterable $setShipmentTrackingInfoRequest)
    {
        $this->setShipmentTrackingInfoRequest = $setShipmentTrackingInfoRequest;
        return $this;
    }

    /**
     * Adds as activeInventoryReportRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ActiveInventoryReportRequest $activeInventoryReportRequest
     */
    public function addToActiveInventoryReportRequest(\Nogrod\eBaySDK\Trading\ActiveInventoryReportRequest $activeInventoryReportRequest)
    {
        $this->activeInventoryReportRequest ??= [];
        if (!is_array($this->activeInventoryReportRequest)) {
            throw new \LogicException('activeInventoryReportRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->activeInventoryReportRequest[] = $activeInventoryReportRequest;
        return $this;
    }

    /**
     * isset activeInventoryReportRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActiveInventoryReportRequest($index)
    {
        return isset($this->activeInventoryReportRequest[$index]);
    }

    /**
     * unset activeInventoryReportRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActiveInventoryReportRequest($index)
    {
        unset($this->activeInventoryReportRequest[$index]);
    }

    /**
     * Gets as activeInventoryReportRequest
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ActiveInventoryReportRequest>
     */
    public function getActiveInventoryReportRequest()
    {
        return $this->activeInventoryReportRequest;
    }

    /**
     * Sets a new activeInventoryReportRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ActiveInventoryReportRequest> $activeInventoryReportRequest
     * @return self
     */
    public function setActiveInventoryReportRequest(iterable $activeInventoryReportRequest)
    {
        $this->activeInventoryReportRequest = $activeInventoryReportRequest;
        return $this;
    }

    /**
     * Adds as orderReportRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderReportRequest $orderReportRequest
     */
    public function addToOrderReportRequest(\Nogrod\eBaySDK\Trading\OrderReportRequest $orderReportRequest)
    {
        $this->orderReportRequest ??= [];
        if (!is_array($this->orderReportRequest)) {
            throw new \LogicException('orderReportRequest is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->orderReportRequest[] = $orderReportRequest;
        return $this;
    }

    /**
     * isset orderReportRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderReportRequest($index)
    {
        return isset($this->orderReportRequest[$index]);
    }

    /**
     * unset orderReportRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderReportRequest($index)
    {
        unset($this->orderReportRequest[$index]);
    }

    /**
     * Gets as orderReportRequest
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderReportRequest>
     */
    public function getOrderReportRequest()
    {
        return $this->orderReportRequest;
    }

    /**
     * Sets a new orderReportRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderReportRequest> $orderReportRequest
     * @return self
     */
    public function setOrderReportRequest(iterable $orderReportRequest)
    {
        $this->orderReportRequest = $orderReportRequest;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->header;
        if (null !== $value) {
            $writer->startElementNs(null, 'Header', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->merchantDataRequestHeader;
        if (null !== $value) {
            $writer->startElementNs(null, 'MerchantDataRequestHeader', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->addFixedPriceItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddFixedPriceItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->endFixedPriceItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'EndFixedPriceItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->reviseFixedPriceItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReviseFixedPriceItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->relistFixedPriceItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'RelistFixedPriceItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->verifyAddFixedPriceItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'VerifyAddFixedPriceItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->addItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->endItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'EndItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->reviseItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReviseItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->relistItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'RelistItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->verifyAddItemRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'VerifyAddItemRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->reviseInventoryStatusRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReviseInventoryStatusRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->orderAckRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'OrderAckRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->setShipmentTrackingInfoRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'SetShipmentTrackingInfoRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->activeInventoryReportRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ActiveInventoryReportRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->orderReportRequest;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'OrderReportRequest', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BulkDataExchangeRequestsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->addFixedPriceItemRequest = [];
        $this->endFixedPriceItemRequest = [];
        $this->reviseFixedPriceItemRequest = [];
        $this->relistFixedPriceItemRequest = [];
        $this->verifyAddFixedPriceItemRequest = [];
        $this->addItemRequest = [];
        $this->endItemRequest = [];
        $this->reviseItemRequest = [];
        $this->relistItemRequest = [];
        $this->verifyAddItemRequest = [];
        $this->reviseInventoryStatusRequest = [];
        $this->orderAckRequest = [];
        $this->setShipmentTrackingInfoRequest = [];
        $this->activeInventoryReportRequest = [];
        $this->orderReportRequest = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Header':
                    $this->header = \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType::xmlRead($reader);
                    return true;
                case 'MerchantDataRequestHeader':
                    $this->merchantDataRequestHeader = \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType::xmlRead($reader);
                    return true;
                case 'AddFixedPriceItemRequest':
                    $this->addFixedPriceItemRequest[] = \Nogrod\eBaySDK\Trading\AddFixedPriceItemRequest::xmlRead($reader);
                    return true;
                case 'EndFixedPriceItemRequest':
                    $this->endFixedPriceItemRequest[] = \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequest::xmlRead($reader);
                    return true;
                case 'ReviseFixedPriceItemRequest':
                    $this->reviseFixedPriceItemRequest[] = \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequest::xmlRead($reader);
                    return true;
                case 'RelistFixedPriceItemRequest':
                    $this->relistFixedPriceItemRequest[] = \Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequest::xmlRead($reader);
                    return true;
                case 'VerifyAddFixedPriceItemRequest':
                    $this->verifyAddFixedPriceItemRequest[] = \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequest::xmlRead($reader);
                    return true;
                case 'AddItemRequest':
                    $this->addItemRequest[] = \Nogrod\eBaySDK\Trading\AddItemRequest::xmlRead($reader);
                    return true;
                case 'EndItemRequest':
                    $this->endItemRequest[] = \Nogrod\eBaySDK\Trading\EndItemRequest::xmlRead($reader);
                    return true;
                case 'ReviseItemRequest':
                    $this->reviseItemRequest[] = \Nogrod\eBaySDK\Trading\ReviseItemRequest::xmlRead($reader);
                    return true;
                case 'RelistItemRequest':
                    $this->relistItemRequest[] = \Nogrod\eBaySDK\Trading\RelistItemRequest::xmlRead($reader);
                    return true;
                case 'VerifyAddItemRequest':
                    $this->verifyAddItemRequest[] = \Nogrod\eBaySDK\Trading\VerifyAddItemRequest::xmlRead($reader);
                    return true;
                case 'ReviseInventoryStatusRequest':
                    $this->reviseInventoryStatusRequest[] = \Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequest::xmlRead($reader);
                    return true;
                case 'OrderAckRequest':
                    $this->orderAckRequest[] = \Nogrod\eBaySDK\Trading\OrderAckRequest::xmlRead($reader);
                    return true;
                case 'SetShipmentTrackingInfoRequest':
                    $this->setShipmentTrackingInfoRequest[] = \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequest::xmlRead($reader);
                    return true;
                case 'ActiveInventoryReportRequest':
                    $this->activeInventoryReportRequest[] = \Nogrod\eBaySDK\Trading\ActiveInventoryReportRequest::xmlRead($reader);
                    return true;
                case 'OrderReportRequest':
                    $this->orderReportRequest[] = \Nogrod\eBaySDK\Trading\OrderReportRequest::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Header'] = $this->header;
        $data['MerchantDataRequestHeader'] = $this->merchantDataRequestHeader;
        $data['AddFixedPriceItemRequest'] = Func::jsonList($this->addFixedPriceItemRequest);
        $data['EndFixedPriceItemRequest'] = Func::jsonList($this->endFixedPriceItemRequest);
        $data['ReviseFixedPriceItemRequest'] = Func::jsonList($this->reviseFixedPriceItemRequest);
        $data['RelistFixedPriceItemRequest'] = Func::jsonList($this->relistFixedPriceItemRequest);
        $data['VerifyAddFixedPriceItemRequest'] = Func::jsonList($this->verifyAddFixedPriceItemRequest);
        $data['AddItemRequest'] = Func::jsonList($this->addItemRequest);
        $data['EndItemRequest'] = Func::jsonList($this->endItemRequest);
        $data['ReviseItemRequest'] = Func::jsonList($this->reviseItemRequest);
        $data['RelistItemRequest'] = Func::jsonList($this->relistItemRequest);
        $data['VerifyAddItemRequest'] = Func::jsonList($this->verifyAddItemRequest);
        $data['ReviseInventoryStatusRequest'] = Func::jsonList($this->reviseInventoryStatusRequest);
        $data['OrderAckRequest'] = Func::jsonList($this->orderAckRequest);
        $data['SetShipmentTrackingInfoRequest'] = Func::jsonList($this->setShipmentTrackingInfoRequest);
        $data['ActiveInventoryReportRequest'] = Func::jsonList($this->activeInventoryReportRequest);
        $data['OrderReportRequest'] = Func::jsonList($this->orderReportRequest);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
