<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VATDetailsType
 *
 * This type is used to display details related to VAT (Value-Added Tax) and Business Seller features.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b>
 *  VAT is not applicable to all countries, including the US. Sellers must be registered as Business Sellers on the site they are selling on in order to use the Business Seller-related fields.
 *  </span>
 * XSD Type: VATDetailsType
 */
class VATDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is only returned if set on the listing, and the person making the call owns the listing.
     *
     * @var bool $businessSeller
     */
    private $businessSeller = null;

    /**
     * This field is only returned if 'true', and the person making the call owns the listing. The 'Restricted to Business' feature can only be used by registered business sellers on the German, Austrian, and Swiss marketplaces, and only in listing categories that support 'Business-to-Business' listings. In a 'Business-to-Business' listing, the seller restricts sales of their item to users registered on eBay as business users.
     *  <br><br>
     *  The <b>GetCategories</b> Trading API call can be used by the seller (using the eBay marketplace's Site ID value) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports Business-to-Business listings.
     *
     * @var bool $restrictedToBusiness
     */
    private $restrictedToBusiness = null;

    /**
     * This container shows the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing.
     *  <br/><br/>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate.
     *  <br/><br/>
     *  If VAT is charged on a listing, the seller can choose to print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price.
     *  <br/><br/>
     *  This field is returned only if the listing is subject to VAT.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The float value input into an Add/Revise/Relist call can have up to three digits beyond the decimal point (e.g. 12.346).
     *  </span>
     *
     * @var float $vATPercent
     */
    private $vATPercent = null;

    /**
     * This string value is the Site ID value of the eBay Marketplace where the VAT is applicable and where the seller is registered as a Business Seller.
     *  <br/><br/>
     *  The eBay sites that support VAT (and their corresponding Site IDs) can be found in the <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
     *
     * @var string $vATSite
     */
    private $vATSite = null;

    /**
     * This is the unique VAT identifier associated with the Business Seller's account. This field will only be returned to Business Sellers who own the specified listing.
     *  <br/><br/>
     *  Non-Business Sellers will not have a VAT identifier associated with their account, so this field will never be returned for those users.
     *
     * @var string $vATID
     */
    private $vATID = null;

    /**
     * Gets as businessSeller
     *
     * This field is only returned if set on the listing, and the person making the call owns the listing.
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
     * This field is only returned if set on the listing, and the person making the call owns the listing.
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
     * Gets as restrictedToBusiness
     *
     * This field is only returned if 'true', and the person making the call owns the listing. The 'Restricted to Business' feature can only be used by registered business sellers on the German, Austrian, and Swiss marketplaces, and only in listing categories that support 'Business-to-Business' listings. In a 'Business-to-Business' listing, the seller restricts sales of their item to users registered on eBay as business users.
     *  <br><br>
     *  The <b>GetCategories</b> Trading API call can be used by the seller (using the eBay marketplace's Site ID value) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports Business-to-Business listings.
     *
     * @return bool
     */
    public function getRestrictedToBusiness()
    {
        return $this->restrictedToBusiness;
    }

    /**
     * Sets a new restrictedToBusiness
     *
     * This field is only returned if 'true', and the person making the call owns the listing. The 'Restricted to Business' feature can only be used by registered business sellers on the German, Austrian, and Swiss marketplaces, and only in listing categories that support 'Business-to-Business' listings. In a 'Business-to-Business' listing, the seller restricts sales of their item to users registered on eBay as business users.
     *  <br><br>
     *  The <b>GetCategories</b> Trading API call can be used by the seller (using the eBay marketplace's Site ID value) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports Business-to-Business listings.
     *
     * @param bool $restrictedToBusiness
     * @return self
     */
    public function setRestrictedToBusiness($restrictedToBusiness)
    {
        $this->restrictedToBusiness = $restrictedToBusiness;
        return $this;
    }

    /**
     * Gets as vATPercent
     *
     * This container shows the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing.
     *  <br/><br/>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate.
     *  <br/><br/>
     *  If VAT is charged on a listing, the seller can choose to print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price.
     *  <br/><br/>
     *  This field is returned only if the listing is subject to VAT.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The float value input into an Add/Revise/Relist call can have up to three digits beyond the decimal point (e.g. 12.346).
     *  </span>
     *
     * @return float
     */
    public function getVATPercent()
    {
        return $this->vATPercent;
    }

    /**
     * Sets a new vATPercent
     *
     * This container shows the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing.
     *  <br/><br/>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate.
     *  <br/><br/>
     *  If VAT is charged on a listing, the seller can choose to print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price.
     *  <br/><br/>
     *  This field is returned only if the listing is subject to VAT.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The float value input into an Add/Revise/Relist call can have up to three digits beyond the decimal point (e.g. 12.346).
     *  </span>
     *
     * @param float $vATPercent
     * @return self
     */
    public function setVATPercent($vATPercent)
    {
        $this->vATPercent = $vATPercent;
        return $this;
    }

    /**
     * Gets as vATSite
     *
     * This string value is the Site ID value of the eBay Marketplace where the VAT is applicable and where the seller is registered as a Business Seller.
     *  <br/><br/>
     *  The eBay sites that support VAT (and their corresponding Site IDs) can be found in the <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
     *
     * @return string
     */
    public function getVATSite()
    {
        return $this->vATSite;
    }

    /**
     * Sets a new vATSite
     *
     * This string value is the Site ID value of the eBay Marketplace where the VAT is applicable and where the seller is registered as a Business Seller.
     *  <br/><br/>
     *  The eBay sites that support VAT (and their corresponding Site IDs) can be found in the <a href="https://developer.ebay.com/DevZone/guides/ebayfeatures/Development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
     *
     * @param string $vATSite
     * @return self
     */
    public function setVATSite($vATSite)
    {
        $this->vATSite = $vATSite;
        return $this;
    }

    /**
     * Gets as vATID
     *
     * This is the unique VAT identifier associated with the Business Seller's account. This field will only be returned to Business Sellers who own the specified listing.
     *  <br/><br/>
     *  Non-Business Sellers will not have a VAT identifier associated with their account, so this field will never be returned for those users.
     *
     * @return string
     */
    public function getVATID()
    {
        return $this->vATID;
    }

    /**
     * Sets a new vATID
     *
     * This is the unique VAT identifier associated with the Business Seller's account. This field will only be returned to Business Sellers who own the specified listing.
     *  <br/><br/>
     *  Non-Business Sellers will not have a VAT identifier associated with their account, so this field will never be returned for those users.
     *
     * @param string $vATID
     * @return self
     */
    public function setVATID($vATID)
    {
        $this->vATID = $vATID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBusinessSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BusinessSeller", $value);
        }
        $value = $this->getRestrictedToBusiness();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RestrictedToBusiness", $value);
        }
        $value = $this->getVATPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATPercent", $value);
        }
        $value = $this->getVATSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATSite", $value);
        }
        $value = $this->getVATID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BusinessSeller');
        if (null !== $value) {
            $this->setBusinessSeller(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestrictedToBusiness');
        if (null !== $value) {
            $this->setRestrictedToBusiness(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATPercent');
        if (null !== $value) {
            $this->setVATPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATSite');
        if (null !== $value) {
            $this->setVATSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATID');
        if (null !== $value) {
            $this->setVATID($value);
        }
    }
}
