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
        if (!is_array($this->itemRatingDetails)) {
            throw new \LogicException('itemRatingDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ItemRatingDetailsType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\ItemRatingDetailsType> $itemRatingDetails
     * @return self
     */
    public function setItemRatingDetails(iterable $itemRatingDetails)
    {
        $this->itemRatingDetails = $itemRatingDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->itemRatingDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ItemRatingDetails', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemRatingDetailArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->itemRatingDetails = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ItemRatingDetails':
                    $this->itemRatingDetails[] = \Nogrod\eBaySDK\Trading\ItemRatingDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
