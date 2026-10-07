<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddSecondChanceItemResponseType
 *
 * Type defining the response container of an <b>AddSecondChanceItem</b> call. This response container consists of the <b>ItemID</b> of the listing in which a Second Chance Offer is being offered, as well as the start and end time that the Second Chance Offer is available to the recipient (identified through the <b>RecipientBidderUserID</b> in the request).
 * XSD Type: AddSecondChanceItemResponseType
 */
class AddSecondChanceItemResponseType extends AbstractResponseType
{
    /**
     * This field contains the Item ID for the Second Chance Offer that was just created with the <b>AddSecondChanceItem</b> call. Note that this Item ID will be different from the Item ID in the original auction listing that was passed in the request.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This timestamp indicates the date and time when the Second Chance Offer became available to the recipient.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * This timestamp indicates the date and time when the Second Chance Offer listing will expire, at which time the recipient will no longer be able to purchase the item.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as itemID
     *
     * This field contains the Item ID for the Second Chance Offer that was just created with the <b>AddSecondChanceItem</b> call. Note that this Item ID will be different from the Item ID in the original auction listing that was passed in the request.
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
     * This field contains the Item ID for the Second Chance Offer that was just created with the <b>AddSecondChanceItem</b> call. Note that this Item ID will be different from the Item ID in the original auction listing that was passed in the request.
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
     * Gets as startTime
     *
     * This timestamp indicates the date and time when the Second Chance Offer became available to the recipient.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * This timestamp indicates the date and time when the Second Chance Offer became available to the recipient.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * This timestamp indicates the date and time when the Second Chance Offer listing will expire, at which time the recipient will no longer be able to purchase the item.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * This timestamp indicates the date and time when the Second Chance Offer listing will expire, at which time the recipient will no longer be able to purchase the item.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->itemID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ItemID', null, (string) $value);
        }
        $value = $this->startTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTime', null, Func::formatDateTime($value));
        }
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AddSecondChanceItemResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'ItemID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->itemID = $value;
                    }
                    return true;
                case 'StartTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTime = new \DateTime($value);
                    }
                    return true;
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
