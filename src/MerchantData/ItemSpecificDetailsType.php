<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     *  Once you know the site threshold, it can also be helpful to know specific Item Specifics in a category that can have more than one value, such as 'Features'. Multiple values can only be specified for an Item Specific if the corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>.
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
     *  Once you know the site threshold, it can also be helpful to know specific Item Specifics in a category that can have more than one value, such as 'Features'. Multiple values can only be specified for an Item Specific if the corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>.
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
     *  Once you know the site threshold, it can also be helpful to know specific Item Specifics in a category that can have more than one value, such as 'Features'. Multiple values can only be specified for an Item Specific if the corresponding <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory#response.aspects.aspectConstraint.itemToAspectCardinality" target="_blank">itemToAspectCardinality</a> field of the <b>getItemAspectsForCategory</b> method shows a value of <code>MULTI</code>.
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaxItemSpecificsPerItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxItemSpecificsPerItem", $value);
        }
        $value = $this->getMaxValuesPerName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxValuesPerName", $value);
        }
        $value = $this->getMaxCharactersPerValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxCharactersPerValue", $value);
        }
        $value = $this->getMaxCharactersPerName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxCharactersPerName", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxItemSpecificsPerItem');
        if (null !== $value) {
            $this->setMaxItemSpecificsPerItem($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxValuesPerName');
        if (null !== $value) {
            $this->setMaxValuesPerName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxCharactersPerValue');
        if (null !== $value) {
            $this->setMaxCharactersPerValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxCharactersPerName');
        if (null !== $value) {
            $this->setMaxCharactersPerName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
