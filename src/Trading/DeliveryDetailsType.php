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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRecipient();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Recipient", $value);
        }
        $value = $this->getSender();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Sender", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Recipient');
        if (null !== $value) {
            $this->setRecipient(\Nogrod\eBaySDK\Trading\DigitalDeliveryUserType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Sender');
        if (null !== $value) {
            $this->setSender(\Nogrod\eBaySDK\Trading\DigitalDeliveryUserType::fromKeyValue($value));
        }
    }
}
