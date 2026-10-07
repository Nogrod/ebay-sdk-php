<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CombinedPaymentPreferencesType
 *
 * Type used to indicate if the seller supports <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/manage-fulfill-combine-invoices.html">Combined Invoice</a>
 *  orders, and if so, defines whether the seller specifies any shipping discount before or after purchase.
 * XSD Type: CombinedPaymentPreferencesType
 */
class CombinedPaymentPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies whether or not a seller wants to allow buyers to combine single
     *  order line items into a Combined Invoice order. A Combined Invoice order can
     *  be created by the buyer or seller if multiple unpaid order line items exist
     *  between the same buyer and seller. Often, a Combined Invoice order can
     *  reduce shipping and handling expenses for the buyer and seller.
     *
     * @var string $combinedPaymentOption
     */
    private $combinedPaymentOption = null;

    /**
     * Gets as combinedPaymentOption
     *
     * Specifies whether or not a seller wants to allow buyers to combine single
     *  order line items into a Combined Invoice order. A Combined Invoice order can
     *  be created by the buyer or seller if multiple unpaid order line items exist
     *  between the same buyer and seller. Often, a Combined Invoice order can
     *  reduce shipping and handling expenses for the buyer and seller.
     *
     * @return string
     */
    public function getCombinedPaymentOption()
    {
        return $this->combinedPaymentOption;
    }

    /**
     * Sets a new combinedPaymentOption
     *
     * Specifies whether or not a seller wants to allow buyers to combine single
     *  order line items into a Combined Invoice order. A Combined Invoice order can
     *  be created by the buyer or seller if multiple unpaid order line items exist
     *  between the same buyer and seller. Often, a Combined Invoice order can
     *  reduce shipping and handling expenses for the buyer and seller.
     *
     * @param string $combinedPaymentOption
     * @return self
     */
    public function setCombinedPaymentOption($combinedPaymentOption)
    {
        $this->combinedPaymentOption = $combinedPaymentOption;
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
        $value = $this->combinedPaymentOption;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CombinedPaymentOption', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CombinedPaymentPreferencesType
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
                case 'CombinedPaymentOption':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->combinedPaymentOption = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
