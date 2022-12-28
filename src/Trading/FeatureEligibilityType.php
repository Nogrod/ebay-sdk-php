<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeatureEligibilityType
 *
 * Indicates whether the seller making the request can list with certain features.
 *  A seller's eligibility is determined by their Feedback score.
 * XSD Type: FeatureEligibilityType
 */
class FeatureEligibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates whether the seller is eligible to create auction listings enabled with the 'Buy It Now' option. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not eligible.
     *
     * @var bool $qualifiesForBuyItNow
     */
    private $qualifiesForBuyItNow = null;

    /**
     * Indicates whether the seller is eligible to specify the 'Buy It Now' option for multiple-quantity listings. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not eligible.
     *
     * @var bool $qualifiesForBuyItNowMultiple
     */
    private $qualifiesForBuyItNowMultiple = null;

    /**
     * Indicates whether the seller is eligible to create fixed-price listings with a one-day listing duration. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that the seller is not eligible. Note that this field only controls user eligibility. The listing type and category must support this feature for this field to be applicable.
     *
     * @var bool $qualifiedForFixedPriceOneDayDuration
     */
    private $qualifiedForFixedPriceOneDayDuration = null;

    /**
     * Indicates whether or not the seller is eligible to create
     *  multiple-variation, fixed-price listings.
     *
     * @var bool $qualifiesForVariations
     */
    private $qualifiesForVariations = null;

    /**
     * Indicates whether the seller is eligible to create an auction listing with a one-day duration. Limitation: the Adult-Only and Motor Vehicle categories do not support one-day auctions, so the seller cannot create one-day auction listings in these categories, even if the seller has the eligibility.
     *
     * @var bool $qualifiedForAuctionOneDayDuration
     */
    private $qualifiedForAuctionOneDayDuration = null;

    /**
     * Gets as qualifiesForBuyItNow
     *
     * Indicates whether the seller is eligible to create auction listings enabled with the 'Buy It Now' option. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not eligible.
     *
     * @return bool
     */
    public function getQualifiesForBuyItNow()
    {
        return $this->qualifiesForBuyItNow;
    }

    /**
     * Sets a new qualifiesForBuyItNow
     *
     * Indicates whether the seller is eligible to create auction listings enabled with the 'Buy It Now' option. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not eligible.
     *
     * @param bool $qualifiesForBuyItNow
     * @return self
     */
    public function setQualifiesForBuyItNow($qualifiesForBuyItNow)
    {
        $this->qualifiesForBuyItNow = $qualifiesForBuyItNow;
        return $this;
    }

    /**
     * Gets as qualifiesForBuyItNowMultiple
     *
     * Indicates whether the seller is eligible to specify the 'Buy It Now' option for multiple-quantity listings. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not eligible.
     *
     * @return bool
     */
    public function getQualifiesForBuyItNowMultiple()
    {
        return $this->qualifiesForBuyItNowMultiple;
    }

    /**
     * Sets a new qualifiesForBuyItNowMultiple
     *
     * Indicates whether the seller is eligible to specify the 'Buy It Now' option for multiple-quantity listings. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that they are not eligible.
     *
     * @param bool $qualifiesForBuyItNowMultiple
     * @return self
     */
    public function setQualifiesForBuyItNowMultiple($qualifiesForBuyItNowMultiple)
    {
        $this->qualifiesForBuyItNowMultiple = $qualifiesForBuyItNowMultiple;
        return $this;
    }

    /**
     * Gets as qualifiedForFixedPriceOneDayDuration
     *
     * Indicates whether the seller is eligible to create fixed-price listings with a one-day listing duration. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that the seller is not eligible. Note that this field only controls user eligibility. The listing type and category must support this feature for this field to be applicable.
     *
     * @return bool
     */
    public function getQualifiedForFixedPriceOneDayDuration()
    {
        return $this->qualifiedForFixedPriceOneDayDuration;
    }

    /**
     * Sets a new qualifiedForFixedPriceOneDayDuration
     *
     * Indicates whether the seller is eligible to create fixed-price listings with a one-day listing duration. A value of <code>true</code> means that the seller is eligible; a value of <code>false</code> indicates that the seller is not eligible. Note that this field only controls user eligibility. The listing type and category must support this feature for this field to be applicable.
     *
     * @param bool $qualifiedForFixedPriceOneDayDuration
     * @return self
     */
    public function setQualifiedForFixedPriceOneDayDuration($qualifiedForFixedPriceOneDayDuration)
    {
        $this->qualifiedForFixedPriceOneDayDuration = $qualifiedForFixedPriceOneDayDuration;
        return $this;
    }

    /**
     * Gets as qualifiesForVariations
     *
     * Indicates whether or not the seller is eligible to create
     *  multiple-variation, fixed-price listings.
     *
     * @return bool
     */
    public function getQualifiesForVariations()
    {
        return $this->qualifiesForVariations;
    }

    /**
     * Sets a new qualifiesForVariations
     *
     * Indicates whether or not the seller is eligible to create
     *  multiple-variation, fixed-price listings.
     *
     * @param bool $qualifiesForVariations
     * @return self
     */
    public function setQualifiesForVariations($qualifiesForVariations)
    {
        $this->qualifiesForVariations = $qualifiesForVariations;
        return $this;
    }

    /**
     * Gets as qualifiedForAuctionOneDayDuration
     *
     * Indicates whether the seller is eligible to create an auction listing with a one-day duration. Limitation: the Adult-Only and Motor Vehicle categories do not support one-day auctions, so the seller cannot create one-day auction listings in these categories, even if the seller has the eligibility.
     *
     * @return bool
     */
    public function getQualifiedForAuctionOneDayDuration()
    {
        return $this->qualifiedForAuctionOneDayDuration;
    }

    /**
     * Sets a new qualifiedForAuctionOneDayDuration
     *
     * Indicates whether the seller is eligible to create an auction listing with a one-day duration. Limitation: the Adult-Only and Motor Vehicle categories do not support one-day auctions, so the seller cannot create one-day auction listings in these categories, even if the seller has the eligibility.
     *
     * @param bool $qualifiedForAuctionOneDayDuration
     * @return self
     */
    public function setQualifiedForAuctionOneDayDuration($qualifiedForAuctionOneDayDuration)
    {
        $this->qualifiedForAuctionOneDayDuration = $qualifiedForAuctionOneDayDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getQualifiesForBuyItNow();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QualifiesForBuyItNow", $value);
        }
        $value = $this->getQualifiesForBuyItNowMultiple();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QualifiesForBuyItNowMultiple", $value);
        }
        $value = $this->getQualifiedForFixedPriceOneDayDuration();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QualifiedForFixedPriceOneDayDuration", $value);
        }
        $value = $this->getQualifiesForVariations();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QualifiesForVariations", $value);
        }
        $value = $this->getQualifiedForAuctionOneDayDuration();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QualifiedForAuctionOneDayDuration", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiesForBuyItNow');
        if (null !== $value) {
            $this->setQualifiesForBuyItNow($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiesForBuyItNowMultiple');
        if (null !== $value) {
            $this->setQualifiesForBuyItNowMultiple($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiedForFixedPriceOneDayDuration');
        if (null !== $value) {
            $this->setQualifiedForFixedPriceOneDayDuration($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiesForVariations');
        if (null !== $value) {
            $this->setQualifiesForVariations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiedForAuctionOneDayDuration');
        if (null !== $value) {
            $this->setQualifiedForAuctionOneDayDuration($value);
        }
    }
}
