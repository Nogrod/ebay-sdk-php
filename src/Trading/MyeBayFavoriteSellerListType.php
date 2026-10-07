<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyeBayFavoriteSellerListType
 *
 * A list of favorite sellers the user has saved on the My eBay page.
 * XSD Type: MyeBayFavoriteSellerListType
 */
class MyeBayFavoriteSellerListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->favoriteSeller)) {
            throw new \LogicException('favoriteSeller is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType> $favoriteSeller
     * @return self
     */
    public function setFavoriteSeller(iterable $favoriteSeller)
    {
        $this->favoriteSeller = $favoriteSeller;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->totalAvailable;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TotalAvailable', null, (string) $value);
        }
        $value = $this->favoriteSeller;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'FavoriteSeller', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerListType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->favoriteSeller = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'TotalAvailable':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->totalAvailable = (int) $value;
                    }
                    return true;
                case 'FavoriteSeller':
                    $this->favoriteSeller[] = \Nogrod\eBaySDK\Trading\MyeBayFavoriteSellerType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['TotalAvailable'] = $this->totalAvailable;
        $data['FavoriteSeller'] = Func::jsonList($this->favoriteSeller);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
