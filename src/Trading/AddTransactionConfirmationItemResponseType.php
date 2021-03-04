<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddTransactionConfirmationItemResponseType
 *
 * The base response of the <b>AddTransactionConfirmationItem</b> call.
 * XSD Type: AddTransactionConfirmationItemResponseType
 */
class AddTransactionConfirmationItemResponseType extends AbstractResponseType
{
    /**
     * This field contains the Item ID associated with the Transaction Confirmation Item that was just created with the <b>AddTransactionConfirmationItem</b> call. This field is not returned if the request was only used to verify that a new TCR could be created.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This timestamp indicates the date and time when the Transaction Confirmation Item became available to the recipient.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * This timestamp indicates the date and time when the Transaction Confirmation Item will no longer be available for purchase.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as itemID
     *
     * This field contains the Item ID associated with the Transaction Confirmation Item that was just created with the <b>AddTransactionConfirmationItem</b> call. This field is not returned if the request was only used to verify that a new TCR could be created.
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
     * This field contains the Item ID associated with the Transaction Confirmation Item that was just created with the <b>AddTransactionConfirmationItem</b> call. This field is not returned if the request was only used to verify that a new TCR could be created.
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
     * This timestamp indicates the date and time when the Transaction Confirmation Item became available to the recipient.
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
     * This timestamp indicates the date and time when the Transaction Confirmation Item became available to the recipient.
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
     * This timestamp indicates the date and time when the Transaction Confirmation Item will no longer be available for purchase.
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
     * This timestamp indicates the date and time when the Transaction Confirmation Item will no longer be available for purchase.
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
