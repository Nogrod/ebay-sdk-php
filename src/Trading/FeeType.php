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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->fee;
        if (null !== $value) {
            $writer->startElementNs(null, 'Fee', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->promotionalDiscount;
        if (null !== $value) {
            $writer->startElementNs(null, 'PromotionalDiscount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeeType
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
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'Fee':
                    $this->fee = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'PromotionalDiscount':
                    $this->promotionalDiscount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
