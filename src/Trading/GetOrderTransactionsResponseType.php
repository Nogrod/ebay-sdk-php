<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetOrderTransactionsResponseType
 *
 * The base response type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more eBay.com orders. An <b>OrderArray.Order</b> container is returned for each order that matches the input criteria in the call request.
 * XSD Type: GetOrderTransactionsResponseType
 */
class GetOrderTransactionsResponseType extends AbstractResponseType
{
    /**
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\OrderArrayType $orderArray
     */
    private $orderArray = null;

    /**
     * Gets as orderArray
     *
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @return \Nogrod\eBaySDK\Trading\OrderArrayType
     */
    public function getOrderArray()
    {
        return $this->orderArray;
    }

    /**
     * Sets a new orderArray
     *
     * This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     *
     * @param \Nogrod\eBaySDK\Trading\OrderArrayType $orderArray
     * @return self
     */
    public function setOrderArray(\Nogrod\eBaySDK\Trading\OrderArrayType $orderArray)
    {
        $this->orderArray = $orderArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getOrderArray();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderArray", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderArray');
        if (null !== $value) {
            $this->setOrderArray(\Nogrod\eBaySDK\Trading\OrderArrayType::fromKeyValue($value));
        }
    }
}
