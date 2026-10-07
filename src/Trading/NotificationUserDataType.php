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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->externalUserData;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExternalUserData', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NotificationUserDataType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ExternalUserData':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->externalUserData = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
