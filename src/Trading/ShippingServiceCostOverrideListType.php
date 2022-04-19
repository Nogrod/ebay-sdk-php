<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingServiceCostOverrideListType
 *
 * Type defining the <b>ShippingServiceCostOverrideList</b> container, which is used when the seller wants to override flat-rate shipping costs for one or more domestic and/or international shipping service options defined in the Business Policies shipping profile referenced in the <b>SellerProfiles.SellerShippingProfile.ShippingProfileID</b> field of an Add/Revise/Relist call.
 *  <br/><br/>
 *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverrideList.ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping services in the Business Policies shipping profile.
 * XSD Type: ShippingServiceCostOverrideListType
 */
class ShippingServiceCostOverrideListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service option, defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile, that the seller wishes to override the shipping costs. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br/><br/>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping service options in the Business Policies shipping profile.
     *  <br/><br/>
     *  To override the shipping costs for any domestic shipping service option in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic', and to override the shipping costs for any international shipping service option, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value should match the <b>sortOrderId</b> value for the matching shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *  <br/><br/>
     *  If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetItem</b>, and <b>GetSellerList</b> calls.
     *
     * @var \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType[] $shippingServiceCostOverride
     */
    private $shippingServiceCostOverride = [

    ];

    /**
     * Adds as shippingServiceCostOverride
     *
     * A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service option, defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile, that the seller wishes to override the shipping costs. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br/><br/>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping service options in the Business Policies shipping profile.
     *  <br/><br/>
     *  To override the shipping costs for any domestic shipping service option in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic', and to override the shipping costs for any international shipping service option, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value should match the <b>sortOrderId</b> value for the matching shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *  <br/><br/>
     *  If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetItem</b>, and <b>GetSellerList</b> calls.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType $shippingServiceCostOverride
     */
    public function addToShippingServiceCostOverride(\Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType $shippingServiceCostOverride)
    {
        $this->shippingServiceCostOverride[] = $shippingServiceCostOverride;
        return $this;
    }

    /**
     * isset shippingServiceCostOverride
     *
     * A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service option, defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile, that the seller wishes to override the shipping costs. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br/><br/>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping service options in the Business Policies shipping profile.
     *  <br/><br/>
     *  To override the shipping costs for any domestic shipping service option in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic', and to override the shipping costs for any international shipping service option, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value should match the <b>sortOrderId</b> value for the matching shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *  <br/><br/>
     *  If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetItem</b>, and <b>GetSellerList</b> calls.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingServiceCostOverride($index)
    {
        return isset($this->shippingServiceCostOverride[$index]);
    }

    /**
     * unset shippingServiceCostOverride
     *
     * A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service option, defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile, that the seller wishes to override the shipping costs. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br/><br/>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping service options in the Business Policies shipping profile.
     *  <br/><br/>
     *  To override the shipping costs for any domestic shipping service option in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic', and to override the shipping costs for any international shipping service option, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value should match the <b>sortOrderId</b> value for the matching shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *  <br/><br/>
     *  If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetItem</b>, and <b>GetSellerList</b> calls.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingServiceCostOverride($index)
    {
        unset($this->shippingServiceCostOverride[$index]);
    }

    /**
     * Gets as shippingServiceCostOverride
     *
     * A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service option, defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile, that the seller wishes to override the shipping costs. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br/><br/>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping service options in the Business Policies shipping profile.
     *  <br/><br/>
     *  To override the shipping costs for any domestic shipping service option in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic', and to override the shipping costs for any international shipping service option, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value should match the <b>sortOrderId</b> value for the matching shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *  <br/><br/>
     *  If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetItem</b>, and <b>GetSellerList</b> calls.
     *
     * @return \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType[]
     */
    public function getShippingServiceCostOverride()
    {
        return $this->shippingServiceCostOverride;
    }

    /**
     * Sets a new shippingServiceCostOverride
     *
     * A <b>ShippingServiceCostOverride</b> container is required for each domestic and/or international shipping service option, defined in the <b>domesticShippingPolicyInfoService</b> and <b>intlShippingPolicyInfoService</b> containers of the Business Policies shipping profile, that the seller wishes to override the shipping costs. Shipping costs include the cost to ship one item, the cost to ship each additional identical item, and any shipping surcharges applicable to domestic shipping services.
     *  <br/><br/>
     *  Shipping service cost overrides are a listing-level concept, and the shipping costs specified through each <b>ShippingServiceCostOverride</b> container will not change the shipping costs defined for the same shipping service options in the Business Policies shipping profile.
     *  <br/><br/>
     *  To override the shipping costs for any domestic shipping service option in the Business Policies shipping profile, the <b>ShippingServiceType</b> field should be set to 'Domestic', and to override the shipping costs for any international shipping service option, the <b>ShippingServiceType</b> field should be set to 'International'. For both domestic and international shipping services, the <b>ShippingServicePriority</b> value should match the <b>sortOrderId</b> value for the matching shipping service in the shipping profile. If any of the domestic and/or international shipping service priorities and shipping service options in the Add/Revise/Relist call and Business Policies shipping profile do not match, an error occurs.
     *  <br/><br/>
     *  If shipping service cost overrides are used in a listing, the <b>ShippingServiceCostOverride</b> container will be returned in the <b>GetItem</b>, and <b>GetSellerList</b> calls.
     *
     * @param \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType[] $shippingServiceCostOverride
     * @return self
     */
    public function setShippingServiceCostOverride(array $shippingServiceCostOverride)
    {
        $this->shippingServiceCostOverride = $shippingServiceCostOverride;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingServiceCostOverride();
        if (null !== $value && !empty($this->getShippingServiceCostOverride())) {
            $writer->write(array_map(function ($v) {
                return ["ShippingServiceCostOverride" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingServiceCostOverride', true);
        if (null !== $value && !empty($value)) {
            $this->setShippingServiceCostOverride(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ShippingServiceCostOverrideType::fromKeyValue($v);
            }, $value));
        }
    }
}
