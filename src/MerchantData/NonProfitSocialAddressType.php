<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NonProfitSocialAddressType
 *
 * Type defining the <b>NonProfitSocialAddress</b> container, which identifies the
 *  nonprofit organization's social networking site account ID. A <b>NonProfitSocialAddress</b>
 *  container will exist for each social networking site that the charity organization is
 *  associated with.
 * XSD Type: NonProfitSocialAddressType
 */
class NonProfitSocialAddressType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Enumeration value that indicates the social networking site that the nonprofit charity
     *  organization is associated with. This is a required field for each social networking
     *  account associated with the nonprofit organization.
     *
     * @var string $socialAddressType
     */
    private $socialAddressType = null;

    /**
     * The account ID/handle associated with the nonprofit charity organization's social
     *  networking site. This is a required field for each social networking account associated
     *  with the nonprofit organization.
     *
     * @var string $socialAddressId
     */
    private $socialAddressId = null;

    /**
     * Gets as socialAddressType
     *
     * Enumeration value that indicates the social networking site that the nonprofit charity
     *  organization is associated with. This is a required field for each social networking
     *  account associated with the nonprofit organization.
     *
     * @return string
     */
    public function getSocialAddressType()
    {
        return $this->socialAddressType;
    }

    /**
     * Sets a new socialAddressType
     *
     * Enumeration value that indicates the social networking site that the nonprofit charity
     *  organization is associated with. This is a required field for each social networking
     *  account associated with the nonprofit organization.
     *
     * @param string $socialAddressType
     * @return self
     */
    public function setSocialAddressType($socialAddressType)
    {
        $this->socialAddressType = $socialAddressType;
        return $this;
    }

    /**
     * Gets as socialAddressId
     *
     * The account ID/handle associated with the nonprofit charity organization's social
     *  networking site. This is a required field for each social networking account associated
     *  with the nonprofit organization.
     *
     * @return string
     */
    public function getSocialAddressId()
    {
        return $this->socialAddressId;
    }

    /**
     * Sets a new socialAddressId
     *
     * The account ID/handle associated with the nonprofit charity organization's social
     *  networking site. This is a required field for each social networking account associated
     *  with the nonprofit organization.
     *
     * @param string $socialAddressId
     * @return self
     */
    public function setSocialAddressId($socialAddressId)
    {
        $this->socialAddressId = $socialAddressId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSocialAddressType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SocialAddressType", $value);
        }
        $value = $this->getSocialAddressId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SocialAddressId", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SocialAddressType');
        if (null !== $value) {
            $this->setSocialAddressType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SocialAddressId');
        if (null !== $value) {
            $this->setSocialAddressId($value);
        }
    }
}
