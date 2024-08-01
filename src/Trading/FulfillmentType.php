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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFulfillmentBy();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FulfillmentBy", $value);
        }
        $value = $this->getFulfillmentRefId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FulfillmentRefId", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FulfillmentBy');
        if (null !== $value) {
            $this->setFulfillmentBy($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FulfillmentRefId');
        if (null !== $value) {
            $this->setFulfillmentRefId($value);
        }
    }
}
