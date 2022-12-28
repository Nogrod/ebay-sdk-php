<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SearchDetailsType
 *
 * This type is deprecated.
 * XSD Type: SearchDetailsType
 */
class SearchDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var bool $buyItNowEnabled
     */
    private $buyItNowEnabled = null;

    /**
     * This field is deprecated.
     *
     * @var bool $picture
     */
    private $picture = null;

    /**
     * This field is deprecated.
     *
     * @var bool $recentListing
     */
    private $recentListing = null;

    /**
     * Gets as buyItNowEnabled
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getBuyItNowEnabled()
    {
        return $this->buyItNowEnabled;
    }

    /**
     * Sets a new buyItNowEnabled
     *
     * This field is deprecated.
     *
     * @param bool $buyItNowEnabled
     * @return self
     */
    public function setBuyItNowEnabled($buyItNowEnabled)
    {
        $this->buyItNowEnabled = $buyItNowEnabled;
        return $this;
    }

    /**
     * Gets as picture
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * This field is deprecated.
     *
     * @param bool $picture
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Gets as recentListing
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getRecentListing()
    {
        return $this->recentListing;
    }

    /**
     * Sets a new recentListing
     *
     * This field is deprecated.
     *
     * @param bool $recentListing
     * @return self
     */
    public function setRecentListing($recentListing)
    {
        $this->recentListing = $recentListing;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBuyItNowEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowEnabled", $value);
        }
        $value = $this->getPicture();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Picture", $value);
        }
        $value = $this->getRecentListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecentListing", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowEnabled');
        if (null !== $value) {
            $this->setBuyItNowEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Picture');
        if (null !== $value) {
            $this->setPicture($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecentListing');
        if (null !== $value) {
            $this->setRecentListing($value);
        }
    }
}
