<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingEnhancementDurationReferenceType
 *
 * <span class="tablenote"><b>Note:</b>
 *  This type is no longer applicable, as the Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. This feature was wired off in September 2019.
 *  </span>
 *  <br>
 *  Type used by the <b>GalleryFeaturedDurations</b> container that is returned at the <b>SiteDefaults</b> and <b>Category</b> level in a <b>GetCategoryFeatures</b> response. <b>GalleryFeaturedDurations</b> container consists of the supported time durations that a picture gallery can be featured
 * XSD Type: ListingEnhancementDurationReferenceType
 */
class ListingEnhancementDurationReferenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note:</b>
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature.
     *  </span>
     *  <br>
     *  Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be featured.
     *  The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the listing.
     *
     * @var string[] $duration
     */
    private $duration = [

    ];

    /**
     * Adds as duration
     *
     * <span class="tablenote"><b>Note:</b>
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature.
     *  </span>
     *  <br>
     *  Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be featured.
     *  The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the listing.
     *
     * @return self
     * @param string $duration
     */
    public function addToDuration($duration)
    {
        $this->duration[] = $duration;
        return $this;
    }

    /**
     * isset duration
     *
     * <span class="tablenote"><b>Note:</b>
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature.
     *  </span>
     *  <br>
     *  Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be featured.
     *  The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDuration($index)
    {
        return isset($this->duration[$index]);
    }

    /**
     * unset duration
     *
     * <span class="tablenote"><b>Note:</b>
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature.
     *  </span>
     *  <br>
     *  Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be featured.
     *  The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDuration($index)
    {
        unset($this->duration[$index]);
    }

    /**
     * Gets as duration
     *
     * <span class="tablenote"><b>Note:</b>
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature.
     *  </span>
     *  <br>
     *  Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be featured.
     *  The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the listing.
     *
     * @return string[]
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * <span class="tablenote"><b>Note:</b>
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature.
     *  </span>
     *  <br>
     *  Each returned <b>Duration</b> field indicates a supported time duration that a picture gallery can be featured.
     *  The <code>Lifetime</code> value indicates that the Featured Gallery enhancement will be active for the lifetime of the listing.
     *
     * @param string[] $duration
     * @return self
     */
    public function setDuration(array $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDuration();
        if (null !== $value && [] !== $this->getDuration()) {
            $writer->write(array_map(function ($v) {return ["Duration" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ListingEnhancementDurationReferenceType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Duration', true);
        if (null !== $value) {
            $this->setDuration($value);
        }
    }
}
