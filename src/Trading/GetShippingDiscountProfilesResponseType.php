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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->currencyID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CurrencyID', null, (string) $value);
        }
        $value = $this->flatShippingDiscount;
        if (null !== $value) {
            $writer->startElementNs(null, 'FlatShippingDiscount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->calculatedShippingDiscount;
        if (null !== $value) {
            $writer->startElementNs(null, 'CalculatedShippingDiscount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->promotionalShippingDiscount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PromotionalShippingDiscount', null, ($value ? 'true' : 'false'));
        }
        $value = $this->calculatedHandlingDiscount;
        if (null !== $value) {
            $writer->startElementNs(null, 'CalculatedHandlingDiscount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->promotionalShippingDiscountDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'PromotionalShippingDiscountDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->combinedDuration;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CombinedDuration', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetShippingDiscountProfilesResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'CurrencyID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->currencyID = $value;
                    }
                    return true;
                case 'FlatShippingDiscount':
                    $this->flatShippingDiscount = \Nogrod\eBaySDK\Trading\FlatShippingDiscountType::xmlRead($reader);
                    return true;
                case 'CalculatedShippingDiscount':
                    $this->calculatedShippingDiscount = \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType::xmlRead($reader);
                    return true;
                case 'PromotionalShippingDiscount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->promotionalShippingDiscount = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'CalculatedHandlingDiscount':
                    $this->calculatedHandlingDiscount = \Nogrod\eBaySDK\Trading\CalculatedHandlingDiscountType::xmlRead($reader);
                    return true;
                case 'PromotionalShippingDiscountDetails':
                    $this->promotionalShippingDiscountDetails = \Nogrod\eBaySDK\Trading\PromotionalShippingDiscountDetailsType::xmlRead($reader);
                    return true;
                case 'CombinedDuration':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->combinedDuration = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
