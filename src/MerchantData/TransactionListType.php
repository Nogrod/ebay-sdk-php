<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TransactionListType
 *
 * Cost of insuring the delivery of this order with the courier.
 * XSD Type: TransactionListType
 */
class TransactionListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Description of the fee type.
     *
     * @var string $feeDescription
     */
    private $feeDescription = null;

    /**
     * List of transactions.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingTransactionType[] $listingTransaction
     */
    private $listingTransaction = [
        
    ];

    /**
     * Gets as feeDescription
     *
     * Description of the fee type.
     *
     * @return string
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * Description of the fee type.
     *
     * @param string $feeDescription
     * @return self
     */
    public function setFeeDescription($feeDescription)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Adds as listingTransaction
     *
     * List of transactions.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ListingTransactionType $listingTransaction
     */
    public function addToListingTransaction(\Nogrod\eBaySDK\MerchantData\ListingTransactionType $listingTransaction)
    {
        $this->listingTransaction[] = $listingTransaction;
        return $this;
    }

    /**
     * isset listingTransaction
     *
     * List of transactions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingTransaction($index)
    {
        return isset($this->listingTransaction[$index]);
    }

    /**
     * unset listingTransaction
     *
     * List of transactions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingTransaction($index)
    {
        unset($this->listingTransaction[$index]);
    }

    /**
     * Gets as listingTransaction
     *
     * List of transactions.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingTransactionType[]
     */
    public function getListingTransaction()
    {
        return $this->listingTransaction;
    }

    /**
     * Sets a new listingTransaction
     *
     * List of transactions.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingTransactionType[] $listingTransaction
     * @return self
     */
    public function setListingTransaction(array $listingTransaction)
    {
        $this->listingTransaction = $listingTransaction;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFeeDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeDescription", $value);
        }
        $value = $this->getListingTransaction();
        if (null !== $value && !empty($this->getListingTransaction())) {
            $writer->write(array_map(function ($v) {
                return ["ListingTransaction" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeDescription');
        if (null !== $value) {
            $this->setFeeDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTransaction', true);
        if (null !== $value && !empty($value)) {
            $this->setListingTransaction(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ListingTransactionType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
