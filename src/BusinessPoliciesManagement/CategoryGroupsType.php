<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryGroupsType
 *
 * Type defining the <b>categoryGroups</b> container, which contains one or more <b>categoryGroup</b> containers.
 * XSD Type: CategoryGroups
 */
class CategoryGroupsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container indicates the category group to which the payment policy, return policy, or shipping policy applies to. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). The 'MOTORS_VEHICLE' category group is not valid for return policies, as return policies cannot be used with motor vehicle listings. These enumeration values are case-sensitive. Each business policy can be associated with more than one category group.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType[] $categoryGroup
     */
    private $categoryGroup = [

    ];

    /**
     * Adds as categoryGroup
     *
     * This container indicates the category group to which the payment policy, return policy, or shipping policy applies to. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). The 'MOTORS_VEHICLE' category group is not valid for return policies, as return policies cannot be used with motor vehicle listings. These enumeration values are case-sensitive. Each business policy can be associated with more than one category group.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType $categoryGroup
     */
    public function addToCategoryGroup(\Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType $categoryGroup)
    {
        $this->categoryGroup[] = $categoryGroup;
        return $this;
    }

    /**
     * isset categoryGroup
     *
     * This container indicates the category group to which the payment policy, return policy, or shipping policy applies to. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). The 'MOTORS_VEHICLE' category group is not valid for return policies, as return policies cannot be used with motor vehicle listings. These enumeration values are case-sensitive. Each business policy can be associated with more than one category group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryGroup($index)
    {
        return isset($this->categoryGroup[$index]);
    }

    /**
     * unset categoryGroup
     *
     * This container indicates the category group to which the payment policy, return policy, or shipping policy applies to. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). The 'MOTORS_VEHICLE' category group is not valid for return policies, as return policies cannot be used with motor vehicle listings. These enumeration values are case-sensitive. Each business policy can be associated with more than one category group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryGroup($index)
    {
        unset($this->categoryGroup[$index]);
    }

    /**
     * Gets as categoryGroup
     *
     * This container indicates the category group to which the payment policy, return policy, or shipping policy applies to. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). The 'MOTORS_VEHICLE' category group is not valid for return policies, as return policies cannot be used with motor vehicle listings. These enumeration values are case-sensitive. Each business policy can be associated with more than one category group.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType[]
     */
    public function getCategoryGroup()
    {
        return $this->categoryGroup;
    }

    /**
     * Sets a new categoryGroup
     *
     * This container indicates the category group to which the payment policy, return policy, or shipping policy applies to. The only two valid category groups are 'MOTORS_VEHICLE' (for motor vehicle listings) and 'ALL' (for non-motor vehicle listings). The 'MOTORS_VEHICLE' category group is not valid for return policies, as return policies cannot be used with motor vehicle listings. These enumeration values are case-sensitive. Each business policy can be associated with more than one category group.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType[] $categoryGroup
     * @return self
     */
    public function setCategoryGroup(array $categoryGroup)
    {
        $this->categoryGroup = $categoryGroup;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getCategoryGroup();
        if (null !== $value && !empty($this->getCategoryGroup())) {
            $writer->write(array_map(function ($v) {return ["categoryGroup" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}categoryGroup', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryGroup(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType::fromKeyValue($v);}, $value));
        }
    }
}
