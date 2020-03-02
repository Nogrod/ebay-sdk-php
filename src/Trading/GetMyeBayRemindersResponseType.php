<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyeBayRemindersResponseType
 *
 * This is the base response type of the <b>GetMyeBayReminders</b> call. This call returns the total counts for My eBay Buying and/or My eBay Selling Reminders for a user.
 * XSD Type: GetMyeBayRemindersResponseType
 */
class GetMyeBayRemindersResponseType extends AbstractResponseType
{

    /**
     * This container is returned if the user included the <b>BuyingReminders</b> container in the call request and set the <b>BuyingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Buying Reminders that the user received during the number of days specified in the <b>BuyingReminders.DurationInDays</b> field in the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\RemindersType $buyingReminders
     */
    private $buyingReminders = null;

    /**
     * This container is returned if the user included the <b>SellingReminders</b> container in the call request and set the <b>SellingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Selling Reminders that the user received during the number of days specified in the <b>SellingReminders.DurationInDays</b> field in the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\RemindersType $sellingReminders
     */
    private $sellingReminders = null;

    /**
     * Gets as buyingReminders
     *
     * This container is returned if the user included the <b>BuyingReminders</b> container in the call request and set the <b>BuyingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Buying Reminders that the user received during the number of days specified in the <b>BuyingReminders.DurationInDays</b> field in the call request.
     *
     * @return \Nogrod\eBaySDK\Trading\RemindersType
     */
    public function getBuyingReminders()
    {
        return $this->buyingReminders;
    }

    /**
     * Sets a new buyingReminders
     *
     * This container is returned if the user included the <b>BuyingReminders</b> container in the call request and set the <b>BuyingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Buying Reminders that the user received during the number of days specified in the <b>BuyingReminders.DurationInDays</b> field in the call request.
     *
     * @param \Nogrod\eBaySDK\Trading\RemindersType $buyingReminders
     * @return self
     */
    public function setBuyingReminders(\Nogrod\eBaySDK\Trading\RemindersType $buyingReminders)
    {
        $this->buyingReminders = $buyingReminders;
        return $this;
    }

    /**
     * Gets as sellingReminders
     *
     * This container is returned if the user included the <b>SellingReminders</b> container in the call request and set the <b>SellingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Selling Reminders that the user received during the number of days specified in the <b>SellingReminders.DurationInDays</b> field in the call request.
     *
     * @return \Nogrod\eBaySDK\Trading\RemindersType
     */
    public function getSellingReminders()
    {
        return $this->sellingReminders;
    }

    /**
     * Sets a new sellingReminders
     *
     * This container is returned if the user included the <b>SellingReminders</b> container in the call request and set the <b>SellingReminders.Include</b> value to <code>true</code>. Counts will only be retrieved for My eBay Selling Reminders that the user received during the number of days specified in the <b>SellingReminders.DurationInDays</b> field in the call request.
     *
     * @param \Nogrod\eBaySDK\Trading\RemindersType $sellingReminders
     * @return self
     */
    public function setSellingReminders(\Nogrod\eBaySDK\Trading\RemindersType $sellingReminders)
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
            $this->setBuyingReminders(\Nogrod\eBaySDK\Trading\RemindersType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingReminders');
        if (null !== $value) {
            $this->setSellingReminders(\Nogrod\eBaySDK\Trading\RemindersType::fromKeyValue($value));
        }
    }
}
