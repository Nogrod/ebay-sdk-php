<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ListingTransactionType
 *
 * Cost of insuring the delivery of this order with the courier.
 * XSD Type: ListingTransactionType
 */
class ListingTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The date time when the transaction occur.
     *
     * @var \DateTime $transactionTime
     */
    private $transactionTime = null;

    /**
     * Item id of the transaction.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Title of the item for this transaction.
     *
     * @var string $itemTitle
     */
    private $itemTitle = null;

    /**
     * Serial number for this item, only applicable for motors.
     *
     * @var string $serialNumber
     */
    private $serialNumber = null;

    /**
     * Notes for this transaction.
     *
     * @var string $memo
     */
    private $memo = null;

    /**
     * Description of the category used.
     *
     * @var string $globalCategoryDescription
     */
    private $globalCategoryDescription = null;

    /**
     * Site description for the site where the listing occurred.
     *
     * @var string $siteDescription
     */
    private $siteDescription = null;

    /**
     * Fee Amount for a certain Fee type.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $feeAmount
     */
    private $feeAmount = null;

    /**
     * Gets as transactionTime
     *
     * The date time when the transaction occur.
     *
     * @return \DateTime
     */
    public function getTransactionTime()
    {
        return $this->transactionTime;
    }

    /**
     * Sets a new transactionTime
     *
     * The date time when the transaction occur.
     *
     * @param \DateTime $transactionTime
     * @return self
     */
    public function setTransactionTime(\DateTime $transactionTime)
    {
        $this->transactionTime = $transactionTime;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Item id of the transaction.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * Item id of the transaction.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as itemTitle
     *
     * Title of the item for this transaction.
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Sets a new itemTitle
     *
     * Title of the item for this transaction.
     *
     * @param string $itemTitle
     * @return self
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * Gets as serialNumber
     *
     * Serial number for this item, only applicable for motors.
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Sets a new serialNumber
     *
     * Serial number for this item, only applicable for motors.
     *
     * @param string $serialNumber
     * @return self
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
        return $this;
    }

    /**
     * Gets as memo
     *
     * Notes for this transaction.
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets a new memo
     *
     * Notes for this transaction.
     *
     * @param string $memo
     * @return self
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Gets as globalCategoryDescription
     *
     * Description of the category used.
     *
     * @return string
     */
    public function getGlobalCategoryDescription()
    {
        return $this->globalCategoryDescription;
    }

    /**
     * Sets a new globalCategoryDescription
     *
     * Description of the category used.
     *
     * @param string $globalCategoryDescription
     * @return self
     */
    public function setGlobalCategoryDescription($globalCategoryDescription)
    {
        $this->globalCategoryDescription = $globalCategoryDescription;
        return $this;
    }

    /**
     * Gets as siteDescription
     *
     * Site description for the site where the listing occurred.
     *
     * @return string
     */
    public function getSiteDescription()
    {
        return $this->siteDescription;
    }

    /**
     * Sets a new siteDescription
     *
     * Site description for the site where the listing occurred.
     *
     * @param string $siteDescription
     * @return self
     */
    public function setSiteDescription($siteDescription)
    {
        $this->siteDescription = $siteDescription;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * Fee Amount for a certain Fee type.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * Fee Amount for a certain Fee type.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $feeAmount
     * @return self
     */
    public function setFeeAmount(\Nogrod\eBaySDK\MerchantData\AmountType $feeAmount)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTransactionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionTime", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getItemTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemTitle", $value);
        }
        $value = $this->getSerialNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SerialNumber", $value);
        }
        $value = $this->getMemo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Memo", $value);
        }
        $value = $this->getGlobalCategoryDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GlobalCategoryDescription", $value);
        }
        $value = $this->getSiteDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteDescription", $value);
        }
        $value = $this->getFeeAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeeAmount", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionTime');
        if (null !== $value) {
            $this->setTransactionTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTitle');
        if (null !== $value) {
            $this->setItemTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SerialNumber');
        if (null !== $value) {
            $this->setSerialNumber($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Memo');
        if (null !== $value) {
            $this->setMemo($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GlobalCategoryDescription');
        if (null !== $value) {
            $this->setGlobalCategoryDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteDescription');
        if (null !== $value) {
            $this->setSiteDescription($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeeAmount');
        if (null !== $value) {
            $this->setFeeAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
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
