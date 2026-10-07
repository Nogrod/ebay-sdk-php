<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CalculatedShippingDiscountType
 *
 * Type used by the <b>CalculatedShippingDiscount</b> container, which is used in the <b>SetShippingDiscountProfiles</b> call to create one or more discounted calculated shipping rules. The <b>CalculatedShippingDiscount</b> container is returned in the response of all other calls that use this type.
 * XSD Type: CalculatedShippingDiscountType
 */
class CalculatedShippingDiscountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
     *
     * @var string $discountName
     */
    private $discountName = null;

    /**
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
     *
     * @var \Nogrod\eBaySDK\Trading\DiscountProfileType[] $discountProfile
     */
    private $discountProfile = [

    ];

    /**
     * Gets as discountName
     *
     * This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
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
     * This enumeration value indicates the type of calculated shipping discount rule that is being applied. Each rule is explained below.
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
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
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
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
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
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
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
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
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
     * This container provides details of this particular calculated shipping discount profile.
     *  <br><br>
     *  <b>For SetShippingDiscountProfiles</b>: If the
     *  <b>ModifyActionCode</b> value is set to <code>Update</code>, all details of the modified version of the profile must
     *  be provided. If the
     *  <b>ModifyActionCode</b> value is set to <code>Delete</code>, the <b>DiscountProfileID</b> is required,
     *  the <b>MappingDiscountProfileID</b> is optional, and all other fields of the container are no longer applicable.
     *  <br><br>
     *  Restrictions on how many profiles can exist for a given
     *  discount rule are discussed in the Features Guide documentation on Shipping Cost Discount Profiles.
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CalculatedShippingDiscountType
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

    protected function jsonProperties(): array
    {
        $data = [];
        $data['DiscountName'] = $this->discountName;
        $data['DiscountProfile'] = Func::jsonList($this->discountProfile);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
