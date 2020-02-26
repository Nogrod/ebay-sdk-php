<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerPaymentProfileType
 *
 * Type defining the <b>SellerPaymentProfile</b> container, which is used in an Add/Revise/Relist/Verify Trading API call to reference a Business Policies payment profile.
 * XSD Type: SellerPaymentProfileType
 */
class SellerPaymentProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The unique identifier of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence.
     *  <br/><br/>
     *  Payment profile IDs can be retrieved with the <b>getPaymentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @var int $paymentProfileID
     */
    private $paymentProfileID = null;

    /**
     * The name of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @var string $paymentProfileName
     */
    private $paymentProfileName = null;

    /**
     * Gets as paymentProfileID
     *
     * The unique identifier of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence.
     *  <br/><br/>
     *  Payment profile IDs can be retrieved with the <b>getPaymentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @return int
     */
    public function getPaymentProfileID()
    {
        return $this->paymentProfileID;
    }

    /**
     * Sets a new paymentProfileID
     *
     * The unique identifier of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence.
     *  <br/><br/>
     *  Payment profile IDs can be retrieved with the <b>getPaymentPolicies</b> call of the <b>Account API</b> or with the <b>getSellerProfiles</b> call of the <b>Business Policies Management API</b>. Business Policy IDs can also be retrieved through the Business Policies section of My eBay.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @param int $paymentProfileID
     * @return self
     */
    public function setPaymentProfileID($paymentProfileID)
    {
        $this->paymentProfileID = $paymentProfileID;
        return $this;
    }

    /**
     * Gets as paymentProfileName
     *
     * The name of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @return string
     */
    public function getPaymentProfileName()
    {
        return $this->paymentProfileName;
    }

    /**
     * Sets a new paymentProfileName
     *
     * The name of a Business Policies payment profile. A <b>PaymentProfileID</b> and/or a <b>PaymentProfileName</b> value is used in the Add/Revise/Relist/Verify call to reference and use the payment policy values of a Business Policies payment profile. If both fields are provided and their values don't match, the <b>PaymentProfileID</b> takes precedence.
     *  <br/><br/>
     *  In the 'Get' calls, the <b>PaymentProfileID</b> value will always be returned if Business Policies are set for the listing, and the person making the API call is the seller of the listing. The <b>PaymentProfileName</b> value will be returned if a name is assigned to the payment profile.
     *
     * @param string $paymentProfileName
     * @return self
     */
    public function setPaymentProfileName($paymentProfileName)
    {
        $this->paymentProfileName = $paymentProfileName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPaymentProfileID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentProfileID", $value);
        }
        $value = $this->getPaymentProfileName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentProfileName", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentProfileID');
        if (null !== $value) {
            $this->setPaymentProfileID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentProfileName');
        if (null !== $value) {
            $this->setPaymentProfileName($value);
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
