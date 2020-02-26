<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing GetUserProfileResponseType
 *
 * The base response type of the <b>GetUserProfile</b> call, which contains detailed information about an eBay user, including their Feedback data.
 * XSD Type: GetUserProfileResponseType
 */
class GetUserProfileResponseType extends AbstractResponseType
{

    /**
     * This container consists of various details about the eBay user, including Feedback rating, Seller Level, link to profile page, and other information. This container is always returned, but more fields will be returned under this container if the user includes the <b>IncludeSelector</b> field in the request and sets its value to <code>Details</code>.
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleUserType $user
     */
    private $user = null;

    /**
     * This container consists of numerous statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral,
     *  and Negative Feedback entries for predefined time periods (last week, last month, last 6 months, and last year). For the <b>FeedbackHistory</b> container to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackHistory</code>.
     *
     * @var \Nogrod\eBaySDK\Shopping\FeedbackHistoryType $feedbackHistory
     */
    private $feedbackHistory = null;

    /**
     * Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackDetails</code>.
     *  <br/><br/>
     *  The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned if the eBay user does not have five recent Feedback entries.
     *
     * @var \Nogrod\eBaySDK\Shopping\FeedbackDetailType[] $feedbackDetails
     */
    private $feedbackDetails = [
        
    ];

    /**
     * Gets as user
     *
     * This container consists of various details about the eBay user, including Feedback rating, Seller Level, link to profile page, and other information. This container is always returned, but more fields will be returned under this container if the user includes the <b>IncludeSelector</b> field in the request and sets its value to <code>Details</code>.
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleUserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * This container consists of various details about the eBay user, including Feedback rating, Seller Level, link to profile page, and other information. This container is always returned, but more fields will be returned under this container if the user includes the <b>IncludeSelector</b> field in the request and sets its value to <code>Details</code>.
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleUserType $user
     * @return self
     */
    public function setUser(\Nogrod\eBaySDK\Shopping\SimpleUserType $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Gets as feedbackHistory
     *
     * This container consists of numerous statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral,
     *  and Negative Feedback entries for predefined time periods (last week, last month, last 6 months, and last year). For the <b>FeedbackHistory</b> container to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackHistory</code>.
     *
     * @return \Nogrod\eBaySDK\Shopping\FeedbackHistoryType
     */
    public function getFeedbackHistory()
    {
        return $this->feedbackHistory;
    }

    /**
     * Sets a new feedbackHistory
     *
     * This container consists of numerous statistical data about the specified eBay user's Feedback history, including counts of Positive, Neutral,
     *  and Negative Feedback entries for predefined time periods (last week, last month, last 6 months, and last year). For the <b>FeedbackHistory</b> container to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackHistory</code>.
     *
     * @param \Nogrod\eBaySDK\Shopping\FeedbackHistoryType $feedbackHistory
     * @return self
     */
    public function setFeedbackHistory(\Nogrod\eBaySDK\Shopping\FeedbackHistoryType $feedbackHistory)
    {
        $this->feedbackHistory = $feedbackHistory;
        return $this;
    }

    /**
     * Adds as feedbackDetails
     *
     * Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackDetails</code>.
     *  <br/><br/>
     *  The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned if the eBay user does not have five recent Feedback entries.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\FeedbackDetailType $feedbackDetails
     */
    public function addToFeedbackDetails(\Nogrod\eBaySDK\Shopping\FeedbackDetailType $feedbackDetails)
    {
        $this->feedbackDetails[] = $feedbackDetails;
        return $this;
    }

    /**
     * isset feedbackDetails
     *
     * Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackDetails</code>.
     *  <br/><br/>
     *  The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned if the eBay user does not have five recent Feedback entries.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeedbackDetails($index)
    {
        return isset($this->feedbackDetails[$index]);
    }

    /**
     * unset feedbackDetails
     *
     * Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackDetails</code>.
     *  <br/><br/>
     *  The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned if the eBay user does not have five recent Feedback entries.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeedbackDetails($index)
    {
        unset($this->feedbackDetails[$index]);
    }

    /**
     * Gets as feedbackDetails
     *
     * Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackDetails</code>.
     *  <br/><br/>
     *  The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned if the eBay user does not have five recent Feedback entries.
     *
     * @return \Nogrod\eBaySDK\Shopping\FeedbackDetailType[]
     */
    public function getFeedbackDetails()
    {
        return $this->feedbackDetails;
    }

    /**
     * Sets a new feedbackDetails
     *
     * Each <b>FeedbackDetails</b> container consists of detailed information about one Feedback entry for the specified eBay user. For <b>FeedbackDetails</b> containers to be returned, the user must include the <b>IncludeSelector</b> field in the request and set its value to <code>FeedbackDetails</code>.
     *  <br/><br/>
     *  The specified eBay user's last five Feedback entries (as buyer or seller) are returned in the response. It is possible that less than five Feedback entries will be returned if the eBay user does not have five recent Feedback entries.
     *
     * @param \Nogrod\eBaySDK\Shopping\FeedbackDetailType[] $feedbackDetails
     * @return self
     */
    public function setFeedbackDetails(array $feedbackDetails)
    {
        $this->feedbackDetails = $feedbackDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getUser();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}User", $value);
        }
        $value = $this->getFeedbackHistory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackHistory", $value);
        }
        $value = $this->getFeedbackDetails();
        if (null !== $value && !empty($this->getFeedbackDetails())) {
            $writer->write(array_map(function ($v) {
                return ["FeedbackDetails" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}User');
        if (null !== $value) {
            $this->setUser(\Nogrod\eBaySDK\Shopping\SimpleUserType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackHistory');
        if (null !== $value) {
            $this->setFeedbackHistory(\Nogrod\eBaySDK\Shopping\FeedbackHistoryType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setFeedbackDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Shopping\FeedbackDetailType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
