<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SupportedSellerProfilesType
 *
 * Type defining the <b>SupportedSellerProfiles</b> container for all payment,
 *  return, and shipping policy profiles that a seller has defined for a site.
 * XSD Type: SupportedSellerProfilesType
 */
class SupportedSellerProfilesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of information related to specific Business Policies payment, return,
     *  and shipping policy profiles. The profile type is found in the
     *  <b>ProfileType</b> field.
     *
     * @var \Nogrod\eBaySDK\Trading\SupportedSellerProfileType[] $supportedSellerProfile
     */
    private $supportedSellerProfile = [

    ];

    /**
     * Adds as supportedSellerProfile
     *
     * Container consisting of information related to specific Business Policies payment, return,
     *  and shipping policy profiles. The profile type is found in the
     *  <b>ProfileType</b> field.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SupportedSellerProfileType $supportedSellerProfile
     */
    public function addToSupportedSellerProfile(\Nogrod\eBaySDK\Trading\SupportedSellerProfileType $supportedSellerProfile)
    {
        if (!is_array($this->supportedSellerProfile)) {
            throw new \LogicException('supportedSellerProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->supportedSellerProfile[] = $supportedSellerProfile;
        return $this;
    }

    /**
     * isset supportedSellerProfile
     *
     * Container consisting of information related to specific Business Policies payment, return,
     *  and shipping policy profiles. The profile type is found in the
     *  <b>ProfileType</b> field.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedSellerProfile($index)
    {
        return isset($this->supportedSellerProfile[$index]);
    }

    /**
     * unset supportedSellerProfile
     *
     * Container consisting of information related to specific Business Policies payment, return,
     *  and shipping policy profiles. The profile type is found in the
     *  <b>ProfileType</b> field.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedSellerProfile($index)
    {
        unset($this->supportedSellerProfile[$index]);
    }

    /**
     * Gets as supportedSellerProfile
     *
     * Container consisting of information related to specific Business Policies payment, return,
     *  and shipping policy profiles. The profile type is found in the
     *  <b>ProfileType</b> field.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\SupportedSellerProfileType>
     */
    public function getSupportedSellerProfile()
    {
        return $this->supportedSellerProfile;
    }

    /**
     * Sets a new supportedSellerProfile
     *
     * Container consisting of information related to specific Business Policies payment, return,
     *  and shipping policy profiles. The profile type is found in the
     *  <b>ProfileType</b> field.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\SupportedSellerProfileType> $supportedSellerProfile
     * @return self
     */
    public function setSupportedSellerProfile(iterable $supportedSellerProfile)
    {
        $this->supportedSellerProfile = $supportedSellerProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->supportedSellerProfile;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'SupportedSellerProfile', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SupportedSellerProfilesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->supportedSellerProfile = [];
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
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'SupportedSellerProfile':
                    $this->supportedSellerProfile[] = \Nogrod\eBaySDK\Trading\SupportedSellerProfileType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
