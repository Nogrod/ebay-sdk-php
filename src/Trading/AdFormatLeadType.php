<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AdFormatLeadType
 *
 * This type is used by the <b>AdFormatLead</b> container that is returned in the <b>GetAdFormatLeads</b> call response. An <b>AdFormatLead</b> container will be returned for each user that has expressed interest in the Classified Ad listing that was specified by the seller in the <b>GetAdFormatLeads</b> call request. Each <b>AdFormatLead</b> container consists of prospective buyer contact information and other details associated with a lead for a Classified Ad listing.
 * XSD Type: AdFormatLeadType
 */
class AdFormatLeadType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field shows the message that was sent from the prospective buyer to the seller. This will be the same content that is returned in the <b>AdFormatLead.MemberMessage.MemberMessageExchange.Question.Body</b> field (that is only displayed if the <b>IncludeMemberMessages</b> boolean field is included in the request and set to <code>true</code>). The advantage of retrieving the <b>MemberMessageExchange</b> node, however, is that you retrieve the entire exchange between the seller and the prospective buyer.
     *
     * @var string $additionalInformation
     */
    private $additionalInformation = null;

    /**
     * This container consists of contact information for the prospective buyer.
     *  This container will not be returned if the buyer did not provide any contact information.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $address
     */
    private $address = null;

    /**
     * The time of day when the prospective buyer prefers to be contacted by the seller. This field is not returned if this information is unavailable.
     *
     * @var string $bestTimeToCall
     */
    private $bestTimeToCall = null;

    /**
     * Email address for the prospective buyer. If the prospective buyer chooses to
     *  hide his email address when contacting the seller, this element contains two
     *  dashes (--) instead of an email address.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * Date and time (in GMT) that the lead was submitted.
     *
     * @var \DateTime $submittedTime
     */
    private $submittedTime = null;

    /**
     * The unique identifier of the listing.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The title of the listing.
     *
     * @var string $itemTitle
     */
    private $itemTitle = null;

    /**
     * The eBay user ID of the user who is interested in the seller's item.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * Contains any mail message content shared between the seller and prospective buyer.
     *
     * @var \Nogrod\eBaySDK\Trading\MemberMessageExchangeType[] $memberMessage
     */
    private $memberMessage = null;

    /**
     * The enumeration value in this field will indicate whether or not the seller has responded to the lead.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The pay-per-lead feature is no longer available, and this field is scheduled to
     *  be removed from the WSDL.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $leadFee
     */
    private $leadFee = null;

    /**
     * Email address for the prospective buyer as entered in the lead form on the View
     *  Item page. Provides a way for sellers to contact prospective buyers who choose not to
     *  log in to eBay. This applies to only eBay Motors and eBay Motors categories.
     *
     * @var string $externalEmail
     */
    private $externalEmail = null;

    /**
     * Prospective buyer's time frame for purchasing a vehicle as entered in the
     *  Lead form on View Item page for eBay Motors and eBay Motors categories.
     *  Purchasing Time Frames include:
     *  <ul>
     *  <li>
     *  within next 3 days
     *  </li>
     *  <li>
     *  within a week
     *  </li>
     *  <li>
     *  within a month
     *  </li>
     *  <li>
     *  within three months
     *  </li>
     *  <li>
     *  in more than three months
     *  </li>
     *  <li>
     *  within an undecided time frame
     *  </li>
     *  </ul>
     *
     * @var string $purchaseTimeFrame
     */
    private $purchaseTimeFrame = null;

    /**
     * The year of the vehicle the prospective buyer would like to trade in. Entered on
     *  the lead form on the View Item page. Applies to eBay Motors and Motors categories
     *  only.
     *
     * @var string $tradeInYear
     */
    private $tradeInYear = null;

    /**
     * The make of the vehicle the prospective buyer would like to trade in. Entered on
     *  the lead form on the View Item page. Applies to eBay Motors and Motors categories
     *  only.
     *
     * @var string $tradeInMake
     */
    private $tradeInMake = null;

    /**
     * The model of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
     *
     * @var string $tradeInModel
     */
    private $tradeInModel = null;

    /**
     * Prospective buyer answer whether or not the prospective buyer would like
     *  financing. Entered on the lead form on the View Item page. Applies to eBay Motors
     *  and Motors categories only. Financing response meanings: 0= no response,1= yes, 2=
     *  no.
     *
     * @var bool $financingAnswer
     */
    private $financingAnswer = null;

    /**
     * This field corresponds to a configurable question on the lead form in the View
     *  Item web page. The corresponding question is site-specific. To determine the
     *  question for a specific site, you must view the form in the web flow for the given
     *  site. This field applies to Classified Ad format listings in Motors categories
     *  only.
     *
     * @var bool $answer1
     */
    private $answer1 = null;

    /**
     * This field corresponds to a configurable question on the lead form in the View
     *  Item web page. The corresponding question is site-specific. To determine the
     *  question for a specific site, you must view the form in the web flow for the given
     *  site. This field applies to Classified Ad format listings in Motors categories
     *  only.
     *
     * @var bool $answer2
     */
    private $answer2 = null;

    /**
     * Gets as additionalInformation
     *
     * This field shows the message that was sent from the prospective buyer to the seller. This will be the same content that is returned in the <b>AdFormatLead.MemberMessage.MemberMessageExchange.Question.Body</b> field (that is only displayed if the <b>IncludeMemberMessages</b> boolean field is included in the request and set to <code>true</code>). The advantage of retrieving the <b>MemberMessageExchange</b> node, however, is that you retrieve the entire exchange between the seller and the prospective buyer.
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * This field shows the message that was sent from the prospective buyer to the seller. This will be the same content that is returned in the <b>AdFormatLead.MemberMessage.MemberMessageExchange.Question.Body</b> field (that is only displayed if the <b>IncludeMemberMessages</b> boolean field is included in the request and set to <code>true</code>). The advantage of retrieving the <b>MemberMessageExchange</b> node, however, is that you retrieve the entire exchange between the seller and the prospective buyer.
     *
     * @param string $additionalInformation
     * @return self
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Gets as address
     *
     * This container consists of contact information for the prospective buyer.
     *  This container will not be returned if the buyer did not provide any contact information.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * This container consists of contact information for the prospective buyer.
     *  This container will not be returned if the buyer did not provide any contact information.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $address
     * @return self
     */
    public function setAddress(\Nogrod\eBaySDK\Trading\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as bestTimeToCall
     *
     * The time of day when the prospective buyer prefers to be contacted by the seller. This field is not returned if this information is unavailable.
     *
     * @return string
     */
    public function getBestTimeToCall()
    {
        return $this->bestTimeToCall;
    }

    /**
     * Sets a new bestTimeToCall
     *
     * The time of day when the prospective buyer prefers to be contacted by the seller. This field is not returned if this information is unavailable.
     *
     * @param string $bestTimeToCall
     * @return self
     */
    public function setBestTimeToCall($bestTimeToCall)
    {
        $this->bestTimeToCall = $bestTimeToCall;
        return $this;
    }

    /**
     * Gets as email
     *
     * Email address for the prospective buyer. If the prospective buyer chooses to
     *  hide his email address when contacting the seller, this element contains two
     *  dashes (--) instead of an email address.
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
     * Email address for the prospective buyer. If the prospective buyer chooses to
     *  hide his email address when contacting the seller, this element contains two
     *  dashes (--) instead of an email address.
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
     * Gets as submittedTime
     *
     * Date and time (in GMT) that the lead was submitted.
     *
     * @return \DateTime
     */
    public function getSubmittedTime()
    {
        return $this->submittedTime;
    }

    /**
     * Sets a new submittedTime
     *
     * Date and time (in GMT) that the lead was submitted.
     *
     * @param \DateTime $submittedTime
     * @return self
     */
    public function setSubmittedTime(\DateTime $submittedTime)
    {
        $this->submittedTime = $submittedTime;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing.
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
     * The unique identifier of the listing.
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
     * Gets as itemTitle
     *
     * The title of the listing.
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Sets a new itemTitle
     *
     * The title of the listing.
     *
     * @param string $itemTitle
     * @return self
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * Gets as userID
     *
     * The eBay user ID of the user who is interested in the seller's item.
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
     * The eBay user ID of the user who is interested in the seller's item.
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
     * Adds as memberMessageExchange
     *
     * Contains any mail message content shared between the seller and prospective buyer.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MemberMessageExchangeType $memberMessageExchange
     */
    public function addToMemberMessage(\Nogrod\eBaySDK\Trading\MemberMessageExchangeType $memberMessageExchange)
    {
        $this->memberMessage[] = $memberMessageExchange;
        return $this;
    }

    /**
     * isset memberMessage
     *
     * Contains any mail message content shared between the seller and prospective buyer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMemberMessage($index)
    {
        return isset($this->memberMessage[$index]);
    }

    /**
     * unset memberMessage
     *
     * Contains any mail message content shared between the seller and prospective buyer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMemberMessage($index)
    {
        unset($this->memberMessage[$index]);
    }

    /**
     * Gets as memberMessage
     *
     * Contains any mail message content shared between the seller and prospective buyer.
     *
     * @return \Nogrod\eBaySDK\Trading\MemberMessageExchangeType[]
     */
    public function getMemberMessage()
    {
        return $this->memberMessage;
    }

    /**
     * Sets a new memberMessage
     *
     * Contains any mail message content shared between the seller and prospective buyer.
     *
     * @param \Nogrod\eBaySDK\Trading\MemberMessageExchangeType[] $memberMessage
     * @return self
     */
    public function setMemberMessage(array $memberMessage)
    {
        $this->memberMessage = $memberMessage;
        return $this;
    }

    /**
     * Gets as status
     *
     * The enumeration value in this field will indicate whether or not the seller has responded to the lead.
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
     * The enumeration value in this field will indicate whether or not the seller has responded to the lead.
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
     * Gets as leadFee
     *
     * The pay-per-lead feature is no longer available, and this field is scheduled to
     *  be removed from the WSDL.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getLeadFee()
    {
        return $this->leadFee;
    }

    /**
     * Sets a new leadFee
     *
     * The pay-per-lead feature is no longer available, and this field is scheduled to
     *  be removed from the WSDL.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $leadFee
     * @return self
     */
    public function setLeadFee(\Nogrod\eBaySDK\Trading\AmountType $leadFee)
    {
        $this->leadFee = $leadFee;
        return $this;
    }

    /**
     * Gets as externalEmail
     *
     * Email address for the prospective buyer as entered in the lead form on the View
     *  Item page. Provides a way for sellers to contact prospective buyers who choose not to
     *  log in to eBay. This applies to only eBay Motors and eBay Motors categories.
     *
     * @return string
     */
    public function getExternalEmail()
    {
        return $this->externalEmail;
    }

    /**
     * Sets a new externalEmail
     *
     * Email address for the prospective buyer as entered in the lead form on the View
     *  Item page. Provides a way for sellers to contact prospective buyers who choose not to
     *  log in to eBay. This applies to only eBay Motors and eBay Motors categories.
     *
     * @param string $externalEmail
     * @return self
     */
    public function setExternalEmail($externalEmail)
    {
        $this->externalEmail = $externalEmail;
        return $this;
    }

    /**
     * Gets as purchaseTimeFrame
     *
     * Prospective buyer's time frame for purchasing a vehicle as entered in the
     *  Lead form on View Item page for eBay Motors and eBay Motors categories.
     *  Purchasing Time Frames include:
     *  <ul>
     *  <li>
     *  within next 3 days
     *  </li>
     *  <li>
     *  within a week
     *  </li>
     *  <li>
     *  within a month
     *  </li>
     *  <li>
     *  within three months
     *  </li>
     *  <li>
     *  in more than three months
     *  </li>
     *  <li>
     *  within an undecided time frame
     *  </li>
     *  </ul>
     *
     * @return string
     */
    public function getPurchaseTimeFrame()
    {
        return $this->purchaseTimeFrame;
    }

    /**
     * Sets a new purchaseTimeFrame
     *
     * Prospective buyer's time frame for purchasing a vehicle as entered in the
     *  Lead form on View Item page for eBay Motors and eBay Motors categories.
     *  Purchasing Time Frames include:
     *  <ul>
     *  <li>
     *  within next 3 days
     *  </li>
     *  <li>
     *  within a week
     *  </li>
     *  <li>
     *  within a month
     *  </li>
     *  <li>
     *  within three months
     *  </li>
     *  <li>
     *  in more than three months
     *  </li>
     *  <li>
     *  within an undecided time frame
     *  </li>
     *  </ul>
     *
     * @param string $purchaseTimeFrame
     * @return self
     */
    public function setPurchaseTimeFrame($purchaseTimeFrame)
    {
        $this->purchaseTimeFrame = $purchaseTimeFrame;
        return $this;
    }

    /**
     * Gets as tradeInYear
     *
     * The year of the vehicle the prospective buyer would like to trade in. Entered on
     *  the lead form on the View Item page. Applies to eBay Motors and Motors categories
     *  only.
     *
     * @return string
     */
    public function getTradeInYear()
    {
        return $this->tradeInYear;
    }

    /**
     * Sets a new tradeInYear
     *
     * The year of the vehicle the prospective buyer would like to trade in. Entered on
     *  the lead form on the View Item page. Applies to eBay Motors and Motors categories
     *  only.
     *
     * @param string $tradeInYear
     * @return self
     */
    public function setTradeInYear($tradeInYear)
    {
        $this->tradeInYear = $tradeInYear;
        return $this;
    }

    /**
     * Gets as tradeInMake
     *
     * The make of the vehicle the prospective buyer would like to trade in. Entered on
     *  the lead form on the View Item page. Applies to eBay Motors and Motors categories
     *  only.
     *
     * @return string
     */
    public function getTradeInMake()
    {
        return $this->tradeInMake;
    }

    /**
     * Sets a new tradeInMake
     *
     * The make of the vehicle the prospective buyer would like to trade in. Entered on
     *  the lead form on the View Item page. Applies to eBay Motors and Motors categories
     *  only.
     *
     * @param string $tradeInMake
     * @return self
     */
    public function setTradeInMake($tradeInMake)
    {
        $this->tradeInMake = $tradeInMake;
        return $this;
    }

    /**
     * Gets as tradeInModel
     *
     * The model of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
     *
     * @return string
     */
    public function getTradeInModel()
    {
        return $this->tradeInModel;
    }

    /**
     * Sets a new tradeInModel
     *
     * The model of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
     *
     * @param string $tradeInModel
     * @return self
     */
    public function setTradeInModel($tradeInModel)
    {
        $this->tradeInModel = $tradeInModel;
        return $this;
    }

    /**
     * Gets as financingAnswer
     *
     * Prospective buyer answer whether or not the prospective buyer would like
     *  financing. Entered on the lead form on the View Item page. Applies to eBay Motors
     *  and Motors categories only. Financing response meanings: 0= no response,1= yes, 2=
     *  no.
     *
     * @return bool
     */
    public function getFinancingAnswer()
    {
        return $this->financingAnswer;
    }

    /**
     * Sets a new financingAnswer
     *
     * Prospective buyer answer whether or not the prospective buyer would like
     *  financing. Entered on the lead form on the View Item page. Applies to eBay Motors
     *  and Motors categories only. Financing response meanings: 0= no response,1= yes, 2=
     *  no.
     *
     * @param bool $financingAnswer
     * @return self
     */
    public function setFinancingAnswer($financingAnswer)
    {
        $this->financingAnswer = $financingAnswer;
        return $this;
    }

    /**
     * Gets as answer1
     *
     * This field corresponds to a configurable question on the lead form in the View
     *  Item web page. The corresponding question is site-specific. To determine the
     *  question for a specific site, you must view the form in the web flow for the given
     *  site. This field applies to Classified Ad format listings in Motors categories
     *  only.
     *
     * @return bool
     */
    public function getAnswer1()
    {
        return $this->answer1;
    }

    /**
     * Sets a new answer1
     *
     * This field corresponds to a configurable question on the lead form in the View
     *  Item web page. The corresponding question is site-specific. To determine the
     *  question for a specific site, you must view the form in the web flow for the given
     *  site. This field applies to Classified Ad format listings in Motors categories
     *  only.
     *
     * @param bool $answer1
     * @return self
     */
    public function setAnswer1($answer1)
    {
        $this->answer1 = $answer1;
        return $this;
    }

    /**
     * Gets as answer2
     *
     * This field corresponds to a configurable question on the lead form in the View
     *  Item web page. The corresponding question is site-specific. To determine the
     *  question for a specific site, you must view the form in the web flow for the given
     *  site. This field applies to Classified Ad format listings in Motors categories
     *  only.
     *
     * @return bool
     */
    public function getAnswer2()
    {
        return $this->answer2;
    }

    /**
     * Sets a new answer2
     *
     * This field corresponds to a configurable question on the lead form in the View
     *  Item web page. The corresponding question is site-specific. To determine the
     *  question for a specific site, you must view the form in the web flow for the given
     *  site. This field applies to Classified Ad format listings in Motors categories
     *  only.
     *
     * @param bool $answer2
     * @return self
     */
    public function setAnswer2($answer2)
    {
        $this->answer2 = $answer2;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAdditionalInformation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdditionalInformation", $value);
        }
        $value = $this->getAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Address", $value);
        }
        $value = $this->getBestTimeToCall();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BestTimeToCall", $value);
        }
        $value = $this->getEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Email", $value);
        }
        $value = $this->getSubmittedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubmittedTime", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getItemTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemTitle", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getMemberMessage();
        if (null !== $value && !empty($this->getMemberMessage())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MemberMessage", array_map(function ($v) {return ["MemberMessageExchange" => $v];}, $value));
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getLeadFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LeadFee", $value);
        }
        $value = $this->getExternalEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalEmail", $value);
        }
        $value = $this->getPurchaseTimeFrame();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PurchaseTimeFrame", $value);
        }
        $value = $this->getTradeInYear();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TradeInYear", $value);
        }
        $value = $this->getTradeInMake();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TradeInMake", $value);
        }
        $value = $this->getTradeInModel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TradeInModel", $value);
        }
        $value = $this->getFinancingAnswer();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FinancingAnswer", $value);
        }
        $value = $this->getAnswer1();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Answer1", $value);
        }
        $value = $this->getAnswer2();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Answer2", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdditionalInformation');
        if (null !== $value) {
            $this->setAdditionalInformation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Address');
        if (null !== $value) {
            $this->setAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BestTimeToCall');
        if (null !== $value) {
            $this->setBestTimeToCall($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Email');
        if (null !== $value) {
            $this->setEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubmittedTime');
        if (null !== $value) {
            $this->setSubmittedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTitle');
        if (null !== $value) {
            $this->setItemTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MemberMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setMemberMessage(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MemberMessageExchangeType::fromKeyValue(Func::mapArray($v, '{urn:ebay:apis:eBLBaseComponents}MemberMessageExchange', true));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LeadFee');
        if (null !== $value) {
            $this->setLeadFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalEmail');
        if (null !== $value) {
            $this->setExternalEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PurchaseTimeFrame');
        if (null !== $value) {
            $this->setPurchaseTimeFrame($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TradeInYear');
        if (null !== $value) {
            $this->setTradeInYear($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TradeInMake');
        if (null !== $value) {
            $this->setTradeInMake($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TradeInModel');
        if (null !== $value) {
            $this->setTradeInModel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FinancingAnswer');
        if (null !== $value) {
            $this->setFinancingAnswer($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Answer1');
        if (null !== $value) {
            $this->setAnswer1($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Answer2');
        if (null !== $value) {
            $this->setAnswer2($value);
        }
    }
}
