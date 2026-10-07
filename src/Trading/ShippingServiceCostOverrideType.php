<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingServiceCostOverrideType
 *
 * Type defining the <strong>ShippingServiceCostOverride</strong> container, which is used to override the flat shipping costs for a domestic and/or international shipping service option that is defined in the <strong>domesticShippingPolicyInfoService</strong> and <strong>intlShippingPolicyInfoService</strong> containers of the Business Policies shipping profile. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services. A <strong>ShippingServiceCostOverride</strong> container is required for each domestic and/or international shipping service option whose costs the seller wishes to override.
 * XSD Type: ShippingServiceCostOverrideType
 */
class ShippingServiceCostOverrideType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This integer value maps the particular instance of the <strong>ShippingServiceCostOverride</strong> container to the <strong>domesticShippingPolicyInfoService</strong> or <strong>intlShippingPolicyInfoService</strong> container of the Business Policies shipping profile. The <strong>ShippingServicePriority</strong> value should match the <strong>sortOrderId</strong> value for the matching shipping service in the Business Policies shipping profile. If overriding the shipping costs for a domestic shipping service, the <strong>ShippingServiceType</strong> field should be set to 'Domestic', and to override the shipping costs for an international shipping service, the <strong>ShippingServiceType</strong> field should be set to 'International'.
     *  <br/><br/>
     *  If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *
     * @var int $shippingServicePriority
     */
    private $shippingServicePriority = null;

    /**
     * This enumerated value indicates whether the shipping costs of a domestic or an international shipping costs are being overridden. To override the shipping costs for any domestic shipping service in the Business Policies shipping profile, this field should be set to 'Domestic', and to override the shipping costs for any international shipping service, this field should be set to 'International'.
     *
     * @var string $shippingServiceType
     */
    private $shippingServiceType = null;

    /**
     * This dollar value indicates the shipping service cost to ship one item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingServiceCost
     */
    private $shippingServiceCost = null;

    /**
     * This dollar value indicates the cost to ship each additional identical item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceAdditionalCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     *  <br/><br/>
     *  This field is only applicable to multi-quantity, fixed-price listings.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingServiceAdditionalCost
     */
    private $shippingServiceAdditionalCost = null;

    /**
     * Gets as shippingServicePriority
     *
     * This integer value maps the particular instance of the <strong>ShippingServiceCostOverride</strong> container to the <strong>domesticShippingPolicyInfoService</strong> or <strong>intlShippingPolicyInfoService</strong> container of the Business Policies shipping profile. The <strong>ShippingServicePriority</strong> value should match the <strong>sortOrderId</strong> value for the matching shipping service in the Business Policies shipping profile. If overriding the shipping costs for a domestic shipping service, the <strong>ShippingServiceType</strong> field should be set to 'Domestic', and to override the shipping costs for an international shipping service, the <strong>ShippingServiceType</strong> field should be set to 'International'.
     *  <br/><br/>
     *  If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *
     * @return int
     */
    public function getShippingServicePriority()
    {
        return $this->shippingServicePriority;
    }

    /**
     * Sets a new shippingServicePriority
     *
     * This integer value maps the particular instance of the <strong>ShippingServiceCostOverride</strong> container to the <strong>domesticShippingPolicyInfoService</strong> or <strong>intlShippingPolicyInfoService</strong> container of the Business Policies shipping profile. The <strong>ShippingServicePriority</strong> value should match the <strong>sortOrderId</strong> value for the matching shipping service in the Business Policies shipping profile. If overriding the shipping costs for a domestic shipping service, the <strong>ShippingServiceType</strong> field should be set to 'Domestic', and to override the shipping costs for an international shipping service, the <strong>ShippingServiceType</strong> field should be set to 'International'.
     *  <br/><br/>
     *  If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *
     * @param int $shippingServicePriority
     * @return self
     */
    public function setShippingServicePriority($shippingServicePriority)
    {
        $this->shippingServicePriority = $shippingServicePriority;
        return $this;
    }

    /**
     * Gets as shippingServiceType
     *
     * This enumerated value indicates whether the shipping costs of a domestic or an international shipping costs are being overridden. To override the shipping costs for any domestic shipping service in the Business Policies shipping profile, this field should be set to 'Domestic', and to override the shipping costs for any international shipping service, this field should be set to 'International'.
     *
     * @return string
     */
    public function getShippingServiceType()
    {
        return $this->shippingServiceType;
    }

    /**
     * Sets a new shippingServiceType
     *
     * This enumerated value indicates whether the shipping costs of a domestic or an international shipping costs are being overridden. To override the shipping costs for any domestic shipping service in the Business Policies shipping profile, this field should be set to 'Domestic', and to override the shipping costs for any international shipping service, this field should be set to 'International'.
     *
     * @param string $shippingServiceType
     * @return self
     */
    public function setShippingServiceType($shippingServiceType)
    {
        $this->shippingServiceType = $shippingServiceType;
        return $this;
    }

    /**
     * Gets as shippingServiceCost
     *
     * This dollar value indicates the shipping service cost to ship one item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingServiceCost()
    {
        return $this->shippingServiceCost;
    }

    /**
     * Sets a new shippingServiceCost
     *
     * This dollar value indicates the shipping service cost to ship one item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingServiceCost
     * @return self
     */
    public function setShippingServiceCost(\Nogrod\eBaySDK\Trading\AmountType $shippingServiceCost)
    {
        $this->shippingServiceCost = $shippingServiceCost;
        return $this;
    }

    /**
     * Gets as shippingServiceAdditionalCost
     *
     * This dollar value indicates the cost to ship each additional identical item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceAdditionalCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     *  <br/><br/>
     *  This field is only applicable to multi-quantity, fixed-price listings.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingServiceAdditionalCost()
    {
        return $this->shippingServiceAdditionalCost;
    }

    /**
     * Sets a new shippingServiceAdditionalCost
     *
     * This dollar value indicates the cost to ship each additional identical item to the buyer. If the shipping service costs override operation is successful, this value will override the corresponding <strong>shippingServiceAdditionalCost</strong> value set in the <strong>domesticShippingPolicyInfoService</strong> (domestic shipping service) or <strong>intlShippingPolicyInfoService</strong> (international shipping service) containers in the Business Policies shipping profile.
     *  <br/><br/>
     *  This field is only applicable to multi-quantity, fixed-price listings.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingServiceAdditionalCost
     * @return self
     */
    public function setShippingServiceAdditionalCost(\Nogrod\eBaySDK\Trading\AmountType $shippingServiceAdditionalCost)
    {
        $this->shippingServiceAdditionalCost = $shippingServiceAdditionalCost;
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
        $value = $this->shippingServicePriority;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingServicePriority', null, (string) $value);
        }
        $value = $this->shippingServiceType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingServiceType', null, (string) $value);
        }
        $value = $this->shippingServiceCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShippingServiceCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->shippingServiceAdditionalCost;
        if (null !== $value) {
            $writer->startElementNs(null, 'ShippingServiceAdditionalCost', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType
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
                case 'ShippingServicePriority':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingServicePriority = (int) $value;
                    }
                    return true;
                case 'ShippingServiceType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingServiceType = $value;
                    }
                    return true;
                case 'ShippingServiceCost':
                    $this->shippingServiceCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ShippingServiceAdditionalCost':
                    $this->shippingServiceAdditionalCost = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
