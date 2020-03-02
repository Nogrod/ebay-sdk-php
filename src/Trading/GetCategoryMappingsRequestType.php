<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategoryMappingsRequestType
 *
 * Retrieves a map of old category IDs and corresponding active
 *  category IDs defined for the site to which the request is sent.
 * XSD Type: GetCategoryMappingsRequestType
 */
class GetCategoryMappingsRequestType extends AbstractRequestType
{

    /**
     * A version of the category mapping for the site. Filters
     *  out data from the call to return only the category
     *  mappings for which the data has changed since the
     *  specified version. If not specified, all category
     *  mappings are returned. Typically, an application passes
     *  the version value of the last set of category mappings
     *  that the application stored locally. The latest version
     *  value is not necessarily greater than the previous value
     *  that was returned. Therefore, when comparing versions,
     *  only compare whether the value has changed.
     *
     * @var string $categoryVersion
     */
    private $categoryVersion = null;

    /**
     * Gets as categoryVersion
     *
     * A version of the category mapping for the site. Filters
     *  out data from the call to return only the category
     *  mappings for which the data has changed since the
     *  specified version. If not specified, all category
     *  mappings are returned. Typically, an application passes
     *  the version value of the last set of category mappings
     *  that the application stored locally. The latest version
     *  value is not necessarily greater than the previous value
     *  that was returned. Therefore, when comparing versions,
     *  only compare whether the value has changed.
     *
     * @return string
     */
    public function getCategoryVersion()
    {
        return $this->categoryVersion;
    }

    /**
     * Sets a new categoryVersion
     *
     * A version of the category mapping for the site. Filters
     *  out data from the call to return only the category
     *  mappings for which the data has changed since the
     *  specified version. If not specified, all category
     *  mappings are returned. Typically, an application passes
     *  the version value of the last set of category mappings
     *  that the application stored locally. The latest version
     *  value is not necessarily greater than the previous value
     *  that was returned. Therefore, when comparing versions,
     *  only compare whether the value has changed.
     *
     * @param string $categoryVersion
     * @return self
     */
    public function setCategoryVersion($categoryVersion)
    {
        $this->categoryVersion = $categoryVersion;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryVersion", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryVersion');
        if (null !== $value) {
            $this->setCategoryVersion($value);
        }
    }
}
