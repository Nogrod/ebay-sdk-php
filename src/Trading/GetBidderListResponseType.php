<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetBidderListResponseType
 *
 * Response to a <b>GetBidderList</b> call, which retrieves all items the
 *  user is currently bidding on, or has won or purchased.
 * XSD Type: GetBidderListResponseType
 */
class GetBidderListResponseType extends AbstractResponseType
{
    /**
     * Data for one eBay bidder.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $bidder
     */
    private $bidder = null;

    /**
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $bidItemArray
     */
    private $bidItemArray = null;

    /**
     * Gets as bidder
     *
     * Data for one eBay bidder.
     *
     * @return \Nogrod\eBaySDK\Trading\UserType
     */
    public function getBidder()
    {
        return $this->bidder;
    }

    /**
     * Sets a new bidder
     *
     * Data for one eBay bidder.
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $bidder
     * @return self
     */
    public function setBidder(\Nogrod\eBaySDK\Trading\UserType $bidder)
    {
        $this->bidder = $bidder;
        return $this;
    }

    /**
     * Adds as item
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     */
    public function addToBidItemArray(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->bidItemArray[] = $item;
        return $this;
    }

    /**
     * isset bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBidItemArray($index)
    {
        return isset($this->bidItemArray[$index]);
    }

    /**
     * unset bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBidItemArray($index)
    {
        unset($this->bidItemArray[$index]);
    }

    /**
     * Gets as bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType[]
     */
    public function getBidItemArray()
    {
        return $this->bidItemArray;
    }

    /**
     * Sets a new bidItemArray
     *
     * Array of items the bidder has bid on, has won or has lost.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType[] $bidItemArray
     * @return self
     */
    public function setBidItemArray(array $bidItemArray)
    {
        $this->bidItemArray = $bidItemArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getBidder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Bidder", $value);
        }
        $value = $this->getBidItemArray();
        if (null !== $value && !empty($this->getBidItemArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidItemArray", array_map(function ($v) {
                return ["Item" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Bidder');
        if (null !== $value) {
            $this->setBidder(\Nogrod\eBaySDK\Trading\UserType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidItemArray', true);
        if (null !== $value && !empty($value)) {
            $this->setBidItemArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($v);
            }, $value));
        }
    }
}
