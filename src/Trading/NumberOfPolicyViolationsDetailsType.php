<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NumberOfPolicyViolationsDetailsType
 *
 * This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer Requirement at the account or listing level.
 * XSD Type: NumberOfPolicyViolationsDetailsType
 */
class NumberOfPolicyViolationsDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This field is deprecated.
     *
     * @var int[] $count
     */
    private $count = [

    ];

    /**
     * Adds as count
     *
     * This field is deprecated.
     *
     * @return self
     * @param int $count
     */
    public function addToCount($count)
    {
        if (!is_array($this->count)) {
            throw new \LogicException('count is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->count[] = $count;
        return $this;
    }

    /**
     * isset count
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCount($index)
    {
        return isset($this->count[$index]);
    }

    /**
     * unset count
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCount($index)
    {
        unset($this->count[$index]);
    }

    /**
     * Gets as count
     *
     * This field is deprecated.
     *
     * @return iterable<int>
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * This field is deprecated.
     *
     * @param iterable<int> $count
     * @return self
     */
    public function setCount(iterable $count)
    {
        $this->count = $count;
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
        $value = $this->count;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'Count', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NumberOfPolicyViolationsDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->count = [];
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
                case 'Count':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->count[] = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Count'] = Func::jsonList($this->count);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
