<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EBayPLUSPreferenceType
 *
 * Contains information about a country where a specified seller is eligible to offer eBay Plus on listings, as well as the seller's opt-in status and listing preference for that country.
 *  <br/><br/>
 *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. Top Rated eBay sellers must opt in to eBay Plus to be able offer the program on qualifying listings. Sellers must commit to next-day delivery of those items.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
 *  </span>
 *  For more details about eBay Plus, see <a href="../../../../guides/features-guide/default.html#development/Feature-eBayPlus.html">Offering eBay Plus</a>.
 * XSD Type: eBayPLUSPreferenceType
 */
class EBayPLUSPreferenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An ISO 3166 standard two-letter code that identifies a country where the seller is eligible to offer eBay Plus on fixed price listings.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia.
     *  </span>
     *
     * @var string $country
     */
    private $country = null;

    /**
     * A value of <code>true</code> indicates that the seller has opted in to eBay Plus for listings in the specified country.
     *
     * @var bool $optInStatus
     */
    private $optInStatus = null;

    /**
     * A value of <code>true</code> indicates that if <strong>OptInStatus</strong> is also <code>true</code>, the seller will offer eBay Plus by default for new listings in the specified country. If this field's value is <code>false</code> (and <strong>OptInStatus</strong> is <code>true</code>), the seller will offer eBay Plus on a listing by listing basis in the specified country.
     *
     * @var bool $listingPreference
     */
    private $listingPreference = null;

    /**
     * Gets as country
     *
     * An ISO 3166 standard two-letter code that identifies a country where the seller is eligible to offer eBay Plus on fixed price listings.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia.
     *  </span>
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
     * An ISO 3166 standard two-letter code that identifies a country where the seller is eligible to offer eBay Plus on fixed price listings.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia.
     *  </span>
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
     * Gets as optInStatus
     *
     * A value of <code>true</code> indicates that the seller has opted in to eBay Plus for listings in the specified country.
     *
     * @return bool
     */
    public function getOptInStatus()
    {
        return $this->optInStatus;
    }

    /**
     * Sets a new optInStatus
     *
     * A value of <code>true</code> indicates that the seller has opted in to eBay Plus for listings in the specified country.
     *
     * @param bool $optInStatus
     * @return self
     */
    public function setOptInStatus($optInStatus)
    {
        $this->optInStatus = $optInStatus;
        return $this;
    }

    /**
     * Gets as listingPreference
     *
     * A value of <code>true</code> indicates that if <strong>OptInStatus</strong> is also <code>true</code>, the seller will offer eBay Plus by default for new listings in the specified country. If this field's value is <code>false</code> (and <strong>OptInStatus</strong> is <code>true</code>), the seller will offer eBay Plus on a listing by listing basis in the specified country.
     *
     * @return bool
     */
    public function getListingPreference()
    {
        return $this->listingPreference;
    }

    /**
     * Sets a new listingPreference
     *
     * A value of <code>true</code> indicates that if <strong>OptInStatus</strong> is also <code>true</code>, the seller will offer eBay Plus by default for new listings in the specified country. If this field's value is <code>false</code> (and <strong>OptInStatus</strong> is <code>true</code>), the seller will offer eBay Plus on a listing by listing basis in the specified country.
     *
     * @param bool $listingPreference
     * @return self
     */
    public function setListingPreference($listingPreference)
    {
        $this->listingPreference = $listingPreference;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCountry();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Country", $value);
        }
        $value = $this->getOptInStatus();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OptInStatus", $value);
        }
        $value = $this->getListingPreference();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingPreference", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OptInStatus');
        if (null !== $value) {
            $this->setOptInStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingPreference');
        if (null !== $value) {
            $this->setListingPreference($value);
        }
    }
}
