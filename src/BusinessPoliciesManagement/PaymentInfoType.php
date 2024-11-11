<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentInfoType
 *
 * Type defining the <b>PaymentInfo</b> container, which contains payment information related to the corresponding payment policy.
 * XSD Type: PaymentInfo
 */
class PaymentInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @return string[]
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
     * @param string[] $acceptedPaymentMethod
     * @return self
     */
    public function setAcceptedPaymentMethod(array $acceptedPaymentMethod)
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
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getAcceptedPaymentMethod();
        if (null !== $value && !empty($this->getAcceptedPaymentMethod())) {
            $writer->write(array_map(function ($v) {return ["acceptedPaymentMethod" => $v];}, $value));
        }
        $value = $this->getImmediatePay();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}immediatePay", $value);
        }
        $value = $this->getPaymentInstructions();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paymentInstructions", $value);
        }
        $value = $this->getPaypalEmailAddress();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}paypalEmailAddress", $value);
        }
        $value = $this->getDepositDetails();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}depositDetails", $value);
        }
        $value = $this->getDaysToFullPayment();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}daysToFullPayment", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}acceptedPaymentMethod', true);
        if (null !== $value && !empty($value)) {
            $this->setAcceptedPaymentMethod($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}immediatePay');
        if (null !== $value) {
            $this->setImmediatePay(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paymentInstructions');
        if (null !== $value) {
            $this->setPaymentInstructions($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}paypalEmailAddress');
        if (null !== $value) {
            $this->setPaypalEmailAddress($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}depositDetails');
        if (null !== $value) {
            $this->setDepositDetails(\Nogrod\eBaySDK\BusinessPoliciesManagement\DepositDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}daysToFullPayment');
        if (null !== $value) {
            $this->setDaysToFullPayment($value);
        }
    }
}
