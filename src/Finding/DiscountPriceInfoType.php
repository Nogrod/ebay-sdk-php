<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiscountPriceInfoType
 *
 *
 * XSD Type: DiscountPriceInfo
 */
class DiscountPriceInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var \Nogrod\eBaySDK\Finding\AmountType $originalRetailPrice
     */
    private $originalRetailPrice = null;

    /**
     * @var string $minimumAdvertisedPriceExposure
     */
    private $minimumAdvertisedPriceExposure = null;

    /**
     * @var string $pricingTreatment
     */
    private $pricingTreatment = null;

    /**
     * @var bool $soldOnEbay
     */
    private $soldOnEbay = null;

    /**
     * @var bool $soldOffEbay
     */
    private $soldOffEbay = null;

    /**
     * Gets as originalRetailPrice
     *
     * @return \Nogrod\eBaySDK\Finding\AmountType
     */
    public function getOriginalRetailPrice()
    {
        return $this->originalRetailPrice;
    }

    /**
     * Sets a new originalRetailPrice
     *
     * @param \Nogrod\eBaySDK\Finding\AmountType $originalRetailPrice
     * @return self
     */
    public function setOriginalRetailPrice(\Nogrod\eBaySDK\Finding\AmountType $originalRetailPrice)
    {
        $this->originalRetailPrice = $originalRetailPrice;
        return $this;
    }

    /**
     * Gets as minimumAdvertisedPriceExposure
     *
     * @return string
     */
    public function getMinimumAdvertisedPriceExposure()
    {
        return $this->minimumAdvertisedPriceExposure;
    }

    /**
     * Sets a new minimumAdvertisedPriceExposure
     *
     * @param string $minimumAdvertisedPriceExposure
     * @return self
     */
    public function setMinimumAdvertisedPriceExposure($minimumAdvertisedPriceExposure)
    {
        $this->minimumAdvertisedPriceExposure = $minimumAdvertisedPriceExposure;
        return $this;
    }

    /**
     * Gets as pricingTreatment
     *
     * @return string
     */
    public function getPricingTreatment()
    {
        return $this->pricingTreatment;
    }

    /**
     * Sets a new pricingTreatment
     *
     * @param string $pricingTreatment
     * @return self
     */
    public function setPricingTreatment($pricingTreatment)
    {
        $this->pricingTreatment = $pricingTreatment;
        return $this;
    }

    /**
     * Gets as soldOnEbay
     *
     * @return bool
     */
    public function getSoldOnEbay()
    {
        return $this->soldOnEbay;
    }

    /**
     * Sets a new soldOnEbay
     *
     * @param bool $soldOnEbay
     * @return self
     */
    public function setSoldOnEbay($soldOnEbay)
    {
        $this->soldOnEbay = $soldOnEbay;
        return $this;
    }

    /**
     * Gets as soldOffEbay
     *
     * @return bool
     */
    public function getSoldOffEbay()
    {
        return $this->soldOffEbay;
    }

    /**
     * Sets a new soldOffEbay
     *
     * @param bool $soldOffEbay
     * @return self
     */
    public function setSoldOffEbay($soldOffEbay)
    {
        $this->soldOffEbay = $soldOffEbay;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getOriginalRetailPrice();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}originalRetailPrice", $value);
        }
        $value = $this->getMinimumAdvertisedPriceExposure();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}minimumAdvertisedPriceExposure", $value);
        }
        $value = $this->getPricingTreatment();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}pricingTreatment", $value);
        }
        $value = $this->getSoldOnEbay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}soldOnEbay", $value);
        }
        $value = $this->getSoldOffEbay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}soldOffEbay", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}originalRetailPrice');
        if (null !== $value) {
            $this->setOriginalRetailPrice(\Nogrod\eBaySDK\Finding\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}minimumAdvertisedPriceExposure');
        if (null !== $value) {
            $this->setMinimumAdvertisedPriceExposure($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}pricingTreatment');
        if (null !== $value) {
            $this->setPricingTreatment($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}soldOnEbay');
        if (null !== $value) {
            $this->setSoldOnEbay($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}soldOffEbay');
        if (null !== $value) {
            $this->setSoldOffEbay($value);
        }
    }
}
