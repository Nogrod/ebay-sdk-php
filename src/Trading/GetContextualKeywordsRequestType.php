<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetContextualKeywordsRequestType
 *
 * Retrieves top-ranked contextual eBay keywords and categories
 *  for a specified web page.
 * XSD Type: GetContextualKeywordsRequestType
 */
class GetContextualKeywordsRequestType extends AbstractRequestType
{
    /**
     * The URL of the web page from which eBay is to extract keywords.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Web page encoding by which the URL is to be handled, such as ISO-8859-1.
     *
     * @var string $encoding
     */
    private $encoding = null;

    /**
     * The ID of the category to which keywords are to be limited.
     *  Zero or more category IDs can be specified.
     *
     * @var string[] $categoryID
     */
    private $categoryID = [
        
    ];

    /**
     * Gets as uRL
     *
     * The URL of the web page from which eBay is to extract keywords.
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
     * The URL of the web page from which eBay is to extract keywords.
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
     * Gets as encoding
     *
     * Web page encoding by which the URL is to be handled, such as ISO-8859-1.
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets a new encoding
     *
     * Web page encoding by which the URL is to be handled, such as ISO-8859-1.
     *
     * @param string $encoding
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }

    /**
     * Adds as categoryID
     *
     * The ID of the category to which keywords are to be limited.
     *  Zero or more category IDs can be specified.
     *
     * @return self
     * @param string $categoryID
     */
    public function addToCategoryID($categoryID)
    {
        $this->categoryID[] = $categoryID;
        return $this;
    }

    /**
     * isset categoryID
     *
     * The ID of the category to which keywords are to be limited.
     *  Zero or more category IDs can be specified.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryID($index)
    {
        return isset($this->categoryID[$index]);
    }

    /**
     * unset categoryID
     *
     * The ID of the category to which keywords are to be limited.
     *  Zero or more category IDs can be specified.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryID($index)
    {
        unset($this->categoryID[$index]);
    }

    /**
     * Gets as categoryID
     *
     * The ID of the category to which keywords are to be limited.
     *  Zero or more category IDs can be specified.
     *
     * @return string[]
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * The ID of the category to which keywords are to be limited.
     *  Zero or more category IDs can be specified.
     *
     * @param string[] $categoryID
     * @return self
     */
    public function setCategoryID(array $categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
        }
        $value = $this->getEncoding();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Encoding", $value);
        }
        $value = $this->getCategoryID();
        if (null !== $value && !empty($this->getCategoryID())) {
            $writer->write(array_map(function ($v) {
                return ["CategoryID" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Encoding');
        if (null !== $value) {
            $this->setEncoding($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryID($value);
        }
    }
}
