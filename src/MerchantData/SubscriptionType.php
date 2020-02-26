<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SubscriptionType
 *
 *
 * XSD Type: SubscriptionType
 */
class SubscriptionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $eIASToken
     */
    private $eIASToken = null;

    /**
     * @var string $siteID
     */
    private $siteID = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * Gets as eIASToken
     *
     * @return string
     */
    public function getEIASToken()
    {
        return $this->eIASToken;
    }

    /**
     * Sets a new eIASToken
     *
     * @param string $eIASToken
     * @return self
     */
    public function setEIASToken($eIASToken)
    {
        $this->eIASToken = $eIASToken;
        return $this;
    }

    /**
     * Gets as siteID
     *
     * @return string
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * @param string $siteID
     * @return self
     */
    public function setSiteID($siteID)
    {
        $this->siteID = $siteID;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEIASToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EIASToken", $value);
        }
        $value = $this->getSiteID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteID", $value);
        }
        $value = $this->getActive();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Active", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EIASToken');
        if (null !== $value) {
            $this->setEIASToken($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteID');
        if (null !== $value) {
            $this->setSiteID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Active');
        if (null !== $value) {
            $this->setActive($value);
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
