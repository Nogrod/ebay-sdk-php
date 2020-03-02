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
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * This field is deprecated.
     *
     * @var bool $includeExpressRequirements
     */
    private $includeExpressRequirements = null;

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
     * Gets as includeExpressRequirements
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getIncludeExpressRequirements()
    {
        return $this->includeExpressRequirements;
    }

    /**
     * Sets a new includeExpressRequirements
     *
     * This field is deprecated.
     *
     * @param bool $includeExpressRequirements
     * @return self
     */
    public function setIncludeExpressRequirements($includeExpressRequirements)
    {
        $this->includeExpressRequirements = $includeExpressRequirements;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getIncludeExpressRequirements();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeExpressRequirements", $value);
        }
        $value = $this->getIncludeFeatureEligibility();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeFeatureEligibility", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeExpressRequirements');
        if (null !== $value) {
            $this->setIncludeExpressRequirements($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeFeatureEligibility');
        if (null !== $value) {
            $this->setIncludeFeatureEligibility($value);
        }
    }
}
