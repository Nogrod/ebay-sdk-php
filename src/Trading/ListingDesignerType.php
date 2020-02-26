<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ListingDesignerType
 *
 * Contains the IDs for the Listing Designer theme and template (if either are
 *  used) associated with an item, which can optionally be used to enhance the
 *  appearance of the item's description. Cannot be used with Photo Display.
 * XSD Type: ListingDesignerType
 */
class ListingDesignerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Identifies the Layout template to use when displaying the
     *  item's description. Call <b>GetDescriptionTemplates</b> for valid IDs.
     *  Set to false in <b>GetDescriptionTemplates</b> (or do not specify
     *  <b>LayoutID</b>) to get the standard layout. If a Listing Designer
     *  layout is used (except standard layout), <b>PhotoDisplayType</b> must
     *  be false (or not be specified).
     *  When relisting an item, <b>LayoutID</b> is removed from the listing if you specify
     *  <b>ListingDesignerType</b> without <b>LayoutID</b>. Alternatively, to remove this value
     *  when revising or relisting an item, use <b>DeletedField</b>.
     *
     * @var int $layoutID
     */
    private $layoutID = null;

    /**
     * If true, indicates that the item's picture will be enlarged to fit description
     *  of the item.
     *
     * @var bool $optimalPictureSize
     */
    private $optimalPictureSize = null;

    /**
     * ID for the Listing Designer theme template to use when
     *  displaying the item's description.
     *  When relisting, if you specify <b>ListingDesignerType</b> without
     *  <b>ThemeID</b>, <b>ThemeID</b> is removed from the listing. Alternatively, to remove
     *  this value when revising or relisting an item, use <b>DeletedField</b>.
     *
     * @var int $themeID
     */
    private $themeID = null;

    /**
     * Gets as layoutID
     *
     * Identifies the Layout template to use when displaying the
     *  item's description. Call <b>GetDescriptionTemplates</b> for valid IDs.
     *  Set to false in <b>GetDescriptionTemplates</b> (or do not specify
     *  <b>LayoutID</b>) to get the standard layout. If a Listing Designer
     *  layout is used (except standard layout), <b>PhotoDisplayType</b> must
     *  be false (or not be specified).
     *  When relisting an item, <b>LayoutID</b> is removed from the listing if you specify
     *  <b>ListingDesignerType</b> without <b>LayoutID</b>. Alternatively, to remove this value
     *  when revising or relisting an item, use <b>DeletedField</b>.
     *
     * @return int
     */
    public function getLayoutID()
    {
        return $this->layoutID;
    }

    /**
     * Sets a new layoutID
     *
     * Identifies the Layout template to use when displaying the
     *  item's description. Call <b>GetDescriptionTemplates</b> for valid IDs.
     *  Set to false in <b>GetDescriptionTemplates</b> (or do not specify
     *  <b>LayoutID</b>) to get the standard layout. If a Listing Designer
     *  layout is used (except standard layout), <b>PhotoDisplayType</b> must
     *  be false (or not be specified).
     *  When relisting an item, <b>LayoutID</b> is removed from the listing if you specify
     *  <b>ListingDesignerType</b> without <b>LayoutID</b>. Alternatively, to remove this value
     *  when revising or relisting an item, use <b>DeletedField</b>.
     *
     * @param int $layoutID
     * @return self
     */
    public function setLayoutID($layoutID)
    {
        $this->layoutID = $layoutID;
        return $this;
    }

    /**
     * Gets as optimalPictureSize
     *
     * If true, indicates that the item's picture will be enlarged to fit description
     *  of the item.
     *
     * @return bool
     */
    public function getOptimalPictureSize()
    {
        return $this->optimalPictureSize;
    }

    /**
     * Sets a new optimalPictureSize
     *
     * If true, indicates that the item's picture will be enlarged to fit description
     *  of the item.
     *
     * @param bool $optimalPictureSize
     * @return self
     */
    public function setOptimalPictureSize($optimalPictureSize)
    {
        $this->optimalPictureSize = $optimalPictureSize;
        return $this;
    }

    /**
     * Gets as themeID
     *
     * ID for the Listing Designer theme template to use when
     *  displaying the item's description.
     *  When relisting, if you specify <b>ListingDesignerType</b> without
     *  <b>ThemeID</b>, <b>ThemeID</b> is removed from the listing. Alternatively, to remove
     *  this value when revising or relisting an item, use <b>DeletedField</b>.
     *
     * @return int
     */
    public function getThemeID()
    {
        return $this->themeID;
    }

    /**
     * Sets a new themeID
     *
     * ID for the Listing Designer theme template to use when
     *  displaying the item's description.
     *  When relisting, if you specify <b>ListingDesignerType</b> without
     *  <b>ThemeID</b>, <b>ThemeID</b> is removed from the listing. Alternatively, to remove
     *  this value when revising or relisting an item, use <b>DeletedField</b>.
     *
     * @param int $themeID
     * @return self
     */
    public function setThemeID($themeID)
    {
        $this->themeID = $themeID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLayoutID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LayoutID", $value);
        }
        $value = $this->getOptimalPictureSize();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OptimalPictureSize", $value);
        }
        $value = $this->getThemeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ThemeID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LayoutID');
        if (null !== $value) {
            $this->setLayoutID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OptimalPictureSize');
        if (null !== $value) {
            $this->setOptimalPictureSize($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThemeID');
        if (null !== $value) {
            $this->setThemeID($value);
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
