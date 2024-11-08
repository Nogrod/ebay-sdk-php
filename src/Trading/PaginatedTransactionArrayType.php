<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginatedTransactionArrayType
 *
 * Contains a paginated list of order line items.
 * XSD Type: PaginatedTransactionArrayType
 */
class PaginatedTransactionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Contains a list of Transaction objects. Returned as an
     *  empty tag if no applicable order line items exist.
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     */
    private $transactionArray = null;

    /**
     * Provides information about the list of order line items,
     *  including number of pages and number of entries.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Adds as transaction
     *
     * Contains a list of Transaction objects. Returned as an
     *  empty tag if no applicable order line items exist.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TransactionType $transaction
     */
    public function addToTransactionArray(\Nogrod\eBaySDK\Trading\TransactionType $transaction)
    {
        $this->transactionArray[] = $transaction;
        return $this;
    }

    /**
     * isset transactionArray
     *
     * Contains a list of Transaction objects. Returned as an
     *  empty tag if no applicable order line items exist.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransactionArray($index)
    {
        return isset($this->transactionArray[$index]);
    }

    /**
     * unset transactionArray
     *
     * Contains a list of Transaction objects. Returned as an
     *  empty tag if no applicable order line items exist.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransactionArray($index)
    {
        unset($this->transactionArray[$index]);
    }

    /**
     * Gets as transactionArray
     *
     * Contains a list of Transaction objects. Returned as an
     *  empty tag if no applicable order line items exist.
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionType[]
     */
    public function getTransactionArray()
    {
        return $this->transactionArray;
    }

    /**
     * Sets a new transactionArray
     *
     * Contains a list of Transaction objects. Returned as an
     *  empty tag if no applicable order line items exist.
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionType[] $transactionArray
     * @return self
     */
    public function setTransactionArray(array $transactionArray)
    {
        $this->transactionArray = $transactionArray;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * Provides information about the list of order line items,
     *  including number of pages and number of entries.
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
     * Provides information about the list of order line items,
     *  including number of pages and number of entries.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTransactionArray();
        if (null !== $value && !empty($this->getTransactionArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionArray", array_map(function ($v) {return ["Transaction" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setTransactionArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TransactionType::fromKeyValue(Func::mapArray($v, '{urn:ebay:apis:eBLBaseComponents}Transaction'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
    }
}
