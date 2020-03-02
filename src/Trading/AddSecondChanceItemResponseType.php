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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
    }
}
