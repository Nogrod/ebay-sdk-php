<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VideoDetailsType
 *
 * This type is for internal/future use only
 * XSD Type: VideoDetailsType
 */
class VideoDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique identifier of a video. This identifier is created by eBay after a video is uploaded to the system.
     *
     * @var string[] $videoID
     */
    private $videoID = [
        
    ];

    /**
     * Adds as videoID
     *
     * Unique identifier of a video. This identifier is created by eBay after a video is uploaded to the system.
     *
     * @return self
     * @param string $videoID
     */
    public function addToVideoID($videoID)
    {
        $this->videoID[] = $videoID;
        return $this;
    }

    /**
     * isset videoID
     *
     * Unique identifier of a video. This identifier is created by eBay after a video is uploaded to the system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoID($index)
    {
        return isset($this->videoID[$index]);
    }

    /**
     * unset videoID
     *
     * Unique identifier of a video. This identifier is created by eBay after a video is uploaded to the system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoID($index)
    {
        unset($this->videoID[$index]);
    }

    /**
     * Gets as videoID
     *
     * Unique identifier of a video. This identifier is created by eBay after a video is uploaded to the system.
     *
     * @return string[]
     */
    public function getVideoID()
    {
        return $this->videoID;
    }

    /**
     * Sets a new videoID
     *
     * Unique identifier of a video. This identifier is created by eBay after a video is uploaded to the system.
     *
     * @param string[] $videoID
     * @return self
     */
    public function setVideoID(array $videoID)
    {
        $this->videoID = $videoID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVideoID();
        if (null !== $value && !empty($this->getVideoID())) {
            $writer->write(array_map(function ($v) {
                return ["VideoID" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VideoID', true);
        if (null !== $value && !empty($value)) {
            $this->setVideoID($value);
        }
    }
}
