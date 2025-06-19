<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryStatusType
 *
 * This type is used by the <b>DeliveryStatus</b> container, which will list the current status of whatever delivery method is being used (indicated in the <b>DigitalDeliverySelected.DeliveryMethod</b> field). Currently, the only supported delivery method is by email.
 * XSD Type: DeliveryStatusType
 */
class DeliveryStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the current delivery status for the digital gift card that is being delivered by email. Currently, the only supported delivery status value is 'Notified', which indicates that the link to download the digital gift card has been sent to the recipient by email.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as email
     *
     * This value indicates the current delivery status for the digital gift card that is being delivered by email. Currently, the only supported delivery status value is 'Notified', which indicates that the link to download the digital gift card has been sent to the recipient by email.
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
     * This value indicates the current delivery status for the digital gift card that is being delivered by email. Currently, the only supported delivery status value is 'Notified', which indicates that the link to download the digital gift card has been sent to the recipient by email.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Email", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DeliveryStatusType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Email');
        if (null !== $value) {
            $this->setEmail($value);
        }
    }
}
