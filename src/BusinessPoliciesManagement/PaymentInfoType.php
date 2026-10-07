<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentInfoType
 *
 * Type defining the <b>PaymentInfo</b> container, which contains payment information related to the corresponding payment policy.
 * XSD Type: PaymentInfo
 */
class PaymentInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * <span class="tablenote"><b>Note:</b>This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</span>
     *  This field specifys one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform. If you specify multiple <b>acceptedPaymentMethod</b> fields, the repeating fields must be contiguous.
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. To retrieve a list of valid payment methods for your site and category, call <b>GetCategoryFeatures</b>, specifying 'PaymentMethods' as a <b>FeatureID</b> value in the call request, and then look for the <b>Category.PaymentMethod</b> values in the call response.
     *  </span>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @var string[] $acceptedPaymentMethod
     */
    private $acceptedPaymentMethod = [

    ];

    /**
     * This field should be included and set to <code>true</code> if the seller wants to require immediate payment from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><p><span class="tablenote"><b>Note:</b>
     *  In the Trading API calls that return the <b>AutoPay</b> field (<b>immediatePay</b> equivalent), be aware that the field's appearance in the output does not necessarily indicate that the listing qualifies for immediate payment, but only that the seller attempted to create (by including and setting <b>immediatePay</b> to 'true' in the payment policy) an immediate payment requirement.
     *  </span><br>To successfully enable the immediate payment requirement, the seller must also perform the following actions through the API call:<ul>
     *  <li>seller must specify all related costs to the buyer, since the buyer will not be able to use the Buyer Request Total feature in an immediate payment listing; these costs include flat-rate shipping costs for each domestic and international shipping service offered, package handling costs, and any shipping surcharges;</li> <li>seller must include and set the <b>shippingProfileDiscountInfo</b> container values if promotional shipping discounts will be used;</li> </ul>
     *  <!-- Immediate payment is not applicable to DE or AT listings -->
     *
     * @var bool $immediatePay
     */
    private $immediatePay = null;

    /**
     * <p class="depr"><span class="tablenote"><b>Important:</b> DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.</span></p><p>This free-form string field allows the seller to give payment instructions to the buyer. These instructions will appear on eBay's View Item and Checkout pages. This field allows 1000 characters.</p><p>It is recommended that the seller use this field for motor vehicles (eBay Motors US and CA) payment policies to clarify the specifics on the deposit (if required), pickup/delivery arrangements, and full payment details on the vehicle.</p>
     *
     * @var string $paymentInstructions
     */
    private $paymentInstructions = null;

    /**
     * <p class="depr"><span class="tablenote"><b>Important:</b> This field is deprecated. Do not use this field.</p>
     *
     * @var string $paypalEmailAddress
     */
    private $paypalEmailAddress = null;

    /**
     * This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required. This container is only applicable if the <b>categoryGroup.name</b>field is set to 'MOTORS_VEHICLE'.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType $depositDetails
     */
    private $depositDetails = null;

    /**
     * This integer value indicates the number of days that a buyer has to make their full payment to the seller and close the remaining balance on a motor vehicle transaction. This container must be specified for motor vehicles listings. Valid values are '3', '7' (default), '10', and '14'.
     *  <br><br>
     *  In order for a buyer to make a full payment on a US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified for the corresponding payment business policy:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li> </ul>
     *
     * @var int $daysToFullPayment
     */
    private $daysToFullPayment = null;

    /**
     * Adds as acceptedPaymentMethod
     *
     * <span class="tablenote"><b>Note:</b>This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</span>
     *  This field specifys one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform. If you specify multiple <b>acceptedPaymentMethod</b> fields, the repeating fields must be contiguous.
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. To retrieve a list of valid payment methods for your site and category, call <b>GetCategoryFeatures</b>, specifying 'PaymentMethods' as a <b>FeatureID</b> value in the call request, and then look for the <b>Category.PaymentMethod</b> values in the call response.
     *  </span>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @return self
     * @param string $acceptedPaymentMethod
     */
    public function addToAcceptedPaymentMethod($acceptedPaymentMethod)
    {
        if (!is_array($this->acceptedPaymentMethod)) {
            throw new \LogicException('acceptedPaymentMethod is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->acceptedPaymentMethod[] = $acceptedPaymentMethod;
        return $this;
    }

    /**
     * isset acceptedPaymentMethod
     *
     * <span class="tablenote"><b>Note:</b>This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</span>
     *  This field specifys one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform. If you specify multiple <b>acceptedPaymentMethod</b> fields, the repeating fields must be contiguous.
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. To retrieve a list of valid payment methods for your site and category, call <b>GetCategoryFeatures</b>, specifying 'PaymentMethods' as a <b>FeatureID</b> value in the call request, and then look for the <b>Category.PaymentMethod</b> values in the call response.
     *  </span>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedPaymentMethod($index)
    {
        return isset($this->acceptedPaymentMethod[$index]);
    }

    /**
     * unset acceptedPaymentMethod
     *
     * <span class="tablenote"><b>Note:</b>This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</span>
     *  This field specifys one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform. If you specify multiple <b>acceptedPaymentMethod</b> fields, the repeating fields must be contiguous.
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. To retrieve a list of valid payment methods for your site and category, call <b>GetCategoryFeatures</b>, specifying 'PaymentMethods' as a <b>FeatureID</b> value in the call request, and then look for the <b>Category.PaymentMethod</b> values in the call response.
     *  </span>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedPaymentMethod($index)
    {
        unset($this->acceptedPaymentMethod[$index]);
    }

    /**
     * Gets as acceptedPaymentMethod
     *
     * <span class="tablenote"><b>Note:</b>This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</span>
     *  This field specifys one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform. If you specify multiple <b>acceptedPaymentMethod</b> fields, the repeating fields must be contiguous.
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. To retrieve a list of valid payment methods for your site and category, call <b>GetCategoryFeatures</b>, specifying 'PaymentMethods' as a <b>FeatureID</b> value in the call request, and then look for the <b>Category.PaymentMethod</b> values in the call response.
     *  </span>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @return iterable<string>
     */
    public function getAcceptedPaymentMethod()
    {
        return $this->acceptedPaymentMethod;
    }

    /**
     * Sets a new acceptedPaymentMethod
     *
     * <span class="tablenote"><b>Note:</b>This field applies only when the seller needs to specify one or more offline payment methods. eBay now manages the electronic payment options available to buyers to pay for the item.</span>
     *  This field specifys one or more offline payment methods that will be accepted for payment that occurs off of eBay's platform. If you specify multiple <b>acceptedPaymentMethod</b> fields, the repeating fields must be contiguous.
     *  <span class="tablenote"><b>Note:</b>
     *  Required or allowed payment methods vary by site and category. To retrieve a list of valid payment methods for your site and category, call <b>GetCategoryFeatures</b>, specifying 'PaymentMethods' as a <b>FeatureID</b> value in the call request, and then look for the <b>Category.PaymentMethod</b> values in the call response.
     *  </span>
     *  In order for a buyer to make a full payment on an US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li>
     *  </ul>
     *
     * @param iterable<string> $acceptedPaymentMethod
     * @return self
     */
    public function setAcceptedPaymentMethod(iterable $acceptedPaymentMethod)
    {
        $this->acceptedPaymentMethod = $acceptedPaymentMethod;
        return $this;
    }

    /**
     * Gets as immediatePay
     *
     * This field should be included and set to <code>true</code> if the seller wants to require immediate payment from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><p><span class="tablenote"><b>Note:</b>
     *  In the Trading API calls that return the <b>AutoPay</b> field (<b>immediatePay</b> equivalent), be aware that the field's appearance in the output does not necessarily indicate that the listing qualifies for immediate payment, but only that the seller attempted to create (by including and setting <b>immediatePay</b> to 'true' in the payment policy) an immediate payment requirement.
     *  </span><br>To successfully enable the immediate payment requirement, the seller must also perform the following actions through the API call:<ul>
     *  <li>seller must specify all related costs to the buyer, since the buyer will not be able to use the Buyer Request Total feature in an immediate payment listing; these costs include flat-rate shipping costs for each domestic and international shipping service offered, package handling costs, and any shipping surcharges;</li> <li>seller must include and set the <b>shippingProfileDiscountInfo</b> container values if promotional shipping discounts will be used;</li> </ul>
     *  <!-- Immediate payment is not applicable to DE or AT listings -->
     *
     * @return bool
     */
    public function getImmediatePay()
    {
        return $this->immediatePay;
    }

    /**
     * Sets a new immediatePay
     *
     * This field should be included and set to <code>true</code> if the seller wants to require immediate payment from the buyer for: <ul><li>A fixed-price item</li><li>An auction item where the buyer is using the 'Buy it Now' option</li><li>A deposit for a motor vehicle listing</li></ul><p><span class="tablenote"><b>Note:</b>
     *  In the Trading API calls that return the <b>AutoPay</b> field (<b>immediatePay</b> equivalent), be aware that the field's appearance in the output does not necessarily indicate that the listing qualifies for immediate payment, but only that the seller attempted to create (by including and setting <b>immediatePay</b> to 'true' in the payment policy) an immediate payment requirement.
     *  </span><br>To successfully enable the immediate payment requirement, the seller must also perform the following actions through the API call:<ul>
     *  <li>seller must specify all related costs to the buyer, since the buyer will not be able to use the Buyer Request Total feature in an immediate payment listing; these costs include flat-rate shipping costs for each domestic and international shipping service offered, package handling costs, and any shipping surcharges;</li> <li>seller must include and set the <b>shippingProfileDiscountInfo</b> container values if promotional shipping discounts will be used;</li> </ul>
     *  <!-- Immediate payment is not applicable to DE or AT listings -->
     *
     * @param bool $immediatePay
     * @return self
     */
    public function setImmediatePay($immediatePay)
    {
        $this->immediatePay = $immediatePay;
        return $this;
    }

    /**
     * Gets as paymentInstructions
     *
     * <p class="depr"><span class="tablenote"><b>Important:</b> DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.</span></p><p>This free-form string field allows the seller to give payment instructions to the buyer. These instructions will appear on eBay's View Item and Checkout pages. This field allows 1000 characters.</p><p>It is recommended that the seller use this field for motor vehicles (eBay Motors US and CA) payment policies to clarify the specifics on the deposit (if required), pickup/delivery arrangements, and full payment details on the vehicle.</p>
     *
     * @return string
     */
    public function getPaymentInstructions()
    {
        return $this->paymentInstructions;
    }

    /**
     * Sets a new paymentInstructions
     *
     * <p class="depr"><span class="tablenote"><b>Important:</b> DO NOT USE THIS FIELD. Payment instructions are no longer supported by payment business policies.</span></p><p>This free-form string field allows the seller to give payment instructions to the buyer. These instructions will appear on eBay's View Item and Checkout pages. This field allows 1000 characters.</p><p>It is recommended that the seller use this field for motor vehicles (eBay Motors US and CA) payment policies to clarify the specifics on the deposit (if required), pickup/delivery arrangements, and full payment details on the vehicle.</p>
     *
     * @param string $paymentInstructions
     * @return self
     */
    public function setPaymentInstructions($paymentInstructions)
    {
        $this->paymentInstructions = $paymentInstructions;
        return $this;
    }

    /**
     * Gets as paypalEmailAddress
     *
     * <p class="depr"><span class="tablenote"><b>Important:</b> This field is deprecated. Do not use this field.</p>
     *
     * @return string
     */
    public function getPaypalEmailAddress()
    {
        return $this->paypalEmailAddress;
    }

    /**
     * Sets a new paypalEmailAddress
     *
     * <p class="depr"><span class="tablenote"><b>Important:</b> This field is deprecated. Do not use this field.</p>
     *
     * @param string $paypalEmailAddress
     * @return self
     */
    public function setPaypalEmailAddress($paypalEmailAddress)
    {
        $this->paypalEmailAddress = $paypalEmailAddress;
        return $this;
    }

    /**
     * Gets as depositDetails
     *
     * This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required. This container is only applicable if the <b>categoryGroup.name</b>field is set to 'MOTORS_VEHICLE'.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType
     */
    public function getDepositDetails()
    {
        return $this->depositDetails;
    }

    /**
     * Sets a new depositDetails
     *
     * This value indicates the initial deposit amount required from the buyer in order to purchase a motor vehicle. This value can be as high as $2,000.00 if immediate payment is not required, and up to $500.00 if immediate payment is required. This container is only applicable if the <b>categoryGroup.name</b>field is set to 'MOTORS_VEHICLE'.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType $depositDetails
     * @return self
     */
    public function setDepositDetails(\Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType $depositDetails)
    {
        $this->depositDetails = $depositDetails;
        return $this;
    }

    /**
     * Gets as daysToFullPayment
     *
     * This integer value indicates the number of days that a buyer has to make their full payment to the seller and close the remaining balance on a motor vehicle transaction. This container must be specified for motor vehicles listings. Valid values are '3', '7' (default), '10', and '14'.
     *  <br><br>
     *  In order for a buyer to make a full payment on a US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified for the corresponding payment business policy:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li> </ul>
     *
     * @return int
     */
    public function getDaysToFullPayment()
    {
        return $this->daysToFullPayment;
    }

    /**
     * Sets a new daysToFullPayment
     *
     * This integer value indicates the number of days that a buyer has to make their full payment to the seller and close the remaining balance on a motor vehicle transaction. This container must be specified for motor vehicles listings. Valid values are '3', '7' (default), '10', and '14'.
     *  <br><br>
     *  In order for a buyer to make a full payment on a US or CA motor vehicle, at least one of the following <b>acceptedPaymentMethod</b> values must be specified for the corresponding payment business policy:
     *  <ul>
     *  <li>CashOnPickup</li>
     *  <li>LoanCheck</li>
     *  <li>MOCC (money order or cashier's check)</li>
     *  <li>PersonalCheck</li> </ul>
     *
     * @param int $daysToFullPayment
     * @return self
     */
    public function setDaysToFullPayment($daysToFullPayment)
    {
        $this->daysToFullPayment = $daysToFullPayment;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->acceptedPaymentMethod;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'acceptedPaymentMethod', null, (string) $v);
            }
        }
        $value = $this->immediatePay;
        if (null !== $value) {
            $writer->writeElementNs(null, 'immediatePay', null, ($value ? 'true' : 'false'));
        }
        $value = $this->paymentInstructions;
        if (null !== $value) {
            $writer->writeElementNs(null, 'paymentInstructions', null, (string) $value);
        }
        $value = $this->paypalEmailAddress;
        if (null !== $value) {
            $writer->writeElementNs(null, 'paypalEmailAddress', null, (string) $value);
        }
        $value = $this->depositDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'depositDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->daysToFullPayment;
        if (null !== $value) {
            $writer->writeElementNs(null, 'daysToFullPayment', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentInfoType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->acceptedPaymentMethod = [];
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'acceptedPaymentMethod':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->acceptedPaymentMethod[] = $value;
                    }
                    return true;
                case 'immediatePay':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->immediatePay = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'paymentInstructions':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paymentInstructions = $value;
                    }
                    return true;
                case 'paypalEmailAddress':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paypalEmailAddress = $value;
                    }
                    return true;
                case 'depositDetails':
                    $this->depositDetails = \Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType::xmlRead($reader);
                    return true;
                case 'daysToFullPayment':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->daysToFullPayment = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['acceptedPaymentMethod'] = Func::jsonList($this->acceptedPaymentMethod);
        $data['immediatePay'] = $this->immediatePay;
        $data['paymentInstructions'] = $this->paymentInstructions;
        $data['paypalEmailAddress'] = $this->paypalEmailAddress;
        $data['depositDetails'] = $this->depositDetails;
        $data['daysToFullPayment'] = $this->daysToFullPayment;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
