<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyIdentityType
 *
 * This type is for internal use.
 * XSD Type: ShippingPolicyIdentity
 */
class ShippingPolicyIdentityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is for future use.
     *
     * @var int $shippingPolicyId
     */
    private $shippingPolicyId = null;

    /**
     * This field is for internal use.
     *
     * @var int $shippingPolicyVersionId
     */
    private $shippingPolicyVersionId = null;

    /**
     * Gets as shippingPolicyId
     *
     * This field is for future use.
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
     * This field is for future use.
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
     * This field is for internal use.
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
     * This field is for internal use.
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyId');
        if (null !== $value) {
            $this->setShippingPolicyId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}shippingPolicyVersionId');
        if (null !== $value) {
            $this->setShippingPolicyVersionId($value);
        }
    }
}
