<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingEnhancementDurationReferenceType
 *
 * <span class="tablenote"><b>Note:</b>
 *  This type is no longer applicable, as the Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. Starting August 15, 2019, this feature cannot be added when creating a new listing or revising an existing listing. For existing listings that already have the feature, the seller will not be able to change the duration to <code>Lifetime</code>. On September 15, 2019, this feature will be wired off. If a seller revises an existing listing that had this feature set, the <b>GalleryType</b> value will automatically default to <code>Gallery</code>.
 *  </span>
 *  <br>
 *  Type used by the <b>GalleryFeaturedDurations</b> container that is returned at the <b>SiteDefaults</b> and <b>Category</b> level in a <b>GetCategoryFeatures</b> response. <b>GalleryFeaturedDurations</b> container consists of the supported time durations that a picture gallery can be featured
 * XSD Type: ListingEnhancementDurationReferenceType
 */
class ListingEnhancementDurationReferenceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <span class="tablenote"><b>Note:</b>
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. Starting August 15, 2019, this feature cannot be added when creating a new listing or revising an existing listing. For existing listings that already have the feature, the seller will not be able to change the duration to <code>Lifetime</code>. On September 15, 2019, this feature will be wired off. If a seller revises an existing listing that had this feature set, the <b>GalleryType</b> value will automatically default to <code>Gallery</code>.
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
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. Starting August 15, 2019, this feature cannot be added when creating a new listing or revising an existing listing. For existing listings that already have the feature, the seller will not be able to change the duration to <code>Lifetime</code>. On September 15, 2019, this feature will be wired off. If a seller revises an existing listing that had this feature set, the <b>GalleryType</b> value will automatically default to <code>Gallery</code>.
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
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. Starting August 15, 2019, this feature cannot be added when creating a new listing or revising an existing listing. For existing listings that already have the feature, the seller will not be able to change the duration to <code>Lifetime</code>. On September 15, 2019, this feature will be wired off. If a seller revises an existing listing that had this feature set, the <b>GalleryType</b> value will automatically default to <code>Gallery</code>.
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
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. Starting August 15, 2019, this feature cannot be added when creating a new listing or revising an existing listing. For existing listings that already have the feature, the seller will not be able to change the duration to <code>Lifetime</code>. On September 15, 2019, this feature will be wired off. If a seller revises an existing listing that had this feature set, the <b>GalleryType</b> value will automatically default to <code>Gallery</code>.
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
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. Starting August 15, 2019, this feature cannot be added when creating a new listing or revising an existing listing. For existing listings that already have the feature, the seller will not be able to change the duration to <code>Lifetime</code>. On September 15, 2019, this feature will be wired off. If a seller revises an existing listing that had this feature set, the <b>GalleryType</b> value will automatically default to <code>Gallery</code>.
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
     *  <b>Duration</b> fields are currently still being returned in <b>GetCategoryFeatures</b> response, but Featured Gallery listing feature is being deprecated for all sites. If a seller attempts to add Featured Gallery as a listing enhancement, it is allowed, but a warning will be returned announcing the deprecation of the feature. Starting August 15, 2019, this feature cannot be added when creating a new listing or revising an existing listing. For existing listings that already have the feature, the seller will not be able to change the duration to <code>Lifetime</code>. On September 15, 2019, this feature will be wired off. If a seller revises an existing listing that had this feature set, the <b>GalleryType</b> value will automatically default to <code>Gallery</code>.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDuration();
        if (null !== $value && !empty($this->getDuration())) {
            $writer->write(array_map(function ($v) {
                return ["Duration" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Duration', true);
        if (null !== $value && !empty($value)) {
            $this->setDuration($value);
        }
    }
}
