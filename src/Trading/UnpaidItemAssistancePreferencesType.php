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
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *  <br/>
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
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *  <br/>
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
        if (!is_array($this->excludedUser)) {
            throw new \LogicException('excludedUser is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->excludedUser[] = $excludedUser;
        return $this;
    }

    /**
     * isset excludedUser
     *
     * An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *  <br/>
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
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *  <br/>
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
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *  <br/>
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
     * @return iterable<string>
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
     *  <span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     *  <br/>
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
     * @param iterable<string> $excludedUser
     * @return self
     */
    public function setExcludedUser(iterable $excludedUser)
    {
        $this->excludedUser = $excludedUser;
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
        $value = $this->delayBeforeOpeningDispute;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DelayBeforeOpeningDispute', null, (string) $value);
        }
        $value = $this->optInStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'OptInStatus', null, ($value ? 'true' : 'false'));
        }
        $value = $this->autoRelist;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AutoRelist', null, ($value ? 'true' : 'false'));
        }
        $value = $this->removeAllExcludedUsers;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RemoveAllExcludedUsers', null, ($value ? 'true' : 'false'));
        }
        $value = $this->excludedUser;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ExcludedUser', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\UnpaidItemAssistancePreferencesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->excludedUser = [];
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
                case 'DelayBeforeOpeningDispute':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->delayBeforeOpeningDispute = (int) $value;
                    }
                    return true;
                case 'OptInStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->optInStatus = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'AutoRelist':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->autoRelist = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'RemoveAllExcludedUsers':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->removeAllExcludedUsers = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'ExcludedUser':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->excludedUser[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
