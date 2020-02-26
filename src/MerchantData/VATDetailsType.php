<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing VATDetailsType
 *
 * This type is used to set/display details related to VAT (Value-Added Tax) and Business Seller features.
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
     * This field should be included in an Add/Revise/Relist call and set to <code>true</code> if the seller is registered on the selling site as a Business Seller. This field must be included and set to <code>true</code> if the <b>RestrictedToBusiness</b> field is also included and set to <code>true</code>. The <b>RestrictedToBusiness</b> field is used by German (Site ID 77), Austrian (Site ID 16), and Swiss (Site ID 193) sellers who wish to restrict sales of their item to other users registered as business users.
     *  <br><br>
     *  This field is returned in 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
     *
     * @var bool $businessSeller
     */
    private $businessSeller = null;

    /**
     * This field must be included in an Add/Revise/Relist call and set to <code>true</code> if a German (Site ID 77), Austrian (Site ID 16), or Swiss (Site ID 193) seller wishes to restrict sales of their item to other users registered on eBay as business users. If this field is set as <code>true</code>, the <b>BusinessSeller</b> field must also be included and set to <code>true</code>. This feature is not available on any other eBay marketplaces.
     *  <br><br>
     *  This field can be included and set to <code>true</code> only by Business Sellers registered on one of the three sites above, and only if the listing category supports Business-to-Business listings. The <b>GetCategories</b> call can be used by the seller (using one of the Site IDs above) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports Business-to-Business listings.
     *  <br><br>
     *  This field is returned in 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
     *
     * @var bool $restrictedToBusiness
     */
    private $restrictedToBusiness = null;

    /**
     * This container is used in an Add/Revise/Relist call to set the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing.
     *  <br/><br/>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate.
     *  <br/><br/>
     *  If VAT is charged on a listing, the seller can choose to print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price.
     *  <br/><br/>
     *  This field is returned in 'Get' calls only if the listing is subject to VAT.
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
     *  The eBay sites that support VAT (and their corresponding Site IDs) can be found in the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
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
     * This field should be included in an Add/Revise/Relist call and set to <code>true</code> if the seller is registered on the selling site as a Business Seller. This field must be included and set to <code>true</code> if the <b>RestrictedToBusiness</b> field is also included and set to <code>true</code>. The <b>RestrictedToBusiness</b> field is used by German (Site ID 77), Austrian (Site ID 16), and Swiss (Site ID 193) sellers who wish to restrict sales of their item to other users registered as business users.
     *  <br><br>
     *  This field is returned in 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
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
     * This field should be included in an Add/Revise/Relist call and set to <code>true</code> if the seller is registered on the selling site as a Business Seller. This field must be included and set to <code>true</code> if the <b>RestrictedToBusiness</b> field is also included and set to <code>true</code>. The <b>RestrictedToBusiness</b> field is used by German (Site ID 77), Austrian (Site ID 16), and Swiss (Site ID 193) sellers who wish to restrict sales of their item to other users registered as business users.
     *  <br><br>
     *  This field is returned in 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
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
     * This field must be included in an Add/Revise/Relist call and set to <code>true</code> if a German (Site ID 77), Austrian (Site ID 16), or Swiss (Site ID 193) seller wishes to restrict sales of their item to other users registered on eBay as business users. If this field is set as <code>true</code>, the <b>BusinessSeller</b> field must also be included and set to <code>true</code>. This feature is not available on any other eBay marketplaces.
     *  <br><br>
     *  This field can be included and set to <code>true</code> only by Business Sellers registered on one of the three sites above, and only if the listing category supports Business-to-Business listings. The <b>GetCategories</b> call can be used by the seller (using one of the Site IDs above) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports Business-to-Business listings.
     *  <br><br>
     *  This field is returned in 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
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
     * This field must be included in an Add/Revise/Relist call and set to <code>true</code> if a German (Site ID 77), Austrian (Site ID 16), or Swiss (Site ID 193) seller wishes to restrict sales of their item to other users registered on eBay as business users. If this field is set as <code>true</code>, the <b>BusinessSeller</b> field must also be included and set to <code>true</code>. This feature is not available on any other eBay marketplaces.
     *  <br><br>
     *  This field can be included and set to <code>true</code> only by Business Sellers registered on one of the three sites above, and only if the listing category supports Business-to-Business listings. The <b>GetCategories</b> call can be used by the seller (using one of the Site IDs above) to see which categories support Business-to-Business listings. A <b>B2BVATEnabled</b> boolean field will be returned as <code>true</code> if a listing category supports Business-to-Business listings.
     *  <br><br>
     *  This field is returned in 'Get' calls only if set on the listing, and the person making the call owns the listing. However, other Business Seller-related information will be returned to all users in 'Get' calls under the <b>SellerInfo</b> and <b>BusinessSellerDetails</b> containers.
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
     * This container is used in an Add/Revise/Relist call to set the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing.
     *  <br/><br/>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate.
     *  <br/><br/>
     *  If VAT is charged on a listing, the seller can choose to print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price.
     *  <br/><br/>
     *  This field is returned in 'Get' calls only if the listing is subject to VAT.
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
     * This container is used in an Add/Revise/Relist call to set the VAT (Value-added Tax) percentage rate that will be charged to buyers when an item is purchased from the listing.
     *  <br/><br/>
     *  VAT is not applicable to all countries, including the US. Allowed VAT percentage rates can vary by region/country, so sellers should be aware of the rates they are legally required/allowed to charge, and they are responsible for charging the correct VAT rate.
     *  <br/><br/>
     *  If VAT is charged on a listing, the seller can choose to print an invoice for the buyer that shows the item's net price, the VAT percentage rate, the VAT amount, and the total price.
     *  <br/><br/>
     *  This field is returned in 'Get' calls only if the listing is subject to VAT.
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
     *  The eBay sites that support VAT (and their corresponding Site IDs) can be found in the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
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
     *  The eBay sites that support VAT (and their corresponding Site IDs) can be found in the <a href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/IntlDiffs-B2BFields.html" target="_blank">Business Feature Field Differences</a> topic.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BusinessSeller');
        if (null !== $value) {
            $this->setBusinessSeller($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestrictedToBusiness');
        if (null !== $value) {
            $this->setRestrictedToBusiness($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATPercent');
        if (null !== $value) {
            $this->setVATPercent($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATSite');
        if (null !== $value) {
            $this->setVATSite($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATID');
        if (null !== $value) {
            $this->setVATID($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
