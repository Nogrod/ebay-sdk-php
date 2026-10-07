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
        if (!is_array($this->errorMessage)) {
            throw new \LogicException('errorMessage is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType>
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
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType> $errorMessage
     * @return self
     */
    public function setErrorMessage(iterable $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->profileId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileId', null, (string) $value);
        }
        $value = $this->ack;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ack', null, (string) $value);
        }
        $value = $this->errorMessage;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'errorMessage', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'error', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->errorMessage = [];
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'profileId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileId = (int) $value;
                    }
                    return true;
                case 'ack':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->ack = $value;
                    }
                    return true;
                case 'errorMessage':
                    $this->errorMessage = Func::readList($reader, 'error', 'http://www.ebay.com/marketplace/selling/v1/services', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::xmlRead($reader));
                    return true;
            }
        }
        return false;
    }
}
