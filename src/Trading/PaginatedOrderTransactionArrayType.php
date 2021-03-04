<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginatedOrderTransactionArrayType
 *
 * Contains a paginated list of orders.
 * XSD Type: PaginatedOrderTransactionArrayType
 */
class PaginatedOrderTransactionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains the list of orders.
     *
     * @var \Nogrod\eBaySDK\Trading\OrderTransactionType[] $orderTransactionArray
     */
    private $orderTransactionArray = null;

    /**
     * Specifies information about the list, including number of pages and
     *  number of entries.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Adds as orderTransaction
     *
     * Contains the list of orders.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\OrderTransactionType $orderTransaction
     */
    public function addToOrderTransactionArray(\Nogrod\eBaySDK\Trading\OrderTransactionType $orderTransaction)
    {
        $this->orderTransactionArray[] = $orderTransaction;
        return $this;
    }

    /**
     * isset orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderTransactionArray($index)
    {
        return isset($this->orderTransactionArray[$index]);
    }

    /**
     * unset orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderTransactionArray($index)
    {
        unset($this->orderTransactionArray[$index]);
    }

    /**
     * Gets as orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @return \Nogrod\eBaySDK\Trading\OrderTransactionType[]
     */
    public function getOrderTransactionArray()
    {
        return $this->orderTransactionArray;
    }

    /**
     * Sets a new orderTransactionArray
     *
     * Contains the list of orders.
     *
     * @param \Nogrod\eBaySDK\Trading\OrderTransactionType[] $orderTransactionArray
     * @return self
     */
    public function setOrderTransactionArray(array $orderTransactionArray)
    {
        $this->orderTransactionArray = $orderTransactionArray;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * Specifies information about the list, including number of pages and
     *  number of entries.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationResultType
     */
    public function getPaginationResult()
    {
        return $this->paginationResult;
    }

    /**
     * Sets a new paginationResult
     *
     * Specifies information about the list, including number of pages and
     *  number of entries.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOrderTransactionArray();
        if (null !== $value && !empty($this->getOrderTransactionArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderTransactionArray", array_map(function ($v) {
                return ["OrderTransaction" => $v];
            }, $value));
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderTransactionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setOrderTransactionArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\OrderTransactionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
    }
}
