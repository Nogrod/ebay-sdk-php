<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCharitiesRequestType
 *
 * <span class="tablenote"><b>Note: </b> This call is deprecated, and will be decommisioned on September 18, 2023. The alternative for this API is <a href="/api-docs/commerce/charity/resources/methods" target="_blank" rel="noopener">Charity API</a>, which has a <a href="/api-docs/commerce/charity/resources/charity_org/methods/getCharityOrg" target="_blank" rel="noopener">getCharityOrg</a> method to retrieve details on a specific Charity, and a <a href="/api-docs/commerce/charity/resources/charity_org/methods/getCharityOrgs" target="_blank" rel="noopener">getCharityOrgs</a> method to retrieve multiple charities based on search filters.
 *  </span>
 *  <br>
 *  The <b>GetCharities</b> call is used to search for nonprofit organizations that are registered with the eBay for Charity program. This call allows users to search for a specific nonprofit organization, or to search for multiple nonprofit organizations from a particular charitable domain, and/or geographical region, or by using a search string.
 * XSD Type: GetCharitiesRequestType
 */
class GetCharitiesRequestType extends AbstractRequestType
{
    /**
     * The unique identifier that eBay creates and assigns to each nonprofit organization. This is NOT the unique identifier used by the PayPal Giving Fund. This eBay unique identifier is returned in the <b>Charity.CharityID</b> field of a <b>GetItem</b> call for charitable listings.
     *  <br><br>
     *  If a <b>CharityID</b> value is used in the request, all other search filters set in the call request will be ignored, as the call will only search for the specified nonprofit organization.
     *
     * @var string $charityID
     */
    private $charityID = null;

    /**
     * This field will accept the full or partial name of a registered nonprofit organization. For example, if you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name may be returned in the response. If the <b>MatchType</b> field is used and set to <code>StartsWith</code> (default value), or is not used at all, the phrase "heart" must come at the beginning of the nonprofit organization's name to be returned. However, if the <b>MatchType</b> field is used and set to <code>Contains</code>, all registered nonprofit organizations with "heart" in their name should be returned in the response. The string passed in this field is not case-sensitive.
     *  <br/>
     *
     * @var string $charityName
     */
    private $charityName = null;

    /**
     * This field accepts any string up to 350 characters in length. The functionality of this field is similar to the <b>CharityName</b> field, except that the call will also search for the supplied query string within the charity's mission statement (which is returned under the <b>Charity.Mission</b> field in the response). If you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name or in their mission statement may be returned in the response.
     *  <br/><br/>
     *  The string passed in this field is not case-sensitive. The <b>MatchType</b> field will have no effect if the <b>Query</b> field is used, as the <b>MatchType</b> field will only have an effect if a <b>CharityName</b> string field is included.
     *  <br/>
     *
     * @var string $query
     */
    private $query = null;

    /**
     * This field can be used to search for registered nonprofit organizations within a specified geographical region. Each geographical region will have an integer value associated with it. This integer value is what is passed in to this field.
     *
     * @var int $charityRegion
     */
    private $charityRegion = null;

    /**
     * This field can be used to search for registered nonprofit organizations within a specified charitable domain. Each charitable domain will have an integer value associated with it. This integer value is what is passed in to this field. Nonprofit organizations can be associated with multiple charitable domains.
     *
     * @var int $charityDomain
     */
    private $charityDomain = null;

    /**
     * This field should be included and set to <code>true</code> if a user wants the charity's description to appear in the response. Note that not all charitable organizations will have defined descriptions.
     *  <br/>
     *
     * @var bool $includeDescription
     */
    private $includeDescription = null;

    /**
     * This filter is used if the user wants to specify where to look for the string specified in the <b>CharityName</b> field. The enumeration value input into this field controls the type of string matching to use when a value is submitted in the
     *  <b>CharityName</b> field. If this field is omitted, and a <b>CharityName</b> string is used, this parameter value defaults to <code>StartsWith</code>.
     *  <br/><br/>
     *  This field is not applicable when a <b>Query</b> value is used.
     *  <br/>
     *
     * @var string $matchType
     */
    private $matchType = null;

    /**
     * This boolean field is used and set to <code>true</code> if the user wants to search for nonprofit organizations currently featured on the eBay for Charity site.
     *  <br/>
     *
     * @var bool $featured
     */
    private $featured = null;

    /**
     * Reserved for future use.
     *
     * @var int $campaignID
     */
    private $campaignID = null;

    /**
     * Gets as charityID
     *
     * The unique identifier that eBay creates and assigns to each nonprofit organization. This is NOT the unique identifier used by the PayPal Giving Fund. This eBay unique identifier is returned in the <b>Charity.CharityID</b> field of a <b>GetItem</b> call for charitable listings.
     *  <br><br>
     *  If a <b>CharityID</b> value is used in the request, all other search filters set in the call request will be ignored, as the call will only search for the specified nonprofit organization.
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
     * The unique identifier that eBay creates and assigns to each nonprofit organization. This is NOT the unique identifier used by the PayPal Giving Fund. This eBay unique identifier is returned in the <b>Charity.CharityID</b> field of a <b>GetItem</b> call for charitable listings.
     *  <br><br>
     *  If a <b>CharityID</b> value is used in the request, all other search filters set in the call request will be ignored, as the call will only search for the specified nonprofit organization.
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
     * Gets as charityName
     *
     * This field will accept the full or partial name of a registered nonprofit organization. For example, if you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name may be returned in the response. If the <b>MatchType</b> field is used and set to <code>StartsWith</code> (default value), or is not used at all, the phrase "heart" must come at the beginning of the nonprofit organization's name to be returned. However, if the <b>MatchType</b> field is used and set to <code>Contains</code>, all registered nonprofit organizations with "heart" in their name should be returned in the response. The string passed in this field is not case-sensitive.
     *  <br/>
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
     * This field will accept the full or partial name of a registered nonprofit organization. For example, if you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name may be returned in the response. If the <b>MatchType</b> field is used and set to <code>StartsWith</code> (default value), or is not used at all, the phrase "heart" must come at the beginning of the nonprofit organization's name to be returned. However, if the <b>MatchType</b> field is used and set to <code>Contains</code>, all registered nonprofit organizations with "heart" in their name should be returned in the response. The string passed in this field is not case-sensitive.
     *  <br/>
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
     * Gets as query
     *
     * This field accepts any string up to 350 characters in length. The functionality of this field is similar to the <b>CharityName</b> field, except that the call will also search for the supplied query string within the charity's mission statement (which is returned under the <b>Charity.Mission</b> field in the response). If you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name or in their mission statement may be returned in the response.
     *  <br/><br/>
     *  The string passed in this field is not case-sensitive. The <b>MatchType</b> field will have no effect if the <b>Query</b> field is used, as the <b>MatchType</b> field will only have an effect if a <b>CharityName</b> string field is included.
     *  <br/>
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets a new query
     *
     * This field accepts any string up to 350 characters in length. The functionality of this field is similar to the <b>CharityName</b> field, except that the call will also search for the supplied query string within the charity's mission statement (which is returned under the <b>Charity.Mission</b> field in the response). If you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name or in their mission statement may be returned in the response.
     *  <br/><br/>
     *  The string passed in this field is not case-sensitive. The <b>MatchType</b> field will have no effect if the <b>Query</b> field is used, as the <b>MatchType</b> field will only have an effect if a <b>CharityName</b> string field is included.
     *  <br/>
     *
     * @param string $query
     * @return self
     */
    public function setQuery($query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Gets as charityRegion
     *
     * This field can be used to search for registered nonprofit organizations within a specified geographical region. Each geographical region will have an integer value associated with it. This integer value is what is passed in to this field.
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
     * This field can be used to search for registered nonprofit organizations within a specified geographical region. Each geographical region will have an integer value associated with it. This integer value is what is passed in to this field.
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
     * Gets as charityDomain
     *
     * This field can be used to search for registered nonprofit organizations within a specified charitable domain. Each charitable domain will have an integer value associated with it. This integer value is what is passed in to this field. Nonprofit organizations can be associated with multiple charitable domains.
     *
     * @return int
     */
    public function getCharityDomain()
    {
        return $this->charityDomain;
    }

    /**
     * Sets a new charityDomain
     *
     * This field can be used to search for registered nonprofit organizations within a specified charitable domain. Each charitable domain will have an integer value associated with it. This integer value is what is passed in to this field. Nonprofit organizations can be associated with multiple charitable domains.
     *
     * @param int $charityDomain
     * @return self
     */
    public function setCharityDomain($charityDomain)
    {
        $this->charityDomain = $charityDomain;
        return $this;
    }

    /**
     * Gets as includeDescription
     *
     * This field should be included and set to <code>true</code> if a user wants the charity's description to appear in the response. Note that not all charitable organizations will have defined descriptions.
     *  <br/>
     *
     * @return bool
     */
    public function getIncludeDescription()
    {
        return $this->includeDescription;
    }

    /**
     * Sets a new includeDescription
     *
     * This field should be included and set to <code>true</code> if a user wants the charity's description to appear in the response. Note that not all charitable organizations will have defined descriptions.
     *  <br/>
     *
     * @param bool $includeDescription
     * @return self
     */
    public function setIncludeDescription($includeDescription)
    {
        $this->includeDescription = $includeDescription;
        return $this;
    }

    /**
     * Gets as matchType
     *
     * This filter is used if the user wants to specify where to look for the string specified in the <b>CharityName</b> field. The enumeration value input into this field controls the type of string matching to use when a value is submitted in the
     *  <b>CharityName</b> field. If this field is omitted, and a <b>CharityName</b> string is used, this parameter value defaults to <code>StartsWith</code>.
     *  <br/><br/>
     *  This field is not applicable when a <b>Query</b> value is used.
     *  <br/>
     *
     * @return string
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    /**
     * Sets a new matchType
     *
     * This filter is used if the user wants to specify where to look for the string specified in the <b>CharityName</b> field. The enumeration value input into this field controls the type of string matching to use when a value is submitted in the
     *  <b>CharityName</b> field. If this field is omitted, and a <b>CharityName</b> string is used, this parameter value defaults to <code>StartsWith</code>.
     *  <br/><br/>
     *  This field is not applicable when a <b>Query</b> value is used.
     *  <br/>
     *
     * @param string $matchType
     * @return self
     */
    public function setMatchType($matchType)
    {
        $this->matchType = $matchType;
        return $this;
    }

    /**
     * Gets as featured
     *
     * This boolean field is used and set to <code>true</code> if the user wants to search for nonprofit organizations currently featured on the eBay for Charity site.
     *  <br/>
     *
     * @return bool
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Sets a new featured
     *
     * This boolean field is used and set to <code>true</code> if the user wants to search for nonprofit organizations currently featured on the eBay for Charity site.
     *  <br/>
     *
     * @param bool $featured
     * @return self
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
        return $this;
    }

    /**
     * Gets as campaignID
     *
     * Reserved for future use.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->campaignID;
    }

    /**
     * Sets a new campaignID
     *
     * Reserved for future use.
     *
     * @param int $campaignID
     * @return self
     */
    public function setCampaignID($campaignID)
    {
        $this->campaignID = $campaignID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getCharityID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityID", $value);
        }
        $value = $this->getCharityName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityName", $value);
        }
        $value = $this->getQuery();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Query", $value);
        }
        $value = $this->getCharityRegion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityRegion", $value);
        }
        $value = $this->getCharityDomain();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityDomain", $value);
        }
        $value = $this->getIncludeDescription();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeDescription", $value);
        }
        $value = $this->getMatchType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MatchType", $value);
        }
        $value = $this->getFeatured();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Featured", $value);
        }
        $value = $this->getCampaignID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CampaignID", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID');
        if (null !== $value) {
            $this->setCharityID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityName');
        if (null !== $value) {
            $this->setCharityName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Query');
        if (null !== $value) {
            $this->setQuery($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityRegion');
        if (null !== $value) {
            $this->setCharityRegion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityDomain');
        if (null !== $value) {
            $this->setCharityDomain($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeDescription');
        if (null !== $value) {
            $this->setIncludeDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MatchType');
        if (null !== $value) {
            $this->setMatchType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Featured');
        if (null !== $value) {
            $this->setFeatured($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CampaignID');
        if (null !== $value) {
            $this->setCampaignID($value);
        }
    }
}
