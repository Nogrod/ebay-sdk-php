<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing FeedbackCommentArrayType
 *
 * Contains one or more stored comments for use as feedback to buyers.
 * XSD Type: FeedbackCommentArrayType
 */
class FeedbackCommentArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This comment is for use as feedback for buyers. No more than ten (10)
     *  comments can be stored.
     *
     * @var string[] $storedCommentText
     */
    private $storedCommentText = [
        
    ];

    /**
     * Adds as storedCommentText
     *
     * This comment is for use as feedback for buyers. No more than ten (10)
     *  comments can be stored.
     *
     * @return self
     * @param string $storedCommentText
     */
    public function addToStoredCommentText($storedCommentText)
    {
        $this->storedCommentText[] = $storedCommentText;
        return $this;
    }

    /**
     * isset storedCommentText
     *
     * This comment is for use as feedback for buyers. No more than ten (10)
     *  comments can be stored.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStoredCommentText($index)
    {
        return isset($this->storedCommentText[$index]);
    }

    /**
     * unset storedCommentText
     *
     * This comment is for use as feedback for buyers. No more than ten (10)
     *  comments can be stored.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStoredCommentText($index)
    {
        unset($this->storedCommentText[$index]);
    }

    /**
     * Gets as storedCommentText
     *
     * This comment is for use as feedback for buyers. No more than ten (10)
     *  comments can be stored.
     *
     * @return string[]
     */
    public function getStoredCommentText()
    {
        return $this->storedCommentText;
    }

    /**
     * Sets a new storedCommentText
     *
     * This comment is for use as feedback for buyers. No more than ten (10)
     *  comments can be stored.
     *
     * @param string[] $storedCommentText
     * @return self
     */
    public function setStoredCommentText(array $storedCommentText)
    {
        $this->storedCommentText = $storedCommentText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStoredCommentText();
        if (null !== $value && !empty($this->getStoredCommentText())) {
            $writer->write(array_map(function ($v) {
                return ["StoredCommentText" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StoredCommentText', true);
        if (null !== $value && !empty($value)) {
            $this->setStoredCommentText($value);
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
