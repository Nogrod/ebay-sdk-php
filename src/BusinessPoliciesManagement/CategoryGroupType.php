<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryGroupType
 *
 * Type defining the <b>categoryGroup</b> container, which indicates the category group to which the payment, return, or shipping business policy applies to. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). These enumeration values are case-sensitive. The 'MOTORS_VEHICLE' category group is not valid for return business policies, as return business policies cannot be used with motor vehicle listings.
 * XSD Type: CategoryGroup
 */
class CategoryGroupType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <p class="depr"><span class="tablenote"><b>Important:</b> This field has been deprecated and is no longer used. Do not include this field in any add or set call. This field may be returned within the payload of a get call, but it can be ignored.</span></p><p>
     *
     * @var bool $default
     */
    private $default = null;

    /**
     * This string value indicates the name of the category group to which the corresponding business policy applies. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). These enumeration values are case-sensitive. The 'MOTORS_VEHICLE' category group is not valid for return business policies, as return business policies cannot be used with motor vehicle listings.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This flag is returned as 'true' if the corresponding business policy meets all eBay Top-Rated Listing requirements for the category group. To qualify as an ETRS business policy, the seller must meet Top-Rated Seller requirements, and the business policy must include a 14-day (or longer) money back return policy and same-day or one-day handling. For more information on Top-Rated Seller and Top-Rated Plus listings, see the <a href="http://pages.ebay.com/help/sell/top-rated.html" target="_blank">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> help topic.
     *
     * @var bool $eTRS
     */
    private $eTRS = null;

    /**
     * Gets as default
     *
     * <p class="depr"><span class="tablenote"><b>Important:</b> This field has been deprecated and is no longer used. Do not include this field in any add or set call. This field may be returned within the payload of a get call, but it can be ignored.</span></p><p>
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * <p class="depr"><span class="tablenote"><b>Important:</b> This field has been deprecated and is no longer used. Do not include this field in any add or set call. This field may be returned within the payload of a get call, but it can be ignored.</span></p><p>
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Gets as name
     *
     * This string value indicates the name of the category group to which the corresponding business policy applies. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). These enumeration values are case-sensitive. The 'MOTORS_VEHICLE' category group is not valid for return business policies, as return business policies cannot be used with motor vehicle listings.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This string value indicates the name of the category group to which the corresponding business policy applies. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). These enumeration values are case-sensitive. The 'MOTORS_VEHICLE' category group is not valid for return business policies, as return business policies cannot be used with motor vehicle listings.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as eTRS
     *
     * This flag is returned as 'true' if the corresponding business policy meets all eBay Top-Rated Listing requirements for the category group. To qualify as an ETRS business policy, the seller must meet Top-Rated Seller requirements, and the business policy must include a 14-day (or longer) money back return policy and same-day or one-day handling. For more information on Top-Rated Seller and Top-Rated Plus listings, see the <a href="http://pages.ebay.com/help/sell/top-rated.html" target="_blank">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> help topic.
     *
     * @return bool
     */
    public function getETRS()
    {
        return $this->eTRS;
    }

    /**
     * Sets a new eTRS
     *
     * This flag is returned as 'true' if the corresponding business policy meets all eBay Top-Rated Listing requirements for the category group. To qualify as an ETRS business policy, the seller must meet Top-Rated Seller requirements, and the business policy must include a 14-day (or longer) money back return policy and same-day or one-day handling. For more information on Top-Rated Seller and Top-Rated Plus listings, see the <a href="http://pages.ebay.com/help/sell/top-rated.html" target="_blank">Becoming a Top Rated Seller and qualifying for Top Rated Plus</a> help topic.
     *
     * @param bool $eTRS
     * @return self
     */
    public function setETRS($eTRS)
    {
        $this->eTRS = $eTRS;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDefault();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}default", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}name", $value);
        }
        $value = $this->getETRS();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}ETRS", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}default');
        if (null !== $value) {
            $this->setDefault(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ETRS');
        if (null !== $value) {
            $this->setETRS(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
