<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingPolicyProfileListType
 *
 * Type defining the <b>shipingPolicyProfile</b> container, which consists of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request.
 * XSD Type: ShippingPolicyProfileList
 */
class ShippingPolicyProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType[] $shippingPolicyProfile
     */
    private $shippingPolicyProfile = [

    ];

    /**
     * Adds as shippingPolicyProfile
     *
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile
     */
    public function addToShippingPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType $shippingPolicyProfile)
    {
        if (!is_array($this->shippingPolicyProfile)) {
            throw new \LogicException('shippingPolicyProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->shippingPolicyProfile[] = $shippingPolicyProfile;
        return $this;
    }

    /**
     * isset shippingPolicyProfile
     *
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShippingPolicyProfile($index)
    {
        return isset($this->shippingPolicyProfile[$index]);
    }

    /**
     * unset shippingPolicyProfile
     *
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShippingPolicyProfile($index)
    {
        unset($this->shippingPolicyProfile[$index]);
    }

    /**
     * Gets as shippingPolicyProfile
     *
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType>
     */
    public function getShippingPolicyProfile()
    {
        return $this->shippingPolicyProfile;
    }

    /**
     * Sets a new shippingPolicyProfile
     *
     * Container consisting of one or more shipping policies that match the input criteria in the <b>getSellerProfiles</b> request. This container is not returned if no shipping policies match the input criteria.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType> $shippingPolicyProfile
     * @return self
     */
    public function setShippingPolicyProfile(iterable $shippingPolicyProfile)
    {
        $this->shippingPolicyProfile = $shippingPolicyProfile;
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
        $value = $this->shippingPolicyProfile;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ShippingPolicyProfile', null);
                $v->xmlSerialize($writer);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileListType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->shippingPolicyProfile = [];
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
                case 'ShippingPolicyProfile':
                    $this->shippingPolicyProfile[] = \Nogrod\eBaySDK\BusinessPoliciesManagement\ShippingPolicyProfileType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
