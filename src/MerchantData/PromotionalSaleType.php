<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PromotionalSaleType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  Details for a single promotional sale.
 * XSD Type: PromotionalSaleType
 */
class PromotionalSaleType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Unique ID of a promotional sale (discount and/or free shipping) for items.
     *  This field is an input field only for the SetPromotionalSale call
     *  and only if you are not adding a new promotional sale.
     *
     * @var int $promotionalSaleID
     */
    private $promotionalSaleID = null;

    /**
     * Name of a promotional sale for items.
     *
     * @var string $promotionalSaleName
     */
    private $promotionalSaleName = null;

    /**
     * Items covered by a promotional sale.
     *
     * @var string[] $promotionalSaleItemIDArray
     */
    private $promotionalSaleItemIDArray = null;

    /**
     * Status of a promotional sale for items.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Type of a promotional sale discount for items (for example, percentage).
     *  Applies to price discount sales only.
     *
     * @var string $discountType
     */
    private $discountType = null;

    /**
     * Value of a promotional sale discount for items, a percentage discount
     *  or a fixed amount reduction. Percentage discounts must be at least 5% and
     *  cannot exceed 75% of the original listing price. Fixed amount discounts
     *  will be in the currency of the original listing.
     *  Applies to price discount sales only.
     *
     * @var float $discountValue
     */
    private $discountValue = null;

    /**
     * Start date of a promotional sale for items. Promotional sales can start
     *  immediately or be scheduled to start at a later date. Some sites require
     *  items to have been listed for a specific duration before they can be added
     *  to a promotional sale (for example, on the US site, items must have been
     *  listed for a day before they can be added to a promotional sale).
     *
     * @var \DateTime $promotionalSaleStartTime
     */
    private $promotionalSaleStartTime = null;

    /**
     * End date of a promotional sale discount for items. Maximum listing durations
     *  vary by site from 14 days to 45 days. The minimum promotional sale duration is 1 day for most sites, but 3 days on some sites.
     *
     * @var \DateTime $promotionalSaleEndTime
     */
    private $promotionalSaleEndTime = null;

    /**
     * Type of promotional sale: price discount, free shipping, or both.
     *
     * @var string $promotionalSaleType
     */
    private $promotionalSaleType = null;

    /**
     * Gets as promotionalSaleID
     *
     * Unique ID of a promotional sale (discount and/or free shipping) for items.
     *  This field is an input field only for the SetPromotionalSale call
     *  and only if you are not adding a new promotional sale.
     *
     * @return int
     */
    public function getPromotionalSaleID()
    {
        return $this->promotionalSaleID;
    }

    /**
     * Sets a new promotionalSaleID
     *
     * Unique ID of a promotional sale (discount and/or free shipping) for items.
     *  This field is an input field only for the SetPromotionalSale call
     *  and only if you are not adding a new promotional sale.
     *
     * @param int $promotionalSaleID
     * @return self
     */
    public function setPromotionalSaleID($promotionalSaleID)
    {
        $this->promotionalSaleID = $promotionalSaleID;
        return $this;
    }

    /**
     * Gets as promotionalSaleName
     *
     * Name of a promotional sale for items.
     *
     * @return string
     */
    public function getPromotionalSaleName()
    {
        return $this->promotionalSaleName;
    }

    /**
     * Sets a new promotionalSaleName
     *
     * Name of a promotional sale for items.
     *
     * @param string $promotionalSaleName
     * @return self
     */
    public function setPromotionalSaleName($promotionalSaleName)
    {
        $this->promotionalSaleName = $promotionalSaleName;
        return $this;
    }

    /**
     * Adds as itemID
     *
     * Items covered by a promotional sale.
     *
     * @return self
     * @param string $itemID
     */
    public function addToPromotionalSaleItemIDArray($itemID)
    {
        $this->promotionalSaleItemIDArray[] = $itemID;
        return $this;
    }

    /**
     * isset promotionalSaleItemIDArray
     *
     * Items covered by a promotional sale.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalSaleItemIDArray($index)
    {
        return isset($this->promotionalSaleItemIDArray[$index]);
    }

    /**
     * unset promotionalSaleItemIDArray
     *
     * Items covered by a promotional sale.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalSaleItemIDArray($index)
    {
        unset($this->promotionalSaleItemIDArray[$index]);
    }

    /**
     * Gets as promotionalSaleItemIDArray
     *
     * Items covered by a promotional sale.
     *
     * @return string[]
     */
    public function getPromotionalSaleItemIDArray()
    {
        return $this->promotionalSaleItemIDArray;
    }

    /**
     * Sets a new promotionalSaleItemIDArray
     *
     * Items covered by a promotional sale.
     *
     * @param string $promotionalSaleItemIDArray
     * @return self
     */
    public function setPromotionalSaleItemIDArray(array $promotionalSaleItemIDArray)
    {
        $this->promotionalSaleItemIDArray = $promotionalSaleItemIDArray;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status of a promotional sale for items.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status of a promotional sale for items.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as discountType
     *
     * Type of a promotional sale discount for items (for example, percentage).
     *  Applies to price discount sales only.
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * Sets a new discountType
     *
     * Type of a promotional sale discount for items (for example, percentage).
     *  Applies to price discount sales only.
     *
     * @param string $discountType
     * @return self
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
        return $this;
    }

    /**
     * Gets as discountValue
     *
     * Value of a promotional sale discount for items, a percentage discount
     *  or a fixed amount reduction. Percentage discounts must be at least 5% and
     *  cannot exceed 75% of the original listing price. Fixed amount discounts
     *  will be in the currency of the original listing.
     *  Applies to price discount sales only.
     *
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Sets a new discountValue
     *
     * Value of a promotional sale discount for items, a percentage discount
     *  or a fixed amount reduction. Percentage discounts must be at least 5% and
     *  cannot exceed 75% of the original listing price. Fixed amount discounts
     *  will be in the currency of the original listing.
     *  Applies to price discount sales only.
     *
     * @param float $discountValue
     * @return self
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * Gets as promotionalSaleStartTime
     *
     * Start date of a promotional sale for items. Promotional sales can start
     *  immediately or be scheduled to start at a later date. Some sites require
     *  items to have been listed for a specific duration before they can be added
     *  to a promotional sale (for example, on the US site, items must have been
     *  listed for a day before they can be added to a promotional sale).
     *
     * @return \DateTime
     */
    public function getPromotionalSaleStartTime()
    {
        return $this->promotionalSaleStartTime;
    }

    /**
     * Sets a new promotionalSaleStartTime
     *
     * Start date of a promotional sale for items. Promotional sales can start
     *  immediately or be scheduled to start at a later date. Some sites require
     *  items to have been listed for a specific duration before they can be added
     *  to a promotional sale (for example, on the US site, items must have been
     *  listed for a day before they can be added to a promotional sale).
     *
     * @param \DateTime $promotionalSaleStartTime
     * @return self
     */
    public function setPromotionalSaleStartTime(\DateTime $promotionalSaleStartTime)
    {
        $this->promotionalSaleStartTime = $promotionalSaleStartTime;
        return $this;
    }

    /**
     * Gets as promotionalSaleEndTime
     *
     * End date of a promotional sale discount for items. Maximum listing durations
     *  vary by site from 14 days to 45 days. The minimum promotional sale duration is 1 day for most sites, but 3 days on some sites.
     *
     * @return \DateTime
     */
    public function getPromotionalSaleEndTime()
    {
        return $this->promotionalSaleEndTime;
    }

    /**
     * Sets a new promotionalSaleEndTime
     *
     * End date of a promotional sale discount for items. Maximum listing durations
     *  vary by site from 14 days to 45 days. The minimum promotional sale duration is 1 day for most sites, but 3 days on some sites.
     *
     * @param \DateTime $promotionalSaleEndTime
     * @return self
     */
    public function setPromotionalSaleEndTime(\DateTime $promotionalSaleEndTime)
    {
        $this->promotionalSaleEndTime = $promotionalSaleEndTime;
        return $this;
    }

    /**
     * Gets as promotionalSaleType
     *
     * Type of promotional sale: price discount, free shipping, or both.
     *
     * @return string
     */
    public function getPromotionalSaleType()
    {
        return $this->promotionalSaleType;
    }

    /**
     * Sets a new promotionalSaleType
     *
     * Type of promotional sale: price discount, free shipping, or both.
     *
     * @param string $promotionalSaleType
     * @return self
     */
    public function setPromotionalSaleType($promotionalSaleType)
    {
        $this->promotionalSaleType = $promotionalSaleType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPromotionalSaleID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID", $value);
        }
        $value = $this->getPromotionalSaleName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleName", $value);
        }
        $value = $this->getPromotionalSaleItemIDArray();
        if (null !== $value && !empty($this->getPromotionalSaleItemIDArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleItemIDArray", array_map(function ($v) {
                return ["ItemID" => $v];
            }, $value));
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getDiscountType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountType", $value);
        }
        $value = $this->getDiscountValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DiscountValue", $value);
        }
        $value = $this->getPromotionalSaleStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleStartTime", $value);
        }
        $value = $this->getPromotionalSaleEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleEndTime", $value);
        }
        $value = $this->getPromotionalSaleType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleType", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID');
        if (null !== $value) {
            $this->setPromotionalSaleID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleName');
        if (null !== $value) {
            $this->setPromotionalSaleName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleItemIDArray', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotionalSaleItemIDArray($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountType');
        if (null !== $value) {
            $this->setDiscountType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DiscountValue');
        if (null !== $value) {
            $this->setDiscountValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleStartTime');
        if (null !== $value) {
            $this->setPromotionalSaleStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleEndTime');
        if (null !== $value) {
            $this->setPromotionalSaleEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleType');
        if (null !== $value) {
            $this->setPromotionalSaleType($value);
        }
    }
}
