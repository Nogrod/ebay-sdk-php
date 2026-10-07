<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TopRatedSellerDetailsType
 *
 * Container for Top-Rated Seller program information.
 * XSD Type: TopRatedSellerDetailsType
 */
class TopRatedSellerDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @var string[] $topRatedProgram
     */
    private $topRatedProgram = [

    ];

    /**
     * Adds as topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @return self
     * @param string $topRatedProgram
     */
    public function addToTopRatedProgram($topRatedProgram)
    {
        if (!is_array($this->topRatedProgram)) {
            throw new \LogicException('topRatedProgram is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->topRatedProgram[] = $topRatedProgram;
        return $this;
    }

    /**
     * isset topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTopRatedProgram($index)
    {
        return isset($this->topRatedProgram[$index]);
    }

    /**
     * unset topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTopRatedProgram($index)
    {
        unset($this->topRatedProgram[$index]);
    }

    /**
     * Gets as topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @return iterable<string>
     */
    public function getTopRatedProgram()
    {
        return $this->topRatedProgram;
    }

    /**
     * Sets a new topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @param string $topRatedProgram
     * @return self
     */
    public function setTopRatedProgram(iterable $topRatedProgram)
    {
        $this->topRatedProgram = $topRatedProgram;
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
        $value = $this->topRatedProgram;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'TopRatedProgram', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\TopRatedSellerDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->topRatedProgram = [];
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
                case 'TopRatedProgram':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->topRatedProgram[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['TopRatedProgram'] = Func::jsonList($this->topRatedProgram);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
