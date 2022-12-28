<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemBestOffersType
 *
 * All Best Offers for the item according to the filter or Best Offer
 *  ID (or both) used in the input.
 *  For the notification client usage, this response includes a
 *  single Best Offer.
 * XSD Type: ItemBestOffersType
 */
class ItemBestOffersType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates whether the eBay user is in the Buyer or
     *  Seller role for the corresponding Best Offer.
     *
     * @var string $role
     */
    private $role = null;

    /**
     * All Best Offers for the item according to the filter or
     *  Best Offer ID (or both) used in the input. The buyer and
     *  seller messages are returned only if the detail level is
     *  defined. Includes the buyer and seller message only if
     *  detail level <code>ReturnAll</code> is used.
     *  Only returned if a Best Offer has been made.
     *
     * @var \Nogrod\eBaySDK\MerchantData\BestOfferType[] $bestOfferArray
     */
    private $bestOfferArray = null;

    /**
     * The item for which Best Offers are being returned.
     *  Only returned if a Best Offer has been made.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemType $item
     */
    private $item = null;

    /**
     * Gets as role
     *
     * Indicates whether the eBay user is in the Buyer or
     *  Seller role for the corresponding Best Offer.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * Indicates whether the eBay user is in the Buyer or
     *  Seller role for the corresponding Best Offer.
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as bestOffer
     *
     * All Best Offers for the item according to the filter or
     *  Best Offer ID (or both) used in the input. The buyer and
     *  seller messages are returned only if the detail level is
     *  defined. Includes the buyer and seller message only if
     *  detail level <code>ReturnAll</code> is used.
     *  Only returned if a Best Offer has been made.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferType $bestOffer
     */
    public function addToBestOfferArray(\Nogrod\eBaySDK\MerchantData\BestOfferType $bestOffer)
    {
        $this->bestOfferArray[] = $bestOffer;
        return $this;
    }

    /**
     * isset bestOfferArray
     *
     * All Best Offers for the item according to the filter or
     *  Best Offer ID (or both) used in the input. The buyer and
     *  seller messages are returned only if the detail level is
     *  defined. Includes the buyer and seller message only if
     *  detail level <code>ReturnAll</code> is used.
     *  Only returned if a Best Offer has been made.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestOfferArray($index)
    {
        return isset($this->bestOfferArray[$index]);
    }

    /**
     * unset bestOfferArray
     *
     * All Best Offers for the item according to the filter or
     *  Best Offer ID (or both) used in the input. The buyer and
     *  seller messages are returned only if the detail level is
     *  defined. Includes the buyer and seller message only if
     *  detail level <code>ReturnAll</code> is used.
     *  Only returned if a Best Offer has been made.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestOfferArray($index)
    {
        unset($this->bestOfferArray[$index]);
    }

    /**
     * Gets as bestOfferArray
     *
     * All Best Offers for the item according to the filter or
     *  Best Offer ID (or both) used in the input. The buyer and
     *  seller messages are returned only if the detail level is
     *  defined. Includes the buyer and seller message only if
     *  detail level <code>ReturnAll</code> is used.
     *  Only returned if a Best Offer has been made.
     *
     * @return \Nogrod\eBaySDK\MerchantData\BestOfferType[]
     */
    public function getBestOfferArray()
    {
        return $this->bestOfferArray;
    }

    /**
     * Sets a new bestOfferArray
     *
     * All Best Offers for the item according to the filter or
     *  Best Offer ID (or both) used in the input. The buyer and
     *  seller messages are returned only if the detail level is
     *  defined. Includes the buyer and seller message only if
     *  detail level <code>ReturnAll</code> is used.
     *  Only returned if a Best Offer has been made.
     *
     * @param \Nogrod\eBaySDK\MerchantData\BestOfferType[] $bestOfferArray
     * @return self
     */
    public function setBestOfferArray(array $bestOfferArray)
    {
        $this->bestOfferArray = $bestOfferArray;
        return $this;
    }

    /**
     * Gets as item
     *
     * The item for which Best Offers are being returned.
     *  Only returned if a Best Offer has been made.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * The item for which Best Offers are being returned.
     *  Only returned if a Best Offer has been made.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\MerchantData\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRole();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Role", $value);
        }
        $value = $this->getBestOfferArray();
        if (null !== $value && !empty($this->getBestOfferArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestOfferArray", array_map(function ($v) {
                return ["BestOffer" => $v];
            }, $value));
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Role');
        if (null !== $value) {
            $this->setRole($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestOfferArray', true);
        if (null !== $value && !empty($value)) {
            $this->setBestOfferArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\BestOfferType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\MerchantData\ItemType::fromKeyValue($value));
        }
    }
}
