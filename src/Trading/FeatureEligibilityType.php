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
class FeatureEligibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->qualifiesForBuyItNow;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QualifiesForBuyItNow', null, ($value ? 'true' : 'false'));
        }
        $value = $this->qualifiesForBuyItNowMultiple;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QualifiesForBuyItNowMultiple', null, ($value ? 'true' : 'false'));
        }
        $value = $this->qualifiedForFixedPriceOneDayDuration;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QualifiedForFixedPriceOneDayDuration', null, ($value ? 'true' : 'false'));
        }
        $value = $this->qualifiesForVariations;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QualifiesForVariations', null, ($value ? 'true' : 'false'));
        }
        $value = $this->qualifiedForAuctionOneDayDuration;
        if (null !== $value) {
            $writer->writeElementNs(null, 'QualifiedForAuctionOneDayDuration', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeatureEligibilityType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'QualifiesForBuyItNow':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->qualifiesForBuyItNow = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'QualifiesForBuyItNowMultiple':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->qualifiesForBuyItNowMultiple = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'QualifiedForFixedPriceOneDayDuration':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->qualifiedForFixedPriceOneDayDuration = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'QualifiesForVariations':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->qualifiesForVariations = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'QualifiedForAuctionOneDayDuration':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->qualifiedForAuctionOneDayDuration = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['QualifiesForBuyItNow'] = $this->qualifiesForBuyItNow;
        $data['QualifiesForBuyItNowMultiple'] = $this->qualifiesForBuyItNowMultiple;
        $data['QualifiedForFixedPriceOneDayDuration'] = $this->qualifiedForFixedPriceOneDayDuration;
        $data['QualifiesForVariations'] = $this->qualifiesForVariations;
        $data['QualifiedForAuctionOneDayDuration'] = $this->qualifiedForAuctionOneDayDuration;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
