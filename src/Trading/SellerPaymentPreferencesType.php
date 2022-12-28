<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerPaymentPreferencesType
 *
 * Type defining the <b>SellerPaymentPreferences</b> container, which
 *  consists of the seller's payment preferences. Payment preferences specified in a
 *  <b>SetUserPreferences</b> call override the current corresponding settings in the seller's account.
 * XSD Type: SellerPaymentPreferencesType
 */
class SellerPaymentPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Sellers include this field and set it to <code>true</code> if they want buyers to mail payment to the payment address specified in the <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment address only comes into play if the listing's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     *
     * @var bool $alwaysUseThisPaymentAddress
     */
    private $alwaysUseThisPaymentAddress = null;

    /**
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
     *
     * @var string $displayPayNowButton
     */
    private $displayPayNowButton = null;

    /**
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
     *
     * @var bool $payPalPreferred
     */
    private $payPalPreferred = null;

    /**
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
     *  </span>
     *
     * @var string $defaultPayPalEmailAddress
     */
    private $defaultPayPalEmailAddress = null;

    /**
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
     *
     * @var bool $payPalAlwaysOn
     */
    private $payPalAlwaysOn = null;

    /**
     * This container consists of the seller's mailing address where the buyer will send payment for an order. A seller's payment address only comes into play if the listing's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $sellerPaymentAddress
     */
    private $sellerPaymentAddress = null;

    /**
     * This enumeration value indicates the category/level of UPS shipping rates that are available to the seller.
     *
     * @var string $uPSRateOption
     */
    private $uPSRateOption = null;

    /**
     * This enumeration value indicates the category/level of Federal Express shipping rates that are available to the seller.
     *
     * @var string $fedExRateOption
     */
    private $fedExRateOption = null;

    /**
     * This enumeration value indicates the category/level of US Postal Service shipping rates that are available to the seller.
     *
     * @var string $uSPSRateOption
     */
    private $uSPSRateOption = null;

    /**
     * Gets as alwaysUseThisPaymentAddress
     *
     * Sellers include this field and set it to <code>true</code> if they want buyers to mail payment to the payment address specified in the <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment address only comes into play if the listing's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
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
     * Sellers include this field and set it to <code>true</code> if they want buyers to mail payment to the payment address specified in the <b>SellerPaymentPreferences.SellerPaymentAddress</b> field. A payment address only comes into play if the listing's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
     *  </span>
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
     *  </span>
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
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
     * This field is deprecated. If it is used in a <b>SetUserPreferences</b> call, it is ignored.
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
     * This container consists of the seller's mailing address where the buyer will send payment for an order. A seller's payment address only comes into play if the listing's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getSellerPaymentAddress()
    {
        return $this->sellerPaymentAddress;
    }

    /**
     * Sets a new sellerPaymentAddress
     *
     * This container consists of the seller's mailing address where the buyer will send payment for an order. A seller's payment address only comes into play if the listing's category allows offline payments, and the seller has allowed the buyer to mail a payment. This payment address will only be displayed to winning bidders and buyers.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $sellerPaymentAddress
     * @return self
     */
    public function setSellerPaymentAddress(\Nogrod\eBaySDK\Trading\AddressType $sellerPaymentAddress)
    {
        $this->sellerPaymentAddress = $sellerPaymentAddress;
        return $this;
    }

    /**
     * Gets as uPSRateOption
     *
     * This enumeration value indicates the category/level of UPS shipping rates that are available to the seller.
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
     * This enumeration value indicates the category/level of UPS shipping rates that are available to the seller.
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
     * This enumeration value indicates the category/level of Federal Express shipping rates that are available to the seller.
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
     * This enumeration value indicates the category/level of Federal Express shipping rates that are available to the seller.
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
     * This enumeration value indicates the category/level of US Postal Service shipping rates that are available to the seller.
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
     * This enumeration value indicates the category/level of US Postal Service shipping rates that are available to the seller.
     *
     * @param string $uSPSRateOption
     * @return self
     */
    public function setUSPSRateOption($uSPSRateOption)
    {
        $this->uSPSRateOption = $uSPSRateOption;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
            $this->setSellerPaymentAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
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
