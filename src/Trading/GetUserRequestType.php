<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserRequestType
 *
 * Retrieves data pertaining to a single eBay user. Callers can use this call to return their own user data or the data of another eBay user. Unless the caller passes in an <strong>ItemID</strong> value that identifies a current or past common order, not all data (like email addresses) will be returned in the response.
 * XSD Type: GetUserRequestType
 */
class GetUserRequestType extends AbstractRequestType
{
    /**
     * Specify the <strong>ItemID</strong> value for a successfully concluded listing in which the
     *  requestor and target user were participants (one as seller and the other
     *  as buyer). Necessary to return certain data (like an email address). Not
     *  necessary if the requestor is retrieving their own data.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Specify the user whose data you want returned by the call. If not specified, eBay returns data pertaining to the
     *  requesting user (as specified with the <strong>eBayAuthToken</strong> value).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * If the <b>IncludeFeatureEligibility</b> flag is included and set to 'true', the call response will include a <b>QualifiesForSelling</b> flag which indicates if the eBay user is eligible to sell on eBay, and a <b>IncludeFeatureEligibility</b> container which indicates which selling features are available to the user.
     *
     * @var bool $includeFeatureEligibility
     */
    private $includeFeatureEligibility = null;

    /**
     * Gets as itemID
     *
     * Specify the <strong>ItemID</strong> value for a successfully concluded listing in which the
     *  requestor and target user were participants (one as seller and the other
     *  as buyer). Necessary to return certain data (like an email address). Not
     *  necessary if the requestor is retrieving their own data.
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
     * Specify the <strong>ItemID</strong> value for a successfully concluded listing in which the
     *  requestor and target user were participants (one as seller and the other
     *  as buyer). Necessary to return certain data (like an email address). Not
     *  necessary if the requestor is retrieving their own data.
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
     * Gets as userID
     *
     * Specify the user whose data you want returned by the call. If not specified, eBay returns data pertaining to the
     *  requesting user (as specified with the <strong>eBayAuthToken</strong> value).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * Specify the user whose data you want returned by the call. If not specified, eBay returns data pertaining to the
     *  requesting user (as specified with the <strong>eBayAuthToken</strong> value).
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as includeFeatureEligibility
     *
     * If the <b>IncludeFeatureEligibility</b> flag is included and set to 'true', the call response will include a <b>QualifiesForSelling</b> flag which indicates if the eBay user is eligible to sell on eBay, and a <b>IncludeFeatureEligibility</b> container which indicates which selling features are available to the user.
     *
     * @return bool
     */
    public function getIncludeFeatureEligibility()
    {
        return $this->includeFeatureEligibility;
    }

    /**
     * Sets a new includeFeatureEligibility
     *
     * If the <b>IncludeFeatureEligibility</b> flag is included and set to 'true', the call response will include a <b>QualifiesForSelling</b> flag which indicates if the eBay user is eligible to sell on eBay, and a <b>IncludeFeatureEligibility</b> container which indicates which selling features are available to the user.
     *
     * @param bool $includeFeatureEligibility
     * @return self
     */
    public function setIncludeFeatureEligibility($includeFeatureEligibility)
    {
        $this->includeFeatureEligibility = $includeFeatureEligibility;
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
        $value = $this->userID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UserID', null, (string) $value);
        }
        $value = $this->includeFeatureEligibility;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeFeatureEligibility', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetUserRequestType
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
                case 'UserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userID = $value;
                    }
                    return true;
                case 'IncludeFeatureEligibility':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeFeatureEligibility = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ItemID'] = $this->itemID;
        $data['UserID'] = $this->userID;
        $data['IncludeFeatureEligibility'] = $this->includeFeatureEligibility;
        return $data;
    }
}
