<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionDescriptorsType
 *
 * This type contains the data for condition descriptors associated with an item.
 * XSD Type: ConditionDescriptorsType
 */
class ConditionDescriptorsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card categories (<b>CategoryID</b>):<br />
     *  <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li></ul>
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\ConditionDescriptorType[] $conditionDescriptor
     */
    private $conditionDescriptor = [

    ];

    /**
     * Adds as conditionDescriptor
     *
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card categories (<b>CategoryID</b>):<br />
     *  <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li></ul>
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ConditionDescriptorType $conditionDescriptor
     */
    public function addToConditionDescriptor(\Nogrod\eBaySDK\Trading\ConditionDescriptorType $conditionDescriptor)
    {
        $this->conditionDescriptor[] = $conditionDescriptor;
        return $this;
    }

    /**
     * isset conditionDescriptor
     *
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card categories (<b>CategoryID</b>):<br />
     *  <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li></ul>
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditionDescriptor($index)
    {
        return isset($this->conditionDescriptor[$index]);
    }

    /**
     * unset conditionDescriptor
     *
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card categories (<b>CategoryID</b>):<br />
     *  <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li></ul>
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditionDescriptor($index)
    {
        unset($this->conditionDescriptor[$index]);
    }

    /**
     * Gets as conditionDescriptor
     *
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card categories (<b>CategoryID</b>):<br />
     *  <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li></ul>
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\ConditionDescriptorType[]
     */
    public function getConditionDescriptor()
    {
        return $this->conditionDescriptor;
    }

    /**
     * Sets a new conditionDescriptor
     *
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card categories (<b>CategoryID</b>):<br />
     *  <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li></ul>
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\ConditionDescriptorType[] $conditionDescriptor
     * @return self
     */
    public function setConditionDescriptor(array $conditionDescriptor)
    {
        $this->conditionDescriptor = $conditionDescriptor;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getConditionDescriptor();
        if (null !== $value && !empty($this->getConditionDescriptor())) {
            $writer->write(array_map(function ($v) {return ["ConditionDescriptor" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConditionDescriptor', true);
        if (null !== $value && !empty($value)) {
            $this->setConditionDescriptor(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\ConditionDescriptorType::fromKeyValue($v);}, $value));
        }
    }
}
