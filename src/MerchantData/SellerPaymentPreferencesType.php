<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerPaymentPreferencesType
 *
 * Type defining the <b>SellerPaymentPreferences</b> container, which
 *  consists of the seller's payment preferences. Payment preferences specified in a
 *  <b>SetUserPreferences</b> call override the settings in My eBay payment preferences.
 *  <br><br>
 *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control some of the settings under the <b>SellerPaymentPreferences</b> container, and although some of these fields can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the settings will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
 *  </span>
 *  <br>
 * XSD Type: SellerPaymentPreferencesType
 */
class SellerPaymentPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Sellers include this field and set it to <code>true</code> if they want buyers to mail payment
     *  to the payment address specified in the
     *  <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment
     *  address only comes into play if the item's category allows offline payments, and the
     *  seller has allowed the buyer to mail a payment. This payment address will only be
     *  displayed to winning bidders and buyers.
     *
     * @var bool $alwaysUseThisPaymentAddress
     */
    private $alwaysUseThisPaymentAddress = null;

    /**
     * If set, this field determines whether a Pay Now button is displayed for all of the user's listings. The user has the option of using a PayPal only version of the Pay Now button or a Pay Now button for all payment methods.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the display of the "Buy It Now" button in listings, and although the <b>DisplayPayNowButton</b> value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *  <br>
     *
     * @var string $displayPayNowButton
     */
    private $displayPayNowButton = null;

    /**
     * Specifies whether a seller wants to let buyers know that PayPal payments
     *  are preferred.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the display of the "PayPal Preferred" setting in listings, and although the <b>PayPalPreferred</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *
     * @var bool $payPalPreferred
     */
    private $payPalPreferred = null;

    /**
     * Specifies the default email address the seller uses for receiving PayPal payments.
     *
     * @var string $defaultPayPalEmailAddress
     */
    private $defaultPayPalEmailAddress = null;

    /**
     * Indicates whether PayPal is always accepted for the seller's listings.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the "PayPal Always On" setting in listings, and although the <b>PayPalAlwaysOn</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *
     * @var bool $payPalAlwaysOn
     */
    private $payPalAlwaysOn = null;

    /**
     * Specifies the address the seller uses to receive mailed payments from buyers.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $sellerPaymentAddress
     */
    private $sellerPaymentAddress = null;

    /**
     * This enumeration value indicates the type of UPS shipping rates that are available to the seller.
     *
     * @var string $uPSRateOption
     */
    private $uPSRateOption = null;

    /**
     * This enumeration value indicates the type of FedEx shipping rates that are available to the seller.
     *
     * @var string $fedExRateOption
     */
    private $fedExRateOption = null;

    /**
     * This enumeration value indicates the type of US Postal Service shipping rates that are available to the seller.
     *
     * @var string $uSPSRateOption
     */
    private $uSPSRateOption = null;

    /**
     * Gets as alwaysUseThisPaymentAddress
     *
     * Sellers include this field and set it to <code>true</code> if they want buyers to mail payment
     *  to the payment address specified in the
     *  <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment
     *  address only comes into play if the item's category allows offline payments, and the
     *  seller has allowed the buyer to mail a payment. This payment address will only be
     *  displayed to winning bidders and buyers.
     *
     * @return bool
     */
    public function getAlwaysUseThisPaymentAddress()
    {
        return $this->alwaysUseThisPaymentAddress;
    }

    /**
     * Sets a new alwaysUseThisPaymentAddress
     *
     * Sellers include this field and set it to <code>true</code> if they want buyers to mail payment
     *  to the payment address specified in the
     *  <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment
     *  address only comes into play if the item's category allows offline payments, and the
     *  seller has allowed the buyer to mail a payment. This payment address will only be
     *  displayed to winning bidders and buyers.
     *
     * @param bool $alwaysUseThisPaymentAddress
     * @return self
     */
    public function setAlwaysUseThisPaymentAddress($alwaysUseThisPaymentAddress)
    {
        $this->alwaysUseThisPaymentAddress = $alwaysUseThisPaymentAddress;
        return $this;
    }

    /**
     * Gets as displayPayNowButton
     *
     * If set, this field determines whether a Pay Now button is displayed for all of the user's listings. The user has the option of using a PayPal only version of the Pay Now button or a Pay Now button for all payment methods.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the display of the "Buy It Now" button in listings, and although the <b>DisplayPayNowButton</b> value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *  <br>
     *
     * @return string
     */
    public function getDisplayPayNowButton()
    {
        return $this->displayPayNowButton;
    }

    /**
     * Sets a new displayPayNowButton
     *
     * If set, this field determines whether a Pay Now button is displayed for all of the user's listings. The user has the option of using a PayPal only version of the Pay Now button or a Pay Now button for all payment methods.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the display of the "Buy It Now" button in listings, and although the <b>DisplayPayNowButton</b> value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *  <br>
     *
     * @param string $displayPayNowButton
     * @return self
     */
    public function setDisplayPayNowButton($displayPayNowButton)
    {
        $this->displayPayNowButton = $displayPayNowButton;
        return $this;
    }

    /**
     * Gets as payPalPreferred
     *
     * Specifies whether a seller wants to let buyers know that PayPal payments
     *  are preferred.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the display of the "PayPal Preferred" setting in listings, and although the <b>PayPalPreferred</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *
     * @return bool
     */
    public function getPayPalPreferred()
    {
        return $this->payPalPreferred;
    }

    /**
     * Sets a new payPalPreferred
     *
     * Specifies whether a seller wants to let buyers know that PayPal payments
     *  are preferred.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the display of the "PayPal Preferred" setting in listings, and although the <b>PayPalPreferred</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *
     * @param bool $payPalPreferred
     * @return self
     */
    public function setPayPalPreferred($payPalPreferred)
    {
        $this->payPalPreferred = $payPalPreferred;
        return $this;
    }

    /**
     * Gets as defaultPayPalEmailAddress
     *
     * Specifies the default email address the seller uses for receiving PayPal payments.
     *
     * @return string
     */
    public function getDefaultPayPalEmailAddress()
    {
        return $this->defaultPayPalEmailAddress;
    }

    /**
     * Sets a new defaultPayPalEmailAddress
     *
     * Specifies the default email address the seller uses for receiving PayPal payments.
     *
     * @param string $defaultPayPalEmailAddress
     * @return self
     */
    public function setDefaultPayPalEmailAddress($defaultPayPalEmailAddress)
    {
        $this->defaultPayPalEmailAddress = $defaultPayPalEmailAddress;
        return $this;
    }

    /**
     * Gets as payPalAlwaysOn
     *
     * Indicates whether PayPal is always accepted for the seller's listings.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the "PayPal Always On" setting in listings, and although the <b>PayPalAlwaysOn</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *
     * @return bool
     */
    public function getPayPalAlwaysOn()
    {
        return $this->payPalAlwaysOn;
    }

    /**
     * Sets a new payPalAlwaysOn
     *
     * Indicates whether PayPal is always accepted for the seller's listings.
     *  <br><br>
     *  <span class="tablenote"><b>Note:</b> Sellers in the eBay managed payments program cannot control the "PayPal Always On" setting in listings, and although the <b>PayPalAlwaysOn</b> boolean value can still be set in <b>SetUserPreferences</b> and returned in <b>GetUserPreferences</b>, the setting will not have any affect on any current or future listings for the seller. eBay managed payments is currently available to a select set of sellers. For the current list of eBay marketplaces in which eBay managed payments has rolled out, see the <a href="https://developer.ebay.com/managed-payments" target="_blank">eBay Managed Payments</a> landing page.
     *  </span>
     *
     * @param bool $payPalAlwaysOn
     * @return self
     */
    public function setPayPalAlwaysOn($payPalAlwaysOn)
    {
        $this->payPalAlwaysOn = $payPalAlwaysOn;
        return $this;
    }

    /**
     * Gets as sellerPaymentAddress
     *
     * Specifies the address the seller uses to receive mailed payments from buyers.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getSellerPaymentAddress()
    {
        return $this->sellerPaymentAddress;
    }

    /**
     * Sets a new sellerPaymentAddress
     *
     * Specifies the address the seller uses to receive mailed payments from buyers.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $sellerPaymentAddress
     * @return self
     */
    public function setSellerPaymentAddress(\Nogrod\eBaySDK\MerchantData\AddressType $sellerPaymentAddress)
    {
        $this->sellerPaymentAddress = $sellerPaymentAddress;
        return $this;
    }

    /**
     * Gets as uPSRateOption
     *
     * This enumeration value indicates the type of UPS shipping rates that are available to the seller.
     *
     * @return string
     */
    public function getUPSRateOption()
    {
        return $this->uPSRateOption;
    }

    /**
     * Sets a new uPSRateOption
     *
     * This enumeration value indicates the type of UPS shipping rates that are available to the seller.
     *
     * @param string $uPSRateOption
     * @return self
     */
    public function setUPSRateOption($uPSRateOption)
    {
        $this->uPSRateOption = $uPSRateOption;
        return $this;
    }

    /**
     * Gets as fedExRateOption
     *
     * This enumeration value indicates the type of FedEx shipping rates that are available to the seller.
     *
     * @return string
     */
    public function getFedExRateOption()
    {
        return $this->fedExRateOption;
    }

    /**
     * Sets a new fedExRateOption
     *
     * This enumeration value indicates the type of FedEx shipping rates that are available to the seller.
     *
     * @param string $fedExRateOption
     * @return self
     */
    public function setFedExRateOption($fedExRateOption)
    {
        $this->fedExRateOption = $fedExRateOption;
        return $this;
    }

    /**
     * Gets as uSPSRateOption
     *
     * This enumeration value indicates the type of US Postal Service shipping rates that are available to the seller.
     *
     * @return string
     */
    public function getUSPSRateOption()
    {
        return $this->uSPSRateOption;
    }

    /**
     * Sets a new uSPSRateOption
     *
     * This enumeration value indicates the type of US Postal Service shipping rates that are available to the seller.
     *
     * @param string $uSPSRateOption
     * @return self
     */
    public function setUSPSRateOption($uSPSRateOption)
    {
        $this->uSPSRateOption = $uSPSRateOption;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAlwaysUseThisPaymentAddress();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlwaysUseThisPaymentAddress", $value);
        }
        $value = $this->getDisplayPayNowButton();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayPayNowButton", $value);
        }
        $value = $this->getPayPalPreferred();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalPreferred", $value);
        }
        $value = $this->getDefaultPayPalEmailAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DefaultPayPalEmailAddress", $value);
        }
        $value = $this->getPayPalAlwaysOn();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayPalAlwaysOn", $value);
        }
        $value = $this->getSellerPaymentAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerPaymentAddress", $value);
        }
        $value = $this->getUPSRateOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UPSRateOption", $value);
        }
        $value = $this->getFedExRateOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FedExRateOption", $value);
        }
        $value = $this->getUSPSRateOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}USPSRateOption", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlwaysUseThisPaymentAddress');
        if (null !== $value) {
            $this->setAlwaysUseThisPaymentAddress($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayPayNowButton');
        if (null !== $value) {
            $this->setDisplayPayNowButton($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalPreferred');
        if (null !== $value) {
            $this->setPayPalPreferred($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DefaultPayPalEmailAddress');
        if (null !== $value) {
            $this->setDefaultPayPalEmailAddress($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayPalAlwaysOn');
        if (null !== $value) {
            $this->setPayPalAlwaysOn($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerPaymentAddress');
        if (null !== $value) {
            $this->setSellerPaymentAddress(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UPSRateOption');
        if (null !== $value) {
            $this->setUPSRateOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FedExRateOption');
        if (null !== $value) {
            $this->setFedExRateOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}USPSRateOption');
        if (null !== $value) {
            $this->setUSPSRateOption($value);
        }
    }
}
