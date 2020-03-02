<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing WantItNowPostType
 *
 * This type is deprecated.
 * XSD Type: WantItNowPostType
 */
class WantItNowPostType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This field is deprecated.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This field is deprecated.
     *
     * @var string $postID
     */
    private $postID = null;

    /**
     * This field is deprecated.
     *
     * @var string $site
     */
    private $site = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * This field is deprecated.
     *
     * @var int $responseCount
     */
    private $responseCount = null;

    /**
     * This field is deprecated.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * Gets as categoryID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * This field is deprecated.
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as description
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * This field is deprecated.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as postID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getPostID()
    {
        return $this->postID;
    }

    /**
     * Sets a new postID
     *
     * This field is deprecated.
     *
     * @param string $postID
     * @return self
     */
    public function setPostID($postID)
    {
        $this->postID = $postID;
        return $this;
    }

    /**
     * Gets as site
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * This field is deprecated.
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * This field is deprecated.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as responseCount
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getResponseCount()
    {
        return $this->responseCount;
    }

    /**
     * Sets a new responseCount
     *
     * This field is deprecated.
     *
     * @param int $responseCount
     * @return self
     */
    public function setResponseCount($responseCount)
    {
        $this->responseCount = $responseCount;
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getPostID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PostID", $value);
        }
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getResponseCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResponseCount", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PostID');
        if (null !== $value) {
            $this->setPostID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResponseCount');
        if (null !== $value) {
            $this->setResponseCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
    }
}
