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
     *  <br /><br />
     *  In the case of coins, this field is used to provide condition descriptors for a coin. For graded coins, the condition descriptors for <b>Grader</b>, <b>Number Grade</b>, and <b>Letter Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded coins, only the <b>Coin Condition</b> condition descriptor is required.
     *  <br /><br />
     *  In the case of salvage, this field is used to provide condition descriptors for the item. If the salvage is graded, the condition descriptor for <b>Grade</b> is required, while the condition descriptor for <b>Damage Code</b> is optional.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.<br /><br />In the case of coins, this field houses the information on the <b>Grader</b> and <b>Number Grade</b>, and <b>Letter Grade</b>descriptors of graded coins and the <b>Coin Condition</b> descriptor for ungraded coins.<br><br>In the case of salvage, this field houses the information on the <b>Grade</b> descriptor of a graded item.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
     *
     * @var string[] $value
     */
    private $value = [

    ];

    /**
     * Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards and coins, this field houses the optional <b>Certification Number</b> condition descriptor for graded items. For salvage, this field houses the optional <b>Damage Code</b> condition descriptor for graded items.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
     *
     * @var string $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Gets as name
     *
     * A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
     *  <br /><br />
     *  In the case of coins, this field is used to provide condition descriptors for a coin. For graded coins, the condition descriptors for <b>Grader</b>, <b>Number Grade</b>, and <b>Letter Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded coins, only the <b>Coin Condition</b> condition descriptor is required.
     *  <br /><br />
     *  In the case of salvage, this field is used to provide condition descriptors for the item. If the salvage is graded, the condition descriptor for <b>Grade</b> is required, while the condition descriptor for <b>Damage Code</b> is optional.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
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
     *  <br /><br />
     *  In the case of coins, this field is used to provide condition descriptors for a coin. For graded coins, the condition descriptors for <b>Grader</b>, <b>Number Grade</b>, and <b>Letter Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For ungraded coins, only the <b>Coin Condition</b> condition descriptor is required.
     *  <br /><br />
     *  In the case of salvage, this field is used to provide condition descriptors for the item. If the salvage is graded, the condition descriptor for <b>Grade</b> is required, while the condition descriptor for <b>Damage Code</b> is optional.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
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
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.<br /><br />In the case of coins, this field houses the information on the <b>Grader</b> and <b>Number Grade</b>, and <b>Letter Grade</b>descriptors of graded coins and the <b>Coin Condition</b> descriptor for ungraded coins.<br><br>In the case of salvage, this field houses the information on the <b>Grade</b> descriptor of a graded item.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
     *
     * @return self
     * @param string $value
     */
    public function addToValue($value)
    {
        if (!is_array($this->value)) {
            throw new \LogicException('value is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.<br /><br />In the case of coins, this field houses the information on the <b>Grader</b> and <b>Number Grade</b>, and <b>Letter Grade</b>descriptors of graded coins and the <b>Coin Condition</b> descriptor for ungraded coins.<br><br>In the case of salvage, this field houses the information on the <b>Grade</b> descriptor of a graded item.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
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
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.<br /><br />In the case of coins, this field houses the information on the <b>Grader</b> and <b>Number Grade</b>, and <b>Letter Grade</b>descriptors of graded coins and the <b>Coin Condition</b> descriptor for ungraded coins.<br><br>In the case of salvage, this field houses the information on the <b>Grade</b> descriptor of a graded item.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
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
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.<br /><br />In the case of coins, this field houses the information on the <b>Grader</b> and <b>Number Grade</b>, and <b>Letter Grade</b>descriptors of graded coins and the <b>Coin Condition</b> descriptor for ungraded coins.<br><br>In the case of salvage, this field houses the information on the <b>Grade</b> descriptor of a graded item.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
     *
     * @return iterable<string>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * A numeric ID is passed in this field. This numeric ID maps to the value associated with a condition descriptor name. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.<br /><br />In the case of coins, this field houses the information on the <b>Grader</b> and <b>Number Grade</b>, and <b>Letter Grade</b>descriptors of graded coins and the <b>Coin Condition</b> descriptor for ungraded coins.<br><br>In the case of salvage, this field houses the information on the <b>Grade</b> descriptor of a graded item.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
     *
     * @param iterable<string> $value
     * @return self
     */
    public function setValue(iterable $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as additionalInfo
     *
     * Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards and coins, this field houses the optional <b>Certification Number</b> condition descriptor for graded items. For salvage, this field houses the optional <b>Damage Code</b> condition descriptor for graded items.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
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
     * Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards and coins, this field houses the optional <b>Certification Number</b> condition descriptor for graded items. For salvage, this field houses the optional <b>Damage Code</b> condition descriptor for graded items.<br><br><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span> Condition grading for salvage items is only available for eligible sellers.</p></div>
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->value;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'Value', null, (string) $v);
            }
        }
        $value = $this->additionalInfo;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AdditionalInfo', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ConditionDescriptorType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->value = [];
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
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'Value':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->value[] = $value;
                    }
                    return true;
                case 'AdditionalInfo':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->additionalInfo = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
