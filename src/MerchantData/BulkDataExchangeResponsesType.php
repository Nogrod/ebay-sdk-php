<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\ActiveInventoryReportResponseType $activeInventoryReport
     */
    private $activeInventoryReport = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemResponseType[] $addFixedPriceItemResponse
     */
    private $addFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AddItemResponseType[] $addItemResponse
     */
    private $addItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemResponseType[] $endFixedPriceItemResponse
     */
    private $endFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\EndItemResponseType[] $endItemResponse
     */
    private $endItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\FeeSettlementReportResponseType $feeSettlementReport
     */
    private $feeSettlementReport = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\OrderAckResponseType[] $orderAckResponse
     */
    private $orderAckResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\OrderReportResponseType $orderReport
     */
    private $orderReport = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemResponseType[] $relistFixedPriceItemResponse
     */
    private $relistFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\RelistItemResponseType[] $relistItemResponse
     */
    private $relistItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemResponseType[] $reviseFixedPriceItemResponse
     */
    private $reviseFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusResponseType[] $reviseInventoryStatusResponse
     */
    private $reviseInventoryStatusResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\ReviseItemResponseType[] $reviseItemResponse
     */
    private $reviseItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoResponseType[] $setShipmentTrackingInfoResponse
     */
    private $setShipmentTrackingInfoResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemResponseType[] $verifyAddFixedPriceItemResponse
     */
    private $verifyAddFixedPriceItemResponse = [

    ];

    /**
     * @var \Nogrod\eBaySDK\MerchantData\VerifyAddItemResponseType[] $verifyAddItemResponse
     */
    private $verifyAddItemResponse = [

    ];

    /**
     * Gets as activeInventoryReport
     *
     * @return \Nogrod\eBaySDK\MerchantData\ActiveInventoryReportResponseType
     */
    public function getActiveInventoryReport()
    {
        return $this->activeInventoryReport;
    }

    /**
     * Sets a new activeInventoryReport
     *
     * @param \Nogrod\eBaySDK\MerchantData\ActiveInventoryReportResponseType $activeInventoryReport
     * @return self
     */
    public function setActiveInventoryReport(\Nogrod\eBaySDK\MerchantData\ActiveInventoryReportResponseType $activeInventoryReport)
    {
        $this->activeInventoryReport = $activeInventoryReport;
        return $this;
    }

    /**
     * Adds as addFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemResponseType $addFixedPriceItemResponse
     */
    public function addToAddFixedPriceItemResponse(\Nogrod\eBaySDK\MerchantData\AddFixedPriceItemResponseType $addFixedPriceItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemResponseType[]
     */
    public function getAddFixedPriceItemResponse()
    {
        return $this->addFixedPriceItemResponse;
    }

    /**
     * Sets a new addFixedPriceItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemResponseType[] $addFixedPriceItemResponse
     * @return self
     */
    public function setAddFixedPriceItemResponse(array $addFixedPriceItemResponse)
    {
        $this->addFixedPriceItemResponse = $addFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as addItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AddItemResponseType $addItemResponse
     */
    public function addToAddItemResponse(\Nogrod\eBaySDK\MerchantData\AddItemResponseType $addItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\AddItemResponseType[]
     */
    public function getAddItemResponse()
    {
        return $this->addItemResponse;
    }

    /**
     * Sets a new addItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddItemResponseType[] $addItemResponse
     * @return self
     */
    public function setAddItemResponse(array $addItemResponse)
    {
        $this->addItemResponse = $addItemResponse;
        return $this;
    }

    /**
     * Adds as endFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemResponseType $endFixedPriceItemResponse
     */
    public function addToEndFixedPriceItemResponse(\Nogrod\eBaySDK\MerchantData\EndFixedPriceItemResponseType $endFixedPriceItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemResponseType[]
     */
    public function getEndFixedPriceItemResponse()
    {
        return $this->endFixedPriceItemResponse;
    }

    /**
     * Sets a new endFixedPriceItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemResponseType[] $endFixedPriceItemResponse
     * @return self
     */
    public function setEndFixedPriceItemResponse(array $endFixedPriceItemResponse)
    {
        $this->endFixedPriceItemResponse = $endFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as endItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\EndItemResponseType $endItemResponse
     */
    public function addToEndItemResponse(\Nogrod\eBaySDK\MerchantData\EndItemResponseType $endItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\EndItemResponseType[]
     */
    public function getEndItemResponse()
    {
        return $this->endItemResponse;
    }

    /**
     * Sets a new endItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\EndItemResponseType[] $endItemResponse
     * @return self
     */
    public function setEndItemResponse(array $endItemResponse)
    {
        $this->endItemResponse = $endItemResponse;
        return $this;
    }

    /**
     * Gets as feeSettlementReport
     *
     * @return \Nogrod\eBaySDK\MerchantData\FeeSettlementReportResponseType
     */
    public function getFeeSettlementReport()
    {
        return $this->feeSettlementReport;
    }

    /**
     * Sets a new feeSettlementReport
     *
     * @param \Nogrod\eBaySDK\MerchantData\FeeSettlementReportResponseType $feeSettlementReport
     * @return self
     */
    public function setFeeSettlementReport(\Nogrod\eBaySDK\MerchantData\FeeSettlementReportResponseType $feeSettlementReport)
    {
        $this->feeSettlementReport = $feeSettlementReport;
        return $this;
    }

    /**
     * Adds as orderAckResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\OrderAckResponseType $orderAckResponse
     */
    public function addToOrderAckResponse(\Nogrod\eBaySDK\MerchantData\OrderAckResponseType $orderAckResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\OrderAckResponseType[]
     */
    public function getOrderAckResponse()
    {
        return $this->orderAckResponse;
    }

    /**
     * Sets a new orderAckResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderAckResponseType[] $orderAckResponse
     * @return self
     */
    public function setOrderAckResponse(array $orderAckResponse)
    {
        $this->orderAckResponse = $orderAckResponse;
        return $this;
    }

    /**
     * Gets as orderReport
     *
     * @return \Nogrod\eBaySDK\MerchantData\OrderReportResponseType
     */
    public function getOrderReport()
    {
        return $this->orderReport;
    }

    /**
     * Sets a new orderReport
     *
     * @param \Nogrod\eBaySDK\MerchantData\OrderReportResponseType $orderReport
     * @return self
     */
    public function setOrderReport(\Nogrod\eBaySDK\MerchantData\OrderReportResponseType $orderReport)
    {
        $this->orderReport = $orderReport;
        return $this;
    }

    /**
     * Adds as relistFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemResponseType $relistFixedPriceItemResponse
     */
    public function addToRelistFixedPriceItemResponse(\Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemResponseType $relistFixedPriceItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemResponseType[]
     */
    public function getRelistFixedPriceItemResponse()
    {
        return $this->relistFixedPriceItemResponse;
    }

    /**
     * Sets a new relistFixedPriceItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemResponseType[] $relistFixedPriceItemResponse
     * @return self
     */
    public function setRelistFixedPriceItemResponse(array $relistFixedPriceItemResponse)
    {
        $this->relistFixedPriceItemResponse = $relistFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as relistItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\RelistItemResponseType $relistItemResponse
     */
    public function addToRelistItemResponse(\Nogrod\eBaySDK\MerchantData\RelistItemResponseType $relistItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\RelistItemResponseType[]
     */
    public function getRelistItemResponse()
    {
        return $this->relistItemResponse;
    }

    /**
     * Sets a new relistItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\RelistItemResponseType[] $relistItemResponse
     * @return self
     */
    public function setRelistItemResponse(array $relistItemResponse)
    {
        $this->relistItemResponse = $relistItemResponse;
        return $this;
    }

    /**
     * Adds as reviseFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemResponseType $reviseFixedPriceItemResponse
     */
    public function addToReviseFixedPriceItemResponse(\Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemResponseType $reviseFixedPriceItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemResponseType[]
     */
    public function getReviseFixedPriceItemResponse()
    {
        return $this->reviseFixedPriceItemResponse;
    }

    /**
     * Sets a new reviseFixedPriceItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemResponseType[] $reviseFixedPriceItemResponse
     * @return self
     */
    public function setReviseFixedPriceItemResponse(array $reviseFixedPriceItemResponse)
    {
        $this->reviseFixedPriceItemResponse = $reviseFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as reviseInventoryStatusResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusResponseType $reviseInventoryStatusResponse
     */
    public function addToReviseInventoryStatusResponse(\Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusResponseType $reviseInventoryStatusResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusResponseType[]
     */
    public function getReviseInventoryStatusResponse()
    {
        return $this->reviseInventoryStatusResponse;
    }

    /**
     * Sets a new reviseInventoryStatusResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusResponseType[] $reviseInventoryStatusResponse
     * @return self
     */
    public function setReviseInventoryStatusResponse(array $reviseInventoryStatusResponse)
    {
        $this->reviseInventoryStatusResponse = $reviseInventoryStatusResponse;
        return $this;
    }

    /**
     * Adds as reviseItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ReviseItemResponseType $reviseItemResponse
     */
    public function addToReviseItemResponse(\Nogrod\eBaySDK\MerchantData\ReviseItemResponseType $reviseItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\ReviseItemResponseType[]
     */
    public function getReviseItemResponse()
    {
        return $this->reviseItemResponse;
    }

    /**
     * Sets a new reviseItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReviseItemResponseType[] $reviseItemResponse
     * @return self
     */
    public function setReviseItemResponse(array $reviseItemResponse)
    {
        $this->reviseItemResponse = $reviseItemResponse;
        return $this;
    }

    /**
     * Adds as setShipmentTrackingInfoResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoResponseType $setShipmentTrackingInfoResponse
     */
    public function addToSetShipmentTrackingInfoResponse(\Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoResponseType $setShipmentTrackingInfoResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoResponseType[]
     */
    public function getSetShipmentTrackingInfoResponse()
    {
        return $this->setShipmentTrackingInfoResponse;
    }

    /**
     * Sets a new setShipmentTrackingInfoResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoResponseType[] $setShipmentTrackingInfoResponse
     * @return self
     */
    public function setSetShipmentTrackingInfoResponse(array $setShipmentTrackingInfoResponse)
    {
        $this->setShipmentTrackingInfoResponse = $setShipmentTrackingInfoResponse;
        return $this;
    }

    /**
     * Adds as verifyAddFixedPriceItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemResponseType $verifyAddFixedPriceItemResponse
     */
    public function addToVerifyAddFixedPriceItemResponse(\Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemResponseType $verifyAddFixedPriceItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemResponseType[]
     */
    public function getVerifyAddFixedPriceItemResponse()
    {
        return $this->verifyAddFixedPriceItemResponse;
    }

    /**
     * Sets a new verifyAddFixedPriceItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemResponseType[] $verifyAddFixedPriceItemResponse
     * @return self
     */
    public function setVerifyAddFixedPriceItemResponse(array $verifyAddFixedPriceItemResponse)
    {
        $this->verifyAddFixedPriceItemResponse = $verifyAddFixedPriceItemResponse;
        return $this;
    }

    /**
     * Adds as verifyAddItemResponse
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddItemResponseType $verifyAddItemResponse
     */
    public function addToVerifyAddItemResponse(\Nogrod\eBaySDK\MerchantData\VerifyAddItemResponseType $verifyAddItemResponse)
    {
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
     * @return \Nogrod\eBaySDK\MerchantData\VerifyAddItemResponseType[]
     */
    public function getVerifyAddItemResponse()
    {
        return $this->verifyAddItemResponse;
    }

    /**
     * Sets a new verifyAddItemResponse
     *
     * @param \Nogrod\eBaySDK\MerchantData\VerifyAddItemResponseType[] $verifyAddItemResponse
     * @return self
     */
    public function setVerifyAddItemResponse(array $verifyAddItemResponse)
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
        if (null !== $value && !empty($this->getAddFixedPriceItemResponse())) {
            $writer->write(array_map(function ($v) {return ["AddFixedPriceItemResponse" => $v];}, $value));
        }
        $value = $this->getAddItemResponse();
        if (null !== $value && !empty($this->getAddItemResponse())) {
            $writer->write(array_map(function ($v) {return ["AddItemResponse" => $v];}, $value));
        }
        $value = $this->getEndFixedPriceItemResponse();
        if (null !== $value && !empty($this->getEndFixedPriceItemResponse())) {
            $writer->write(array_map(function ($v) {return ["EndFixedPriceItemResponse" => $v];}, $value));
        }
        $value = $this->getEndItemResponse();
        if (null !== $value && !empty($this->getEndItemResponse())) {
            $writer->write(array_map(function ($v) {return ["EndItemResponse" => $v];}, $value));
        }
        $value = $this->getFeeSettlementReport();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeSettlementReport", $value);
        }
        $value = $this->getOrderAckResponse();
        if (null !== $value && !empty($this->getOrderAckResponse())) {
            $writer->write(array_map(function ($v) {return ["OrderAckResponse" => $v];}, $value));
        }
        $value = $this->getOrderReport();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderReport", $value);
        }
        $value = $this->getRelistFixedPriceItemResponse();
        if (null !== $value && !empty($this->getRelistFixedPriceItemResponse())) {
            $writer->write(array_map(function ($v) {return ["RelistFixedPriceItemResponse" => $v];}, $value));
        }
        $value = $this->getRelistItemResponse();
        if (null !== $value && !empty($this->getRelistItemResponse())) {
            $writer->write(array_map(function ($v) {return ["RelistItemResponse" => $v];}, $value));
        }
        $value = $this->getReviseFixedPriceItemResponse();
        if (null !== $value && !empty($this->getReviseFixedPriceItemResponse())) {
            $writer->write(array_map(function ($v) {return ["ReviseFixedPriceItemResponse" => $v];}, $value));
        }
        $value = $this->getReviseInventoryStatusResponse();
        if (null !== $value && !empty($this->getReviseInventoryStatusResponse())) {
            $writer->write(array_map(function ($v) {return ["ReviseInventoryStatusResponse" => $v];}, $value));
        }
        $value = $this->getReviseItemResponse();
        if (null !== $value && !empty($this->getReviseItemResponse())) {
            $writer->write(array_map(function ($v) {return ["ReviseItemResponse" => $v];}, $value));
        }
        $value = $this->getSetShipmentTrackingInfoResponse();
        if (null !== $value && !empty($this->getSetShipmentTrackingInfoResponse())) {
            $writer->write(array_map(function ($v) {return ["SetShipmentTrackingInfoResponse" => $v];}, $value));
        }
        $value = $this->getVerifyAddFixedPriceItemResponse();
        if (null !== $value && !empty($this->getVerifyAddFixedPriceItemResponse())) {
            $writer->write(array_map(function ($v) {return ["VerifyAddFixedPriceItemResponse" => $v];}, $value));
        }
        $value = $this->getVerifyAddItemResponse();
        if (null !== $value && !empty($this->getVerifyAddItemResponse())) {
            $writer->write(array_map(function ($v) {return ["VerifyAddItemResponse" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActiveInventoryReport');
        if (null !== $value) {
            $this->setActiveInventoryReport(\Nogrod\eBaySDK\MerchantData\ActiveInventoryReportResponseType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddFixedPriceItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setAddFixedPriceItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\AddFixedPriceItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setAddItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\AddItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndFixedPriceItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setEndFixedPriceItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\EndFixedPriceItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setEndItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\EndItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeSettlementReport');
        if (null !== $value) {
            $this->setFeeSettlementReport(\Nogrod\eBaySDK\MerchantData\FeeSettlementReportResponseType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderAckResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderAckResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\OrderAckResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderReport');
        if (null !== $value) {
            $this->setOrderReport(\Nogrod\eBaySDK\MerchantData\OrderReportResponseType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistFixedPriceItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setRelistFixedPriceItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\RelistFixedPriceItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setRelistItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\RelistItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseFixedPriceItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setReviseFixedPriceItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ReviseFixedPriceItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseInventoryStatusResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setReviseInventoryStatusResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ReviseInventoryStatusResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setReviseItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\ReviseItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SetShipmentTrackingInfoResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setSetShipmentTrackingInfoResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\SetShipmentTrackingInfoResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddFixedPriceItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setVerifyAddFixedPriceItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\VerifyAddFixedPriceItemResponseType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyAddItemResponse', true);
        if (null !== $value && !empty($value)) {
            $this->setVerifyAddItemResponse(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\VerifyAddItemResponseType::fromKeyValue($v);}, $value));
        }
    }
}
