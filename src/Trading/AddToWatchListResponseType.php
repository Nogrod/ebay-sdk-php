<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddToWatchListResponseType
 *
 * This type defines the response of the <b>AddToWatchList</b> call. Along with data indicating the success or failure of adding one or more items to a user's Watch List, this response also includes the number of items currently in the user's Watch List and the maximum number of items allowed in the Watch List.
 * XSD Type: AddToWatchListResponseType
 */
class AddToWatchListResponseType extends AbstractResponseType
{
    /**
     * This integer value indicates the total number of items in the user's Watch List (after those specified in the call request have been successfully added).
     *
     * @var int $watchListCount
     */
    private $watchListCount = null;

    /**
     * This integer value indicates the maximum number of items allowed in a user's Watch List. The maximum number of items that can be added to a Watch List is 400, but this can vary by eBay marketplace.
     *
     * @var int $watchListMaximum
     */
    private $watchListMaximum = null;

    /**
     * Gets as watchListCount
     *
     * This integer value indicates the total number of items in the user's Watch List (after those specified in the call request have been successfully added).
     *
     * @return int
     */
    public function getWatchListCount()
    {
        return $this->watchListCount;
    }

    /**
     * Sets a new watchListCount
     *
     * This integer value indicates the total number of items in the user's Watch List (after those specified in the call request have been successfully added).
     *
     * @param int $watchListCount
     * @return self
     */
    public function setWatchListCount($watchListCount)
    {
        $this->watchListCount = $watchListCount;
        return $this;
    }

    /**
     * Gets as watchListMaximum
     *
     * This integer value indicates the maximum number of items allowed in a user's Watch List. The maximum number of items that can be added to a Watch List is 400, but this can vary by eBay marketplace.
     *
     * @return int
     */
    public function getWatchListMaximum()
    {
        return $this->watchListMaximum;
    }

    /**
     * Sets a new watchListMaximum
     *
     * This integer value indicates the maximum number of items allowed in a user's Watch List. The maximum number of items that can be added to a Watch List is 400, but this can vary by eBay marketplace.
     *
     * @param int $watchListMaximum
     * @return self
     */
    public function setWatchListMaximum($watchListMaximum)
    {
        $this->watchListMaximum = $watchListMaximum;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getWatchListCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchListCount", $value);
        }
        $value = $this->getWatchListMaximum();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchListMaximum", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchListCount');
        if (null !== $value) {
            $this->setWatchListCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchListMaximum');
        if (null !== $value) {
            $this->setWatchListMaximum($value);
        }
    }
}
