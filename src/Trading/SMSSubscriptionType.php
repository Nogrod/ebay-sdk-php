<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SMSSubscriptionType
 *
 * User data related to notifications. Note that SMS is currently reserved for future use.
 * XSD Type: SMSSubscriptionType
 */
class SMSSubscriptionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The wireless phone number to be used for receiving SMS messages.
     *  Max length of phone number varies by country.
     *
     * @var string $sMSPhone
     */
    private $sMSPhone = null;

    /**
     * Registered/Unregistered/Pending.
     *
     * @var string $userStatus
     */
    private $userStatus = null;

    /**
     * The wireless carrier ID.
     *
     * @var string $carrierID
     */
    private $carrierID = null;

    /**
     * Reason for SMS subscription error (postback from thired-party integrator).
     *
     * @var string $errorCode
     */
    private $errorCode = null;

    /**
     * ID of item to unsubscribe from SMS notification.
     *
     * @var string $itemToUnsubscribe
     */
    private $itemToUnsubscribe = null;

    /**
     * Gets as sMSPhone
     *
     * The wireless phone number to be used for receiving SMS messages.
     *  Max length of phone number varies by country.
     *
     * @return string
     */
    public function getSMSPhone()
    {
        return $this->sMSPhone;
    }

    /**
     * Sets a new sMSPhone
     *
     * The wireless phone number to be used for receiving SMS messages.
     *  Max length of phone number varies by country.
     *
     * @param string $sMSPhone
     * @return self
     */
    public function setSMSPhone($sMSPhone)
    {
        $this->sMSPhone = $sMSPhone;
        return $this;
    }

    /**
     * Gets as userStatus
     *
     * Registered/Unregistered/Pending.
     *
     * @return string
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Sets a new userStatus
     *
     * Registered/Unregistered/Pending.
     *
     * @param string $userStatus
     * @return self
     */
    public function setUserStatus($userStatus)
    {
        $this->userStatus = $userStatus;
        return $this;
    }

    /**
     * Gets as carrierID
     *
     * The wireless carrier ID.
     *
     * @return string
     */
    public function getCarrierID()
    {
        return $this->carrierID;
    }

    /**
     * Sets a new carrierID
     *
     * The wireless carrier ID.
     *
     * @param string $carrierID
     * @return self
     */
    public function setCarrierID($carrierID)
    {
        $this->carrierID = $carrierID;
        return $this;
    }

    /**
     * Gets as errorCode
     *
     * Reason for SMS subscription error (postback from thired-party integrator).
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets a new errorCode
     *
     * Reason for SMS subscription error (postback from thired-party integrator).
     *
     * @param string $errorCode
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * Gets as itemToUnsubscribe
     *
     * ID of item to unsubscribe from SMS notification.
     *
     * @return string
     */
    public function getItemToUnsubscribe()
    {
        return $this->itemToUnsubscribe;
    }

    /**
     * Sets a new itemToUnsubscribe
     *
     * ID of item to unsubscribe from SMS notification.
     *
     * @param string $itemToUnsubscribe
     * @return self
     */
    public function setItemToUnsubscribe($itemToUnsubscribe)
    {
        $this->itemToUnsubscribe = $itemToUnsubscribe;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSMSPhone();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SMSPhone", $value);
        }
        $value = $this->getUserStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserStatus", $value);
        }
        $value = $this->getCarrierID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CarrierID", $value);
        }
        $value = $this->getErrorCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorCode", $value);
        }
        $value = $this->getItemToUnsubscribe();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemToUnsubscribe", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SMSPhone');
        if (null !== $value) {
            $this->setSMSPhone($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserStatus');
        if (null !== $value) {
            $this->setUserStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CarrierID');
        if (null !== $value) {
            $this->setCarrierID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorCode');
        if (null !== $value) {
            $this->setErrorCode($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemToUnsubscribe');
        if (null !== $value) {
            $this->setItemToUnsubscribe($value);
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
