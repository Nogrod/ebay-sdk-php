<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerAutoListMinActiveItemsType
 *
 * Defines the options available for an automated listing rule that
 *  keeps a minimum number of items on the site.
 * XSD Type: SellingManagerAutoListMinActiveItemsType
 */
class SellingManagerAutoListMinActiveItemsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The minimum number of listings that should be active on the site.
     *
     * @var int $minActiveItemCount
     */
    private $minActiveItemCount = null;

    /**
     * The start time of the time interval during which new listings should start.
     *
     * @var \DateTime $listTimeFrom
     */
    private $listTimeFrom = null;

    /**
     * The end time of the time interval during which new listings should start.
     *
     * @var \DateTime $listTimeTo
     */
    private $listTimeTo = null;

    /**
     * Provides a number of minutes for spacing start times of listings.
     *  Used when you list multiple items at the same time. Delays subsequent
     *  listings by the specified number of minutes.
     *
     * @var int $spacingIntervalInMinutes
     */
    private $spacingIntervalInMinutes = null;

    /**
     * Sets a minimum inventory level for listings of associated products
     *  to occur.
     *
     * @var int $listingHoldInventoryLevel
     */
    private $listingHoldInventoryLevel = null;

    /**
     * Gets as minActiveItemCount
     *
     * The minimum number of listings that should be active on the site.
     *
     * @return int
     */
    public function getMinActiveItemCount()
    {
        return $this->minActiveItemCount;
    }

    /**
     * Sets a new minActiveItemCount
     *
     * The minimum number of listings that should be active on the site.
     *
     * @param int $minActiveItemCount
     * @return self
     */
    public function setMinActiveItemCount($minActiveItemCount)
    {
        $this->minActiveItemCount = $minActiveItemCount;
        return $this;
    }

    /**
     * Gets as listTimeFrom
     *
     * The start time of the time interval during which new listings should start.
     *
     * @return \DateTime
     */
    public function getListTimeFrom()
    {
        return $this->listTimeFrom;
    }

    /**
     * Sets a new listTimeFrom
     *
     * The start time of the time interval during which new listings should start.
     *
     * @param \DateTime $listTimeFrom
     * @return self
     */
    public function setListTimeFrom(\DateTime $listTimeFrom)
    {
        $this->listTimeFrom = $listTimeFrom;
        return $this;
    }

    /**
     * Gets as listTimeTo
     *
     * The end time of the time interval during which new listings should start.
     *
     * @return \DateTime
     */
    public function getListTimeTo()
    {
        return $this->listTimeTo;
    }

    /**
     * Sets a new listTimeTo
     *
     * The end time of the time interval during which new listings should start.
     *
     * @param \DateTime $listTimeTo
     * @return self
     */
    public function setListTimeTo(\DateTime $listTimeTo)
    {
        $this->listTimeTo = $listTimeTo;
        return $this;
    }

    /**
     * Gets as spacingIntervalInMinutes
     *
     * Provides a number of minutes for spacing start times of listings.
     *  Used when you list multiple items at the same time. Delays subsequent
     *  listings by the specified number of minutes.
     *
     * @return int
     */
    public function getSpacingIntervalInMinutes()
    {
        return $this->spacingIntervalInMinutes;
    }

    /**
     * Sets a new spacingIntervalInMinutes
     *
     * Provides a number of minutes for spacing start times of listings.
     *  Used when you list multiple items at the same time. Delays subsequent
     *  listings by the specified number of minutes.
     *
     * @param int $spacingIntervalInMinutes
     * @return self
     */
    public function setSpacingIntervalInMinutes($spacingIntervalInMinutes)
    {
        $this->spacingIntervalInMinutes = $spacingIntervalInMinutes;
        return $this;
    }

    /**
     * Gets as listingHoldInventoryLevel
     *
     * Sets a minimum inventory level for listings of associated products
     *  to occur.
     *
     * @return int
     */
    public function getListingHoldInventoryLevel()
    {
        return $this->listingHoldInventoryLevel;
    }

    /**
     * Sets a new listingHoldInventoryLevel
     *
     * Sets a minimum inventory level for listings of associated products
     *  to occur.
     *
     * @param int $listingHoldInventoryLevel
     * @return self
     */
    public function setListingHoldInventoryLevel($listingHoldInventoryLevel)
    {
        $this->listingHoldInventoryLevel = $listingHoldInventoryLevel;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMinActiveItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinActiveItemCount", $value);
        }
        $value = $this->getListTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListTimeFrom", $value);
        }
        $value = $this->getListTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListTimeTo", $value);
        }
        $value = $this->getSpacingIntervalInMinutes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SpacingIntervalInMinutes", $value);
        }
        $value = $this->getListingHoldInventoryLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingHoldInventoryLevel", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinActiveItemCount');
        if (null !== $value) {
            $this->setMinActiveItemCount($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListTimeFrom');
        if (null !== $value) {
            $this->setListTimeFrom($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListTimeTo');
        if (null !== $value) {
            $this->setListTimeTo($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SpacingIntervalInMinutes');
        if (null !== $value) {
            $this->setSpacingIntervalInMinutes($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingHoldInventoryLevel');
        if (null !== $value) {
            $this->setListingHoldInventoryLevel($value);
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
