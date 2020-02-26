<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BuyingGuideType
 *
 * This type is not used by any Trading API calls.
 * XSD Type: BuyingGuideType
 */
class BuyingGuideType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Display name of the buying guide.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * URL for the buying guide. Your application can
     *  present this as a link. Use the value of Name as the link's display name.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Identifies the category (if any) that is associated
     *  with the buying guide.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * Identifies the product finder (if any) that is associated with the buying guide.
     *  Only returned for product finder searches.
     *
     * @var int $productFinderID
     */
    private $productFinderID = null;

    /**
     * The title of the buying guide.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The text of the guide. If the guide is longer than
     *  2000 characters, the text is cut off and it ends with "...".
     *  See BuyingGuide.URL for a link to the full text of the review.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * The time and date when the guide was posted.
     *
     * @var \DateTime $creationTime
     */
    private $creationTime = null;

    /**
     * The author's eBay user ID.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * Gets as name
     *
     * Display name of the buying guide.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Display name of the buying guide.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * URL for the buying guide. Your application can
     *  present this as a link. Use the value of Name as the link's display name.
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
     * URL for the buying guide. Your application can
     *  present this as a link. Use the value of Name as the link's display name.
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
     * Gets as categoryID
     *
     * Identifies the category (if any) that is associated
     *  with the buying guide.
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
     * Identifies the category (if any) that is associated
     *  with the buying guide.
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
     * Gets as productFinderID
     *
     * Identifies the product finder (if any) that is associated with the buying guide.
     *  Only returned for product finder searches.
     *
     * @return int
     */
    public function getProductFinderID()
    {
        return $this->productFinderID;
    }

    /**
     * Sets a new productFinderID
     *
     * Identifies the product finder (if any) that is associated with the buying guide.
     *  Only returned for product finder searches.
     *
     * @param int $productFinderID
     * @return self
     */
    public function setProductFinderID($productFinderID)
    {
        $this->productFinderID = $productFinderID;
        return $this;
    }

    /**
     * Gets as title
     *
     * The title of the buying guide.
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
     * The title of the buying guide.
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
     * Gets as text
     *
     * The text of the guide. If the guide is longer than
     *  2000 characters, the text is cut off and it ends with "...".
     *  See BuyingGuide.URL for a link to the full text of the review.
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
     * The text of the guide. If the guide is longer than
     *  2000 characters, the text is cut off and it ends with "...".
     *  See BuyingGuide.URL for a link to the full text of the review.
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
     * Gets as creationTime
     *
     * The time and date when the guide was posted.
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
     * The time and date when the guide was posted.
     *
     * @param \DateTime $creationTime
     * @return self
     */
    public function setCreationTime(\DateTime $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    /**
     * Gets as userID
     *
     * The author's eBay user ID.
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
     * The author's eBay user ID.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getProductFinderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductFinderID", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
        }
        $value = $this->getText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Text", $value);
        }
        $value = $this->getCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreationTime", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductFinderID');
        if (null !== $value) {
            $this->setProductFinderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Text');
        if (null !== $value) {
            $this->setText($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationTime');
        if (null !== $value) {
            $this->setCreationTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
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
