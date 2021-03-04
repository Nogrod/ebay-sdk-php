<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NameRecommendationType
 *
 * This type is used by the <b>NameRecommendation</b> container that is returned in <b>GetCategorySpecifics</b>. A <b>NameRecommendation</b> container is returned for every mandatory and recommended Item Specific for a category, and provides the recommended/most popular values for the Item Specific, as well as details, instructions, and constraint information for each Item Specific name-value pairs.
 * XSD Type: NameRecommendationType
 */
class NameRecommendationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This string field is the name of the mandatory or recommended Item Specific or Product Identifier type (e.g. Brand/MPN). The seller should use the actual string in this field when creating, revising, or relisting an item with this Item Specific. The number of Item Specifics that are returned can be controlled with the <b>MaxNames</b> field in the call request.
     *  <br/><br/>
     *  This field is always returned with each <b>NameRecommendation</b> container.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This container is returned for an item specific if eBay has data on how many searches have been performed for listings in the category using that item specific.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check" target="_blank">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in <b>GetCategorySpecifics</b>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\RelevanceIndicatorType $relevanceIndicator
     */
    private $relevanceIndicator = null;

    /**
     * This container provides details, instructions, and constraint information for each Item Specific name-value pairs. The fields that are returned under the <b>ValidationRules</b> container will vary per Item Specific.
     *  <br/><br/>
     *  Three key fields to look for are <b>MinValues</b>, <b>MaxValues</b>, and <b>VariationSpecifics</b>. If the <b>MinValues</b> appears for an Item Specific (usually with a value of '1'), it indicates that the Item Specific is required for the category. For many Item Specifics, the <b>MaxValues</b> field is returned with a value of '1', but the value will be higher for Item Specifics that support more than one value. The <b>VariationSpecifics</b> field is only returned (with a value of 'Disabled') when a seller is not allowed to pass in that Item Specific at the variation level in a multiple-variation listing.
     *  <br/><br/>
     *  This field is always returned with each <b>NameRecommendation</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\RecommendationValidationRulesType $validationRules
     */
    private $validationRules = null;

    /**
     * Each <b>ValueRecommendation</b> container shows a common/recommended/popular value for the corresponding Item Specific. Values are not returned for every Item Specific, including some instance aspects (such as 'Bundle Description') where the text that is passed in for the Item Specific value may vary widely per seller, or if eBay does not have recommended values available for the Item Specific. The number of values that are returned for each Item Specific can be controlled with the <b>MaxValuesPerName</b> field in the call request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For unique product identifying aspects, such as MPN, UPC, ISBN, or EAN, instead of an actual value being returned, boilerplate text is used, such as 'Does Not Apply'. If an MPN or GTIN is required, but the seller does not have the identifier, he/she can pass in the boilerplate text as an alternative to the actual identifier.
     *  </span>
     *  <br/>
     *  In addition to the recommended value(s) for an Item Specific, a <b>ValueRecommendation.ValidationRules</b> container will be returned if the <b>IncludeConfidence</b> filter is included in the call request and set to <code>true</code>. The return 'Confidence' value is a percentage value that indicates how confident eBay is that the recommended value is a valid value for the corresponding Item Specific. The <b>ValueRecommendation.ValidationRules</b> container may also get returned for the 'Brand' Item Specific if the particular product brand in that listing category requires an association with an eBay catalog product.
     *
     * @var \Nogrod\eBaySDK\Trading\ValueRecommendationType[] $valueRecommendation
     */
    private $valueRecommendation = [
        
    ];

    /**
     * This field contains a URL to a relevant eBay help page that may provide more information about a particular Item Specific. This field is only returned if a relevant eBay help page is available. If this field is returned, the <b>HelpText</b> field may also be returned and provide some context on the content of the help page.
     *
     * @var string $helpURL
     */
    private $helpURL = null;

    /**
     * This field is not currently returned in <b>GetCategorySpecifics</b> for any Item Specific.
     *
     * @var string $source
     */
    private $source = null;

    /**
     * The text in this field may provide some context on the content of the help page linked to in the <b>HelpURL</b> field. This field is only returned if the <b>HelpURL</b> field is returned, and is available.
     *
     * @var string $helpText
     */
    private $helpText = null;

    /**
     * Gets as name
     *
     * This string field is the name of the mandatory or recommended Item Specific or Product Identifier type (e.g. Brand/MPN). The seller should use the actual string in this field when creating, revising, or relisting an item with this Item Specific. The number of Item Specifics that are returned can be controlled with the <b>MaxNames</b> field in the call request.
     *  <br/><br/>
     *  This field is always returned with each <b>NameRecommendation</b> container.
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
     * This string field is the name of the mandatory or recommended Item Specific or Product Identifier type (e.g. Brand/MPN). The seller should use the actual string in this field when creating, revising, or relisting an item with this Item Specific. The number of Item Specifics that are returned can be controlled with the <b>MaxNames</b> field in the call request.
     *  <br/><br/>
     *  This field is always returned with each <b>NameRecommendation</b> container.
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
     * Gets as relevanceIndicator
     *
     * This container is returned for an item specific if eBay has data on how many searches have been performed for listings in the category using that item specific.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check" target="_blank">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in <b>GetCategorySpecifics</b>.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\RelevanceIndicatorType
     */
    public function getRelevanceIndicator()
    {
        return $this->relevanceIndicator;
    }

    /**
     * Sets a new relevanceIndicator
     *
     * This container is returned for an item specific if eBay has data on how many searches have been performed for listings in the category using that item specific.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check" target="_blank">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in <b>GetCategorySpecifics</b>.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\RelevanceIndicatorType $relevanceIndicator
     * @return self
     */
    public function setRelevanceIndicator(\Nogrod\eBaySDK\Trading\RelevanceIndicatorType $relevanceIndicator)
    {
        $this->relevanceIndicator = $relevanceIndicator;
        return $this;
    }

    /**
     * Gets as validationRules
     *
     * This container provides details, instructions, and constraint information for each Item Specific name-value pairs. The fields that are returned under the <b>ValidationRules</b> container will vary per Item Specific.
     *  <br/><br/>
     *  Three key fields to look for are <b>MinValues</b>, <b>MaxValues</b>, and <b>VariationSpecifics</b>. If the <b>MinValues</b> appears for an Item Specific (usually with a value of '1'), it indicates that the Item Specific is required for the category. For many Item Specifics, the <b>MaxValues</b> field is returned with a value of '1', but the value will be higher for Item Specifics that support more than one value. The <b>VariationSpecifics</b> field is only returned (with a value of 'Disabled') when a seller is not allowed to pass in that Item Specific at the variation level in a multiple-variation listing.
     *  <br/><br/>
     *  This field is always returned with each <b>NameRecommendation</b> container.
     *
     * @return \Nogrod\eBaySDK\Trading\RecommendationValidationRulesType
     */
    public function getValidationRules()
    {
        return $this->validationRules;
    }

    /**
     * Sets a new validationRules
     *
     * This container provides details, instructions, and constraint information for each Item Specific name-value pairs. The fields that are returned under the <b>ValidationRules</b> container will vary per Item Specific.
     *  <br/><br/>
     *  Three key fields to look for are <b>MinValues</b>, <b>MaxValues</b>, and <b>VariationSpecifics</b>. If the <b>MinValues</b> appears for an Item Specific (usually with a value of '1'), it indicates that the Item Specific is required for the category. For many Item Specifics, the <b>MaxValues</b> field is returned with a value of '1', but the value will be higher for Item Specifics that support more than one value. The <b>VariationSpecifics</b> field is only returned (with a value of 'Disabled') when a seller is not allowed to pass in that Item Specific at the variation level in a multiple-variation listing.
     *  <br/><br/>
     *  This field is always returned with each <b>NameRecommendation</b> container.
     *
     * @param \Nogrod\eBaySDK\Trading\RecommendationValidationRulesType $validationRules
     * @return self
     */
    public function setValidationRules(\Nogrod\eBaySDK\Trading\RecommendationValidationRulesType $validationRules)
    {
        $this->validationRules = $validationRules;
        return $this;
    }

    /**
     * Adds as valueRecommendation
     *
     * Each <b>ValueRecommendation</b> container shows a common/recommended/popular value for the corresponding Item Specific. Values are not returned for every Item Specific, including some instance aspects (such as 'Bundle Description') where the text that is passed in for the Item Specific value may vary widely per seller, or if eBay does not have recommended values available for the Item Specific. The number of values that are returned for each Item Specific can be controlled with the <b>MaxValuesPerName</b> field in the call request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For unique product identifying aspects, such as MPN, UPC, ISBN, or EAN, instead of an actual value being returned, boilerplate text is used, such as 'Does Not Apply'. If an MPN or GTIN is required, but the seller does not have the identifier, he/she can pass in the boilerplate text as an alternative to the actual identifier.
     *  </span>
     *  <br/>
     *  In addition to the recommended value(s) for an Item Specific, a <b>ValueRecommendation.ValidationRules</b> container will be returned if the <b>IncludeConfidence</b> filter is included in the call request and set to <code>true</code>. The return 'Confidence' value is a percentage value that indicates how confident eBay is that the recommended value is a valid value for the corresponding Item Specific. The <b>ValueRecommendation.ValidationRules</b> container may also get returned for the 'Brand' Item Specific if the particular product brand in that listing category requires an association with an eBay catalog product.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ValueRecommendationType $valueRecommendation
     */
    public function addToValueRecommendation(\Nogrod\eBaySDK\Trading\ValueRecommendationType $valueRecommendation)
    {
        $this->valueRecommendation[] = $valueRecommendation;
        return $this;
    }

    /**
     * isset valueRecommendation
     *
     * Each <b>ValueRecommendation</b> container shows a common/recommended/popular value for the corresponding Item Specific. Values are not returned for every Item Specific, including some instance aspects (such as 'Bundle Description') where the text that is passed in for the Item Specific value may vary widely per seller, or if eBay does not have recommended values available for the Item Specific. The number of values that are returned for each Item Specific can be controlled with the <b>MaxValuesPerName</b> field in the call request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For unique product identifying aspects, such as MPN, UPC, ISBN, or EAN, instead of an actual value being returned, boilerplate text is used, such as 'Does Not Apply'. If an MPN or GTIN is required, but the seller does not have the identifier, he/she can pass in the boilerplate text as an alternative to the actual identifier.
     *  </span>
     *  <br/>
     *  In addition to the recommended value(s) for an Item Specific, a <b>ValueRecommendation.ValidationRules</b> container will be returned if the <b>IncludeConfidence</b> filter is included in the call request and set to <code>true</code>. The return 'Confidence' value is a percentage value that indicates how confident eBay is that the recommended value is a valid value for the corresponding Item Specific. The <b>ValueRecommendation.ValidationRules</b> container may also get returned for the 'Brand' Item Specific if the particular product brand in that listing category requires an association with an eBay catalog product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValueRecommendation($index)
    {
        return isset($this->valueRecommendation[$index]);
    }

    /**
     * unset valueRecommendation
     *
     * Each <b>ValueRecommendation</b> container shows a common/recommended/popular value for the corresponding Item Specific. Values are not returned for every Item Specific, including some instance aspects (such as 'Bundle Description') where the text that is passed in for the Item Specific value may vary widely per seller, or if eBay does not have recommended values available for the Item Specific. The number of values that are returned for each Item Specific can be controlled with the <b>MaxValuesPerName</b> field in the call request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For unique product identifying aspects, such as MPN, UPC, ISBN, or EAN, instead of an actual value being returned, boilerplate text is used, such as 'Does Not Apply'. If an MPN or GTIN is required, but the seller does not have the identifier, he/she can pass in the boilerplate text as an alternative to the actual identifier.
     *  </span>
     *  <br/>
     *  In addition to the recommended value(s) for an Item Specific, a <b>ValueRecommendation.ValidationRules</b> container will be returned if the <b>IncludeConfidence</b> filter is included in the call request and set to <code>true</code>. The return 'Confidence' value is a percentage value that indicates how confident eBay is that the recommended value is a valid value for the corresponding Item Specific. The <b>ValueRecommendation.ValidationRules</b> container may also get returned for the 'Brand' Item Specific if the particular product brand in that listing category requires an association with an eBay catalog product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValueRecommendation($index)
    {
        unset($this->valueRecommendation[$index]);
    }

    /**
     * Gets as valueRecommendation
     *
     * Each <b>ValueRecommendation</b> container shows a common/recommended/popular value for the corresponding Item Specific. Values are not returned for every Item Specific, including some instance aspects (such as 'Bundle Description') where the text that is passed in for the Item Specific value may vary widely per seller, or if eBay does not have recommended values available for the Item Specific. The number of values that are returned for each Item Specific can be controlled with the <b>MaxValuesPerName</b> field in the call request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For unique product identifying aspects, such as MPN, UPC, ISBN, or EAN, instead of an actual value being returned, boilerplate text is used, such as 'Does Not Apply'. If an MPN or GTIN is required, but the seller does not have the identifier, he/she can pass in the boilerplate text as an alternative to the actual identifier.
     *  </span>
     *  <br/>
     *  In addition to the recommended value(s) for an Item Specific, a <b>ValueRecommendation.ValidationRules</b> container will be returned if the <b>IncludeConfidence</b> filter is included in the call request and set to <code>true</code>. The return 'Confidence' value is a percentage value that indicates how confident eBay is that the recommended value is a valid value for the corresponding Item Specific. The <b>ValueRecommendation.ValidationRules</b> container may also get returned for the 'Brand' Item Specific if the particular product brand in that listing category requires an association with an eBay catalog product.
     *
     * @return \Nogrod\eBaySDK\Trading\ValueRecommendationType[]
     */
    public function getValueRecommendation()
    {
        return $this->valueRecommendation;
    }

    /**
     * Sets a new valueRecommendation
     *
     * Each <b>ValueRecommendation</b> container shows a common/recommended/popular value for the corresponding Item Specific. Values are not returned for every Item Specific, including some instance aspects (such as 'Bundle Description') where the text that is passed in for the Item Specific value may vary widely per seller, or if eBay does not have recommended values available for the Item Specific. The number of values that are returned for each Item Specific can be controlled with the <b>MaxValuesPerName</b> field in the call request.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> For unique product identifying aspects, such as MPN, UPC, ISBN, or EAN, instead of an actual value being returned, boilerplate text is used, such as 'Does Not Apply'. If an MPN or GTIN is required, but the seller does not have the identifier, he/she can pass in the boilerplate text as an alternative to the actual identifier.
     *  </span>
     *  <br/>
     *  In addition to the recommended value(s) for an Item Specific, a <b>ValueRecommendation.ValidationRules</b> container will be returned if the <b>IncludeConfidence</b> filter is included in the call request and set to <code>true</code>. The return 'Confidence' value is a percentage value that indicates how confident eBay is that the recommended value is a valid value for the corresponding Item Specific. The <b>ValueRecommendation.ValidationRules</b> container may also get returned for the 'Brand' Item Specific if the particular product brand in that listing category requires an association with an eBay catalog product.
     *
     * @param \Nogrod\eBaySDK\Trading\ValueRecommendationType[] $valueRecommendation
     * @return self
     */
    public function setValueRecommendation(array $valueRecommendation)
    {
        $this->valueRecommendation = $valueRecommendation;
        return $this;
    }

    /**
     * Gets as helpURL
     *
     * This field contains a URL to a relevant eBay help page that may provide more information about a particular Item Specific. This field is only returned if a relevant eBay help page is available. If this field is returned, the <b>HelpText</b> field may also be returned and provide some context on the content of the help page.
     *
     * @return string
     */
    public function getHelpURL()
    {
        return $this->helpURL;
    }

    /**
     * Sets a new helpURL
     *
     * This field contains a URL to a relevant eBay help page that may provide more information about a particular Item Specific. This field is only returned if a relevant eBay help page is available. If this field is returned, the <b>HelpText</b> field may also be returned and provide some context on the content of the help page.
     *
     * @param string $helpURL
     * @return self
     */
    public function setHelpURL($helpURL)
    {
        $this->helpURL = $helpURL;
        return $this;
    }

    /**
     * Gets as source
     *
     * This field is not currently returned in <b>GetCategorySpecifics</b> for any Item Specific.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * This field is not currently returned in <b>GetCategorySpecifics</b> for any Item Specific.
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as helpText
     *
     * The text in this field may provide some context on the content of the help page linked to in the <b>HelpURL</b> field. This field is only returned if the <b>HelpURL</b> field is returned, and is available.
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->helpText;
    }

    /**
     * Sets a new helpText
     *
     * The text in this field may provide some context on the content of the help page linked to in the <b>HelpURL</b> field. This field is only returned if the <b>HelpURL</b> field is returned, and is available.
     *
     * @param string $helpText
     * @return self
     */
    public function setHelpText($helpText)
    {
        $this->helpText = $helpText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getRelevanceIndicator();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelevanceIndicator", $value);
        }
        $value = $this->getValidationRules();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValidationRules", $value);
        }
        $value = $this->getValueRecommendation();
        if (null !== $value && !empty($this->getValueRecommendation())) {
            $writer->write(array_map(function ($v) {
                return ["ValueRecommendation" => $v];
            }, $value));
        }
        $value = $this->getHelpURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HelpURL", $value);
        }
        $value = $this->getSource();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Source", $value);
        }
        $value = $this->getHelpText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HelpText", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelevanceIndicator');
        if (null !== $value) {
            $this->setRelevanceIndicator(\Nogrod\eBaySDK\Trading\RelevanceIndicatorType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValidationRules');
        if (null !== $value) {
            $this->setValidationRules(\Nogrod\eBaySDK\Trading\RecommendationValidationRulesType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValueRecommendation', true);
        if (null !== $value && !empty($value)) {
            $this->setValueRecommendation(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ValueRecommendationType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HelpURL');
        if (null !== $value) {
            $this->setHelpURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Source');
        if (null !== $value) {
            $this->setSource($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HelpText');
        if (null !== $value) {
            $this->setHelpText($value);
        }
    }
}
