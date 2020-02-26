<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerProductInventoryStatusType
 *
 * Describes the inventory status of a specific Selling Manager Product
 * XSD Type: SellingManagerProductInventoryStatusType
 */
class SellingManagerProductInventoryStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Quantity of products scheduled to be listed.
     *
     * @var int $quantityScheduled
     */
    private $quantityScheduled = null;

    /**
     * Quantity of products actively listed.
     *
     * @var int $quantityActive
     */
    private $quantityActive = null;

    /**
     * Quantity of products sold.
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * Quantity of product unsold.
     *
     * @var int $quantityUnsold
     */
    private $quantityUnsold = null;

    /**
     * Percentage of ended listings that sold.
     *
     * @var float $successPercent
     */
    private $successPercent = null;

    /**
     * Average selling price for the product.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $averageSellingPrice
     */
    private $averageSellingPrice = null;

    /**
     * Gets as quantityScheduled
     *
     * Quantity of products scheduled to be listed.
     *
     * @return int
     */
    public function getQuantityScheduled()
    {
        return $this->quantityScheduled;
    }

    /**
     * Sets a new quantityScheduled
     *
     * Quantity of products scheduled to be listed.
     *
     * @param int $quantityScheduled
     * @return self
     */
    public function setQuantityScheduled($quantityScheduled)
    {
        $this->quantityScheduled = $quantityScheduled;
        return $this;
    }

    /**
     * Gets as quantityActive
     *
     * Quantity of products actively listed.
     *
     * @return int
     */
    public function getQuantityActive()
    {
        return $this->quantityActive;
    }

    /**
     * Sets a new quantityActive
     *
     * Quantity of products actively listed.
     *
     * @param int $quantityActive
     * @return self
     */
    public function setQuantityActive($quantityActive)
    {
        $this->quantityActive = $quantityActive;
        return $this;
    }

    /**
     * Gets as quantitySold
     *
     * Quantity of products sold.
     *
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * Sets a new quantitySold
     *
     * Quantity of products sold.
     *
     * @param int $quantitySold
     * @return self
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
        return $this;
    }

    /**
     * Gets as quantityUnsold
     *
     * Quantity of product unsold.
     *
     * @return int
     */
    public function getQuantityUnsold()
    {
        return $this->quantityUnsold;
    }

    /**
     * Sets a new quantityUnsold
     *
     * Quantity of product unsold.
     *
     * @param int $quantityUnsold
     * @return self
     */
    public function setQuantityUnsold($quantityUnsold)
    {
        $this->quantityUnsold = $quantityUnsold;
        return $this;
    }

    /**
     * Gets as successPercent
     *
     * Percentage of ended listings that sold.
     *
     * @return float
     */
    public function getSuccessPercent()
    {
        return $this->successPercent;
    }

    /**
     * Sets a new successPercent
     *
     * Percentage of ended listings that sold.
     *
     * @param float $successPercent
     * @return self
     */
    public function setSuccessPercent($successPercent)
    {
        $this->successPercent = $successPercent;
        return $this;
    }

    /**
     * Gets as averageSellingPrice
     *
     * Average selling price for the product.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAverageSellingPrice()
    {
        return $this->averageSellingPrice;
    }

    /**
     * Sets a new averageSellingPrice
     *
     * Average selling price for the product.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $averageSellingPrice
     * @return self
     */
    public function setAverageSellingPrice(\Nogrod\eBaySDK\Trading\AmountType $averageSellingPrice)
    {
        $this->averageSellingPrice = $averageSellingPrice;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getQuantityScheduled();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityScheduled", $value);
        }
        $value = $this->getQuantityActive();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityActive", $value);
        }
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
        }
        $value = $this->getQuantityUnsold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityUnsold", $value);
        }
        $value = $this->getSuccessPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SuccessPercent", $value);
        }
        $value = $this->getAverageSellingPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AverageSellingPrice", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityScheduled');
        if (null !== $value) {
            $this->setQuantityScheduled($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityActive');
        if (null !== $value) {
            $this->setQuantityActive($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityUnsold');
        if (null !== $value) {
            $this->setQuantityUnsold($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SuccessPercent');
        if (null !== $value) {
            $this->setSuccessPercent($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageSellingPrice');
        if (null !== $value) {
            $this->setAverageSellingPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
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
