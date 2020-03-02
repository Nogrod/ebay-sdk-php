<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionHistogramContainerType
 *
 * Container for condition histograms.
 * XSD Type: ConditionHistogramContainer
 */
class ConditionHistogramContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Statistical (item count) information on the condition of items
     *  that match the search criteria (or specified category).
     *  For example, the number of brand new items that match the query.
     *  <br>
     *  <br>
     *  Each conditionHistogram specifies one condition and the
     *  number of matching items found. The list of all
     *  conditionHistogram containers returned represents the union of
     *  all conditions that were found in the item results.
     *  For example, if items were found in different categories,
     *  and if those categories support different sets of
     *  item conditions, then all those conditions are
     *  returned in the list, regardless of category.<br>
     *  <br>
     *  If multiple items use the same condition ID, but some items
     *  use different display names for that condition, the histogram
     *  shows the site's default display name for that condition.
     *  This means that the condition name in a histogram may not
     *  always exactly match the condition names on the counted items.
     *
     * @var \Nogrod\eBaySDK\Finding\ConditionHistogramType[] $conditionHistogram
     */
    private $conditionHistogram = [
        
    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Adds as conditionHistogram
     *
     * Statistical (item count) information on the condition of items
     *  that match the search criteria (or specified category).
     *  For example, the number of brand new items that match the query.
     *  <br>
     *  <br>
     *  Each conditionHistogram specifies one condition and the
     *  number of matching items found. The list of all
     *  conditionHistogram containers returned represents the union of
     *  all conditions that were found in the item results.
     *  For example, if items were found in different categories,
     *  and if those categories support different sets of
     *  item conditions, then all those conditions are
     *  returned in the list, regardless of category.<br>
     *  <br>
     *  If multiple items use the same condition ID, but some items
     *  use different display names for that condition, the histogram
     *  shows the site's default display name for that condition.
     *  This means that the condition name in a histogram may not
     *  always exactly match the condition names on the counted items.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ConditionHistogramType $conditionHistogram
     */
    public function addToConditionHistogram(\Nogrod\eBaySDK\Finding\ConditionHistogramType $conditionHistogram)
    {
        $this->conditionHistogram[] = $conditionHistogram;
        return $this;
    }

    /**
     * isset conditionHistogram
     *
     * Statistical (item count) information on the condition of items
     *  that match the search criteria (or specified category).
     *  For example, the number of brand new items that match the query.
     *  <br>
     *  <br>
     *  Each conditionHistogram specifies one condition and the
     *  number of matching items found. The list of all
     *  conditionHistogram containers returned represents the union of
     *  all conditions that were found in the item results.
     *  For example, if items were found in different categories,
     *  and if those categories support different sets of
     *  item conditions, then all those conditions are
     *  returned in the list, regardless of category.<br>
     *  <br>
     *  If multiple items use the same condition ID, but some items
     *  use different display names for that condition, the histogram
     *  shows the site's default display name for that condition.
     *  This means that the condition name in a histogram may not
     *  always exactly match the condition names on the counted items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditionHistogram($index)
    {
        return isset($this->conditionHistogram[$index]);
    }

    /**
     * unset conditionHistogram
     *
     * Statistical (item count) information on the condition of items
     *  that match the search criteria (or specified category).
     *  For example, the number of brand new items that match the query.
     *  <br>
     *  <br>
     *  Each conditionHistogram specifies one condition and the
     *  number of matching items found. The list of all
     *  conditionHistogram containers returned represents the union of
     *  all conditions that were found in the item results.
     *  For example, if items were found in different categories,
     *  and if those categories support different sets of
     *  item conditions, then all those conditions are
     *  returned in the list, regardless of category.<br>
     *  <br>
     *  If multiple items use the same condition ID, but some items
     *  use different display names for that condition, the histogram
     *  shows the site's default display name for that condition.
     *  This means that the condition name in a histogram may not
     *  always exactly match the condition names on the counted items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditionHistogram($index)
    {
        unset($this->conditionHistogram[$index]);
    }

    /**
     * Gets as conditionHistogram
     *
     * Statistical (item count) information on the condition of items
     *  that match the search criteria (or specified category).
     *  For example, the number of brand new items that match the query.
     *  <br>
     *  <br>
     *  Each conditionHistogram specifies one condition and the
     *  number of matching items found. The list of all
     *  conditionHistogram containers returned represents the union of
     *  all conditions that were found in the item results.
     *  For example, if items were found in different categories,
     *  and if those categories support different sets of
     *  item conditions, then all those conditions are
     *  returned in the list, regardless of category.<br>
     *  <br>
     *  If multiple items use the same condition ID, but some items
     *  use different display names for that condition, the histogram
     *  shows the site's default display name for that condition.
     *  This means that the condition name in a histogram may not
     *  always exactly match the condition names on the counted items.
     *
     * @return \Nogrod\eBaySDK\Finding\ConditionHistogramType[]
     */
    public function getConditionHistogram()
    {
        return $this->conditionHistogram;
    }

    /**
     * Sets a new conditionHistogram
     *
     * Statistical (item count) information on the condition of items
     *  that match the search criteria (or specified category).
     *  For example, the number of brand new items that match the query.
     *  <br>
     *  <br>
     *  Each conditionHistogram specifies one condition and the
     *  number of matching items found. The list of all
     *  conditionHistogram containers returned represents the union of
     *  all conditions that were found in the item results.
     *  For example, if items were found in different categories,
     *  and if those categories support different sets of
     *  item conditions, then all those conditions are
     *  returned in the list, regardless of category.<br>
     *  <br>
     *  If multiple items use the same condition ID, but some items
     *  use different display names for that condition, the histogram
     *  shows the site's default display name for that condition.
     *  This means that the condition name in a histogram may not
     *  always exactly match the condition names on the counted items.
     *
     * @param \Nogrod\eBaySDK\Finding\ConditionHistogramType[] $conditionHistogram
     * @return self
     */
    public function setConditionHistogram(array $conditionHistogram)
    {
        $this->conditionHistogram = $conditionHistogram;
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
        $value = $this->getConditionHistogram();
        if (null !== $value && !empty($this->getConditionHistogram())) {
            $writer->write(array_map(function ($v) {
                return ["conditionHistogram" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}conditionHistogram', true);
        if (null !== $value && !empty($value)) {
            $this->setConditionHistogram(array_map(function ($v) {
                return \Nogrod\eBaySDK\Finding\ConditionHistogramType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
