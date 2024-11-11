<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetHistogramsRequestType
 *
 * Get request for histogram information on the supplied category or aspect.
 * XSD Type: GetHistogramsRequest
 */
class GetHistogramsRequestType extends BaseServiceRequestType
{
    /**
     * Specifies the category from which you want to retrieve histogram
     *  information.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Retrieving histograms by category is not supported on the eBay Italy
     *  site (global ID EBAY-IT) at this time.
     *
     * @var string $categoryId
     */
    private $categoryId = null;

    /**
     * Gets as categoryId
     *
     * Specifies the category from which you want to retrieve histogram
     *  information.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Retrieving histograms by category is not supported on the eBay Italy
     *  site (global ID EBAY-IT) at this time.
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Sets a new categoryId
     *
     * Specifies the category from which you want to retrieve histogram
     *  information.
     *  <br><br>
     *  If a specified category ID doesn't match an existing category for the
     *  site, eBay returns an invalid-category error message. To determine
     *  valid categories, use the Trading API <b
     *  class="con">GetCategories</b> call.
     *  <br><br>
     *  Retrieving histograms by category is not supported on the eBay Italy
     *  site (global ID EBAY-IT) at this time.
     *
     * @param string $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}categoryId", $value);
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
        $value = Func::mapValue($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}categoryId');
        if (null !== $value) {
            $this->setCategoryId($value);
        }
    }
}
