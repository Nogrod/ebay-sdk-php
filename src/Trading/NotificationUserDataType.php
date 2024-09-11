<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationUserDataType
 *
 * User data related to notifications.
 * XSD Type: NotificationUserDataType
 */
class NotificationUserDataType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned in the
     *  notification payload. The string can contain user-specific information to
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution and proper encryption.
     *
     * @var string $externalUserData
     */
    private $externalUserData = null;

    /**
     * Gets as externalUserData
     *
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned in the
     *  notification payload. The string can contain user-specific information to
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution and proper encryption.
     *
     * @return string
     */
    public function getExternalUserData()
    {
        return $this->externalUserData;
    }

    /**
     * Sets a new externalUserData
     *
     * An application subscribing to notifications can include an XML-compliant
     *  string, not to exceed 256 characters, which will be returned in the
     *  notification payload. The string can contain user-specific information to
     *  identify a particular user. Any sensitive information should be passed with due
     *  caution and proper encryption.
     *
     * @param string $externalUserData
     * @return self
     */
    public function setExternalUserData($externalUserData)
    {
        $this->externalUserData = $externalUserData;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExternalUserData();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExternalUserData", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalUserData');
        if (null !== $value) {
            $this->setExternalUserData($value);
        }
    }
}
