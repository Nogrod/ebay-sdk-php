<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PromotionRuleType
 *
 * This type is deprecated.
 * XSD Type: PromotionRuleType
 */
class PromotionRuleType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var int $promotedStoreCategoryID
     */
    private $promotedStoreCategoryID = null;

    /**
     * This field is deprecated.
     *
     * @var string $promotedeBayCategoryID
     */
    private $promotedeBayCategoryID = null;

    /**
     * This field is deprecated.
     *
     * @var string $promotedKeywords
     */
    private $promotedKeywords = null;

    /**
     * This field is deprecated.
     *
     * @var string $referringItemID
     */
    private $referringItemID = null;

    /**
     * This field is deprecated.
     *
     * @var int $referringStoreCategoryID
     */
    private $referringStoreCategoryID = null;

    /**
     * This field is deprecated.
     *
     * @var string $referringeBayCategoryID
     */
    private $referringeBayCategoryID = null;

    /**
     * This field is deprecated.
     *
     * @var string $referringKeywords
     */
    private $referringKeywords = null;

    /**
     * This field is deprecated.
     *
     * @var string $promotionScheme
     */
    private $promotionScheme = null;

    /**
     * This field is deprecated.
     *
     * @var string $promotionMethod
     */
    private $promotionMethod = null;

    /**
     * Gets as promotedStoreCategoryID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getPromotedStoreCategoryID()
    {
        return $this->promotedStoreCategoryID;
    }

    /**
     * Sets a new promotedStoreCategoryID
     *
     * This field is deprecated.
     *
     * @param int $promotedStoreCategoryID
     * @return self
     */
    public function setPromotedStoreCategoryID($promotedStoreCategoryID)
    {
        $this->promotedStoreCategoryID = $promotedStoreCategoryID;
        return $this;
    }

    /**
     * Gets as promotedeBayCategoryID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPromotedeBayCategoryID()
    {
        return $this->promotedeBayCategoryID;
    }

    /**
     * Sets a new promotedeBayCategoryID
     *
     * This field is deprecated.
     *
     * @param string $promotedeBayCategoryID
     * @return self
     */
    public function setPromotedeBayCategoryID($promotedeBayCategoryID)
    {
        $this->promotedeBayCategoryID = $promotedeBayCategoryID;
        return $this;
    }

    /**
     * Gets as promotedKeywords
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPromotedKeywords()
    {
        return $this->promotedKeywords;
    }

    /**
     * Sets a new promotedKeywords
     *
     * This field is deprecated.
     *
     * @param string $promotedKeywords
     * @return self
     */
    public function setPromotedKeywords($promotedKeywords)
    {
        $this->promotedKeywords = $promotedKeywords;
        return $this;
    }

    /**
     * Gets as referringItemID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getReferringItemID()
    {
        return $this->referringItemID;
    }

    /**
     * Sets a new referringItemID
     *
     * This field is deprecated.
     *
     * @param string $referringItemID
     * @return self
     */
    public function setReferringItemID($referringItemID)
    {
        $this->referringItemID = $referringItemID;
        return $this;
    }

    /**
     * Gets as referringStoreCategoryID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getReferringStoreCategoryID()
    {
        return $this->referringStoreCategoryID;
    }

    /**
     * Sets a new referringStoreCategoryID
     *
     * This field is deprecated.
     *
     * @param int $referringStoreCategoryID
     * @return self
     */
    public function setReferringStoreCategoryID($referringStoreCategoryID)
    {
        $this->referringStoreCategoryID = $referringStoreCategoryID;
        return $this;
    }

    /**
     * Gets as referringeBayCategoryID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getReferringeBayCategoryID()
    {
        return $this->referringeBayCategoryID;
    }

    /**
     * Sets a new referringeBayCategoryID
     *
     * This field is deprecated.
     *
     * @param string $referringeBayCategoryID
     * @return self
     */
    public function setReferringeBayCategoryID($referringeBayCategoryID)
    {
        $this->referringeBayCategoryID = $referringeBayCategoryID;
        return $this;
    }

    /**
     * Gets as referringKeywords
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getReferringKeywords()
    {
        return $this->referringKeywords;
    }

    /**
     * Sets a new referringKeywords
     *
     * This field is deprecated.
     *
     * @param string $referringKeywords
     * @return self
     */
    public function setReferringKeywords($referringKeywords)
    {
        $this->referringKeywords = $referringKeywords;
        return $this;
    }

    /**
     * Gets as promotionScheme
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPromotionScheme()
    {
        return $this->promotionScheme;
    }

    /**
     * Sets a new promotionScheme
     *
     * This field is deprecated.
     *
     * @param string $promotionScheme
     * @return self
     */
    public function setPromotionScheme($promotionScheme)
    {
        $this->promotionScheme = $promotionScheme;
        return $this;
    }

    /**
     * Gets as promotionMethod
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPromotionMethod()
    {
        return $this->promotionMethod;
    }

    /**
     * Sets a new promotionMethod
     *
     * This field is deprecated.
     *
     * @param string $promotionMethod
     * @return self
     */
    public function setPromotionMethod($promotionMethod)
    {
        $this->promotionMethod = $promotionMethod;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPromotedStoreCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotedStoreCategoryID", $value);
        }
        $value = $this->getPromotedeBayCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotedeBayCategoryID", $value);
        }
        $value = $this->getPromotedKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotedKeywords", $value);
        }
        $value = $this->getReferringItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferringItemID", $value);
        }
        $value = $this->getReferringStoreCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferringStoreCategoryID", $value);
        }
        $value = $this->getReferringeBayCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferringeBayCategoryID", $value);
        }
        $value = $this->getReferringKeywords();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferringKeywords", $value);
        }
        $value = $this->getPromotionScheme();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionScheme", $value);
        }
        $value = $this->getPromotionMethod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionMethod", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotedStoreCategoryID');
        if (null !== $value) {
            $this->setPromotedStoreCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotedeBayCategoryID');
        if (null !== $value) {
            $this->setPromotedeBayCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotedKeywords');
        if (null !== $value) {
            $this->setPromotedKeywords($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferringItemID');
        if (null !== $value) {
            $this->setReferringItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferringStoreCategoryID');
        if (null !== $value) {
            $this->setReferringStoreCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferringeBayCategoryID');
        if (null !== $value) {
            $this->setReferringeBayCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferringKeywords');
        if (null !== $value) {
            $this->setReferringKeywords($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionScheme');
        if (null !== $value) {
            $this->setPromotionScheme($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionMethod');
        if (null !== $value) {
            $this->setPromotionMethod($value);
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
