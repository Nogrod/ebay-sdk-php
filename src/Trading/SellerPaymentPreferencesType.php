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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->alwaysUseThisPaymentAddress;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AlwaysUseThisPaymentAddress', null, ($value ? 'true' : 'false'));
        }
        $value = $this->displayPayNowButton;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DisplayPayNowButton', null, (string) $value);
        }
        $value = $this->payPalPreferred;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PayPalPreferred', null, ($value ? 'true' : 'false'));
        }
        $value = $this->defaultPayPalEmailAddress;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DefaultPayPalEmailAddress', null, (string) $value);
        }
        $value = $this->payPalAlwaysOn;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PayPalAlwaysOn', null, ($value ? 'true' : 'false'));
        }
        $value = $this->sellerPaymentAddress;
        if (null !== $value) {
            $writer->startElementNs(null, 'SellerPaymentAddress', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->uPSRateOption;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UPSRateOption', null, (string) $value);
        }
        $value = $this->fedExRateOption;
        if (null !== $value) {
            $writer->writeElementNs(null, 'FedExRateOption', null, (string) $value);
        }
        $value = $this->uSPSRateOption;
        if (null !== $value) {
            $writer->writeElementNs(null, 'USPSRateOption', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerPaymentPreferencesType
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
                case 'AlwaysUseThisPaymentAddress':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->alwaysUseThisPaymentAddress = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DisplayPayNowButton':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->displayPayNowButton = $value;
                    }
                    return true;
                case 'PayPalPreferred':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->payPalPreferred = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'DefaultPayPalEmailAddress':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->defaultPayPalEmailAddress = $value;
                    }
                    return true;
                case 'PayPalAlwaysOn':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->payPalAlwaysOn = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SellerPaymentAddress':
                    $this->sellerPaymentAddress = \Nogrod\eBaySDK\Trading\AddressType::xmlRead($reader);
                    return true;
                case 'UPSRateOption':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uPSRateOption = $value;
                    }
                    return true;
                case 'FedExRateOption':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->fedExRateOption = $value;
                    }
                    return true;
                case 'USPSRateOption':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uSPSRateOption = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
