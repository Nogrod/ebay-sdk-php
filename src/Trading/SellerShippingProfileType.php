<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerShippingProfileType
 *
 * Type defining the <b>SellerShippingProfile</b> container, which is used in an Add/Revise/Relist Trading API call to reference a shipping business policy. Shipping business policies contain detailed information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations.
 * XSD Type: SellerShippingProfileType
 */
class SellerShippingProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The unique identifier of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shippping-related settings/values of a shipping business policy. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence.
     *  <br/><br/>
     *  Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShipppingProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     *
     * @var int $shippingProfileID
     */
    private $shippingProfileID = null;

    /**
     * The name of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping-related settings/values of a shipping business policy. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     *
     * @var string $shippingProfileName
     */
    private $shippingProfileName = null;

    /**
     * Gets as shippingProfileID
     *
     * The unique identifier of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shippping-related settings/values of a shipping business policy. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence.
     *  <br/><br/>
     *  Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShipppingProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     *
     * @return int
     */
    public function getShippingProfileID()
    {
        return $this->shippingProfileID;
    }

    /**
     * Sets a new shippingProfileID
     *
     * The unique identifier of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shippping-related settings/values of a shipping business policy. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence.
     *  <br/><br/>
     *  Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShipppingProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     *
     * @param int $shippingProfileID
     * @return self
     */
    public function setShippingProfileID($shippingProfileID)
    {
        $this->shippingProfileID = $shippingProfileID;
        return $this;
    }

    /**
     * Gets as shippingProfileName
     *
     * The name of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping-related settings/values of a shipping business policy. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     *
     * @return string
     */
    public function getShippingProfileName()
    {
        return $this->shippingProfileName;
    }

    /**
     * Sets a new shippingProfileName
     *
     * The name of a shipping business policy. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping-related settings/values of a shipping business policy. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the shipping business policy.
     *
     * @param string $shippingProfileName
     * @return self
     */
    public function setShippingProfileName($shippingProfileName)
    {
        $this->shippingProfileName = $shippingProfileName;
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
        $value = $this->shippingProfileID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingProfileID', null, (string) $value);
        }
        $value = $this->shippingProfileName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingProfileName', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerShippingProfileType
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
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ShippingProfileID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingProfileID = (int) $value;
                    }
                    return true;
                case 'ShippingProfileName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingProfileName = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ShippingProfileID'] = $this->shippingProfileID;
        $data['ShippingProfileName'] = $this->shippingProfileName;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
