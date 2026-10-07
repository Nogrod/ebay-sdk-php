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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->facilitator;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Facilitator', null, (string) $value);
        }
        $value = $this->facilitatorRefId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FacilitatorRefId', null, (string) $value);
        }
        $value = $this->serviceCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'ServiceCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->buyerStep;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyerStep', null, (string) $value);
        }
        $value = $this->sellerStep;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SellerStep', null, (string) $value);
        }
        $value = $this->status;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Status', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MotorPurchaseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'Facilitator':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->facilitator = $value;
                    }
                    return true;
                case 'FacilitatorRefId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->facilitatorRefId = $value;
                    }
                    return true;
                case 'ServiceCost':
                    $this->serviceCost = \Nogrod\eBaySDK\Trading\ServiceCostType::xmlRead($reader);
                    return true;
                case 'BuyerStep':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerStep = $value;
                    }
                    return true;
                case 'SellerStep':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sellerStep = $value;
                    }
                    return true;
                case 'Status':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->status = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
