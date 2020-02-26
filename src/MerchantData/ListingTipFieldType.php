<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ListingTipFieldType
 *
 * This type is deprecated.
 * XSD Type: ListingTipFieldType
 */
class ListingTipFieldType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $listingTipFieldID
     */
    private $listingTipFieldID = null;

    /**
     * This field is deprecated.
     *
     * @var string $fieldTip
     */
    private $fieldTip = null;

    /**
     * This field is deprecated.
     *
     * @var string $currentFieldText
     */
    private $currentFieldText = null;

    /**
     * This field is deprecated.
     *
     * @var string $currentFieldValue
     */
    private $currentFieldValue = null;

    /**
     * Gets as listingTipFieldID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getListingTipFieldID()
    {
        return $this->listingTipFieldID;
    }

    /**
     * Sets a new listingTipFieldID
     *
     * This field is deprecated.
     *
     * @param string $listingTipFieldID
     * @return self
     */
    public function setListingTipFieldID($listingTipFieldID)
    {
        $this->listingTipFieldID = $listingTipFieldID;
        return $this;
    }

    /**
     * Gets as fieldTip
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getFieldTip()
    {
        return $this->fieldTip;
    }

    /**
     * Sets a new fieldTip
     *
     * This field is deprecated.
     *
     * @param string $fieldTip
     * @return self
     */
    public function setFieldTip($fieldTip)
    {
        $this->fieldTip = $fieldTip;
        return $this;
    }

    /**
     * Gets as currentFieldText
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCurrentFieldText()
    {
        return $this->currentFieldText;
    }

    /**
     * Sets a new currentFieldText
     *
     * This field is deprecated.
     *
     * @param string $currentFieldText
     * @return self
     */
    public function setCurrentFieldText($currentFieldText)
    {
        $this->currentFieldText = $currentFieldText;
        return $this;
    }

    /**
     * Gets as currentFieldValue
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCurrentFieldValue()
    {
        return $this->currentFieldValue;
    }

    /**
     * Sets a new currentFieldValue
     *
     * This field is deprecated.
     *
     * @param string $currentFieldValue
     * @return self
     */
    public function setCurrentFieldValue($currentFieldValue)
    {
        $this->currentFieldValue = $currentFieldValue;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingTipFieldID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingTipFieldID", $value);
        }
        $value = $this->getFieldTip();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FieldTip", $value);
        }
        $value = $this->getCurrentFieldText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrentFieldText", $value);
        }
        $value = $this->getCurrentFieldValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrentFieldValue", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTipFieldID');
        if (null !== $value) {
            $this->setListingTipFieldID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FieldTip');
        if (null !== $value) {
            $this->setFieldTip($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrentFieldText');
        if (null !== $value) {
            $this->setCurrentFieldText($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrentFieldValue');
        if (null !== $value) {
            $this->setCurrentFieldValue($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
