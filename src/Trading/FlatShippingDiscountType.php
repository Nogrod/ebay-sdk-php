<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FlatShippingDiscountType
 *
 * Details of an individual discount profile defined by the
 *  user for flat-rate shipping.
 * XSD Type: FlatShippingDiscountType
 */
class FlatShippingDiscountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The type of discount or rule that is being used by the profile.
     *  The value corresponding to the selected rule is set in the same-named field
     *  of <b>FlatShippingDiscount.DiscountProfile</b>.
     *
     * @var string $discountName
     */
    private $discountName = null;

    /**
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @var \Nogrod\eBaySDK\Trading\DiscountProfileType[] $discountProfile
     */
    private $discountProfile = [

    ];

    /**
     * Gets as discountName
     *
     * The type of discount or rule that is being used by the profile.
     *  The value corresponding to the selected rule is set in the same-named field
     *  of <b>FlatShippingDiscount.DiscountProfile</b>.
     *
     * @return string
     */
    public function getDiscountName()
    {
        return $this->discountName;
    }

    /**
     * Sets a new discountName
     *
     * The type of discount or rule that is being used by the profile.
     *  The value corresponding to the selected rule is set in the same-named field
     *  of <b>FlatShippingDiscount.DiscountProfile</b>.
     *
     * @param string $discountName
     * @return self
     */
    public function setDiscountName($discountName)
    {
        $this->discountName = $discountName;
        return $this;
    }

    /**
     * Adds as discountProfile
     *
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DiscountProfileType $discountProfile
     */
    public function addToDiscountProfile(\Nogrod\eBaySDK\Trading\DiscountProfileType $discountProfile)
    {
        if (!is_array($this->discountProfile)) {
            throw new \LogicException('discountProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->discountProfile[] = $discountProfile;
        return $this;
    }

    /**
     * isset discountProfile
     *
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountProfile($index)
    {
        return isset($this->discountProfile[$index]);
    }

    /**
     * unset discountProfile
     *
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountProfile($index)
    {
        unset($this->discountProfile[$index]);
    }

    /**
     * Gets as discountProfile
     *
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\DiscountProfileType>
     */
    public function getDiscountProfile()
    {
        return $this->discountProfile;
    }

    /**
     * Sets a new discountProfile
     *
     * Details of this particular flat-rate shipping discount profile. If the value of <b>ModifyActionCode</b> is <code>Modify</code>, all details of the new version of the profile must be provided. If <b>ModifyActionCode</b> is <code>Delete</code>, <b>DiscountProfileID</b> is required, <b>MappingDiscountProfileID</b> is optional, and all other fields of <b>DiscountProfile</b> are ignored.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\DiscountProfileType> $discountProfile
     * @return self
     */
    public function setDiscountProfile(iterable $discountProfile)
    {
        $this->discountProfile = $discountProfile;
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
        $value = $this->discountName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DiscountName', null, (string) $value);
        }
        $value = $this->discountProfile;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'DiscountProfile', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FlatShippingDiscountType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->discountProfile = [];
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
                case 'DiscountName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->discountName = $value;
                    }
                    return true;
                case 'DiscountProfile':
                    $this->discountProfile[] = \Nogrod\eBaySDK\Trading\DiscountProfileType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
