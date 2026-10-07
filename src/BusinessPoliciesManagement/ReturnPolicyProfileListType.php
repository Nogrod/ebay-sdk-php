<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnPolicyProfileListType
 *
 * Type defining the <b>returnPolicyProfileList</b> container, which consists of one or more return policies that match the input criteria in the <b>getSellerProfiles</b> request.
 * XSD Type: ReturnPolicyProfileList
 */
class ReturnPolicyProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType[] $returnPolicyProfile
     */
    private $returnPolicyProfile = [

    ];

    /**
     * Adds as returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile
     */
    public function addToReturnPolicyProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType $returnPolicyProfile)
    {
        if (!is_array($this->returnPolicyProfile)) {
            throw new \LogicException('returnPolicyProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->returnPolicyProfile[] = $returnPolicyProfile;
        return $this;
    }

    /**
     * isset returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReturnPolicyProfile($index)
    {
        return isset($this->returnPolicyProfile[$index]);
    }

    /**
     * unset returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReturnPolicyProfile($index)
    {
        unset($this->returnPolicyProfile[$index]);
    }

    /**
     * Gets as returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType>
     */
    public function getReturnPolicyProfile()
    {
        return $this->returnPolicyProfile;
    }

    /**
     * Sets a new returnPolicyProfile
     *
     * Container consisting of detailed information for a specific return policy that matches the input criteria.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType> $returnPolicyProfile
     * @return self
     */
    public function setReturnPolicyProfile(iterable $returnPolicyProfile)
    {
        $this->returnPolicyProfile = $returnPolicyProfile;
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
        $value = $this->returnPolicyProfile;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ReturnPolicyProfile', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileListType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->returnPolicyProfile = [];
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
                case 'ReturnPolicyProfile':
                    $this->returnPolicyProfile[] = \Nogrod\eBaySDK\BusinessPoliciesManagement\ReturnPolicyProfileType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ReturnPolicyProfile'] = Func::jsonList($this->returnPolicyProfile);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
