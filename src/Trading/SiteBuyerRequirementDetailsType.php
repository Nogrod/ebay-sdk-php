<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SiteBuyerRequirementDetailsType
 *
 * Type defining the <b>BuyerRequirementDetails</b> container, which is returned in <b>GeteBayDetails</b>, and provides the seller with the buyer requirement features (and applicable values) that are supported by the listing site.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b>
 *  This container is only returned if <b>BuyerRequirementDetails</b> is included as a <b>DetailName</b>
 *  filter in the call request, or if no <b>DetailName</b> filters are used in the request.
 *  </span>
 * XSD Type: SiteBuyerRequirementDetailsType
 */
class SiteBuyerRequirementDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var bool $linkedPayPalAccount
     */
    private $linkedPayPalAccount = null;

    /**
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set the Buyer Requirement that buyers must have only a certain amount of buyer policy violations within a specified amount of time in order to purchase an item.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations
     */
    private $maximumBuyerPolicyViolations = null;

    /**
     * This container shows the supported values that can be set as the <b>MaximumItemCount</b> and <b>MinimumFeedbackScore</b> to help control inexperienced or low Feedback bidders/buyers from bidding on or buying an item in a listing.
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumItemRequirementsDetailsType $maximumItemRequirements
     */
    private $maximumItemRequirements = null;

    /**
     * This container shows the supported values that can be set as the Maximum Unpaid Item count and period (number of days) to block buyers who have recent Unpaid Item Strikes from bidding on or buying an item in a listing.
     *
     * @var \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo
     */
    private $maximumUnpaidItemStrikesInfo = null;

    /**
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     *  </span>
     *
     * @var int[] $minimumFeedbackScore
     */
    private $minimumFeedbackScore = null;

    /**
     * A <code>true</code> value returned in this field indicates that the <b>ShipToRegistrationCountry</b> Buyer Requirement is supported for the specified site.
     *
     * @var bool $shipToRegistrationCountry
     */
    private $shipToRegistrationCountry = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT when the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as linkedPayPalAccount
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getLinkedPayPalAccount()
    {
        return $this->linkedPayPalAccount;
    }

    /**
     * Sets a new linkedPayPalAccount
     *
     * This field is deprecated.
     *
     * @param bool $linkedPayPalAccount
     * @return self
     */
    public function setLinkedPayPalAccount($linkedPayPalAccount)
    {
        $this->linkedPayPalAccount = $linkedPayPalAccount;
        return $this;
    }

    /**
     * Gets as maximumBuyerPolicyViolations
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set the Buyer Requirement that buyers must have only a certain amount of buyer policy violations within a specified amount of time in order to purchase an item.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\MaximumBuyerPolicyViolationsDetailsType
     */
    public function getMaximumBuyerPolicyViolations()
    {
        return $this->maximumBuyerPolicyViolations;
    }

    /**
     * Sets a new maximumBuyerPolicyViolations
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set the Buyer Requirement that buyers must have only a certain amount of buyer policy violations within a specified amount of time in order to purchase an item.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations
     * @return self
     */
    public function setMaximumBuyerPolicyViolations(\Nogrod\eBaySDK\Trading\MaximumBuyerPolicyViolationsDetailsType $maximumBuyerPolicyViolations)
    {
        $this->maximumBuyerPolicyViolations = $maximumBuyerPolicyViolations;
        return $this;
    }

    /**
     * Gets as maximumItemRequirements
     *
     * This container shows the supported values that can be set as the <b>MaximumItemCount</b> and <b>MinimumFeedbackScore</b> to help control inexperienced or low Feedback bidders/buyers from bidding on or buying an item in a listing.
     *
     * @return \Nogrod\eBaySDK\Trading\MaximumItemRequirementsDetailsType
     */
    public function getMaximumItemRequirements()
    {
        return $this->maximumItemRequirements;
    }

    /**
     * Sets a new maximumItemRequirements
     *
     * This container shows the supported values that can be set as the <b>MaximumItemCount</b> and <b>MinimumFeedbackScore</b> to help control inexperienced or low Feedback bidders/buyers from bidding on or buying an item in a listing.
     *
     * @param \Nogrod\eBaySDK\Trading\MaximumItemRequirementsDetailsType $maximumItemRequirements
     * @return self
     */
    public function setMaximumItemRequirements(\Nogrod\eBaySDK\Trading\MaximumItemRequirementsDetailsType $maximumItemRequirements)
    {
        $this->maximumItemRequirements = $maximumItemRequirements;
        return $this;
    }

    /**
     * Gets as maximumUnpaidItemStrikesInfo
     *
     * This container shows the supported values that can be set as the Maximum Unpaid Item count and period (number of days) to block buyers who have recent Unpaid Item Strikes from bidding on or buying an item in a listing.
     *
     * @return \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoDetailsType
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
        return $this->maximumUnpaidItemStrikesInfo;
    }

    /**
     * Sets a new maximumUnpaidItemStrikesInfo
     *
     * This container shows the supported values that can be set as the Maximum Unpaid Item count and period (number of days) to block buyers who have recent Unpaid Item Strikes from bidding on or buying an item in a listing.
     *
     * @param \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo
     * @return self
     */
    public function setMaximumUnpaidItemStrikesInfo(\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoDetailsType $maximumUnpaidItemStrikesInfo)
    {
        $this->maximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
        return $this;
    }

    /**
     * Adds as feedbackScore
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     *  </span>
     *
     * @return self
     * @param int $feedbackScore
     */
    public function addToMinimumFeedbackScore($feedbackScore)
    {
        $this->minimumFeedbackScore[] = $feedbackScore;
        return $this;
    }

    /**
     * isset minimumFeedbackScore
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMinimumFeedbackScore($index)
    {
        return isset($this->minimumFeedbackScore[$index]);
    }

    /**
     * unset minimumFeedbackScore
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMinimumFeedbackScore($index)
    {
        unset($this->minimumFeedbackScore[$index]);
    }

    /**
     * Gets as minimumFeedbackScore
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     *  </span>
     *
     * @return int[]
     */
    public function getMinimumFeedbackScore()
    {
        return $this->minimumFeedbackScore;
    }

    /**
     * Sets a new minimumFeedbackScore
     *
     * <span class="tablenote"><b>Note: </b>
     *  This field is no longer applicable, as sellers can no longer set a buyer's Minimum Feedback Score threshold Buyer Requirement at the listing-level in Add/Revise/Relist calls.
     *  </span>
     *
     * @param int[] $minimumFeedbackScore
     * @return self
     */
    public function setMinimumFeedbackScore(array $minimumFeedbackScore)
    {
        $this->minimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }

    /**
     * Gets as shipToRegistrationCountry
     *
     * A <code>true</code> value returned in this field indicates that the <b>ShipToRegistrationCountry</b> Buyer Requirement is supported for the specified site.
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
     * A <code>true</code> value returned in this field indicates that the <b>ShipToRegistrationCountry</b> Buyer Requirement is supported for the specified site.
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
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT when the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT when the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLinkedPayPalAccount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LinkedPayPalAccount", $value);
        }
        $value = $this->getMaximumBuyerPolicyViolations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumBuyerPolicyViolations", $value);
        }
        $value = $this->getMaximumItemRequirements();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumItemRequirements", $value);
        }
        $value = $this->getMaximumUnpaidItemStrikesInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesInfo", $value);
        }
        $value = $this->getMinimumFeedbackScore();
        if (null !== $value && !empty($this->getMinimumFeedbackScore())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore", array_map(function ($v) {return ["FeedbackScore" => $v];}, $value));
        }
        $value = $this->getShipToRegistrationCountry();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipToRegistrationCountry", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LinkedPayPalAccount');
        if (null !== $value) {
            $this->setLinkedPayPalAccount(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumBuyerPolicyViolations');
        if (null !== $value) {
            $this->setMaximumBuyerPolicyViolations(\Nogrod\eBaySDK\Trading\MaximumBuyerPolicyViolationsDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumItemRequirements');
        if (null !== $value) {
            $this->setMaximumItemRequirements(\Nogrod\eBaySDK\Trading\MaximumItemRequirementsDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumUnpaidItemStrikesInfo');
        if (null !== $value) {
            $this->setMaximumUnpaidItemStrikesInfo(\Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore', true);
        if (null !== $value && !empty($value)) {
            $this->setMinimumFeedbackScore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipToRegistrationCountry');
        if (null !== $value) {
            $this->setShipToRegistrationCountry(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
