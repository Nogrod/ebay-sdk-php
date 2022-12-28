<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\AuthenticityVerificationType $authenticityVerification
     */
    private $authenticityVerification = null;

    /**
     * This container provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     *
     * @var \Nogrod\eBaySDK\MerchantData\FulfillmentType $fulfillment
     */
    private $fulfillment = null;

    /**
     * Gets as authenticityVerification
     *
     * This container gives status on whether the order line item has passed or failed the authenticity inspection.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AuthenticityVerificationType
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
     * @param \Nogrod\eBaySDK\MerchantData\AuthenticityVerificationType $authenticityVerification
     * @return self
     */
    public function setAuthenticityVerification(\Nogrod\eBaySDK\MerchantData\AuthenticityVerificationType $authenticityVerification)
    {
        $this->authenticityVerification = $authenticityVerification;
        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * This container provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     *
     * @return \Nogrod\eBaySDK\MerchantData\FulfillmentType
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
     * @param \Nogrod\eBaySDK\MerchantData\FulfillmentType $fulfillment
     * @return self
     */
    public function setFulfillment(\Nogrod\eBaySDK\MerchantData\FulfillmentType $fulfillment)
    {
        $this->fulfillment = $fulfillment;
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AuthenticityVerification');
        if (null !== $value) {
            $this->setAuthenticityVerification(\Nogrod\eBaySDK\MerchantData\AuthenticityVerificationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fulfillment');
        if (null !== $value) {
            $this->setFulfillment(\Nogrod\eBaySDK\MerchantData\FulfillmentType::fromKeyValue($value));
        }
    }
}
