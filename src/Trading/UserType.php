<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UserType
 *
 * Type to contain the data for one eBay user. Depending on the context, the user
 *  might be the seller or the buyer on either side of an order, or the bidder or winning bidder
 *  in a listing. An object of this type is returned by a number of calls, including
 *  the <b>GetUser</b> call.
 * XSD Type: UserType
 */
class UserType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * If <code>true</code>, indicates that the user has set up an About Me page.
     *
     * @var bool $aboutMePage
     */
    private $aboutMePage = null;

    /**
     * Unique identifier for the user that does not change when the eBay user name
     *  is changed. Use when an application needs to associate a new eBay user name
     *  with the corresponding eBay user.
     *
     * @var string $eIASToken
     */
    private $eIASToken = null;

    /**
     * Email address for the user.
     *  Please see the links below to the topics related to anonymous user information
     *  and static email addresses.
     *  You cannot retrieve an email address for any user
     *  with whom you do not have an order relationship, regardless of site.
     *  <br/><br/>
     *  An email address of another user is only returned
     *  if you and the other user are in an order relationship,
     *  within a certain time of order line item creation
     *  (although this limitation isn't applicable to the <b>GetAllBidders</b> call
     *  in the case of motor vehicles categories.)
     *  Based on Trust and Safety policies, the time is
     *  unspecified and can vary by site.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that
     *  bidder, and to the seller of an item that the user is bidding on.
     *  <br><br>
     *  For the <b>GetOrders</b> call, the buyer's email address will be returned (to the seller only) for orders less than two weeks old, but for orders that occurred more than two weeks in the past, the buyer's email address will no longer be returned. This <b>Email</b> field will still be returned, but 'dummy data', such as <code>Invalid Request</code> will replace the actual email address.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <b>GetItemTransactions</b> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @var string $email
     */
    private $email = null;

    /**
     * The aggregate feedback score for a user. A user's feedback score is the net
     *  positive feedback minus the net negative feedback left for the user.
     *  Feedback scores are a quantitative expression of the desirability of dealing
     *  with a user as a buyer or a seller in either side of an order.
     *  <br/><br/>
     *  Each order line item can
     *  result in one feedback entry for a given user (the buyer can leave feedback
     *  for the seller, and the seller can leave feedback for the buyer.). That one
     *  feedback can be positive, negative, or neutral. The aggregated feedback
     *  counts for a particular user represent that user's overall feedback score
     *  (referred to as a "feedback rating" on the eBay site).
     *  <br/><br/>
     *  If the user has
     *  chosen to make their feedback private and that user is not the user
     *  identified in the request's authentication token, <b>FeedbackScore</b> is not
     *  returned and <b>FeedbackPrivate</b> is returned with a value of <code>true</code>.
     *  <br/><br/>
     *  In <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b>, feedback information (<b>FeedbackScore</b>
     *  and <b>FeedbackRatingStar</b>) is returned in <b>BidList.ItemArray.Item.Seller</b>. For
     *  <b>GetMyeBayBuying</b>, the feedback score of each seller with an item having
     *  received a bid from the buyer is returned. For <b>GetMyeBaySelling</b>, the
     *  feedback score of the seller is returned. <br>
     *  <br>
     *  <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> also return feedback information
     *  (<b>FeedbackScore</b> and <b>FeedbackRatingStar</b>) in
     *  <b>BidList.ItemArray.Item.SellingStatus.HighBidder</b>. <b>GetMyeBayBuying</b> returns
     *  feedback information on the high bidder of each item the buyer is bidding
     *  on. <b>GetMyeBaySelling</b> returns feedback information on the high bidder of each
     *  item the seller is selling.<br>
     *  <br>
     *  Since a bidder's user info is anonymous, the real feedback score will
     *  be returned only to that bidder, and to the seller of an item that the
     *  user is bidding on. For all other users, the value -99 is returned.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Score for the user is returned to the buyer or seller, but a dummy value of <code>0</code> will be returned to all third parties.
     *
     * @var int $feedbackScore
     */
    private $feedbackScore = null;

    /**
     * Total count of negative Feedback entries received by the user, including weekly repeats.
     *
     * @var int $uniqueNegativeFeedbackCount
     */
    private $uniqueNegativeFeedbackCount = null;

    /**
     * Total count of positive Feedback entries received by the user, including
     *  weekly repeats. This contains the aggregate feedback score for a user. A member's
     *  feedback score is the net positive feedback minus the net negative feedback
     *  left for the member.
     *  <br/><br/>
     *  Feedback scores are a quantitative expression of the
     *  desirability of dealing with that person as a Buyer or a Seller on either side of an order. Each order line item can result in one feedback entry for
     *  a given user (the buyer can leave feedback for the seller, and the seller
     *  can leave feedback for the buyer).
     *  <br/><br/>
     *  Feedback can be positive,
     *  negative, or neutral. The aggregated feedback counts for a particular user
     *  represent that user's overall feedback score (referred to as a "feedback
     *  rating" on the eBay site). This rating is commonly expressed as the eBay
     *  Feedback score for the user.
     *
     * @var int $uniquePositiveFeedbackCount
     */
    private $uniquePositiveFeedbackCount = null;

    /**
     * Percent of total feedback that is positive. For example, if the member has
     *  50 feedbacks, where 49 are positive and 1 is neutral or negative, the
     *  positive feedback percent could be 98.0. The value uses a max precision of 4
     *  and a scale of 1. If the user has feedback, this value can be returned
     *  regardless of whether the member has chosen to make their feedback private.
     *  Not returned if the user has no feedback.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Positive Feedback Percentage value for the user is returned to the buyer or seller, but a dummy value of <code>0.0</code> will be returned to all third parties.
     *
     * @var float $positiveFeedbackPercent
     */
    private $positiveFeedbackPercent = null;

    /**
     * Indicates whether the user has chosen to make their feedback score and
     *  feedback details private (hidden from other users). The percentage
     *  of positive feedback can still be returned, even if other feedback details
     *  are private.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to
     *  that bidder, and to the seller of an item that the user is bidding on.
     *
     * @var bool $feedbackPrivate
     */
    private $feedbackPrivate = null;

    /**
     * Visual indicator of user's feedback score. See <b>FeedbackRatingStarCodeType</b> for
     *  specific values.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Rating Star value for the user is returned to the buyer or seller, but a dummy value of <code>None</code> will be returned to all third parties.
     *
     * @var string $feedbackRatingStar
     */
    private $feedbackRatingStar = null;

    /**
     * Indicates whether the user has been verified. For more information
     *  about the ID Verify program, see:
     *  <a href="http://pages.ebay.com/help/policies/identity-idverify.html">Protecting your account</a>
     *
     * @var bool $iDVerified
     */
    private $iDVerified = null;

    /**
     * If <code>true</code>, indicates that the user is in good standing with eBay.
     *
     * @var bool $eBayGoodStanding
     */
    private $eBayGoodStanding = null;

    /**
     * If <code>true</code>, identifies a new user who has been a registered eBay user for 30 days
     *  or less. This is always <code>false</code> after the user has been registered for more than 30
     *  days. Does not indicate an ID change (see <b>UserIdChanged</b>).
     *
     * @var bool $newUser
     */
    private $newUser = null;

    /**
     * This container consists of the Registration address for the eBay user making the call.<br>
     *  <br>
     *  <b>GetUser:</b> eBay returns complete
     *  <b>RegistrationAddress</b> details (including Phone), as applicable to the
     *  registration site for the eBay user making the call.
     *  <br><br>
     *  <b>GetItem and GetSellerTransactions:</b> <b>RegistrationAddress</b> for another user
     *  (except for Phone) is only returned if you have an order relationship
     *  with that user AND that user is registered on DE/AT/CH, regardless of your
     *  registration site and the site to which you send the request. For example,
     *  the seller can see the buyer's registration address if the buyer is
     *  registered on DE/AT/CH, or the buyer can see the seller's registration
     *  address if the seller is registered on DE/AT/CH. (The buyer and seller won't
     *  see their own registration addresses in <b>GetItem</b>.)
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * Indicates the date the specified user originally registered with eBay.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *
     * @var \DateTime $registrationDate
     */
    private $registrationDate = null;

    /**
     * eBay site the user is registered with.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to
     *  that bidder, and to the seller of an item that the user is bidding on.
     *
     * @var string $site
     */
    private $site = null;

    /**
     * Indicates the user's registration/user status.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Unique eBay user ID for the user.<br>
     *  <br>
     *  Since a bidder's user info is anonymous, this tag contains the actual
     *  value of an ID only for that bidder, and for the seller of an item that the user is
     *  bidding on. For other users, the actual value is replaced by an
     *  anonymous value, according to these rules:
     *  <br><br>
     *  When bidding on items, <b>UserID</b> is replaced with the
     *  value "a****b" where a and b are random characters from the <b>UserID</b>. For
     *  example, if the <b>UserID</b> = <code>IBidALot</code>, it might be displayed as, "I****A".
     *  <br/><br/>
     *  <span class="tablenote"><b>Important: </b>
     *  In this format, the anonymous bidder ID can change for each
     *  auction.
     *  </span>
     *  For <b>GetMyeBayBuying</b> only, when bidding on items: <b>UserID</b>
     *  is replaced with the value "a****b" where a and b are random characters from
     *  the <b>UserID</b>.
     *  <br><br>
     *  When bidding on items listed on the Philippines site: <b>UserID</b> is replaced
     *  with the value "Bidder X" where X is a number indicating the order of that
     *  user's first bid. For example, if the user was the third bidder,
     *  <b>UserID</b> = <code>Bidder 3</code>.
     *  Note that in this Philippines site format, the anonymous bidder ID stays the same for a given
     *  auction, but is different for different auctions. For example, a bidder who
     *  is the third and then the seventh bidder in an auction will be listed for
     *  both bids as "Bidder 3". However, if that same bidder is the first bidder on
     *  a different auction, the bidder will be listed for that auction as "Bidder
     *  1", not "Bidder 3".
     *  <br><br>
     *  For <b>GetMyeBayBuying</b> only, when bidding on items listed on the UK and AU sites:
     *  <b>UserID</b> is replaced with the string "High Bidder".
     *  <br><br>
     *  For <b>PlaceOffer</b>, see also <b>SellingStatus.HighBidder</b>.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * If <code>true</code>, identifies a user whose ID has changed within the last 30 days. Does not
     *  indicate a new user (see <b>NewUser</b>).
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @var bool $userIDChanged
     */
    private $userIDChanged = null;

    /**
     * Date and time the user's data was last changed (in GMT).
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @var \DateTime $userIDLastChanged
     */
    private $userIDLastChanged = null;

    /**
     * Indicates whether or not the user is subject to VAT.
     *  Users who have registered with eBay as VAT-exempt are not
     *  subject to VAT. See documentation on Value-Added Tax (VAT).
     *
     * @var string $vATStatus
     */
    private $vATStatus = null;

    /**
     * Contains information about the user as a buyer, such as
     *  the shipping address. See <b>BuyerType</b> for its child elements.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyerType $buyerInfo
     */
    private $buyerInfo = null;

    /**
     * Contains information about a seller, including listing settings, listing
     *  preferences, seller rankings, and seller type.
     *  <br><br>
     *  This field is replaced by the <b>SellerBusinessType</b>
     *  field if the user is a business seller with a site
     *  ID of 77 (Germany), ID of 3 (UK), ID of 205 (Ireland) or ID of 0 (US Motors).
     *  <br><br>
     *  See <b>SellerType</b> or <b>SellerBusinessCodeType</b> for the child elements.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerType $sellerInfo
     */
    private $sellerInfo = null;

    /**
     * This field indicates whether the user's account is enabled for buying and selling
     *  (indicated by <b>FullMarketPlaceParticipant</b>) on eBay, or if the account is a Partially
     *  Provisioned Account (indicated by <b>Shopper</b>) without selling and buying privileges on
     *  eBay.
     *
     * @var string $businessRole
     */
    private $businessRole = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CharityIDType[] $charityAffiliations
     */
    private $charityAffiliations = null;

    /**
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @var string $payPalAccountLevel
     */
    private $payPalAccountLevel = null;

    /**
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @var string $payPalAccountType
     */
    private $payPalAccountType = null;

    /**
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @var string $payPalAccountStatus
     */
    private $payPalAccountStatus = null;

    /**
     * Specifies the subscription level for a user.
     *
     * @var string[] $userSubscription
     */
    private $userSubscription = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var bool $siteVerified
     */
    private $siteVerified = null;

    /**
     * This field is deprecated.
     *
     * @var string[] $skypeID
     */
    private $skypeID = [
        
    ];

    /**
     * Indicates whether a user has read-only access to the eBay Wiki (<code>true</code>)
     *  or whether the user is able contribute or edit articles on the eBay Wiki
     *  (<code>false</code>). By default, all registered eBay users have access to contribute and
     *  edit articles on the eBay Wiki. All content contributed to the eBay Wiki is
     *  subject to the Community Content Policy.
     *
     * @var bool $eBayWikiReadOnly
     */
    private $eBayWikiReadOnly = null;

    /**
     * TUV level is a number allocated to a user based on various characteristics
     *  such as buyer, seller, new buyer, new seller, high risk, or bid limit.
     *  Applies to eBay Motors Pro applications only.
     *
     * @var int $tUVLevel
     */
    private $tUVLevel = null;

    /**
     * The value added tax identifier (<b>VATID</b>) is applicable to the VAT-enabled
     *  sites.
     *  Applies to eBay Motors Pro applications only.
     *
     * @var string $vATID
     */
    private $vATID = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellerPaymentMethod
     */
    private $sellerPaymentMethod = null;

    /**
     * Contains information about the user as a bidder on a certain
     *  item. Returned by <b>GetAllBidders</b> if <b>IncludeBiddingSummary</b> =
     *  <code>true</code> is included in the request.
     *
     * @var \Nogrod\eBaySDK\Trading\BiddingSummaryType $biddingSummary
     */
    private $biddingSummary = null;

    /**
     * Indicates whether or not the User container has been made
     *  anonymous. If <code>true</code>, some elements in the User container have
     *  either been removed, or had their values changed to remove
     *  identifying characteristics. If false, all expected elements
     *  are returned, and no values are changed.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag is returned as false
     *  only to the bidder, and to the seller of an item that the user is bidding
     *  on. For all other users, this tag is returned as <code>true</code>.
     *
     * @var bool $userAnonymized
     */
    private $userAnonymized = null;

    /**
     * Total count of neutral Feedback entries received by the user, including weekly repeats.
     *
     * @var int $uniqueNeutralFeedbackCount
     */
    private $uniqueNeutralFeedbackCount = null;

    /**
     * Reserved for internal or future use.
     *
     * @var bool $enterpriseSeller
     */
    private $enterpriseSeller = null;

    /**
     * When a user has their billing option set to <code>email</code>, they can include
     *  this element in a <b>GetUser</b> request to retrieve their own email bills.
     *
     * @var string $billingEmail
     */
    private $billingEmail = null;

    /**
     * This flag indicates whether or not the user is eligible to sell items on eBay. This field is only returned if the <b>IncludeFeatureEligibility</b> flag is included in the call request and set to <code>true</code>.
     *
     * @var bool $qualifiesForSelling
     */
    private $qualifiesForSelling = null;

    /**
     * Contains the static email address of an eBay member, used within the "reply to"
     *  email address when the eBay member sends a message.
     *  (Each eBay member is assigned a static alias. The alias is
     *  used within a static email address.)
     *
     * @var string $staticAlias
     */
    private $staticAlias = null;

    /**
     * Contains the shipping address of a bidder who has made a Best Offer for an item.
     *  <br/><br/>
     *  You cannot retrieve a shipping address for any user with whom you do not have an order relationship, regardless of site. The shipping address of another user is returned only if you and the other user are in an order relationship, within a certain time of order line item creation.
     *  <br><br>
     *  Because a bidder's user information is anonymous, this container is returned only to that bidder, and to the seller of an item that the user is bidding on.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program, and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable membership programs.
     *
     * @var \Nogrod\eBaySDK\Trading\MembershipDetailType[] $membership
     */
    private $membership = null;

    /**
     * The first name of the buyer who purchased the order.
     *
     * @var string $userFirstName
     */
    private $userFirstName = null;

    /**
     * The last name of the buyer who purchased the order.
     *
     * @var string $userLastName
     */
    private $userLastName = null;

    /**
     * Gets as aboutMePage
     *
     * If <code>true</code>, indicates that the user has set up an About Me page.
     *
     * @return bool
     */
    public function getAboutMePage()
    {
        return $this->aboutMePage;
    }

    /**
     * Sets a new aboutMePage
     *
     * If <code>true</code>, indicates that the user has set up an About Me page.
     *
     * @param bool $aboutMePage
     * @return self
     */
    public function setAboutMePage($aboutMePage)
    {
        $this->aboutMePage = $aboutMePage;
        return $this;
    }

    /**
     * Gets as eIASToken
     *
     * Unique identifier for the user that does not change when the eBay user name
     *  is changed. Use when an application needs to associate a new eBay user name
     *  with the corresponding eBay user.
     *
     * @return string
     */
    public function getEIASToken()
    {
        return $this->eIASToken;
    }

    /**
     * Sets a new eIASToken
     *
     * Unique identifier for the user that does not change when the eBay user name
     *  is changed. Use when an application needs to associate a new eBay user name
     *  with the corresponding eBay user.
     *
     * @param string $eIASToken
     * @return self
     */
    public function setEIASToken($eIASToken)
    {
        $this->eIASToken = $eIASToken;
        return $this;
    }

    /**
     * Gets as email
     *
     * Email address for the user.
     *  Please see the links below to the topics related to anonymous user information
     *  and static email addresses.
     *  You cannot retrieve an email address for any user
     *  with whom you do not have an order relationship, regardless of site.
     *  <br/><br/>
     *  An email address of another user is only returned
     *  if you and the other user are in an order relationship,
     *  within a certain time of order line item creation
     *  (although this limitation isn't applicable to the <b>GetAllBidders</b> call
     *  in the case of motor vehicles categories.)
     *  Based on Trust and Safety policies, the time is
     *  unspecified and can vary by site.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that
     *  bidder, and to the seller of an item that the user is bidding on.
     *  <br><br>
     *  For the <b>GetOrders</b> call, the buyer's email address will be returned (to the seller only) for orders less than two weeks old, but for orders that occurred more than two weeks in the past, the buyer's email address will no longer be returned. This <b>Email</b> field will still be returned, but 'dummy data', such as <code>Invalid Request</code> will replace the actual email address.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <b>GetItemTransactions</b> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email address for the user.
     *  Please see the links below to the topics related to anonymous user information
     *  and static email addresses.
     *  You cannot retrieve an email address for any user
     *  with whom you do not have an order relationship, regardless of site.
     *  <br/><br/>
     *  An email address of another user is only returned
     *  if you and the other user are in an order relationship,
     *  within a certain time of order line item creation
     *  (although this limitation isn't applicable to the <b>GetAllBidders</b> call
     *  in the case of motor vehicles categories.)
     *  Based on Trust and Safety policies, the time is
     *  unspecified and can vary by site.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that
     *  bidder, and to the seller of an item that the user is bidding on.
     *  <br><br>
     *  For the <b>GetOrders</b> call, the buyer's email address will be returned (to the seller only) for orders less than two weeks old, but for orders that occurred more than two weeks in the past, the buyer's email address will no longer be returned. This <b>Email</b> field will still be returned, but 'dummy data', such as <code>Invalid Request</code> will replace the actual email address.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <b>GetItemTransactions</b> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as feedbackScore
     *
     * The aggregate feedback score for a user. A user's feedback score is the net
     *  positive feedback minus the net negative feedback left for the user.
     *  Feedback scores are a quantitative expression of the desirability of dealing
     *  with a user as a buyer or a seller in either side of an order.
     *  <br/><br/>
     *  Each order line item can
     *  result in one feedback entry for a given user (the buyer can leave feedback
     *  for the seller, and the seller can leave feedback for the buyer.). That one
     *  feedback can be positive, negative, or neutral. The aggregated feedback
     *  counts for a particular user represent that user's overall feedback score
     *  (referred to as a "feedback rating" on the eBay site).
     *  <br/><br/>
     *  If the user has
     *  chosen to make their feedback private and that user is not the user
     *  identified in the request's authentication token, <b>FeedbackScore</b> is not
     *  returned and <b>FeedbackPrivate</b> is returned with a value of <code>true</code>.
     *  <br/><br/>
     *  In <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b>, feedback information (<b>FeedbackScore</b>
     *  and <b>FeedbackRatingStar</b>) is returned in <b>BidList.ItemArray.Item.Seller</b>. For
     *  <b>GetMyeBayBuying</b>, the feedback score of each seller with an item having
     *  received a bid from the buyer is returned. For <b>GetMyeBaySelling</b>, the
     *  feedback score of the seller is returned. <br>
     *  <br>
     *  <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> also return feedback information
     *  (<b>FeedbackScore</b> and <b>FeedbackRatingStar</b>) in
     *  <b>BidList.ItemArray.Item.SellingStatus.HighBidder</b>. <b>GetMyeBayBuying</b> returns
     *  feedback information on the high bidder of each item the buyer is bidding
     *  on. <b>GetMyeBaySelling</b> returns feedback information on the high bidder of each
     *  item the seller is selling.<br>
     *  <br>
     *  Since a bidder's user info is anonymous, the real feedback score will
     *  be returned only to that bidder, and to the seller of an item that the
     *  user is bidding on. For all other users, the value -99 is returned.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Score for the user is returned to the buyer or seller, but a dummy value of <code>0</code> will be returned to all third parties.
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
     * The aggregate feedback score for a user. A user's feedback score is the net
     *  positive feedback minus the net negative feedback left for the user.
     *  Feedback scores are a quantitative expression of the desirability of dealing
     *  with a user as a buyer or a seller in either side of an order.
     *  <br/><br/>
     *  Each order line item can
     *  result in one feedback entry for a given user (the buyer can leave feedback
     *  for the seller, and the seller can leave feedback for the buyer.). That one
     *  feedback can be positive, negative, or neutral. The aggregated feedback
     *  counts for a particular user represent that user's overall feedback score
     *  (referred to as a "feedback rating" on the eBay site).
     *  <br/><br/>
     *  If the user has
     *  chosen to make their feedback private and that user is not the user
     *  identified in the request's authentication token, <b>FeedbackScore</b> is not
     *  returned and <b>FeedbackPrivate</b> is returned with a value of <code>true</code>.
     *  <br/><br/>
     *  In <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b>, feedback information (<b>FeedbackScore</b>
     *  and <b>FeedbackRatingStar</b>) is returned in <b>BidList.ItemArray.Item.Seller</b>. For
     *  <b>GetMyeBayBuying</b>, the feedback score of each seller with an item having
     *  received a bid from the buyer is returned. For <b>GetMyeBaySelling</b>, the
     *  feedback score of the seller is returned. <br>
     *  <br>
     *  <b>GetMyeBayBuying</b> and <b>GetMyeBaySelling</b> also return feedback information
     *  (<b>FeedbackScore</b> and <b>FeedbackRatingStar</b>) in
     *  <b>BidList.ItemArray.Item.SellingStatus.HighBidder</b>. <b>GetMyeBayBuying</b> returns
     *  feedback information on the high bidder of each item the buyer is bidding
     *  on. <b>GetMyeBaySelling</b> returns feedback information on the high bidder of each
     *  item the seller is selling.<br>
     *  <br>
     *  Since a bidder's user info is anonymous, the real feedback score will
     *  be returned only to that bidder, and to the seller of an item that the
     *  user is bidding on. For all other users, the value -99 is returned.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Score for the user is returned to the buyer or seller, but a dummy value of <code>0</code> will be returned to all third parties.
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
     * Gets as uniqueNegativeFeedbackCount
     *
     * Total count of negative Feedback entries received by the user, including weekly repeats.
     *
     * @return int
     */
    public function getUniqueNegativeFeedbackCount()
    {
        return $this->uniqueNegativeFeedbackCount;
    }

    /**
     * Sets a new uniqueNegativeFeedbackCount
     *
     * Total count of negative Feedback entries received by the user, including weekly repeats.
     *
     * @param int $uniqueNegativeFeedbackCount
     * @return self
     */
    public function setUniqueNegativeFeedbackCount($uniqueNegativeFeedbackCount)
    {
        $this->uniqueNegativeFeedbackCount = $uniqueNegativeFeedbackCount;
        return $this;
    }

    /**
     * Gets as uniquePositiveFeedbackCount
     *
     * Total count of positive Feedback entries received by the user, including
     *  weekly repeats. This contains the aggregate feedback score for a user. A member's
     *  feedback score is the net positive feedback minus the net negative feedback
     *  left for the member.
     *  <br/><br/>
     *  Feedback scores are a quantitative expression of the
     *  desirability of dealing with that person as a Buyer or a Seller on either side of an order. Each order line item can result in one feedback entry for
     *  a given user (the buyer can leave feedback for the seller, and the seller
     *  can leave feedback for the buyer).
     *  <br/><br/>
     *  Feedback can be positive,
     *  negative, or neutral. The aggregated feedback counts for a particular user
     *  represent that user's overall feedback score (referred to as a "feedback
     *  rating" on the eBay site). This rating is commonly expressed as the eBay
     *  Feedback score for the user.
     *
     * @return int
     */
    public function getUniquePositiveFeedbackCount()
    {
        return $this->uniquePositiveFeedbackCount;
    }

    /**
     * Sets a new uniquePositiveFeedbackCount
     *
     * Total count of positive Feedback entries received by the user, including
     *  weekly repeats. This contains the aggregate feedback score for a user. A member's
     *  feedback score is the net positive feedback minus the net negative feedback
     *  left for the member.
     *  <br/><br/>
     *  Feedback scores are a quantitative expression of the
     *  desirability of dealing with that person as a Buyer or a Seller on either side of an order. Each order line item can result in one feedback entry for
     *  a given user (the buyer can leave feedback for the seller, and the seller
     *  can leave feedback for the buyer).
     *  <br/><br/>
     *  Feedback can be positive,
     *  negative, or neutral. The aggregated feedback counts for a particular user
     *  represent that user's overall feedback score (referred to as a "feedback
     *  rating" on the eBay site). This rating is commonly expressed as the eBay
     *  Feedback score for the user.
     *
     * @param int $uniquePositiveFeedbackCount
     * @return self
     */
    public function setUniquePositiveFeedbackCount($uniquePositiveFeedbackCount)
    {
        $this->uniquePositiveFeedbackCount = $uniquePositiveFeedbackCount;
        return $this;
    }

    /**
     * Gets as positiveFeedbackPercent
     *
     * Percent of total feedback that is positive. For example, if the member has
     *  50 feedbacks, where 49 are positive and 1 is neutral or negative, the
     *  positive feedback percent could be 98.0. The value uses a max precision of 4
     *  and a scale of 1. If the user has feedback, this value can be returned
     *  regardless of whether the member has chosen to make their feedback private.
     *  Not returned if the user has no feedback.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Positive Feedback Percentage value for the user is returned to the buyer or seller, but a dummy value of <code>0.0</code> will be returned to all third parties.
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
     * Percent of total feedback that is positive. For example, if the member has
     *  50 feedbacks, where 49 are positive and 1 is neutral or negative, the
     *  positive feedback percent could be 98.0. The value uses a max precision of 4
     *  and a scale of 1. If the user has feedback, this value can be returned
     *  regardless of whether the member has chosen to make their feedback private.
     *  Not returned if the user has no feedback.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Positive Feedback Percentage value for the user is returned to the buyer or seller, but a dummy value of <code>0.0</code> will be returned to all third parties.
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
     * Gets as feedbackPrivate
     *
     * Indicates whether the user has chosen to make their feedback score and
     *  feedback details private (hidden from other users). The percentage
     *  of positive feedback can still be returned, even if other feedback details
     *  are private.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to
     *  that bidder, and to the seller of an item that the user is bidding on.
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
     * Indicates whether the user has chosen to make their feedback score and
     *  feedback details private (hidden from other users). The percentage
     *  of positive feedback can still be returned, even if other feedback details
     *  are private.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to
     *  that bidder, and to the seller of an item that the user is bidding on.
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
     * Visual indicator of user's feedback score. See <b>FeedbackRatingStarCodeType</b> for
     *  specific values.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Rating Star value for the user is returned to the buyer or seller, but a dummy value of <code>None</code> will be returned to all third parties.
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
     * Visual indicator of user's feedback score. See <b>FeedbackRatingStarCodeType</b> for
     *  specific values.
     *  <br><br>
     *  <b>For GetOrders, GetOrderTransactions, and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the accurate Feedback Rating Star value for the user is returned to the buyer or seller, but a dummy value of <code>None</code> will be returned to all third parties.
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
     * Gets as iDVerified
     *
     * Indicates whether the user has been verified. For more information
     *  about the ID Verify program, see:
     *  <a href="http://pages.ebay.com/help/policies/identity-idverify.html">Protecting your account</a>
     *
     * @return bool
     */
    public function getIDVerified()
    {
        return $this->iDVerified;
    }

    /**
     * Sets a new iDVerified
     *
     * Indicates whether the user has been verified. For more information
     *  about the ID Verify program, see:
     *  <a href="http://pages.ebay.com/help/policies/identity-idverify.html">Protecting your account</a>
     *
     * @param bool $iDVerified
     * @return self
     */
    public function setIDVerified($iDVerified)
    {
        $this->iDVerified = $iDVerified;
        return $this;
    }

    /**
     * Gets as eBayGoodStanding
     *
     * If <code>true</code>, indicates that the user is in good standing with eBay.
     *
     * @return bool
     */
    public function getEBayGoodStanding()
    {
        return $this->eBayGoodStanding;
    }

    /**
     * Sets a new eBayGoodStanding
     *
     * If <code>true</code>, indicates that the user is in good standing with eBay.
     *
     * @param bool $eBayGoodStanding
     * @return self
     */
    public function setEBayGoodStanding($eBayGoodStanding)
    {
        $this->eBayGoodStanding = $eBayGoodStanding;
        return $this;
    }

    /**
     * Gets as newUser
     *
     * If <code>true</code>, identifies a new user who has been a registered eBay user for 30 days
     *  or less. This is always <code>false</code> after the user has been registered for more than 30
     *  days. Does not indicate an ID change (see <b>UserIdChanged</b>).
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
     * If <code>true</code>, identifies a new user who has been a registered eBay user for 30 days
     *  or less. This is always <code>false</code> after the user has been registered for more than 30
     *  days. Does not indicate an ID change (see <b>UserIdChanged</b>).
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
     * Gets as registrationAddress
     *
     * This container consists of the Registration address for the eBay user making the call.<br>
     *  <br>
     *  <b>GetUser:</b> eBay returns complete
     *  <b>RegistrationAddress</b> details (including Phone), as applicable to the
     *  registration site for the eBay user making the call.
     *  <br><br>
     *  <b>GetItem and GetSellerTransactions:</b> <b>RegistrationAddress</b> for another user
     *  (except for Phone) is only returned if you have an order relationship
     *  with that user AND that user is registered on DE/AT/CH, regardless of your
     *  registration site and the site to which you send the request. For example,
     *  the seller can see the buyer's registration address if the buyer is
     *  registered on DE/AT/CH, or the buyer can see the seller's registration
     *  address if the seller is registered on DE/AT/CH. (The buyer and seller won't
     *  see their own registration addresses in <b>GetItem</b>.)
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getRegistrationAddress()
    {
        return $this->registrationAddress;
    }

    /**
     * Sets a new registrationAddress
     *
     * This container consists of the Registration address for the eBay user making the call.<br>
     *  <br>
     *  <b>GetUser:</b> eBay returns complete
     *  <b>RegistrationAddress</b> details (including Phone), as applicable to the
     *  registration site for the eBay user making the call.
     *  <br><br>
     *  <b>GetItem and GetSellerTransactions:</b> <b>RegistrationAddress</b> for another user
     *  (except for Phone) is only returned if you have an order relationship
     *  with that user AND that user is registered on DE/AT/CH, regardless of your
     *  registration site and the site to which you send the request. For example,
     *  the seller can see the buyer's registration address if the buyer is
     *  registered on DE/AT/CH, or the buyer can see the seller's registration
     *  address if the seller is registered on DE/AT/CH. (The buyer and seller won't
     *  see their own registration addresses in <b>GetItem</b>.)
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $registrationAddress
     * @return self
     */
    public function setRegistrationAddress(\Nogrod\eBaySDK\Trading\AddressType $registrationAddress)
    {
        $this->registrationAddress = $registrationAddress;
        return $this;
    }

    /**
     * Gets as registrationDate
     *
     * Indicates the date the specified user originally registered with eBay.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
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
     * Indicates the date the specified user originally registered with eBay.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
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
     * Gets as site
     *
     * eBay site the user is registered with.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to
     *  that bidder, and to the seller of an item that the user is bidding on.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * eBay site the user is registered with.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to
     *  that bidder, and to the seller of an item that the user is bidding on.
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the user's registration/user status.
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
     * Indicates the user's registration/user status.
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
     * Gets as userID
     *
     * Unique eBay user ID for the user.<br>
     *  <br>
     *  Since a bidder's user info is anonymous, this tag contains the actual
     *  value of an ID only for that bidder, and for the seller of an item that the user is
     *  bidding on. For other users, the actual value is replaced by an
     *  anonymous value, according to these rules:
     *  <br><br>
     *  When bidding on items, <b>UserID</b> is replaced with the
     *  value "a****b" where a and b are random characters from the <b>UserID</b>. For
     *  example, if the <b>UserID</b> = <code>IBidALot</code>, it might be displayed as, "I****A".
     *  <br/><br/>
     *  <span class="tablenote"><b>Important: </b>
     *  In this format, the anonymous bidder ID can change for each
     *  auction.
     *  </span>
     *  For <b>GetMyeBayBuying</b> only, when bidding on items: <b>UserID</b>
     *  is replaced with the value "a****b" where a and b are random characters from
     *  the <b>UserID</b>.
     *  <br><br>
     *  When bidding on items listed on the Philippines site: <b>UserID</b> is replaced
     *  with the value "Bidder X" where X is a number indicating the order of that
     *  user's first bid. For example, if the user was the third bidder,
     *  <b>UserID</b> = <code>Bidder 3</code>.
     *  Note that in this Philippines site format, the anonymous bidder ID stays the same for a given
     *  auction, but is different for different auctions. For example, a bidder who
     *  is the third and then the seventh bidder in an auction will be listed for
     *  both bids as "Bidder 3". However, if that same bidder is the first bidder on
     *  a different auction, the bidder will be listed for that auction as "Bidder
     *  1", not "Bidder 3".
     *  <br><br>
     *  For <b>GetMyeBayBuying</b> only, when bidding on items listed on the UK and AU sites:
     *  <b>UserID</b> is replaced with the string "High Bidder".
     *  <br><br>
     *  For <b>PlaceOffer</b>, see also <b>SellingStatus.HighBidder</b>.
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
     * Unique eBay user ID for the user.<br>
     *  <br>
     *  Since a bidder's user info is anonymous, this tag contains the actual
     *  value of an ID only for that bidder, and for the seller of an item that the user is
     *  bidding on. For other users, the actual value is replaced by an
     *  anonymous value, according to these rules:
     *  <br><br>
     *  When bidding on items, <b>UserID</b> is replaced with the
     *  value "a****b" where a and b are random characters from the <b>UserID</b>. For
     *  example, if the <b>UserID</b> = <code>IBidALot</code>, it might be displayed as, "I****A".
     *  <br/><br/>
     *  <span class="tablenote"><b>Important: </b>
     *  In this format, the anonymous bidder ID can change for each
     *  auction.
     *  </span>
     *  For <b>GetMyeBayBuying</b> only, when bidding on items: <b>UserID</b>
     *  is replaced with the value "a****b" where a and b are random characters from
     *  the <b>UserID</b>.
     *  <br><br>
     *  When bidding on items listed on the Philippines site: <b>UserID</b> is replaced
     *  with the value "Bidder X" where X is a number indicating the order of that
     *  user's first bid. For example, if the user was the third bidder,
     *  <b>UserID</b> = <code>Bidder 3</code>.
     *  Note that in this Philippines site format, the anonymous bidder ID stays the same for a given
     *  auction, but is different for different auctions. For example, a bidder who
     *  is the third and then the seventh bidder in an auction will be listed for
     *  both bids as "Bidder 3". However, if that same bidder is the first bidder on
     *  a different auction, the bidder will be listed for that auction as "Bidder
     *  1", not "Bidder 3".
     *  <br><br>
     *  For <b>GetMyeBayBuying</b> only, when bidding on items listed on the UK and AU sites:
     *  <b>UserID</b> is replaced with the string "High Bidder".
     *  <br><br>
     *  For <b>PlaceOffer</b>, see also <b>SellingStatus.HighBidder</b>.
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
     * Gets as userIDChanged
     *
     * If <code>true</code>, identifies a user whose ID has changed within the last 30 days. Does not
     *  indicate a new user (see <b>NewUser</b>).
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @return bool
     */
    public function getUserIDChanged()
    {
        return $this->userIDChanged;
    }

    /**
     * Sets a new userIDChanged
     *
     * If <code>true</code>, identifies a user whose ID has changed within the last 30 days. Does not
     *  indicate a new user (see <b>NewUser</b>).
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @param bool $userIDChanged
     * @return self
     */
    public function setUserIDChanged($userIDChanged)
    {
        $this->userIDChanged = $userIDChanged;
        return $this;
    }

    /**
     * Gets as userIDLastChanged
     *
     * Date and time the user's data was last changed (in GMT).
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @return \DateTime
     */
    public function getUserIDLastChanged()
    {
        return $this->userIDLastChanged;
    }

    /**
     * Sets a new userIDLastChanged
     *
     * Date and time the user's data was last changed (in GMT).
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *  <br> <br>
     *  <span class="tablenote"><b>Note:</b>
     *  For the <strong>GetItemTransactions</strong> call, this field is only returned to the seller of the order; this field is not returned for the buyer or third party.
     *  </span>
     *
     * @param \DateTime $userIDLastChanged
     * @return self
     */
    public function setUserIDLastChanged(\DateTime $userIDLastChanged)
    {
        $this->userIDLastChanged = $userIDLastChanged;
        return $this;
    }

    /**
     * Gets as vATStatus
     *
     * Indicates whether or not the user is subject to VAT.
     *  Users who have registered with eBay as VAT-exempt are not
     *  subject to VAT. See documentation on Value-Added Tax (VAT).
     *
     * @return string
     */
    public function getVATStatus()
    {
        return $this->vATStatus;
    }

    /**
     * Sets a new vATStatus
     *
     * Indicates whether or not the user is subject to VAT.
     *  Users who have registered with eBay as VAT-exempt are not
     *  subject to VAT. See documentation on Value-Added Tax (VAT).
     *
     * @param string $vATStatus
     * @return self
     */
    public function setVATStatus($vATStatus)
    {
        $this->vATStatus = $vATStatus;
        return $this;
    }

    /**
     * Gets as buyerInfo
     *
     * Contains information about the user as a buyer, such as
     *  the shipping address. See <b>BuyerType</b> for its child elements.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyerType
     */
    public function getBuyerInfo()
    {
        return $this->buyerInfo;
    }

    /**
     * Sets a new buyerInfo
     *
     * Contains information about the user as a buyer, such as
     *  the shipping address. See <b>BuyerType</b> for its child elements.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag will be returned only to that bidder,
     *  and to the seller of an item that the user is bidding on.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyerType $buyerInfo
     * @return self
     */
    public function setBuyerInfo(\Nogrod\eBaySDK\Trading\BuyerType $buyerInfo)
    {
        $this->buyerInfo = $buyerInfo;
        return $this;
    }

    /**
     * Gets as sellerInfo
     *
     * Contains information about a seller, including listing settings, listing
     *  preferences, seller rankings, and seller type.
     *  <br><br>
     *  This field is replaced by the <b>SellerBusinessType</b>
     *  field if the user is a business seller with a site
     *  ID of 77 (Germany), ID of 3 (UK), ID of 205 (Ireland) or ID of 0 (US Motors).
     *  <br><br>
     *  See <b>SellerType</b> or <b>SellerBusinessCodeType</b> for the child elements.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerType
     */
    public function getSellerInfo()
    {
        return $this->sellerInfo;
    }

    /**
     * Sets a new sellerInfo
     *
     * Contains information about a seller, including listing settings, listing
     *  preferences, seller rankings, and seller type.
     *  <br><br>
     *  This field is replaced by the <b>SellerBusinessType</b>
     *  field if the user is a business seller with a site
     *  ID of 77 (Germany), ID of 3 (UK), ID of 205 (Ireland) or ID of 0 (US Motors).
     *  <br><br>
     *  See <b>SellerType</b> or <b>SellerBusinessCodeType</b> for the child elements.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerType $sellerInfo
     * @return self
     */
    public function setSellerInfo(\Nogrod\eBaySDK\Trading\SellerType $sellerInfo)
    {
        $this->sellerInfo = $sellerInfo;
        return $this;
    }

    /**
     * Gets as businessRole
     *
     * This field indicates whether the user's account is enabled for buying and selling
     *  (indicated by <b>FullMarketPlaceParticipant</b>) on eBay, or if the account is a Partially
     *  Provisioned Account (indicated by <b>Shopper</b>) without selling and buying privileges on
     *  eBay.
     *
     * @return string
     */
    public function getBusinessRole()
    {
        return $this->businessRole;
    }

    /**
     * Sets a new businessRole
     *
     * This field indicates whether the user's account is enabled for buying and selling
     *  (indicated by <b>FullMarketPlaceParticipant</b>) on eBay, or if the account is a Partially
     *  Provisioned Account (indicated by <b>Shopper</b>) without selling and buying privileges on
     *  eBay.
     *
     * @param string $businessRole
     * @return self
     */
    public function setBusinessRole($businessRole)
    {
        $this->businessRole = $businessRole;
        return $this;
    }

    /**
     * Adds as charityID
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CharityIDType $charityID
     */
    public function addToCharityAffiliations(\Nogrod\eBaySDK\Trading\CharityIDType $charityID)
    {
        $this->charityAffiliations[] = $charityID;
        return $this;
    }

    /**
     * isset charityAffiliations
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharityAffiliations($index)
    {
        return isset($this->charityAffiliations[$index]);
    }

    /**
     * unset charityAffiliations
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharityAffiliations($index)
    {
        unset($this->charityAffiliations[$index]);
    }

    /**
     * Gets as charityAffiliations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CharityIDType[]
     */
    public function getCharityAffiliations()
    {
        return $this->charityAffiliations;
    }

    /**
     * Sets a new charityAffiliations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CharityIDType[] $charityAffiliations
     * @return self
     */
    public function setCharityAffiliations(array $charityAffiliations)
    {
        $this->charityAffiliations = $charityAffiliations;
        return $this;
    }

    /**
     * Gets as payPalAccountLevel
     *
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @return string
     */
    public function getPayPalAccountLevel()
    {
        return $this->payPalAccountLevel;
    }

    /**
     * Sets a new payPalAccountLevel
     *
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @param string $payPalAccountLevel
     * @return self
     */
    public function setPayPalAccountLevel($payPalAccountLevel)
    {
        $this->payPalAccountLevel = $payPalAccountLevel;
        return $this;
    }

    /**
     * Gets as payPalAccountType
     *
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @return string
     */
    public function getPayPalAccountType()
    {
        return $this->payPalAccountType;
    }

    /**
     * Sets a new payPalAccountType
     *
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @param string $payPalAccountType
     * @return self
     */
    public function setPayPalAccountType($payPalAccountType)
    {
        $this->payPalAccountType = $payPalAccountType;
        return $this;
    }

    /**
     * Gets as payPalAccountStatus
     *
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @return string
     */
    public function getPayPalAccountStatus()
    {
        return $this->payPalAccountStatus;
    }

    /**
     * Sets a new payPalAccountStatus
     *
     * This field is currently still returned, but is no longer relevant since having a PayPal account linked to your eBay account is no longer required.
     *
     * @param string $payPalAccountStatus
     * @return self
     */
    public function setPayPalAccountStatus($payPalAccountStatus)
    {
        $this->payPalAccountStatus = $payPalAccountStatus;
        return $this;
    }

    /**
     * Adds as userSubscription
     *
     * Specifies the subscription level for a user.
     *
     * @return self
     * @param string $userSubscription
     */
    public function addToUserSubscription($userSubscription)
    {
        $this->userSubscription[] = $userSubscription;
        return $this;
    }

    /**
     * isset userSubscription
     *
     * Specifies the subscription level for a user.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserSubscription($index)
    {
        return isset($this->userSubscription[$index]);
    }

    /**
     * unset userSubscription
     *
     * Specifies the subscription level for a user.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserSubscription($index)
    {
        unset($this->userSubscription[$index]);
    }

    /**
     * Gets as userSubscription
     *
     * Specifies the subscription level for a user.
     *
     * @return string[]
     */
    public function getUserSubscription()
    {
        return $this->userSubscription;
    }

    /**
     * Sets a new userSubscription
     *
     * Specifies the subscription level for a user.
     *
     * @param string $userSubscription
     * @return self
     */
    public function setUserSubscription(array $userSubscription)
    {
        $this->userSubscription = $userSubscription;
        return $this;
    }

    /**
     * Gets as siteVerified
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getSiteVerified()
    {
        return $this->siteVerified;
    }

    /**
     * Sets a new siteVerified
     *
     * This field is deprecated.
     *
     * @param bool $siteVerified
     * @return self
     */
    public function setSiteVerified($siteVerified)
    {
        $this->siteVerified = $siteVerified;
        return $this;
    }

    /**
     * Adds as skypeID
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $skypeID
     */
    public function addToSkypeID($skypeID)
    {
        $this->skypeID[] = $skypeID;
        return $this;
    }

    /**
     * isset skypeID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSkypeID($index)
    {
        return isset($this->skypeID[$index]);
    }

    /**
     * unset skypeID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSkypeID($index)
    {
        unset($this->skypeID[$index]);
    }

    /**
     * Gets as skypeID
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getSkypeID()
    {
        return $this->skypeID;
    }

    /**
     * Sets a new skypeID
     *
     * This field is deprecated.
     *
     * @param string[] $skypeID
     * @return self
     */
    public function setSkypeID(array $skypeID)
    {
        $this->skypeID = $skypeID;
        return $this;
    }

    /**
     * Gets as eBayWikiReadOnly
     *
     * Indicates whether a user has read-only access to the eBay Wiki (<code>true</code>)
     *  or whether the user is able contribute or edit articles on the eBay Wiki
     *  (<code>false</code>). By default, all registered eBay users have access to contribute and
     *  edit articles on the eBay Wiki. All content contributed to the eBay Wiki is
     *  subject to the Community Content Policy.
     *
     * @return bool
     */
    public function getEBayWikiReadOnly()
    {
        return $this->eBayWikiReadOnly;
    }

    /**
     * Sets a new eBayWikiReadOnly
     *
     * Indicates whether a user has read-only access to the eBay Wiki (<code>true</code>)
     *  or whether the user is able contribute or edit articles on the eBay Wiki
     *  (<code>false</code>). By default, all registered eBay users have access to contribute and
     *  edit articles on the eBay Wiki. All content contributed to the eBay Wiki is
     *  subject to the Community Content Policy.
     *
     * @param bool $eBayWikiReadOnly
     * @return self
     */
    public function setEBayWikiReadOnly($eBayWikiReadOnly)
    {
        $this->eBayWikiReadOnly = $eBayWikiReadOnly;
        return $this;
    }

    /**
     * Gets as tUVLevel
     *
     * TUV level is a number allocated to a user based on various characteristics
     *  such as buyer, seller, new buyer, new seller, high risk, or bid limit.
     *  Applies to eBay Motors Pro applications only.
     *
     * @return int
     */
    public function getTUVLevel()
    {
        return $this->tUVLevel;
    }

    /**
     * Sets a new tUVLevel
     *
     * TUV level is a number allocated to a user based on various characteristics
     *  such as buyer, seller, new buyer, new seller, high risk, or bid limit.
     *  Applies to eBay Motors Pro applications only.
     *
     * @param int $tUVLevel
     * @return self
     */
    public function setTUVLevel($tUVLevel)
    {
        $this->tUVLevel = $tUVLevel;
        return $this;
    }

    /**
     * Gets as vATID
     *
     * The value added tax identifier (<b>VATID</b>) is applicable to the VAT-enabled
     *  sites.
     *  Applies to eBay Motors Pro applications only.
     *
     * @return string
     */
    public function getVATID()
    {
        return $this->vATID;
    }

    /**
     * Sets a new vATID
     *
     * The value added tax identifier (<b>VATID</b>) is applicable to the VAT-enabled
     *  sites.
     *  Applies to eBay Motors Pro applications only.
     *
     * @param string $vATID
     * @return self
     */
    public function setVATID($vATID)
    {
        $this->vATID = $vATID;
        return $this;
    }

    /**
     * Gets as sellerPaymentMethod
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellerPaymentMethod()
    {
        return $this->sellerPaymentMethod;
    }

    /**
     * Sets a new sellerPaymentMethod
     *
     * This field is deprecated.
     *
     * @param string $sellerPaymentMethod
     * @return self
     */
    public function setSellerPaymentMethod($sellerPaymentMethod)
    {
        $this->sellerPaymentMethod = $sellerPaymentMethod;
        return $this;
    }

    /**
     * Gets as biddingSummary
     *
     * Contains information about the user as a bidder on a certain
     *  item. Returned by <b>GetAllBidders</b> if <b>IncludeBiddingSummary</b> =
     *  <code>true</code> is included in the request.
     *
     * @return \Nogrod\eBaySDK\Trading\BiddingSummaryType
     */
    public function getBiddingSummary()
    {
        return $this->biddingSummary;
    }

    /**
     * Sets a new biddingSummary
     *
     * Contains information about the user as a bidder on a certain
     *  item. Returned by <b>GetAllBidders</b> if <b>IncludeBiddingSummary</b> =
     *  <code>true</code> is included in the request.
     *
     * @param \Nogrod\eBaySDK\Trading\BiddingSummaryType $biddingSummary
     * @return self
     */
    public function setBiddingSummary(\Nogrod\eBaySDK\Trading\BiddingSummaryType $biddingSummary)
    {
        $this->biddingSummary = $biddingSummary;
        return $this;
    }

    /**
     * Gets as userAnonymized
     *
     * Indicates whether or not the User container has been made
     *  anonymous. If <code>true</code>, some elements in the User container have
     *  either been removed, or had their values changed to remove
     *  identifying characteristics. If false, all expected elements
     *  are returned, and no values are changed.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag is returned as false
     *  only to the bidder, and to the seller of an item that the user is bidding
     *  on. For all other users, this tag is returned as <code>true</code>.
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
     * Indicates whether or not the User container has been made
     *  anonymous. If <code>true</code>, some elements in the User container have
     *  either been removed, or had their values changed to remove
     *  identifying characteristics. If false, all expected elements
     *  are returned, and no values are changed.
     *  <br><br>
     *  Since a bidder's user info is anonymous, this tag is returned as false
     *  only to the bidder, and to the seller of an item that the user is bidding
     *  on. For all other users, this tag is returned as <code>true</code>.
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
     * Gets as uniqueNeutralFeedbackCount
     *
     * Total count of neutral Feedback entries received by the user, including weekly repeats.
     *
     * @return int
     */
    public function getUniqueNeutralFeedbackCount()
    {
        return $this->uniqueNeutralFeedbackCount;
    }

    /**
     * Sets a new uniqueNeutralFeedbackCount
     *
     * Total count of neutral Feedback entries received by the user, including weekly repeats.
     *
     * @param int $uniqueNeutralFeedbackCount
     * @return self
     */
    public function setUniqueNeutralFeedbackCount($uniqueNeutralFeedbackCount)
    {
        $this->uniqueNeutralFeedbackCount = $uniqueNeutralFeedbackCount;
        return $this;
    }

    /**
     * Gets as enterpriseSeller
     *
     * Reserved for internal or future use.
     *
     * @return bool
     */
    public function getEnterpriseSeller()
    {
        return $this->enterpriseSeller;
    }

    /**
     * Sets a new enterpriseSeller
     *
     * Reserved for internal or future use.
     *
     * @param bool $enterpriseSeller
     * @return self
     */
    public function setEnterpriseSeller($enterpriseSeller)
    {
        $this->enterpriseSeller = $enterpriseSeller;
        return $this;
    }

    /**
     * Gets as billingEmail
     *
     * When a user has their billing option set to <code>email</code>, they can include
     *  this element in a <b>GetUser</b> request to retrieve their own email bills.
     *
     * @return string
     */
    public function getBillingEmail()
    {
        return $this->billingEmail;
    }

    /**
     * Sets a new billingEmail
     *
     * When a user has their billing option set to <code>email</code>, they can include
     *  this element in a <b>GetUser</b> request to retrieve their own email bills.
     *
     * @param string $billingEmail
     * @return self
     */
    public function setBillingEmail($billingEmail)
    {
        $this->billingEmail = $billingEmail;
        return $this;
    }

    /**
     * Gets as qualifiesForSelling
     *
     * This flag indicates whether or not the user is eligible to sell items on eBay. This field is only returned if the <b>IncludeFeatureEligibility</b> flag is included in the call request and set to <code>true</code>.
     *
     * @return bool
     */
    public function getQualifiesForSelling()
    {
        return $this->qualifiesForSelling;
    }

    /**
     * Sets a new qualifiesForSelling
     *
     * This flag indicates whether or not the user is eligible to sell items on eBay. This field is only returned if the <b>IncludeFeatureEligibility</b> flag is included in the call request and set to <code>true</code>.
     *
     * @param bool $qualifiesForSelling
     * @return self
     */
    public function setQualifiesForSelling($qualifiesForSelling)
    {
        $this->qualifiesForSelling = $qualifiesForSelling;
        return $this;
    }

    /**
     * Gets as staticAlias
     *
     * Contains the static email address of an eBay member, used within the "reply to"
     *  email address when the eBay member sends a message.
     *  (Each eBay member is assigned a static alias. The alias is
     *  used within a static email address.)
     *
     * @return string
     */
    public function getStaticAlias()
    {
        return $this->staticAlias;
    }

    /**
     * Sets a new staticAlias
     *
     * Contains the static email address of an eBay member, used within the "reply to"
     *  email address when the eBay member sends a message.
     *  (Each eBay member is assigned a static alias. The alias is
     *  used within a static email address.)
     *
     * @param string $staticAlias
     * @return self
     */
    public function setStaticAlias($staticAlias)
    {
        $this->staticAlias = $staticAlias;
        return $this;
    }

    /**
     * Gets as shippingAddress
     *
     * Contains the shipping address of a bidder who has made a Best Offer for an item.
     *  <br/><br/>
     *  You cannot retrieve a shipping address for any user with whom you do not have an order relationship, regardless of site. The shipping address of another user is returned only if you and the other user are in an order relationship, within a certain time of order line item creation.
     *  <br><br>
     *  Because a bidder's user information is anonymous, this container is returned only to that bidder, and to the seller of an item that the user is bidding on.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * Contains the shipping address of a bidder who has made a Best Offer for an item.
     *  <br/><br/>
     *  You cannot retrieve a shipping address for any user with whom you do not have an order relationship, regardless of site. The shipping address of another user is returned only if you and the other user are in an order relationship, within a certain time of order line item creation.
     *  <br><br>
     *  Because a bidder's user information is anonymous, this container is returned only to that bidder, and to the seller of an item that the user is bidding on.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Adds as program
     *
     * The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program, and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable membership programs.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MembershipDetailType $program
     */
    public function addToMembership(\Nogrod\eBaySDK\Trading\MembershipDetailType $program)
    {
        $this->membership[] = $program;
        return $this;
    }

    /**
     * isset membership
     *
     * The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program, and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable membership programs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMembership($index)
    {
        return isset($this->membership[$index]);
    }

    /**
     * unset membership
     *
     * The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program, and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable membership programs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMembership($index)
    {
        unset($this->membership[$index]);
    }

    /**
     * Gets as membership
     *
     * The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program, and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable membership programs.
     *
     * @return \Nogrod\eBaySDK\Trading\MembershipDetailType[]
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Sets a new membership
     *
     * The <strong>Membership</strong> container will be returned if the seller is enrolled in one or more membership programs on one or more eBay sites. A <b>Program</b> container will be returned for each applicable membership program, and provides details on that program, including the eBay site, the program name (such as '<code>EBAYPLUS</code>'), and the membership expiration date. This container will not be returned at all if the seller is not enrolled in any applicable membership programs.
     *
     * @param \Nogrod\eBaySDK\Trading\MembershipDetailType[] $membership
     * @return self
     */
    public function setMembership(array $membership)
    {
        $this->membership = $membership;
        return $this;
    }

    /**
     * Gets as userFirstName
     *
     * The first name of the buyer who purchased the order.
     *
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->userFirstName;
    }

    /**
     * Sets a new userFirstName
     *
     * The first name of the buyer who purchased the order.
     *
     * @param string $userFirstName
     * @return self
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;
        return $this;
    }

    /**
     * Gets as userLastName
     *
     * The last name of the buyer who purchased the order.
     *
     * @return string
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * Sets a new userLastName
     *
     * The last name of the buyer who purchased the order.
     *
     * @param string $userLastName
     * @return self
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAboutMePage();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AboutMePage", $value);
        }
        $value = $this->getEIASToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EIASToken", $value);
        }
        $value = $this->getEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Email", $value);
        }
        $value = $this->getFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeedbackScore", $value);
        }
        $value = $this->getUniqueNegativeFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount", $value);
        }
        $value = $this->getUniquePositiveFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount", $value);
        }
        $value = $this->getPositiveFeedbackPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPercent", $value);
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
        $value = $this->getIDVerified();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IDVerified", $value);
        }
        $value = $this->getEBayGoodStanding();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayGoodStanding", $value);
        }
        $value = $this->getNewUser();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NewUser", $value);
        }
        $value = $this->getRegistrationAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegistrationAddress", $value);
        }
        $value = $this->getRegistrationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegistrationDate", $value);
        }
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getUserIDChanged();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserIDChanged", $value);
        }
        $value = $this->getUserIDLastChanged();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserIDLastChanged", $value);
        }
        $value = $this->getVATStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATStatus", $value);
        }
        $value = $this->getBuyerInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerInfo", $value);
        }
        $value = $this->getSellerInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerInfo", $value);
        }
        $value = $this->getBusinessRole();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BusinessRole", $value);
        }
        $value = $this->getCharityAffiliations();
        if (null !== $value && !empty($this->getCharityAffiliations())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityAffiliations", array_map(function ($v) {
                return ["CharityID" => $v];
            }, $value));
        }
        $value = $this->getPayPalAccountLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalAccountLevel", $value);
        }
        $value = $this->getPayPalAccountType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalAccountType", $value);
        }
        $value = $this->getPayPalAccountStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalAccountStatus", $value);
        }
        $value = $this->getUserSubscription();
        if (null !== $value && !empty($this->getUserSubscription())) {
            $writer->write(array_map(function ($v) {
                return ["UserSubscription" => $v];
            }, $value));
        }
        $value = $this->getSiteVerified();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteVerified", $value);
        }
        $value = $this->getSkypeID();
        if (null !== $value && !empty($this->getSkypeID())) {
            $writer->write(array_map(function ($v) {
                return ["SkypeID" => $v];
            }, $value));
        }
        $value = $this->getEBayWikiReadOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayWikiReadOnly", $value);
        }
        $value = $this->getTUVLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TUVLevel", $value);
        }
        $value = $this->getVATID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATID", $value);
        }
        $value = $this->getSellerPaymentMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerPaymentMethod", $value);
        }
        $value = $this->getBiddingSummary();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BiddingSummary", $value);
        }
        $value = $this->getUserAnonymized();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserAnonymized", $value);
        }
        $value = $this->getUniqueNeutralFeedbackCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount", $value);
        }
        $value = $this->getEnterpriseSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EnterpriseSeller", $value);
        }
        $value = $this->getBillingEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BillingEmail", $value);
        }
        $value = $this->getQualifiesForSelling();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QualifiesForSelling", $value);
        }
        $value = $this->getStaticAlias();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StaticAlias", $value);
        }
        $value = $this->getShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingAddress", $value);
        }
        $value = $this->getMembership();
        if (null !== $value && !empty($this->getMembership())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Membership", array_map(function ($v) {
                return ["Program" => $v];
            }, $value));
        }
        $value = $this->getUserFirstName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserFirstName", $value);
        }
        $value = $this->getUserLastName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserLastName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AboutMePage');
        if (null !== $value) {
            $this->setAboutMePage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EIASToken');
        if (null !== $value) {
            $this->setEIASToken($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Email');
        if (null !== $value) {
            $this->setEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackScore');
        if (null !== $value) {
            $this->setFeedbackScore($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNegativeFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNegativeFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniquePositiveFeedbackCount');
        if (null !== $value) {
            $this->setUniquePositiveFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PositiveFeedbackPercent');
        if (null !== $value) {
            $this->setPositiveFeedbackPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackPrivate');
        if (null !== $value) {
            $this->setFeedbackPrivate($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeedbackRatingStar');
        if (null !== $value) {
            $this->setFeedbackRatingStar($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IDVerified');
        if (null !== $value) {
            $this->setIDVerified($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayGoodStanding');
        if (null !== $value) {
            $this->setEBayGoodStanding($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NewUser');
        if (null !== $value) {
            $this->setNewUser($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegistrationAddress');
        if (null !== $value) {
            $this->setRegistrationAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegistrationDate');
        if (null !== $value) {
            $this->setRegistrationDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserIDChanged');
        if (null !== $value) {
            $this->setUserIDChanged($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserIDLastChanged');
        if (null !== $value) {
            $this->setUserIDLastChanged(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATStatus');
        if (null !== $value) {
            $this->setVATStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerInfo');
        if (null !== $value) {
            $this->setBuyerInfo(\Nogrod\eBaySDK\Trading\BuyerType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerInfo');
        if (null !== $value) {
            $this->setSellerInfo(\Nogrod\eBaySDK\Trading\SellerType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BusinessRole');
        if (null !== $value) {
            $this->setBusinessRole($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityAffiliations', true);
        if (null !== $value && !empty($value)) {
            $this->setCharityAffiliations(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CharityIDType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalAccountLevel');
        if (null !== $value) {
            $this->setPayPalAccountLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalAccountType');
        if (null !== $value) {
            $this->setPayPalAccountType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalAccountStatus');
        if (null !== $value) {
            $this->setPayPalAccountStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserSubscription', true);
        if (null !== $value && !empty($value)) {
            $this->setUserSubscription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteVerified');
        if (null !== $value) {
            $this->setSiteVerified($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SkypeID', true);
        if (null !== $value && !empty($value)) {
            $this->setSkypeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayWikiReadOnly');
        if (null !== $value) {
            $this->setEBayWikiReadOnly($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TUVLevel');
        if (null !== $value) {
            $this->setTUVLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATID');
        if (null !== $value) {
            $this->setVATID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaymentMethod');
        if (null !== $value) {
            $this->setSellerPaymentMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BiddingSummary');
        if (null !== $value) {
            $this->setBiddingSummary(\Nogrod\eBaySDK\Trading\BiddingSummaryType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserAnonymized');
        if (null !== $value) {
            $this->setUserAnonymized($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UniqueNeutralFeedbackCount');
        if (null !== $value) {
            $this->setUniqueNeutralFeedbackCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EnterpriseSeller');
        if (null !== $value) {
            $this->setEnterpriseSeller($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BillingEmail');
        if (null !== $value) {
            $this->setBillingEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QualifiesForSelling');
        if (null !== $value) {
            $this->setQualifiesForSelling($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StaticAlias');
        if (null !== $value) {
            $this->setStaticAlias($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Membership', true);
        if (null !== $value && !empty($value)) {
            $this->setMembership(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\MembershipDetailType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserFirstName');
        if (null !== $value) {
            $this->setUserFirstName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserLastName');
        if (null !== $value) {
            $this->setUserLastName($value);
        }
    }
}
