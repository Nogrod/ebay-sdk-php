<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExpressItemRequirementsType
 *
 * This type is deprecated.
 * XSD Type: ExpressItemRequirementsType
 */
class ExpressItemRequirementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var bool $sellerExpressEligible
     */
    private $sellerExpressEligible = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressOptOut
     */
    private $expressOptOut = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressApproved
     */
    private $expressApproved = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressEligibleListingType
     */
    private $expressEligibleListingType = null;

    /**
     * This field is deprecated.
     *
     * @var bool $expressEnabledCategory
     */
    private $expressEnabledCategory = null;

    /**
     * This field is deprecated.
     *
     * @var bool $eligiblePayPalAccount
     */
    private $eligiblePayPalAccount = null;

    /**
     * This field is deprecated.
     *
     * @var bool $domesticShippingCost
     */
    private $domesticShippingCost = null;

    /**
     * This field is deprecated.
     *
     * @var bool $eligibleReturnPolicy
     */
    private $eligibleReturnPolicy = null;

    /**
     * This field is deprecated.
     *
     * @var bool $picture
     */
    private $picture = null;

    /**
     * This field is deprecated.
     *
     * @var bool $eligibleItemCondition
     */
    private $eligibleItemCondition = null;

    /**
     * This field is deprecated.
     *
     * @var bool $priceAboveMinimum
     */
    private $priceAboveMinimum = null;

    /**
     * This field is deprecated.
     *
     * @var bool $priceBelowMaximum
     */
    private $priceBelowMaximum = null;

    /**
     * This field is deprecated.
     *
     * @var bool $eligibleCheckout
     */
    private $eligibleCheckout = null;

    /**
     * This field is deprecated.
     *
     * @var bool $noPreapprovedBidderList
     */
    private $noPreapprovedBidderList = null;

    /**
     * This field is deprecated.
     *
     * @var bool $noCharity
     */
    private $noCharity = null;

    /**
     * This field is deprecated.
     *
     * @var bool $combinedShippingDiscount
     */
    private $combinedShippingDiscount = null;

    /**
     * This field is deprecated.
     *
     * @var bool $shipFromEligibleCountry
     */
    private $shipFromEligibleCountry = null;

    /**
     * This field is deprecated.
     *
     * @var bool $payPalAccountAcceptsUnconfirmedAddress
     */
    private $payPalAccountAcceptsUnconfirmedAddress = null;

    /**
     * Gets as sellerExpressEligible
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getSellerExpressEligible()
    {
        return $this->sellerExpressEligible;
    }

    /**
     * Sets a new sellerExpressEligible
     *
     * This field is deprecated.
     *
     * @param bool $sellerExpressEligible
     * @return self
     */
    public function setSellerExpressEligible($sellerExpressEligible)
    {
        $this->sellerExpressEligible = $sellerExpressEligible;
        return $this;
    }

    /**
     * Gets as expressOptOut
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExpressOptOut()
    {
        return $this->expressOptOut;
    }

    /**
     * Sets a new expressOptOut
     *
     * This field is deprecated.
     *
     * @param bool $expressOptOut
     * @return self
     */
    public function setExpressOptOut($expressOptOut)
    {
        $this->expressOptOut = $expressOptOut;
        return $this;
    }

    /**
     * Gets as expressApproved
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as expressEligibleListingType
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExpressEligibleListingType()
    {
        return $this->expressEligibleListingType;
    }

    /**
     * Sets a new expressEligibleListingType
     *
     * This field is deprecated.
     *
     * @param bool $expressEligibleListingType
     * @return self
     */
    public function setExpressEligibleListingType($expressEligibleListingType)
    {
        $this->expressEligibleListingType = $expressEligibleListingType;
        return $this;
    }

    /**
     * Gets as expressEnabledCategory
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getExpressEnabledCategory()
    {
        return $this->expressEnabledCategory;
    }

    /**
     * Sets a new expressEnabledCategory
     *
     * This field is deprecated.
     *
     * @param bool $expressEnabledCategory
     * @return self
     */
    public function setExpressEnabledCategory($expressEnabledCategory)
    {
        $this->expressEnabledCategory = $expressEnabledCategory;
        return $this;
    }

    /**
     * Gets as eligiblePayPalAccount
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as domesticShippingCost
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getDomesticShippingCost()
    {
        return $this->domesticShippingCost;
    }

    /**
     * Sets a new domesticShippingCost
     *
     * This field is deprecated.
     *
     * @param bool $domesticShippingCost
     * @return self
     */
    public function setDomesticShippingCost($domesticShippingCost)
    {
        $this->domesticShippingCost = $domesticShippingCost;
        return $this;
    }

    /**
     * Gets as eligibleReturnPolicy
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getEligibleReturnPolicy()
    {
        return $this->eligibleReturnPolicy;
    }

    /**
     * Sets a new eligibleReturnPolicy
     *
     * This field is deprecated.
     *
     * @param bool $eligibleReturnPolicy
     * @return self
     */
    public function setEligibleReturnPolicy($eligibleReturnPolicy)
    {
        $this->eligibleReturnPolicy = $eligibleReturnPolicy;
        return $this;
    }

    /**
     * Gets as picture
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * This field is deprecated.
     *
     * @param bool $picture
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Gets as eligibleItemCondition
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getEligibleItemCondition()
    {
        return $this->eligibleItemCondition;
    }

    /**
     * Sets a new eligibleItemCondition
     *
     * This field is deprecated.
     *
     * @param bool $eligibleItemCondition
     * @return self
     */
    public function setEligibleItemCondition($eligibleItemCondition)
    {
        $this->eligibleItemCondition = $eligibleItemCondition;
        return $this;
    }

    /**
     * Gets as priceAboveMinimum
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPriceAboveMinimum()
    {
        return $this->priceAboveMinimum;
    }

    /**
     * Sets a new priceAboveMinimum
     *
     * This field is deprecated.
     *
     * @param bool $priceAboveMinimum
     * @return self
     */
    public function setPriceAboveMinimum($priceAboveMinimum)
    {
        $this->priceAboveMinimum = $priceAboveMinimum;
        return $this;
    }

    /**
     * Gets as priceBelowMaximum
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPriceBelowMaximum()
    {
        return $this->priceBelowMaximum;
    }

    /**
     * Sets a new priceBelowMaximum
     *
     * This field is deprecated.
     *
     * @param bool $priceBelowMaximum
     * @return self
     */
    public function setPriceBelowMaximum($priceBelowMaximum)
    {
        $this->priceBelowMaximum = $priceBelowMaximum;
        return $this;
    }

    /**
     * Gets as eligibleCheckout
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getEligibleCheckout()
    {
        return $this->eligibleCheckout;
    }

    /**
     * Sets a new eligibleCheckout
     *
     * This field is deprecated.
     *
     * @param bool $eligibleCheckout
     * @return self
     */
    public function setEligibleCheckout($eligibleCheckout)
    {
        $this->eligibleCheckout = $eligibleCheckout;
        return $this;
    }

    /**
     * Gets as noPreapprovedBidderList
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getNoPreapprovedBidderList()
    {
        return $this->noPreapprovedBidderList;
    }

    /**
     * Sets a new noPreapprovedBidderList
     *
     * This field is deprecated.
     *
     * @param bool $noPreapprovedBidderList
     * @return self
     */
    public function setNoPreapprovedBidderList($noPreapprovedBidderList)
    {
        $this->noPreapprovedBidderList = $noPreapprovedBidderList;
        return $this;
    }

    /**
     * Gets as noCharity
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getNoCharity()
    {
        return $this->noCharity;
    }

    /**
     * Sets a new noCharity
     *
     * This field is deprecated.
     *
     * @param bool $noCharity
     * @return self
     */
    public function setNoCharity($noCharity)
    {
        $this->noCharity = $noCharity;
        return $this;
    }

    /**
     * Gets as combinedShippingDiscount
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getCombinedShippingDiscount()
    {
        return $this->combinedShippingDiscount;
    }

    /**
     * Sets a new combinedShippingDiscount
     *
     * This field is deprecated.
     *
     * @param bool $combinedShippingDiscount
     * @return self
     */
    public function setCombinedShippingDiscount($combinedShippingDiscount)
    {
        $this->combinedShippingDiscount = $combinedShippingDiscount;
        return $this;
    }

    /**
     * Gets as shipFromEligibleCountry
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getShipFromEligibleCountry()
    {
        return $this->shipFromEligibleCountry;
    }

    /**
     * Sets a new shipFromEligibleCountry
     *
     * This field is deprecated.
     *
     * @param bool $shipFromEligibleCountry
     * @return self
     */
    public function setShipFromEligibleCountry($shipFromEligibleCountry)
    {
        $this->shipFromEligibleCountry = $shipFromEligibleCountry;
        return $this;
    }

    /**
     * Gets as payPalAccountAcceptsUnconfirmedAddress
     *
     * This field is deprecated.
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
     * This field is deprecated.
     *
     * @param bool $payPalAccountAcceptsUnconfirmedAddress
     * @return self
     */
    public function setPayPalAccountAcceptsUnconfirmedAddress($payPalAccountAcceptsUnconfirmedAddress)
    {
        $this->payPalAccountAcceptsUnconfirmedAddress = $payPalAccountAcceptsUnconfirmedAddress;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellerExpressEligible();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerExpressEligible", $value);
        }
        $value = $this->getExpressOptOut();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressOptOut", $value);
        }
        $value = $this->getExpressApproved();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressApproved", $value);
        }
        $value = $this->getExpressEligibleListingType();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressEligibleListingType", $value);
        }
        $value = $this->getExpressEnabledCategory();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpressEnabledCategory", $value);
        }
        $value = $this->getEligiblePayPalAccount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligiblePayPalAccount", $value);
        }
        $value = $this->getDomesticShippingCost();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticShippingCost", $value);
        }
        $value = $this->getEligibleReturnPolicy();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleReturnPolicy", $value);
        }
        $value = $this->getPicture();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Picture", $value);
        }
        $value = $this->getEligibleItemCondition();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleItemCondition", $value);
        }
        $value = $this->getPriceAboveMinimum();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PriceAboveMinimum", $value);
        }
        $value = $this->getPriceBelowMaximum();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PriceBelowMaximum", $value);
        }
        $value = $this->getEligibleCheckout();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleCheckout", $value);
        }
        $value = $this->getNoPreapprovedBidderList();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NoPreapprovedBidderList", $value);
        }
        $value = $this->getNoCharity();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NoCharity", $value);
        }
        $value = $this->getCombinedShippingDiscount();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CombinedShippingDiscount", $value);
        }
        $value = $this->getShipFromEligibleCountry();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipFromEligibleCountry", $value);
        }
        $value = $this->getPayPalAccountAcceptsUnconfirmedAddress();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalAccountAcceptsUnconfirmedAddress", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerExpressEligible');
        if (null !== $value) {
            $this->setSellerExpressEligible($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressOptOut');
        if (null !== $value) {
            $this->setExpressOptOut($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressApproved');
        if (null !== $value) {
            $this->setExpressApproved($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressEligibleListingType');
        if (null !== $value) {
            $this->setExpressEligibleListingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpressEnabledCategory');
        if (null !== $value) {
            $this->setExpressEnabledCategory($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligiblePayPalAccount');
        if (null !== $value) {
            $this->setEligiblePayPalAccount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticShippingCost');
        if (null !== $value) {
            $this->setDomesticShippingCost($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleReturnPolicy');
        if (null !== $value) {
            $this->setEligibleReturnPolicy($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Picture');
        if (null !== $value) {
            $this->setPicture($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleItemCondition');
        if (null !== $value) {
            $this->setEligibleItemCondition($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PriceAboveMinimum');
        if (null !== $value) {
            $this->setPriceAboveMinimum($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PriceBelowMaximum');
        if (null !== $value) {
            $this->setPriceBelowMaximum($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleCheckout');
        if (null !== $value) {
            $this->setEligibleCheckout($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NoPreapprovedBidderList');
        if (null !== $value) {
            $this->setNoPreapprovedBidderList($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NoCharity');
        if (null !== $value) {
            $this->setNoCharity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CombinedShippingDiscount');
        if (null !== $value) {
            $this->setCombinedShippingDiscount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipFromEligibleCountry');
        if (null !== $value) {
            $this->setShipFromEligibleCountry($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalAccountAcceptsUnconfirmedAddress');
        if (null !== $value) {
            $this->setPayPalAccountAcceptsUnconfirmedAddress($value);
        }
    }
}
