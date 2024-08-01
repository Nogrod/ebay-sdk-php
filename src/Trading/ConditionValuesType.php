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
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  'Certified Refurbished', 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions will not be returned in this container for categories in the eBay Refurbished Program, but instead will be returned in the <b>Category.SpecialFeatures</b> container if the corresponding category supports any of these Refurbished item conditions. To used any of these Refurbished item conditions, sellers must go through an <a href="https://pages.ebay.com/seller-center/listing-and-marketing/ebay-refurbished-program.html" target="_blank">application and qualification process</a>. The new item condition values appearing in the Category.SpecialFeatures container does not necessarily indicate that a seller is eligible to list with these item conditions. If the corresponding category supports it, 'Seller Refurbished' will still be returned in this container.
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
     *  item-not-as-described cases, we recommend that
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
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  'Certified Refurbished', 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions will not be returned in this container for categories in the eBay Refurbished Program, but instead will be returned in the <b>Category.SpecialFeatures</b> container if the corresponding category supports any of these Refurbished item conditions. To used any of these Refurbished item conditions, sellers must go through an <a href="https://pages.ebay.com/seller-center/listing-and-marketing/ebay-refurbished-program.html" target="_blank">application and qualification process</a>. The new item condition values appearing in the Category.SpecialFeatures container does not necessarily indicate that a seller is eligible to list with these item conditions. If the corresponding category supports it, 'Seller Refurbished' will still be returned in this container.
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
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  'Certified Refurbished', 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions will not be returned in this container for categories in the eBay Refurbished Program, but instead will be returned in the <b>Category.SpecialFeatures</b> container if the corresponding category supports any of these Refurbished item conditions. To used any of these Refurbished item conditions, sellers must go through an <a href="https://pages.ebay.com/seller-center/listing-and-marketing/ebay-refurbished-program.html" target="_blank">application and qualification process</a>. The new item condition values appearing in the Category.SpecialFeatures container does not necessarily indicate that a seller is eligible to list with these item conditions. If the corresponding category supports it, 'Seller Refurbished' will still be returned in this container.
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
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  'Certified Refurbished', 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions will not be returned in this container for categories in the eBay Refurbished Program, but instead will be returned in the <b>Category.SpecialFeatures</b> container if the corresponding category supports any of these Refurbished item conditions. To used any of these Refurbished item conditions, sellers must go through an <a href="https://pages.ebay.com/seller-center/listing-and-marketing/ebay-refurbished-program.html" target="_blank">application and qualification process</a>. The new item condition values appearing in the Category.SpecialFeatures container does not necessarily indicate that a seller is eligible to list with these item conditions. If the corresponding category supports it, 'Seller Refurbished' will still be returned in this container.
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
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  'Certified Refurbished', 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions will not be returned in this container for categories in the eBay Refurbished Program, but instead will be returned in the <b>Category.SpecialFeatures</b> container if the corresponding category supports any of these Refurbished item conditions. To used any of these Refurbished item conditions, sellers must go through an <a href="https://pages.ebay.com/seller-center/listing-and-marketing/ebay-refurbished-program.html" target="_blank">application and qualification process</a>. The new item condition values appearing in the Category.SpecialFeatures container does not necessarily indicate that a seller is eligible to list with these item conditions. If the corresponding category supports it, 'Seller Refurbished' will still be returned in this container.
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
     * This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category.
     *  <br>
     *  <br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  'Certified Refurbished', 'Excellent - Refurbished', 'Very Good - Refurbished', and 'Good - Refurbished' item conditions will not be returned in this container for categories in the eBay Refurbished Program, but instead will be returned in the <b>Category.SpecialFeatures</b> container if the corresponding category supports any of these Refurbished item conditions. To used any of these Refurbished item conditions, sellers must go through an <a href="https://pages.ebay.com/seller-center/listing-and-marketing/ebay-refurbished-program.html" target="_blank">application and qualification process</a>. The new item condition values appearing in the Category.SpecialFeatures container does not necessarily indicate that a seller is eligible to list with these item conditions. If the corresponding category supports it, 'Seller Refurbished' will still be returned in this container.
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
     *  item-not-as-described cases, we recommend that
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
     *  item-not-as-described cases, we recommend that
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCondition();
        if (null !== $value && !empty($this->getCondition())) {
            $writer->write(array_map(function ($v) {return ["Condition" => $v];}, $value));
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
            $this->setCondition(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ConditionType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionHelpURL');
        if (null !== $value) {
            $this->setConditionHelpURL($value);
        }
    }
}
