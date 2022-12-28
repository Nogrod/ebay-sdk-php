<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentOptionDetailsType
 *
 * This type is used by the <b>PaymentOptionDetails</b> containers that are returned in <b>GeteBayDetails</b> if the <code>PaymentOptionDetails</code> value is used in a <b>DetailName</b> field in the call request.
 *  <br><br>
 *  <span class="tablenote"><b>Note: </b> Although site-level payment options are still returned in <b>GeteBayDetails</b>, it may be better to use the <b>GetCategoryFeatures</b> call instead, as this call returns the specific payment options that are accepted in specific categories.
 *  </span>
 *  <br>
 *  <span class="tablenote"><b>Note: </b> Sellers no longer have to specify any electronic payment methods for listings, so one or more <b>PaymentMethods</b> fields will only be needed for listings that require/support payments off of eBay's platform. If an electronic payment is supplied in a <b>PaymentMethods</b> field, a warning will be triggered and the payment method will be dropped.
 *  </span>
 * XSD Type: PaymentOptionDetailsType
 */
class PaymentOptionDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This enumeration value is the enumeration that the seller would pass in to one of the <b>PaymentMethods</b> fields in an Add/Revise/Relist call (or in to a Payment busines policy).
     *
     * @var string $paymentOption
     */
    private $paymentOption = null;

    /**
     * This field is a text-based/user-friendly description of the payment option.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This string value indicates the version number of the update made to any payment options returned in <b>GeteBayDetails</b>.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * This timestamp indicates the date and time of the last update made to any payment options returned in <b>GeteBayDetails</b>.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as paymentOption
     *
     * This enumeration value is the enumeration that the seller would pass in to one of the <b>PaymentMethods</b> fields in an Add/Revise/Relist call (or in to a Payment busines policy).
     *
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * Sets a new paymentOption
     *
     * This enumeration value is the enumeration that the seller would pass in to one of the <b>PaymentMethods</b> fields in an Add/Revise/Relist call (or in to a Payment busines policy).
     *
     * @param string $paymentOption
     * @return self
     */
    public function setPaymentOption($paymentOption)
    {
        $this->paymentOption = $paymentOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * This field is a text-based/user-friendly description of the payment option.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * This field is a text-based/user-friendly description of the payment option.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * This string value indicates the version number of the update made to any payment options returned in <b>GeteBayDetails</b>.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * This string value indicates the version number of the update made to any payment options returned in <b>GeteBayDetails</b>.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * This timestamp indicates the date and time of the last update made to any payment options returned in <b>GeteBayDetails</b>.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * This timestamp indicates the date and time of the last update made to any payment options returned in <b>GeteBayDetails</b>.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPaymentOption();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentOption", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentOption');
        if (null !== $value) {
            $this->setPaymentOption($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
