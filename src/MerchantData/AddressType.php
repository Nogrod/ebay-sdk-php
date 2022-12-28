<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddressType
 *
 * Contains the data for an eBay user's address. This is the base type for a
 *  number of user addresses, including seller payment address, buyer
 *  shipping address, and buyer and seller registration address.
 * XSD Type: AddressType
 */
class AddressType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The eBay user's name associated with an address on file with eBay.
     *  <br>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A concatenation of <b>Street1</b> and <b>Street2</b>, primarily used for a registration address.
     *
     * @var string $street
     */
    private $street = null;

    /**
     * The first line of the user's street address.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields.
     *  </span>
     *
     * @var string $street1
     */
    private $street1 = null;

    /**
     * The second line of the user's street address (such as an apartment number or suite number).
     *  Returned if the user specified a second street value for their address.
     *  In case of <b>Item.SellerContactDetails</b>, <b>Street2</b> can be used to provide City, Address, State, and Zip code (if applicable).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields.
     *  </span>
     *
     * @var string $street2
     */
    private $street2 = null;

    /**
     * The city associated with an address on file with eBay. Most addresses include a city name, but not all. For example, Singapore is an island city-state, so <code>SG</code> would appear in the <b>Country</b> field, and 'Singapore' or 'Republic of Singapore' would appear in the <b>CountryName</b> field, but the <b>CityName</b> field is not applicable.
     *  <br>
     *
     * @var string $cityName
     */
    private $cityName = null;

    /**
     * The county associated with an address on file with eBay. This field should only be passed in or returned if applicable/defined.
     *
     * @var string $county
     */
    private $county = null;

    /**
     * The state or province associated with an address on file with eBay. Whether it's a state or a province will depend on the region and/or country. This field should only be passed in or returned if applicable/defined.
     *  <br>
     *
     * @var string $stateOrProvince
     */
    private $stateOrProvince = null;

    /**
     * The two-digit code representing the country of the user.<br>
     *  <br>
     *  If not provided as input, eBay uses the country associated
     *  with the eBay Site ID when the call is made.<br>
     *  <br>
     *  For a Global Shipping Program order, <b>GetSellerList</b> returns the country code of the buyer, not the international shipping provider.
     *
     * @var string $country
     */
    private $country = null;

    /**
     * The full name of the country associated with an address on file with eBay.
     *  <br/>
     *
     * @var string $countryName
     */
    private $countryName = null;

    /**
     * User's primary phone number. This may return a value of
     *  <code>Invalid Request</code> if you are not authorized to see the
     *  user's phone number.
     *  <br/><br/>
     *  In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     *  digits), and phone extension (if specified by the user) are returned in this field.
     *  The extension can be one or more digits. Non-breaking spaces are used as delimiters
     *  between these phone number components.
     *  <br>
     *
     * @var string $phone
     */
    private $phone = null;

    /**
     * Standard ISO code for the country of the user's primary telephone phone number.
     *  For Classified Ad listings, this code is used to look up the country's
     *  international calling prefix. Both the ISO code and country phone prefix are
     *  stored with listings of this type.
     *  This field applies to Classified Ad listings only.
     *
     * @var string $phoneCountryCode
     */
    private $phoneCountryCode = null;

    /**
     * Country Prefix of the secondary phone number. This value is derived from
     *  inputs supplied for <b>PhoneCountryCode</b>.
     *  This field applies to Classified Ad listings only.
     *
     * @var string $phoneCountryPrefix
     */
    private $phoneCountryPrefix = null;

    /**
     * Area or City Code of a user's primary phone number.
     *  This field applies to Classified Ad listings only.
     *
     * @var string $phoneAreaOrCityCode
     */
    private $phoneAreaOrCityCode = null;

    /**
     * The local number portion of the user's primary phone number.
     *  This field applies to Classified Ad listings only.
     *  <br><br>
     *  <b>Note:</b> The full primary phone number is constructed by
     *  combining <b>PhoneLocalNumber</b> with <b>PhoneAreaOrCityCode</b> and <b>PhoneCountryPrefix</b>.
     *  <br>
     *
     * @var string $phoneLocalNumber
     */
    private $phoneLocalNumber = null;

    /**
     * User's postal code.<br>
     *  <br>
     *  For a Global Shipping Program order, <b>GetSellerList</b> and <b>GetMyeBaySelling</b> return the postal code of the buyer, not that of the international shipping provider.
     *  <br>
     *
     * @var string $postalCode
     */
    private $postalCode = null;

    /**
     * Unique ID for a user's address in the eBay database.
     *  This value can help prevent the need to
     *  store an address multiple times across multiple orders.
     *  The ID changes if a user changes their address.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For orders subject to Australian 'Goods and Services' tax (GST), in addition to the unique identifier for the address, the last two digits of the user's Australian Business Number (ABN) will also appear in this field. Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site.
     *  </span>
     *
     * @var string $addressID
     */
    private $addressID = null;

    /**
     * This enumeration value returned here indicates the company that has the address on file. The value returned here should always be <code>eBay</code>.
     *
     * @var string $addressOwner
     */
    private $addressOwner = null;

    /**
     * @var string $addressStatus
     */
    private $addressStatus = null;

    /**
     * This field is no longer applicable, and should not returned.
     *  <br>
     *
     * @var string $externalAddressID
     */
    private $externalAddressID = null;

    /**
     * Seller's international name that is associated with the payment address.
     *  This field is only applicable to seller payment/billing addresses.
     *
     * @var string $internationalName
     */
    private $internationalName = null;

    /**
     * International state and city that is associated with the seller's payment address. This field is only applicable to seller payment/billing addresses.
     *
     * @var string $internationalStateAndCity
     */
    private $internationalStateAndCity = null;

    /**
     * Seller's international street address that is associated with the payment address. This field is only applicable to seller payment/billing addresses.
     *
     * @var string $internationalStreet
     */
    private $internationalStreet = null;

    /**
     * User's company name. This field should only be passed in or returned if applicable/defined.
     *
     * @var string $companyName
     */
    private $companyName = null;

    /**
     * @var string $addressRecordType
     */
    private $addressRecordType = null;

    /**
     * Displays the first name of the seller (in a business card
     *  format) if the seller's <b>SellerBusinessCodeType</b> value is
     *  <code>Commercial</code>.
     *
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * Displays the last name of the seller (in a business card
     *  format) if the seller's <b>SellerBusinessCodeType</b> is set to
     *  <code>Commercial</code>.
     *
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * Secondary Phone number of the lead. Not returned if information is unavailable.
     *
     * @var string $phone2
     */
    private $phone2 = null;

    /**
     * This tag tells whether current address is a default shipping address or one of the shipping addresses in address book.
     *
     * @var string $addressUsage
     */
    private $addressUsage = null;

    /**
     * Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the <b>ReferenceID</b> as the primary reference when processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider.
     *  <br/><br/>
     *  Example: "Reference #1234567890123456"
     *
     * @var string $referenceID
     */
    private $referenceID = null;

    /**
     * This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned in this field.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AddressAttributeType[] $addressAttribute
     */
    private $addressAttribute = [

    ];

    /**
     * Gets as name
     *
     * The eBay user's name associated with an address on file with eBay.
     *  <br>
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
     * The eBay user's name associated with an address on file with eBay.
     *  <br>
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
     * Gets as street
     *
     * A concatenation of <b>Street1</b> and <b>Street2</b>, primarily used for a registration address.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * A concatenation of <b>Street1</b> and <b>Street2</b>, primarily used for a registration address.
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as street1
     *
     * The first line of the user's street address.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields.
     *  </span>
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * Sets a new street1
     *
     * The first line of the user's street address.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields.
     *  </span>
     *
     * @param string $street1
     * @return self
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
        return $this;
    }

    /**
     * Gets as street2
     *
     * The second line of the user's street address (such as an apartment number or suite number).
     *  Returned if the user specified a second street value for their address.
     *  In case of <b>Item.SellerContactDetails</b>, <b>Street2</b> can be used to provide City, Address, State, and Zip code (if applicable).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields.
     *  </span>
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Sets a new street2
     *
     * The second line of the user's street address (such as an apartment number or suite number).
     *  Returned if the user specified a second street value for their address.
     *  In case of <b>Item.SellerContactDetails</b>, <b>Street2</b> can be used to provide City, Address, State, and Zip code (if applicable).
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> Note the different maximum lengths noted below for different countries. If a street name exceeds the maximum length for the applicable country, the full street name may be expressed through both the <b>Street1</b> and <b>Street2</b> fields.
     *  </span>
     *
     * @param string $street2
     * @return self
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * The city associated with an address on file with eBay. Most addresses include a city name, but not all. For example, Singapore is an island city-state, so <code>SG</code> would appear in the <b>Country</b> field, and 'Singapore' or 'Republic of Singapore' would appear in the <b>CountryName</b> field, but the <b>CityName</b> field is not applicable.
     *  <br>
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * The city associated with an address on file with eBay. Most addresses include a city name, but not all. For example, Singapore is an island city-state, so <code>SG</code> would appear in the <b>Country</b> field, and 'Singapore' or 'Republic of Singapore' would appear in the <b>CountryName</b> field, but the <b>CityName</b> field is not applicable.
     *  <br>
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as county
     *
     * The county associated with an address on file with eBay. This field should only be passed in or returned if applicable/defined.
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Sets a new county
     *
     * The county associated with an address on file with eBay. This field should only be passed in or returned if applicable/defined.
     *
     * @param string $county
     * @return self
     */
    public function setCounty($county)
    {
        $this->county = $county;
        return $this;
    }

    /**
     * Gets as stateOrProvince
     *
     * The state or province associated with an address on file with eBay. Whether it's a state or a province will depend on the region and/or country. This field should only be passed in or returned if applicable/defined.
     *  <br>
     *
     * @return string
     */
    public function getStateOrProvince()
    {
        return $this->stateOrProvince;
    }

    /**
     * Sets a new stateOrProvince
     *
     * The state or province associated with an address on file with eBay. Whether it's a state or a province will depend on the region and/or country. This field should only be passed in or returned if applicable/defined.
     *  <br>
     *
     * @param string $stateOrProvince
     * @return self
     */
    public function setStateOrProvince($stateOrProvince)
    {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }

    /**
     * Gets as country
     *
     * The two-digit code representing the country of the user.<br>
     *  <br>
     *  If not provided as input, eBay uses the country associated
     *  with the eBay Site ID when the call is made.<br>
     *  <br>
     *  For a Global Shipping Program order, <b>GetSellerList</b> returns the country code of the buyer, not the international shipping provider.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * The two-digit code representing the country of the user.<br>
     *  <br>
     *  If not provided as input, eBay uses the country associated
     *  with the eBay Site ID when the call is made.<br>
     *  <br>
     *  For a Global Shipping Program order, <b>GetSellerList</b> returns the country code of the buyer, not the international shipping provider.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * The full name of the country associated with an address on file with eBay.
     *  <br/>
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * The full name of the country associated with an address on file with eBay.
     *  <br/>
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Gets as phone
     *
     * User's primary phone number. This may return a value of
     *  <code>Invalid Request</code> if you are not authorized to see the
     *  user's phone number.
     *  <br/><br/>
     *  In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     *  digits), and phone extension (if specified by the user) are returned in this field.
     *  The extension can be one or more digits. Non-breaking spaces are used as delimiters
     *  between these phone number components.
     *  <br>
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * User's primary phone number. This may return a value of
     *  <code>Invalid Request</code> if you are not authorized to see the
     *  user's phone number.
     *  <br/><br/>
     *  In the US, the area code (3 digits), the prefix (3 digits), the line number (4
     *  digits), and phone extension (if specified by the user) are returned in this field.
     *  The extension can be one or more digits. Non-breaking spaces are used as delimiters
     *  between these phone number components.
     *  <br>
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as phoneCountryCode
     *
     * Standard ISO code for the country of the user's primary telephone phone number.
     *  For Classified Ad listings, this code is used to look up the country's
     *  international calling prefix. Both the ISO code and country phone prefix are
     *  stored with listings of this type.
     *  This field applies to Classified Ad listings only.
     *
     * @return string
     */
    public function getPhoneCountryCode()
    {
        return $this->phoneCountryCode;
    }

    /**
     * Sets a new phoneCountryCode
     *
     * Standard ISO code for the country of the user's primary telephone phone number.
     *  For Classified Ad listings, this code is used to look up the country's
     *  international calling prefix. Both the ISO code and country phone prefix are
     *  stored with listings of this type.
     *  This field applies to Classified Ad listings only.
     *
     * @param string $phoneCountryCode
     * @return self
     */
    public function setPhoneCountryCode($phoneCountryCode)
    {
        $this->phoneCountryCode = $phoneCountryCode;
        return $this;
    }

    /**
     * Gets as phoneCountryPrefix
     *
     * Country Prefix of the secondary phone number. This value is derived from
     *  inputs supplied for <b>PhoneCountryCode</b>.
     *  This field applies to Classified Ad listings only.
     *
     * @return string
     */
    public function getPhoneCountryPrefix()
    {
        return $this->phoneCountryPrefix;
    }

    /**
     * Sets a new phoneCountryPrefix
     *
     * Country Prefix of the secondary phone number. This value is derived from
     *  inputs supplied for <b>PhoneCountryCode</b>.
     *  This field applies to Classified Ad listings only.
     *
     * @param string $phoneCountryPrefix
     * @return self
     */
    public function setPhoneCountryPrefix($phoneCountryPrefix)
    {
        $this->phoneCountryPrefix = $phoneCountryPrefix;
        return $this;
    }

    /**
     * Gets as phoneAreaOrCityCode
     *
     * Area or City Code of a user's primary phone number.
     *  This field applies to Classified Ad listings only.
     *
     * @return string
     */
    public function getPhoneAreaOrCityCode()
    {
        return $this->phoneAreaOrCityCode;
    }

    /**
     * Sets a new phoneAreaOrCityCode
     *
     * Area or City Code of a user's primary phone number.
     *  This field applies to Classified Ad listings only.
     *
     * @param string $phoneAreaOrCityCode
     * @return self
     */
    public function setPhoneAreaOrCityCode($phoneAreaOrCityCode)
    {
        $this->phoneAreaOrCityCode = $phoneAreaOrCityCode;
        return $this;
    }

    /**
     * Gets as phoneLocalNumber
     *
     * The local number portion of the user's primary phone number.
     *  This field applies to Classified Ad listings only.
     *  <br><br>
     *  <b>Note:</b> The full primary phone number is constructed by
     *  combining <b>PhoneLocalNumber</b> with <b>PhoneAreaOrCityCode</b> and <b>PhoneCountryPrefix</b>.
     *  <br>
     *
     * @return string
     */
    public function getPhoneLocalNumber()
    {
        return $this->phoneLocalNumber;
    }

    /**
     * Sets a new phoneLocalNumber
     *
     * The local number portion of the user's primary phone number.
     *  This field applies to Classified Ad listings only.
     *  <br><br>
     *  <b>Note:</b> The full primary phone number is constructed by
     *  combining <b>PhoneLocalNumber</b> with <b>PhoneAreaOrCityCode</b> and <b>PhoneCountryPrefix</b>.
     *  <br>
     *
     * @param string $phoneLocalNumber
     * @return self
     */
    public function setPhoneLocalNumber($phoneLocalNumber)
    {
        $this->phoneLocalNumber = $phoneLocalNumber;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * User's postal code.<br>
     *  <br>
     *  For a Global Shipping Program order, <b>GetSellerList</b> and <b>GetMyeBaySelling</b> return the postal code of the buyer, not that of the international shipping provider.
     *  <br>
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * User's postal code.<br>
     *  <br>
     *  For a Global Shipping Program order, <b>GetSellerList</b> and <b>GetMyeBaySelling</b> return the postal code of the buyer, not that of the international shipping provider.
     *  <br>
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as addressID
     *
     * Unique ID for a user's address in the eBay database.
     *  This value can help prevent the need to
     *  store an address multiple times across multiple orders.
     *  The ID changes if a user changes their address.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For orders subject to Australian 'Goods and Services' tax (GST), in addition to the unique identifier for the address, the last two digits of the user's Australian Business Number (ABN) will also appear in this field. Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site.
     *  </span>
     *
     * @return string
     */
    public function getAddressID()
    {
        return $this->addressID;
    }

    /**
     * Sets a new addressID
     *
     * Unique ID for a user's address in the eBay database.
     *  This value can help prevent the need to
     *  store an address multiple times across multiple orders.
     *  The ID changes if a user changes their address.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For orders subject to Australian 'Goods and Services' tax (GST), in addition to the unique identifier for the address, the last two digits of the user's Australian Business Number (ABN) will also appear in this field. Australian 'Goods and Services' tax (GST) is automatically charged to buyers outside of Australia when they purchase items on the eBay Australia site.
     *  </span>
     *
     * @param string $addressID
     * @return self
     */
    public function setAddressID($addressID)
    {
        $this->addressID = $addressID;
        return $this;
    }

    /**
     * Gets as addressOwner
     *
     * This enumeration value returned here indicates the company that has the address on file. The value returned here should always be <code>eBay</code>.
     *
     * @return string
     */
    public function getAddressOwner()
    {
        return $this->addressOwner;
    }

    /**
     * Sets a new addressOwner
     *
     * This enumeration value returned here indicates the company that has the address on file. The value returned here should always be <code>eBay</code>.
     *
     * @param string $addressOwner
     * @return self
     */
    public function setAddressOwner($addressOwner)
    {
        $this->addressOwner = $addressOwner;
        return $this;
    }

    /**
     * Gets as addressStatus
     *
     * @return string
     */
    public function getAddressStatus()
    {
        return $this->addressStatus;
    }

    /**
     * Sets a new addressStatus
     *
     * @param string $addressStatus
     * @return self
     */
    public function setAddressStatus($addressStatus)
    {
        $this->addressStatus = $addressStatus;
        return $this;
    }

    /**
     * Gets as externalAddressID
     *
     * This field is no longer applicable, and should not returned.
     *  <br>
     *
     * @return string
     */
    public function getExternalAddressID()
    {
        return $this->externalAddressID;
    }

    /**
     * Sets a new externalAddressID
     *
     * This field is no longer applicable, and should not returned.
     *  <br>
     *
     * @param string $externalAddressID
     * @return self
     */
    public function setExternalAddressID($externalAddressID)
    {
        $this->externalAddressID = $externalAddressID;
        return $this;
    }

    /**
     * Gets as internationalName
     *
     * Seller's international name that is associated with the payment address.
     *  This field is only applicable to seller payment/billing addresses.
     *
     * @return string
     */
    public function getInternationalName()
    {
        return $this->internationalName;
    }

    /**
     * Sets a new internationalName
     *
     * Seller's international name that is associated with the payment address.
     *  This field is only applicable to seller payment/billing addresses.
     *
     * @param string $internationalName
     * @return self
     */
    public function setInternationalName($internationalName)
    {
        $this->internationalName = $internationalName;
        return $this;
    }

    /**
     * Gets as internationalStateAndCity
     *
     * International state and city that is associated with the seller's payment address. This field is only applicable to seller payment/billing addresses.
     *
     * @return string
     */
    public function getInternationalStateAndCity()
    {
        return $this->internationalStateAndCity;
    }

    /**
     * Sets a new internationalStateAndCity
     *
     * International state and city that is associated with the seller's payment address. This field is only applicable to seller payment/billing addresses.
     *
     * @param string $internationalStateAndCity
     * @return self
     */
    public function setInternationalStateAndCity($internationalStateAndCity)
    {
        $this->internationalStateAndCity = $internationalStateAndCity;
        return $this;
    }

    /**
     * Gets as internationalStreet
     *
     * Seller's international street address that is associated with the payment address. This field is only applicable to seller payment/billing addresses.
     *
     * @return string
     */
    public function getInternationalStreet()
    {
        return $this->internationalStreet;
    }

    /**
     * Sets a new internationalStreet
     *
     * Seller's international street address that is associated with the payment address. This field is only applicable to seller payment/billing addresses.
     *
     * @param string $internationalStreet
     * @return self
     */
    public function setInternationalStreet($internationalStreet)
    {
        $this->internationalStreet = $internationalStreet;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * User's company name. This field should only be passed in or returned if applicable/defined.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * User's company name. This field should only be passed in or returned if applicable/defined.
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as addressRecordType
     *
     * @return string
     */
    public function getAddressRecordType()
    {
        return $this->addressRecordType;
    }

    /**
     * Sets a new addressRecordType
     *
     * @param string $addressRecordType
     * @return self
     */
    public function setAddressRecordType($addressRecordType)
    {
        $this->addressRecordType = $addressRecordType;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * Displays the first name of the seller (in a business card
     *  format) if the seller's <b>SellerBusinessCodeType</b> value is
     *  <code>Commercial</code>.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * Displays the first name of the seller (in a business card
     *  format) if the seller's <b>SellerBusinessCodeType</b> value is
     *  <code>Commercial</code>.
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * Displays the last name of the seller (in a business card
     *  format) if the seller's <b>SellerBusinessCodeType</b> is set to
     *  <code>Commercial</code>.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * Displays the last name of the seller (in a business card
     *  format) if the seller's <b>SellerBusinessCodeType</b> is set to
     *  <code>Commercial</code>.
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as phone2
     *
     * Secondary Phone number of the lead. Not returned if information is unavailable.
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Sets a new phone2
     *
     * Secondary Phone number of the lead. Not returned if information is unavailable.
     *
     * @param string $phone2
     * @return self
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;
        return $this;
    }

    /**
     * Gets as addressUsage
     *
     * This tag tells whether current address is a default shipping address or one of the shipping addresses in address book.
     *
     * @return string
     */
    public function getAddressUsage()
    {
        return $this->addressUsage;
    }

    /**
     * Sets a new addressUsage
     *
     * This tag tells whether current address is a default shipping address or one of the shipping addresses in address book.
     *
     * @param string $addressUsage
     * @return self
     */
    public function setAddressUsage($addressUsage)
    {
        $this->addressUsage = $addressUsage;
        return $this;
    }

    /**
     * Gets as referenceID
     *
     * Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the <b>ReferenceID</b> as the primary reference when processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider.
     *  <br/><br/>
     *  Example: "Reference #1234567890123456"
     *
     * @return string
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * Uniquely identifies an order shipped using the Global Shipping Program. This value is generated by eBay when the order is completed. The international shipping provider uses the <b>ReferenceID</b> as the primary reference when processing the shipment. Sellers must include this value on the package immediately above the street address of the international shipping provider.
     *  <br/><br/>
     *  Example: "Reference #1234567890123456"
     *
     * @param string $referenceID
     * @return self
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Adds as addressAttribute
     *
     * This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned in this field.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\AddressAttributeType $addressAttribute
     */
    public function addToAddressAttribute(\Nogrod\eBaySDK\MerchantData\AddressAttributeType $addressAttribute)
    {
        $this->addressAttribute[] = $addressAttribute;
        return $this;
    }

    /**
     * isset addressAttribute
     *
     * This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned in this field.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressAttribute($index)
    {
        return isset($this->addressAttribute[$index]);
    }

    /**
     * unset addressAttribute
     *
     * This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned in this field.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressAttribute($index)
    {
        unset($this->addressAttribute[$index]);
    }

    /**
     * Gets as addressAttribute
     *
     * This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned in this field.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressAttributeType[]
     */
    public function getAddressAttribute()
    {
        return $this->addressAttribute;
    }

    /**
     * Sets a new addressAttribute
     *
     * This field shows an attribute for the address, and its corresponding value. Currently, this field is only used to display the reference ID for a "Click and Collect" order, but in the future, other address attributes may be returned in this field.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressAttributeType[] $addressAttribute
     * @return self
     */
    public function setAddressAttribute(array $addressAttribute)
    {
        $this->addressAttribute = $addressAttribute;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getStreet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Street", $value);
        }
        $value = $this->getStreet1();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Street1", $value);
        }
        $value = $this->getStreet2();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Street2", $value);
        }
        $value = $this->getCityName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CityName", $value);
        }
        $value = $this->getCounty();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}County", $value);
        }
        $value = $this->getStateOrProvince();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StateOrProvince", $value);
        }
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Country", $value);
        }
        $value = $this->getCountryName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CountryName", $value);
        }
        $value = $this->getPhone();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Phone", $value);
        }
        $value = $this->getPhoneCountryCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhoneCountryCode", $value);
        }
        $value = $this->getPhoneCountryPrefix();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhoneCountryPrefix", $value);
        }
        $value = $this->getPhoneAreaOrCityCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhoneAreaOrCityCode", $value);
        }
        $value = $this->getPhoneLocalNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PhoneLocalNumber", $value);
        }
        $value = $this->getPostalCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostalCode", $value);
        }
        $value = $this->getAddressID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressID", $value);
        }
        $value = $this->getAddressOwner();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressOwner", $value);
        }
        $value = $this->getAddressStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressStatus", $value);
        }
        $value = $this->getExternalAddressID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalAddressID", $value);
        }
        $value = $this->getInternationalName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalName", $value);
        }
        $value = $this->getInternationalStateAndCity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalStateAndCity", $value);
        }
        $value = $this->getInternationalStreet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalStreet", $value);
        }
        $value = $this->getCompanyName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompanyName", $value);
        }
        $value = $this->getAddressRecordType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressRecordType", $value);
        }
        $value = $this->getFirstName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FirstName", $value);
        }
        $value = $this->getLastName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastName", $value);
        }
        $value = $this->getPhone2();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Phone2", $value);
        }
        $value = $this->getAddressUsage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddressUsage", $value);
        }
        $value = $this->getReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferenceID", $value);
        }
        $value = $this->getAddressAttribute();
        if (null !== $value && !empty($this->getAddressAttribute())) {
            $writer->write(array_map(function ($v) {
                return ["AddressAttribute" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Street');
        if (null !== $value) {
            $this->setStreet($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Street1');
        if (null !== $value) {
            $this->setStreet1($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Street2');
        if (null !== $value) {
            $this->setStreet2($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CityName');
        if (null !== $value) {
            $this->setCityName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}County');
        if (null !== $value) {
            $this->setCounty($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StateOrProvince');
        if (null !== $value) {
            $this->setStateOrProvince($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CountryName');
        if (null !== $value) {
            $this->setCountryName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Phone');
        if (null !== $value) {
            $this->setPhone($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhoneCountryCode');
        if (null !== $value) {
            $this->setPhoneCountryCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhoneCountryPrefix');
        if (null !== $value) {
            $this->setPhoneCountryPrefix($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhoneAreaOrCityCode');
        if (null !== $value) {
            $this->setPhoneAreaOrCityCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PhoneLocalNumber');
        if (null !== $value) {
            $this->setPhoneLocalNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostalCode');
        if (null !== $value) {
            $this->setPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressID');
        if (null !== $value) {
            $this->setAddressID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressOwner');
        if (null !== $value) {
            $this->setAddressOwner($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressStatus');
        if (null !== $value) {
            $this->setAddressStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalAddressID');
        if (null !== $value) {
            $this->setExternalAddressID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalName');
        if (null !== $value) {
            $this->setInternationalName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalStateAndCity');
        if (null !== $value) {
            $this->setInternationalStateAndCity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalStreet');
        if (null !== $value) {
            $this->setInternationalStreet($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompanyName');
        if (null !== $value) {
            $this->setCompanyName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressRecordType');
        if (null !== $value) {
            $this->setAddressRecordType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FirstName');
        if (null !== $value) {
            $this->setFirstName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastName');
        if (null !== $value) {
            $this->setLastName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Phone2');
        if (null !== $value) {
            $this->setPhone2($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressUsage');
        if (null !== $value) {
            $this->setAddressUsage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferenceID');
        if (null !== $value) {
            $this->setReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddressAttribute', true);
        if (null !== $value && !empty($value)) {
            $this->setAddressAttribute(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\AddressAttributeType::fromKeyValue($v);
            }, $value));
        }
    }
}
