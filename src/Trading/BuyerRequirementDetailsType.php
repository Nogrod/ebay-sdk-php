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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShipToRegistrationCountry();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipToRegistrationCountry", $value);
        }
        $value = $this->getZeroFeedbackScore();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ZeroFeedbackScore", $value);
        }
        $value = $this->getMaximumItemRequirements();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumItemRequirements", $value);
        }
        $value = $this->getMaximumUnpaidItemStrikesInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesInfo", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\BuyerRequirementDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipToRegistrationCountry');
        if (null !== $value) {
            $this->setShipToRegistrationCountry(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ZeroFeedbackScore');
        if (null !== $value) {
            $this->setZeroFeedbackScore(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumItemRequirements');
        if (null !== $value) {
            $this->setMaximumItemRequirements(\Nogrod\eBaySDK\Trading\MaximumItemRequirementsType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesInfo');
        if (null !== $value) {
            $this->setMaximumUnpaidItemStrikesInfo(\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType::fromKeyValue($value));
        }
    }
}
