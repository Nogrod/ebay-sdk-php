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
        if (!is_array($this->transactionArray)) {
            throw new \LogicException('transactionArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\TransactionType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\TransactionType> $transactionArray
     * @return self
     */
    public function setTransactionArray(iterable $transactionArray)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->transactionArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'TransactionArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'Transaction', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->paginationResult;
        if (null !== $value) {
            $writer->startElementNs(null, 'PaginationResult', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaginatedTransactionArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->transactionArray = [];
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
                case 'TransactionArray':
                    $this->transactionArray = Func::readList($reader, 'Transaction', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\TransactionType::xmlRead($reader));
                    return true;
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
