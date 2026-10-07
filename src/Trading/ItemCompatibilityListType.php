<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemCompatibilityListType
 *
 * A list of compatible applications specified as name and value pairs. Describes an
 *  assembly with which a part is compatible (i.e., parts compatibility by application). For
 *  example, to specify a part's compatibility with a vehicle, the name would map to
 *  standard vehicle characteristics (e.g., Year, Make, Model, Trim, and Engine). The
 *  values would describe the specific vehicle, such as a 2006 Honda Accord.
 * XSD Type: ItemCompatibilityListType
 */
class ItemCompatibilityListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility nodes.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemCompatibilityType[] $compatibility
     */
    private $compatibility = [

    ];

    /**
     * Set this value to true to delete or replace all existing parts compatibility information when you revise or relist an item. If set to true, all existing item parts compatibility nodes are removed from the listing. If new item compatibilities are specified in the request, they replace the removed compatibilities.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> To ensure that buyer expectations are upheld, you cannot delete or replace an item parts compatibility list if the listing has bids or if the auction ends within 12 hours.
     *  </span>
     *
     * @var bool $replaceAll
     */
    private $replaceAll = null;

    /**
     * Adds as compatibility
     *
     * Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility nodes.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ItemCompatibilityType $compatibility
     */
    public function addToCompatibility(\Nogrod\eBaySDK\Trading\ItemCompatibilityType $compatibility)
    {
        if (!is_array($this->compatibility)) {
            throw new \LogicException('compatibility is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->compatibility[] = $compatibility;
        return $this;
    }

    /**
     * isset compatibility
     *
     * Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility nodes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompatibility($index)
    {
        return isset($this->compatibility[$index]);
    }

    /**
     * unset compatibility
     *
     * Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility nodes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompatibility($index)
    {
        unset($this->compatibility[$index]);
    }

    /**
     * Gets as compatibility
     *
     * Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility nodes.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ItemCompatibilityType>
     */
    public function getCompatibility()
    {
        return $this->compatibility;
    }

    /**
     * Sets a new compatibility
     *
     * Details for an individual compatible application, consisting of the name-value pair and related parts compatibility notes. When revising or relisting, the <b>Delete</b> field can be used to delete individual parts compatibility nodes.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ItemCompatibilityType> $compatibility
     * @return self
     */
    public function setCompatibility(iterable $compatibility)
    {
        $this->compatibility = $compatibility;
        return $this;
    }

    /**
     * Gets as replaceAll
     *
     * Set this value to true to delete or replace all existing parts compatibility information when you revise or relist an item. If set to true, all existing item parts compatibility nodes are removed from the listing. If new item compatibilities are specified in the request, they replace the removed compatibilities.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> To ensure that buyer expectations are upheld, you cannot delete or replace an item parts compatibility list if the listing has bids or if the auction ends within 12 hours.
     *  </span>
     *
     * @return bool
     */
    public function getReplaceAll()
    {
        return $this->replaceAll;
    }

    /**
     * Sets a new replaceAll
     *
     * Set this value to true to delete or replace all existing parts compatibility information when you revise or relist an item. If set to true, all existing item parts compatibility nodes are removed from the listing. If new item compatibilities are specified in the request, they replace the removed compatibilities.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> To ensure that buyer expectations are upheld, you cannot delete or replace an item parts compatibility list if the listing has bids or if the auction ends within 12 hours.
     *  </span>
     *
     * @param bool $replaceAll
     * @return self
     */
    public function setReplaceAll($replaceAll)
    {
        $this->replaceAll = $replaceAll;
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
        $value = $this->compatibility;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Compatibility', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
        $value = $this->replaceAll;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReplaceAll', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemCompatibilityListType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->compatibility = [];
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
                case 'Compatibility':
                    $this->compatibility[] = \Nogrod\eBaySDK\Trading\ItemCompatibilityType::xmlRead($reader);
                    return true;
                case 'ReplaceAll':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->replaceAll = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Compatibility'] = Func::jsonList($this->compatibility);
        $data['ReplaceAll'] = $this->replaceAll;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
