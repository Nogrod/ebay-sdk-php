<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerShippingProfileType
 *
 * Type defining the <b>SellerShippingProfile</b> container, which is used in an Add/Revise/Relist Trading API call to reference a Business Policies shipping policy profile. Business Policies shipping profiles contain detailed information on domestic and international shipping, including shipping service options, handling time, package handling costs, excluded ship-to locations, and shipping insurance information.
 * XSD Type: SellerShippingProfileType
 */
class SellerShippingProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique identifier of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the Shippping values of a Business Policies shipping profile. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence.
     *  <br/><br/>
     *  Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShipppingProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping profile.
     *
     * @var int $shippingProfileID
     */
    private $shippingProfileID = null;

    /**
     * The name of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping values of a Business Policies shipping profile. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @var string $shippingProfileName
     */
    private $shippingProfileName = null;

    /**
     * Gets as shippingProfileID
     *
     * The unique identifier of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the Shippping values of a Business Policies shipping profile. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence.
     *  <br/><br/>
     *  Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShipppingProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping profile.
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
     * The unique identifier of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShipppingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the Shippping values of a Business Policies shipping profile. If both fields are provided and their values don't match, the <b>ShipppingProfileID</b> takes precedence.
     *  <br/><br/>
     *  Shipping profile IDs can be retrieved with the <b>getFulfillmentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShipppingProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShipppingProfileName</b> value will be returned if a name is assigned to the shipping profile.
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
     * The name of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping values of a Business Policies shipping profile. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the payment profile.
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
     * The name of a Business Policies shipping profile. A <b>ShippingProfileID</b> and/or a <b>ShippingProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the shipping values of a Business Policies shipping profile. If both fields are provided and their values don't match, the <b>ShippingProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ShippingProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ShippingProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @param string $shippingProfileName
     * @return self
     */
    public function setShippingProfileName($shippingProfileName)
    {
        $this->shippingProfileName = $shippingProfileName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingProfileID", $value);
        }
        $value = $this->getShippingProfileName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingProfileName", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingProfileID');
        if (null !== $value) {
            $this->setShippingProfileID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingProfileName');
        if (null !== $value) {
            $this->setShippingProfileName($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
