<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing BaseFindingServiceRequestType
 *
 * This is the base request container for all Finding Service operations.
 * XSD Type: BaseFindingServiceRequest
 */
class BaseFindingServiceRequestType extends BestMatchFindingServiceRequestType
{

    /**
     * Sort the returned items according to a single specified sort order.
     *
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * Gets as sortOrder
     *
     * Sort the returned items according to a single specified sort order.
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * Sort the returned items according to a single specified sort order.
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSortOrder();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}sortOrder", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}sortOrder');
        if (null !== $value) {
            $this->setSortOrder($value);
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
