<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerReturnPreferencesType
 *
 * Type defining the <b>SellerReturnPreferences</b> container, which consists of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns.
 * XSD Type: SellerReturnPreferencesType
 */
class SellerReturnPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This flag indicates whether or not an eligible seller has opted in to eBay
     *  Managed Returns through the Return Preferences of My eBay.
     *
     * @var bool $optedIn
     */
    private $optedIn = null;

    /**
     * Gets as optedIn
     *
     * This flag indicates whether or not an eligible seller has opted in to eBay
     *  Managed Returns through the Return Preferences of My eBay.
     *
     * @return bool
     */
    public function getOptedIn()
    {
        return $this->optedIn;
    }

    /**
     * Sets a new optedIn
     *
     * This flag indicates whether or not an eligible seller has opted in to eBay
     *  Managed Returns through the Return Preferences of My eBay.
     *
     * @param bool $optedIn
     * @return self
     */
    public function setOptedIn($optedIn)
    {
        $this->optedIn = $optedIn;
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
        $value = $this->optedIn;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OptedIn', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerReturnPreferencesType
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
                case 'OptedIn':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->optedIn = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['OptedIn'] = $this->optedIn;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
