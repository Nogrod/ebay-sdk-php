<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MotorPurchaseType
 *
 * This type is used to provide details on a motor vehicle order using Secure Purchase.
 * XSD Type: MotorPurchaseType
 */
class MotorPurchaseType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The value returned in this field identifies the party that is facilitating the motor vehicle order.<br><br>Currently, only <code>CARAMEL</code> is supported.
     *
     * @var string $facilitator
     */
    private $facilitator = null;

    /**
     * The facilitator's unique reference identifier associated with the motor vehicle order. This ID can be used to retrieve transaction details on the facilitator's website.
     *
     * @var string $facilitatorRefId
     */
    private $facilitatorRefId = null;

    /**
     * This container shows the service cost, if any, owed to the facilitator to complete the motor vehicle order.
     *
     * @var \Nogrod\eBaySDK\Trading\ServiceCostType $serviceCost
     */
    private $serviceCost = null;

    /**
     * This field returns the current status of the buying process for the motor vehicle order. The value returned in this field indicates the current step for the buyer in terms of the order. For more information, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @var string $buyerStep
     */
    private $buyerStep = null;

    /**
     * This field returns the current status of the selling process for the motor vehicle order. The value returned in this field indicates the current step for the seller in terms of the order. For more information, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @var string $sellerStep
     */
    private $sellerStep = null;

    /**
     * This field returns the current status of the overall motor vehicle order. The value returned in this field will indicate if the purchase process is active, inactive, or complete.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as facilitator
     *
     * The value returned in this field identifies the party that is facilitating the motor vehicle order.<br><br>Currently, only <code>CARAMEL</code> is supported.
     *
     * @return string
     */
    public function getFacilitator()
    {
        return $this->facilitator;
    }

    /**
     * Sets a new facilitator
     *
     * The value returned in this field identifies the party that is facilitating the motor vehicle order.<br><br>Currently, only <code>CARAMEL</code> is supported.
     *
     * @param string $facilitator
     * @return self
     */
    public function setFacilitator($facilitator)
    {
        $this->facilitator = $facilitator;
        return $this;
    }

    /**
     * Gets as facilitatorRefId
     *
     * The facilitator's unique reference identifier associated with the motor vehicle order. This ID can be used to retrieve transaction details on the facilitator's website.
     *
     * @return string
     */
    public function getFacilitatorRefId()
    {
        return $this->facilitatorRefId;
    }

    /**
     * Sets a new facilitatorRefId
     *
     * The facilitator's unique reference identifier associated with the motor vehicle order. This ID can be used to retrieve transaction details on the facilitator's website.
     *
     * @param string $facilitatorRefId
     * @return self
     */
    public function setFacilitatorRefId($facilitatorRefId)
    {
        $this->facilitatorRefId = $facilitatorRefId;
        return $this;
    }

    /**
     * Gets as serviceCost
     *
     * This container shows the service cost, if any, owed to the facilitator to complete the motor vehicle order.
     *
     * @return \Nogrod\eBaySDK\Trading\ServiceCostType
     */
    public function getServiceCost()
    {
        return $this->serviceCost;
    }

    /**
     * Sets a new serviceCost
     *
     * This container shows the service cost, if any, owed to the facilitator to complete the motor vehicle order.
     *
     * @param \Nogrod\eBaySDK\Trading\ServiceCostType $serviceCost
     * @return self
     */
    public function setServiceCost(\Nogrod\eBaySDK\Trading\ServiceCostType $serviceCost)
    {
        $this->serviceCost = $serviceCost;
        return $this;
    }

    /**
     * Gets as buyerStep
     *
     * This field returns the current status of the buying process for the motor vehicle order. The value returned in this field indicates the current step for the buyer in terms of the order. For more information, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @return string
     */
    public function getBuyerStep()
    {
        return $this->buyerStep;
    }

    /**
     * Sets a new buyerStep
     *
     * This field returns the current status of the buying process for the motor vehicle order. The value returned in this field indicates the current step for the buyer in terms of the order. For more information, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @param string $buyerStep
     * @return self
     */
    public function setBuyerStep($buyerStep)
    {
        $this->buyerStep = $buyerStep;
        return $this;
    }

    /**
     * Gets as sellerStep
     *
     * This field returns the current status of the selling process for the motor vehicle order. The value returned in this field indicates the current step for the seller in terms of the order. For more information, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @return string
     */
    public function getSellerStep()
    {
        return $this->sellerStep;
    }

    /**
     * Sets a new sellerStep
     *
     * This field returns the current status of the selling process for the motor vehicle order. The value returned in this field indicates the current step for the seller in terms of the order. For more information, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @param string $sellerStep
     * @return self
     */
    public function setSellerStep($sellerStep)
    {
        $this->sellerStep = $sellerStep;
        return $this;
    }

    /**
     * Gets as status
     *
     * This field returns the current status of the overall motor vehicle order. The value returned in this field will indicate if the purchase process is active, inactive, or complete.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * This field returns the current status of the overall motor vehicle order. The value returned in this field will indicate if the purchase process is active, inactive, or complete.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFacilitator();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Facilitator", $value);
        }
        $value = $this->getFacilitatorRefId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FacilitatorRefId", $value);
        }
        $value = $this->getServiceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ServiceCost", $value);
        }
        $value = $this->getBuyerStep();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerStep", $value);
        }
        $value = $this->getSellerStep();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerStep", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\MotorPurchaseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Facilitator');
        if (null !== $value) {
            $this->setFacilitator($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}FacilitatorRefId');
        if (null !== $value) {
            $this->setFacilitatorRefId($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ServiceCost');
        if (null !== $value) {
            $this->setServiceCost(\Nogrod\eBaySDK\Trading\ServiceCostType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerStep');
        if (null !== $value) {
            $this->setBuyerStep($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerStep');
        if (null !== $value) {
            $this->setSellerStep($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
    }
}
