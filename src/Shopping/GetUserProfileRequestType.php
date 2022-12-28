<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserProfileRequestType
 *
 * Retrieves user information based on the eBay user ID you specify. The response contains detailed information about a user. You can specify the types of user information you want in the response.
 * XSD Type: GetUserProfileRequestType
 */
class GetUserProfileRequestType extends AbstractRequestType
{
    /**
     * An eBay user ID is input into this field to retrieve information about that eBay user.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * This inclusive filter is included to control the amount and type of user data that is retrieved.
     *  <br>
     *  <br>
     *  If you don't include this field, a default set of fields is returned. Click the <b>Detail Controls</b> link below and see the <b>none</b> column in that table to see the fields that are returned when no <b>IncludeSelector</b> value is used.
     *  <br>
     *  <br>
     *  To retrieve more data than just the default fields, including detailed Feedback data, the <b>IncludeSelector</b> field can be included, and one to three values can be specified in this field. If multiple values are specified, each value is separated with a comma (,). The enumeration values that can be specified in the <b>IncludeSelector</b> field are discussed below.
     *  <br>
     *  <br>
     *  <b>Applicable values</b>:
     *  <p class="ename">&bull;&nbsp;&nbsp; Details</p>
     *  <p class="edef">Including this value as an <b>IncludeSelector</b> value increases the number of fields that are returned under the <b>User</b> container in the response, including fields related to the user's profile page and eBay Store (if applicable). Compare the <b>none</b> and <b>Details</b> columns in the the <b>Detail Controls</b> table to see which additional fields are returned when the <b>Details</b> value is used in the <b>IncludeSelector</b> field.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; FeedbackDetails</p>
     *  <p class="edef">
     *  If this value is included as an <b>IncludeSelector</b> value, the user's last five Feedback entries (as buyer or seller) are returned in the response. A separate <b>FeedbackDetails</b> container is returned for each Feedback entry, with detailed information about that Feedback entry.
     *  </p>
     *  <p class="ename">&bull;&nbsp;&nbsp; FeedbackHistory</p>
     *  <p class="edef">If this value is included as an <b>IncludeSelector</b> value, a <b>FeedbackHistory</b> container is returned, and this container consists of detailed Feedback data on the eBay user. See <b>FeedbackHistory</b> container (and its child containers) for more information on the type of data that is returned.
     *  </p>
     *  <br>
     *
     * @var string $includeSelector
     */
    private $includeSelector = null;

    /**
     * Gets as userID
     *
     * An eBay user ID is input into this field to retrieve information about that eBay user.
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
     * An eBay user ID is input into this field to retrieve information about that eBay user.
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
     * Gets as includeSelector
     *
     * This inclusive filter is included to control the amount and type of user data that is retrieved.
     *  <br>
     *  <br>
     *  If you don't include this field, a default set of fields is returned. Click the <b>Detail Controls</b> link below and see the <b>none</b> column in that table to see the fields that are returned when no <b>IncludeSelector</b> value is used.
     *  <br>
     *  <br>
     *  To retrieve more data than just the default fields, including detailed Feedback data, the <b>IncludeSelector</b> field can be included, and one to three values can be specified in this field. If multiple values are specified, each value is separated with a comma (,). The enumeration values that can be specified in the <b>IncludeSelector</b> field are discussed below.
     *  <br>
     *  <br>
     *  <b>Applicable values</b>:
     *  <p class="ename">&bull;&nbsp;&nbsp; Details</p>
     *  <p class="edef">Including this value as an <b>IncludeSelector</b> value increases the number of fields that are returned under the <b>User</b> container in the response, including fields related to the user's profile page and eBay Store (if applicable). Compare the <b>none</b> and <b>Details</b> columns in the the <b>Detail Controls</b> table to see which additional fields are returned when the <b>Details</b> value is used in the <b>IncludeSelector</b> field.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; FeedbackDetails</p>
     *  <p class="edef">
     *  If this value is included as an <b>IncludeSelector</b> value, the user's last five Feedback entries (as buyer or seller) are returned in the response. A separate <b>FeedbackDetails</b> container is returned for each Feedback entry, with detailed information about that Feedback entry.
     *  </p>
     *  <p class="ename">&bull;&nbsp;&nbsp; FeedbackHistory</p>
     *  <p class="edef">If this value is included as an <b>IncludeSelector</b> value, a <b>FeedbackHistory</b> container is returned, and this container consists of detailed Feedback data on the eBay user. See <b>FeedbackHistory</b> container (and its child containers) for more information on the type of data that is returned.
     *  </p>
     *  <br>
     *
     * @return string
     */
    public function getIncludeSelector()
    {
        return $this->includeSelector;
    }

    /**
     * Sets a new includeSelector
     *
     * This inclusive filter is included to control the amount and type of user data that is retrieved.
     *  <br>
     *  <br>
     *  If you don't include this field, a default set of fields is returned. Click the <b>Detail Controls</b> link below and see the <b>none</b> column in that table to see the fields that are returned when no <b>IncludeSelector</b> value is used.
     *  <br>
     *  <br>
     *  To retrieve more data than just the default fields, including detailed Feedback data, the <b>IncludeSelector</b> field can be included, and one to three values can be specified in this field. If multiple values are specified, each value is separated with a comma (,). The enumeration values that can be specified in the <b>IncludeSelector</b> field are discussed below.
     *  <br>
     *  <br>
     *  <b>Applicable values</b>:
     *  <p class="ename">&bull;&nbsp;&nbsp; Details</p>
     *  <p class="edef">Including this value as an <b>IncludeSelector</b> value increases the number of fields that are returned under the <b>User</b> container in the response, including fields related to the user's profile page and eBay Store (if applicable). Compare the <b>none</b> and <b>Details</b> columns in the the <b>Detail Controls</b> table to see which additional fields are returned when the <b>Details</b> value is used in the <b>IncludeSelector</b> field.</p>
     *  <p class="ename">&bull;&nbsp;&nbsp; FeedbackDetails</p>
     *  <p class="edef">
     *  If this value is included as an <b>IncludeSelector</b> value, the user's last five Feedback entries (as buyer or seller) are returned in the response. A separate <b>FeedbackDetails</b> container is returned for each Feedback entry, with detailed information about that Feedback entry.
     *  </p>
     *  <p class="ename">&bull;&nbsp;&nbsp; FeedbackHistory</p>
     *  <p class="edef">If this value is included as an <b>IncludeSelector</b> value, a <b>FeedbackHistory</b> container is returned, and this container consists of detailed Feedback data on the eBay user. See <b>FeedbackHistory</b> container (and its child containers) for more information on the type of data that is returned.
     *  </p>
     *  <br>
     *
     * @param string $includeSelector
     * @return self
     */
    public function setIncludeSelector($includeSelector)
    {
        $this->includeSelector = $includeSelector;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getIncludeSelector();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeSelector", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeSelector');
        if (null !== $value) {
            $this->setIncludeSelector($value);
        }
    }
}
