<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetShippingDiscountProfilesResponseType
 *
 * The base response of the <b>GetShippingDiscountProfiles</b> call.
 * XSD Type: GetShippingDiscountProfilesResponseType
 */
class GetShippingDiscountProfilesResponseType extends AbstractResponseType
{
    /**
     * The three-digit code of the currency to be used for shipping cost discounts. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a listing.
     *
     * @var string $currencyID
     */
    private $currencyID = null;

    /**
     * This container consists of one or more flat-rate shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no flat-rate shipping discount rules are currently set for the seller's account.
     *
     * @var \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount
     */
    private $flatShippingDiscount = null;

    /**
     * This container consists of one or more calculated shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no calculated shipping discount rules are currently set for the seller's account.
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount
     */
    private $calculatedShippingDiscount = null;

    /**
     * This field indicates whether or not a seller has set up a promotional shipping discount rule in the seller's account. Only one promotional shipping discount may be defined for a seller's account at any given time. This field is returned whether <code>false</code> or <code>true</code>. If <code>true</code>, details of the rule can be found in the <b>PromotionalShippingDiscountDetails</b> container.
     *
     * @var bool $promotionalShippingDiscount
     */
    private $promotionalShippingDiscount = null;

    /**
     * This container consists of the handling discount applicable to a calculated shipping discount rule that is set up for a seller's account. This container is not returned if no calculated shipping discount rules are currently set for the seller's account.
     *
     * @var \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     */
    private $calculatedHandlingDiscount = null;

    /**
     * This container consists of information related to the promotional shipping discount rule that is set up for a seller's account. This container is not returned if no promotional shipping discount rule is set up for the seller's account.
     *
     * @var \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     */
    private $promotionalShippingDiscountDetails = null;

    /**
     * This field indicates the number of days after the sale of an item in which the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes one payment for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     *
     * @var string $combinedDuration
     */
    private $combinedDuration = null;

    /**
     * Gets as currencyID
     *
     * The three-digit code of the currency to be used for shipping cost discounts. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a listing.
     *
     * @return string
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }

    /**
     * Sets a new currencyID
     *
     * The three-digit code of the currency to be used for shipping cost discounts. A discount profile can only be associated with a listing if the <b>CurrencyID</b> value of the profile matches the <b>Item.Currency</b> value specified in a listing.
     *
     * @param string $currencyID
     * @return self
     */
    public function setCurrencyID($currencyID)
    {
        $this->currencyID = $currencyID;
        return $this;
    }

    /**
     * Gets as flatShippingDiscount
     *
     * This container consists of one or more flat-rate shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no flat-rate shipping discount rules are currently set for the seller's account.
     *
     * @return \Nogrod\eBaySDK\Trading\FlatShippingDiscountType
     */
    public function getFlatShippingDiscount()
    {
        return $this->flatShippingDiscount;
    }

    /**
     * Sets a new flatShippingDiscount
     *
     * This container consists of one or more flat-rate shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no flat-rate shipping discount rules are currently set for the seller's account.
     *
     * @param \Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount
     * @return self
     */
    public function setFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType $flatShippingDiscount)
    {
        $this->flatShippingDiscount = $flatShippingDiscount;
        return $this;
    }

    /**
     * Gets as calculatedShippingDiscount
     *
     * This container consists of one or more calculated shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no calculated shipping discount rules are currently set for the seller's account.
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType
     */
    public function getCalculatedShippingDiscount()
    {
        return $this->calculatedShippingDiscount;
    }

    /**
     * Sets a new calculatedShippingDiscount
     *
     * This container consists of one or more calculated shipping discount rules that are set up for a seller's account. This container is returned as an empty element if no calculated shipping discount rules are currently set for the seller's account.
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount
     * @return self
     */
    public function setCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType $calculatedShippingDiscount)
    {
        $this->calculatedShippingDiscount = $calculatedShippingDiscount;
        return $this;
    }

    /**
     * Gets as promotionalShippingDiscount
     *
     * This field indicates whether or not a seller has set up a promotional shipping discount rule in the seller's account. Only one promotional shipping discount may be defined for a seller's account at any given time. This field is returned whether <code>false</code> or <code>true</code>. If <code>true</code>, details of the rule can be found in the <b>PromotionalShippingDiscountDetails</b> container.
     *
     * @return bool
     */
    public function getPromotionalShippingDiscount()
    {
        return $this->promotionalShippingDiscount;
    }

    /**
     * Sets a new promotionalShippingDiscount
     *
     * This field indicates whether or not a seller has set up a promotional shipping discount rule in the seller's account. Only one promotional shipping discount may be defined for a seller's account at any given time. This field is returned whether <code>false</code> or <code>true</code>. If <code>true</code>, details of the rule can be found in the <b>PromotionalShippingDiscountDetails</b> container.
     *
     * @param bool $promotionalShippingDiscount
     * @return self
     */
    public function setPromotionalShippingDiscount($promotionalShippingDiscount)
    {
        $this->promotionalShippingDiscount = $promotionalShippingDiscount;
        return $this;
    }

    /**
     * Gets as calculatedHandlingDiscount
     *
     * This container consists of the handling discount applicable to a calculated shipping discount rule that is set up for a seller's account. This container is not returned if no calculated shipping discount rules are currently set for the seller's account.
     *
     * @return \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType
     */
    public function getCalculatedHandlingDiscount()
    {
        return $this->calculatedHandlingDiscount;
    }

    /**
     * Sets a new calculatedHandlingDiscount
     *
     * This container consists of the handling discount applicable to a calculated shipping discount rule that is set up for a seller's account. This container is not returned if no calculated shipping discount rules are currently set for the seller's account.
     *
     * @param \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType $calculatedHandlingDiscount
     * @return self
     */
    public function setCalculatedHandlingDiscount(\Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType $calculatedHandlingDiscount)
    {
        $this->calculatedHandlingDiscount = $calculatedHandlingDiscount;
        return $this;
    }

    /**
     * Gets as promotionalShippingDiscountDetails
     *
     * This container consists of information related to the promotional shipping discount rule that is set up for a seller's account. This container is not returned if no promotional shipping discount rule is set up for the seller's account.
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType
     */
    public function getPromotionalShippingDiscountDetails()
    {
        return $this->promotionalShippingDiscountDetails;
    }

    /**
     * Sets a new promotionalShippingDiscountDetails
     *
     * This container consists of information related to the promotional shipping discount rule that is set up for a seller's account. This container is not returned if no promotional shipping discount rule is set up for the seller's account.
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails
     * @return self
     */
    public function setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType $promotionalShippingDiscountDetails)
    {
        $this->promotionalShippingDiscountDetails = $promotionalShippingDiscountDetails;
        return $this;
    }

    /**
     * Gets as combinedDuration
     *
     * This field indicates the number of days after the sale of an item in which the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes one payment for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     *
     * @return string
     */
    public function getCombinedDuration()
    {
        return $this->combinedDuration;
    }

    /**
     * Sets a new combinedDuration
     *
     * This field indicates the number of days after the sale of an item in which the buyer or seller can combine multiple and mutual order line items into one Combined Invoice order. In a Combined Invoice order, the buyer makes one payment for all order line items, hence only unpaid order line items can be combined into a Combined Invoice order.
     *
     * @param string $combinedDuration
     * @return self
     */
    public function setCombinedDuration($combinedDuration)
    {
        $this->combinedDuration = $combinedDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getCurrencyID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CurrencyID", $value);
        }
        $value = $this->getFlatShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FlatShippingDiscount", $value);
        }
        $value = $this->getCalculatedShippingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedShippingDiscount", $value);
        }
        $value = $this->getPromotionalShippingDiscount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscount", $value);
        }
        $value = $this->getCalculatedHandlingDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CalculatedHandlingDiscount", $value);
        }
        $value = $this->getPromotionalShippingDiscountDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscountDetails", $value);
        }
        $value = $this->getCombinedDuration();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedDuration", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CurrencyID');
        if (null !== $value) {
            $this->setCurrencyID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}FlatShippingDiscount');
        if (null !== $value) {
            $this->setFlatShippingDiscount(\Nogrod\eBaySDK\Trading\FlatShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedShippingDiscount');
        if (null !== $value) {
            $this->setCalculatedShippingDiscount(\Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscount');
        if (null !== $value) {
            $this->setPromotionalShippingDiscount(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}CalculatedHandlingDiscount');
        if (null !== $value) {
            $this->setCalculatedHandlingDiscount(\Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalShippingDiscountDetails');
        if (null !== $value) {
            $this->setPromotionalShippingDiscountDetails(\Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedDuration');
        if (null !== $value) {
            $this->setCombinedDuration($value);
        }
    }
}
