<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerReturnProfileType
 *
 * Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a return policy business policy. Return policy business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs.
 * XSD Type: SellerReturnProfileType
 */
class SellerReturnProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique identifier of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  Return policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
     *
     * @var int $returnProfileID
     */
    private $returnProfileID = null;

    /**
     * The name of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
     *
     * @var string $returnProfileName
     */
    private $returnProfileName = null;

    /**
     * Gets as returnProfileID
     *
     * The unique identifier of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  Return policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
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
     * The unique identifier of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  Return policy profile IDs can be retrieved with the <b>getReturnPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business policy IDs can also be retrieved through the Business policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
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
     * The name of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
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
     * The name of a return policy business policy. A <b>ReturnProfileID</b> and/or a <b>ReturnProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the return policy settings/values of a return policy business policy. If both fields are provided and their values don't match, the <b>ReturnProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>ReturnProfileID</b> value will always be returned if business policies are set for the listing, and the person making the API call is the seller of the listing. The <b>ReturnProfileName</b> value will be returned if a name is assigned to the return policy business policy.
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnProfileID');
        if (null !== $value) {
            $this->setReturnProfileID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnProfileName');
        if (null !== $value) {
            $this->setReturnProfileName($value);
        }
    }
}
