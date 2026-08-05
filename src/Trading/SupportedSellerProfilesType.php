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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSupportedSellerProfile();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["SupportedSellerProfile" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SupportedSellerProfilesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SupportedSellerProfile');
        if (null !== $value) {
            $this->setSupportedSellerProfile(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SupportedSellerProfileType::fromKeyValue($v);
            }, $value));
        }
    }
}
