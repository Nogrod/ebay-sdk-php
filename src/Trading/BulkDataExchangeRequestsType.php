<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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
     * @var \Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType $header
     */
    private $header = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\AddFixedPriceItemRequestType[] $addFixedPriceItemRequest
     */
    private $addFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\AddItemRequestType[] $addItemRequest
     */
    private $addItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequestType[] $endFixedPriceItemRequest
     */
    private $endFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndItemRequestType[] $endItemRequest
     */
    private $endItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\OrderAckRequestType[] $orderAckRequest
     */
    private $orderAckRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequestType[] $relistFixedPriceItemRequest
     */
    private $relistFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistItemRequestType[] $relistItemRequest
     */
    private $relistItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequestType[] $reviseFixedPriceItemRequest
     */
    private $reviseFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequestType[] $reviseInventoryStatusRequest
     */
    private $reviseInventoryStatusRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseItemRequestType[] $reviseItemRequest
     */
    private $reviseItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequestType[] $setShipmentTrackingInfoRequest
     */
    private $setShipmentTrackingInfoRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequestType[] $verifyAddFixedPriceItemRequest
     */
    private $verifyAddFixedPriceItemRequest = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddItemRequestType[] $verifyAddItemRequest
     */
    private $verifyAddItemRequest = [

    ];

    /**
     * Gets as header
     *
     * Defines default or required values for requests in the payload.
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
     * Defines default or required values for requests in the payload.
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
     * Adds as addFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddFixedPriceItemRequestType $addFixedPriceItemRequest
     */
    public function addToAddFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\AddFixedPriceItemRequestType $addFixedPriceItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemRequestType>
     */
    public function getAddFixedPriceItemRequest()
    {
        return $this->addFixedPriceItemRequest;
    }

    /**
     * Sets a new addFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemRequestType> $addFixedPriceItemRequest
     * @return self
     */
    public function setAddFixedPriceItemRequest(iterable $addFixedPriceItemRequest)
    {
        $this->addFixedPriceItemRequest = $addFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as addItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemRequestType $addItemRequest
     */
    public function addToAddItemRequest(\Nogrod\eBaySDK\Trading\AddItemRequestType $addItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AddItemRequestType>
     */
    public function getAddItemRequest()
    {
        return $this->addItemRequest;
    }

    /**
     * Sets a new addItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddItemRequestType> $addItemRequest
     * @return self
     */
    public function setAddItemRequest(iterable $addItemRequest)
    {
        $this->addItemRequest = $addItemRequest;
        return $this;
    }

    /**
     * Adds as endFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequestType $endFixedPriceItemRequest
     */
    public function addToEndFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\EndFixedPriceItemRequestType $endFixedPriceItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemRequestType>
     */
    public function getEndFixedPriceItemRequest()
    {
        return $this->endFixedPriceItemRequest;
    }

    /**
     * Sets a new endFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemRequestType> $endFixedPriceItemRequest
     * @return self
     */
    public function setEndFixedPriceItemRequest(iterable $endFixedPriceItemRequest)
    {
        $this->endFixedPriceItemRequest = $endFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as endItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndItemRequestType $endItemRequest
     */
    public function addToEndItemRequest(\Nogrod\eBaySDK\Trading\EndItemRequestType $endItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\EndItemRequestType>
     */
    public function getEndItemRequest()
    {
        return $this->endItemRequest;
    }

    /**
     * Sets a new endItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndItemRequestType> $endItemRequest
     * @return self
     */
    public function setEndItemRequest(iterable $endItemRequest)
    {
        $this->endItemRequest = $endItemRequest;
        return $this;
    }

    /**
     * Adds as orderAckRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderAckRequestType $orderAckRequest
     */
    public function addToOrderAckRequest(\Nogrod\eBaySDK\Trading\OrderAckRequestType $orderAckRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderAckRequestType>
     */
    public function getOrderAckRequest()
    {
        return $this->orderAckRequest;
    }

    /**
     * Sets a new orderAckRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderAckRequestType> $orderAckRequest
     * @return self
     */
    public function setOrderAckRequest(iterable $orderAckRequest)
    {
        $this->orderAckRequest = $orderAckRequest;
        return $this;
    }

    /**
     * Adds as relistFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest
     */
    public function addToRelistFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequestType $relistFixedPriceItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequestType>
     */
    public function getRelistFixedPriceItemRequest()
    {
        return $this->relistFixedPriceItemRequest;
    }

    /**
     * Sets a new relistFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequestType> $relistFixedPriceItemRequest
     * @return self
     */
    public function setRelistFixedPriceItemRequest(iterable $relistFixedPriceItemRequest)
    {
        $this->relistFixedPriceItemRequest = $relistFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as relistItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistItemRequestType $relistItemRequest
     */
    public function addToRelistItemRequest(\Nogrod\eBaySDK\Trading\RelistItemRequestType $relistItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistItemRequestType>
     */
    public function getRelistItemRequest()
    {
        return $this->relistItemRequest;
    }

    /**
     * Sets a new relistItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistItemRequestType> $relistItemRequest
     * @return self
     */
    public function setRelistItemRequest(iterable $relistItemRequest)
    {
        $this->relistItemRequest = $relistItemRequest;
        return $this;
    }

    /**
     * Adds as reviseFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest
     */
    public function addToReviseFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequestType $reviseFixedPriceItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequestType>
     */
    public function getReviseFixedPriceItemRequest()
    {
        return $this->reviseFixedPriceItemRequest;
    }

    /**
     * Sets a new reviseFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequestType> $reviseFixedPriceItemRequest
     * @return self
     */
    public function setReviseFixedPriceItemRequest(iterable $reviseFixedPriceItemRequest)
    {
        $this->reviseFixedPriceItemRequest = $reviseFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as reviseInventoryStatusRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest
     */
    public function addToReviseInventoryStatusRequest(\Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequestType $reviseInventoryStatusRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequestType>
     */
    public function getReviseInventoryStatusRequest()
    {
        return $this->reviseInventoryStatusRequest;
    }

    /**
     * Sets a new reviseInventoryStatusRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequestType> $reviseInventoryStatusRequest
     * @return self
     */
    public function setReviseInventoryStatusRequest(iterable $reviseInventoryStatusRequest)
    {
        $this->reviseInventoryStatusRequest = $reviseInventoryStatusRequest;
        return $this;
    }

    /**
     * Adds as reviseItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseItemRequestType $reviseItemRequest
     */
    public function addToReviseItemRequest(\Nogrod\eBaySDK\Trading\ReviseItemRequestType $reviseItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseItemRequestType>
     */
    public function getReviseItemRequest()
    {
        return $this->reviseItemRequest;
    }

    /**
     * Sets a new reviseItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseItemRequestType> $reviseItemRequest
     * @return self
     */
    public function setReviseItemRequest(iterable $reviseItemRequest)
    {
        $this->reviseItemRequest = $reviseItemRequest;
        return $this;
    }

    /**
     * Adds as setShipmentTrackingInfoRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequestType $setShipmentTrackingInfoRequest
     */
    public function addToSetShipmentTrackingInfoRequest(\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequestType $setShipmentTrackingInfoRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequestType>
     */
    public function getSetShipmentTrackingInfoRequest()
    {
        return $this->setShipmentTrackingInfoRequest;
    }

    /**
     * Sets a new setShipmentTrackingInfoRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequestType> $setShipmentTrackingInfoRequest
     * @return self
     */
    public function setSetShipmentTrackingInfoRequest(iterable $setShipmentTrackingInfoRequest)
    {
        $this->setShipmentTrackingInfoRequest = $setShipmentTrackingInfoRequest;
        return $this;
    }

    /**
     * Adds as verifyAddFixedPriceItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest
     */
    public function addToVerifyAddFixedPriceItemRequest(\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequestType $verifyAddFixedPriceItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequestType>
     */
    public function getVerifyAddFixedPriceItemRequest()
    {
        return $this->verifyAddFixedPriceItemRequest;
    }

    /**
     * Sets a new verifyAddFixedPriceItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequestType> $verifyAddFixedPriceItemRequest
     * @return self
     */
    public function setVerifyAddFixedPriceItemRequest(iterable $verifyAddFixedPriceItemRequest)
    {
        $this->verifyAddFixedPriceItemRequest = $verifyAddFixedPriceItemRequest;
        return $this;
    }

    /**
     * Adds as verifyAddItemRequest
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddItemRequestType $verifyAddItemRequest
     */
    public function addToVerifyAddItemRequest(\Nogrod\eBaySDK\Trading\VerifyAddItemRequestType $verifyAddItemRequest)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemRequestType>
     */
    public function getVerifyAddItemRequest()
    {
        return $this->verifyAddItemRequest;
    }

    /**
     * Sets a new verifyAddItemRequest
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemRequestType> $verifyAddItemRequest
     * @return self
     */
    public function setVerifyAddItemRequest(iterable $verifyAddItemRequest)
    {
        $this->verifyAddItemRequest = $verifyAddItemRequest;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getHeader();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Header", $value);
        }
        $value = $this->getAddFixedPriceItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["AddFixedPriceItemRequest" => $v]]);
            }
        }
        $value = $this->getAddItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["AddItemRequest" => $v]]);
            }
        }
        $value = $this->getEndFixedPriceItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["EndFixedPriceItemRequest" => $v]]);
            }
        }
        $value = $this->getEndItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["EndItemRequest" => $v]]);
            }
        }
        $value = $this->getOrderAckRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["OrderAckRequest" => $v]]);
            }
        }
        $value = $this->getRelistFixedPriceItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["RelistFixedPriceItemRequest" => $v]]);
            }
        }
        $value = $this->getRelistItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["RelistItemRequest" => $v]]);
            }
        }
        $value = $this->getReviseFixedPriceItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["ReviseFixedPriceItemRequest" => $v]]);
            }
        }
        $value = $this->getReviseInventoryStatusRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["ReviseInventoryStatusRequest" => $v]]);
            }
        }
        $value = $this->getReviseItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["ReviseItemRequest" => $v]]);
            }
        }
        $value = $this->getSetShipmentTrackingInfoRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["SetShipmentTrackingInfoRequest" => $v]]);
            }
        }
        $value = $this->getVerifyAddFixedPriceItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["VerifyAddFixedPriceItemRequest" => $v]]);
            }
        }
        $value = $this->getVerifyAddItemRequest();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["VerifyAddItemRequest" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\BulkDataExchangeRequestsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Header');
        if (null !== $value) {
            $this->setHeader(\Nogrod\eBaySDK\Trading\MerchantDataRequestHeaderType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddFixedPriceItemRequest');
        if (null !== $value) {
            $this->setAddFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddItemRequest');
        if (null !== $value) {
            $this->setAddItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndFixedPriceItemRequest');
        if (null !== $value) {
            $this->setEndFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\EndFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndItemRequest');
        if (null !== $value) {
            $this->setEndItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\EndItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderAckRequest');
        if (null !== $value) {
            $this->setOrderAckRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\OrderAckRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistFixedPriceItemRequest');
        if (null !== $value) {
            $this->setRelistFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RelistFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistItemRequest');
        if (null !== $value) {
            $this->setRelistItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RelistItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseFixedPriceItemRequest');
        if (null !== $value) {
            $this->setReviseFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseInventoryStatusRequest');
        if (null !== $value) {
            $this->setReviseInventoryStatusRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ReviseInventoryStatusRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseItemRequest');
        if (null !== $value) {
            $this->setReviseItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ReviseItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SetShipmentTrackingInfoRequest');
        if (null !== $value) {
            $this->setSetShipmentTrackingInfoRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddFixedPriceItemRequest');
        if (null !== $value) {
            $this->setVerifyAddFixedPriceItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemRequestType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddItemRequest');
        if (null !== $value) {
            $this->setVerifyAddItemRequest(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\VerifyAddItemRequestType::fromKeyValue($v);
            }, $value));
        }
    }
}
