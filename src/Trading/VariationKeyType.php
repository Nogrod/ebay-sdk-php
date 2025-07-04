<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationKeyType
 *
 * Type used by the <b>VariationKey</b> container to identify one or more item variations to either add or remove from an eBay user's Watch List.
 * XSD Type: VariationKeyType
 */
class VariationKeyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of the fixed-price listing whose variation(s) should be added to or removed from the watch list.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This container is used to identify one or more item variations within the multiple-variation listing. If the specified name-value pairs do not match any item variation, the call behaves as if no variations were specified.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     */
    private $variationSpecifics = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the fixed-price listing whose variation(s) should be added to or removed from the watch list.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of the fixed-price listing whose variation(s) should be added to or removed from the watch list.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * This container is used to identify one or more item variations within the multiple-variation listing. If the specified name-value pairs do not match any item variation, the call behaves as if no variations were specified.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToVariationSpecifics(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->variationSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset variationSpecifics
     *
     * This container is used to identify one or more item variations within the multiple-variation listing. If the specified name-value pairs do not match any item variation, the call behaves as if no variations were specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVariationSpecifics($index)
    {
        return isset($this->variationSpecifics[$index]);
    }

    /**
     * unset variationSpecifics
     *
     * This container is used to identify one or more item variations within the multiple-variation listing. If the specified name-value pairs do not match any item variation, the call behaves as if no variations were specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVariationSpecifics($index)
    {
        unset($this->variationSpecifics[$index]);
    }

    /**
     * Gets as variationSpecifics
     *
     * This container is used to identify one or more item variations within the multiple-variation listing. If the specified name-value pairs do not match any item variation, the call behaves as if no variations were specified.
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getVariationSpecifics()
    {
        return $this->variationSpecifics;
    }

    /**
     * Sets a new variationSpecifics
     *
     * This container is used to identify one or more item variations within the multiple-variation listing. If the specified name-value pairs do not match any item variation, the call behaves as if no variations were specified.
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(array $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getVariationSpecifics();
        if (null !== $value && [] !== $this->getVariationSpecifics()) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VariationSpecifics", array_map(function ($v) {return ["NameValueList" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\VariationKeyType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VariationSpecifics');
        if (null !== $value) {
            $this->setVariationSpecifics(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue(Func::mapObject($v, '{urn:ebay:apis:eBLBaseComponents}NameValueList'));}, $value));
        }
    }
}
