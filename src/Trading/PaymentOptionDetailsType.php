<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentOptionDetailsType
 *
 * <br><br>
 *  <span class="tablenote"><b>Note: </b> This type is used by the deprecated <b>PaymentOptionDetails</b> containers that are returned in <b>GeteBayDetails</b> if the <code>PaymentOptionDetails</code> value is used in a <b>DetailName</b> field in the call request. Although site-level payment options are still returned in <b>GeteBayDetails</b>, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getCategoryPolicies" target="_blank">getCategoryPolicies</a> method to retrieve the offline payment methods that are accepted for a specific leaf category on a marketplace. Pass the target <b>marketplace_id</b> and the leaf category ID in the filter query parameter, and then inspect the <b>categoryPolicies.paymentMethods</b> array in the response.
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
        $value = $this->paymentOption;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PaymentOption', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PaymentOptionDetailsType
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
                case 'PaymentOption':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->paymentOption = $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }
}
