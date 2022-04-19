<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionHistogramType
 *
 * Container for histogram fields.
 * XSD Type: ConditionHistogram
 */
class ConditionHistogramType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name and unique ID of the item condition for which the count is being displayed.
     *
     * @var \Nogrod\eBaySDK\Finding\ConditionType $condition
     */
    private $condition = null;

    /**
     * The number of items found that match the condition.
     *  Only counts items where the seller specified the
     *  condition by using item.conditionId.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as condition
     *
     * The name and unique ID of the item condition for which the count is being displayed.
     *
     * @return \Nogrod\eBaySDK\Finding\ConditionType
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * The name and unique ID of the item condition for which the count is being displayed.
     *
     * @param \Nogrod\eBaySDK\Finding\ConditionType $condition
     * @return self
     */
    public function setCondition(\Nogrod\eBaySDK\Finding\ConditionType $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as count
     *
     * The number of items found that match the condition.
     *  Only counts items where the seller specified the
     *  condition by using item.conditionId.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The number of items found that match the condition.
     *  Only counts items where the seller specified the
     *  condition by using item.conditionId.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getCondition();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}condition", $value);
        }
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}count", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}condition');
        if (null !== $value) {
            $this->setCondition(\Nogrod\eBaySDK\Finding\ConditionType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}count');
        if (null !== $value) {
            $this->setCount($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
