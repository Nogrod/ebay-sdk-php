<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerRatingSummaryArrayType
 *
 * Type defining the <b>SellerRatingSummaryArray</b> container that is returned
 *  in the <b>GetFeedback</b> response. The <b>SellerRatingSummaryArray</b>
 *  container consists of an array of <b>AverageRatingSummary</b> containers,
 *  which provide details on Detailed Seller Ratings (DSRs), including the type of rating
 *  (Communication, Item As Described, Shipping and Handling Charges, or Shipping Time), the
 *  seller's average rating for that DSR type, the total number of DSR ratings, and the
 *  period in which those ratings were received (the last year or the last 30 days).
 * XSD Type: SellerRatingSummaryArrayType
 */
class SellerRatingSummaryArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @var \Nogrod\eBaySDK\Trading\AverageRatingSummaryType[] $averageRatingSummary
     */
    private $averageRatingSummary = [

    ];

    /**
     * Adds as averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AverageRatingSummaryType $averageRatingSummary
     */
    public function addToAverageRatingSummary(\Nogrod\eBaySDK\Trading\AverageRatingSummaryType $averageRatingSummary)
    {
        $this->averageRatingSummary[] = $averageRatingSummary;
        return $this;
    }

    /**
     * isset averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAverageRatingSummary($index)
    {
        return isset($this->averageRatingSummary[$index]);
    }

    /**
     * unset averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAverageRatingSummary($index)
    {
        unset($this->averageRatingSummary[$index]);
    }

    /**
     * Gets as averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @return \Nogrod\eBaySDK\Trading\AverageRatingSummaryType[]
     */
    public function getAverageRatingSummary()
    {
        return $this->averageRatingSummary;
    }

    /**
     * Sets a new averageRatingSummary
     *
     * Container consisting of a seller's Detailed Seller Rating (DSR) for each type of
     *  rating (Communication, Item As Described, Shipping and Handling Charges, or Shipping
     *  Time), the seller's average rating for each DSR type, the total number of DSR ratings
     *  for each DSR type, and the period in which those ratings were received (the last year
     *  or the last 30 days).
     *
     * @param \Nogrod\eBaySDK\Trading\AverageRatingSummaryType[] $averageRatingSummary
     * @return self
     */
    public function setAverageRatingSummary(array $averageRatingSummary)
    {
        $this->averageRatingSummary = $averageRatingSummary;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAverageRatingSummary();
        if (null !== $value && [] !== $this->getAverageRatingSummary()) {
            $writer->write(array_map(function ($v) {return ["AverageRatingSummary" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SellerRatingSummaryArrayType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AverageRatingSummary');
        if (null !== $value) {
            $this->setAverageRatingSummary(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AverageRatingSummaryType::fromKeyValue($v);}, $value));
        }
    }
}
