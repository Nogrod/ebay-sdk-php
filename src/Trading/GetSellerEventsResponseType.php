<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerEventsResponseType
 *
 * Returns the items in an <b>ItemArrayType</b> object for the a seller events that have occurred and that meet any filters specified. There can be zero, one, or multiple <b>ItemType</b> objects. Each <b>ItemType</b> object contains the detail data for one item listing.
 * XSD Type: GetSellerEventsResponseType
 */
class GetSellerEventsResponseType extends AbstractResponseType
{
    /**
     * Indicates the latest (most recent) date for any date-based filtering specified as
     *  input. Specifically, this field contains the value you specified in the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter, if you used a time filter in the request. If no time filter was specified, <b>TimeTo</b> returns the current time.
     *
     * @var \DateTime $timeTo
     */
    private $timeTo = null;

    /**
     * Collection of items whose last modified time matches
     *  the filters specified in the request.
     *  Returns empty if no items were modified within the
     *  time range of the request.<br/><br/>
     *  If 1 to 2999 items are returned, then the results are
     *  complete. If 3000 or more items are returned, it usually means
     *  additional items exist within the time range you requested,
     *  but they were not all returned.
     *  <br/><br/>
     *  To retrieve complete results,
     *  use a smaller time range in the request so that fewer than
     *  3000 are returned per response.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $itemArray
     */
    private $itemArray = null;

    /**
     * Gets as timeTo
     *
     * Indicates the latest (most recent) date for any date-based filtering specified as
     *  input. Specifically, this field contains the value you specified in the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter, if you used a time filter in the request. If no time filter was specified, <b>TimeTo</b> returns the current time.
     *
     * @return \DateTime
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Sets a new timeTo
     *
     * Indicates the latest (most recent) date for any date-based filtering specified as
     *  input. Specifically, this field contains the value you specified in the <b>StartTimeFrom</b>, <b>EndTimeFrom</b>, or <b>ModTimeFrom</b> filter, if you used a time filter in the request. If no time filter was specified, <b>TimeTo</b> returns the current time.
     *
     * @param \DateTime $timeTo
     * @return self
     */
    public function setTimeTo(\DateTime $timeTo)
    {
        $this->timeTo = $timeTo;
        return $this;
    }

    /**
     * Adds as item
     *
     * Collection of items whose last modified time matches
     *  the filters specified in the request.
     *  Returns empty if no items were modified within the
     *  time range of the request.<br/><br/>
     *  If 1 to 2999 items are returned, then the results are
     *  complete. If 3000 or more items are returned, it usually means
     *  additional items exist within the time range you requested,
     *  but they were not all returned.
     *  <br/><br/>
     *  To retrieve complete results,
     *  use a smaller time range in the request so that fewer than
     *  3000 are returned per response.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     */
    public function addToItemArray(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->itemArray[] = $item;
        return $this;
    }

    /**
     * isset itemArray
     *
     * Collection of items whose last modified time matches
     *  the filters specified in the request.
     *  Returns empty if no items were modified within the
     *  time range of the request.<br/><br/>
     *  If 1 to 2999 items are returned, then the results are
     *  complete. If 3000 or more items are returned, it usually means
     *  additional items exist within the time range you requested,
     *  but they were not all returned.
     *  <br/><br/>
     *  To retrieve complete results,
     *  use a smaller time range in the request so that fewer than
     *  3000 are returned per response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemArray($index)
    {
        return isset($this->itemArray[$index]);
    }

    /**
     * unset itemArray
     *
     * Collection of items whose last modified time matches
     *  the filters specified in the request.
     *  Returns empty if no items were modified within the
     *  time range of the request.<br/><br/>
     *  If 1 to 2999 items are returned, then the results are
     *  complete. If 3000 or more items are returned, it usually means
     *  additional items exist within the time range you requested,
     *  but they were not all returned.
     *  <br/><br/>
     *  To retrieve complete results,
     *  use a smaller time range in the request so that fewer than
     *  3000 are returned per response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemArray($index)
    {
        unset($this->itemArray[$index]);
    }

    /**
     * Gets as itemArray
     *
     * Collection of items whose last modified time matches
     *  the filters specified in the request.
     *  Returns empty if no items were modified within the
     *  time range of the request.<br/><br/>
     *  If 1 to 2999 items are returned, then the results are
     *  complete. If 3000 or more items are returned, it usually means
     *  additional items exist within the time range you requested,
     *  but they were not all returned.
     *  <br/><br/>
     *  To retrieve complete results,
     *  use a smaller time range in the request so that fewer than
     *  3000 are returned per response.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType[]
     */
    public function getItemArray()
    {
        return $this->itemArray;
    }

    /**
     * Sets a new itemArray
     *
     * Collection of items whose last modified time matches
     *  the filters specified in the request.
     *  Returns empty if no items were modified within the
     *  time range of the request.<br/><br/>
     *  If 1 to 2999 items are returned, then the results are
     *  complete. If 3000 or more items are returned, it usually means
     *  additional items exist within the time range you requested,
     *  but they were not all returned.
     *  <br/><br/>
     *  To retrieve complete results,
     *  use a smaller time range in the request so that fewer than
     *  3000 are returned per response.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType[] $itemArray
     * @return self
     */
    public function setItemArray(array $itemArray)
    {
        $this->itemArray = $itemArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getTimeTo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TimeTo", $value);
        }
        $value = $this->getItemArray();
        if (null !== $value && !empty($this->getItemArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemArray", array_map(function ($v) {return ["Item" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TimeTo');
        if (null !== $value) {
            $this->setTimeTo(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemArray', true);
        if (null !== $value && !empty($value)) {
            $this->setItemArray(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($v);}, $value));
        }
    }
}
