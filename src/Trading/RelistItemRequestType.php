<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RelistItemRequestType
 *
 * Enables a seller to relist a listing that has recently ended on a specified eBay site. A seller has to up to 90 days to relist an ended listing. When an item is relisted, it will receive a new <b>ItemID</b> value, but this item will remain on other users' Watch Lists after it is relisted. The seller has the opportunity to make changes to the listing through the <b>Item</b> container, and the seller can also use one or more <b>DeletedField</b> tags to remove an optional field/setting from the listing.
 * XSD Type: RelistItemRequestType
 */
class RelistItemRequestType extends AbstractRequestType
{
    /**
     * The <b>Item</b> container is used to configure the item that will be relisted. If the seller plans to relist the item with no changes, the only field under the <b>Item</b> container that is required is the <b>ItemID</b> field. In the <b>ItemID</b> field, the seller specifies the item that will be relisted. If the seller wishes to change anything else for the listing, the seller should include this field in the call request and give it a new value.
     *  <br/><br/>
     *  If the seller wants to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * Specifies the name of the field to delete from a listing.
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/relist-item.html" target="_blank">Relist Items</a> for rules on deleting values when relisting items.
     *  Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences).
     *  The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted).
     *  <br><br>
     *  Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.PictureURL), or the initial letter of each schema element name in the full field path must be lowercase (item.pictureDetails.pictureURL).
     *  Do not change the case of letters in the middle of a field name.
     *  For example, item.picturedetails.pictureURL is not allowed.<br><br>
     *  To delete a listing enhancement like 'BoldTitle', specify the value you are deleting;
     *  for example, Item.ListingEnhancement[BoldTitle].
     *
     * @var string[] $deletedField
     */
    private $deletedField = [

    ];

    /**
     * Gets as item
     *
     * The <b>Item</b> container is used to configure the item that will be relisted. If the seller plans to relist the item with no changes, the only field under the <b>Item</b> container that is required is the <b>ItemID</b> field. In the <b>ItemID</b> field, the seller specifies the item that will be relisted. If the seller wishes to change anything else for the listing, the seller should include this field in the call request and give it a new value.
     *  <br/><br/>
     *  If the seller wants to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
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
     * The <b>Item</b> container is used to configure the item that will be relisted. If the seller plans to relist the item with no changes, the only field under the <b>Item</b> container that is required is the <b>ItemID</b> field. In the <b>ItemID</b> field, the seller specifies the item that will be relisted. If the seller wishes to change anything else for the listing, the seller should include this field in the call request and give it a new value.
     *  <br/><br/>
     *  If the seller wants to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
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
     * Specifies the name of the field to delete from a listing.
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/relist-item.html" target="_blank">Relist Items</a> for rules on deleting values when relisting items.
     *  Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences).
     *  The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted).
     *  <br><br>
     *  Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.PictureURL), or the initial letter of each schema element name in the full field path must be lowercase (item.pictureDetails.pictureURL).
     *  Do not change the case of letters in the middle of a field name.
     *  For example, item.picturedetails.pictureURL is not allowed.<br><br>
     *  To delete a listing enhancement like 'BoldTitle', specify the value you are deleting;
     *  for example, Item.ListingEnhancement[BoldTitle].
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
     * Specifies the name of the field to delete from a listing.
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/relist-item.html" target="_blank">Relist Items</a> for rules on deleting values when relisting items.
     *  Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences).
     *  The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted).
     *  <br><br>
     *  Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.PictureURL), or the initial letter of each schema element name in the full field path must be lowercase (item.pictureDetails.pictureURL).
     *  Do not change the case of letters in the middle of a field name.
     *  For example, item.picturedetails.pictureURL is not allowed.<br><br>
     *  To delete a listing enhancement like 'BoldTitle', specify the value you are deleting;
     *  for example, Item.ListingEnhancement[BoldTitle].
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
     * Specifies the name of the field to delete from a listing.
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/relist-item.html" target="_blank">Relist Items</a> for rules on deleting values when relisting items.
     *  Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences).
     *  The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted).
     *  <br><br>
     *  Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.PictureURL), or the initial letter of each schema element name in the full field path must be lowercase (item.pictureDetails.pictureURL).
     *  Do not change the case of letters in the middle of a field name.
     *  For example, item.picturedetails.pictureURL is not allowed.<br><br>
     *  To delete a listing enhancement like 'BoldTitle', specify the value you are deleting;
     *  for example, Item.ListingEnhancement[BoldTitle].
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
     * Specifies the name of the field to delete from a listing.
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/relist-item.html" target="_blank">Relist Items</a> for rules on deleting values when relisting items.
     *  Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences).
     *  The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted).
     *  <br><br>
     *  Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.PictureURL), or the initial letter of each schema element name in the full field path must be lowercase (item.pictureDetails.pictureURL).
     *  Do not change the case of letters in the middle of a field name.
     *  For example, item.picturedetails.pictureURL is not allowed.<br><br>
     *  To delete a listing enhancement like 'BoldTitle', specify the value you are deleting;
     *  for example, Item.ListingEnhancement[BoldTitle].
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
     * Specifies the name of the field to delete from a listing.
     *  See <a href="https://developer.ebay.com/api-docs/user-guides/static/trading-user-guide/relist-item.html" target="_blank">Relist Items</a> for rules on deleting values when relisting items.
     *  Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences).
     *  The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted).
     *  <br><br>
     *  Case-sensitivity must be taken into account when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.PictureURL), or the initial letter of each schema element name in the full field path must be lowercase (item.pictureDetails.pictureURL).
     *  Do not change the case of letters in the middle of a field name.
     *  For example, item.picturedetails.pictureURL is not allowed.<br><br>
     *  To delete a listing enhancement like 'BoldTitle', specify the value you are deleting;
     *  for example, Item.ListingEnhancement[BoldTitle].
     *
     * @param string[] $deletedField
     * @return self
     */
    public function setDeletedField(array $deletedField)
    {
        $this->deletedField = $deletedField;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getDeletedField();
        if (null !== $value && [] !== $this->getDeletedField()) {
            $writer->write(array_map(function ($v) {return ["DeletedField" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\RelistItemRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedField', true);
        if (null !== $value) {
            $this->setDeletedField($value);
        }
    }
}
