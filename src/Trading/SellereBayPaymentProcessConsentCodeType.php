<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellereBayPaymentProcessConsentCodeType
 *
 * This type is deprecated.
 * XSD Type: SellereBayPaymentProcessConsentCodeType
 */
class SellereBayPaymentProcessConsentCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var bool $payoutMethodSet
     */
    private $payoutMethodSet = null;

    /**
     * This field is deprecated.
     *
     * @var string $payoutMethod
     */
    private $payoutMethod = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\UserAgreementInfoType[] $userAgreementInfo
     */
    private $userAgreementInfo = [

    ];

    /**
     * Gets as payoutMethodSet
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getPayoutMethodSet()
    {
        return $this->payoutMethodSet;
    }

    /**
     * Sets a new payoutMethodSet
     *
     * This field is deprecated.
     *
     * @param bool $payoutMethodSet
     * @return self
     */
    public function setPayoutMethodSet($payoutMethodSet)
    {
        $this->payoutMethodSet = $payoutMethodSet;
        return $this;
    }

    /**
     * Gets as payoutMethod
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPayoutMethod()
    {
        return $this->payoutMethod;
    }

    /**
     * Sets a new payoutMethod
     *
     * This field is deprecated.
     *
     * @param string $payoutMethod
     * @return self
     */
    public function setPayoutMethod($payoutMethod)
    {
        $this->payoutMethod = $payoutMethod;
        return $this;
    }

    /**
     * Adds as userAgreementInfo
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\UserAgreementInfoType $userAgreementInfo
     */
    public function addToUserAgreementInfo(\Nogrod\eBaySDK\Trading\UserAgreementInfoType $userAgreementInfo)
    {
        $this->userAgreementInfo[] = $userAgreementInfo;
        return $this;
    }

    /**
     * isset userAgreementInfo
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserAgreementInfo($index)
    {
        return isset($this->userAgreementInfo[$index]);
    }

    /**
     * unset userAgreementInfo
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserAgreementInfo($index)
    {
        unset($this->userAgreementInfo[$index]);
    }

    /**
     * Gets as userAgreementInfo
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\UserAgreementInfoType[]
     */
    public function getUserAgreementInfo()
    {
        return $this->userAgreementInfo;
    }

    /**
     * Sets a new userAgreementInfo
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\UserAgreementInfoType[] $userAgreementInfo
     * @return self
     */
    public function setUserAgreementInfo(array $userAgreementInfo)
    {
        $this->userAgreementInfo = $userAgreementInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPayoutMethodSet();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayoutMethodSet", $value);
        }
        $value = $this->getPayoutMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PayoutMethod", $value);
        }
        $value = $this->getUserAgreementInfo();
        if (null !== $value && !empty($this->getUserAgreementInfo())) {
            $writer->write(array_map(function ($v) {
                return ["UserAgreementInfo" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayoutMethodSet');
        if (null !== $value) {
            $this->setPayoutMethodSet($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PayoutMethod');
        if (null !== $value) {
            $this->setPayoutMethod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserAgreementInfo', true);
        if (null !== $value && !empty($value)) {
            $this->setUserAgreementInfo(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\UserAgreementInfoType::fromKeyValue($v);
            }, $value));
        }
    }
}
