<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerAutoRelistType
 *
 * Provides information about an automated relisting rule.
 *  Automated relisting rules cannot be combined with automated listing rules.
 *  A template can have one set of information per automated relisting rule specified.
 * XSD Type: SellingManagerAutoRelistType
 */
class SellingManagerAutoRelistType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The type of auto-relist rule for the item.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The condition under which relist occurs.
     *
     * @var string $relistCondition
     */
    private $relistCondition = null;

    /**
     * Used when RelistCondition equals RelistAfterDaysHours; specifies
     *  the number days after the item ends that it should be relisted.
     *
     * @var int $relistAfterDays
     */
    private $relistAfterDays = null;

    /**
     * Used when RelistCondition equals RelistAfterDaysHours; specifies
     *  the number hours after the item ends that it should be relisted.
     *
     * @var int $relistAfterHours
     */
    private $relistAfterHours = null;

    /**
     * Used when RelistCondition equals RelistAtSpecificTimeOfDay; specifies the time
     *  of day the item should be relisted.
     *
     * @var \DateTime $relistAtSpecificTimeOfDay
     */
    private $relistAtSpecificTimeOfDay = null;

    /**
     * Specifies whether Best Offer should be enabled on the auto-relisted item.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferDetailsType $bestOfferDetails
     */
    private $bestOfferDetails = null;

    /**
     * Specifies that item is not listed if inventory levels on the associated
     *  product are at or below the specified level.
     *
     * @var int $listingHoldInventoryLevel
     */
    private $listingHoldInventoryLevel = null;

    /**
     * Gets as type
     *
     * The type of auto-relist rule for the item.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of auto-relist rule for the item.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as relistCondition
     *
     * The condition under which relist occurs.
     *
     * @return string
     */
    public function getRelistCondition()
    {
        return $this->relistCondition;
    }

    /**
     * Sets a new relistCondition
     *
     * The condition under which relist occurs.
     *
     * @param string $relistCondition
     * @return self
     */
    public function setRelistCondition($relistCondition)
    {
        $this->relistCondition = $relistCondition;
        return $this;
    }

    /**
     * Gets as relistAfterDays
     *
     * Used when RelistCondition equals RelistAfterDaysHours; specifies
     *  the number days after the item ends that it should be relisted.
     *
     * @return int
     */
    public function getRelistAfterDays()
    {
        return $this->relistAfterDays;
    }

    /**
     * Sets a new relistAfterDays
     *
     * Used when RelistCondition equals RelistAfterDaysHours; specifies
     *  the number days after the item ends that it should be relisted.
     *
     * @param int $relistAfterDays
     * @return self
     */
    public function setRelistAfterDays($relistAfterDays)
    {
        $this->relistAfterDays = $relistAfterDays;
        return $this;
    }

    /**
     * Gets as relistAfterHours
     *
     * Used when RelistCondition equals RelistAfterDaysHours; specifies
     *  the number hours after the item ends that it should be relisted.
     *
     * @return int
     */
    public function getRelistAfterHours()
    {
        return $this->relistAfterHours;
    }

    /**
     * Sets a new relistAfterHours
     *
     * Used when RelistCondition equals RelistAfterDaysHours; specifies
     *  the number hours after the item ends that it should be relisted.
     *
     * @param int $relistAfterHours
     * @return self
     */
    public function setRelistAfterHours($relistAfterHours)
    {
        $this->relistAfterHours = $relistAfterHours;
        return $this;
    }

    /**
     * Gets as relistAtSpecificTimeOfDay
     *
     * Used when RelistCondition equals RelistAtSpecificTimeOfDay; specifies the time
     *  of day the item should be relisted.
     *
     * @return \DateTime
     */
    public function getRelistAtSpecificTimeOfDay()
    {
        return $this->relistAtSpecificTimeOfDay;
    }

    /**
     * Sets a new relistAtSpecificTimeOfDay
     *
     * Used when RelistCondition equals RelistAtSpecificTimeOfDay; specifies the time
     *  of day the item should be relisted.
     *
     * @param \DateTime $relistAtSpecificTimeOfDay
     * @return self
     */
    public function setRelistAtSpecificTimeOfDay(\DateTime $relistAtSpecificTimeOfDay)
    {
        $this->relistAtSpecificTimeOfDay = $relistAtSpecificTimeOfDay;
        return $this;
    }

    /**
     * Gets as bestOfferDetails
     *
     * Specifies whether Best Offer should be enabled on the auto-relisted item.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferDetailsType
     */
    public function getBestOfferDetails()
    {
        return $this->bestOfferDetails;
    }

    /**
     * Sets a new bestOfferDetails
     *
     * Specifies whether Best Offer should be enabled on the auto-relisted item.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferDetailsType $bestOfferDetails
     * @return self
     */
    public function setBestOfferDetails(\Nogrod\eBaySDK\MerchantData\BestOfferDetailsType $bestOfferDetails)
    {
        $this->bestOfferDetails = $bestOfferDetails;
        return $this;
    }

    /**
     * Gets as listingHoldInventoryLevel
     *
     * Specifies that item is not listed if inventory levels on the associated
     *  product are at or below the specified level.
     *
     * @return int
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->listingHoldInventoryLevel;
    }

    /**
     * Sets a new listingHoldInventoryLevel
     *
     * Specifies that item is not listed if inventory levels on the associated
     *  product are at or below the specified level.
     *
     * @param int $listingHoldInventoryLevel
     * @return self
     */
    public function setListingHoldInventoryLevel($listingHoldInventoryLevel)
    {
        $this->listingHoldInventoryLevel = $listingHoldInventoryLevel;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
        }
        $value = $this->getRelistCondition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistCondition", $value);
        }
        $value = $this->getRelistAfterDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistAfterDays", $value);
        }
        $value = $this->getRelistAfterHours();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistAfterHours", $value);
        }
        $value = $this->getRelistAtSpecificTimeOfDay();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RelistAtSpecificTimeOfDay", $value);
        }
        $value = $this->getBestOfferDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferDetails", $value);
        }
        $value = $this->getListingHoldInventoryLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingHoldInventoryLevel", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistCondition');
        if (null !== $value) {
            $this->setRelistCondition($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistAfterDays');
        if (null !== $value) {
            $this->setRelistAfterDays($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistAfterHours');
        if (null !== $value) {
            $this->setRelistAfterHours($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RelistAtSpecificTimeOfDay');
        if (null !== $value) {
            $this->setRelistAtSpecificTimeOfDay($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferDetails');
        if (null !== $value) {
            $this->setBestOfferDetails(\Nogrod\eBaySDK\MerchantData\BestOfferDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingHoldInventoryLevel');
        if (null !== $value) {
            $this->setListingHoldInventoryLevel($value);
        }
    }
}
