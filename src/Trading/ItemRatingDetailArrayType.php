<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemRatingDetailArrayType
 *
 * Type used by the <b>SellerItemRatingDetailArray</b> container in the <b>LeaveFeedback</b> request payload. This container is used by an eBay buyer to leave one or more Detailed Seller Ratings for their order partner concerning an order line item.
 * XSD Type: ItemRatingDetailArrayType
 */
class ItemRatingDetailArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described, Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas.
     *  <br><br>
     *  Applicable to sites that support the Detailed Seller Ratings feature.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemRatingDetailsType[] $itemRatingDetails
     */
    private $itemRatingDetails = [

    ];

    /**
     * Adds as itemRatingDetails
     *
     * The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described, Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas.
     *  <br><br>
     *  Applicable to sites that support the Detailed Seller Ratings feature.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemRatingDetailsType $itemRatingDetails
     */
    public function addToItemRatingDetails(\Nogrod\eBaySDK\Trading\ItemRatingDetailsType $itemRatingDetails)
    {
        $this->itemRatingDetails[] = $itemRatingDetails;
        return $this;
    }

    /**
     * isset itemRatingDetails
     *
     * The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described, Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas.
     *  <br><br>
     *  Applicable to sites that support the Detailed Seller Ratings feature.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemRatingDetails($index)
    {
        return isset($this->itemRatingDetails[$index]);
    }

    /**
     * unset itemRatingDetails
     *
     * The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described, Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas.
     *  <br><br>
     *  Applicable to sites that support the Detailed Seller Ratings feature.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemRatingDetails($index)
    {
        unset($this->itemRatingDetails[$index]);
    }

    /**
     * Gets as itemRatingDetails
     *
     * The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described, Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas.
     *  <br><br>
     *  Applicable to sites that support the Detailed Seller Ratings feature.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemRatingDetailsType[]
     */
    public function getItemRatingDetails()
    {
        return $this->itemRatingDetails;
    }

    /**
     * Sets a new itemRatingDetails
     *
     * The <b>ItemRatingDetails</b> container is used by an eBay buyer to leave a Detailed Seller Rating for their order partner concerning an order line item. Detailed Seller Ratings are left concerning Communication, Item as Described, Shipping and Handling Charges, and Shipping Time. The buyer gives the seller a rating between 1 to 5 (5 being the best) in these areas.
     *  <br><br>
     *  Applicable to sites that support the Detailed Seller Ratings feature.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemRatingDetailsType[] $itemRatingDetails
     * @return self
     */
    public function setItemRatingDetails(array $itemRatingDetails)
    {
        $this->itemRatingDetails = $itemRatingDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemRatingDetails();
        if (null !== $value && !empty($this->getItemRatingDetails())) {
            $writer->write(array_map(function ($v) {
                return ["ItemRatingDetails" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemRatingDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setItemRatingDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemRatingDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
