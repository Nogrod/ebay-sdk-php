<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ServiceCostType
 *
 * Type used by the <b>ServiceCost</b> container to display any service cost to the buyer for an item that will go through the Authenticity Guarantee process.
 * XSD Type: ServiceCostType
 */
class ServiceCostType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amount
     */
    private $amount = null;

    /**
     * The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a different currency than the currency of the listing site.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedFromAmount
     */
    private $convertedFromAmount = null;

    /**
     * Gets as amount
     *
     * The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amount
     * @return self
     */
    public function setAmount(\Nogrod\eBaySDK\Trading\AmountType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as convertedFromAmount
     *
     * The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a different currency than the currency of the listing site.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedFromAmount()
    {
        return $this->convertedFromAmount;
    }

    /**
     * Sets a new convertedFromAmount
     *
     * The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a different currency than the currency of the listing site.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedFromAmount
     * @return self
     */
    public function setConvertedFromAmount(\Nogrod\eBaySDK\Trading\AmountType $convertedFromAmount)
    {
        $this->convertedFromAmount = $convertedFromAmount;
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
        $value = $this->amount;
        if (null !== $value) {
            $writer->startElementNs(null, 'Amount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->convertedFromAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'ConvertedFromAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ServiceCostType
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
                case 'Amount':
                    $this->amount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ConvertedFromAmount':
                    $this->convertedFromAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Amount'] = $this->amount;
        $data['ConvertedFromAmount'] = $this->convertedFromAmount;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
