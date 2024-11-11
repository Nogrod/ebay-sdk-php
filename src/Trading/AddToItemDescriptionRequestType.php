<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddToItemDescriptionRequestType
 *
 * The base request of the <b>AddToItemDescription</b> call, which is used to add additional text to an active listing's item description. Upon a successful call, the text supplied in this call will be inserted into the active listing, with a horizontal rule separating the original item description and the additional text that was added with this call.
 * XSD Type: AddToItemDescriptionRequestType
 */
class AddToItemDescriptionRequestType extends AbstractRequestType
{
    /**
     * This field is used to identify the active listing that will be updated with additional text in the item description field. The Item ID is a unique identifier for a listing.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is used to specify the text that will be appended to the end of the active listing's item description.
     *  The text provided in this field must abide by the same rules/restrictions
     *  applicable to the original item description supplied at listing time. For more information on these rules and restrictions, see the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/ebay/types/ItemType.html#Description">Description field of ItemType</a>.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as itemID
     *
     * This field is used to identify the active listing that will be updated with additional text in the item description field. The Item ID is a unique identifier for a listing.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * This field is used to identify the active listing that will be updated with additional text in the item description field. The Item ID is a unique identifier for a listing.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as description
     *
     * This field is used to specify the text that will be appended to the end of the active listing's item description.
     *  The text provided in this field must abide by the same rules/restrictions
     *  applicable to the original item description supplied at listing time. For more information on these rules and restrictions, see the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/ebay/types/ItemType.html#Description">Description field of ItemType</a>.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * This field is used to specify the text that will be appended to the end of the active listing's item description.
     *  The text provided in this field must abide by the same rules/restrictions
     *  applicable to the original item description supplied at listing time. For more information on these rules and restrictions, see the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/ebay/types/ItemType.html#Description">Description field of ItemType</a>.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
    }
}
