<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesAlertType
 *
 * This type is deprecated.
 * XSD Type: MyMessagesAlertType
 */
class MyMessagesAlertType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $sender
     */
    private $sender = null;

    /**
     * This field is deprecated.
     *
     * @var string $recipientUserID
     */
    private $recipientUserID = null;

    /**
     * This field is deprecated.
     *
     * @var string $subject
     */
    private $subject = null;

    /**
     * This field is deprecated.
     *
     * @var string $priority
     */
    private $priority = null;

    /**
     * This field is deprecated.
     *
     * @var string $alertID
     */
    private $alertID = null;

    /**
     * This field is deprecated.
     *
     * @var string $externalAlertID
     */
    private $externalAlertID = null;

    /**
     * This field is deprecated.
     *
     * @var string $contentType
     */
    private $contentType = null;

    /**
     * This field is deprecated.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * This field is deprecated.
     *
     * @var string $resolutionStatus
     */
    private $resolutionStatus = null;

    /**
     * This field is deprecated.
     *
     * @var bool $read
     */
    private $read = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $creationDate
     */
    private $creationDate = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $receiveDate
     */
    private $receiveDate = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $expirationDate
     */
    private $expirationDate = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $resolutionDate
     */
    private $resolutionDate = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $lastReadDate
     */
    private $lastReadDate = null;

    /**
     * This field is deprecated.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is deprecated.
     *
     * @var bool $isTimedResolution
     */
    private $isTimedResolution = null;

    /**
     * This field is deprecated.
     *
     * @var string $actionURL
     */
    private $actionURL = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType $responseDetails
     */
    private $responseDetails = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType $forwardDetails
     */
    private $forwardDetails = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MyMessagesFolderType $folder
     */
    private $folder = null;

    /**
     * Gets as sender
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * This field is deprecated.
     *
     * @param string $sender
     * @return self
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Gets as recipientUserID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getRecipientUserID()
    {
        return $this->recipientUserID;
    }

    /**
     * Sets a new recipientUserID
     *
     * This field is deprecated.
     *
     * @param string $recipientUserID
     * @return self
     */
    public function setRecipientUserID($recipientUserID)
    {
        $this->recipientUserID = $recipientUserID;
        return $this;
    }

    /**
     * Gets as subject
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * This field is deprecated.
     *
     * @param string $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Gets as priority
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * This field is deprecated.
     *
     * @param string $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as alertID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getAlertID()
    {
        return $this->alertID;
    }

    /**
     * Sets a new alertID
     *
     * This field is deprecated.
     *
     * @param string $alertID
     * @return self
     */
    public function setAlertID($alertID)
    {
        $this->alertID = $alertID;
        return $this;
    }

    /**
     * Gets as externalAlertID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getExternalAlertID()
    {
        return $this->externalAlertID;
    }

    /**
     * Sets a new externalAlertID
     *
     * This field is deprecated.
     *
     * @param string $externalAlertID
     * @return self
     */
    public function setExternalAlertID($externalAlertID)
    {
        $this->externalAlertID = $externalAlertID;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * This field is deprecated.
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as text
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * This field is deprecated.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as resolutionStatus
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getResolutionStatus()
    {
        return $this->resolutionStatus;
    }

    /**
     * Sets a new resolutionStatus
     *
     * This field is deprecated.
     *
     * @param string $resolutionStatus
     * @return self
     */
    public function setResolutionStatus($resolutionStatus)
    {
        $this->resolutionStatus = $resolutionStatus;
        return $this;
    }

    /**
     * Gets as read
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Sets a new read
     *
     * This field is deprecated.
     *
     * @param bool $read
     * @return self
     */
    public function setRead($read)
    {
        $this->read = $read;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * This field is deprecated.
     *
     * @param \DateTime $creationDate
     * @return self
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as receiveDate
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getReceiveDate()
    {
        return $this->receiveDate;
    }

    /**
     * Sets a new receiveDate
     *
     * This field is deprecated.
     *
     * @param \DateTime $receiveDate
     * @return self
     */
    public function setReceiveDate(\DateTime $receiveDate)
    {
        $this->receiveDate = $receiveDate;
        return $this;
    }

    /**
     * Gets as expirationDate
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Sets a new expirationDate
     *
     * This field is deprecated.
     *
     * @param \DateTime $expirationDate
     * @return self
     */
    public function setExpirationDate(\DateTime $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * Gets as resolutionDate
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getResolutionDate()
    {
        return $this->resolutionDate;
    }

    /**
     * Sets a new resolutionDate
     *
     * This field is deprecated.
     *
     * @param \DateTime $resolutionDate
     * @return self
     */
    public function setResolutionDate(\DateTime $resolutionDate)
    {
        $this->resolutionDate = $resolutionDate;
        return $this;
    }

    /**
     * Gets as lastReadDate
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getLastReadDate()
    {
        return $this->lastReadDate;
    }

    /**
     * Sets a new lastReadDate
     *
     * This field is deprecated.
     *
     * @param \DateTime $lastReadDate
     * @return self
     */
    public function setLastReadDate(\DateTime $lastReadDate)
    {
        $this->lastReadDate = $lastReadDate;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Gets as isTimedResolution
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getIsTimedResolution()
    {
        return $this->isTimedResolution;
    }

    /**
     * Sets a new isTimedResolution
     *
     * This field is deprecated.
     *
     * @param bool $isTimedResolution
     * @return self
     */
    public function setIsTimedResolution($isTimedResolution)
    {
        $this->isTimedResolution = $isTimedResolution;
        return $this;
    }

    /**
     * Gets as actionURL
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getActionURL()
    {
        return $this->actionURL;
    }

    /**
     * Sets a new actionURL
     *
     * This field is deprecated.
     *
     * @param string $actionURL
     * @return self
     */
    public function setActionURL($actionURL)
    {
        $this->actionURL = $actionURL;
        return $this;
    }

    /**
     * Gets as responseDetails
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType
     */
    public function getResponseDetails()
    {
        return $this->responseDetails;
    }

    /**
     * Sets a new responseDetails
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType $responseDetails
     * @return self
     */
    public function setResponseDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType $responseDetails)
    {
        $this->responseDetails = $responseDetails;
        return $this;
    }

    /**
     * Gets as forwardDetails
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType
     */
    public function getForwardDetails()
    {
        return $this->forwardDetails;
    }

    /**
     * Sets a new forwardDetails
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType $forwardDetails
     * @return self
     */
    public function setForwardDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType $forwardDetails)
    {
        $this->forwardDetails = $forwardDetails;
        return $this;
    }

    /**
     * Gets as folder
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MyMessagesFolderType
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets a new folder
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MyMessagesFolderType $folder
     * @return self
     */
    public function setFolder(\Nogrod\eBaySDK\MerchantData\MyMessagesFolderType $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSender();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sender", $value);
        }
        $value = $this->getRecipientUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RecipientUserID", $value);
        }
        $value = $this->getSubject();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Subject", $value);
        }
        $value = $this->getPriority();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Priority", $value);
        }
        $value = $this->getAlertID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlertID", $value);
        }
        $value = $this->getExternalAlertID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalAlertID", $value);
        }
        $value = $this->getContentType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ContentType", $value);
        }
        $value = $this->getText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Text", $value);
        }
        $value = $this->getResolutionStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResolutionStatus", $value);
        }
        $value = $this->getRead();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Read", $value);
        }
        $value = $this->getCreationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreationDate", $value);
        }
        $value = $this->getReceiveDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReceiveDate", $value);
        }
        $value = $this->getExpirationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpirationDate", $value);
        }
        $value = $this->getResolutionDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResolutionDate", $value);
        }
        $value = $this->getLastReadDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastReadDate", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getIsTimedResolution();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IsTimedResolution", $value);
        }
        $value = $this->getActionURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActionURL", $value);
        }
        $value = $this->getResponseDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseDetails", $value);
        }
        $value = $this->getForwardDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ForwardDetails", $value);
        }
        $value = $this->getFolder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Folder", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sender');
        if (null !== $value) {
            $this->setSender($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RecipientUserID');
        if (null !== $value) {
            $this->setRecipientUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Subject');
        if (null !== $value) {
            $this->setSubject($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Priority');
        if (null !== $value) {
            $this->setPriority($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertID');
        if (null !== $value) {
            $this->setAlertID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalAlertID');
        if (null !== $value) {
            $this->setExternalAlertID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContentType');
        if (null !== $value) {
            $this->setContentType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Text');
        if (null !== $value) {
            $this->setText($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResolutionStatus');
        if (null !== $value) {
            $this->setResolutionStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Read');
        if (null !== $value) {
            $this->setRead($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationDate');
        if (null !== $value) {
            $this->setCreationDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReceiveDate');
        if (null !== $value) {
            $this->setReceiveDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpirationDate');
        if (null !== $value) {
            $this->setExpirationDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResolutionDate');
        if (null !== $value) {
            $this->setResolutionDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastReadDate');
        if (null !== $value) {
            $this->setLastReadDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsTimedResolution');
        if (null !== $value) {
            $this->setIsTimedResolution($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActionURL');
        if (null !== $value) {
            $this->setActionURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseDetails');
        if (null !== $value) {
            $this->setResponseDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesResponseDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ForwardDetails');
        if (null !== $value) {
            $this->setForwardDetails(\Nogrod\eBaySDK\MerchantData\MyMessagesForwardDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Folder');
        if (null !== $value) {
            $this->setFolder(\Nogrod\eBaySDK\MerchantData\MyMessagesFolderType::fromKeyValue($value));
        }
    }
}
