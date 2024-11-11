<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemCompatibilityType
 *
 * All information corresponding to an individual compatibility by application.
 *  <br><br>
 *  Each <b>Compatibility</b> container consists of the specifications for a motor vehicle that is compatible with the motor part or accessory.
 * XSD Type: ItemCompatibilityType
 */
class ItemCompatibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and 'Engine'.
     *
     * @var \Nogrod\eBaySDK\Shopping\NameValueListType[] $nameValueList
     */
    private $nameValueList = [

    ];

    /**
     * This field contains any notes pertaining to the compatibility being specified. This field is only returned if set for the compatible vehicle.
     *
     * @var string $compatibilityNotes
     */
    private $compatibilityNotes = null;

    /**
     * Adds as nameValueList
     *
     * Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and 'Engine'.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList
     */
    public function addToNameValueList(\Nogrod\eBaySDK\Shopping\NameValueListType $nameValueList)
    {
        $this->nameValueList[] = $nameValueList;
        return $this;
    }

    /**
     * isset nameValueList
     *
     * Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and 'Engine'.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameValueList($index)
    {
        return isset($this->nameValueList[$index]);
    }

    /**
     * unset nameValueList
     *
     * Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and 'Engine'.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameValueList($index)
    {
        unset($this->nameValueList[$index]);
    }

    /**
     * Gets as nameValueList
     *
     * Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and 'Engine'.
     *
     * @return \Nogrod\eBaySDK\Shopping\NameValueListType[]
     */
    public function getNameValueList()
    {
        return $this->nameValueList;
    }

    /**
     * Sets a new nameValueList
     *
     * Each <b>NameValueList</b> container will contain one aspect of a motor vehicle that is compatible with the motor vehicle part or accessory. For example, the allowed names might include 'Year', 'Make', and 'Model', 'Trim', and 'Engine'.
     *
     * @param \Nogrod\eBaySDK\Shopping\NameValueListType[] $nameValueList
     * @return self
     */
    public function setNameValueList(array $nameValueList)
    {
        $this->nameValueList = $nameValueList;
        return $this;
    }

    /**
     * Gets as compatibilityNotes
     *
     * This field contains any notes pertaining to the compatibility being specified. This field is only returned if set for the compatible vehicle.
     *
     * @return string
     */
    public function getCompatibilityNotes()
    {
        return $this->compatibilityNotes;
    }

    /**
     * Sets a new compatibilityNotes
     *
     * This field contains any notes pertaining to the compatibility being specified. This field is only returned if set for the compatible vehicle.
     *
     * @param string $compatibilityNotes
     * @return self
     */
    public function setCompatibilityNotes($compatibilityNotes)
    {
        $this->compatibilityNotes = $compatibilityNotes;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNameValueList();
        if (null !== $value && [] !== $this->getNameValueList()) {
            $writer->write(array_map(function ($v) {return ["NameValueList" => $v];}, $value));
        }
        $value = $this->getCompatibilityNotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompatibilityNotes", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameValueList');
        if (null !== $value) {
            $this->setNameValueList(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\NameValueListType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompatibilityNotes');
        if (null !== $value) {
            $this->setCompatibilityNotes($value);
        }
    }
}
