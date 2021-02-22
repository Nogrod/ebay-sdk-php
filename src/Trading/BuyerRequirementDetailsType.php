<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyerRequirementDetailsType
 *
 * Type defining the <b>BuyerRequirementDetails</b> container, which allows the seller to set buyer requirements at the listing level. For the corresponding listing, all buyer requirement values/settings will overwrite values/settings in Buyer Requirements preferences in My eBay.
 * XSD Type: BuyerRequirementDetailsType
 */
class BuyerRequirementDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The seller includes and sets this field to <code>true</code> as a mechanism to block bidders who reside (according to their eBay primary shipping address) in countries that are on the ship-to exclusion list. Sellers add countries or regions to their ship-to exclusion list by adding those countries or regions using one or more <b>ExcludeShipToLocation</b> fields in an Add/Revise/Relist call.
     *  <br>
     *
     * @var bool $shipToRegistrationCountry
     */
    private $shipToRegistrationCountry = null;

    /**
     * This Buyer Requirements feature is only available to sellers on the China site, and is only applicable to fixed-price or auction Buy It Now items. <br/><br/> The seller includes and sets this field to <code>true</code> as a mechanism to block prospective buyers with a feedback score of 0 from buying items with a price of 100 RMB or higher.
     *  <br/>
     *
     * @var bool $zeroFeedbackScore
     */
    private $zeroFeedbackScore = null;

    /**
     * The seller uses this container as a mechanism to restrict the number of items (specifying a <b>MaximumItemCount</b> value) a prospective buyer can purchase from the seller during a 10-day period. The seller also has the option of setting a <b>MinimumFeedbackScore</b> requirement. If both fields of the <b>MaximumItemRequirements</b> container are set, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers that don't equal or exceed the specified minimum Feedback Score.
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumItemRequirementsType $maximumItemRequirements
     */
    private $maximumItemRequirements = null;

    /**
     * The seller uses this container as a mechanism to block prospective buyers who have one or more Unpaid Item strikes on their account during a specified time period. A buyer receives an Unpaid Item strike if a seller files an Unpaid Item case against the buyer, and eBay rules in favor of the seller.
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     */
    private $maximumUnpaidItemStrikesInfo = null;

    /**
     * Gets as shipToRegistrationCountry
     *
     * The seller includes and sets this field to <code>true</code> as a mechanism to block bidders who reside (according to their eBay primary shipping address) in countries that are on the ship-to exclusion list. Sellers add countries or regions to their ship-to exclusion list by adding those countries or regions using one or more <b>ExcludeShipToLocation</b> fields in an Add/Revise/Relist call.
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
     * The seller includes and sets this field to <code>true</code> as a mechanism to block bidders who reside (according to their eBay primary shipping address) in countries that are on the ship-to exclusion list. Sellers add countries or regions to their ship-to exclusion list by adding those countries or regions using one or more <b>ExcludeShipToLocation</b> fields in an Add/Revise/Relist call.
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
     * This Buyer Requirements feature is only available to sellers on the China site, and is only applicable to fixed-price or auction Buy It Now items. <br/><br/> The seller includes and sets this field to <code>true</code> as a mechanism to block prospective buyers with a feedback score of 0 from buying items with a price of 100 RMB or higher.
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
     * This Buyer Requirements feature is only available to sellers on the China site, and is only applicable to fixed-price or auction Buy It Now items. <br/><br/> The seller includes and sets this field to <code>true</code> as a mechanism to block prospective buyers with a feedback score of 0 from buying items with a price of 100 RMB or higher.
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
     * The seller uses this container as a mechanism to restrict the number of items (specifying a <b>MaximumItemCount</b> value) a prospective buyer can purchase from the seller during a 10-day period. The seller also has the option of setting a <b>MinimumFeedbackScore</b> requirement. If both fields of the <b>MaximumItemRequirements</b> container are set, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers that don't equal or exceed the specified minimum Feedback Score.
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
     * The seller uses this container as a mechanism to restrict the number of items (specifying a <b>MaximumItemCount</b> value) a prospective buyer can purchase from the seller during a 10-day period. The seller also has the option of setting a <b>MinimumFeedbackScore</b> requirement. If both fields of the <b>MaximumItemRequirements</b> container are set, the <b>MaximumItemCount</b> limit will only apply to those prospective buyers that don't equal or exceed the specified minimum Feedback Score.
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
     * The seller uses this container as a mechanism to block prospective buyers who have one or more Unpaid Item strikes on their account during a specified time period. A buyer receives an Unpaid Item strike if a seller files an Unpaid Item case against the buyer, and eBay rules in favor of the seller.
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
     * The seller uses this container as a mechanism to block prospective buyers who have one or more Unpaid Item strikes on their account during a specified time period. A buyer receives an Unpaid Item strike if a seller files an Unpaid Item case against the buyer, and eBay rules in favor of the seller.
     *
     * @param \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     * @return self
     */
    public function setMaximumUnpaidItemStrikesInfo(\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo)
    {
        $this->maximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipToRegistrationCountry');
        if (null !== $value) {
            $this->setShipToRegistrationCountry($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ZeroFeedbackScore');
        if (null !== $value) {
            $this->setZeroFeedbackScore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumItemRequirements');
        if (null !== $value) {
            $this->setMaximumItemRequirements(\Nogrod\eBaySDK\Trading\MaximumItemRequirementsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesInfo');
        if (null !== $value) {
            $this->setMaximumUnpaidItemStrikesInfo(\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoType::fromKeyValue($value));
        }
    }
}
