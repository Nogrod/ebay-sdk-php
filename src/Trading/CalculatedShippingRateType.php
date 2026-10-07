<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CalculatedShippingRateType
 *
 * This type is used to specify domestic and international package handling costs if calculated shipping is being used.
 * XSD Type: CalculatedShippingRateType
 */
class CalculatedShippingRateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) When UPS is one of the shipping services offered by the seller, package dimensions are required on list/relist/revise.
     *  <br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the listing only has one domestic shipping service and it is free shipping, the domestic package handling cost will be ignored and will not be applied to the listing.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $packagingHandlingCosts
     */
    private $packagingHandlingCosts = null;

    /**
     * This field shows any package handling cost applied to international shipping. This cost will be in addition to any shipping cost applicable to each international shipping service option.
     *  <br/><br/>
     *  For international calculated shipping only.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $internationalPackagingHandlingCosts
     */
    private $internationalPackagingHandlingCosts = null;

    /**
     * Gets as packagingHandlingCosts
     *
     * Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) When UPS is one of the shipping services offered by the seller, package dimensions are required on list/relist/revise.
     *  <br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the listing only has one domestic shipping service and it is free shipping, the domestic package handling cost will be ignored and will not be applied to the listing.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPackagingHandlingCosts()
    {
        return $this->packagingHandlingCosts;
    }

    /**
     * Sets a new packagingHandlingCosts
     *
     * Fees a seller might assess for the shipping of the item (in addition to whatever the shipping service might charge). Any packaging/handling cost specified on input is added to each shipping service on output.
     *  <br/><br/>
     *  If domestic and international calculated shipping is offered for an item and if packaging/handling cost is specified only for domestic shipping, that cost will be applied by eBay as the international packaging/handling cost. (To specify a international packaging/handling cost, you must always specify a domestic packaging/handling cost, even if it is 0.) When UPS is one of the shipping services offered by the seller, package dimensions are required on list/relist/revise.
     *  <br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  If the listing only has one domestic shipping service and it is free shipping, the domestic package handling cost will be ignored and will not be applied to the listing.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $packagingHandlingCosts
     * @return self
     */
    public function setPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType $packagingHandlingCosts)
    {
        $this->packagingHandlingCosts = $packagingHandlingCosts;
        return $this;
    }

    /**
     * Gets as internationalPackagingHandlingCosts
     *
     * This field shows any package handling cost applied to international shipping. This cost will be in addition to any shipping cost applicable to each international shipping service option.
     *  <br/><br/>
     *  For international calculated shipping only.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getInternationalPackagingHandlingCosts()
    {
        return $this->internationalPackagingHandlingCosts;
    }

    /**
     * Sets a new internationalPackagingHandlingCosts
     *
     * This field shows any package handling cost applied to international shipping. This cost will be in addition to any shipping cost applicable to each international shipping service option.
     *  <br/><br/>
     *  For international calculated shipping only.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $internationalPackagingHandlingCosts
     * @return self
     */
    public function setInternationalPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType $internationalPackagingHandlingCosts)
    {
        $this->internationalPackagingHandlingCosts = $internationalPackagingHandlingCosts;
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
        $value = $this->packagingHandlingCosts;
        if (null !== $value) {
            $writer->startElementNs(null, 'PackagingHandlingCosts', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->internationalPackagingHandlingCosts;
        if (null !== $value) {
            $writer->startElementNs(null, 'InternationalPackagingHandlingCosts', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CalculatedShippingRateType
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
                case 'PackagingHandlingCosts':
                    $this->packagingHandlingCosts = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'InternationalPackagingHandlingCosts':
                    $this->internationalPackagingHandlingCosts = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['PackagingHandlingCosts'] = $this->packagingHandlingCosts;
        $data['InternationalPackagingHandlingCosts'] = $this->internationalPackagingHandlingCosts;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
