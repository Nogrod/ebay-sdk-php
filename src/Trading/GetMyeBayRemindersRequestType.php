<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyeBayRemindersRequestType
 *
 * This is the base request type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * XSD Type: GetMyeBayRemindersRequestType
 */
class GetMyeBayRemindersRequestType extends AbstractRequestType
{
    /**
     * This container should be included if the user wishes to retrieve the counts of My eBay Buying Reminders. Counts will only be retrieved for My eBay Buying Reminders that the user received.
     *
     * @var \Nogrod\eBaySDK\Trading\ReminderCustomizationType $buyingReminders
     */
    private $buyingReminders = null;

    /**
     * This container should be included if the user wishes to retrieve the counts of My eBay Selling Reminders. Counts will only be retrieved for My eBay Selling Reminders that the user received.
     *
     * @var \Nogrod\eBaySDK\Trading\ReminderCustomizationType $sellingReminders
     */
    private $sellingReminders = null;

    /**
     * Gets as buyingReminders
     *
     * This container should be included if the user wishes to retrieve the counts of My eBay Buying Reminders. Counts will only be retrieved for My eBay Buying Reminders that the user received.
     *
     * @return \Nogrod\eBaySDK\Trading\ReminderCustomizationType
     */
    public function getBuyingReminders()
    {
        return $this->buyingReminders;
    }

    /**
     * Sets a new buyingReminders
     *
     * This container should be included if the user wishes to retrieve the counts of My eBay Buying Reminders. Counts will only be retrieved for My eBay Buying Reminders that the user received.
     *
     * @param \Nogrod\eBaySDK\Trading\ReminderCustomizationType $buyingReminders
     * @return self
     */
    public function setBuyingReminders(\Nogrod\eBaySDK\Trading\ReminderCustomizationType $buyingReminders)
    {
        $this->buyingReminders = $buyingReminders;
        return $this;
    }

    /**
     * Gets as sellingReminders
     *
     * This container should be included if the user wishes to retrieve the counts of My eBay Selling Reminders. Counts will only be retrieved for My eBay Selling Reminders that the user received.
     *
     * @return \Nogrod\eBaySDK\Trading\ReminderCustomizationType
     */
    public function getSellingReminders()
    {
        return $this->sellingReminders;
    }

    /**
     * Sets a new sellingReminders
     *
     * This container should be included if the user wishes to retrieve the counts of My eBay Selling Reminders. Counts will only be retrieved for My eBay Selling Reminders that the user received.
     *
     * @param \Nogrod\eBaySDK\Trading\ReminderCustomizationType $sellingReminders
     * @return self
     */
    public function setSellingReminders(\Nogrod\eBaySDK\Trading\ReminderCustomizationType $sellingReminders)
    {
        $this->sellingReminders = $sellingReminders;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getBuyingReminders();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyingReminders", $value);
        }
        $value = $this->getSellingReminders();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingReminders", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingReminders');
        if (null !== $value) {
            $this->setBuyingReminders(\Nogrod\eBaySDK\Trading\ReminderCustomizationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingReminders');
        if (null !== $value) {
            $this->setSellingReminders(\Nogrod\eBaySDK\Trading\ReminderCustomizationType::fromKeyValue($value));
        }
    }
}
