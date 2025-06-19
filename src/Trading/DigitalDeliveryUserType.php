<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DigitalDeliveryUserType
 *
 * This type is used to provide the name and email of both the purchaser of a digital gift card, and the recipient of the digital gift card.
 * XSD Type: DigitalDeliveryUserType
 */
class DigitalDeliveryUserType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field displays the actual name (not the eBay user ID) of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the actual name of the recipient of the digital gift card (applicable for the <strong>Recipient</strong> container). Both the sender and recipient name is provided by the purchaser of the digital gift card at time of purchase.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This field displays the email address of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the email address of the recipient of the digital gift card (applicable for the <strong>Recipient</strong> container). Both the sender and recipient email address is provided by the purchaser of the digital gift card at time of purchase.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * Gets as name
     *
     * This field displays the actual name (not the eBay user ID) of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the actual name of the recipient of the digital gift card (applicable for the <strong>Recipient</strong> container). Both the sender and recipient name is provided by the purchaser of the digital gift card at time of purchase.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This field displays the actual name (not the eBay user ID) of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the actual name of the recipient of the digital gift card (applicable for the <strong>Recipient</strong> container). Both the sender and recipient name is provided by the purchaser of the digital gift card at time of purchase.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as email
     *
     * This field displays the email address of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the email address of the recipient of the digital gift card (applicable for the <strong>Recipient</strong> container). Both the sender and recipient email address is provided by the purchaser of the digital gift card at time of purchase.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
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
     * This field displays the email address of the sender/purchaser of the digital gift card (applicable for the <strong>Sender</strong> container) or the email address of the recipient of the digital gift card (applicable for the <strong>Recipient</strong> container). Both the sender and recipient email address is provided by the purchaser of the digital gift card at time of purchase.
     *  <br><br>
     *  <b>For GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and a string value of <code>Unavailable</code> will be returned to all third parties.
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
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Email", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Email');
        if (null !== $value) {
            $this->setEmail($value);
        }
    }
}
