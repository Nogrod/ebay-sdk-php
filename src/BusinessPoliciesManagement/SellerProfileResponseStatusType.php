<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing SellerProfileResponseStatusType
 *
 *
 * XSD Type: SellerProfileResponseStatus
 */
class SellerProfileResponseStatusType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * @var string $ack
     */
    private $ack = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $errorMessage
     */
    private $errorMessage = null;

    /**
     * Gets as profileId
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
     * @return string
     */
    public function getAck()
    {
        return $this->ack;
    }

    /**
     * Sets a new ack
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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[]
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets a new errorMessage
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $errorMessage
     * @return self
     */
    public function setErrorMessage(array $errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}errorMessage", array_map(function ($v) {
                return ["error" => $v];
            }, $value));
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId');
        if (null !== $value) {
            $this->setProfileId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ack');
        if (null !== $value) {
            $this->setAck($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}errorMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setErrorMessage(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
