<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DigitalDeliveryUserType
 *
 * This type is used to provide the name and email of both the purchaser of a digital gift card, and the recipient of the digital gift card.
 * XSD Type: DigitalDeliveryUserType
 */
class DigitalDeliveryUserType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->email;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Email', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType
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
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'Email':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->email = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Name'] = $this->name;
        $data['Email'] = $this->email;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
