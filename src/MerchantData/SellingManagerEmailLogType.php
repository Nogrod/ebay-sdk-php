<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerEmailLogType
 *
 * Contains list of Email log.
 * XSD Type: SellingManagerEmailLogType
 */
class SellingManagerEmailLogType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies the type of Selling Manager email.
     *
     * @var string $emailType
     */
    private $emailType = null;

    /**
     * Template name of the custom email.
     *
     * @var string $customEmailName
     */
    private $customEmailName = null;

    /**
     * Success or failure state of this email.
     *
     * @var string $emailState
     */
    private $emailState = null;

    /**
     * Date on which this email event occurred.
     *
     * @var \DateTime $eventTime
     */
    private $eventTime = null;

    /**
     * Gets as emailType
     *
     * Specifies the type of Selling Manager email.
     *
     * @return string
     */
    public function getEmailType()
    {
        return $this->emailType;
    }

    /**
     * Sets a new emailType
     *
     * Specifies the type of Selling Manager email.
     *
     * @param string $emailType
     * @return self
     */
    public function setEmailType($emailType)
    {
        $this->emailType = $emailType;
        return $this;
    }

    /**
     * Gets as customEmailName
     *
     * Template name of the custom email.
     *
     * @return string
     */
    public function getCustomEmailName()
    {
        return $this->customEmailName;
    }

    /**
     * Sets a new customEmailName
     *
     * Template name of the custom email.
     *
     * @param string $customEmailName
     * @return self
     */
    public function setCustomEmailName($customEmailName)
    {
        $this->customEmailName = $customEmailName;
        return $this;
    }

    /**
     * Gets as emailState
     *
     * Success or failure state of this email.
     *
     * @return string
     */
    public function getEmailState()
    {
        return $this->emailState;
    }

    /**
     * Sets a new emailState
     *
     * Success or failure state of this email.
     *
     * @param string $emailState
     * @return self
     */
    public function setEmailState($emailState)
    {
        $this->emailState = $emailState;
        return $this;
    }

    /**
     * Gets as eventTime
     *
     * Date on which this email event occurred.
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Sets a new eventTime
     *
     * Date on which this email event occurred.
     *
     * @param \DateTime $eventTime
     * @return self
     */
    public function setEventTime(\DateTime $eventTime)
    {
        $this->eventTime = $eventTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEmailType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailType", $value);
        }
        $value = $this->getCustomEmailName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomEmailName", $value);
        }
        $value = $this->getEmailState();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailState", $value);
        }
        $value = $this->getEventTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EventTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailType');
        if (null !== $value) {
            $this->setEmailType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomEmailName');
        if (null !== $value) {
            $this->setCustomEmailName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailState');
        if (null !== $value) {
            $this->setEmailState($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventTime');
        if (null !== $value) {
            $this->setEventTime(new \DateTime($value));
        }
    }
}
