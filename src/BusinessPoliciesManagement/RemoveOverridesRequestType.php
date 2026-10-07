<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveOverridesRequestType
 *
 * This call is used to remove shipping cost overrides for a specific shipping policy. The only input parameter for this call is the unique identifier of the shipping policy, and the response contains only the standard output fields.
 * XSD Type: RemoveOverridesRequest
 */
class RemoveOverridesRequestType extends BaseRequestType
{
    /**
     * The unique identifier of the shipping policy. The seller provides the <b>profileId</b> of the shipping policy for which he/she would like to remove shipping cost overrides.
     *
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * Gets as profileId
     *
     * The unique identifier of the shipping policy. The seller provides the <b>profileId</b> of the shipping policy for which he/she would like to remove shipping cost overrides.
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
     * The unique identifier of the shipping policy. The seller provides the <b>profileId</b> of the shipping policy for which he/she would like to remove shipping cost overrides.
     *
     * @param int $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->profileId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileId', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesRequestType
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
                case 'profileId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileId = (int) $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
