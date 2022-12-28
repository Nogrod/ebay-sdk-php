<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseStatusType
 *
 * Contains data indicating whether an item has been revised since the
 *  listing became active and, if so, which among a subset of properties
 *  have been changed by the revision.
 * XSD Type: ReviseStatusType
 */
class ReviseStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is returned as <code>true</code> if the original listing has been revised. This field is always returned with the <b>ReviseStatus</b> container.
     *
     * @var bool $itemRevised
     */
    private $itemRevised = null;

    /**
     * This field is returned as <code>true</code> if a Buy It Now price has been added to the auction listing. This field is only returned if the original auction listing did not have a Buy It Now price, but a revision to that original listing included adding a Buy It Now price.
     *
     * @var bool $buyItNowAdded
     */
    private $buyItNowAdded = null;

    /**
     * This field is returned as <code>true</code> if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing.
     *
     * @var bool $buyItNowLowered
     */
    private $buyItNowLowered = null;

    /**
     * This field is returned as <code>true</code> if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing.
     *
     * @var bool $reserveLowered
     */
    private $reserveLowered = null;

    /**
     * This field is returned as <code>true</code> if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing.
     *
     * @var bool $reserveRemoved
     */
    private $reserveRemoved = null;

    /**
     * Gets as itemRevised
     *
     * This field is returned as <code>true</code> if the original listing has been revised. This field is always returned with the <b>ReviseStatus</b> container.
     *
     * @return bool
     */
    public function getItemRevised()
    {
        return $this->itemRevised;
    }

    /**
     * Sets a new itemRevised
     *
     * This field is returned as <code>true</code> if the original listing has been revised. This field is always returned with the <b>ReviseStatus</b> container.
     *
     * @param bool $itemRevised
     * @return self
     */
    public function setItemRevised($itemRevised)
    {
        $this->itemRevised = $itemRevised;
        return $this;
    }

    /**
     * Gets as buyItNowAdded
     *
     * This field is returned as <code>true</code> if a Buy It Now price has been added to the auction listing. This field is only returned if the original auction listing did not have a Buy It Now price, but a revision to that original listing included adding a Buy It Now price.
     *
     * @return bool
     */
    public function getBuyItNowAdded()
    {
        return $this->buyItNowAdded;
    }

    /**
     * Sets a new buyItNowAdded
     *
     * This field is returned as <code>true</code> if a Buy It Now price has been added to the auction listing. This field is only returned if the original auction listing did not have a Buy It Now price, but a revision to that original listing included adding a Buy It Now price.
     *
     * @param bool $buyItNowAdded
     * @return self
     */
    public function setBuyItNowAdded($buyItNowAdded)
    {
        $this->buyItNowAdded = $buyItNowAdded;
        return $this;
    }

    /**
     * Gets as buyItNowLowered
     *
     * This field is returned as <code>true</code> if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing.
     *
     * @return bool
     */
    public function getBuyItNowLowered()
    {
        return $this->buyItNowLowered;
    }

    /**
     * Sets a new buyItNowLowered
     *
     * This field is returned as <code>true</code> if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Buy It Now price on the original auction listing was lowered as part of a revision to the original auction listing.
     *
     * @param bool $buyItNowLowered
     * @return self
     */
    public function setBuyItNowLowered($buyItNowLowered)
    {
        $this->buyItNowLowered = $buyItNowLowered;
        return $this;
    }

    /**
     * Gets as reserveLowered
     *
     * This field is returned as <code>true</code> if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing.
     *
     * @return bool
     */
    public function getReserveLowered()
    {
        return $this->reserveLowered;
    }

    /**
     * Sets a new reserveLowered
     *
     * This field is returned as <code>true</code> if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original auction listing was lowered as part of a revision to the original auction listing.
     *
     * @param bool $reserveLowered
     * @return self
     */
    public function setReserveLowered($reserveLowered)
    {
        $this->reserveLowered = $reserveLowered;
        return $this;
    }

    /**
     * Gets as reserveRemoved
     *
     * This field is returned as <code>true</code> if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing.
     *
     * @return bool
     */
    public function getReserveRemoved()
    {
        return $this->reserveRemoved;
    }

    /**
     * Sets a new reserveRemoved
     *
     * This field is returned as <code>true</code> if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing. This field is only returned if the Reserve price on the original auction listing was removed as part of a revision to the original auction listing.
     *
     * @param bool $reserveRemoved
     * @return self
     */
    public function setReserveRemoved($reserveRemoved)
    {
        $this->reserveRemoved = $reserveRemoved;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemRevised();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemRevised", $value);
        }
        $value = $this->getBuyItNowAdded();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowAdded", $value);
        }
        $value = $this->getBuyItNowLowered();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyItNowLowered", $value);
        }
        $value = $this->getReserveLowered();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReserveLowered", $value);
        }
        $value = $this->getReserveRemoved();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReserveRemoved", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemRevised');
        if (null !== $value) {
            $this->setItemRevised($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowAdded');
        if (null !== $value) {
            $this->setBuyItNowAdded($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyItNowLowered');
        if (null !== $value) {
            $this->setBuyItNowLowered($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReserveLowered');
        if (null !== $value) {
            $this->setReserveLowered($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReserveRemoved');
        if (null !== $value) {
            $this->setReserveRemoved($value);
        }
    }
}
