<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyProfileType
 *
 * Type defining the <b>shippingPolicyProfile</b> container, which is the container used to define one shipping policy for a seller.
 * XSD Type: ShippingPolicyProfile
 */
class ShippingPolicyProfileType extends SellerProfileType
{
    /**
     * This container consists of detailed shipping information for a seller's shipping policy. This container is conditionally required if the caller is creating a new shipping policy or modifying an existing shipping policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more shipping policies match the input criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo
     */
    private $shippingPolicyInfo = null;

    /**
     * Gets as shippingPolicyInfo
     *
     * This container consists of detailed shipping information for a seller's shipping policy. This container is conditionally required if the caller is creating a new shipping policy or modifying an existing shipping policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more shipping policies match the input criteria in the call request.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType
     */
    public function getShippingPolicyInfo()
    {
        return $this->shippingPolicyInfo;
    }

    /**
     * Sets a new shippingPolicyInfo
     *
     * This container consists of detailed shipping information for a seller's shipping policy. This container is conditionally required if the caller is creating a new shipping policy or modifying an existing shipping policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more shipping policies match the input criteria in the call request.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo
     * @return self
     */
    public function setShippingPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType $shippingPolicyInfo)
    {
        $this->shippingPolicyInfo = $shippingPolicyInfo;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->shippingPolicyInfo;
        if (null !== $value) {
            $writer->startElementNs(null, 'shippingPolicyInfo', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'shippingPolicyInfo':
                    $this->shippingPolicyInfo = \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyInfoType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['shippingPolicyInfo'] = $this->shippingPolicyInfo;
        return $data;
    }
}
