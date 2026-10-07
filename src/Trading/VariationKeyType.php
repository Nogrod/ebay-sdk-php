<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationKeyType
 *
 * Type used by the <b>VariationKey</b> container to identify one or more item variations to either add or remove from an eBay user's Watch List.
 * XSD Type: VariationKeyType
 */
class VariationKeyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->variationSpecifics)) {
            throw new \LogicException('variationSpecifics is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\NameValueListType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\NameValueListType> $variationSpecifics
     * @return self
     */
    public function setVariationSpecifics(iterable $variationSpecifics)
    {
        $this->variationSpecifics = $variationSpecifics;
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
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->variationSpecifics;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'VariationSpecifics', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'NameValueList', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\VariationKeyType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->variationSpecifics = [];
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
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'VariationSpecifics':
                    $this->variationSpecifics = Func::readList($reader, 'NameValueList', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\NameValueListType::xmlRead($reader));
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ItemID'] = $this->itemID;
        $data['VariationSpecifics'] = Func::jsonList($this->variationSpecifics);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
