<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingProfileDiscountInfoType
 *
 * Shipping Profile DiscountInfo :
 * XSD Type: ShippingProfileDiscountInfo
 */
class ShippingProfileDiscountInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var int $domesticFlatCalcDiscountProfileId
     */
    private $domesticFlatCalcDiscountProfileId = null;

    /**
     * @var int $intlFlatCalcDiscountProfileId
     */
    private $intlFlatCalcDiscountProfileId = null;

    /**
     * @var bool $applyDomesticPromoShippingProfile
     */
    private $applyDomesticPromoShippingProfile = null;

    /**
     * @var bool $applyIntlPromoShippingProfile
     */
    private $applyIntlPromoShippingProfile = null;

    /**
     * Gets as domesticFlatCalcDiscountProfileId
     *
     * @return int
     */
    public function getDomesticFlatCalcDiscountProfileId()
    {
        return $this->domesticFlatCalcDiscountProfileId;
    }

    /**
     * Sets a new domesticFlatCalcDiscountProfileId
     *
     * @param int $domesticFlatCalcDiscountProfileId
     * @return self
     */
    public function setDomesticFlatCalcDiscountProfileId($domesticFlatCalcDiscountProfileId)
    {
        $this->domesticFlatCalcDiscountProfileId = $domesticFlatCalcDiscountProfileId;
        return $this;
    }

    /**
     * Gets as intlFlatCalcDiscountProfileId
     *
     * @return int
     */
    public function getIntlFlatCalcDiscountProfileId()
    {
        return $this->intlFlatCalcDiscountProfileId;
    }

    /**
     * Sets a new intlFlatCalcDiscountProfileId
     *
     * @param int $intlFlatCalcDiscountProfileId
     * @return self
     */
    public function setIntlFlatCalcDiscountProfileId($intlFlatCalcDiscountProfileId)
    {
        $this->intlFlatCalcDiscountProfileId = $intlFlatCalcDiscountProfileId;
        return $this;
    }

    /**
     * Gets as applyDomesticPromoShippingProfile
     *
     * @return bool
     */
    public function getApplyDomesticPromoShippingProfile()
    {
        return $this->applyDomesticPromoShippingProfile;
    }

    /**
     * Sets a new applyDomesticPromoShippingProfile
     *
     * @param bool $applyDomesticPromoShippingProfile
     * @return self
     */
    public function setApplyDomesticPromoShippingProfile($applyDomesticPromoShippingProfile)
    {
        $this->applyDomesticPromoShippingProfile = $applyDomesticPromoShippingProfile;
        return $this;
    }

    /**
     * Gets as applyIntlPromoShippingProfile
     *
     * @return bool
     */
    public function getApplyIntlPromoShippingProfile()
    {
        return $this->applyIntlPromoShippingProfile;
    }

    /**
     * Sets a new applyIntlPromoShippingProfile
     *
     * @param bool $applyIntlPromoShippingProfile
     * @return self
     */
    public function setApplyIntlPromoShippingProfile($applyIntlPromoShippingProfile)
    {
        $this->applyIntlPromoShippingProfile = $applyIntlPromoShippingProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDomesticFlatCalcDiscountProfileId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticFlatCalcDiscountProfileId", $value);
        }
        $value = $this->getIntlFlatCalcDiscountProfileId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlFlatCalcDiscountProfileId", $value);
        }
        $value = $this->getApplyDomesticPromoShippingProfile();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}applyDomesticPromoShippingProfile", $value);
        }
        $value = $this->getApplyIntlPromoShippingProfile();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}applyIntlPromoShippingProfile", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticFlatCalcDiscountProfileId');
        if (null !== $value) {
            $this->setDomesticFlatCalcDiscountProfileId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlFlatCalcDiscountProfileId');
        if (null !== $value) {
            $this->setIntlFlatCalcDiscountProfileId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}applyDomesticPromoShippingProfile');
        if (null !== $value) {
            $this->setApplyDomesticPromoShippingProfile($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}applyIntlPromoShippingProfile');
        if (null !== $value) {
            $this->setApplyIntlPromoShippingProfile($value);
        }
    }
}
