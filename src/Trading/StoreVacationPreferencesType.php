<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreVacationPreferencesType
 *
 * This type is used by the <b>VacationPreferences</b> container that is set in a <b>SetStorePreferences</b> call and returned in a <b>GetStorePreferences</b> call.
 * XSD Type: StoreVacationPreferencesType
 */
class StoreVacationPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner is going on vacation and wants to temporarily turn off all active listings. Conversely, if the eBay store owner is back from vacation, this field can be included and set to <code>false</code> to turn off the vacation setting.
     *  <br/><br/>
     *  If the 'On Vacation' setting is turned on for an eBay store owner, all of the store owner's listings will be hidden from search, and shoppers can not buy any items from that store.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the 'On Vacation' setting is turned on, or returned as <code>false</code> if the 'On Vacation' setting is turned off.
     *
     * @var bool $onVacation
     */
    private $onVacation = null;

    /**
     * In a <b>SetStorePreferences</b> call, this field should be included in the request if the eBay store owner wants to inform shoppers when he/she will return from vacation. The seller should make sure they use the proper date-time format, as specified in the <b>dateTime</b> simple type. If a date is specified in this field, the following behavior can be expected:<br/>
     *  <ul>
     *  <li>The 'On Vacation' setting (if it was turned on) will automatically be turned off when this date is reached</li>
     *  <li>This return date will be displayed in the listing if the <b>VacationPreferences.MessageItem</b> field is set to <code>true</code></li>
     *  <li>This return date will be displayed on the seller's store page if the <b>VacationPreferences.MessageStore</b> field is set to <code>true</code></li>
     *  </ul>
     *  In a <b>GetStorePreferences</b> call, this field is returned if it was set.
     *
     * @var \DateTime $returnDate
     */
    private $returnDate = null;

    /**
     * This field is deprecated, as it was used for Store Inventory listings, which are no longer supported on any eBay site.
     *
     * @var bool $hideFixedPriceStoreItems
     */
    private $hideFixedPriceStoreItems = null;

    /**
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on all of the seller's active listings. The following information will be displayed if this field is set to <code>true</code>:<br/>
     *  <ul>
     *  <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li>
     *  <li>The date when the seller will return from vacation if the <b>ReturnDate</b> was set</li>
     *  </ul>
     *  If this field is included in the <b>SetStorePreferences</b> request and set to <code>false</code>, no information regarding the seller's vacation will appear on active listings.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on active listings, or returned as <code>false</code> if no information regarding the vacation is being displayed on active listings.
     *
     * @var bool $messageItem
     */
    private $messageItem = null;

    /**
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on store pages. The following information will be displayed if this field is set to <code>true</code>:<br/>
     *  <ul>
     *  <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li>
     *  <li>The date when the seller will return from vacation if the <b>ReturnDate</b> was set</li>
     *  <li>A customized message from the seller regarding this vacation if the seller included a customized message through the <b>MessageStoreCustomText</b> field and the <b>DisplayMessageStoreCustomText</b> was set to </code>true</code>. If the <b>DisplayMessageStoreCustomText</b> is set to </code>false</code>, the generic 'On Vacation' and return date (if available) will be displayed instead.</li>
     *  </ul>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on the store page, or returned as <code>false</code> if no information regarding the vacation is being displayed on the store page.
     *
     * @var bool $messageStore
     */
    private $messageStore = null;

    /**
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants a custom message regarding a vacation to display on store pages. For this field to have an affect, the seller will create their custom message regarding the vacation through the <b>MessageStoreCustomText</b> field. If this field is turned off (or <code>false</code>), instead of a custom message, a generic 'On Vacation' message and the return date (if available) will be posted to the Store pages.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the seller wants a customized vacation message to be displayed on the store page, or returned as <code>false</code> if the seller wants the generic 'On Vacation' message and the return date (if available) to be posted to the Store pages.
     *
     * @var bool $displayMessageStoreCustomText
     */
    private $displayMessageStoreCustomText = null;

    /**
     * In a <b>SetStorePreferences</b> call, this field should be included in the request, and the seller will create the customized vacation message in this field. HTML markup can be used in this field. This vacation message will appear on store pages as long as the <b>DisplayMessageStoreCustomText</b> field is set to <code>true</code>. If the <b>DisplayMessageStoreCustomText</b> field is set to <code>false</code>, any text provided through the <b>MessageStoreCustomText</b> will not be displayed on store pages.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned if it is set.
     *
     * @var string $messageStoreCustomText
     */
    private $messageStoreCustomText = null;

    /**
     * Gets as onVacation
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner is going on vacation and wants to temporarily turn off all active listings. Conversely, if the eBay store owner is back from vacation, this field can be included and set to <code>false</code> to turn off the vacation setting.
     *  <br/><br/>
     *  If the 'On Vacation' setting is turned on for an eBay store owner, all of the store owner's listings will be hidden from search, and shoppers can not buy any items from that store.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the 'On Vacation' setting is turned on, or returned as <code>false</code> if the 'On Vacation' setting is turned off.
     *
     * @return bool
     */
    public function getOnVacation()
    {
        return $this->onVacation;
    }

    /**
     * Sets a new onVacation
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner is going on vacation and wants to temporarily turn off all active listings. Conversely, if the eBay store owner is back from vacation, this field can be included and set to <code>false</code> to turn off the vacation setting.
     *  <br/><br/>
     *  If the 'On Vacation' setting is turned on for an eBay store owner, all of the store owner's listings will be hidden from search, and shoppers can not buy any items from that store.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the 'On Vacation' setting is turned on, or returned as <code>false</code> if the 'On Vacation' setting is turned off.
     *
     * @param bool $onVacation
     * @return self
     */
    public function setOnVacation($onVacation)
    {
        $this->onVacation = $onVacation;
        return $this;
    }

    /**
     * Gets as returnDate
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request if the eBay store owner wants to inform shoppers when he/she will return from vacation. The seller should make sure they use the proper date-time format, as specified in the <b>dateTime</b> simple type. If a date is specified in this field, the following behavior can be expected:<br/>
     *  <ul>
     *  <li>The 'On Vacation' setting (if it was turned on) will automatically be turned off when this date is reached</li>
     *  <li>This return date will be displayed in the listing if the <b>VacationPreferences.MessageItem</b> field is set to <code>true</code></li>
     *  <li>This return date will be displayed on the seller's store page if the <b>VacationPreferences.MessageStore</b> field is set to <code>true</code></li>
     *  </ul>
     *  In a <b>GetStorePreferences</b> call, this field is returned if it was set.
     *
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Sets a new returnDate
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request if the eBay store owner wants to inform shoppers when he/she will return from vacation. The seller should make sure they use the proper date-time format, as specified in the <b>dateTime</b> simple type. If a date is specified in this field, the following behavior can be expected:<br/>
     *  <ul>
     *  <li>The 'On Vacation' setting (if it was turned on) will automatically be turned off when this date is reached</li>
     *  <li>This return date will be displayed in the listing if the <b>VacationPreferences.MessageItem</b> field is set to <code>true</code></li>
     *  <li>This return date will be displayed on the seller's store page if the <b>VacationPreferences.MessageStore</b> field is set to <code>true</code></li>
     *  </ul>
     *  In a <b>GetStorePreferences</b> call, this field is returned if it was set.
     *
     * @param \DateTime $returnDate
     * @return self
     */
    public function setReturnDate(\DateTime $returnDate)
    {
        $this->returnDate = $returnDate;
        return $this;
    }

    /**
     * Gets as hideFixedPriceStoreItems
     *
     * This field is deprecated, as it was used for Store Inventory listings, which are no longer supported on any eBay site.
     *
     * @return bool
     */
    public function getHideFixedPriceStoreItems()
    {
        return $this->hideFixedPriceStoreItems;
    }

    /**
     * Sets a new hideFixedPriceStoreItems
     *
     * This field is deprecated, as it was used for Store Inventory listings, which are no longer supported on any eBay site.
     *
     * @param bool $hideFixedPriceStoreItems
     * @return self
     */
    public function setHideFixedPriceStoreItems($hideFixedPriceStoreItems)
    {
        $this->hideFixedPriceStoreItems = $hideFixedPriceStoreItems;
        return $this;
    }

    /**
     * Gets as messageItem
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on all of the seller's active listings. The following information will be displayed if this field is set to <code>true</code>:<br/>
     *  <ul>
     *  <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li>
     *  <li>The date when the seller will return from vacation if the <b>ReturnDate</b> was set</li>
     *  </ul>
     *  If this field is included in the <b>SetStorePreferences</b> request and set to <code>false</code>, no information regarding the seller's vacation will appear on active listings.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on active listings, or returned as <code>false</code> if no information regarding the vacation is being displayed on active listings.
     *
     * @return bool
     */
    public function getMessageItem()
    {
        return $this->messageItem;
    }

    /**
     * Sets a new messageItem
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on all of the seller's active listings. The following information will be displayed if this field is set to <code>true</code>:<br/>
     *  <ul>
     *  <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li>
     *  <li>The date when the seller will return from vacation if the <b>ReturnDate</b> was set</li>
     *  </ul>
     *  If this field is included in the <b>SetStorePreferences</b> request and set to <code>false</code>, no information regarding the seller's vacation will appear on active listings.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on active listings, or returned as <code>false</code> if no information regarding the vacation is being displayed on active listings.
     *
     * @param bool $messageItem
     * @return self
     */
    public function setMessageItem($messageItem)
    {
        $this->messageItem = $messageItem;
        return $this;
    }

    /**
     * Gets as messageStore
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on store pages. The following information will be displayed if this field is set to <code>true</code>:<br/>
     *  <ul>
     *  <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li>
     *  <li>The date when the seller will return from vacation if the <b>ReturnDate</b> was set</li>
     *  <li>A customized message from the seller regarding this vacation if the seller included a customized message through the <b>MessageStoreCustomText</b> field and the <b>DisplayMessageStoreCustomText</b> was set to </code>true</code>. If the <b>DisplayMessageStoreCustomText</b> is set to </code>false</code>, the generic 'On Vacation' and return date (if available) will be displayed instead.</li>
     *  </ul>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on the store page, or returned as <code>false</code> if no information regarding the vacation is being displayed on the store page.
     *
     * @return bool
     */
    public function getMessageStore()
    {
        return $this->messageStore;
    }

    /**
     * Sets a new messageStore
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants information regarding the vacation to be posted on store pages. The following information will be displayed if this field is set to <code>true</code>:<br/>
     *  <ul>
     *  <li>A note about the seller being on vacation (and items being unavailable for purchase) if the <b>OnVacation</b> field is set to <code>true</code></li>
     *  <li>The date when the seller will return from vacation if the <b>ReturnDate</b> was set</li>
     *  <li>A customized message from the seller regarding this vacation if the seller included a customized message through the <b>MessageStoreCustomText</b> field and the <b>DisplayMessageStoreCustomText</b> was set to </code>true</code>. If the <b>DisplayMessageStoreCustomText</b> is set to </code>false</code>, the generic 'On Vacation' and return date (if available) will be displayed instead.</li>
     *  </ul>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if information regarding the vacation is being displayed on the store page, or returned as <code>false</code> if no information regarding the vacation is being displayed on the store page.
     *
     * @param bool $messageStore
     * @return self
     */
    public function setMessageStore($messageStore)
    {
        $this->messageStore = $messageStore;
        return $this;
    }

    /**
     * Gets as displayMessageStoreCustomText
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants a custom message regarding a vacation to display on store pages. For this field to have an affect, the seller will create their custom message regarding the vacation through the <b>MessageStoreCustomText</b> field. If this field is turned off (or <code>false</code>), instead of a custom message, a generic 'On Vacation' message and the return date (if available) will be posted to the Store pages.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the seller wants a customized vacation message to be displayed on the store page, or returned as <code>false</code> if the seller wants the generic 'On Vacation' message and the return date (if available) to be posted to the Store pages.
     *
     * @return bool
     */
    public function getDisplayMessageStoreCustomText()
    {
        return $this->displayMessageStoreCustomText;
    }

    /**
     * Sets a new displayMessageStoreCustomText
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request and set to <code>true</code> if the eBay store owner wants a custom message regarding a vacation to display on store pages. For this field to have an affect, the seller will create their custom message regarding the vacation through the <b>MessageStoreCustomText</b> field. If this field is turned off (or <code>false</code>), instead of a custom message, a generic 'On Vacation' message and the return date (if available) will be posted to the Store pages.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned as <code>true</code> if the seller wants a customized vacation message to be displayed on the store page, or returned as <code>false</code> if the seller wants the generic 'On Vacation' message and the return date (if available) to be posted to the Store pages.
     *
     * @param bool $displayMessageStoreCustomText
     * @return self
     */
    public function setDisplayMessageStoreCustomText($displayMessageStoreCustomText)
    {
        $this->displayMessageStoreCustomText = $displayMessageStoreCustomText;
        return $this;
    }

    /**
     * Gets as messageStoreCustomText
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request, and the seller will create the customized vacation message in this field. HTML markup can be used in this field. This vacation message will appear on store pages as long as the <b>DisplayMessageStoreCustomText</b> field is set to <code>true</code>. If the <b>DisplayMessageStoreCustomText</b> field is set to <code>false</code>, any text provided through the <b>MessageStoreCustomText</b> will not be displayed on store pages.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned if it is set.
     *
     * @return string
     */
    public function getMessageStoreCustomText()
    {
        return $this->messageStoreCustomText;
    }

    /**
     * Sets a new messageStoreCustomText
     *
     * In a <b>SetStorePreferences</b> call, this field should be included in the request, and the seller will create the customized vacation message in this field. HTML markup can be used in this field. This vacation message will appear on store pages as long as the <b>DisplayMessageStoreCustomText</b> field is set to <code>true</code>. If the <b>DisplayMessageStoreCustomText</b> field is set to <code>false</code>, any text provided through the <b>MessageStoreCustomText</b> will not be displayed on store pages.
     *  <br/><br/>
     *  In a <b>GetStorePreferences</b> call, this field is returned if it is set.
     *
     * @param string $messageStoreCustomText
     * @return self
     */
    public function setMessageStoreCustomText($messageStoreCustomText)
    {
        $this->messageStoreCustomText = $messageStoreCustomText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOnVacation();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OnVacation", $value);
        }
        $value = $this->getReturnDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnDate", $value);
        }
        $value = $this->getHideFixedPriceStoreItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HideFixedPriceStoreItems", $value);
        }
        $value = $this->getMessageItem();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageItem", $value);
        }
        $value = $this->getMessageStore();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageStore", $value);
        }
        $value = $this->getDisplayMessageStoreCustomText();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayMessageStoreCustomText", $value);
        }
        $value = $this->getMessageStoreCustomText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageStoreCustomText", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OnVacation');
        if (null !== $value) {
            $this->setOnVacation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnDate');
        if (null !== $value) {
            $this->setReturnDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HideFixedPriceStoreItems');
        if (null !== $value) {
            $this->setHideFixedPriceStoreItems($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageItem');
        if (null !== $value) {
            $this->setMessageItem($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageStore');
        if (null !== $value) {
            $this->setMessageStore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayMessageStoreCustomText');
        if (null !== $value) {
            $this->setDisplayMessageStoreCustomText($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageStoreCustomText');
        if (null !== $value) {
            $this->setMessageStoreCustomText($value);
        }
    }
}
