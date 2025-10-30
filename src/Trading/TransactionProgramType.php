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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAuthenticityVerification();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AuthenticityVerification", $value);
        }
        $value = $this->getFulfillment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fulfillment", $value);
        }
        $value = $this->getMotorPurchase();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MotorPurchase", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\TransactionProgramType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}AuthenticityVerification');
        if (null !== $value) {
            $this->setAuthenticityVerification(\Nogrod\eBaySDK\Trading\AuthenticityVerificationType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fulfillment');
        if (null !== $value) {
            $this->setFulfillment(\Nogrod\eBaySDK\Trading\FulfillmentType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}MotorPurchase');
        if (null !== $value) {
            $this->setMotorPurchase(\Nogrod\eBaySDK\Trading\MotorPurchaseType::fromKeyValue($value));
        }
    }
}
