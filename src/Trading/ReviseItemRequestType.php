<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseItemRequestType
 *
 * Enables a seller to revise a listing on a specified eBay site. To revise an active listing, the seller specifies the <b>ItemID</b> value for the listing. The seller makes one or multiple changes to the listing through the <b>Item</b> container, and the seller can also use one or more <b>DeletedField</b> tags to remove an optional field/setting from the listing.
 *  <br>
 *  <br>
 *  After a multiple-quantity, fixed-price listing has one or more sales, or less than 12 hours remain before the listing is scheduled to end, you can not edit the values in the Listing Title, Primary Category, Secondary Category, Listing Duration, and Listing Type fields for that listing. The same applies to an auction listing that has at least one bid.
 *  <br>
 *  <br>
 *  To revise a multiple-variation, fixed-price listing, the <b>ReviseFixedPriceItem</b> call should be used instead, as the <b>ReviseItem</b> call does not support variation-level edits.
 * XSD Type: ReviseItemRequestType
 */
class ReviseItemRequestType extends AbstractRequestType
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
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.PictureURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.pictureURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.pictureURL</b> is not allowed.
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
     * When the <b>VerifyOnly</b> is included and set as <code>true</code>, the active listing is not actually revised, but the same response is returned and the seller gets to see the expected fees based on the changes made, and can also view any listing recommendations if the <b>Item.IncludeRecommedations</b> boolean field is included and set to <code>true</code>.
     *
     * @var bool $verifyOnly
     */
    private $verifyOnly = null;

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
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.PictureURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.pictureURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.pictureURL</b> is not allowed.
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
        if (!is_array($this->deletedField)) {
            throw new \LogicException('deletedField is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.PictureURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.pictureURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.pictureURL</b> is not allowed.
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
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.PictureURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.pictureURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.pictureURL</b> is not allowed.
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
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.PictureURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.pictureURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.pictureURL</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
     *
     * @return iterable<string>
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
     *  Use values that match the case of the
     *  schema element names (<b>Item.PictureDetails.PictureURL</b>) or make the initial
     *  letter of each field name lowercase (<b>item.pictureDetails.pictureURL</b>).
     *  However, do not change the case of letters in the middle of a field name.
     *  For example, <b>item.picturedetails.pictureURL</b> is not allowed.
     *  <br><br>
     *  To delete a listing enhancement like <b>BoldTitle</b>, specify the value you are
     *  deleting in square brackets ("[ ]"); for example,
     *  <b>Item.ListingEnhancement[BoldTitle]</b>.
     *
     * @param iterable<string> $deletedField
     * @return self
     */
    public function setDeletedField(iterable $deletedField)
    {
        $this->deletedField = $deletedField;
        return $this;
    }

    /**
     * Gets as verifyOnly
     *
     * When the <b>VerifyOnly</b> is included and set as <code>true</code>, the active listing is not actually revised, but the same response is returned and the seller gets to see the expected fees based on the changes made, and can also view any listing recommendations if the <b>Item.IncludeRecommedations</b> boolean field is included and set to <code>true</code>.
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
     * When the <b>VerifyOnly</b> is included and set as <code>true</code>, the active listing is not actually revised, but the same response is returned and the seller gets to see the expected fees based on the changes made, and can also view any listing recommendations if the <b>Item.IncludeRecommedations</b> boolean field is included and set to <code>true</code>.
     *
     * @param bool $verifyOnly
     * @return self
     */
    public function setVerifyOnly($verifyOnly)
    {
        $this->verifyOnly = $verifyOnly;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->item;
        if (null !== $value) {
            $writer->startElementNs(null, 'Item', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->deletedField;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'DeletedField', null, (string) $v);
            }
        }
        $value = $this->verifyOnly;
        if (null !== $value) {
            $writer->writeElementNs(null, 'VerifyOnly', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ReviseItemRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->deletedField = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Item':
                    $this->item = \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader);
                    return true;
                case 'DeletedField':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deletedField[] = $value;
                    }
                    return true;
                case 'VerifyOnly':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->verifyOnly = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['Item'] = $this->item;
        $data['DeletedField'] = Func::jsonList($this->deletedField);
        $data['VerifyOnly'] = $this->verifyOnly;
        return $data;
    }
}
