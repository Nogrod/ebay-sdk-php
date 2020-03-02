<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityType
 *
 * This type is used to provide details about a nonprofit organization registered with the PayPal Giving Fund.
 * XSD Type: CharityType
 */
class CharityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The name of the benefiting nonprofit charity organization selected by the
     *  charity seller.
     *
     * @var string $charityName
     */
    private $charityName = null;

    /**
     * A unique identifier assigned to a nonprofit
     *  charity organization by the PayPal Giving Fund. This value can contain up to 10 digits.
     *  This value is superseded by <b>CharityID</b>.
     *
     * @var int $charityNumber
     */
    private $charityNumber = null;

    /**
     * The percentage of the purchase price that the
     *  seller chooses to donate to the selected nonprofit
     *  organization. This percentage is displayed in the eBay for Charity listing.
     *  <b>Possible values</b>: 10.0 to 100.0.
     *  <b></b>
     *  <ul>
     *  <li>Percentages must increment by 5.0. </li>
     *  <li>Minimum donation
     *  percentages may be required for eBay for Charity listings, see
     *  <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html">
     *  Selling to benefit nonprofit organizations</a> for
     *  details. </li>
     *  </ul>
     *  <b>DonationPercent</b> is required input when creating eBay for Charity listings.
     *
     * @var float $donationPercent
     */
    private $donationPercent = null;

    /**
     * A unique identification number assigned by the PayPal Giving Fund to
     *  registered nonprofit charity organizations. This field is required when
     *  creating eBay for Charity listings.
     *
     * @var string $charityID
     */
    private $charityID = null;

    /**
     * The stated mission of the nonprofit charity organization. This mission is displayed in the eBay for Charity listing.
     *
     * @var string $mission
     */
    private $mission = null;

    /**
     * The URL of the nonprofit charity organization. This
     *  URL is displayed in the eBay for Charity listing.
     *
     * @var string $logoURL
     */
    private $logoURL = null;

    /**
     * The status of the nonprofit charity organization.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * If this field is returned as <code>true</code>, a percentage of item's purchase price will be donated to a nonprofit organization.
     *
     * @var bool $charityListing
     */
    private $charityListing = null;

    /**
     * Gets as charityName
     *
     * The name of the benefiting nonprofit charity organization selected by the
     *  charity seller.
     *
     * @return string
     */
    public function getCharityName()
    {
        return $this->charityName;
    }

    /**
     * Sets a new charityName
     *
     * The name of the benefiting nonprofit charity organization selected by the
     *  charity seller.
     *
     * @param string $charityName
     * @return self
     */
    public function setCharityName($charityName)
    {
        $this->charityName = $charityName;
        return $this;
    }

    /**
     * Gets as charityNumber
     *
     * A unique identifier assigned to a nonprofit
     *  charity organization by the PayPal Giving Fund. This value can contain up to 10 digits.
     *  This value is superseded by <b>CharityID</b>.
     *
     * @return int
     */
    public function getCharityNumber()
    {
        return $this->charityNumber;
    }

    /**
     * Sets a new charityNumber
     *
     * A unique identifier assigned to a nonprofit
     *  charity organization by the PayPal Giving Fund. This value can contain up to 10 digits.
     *  This value is superseded by <b>CharityID</b>.
     *
     * @param int $charityNumber
     * @return self
     */
    public function setCharityNumber($charityNumber)
    {
        $this->charityNumber = $charityNumber;
        return $this;
    }

    /**
     * Gets as donationPercent
     *
     * The percentage of the purchase price that the
     *  seller chooses to donate to the selected nonprofit
     *  organization. This percentage is displayed in the eBay for Charity listing.
     *  <b>Possible values</b>: 10.0 to 100.0.
     *  <b></b>
     *  <ul>
     *  <li>Percentages must increment by 5.0. </li>
     *  <li>Minimum donation
     *  percentages may be required for eBay for Charity listings, see
     *  <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html">
     *  Selling to benefit nonprofit organizations</a> for
     *  details. </li>
     *  </ul>
     *  <b>DonationPercent</b> is required input when creating eBay for Charity listings.
     *
     * @return float
     */
    public function getDonationPercent()
    {
        return $this->donationPercent;
    }

    /**
     * Sets a new donationPercent
     *
     * The percentage of the purchase price that the
     *  seller chooses to donate to the selected nonprofit
     *  organization. This percentage is displayed in the eBay for Charity listing.
     *  <b>Possible values</b>: 10.0 to 100.0.
     *  <b></b>
     *  <ul>
     *  <li>Percentages must increment by 5.0. </li>
     *  <li>Minimum donation
     *  percentages may be required for eBay for Charity listings, see
     *  <a href="http://pages.ebay.com/help/sell/selling-nonprofit.html">
     *  Selling to benefit nonprofit organizations</a> for
     *  details. </li>
     *  </ul>
     *  <b>DonationPercent</b> is required input when creating eBay for Charity listings.
     *
     * @param float $donationPercent
     * @return self
     */
    public function setDonationPercent($donationPercent)
    {
        $this->donationPercent = $donationPercent;
        return $this;
    }

    /**
     * Gets as charityID
     *
     * A unique identification number assigned by the PayPal Giving Fund to
     *  registered nonprofit charity organizations. This field is required when
     *  creating eBay for Charity listings.
     *
     * @return string
     */
    public function getCharityID()
    {
        return $this->charityID;
    }

    /**
     * Sets a new charityID
     *
     * A unique identification number assigned by the PayPal Giving Fund to
     *  registered nonprofit charity organizations. This field is required when
     *  creating eBay for Charity listings.
     *
     * @param string $charityID
     * @return self
     */
    public function setCharityID($charityID)
    {
        $this->charityID = $charityID;
        return $this;
    }

    /**
     * Gets as mission
     *
     * The stated mission of the nonprofit charity organization. This mission is displayed in the eBay for Charity listing.
     *
     * @return string
     */
    public function getMission()
    {
        return $this->mission;
    }

    /**
     * Sets a new mission
     *
     * The stated mission of the nonprofit charity organization. This mission is displayed in the eBay for Charity listing.
     *
     * @param string $mission
     * @return self
     */
    public function setMission($mission)
    {
        $this->mission = $mission;
        return $this;
    }

    /**
     * Gets as logoURL
     *
     * The URL of the nonprofit charity organization. This
     *  URL is displayed in the eBay for Charity listing.
     *
     * @return string
     */
    public function getLogoURL()
    {
        return $this->logoURL;
    }

    /**
     * Sets a new logoURL
     *
     * The URL of the nonprofit charity organization. This
     *  URL is displayed in the eBay for Charity listing.
     *
     * @param string $logoURL
     * @return self
     */
    public function setLogoURL($logoURL)
    {
        $this->logoURL = $logoURL;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the nonprofit charity organization.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the nonprofit charity organization.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as charityListing
     *
     * If this field is returned as <code>true</code>, a percentage of item's purchase price will be donated to a nonprofit organization.
     *
     * @return bool
     */
    public function getCharityListing()
    {
        return $this->charityListing;
    }

    /**
     * Sets a new charityListing
     *
     * If this field is returned as <code>true</code>, a percentage of item's purchase price will be donated to a nonprofit organization.
     *
     * @param bool $charityListing
     * @return self
     */
    public function setCharityListing($charityListing)
    {
        $this->charityListing = $charityListing;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCharityName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityName", $value);
        }
        $value = $this->getCharityNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityNumber", $value);
        }
        $value = $this->getDonationPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DonationPercent", $value);
        }
        $value = $this->getCharityID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityID", $value);
        }
        $value = $this->getMission();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Mission", $value);
        }
        $value = $this->getLogoURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoURL", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getCharityListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityListing", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityName');
        if (null !== $value) {
            $this->setCharityName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityNumber');
        if (null !== $value) {
            $this->setCharityNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DonationPercent');
        if (null !== $value) {
            $this->setDonationPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID');
        if (null !== $value) {
            $this->setCharityID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Mission');
        if (null !== $value) {
            $this->setMission($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoURL');
        if (null !== $value) {
            $this->setLogoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityListing');
        if (null !== $value) {
            $this->setCharityListing($value);
        }
    }
}
