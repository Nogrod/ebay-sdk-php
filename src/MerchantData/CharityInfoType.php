<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityInfoType
 *
 * Type defining the <b>Charity</b> container returned in <b>GetCharities</b>, which consists of all details
 *  related to a nonprofit charity organization.
 * XSD Type: CharityInfoType
 */
class CharityInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This attribute is the eBay-assigned, unique identifier of the nonprofit charity organization.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * The name of a nonprofit charity organization.
     *  <br/><br/>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This flag is for internal use only.
     *
     * @var bool $listingNPEmailNotifPref
     */
    private $listingNPEmailNotifPref = null;

    /**
     * This field is for internal use only.
     *
     * @var string $listingNPEmail
     */
    private $listingNPEmail = null;

    /**
     * This field is for internal use only.
     *
     * @var string $listingNPContactName
     */
    private $listingNPContactName = null;

    /**
     * The mission statement of the nonprofit charity organization. This field will be returned if the organization's mission statement is available.
     *  <br/><br/>
     *
     * @var string $mission
     */
    private $mission = null;

    /**
     * The URL to the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This logo is displayed in charitable listings in the eBay for Charity section of the View Item page. This field is returned if available for the nonprofit organization.
     *
     * @var string $logoURL
     */
    private $logoURL = null;

    /**
     * This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Keyword string to be used for search purposes.
     *
     * @var string $searchableString
     */
    private $searchableString = null;

    /**
     * Integer value that indicates the nonprofit charity organization's region. Each nonprofit charity organization may only be associated with one region.
     *
     * @var int $charityRegion
     */
    private $charityRegion = null;

    /**
     * Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     *
     * @var int[] $charityDomain
     */
    private $charityDomain = [

    ];

    /**
     * This field is no longer returned. eBay's unique identifier for nonprofit organizations is now returned in the <b>id</b> attribute of the the opening <b>Charity</b> tag instead.
     *
     * @var string $charityID
     */
    private $charityID = null;

    /**
     * An alternative to the <b>LogoURL</b> value. This URL indicates the location of the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This URL will be used if the <b>LogoURL</b> value points to a broken link or if that location either contains no image or contains an image that does not meet the eBay requirements - GIF or JPG file; maximum size of 50 KB. A nonprofit charity organization's logo is displayed in the eBay for Charity section of the View Item page for a charitable listing.
     *
     * @var string $logoURLSelling
     */
    private $logoURLSelling = null;

    /**
     * This boolean value indicates if the <b>LogoURLSelling</b> image will appear in the eBay for Charity section of the View Item page for a charitable listing.
     *
     * @var bool $displayLogoSelling
     */
    private $displayLogoSelling = null;

    /**
     * This field is deprecated.
     *
     * @var bool $displayNameInCheckout
     */
    private $displayNameInCheckout = null;

    /**
     * This field provides a description about the nonprofit charity organization's primary purpose. "I want to support" will be added to the beginning of the contents of this field. For example, if the description is "the fight against cancer", then on the checkout page "I want to support the fight against cancer" will be displayed. This field is returned if available for the nonprofit organization.
     *  <br/>
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This field must be used with the DisplayNameInCheckout field to control the options that are visible
     *  to a buyer during checkout. If the
     *  DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout
     *  field is set to False, a checkbox with the one dollar option will be displayed during checkout.
     *  If the DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout
     *  field is set to False, no options will be displayed during checkout.
     *  <br><br>
     *  Reserved for future use. If the DisplayNameInCheckout field is set to True, and the
     *  ShowMultipleDonationAmountInCheckout field is set to True, a dropdown with multiple donation amounts
     *  will be displayed during checkout. If the DisplayNameInCheckout field is set to False, and the
     *  ShowMultipleDonationAmountInCheckout field is set to True, no options will be displayed during checkout,
     *  but the multiple donation amount field will be set.
     *
     * @var bool $showMultipleDonationAmountInCheckout
     */
    private $showMultipleDonationAmountInCheckout = null;

    /**
     * A unique identifier created and used by PayPal Giving Fund to identify a registered nonprofit charity organization. This field is only returned for charities that are registered with PayPal Giving Fund.
     *
     * @var string $externalID
     */
    private $externalID = null;

    /**
     * An integer value that indicates a nonprofit charity organization's popularity rank in comparison with other registered eBay for Charity organizations. This value is determined and managed by PayPal Giving Fund and is based on various factors. This value is always returned for nonprofit organizations registered with PayPal Giving Fund.
     *
     * @var int $popularityIndex
     */
    private $popularityIndex = null;

    /**
     * This value is the Employer Identification Number (EIN) of the nonprofit charity organization. A nonprofit company's EIN is used for tax purposes by the Internal Revenue Service. This value is returned if the nonprofit organization has an EIN and it has been set.
     *
     * @var string $eIN
     */
    private $eIN = null;

    /**
     * An alternative name for the nonprofit charity organization. This value is used by
     *  PayPal to search for nonprofit organizations. This value is returned if set.
     *
     * @var string $nonProfitSecondName
     */
    private $nonProfitSecondName = null;

    /**
     * Container consisting of the address (including latitude and longitude) of a nonprofit
     *  charity organization. This container is always returned if it is set.
     *
     * @var \Nogrod\eBaySDK\MerchantData\NonProfitAddressType[] $nonProfitAddress
     */
    private $nonProfitAddress = [

    ];

    /**
     * Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with. Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     *
     * @var \Nogrod\eBaySDK\MerchantData\NonProfitSocialAddressType[] $nonProfitSocialAddress
     */
    private $nonProfitSocialAddress = [

    ];

    /**
     * Gets as id
     *
     * This attribute is the eBay-assigned, unique identifier of the nonprofit charity organization.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * This attribute is the eBay-assigned, unique identifier of the nonprofit charity organization.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of a nonprofit charity organization.
     *  <br/><br/>
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
     * The name of a nonprofit charity organization.
     *  <br/><br/>
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
     * Gets as listingNPEmailNotifPref
     *
     * This flag is for internal use only.
     *
     * @return bool
     */
    public function getListingNPEmailNotifPref()
    {
        return $this->listingNPEmailNotifPref;
    }

    /**
     * Sets a new listingNPEmailNotifPref
     *
     * This flag is for internal use only.
     *
     * @param bool $listingNPEmailNotifPref
     * @return self
     */
    public function setListingNPEmailNotifPref($listingNPEmailNotifPref)
    {
        $this->listingNPEmailNotifPref = $listingNPEmailNotifPref;
        return $this;
    }

    /**
     * Gets as listingNPEmail
     *
     * This field is for internal use only.
     *
     * @return string
     */
    public function getListingNPEmail()
    {
        return $this->listingNPEmail;
    }

    /**
     * Sets a new listingNPEmail
     *
     * This field is for internal use only.
     *
     * @param string $listingNPEmail
     * @return self
     */
    public function setListingNPEmail($listingNPEmail)
    {
        $this->listingNPEmail = $listingNPEmail;
        return $this;
    }

    /**
     * Gets as listingNPContactName
     *
     * This field is for internal use only.
     *
     * @return string
     */
    public function getListingNPContactName()
    {
        return $this->listingNPContactName;
    }

    /**
     * Sets a new listingNPContactName
     *
     * This field is for internal use only.
     *
     * @param string $listingNPContactName
     * @return self
     */
    public function setListingNPContactName($listingNPContactName)
    {
        $this->listingNPContactName = $listingNPContactName;
        return $this;
    }

    /**
     * Gets as mission
     *
     * The mission statement of the nonprofit charity organization. This field will be returned if the organization's mission statement is available.
     *  <br/><br/>
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
     * The mission statement of the nonprofit charity organization. This field will be returned if the organization's mission statement is available.
     *  <br/><br/>
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
     * The URL to the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This logo is displayed in charitable listings in the eBay for Charity section of the View Item page. This field is returned if available for the nonprofit organization.
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
     * The URL to the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This logo is displayed in charitable listings in the eBay for Charity section of the View Item page. This field is returned if available for the nonprofit organization.
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
     * This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
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
     * This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
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
     * Gets as searchableString
     *
     * Keyword string to be used for search purposes.
     *
     * @return string
     */
    public function getSearchableString()
    {
        return $this->searchableString;
    }

    /**
     * Sets a new searchableString
     *
     * Keyword string to be used for search purposes.
     *
     * @param string $searchableString
     * @return self
     */
    public function setSearchableString($searchableString)
    {
        $this->searchableString = $searchableString;
        return $this;
    }

    /**
     * Gets as charityRegion
     *
     * Integer value that indicates the nonprofit charity organization's region. Each nonprofit charity organization may only be associated with one region.
     *
     * @return int
     */
    public function getCharityRegion()
    {
        return $this->charityRegion;
    }

    /**
     * Sets a new charityRegion
     *
     * Integer value that indicates the nonprofit charity organization's region. Each nonprofit charity organization may only be associated with one region.
     *
     * @param int $charityRegion
     * @return self
     */
    public function setCharityRegion($charityRegion)
    {
        $this->charityRegion = $charityRegion;
        return $this;
    }

    /**
     * Adds as charityDomain
     *
     * Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     *
     * @return self
     * @param int $charityDomain
     */
    public function addToCharityDomain($charityDomain)
    {
        $this->charityDomain[] = $charityDomain;
        return $this;
    }

    /**
     * isset charityDomain
     *
     * Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharityDomain($index)
    {
        return isset($this->charityDomain[$index]);
    }

    /**
     * unset charityDomain
     *
     * Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharityDomain($index)
    {
        unset($this->charityDomain[$index]);
    }

    /**
     * Gets as charityDomain
     *
     * Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     *
     * @return int[]
     */
    public function getCharityDomain()
    {
        return $this->charityDomain;
    }

    /**
     * Sets a new charityDomain
     *
     * Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     *
     * @param int[] $charityDomain
     * @return self
     */
    public function setCharityDomain(array $charityDomain)
    {
        $this->charityDomain = $charityDomain;
        return $this;
    }

    /**
     * Gets as charityID
     *
     * This field is no longer returned. eBay's unique identifier for nonprofit organizations is now returned in the <b>id</b> attribute of the the opening <b>Charity</b> tag instead.
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
     * This field is no longer returned. eBay's unique identifier for nonprofit organizations is now returned in the <b>id</b> attribute of the the opening <b>Charity</b> tag instead.
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
     * Gets as logoURLSelling
     *
     * An alternative to the <b>LogoURL</b> value. This URL indicates the location of the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This URL will be used if the <b>LogoURL</b> value points to a broken link or if that location either contains no image or contains an image that does not meet the eBay requirements - GIF or JPG file; maximum size of 50 KB. A nonprofit charity organization's logo is displayed in the eBay for Charity section of the View Item page for a charitable listing.
     *
     * @return string
     */
    public function getLogoURLSelling()
    {
        return $this->logoURLSelling;
    }

    /**
     * Sets a new logoURLSelling
     *
     * An alternative to the <b>LogoURL</b> value. This URL indicates the location of the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This URL will be used if the <b>LogoURL</b> value points to a broken link or if that location either contains no image or contains an image that does not meet the eBay requirements - GIF or JPG file; maximum size of 50 KB. A nonprofit charity organization's logo is displayed in the eBay for Charity section of the View Item page for a charitable listing.
     *
     * @param string $logoURLSelling
     * @return self
     */
    public function setLogoURLSelling($logoURLSelling)
    {
        $this->logoURLSelling = $logoURLSelling;
        return $this;
    }

    /**
     * Gets as displayLogoSelling
     *
     * This boolean value indicates if the <b>LogoURLSelling</b> image will appear in the eBay for Charity section of the View Item page for a charitable listing.
     *
     * @return bool
     */
    public function getDisplayLogoSelling()
    {
        return $this->displayLogoSelling;
    }

    /**
     * Sets a new displayLogoSelling
     *
     * This boolean value indicates if the <b>LogoURLSelling</b> image will appear in the eBay for Charity section of the View Item page for a charitable listing.
     *
     * @param bool $displayLogoSelling
     * @return self
     */
    public function setDisplayLogoSelling($displayLogoSelling)
    {
        $this->displayLogoSelling = $displayLogoSelling;
        return $this;
    }

    /**
     * Gets as displayNameInCheckout
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getDisplayNameInCheckout()
    {
        return $this->displayNameInCheckout;
    }

    /**
     * Sets a new displayNameInCheckout
     *
     * This field is deprecated.
     *
     * @param bool $displayNameInCheckout
     * @return self
     */
    public function setDisplayNameInCheckout($displayNameInCheckout)
    {
        $this->displayNameInCheckout = $displayNameInCheckout;
        return $this;
    }

    /**
     * Gets as description
     *
     * This field provides a description about the nonprofit charity organization's primary purpose. "I want to support" will be added to the beginning of the contents of this field. For example, if the description is "the fight against cancer", then on the checkout page "I want to support the fight against cancer" will be displayed. This field is returned if available for the nonprofit organization.
     *  <br/>
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * This field provides a description about the nonprofit charity organization's primary purpose. "I want to support" will be added to the beginning of the contents of this field. For example, if the description is "the fight against cancer", then on the checkout page "I want to support the fight against cancer" will be displayed. This field is returned if available for the nonprofit organization.
     *  <br/>
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as showMultipleDonationAmountInCheckout
     *
     * This field must be used with the DisplayNameInCheckout field to control the options that are visible
     *  to a buyer during checkout. If the
     *  DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout
     *  field is set to False, a checkbox with the one dollar option will be displayed during checkout.
     *  If the DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout
     *  field is set to False, no options will be displayed during checkout.
     *  <br><br>
     *  Reserved for future use. If the DisplayNameInCheckout field is set to True, and the
     *  ShowMultipleDonationAmountInCheckout field is set to True, a dropdown with multiple donation amounts
     *  will be displayed during checkout. If the DisplayNameInCheckout field is set to False, and the
     *  ShowMultipleDonationAmountInCheckout field is set to True, no options will be displayed during checkout,
     *  but the multiple donation amount field will be set.
     *
     * @return bool
     */
    public function getShowMultipleDonationAmountInCheckout()
    {
        return $this->showMultipleDonationAmountInCheckout;
    }

    /**
     * Sets a new showMultipleDonationAmountInCheckout
     *
     * This field must be used with the DisplayNameInCheckout field to control the options that are visible
     *  to a buyer during checkout. If the
     *  DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout
     *  field is set to False, a checkbox with the one dollar option will be displayed during checkout.
     *  If the DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout
     *  field is set to False, no options will be displayed during checkout.
     *  <br><br>
     *  Reserved for future use. If the DisplayNameInCheckout field is set to True, and the
     *  ShowMultipleDonationAmountInCheckout field is set to True, a dropdown with multiple donation amounts
     *  will be displayed during checkout. If the DisplayNameInCheckout field is set to False, and the
     *  ShowMultipleDonationAmountInCheckout field is set to True, no options will be displayed during checkout,
     *  but the multiple donation amount field will be set.
     *
     * @param bool $showMultipleDonationAmountInCheckout
     * @return self
     */
    public function setShowMultipleDonationAmountInCheckout($showMultipleDonationAmountInCheckout)
    {
        $this->showMultipleDonationAmountInCheckout = $showMultipleDonationAmountInCheckout;
        return $this;
    }

    /**
     * Gets as externalID
     *
     * A unique identifier created and used by PayPal Giving Fund to identify a registered nonprofit charity organization. This field is only returned for charities that are registered with PayPal Giving Fund.
     *
     * @return string
     */
    public function getExternalID()
    {
        return $this->externalID;
    }

    /**
     * Sets a new externalID
     *
     * A unique identifier created and used by PayPal Giving Fund to identify a registered nonprofit charity organization. This field is only returned for charities that are registered with PayPal Giving Fund.
     *
     * @param string $externalID
     * @return self
     */
    public function setExternalID($externalID)
    {
        $this->externalID = $externalID;
        return $this;
    }

    /**
     * Gets as popularityIndex
     *
     * An integer value that indicates a nonprofit charity organization's popularity rank in comparison with other registered eBay for Charity organizations. This value is determined and managed by PayPal Giving Fund and is based on various factors. This value is always returned for nonprofit organizations registered with PayPal Giving Fund.
     *
     * @return int
     */
    public function getPopularityIndex()
    {
        return $this->popularityIndex;
    }

    /**
     * Sets a new popularityIndex
     *
     * An integer value that indicates a nonprofit charity organization's popularity rank in comparison with other registered eBay for Charity organizations. This value is determined and managed by PayPal Giving Fund and is based on various factors. This value is always returned for nonprofit organizations registered with PayPal Giving Fund.
     *
     * @param int $popularityIndex
     * @return self
     */
    public function setPopularityIndex($popularityIndex)
    {
        $this->popularityIndex = $popularityIndex;
        return $this;
    }

    /**
     * Gets as eIN
     *
     * This value is the Employer Identification Number (EIN) of the nonprofit charity organization. A nonprofit company's EIN is used for tax purposes by the Internal Revenue Service. This value is returned if the nonprofit organization has an EIN and it has been set.
     *
     * @return string
     */
    public function getEIN()
    {
        return $this->eIN;
    }

    /**
     * Sets a new eIN
     *
     * This value is the Employer Identification Number (EIN) of the nonprofit charity organization. A nonprofit company's EIN is used for tax purposes by the Internal Revenue Service. This value is returned if the nonprofit organization has an EIN and it has been set.
     *
     * @param string $eIN
     * @return self
     */
    public function setEIN($eIN)
    {
        $this->eIN = $eIN;
        return $this;
    }

    /**
     * Gets as nonProfitSecondName
     *
     * An alternative name for the nonprofit charity organization. This value is used by
     *  PayPal to search for nonprofit organizations. This value is returned if set.
     *
     * @return string
     */
    public function getNonProfitSecondName()
    {
        return $this->nonProfitSecondName;
    }

    /**
     * Sets a new nonProfitSecondName
     *
     * An alternative name for the nonprofit charity organization. This value is used by
     *  PayPal to search for nonprofit organizations. This value is returned if set.
     *
     * @param string $nonProfitSecondName
     * @return self
     */
    public function setNonProfitSecondName($nonProfitSecondName)
    {
        $this->nonProfitSecondName = $nonProfitSecondName;
        return $this;
    }

    /**
     * Adds as nonProfitAddress
     *
     * Container consisting of the address (including latitude and longitude) of a nonprofit
     *  charity organization. This container is always returned if it is set.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NonProfitAddressType $nonProfitAddress
     */
    public function addToNonProfitAddress(\Nogrod\eBaySDK\MerchantData\NonProfitAddressType $nonProfitAddress)
    {
        $this->nonProfitAddress[] = $nonProfitAddress;
        return $this;
    }

    /**
     * isset nonProfitAddress
     *
     * Container consisting of the address (including latitude and longitude) of a nonprofit
     *  charity organization. This container is always returned if it is set.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNonProfitAddress($index)
    {
        return isset($this->nonProfitAddress[$index]);
    }

    /**
     * unset nonProfitAddress
     *
     * Container consisting of the address (including latitude and longitude) of a nonprofit
     *  charity organization. This container is always returned if it is set.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNonProfitAddress($index)
    {
        unset($this->nonProfitAddress[$index]);
    }

    /**
     * Gets as nonProfitAddress
     *
     * Container consisting of the address (including latitude and longitude) of a nonprofit
     *  charity organization. This container is always returned if it is set.
     *
     * @return \Nogrod\eBaySDK\MerchantData\NonProfitAddressType[]
     */
    public function getNonProfitAddress()
    {
        return $this->nonProfitAddress;
    }

    /**
     * Sets a new nonProfitAddress
     *
     * Container consisting of the address (including latitude and longitude) of a nonprofit
     *  charity organization. This container is always returned if it is set.
     *
     * @param \Nogrod\eBaySDK\MerchantData\NonProfitAddressType[] $nonProfitAddress
     * @return self
     */
    public function setNonProfitAddress(array $nonProfitAddress)
    {
        $this->nonProfitAddress = $nonProfitAddress;
        return $this;
    }

    /**
     * Adds as nonProfitSocialAddress
     *
     * Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with. Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\NonProfitSocialAddressType $nonProfitSocialAddress
     */
    public function addToNonProfitSocialAddress(\Nogrod\eBaySDK\MerchantData\NonProfitSocialAddressType $nonProfitSocialAddress)
    {
        $this->nonProfitSocialAddress[] = $nonProfitSocialAddress;
        return $this;
    }

    /**
     * isset nonProfitSocialAddress
     *
     * Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with. Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNonProfitSocialAddress($index)
    {
        return isset($this->nonProfitSocialAddress[$index]);
    }

    /**
     * unset nonProfitSocialAddress
     *
     * Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with. Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNonProfitSocialAddress($index)
    {
        unset($this->nonProfitSocialAddress[$index]);
    }

    /**
     * Gets as nonProfitSocialAddress
     *
     * Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with. Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     *
     * @return \Nogrod\eBaySDK\MerchantData\NonProfitSocialAddressType[]
     */
    public function getNonProfitSocialAddress()
    {
        return $this->nonProfitSocialAddress;
    }

    /**
     * Sets a new nonProfitSocialAddress
     *
     * Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with. Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     *
     * @param \Nogrod\eBaySDK\MerchantData\NonProfitSocialAddressType[] $nonProfitSocialAddress
     * @return self
     */
    public function setNonProfitSocialAddress(array $nonProfitSocialAddress)
    {
        $this->nonProfitSocialAddress = $nonProfitSocialAddress;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getId();
        if (null !== $value) {
            $writer->writeAttribute("id", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getListingNPEmailNotifPref();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingNPEmailNotifPref", $value);
        }
        $value = $this->getListingNPEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingNPEmail", $value);
        }
        $value = $this->getListingNPContactName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingNPContactName", $value);
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
        $value = $this->getSearchableString();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchableString", $value);
        }
        $value = $this->getCharityRegion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityRegion", $value);
        }
        $value = $this->getCharityDomain();
        if (null !== $value && !empty($this->getCharityDomain())) {
            $writer->write(array_map(function ($v) {
                return ["CharityDomain" => $v];
            }, $value));
        }
        $value = $this->getCharityID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityID", $value);
        }
        $value = $this->getLogoURLSelling();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoURLSelling", $value);
        }
        $value = $this->getDisplayLogoSelling();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayLogoSelling", $value);
        }
        $value = $this->getDisplayNameInCheckout();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayNameInCheckout", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getShowMultipleDonationAmountInCheckout();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShowMultipleDonationAmountInCheckout", $value);
        }
        $value = $this->getExternalID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalID", $value);
        }
        $value = $this->getPopularityIndex();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PopularityIndex", $value);
        }
        $value = $this->getEIN();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EIN", $value);
        }
        $value = $this->getNonProfitSecondName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NonProfitSecondName", $value);
        }
        $value = $this->getNonProfitAddress();
        if (null !== $value && !empty($this->getNonProfitAddress())) {
            $writer->write(array_map(function ($v) {
                return ["NonProfitAddress" => $v];
            }, $value));
        }
        $value = $this->getNonProfitSocialAddress();
        if (null !== $value && !empty($this->getNonProfitSocialAddress())) {
            $writer->write(array_map(function ($v) {
                return ["NonProfitSocialAddress" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingNPEmailNotifPref');
        if (null !== $value) {
            $this->setListingNPEmailNotifPref($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingNPEmail');
        if (null !== $value) {
            $this->setListingNPEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingNPContactName');
        if (null !== $value) {
            $this->setListingNPContactName($value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchableString');
        if (null !== $value) {
            $this->setSearchableString($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityRegion');
        if (null !== $value) {
            $this->setCharityRegion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityDomain', true);
        if (null !== $value && !empty($value)) {
            $this->setCharityDomain($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID');
        if (null !== $value) {
            $this->setCharityID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoURLSelling');
        if (null !== $value) {
            $this->setLogoURLSelling($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayLogoSelling');
        if (null !== $value) {
            $this->setDisplayLogoSelling($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayNameInCheckout');
        if (null !== $value) {
            $this->setDisplayNameInCheckout($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShowMultipleDonationAmountInCheckout');
        if (null !== $value) {
            $this->setShowMultipleDonationAmountInCheckout($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalID');
        if (null !== $value) {
            $this->setExternalID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PopularityIndex');
        if (null !== $value) {
            $this->setPopularityIndex($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EIN');
        if (null !== $value) {
            $this->setEIN($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NonProfitSecondName');
        if (null !== $value) {
            $this->setNonProfitSecondName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NonProfitAddress', true);
        if (null !== $value && !empty($value)) {
            $this->setNonProfitAddress(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NonProfitAddressType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NonProfitSocialAddress', true);
        if (null !== $value && !empty($value)) {
            $this->setNonProfitSocialAddress(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\NonProfitSocialAddressType::fromKeyValue($v);
            }, $value));
        }
    }
}
