<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SimpleUserType
 *
 * Complex type used to express the details for one eBay user. Which fields are returned in a call response will depend on the context, the API call, and whether the user is a buyer or seller (or both).
 * XSD Type: SimpleUserType
 */
class SimpleUserType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of the eBay user. An eBay user ID is unique across all eBay marketplaces.
     *  <br />
     *  <br />
     *  This field is generally always returned, but it may be masked depending on the situation. For example, if anyone other than the seller of the listing runs a <b>GetItemStatus</b> call on an active auction listing with one or or bids, the <b>UserID</b> value will be masked something like this - <code>b***r</code>.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * This boolean value indicates whether or not the eBay user has chosen to make their Feedback Profile private in My eBay. A private Feedback Profile only means that individual Feedback comments are hidden, but other Feedback statistics will still be displayed, including the total Feedback score and the Positive Feedback Percentage.
     *  <br />
     *  <br />
     *  Sellers on eBay marketplaces do not have the option of making their Feedback Profile private, and they will be blocked from listing if they try to list items with a private Feedback Profile.
     *
     * @var bool $feedbackPrivate
     */
    private $feedbackPrivate = null;

    /**
     * This enumeration value indicates the eBay user's Feedback Rating Star. A different colored star is associated with each Feedback Score range. For more details on the Feedback Score ranges (and colored stars associated with each range), see <b>FeedbackRatingStarCodeType</b>.
     *
     * @var string $feedbackRatingStar
     */
    private $feedbackRatingStar = null;

    /**
     * The aggregate Feedback score of an eBay user. A user's Feedback score is determined by the total number of Positive Feedback ratings minus the total number of Negative Feedback ratings the user has received. Any Neutral Feedback ratings do not affect the Feedback Score.
     *  <br>
     *  <br>
     *  A user's Feedback Score is a quantitative expression of the desirability of dealing with that user as a buyer or a seller. A buyer can leave Positive, Neutral, or Negative Feedback for the seller, but a seller can only leave Positive Feedback for the buyer.
     *
     * @var int $feedbackScore
     */
    private $feedbackScore = null;

    /**
     * Indicates whether eBay has made this user's information anonymous.
     *  <br>
     *  <br>
     *  If <code>true</code>, certain other fields about this user are not returned, or their values are masked.
     *
     * @var bool $userAnonymized
     */
    private $userAnonymized = null;

    /**
     * If 'true', identifies a new user who has been a registered eBay user for 30 days or less. Always 'false' after the user has been registered for more than 30 days.
     *
     * @var bool $newUser
     */
    private $newUser = null;

    /**
     * This timestamp indicates when the user originally registered with eBay. If a bidder's user information is made anonymous, the value -99 is returned.
     *
     * @var \DateTime $registrationDate
     */
    private $registrationDate = null;

    /**
     * The enumeration value returned in this field indicates the eBay site on which the user first created an eBay account. If a bidder's user information is
     *  made anonymous, the value -99 is returned.
     *
     * @var string $registrationSite
     */
    private $registrationSite = null;

    /**
     * The enumeration value returned in this field indicates the current status of the eBay user. A value of <code>Confirmed</code> is typically returned for an active eBay user.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * This enumeration value indicates the type of seller account held by the eBay user - a <code>Private</code> (non-business) account or a <code>Commercial</code> (business) account.
     *
     * @var string $sellerBusinessType
     */
    private $sellerBusinessType = null;

    /**
     * The URL of the seller's eBay Store page. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     *
     * @var string $storeURL
     */
    private $storeURL = null;

    /**
     * The name of the seller's eBay Store. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     *
     * @var string $storeName
     */
    private $storeName = null;

    /**
     * The URL for an eBay marketplace page that displays a list of the seller's active listings.
     *
     * @var string $sellerItemsURL
     */
    private $sellerItemsURL = null;

    /**
     * The URL to the eBay About Me page. Only returned if one exists for the eBay user.
     *
     * @var string $aboutMeURL
     */
    private $aboutMeURL = null;

    /**
     * The URL to the eBay user's home page (formerly called 'My World'). The home page shows Feedback statistics and has multiple links, such as a link to the seller's eBay Store and a link to the seller's other items.
     *
     * @var string $myWorldURL
     */
    private $myWorldURL = null;

    /**
     * The URL to the small version of the eBay user's profile image/logo. This field is only returned if available.
     *
     * @var string $myWorldSmallImage
     */
    private $myWorldSmallImage = null;

    /**
     * The URL to the large version of the eBay user's profile image/logo. This field is only returned if available.
     *
     * @var string $myWorldLargeImage
     */
    private $myWorldLargeImage = null;

    /**
     * The URL to a page where it shows any product reviews/ratings that have been given by the eBay user.
     *
     * @var string $reviewsAndGuidesURL
     */
    private $reviewsAndGuidesURL = null;

    /**
     * The URL to the eBay user's Feedback Profile page, which has full details of the eBay user's Feedback History, including Feedback Ratings, Feedback Comments, and Detailed Seller Ratings.
     *
     * @var string $feedbackDetailsURL
     */
    private $feedbackDetailsURL = null;

    /**
     * This value is the percentage value of a seller's Feedback entries that were marked by buyer's as 'Positive'. This number is calculated by dividing the total number of Feedback entries left for the seller (Positive, Neutral, and Negative) by only the seller's 'Positive' Feedback ratings.
     *
     * @var float $positiveFeedbackPercent
     */
    private $positiveFeedbackPercent = null;

    /**
     * The enumerated value in this field indicates the current Power Seller level of the eBay user. There are five Power Seller tiers, and each tier is based on average monthly sales. Available benefits and services to the seller vary for each tier.
     *  <br/><br/>
     *  This field is only returned if the eBay user is a Power Seller, and is not returned at all on some eBay marketplaces.
     *
     * @var string $sellerLevel
     */
    private $sellerLevel = null;

    /**
     * This boolean field is only returned if <code>true</code>, and indicates if the eBay user has Top-Rated Seller status. Top-Rated sellers are eligible to get the 'Top-Rated Plus' badge on all of their active listings (meeting Top-Rated Plus requirements), and qualify for other benefits such as Final Value Fee discounts and increased visibility in search results.
     *
     * @var bool $topRatedSeller
     */
    private $topRatedSeller = null;

    /**
     * Gets as userID
     *
     * The unique identifier of the eBay user. An eBay user ID is unique across all eBay marketplaces.
     *  <br />
     *  <br />
     *  This field is generally always returned, but it may be masked depending on the situation. For example, if anyone other than the seller of the listing runs a <b>GetItemStatus</b> call on an active auction listing with one or or bids, the <b>UserID</b> value will be masked something like this - <code>b***r</code>.
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
     * The unique identifier of the eBay user. An eBay user ID is unique across all eBay marketplaces.
     *  <br />
     *  <br />
     *  This field is generally always returned, but it may be masked depending on the situation. For example, if anyone other than the seller of the listing runs a <b>GetItemStatus</b> call on an active auction listing with one or or bids, the <b>UserID</b> value will be masked something like this - <code>b***r</code>.
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
     * Gets as feedbackPrivate
     *
     * This boolean value indicates whether or not the eBay user has chosen to make their Feedback Profile private in My eBay. A private Feedback Profile only means that individual Feedback comments are hidden, but other Feedback statistics will still be displayed, including the total Feedback score and the Positive Feedback Percentage.
     *  <br />
     *  <br />
     *  Sellers on eBay marketplaces do not have the option of making their Feedback Profile private, and they will be blocked from listing if they try to list items with a private Feedback Profile.
     *
     * @return bool
     */
    public function getFeedbackPrivate()
    {
        return $this->feedbackPrivate;
    }

    /**
     * Sets a new feedbackPrivate
     *
     * This boolean value indicates whether or not the eBay user has chosen to make their Feedback Profile private in My eBay. A private Feedback Profile only means that individual Feedback comments are hidden, but other Feedback statistics will still be displayed, including the total Feedback score and the Positive Feedback Percentage.
     *  <br />
     *  <br />
     *  Sellers on eBay marketplaces do not have the option of making their Feedback Profile private, and they will be blocked from listing if they try to list items with a private Feedback Profile.
     *
     * @param bool $feedbackPrivate
     * @return self
     */
    public function setFeedbackPrivate($feedbackPrivate)
    {
        $this->feedbackPrivate = $feedbackPrivate;
        return $this;
    }

    /**
     * Gets as feedbackRatingStar
     *
     * This enumeration value indicates the eBay user's Feedback Rating Star. A different colored star is associated with each Feedback Score range. For more details on the Feedback Score ranges (and colored stars associated with each range), see <b>FeedbackRatingStarCodeType</b>.
     *
     * @return string
     */
    public function getFeedbackRatingStar()
    {
        return $this->feedbackRatingStar;
    }

    /**
     * Sets a new feedbackRatingStar
     *
     * This enumeration value indicates the eBay user's Feedback Rating Star. A different colored star is associated with each Feedback Score range. For more details on the Feedback Score ranges (and colored stars associated with each range), see <b>FeedbackRatingStarCodeType</b>.
     *
     * @param string $feedbackRatingStar
     * @return self
     */
    public function setFeedbackRatingStar($feedbackRatingStar)
    {
        $this->feedbackRatingStar = $feedbackRatingStar;
        return $this;
    }

    /**
     * Gets as feedbackScore
     *
     * The aggregate Feedback score of an eBay user. A user's Feedback score is determined by the total number of Positive Feedback ratings minus the total number of Negative Feedback ratings the user has received. Any Neutral Feedback ratings do not affect the Feedback Score.
     *  <br>
     *  <br>
     *  A user's Feedback Score is a quantitative expression of the desirability of dealing with that user as a buyer or a seller. A buyer can leave Positive, Neutral, or Negative Feedback for the seller, but a seller can only leave Positive Feedback for the buyer.
     *
     * @return int
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }

    /**
     * Sets a new feedbackScore
     *
     * The aggregate Feedback score of an eBay user. A user's Feedback score is determined by the total number of Positive Feedback ratings minus the total number of Negative Feedback ratings the user has received. Any Neutral Feedback ratings do not affect the Feedback Score.
     *  <br>
     *  <br>
     *  A user's Feedback Score is a quantitative expression of the desirability of dealing with that user as a buyer or a seller. A buyer can leave Positive, Neutral, or Negative Feedback for the seller, but a seller can only leave Positive Feedback for the buyer.
     *
     * @param int $feedbackScore
     * @return self
     */
    public function setFeedbackScore($feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
        return $this;
    }

    /**
     * Gets as userAnonymized
     *
     * Indicates whether eBay has made this user's information anonymous.
     *  <br>
     *  <br>
     *  If <code>true</code>, certain other fields about this user are not returned, or their values are masked.
     *
     * @return bool
     */
    public function getUserAnonymized()
    {
        return $this->userAnonymized;
    }

    /**
     * Sets a new userAnonymized
     *
     * Indicates whether eBay has made this user's information anonymous.
     *  <br>
     *  <br>
     *  If <code>true</code>, certain other fields about this user are not returned, or their values are masked.
     *
     * @param bool $userAnonymized
     * @return self
     */
    public function setUserAnonymized($userAnonymized)
    {
        $this->userAnonymized = $userAnonymized;
        return $this;
    }

    /**
     * Gets as newUser
     *
     * If 'true', identifies a new user who has been a registered eBay user for 30 days or less. Always 'false' after the user has been registered for more than 30 days.
     *
     * @return bool
     */
    public function getNewUser()
    {
        return $this->newUser;
    }

    /**
     * Sets a new newUser
     *
     * If 'true', identifies a new user who has been a registered eBay user for 30 days or less. Always 'false' after the user has been registered for more than 30 days.
     *
     * @param bool $newUser
     * @return self
     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
        return $this;
    }

    /**
     * Gets as registrationDate
     *
     * This timestamp indicates when the user originally registered with eBay. If a bidder's user information is made anonymous, the value -99 is returned.
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets a new registrationDate
     *
     * This timestamp indicates when the user originally registered with eBay. If a bidder's user information is made anonymous, the value -99 is returned.
     *
     * @param \DateTime $registrationDate
     * @return self
     */
    public function setRegistrationDate(\DateTime $registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * Gets as registrationSite
     *
     * The enumeration value returned in this field indicates the eBay site on which the user first created an eBay account. If a bidder's user information is
     *  made anonymous, the value -99 is returned.
     *
     * @return string
     */
    public function getRegistrationSite()
    {
        return $this->registrationSite;
    }

    /**
     * Sets a new registrationSite
     *
     * The enumeration value returned in this field indicates the eBay site on which the user first created an eBay account. If a bidder's user information is
     *  made anonymous, the value -99 is returned.
     *
     * @param string $registrationSite
     * @return self
     */
    public function setRegistrationSite($registrationSite)
    {
        $this->registrationSite = $registrationSite;
        return $this;
    }

    /**
     * Gets as status
     *
     * The enumeration value returned in this field indicates the current status of the eBay user. A value of <code>Confirmed</code> is typically returned for an active eBay user.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The enumeration value returned in this field indicates the current status of the eBay user. A value of <code>Confirmed</code> is typically returned for an active eBay user.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as sellerBusinessType
     *
     * This enumeration value indicates the type of seller account held by the eBay user - a <code>Private</code> (non-business) account or a <code>Commercial</code> (business) account.
     *
     * @return string
     */
    public function getSellerBusinessType()
    {
        return $this->sellerBusinessType;
    }

    /**
     * Sets a new sellerBusinessType
     *
     * This enumeration value indicates the type of seller account held by the eBay user - a <code>Private</code> (non-business) account or a <code>Commercial</code> (business) account.
     *
     * @param string $sellerBusinessType
     * @return self
     */
    public function setSellerBusinessType($sellerBusinessType)
    {
        $this->sellerBusinessType = $sellerBusinessType;
        return $this;
    }

    /**
     * Gets as storeURL
     *
     * The URL of the seller's eBay Store page. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     *
     * @return string
     */
    public function getStoreURL()
    {
        return $this->storeURL;
    }

    /**
     * Sets a new storeURL
     *
     * The URL of the seller's eBay Store page. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     *
     * @param string $storeURL
     * @return self
     */
    public function setStoreURL($storeURL)
    {
        $this->storeURL = $storeURL;
        return $this;
    }

    /**
     * Gets as storeName
     *
     * The name of the seller's eBay Store. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Sets a new storeName
     *
     * The name of the seller's eBay Store. This field is only applicable to eBay sellers that have eBay Store subscriptions.
     *
     * @param string $storeName
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
        return $this;
    }

    /**
     * Gets as sellerItemsURL
     *
     * The URL for an eBay marketplace page that displays a list of the seller's active listings.
     *
     * @return string
     */
    public function getSellerItemsURL()
    {
        return $this->sellerItemsURL;
    }

    /**
     * Sets a new sellerItemsURL
     *
     * The URL for an eBay marketplace page that displays a list of the seller's active listings.
     *
     * @param string $sellerItemsURL
     * @return self
     */
    public function setSellerItemsURL($sellerItemsURL)
    {
        $this->sellerItemsURL = $sellerItemsURL;
        return $this;
    }

    /**
     * Gets as aboutMeURL
     *
     * The URL to the eBay About Me page. Only returned if one exists for the eBay user.
     *
     * @return string
     */
    public function getAboutMeURL()
    {
        return $this->aboutMeURL;
    }

    /**
     * Sets a new aboutMeURL
     *
     * The URL to the eBay About Me page. Only returned if one exists for the eBay user.
     *
     * @param string $aboutMeURL
     * @return self
     */
    public function setAboutMeURL($aboutMeURL)
    {
        $this->aboutMeURL = $aboutMeURL;
        return $this;
    }

    /**
     * Gets as myWorldURL
     *
     * The URL to the eBay user's home page (formerly called 'My World'). The home page shows Feedback statistics and has multiple links, such as a link to the seller's eBay Store and a link to the seller's other items.
     *
     * @return string
     */
    public function getMyWorldURL()
    {
        return $this->myWorldURL;
    }

    /**
     * Sets a new myWorldURL
     *
     * The URL to the eBay user's home page (formerly called 'My World'). The home page shows Feedback statistics and has multiple links, such as a link to the seller's eBay Store and a link to the seller's other items.
     *
     * @param string $myWorldURL
     * @return self
     */
    public function setMyWorldURL($myWorldURL)
    {
        $this->myWorldURL = $myWorldURL;
        return $this;
    }

    /**
     * Gets as myWorldSmallImage
     *
     * The URL to the small version of the eBay user's profile image/logo. This field is only returned if available.
     *
     * @return string
     */
    public function getMyWorldSmallImage()
    {
        return $this->myWorldSmallImage;
    }

    /**
     * Sets a new myWorldSmallImage
     *
     * The URL to the small version of the eBay user's profile image/logo. This field is only returned if available.
     *
     * @param string $myWorldSmallImage
     * @return self
     */
    public function setMyWorldSmallImage($myWorldSmallImage)
    {
        $this->myWorldSmallImage = $myWorldSmallImage;
        return $this;
    }

    /**
     * Gets as myWorldLargeImage
     *
     * The URL to the large version of the eBay user's profile image/logo. This field is only returned if available.
     *
     * @return string
     */
    public function getMyWorldLargeImage()
    {
        return $this->myWorldLargeImage;
    }

    /**
     * Sets a new myWorldLargeImage
     *
     * The URL to the large version of the eBay user's profile image/logo. This field is only returned if available.
     *
     * @param string $myWorldLargeImage
     * @return self
     */
    public function setMyWorldLargeImage($myWorldLargeImage)
    {
        $this->myWorldLargeImage = $myWorldLargeImage;
        return $this;
    }

    /**
     * Gets as reviewsAndGuidesURL
     *
     * The URL to a page where it shows any product reviews/ratings that have been given by the eBay user.
     *
     * @return string
     */
    public function getReviewsAndGuidesURL()
    {
        return $this->reviewsAndGuidesURL;
    }

    /**
     * Sets a new reviewsAndGuidesURL
     *
     * The URL to a page where it shows any product reviews/ratings that have been given by the eBay user.
     *
     * @param string $reviewsAndGuidesURL
     * @return self
     */
    public function setReviewsAndGuidesURL($reviewsAndGuidesURL)
    {
        $this->reviewsAndGuidesURL = $reviewsAndGuidesURL;
        return $this;
    }

    /**
     * Gets as feedbackDetailsURL
     *
     * The URL to the eBay user's Feedback Profile page, which has full details of the eBay user's Feedback History, including Feedback Ratings, Feedback Comments, and Detailed Seller Ratings.
     *
     * @return string
     */
    public function getFeedbackDetailsURL()
    {
        return $this->feedbackDetailsURL;
    }

    /**
     * Sets a new feedbackDetailsURL
     *
     * The URL to the eBay user's Feedback Profile page, which has full details of the eBay user's Feedback History, including Feedback Ratings, Feedback Comments, and Detailed Seller Ratings.
     *
     * @param string $feedbackDetailsURL
     * @return self
     */
    public function setFeedbackDetailsURL($feedbackDetailsURL)
    {
        $this->feedbackDetailsURL = $feedbackDetailsURL;
        return $this;
    }

    /**
     * Gets as positiveFeedbackPercent
     *
     * This value is the percentage value of a seller's Feedback entries that were marked by buyer's as 'Positive'. This number is calculated by dividing the total number of Feedback entries left for the seller (Positive, Neutral, and Negative) by only the seller's 'Positive' Feedback ratings.
     *
     * @return float
     */
    public function getPositiveFeedbackPercent()
    {
        return $this->positiveFeedbackPercent;
    }

    /**
     * Sets a new positiveFeedbackPercent
     *
     * This value is the percentage value of a seller's Feedback entries that were marked by buyer's as 'Positive'. This number is calculated by dividing the total number of Feedback entries left for the seller (Positive, Neutral, and Negative) by only the seller's 'Positive' Feedback ratings.
     *
     * @param float $positiveFeedbackPercent
     * @return self
     */
    public function setPositiveFeedbackPercent($positiveFeedbackPercent)
    {
        $this->positiveFeedbackPercent = $positiveFeedbackPercent;
        return $this;
    }

    /**
     * Gets as sellerLevel
     *
     * The enumerated value in this field indicates the current Power Seller level of the eBay user. There are five Power Seller tiers, and each tier is based on average monthly sales. Available benefits and services to the seller vary for each tier.
     *  <br/><br/>
     *  This field is only returned if the eBay user is a Power Seller, and is not returned at all on some eBay marketplaces.
     *
     * @return string
     */
    public function getSellerLevel()
    {
        return $this->sellerLevel;
    }

    /**
     * Sets a new sellerLevel
     *
     * The enumerated value in this field indicates the current Power Seller level of the eBay user. There are five Power Seller tiers, and each tier is based on average monthly sales. Available benefits and services to the seller vary for each tier.
     *  <br/><br/>
     *  This field is only returned if the eBay user is a Power Seller, and is not returned at all on some eBay marketplaces.
     *
     * @param string $sellerLevel
     * @return self
     */
    public function setSellerLevel($sellerLevel)
    {
        $this->sellerLevel = $sellerLevel;
        return $this;
    }

    /**
     * Gets as topRatedSeller
     *
     * This boolean field is only returned if <code>true</code>, and indicates if the eBay user has Top-Rated Seller status. Top-Rated sellers are eligible to get the 'Top-Rated Plus' badge on all of their active listings (meeting Top-Rated Plus requirements), and qualify for other benefits such as Final Value Fee discounts and increased visibility in search results.
     *
     * @return bool
     */
    public function getTopRatedSeller()
    {
        return $this->topRatedSeller;
    }

    /**
     * Sets a new topRatedSeller
     *
     * This boolean field is only returned if <code>true</code>, and indicates if the eBay user has Top-Rated Seller status. Top-Rated sellers are eligible to get the 'Top-Rated Plus' badge on all of their active listings (meeting Top-Rated Plus requirements), and qualify for other benefits such as Final Value Fee discounts and increased visibility in search results.
     *
     * @param bool $topRatedSeller
     * @return self
     */
    public function setTopRatedSeller($topRatedSeller)
    {
        $this->topRatedSeller = $topRatedSeller;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getFeedbackPrivate();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackPrivate", $value);
        }
        $value = $this->getFeedbackRatingStar();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackRatingStar", $value);
        }
        $value = $this->getFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackScore", $value);
        }
        $value = $this->getUserAnonymized();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserAnonymized", $value);
        }
        $value = $this->getNewUser();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewUser", $value);
        }
        $value = $this->getRegistrationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegistrationDate", $value);
        }
        $value = $this->getRegistrationSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegistrationSite", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getSellerBusinessType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerBusinessType", $value);
        }
        $value = $this->getStoreURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreURL", $value);
        }
        $value = $this->getStoreName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StoreName", $value);
        }
        $value = $this->getSellerItemsURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerItemsURL", $value);
        }
        $value = $this->getAboutMeURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AboutMeURL", $value);
        }
        $value = $this->getMyWorldURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MyWorldURL", $value);
        }
        $value = $this->getMyWorldSmallImage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MyWorldSmallImage", $value);
        }
        $value = $this->getMyWorldLargeImage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MyWorldLargeImage", $value);
        }
        $value = $this->getReviewsAndGuidesURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviewsAndGuidesURL", $value);
        }
        $value = $this->getFeedbackDetailsURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackDetailsURL", $value);
        }
        $value = $this->getPositiveFeedbackPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPercent", $value);
        }
        $value = $this->getSellerLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerLevel", $value);
        }
        $value = $this->getTopRatedSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TopRatedSeller", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackPrivate');
        if (null !== $value) {
            $this->setFeedbackPrivate(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackRatingStar');
        if (null !== $value) {
            $this->setFeedbackRatingStar($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore');
        if (null !== $value) {
            $this->setFeedbackScore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserAnonymized');
        if (null !== $value) {
            $this->setUserAnonymized(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewUser');
        if (null !== $value) {
            $this->setNewUser(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegistrationDate');
        if (null !== $value) {
            $this->setRegistrationDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegistrationSite');
        if (null !== $value) {
            $this->setRegistrationSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerBusinessType');
        if (null !== $value) {
            $this->setSellerBusinessType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreURL');
        if (null !== $value) {
            $this->setStoreURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoreName');
        if (null !== $value) {
            $this->setStoreName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerItemsURL');
        if (null !== $value) {
            $this->setSellerItemsURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AboutMeURL');
        if (null !== $value) {
            $this->setAboutMeURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MyWorldURL');
        if (null !== $value) {
            $this->setMyWorldURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MyWorldSmallImage');
        if (null !== $value) {
            $this->setMyWorldSmallImage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MyWorldLargeImage');
        if (null !== $value) {
            $this->setMyWorldLargeImage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviewsAndGuidesURL');
        if (null !== $value) {
            $this->setReviewsAndGuidesURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackDetailsURL');
        if (null !== $value) {
            $this->setFeedbackDetailsURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPercent');
        if (null !== $value) {
            $this->setPositiveFeedbackPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerLevel');
        if (null !== $value) {
            $this->setSellerLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedSeller');
        if (null !== $value) {
            $this->setTopRatedSeller(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
