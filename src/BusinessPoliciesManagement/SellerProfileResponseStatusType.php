<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerProfileResponseStatusType
 *
 * Type defining the <b>sellerProfileResponseStatus</b> container, which is returned in the <b>removeSellerProfiles</b> response, and indicates whether or not the business policies specified in the call request were successfully deleted.
 * XSD Type: SellerProfileResponseStatus
 */
class SellerProfileResponseStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. A <b>profileId</b> value is returned for all business policies that were successfully deleted. For business policies that were not successfully deleted, the reason may be found in the <b>errorMessage</b> container.
     *
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * A token representing the application-level acknowledgement code that indicates the success of the call.
     *
     * @var string $ack
     */
    private $ack = null;

    /**
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $errorMessage
     */
    private $errorMessage = null;

    /**
     * Gets as profileId
     *
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. A <b>profileId</b> value is returned for all business policies that were successfully deleted. For business policies that were not successfully deleted, the reason may be found in the <b>errorMessage</b> container.
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * Unique identifier for a business policy. Each payment policy, shipping policy, and return policy has its own unique <b>profileId</b>. A <b>profileId</b> value is returned for all business policies that were successfully deleted. For business policies that were not successfully deleted, the reason may be found in the <b>errorMessage</b> container.
     *
     * @param int $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * Gets as ack
     *
     * A token representing the application-level acknowledgement code that indicates the success of the call.
     *
     * @return string
     */
    public function getAck()
    {
        return $this->ack;
    }

    /**
     * Sets a new ack
     *
     * A token representing the application-level acknowledgement code that indicates the success of the call.
     *
     * @param string $ack
     * @return self
     */
    public function setAck($ack)
    {
        $this->ack = $ack;
        return $this;
    }

    /**
     * Adds as error
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error
     */
    public function addToErrorMessage(\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error)
    {
        $this->errorMessage[] = $error;
        return $this;
    }

    /**
     * isset errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrorMessage($index)
    {
        return isset($this->errorMessage[$index]);
    }

    /**
     * unset errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrorMessage($index)
    {
        unset($this->errorMessage[$index]);
    }

    /**
     * Gets as errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * Information for an error or warning that occurred when eBay processed the request.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $errorMessage
     * @return self
     */
    public function setErrorMessage(array $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getProfileId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}profileId", $value);
        }
        $value = $this->getAck();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}ack", $value);
        }
        $value = $this->getErrorMessage();
        if (null !== $value && !empty($this->getErrorMessage())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}errorMessage", array_map(function ($v) {return ["error" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId');
        if (null !== $value) {
            $this->setProfileId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}errorMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setErrorMessage(array_map(function ($v) {return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::fromKeyValue($v);}, $value));
        }
    }
}
