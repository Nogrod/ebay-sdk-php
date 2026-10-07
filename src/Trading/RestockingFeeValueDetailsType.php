<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RestockingFeeValueDetailsType
 *
 * This type is deprecated, as sellers are no longer allowed to set a restocking fee through a listings's return policy.
 * XSD Type: RestockingFeeValueDetailsType
 */
class RestockingFeeValueDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $restockingFeeValueOption
     */
    private $restockingFeeValueOption = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as restockingFeeValueOption
     *
     * @return string
     */
    public function getRestockingFeeValueOption()
    {
        return $this->restockingFeeValueOption;
    }

    /**
     * Sets a new restockingFeeValueOption
     *
     * @param string $restockingFeeValueOption
     * @return self
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption)
    {
        $this->restockingFeeValueOption = $restockingFeeValueOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
        $value = $this->restockingFeeValueOption;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RestockingFeeValueOption', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RestockingFeeValueDetailsType
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
                case 'RestockingFeeValueOption':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->restockingFeeValueOption = $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
