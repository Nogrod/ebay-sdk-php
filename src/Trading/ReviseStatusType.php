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
class ReviseStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->itemRevised;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemRevised', null, ($value ? 'true' : 'false'));
        }
        $value = $this->buyItNowAdded;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyItNowAdded', null, ($value ? 'true' : 'false'));
        }
        $value = $this->buyItNowLowered;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyItNowLowered', null, ($value ? 'true' : 'false'));
        }
        $value = $this->reserveLowered;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReserveLowered', null, ($value ? 'true' : 'false'));
        }
        $value = $this->reserveRemoved;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReserveRemoved', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ReviseStatusType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'ItemRevised':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemRevised = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'BuyItNowAdded':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyItNowAdded = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'BuyItNowLowered':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyItNowLowered = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ReserveLowered':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->reserveLowered = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ReserveRemoved':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->reserveRemoved = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ItemRevised'] = $this->itemRevised;
        $data['BuyItNowAdded'] = $this->buyItNowAdded;
        $data['BuyItNowLowered'] = $this->buyItNowLowered;
        $data['ReserveLowered'] = $this->reserveLowered;
        $data['ReserveRemoved'] = $this->reserveRemoved;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
