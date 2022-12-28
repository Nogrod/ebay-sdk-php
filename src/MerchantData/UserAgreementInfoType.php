<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UserAgreementInfoType
 *
 * This type is deprecated.
 * XSD Type: UserAgreementInfoType
 */
class UserAgreementInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $site
     */
    private $site = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellereBayPaymentProcessStatus
     */
    private $sellereBayPaymentProcessStatus = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $acceptedTime
     */
    private $acceptedTime = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $sellereBayPaymentProcessEnableTime
     */
    private $sellereBayPaymentProcessEnableTime = null;

    /**
     * This field is deprecated.
     *
     * @var string $userAgreementURL
     */
    private $userAgreementURL = null;

    /**
     * Gets as site
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * This field is deprecated.
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as sellereBayPaymentProcessStatus
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellereBayPaymentProcessStatus()
    {
        return $this->sellereBayPaymentProcessStatus;
    }

    /**
     * Sets a new sellereBayPaymentProcessStatus
     *
     * This field is deprecated.
     *
     * @param string $sellereBayPaymentProcessStatus
     * @return self
     */
    public function setSellereBayPaymentProcessStatus($sellereBayPaymentProcessStatus)
    {
        $this->sellereBayPaymentProcessStatus = $sellereBayPaymentProcessStatus;
        return $this;
    }

    /**
     * Gets as acceptedTime
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getAcceptedTime()
    {
        return $this->acceptedTime;
    }

    /**
     * Sets a new acceptedTime
     *
     * This field is deprecated.
     *
     * @param \DateTime $acceptedTime
     * @return self
     */
    public function setAcceptedTime(\DateTime $acceptedTime)
    {
        $this->acceptedTime = $acceptedTime;
        return $this;
    }

    /**
     * Gets as sellereBayPaymentProcessEnableTime
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getSellereBayPaymentProcessEnableTime()
    {
        return $this->sellereBayPaymentProcessEnableTime;
    }

    /**
     * Sets a new sellereBayPaymentProcessEnableTime
     *
     * This field is deprecated.
     *
     * @param \DateTime $sellereBayPaymentProcessEnableTime
     * @return self
     */
    public function setSellereBayPaymentProcessEnableTime(\DateTime $sellereBayPaymentProcessEnableTime)
    {
        $this->sellereBayPaymentProcessEnableTime = $sellereBayPaymentProcessEnableTime;
        return $this;
    }

    /**
     * Gets as userAgreementURL
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getUserAgreementURL()
    {
        return $this->userAgreementURL;
    }

    /**
     * Sets a new userAgreementURL
     *
     * This field is deprecated.
     *
     * @param string $userAgreementURL
     * @return self
     */
    public function setUserAgreementURL($userAgreementURL)
    {
        $this->userAgreementURL = $userAgreementURL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getSellereBayPaymentProcessStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessStatus", $value);
        }
        $value = $this->getAcceptedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AcceptedTime", $value);
        }
        $value = $this->getSellereBayPaymentProcessEnableTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessEnableTime", $value);
        }
        $value = $this->getUserAgreementURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserAgreementURL", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessStatus');
        if (null !== $value) {
            $this->setSellereBayPaymentProcessStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AcceptedTime');
        if (null !== $value) {
            $this->setAcceptedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellereBayPaymentProcessEnableTime');
        if (null !== $value) {
            $this->setSellereBayPaymentProcessEnableTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserAgreementURL');
        if (null !== $value) {
            $this->setUserAgreementURL($value);
        }
    }
}
