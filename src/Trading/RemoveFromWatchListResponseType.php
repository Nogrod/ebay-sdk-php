<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveFromWatchListResponseType
 *
 * The base response type for the <b>RemoveFromWatchList</b> call. The response includes the current count of items on the user's Watch List, as well as the maximum amount of items that can be on the user's Watch List at one time.
 * XSD Type: RemoveFromWatchListResponseType
 */
class RemoveFromWatchListResponseType extends AbstractResponseType
{

    /**
     * The current number of items in the user's Watch List (considering that the items specified in the call request were successfully removed).
     *
     * @var int $watchListCount
     */
    private $watchListCount = null;

    /**
     * The maximum number of items allowed in the user's Watch List. Currently this value is 300, and is the same for all sites and all users.
     *
     * @var int $watchListMaximum
     */
    private $watchListMaximum = null;

    /**
     * Gets as watchListCount
     *
     * The current number of items in the user's Watch List (considering that the items specified in the call request were successfully removed).
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
     * The current number of items in the user's Watch List (considering that the items specified in the call request were successfully removed).
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
     * The maximum number of items allowed in the user's Watch List. Currently this value is 300, and is the same for all sites and all users.
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
     * The maximum number of items allowed in the user's Watch List. Currently this value is 300, and is the same for all sites and all users.
     *
     * @param int $watchListMaximum
     * @return self
     */
    public function setWatchListMaximum($watchListMaximum)
    {
        $this->watchListMaximum = $watchListMaximum;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
