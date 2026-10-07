<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeesType
 *
 * Type used to express all fees associated with listing an item. These are the fees that the seller will pay to eBay.
 * XSD Type: FeesType
 */
class FeesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fee
     */
    private $fee = [

    ];

    /**
     * Adds as fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeeType $fee
     */
    public function addToFee(\Nogrod\eBaySDK\Trading\FeeType $fee)
    {
        if (!is_array($this->fee)) {
            throw new \LogicException('fee is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\FeeType>
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\FeeType> $fee
     * @return self
     */
    public function setFee(iterable $fee)
    {
        $this->fee = $fee;
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
        $value = $this->fee;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Fee', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\FeesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->fee = [];
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
                case 'Fee':
                    $this->fee[] = \Nogrod\eBaySDK\Trading\FeeType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Fee'] = Func::jsonList($this->fee);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
