<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BulkDataExchangeResponsesType
 *
 *
 * XSD Type: BulkDataExchangeResponsesType
 */
class BulkDataExchangeResponsesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * @var \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse[] $addFixedPriceItemResponse
     */
    private $addFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse[] $endFixedPriceItemResponse
     */
    private $endFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse[] $reviseFixedPriceItemResponse
     */
    private $reviseFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse[] $relistFixedPriceItemResponse
     */
    private $relistFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse[] $verifyAddFixedPriceItemResponse
     */
    private $verifyAddFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\AddItemResponse[] $addItemResponse
     */
    private $addItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndItemResponse[] $endItemResponse
     */
    private $endItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseItemResponse[] $reviseItemResponse
     */
    private $reviseItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistItemResponse[] $relistItemResponse
     */
    private $relistItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddItemResponse[] $verifyAddItemResponse
     */
    private $verifyAddItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse[] $reviseInventoryStatusResponse
     */
    private $reviseInventoryStatusResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\OrderAckResponse[] $orderAckResponse
     */
    private $orderAckResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponse[] $setShipmentTrackingInfoResponse
     */
    private $setShipmentTrackingInfoResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ActiveInventoryReport[] $activeInventoryReport
     */
    private $activeInventoryReport = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\OrderReport[] $orderReport
     */
    private $orderReport = [

    ];

    /**
     * Adds as addFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse $addFixedPriceItemResponse
     */
    public function addToAddFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse $addFixedPriceItemResponse)
    {
        $this->addFixedPriceItemResponse ??= [];
        if (!is_array($this->addFixedPriceItemResponse)) {
            throw new \LogicException('addFixedPriceItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->addFixedPriceItemResponse[] = $addFixedPriceItemResponse;
        return $this;
    }

    /**
     * isset addFixedPriceItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddFixedPriceItemResponse($index)
    {
        return isset($this->addFixedPriceItemResponse[$index]);
    }

    /**
     * unset addFixedPriceItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddFixedPriceItemResponse($index)
    {
        unset($this->addFixedPriceItemResponse[$index]);
    }

    /**
     * Gets as addFixedPriceItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse>
     */
    public function getAddFixedPriceItemResponse()
    {
        return $this->addFixedPriceItemResponse;
    }

    /**
     * Sets a new addFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse> $addFixedPriceItemResponse
     * @return self
     */
    public function setAddFixedPriceItemResponse(iterable $addFixedPriceItemResponse)
    {
        $this->addFixedPriceItemResponse = $addFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as endFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse $endFixedPriceItemResponse
     */
    public function addToEndFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse $endFixedPriceItemResponse)
    {
        $this->endFixedPriceItemResponse ??= [];
        if (!is_array($this->endFixedPriceItemResponse)) {
            throw new \LogicException('endFixedPriceItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->endFixedPriceItemResponse[] = $endFixedPriceItemResponse;
        return $this;
    }

    /**
     * isset endFixedPriceItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndFixedPriceItemResponse($index)
    {
        return isset($this->endFixedPriceItemResponse[$index]);
    }

    /**
     * unset endFixedPriceItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndFixedPriceItemResponse($index)
    {
        unset($this->endFixedPriceItemResponse[$index]);
    }

    /**
     * Gets as endFixedPriceItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse>
     */
    public function getEndFixedPriceItemResponse()
    {
        return $this->endFixedPriceItemResponse;
    }

    /**
     * Sets a new endFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse> $endFixedPriceItemResponse
     * @return self
     */
    public function setEndFixedPriceItemResponse(iterable $endFixedPriceItemResponse)
    {
        $this->endFixedPriceItemResponse = $endFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as reviseFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse $reviseFixedPriceItemResponse
     */
    public function addToReviseFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse $reviseFixedPriceItemResponse)
    {
        $this->reviseFixedPriceItemResponse ??= [];
        if (!is_array($this->reviseFixedPriceItemResponse)) {
            throw new \LogicException('reviseFixedPriceItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->reviseFixedPriceItemResponse[] = $reviseFixedPriceItemResponse;
        return $this;
    }

    /**
     * isset reviseFixedPriceItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviseFixedPriceItemResponse($index)
    {
        return isset($this->reviseFixedPriceItemResponse[$index]);
    }

    /**
     * unset reviseFixedPriceItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviseFixedPriceItemResponse($index)
    {
        unset($this->reviseFixedPriceItemResponse[$index]);
    }

    /**
     * Gets as reviseFixedPriceItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse>
     */
    public function getReviseFixedPriceItemResponse()
    {
        return $this->reviseFixedPriceItemResponse;
    }

    /**
     * Sets a new reviseFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse> $reviseFixedPriceItemResponse
     * @return self
     */
    public function setReviseFixedPriceItemResponse(iterable $reviseFixedPriceItemResponse)
    {
        $this->reviseFixedPriceItemResponse = $reviseFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as relistFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse $relistFixedPriceItemResponse
     */
    public function addToRelistFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse $relistFixedPriceItemResponse)
    {
        $this->relistFixedPriceItemResponse ??= [];
        if (!is_array($this->relistFixedPriceItemResponse)) {
            throw new \LogicException('relistFixedPriceItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->relistFixedPriceItemResponse[] = $relistFixedPriceItemResponse;
        return $this;
    }

    /**
     * isset relistFixedPriceItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelistFixedPriceItemResponse($index)
    {
        return isset($this->relistFixedPriceItemResponse[$index]);
    }

    /**
     * unset relistFixedPriceItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelistFixedPriceItemResponse($index)
    {
        unset($this->relistFixedPriceItemResponse[$index]);
    }

    /**
     * Gets as relistFixedPriceItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse>
     */
    public function getRelistFixedPriceItemResponse()
    {
        return $this->relistFixedPriceItemResponse;
    }

    /**
     * Sets a new relistFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse> $relistFixedPriceItemResponse
     * @return self
     */
    public function setRelistFixedPriceItemResponse(iterable $relistFixedPriceItemResponse)
    {
        $this->relistFixedPriceItemResponse = $relistFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as verifyAddFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse $verifyAddFixedPriceItemResponse
     */
    public function addToVerifyAddFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse $verifyAddFixedPriceItemResponse)
    {
        $this->verifyAddFixedPriceItemResponse ??= [];
        if (!is_array($this->verifyAddFixedPriceItemResponse)) {
            throw new \LogicException('verifyAddFixedPriceItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->verifyAddFixedPriceItemResponse[] = $verifyAddFixedPriceItemResponse;
        return $this;
    }

    /**
     * isset verifyAddFixedPriceItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerifyAddFixedPriceItemResponse($index)
    {
        return isset($this->verifyAddFixedPriceItemResponse[$index]);
    }

    /**
     * unset verifyAddFixedPriceItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerifyAddFixedPriceItemResponse($index)
    {
        unset($this->verifyAddFixedPriceItemResponse[$index]);
    }

    /**
     * Gets as verifyAddFixedPriceItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse>
     */
    public function getVerifyAddFixedPriceItemResponse()
    {
        return $this->verifyAddFixedPriceItemResponse;
    }

    /**
     * Sets a new verifyAddFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse> $verifyAddFixedPriceItemResponse
     * @return self
     */
    public function setVerifyAddFixedPriceItemResponse(iterable $verifyAddFixedPriceItemResponse)
    {
        $this->verifyAddFixedPriceItemResponse = $verifyAddFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as addItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemResponse $addItemResponse
     */
    public function addToAddItemResponse(\Nogrod\eBaySDK\Trading\AddItemResponse $addItemResponse)
    {
        $this->addItemResponse ??= [];
        if (!is_array($this->addItemResponse)) {
            throw new \LogicException('addItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->addItemResponse[] = $addItemResponse;
        return $this;
    }

    /**
     * isset addItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddItemResponse($index)
    {
        return isset($this->addItemResponse[$index]);
    }

    /**
     * unset addItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddItemResponse($index)
    {
        unset($this->addItemResponse[$index]);
    }

    /**
     * Gets as addItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AddItemResponse>
     */
    public function getAddItemResponse()
    {
        return $this->addItemResponse;
    }

    /**
     * Sets a new addItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddItemResponse> $addItemResponse
     * @return self
     */
    public function setAddItemResponse(iterable $addItemResponse)
    {
        $this->addItemResponse = $addItemResponse;
        return $this;
    }

    /**
     * Adds as endItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndItemResponse $endItemResponse
     */
    public function addToEndItemResponse(\Nogrod\eBaySDK\Trading\EndItemResponse $endItemResponse)
    {
        $this->endItemResponse ??= [];
        if (!is_array($this->endItemResponse)) {
            throw new \LogicException('endItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->endItemResponse[] = $endItemResponse;
        return $this;
    }

    /**
     * isset endItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndItemResponse($index)
    {
        return isset($this->endItemResponse[$index]);
    }

    /**
     * unset endItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndItemResponse($index)
    {
        unset($this->endItemResponse[$index]);
    }

    /**
     * Gets as endItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\EndItemResponse>
     */
    public function getEndItemResponse()
    {
        return $this->endItemResponse;
    }

    /**
     * Sets a new endItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndItemResponse> $endItemResponse
     * @return self
     */
    public function setEndItemResponse(iterable $endItemResponse)
    {
        $this->endItemResponse = $endItemResponse;
        return $this;
    }

    /**
     * Adds as reviseItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseItemResponse $reviseItemResponse
     */
    public function addToReviseItemResponse(\Nogrod\eBaySDK\Trading\ReviseItemResponse $reviseItemResponse)
    {
        $this->reviseItemResponse ??= [];
        if (!is_array($this->reviseItemResponse)) {
            throw new \LogicException('reviseItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->reviseItemResponse[] = $reviseItemResponse;
        return $this;
    }

    /**
     * isset reviseItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviseItemResponse($index)
    {
        return isset($this->reviseItemResponse[$index]);
    }

    /**
     * unset reviseItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviseItemResponse($index)
    {
        unset($this->reviseItemResponse[$index]);
    }

    /**
     * Gets as reviseItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseItemResponse>
     */
    public function getReviseItemResponse()
    {
        return $this->reviseItemResponse;
    }

    /**
     * Sets a new reviseItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseItemResponse> $reviseItemResponse
     * @return self
     */
    public function setReviseItemResponse(iterable $reviseItemResponse)
    {
        $this->reviseItemResponse = $reviseItemResponse;
        return $this;
    }

    /**
     * Adds as relistItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistItemResponse $relistItemResponse
     */
    public function addToRelistItemResponse(\Nogrod\eBaySDK\Trading\RelistItemResponse $relistItemResponse)
    {
        $this->relistItemResponse ??= [];
        if (!is_array($this->relistItemResponse)) {
            throw new \LogicException('relistItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->relistItemResponse[] = $relistItemResponse;
        return $this;
    }

    /**
     * isset relistItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelistItemResponse($index)
    {
        return isset($this->relistItemResponse[$index]);
    }

    /**
     * unset relistItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelistItemResponse($index)
    {
        unset($this->relistItemResponse[$index]);
    }

    /**
     * Gets as relistItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistItemResponse>
     */
    public function getRelistItemResponse()
    {
        return $this->relistItemResponse;
    }

    /**
     * Sets a new relistItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistItemResponse> $relistItemResponse
     * @return self
     */
    public function setRelistItemResponse(iterable $relistItemResponse)
    {
        $this->relistItemResponse = $relistItemResponse;
        return $this;
    }

    /**
     * Adds as verifyAddItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddItemResponse $verifyAddItemResponse
     */
    public function addToVerifyAddItemResponse(\Nogrod\eBaySDK\Trading\VerifyAddItemResponse $verifyAddItemResponse)
    {
        $this->verifyAddItemResponse ??= [];
        if (!is_array($this->verifyAddItemResponse)) {
            throw new \LogicException('verifyAddItemResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->verifyAddItemResponse[] = $verifyAddItemResponse;
        return $this;
    }

    /**
     * isset verifyAddItemResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVerifyAddItemResponse($index)
    {
        return isset($this->verifyAddItemResponse[$index]);
    }

    /**
     * unset verifyAddItemResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVerifyAddItemResponse($index)
    {
        unset($this->verifyAddItemResponse[$index]);
    }

    /**
     * Gets as verifyAddItemResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemResponse>
     */
    public function getVerifyAddItemResponse()
    {
        return $this->verifyAddItemResponse;
    }

    /**
     * Sets a new verifyAddItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemResponse> $verifyAddItemResponse
     * @return self
     */
    public function setVerifyAddItemResponse(iterable $verifyAddItemResponse)
    {
        $this->verifyAddItemResponse = $verifyAddItemResponse;
        return $this;
    }

    /**
     * Adds as reviseInventoryStatusResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse $reviseInventoryStatusResponse
     */
    public function addToReviseInventoryStatusResponse(\Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse $reviseInventoryStatusResponse)
    {
        $this->reviseInventoryStatusResponse ??= [];
        if (!is_array($this->reviseInventoryStatusResponse)) {
            throw new \LogicException('reviseInventoryStatusResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->reviseInventoryStatusResponse[] = $reviseInventoryStatusResponse;
        return $this;
    }

    /**
     * isset reviseInventoryStatusResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReviseInventoryStatusResponse($index)
    {
        return isset($this->reviseInventoryStatusResponse[$index]);
    }

    /**
     * unset reviseInventoryStatusResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReviseInventoryStatusResponse($index)
    {
        unset($this->reviseInventoryStatusResponse[$index]);
    }

    /**
     * Gets as reviseInventoryStatusResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse>
     */
    public function getReviseInventoryStatusResponse()
    {
        return $this->reviseInventoryStatusResponse;
    }

    /**
     * Sets a new reviseInventoryStatusResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse> $reviseInventoryStatusResponse
     * @return self
     */
    public function setReviseInventoryStatusResponse(iterable $reviseInventoryStatusResponse)
    {
        $this->reviseInventoryStatusResponse = $reviseInventoryStatusResponse;
        return $this;
    }

    /**
     * Adds as orderAckResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderAckResponse $orderAckResponse
     */
    public function addToOrderAckResponse(\Nogrod\eBaySDK\Trading\OrderAckResponse $orderAckResponse)
    {
        $this->orderAckResponse ??= [];
        if (!is_array($this->orderAckResponse)) {
            throw new \LogicException('orderAckResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->orderAckResponse[] = $orderAckResponse;
        return $this;
    }

    /**
     * isset orderAckResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderAckResponse($index)
    {
        return isset($this->orderAckResponse[$index]);
    }

    /**
     * unset orderAckResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderAckResponse($index)
    {
        unset($this->orderAckResponse[$index]);
    }

    /**
     * Gets as orderAckResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderAckResponse>
     */
    public function getOrderAckResponse()
    {
        return $this->orderAckResponse;
    }

    /**
     * Sets a new orderAckResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderAckResponse> $orderAckResponse
     * @return self
     */
    public function setOrderAckResponse(iterable $orderAckResponse)
    {
        $this->orderAckResponse = $orderAckResponse;
        return $this;
    }

    /**
     * Adds as setShipmentTrackingInfoResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponse $setShipmentTrackingInfoResponse
     */
    public function addToSetShipmentTrackingInfoResponse(\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponse $setShipmentTrackingInfoResponse)
    {
        $this->setShipmentTrackingInfoResponse ??= [];
        if (!is_array($this->setShipmentTrackingInfoResponse)) {
            throw new \LogicException('setShipmentTrackingInfoResponse is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->setShipmentTrackingInfoResponse[] = $setShipmentTrackingInfoResponse;
        return $this;
    }

    /**
     * isset setShipmentTrackingInfoResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSetShipmentTrackingInfoResponse($index)
    {
        return isset($this->setShipmentTrackingInfoResponse[$index]);
    }

    /**
     * unset setShipmentTrackingInfoResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSetShipmentTrackingInfoResponse($index)
    {
        unset($this->setShipmentTrackingInfoResponse[$index]);
    }

    /**
     * Gets as setShipmentTrackingInfoResponse
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponse>
     */
    public function getSetShipmentTrackingInfoResponse()
    {
        return $this->setShipmentTrackingInfoResponse;
    }

    /**
     * Sets a new setShipmentTrackingInfoResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponse> $setShipmentTrackingInfoResponse
     * @return self
     */
    public function setSetShipmentTrackingInfoResponse(iterable $setShipmentTrackingInfoResponse)
    {
        $this->setShipmentTrackingInfoResponse = $setShipmentTrackingInfoResponse;
        return $this;
    }

    /**
     * Adds as activeInventoryReport
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ActiveInventoryReport $activeInventoryReport
     */
    public function addToActiveInventoryReport(\Nogrod\eBaySDK\Trading\ActiveInventoryReport $activeInventoryReport)
    {
        $this->activeInventoryReport ??= [];
        if (!is_array($this->activeInventoryReport)) {
            throw new \LogicException('activeInventoryReport is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->activeInventoryReport[] = $activeInventoryReport;
        return $this;
    }

    /**
     * isset activeInventoryReport
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActiveInventoryReport($index)
    {
        return isset($this->activeInventoryReport[$index]);
    }

    /**
     * unset activeInventoryReport
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActiveInventoryReport($index)
    {
        unset($this->activeInventoryReport[$index]);
    }

    /**
     * Gets as activeInventoryReport
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ActiveInventoryReport>
     */
    public function getActiveInventoryReport()
    {
        return $this->activeInventoryReport;
    }

    /**
     * Sets a new activeInventoryReport
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ActiveInventoryReport> $activeInventoryReport
     * @return self
     */
    public function setActiveInventoryReport(iterable $activeInventoryReport)
    {
        $this->activeInventoryReport = $activeInventoryReport;
        return $this;
    }

    /**
     * Adds as orderReport
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderReport $orderReport
     */
    public function addToOrderReport(\Nogrod\eBaySDK\Trading\OrderReport $orderReport)
    {
        $this->orderReport ??= [];
        if (!is_array($this->orderReport)) {
            throw new \LogicException('orderReport is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->orderReport[] = $orderReport;
        return $this;
    }

    /**
     * isset orderReport
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderReport($index)
    {
        return isset($this->orderReport[$index]);
    }

    /**
     * unset orderReport
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderReport($index)
    {
        unset($this->orderReport[$index]);
    }

    /**
     * Gets as orderReport
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderReport>
     */
    public function getOrderReport()
    {
        return $this->orderReport;
    }

    /**
     * Sets a new orderReport
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderReport> $orderReport
     * @return self
     */
    public function setOrderReport(iterable $orderReport)
    {
        $this->orderReport = $orderReport;
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
        $value = $this->addFixedPriceItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddFixedPriceItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->endFixedPriceItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'EndFixedPriceItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->reviseFixedPriceItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReviseFixedPriceItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->relistFixedPriceItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'RelistFixedPriceItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->verifyAddFixedPriceItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'VerifyAddFixedPriceItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->addItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AddItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->endItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'EndItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->reviseItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReviseItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->relistItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'RelistItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->verifyAddItemResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'VerifyAddItemResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->reviseInventoryStatusResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReviseInventoryStatusResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->orderAckResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'OrderAckResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->setShipmentTrackingInfoResponse;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'SetShipmentTrackingInfoResponse', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->activeInventoryReport;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ActiveInventoryReport', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->orderReport;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'OrderReport', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BulkDataExchangeResponsesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->addFixedPriceItemResponse = [];
        $this->endFixedPriceItemResponse = [];
        $this->reviseFixedPriceItemResponse = [];
        $this->relistFixedPriceItemResponse = [];
        $this->verifyAddFixedPriceItemResponse = [];
        $this->addItemResponse = [];
        $this->endItemResponse = [];
        $this->reviseItemResponse = [];
        $this->relistItemResponse = [];
        $this->verifyAddItemResponse = [];
        $this->reviseInventoryStatusResponse = [];
        $this->orderAckResponse = [];
        $this->setShipmentTrackingInfoResponse = [];
        $this->activeInventoryReport = [];
        $this->orderReport = [];
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
                case 'AddFixedPriceItemResponse':
                    $this->addFixedPriceItemResponse[] = \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponse::xmlRead($reader);
                    return true;
                case 'EndFixedPriceItemResponse':
                    $this->endFixedPriceItemResponse[] = \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponse::xmlRead($reader);
                    return true;
                case 'ReviseFixedPriceItemResponse':
                    $this->reviseFixedPriceItemResponse[] = \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponse::xmlRead($reader);
                    return true;
                case 'RelistFixedPriceItemResponse':
                    $this->relistFixedPriceItemResponse[] = \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponse::xmlRead($reader);
                    return true;
                case 'VerifyAddFixedPriceItemResponse':
                    $this->verifyAddFixedPriceItemResponse[] = \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponse::xmlRead($reader);
                    return true;
                case 'AddItemResponse':
                    $this->addItemResponse[] = \Nogrod\eBaySDK\Trading\AddItemResponse::xmlRead($reader);
                    return true;
                case 'EndItemResponse':
                    $this->endItemResponse[] = \Nogrod\eBaySDK\Trading\EndItemResponse::xmlRead($reader);
                    return true;
                case 'ReviseItemResponse':
                    $this->reviseItemResponse[] = \Nogrod\eBaySDK\Trading\ReviseItemResponse::xmlRead($reader);
                    return true;
                case 'RelistItemResponse':
                    $this->relistItemResponse[] = \Nogrod\eBaySDK\Trading\RelistItemResponse::xmlRead($reader);
                    return true;
                case 'VerifyAddItemResponse':
                    $this->verifyAddItemResponse[] = \Nogrod\eBaySDK\Trading\VerifyAddItemResponse::xmlRead($reader);
                    return true;
                case 'ReviseInventoryStatusResponse':
                    $this->reviseInventoryStatusResponse[] = \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponse::xmlRead($reader);
                    return true;
                case 'OrderAckResponse':
                    $this->orderAckResponse[] = \Nogrod\eBaySDK\Trading\OrderAckResponse::xmlRead($reader);
                    return true;
                case 'SetShipmentTrackingInfoResponse':
                    $this->setShipmentTrackingInfoResponse[] = \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponse::xmlRead($reader);
                    return true;
                case 'ActiveInventoryReport':
                    $this->activeInventoryReport[] = \Nogrod\eBaySDK\Trading\ActiveInventoryReport::xmlRead($reader);
                    return true;
                case 'OrderReport':
                    $this->orderReport[] = \Nogrod\eBaySDK\Trading\OrderReport::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['AddFixedPriceItemResponse'] = Func::jsonList($this->addFixedPriceItemResponse);
        $data['EndFixedPriceItemResponse'] = Func::jsonList($this->endFixedPriceItemResponse);
        $data['ReviseFixedPriceItemResponse'] = Func::jsonList($this->reviseFixedPriceItemResponse);
        $data['RelistFixedPriceItemResponse'] = Func::jsonList($this->relistFixedPriceItemResponse);
        $data['VerifyAddFixedPriceItemResponse'] = Func::jsonList($this->verifyAddFixedPriceItemResponse);
        $data['AddItemResponse'] = Func::jsonList($this->addItemResponse);
        $data['EndItemResponse'] = Func::jsonList($this->endItemResponse);
        $data['ReviseItemResponse'] = Func::jsonList($this->reviseItemResponse);
        $data['RelistItemResponse'] = Func::jsonList($this->relistItemResponse);
        $data['VerifyAddItemResponse'] = Func::jsonList($this->verifyAddItemResponse);
        $data['ReviseInventoryStatusResponse'] = Func::jsonList($this->reviseInventoryStatusResponse);
        $data['OrderAckResponse'] = Func::jsonList($this->orderAckResponse);
        $data['SetShipmentTrackingInfoResponse'] = Func::jsonList($this->setShipmentTrackingInfoResponse);
        $data['ActiveInventoryReport'] = Func::jsonList($this->activeInventoryReport);
        $data['OrderReport'] = Func::jsonList($this->orderReport);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
