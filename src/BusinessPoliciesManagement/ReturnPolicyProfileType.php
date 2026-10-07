<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyProfileType
 *
 * Type defining the <b>returnPolicyProfile</b> container, which is the container used to define one return policy for a seller.
 * XSD Type: ReturnPolicyProfile
 */
class ReturnPolicyProfileType extends SellerProfileType
{
    /**
     * This container consists of detailed information on a seller's return policy. This container is conditionally required if the caller is creating a new return policy or modifying an existing return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType $returnPolicyInfo
     */
    private $returnPolicyInfo = null;

    /**
     * This container consists of detailed information on a seller's international return policy (returns that require an international shipping service to ship). This container is optional and allows for a seller to establish an international return policy that differs from their domestic return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo
     */
    private $internationalReturnPolicyInfo = null;

    /**
     * Gets as returnPolicyInfo
     *
     * This container consists of detailed information on a seller's return policy. This container is conditionally required if the caller is creating a new return policy or modifying an existing return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType
     */
    public function getReturnPolicyInfo()
    {
        return $this->returnPolicyInfo;
    }

    /**
     * Sets a new returnPolicyInfo
     *
     * This container consists of detailed information on a seller's return policy. This container is conditionally required if the caller is creating a new return policy or modifying an existing return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType $returnPolicyInfo
     * @return self
     */
    public function setReturnPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType $returnPolicyInfo)
    {
        $this->returnPolicyInfo = $returnPolicyInfo;
        return $this;
    }

    /**
     * Gets as internationalReturnPolicyInfo
     *
     * This container consists of detailed information on a seller's international return policy (returns that require an international shipping service to ship). This container is optional and allows for a seller to establish an international return policy that differs from their domestic return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType
     */
    public function getInternationalReturnPolicyInfo()
    {
        return $this->internationalReturnPolicyInfo;
    }

    /**
     * Sets a new internationalReturnPolicyInfo
     *
     * This container consists of detailed information on a seller's international return policy (returns that require an international shipping service to ship). This container is optional and allows for a seller to establish an international return policy that differs from their domestic return policy.
     *  <br><br>
     *  This container is returned by <b>getSellerProfiles</b> if one or more return policies match the input criteria in the call request.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo
     * @return self
     */
    public function setInternationalReturnPolicyInfo(\Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType $internationalReturnPolicyInfo)
    {
        $this->internationalReturnPolicyInfo = $internationalReturnPolicyInfo;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->returnPolicyInfo;
        if (null !== $value) {
            $writer->startElementNs(null, 'returnPolicyInfo', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->internationalReturnPolicyInfo;
        if (null !== $value) {
            $writer->startElementNs(null, 'internationalReturnPolicyInfo', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType
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
                case 'returnPolicyInfo':
                    $this->returnPolicyInfo = \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyInfoType::xmlRead($reader);
                    return true;
                case 'internationalReturnPolicyInfo':
                    $this->internationalReturnPolicyInfo = \Nogrod\eBaySDK\BusinessPoliciesManagement\InternationalReturnPolicyInfoType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
