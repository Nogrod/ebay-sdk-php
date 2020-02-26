<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellerProfilePreferencesType
 *
 * Type defining the <b>SellerProfilePreferences</b> container. This container
 *  consists of a flag that indicates whether or not the seller has opted into Business
 *  Policies, as well as a list of Business Policies profiles that have been set up for the
 *  seller's account.
 * XSD Type: SellerProfilePreferencesType
 */
class SellerProfilePreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Boolean flag indicating whether or not a seller has opted in to Business
     *  Policies. Sellers must opt in to Business Policies to create and manage payment,
     *  return policy, and shipping profiles.
     *
     * @var bool $sellerProfileOptedIn
     */
    private $sellerProfileOptedIn = null;

    /**
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @var \Nogrod\eBaySDK\Trading\SupportedSellerProfileType[] $supportedSellerProfiles
     */
    private $supportedSellerProfiles = null;

    /**
     * Gets as sellerProfileOptedIn
     *
     * Boolean flag indicating whether or not a seller has opted in to Business
     *  Policies. Sellers must opt in to Business Policies to create and manage payment,
     *  return policy, and shipping profiles.
     *
     * @return bool
     */
    public function getSellerProfileOptedIn()
    {
        return $this->sellerProfileOptedIn;
    }

    /**
     * Sets a new sellerProfileOptedIn
     *
     * Boolean flag indicating whether or not a seller has opted in to Business
     *  Policies. Sellers must opt in to Business Policies to create and manage payment,
     *  return policy, and shipping profiles.
     *
     * @param bool $sellerProfileOptedIn
     * @return self
     */
    public function setSellerProfileOptedIn($sellerProfileOptedIn)
    {
        $this->sellerProfileOptedIn = $sellerProfileOptedIn;
        return $this;
    }

    /**
     * Adds as supportedSellerProfile
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SupportedSellerProfileType $supportedSellerProfile
     */
    public function addToSupportedSellerProfiles(\Nogrod\eBaySDK\Trading\SupportedSellerProfileType $supportedSellerProfile)
    {
        $this->supportedSellerProfiles[] = $supportedSellerProfile;
        return $this;
    }

    /**
     * isset supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedSellerProfiles($index)
    {
        return isset($this->supportedSellerProfiles[$index]);
    }

    /**
     * unset supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedSellerProfiles($index)
    {
        unset($this->supportedSellerProfiles[$index]);
    }

    /**
     * Gets as supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @return \Nogrod\eBaySDK\Trading\SupportedSellerProfileType[]
     */
    public function getSupportedSellerProfiles()
    {
        return $this->supportedSellerProfiles;
    }

    /**
     * Sets a new supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @param \Nogrod\eBaySDK\Trading\SupportedSellerProfileType[] $supportedSellerProfiles
     * @return self
     */
    public function setSupportedSellerProfiles(array $supportedSellerProfiles)
    {
        $this->supportedSellerProfiles = $supportedSellerProfiles;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellerProfileOptedIn();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerProfileOptedIn", $value);
        }
        $value = $this->getSupportedSellerProfiles();
        if (null !== $value && !empty($this->getSupportedSellerProfiles())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SupportedSellerProfiles", array_map(function ($v) {
                return ["SupportedSellerProfile" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerProfileOptedIn');
        if (null !== $value) {
            $this->setSellerProfileOptedIn($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SupportedSellerProfiles', true);
        if (null !== $value && !empty($value)) {
            $this->setSupportedSellerProfiles(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SupportedSellerProfileType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
