<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviewType
 *
 * This type is deprecated.
 * XSD Type: ReviewType
 */
class ReviewType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * This field is deprecated.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * This field is deprecated.
     *
     * @var int $rating
     */
    private $rating = null;

    /**
     * This field is deprecated.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * This field is deprecated.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $creationTime
     */
    private $creationTime = null;

    /**
     * Gets as uRL
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * This field is deprecated.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
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
     * Gets as rating
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * This field is deprecated.
     *
     * @param int $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * Gets as text
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * This field is deprecated.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as userID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * This field is deprecated.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as creationTime
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Sets a new creationTime
     *
     * This field is deprecated.
     *
     * @param \DateTime $creationTime
     * @return self
     */
    public function setCreationTime(\DateTime $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getRating();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Rating", $value);
        }
        $value = $this->getText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Text", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreationTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Rating');
        if (null !== $value) {
            $this->setRating($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Text');
        if (null !== $value) {
            $this->setText($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationTime');
        if (null !== $value) {
            $this->setCreationTime(new \DateTime($value));
        }
    }
}
