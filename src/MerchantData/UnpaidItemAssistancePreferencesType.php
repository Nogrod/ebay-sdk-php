<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UnpaidItemAssistancePreferencesType
 *
 * This type defines the <b>UnpaidItemAssistancePreferences</b> container. This container is
 *  used in <b>SetUserPreferences</b> to set the preferences related to the <b>Unpaid Item
 *  Assistant</b> feature. The <b>UnpaidItemAssistancePreferences</b> container is also returned in
 *  <b>GetUserPreferences</b> (if the <b>ShowUnpaidItemAssistancePreference</b> flag is included and
 *  set to true in the request).
 *  <br/><br/>
 *  See the <a href="http://pages.ebay.com/help/sell/unpaid-item-assistant.html">Using Unpaid Item Assistant</a> Help topic for more information about setting up and using the Unpaid Item Assistant feature.
 * XSD Type: UnpaidItemAssistancePreferencesType
 */
class UnpaidItemAssistancePreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the number of days that should elapse before the Unpaid
     *  Item Assistant mechanism opens an Unpaid Item case on behalf of the seller.
     *  <b>Valid values are</b>: 4, 8, 16, 24, and 32 (days).
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
     *  <br/>
     *
     * @var int $delayBeforeOpeningDispute
     */
    private $delayBeforeOpeningDispute = null;

    /**
     * Flag to indicate whether or not the Unpaid Item Assistant mechanism is turned on for the seller. Through the Unpaid Item Assistant mechanism, eBay can automatically file Unpaid Item cases on behalf of the seller.
     *  <br/><br/>
     *  The Unpaid Item Assistant feature also has options to automatically relist disputed items, to automatically request a PayPal Giving Fund donation refund (for eBay for Charity listings only), or to create an 'Exclusion list' of buyers who are not subject to the automatic filing of an Unpaid Item case.
     *
     * @var bool $optInStatus
     */
    private $optInStatus = null;

    /**
     * Flag to indicate whether or not the seller wants eBay to automatically relist
     *  items after corresponding Unpaid Item cases are opened and closed through the
     *  Unpaid Item Assistant mechanism without payment. For a multiple-quantity listing,
     *  the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>.
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
     *
     * @var bool $autoRelist
     */
    private $autoRelist = null;

    /**
     * This field should be included and set to <code>true</code> if the seller wants to clear all users from the Unpaid Item Assistant Exclusion list. The Exclusion list can be viewed from the Unpaid Item Assistant Preferences in My eBay. Excluded users are not subject to the automatic filing of Unpaid Item cases. The seller can still open Unpaid Item cases against excluded users, but these cases must be opened manually.
     *  <br/><br/>
     *  Users can be added to Exclusion list through the <b>ExcludedUser</b>
     *  field. The <b>RemoveAllExcludedUsers</b> field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to false in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *
     * @var bool $removeAllExcludedUsers
     */
    private $removeAllExcludedUsers = null;

    /**
     * An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This
     *  field is typically used by a seller who would prefer to file an Unpaid Item
     *  dispute manually for the specified user.
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *  <br/><br/>
     *  In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields
     *  represent the current Excluded user list.
     *
     * @var string[] $excludedUser
     */
    private $excludedUser = [

    ];

    /**
     * Flag to indicate whether or not the seller wants eBay to automatically request
     *  PayPal Giving Fund donation refunds after Unpaid Item cases are opened and closed
     *  through the Unpaid Item Assistant mechanism without payment. This setting is
     *  only applicable to eBay for Charity listings.
     *  <br/><br/>
     *  This field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if
     *  the seller is not currently opted into the Unpaid Item Assistant feature in
     *  Unpaid Item Assistant Preferences on My eBay.
     *
     * @var bool $autoOptDonationRefund
     */
    private $autoOptDonationRefund = null;

    /**
     * Gets as delayBeforeOpeningDispute
     *
     * This value indicates the number of days that should elapse before the Unpaid
     *  Item Assistant mechanism opens an Unpaid Item case on behalf of the seller.
     *  <b>Valid values are</b>: 4, 8, 16, 24, and 32 (days).
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
     *  <br/>
     *
     * @return int
     */
    public function getDelayBeforeOpeningDispute()
    {
        return $this->delayBeforeOpeningDispute;
    }

    /**
     * Sets a new delayBeforeOpeningDispute
     *
     * This value indicates the number of days that should elapse before the Unpaid
     *  Item Assistant mechanism opens an Unpaid Item case on behalf of the seller.
     *  <b>Valid values are</b>: 4, 8, 16, 24, and 32 (days).
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
     *  <br/>
     *
     * @param int $delayBeforeOpeningDispute
     * @return self
     */
    public function setDelayBeforeOpeningDispute($delayBeforeOpeningDispute)
    {
        $this->delayBeforeOpeningDispute = $delayBeforeOpeningDispute;
        return $this;
    }

    /**
     * Gets as optInStatus
     *
     * Flag to indicate whether or not the Unpaid Item Assistant mechanism is turned on for the seller. Through the Unpaid Item Assistant mechanism, eBay can automatically file Unpaid Item cases on behalf of the seller.
     *  <br/><br/>
     *  The Unpaid Item Assistant feature also has options to automatically relist disputed items, to automatically request a PayPal Giving Fund donation refund (for eBay for Charity listings only), or to create an 'Exclusion list' of buyers who are not subject to the automatic filing of an Unpaid Item case.
     *
     * @return bool
     */
    public function getOptInStatus()
    {
        return $this->optInStatus;
    }

    /**
     * Sets a new optInStatus
     *
     * Flag to indicate whether or not the Unpaid Item Assistant mechanism is turned on for the seller. Through the Unpaid Item Assistant mechanism, eBay can automatically file Unpaid Item cases on behalf of the seller.
     *  <br/><br/>
     *  The Unpaid Item Assistant feature also has options to automatically relist disputed items, to automatically request a PayPal Giving Fund donation refund (for eBay for Charity listings only), or to create an 'Exclusion list' of buyers who are not subject to the automatic filing of an Unpaid Item case.
     *
     * @param bool $optInStatus
     * @return self
     */
    public function setOptInStatus($optInStatus)
    {
        $this->optInStatus = $optInStatus;
        return $this;
    }

    /**
     * Gets as autoRelist
     *
     * Flag to indicate whether or not the seller wants eBay to automatically relist
     *  items after corresponding Unpaid Item cases are opened and closed through the
     *  Unpaid Item Assistant mechanism without payment. For a multiple-quantity listing,
     *  the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>.
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
     *
     * @return bool
     */
    public function getAutoRelist()
    {
        return $this->autoRelist;
    }

    /**
     * Sets a new autoRelist
     *
     * Flag to indicate whether or not the seller wants eBay to automatically relist
     *  items after corresponding Unpaid Item cases are opened and closed through the
     *  Unpaid Item Assistant mechanism without payment. For a multiple-quantity listing,
     *  the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>.
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item Assistant feature in Unpaid Item Assistant Preferences on My eBay.
     *
     * @param bool $autoRelist
     * @return self
     */
    public function setAutoRelist($autoRelist)
    {
        $this->autoRelist = $autoRelist;
        return $this;
    }

    /**
     * Gets as removeAllExcludedUsers
     *
     * This field should be included and set to <code>true</code> if the seller wants to clear all users from the Unpaid Item Assistant Exclusion list. The Exclusion list can be viewed from the Unpaid Item Assistant Preferences in My eBay. Excluded users are not subject to the automatic filing of Unpaid Item cases. The seller can still open Unpaid Item cases against excluded users, but these cases must be opened manually.
     *  <br/><br/>
     *  Users can be added to Exclusion list through the <b>ExcludedUser</b>
     *  field. The <b>RemoveAllExcludedUsers</b> field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to false in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *
     * @return bool
     */
    public function getRemoveAllExcludedUsers()
    {
        return $this->removeAllExcludedUsers;
    }

    /**
     * Sets a new removeAllExcludedUsers
     *
     * This field should be included and set to <code>true</code> if the seller wants to clear all users from the Unpaid Item Assistant Exclusion list. The Exclusion list can be viewed from the Unpaid Item Assistant Preferences in My eBay. Excluded users are not subject to the automatic filing of Unpaid Item cases. The seller can still open Unpaid Item cases against excluded users, but these cases must be opened manually.
     *  <br/><br/>
     *  Users can be added to Exclusion list through the <b>ExcludedUser</b>
     *  field. The <b>RemoveAllExcludedUsers</b> field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to false in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *
     * @param bool $removeAllExcludedUsers
     * @return self
     */
    public function setRemoveAllExcludedUsers($removeAllExcludedUsers)
    {
        $this->removeAllExcludedUsers = $removeAllExcludedUsers;
        return $this;
    }

    /**
     * Adds as excludedUser
     *
     * An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This
     *  field is typically used by a seller who would prefer to file an Unpaid Item
     *  dispute manually for the specified user.
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *  <br/><br/>
     *  In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields
     *  represent the current Excluded user list.
     *
     * @return self
     * @param string $excludedUser
     */
    public function addToExcludedUser($excludedUser)
    {
        $this->excludedUser[] = $excludedUser;
        return $this;
    }

    /**
     * isset excludedUser
     *
     * An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This
     *  field is typically used by a seller who would prefer to file an Unpaid Item
     *  dispute manually for the specified user.
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *  <br/><br/>
     *  In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields
     *  represent the current Excluded user list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedUser($index)
    {
        return isset($this->excludedUser[$index]);
    }

    /**
     * unset excludedUser
     *
     * An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This
     *  field is typically used by a seller who would prefer to file an Unpaid Item
     *  dispute manually for the specified user.
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *  <br/><br/>
     *  In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields
     *  represent the current Excluded user list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedUser($index)
    {
        unset($this->excludedUser[$index]);
    }

    /**
     * Gets as excludedUser
     *
     * An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This
     *  field is typically used by a seller who would prefer to file an Unpaid Item
     *  dispute manually for the specified user.
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *  <br/><br/>
     *  In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields
     *  represent the current Excluded user list.
     *
     * @return string[]
     */
    public function getExcludedUser()
    {
        return $this->excludedUser;
    }

    /**
     * Sets a new excludedUser
     *
     * An eBay User ID for which the Unpaid Item Assistant mechanism is disabled. This
     *  field is typically used by a seller who would prefer to file an Unpaid Item
     *  dispute manually for the specified user.
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item Assistant Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item Assistant feature
     *  in Unpaid Item Assistant Preferences on My eBay.
     *  <br/><br/>
     *  In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields
     *  represent the current Excluded user list.
     *
     * @param string[] $excludedUser
     * @return self
     */
    public function setExcludedUser(array $excludedUser)
    {
        $this->excludedUser = $excludedUser;
        return $this;
    }

    /**
     * Gets as autoOptDonationRefund
     *
     * Flag to indicate whether or not the seller wants eBay to automatically request
     *  PayPal Giving Fund donation refunds after Unpaid Item cases are opened and closed
     *  through the Unpaid Item Assistant mechanism without payment. This setting is
     *  only applicable to eBay for Charity listings.
     *  <br/><br/>
     *  This field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if
     *  the seller is not currently opted into the Unpaid Item Assistant feature in
     *  Unpaid Item Assistant Preferences on My eBay.
     *
     * @return bool
     */
    public function getAutoOptDonationRefund()
    {
        return $this->autoOptDonationRefund;
    }

    /**
     * Sets a new autoOptDonationRefund
     *
     * Flag to indicate whether or not the seller wants eBay to automatically request
     *  PayPal Giving Fund donation refunds after Unpaid Item cases are opened and closed
     *  through the Unpaid Item Assistant mechanism without payment. This setting is
     *  only applicable to eBay for Charity listings.
     *  <br/><br/>
     *  This field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if
     *  the seller is not currently opted into the Unpaid Item Assistant feature in
     *  Unpaid Item Assistant Preferences on My eBay.
     *
     * @param bool $autoOptDonationRefund
     * @return self
     */
    public function setAutoOptDonationRefund($autoOptDonationRefund)
    {
        $this->autoOptDonationRefund = $autoOptDonationRefund;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDelayBeforeOpeningDispute();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DelayBeforeOpeningDispute", $value);
        }
        $value = $this->getOptInStatus();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OptInStatus", $value);
        }
        $value = $this->getAutoRelist();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutoRelist", $value);
        }
        $value = $this->getRemoveAllExcludedUsers();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RemoveAllExcludedUsers", $value);
        }
        $value = $this->getExcludedUser();
        if (null !== $value && !empty($this->getExcludedUser())) {
            $writer->write(array_map(function ($v) {
                return ["ExcludedUser" => $v];
            }, $value));
        }
        $value = $this->getAutoOptDonationRefund();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutoOptDonationRefund", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DelayBeforeOpeningDispute');
        if (null !== $value) {
            $this->setDelayBeforeOpeningDispute($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OptInStatus');
        if (null !== $value) {
            $this->setOptInStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutoRelist');
        if (null !== $value) {
            $this->setAutoRelist($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RemoveAllExcludedUsers');
        if (null !== $value) {
            $this->setRemoveAllExcludedUsers($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludedUser', true);
        if (null !== $value && !empty($value)) {
            $this->setExcludedUser($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutoOptDonationRefund');
        if (null !== $value) {
            $this->setAutoOptDonationRefund($value);
        }
    }
}
