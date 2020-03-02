<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiagramSpecificsType
 *
 * Defines an input DiagramSpecifics for OE Parts center sellers which in turn help display OE diagrams on ViewItem page
 * XSD Type: DiagramSpecificsType
 */
class DiagramSpecificsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A name-value pair describing the diagram specifics for single compatible application.
     *  <br><br>
     *
     * @var \Nogrod\eBaySDK\MerchantData\NameValueListType[] $nameValueList
     */
    private $nameValueList = [
        
    ];

    /**
     * Adds as nameValueList
     *
     * A name-value pair describing the diagram specifics for single compatible application.
     *  <br><br>
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList
     */
    public function addToNameValueList(\Nogrod\eBaySDK\MerchantData\NameValueListType $nameValueList)
    {
        $this->nameValueList[] = $nameValueList;
        return $this;
    }

    /**
     * isset nameValueList
     *
     * A name-value pair describing the diagram specifics for single compatible application.
     *  <br><br>
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
     * A name-value pair describing the diagram specifics for single compatible application.
     *  <br><br>
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
     * A name-value pair describing the diagram specifics for single compatible application.
     *  <br><br>
     *
     * @return \Nogrod\eBaySDK\MerchantData\NameValueListType[]
     */
    public function getNameValueList()
    {
        return $this->nameValueList;
    }

    /**
     * Sets a new nameValueList
     *
     * A name-value pair describing the diagram specifics for single compatible application.
     *  <br><br>
     *
     * @param \Nogrod\eBaySDK\MerchantData\NameValueListType[] $nameValueList
     * @return self
     */
    public function setNameValueList(array $nameValueList)
    {
        $this->nameValueList = $nameValueList;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNameValueList();
        if (null !== $value && !empty($this->getNameValueList())) {
            $writer->write(array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setNameValueList(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NameValueListType::fromKeyValue($v);
            }, $value));
        }
    }
}
