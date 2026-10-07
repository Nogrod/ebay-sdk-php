<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaginatedOrderTransactionArrayType
 *
 * Contains a paginated list of orders.
 * XSD Type: PaginatedOrderTransactionArrayType
 */
class PaginatedOrderTransactionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->orderTransactionArray)) {
            throw new \LogicException('orderTransactionArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\OrderTransactionType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\OrderTransactionType> $orderTransactionArray
     * @return self
     */
    public function setOrderTransactionArray(iterable $orderTransactionArray)
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
        $value = $this->orderTransactionArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'OrderTransactionArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'OrderTransaction', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaginatedOrderTransactionArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->orderTransactionArray = [];
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
                case 'OrderTransactionArray':
                    $this->orderTransactionArray = Func::readList($reader, 'OrderTransaction', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\OrderTransactionType::xmlRead($reader));
                    return true;
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['OrderTransactionArray'] = Func::jsonList($this->orderTransactionArray);
        $data['PaginationResult'] = $this->paginationResult;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
