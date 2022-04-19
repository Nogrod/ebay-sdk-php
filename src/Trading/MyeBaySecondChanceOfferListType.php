<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBaySecondChanceOfferListType
 *
 * A list of possible My eBay Second Chance Offers.
 * XSD Type: MyeBaySecondChanceOfferListType
 */
class MyeBaySecondChanceOfferListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The total number of My eBay Second Chance Offers available.
     *
     * @var int $totalAvailable
     */
    private $totalAvailable = null;

    /**
     * A Second Chance Offer item.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType[] $secondChanceOffer
     */
    private $secondChanceOffer = [

    ];

    /**
     * Gets as totalAvailable
     *
     * The total number of My eBay Second Chance Offers available.
     *
     * @return int
     */
    public function getTotalAvailable()
    {
        return $this->totalAvailable;
    }

    /**
     * Sets a new totalAvailable
     *
     * The total number of My eBay Second Chance Offers available.
     *
     * @param int $totalAvailable
     * @return self
     */
    public function setTotalAvailable($totalAvailable)
    {
        $this->totalAvailable = $totalAvailable;
        return $this;
    }

    /**
     * Adds as secondChanceOffer
     *
     * A Second Chance Offer item.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemType $secondChanceOffer
     */
    public function addToSecondChanceOffer(\Nogrod\eBaySDK\Trading\ItemType $secondChanceOffer)
    {
        $this->secondChanceOffer[] = $secondChanceOffer;
        return $this;
    }

    /**
     * isset secondChanceOffer
     *
     * A Second Chance Offer item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondChanceOffer($index)
    {
        return isset($this->secondChanceOffer[$index]);
    }

    /**
     * unset secondChanceOffer
     *
     * A Second Chance Offer item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondChanceOffer($index)
    {
        unset($this->secondChanceOffer[$index]);
    }

    /**
     * Gets as secondChanceOffer
     *
     * A Second Chance Offer item.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType[]
     */
    public function getSecondChanceOffer()
    {
        return $this->secondChanceOffer;
    }

    /**
     * Sets a new secondChanceOffer
     *
     * A Second Chance Offer item.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType[] $secondChanceOffer
     * @return self
     */
    public function setSecondChanceOffer(array $secondChanceOffer)
    {
        $this->secondChanceOffer = $secondChanceOffer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAvailable", $value);
        }
        $value = $this->getSecondChanceOffer();
        if (null !== $value && !empty($this->getSecondChanceOffer())) {
            $writer->write(array_map(function ($v) {
                return ["SecondChanceOffer" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAvailable');
        if (null !== $value) {
            $this->setTotalAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceOffer', true);
        if (null !== $value && !empty($value)) {
            $this->setSecondChanceOffer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($v);
            }, $value));
        }
    }
}
