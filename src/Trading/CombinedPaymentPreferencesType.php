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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCombinedPaymentOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedPaymentOption", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedPaymentOption');
        if (null !== $value) {
            $this->setCombinedPaymentOption($value);
        }
    }
}
