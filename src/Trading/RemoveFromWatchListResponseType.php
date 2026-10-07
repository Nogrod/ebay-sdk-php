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
     * This integer value indicates the maximum number of items allowed in a user's Watch List. The maximum number of items that can be added to a Watch List is 400, but this can vary by eBay marketplace.
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->watchListCount;
        if (null !== $value) {
            $writer->writeElementNs(null, 'WatchListCount', null, (string) $value);
        }
        $value = $this->watchListMaximum;
        if (null !== $value) {
            $writer->writeElementNs(null, 'WatchListMaximum', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RemoveFromWatchListResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'WatchListCount':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->watchListCount = (int) $value;
                    }
                    return true;
                case 'WatchListMaximum':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->watchListMaximum = (int) $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['WatchListCount'] = $this->watchListCount;
        $data['WatchListMaximum'] = $this->watchListMaximum;
        return $data;
    }
}
