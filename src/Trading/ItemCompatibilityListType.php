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
class ItemCompatibilityListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
     * @return \Nogrod\eBaySDK\Trading\ItemCompatibilityType[]
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
     * @param \Nogrod\eBaySDK\Trading\ItemCompatibilityType[] $compatibility
     * @return self
     */
    public function setCompatibility(array $compatibility)
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCompatibility();
        if (null !== $value && [] !== $this->getCompatibility()) {
            $writer->write(array_map(function ($v) {return ["Compatibility" => $v];}, $value));
        }
        $value = $this->getReplaceAll();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReplaceAll", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ItemCompatibilityListType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Compatibility');
        if (null !== $value) {
            $this->setCompatibility(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ItemCompatibilityType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReplaceAll');
        if (null !== $value) {
            $this->setReplaceAll(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
