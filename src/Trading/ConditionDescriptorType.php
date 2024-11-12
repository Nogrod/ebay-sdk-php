<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionDescriptorType
 *
 * This type contains details like name, value, and additional information, that is provided by the seller about the specific condition of an item.
 * XSD Type: ConditionDescriptorType
 */
class ConditionDescriptorType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     *
     * @var string[] $value
     */
    private $value = [

    ];

    /**
     * Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for graded cards.
     *  <br />
     *
     * @var string $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Gets as name
     *
     * A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
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
     * A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
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
     * Adds as value
     *
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     *
     * @return self
     * @param string $value
     */
    public function addToValue($value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     *
     * @param string[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as additionalInfo
     *
     * Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for graded cards.
     *  <br />
     *
     * @return string
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for graded cards.
     *  <br />
     *
     * @param string $additionalInfo
     * @return self
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getValue();
        if (null !== $value && [] !== $this->getValue()) {
            $writer->write(array_map(function ($v) {return ["Value" => $v];}, $value));
        }
        $value = $this->getAdditionalInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdditionalInfo", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value', true);
        if (null !== $value) {
            $this->setValue($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdditionalInfo');
        if (null !== $value) {
            $this->setAdditionalInfo($value);
        }
    }
}
