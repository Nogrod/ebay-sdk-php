<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseFixedPriceItemRequestType
 *
 * Enables a seller to revise a fixed-price listing on a specified eBay site. To revise an active listing, the seller specifies the <b>ItemID</b> value for the listing. The seller makes one or multiple changes to the listing through the <b>Item</b> container, and the seller can also use one or more <b>DeletedField</b> tags to remove an optional field/setting from the listing.
 * XSD Type: ReviseFixedPriceItemRequestType
 */
class ReviseFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * The <b>Item</b> container is used to make changes to the active listing. The seller must pass in the <b>ItemID</b> value for the listing that is being revised. For anything else that the seller wishes to change, such as quantity or price, the seller should include this field in the call request and give it a new value.
     *  <br/><br/>
     *  If the seller wants to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * Specifies the name of a field to delete from a listing. The request can
     *  contain zero, one, or many instances of <b>DeletedField</b> (one for each field
     *  to be deleted). See the relevant field descriptions to determine when to
     *  use <b>DeletedField</b> (and potential consequences).
     *  <br><br>
     *  You cannot delete required fields from a listing.
     *  <br><br>
     *  Some fields are optional when you first list an item (e.g.,
     *  <b>SecondaryCategory</b>), but once they are set they cannot be deleted when you
     *  revise an item. Some optional fields cannot be deleted if the item has
     *  bids and/or ends within 12 hours. Some optional fields cannot be deleted
     *  if other fields depend on them.
     *  <br><br>
     *  Some data (such as <b>Variation</b> nodes within the <b>Variations</b> container) can't be deleted by
     *  using <b>DeletedField</b>. See the relevant field descriptions for how to delete
     *  such data.
     *  <br><br>
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.GalleryURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.galleryUrl</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
     *
     * @var string[] $deletedField
     */
    private $deletedField = [

    ];

    /**
     * Gets as item
     *
     * The <b>Item</b> container is used to make changes to the active listing. The seller must pass in the <b>ItemID</b> value for the listing that is being revised. For anything else that the seller wishes to change, such as quantity or price, the seller should include this field in the call request and give it a new value.
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
     * The <b>Item</b> container is used to make changes to the active listing. The seller must pass in the <b>ItemID</b> value for the listing that is being revised. For anything else that the seller wishes to change, such as quantity or price, the seller should include this field in the call request and give it a new value.
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
     * Specifies the name of a field to delete from a listing. The request can
     *  contain zero, one, or many instances of <b>DeletedField</b> (one for each field
     *  to be deleted). See the relevant field descriptions to determine when to
     *  use <b>DeletedField</b> (and potential consequences).
     *  <br><br>
     *  You cannot delete required fields from a listing.
     *  <br><br>
     *  Some fields are optional when you first list an item (e.g.,
     *  <b>SecondaryCategory</b>), but once they are set they cannot be deleted when you
     *  revise an item. Some optional fields cannot be deleted if the item has
     *  bids and/or ends within 12 hours. Some optional fields cannot be deleted
     *  if other fields depend on them.
     *  <br><br>
     *  Some data (such as <b>Variation</b> nodes within the <b>Variations</b> container) can't be deleted by
     *  using <b>DeletedField</b>. See the relevant field descriptions for how to delete
     *  such data.
     *  <br><br>
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.GalleryURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.galleryUrl</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
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
     * Specifies the name of a field to delete from a listing. The request can
     *  contain zero, one, or many instances of <b>DeletedField</b> (one for each field
     *  to be deleted). See the relevant field descriptions to determine when to
     *  use <b>DeletedField</b> (and potential consequences).
     *  <br><br>
     *  You cannot delete required fields from a listing.
     *  <br><br>
     *  Some fields are optional when you first list an item (e.g.,
     *  <b>SecondaryCategory</b>), but once they are set they cannot be deleted when you
     *  revise an item. Some optional fields cannot be deleted if the item has
     *  bids and/or ends within 12 hours. Some optional fields cannot be deleted
     *  if other fields depend on them.
     *  <br><br>
     *  Some data (such as <b>Variation</b> nodes within the <b>Variations</b> container) can't be deleted by
     *  using <b>DeletedField</b>. See the relevant field descriptions for how to delete
     *  such data.
     *  <br><br>
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.GalleryURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.galleryUrl</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
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
     * Specifies the name of a field to delete from a listing. The request can
     *  contain zero, one, or many instances of <b>DeletedField</b> (one for each field
     *  to be deleted). See the relevant field descriptions to determine when to
     *  use <b>DeletedField</b> (and potential consequences).
     *  <br><br>
     *  You cannot delete required fields from a listing.
     *  <br><br>
     *  Some fields are optional when you first list an item (e.g.,
     *  <b>SecondaryCategory</b>), but once they are set they cannot be deleted when you
     *  revise an item. Some optional fields cannot be deleted if the item has
     *  bids and/or ends within 12 hours. Some optional fields cannot be deleted
     *  if other fields depend on them.
     *  <br><br>
     *  Some data (such as <b>Variation</b> nodes within the <b>Variations</b> container) can't be deleted by
     *  using <b>DeletedField</b>. See the relevant field descriptions for how to delete
     *  such data.
     *  <br><br>
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.GalleryURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.galleryUrl</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
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
     * Specifies the name of a field to delete from a listing. The request can
     *  contain zero, one, or many instances of <b>DeletedField</b> (one for each field
     *  to be deleted). See the relevant field descriptions to determine when to
     *  use <b>DeletedField</b> (and potential consequences).
     *  <br><br>
     *  You cannot delete required fields from a listing.
     *  <br><br>
     *  Some fields are optional when you first list an item (e.g.,
     *  <b>SecondaryCategory</b>), but once they are set they cannot be deleted when you
     *  revise an item. Some optional fields cannot be deleted if the item has
     *  bids and/or ends within 12 hours. Some optional fields cannot be deleted
     *  if other fields depend on them.
     *  <br><br>
     *  Some data (such as <b>Variation</b> nodes within the <b>Variations</b> container) can't be deleted by
     *  using <b>DeletedField</b>. See the relevant field descriptions for how to delete
     *  such data.
     *  <br><br>
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.GalleryURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.galleryUrl</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
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
     * Specifies the name of a field to delete from a listing. The request can
     *  contain zero, one, or many instances of <b>DeletedField</b> (one for each field
     *  to be deleted). See the relevant field descriptions to determine when to
     *  use <b>DeletedField</b> (and potential consequences).
     *  <br><br>
     *  You cannot delete required fields from a listing.
     *  <br><br>
     *  Some fields are optional when you first list an item (e.g.,
     *  <b>SecondaryCategory</b>), but once they are set they cannot be deleted when you
     *  revise an item. Some optional fields cannot be deleted if the item has
     *  bids and/or ends within 12 hours. Some optional fields cannot be deleted
     *  if other fields depend on them.
     *  <br><br>
     *  Some data (such as <b>Variation</b> nodes within the <b>Variations</b> container) can't be deleted by
     *  using <b>DeletedField</b>. See the relevant field descriptions for how to delete
     *  such data.
     *  <br><br>
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.GalleryURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.galleryURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.galleryUrl</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
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
        if (null !== $value && !empty($this->getDeletedField())) {
            $writer->write(array_map(function ($v) {
                return ["DeletedField" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedField', true);
        if (null !== $value && !empty($value)) {
            $this->setDeletedField($value);
        }
    }
}
