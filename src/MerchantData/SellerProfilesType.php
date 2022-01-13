<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerProfilesType
 *
 * Type defining the <b>SellerProfiles</b> container, which consists of references to a seller's payment, shipping, and return policy profiles.
 * XSD Type: SellerProfilesType
 */
class SellerProfilesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Muliple shipping business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerShippingProfileType $sellerShippingProfile
     */
    private $sellerShippingProfile = null;

    /**
     * The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return policy business policy. Return policy business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs. Muliple return policy business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerReturnProfileType $sellerReturnProfile
     */
    private $sellerReturnProfile = null;

    /**
     * The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a payment business policy. Payment business policies contain accepted payment methods, a flag to set up the immediate payment feature, a field to specify the seller's PayPal email address, a container to set up a required deposity for a motor vehicle listing, and a payment instructions field. Muliple payment business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers onboarded for eBay managed payments, electronic payment methods are never specified, but offline payment methods are required for listings where offline payment is required or supported. An example of this would be a motor vehicle listing. A PayPal email address is never relevant for a managed payments seller.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerPaymentProfileType $sellerPaymentProfile
     */
    private $sellerPaymentProfile = null;

    /**
     * Gets as sellerShippingProfile
     *
     * The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Muliple shipping business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerShippingProfileType
     */
    public function getSellerShippingProfile()
    {
        return $this->sellerShippingProfile;
    }

    /**
     * Sets a new sellerShippingProfile
     *
     * The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Muliple shipping business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerShippingProfileType $sellerShippingProfile
     * @return self
     */
    public function setSellerShippingProfile(\Nogrod\eBaySDK\MerchantData\SellerShippingProfileType $sellerShippingProfile)
    {
        $this->sellerShippingProfile = $sellerShippingProfile;
        return $this;
    }

    /**
     * Gets as sellerReturnProfile
     *
     * The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return policy business policy. Return policy business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs. Muliple return policy business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerReturnProfileType
     */
    public function getSellerReturnProfile()
    {
        return $this->sellerReturnProfile;
    }

    /**
     * Sets a new sellerReturnProfile
     *
     * The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return policy business policy. Return policy business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs. Muliple return policy business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerReturnProfileType $sellerReturnProfile
     * @return self
     */
    public function setSellerReturnProfile(\Nogrod\eBaySDK\MerchantData\SellerReturnProfileType $sellerReturnProfile)
    {
        $this->sellerReturnProfile = $sellerReturnProfile;
        return $this;
    }

    /**
     * Gets as sellerPaymentProfile
     *
     * The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a payment business policy. Payment business policies contain accepted payment methods, a flag to set up the immediate payment feature, a field to specify the seller's PayPal email address, a container to set up a required deposity for a motor vehicle listing, and a payment instructions field. Muliple payment business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers onboarded for eBay managed payments, electronic payment methods are never specified, but offline payment methods are required for listings where offline payment is required or supported. An example of this would be a motor vehicle listing. A PayPal email address is never relevant for a managed payments seller.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerPaymentProfileType
     */
    public function getSellerPaymentProfile()
    {
        return $this->sellerPaymentProfile;
    }

    /**
     * Sets a new sellerPaymentProfile
     *
     * The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a payment business policy. Payment business policies contain accepted payment methods, a flag to set up the immediate payment feature, a field to specify the seller's PayPal email address, a container to set up a required deposity for a motor vehicle listing, and a payment instructions field. Muliple payment business policies can be created and saved at the account level by sellers, and it is possible to make one policy the default policy.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> For sellers onboarded for eBay managed payments, electronic payment methods are never specified, but offline payment methods are required for listings where offline payment is required or supported. An example of this would be a motor vehicle listing. A PayPal email address is never relevant for a managed payments seller.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerPaymentProfileType $sellerPaymentProfile
     * @return self
     */
    public function setSellerPaymentProfile(\Nogrod\eBaySDK\MerchantData\SellerPaymentProfileType $sellerPaymentProfile)
    {
        $this->sellerPaymentProfile = $sellerPaymentProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellerShippingProfile();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerShippingProfile", $value);
        }
        $value = $this->getSellerReturnProfile();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerReturnProfile", $value);
        }
        $value = $this->getSellerPaymentProfile();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerPaymentProfile", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerShippingProfile');
        if (null !== $value) {
            $this->setSellerShippingProfile(\Nogrod\eBaySDK\MerchantData\SellerShippingProfileType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerReturnProfile');
        if (null !== $value) {
            $this->setSellerReturnProfile(\Nogrod\eBaySDK\MerchantData\SellerReturnProfileType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaymentProfile');
        if (null !== $value) {
            $this->setSellerPaymentProfile(\Nogrod\eBaySDK\MerchantData\SellerPaymentProfileType::fromKeyValue($value));
        }
    }
}
