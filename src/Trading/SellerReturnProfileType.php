<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerReturnProfileType
 *
 * Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a Business Policies return policy profile. Business Policies return policy profiles contain detailed information on the seller's return policy, including the refund option and how many days the buyer has to return the item for a refund.
 * XSD Type: SellerReturnProfileType
 */
class SellerReturnProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique identifier of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  Return Policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile.
     *
     * @var int $returnProfileID
     */
    private $returnProfileID = null;

    /**
     * The name of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile.
     *
     * @var string $returnProfileName
     */
    private $returnProfileName = null;

    /**
     * Gets as returnProfileID
     *
     * The unique identifier of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  Return Policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile.
     *
     * @return int
     */
    public function getReturnProfileID()
    {
        return $this->returnProfileID;
    }

    /**
     * Sets a new returnProfileID
     *
     * The unique identifier of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  Return Policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile.
     *
     * @param int $returnProfileID
     * @return self
     */
    public function setReturnProfileID($returnProfileID)
    {
        $this->returnProfileID = $returnProfileID;
        return $this;
    }

    /**
     * Gets as returnProfileName
     *
     * The name of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile.
     *
     * @return string
     */
    public function getReturnProfileName()
    {
        return $this->returnProfileName;
    }

    /**
     * Sets a new returnProfileName
     *
     * The name of a Business Policies return policy profile. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy values of a Business Policies return policy profile. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy profile.
     *
     * @param string $returnProfileName
     * @return self
     */
    public function setReturnProfileName($returnProfileName)
    {
        $this->returnProfileName = $returnProfileName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getReturnProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnProfileID", $value);
        }
        $value = $this->getReturnProfileName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnProfileName", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnProfileID');
        if (null !== $value) {
            $this->setReturnProfileID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnProfileName');
        if (null !== $value) {
            $this->setReturnProfileName($value);
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
