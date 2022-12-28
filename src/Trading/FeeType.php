<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeeType
 *
 * Identifies the name and cost of a listing feature that a member pays to eBay. These listing feature names, fees, and possible discounts are intended only as
 *  an aid to help estimate the fees for a listing.
 * XSD Type: FeeType
 */
class FeeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This is the name of the listing feature, such as <code>ListingFee</code>, <code>SubtitleFee</code>, or <code>BoldFee</code>.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Amount of the fee that eBay will charge the member for the associated listing
     *  feature.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $fee
     */
    private $fee = null;

    /**
     * This field exists in the response when the user has selected a feature that
     *  participates in a promotional discount.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Verify calls might not return the PromotionalDiscount fee in the response.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $promotionalDiscount
     */
    private $promotionalDiscount = null;

    /**
     * Gets as name
     *
     * This is the name of the listing feature, such as <code>ListingFee</code>, <code>SubtitleFee</code>, or <code>BoldFee</code>.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This is the name of the listing feature, such as <code>ListingFee</code>, <code>SubtitleFee</code>, or <code>BoldFee</code>.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as fee
     *
     * Amount of the fee that eBay will charge the member for the associated listing
     *  feature.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Amount of the fee that eBay will charge the member for the associated listing
     *  feature.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $fee
     * @return self
     */
    public function setFee(\Nogrod\eBaySDK\Trading\AmountType $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Gets as promotionalDiscount
     *
     * This field exists in the response when the user has selected a feature that
     *  participates in a promotional discount.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Verify calls might not return the PromotionalDiscount fee in the response.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getPromotionalDiscount()
    {
        return $this->promotionalDiscount;
    }

    /**
     * Sets a new promotionalDiscount
     *
     * This field exists in the response when the user has selected a feature that
     *  participates in a promotional discount.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  Verify calls might not return the PromotionalDiscount fee in the response.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $promotionalDiscount
     * @return self
     */
    public function setPromotionalDiscount(\Nogrod\eBaySDK\Trading\AmountType $promotionalDiscount)
    {
        $this->promotionalDiscount = $promotionalDiscount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fee", $value);
        }
        $value = $this->getPromotionalDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalDiscount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fee');
        if (null !== $value) {
            $this->setFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalDiscount');
        if (null !== $value) {
            $this->setPromotionalDiscount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
