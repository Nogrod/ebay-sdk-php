<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionValuesType
 *
 * Fields in this type provide condition values and display names.
 * XSD Type: ConditionValuesType
 */
class ConditionValuesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. All refurbished item conditions are returned in the
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified - Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified - Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition.
     *  <br>
     *  <br>
     *  Any seller that is interested in eligibility requirements to list with 'Certified - Refurbished' should see the <a href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html" target="_blank">Certified refurbished program</a> page in Seller Center.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') can no longer be used in the <strong>Cell Phones & Smartphones</strong> category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. The 'Seller Refurbished' item condition will be replaced by one of three new refurbished values, which include condition ID 2010 ('Excellent - Refurbished'), condition ID 2020 ('Very Good - Refurbished'), and condition ID 2030 ('Good - Refurbished'). Similar to the condition ID 2000 ('Certified - Refurbished') item condition, the three new seller refurbished item conditions will be returned under the <strong>Category.SpecialFeatures</strong> container. To use any of these new refurbished item conditions in category 9355, sellers must go through an application and qualification process. The new item condition values appearing in the <strong>Category.SpecialFeatures</strong> container does not necessarily mean that a seller is eligible to list in category 9355 with these item conditions.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ConditionType[] $condition
     */
    private $condition = [
        
    ];

    /**
     * URL to the eBay Web site's item condition help for the
     *  category. This may include policies about how to assess the
     *  condition of an item in the category. To reduce
     *  item-not-as-described disputes, we recommend that
     *  you refer sellers (and buyers) to these help pages.
     *  These help pages may vary for some categories.<br>
     *  <br>
     *  The Sandbox might not return valid help URLs.
     *
     * @var string $conditionHelpURL
     */
    private $conditionHelpURL = null;

    /**
     * Adds as condition
     *
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. All refurbished item conditions are returned in the
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified - Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified - Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition.
     *  <br>
     *  <br>
     *  Any seller that is interested in eligibility requirements to list with 'Certified - Refurbished' should see the <a href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html" target="_blank">Certified refurbished program</a> page in Seller Center.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') can no longer be used in the <strong>Cell Phones & Smartphones</strong> category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. The 'Seller Refurbished' item condition will be replaced by one of three new refurbished values, which include condition ID 2010 ('Excellent - Refurbished'), condition ID 2020 ('Very Good - Refurbished'), and condition ID 2030 ('Good - Refurbished'). Similar to the condition ID 2000 ('Certified - Refurbished') item condition, the three new seller refurbished item conditions will be returned under the <strong>Category.SpecialFeatures</strong> container. To use any of these new refurbished item conditions in category 9355, sellers must go through an application and qualification process. The new item condition values appearing in the <strong>Category.SpecialFeatures</strong> container does not necessarily mean that a seller is eligible to list in category 9355 with these item conditions.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ConditionType $condition
     */
    public function addToCondition(\Nogrod\eBaySDK\Trading\ConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. All refurbished item conditions are returned in the
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified - Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified - Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition.
     *  <br>
     *  <br>
     *  Any seller that is interested in eligibility requirements to list with 'Certified - Refurbished' should see the <a href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html" target="_blank">Certified refurbished program</a> page in Seller Center.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') can no longer be used in the <strong>Cell Phones & Smartphones</strong> category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. The 'Seller Refurbished' item condition will be replaced by one of three new refurbished values, which include condition ID 2010 ('Excellent - Refurbished'), condition ID 2020 ('Very Good - Refurbished'), and condition ID 2030 ('Good - Refurbished'). Similar to the condition ID 2000 ('Certified - Refurbished') item condition, the three new seller refurbished item conditions will be returned under the <strong>Category.SpecialFeatures</strong> container. To use any of these new refurbished item conditions in category 9355, sellers must go through an application and qualification process. The new item condition values appearing in the <strong>Category.SpecialFeatures</strong> container does not necessarily mean that a seller is eligible to list in category 9355 with these item conditions.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. All refurbished item conditions are returned in the
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified - Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified - Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition.
     *  <br>
     *  <br>
     *  Any seller that is interested in eligibility requirements to list with 'Certified - Refurbished' should see the <a href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html" target="_blank">Certified refurbished program</a> page in Seller Center.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') can no longer be used in the <strong>Cell Phones & Smartphones</strong> category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. The 'Seller Refurbished' item condition will be replaced by one of three new refurbished values, which include condition ID 2010 ('Excellent - Refurbished'), condition ID 2020 ('Very Good - Refurbished'), and condition ID 2030 ('Good - Refurbished'). Similar to the condition ID 2000 ('Certified - Refurbished') item condition, the three new seller refurbished item conditions will be returned under the <strong>Category.SpecialFeatures</strong> container. To use any of these new refurbished item conditions in category 9355, sellers must go through an application and qualification process. The new item condition values appearing in the <strong>Category.SpecialFeatures</strong> container does not necessarily mean that a seller is eligible to list in category 9355 with these item conditions.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. All refurbished item conditions are returned in the
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified - Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified - Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition.
     *  <br>
     *  <br>
     *  Any seller that is interested in eligibility requirements to list with 'Certified - Refurbished' should see the <a href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html" target="_blank">Certified refurbished program</a> page in Seller Center.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') can no longer be used in the <strong>Cell Phones & Smartphones</strong> category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. The 'Seller Refurbished' item condition will be replaced by one of three new refurbished values, which include condition ID 2010 ('Excellent - Refurbished'), condition ID 2020 ('Very Good - Refurbished'), and condition ID 2030 ('Good - Refurbished'). Similar to the condition ID 2000 ('Certified - Refurbished') item condition, the three new seller refurbished item conditions will be returned under the <strong>Category.SpecialFeatures</strong> container. To use any of these new refurbished item conditions in category 9355, sellers must go through an application and qualification process. The new item condition values appearing in the <strong>Category.SpecialFeatures</strong> container does not necessarily mean that a seller is eligible to list in category 9355 with these item conditions.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. All refurbished item conditions are returned in the
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified - Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified - Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition.
     *  <br>
     *  <br>
     *  Any seller that is interested in eligibility requirements to list with 'Certified - Refurbished' should see the <a href="https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html" target="_blank">Certified refurbished program</a> page in Seller Center.
     *  </span>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  As of September 1, 2021, condition ID 2500 ('Seller Refurbished') can no longer be used in the <strong>Cell Phones & Smartphones</strong> category (category ID 9355) for the following marketplaces: US, Canada, UK, Germany, and Australia. The 'Seller Refurbished' item condition will be replaced by one of three new refurbished values, which include condition ID 2010 ('Excellent - Refurbished'), condition ID 2020 ('Very Good - Refurbished'), and condition ID 2030 ('Good - Refurbished'). Similar to the condition ID 2000 ('Certified - Refurbished') item condition, the three new seller refurbished item conditions will be returned under the <strong>Category.SpecialFeatures</strong> container. To use any of these new refurbished item conditions in category 9355, sellers must go through an application and qualification process. The new item condition values appearing in the <strong>Category.SpecialFeatures</strong> container does not necessarily mean that a seller is eligible to list in category 9355 with these item conditions.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as conditionHelpURL
     *
     * URL to the eBay Web site's item condition help for the
     *  category. This may include policies about how to assess the
     *  condition of an item in the category. To reduce
     *  item-not-as-described disputes, we recommend that
     *  you refer sellers (and buyers) to these help pages.
     *  These help pages may vary for some categories.<br>
     *  <br>
     *  The Sandbox might not return valid help URLs.
     *
     * @return string
     */
    public function getConditionHelpURL()
    {
        return $this->conditionHelpURL;
    }

    /**
     * Sets a new conditionHelpURL
     *
     * URL to the eBay Web site's item condition help for the
     *  category. This may include policies about how to assess the
     *  condition of an item in the category. To reduce
     *  item-not-as-described disputes, we recommend that
     *  you refer sellers (and buyers) to these help pages.
     *  These help pages may vary for some categories.<br>
     *  <br>
     *  The Sandbox might not return valid help URLs.
     *
     * @param string $conditionHelpURL
     * @return self
     */
    public function setConditionHelpURL($conditionHelpURL)
    {
        $this->conditionHelpURL = $conditionHelpURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCondition();
        if (null !== $value && !empty($this->getCondition())) {
            $writer->write(array_map(function ($v) {
                return ["Condition" => $v];
            }, $value));
        }
        $value = $this->getConditionHelpURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConditionHelpURL", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Condition', true);
        if (null !== $value && !empty($value)) {
            $this->setCondition(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ConditionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionHelpURL');
        if (null !== $value) {
            $this->setConditionHelpURL($value);
        }
    }
}
