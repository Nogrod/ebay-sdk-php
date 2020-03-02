<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductPricingDetailsType
 *
 *
 * XSD Type: ProductPricingDetailsType
 */
class ProductPricingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $minimumSoldPrice
     */
    private $minimumSoldPrice = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $maximumSoldPrice
     */
    private $maximumSoldPrice = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPrice
     */
    private $averageSoldPrice = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $lastSoldPrice
     */
    private $lastSoldPrice = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $minimumSoldPriceOverall
     */
    private $minimumSoldPriceOverall = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $maximumSoldPriceOverall
     */
    private $maximumSoldPriceOverall = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPriceOverall
     */
    private $averageSoldPriceOverall = null;

    /**
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $lastSoldPriceOverall
     */
    private $lastSoldPriceOverall = null;

    /**
     * Gets as minimumSoldPrice
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getMinimumSoldPrice()
    {
        return $this->minimumSoldPrice;
    }

    /**
     * Sets a new minimumSoldPrice
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $minimumSoldPrice
     * @return self
     */
    public function setMinimumSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType $minimumSoldPrice)
    {
        $this->minimumSoldPrice = $minimumSoldPrice;
        return $this;
    }

    /**
     * Gets as maximumSoldPrice
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getMaximumSoldPrice()
    {
        return $this->maximumSoldPrice;
    }

    /**
     * Sets a new maximumSoldPrice
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $maximumSoldPrice
     * @return self
     */
    public function setMaximumSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType $maximumSoldPrice)
    {
        $this->maximumSoldPrice = $maximumSoldPrice;
        return $this;
    }

    /**
     * Gets as averageSoldPrice
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getAverageSoldPrice()
    {
        return $this->averageSoldPrice;
    }

    /**
     * Sets a new averageSoldPrice
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPrice
     * @return self
     */
    public function setAverageSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPrice)
    {
        $this->averageSoldPrice = $averageSoldPrice;
        return $this;
    }

    /**
     * Gets as lastSoldPrice
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getLastSoldPrice()
    {
        return $this->lastSoldPrice;
    }

    /**
     * Sets a new lastSoldPrice
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $lastSoldPrice
     * @return self
     */
    public function setLastSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType $lastSoldPrice)
    {
        $this->lastSoldPrice = $lastSoldPrice;
        return $this;
    }

    /**
     * Gets as minimumSoldPriceOverall
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getMinimumSoldPriceOverall()
    {
        return $this->minimumSoldPriceOverall;
    }

    /**
     * Sets a new minimumSoldPriceOverall
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $minimumSoldPriceOverall
     * @return self
     */
    public function setMinimumSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType $minimumSoldPriceOverall)
    {
        $this->minimumSoldPriceOverall = $minimumSoldPriceOverall;
        return $this;
    }

    /**
     * Gets as maximumSoldPriceOverall
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getMaximumSoldPriceOverall()
    {
        return $this->maximumSoldPriceOverall;
    }

    /**
     * Sets a new maximumSoldPriceOverall
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $maximumSoldPriceOverall
     * @return self
     */
    public function setMaximumSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType $maximumSoldPriceOverall)
    {
        $this->maximumSoldPriceOverall = $maximumSoldPriceOverall;
        return $this;
    }

    /**
     * Gets as averageSoldPriceOverall
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getAverageSoldPriceOverall()
    {
        return $this->averageSoldPriceOverall;
    }

    /**
     * Sets a new averageSoldPriceOverall
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPriceOverall
     * @return self
     */
    public function setAverageSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType $averageSoldPriceOverall)
    {
        $this->averageSoldPriceOverall = $averageSoldPriceOverall;
        return $this;
    }

    /**
     * Gets as lastSoldPriceOverall
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getLastSoldPriceOverall()
    {
        return $this->lastSoldPriceOverall;
    }

    /**
     * Sets a new lastSoldPriceOverall
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $lastSoldPriceOverall
     * @return self
     */
    public function setLastSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType $lastSoldPriceOverall)
    {
        $this->lastSoldPriceOverall = $lastSoldPriceOverall;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMinimumSoldPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumSoldPrice", $value);
        }
        $value = $this->getMaximumSoldPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumSoldPrice", $value);
        }
        $value = $this->getAverageSoldPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AverageSoldPrice", $value);
        }
        $value = $this->getLastSoldPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastSoldPrice", $value);
        }
        $value = $this->getMinimumSoldPriceOverall();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumSoldPriceOverall", $value);
        }
        $value = $this->getMaximumSoldPriceOverall();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumSoldPriceOverall", $value);
        }
        $value = $this->getAverageSoldPriceOverall();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AverageSoldPriceOverall", $value);
        }
        $value = $this->getLastSoldPriceOverall();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastSoldPriceOverall", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumSoldPrice');
        if (null !== $value) {
            $this->setMinimumSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumSoldPrice');
        if (null !== $value) {
            $this->setMaximumSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageSoldPrice');
        if (null !== $value) {
            $this->setAverageSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastSoldPrice');
        if (null !== $value) {
            $this->setLastSoldPrice(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumSoldPriceOverall');
        if (null !== $value) {
            $this->setMinimumSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumSoldPriceOverall');
        if (null !== $value) {
            $this->setMaximumSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageSoldPriceOverall');
        if (null !== $value) {
            $this->setAverageSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastSoldPriceOverall');
        if (null !== $value) {
            $this->setLastSoldPriceOverall(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
