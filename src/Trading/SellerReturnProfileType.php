<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerReturnProfileType
 *
 * Type defining the <b>SellerReturnProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a return policy business policy. Return policy business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs.
 * XSD Type: SellerReturnProfileType
 */
class SellerReturnProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->returnProfileID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReturnProfileID', null, (string) $value);
        }
        $value = $this->returnProfileName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReturnProfileName', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerReturnProfileType
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
                case 'ReturnProfileID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->returnProfileID = (int) $value;
                    }
                    return true;
                case 'ReturnProfileName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->returnProfileName = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ReturnProfileID'] = $this->returnProfileID;
        $data['ReturnProfileName'] = $this->returnProfileName;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
