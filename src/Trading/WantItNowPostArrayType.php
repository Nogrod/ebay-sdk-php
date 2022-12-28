<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing WantItNowPostArrayType
 *
 * This type is deprecated.
 * XSD Type: WantItNowPostArrayType
 */
class WantItNowPostArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\WantItNowPostType[] $wantItNowPost
     */
    private $wantItNowPost = [

    ];

    /**
     * Adds as wantItNowPost
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\WantItNowPostType $wantItNowPost
     */
    public function addToWantItNowPost(\Nogrod\eBaySDK\Trading\WantItNowPostType $wantItNowPost)
    {
        $this->wantItNowPost[] = $wantItNowPost;
        return $this;
    }

    /**
     * isset wantItNowPost
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWantItNowPost($index)
    {
        return isset($this->wantItNowPost[$index]);
    }

    /**
     * unset wantItNowPost
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWantItNowPost($index)
    {
        unset($this->wantItNowPost[$index]);
    }

    /**
     * Gets as wantItNowPost
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\WantItNowPostType[]
     */
    public function getWantItNowPost()
    {
        return $this->wantItNowPost;
    }

    /**
     * Sets a new wantItNowPost
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\WantItNowPostType[] $wantItNowPost
     * @return self
     */
    public function setWantItNowPost(array $wantItNowPost)
    {
        $this->wantItNowPost = $wantItNowPost;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getWantItNowPost();
        if (null !== $value && !empty($this->getWantItNowPost())) {
            $writer->write(array_map(function ($v) {
                return ["WantItNowPost" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WantItNowPost', true);
        if (null !== $value && !empty($value)) {
            $this->setWantItNowPost(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\WantItNowPostType::fromKeyValue($v);
            }, $value));
        }
    }
}
