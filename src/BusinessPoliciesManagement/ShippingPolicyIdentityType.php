<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing ShippingPolicyIdentityType
 *
 * Identity for shipping policy.
 * XSD Type: ShippingPolicyIdentity
 */
class ShippingPolicyIdentityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var int $shippingPolicyId
     */
    private $shippingPolicyId = null;

    /**
     * @var int $shippingPolicyVersionId
     */
    private $shippingPolicyVersionId = null;

    /**
     * Gets as shippingPolicyId
     *
     * @return int
     */
    public function getShippingPolicyId()
    {
        return $this->shippingPolicyId;
    }

    /**
     * Sets a new shippingPolicyId
     *
     * @param int $shippingPolicyId
     * @return self
     */
    public function setShippingPolicyId($shippingPolicyId)
    {
        $this->shippingPolicyId = $shippingPolicyId;
        return $this;
    }

    /**
     * Gets as shippingPolicyVersionId
     *
     * @return int
     */
    public function getShippingPolicyVersionId()
    {
        return $this->shippingPolicyVersionId;
    }

    /**
     * Sets a new shippingPolicyVersionId
     *
     * @param int $shippingPolicyVersionId
     * @return self
     */
    public function setShippingPolicyVersionId($shippingPolicyVersionId)
    {
        $this->shippingPolicyVersionId = $shippingPolicyVersionId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getShippingPolicyId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyId", $value);
        }
        $value = $this->getShippingPolicyVersionId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyVersionId", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyId');
        if (null !== $value) {
            $this->setShippingPolicyId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyVersionId');
        if (null !== $value) {
            $this->setShippingPolicyVersionId($value);
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
