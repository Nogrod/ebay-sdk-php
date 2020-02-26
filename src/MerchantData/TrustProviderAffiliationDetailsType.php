<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TrustProviderAffiliationDetailsType
 *
 * TBD.
 * XSD Type: TrustProviderAffiliationDetailsType
 */
class TrustProviderAffiliationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Trust Provider ID
     *
     * @var int $trustProviderID
     */
    private $trustProviderID = null;

    /**
     * Tier Level
     *
     * @var string $tier
     */
    private $tier = null;

    /**
     * Degree Of Separation
     *
     * @var int $degreeOfSeparation
     */
    private $degreeOfSeparation = null;

    /**
     * Gets as trustProviderID
     *
     * Trust Provider ID
     *
     * @return int
     */
    public function getTrustProviderID()
    {
        return $this->trustProviderID;
    }

    /**
     * Sets a new trustProviderID
     *
     * Trust Provider ID
     *
     * @param int $trustProviderID
     * @return self
     */
    public function setTrustProviderID($trustProviderID)
    {
        $this->trustProviderID = $trustProviderID;
        return $this;
    }

    /**
     * Gets as tier
     *
     * Tier Level
     *
     * @return string
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Sets a new tier
     *
     * Tier Level
     *
     * @param string $tier
     * @return self
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
        return $this;
    }

    /**
     * Gets as degreeOfSeparation
     *
     * Degree Of Separation
     *
     * @return int
     */
    public function getDegreeOfSeparation()
    {
        return $this->degreeOfSeparation;
    }

    /**
     * Sets a new degreeOfSeparation
     *
     * Degree Of Separation
     *
     * @param int $degreeOfSeparation
     * @return self
     */
    public function setDegreeOfSeparation($degreeOfSeparation)
    {
        $this->degreeOfSeparation = $degreeOfSeparation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTrustProviderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TrustProviderID", $value);
        }
        $value = $this->getTier();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Tier", $value);
        }
        $value = $this->getDegreeOfSeparation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DegreeOfSeparation", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TrustProviderID');
        if (null !== $value) {
            $this->setTrustProviderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Tier');
        if (null !== $value) {
            $this->setTier($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DegreeOfSeparation');
        if (null !== $value) {
            $this->setDegreeOfSeparation($value);
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
