<?php

namespace Nogrod\eBaySDK\Trading;

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
     * The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Multiple shipping business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerShippingProfileType $sellerShippingProfile
     */
    private $sellerShippingProfile = null;

    /**
     * The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return business policy. Return business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs. Multiple return policy business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerReturnProfileType $sellerReturnProfile
     */
    private $sellerReturnProfile = null;

    /**
     * The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify API call to reference and use the settings/values of a payment business policy. Payment business policies contain a setting to control whether immediate payment is required, settings to specify due dates for the deposit and full payment of a motor vehicle listing (Motors policy only), and settings to specify which offline payment methods are avaiable to buyers for sales transactions that happen off of eBay's platform. Multiple payment business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Sellers will never have to specify electronic payment methods, but offline payment methods are required for listings where offline payment is required or supported.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\SellerPaymentProfileType $sellerPaymentProfile
     */
    private $sellerPaymentProfile = null;

    /**
     * Gets as sellerShippingProfile
     *
     * The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Multiple shipping business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerShippingProfileType
     */
    public function getSellerShippingProfile()
    {
        return $this->sellerShippingProfile;
    }

    /**
     * Sets a new sellerShippingProfile
     *
     * The <b>SellerShippingProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a specific shipping business policy. Shipping business policies contain detailed information on domestic and international shipping, including shipping service options and costs, handling time, shipping discount inormation, and excluded ship-to locations. Multiple shipping business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerShippingProfileType $sellerShippingProfile
     * @return self
     */
    public function setSellerShippingProfile(\Nogrod\eBaySDK\Trading\SellerShippingProfileType $sellerShippingProfile)
    {
        $this->sellerShippingProfile = $sellerShippingProfile;
        return $this;
    }

    /**
     * Gets as sellerReturnProfile
     *
     * The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return business policy. Return business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs. Multiple return policy business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerReturnProfileType
     */
    public function getSellerReturnProfile()
    {
        return $this->sellerReturnProfile;
    }

    /**
     * Sets a new sellerReturnProfile
     *
     * The <b>SellerReturnProfile</b> container is used in an Add/Revise/Relist/Verify Trading API call to reference and use the settings/values of a return business policy. Return business policies contain detailed information on the seller's return policy for domestic and international buyers (if the seller ships internationally), including whether or not the seller accepts returns from domestic and international buyers, how many days the buyer has to return the item for a refund, and who pays the return shipping costs. Multiple return policy business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing and the person making the API call is the seller of the listing.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerReturnProfileType $sellerReturnProfile
     * @return self
     */
    public function setSellerReturnProfile(\Nogrod\eBaySDK\Trading\SellerReturnProfileType $sellerReturnProfile)
    {
        $this->sellerReturnProfile = $sellerReturnProfile;
        return $this;
    }

    /**
     * Gets as sellerPaymentProfile
     *
     * The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify API call to reference and use the settings/values of a payment business policy. Payment business policies contain a setting to control whether immediate payment is required, settings to specify due dates for the deposit and full payment of a motor vehicle listing (Motors policy only), and settings to specify which offline payment methods are avaiable to buyers for sales transactions that happen off of eBay's platform. Multiple payment business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Sellers will never have to specify electronic payment methods, but offline payment methods are required for listings where offline payment is required or supported.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\SellerPaymentProfileType
     */
    public function getSellerPaymentProfile()
    {
        return $this->sellerPaymentProfile;
    }

    /**
     * Sets a new sellerPaymentProfile
     *
     * The <b>SellerPaymentProfile</b> container is used in an Add/Revise/Relist/Verify API call to reference and use the settings/values of a payment business policy. Payment business policies contain a setting to control whether immediate payment is required, settings to specify due dates for the deposit and full payment of a motor vehicle listing (Motors policy only), and settings to specify which offline payment methods are avaiable to buyers for sales transactions that happen off of eBay's platform. Multiple payment business policies can be created and saved at the account level by sellers.
     *  <br/><br/>
     *  This container is only returned in 'Get' calls if Business Policies are set for the listing, and the person making the API call is the seller of the listing.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Sellers will never have to specify electronic payment methods, but offline payment methods are required for listings where offline payment is required or supported.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\SellerPaymentProfileType $sellerPaymentProfile
     * @return self
     */
    public function setSellerPaymentProfile(\Nogrod\eBaySDK\Trading\SellerPaymentProfileType $sellerPaymentProfile)
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
            $this->setSellerShippingProfile(\Nogrod\eBaySDK\Trading\SellerShippingProfileType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerReturnProfile');
        if (null !== $value) {
            $this->setSellerReturnProfile(\Nogrod\eBaySDK\Trading\SellerReturnProfileType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaymentProfile');
        if (null !== $value) {
            $this->setSellerPaymentProfile(\Nogrod\eBaySDK\Trading\SellerPaymentProfileType::fromKeyValue($value));
        }
    }
}
