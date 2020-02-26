<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ReviseSellingManagerTemplateRequestType
 *
 * Revises a Selling Manager template.
 *  This call is subject to change without notice; the
 *  deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: ReviseSellingManagerTemplateRequestType
 */
class ReviseSellingManagerTemplateRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the Selling Manager template. You can obtain a
     *  <b>SaleTemplateID</b> value by calling <b>GetSellingManagerInventory</b>.
     *
     * @var int $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * Reserved for future use.
     *
     * @var int $productID
     */
    private $productID = null;

    /**
     * The name of the Selling Manager template.
     *
     * @var string $saleTemplateName
     */
    private $saleTemplateName = null;

    /**
     * This container is used to modify the Selling Manager template. In the <b>Item.ItemID</b> field, you specify the same value as the
     *  one specified in <b>SaleTemplateID</b>.
     *  Other child elements hold the values for properties that are being changed.
     *  Set values in the Item object only for those properties that are
     *  changing. Use <b>DeletedField</b> to remove a property.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * Specifies the name of a field to remove from a template.
     *  See the eBay Web Services guide for rules on removing values when revising items.
     *  Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences).
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:
     *  <br><br>
     *  Item.ApplicationData<br>
     *  Item.AttributeSetArray<br>
     *  Item.ConditionID<br>
     *  Item.ItemSpecifics<br>
     *  Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br>
     *  Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br>
     *  Item.ListingDesigner.LayoutID<br>
     *  Item.ListingDesigner.ThemeID<br>
     *  Item.ListingEnhancement[Value]<br>
     *  Item.PayPalEmailAddress<br>
     *  Item.PictureDetails.GalleryURL<br>
     *  Item.PictureDetails.PictureURL<br>
     *  Item.PostalCode<br>
     *  Item.ProductListingDetails<br>
     *  item.ShippingDetails.PaymentInstructions<br>
     *  item.SKU<br>
     *  Item.SubTitle<br><br>
     *  These values are case-sensitive. Use values that match the case of the schema element names
     *  (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL).
     *  However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed).
     *  <br><br>
     *  Depending on how you have configured your pictures, you cannot necessarily delete
     *  both GalleryURL and PictureURL from an existing listing.
     *  If GalleryType was already set for the item you are revising, you cannot remove it.
     *  This means you still need to include either a first picture
     *  or a gallery URL in your revised listing.
     *
     * @var string[] $deletedField
     */
    private $deletedField = [
        
    ];

    /**
     * Use this field to verify the template instead of revising it.
     *
     * @var bool $verifyOnly
     */
    private $verifyOnly = null;

    /**
     * Gets as saleTemplateID
     *
     * The unique identifier of the Selling Manager template. You can obtain a
     *  <b>SaleTemplateID</b> value by calling <b>GetSellingManagerInventory</b>.
     *
     * @return int
     */
    public function getSaleTemplateID()
    {
        return $this->saleTemplateID;
    }

    /**
     * Sets a new saleTemplateID
     *
     * The unique identifier of the Selling Manager template. You can obtain a
     *  <b>SaleTemplateID</b> value by calling <b>GetSellingManagerInventory</b>.
     *
     * @param int $saleTemplateID
     * @return self
     */
    public function setSaleTemplateID($saleTemplateID)
    {
        $this->saleTemplateID = $saleTemplateID;
        return $this;
    }

    /**
     * Gets as productID
     *
     * Reserved for future use.
     *
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * Reserved for future use.
     *
     * @param int $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as saleTemplateName
     *
     * The name of the Selling Manager template.
     *
     * @return string
     */
    public function getSaleTemplateName()
    {
        return $this->saleTemplateName;
    }

    /**
     * Sets a new saleTemplateName
     *
     * The name of the Selling Manager template.
     *
     * @param string $saleTemplateName
     * @return self
     */
    public function setSaleTemplateName($saleTemplateName)
    {
        $this->saleTemplateName = $saleTemplateName;
        return $this;
    }

    /**
     * Gets as item
     *
     * This container is used to modify the Selling Manager template. In the <b>Item.ItemID</b> field, you specify the same value as the
     *  one specified in <b>SaleTemplateID</b>.
     *  Other child elements hold the values for properties that are being changed.
     *  Set values in the Item object only for those properties that are
     *  changing. Use <b>DeletedField</b> to remove a property.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * This container is used to modify the Selling Manager template. In the <b>Item.ItemID</b> field, you specify the same value as the
     *  one specified in <b>SaleTemplateID</b>.
     *  Other child elements hold the values for properties that are being changed.
     *  Set values in the Item object only for those properties that are
     *  changing. Use <b>DeletedField</b> to remove a property.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as deletedField
     *
     * Specifies the name of a field to remove from a template.
     *  See the eBay Web Services guide for rules on removing values when revising items.
     *  Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences).
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:
     *  <br><br>
     *  Item.ApplicationData<br>
     *  Item.AttributeSetArray<br>
     *  Item.ConditionID<br>
     *  Item.ItemSpecifics<br>
     *  Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br>
     *  Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br>
     *  Item.ListingDesigner.LayoutID<br>
     *  Item.ListingDesigner.ThemeID<br>
     *  Item.ListingEnhancement[Value]<br>
     *  Item.PayPalEmailAddress<br>
     *  Item.PictureDetails.GalleryURL<br>
     *  Item.PictureDetails.PictureURL<br>
     *  Item.PostalCode<br>
     *  Item.ProductListingDetails<br>
     *  item.ShippingDetails.PaymentInstructions<br>
     *  item.SKU<br>
     *  Item.SubTitle<br><br>
     *  These values are case-sensitive. Use values that match the case of the schema element names
     *  (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL).
     *  However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed).
     *  <br><br>
     *  Depending on how you have configured your pictures, you cannot necessarily delete
     *  both GalleryURL and PictureURL from an existing listing.
     *  If GalleryType was already set for the item you are revising, you cannot remove it.
     *  This means you still need to include either a first picture
     *  or a gallery URL in your revised listing.
     *
     * @return self
     * @param string $deletedField
     */
    public function addToDeletedField($deletedField)
    {
        $this->deletedField[] = $deletedField;
        return $this;
    }

    /**
     * isset deletedField
     *
     * Specifies the name of a field to remove from a template.
     *  See the eBay Web Services guide for rules on removing values when revising items.
     *  Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences).
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:
     *  <br><br>
     *  Item.ApplicationData<br>
     *  Item.AttributeSetArray<br>
     *  Item.ConditionID<br>
     *  Item.ItemSpecifics<br>
     *  Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br>
     *  Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br>
     *  Item.ListingDesigner.LayoutID<br>
     *  Item.ListingDesigner.ThemeID<br>
     *  Item.ListingEnhancement[Value]<br>
     *  Item.PayPalEmailAddress<br>
     *  Item.PictureDetails.GalleryURL<br>
     *  Item.PictureDetails.PictureURL<br>
     *  Item.PostalCode<br>
     *  Item.ProductListingDetails<br>
     *  item.ShippingDetails.PaymentInstructions<br>
     *  item.SKU<br>
     *  Item.SubTitle<br><br>
     *  These values are case-sensitive. Use values that match the case of the schema element names
     *  (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL).
     *  However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed).
     *  <br><br>
     *  Depending on how you have configured your pictures, you cannot necessarily delete
     *  both GalleryURL and PictureURL from an existing listing.
     *  If GalleryType was already set for the item you are revising, you cannot remove it.
     *  This means you still need to include either a first picture
     *  or a gallery URL in your revised listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedField($index)
    {
        return isset($this->deletedField[$index]);
    }

    /**
     * unset deletedField
     *
     * Specifies the name of a field to remove from a template.
     *  See the eBay Web Services guide for rules on removing values when revising items.
     *  Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences).
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:
     *  <br><br>
     *  Item.ApplicationData<br>
     *  Item.AttributeSetArray<br>
     *  Item.ConditionID<br>
     *  Item.ItemSpecifics<br>
     *  Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br>
     *  Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br>
     *  Item.ListingDesigner.LayoutID<br>
     *  Item.ListingDesigner.ThemeID<br>
     *  Item.ListingEnhancement[Value]<br>
     *  Item.PayPalEmailAddress<br>
     *  Item.PictureDetails.GalleryURL<br>
     *  Item.PictureDetails.PictureURL<br>
     *  Item.PostalCode<br>
     *  Item.ProductListingDetails<br>
     *  item.ShippingDetails.PaymentInstructions<br>
     *  item.SKU<br>
     *  Item.SubTitle<br><br>
     *  These values are case-sensitive. Use values that match the case of the schema element names
     *  (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL).
     *  However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed).
     *  <br><br>
     *  Depending on how you have configured your pictures, you cannot necessarily delete
     *  both GalleryURL and PictureURL from an existing listing.
     *  If GalleryType was already set for the item you are revising, you cannot remove it.
     *  This means you still need to include either a first picture
     *  or a gallery URL in your revised listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedField($index)
    {
        unset($this->deletedField[$index]);
    }

    /**
     * Gets as deletedField
     *
     * Specifies the name of a field to remove from a template.
     *  See the eBay Web Services guide for rules on removing values when revising items.
     *  Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences).
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:
     *  <br><br>
     *  Item.ApplicationData<br>
     *  Item.AttributeSetArray<br>
     *  Item.ConditionID<br>
     *  Item.ItemSpecifics<br>
     *  Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br>
     *  Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br>
     *  Item.ListingDesigner.LayoutID<br>
     *  Item.ListingDesigner.ThemeID<br>
     *  Item.ListingEnhancement[Value]<br>
     *  Item.PayPalEmailAddress<br>
     *  Item.PictureDetails.GalleryURL<br>
     *  Item.PictureDetails.PictureURL<br>
     *  Item.PostalCode<br>
     *  Item.ProductListingDetails<br>
     *  item.ShippingDetails.PaymentInstructions<br>
     *  item.SKU<br>
     *  Item.SubTitle<br><br>
     *  These values are case-sensitive. Use values that match the case of the schema element names
     *  (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL).
     *  However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed).
     *  <br><br>
     *  Depending on how you have configured your pictures, you cannot necessarily delete
     *  both GalleryURL and PictureURL from an existing listing.
     *  If GalleryType was already set for the item you are revising, you cannot remove it.
     *  This means you still need to include either a first picture
     *  or a gallery URL in your revised listing.
     *
     * @return string[]
     */
    public function getDeletedField()
    {
        return $this->deletedField;
    }

    /**
     * Sets a new deletedField
     *
     * Specifies the name of a field to remove from a template.
     *  See the eBay Web Services guide for rules on removing values when revising items.
     *  Also see the relevant field descriptions to determine when to use DeletedField (and potential consequences).
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:
     *  <br><br>
     *  Item.ApplicationData<br>
     *  Item.AttributeSetArray<br>
     *  Item.ConditionID<br>
     *  Item.ItemSpecifics<br>
     *  Item.ListingCheckoutRedirectPreference.ProStoresStoreName<br>
     *  Item.ListingCheckoutRedirectPreference.SellerThirdPartyUsername<br>
     *  Item.ListingDesigner.LayoutID<br>
     *  Item.ListingDesigner.ThemeID<br>
     *  Item.ListingEnhancement[Value]<br>
     *  Item.PayPalEmailAddress<br>
     *  Item.PictureDetails.GalleryURL<br>
     *  Item.PictureDetails.PictureURL<br>
     *  Item.PostalCode<br>
     *  Item.ProductListingDetails<br>
     *  item.ShippingDetails.PaymentInstructions<br>
     *  item.SKU<br>
     *  Item.SubTitle<br><br>
     *  These values are case-sensitive. Use values that match the case of the schema element names
     *  (Item.PictureDetails.GalleryURL) or make the initial letter of each field name lowercase (item.pictureDetails.galleryURL).
     *  However, do not change the case of letters in the middle of a field name (e.g., item.picturedetails.galleryUrl is not allowed).
     *  <br><br>
     *  Depending on how you have configured your pictures, you cannot necessarily delete
     *  both GalleryURL and PictureURL from an existing listing.
     *  If GalleryType was already set for the item you are revising, you cannot remove it.
     *  This means you still need to include either a first picture
     *  or a gallery URL in your revised listing.
     *
     * @param string[] $deletedField
     * @return self
     */
    public function setDeletedField(array $deletedField)
    {
        $this->deletedField = $deletedField;
        return $this;
    }

    /**
     * Gets as verifyOnly
     *
     * Use this field to verify the template instead of revising it.
     *
     * @return bool
     */
    public function getVerifyOnly()
    {
        return $this->verifyOnly;
    }

    /**
     * Sets a new verifyOnly
     *
     * Use this field to verify the template instead of revising it.
     *
     * @param bool $verifyOnly
     * @return self
     */
    public function setVerifyOnly($verifyOnly)
    {
        $this->verifyOnly = $verifyOnly;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getSaleTemplateName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateName", $value);
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getDeletedField();
        if (null !== $value && !empty($this->getDeletedField())) {
            $writer->write(array_map(function ($v) {
                return ["DeletedField" => $v];
            }, $value));
        }
        $value = $this->getVerifyOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VerifyOnly", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID');
        if (null !== $value) {
            $this->setSaleTemplateID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateName');
        if (null !== $value) {
            $this->setSaleTemplateName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedField', true);
        if (null !== $value && !empty($value)) {
            $this->setDeletedField($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyOnly');
        if (null !== $value) {
            $this->setVerifyOnly($value);
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
