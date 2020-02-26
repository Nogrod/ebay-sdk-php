<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ItemsCanceledEventType
 *
 * This type is deprecated.
 * XSD Type: ItemsCanceledEventType
 */
class ItemsCanceledEventType extends AbstractResponseType
{

    /**
     * This field is deprecated.
     *
     * @var string[] $canceledItemIDArray
     */
    private $canceledItemIDArray = null;

    /**
     * This field is deprecated.
     *
     * @var bool $eligibleForRelist
     */
    private $eligibleForRelist = null;

    /**
     * This field is deprecated.
     *
     * @var string $sellerID
     */
    private $sellerID = null;

    /**
     * Adds as itemID
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $itemID
     */
    public function addToCanceledItemIDArray($itemID)
    {
        $this->canceledItemIDArray[] = $itemID;
        return $this;
    }

    /**
     * isset canceledItemIDArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCanceledItemIDArray($index)
    {
        return isset($this->canceledItemIDArray[$index]);
    }

    /**
     * unset canceledItemIDArray
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCanceledItemIDArray($index)
    {
        unset($this->canceledItemIDArray[$index]);
    }

    /**
     * Gets as canceledItemIDArray
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getCanceledItemIDArray()
    {
        return $this->canceledItemIDArray;
    }

    /**
     * Sets a new canceledItemIDArray
     *
     * This field is deprecated.
     *
     * @param string $canceledItemIDArray
     * @return self
     */
    public function setCanceledItemIDArray(array $canceledItemIDArray)
    {
        $this->canceledItemIDArray = $canceledItemIDArray;
        return $this;
    }

    /**
     * Gets as eligibleForRelist
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getEligibleForRelist()
    {
        return $this->eligibleForRelist;
    }

    /**
     * Sets a new eligibleForRelist
     *
     * This field is deprecated.
     *
     * @param bool $eligibleForRelist
     * @return self
     */
    public function setEligibleForRelist($eligibleForRelist)
    {
        $this->eligibleForRelist = $eligibleForRelist;
        return $this;
    }

    /**
     * Gets as sellerID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * Sets a new sellerID
     *
     * This field is deprecated.
     *
     * @param string $sellerID
     * @return self
     */
    public function setSellerID($sellerID)
    {
        $this->sellerID = $sellerID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCanceledItemIDArray();
        if (null !== $value && !empty($this->getCanceledItemIDArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CanceledItemIDArray", array_map(function ($v) {
                return ["ItemID" => $v];
            }, $value));
        }
        $value = $this->getEligibleForRelist();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EligibleForRelist", $value);
        }
        $value = $this->getSellerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerID", $value);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CanceledItemIDArray', true);
        if (null !== $value && !empty($value)) {
            $this->setCanceledItemIDArray($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EligibleForRelist');
        if (null !== $value) {
            $this->setEligibleForRelist($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerID');
        if (null !== $value) {
            $this->setSellerID($value);
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
