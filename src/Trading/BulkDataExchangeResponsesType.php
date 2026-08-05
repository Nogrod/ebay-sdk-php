<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BulkDataExchangeResponsesType
 *
 * Container for Bulk Data Exchange Responses.
 * XSD Type: BulkDataExchangeResponsesType
 */
class BulkDataExchangeResponsesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var \Nogrod\eBaySDK\Trading\ActiveInventoryReportResponseType $activeInventoryReport
     */
    private $activeInventoryReport = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponseType[] $addFixedPriceItemResponse
     */
    private $addFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\AddItemResponseType[] $addItemResponse
     */
    private $addItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponseType[] $endFixedPriceItemResponse
     */
    private $endFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\EndItemResponseType[] $endItemResponse
     */
    private $endItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\FeeSettlementReportResponseType $feeSettlementReport
     */
    private $feeSettlementReport = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\OrderAckResponseType[] $orderAckResponse
     */
    private $orderAckResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\OrderReportResponseType $orderReport
     */
    private $orderReport = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponseType[] $relistFixedPriceItemResponse
     */
    private $relistFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\RelistItemResponseType[] $relistItemResponse
     */
    private $relistItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponseType[] $reviseFixedPriceItemResponse
     */
    private $reviseFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponseType[] $reviseInventoryStatusResponse
     */
    private $reviseInventoryStatusResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\ReviseItemResponseType[] $reviseItemResponse
     */
    private $reviseItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType[] $setShipmentTrackingInfoResponse
     */
    private $setShipmentTrackingInfoResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponseType[] $verifyAddFixedPriceItemResponse
     */
    private $verifyAddFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\Trading\VerifyAddItemResponseType[] $verifyAddItemResponse
     */
    private $verifyAddItemResponse = [

    ];

    /**
     * Gets as activeInventoryReport
     *
     * @return \Nogrod\eBaySDK\Trading\ActiveInventoryReportResponseType
     */
    public function getActiveInventoryReport()
    {
        return $this->activeInventoryReport;
    }

    /**
     * Sets a new activeInventoryReport
     *
     * @param \Nogrod\eBaySDK\Trading\ActiveInventoryReportResponseType $activeInventoryReport
     * @return self
     */
    public function setActiveInventoryReport(\Nogrod\eBaySDK\Trading\ActiveInventoryReportResponseType $activeInventoryReport)
    {
        $this->activeInventoryReport = $activeInventoryReport;
        return $this;
    }

    /**
     * Adds as addFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponseType $addFixedPriceItemResponse
     */
    public function addToAddFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\AddFixedPriceItemResponseType $addFixedPriceItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemResponseType>
     */
    public function getAddFixedPriceItemResponse()
    {
        return $this->addFixedPriceItemResponse;
    }

    /**
     * Sets a new addFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddFixedPriceItemResponseType> $addFixedPriceItemResponse
     * @return self
     */
    public function setAddFixedPriceItemResponse(iterable $addFixedPriceItemResponse)
    {
        $this->addFixedPriceItemResponse = $addFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as addItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemResponseType $addItemResponse
     */
    public function addToAddItemResponse(\Nogrod\eBaySDK\Trading\AddItemResponseType $addItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\AddItemResponseType>
     */
    public function getAddItemResponse()
    {
        return $this->addItemResponse;
    }

    /**
     * Sets a new addItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AddItemResponseType> $addItemResponse
     * @return self
     */
    public function setAddItemResponse(iterable $addItemResponse)
    {
        $this->addItemResponse = $addItemResponse;
        return $this;
    }

    /**
     * Adds as endFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponseType $endFixedPriceItemResponse
     */
    public function addToEndFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\EndFixedPriceItemResponseType $endFixedPriceItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemResponseType>
     */
    public function getEndFixedPriceItemResponse()
    {
        return $this->endFixedPriceItemResponse;
    }

    /**
     * Sets a new endFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndFixedPriceItemResponseType> $endFixedPriceItemResponse
     * @return self
     */
    public function setEndFixedPriceItemResponse(iterable $endFixedPriceItemResponse)
    {
        $this->endFixedPriceItemResponse = $endFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as endItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndItemResponseType $endItemResponse
     */
    public function addToEndItemResponse(\Nogrod\eBaySDK\Trading\EndItemResponseType $endItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\EndItemResponseType>
     */
    public function getEndItemResponse()
    {
        return $this->endItemResponse;
    }

    /**
     * Sets a new endItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndItemResponseType> $endItemResponse
     * @return self
     */
    public function setEndItemResponse(iterable $endItemResponse)
    {
        $this->endItemResponse = $endItemResponse;
        return $this;
    }

    /**
     * Gets as feeSettlementReport
     *
     * @return \Nogrod\eBaySDK\Trading\FeeSettlementReportResponseType
     */
    public function getFeeSettlementReport()
    {
        return $this->feeSettlementReport;
    }

    /**
     * Sets a new feeSettlementReport
     *
     * @param \Nogrod\eBaySDK\Trading\FeeSettlementReportResponseType $feeSettlementReport
     * @return self
     */
    public function setFeeSettlementReport(\Nogrod\eBaySDK\Trading\FeeSettlementReportResponseType $feeSettlementReport)
    {
        $this->feeSettlementReport = $feeSettlementReport;
        return $this;
    }

    /**
     * Adds as orderAckResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderAckResponseType $orderAckResponse
     */
    public function addToOrderAckResponse(\Nogrod\eBaySDK\Trading\OrderAckResponseType $orderAckResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderAckResponseType>
     */
    public function getOrderAckResponse()
    {
        return $this->orderAckResponse;
    }

    /**
     * Sets a new orderAckResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderAckResponseType> $orderAckResponse
     * @return self
     */
    public function setOrderAckResponse(iterable $orderAckResponse)
    {
        $this->orderAckResponse = $orderAckResponse;
        return $this;
    }

    /**
     * Gets as orderReport
     *
     * @return \Nogrod\eBaySDK\Trading\OrderReportResponseType
     */
    public function getOrderReport()
    {
        return $this->orderReport;
    }

    /**
     * Sets a new orderReport
     *
     * @param \Nogrod\eBaySDK\Trading\OrderReportResponseType $orderReport
     * @return self
     */
    public function setOrderReport(\Nogrod\eBaySDK\Trading\OrderReportResponseType $orderReport)
    {
        $this->orderReport = $orderReport;
        return $this;
    }

    /**
     * Adds as relistFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponseType $relistFixedPriceItemResponse
     */
    public function addToRelistFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponseType $relistFixedPriceItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponseType>
     */
    public function getRelistFixedPriceItemResponse()
    {
        return $this->relistFixedPriceItemResponse;
    }

    /**
     * Sets a new relistFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponseType> $relistFixedPriceItemResponse
     * @return self
     */
    public function setRelistFixedPriceItemResponse(iterable $relistFixedPriceItemResponse)
    {
        $this->relistFixedPriceItemResponse = $relistFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as relistItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\RelistItemResponseType $relistItemResponse
     */
    public function addToRelistItemResponse(\Nogrod\eBaySDK\Trading\RelistItemResponseType $relistItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\RelistItemResponseType>
     */
    public function getRelistItemResponse()
    {
        return $this->relistItemResponse;
    }

    /**
     * Sets a new relistItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\RelistItemResponseType> $relistItemResponse
     * @return self
     */
    public function setRelistItemResponse(iterable $relistItemResponse)
    {
        $this->relistItemResponse = $relistItemResponse;
        return $this;
    }

    /**
     * Adds as reviseFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponseType $reviseFixedPriceItemResponse
     */
    public function addToReviseFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponseType $reviseFixedPriceItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponseType>
     */
    public function getReviseFixedPriceItemResponse()
    {
        return $this->reviseFixedPriceItemResponse;
    }

    /**
     * Sets a new reviseFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponseType> $reviseFixedPriceItemResponse
     * @return self
     */
    public function setReviseFixedPriceItemResponse(iterable $reviseFixedPriceItemResponse)
    {
        $this->reviseFixedPriceItemResponse = $reviseFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as reviseInventoryStatusResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponseType $reviseInventoryStatusResponse
     */
    public function addToReviseInventoryStatusResponse(\Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponseType $reviseInventoryStatusResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponseType>
     */
    public function getReviseInventoryStatusResponse()
    {
        return $this->reviseInventoryStatusResponse;
    }

    /**
     * Sets a new reviseInventoryStatusResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponseType> $reviseInventoryStatusResponse
     * @return self
     */
    public function setReviseInventoryStatusResponse(iterable $reviseInventoryStatusResponse)
    {
        $this->reviseInventoryStatusResponse = $reviseInventoryStatusResponse;
        return $this;
    }

    /**
     * Adds as reviseItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ReviseItemResponseType $reviseItemResponse
     */
    public function addToReviseItemResponse(\Nogrod\eBaySDK\Trading\ReviseItemResponseType $reviseItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ReviseItemResponseType>
     */
    public function getReviseItemResponse()
    {
        return $this->reviseItemResponse;
    }

    /**
     * Sets a new reviseItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ReviseItemResponseType> $reviseItemResponse
     * @return self
     */
    public function setReviseItemResponse(iterable $reviseItemResponse)
    {
        $this->reviseItemResponse = $reviseItemResponse;
        return $this;
    }

    /**
     * Adds as setShipmentTrackingInfoResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType $setShipmentTrackingInfoResponse
     */
    public function addToSetShipmentTrackingInfoResponse(\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType $setShipmentTrackingInfoResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType>
     */
    public function getSetShipmentTrackingInfoResponse()
    {
        return $this->setShipmentTrackingInfoResponse;
    }

    /**
     * Sets a new setShipmentTrackingInfoResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType> $setShipmentTrackingInfoResponse
     * @return self
     */
    public function setSetShipmentTrackingInfoResponse(iterable $setShipmentTrackingInfoResponse)
    {
        $this->setShipmentTrackingInfoResponse = $setShipmentTrackingInfoResponse;
        return $this;
    }

    /**
     * Adds as verifyAddFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponseType $verifyAddFixedPriceItemResponse
     */
    public function addToVerifyAddFixedPriceItemResponse(\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponseType $verifyAddFixedPriceItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponseType>
     */
    public function getVerifyAddFixedPriceItemResponse()
    {
        return $this->verifyAddFixedPriceItemResponse;
    }

    /**
     * Sets a new verifyAddFixedPriceItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponseType> $verifyAddFixedPriceItemResponse
     * @return self
     */
    public function setVerifyAddFixedPriceItemResponse(iterable $verifyAddFixedPriceItemResponse)
    {
        $this->verifyAddFixedPriceItemResponse = $verifyAddFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as verifyAddItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VerifyAddItemResponseType $verifyAddItemResponse
     */
    public function addToVerifyAddItemResponse(\Nogrod\eBaySDK\Trading\VerifyAddItemResponseType $verifyAddItemResponse)
    {
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
     * @return iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemResponseType>
     */
    public function getVerifyAddItemResponse()
    {
        return $this->verifyAddItemResponse;
    }

    /**
     * Sets a new verifyAddItemResponse
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\VerifyAddItemResponseType> $verifyAddItemResponse
     * @return self
     */
    public function setVerifyAddItemResponse(iterable $verifyAddItemResponse)
    {
        $this->verifyAddItemResponse = $verifyAddItemResponse;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getActiveInventoryReport();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActiveInventoryReport", $value);
        }
        $value = $this->getAddFixedPriceItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["AddFixedPriceItemResponse" => $v]]);
            }
        }
        $value = $this->getAddItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["AddItemResponse" => $v]]);
            }
        }
        $value = $this->getEndFixedPriceItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["EndFixedPriceItemResponse" => $v]]);
            }
        }
        $value = $this->getEndItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["EndItemResponse" => $v]]);
            }
        }
        $value = $this->getFeeSettlementReport();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeSettlementReport", $value);
        }
        $value = $this->getOrderAckResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["OrderAckResponse" => $v]]);
            }
        }
        $value = $this->getOrderReport();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderReport", $value);
        }
        $value = $this->getRelistFixedPriceItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["RelistFixedPriceItemResponse" => $v]]);
            }
        }
        $value = $this->getRelistItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["RelistItemResponse" => $v]]);
            }
        }
        $value = $this->getReviseFixedPriceItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["ReviseFixedPriceItemResponse" => $v]]);
            }
        }
        $value = $this->getReviseInventoryStatusResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["ReviseInventoryStatusResponse" => $v]]);
            }
        }
        $value = $this->getReviseItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["ReviseItemResponse" => $v]]);
            }
        }
        $value = $this->getSetShipmentTrackingInfoResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["SetShipmentTrackingInfoResponse" => $v]]);
            }
        }
        $value = $this->getVerifyAddFixedPriceItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["VerifyAddFixedPriceItemResponse" => $v]]);
            }
        }
        $value = $this->getVerifyAddItemResponse();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["VerifyAddItemResponse" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\BulkDataExchangeResponsesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActiveInventoryReport');
        if (null !== $value) {
            $this->setActiveInventoryReport(\Nogrod\eBaySDK\Trading\ActiveInventoryReportResponseType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddFixedPriceItemResponse');
        if (null !== $value) {
            $this->setAddFixedPriceItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddFixedPriceItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddItemResponse');
        if (null !== $value) {
            $this->setAddItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndFixedPriceItemResponse');
        if (null !== $value) {
            $this->setEndFixedPriceItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndItemResponse');
        if (null !== $value) {
            $this->setEndItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\EndItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeSettlementReport');
        if (null !== $value) {
            $this->setFeeSettlementReport(\Nogrod\eBaySDK\Trading\FeeSettlementReportResponseType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderAckResponse');
        if (null !== $value) {
            $this->setOrderAckResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\OrderAckResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderReport');
        if (null !== $value) {
            $this->setOrderReport(\Nogrod\eBaySDK\Trading\OrderReportResponseType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistFixedPriceItemResponse');
        if (null !== $value) {
            $this->setRelistFixedPriceItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RelistFixedPriceItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistItemResponse');
        if (null !== $value) {
            $this->setRelistItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\RelistItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseFixedPriceItemResponse');
        if (null !== $value) {
            $this->setReviseFixedPriceItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ReviseFixedPriceItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseInventoryStatusResponse');
        if (null !== $value) {
            $this->setReviseInventoryStatusResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ReviseInventoryStatusResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseItemResponse');
        if (null !== $value) {
            $this->setReviseItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ReviseItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SetShipmentTrackingInfoResponse');
        if (null !== $value) {
            $this->setSetShipmentTrackingInfoResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SetShipmentTrackingInfoResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddFixedPriceItemResponse');
        if (null !== $value) {
            $this->setVerifyAddFixedPriceItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\VerifyAddFixedPriceItemResponseType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddItemResponse');
        if (null !== $value) {
            $this->setVerifyAddItemResponse(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\VerifyAddItemResponseType::fromKeyValue($v);
            }, $value));
        }
    }
}
