<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeliveryDetailsType
 *
 * This type is used by the <b>DeliveryDetails</b> container that is returned by <b>GetOrders</b> and other order management calls. The <b>DeliveryDetails</b> container is only applicable and returned if the buyer purchased a digital gift card, and is either keeping the gift card or giving that gift card to another person.
 * XSD Type: DeliveryDetailsType
 */
class DeliveryDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of the name and email of the person who is receiving the digital gift card. If the buyer has purchased the gift card for themselves, the buyer's name and email will appear in this container. If the buyer is giving the gift card to another individual, that individual's name and email will appear in this container. This container is always returned for a digital gift card line item.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType $recipient
     */
    private $recipient = null;

    /**
     * This container consists of the name and email of the person who purchased the digital gift card. This container is only returned if the purchaser of the digital gift card is giving the gift card to someone else, and that individual's name and email will appear in the <strong>Recipient</strong> container.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType $sender
     */
    private $sender = null;

    /**
     * Gets as recipient
     *
     * This container consists of the name and email of the person who is receiving the digital gift card. If the buyer has purchased the gift card for themselves, the buyer's name and email will appear in this container. If the buyer is giving the gift card to another individual, that individual's name and email will appear in this container. This container is always returned for a digital gift card line item.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @return \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * This container consists of the name and email of the person who is receiving the digital gift card. If the buyer has purchased the gift card for themselves, the buyer's name and email will appear in this container. If the buyer is giving the gift card to another individual, that individual's name and email will appear in this container. This container is always returned for a digital gift card line item.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @param \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType $recipient
     * @return self
     */
    public function setRecipient(\Nogrod\eBaySDK\Trading\DigitalDeliveryUserType $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as sender
     *
     * This container consists of the name and email of the person who purchased the digital gift card. This container is only returned if the purchaser of the digital gift card is giving the gift card to someone else, and that individual's name and email will appear in the <strong>Recipient</strong> container.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @return \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * This container consists of the name and email of the person who purchased the digital gift card. This container is only returned if the purchaser of the digital gift card is giving the gift card to someone else, and that individual's name and email will appear in the <strong>Recipient</strong> container.
     *  <br><br>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this container will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, real data is only returned to the buyer or seller, and dummy/masked data will be returned to all third parties.
     *
     * @param \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType $sender
     * @return self
     */
    public function setSender(\Nogrod\eBaySDK\Trading\DigitalDeliveryUserType $sender)
    {
        $this->sender = $sender;
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
        $value = $this->recipient;
        if (null !== $value) {
            $writer->startElementNs(null, 'Recipient', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->sender;
        if (null !== $value) {
            $writer->startElementNs(null, 'Sender', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DeliveryDetailsType
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
                case 'Recipient':
                    $this->recipient = \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType::xmlRead($reader);
                    return true;
                case 'Sender':
                    $this->sender = \Nogrod\eBaySDK\Trading\DigitalDeliveryUserType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
