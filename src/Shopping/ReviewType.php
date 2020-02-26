<?php

namespace Nogrod\eBaySDK\Shopping;

/**
 * Class representing ReviewType
 *
 * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
 *  </span>
 * XSD Type: ReviewType
 */
class ReviewType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $title
     */
    private $title = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var int $rating
     */
    private $rating = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $text
     */
    private $text = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var \DateTime $creationTime
     */
    private $creationTime = null;

    /**
     * Gets as uRL
     *
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
     * <span class="tablenote"><b>Note: </b> <b>ReviewType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Rating');
        if (null !== $value) {
            $this->setRating($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Text');
        if (null !== $value) {
            $this->setText($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationTime');
        if (null !== $value) {
            $this->setCreationTime(new \DateTime($value));
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
