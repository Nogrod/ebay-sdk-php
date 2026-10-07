<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ResponsiblePersonCodeTypesType
 *
 * Container for collection of possible responsible person enumerations.
 * XSD Type: ResponsiblePersonCodeTypes
 */
class ResponsiblePersonCodeTypesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @var string[] $type
     */
    private $type = [

    ];

    /**
     * Adds as type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @return self
     * @param string $type
     */
    public function addToType($type)
    {
        if (!is_array($this->type)) {
            throw new \LogicException('type is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @return iterable<string>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @param string $type
     * @return self
     */
    public function setType(iterable $type)
    {
        $this->type = $type;
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
        $value = $this->type;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'Type', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ResponsiblePersonCodeTypesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->type = [];
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
                case 'Type':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->type[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Type'] = Func::jsonList($this->type);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
