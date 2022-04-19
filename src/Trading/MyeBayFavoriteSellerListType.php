<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBayFavoriteSellerListType
 *
 * A list of favorite sellers the user has saved on the My eBay page.
 * XSD Type: MyeBayFavoriteSellerListType
 */
class MyeBayFavoriteSellerListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The total number of favorite sellers saved.
     *
     * @var int $totalAvailable
     */
    private $totalAvailable = null;

    /**
     * A favorite seller the user has saved, with a user ID and store name.
     *
     * @var \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType[] $favoriteSeller
     */
    private $favoriteSeller = [

    ];

    /**
     * Gets as totalAvailable
     *
     * The total number of favorite sellers saved.
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
     * The total number of favorite sellers saved.
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
     * Adds as favoriteSeller
     *
     * A favorite seller the user has saved, with a user ID and store name.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType $favoriteSeller
     */
    public function addToFavoriteSeller(\Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType $favoriteSeller)
    {
        $this->favoriteSeller[] = $favoriteSeller;
        return $this;
    }

    /**
     * isset favoriteSeller
     *
     * A favorite seller the user has saved, with a user ID and store name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFavoriteSeller($index)
    {
        return isset($this->favoriteSeller[$index]);
    }

    /**
     * unset favoriteSeller
     *
     * A favorite seller the user has saved, with a user ID and store name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFavoriteSeller($index)
    {
        unset($this->favoriteSeller[$index]);
    }

    /**
     * Gets as favoriteSeller
     *
     * A favorite seller the user has saved, with a user ID and store name.
     *
     * @return \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType[]
     */
    public function getFavoriteSeller()
    {
        return $this->favoriteSeller;
    }

    /**
     * Sets a new favoriteSeller
     *
     * A favorite seller the user has saved, with a user ID and store name.
     *
     * @param \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType[] $favoriteSeller
     * @return self
     */
    public function setFavoriteSeller(array $favoriteSeller)
    {
        $this->favoriteSeller = $favoriteSeller;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTotalAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAvailable", $value);
        }
        $value = $this->getFavoriteSeller();
        if (null !== $value && !empty($this->getFavoriteSeller())) {
            $writer->write(array_map(function ($v) {
                return ["FavoriteSeller" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FavoriteSeller', true);
        if (null !== $value && !empty($value)) {
            $this->setFavoriteSeller(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType::fromKeyValue($v);
            }, $value));
        }
    }
}
