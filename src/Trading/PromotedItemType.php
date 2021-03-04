<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PromotedItemType
 *
 * This type is deprecated.
 * XSD Type: PromotedItemType
 */
class PromotedItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is deprecated.
     *
     * @var string $pictureURL
     */
    private $pictureURL = null;

    /**
     * This field is deprecated.
     *
     * @var int $position
     */
    private $position = null;

    /**
     * This field is deprecated.
     *
     * @var string $selectionType
     */
    private $selectionType = null;

    /**
     * This field is deprecated.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * This field is deprecated.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\PromotionDetailsType[] $promotionDetails
     */
    private $promotionDetails = [
        
    ];

    /**
     * This field is deprecated.
     *
     * @var \DateInterval $timeLeft
     */
    private $timeLeft = null;

    /**
     * Gets as itemID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * This field is deprecated.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as pictureURL
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * This field is deprecated.
     *
     * @param string $pictureURL
     * @return self
     */
    public function setPictureURL($pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    /**
     * Gets as position
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * This field is deprecated.
     *
     * @param int $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Gets as selectionType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSelectionType()
    {
        return $this->selectionType;
    }

    /**
     * Sets a new selectionType
     *
     * This field is deprecated.
     *
     * @param string $selectionType
     * @return self
     */
    public function setSelectionType($selectionType)
    {
        $this->selectionType = $selectionType;
        return $this;
    }

    /**
     * Gets as title
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * This field is deprecated.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * This field is deprecated.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Adds as promotionDetails
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PromotionDetailsType $promotionDetails
     */
    public function addToPromotionDetails(\Nogrod\eBaySDK\Trading\PromotionDetailsType $promotionDetails)
    {
        $this->promotionDetails[] = $promotionDetails;
        return $this;
    }

    /**
     * isset promotionDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionDetails($index)
    {
        return isset($this->promotionDetails[$index]);
    }

    /**
     * unset promotionDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionDetails($index)
    {
        unset($this->promotionDetails[$index]);
    }

    /**
     * Gets as promotionDetails
     *
     * @return \Nogrod\eBaySDK\Trading\PromotionDetailsType[]
     */
    public function getPromotionDetails()
    {
        return $this->promotionDetails;
    }

    /**
     * Sets a new promotionDetails
     *
     * @param \Nogrod\eBaySDK\Trading\PromotionDetailsType[] $promotionDetails
     * @return self
     */
    public function setPromotionDetails(array $promotionDetails)
    {
        $this->promotionDetails = $promotionDetails;
        return $this;
    }

    /**
     * Gets as timeLeft
     *
     * This field is deprecated.
     *
     * @return \DateInterval
     */
    public function getTimeLeft()
    {
        return $this->timeLeft;
    }

    /**
     * Sets a new timeLeft
     *
     * This field is deprecated.
     *
     * @param \DateInterval $timeLeft
     * @return self
     */
    public function setTimeLeft(\DateInterval $timeLeft)
    {
        $this->timeLeft = $timeLeft;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getPictureURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PictureURL", $value);
        }
        $value = $this->getPosition();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Position", $value);
        }
        $value = $this->getSelectionType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SelectionType", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getPromotionDetails();
        if (null !== $value && !empty($this->getPromotionDetails())) {
            $writer->write(array_map(function ($v) {
                return ["PromotionDetails" => $v];
            }, $value));
        }
        $value = $this->getTimeLeft();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeLeft", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURL');
        if (null !== $value) {
            $this->setPictureURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Position');
        if (null !== $value) {
            $this->setPosition($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SelectionType');
        if (null !== $value) {
            $this->setSelectionType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotionDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PromotionDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeLeft');
        if (null !== $value) {
            $this->setTimeLeft(new \DateInterval($value));
        }
    }
}
