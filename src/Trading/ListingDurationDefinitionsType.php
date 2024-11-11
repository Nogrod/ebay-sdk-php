<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingDurationDefinitionsType
 *
 * A type used by the <b>ListingDurations</b> container node that is returned in the response of <b>GetCategoryFeatures</b> call. A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types.
 * XSD Type: ListingDurationDefinitionsType
 */
class ListingDurationDefinitionsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This attribute indicates the current version of the Listing Durations data. This can be helpful to let users know when modifications have been made to Listing Durations.
     *
     * @var int $version
     */
    private $version = null;

    /**
     * A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingDurationDefinitionType[] $listingDuration
     */
    private $listingDuration = [

    ];

    /**
     * Gets as version
     *
     * This attribute indicates the current version of the Listing Durations data. This can be helpful to let users know when modifications have been made to Listing Durations.
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * This attribute indicates the current version of the Listing Durations data. This can be helpful to let users know when modifications have been made to Listing Durations.
     *
     * @param int $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as listingDuration
     *
     * A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ListingDurationDefinitionType $listingDuration
     */
    public function addToListingDuration(\Nogrod\eBaySDK\Trading\ListingDurationDefinitionType $listingDuration)
    {
        $this->listingDuration[] = $listingDuration;
        return $this;
    }

    /**
     * isset listingDuration
     *
     * A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListingDuration($index)
    {
        return isset($this->listingDuration[$index]);
    }

    /**
     * unset listingDuration
     *
     * A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListingDuration($index)
    {
        unset($this->listingDuration[$index]);
    }

    /**
     * Gets as listingDuration
     *
     * A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingDurationDefinitionType[]
     */
    public function getListingDuration()
    {
        return $this->listingDuration;
    }

    /**
     * Sets a new listingDuration
     *
     * A <b>ListingDurations</b> container is returned for each listing type supported for the eBay site, and the supported listing duration times for those listing types. The <b>durationSetID</b> attribute value indicates the listing type.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingDurationDefinitionType[] $listingDuration
     * @return self
     */
    public function setListingDuration(array $listingDuration)
    {
        $this->listingDuration = $listingDuration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeAttribute("Version", $value);
        }
        $value = $this->getListingDuration();
        if (null !== $value && [] !== $this->getListingDuration()) {
            $writer->write(array_map(function ($v) {return ["ListingDuration" => $v];}, $value));
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
        $value = Func::mapValue($keyValue, 'Version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingDuration');
        if (null !== $value) {
            $this->setListingDuration(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ListingDurationDefinitionType::fromKeyValue($v);}, $value));
        }
    }
}
