<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CalculatedShippingRateType
 *
 * This type is used to specify domestic and international package handling costs if calculated shipping is being used.
 * XSD Type: CalculatedShippingRateType
 */
class CalculatedShippingRateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPackagingHandlingCosts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PackagingHandlingCosts", $value);
        }
        $value = $this->getInternationalPackagingHandlingCosts();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalPackagingHandlingCosts", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PackagingHandlingCosts');
        if (null !== $value) {
            $this->setPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalPackagingHandlingCosts');
        if (null !== $value) {
            $this->setInternationalPackagingHandlingCosts(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
