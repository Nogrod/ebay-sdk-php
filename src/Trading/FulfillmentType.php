<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FulfillmentType
 *
 * This type is used to provide details about an order line item being fulfilled by eBay or an eBay fulfillment partner.
 * XSD Type: FulfillmentType
 */
class FulfillmentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The value returned in this field indicates the party that is handling fulfillment of the order line item. <br> <br>
     *  For eBay Vault scenarios, for the <strong>GetOrders</strong> <strong>GetItemTransactions</strong>, and <strong>GetSellerTransactions</strong> calls, this value is returned as <code>EBAY</code> for either of the following fulfillment options:<ul><li>Vault to Vault</li><li>Vault to Buyer</li></ul>
     *
     * @var string $fulfillmentBy
     */
    private $fulfillmentBy = null;

    /**
     * The value in this field identifies the warehouse where the order line item is located. <br> <br>
     *  For eBay Vault scenarios: <strong>GetOrders</strong> and <strong>GetSellerTransactions</strong> calls, if <b>FulfillmentBy</b> is returned as <code>EBAY</code>, <strong>FulfillmentRefId</strong> is not returned.
     *
     * @var string $fulfillmentRefId
     */
    private $fulfillmentRefId = null;

    /**
     * Gets as fulfillmentBy
     *
     * The value returned in this field indicates the party that is handling fulfillment of the order line item. <br> <br>
     *  For eBay Vault scenarios, for the <strong>GetOrders</strong> <strong>GetItemTransactions</strong>, and <strong>GetSellerTransactions</strong> calls, this value is returned as <code>EBAY</code> for either of the following fulfillment options:<ul><li>Vault to Vault</li><li>Vault to Buyer</li></ul>
     *
     * @return string
     */
    public function getFulfillmentBy()
    {
        return $this->fulfillmentBy;
    }

    /**
     * Sets a new fulfillmentBy
     *
     * The value returned in this field indicates the party that is handling fulfillment of the order line item. <br> <br>
     *  For eBay Vault scenarios, for the <strong>GetOrders</strong> <strong>GetItemTransactions</strong>, and <strong>GetSellerTransactions</strong> calls, this value is returned as <code>EBAY</code> for either of the following fulfillment options:<ul><li>Vault to Vault</li><li>Vault to Buyer</li></ul>
     *
     * @param string $fulfillmentBy
     * @return self
     */
    public function setFulfillmentBy($fulfillmentBy)
    {
        $this->fulfillmentBy = $fulfillmentBy;
        return $this;
    }

    /**
     * Gets as fulfillmentRefId
     *
     * The value in this field identifies the warehouse where the order line item is located. <br> <br>
     *  For eBay Vault scenarios: <strong>GetOrders</strong> and <strong>GetSellerTransactions</strong> calls, if <b>FulfillmentBy</b> is returned as <code>EBAY</code>, <strong>FulfillmentRefId</strong> is not returned.
     *
     * @return string
     */
    public function getFulfillmentRefId()
    {
        return $this->fulfillmentRefId;
    }

    /**
     * Sets a new fulfillmentRefId
     *
     * The value in this field identifies the warehouse where the order line item is located. <br> <br>
     *  For eBay Vault scenarios: <strong>GetOrders</strong> and <strong>GetSellerTransactions</strong> calls, if <b>FulfillmentBy</b> is returned as <code>EBAY</code>, <strong>FulfillmentRefId</strong> is not returned.
     *
     * @param string $fulfillmentRefId
     * @return self
     */
    public function setFulfillmentRefId($fulfillmentRefId)
    {
        $this->fulfillmentRefId = $fulfillmentRefId;
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
        $value = $this->fulfillmentBy;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FulfillmentBy', null, (string) $value);
        }
        $value = $this->fulfillmentRefId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FulfillmentRefId', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FulfillmentType
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
                case 'FulfillmentBy':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->fulfillmentBy = $value;
                    }
                    return true;
                case 'FulfillmentRefId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->fulfillmentRefId = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
