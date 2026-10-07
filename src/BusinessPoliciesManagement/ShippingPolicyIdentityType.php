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
        $value = $this->shippingPolicyId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'shippingPolicyId', null, (string) $value);
        }
        $value = $this->shippingPolicyVersionId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'shippingPolicyVersionId', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyIdentityType
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'shippingPolicyId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingPolicyId = (int) $value;
                    }
                    return true;
                case 'shippingPolicyVersionId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingPolicyVersionId = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
