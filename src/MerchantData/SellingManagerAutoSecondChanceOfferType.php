<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerAutoSecondChanceOfferType
 *
 * Defines the options available for an automated
 *  Second Chance Offer rule.
 * XSD Type: SellingManagerAutoSecondChanceOfferType
 */
class SellingManagerAutoSecondChanceOfferType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The condition under which a Second Chance Offer should be sent.
     *
     * @var string $secondChanceOfferCondition
     */
    private $secondChanceOfferCondition = null;

    /**
     * Used when SecondChanceOfferCondition is equal to
     *  BidsGreaterThanAmount or BidsGreaterThanCostPlusAmount. Specifies
     *  the amount associated with the SecondChanceOfferCondition.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $amount
     */
    private $amount = null;

    /**
     * Used when SecondChanceOfferCondition is equal
     *  to BidsGreaterThanCostPlusPercentage to specify the amount of profit
     *  associated with the SecondChanceOfferCondition.
     *
     * @var float $profitPercent
     */
    private $profitPercent = null;

    /**
     * Specifies the length of time the Second Chance Offer listing will be active.
     *  The recipient bidder has that much time to purchase the item or the offer expires.
     *
     * @var string $duration
     */
    private $duration = null;

    /**
     * Do not list if inventory levels on the associated product
     *  are at or below the specified amount.
     *
     * @var int $listingHoldInventoryLevel
     */
    private $listingHoldInventoryLevel = null;

    /**
     * Gets as secondChanceOfferCondition
     *
     * The condition under which a Second Chance Offer should be sent.
     *
     * @return string
     */
    public function getSecondChanceOfferCondition()
    {
        return $this->secondChanceOfferCondition;
    }

    /**
     * Sets a new secondChanceOfferCondition
     *
     * The condition under which a Second Chance Offer should be sent.
     *
     * @param string $secondChanceOfferCondition
     * @return self
     */
    public function setSecondChanceOfferCondition($secondChanceOfferCondition)
    {
        $this->secondChanceOfferCondition = $secondChanceOfferCondition;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Used when SecondChanceOfferCondition is equal to
     *  BidsGreaterThanAmount or BidsGreaterThanCostPlusAmount. Specifies
     *  the amount associated with the SecondChanceOfferCondition.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Used when SecondChanceOfferCondition is equal to
     *  BidsGreaterThanAmount or BidsGreaterThanCostPlusAmount. Specifies
     *  the amount associated with the SecondChanceOfferCondition.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $amount
     * @return self
     */
    public function setAmount(\Nogrod\eBaySDK\MerchantData\AmountType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as profitPercent
     *
     * Used when SecondChanceOfferCondition is equal
     *  to BidsGreaterThanCostPlusPercentage to specify the amount of profit
     *  associated with the SecondChanceOfferCondition.
     *
     * @return float
     */
    public function getProfitPercent()
    {
        return $this->profitPercent;
    }

    /**
     * Sets a new profitPercent
     *
     * Used when SecondChanceOfferCondition is equal
     *  to BidsGreaterThanCostPlusPercentage to specify the amount of profit
     *  associated with the SecondChanceOfferCondition.
     *
     * @param float $profitPercent
     * @return self
     */
    public function setProfitPercent($profitPercent)
    {
        $this->profitPercent = $profitPercent;
        return $this;
    }

    /**
     * Gets as duration
     *
     * Specifies the length of time the Second Chance Offer listing will be active.
     *  The recipient bidder has that much time to purchase the item or the offer expires.
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * Specifies the length of time the Second Chance Offer listing will be active.
     *  The recipient bidder has that much time to purchase the item or the offer expires.
     *
     * @param string $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as listingHoldInventoryLevel
     *
     * Do not list if inventory levels on the associated product
     *  are at or below the specified amount.
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
     * Do not list if inventory levels on the associated product
     *  are at or below the specified amount.
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
        $value = $this->getSecondChanceOfferCondition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondChanceOfferCondition", $value);
        }
        $value = $this->getAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Amount", $value);
        }
        $value = $this->getProfitPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProfitPercent", $value);
        }
        $value = $this->getDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Duration", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceOfferCondition');
        if (null !== $value) {
            $this->setSecondChanceOfferCondition($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Amount');
        if (null !== $value) {
            $this->setAmount(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProfitPercent');
        if (null !== $value) {
            $this->setProfitPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Duration');
        if (null !== $value) {
            $this->setDuration($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingHoldInventoryLevel');
        if (null !== $value) {
            $this->setListingHoldInventoryLevel($value);
        }
    }
}
