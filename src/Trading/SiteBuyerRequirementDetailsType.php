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
class SiteBuyerRequirementDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->minimumFeedbackScore)) {
            throw new \LogicException('minimumFeedbackScore is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<int>
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
     * @param iterable<int> $minimumFeedbackScore
     * @return self
     */
    public function setMinimumFeedbackScore(iterable $minimumFeedbackScore)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->linkedPayPalAccount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LinkedPayPalAccount', null, ($value ? 'true' : 'false'));
        }
        $value = $this->maximumBuyerPolicyViolations;
        if (null !== $value) {
            $writer->startElementNs(null, 'MaximumBuyerPolicyViolations', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
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
        $value = $this->minimumFeedbackScore;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'MinimumFeedbackScore', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'FeedbackScore', null, (string) $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->shipToRegistrationCountry;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShipToRegistrationCountry', null, ($value ? 'true' : 'false'));
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SiteBuyerRequirementDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->minimumFeedbackScore = [];
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
                case 'LinkedPayPalAccount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->linkedPayPalAccount = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'MaximumBuyerPolicyViolations':
                    $this->maximumBuyerPolicyViolations = \Nogrod\eBaySDK\Trading\MaximumBuyerPolicyViolationsDetailsType::xmlRead($reader);
                    return true;
                case 'MaximumItemRequirements':
                    $this->maximumItemRequirements = \Nogrod\eBaySDK\Trading\MaximumItemRequirementsDetailsType::xmlRead($reader);
                    return true;
                case 'MaximumUnpaidItemStrikesInfo':
                    $this->maximumUnpaidItemStrikesInfo = \Nogrod\eBaySDK\Trading\MaximumUnpaidItemStrikesInfoDetailsType::xmlRead($reader);
                    return true;
                case 'MinimumFeedbackScore':
                    $this->minimumFeedbackScore = Func::readList($reader, 'FeedbackScore', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? (int) $value : null;
                    });
                    return true;
                case 'ShipToRegistrationCountry':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shipToRegistrationCountry = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['LinkedPayPalAccount'] = $this->linkedPayPalAccount;
        $data['MaximumBuyerPolicyViolations'] = $this->maximumBuyerPolicyViolations;
        $data['MaximumItemRequirements'] = $this->maximumItemRequirements;
        $data['MaximumUnpaidItemStrikesInfo'] = $this->maximumUnpaidItemStrikesInfo;
        $data['MinimumFeedbackScore'] = Func::jsonList($this->minimumFeedbackScore);
        $data['ShipToRegistrationCountry'] = $this->shipToRegistrationCountry;
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
