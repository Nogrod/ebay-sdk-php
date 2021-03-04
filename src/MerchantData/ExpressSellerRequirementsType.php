<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExpressSellerRequirementsType
 *
 *
 * XSD Type: ExpressSellerRequirementsType
 */
class ExpressSellerRequirementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * If true, the seller's preferences in My eBay are set
     *  to include listings on eBay Express.
     *  If false, the seller prefers not to include listings
     *  on Express, so the seller is therefore ineligible for Express
     *  (and no other seller requirement settings are returned in this case).
     *
     * @var bool $expressSellingPreference
     */
    private $expressSellingPreference = null;

    /**
     * If true, indicates eBay has marked the seller as eligible for
     *  eBay Express based on direct evaluation. Only returned if true,
     *  and no other seller requirement settings are returned in this case.
     *  For example, on the eBay Germany site, sellers need to fill out
     *  an application to become eligible to list on Express Germany.
     *  If they are approved, eBay sets ExpressApproved to true and no other
     *  seller requirement settings are relevant.
     *  <p></p>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay Express has been shut down in the UK and Germany. Please refer to the API
     *  Release Notes for more information.
     *  </span>
     *
     * @var bool $expressApproved
     */
    private $expressApproved = null;

    /**
     * If true, the user has a seller account in good standing.
     *
     * @var bool $goodStanding
     */
    private $goodStanding = null;

    /**
     * If true, indicates that the seller meets the site's minimum total
     *  feedback requirement for Express.
     *
     * @var \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $feedbackScore
     */
    private $feedbackScore = null;

    /**
     * If true, indicates that the seller meets the site's minimum
     *  total positive feedback requirement for Express.
     *
     * @var \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $positiveFeedbackPercent
     */
    private $positiveFeedbackPercent = null;

    /**
     * If true, indicates that the seller meets the Express site's
     *  minimum feedback requirement (if any) for transactions as a seller
     *  (not a buyer).
     *
     * @var \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $feedbackAsSellerScore
     */
    private $feedbackAsSellerScore = null;

    /**
     * If true, indicates that the seller meets the Express site's
     *  minimum positive feedback requirement (if any) for transactions
     *  as a seller (not a buyer).
     *
     * @var \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $positiveFeedbackAsSellerPercent
     */
    private $positiveFeedbackAsSellerPercent = null;

    /**
     * This field has been deprecated.
     *  <br><br>
     *  If true, the seller is a registered business seller.
     *
     * @var bool $businessSeller
     */
    private $businessSeller = null;

    /**
     * If true, the seller has an eligible PayPal account for Express.
     *  Only returned if the site assesses this requirement at the seller level.
     *
     * @var bool $eligiblePayPalAccount
     */
    private $eligiblePayPalAccount = null;

    /**
     * If true, the seller has a PayPal account that accepts
     *  a payment from a buyer with an unconfirmed address.
     *  Only returned if the site assesses this requirement at the seller level.
     *
     * @var bool $payPalAccountAcceptsUnconfirmedAddress
     */
    private $payPalAccountAcceptsUnconfirmedAddress = null;

    /**
     * If true, the seller accepts combined payments. If false, the seller
     *  doesn't accept combined payments (and the seller is therefore
     *  ineligible for Express, if the site requires this preference).
     *
     * @var bool $combinedPaymentsAccepted
     */
    private $combinedPaymentsAccepted = null;

    /**
     * If true, the seller's feedback profile is public.
     *  If false, the seller's feedback details are private; that is,
     *  User.FeedbackPrivate is true (and the seller is therefore
     *  ineligible).
     *
     * @var bool $feedbackPublic
     */
    private $feedbackPublic = null;

    /**
     * Gets as expressSellingPreference
     *
     * If true, the seller's preferences in My eBay are set
     *  to include listings on eBay Express.
     *  If false, the seller prefers not to include listings
     *  on Express, so the seller is therefore ineligible for Express
     *  (and no other seller requirement settings are returned in this case).
     *
     * @return bool
     */
    public function getExpressSellingPreference()
    {
        return $this->expressSellingPreference;
    }

    /**
     * Sets a new expressSellingPreference
     *
     * If true, the seller's preferences in My eBay are set
     *  to include listings on eBay Express.
     *  If false, the seller prefers not to include listings
     *  on Express, so the seller is therefore ineligible for Express
     *  (and no other seller requirement settings are returned in this case).
     *
     * @param bool $expressSellingPreference
     * @return self
     */
    public function setExpressSellingPreference($expressSellingPreference)
    {
        $this->expressSellingPreference = $expressSellingPreference;
        return $this;
    }

    /**
     * Gets as expressApproved
     *
     * If true, indicates eBay has marked the seller as eligible for
     *  eBay Express based on direct evaluation. Only returned if true,
     *  and no other seller requirement settings are returned in this case.
     *  For example, on the eBay Germany site, sellers need to fill out
     *  an application to become eligible to list on Express Germany.
     *  If they are approved, eBay sets ExpressApproved to true and no other
     *  seller requirement settings are relevant.
     *  <p></p>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay Express has been shut down in the UK and Germany. Please refer to the API
     *  Release Notes for more information.
     *  </span>
     *
     * @return bool
     */
    public function getExpressApproved()
    {
        return $this->expressApproved;
    }

    /**
     * Sets a new expressApproved
     *
     * If true, indicates eBay has marked the seller as eligible for
     *  eBay Express based on direct evaluation. Only returned if true,
     *  and no other seller requirement settings are returned in this case.
     *  For example, on the eBay Germany site, sellers need to fill out
     *  an application to become eligible to list on Express Germany.
     *  If they are approved, eBay sets ExpressApproved to true and no other
     *  seller requirement settings are relevant.
     *  <p></p>
     *  <span class="tablenote"><b>Note:</b>
     *  eBay Express has been shut down in the UK and Germany. Please refer to the API
     *  Release Notes for more information.
     *  </span>
     *
     * @param bool $expressApproved
     * @return self
     */
    public function setExpressApproved($expressApproved)
    {
        $this->expressApproved = $expressApproved;
        return $this;
    }

    /**
     * Gets as goodStanding
     *
     * If true, the user has a seller account in good standing.
     *
     * @return bool
     */
    public function getGoodStanding()
    {
        return $this->goodStanding;
    }

    /**
     * Sets a new goodStanding
     *
     * If true, the user has a seller account in good standing.
     *
     * @param bool $goodStanding
     * @return self
     */
    public function setGoodStanding($goodStanding)
    {
        $this->goodStanding = $goodStanding;
        return $this;
    }

    /**
     * Gets as feedbackScore
     *
     * If true, indicates that the seller meets the site's minimum total
     *  feedback requirement for Express.
     *
     * @return \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }

    /**
     * Sets a new feedbackScore
     *
     * If true, indicates that the seller meets the site's minimum total
     *  feedback requirement for Express.
     *
     * @param \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $feedbackScore
     * @return self
     */
    public function setFeedbackScore(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
        return $this;
    }

    /**
     * Gets as positiveFeedbackPercent
     *
     * If true, indicates that the seller meets the site's minimum
     *  total positive feedback requirement for Express.
     *
     * @return \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType
     */
    public function getPositiveFeedbackPercent()
    {
        return $this->positiveFeedbackPercent;
    }

    /**
     * Sets a new positiveFeedbackPercent
     *
     * If true, indicates that the seller meets the site's minimum
     *  total positive feedback requirement for Express.
     *
     * @param \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $positiveFeedbackPercent
     * @return self
     */
    public function setPositiveFeedbackPercent(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $positiveFeedbackPercent)
    {
        $this->positiveFeedbackPercent = $positiveFeedbackPercent;
        return $this;
    }

    /**
     * Gets as feedbackAsSellerScore
     *
     * If true, indicates that the seller meets the Express site's
     *  minimum feedback requirement (if any) for transactions as a seller
     *  (not a buyer).
     *
     * @return \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType
     */
    public function getFeedbackAsSellerScore()
    {
        return $this->feedbackAsSellerScore;
    }

    /**
     * Sets a new feedbackAsSellerScore
     *
     * If true, indicates that the seller meets the Express site's
     *  minimum feedback requirement (if any) for transactions as a seller
     *  (not a buyer).
     *
     * @param \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $feedbackAsSellerScore
     * @return self
     */
    public function setFeedbackAsSellerScore(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $feedbackAsSellerScore)
    {
        $this->feedbackAsSellerScore = $feedbackAsSellerScore;
        return $this;
    }

    /**
     * Gets as positiveFeedbackAsSellerPercent
     *
     * If true, indicates that the seller meets the Express site's
     *  minimum positive feedback requirement (if any) for transactions
     *  as a seller (not a buyer).
     *
     * @return \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType
     */
    public function getPositiveFeedbackAsSellerPercent()
    {
        return $this->positiveFeedbackAsSellerPercent;
    }

    /**
     * Sets a new positiveFeedbackAsSellerPercent
     *
     * If true, indicates that the seller meets the Express site's
     *  minimum positive feedback requirement (if any) for transactions
     *  as a seller (not a buyer).
     *
     * @param \Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $positiveFeedbackAsSellerPercent
     * @return self
     */
    public function setPositiveFeedbackAsSellerPercent(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType $positiveFeedbackAsSellerPercent)
    {
        $this->positiveFeedbackAsSellerPercent = $positiveFeedbackAsSellerPercent;
        return $this;
    }

    /**
     * Gets as businessSeller
     *
     * This field has been deprecated.
     *  <br><br>
     *  If true, the seller is a registered business seller.
     *
     * @return bool
     */
    public function getBusinessSeller()
    {
        return $this->businessSeller;
    }

    /**
     * Sets a new businessSeller
     *
     * This field has been deprecated.
     *  <br><br>
     *  If true, the seller is a registered business seller.
     *
     * @param bool $businessSeller
     * @return self
     */
    public function setBusinessSeller($businessSeller)
    {
        $this->businessSeller = $businessSeller;
        return $this;
    }

    /**
     * Gets as eligiblePayPalAccount
     *
     * If true, the seller has an eligible PayPal account for Express.
     *  Only returned if the site assesses this requirement at the seller level.
     *
     * @return bool
     */
    public function getEligiblePayPalAccount()
    {
        return $this->eligiblePayPalAccount;
    }

    /**
     * Sets a new eligiblePayPalAccount
     *
     * If true, the seller has an eligible PayPal account for Express.
     *  Only returned if the site assesses this requirement at the seller level.
     *
     * @param bool $eligiblePayPalAccount
     * @return self
     */
    public function setEligiblePayPalAccount($eligiblePayPalAccount)
    {
        $this->eligiblePayPalAccount = $eligiblePayPalAccount;
        return $this;
    }

    /**
     * Gets as payPalAccountAcceptsUnconfirmedAddress
     *
     * If true, the seller has a PayPal account that accepts
     *  a payment from a buyer with an unconfirmed address.
     *  Only returned if the site assesses this requirement at the seller level.
     *
     * @return bool
     */
    public function getPayPalAccountAcceptsUnconfirmedAddress()
    {
        return $this->payPalAccountAcceptsUnconfirmedAddress;
    }

    /**
     * Sets a new payPalAccountAcceptsUnconfirmedAddress
     *
     * If true, the seller has a PayPal account that accepts
     *  a payment from a buyer with an unconfirmed address.
     *  Only returned if the site assesses this requirement at the seller level.
     *
     * @param bool $payPalAccountAcceptsUnconfirmedAddress
     * @return self
     */
    public function setPayPalAccountAcceptsUnconfirmedAddress($payPalAccountAcceptsUnconfirmedAddress)
    {
        $this->payPalAccountAcceptsUnconfirmedAddress = $payPalAccountAcceptsUnconfirmedAddress;
        return $this;
    }

    /**
     * Gets as combinedPaymentsAccepted
     *
     * If true, the seller accepts combined payments. If false, the seller
     *  doesn't accept combined payments (and the seller is therefore
     *  ineligible for Express, if the site requires this preference).
     *
     * @return bool
     */
    public function getCombinedPaymentsAccepted()
    {
        return $this->combinedPaymentsAccepted;
    }

    /**
     * Sets a new combinedPaymentsAccepted
     *
     * If true, the seller accepts combined payments. If false, the seller
     *  doesn't accept combined payments (and the seller is therefore
     *  ineligible for Express, if the site requires this preference).
     *
     * @param bool $combinedPaymentsAccepted
     * @return self
     */
    public function setCombinedPaymentsAccepted($combinedPaymentsAccepted)
    {
        $this->combinedPaymentsAccepted = $combinedPaymentsAccepted;
        return $this;
    }

    /**
     * Gets as feedbackPublic
     *
     * If true, the seller's feedback profile is public.
     *  If false, the seller's feedback details are private; that is,
     *  User.FeedbackPrivate is true (and the seller is therefore
     *  ineligible).
     *
     * @return bool
     */
    public function getFeedbackPublic()
    {
        return $this->feedbackPublic;
    }

    /**
     * Sets a new feedbackPublic
     *
     * If true, the seller's feedback profile is public.
     *  If false, the seller's feedback details are private; that is,
     *  User.FeedbackPrivate is true (and the seller is therefore
     *  ineligible).
     *
     * @param bool $feedbackPublic
     * @return self
     */
    public function setFeedbackPublic($feedbackPublic)
    {
        $this->feedbackPublic = $feedbackPublic;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExpressSellingPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressSellingPreference", $value);
        }
        $value = $this->getExpressApproved();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressApproved", $value);
        }
        $value = $this->getGoodStanding();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GoodStanding", $value);
        }
        $value = $this->getFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackScore", $value);
        }
        $value = $this->getPositiveFeedbackPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPercent", $value);
        }
        $value = $this->getFeedbackAsSellerScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackAsSellerScore", $value);
        }
        $value = $this->getPositiveFeedbackAsSellerPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackAsSellerPercent", $value);
        }
        $value = $this->getBusinessSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BusinessSeller", $value);
        }
        $value = $this->getEligiblePayPalAccount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligiblePayPalAccount", $value);
        }
        $value = $this->getPayPalAccountAcceptsUnconfirmedAddress();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalAccountAcceptsUnconfirmedAddress", $value);
        }
        $value = $this->getCombinedPaymentsAccepted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedPaymentsAccepted", $value);
        }
        $value = $this->getFeedbackPublic();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackPublic", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressSellingPreference');
        if (null !== $value) {
            $this->setExpressSellingPreference($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressApproved');
        if (null !== $value) {
            $this->setExpressApproved($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GoodStanding');
        if (null !== $value) {
            $this->setGoodStanding($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore');
        if (null !== $value) {
            $this->setFeedbackScore(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPercent');
        if (null !== $value) {
            $this->setPositiveFeedbackPercent(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackAsSellerScore');
        if (null !== $value) {
            $this->setFeedbackAsSellerScore(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackAsSellerPercent');
        if (null !== $value) {
            $this->setPositiveFeedbackAsSellerPercent(\Nogrod\eBaySDK\MerchantData\FeedbackRequirementsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BusinessSeller');
        if (null !== $value) {
            $this->setBusinessSeller($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligiblePayPalAccount');
        if (null !== $value) {
            $this->setEligiblePayPalAccount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalAccountAcceptsUnconfirmedAddress');
        if (null !== $value) {
            $this->setPayPalAccountAcceptsUnconfirmedAddress($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedPaymentsAccepted');
        if (null !== $value) {
            $this->setCombinedPaymentsAccepted($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackPublic');
        if (null !== $value) {
            $this->setFeedbackPublic($value);
        }
    }
}
