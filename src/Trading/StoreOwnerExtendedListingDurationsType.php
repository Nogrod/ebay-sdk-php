<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreOwnerExtendedListingDurationsType
 *
 * This type is used to specify the additional listing durations that are available to sellers who have eBay Store subscriptions. The <b>StoreOwnerExtendedListingDurations</b> container is only returned under the <b>SiteDefaults</b> node if the eBay marketplace supports additional listing durations for eBay Store owners, and this container is only returned under a <b>Category</b> node if this eBay category supports additional listing durations for eBay Store owners (other than the durations that are already supported for the category).
 * XSD Type: StoreOwnerExtendedListingDurationsType
 */
class StoreOwnerExtendedListingDurationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
     *
     * @var string[] $duration
     */
    private $duration = [
        
    ];

    /**
     * Adds as duration
     *
     * Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
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
     * Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
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
     * Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
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
     * Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
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
     * Specifies the additional listing duration(s) (in days) supported by the eBay site and/or category. A <b>Duration</b> field is returned for each additional listing duration that the eBay marketplace or category supports.
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
