<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemSpecificDetailsType
 *
 * This type is used by the <b>ItemSpecificDetails</b> container that is returned in the <b>GeteBayDetails</b> call. The <b>ItemSpecificDetails</b> container consists of maximum threshold values that must be adhered to when creating, revising, or relisting items with Item Specifics. Item Specifics are used to provide descriptive details of an item in a structured manner.
 * XSD Type: ItemSpecificDetailsType
 */
class ItemSpecificDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value is the maximum number of Item Specifics name-value pairs that can be used when creating, revising, or relisting an item on the specified site. Item Specifics are used to provide descriptive details of an item in a structured manner.
     *
     * @var int $maxItemSpecificsPerItem
     */
    private $maxItemSpecificsPerItem = null;

    /**
     * This value is the maximum number of corresponding name values that can be used per Item Specific when creating, revising, or relisting an item on the specified site. An example of an Item Specific that might have multiple values is 'Features'. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Once you know the site threshold, it can also be helpful to know specific Item Specifics in a category that can have more than one value, such as 'Features'. Multiple values can only be specified for an Item Specific if the corresponding <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>.
     *
     * @var int $maxValuesPerName
     */
    private $maxValuesPerName = null;

    /**
     * This value is the maximum number of characters that can be used for an Item Specific value on the specified site.
     *
     * @var int $maxCharactersPerValue
     */
    private $maxCharactersPerValue = null;

    /**
     * This value is the maximum number of characters that can be used for an Item Specific name on the specified site.
     *
     * @var int $maxCharactersPerName
     */
    private $maxCharactersPerName = null;

    /**
     * This string indicates the version of the Item Specifics metadata.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * This timestamp indicates the date and time when the Item Specifics metadata was last updated. Time is in Greenwich Mean Time (GMT) time. This timestamp can be useful in determining if and when to refresh cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as maxItemSpecificsPerItem
     *
     * This value is the maximum number of Item Specifics name-value pairs that can be used when creating, revising, or relisting an item on the specified site. Item Specifics are used to provide descriptive details of an item in a structured manner.
     *
     * @return int
     */
    public function getMaxItemSpecificsPerItem()
    {
        return $this->maxItemSpecificsPerItem;
    }

    /**
     * Sets a new maxItemSpecificsPerItem
     *
     * This value is the maximum number of Item Specifics name-value pairs that can be used when creating, revising, or relisting an item on the specified site. Item Specifics are used to provide descriptive details of an item in a structured manner.
     *
     * @param int $maxItemSpecificsPerItem
     * @return self
     */
    public function setMaxItemSpecificsPerItem($maxItemSpecificsPerItem)
    {
        $this->maxItemSpecificsPerItem = $maxItemSpecificsPerItem;
        return $this;
    }

    /**
     * Gets as maxValuesPerName
     *
     * This value is the maximum number of corresponding name values that can be used per Item Specific when creating, revising, or relisting an item on the specified site. An example of an Item Specific that might have multiple values is 'Features'. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Once you know the site threshold, it can also be helpful to know specific Item Specifics in a category that can have more than one value, such as 'Features'. Multiple values can only be specified for an Item Specific if the corresponding <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>.
     *
     * @return int
     */
    public function getMaxValuesPerName()
    {
        return $this->maxValuesPerName;
    }

    /**
     * Sets a new maxValuesPerName
     *
     * This value is the maximum number of corresponding name values that can be used per Item Specific when creating, revising, or relisting an item on the specified site. An example of an Item Specific that might have multiple values is 'Features'. A product can have multiple features, hence multiple features can be passed in through multiple <b>ItemSpecifics.NameValueList.Value</b> fields.
     *  <br><br>
     *  Once you know the site threshold, it can also be helpful to know specific Item Specifics in a category that can have more than one value, such as 'Features'. Multiple values can only be specified for an Item Specific if the corresponding <a href="https://developer.ebay.com/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>.
     *
     * @param int $maxValuesPerName
     * @return self
     */
    public function setMaxValuesPerName($maxValuesPerName)
    {
        $this->maxValuesPerName = $maxValuesPerName;
        return $this;
    }

    /**
     * Gets as maxCharactersPerValue
     *
     * This value is the maximum number of characters that can be used for an Item Specific value on the specified site.
     *
     * @return int
     */
    public function getMaxCharactersPerValue()
    {
        return $this->maxCharactersPerValue;
    }

    /**
     * Sets a new maxCharactersPerValue
     *
     * This value is the maximum number of characters that can be used for an Item Specific value on the specified site.
     *
     * @param int $maxCharactersPerValue
     * @return self
     */
    public function setMaxCharactersPerValue($maxCharactersPerValue)
    {
        $this->maxCharactersPerValue = $maxCharactersPerValue;
        return $this;
    }

    /**
     * Gets as maxCharactersPerName
     *
     * This value is the maximum number of characters that can be used for an Item Specific name on the specified site.
     *
     * @return int
     */
    public function getMaxCharactersPerName()
    {
        return $this->maxCharactersPerName;
    }

    /**
     * Sets a new maxCharactersPerName
     *
     * This value is the maximum number of characters that can be used for an Item Specific name on the specified site.
     *
     * @param int $maxCharactersPerName
     * @return self
     */
    public function setMaxCharactersPerName($maxCharactersPerName)
    {
        $this->maxCharactersPerName = $maxCharactersPerName;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * This string indicates the version of the Item Specifics metadata.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * This string indicates the version of the Item Specifics metadata.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * This timestamp indicates the date and time when the Item Specifics metadata was last updated. Time is in Greenwich Mean Time (GMT) time. This timestamp can be useful in determining if and when to refresh cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * This timestamp indicates the date and time when the Item Specifics metadata was last updated. Time is in Greenwich Mean Time (GMT) time. This timestamp can be useful in determining if and when to refresh cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
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
        $value = $this->maxItemSpecificsPerItem;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxItemSpecificsPerItem', null, (string) $value);
        }
        $value = $this->maxValuesPerName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxValuesPerName', null, (string) $value);
        }
        $value = $this->maxCharactersPerValue;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxCharactersPerValue', null, (string) $value);
        }
        $value = $this->maxCharactersPerName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxCharactersPerName', null, (string) $value);
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemSpecificDetailsType
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
                case 'MaxItemSpecificsPerItem':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxItemSpecificsPerItem = (int) $value;
                    }
                    return true;
                case 'MaxValuesPerName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxValuesPerName = (int) $value;
                    }
                    return true;
                case 'MaxCharactersPerValue':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxCharactersPerValue = (int) $value;
                    }
                    return true;
                case 'MaxCharactersPerName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxCharactersPerName = (int) $value;
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }
}
