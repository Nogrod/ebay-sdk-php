<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EBayPLUSPreferenceType
 *
 * Contains information about a country where a specified seller is eligible to offer eBay Plus on listings for that country.
 *  <br/><br/>
 *  eBay Plus is a premium account option for buyers, which provides benefits such as fast free domestic shipping and free returns on selected items. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.
 *  <br/><br/>
 *  <span class="tablenote">
 *  <strong>Note:</strong> Currently, eBay Plus is available only to buyers in Germany and Australia. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
 *  </span>
 *  For more details about eBay Plus, see <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html">eBay Plus</a>.
 * XSD Type: EBayPLUSPreferenceType
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
     * <span class="tablenote"><b>Note:</b> This boolean field is no longer in use and will be ignored. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
     *
     * @var bool $optInStatus
     */
    private $optInStatus = null;

    /**
     * <span class="tablenote"><b>Note:</b> <b> This boolean field is no longer in use and will be ignored. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
     *  <br/>
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
     * <span class="tablenote"><b>Note:</b> This boolean field is no longer in use and will be ignored. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
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
     * <span class="tablenote"><b>Note:</b> This boolean field is no longer in use and will be ignored. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
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
     * <span class="tablenote"><b>Note:</b> <b> This boolean field is no longer in use and will be ignored. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
     *  <br/>
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
     * <span class="tablenote"><b>Note:</b> <b> This boolean field is no longer in use and will be ignored. eBay determines which listings qualify for eBay Plus based on whether the buyer has an active eBay Plus subscription and whether the listing meets the program's requirements. See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/ebay-plus.html" target="_blank">eBay Plus</a> for listing requirements.</span>
     *  <br/>
     *
     * @param bool $listingPreference
     * @return self
     */
    public function setListingPreference($listingPreference)
    {
        $this->listingPreference = $listingPreference;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\EBayPLUSPreferenceType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OptInStatus');
        if (null !== $value) {
            $this->setOptInStatus(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingPreference');
        if (null !== $value) {
            $this->setListingPreference(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
