<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing OrderArrayType
 *
 * Type used by the <b>OrderArray</b> container that is returned in order management calls. The <b>OrderArray</b> container consists of one or more eBay orders that match the input criteria.
 * XSD Type: OrderArrayType
 */
class OrderArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @var \Nogrod\eBaySDK\Trading\OrderType[] $order
     */
    private $order = [

    ];

    /**
     * This container will be returned if there are one or more errors or warnings with the corresponding order. This container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @var \Nogrod\eBaySDK\Trading\ErrorType[] $errors
     */
    private $errors = [

    ];

    /**
     * Adds as order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderType $order
     */
    public function addToOrder(\Nogrod\eBaySDK\Trading\OrderType $order)
    {
        $this->order[] = $order;
        return $this;
    }

    /**
     * isset order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrder($index)
    {
        return isset($this->order[$index]);
    }

    /**
     * unset order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrder($index)
    {
        unset($this->order[$index]);
    }

    /**
     * Gets as order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @return \Nogrod\eBaySDK\Trading\OrderType[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Details of an eBay order. One eBay order can have one or more order line items (<b>Transaction</b> objects).
     *
     * @param \Nogrod\eBaySDK\Trading\OrderType[] $order
     * @return self
     */
    public function setOrder(array $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Adds as errors
     *
     * This container will be returned if there are one or more errors or warnings with the corresponding order. This container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\Trading\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * This container will be returned if there are one or more errors or warnings with the corresponding order. This container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * This container will be returned if there are one or more errors or warnings with the corresponding order. This container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * This container will be returned if there are one or more errors or warnings with the corresponding order. This container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @return \Nogrod\eBaySDK\Trading\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * This container will be returned if there are one or more errors or warnings with the corresponding order. This container consists of detailed information on the warning or error, including the actual error message and information on any input parameters that actually triggered the warning or error.
     *
     * @param \Nogrod\eBaySDK\Trading\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrder();
        if (null !== $value && [] !== $this->getOrder()) {
            $writer->write(array_map(function ($v) {return ["Order" => $v];}, $value));
        }
        $value = $this->getErrors();
        if (null !== $value && [] !== $this->getErrors()) {
            $writer->write(array_map(function ($v) {return ["Errors" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\OrderArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Order');
        if (null !== $value) {
            $this->setOrder(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\OrderType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Errors');
        if (null !== $value) {
            $this->setErrors(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ErrorType::fromKeyValue($v);}, $value));
        }
    }
}
