<?php

namespace Nogrod\eBaySDK\Trading;

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
 *  See the <a href="https://www.ebay.com/help/selling/getting-paid/resolving-unpaid-items?id=4137">Resolving unpaid items with buyers</a> Help topic for more information about setting up and using the Unpaid Item preferences feature.
 * XSD Type: UnpaidItemAssistancePreferencesType
 */
class UnpaidItemAssistancePreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the number of days that should elapse before an unpaid order is cancelled on behalf of the seller.
     *  <b>Valid values are</b>: 4, 7, 11, 19, 27, and 30 (days).
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay.
     *  <br/>
     *
     * @var int $delayBeforeOpeningDispute
     */
    private $delayBeforeOpeningDispute = null;

    /**
     * Flag to indicate whether or not the seller has enabled Unpaid Item preferences. Unpaid Item preferences must be enabled for any of the Unpaid Item preferences to have an effect.
     *
     * @var bool $optInStatus
     */
    private $optInStatus = null;

    /**
     * Flag to indicate whether or not the seller wants eBay to automatically relist items after an unpaid order is cancelled. For a multiple-quantity listing,
     *  the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>.
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay.
     *
     * @var bool $autoRelist
     */
    private $autoRelist = null;

    /**
     * This field should be included and set to <code>true</code> if the seller wants to clear all excluded users set in Unpaid Item preferences. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  Users can be added to Exclusion list through the <b>ExcludedUser</b>
     *  field. The <b>RemoveAllExcludedUsers</b> field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to false in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
     *
     * @var bool $removeAllExcludedUsers
     */
    private $removeAllExcludedUsers = null;

    /**
     * An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item preferences Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
     *  <br/><br/>
     *  In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields
     *  represent the current Excluded user list.
     *
     * @var string[] $excludedUser
     */
    private $excludedUser = [

    ];

    /**
     * Gets as delayBeforeOpeningDispute
     *
     * This value indicates the number of days that should elapse before an unpaid order is cancelled on behalf of the seller.
     *  <b>Valid values are</b>: 4, 7, 11, 19, 27, and 30 (days).
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay.
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
     * This value indicates the number of days that should elapse before an unpaid order is cancelled on behalf of the seller.
     *  <b>Valid values are</b>: 4, 7, 11, 19, 27, and 30 (days).
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay.
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
     * Flag to indicate whether or not the seller has enabled Unpaid Item preferences. Unpaid Item preferences must be enabled for any of the Unpaid Item preferences to have an effect.
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
     * Flag to indicate whether or not the seller has enabled Unpaid Item preferences. Unpaid Item preferences must be enabled for any of the Unpaid Item preferences to have an effect.
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
     * Flag to indicate whether or not the seller wants eBay to automatically relist items after an unpaid order is cancelled. For a multiple-quantity listing,
     *  the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>.
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay.
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
     * Flag to indicate whether or not the seller wants eBay to automatically relist items after an unpaid order is cancelled. For a multiple-quantity listing,
     *  the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>.
     *  <br/><br/>
     *  This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay.
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
     * This field should be included and set to <code>true</code> if the seller wants to clear all excluded users set in Unpaid Item preferences. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  Users can be added to Exclusion list through the <b>ExcludedUser</b>
     *  field. The <b>RemoveAllExcludedUsers</b> field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to false in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
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
     * This field should be included and set to <code>true</code> if the seller wants to clear all excluded users set in Unpaid Item preferences. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  Users can be added to Exclusion list through the <b>ExcludedUser</b>
     *  field. The <b>RemoveAllExcludedUsers</b> field is ignored if the
     *  <b>OptInStatus</b> flag is included and set to false in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
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
     * An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item preferences Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
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
     * An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item preferences Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
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
     * An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item preferences Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
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
     * An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item preferences Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
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
     * An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  One or more <b>ExcludedUser</b> fields are used in
     *  <b>SetUserPreferences</b> to add users to Unpaid Item preferences Exclusion
     *  list. Any and all <b>ExcludedUser</b> fields are ignored if the
     *  <b>OptInStatus</b> flag is included and set to <code>false</code> in the request,
     *  or if the seller is not currently opted into the Unpaid Item preferences feature
     *  in Unpaid Item preferences on My eBay.
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
        if (null !== $value && [] !== $this->getExcludedUser()) {
            $writer->write(array_map(function ($v) {return ["ExcludedUser" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DelayBeforeOpeningDispute');
        if (null !== $value) {
            $this->setDelayBeforeOpeningDispute($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OptInStatus');
        if (null !== $value) {
            $this->setOptInStatus(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutoRelist');
        if (null !== $value) {
            $this->setAutoRelist(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RemoveAllExcludedUsers');
        if (null !== $value) {
            $this->setRemoveAllExcludedUsers(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludedUser', true);
        if (null !== $value) {
            $this->setExcludedUser($value);
        }
    }
}
