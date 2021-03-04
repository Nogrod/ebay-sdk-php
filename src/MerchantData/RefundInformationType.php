<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundInformationType
 *
 * Type defining the <strong>Refunds</strong> container, which contains an array of <strong>Refund</strong> containers. A <strong>Refund</strong> container consists of detailed information on an In-Store Pickup item refund.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings.
 *  </span>
 * XSD Type: RefundInformationType
 */
class RefundInformationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\RefundTransactionInfoType[] $refund
     */
    private $refund = [
        
    ];

    /**
     * Adds as refund
     *
     * This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\RefundTransactionInfoType $refund
     */
    public function addToRefund(\Nogrod\eBaySDK\MerchantData\RefundTransactionInfoType $refund)
    {
        $this->refund[] = $refund;
        return $this;
    }

    /**
     * isset refund
     *
     * This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefund($index)
    {
        return isset($this->refund[$index]);
    }

    /**
     * unset refund
     *
     * This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefund($index)
    {
        unset($this->refund[$index]);
    }

    /**
     * Gets as refund
     *
     * This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\RefundTransactionInfoType[]
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * Sets a new refund
     *
     * This container consists of detailed information on an In-Store Pickup item refund. This container is only returned if the merchant is refunding (or providing a store credit) the buyer for an In-Store Pickup item. A separate <strong>Refund</strong> container will be returned for each <strong>ORDER.RETURNED</strong> notification that the merchant sends to eBay through the <strong>Inbound Notifications API</strong>.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> A seller must be eligible for the In-Store Pickup feature to list an item that is eligible for In-Store Pickup. At this time, the In-Store Pickup feature is generally only available to large retail merchants on the US site, and can only be applied to multi-quantity, fixed-price listings. Eligible Merchants/developers can test In-Store Pickup functionality in the Sandbox environment, including listing items enabled with the In-Store Pickup feature, creating store locations and adding inventory to these stores using the Inventory Management API, and informing eBay of In-Store Pickup status changes using the Inbound Notifications API.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\RefundTransactionInfoType[] $refund
     * @return self
     */
    public function setRefund(array $refund)
    {
        $this->refund = $refund;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRefund();
        if (null !== $value && !empty($this->getRefund())) {
            $writer->write(array_map(function ($v) {
                return ["Refund" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Refund', true);
        if (null !== $value && !empty($value)) {
            $this->setRefund(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\RefundTransactionInfoType::fromKeyValue($v);
            }, $value));
        }
    }
}
