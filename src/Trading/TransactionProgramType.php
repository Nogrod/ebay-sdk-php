<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TransactionProgramType
 *
 * This type is used by the <b>Program</b> container, which provides details on whether the order line item has passed or failed the authenticity inspection.
 * XSD Type: TransactionProgramType
 */
class TransactionProgramType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container gives status on whether the order line item has passed or failed the authenticity inspection.
     *
     * @var \Nogrod\eBaySDK\Trading\AuthenticityVerificationType $authenticityVerification
     */
    private $authenticityVerification = null;

    /**
     * This container provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     *
     * @var \Nogrod\eBaySDK\Trading\FulfillmentType $fulfillment
     */
    private $fulfillment = null;

    /**
     * This container provides details on a motor vehicle being purchased using Secure Purchase. It is only applicable and returned for motor vehicle listings on eBay Motors.<br><br>For more information about using Secure Purchase to purchase a vehicle, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @var \Nogrod\eBaySDK\Trading\MotorPurchaseType $motorPurchase
     */
    private $motorPurchase = null;

    /**
     * Gets as authenticityVerification
     *
     * This container gives status on whether the order line item has passed or failed the authenticity inspection.
     *
     * @return \Nogrod\eBaySDK\Trading\AuthenticityVerificationType
     */
    public function getAuthenticityVerification()
    {
        return $this->authenticityVerification;
    }

    /**
     * Sets a new authenticityVerification
     *
     * This container gives status on whether the order line item has passed or failed the authenticity inspection.
     *
     * @param \Nogrod\eBaySDK\Trading\AuthenticityVerificationType $authenticityVerification
     * @return self
     */
    public function setAuthenticityVerification(\Nogrod\eBaySDK\Trading\AuthenticityVerificationType $authenticityVerification)
    {
        $this->authenticityVerification = $authenticityVerification;
        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * This container provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     *
     * @return \Nogrod\eBaySDK\Trading\FulfillmentType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * This container provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     *
     * @param \Nogrod\eBaySDK\Trading\FulfillmentType $fulfillment
     * @return self
     */
    public function setFulfillment(\Nogrod\eBaySDK\Trading\FulfillmentType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }

    /**
     * Gets as motorPurchase
     *
     * This container provides details on a motor vehicle being purchased using Secure Purchase. It is only applicable and returned for motor vehicle listings on eBay Motors.<br><br>For more information about using Secure Purchase to purchase a vehicle, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @return \Nogrod\eBaySDK\Trading\MotorPurchaseType
     */
    public function getMotorPurchase()
    {
        return $this->motorPurchase;
    }

    /**
     * Sets a new motorPurchase
     *
     * This container provides details on a motor vehicle being purchased using Secure Purchase. It is only applicable and returned for motor vehicle listings on eBay Motors.<br><br>For more information about using Secure Purchase to purchase a vehicle, see <a href="https://pages.ebay.com/secure-purchase/" target="_blank">Secure Purchase</a>.
     *
     * @param \Nogrod\eBaySDK\Trading\MotorPurchaseType $motorPurchase
     * @return self
     */
    public function setMotorPurchase(\Nogrod\eBaySDK\Trading\MotorPurchaseType $motorPurchase)
    {
        $this->motorPurchase = $motorPurchase;
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
        $value = $this->authenticityVerification;
        if (null !== $value) {
            $writer->startElementNs(null, 'AuthenticityVerification', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->fulfillment;
        if (null !== $value) {
            $writer->startElementNs(null, 'Fulfillment', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->motorPurchase;
        if (null !== $value) {
            $writer->startElementNs(null, 'MotorPurchase', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TransactionProgramType
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
                case 'AuthenticityVerification':
                    $this->authenticityVerification = \Nogrod\eBaySDK\Trading\AuthenticityVerificationType::xmlRead($reader);
                    return true;
                case 'Fulfillment':
                    $this->fulfillment = \Nogrod\eBaySDK\Trading\FulfillmentType::xmlRead($reader);
                    return true;
                case 'MotorPurchase':
                    $this->motorPurchase = \Nogrod\eBaySDK\Trading\MotorPurchaseType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
