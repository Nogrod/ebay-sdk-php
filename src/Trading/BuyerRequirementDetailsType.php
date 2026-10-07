<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyerRequirementDetailsType
 *
 * Type defining the <b>BuyerRequirementDetails</b> container, which indicates if the seller has set any buyer requirements that apply to a listing. Sellers use buyer requirements if they want to avoid working with 'risky' buyers, who may be brand new to eBay, have low/poor Feedback scores, or who have some unpaid item strikes or buyer-initiated cancellations.
 * XSD Type: BuyerRequirementDetailsType
 */
class BuyerRequirementDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders who reside (according to their eBay primary shipping address) in countries that are on the seller's ship-to exclusion list.
     *  <br>
     *
     * @var bool $shipToRegistrationCountry
     */
    private $shipToRegistrationCountry = null;

    /**
     * This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders with a feedback score of 0 from buying items.
     *  <br/>
     *
     * @var bool $zeroFeedbackScore
     */
    private $zeroFeedbackScore = null;

    /**
     * This container is returned if the seller has set a maximum quantity threshold buyer requirement. With this buyer requirement, a buyer is limited in regards to the quantity of a line item that may be purchased.
     *  <br/><br/>
     *  This buyer requirement is only applicable to fixed-price listings where multiple quantity is available for purchase.
     *  <br/><br/>
     *  In addition to setting a maximum quantity threshold buyer requirement, the seller can also choose to apply this threshold to only those prospective buyers who don't meet or exceed the minimum Feedback score threshold.
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumItemRequirementsType $maximumItemRequirements
     */
    private $maximumItemRequirements = null;

    /**
     * This container is returned if the seller has enabled a setting to
     *  block prospective buyers who have one or more unpaid items and/or buyer-initiated cancellations on their account during a specified time period.
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     */
    private $maximumUnpaidItemStrikesInfo = null;

    /**
     * Gets as shipToRegistrationCountry
     *
     * This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders who reside (according to their eBay primary shipping address) in countries that are on the seller's ship-to exclusion list.
     *  <br>
     *
     * @return bool
     */
    public function getShipToRegistrationCountry()
    {
        return $this->shipToRegistrationCountry;
    }

    /**
     * Sets a new shipToRegistrationCountry
     *
     * This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders who reside (according to their eBay primary shipping address) in countries that are on the seller's ship-to exclusion list.
     *  <br>
     *
     * @param bool $shipToRegistrationCountry
     * @return self
     */
    public function setShipToRegistrationCountry($shipToRegistrationCountry)
    {
        $this->shipToRegistrationCountry = $shipToRegistrationCountry;
        return $this;
    }

    /**
     * Gets as zeroFeedbackScore
     *
     * This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders with a feedback score of 0 from buying items.
     *  <br/>
     *
     * @return bool
     */
    public function getZeroFeedbackScore()
    {
        return $this->zeroFeedbackScore;
    }

    /**
     * Sets a new zeroFeedbackScore
     *
     * This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders with a feedback score of 0 from buying items.
     *  <br/>
     *
     * @param bool $zeroFeedbackScore
     * @return self
     */
    public function setZeroFeedbackScore($zeroFeedbackScore)
    {
        $this->zeroFeedbackScore = $zeroFeedbackScore;
        return $this;
    }

    /**
     * Gets as maximumItemRequirements
     *
     * This container is returned if the seller has set a maximum quantity threshold buyer requirement. With this buyer requirement, a buyer is limited in regards to the quantity of a line item that may be purchased.
     *  <br/><br/>
     *  This buyer requirement is only applicable to fixed-price listings where multiple quantity is available for purchase.
     *  <br/><br/>
     *  In addition to setting a maximum quantity threshold buyer requirement, the seller can also choose to apply this threshold to only those prospective buyers who don't meet or exceed the minimum Feedback score threshold.
     *
     * @return \Nogrod\eBaySDK\Trading\MaximumItemRequirementsType
     */
    public function getMaximumItemRequirements()
    {
        return $this->maximumItemRequirements;
    }

    /**
     * Sets a new maximumItemRequirements
     *
     * This container is returned if the seller has set a maximum quantity threshold buyer requirement. With this buyer requirement, a buyer is limited in regards to the quantity of a line item that may be purchased.
     *  <br/><br/>
     *  This buyer requirement is only applicable to fixed-price listings where multiple quantity is available for purchase.
     *  <br/><br/>
     *  In addition to setting a maximum quantity threshold buyer requirement, the seller can also choose to apply this threshold to only those prospective buyers who don't meet or exceed the minimum Feedback score threshold.
     *
     * @param \Nogrod\eBaySDK\Trading\MaximumItemRequirementsType $maximumItemRequirements
     * @return self
     */
    public function setMaximumItemRequirements(\Nogrod\eBaySDK\Trading\MaximumItemRequirementsType $maximumItemRequirements)
    {
        $this->maximumItemRequirements = $maximumItemRequirements;
        return $this;
    }

    /**
     * Gets as maximumUnpaidItemStrikesInfo
     *
     * This container is returned if the seller has enabled a setting to
     *  block prospective buyers who have one or more unpaid items and/or buyer-initiated cancellations on their account during a specified time period.
     *
     * @return \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
        return $this->maximumUnpaidItemStrikesInfo;
    }

    /**
     * Sets a new maximumUnpaidItemStrikesInfo
     *
     * This container is returned if the seller has enabled a setting to
     *  block prospective buyers who have one or more unpaid items and/or buyer-initiated cancellations on their account during a specified time period.
     *
     * @param \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     * @return self
     */
    public function setMaximumUnpaidItemStrikesInfo(\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo)
    {
        $this->maximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
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
        $value = $this->shipToRegistrationCountry;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShipToRegistrationCountry', null, ($value ? 'true' : 'false'));
        }
        $value = $this->zeroFeedbackScore;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ZeroFeedbackScore', null, ($value ? 'true' : 'false'));
        }
        $value = $this->maximumItemRequirements;
        if (null !== $value) {
            $writer->startElementNs(null, 'MaximumItemRequirements', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->maximumUnpaidItemStrikesInfo;
        if (null !== $value) {
            $writer->startElementNs(null, 'MaximumUnpaidItemStrikesInfo', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BuyerRequirementDetailsType
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
                case 'ShipToRegistrationCountry':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shipToRegistrationCountry = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ZeroFeedbackScore':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->zeroFeedbackScore = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'MaximumItemRequirements':
                    $this->maximumItemRequirements = \Nogrod\eBaySDK\Trading\MaximumItemRequirementsType::xmlRead($reader);
                    return true;
                case 'MaximumUnpaidItemStrikesInfo':
                    $this->maximumUnpaidItemStrikesInfo = \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
