<?php

namespace Nogrod\eBaySDK\Trading;

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
     * @var \Nogrod\eBaySDK\Trading\BestOfferType[] $bestOfferArray
     */
    private $bestOfferArray = null;

    /**
     * The item for which Best Offers are being returned.
     *  Only returned if a Best Offer has been made.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
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
     * @param \Nogrod\eBaySDK\Trading\BestOfferType $bestOffer
     */
    public function addToBestOfferArray(\Nogrod\eBaySDK\Trading\BestOfferType $bestOffer)
    {
        if (!is_array($this->bestOfferArray)) {
            throw new \LogicException('bestOfferArray is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\BestOfferType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\BestOfferType> $bestOfferArray
     * @return self
     */
    public function setBestOfferArray(iterable $bestOfferArray)
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
     * @return \Nogrod\eBaySDK\Trading\ItemType
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
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
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
        $value = $this->role;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Role', null, (string) $value);
        }
        $value = $this->bestOfferArray;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'BestOfferArray', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'BestOffer', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->item;
        if (null !== $value) {
            $writer->startElementNs(null, 'Item', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemBestOffersType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->bestOfferArray = [];
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
                case 'Role':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->role = $value;
                    }
                    return true;
                case 'BestOfferArray':
                    $this->bestOfferArray = Func::readList($reader, 'BestOffer', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\BestOfferType::xmlRead($reader));
                    return true;
                case 'Item':
                    $this->item = \Nogrod\eBaySDK\Trading\ItemType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
