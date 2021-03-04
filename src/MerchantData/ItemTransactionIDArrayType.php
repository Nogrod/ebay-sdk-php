<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemTransactionIDArrayType
 *
 * This type is used by the <b>ItemTransactionIDArray</b> container in the <b>GetOrderTransactions</b> call. The <b>ItemTransactionIDArray</b> container is used to specify one or more specific order line items to retrieve.
 * XSD Type: ItemTransactionIDArrayType
 */
class ItemTransactionIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve.
     *  <br><br>
     *  The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType[] $itemTransactionID
     */
    private $itemTransactionID = [
        
    ];

    /**
     * Adds as itemTransactionID
     *
     * An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve.
     *  <br><br>
     *  The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType $itemTransactionID
     */
    public function addToItemTransactionID(\Nogrod\eBaySDK\MerchantData\ItemTransactionIDType $itemTransactionID)
    {
        $this->itemTransactionID[] = $itemTransactionID;
        return $this;
    }

    /**
     * isset itemTransactionID
     *
     * An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve.
     *  <br><br>
     *  The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemTransactionID($index)
    {
        return isset($this->itemTransactionID[$index]);
    }

    /**
     * unset itemTransactionID
     *
     * An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve.
     *  <br><br>
     *  The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemTransactionID($index)
    {
        unset($this->itemTransactionID[$index]);
    }

    /**
     * Gets as itemTransactionID
     *
     * An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve.
     *  <br><br>
     *  The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType[]
     */
    public function getItemTransactionID()
    {
        return $this->itemTransactionID;
    }

    /**
     * Sets a new itemTransactionID
     *
     * An <b>ItemTransactionID</b> container is required to specify a specific order line item to retrieve.
     *  <br><br>
     *  The seller has the option of using an <b>OrderLineItemID</b>, a <b>SKU</b> value (if it exists for the order line item and the <b>InventoryTrackingMethod</b> is set to <code>SKU</code>), or an <b>ItemID</b>/<b>TransactionID</b> pair to identify an order line item.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType[] $itemTransactionID
     * @return self
     */
    public function setItemTransactionID(array $itemTransactionID)
    {
        $this->itemTransactionID = $itemTransactionID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemTransactionID();
        if (null !== $value && !empty($this->getItemTransactionID())) {
            $writer->write(array_map(function ($v) {
                return ["ItemTransactionID" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTransactionID', true);
        if (null !== $value && !empty($value)) {
            $this->setItemTransactionID(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ItemTransactionIDType::fromKeyValue($v);
            }, $value));
        }
    }
}
