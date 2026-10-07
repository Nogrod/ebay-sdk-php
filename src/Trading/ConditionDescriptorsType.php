<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionDescriptorsType
 *
 * This type contains the data for condition descriptors associated with an item.
 * XSD Type: ConditionDescriptorsType
 */
class ConditionDescriptorsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card leaf categories (<b>CategoryID</b>):<br />
     *  <ul>
     *  <li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li>
     *  </ul>
     *  and the following coin categories:
     *  <ul>
     *  <li>Coins: US (<code>253</code>)</li>
     *  <li>Coins: World (<code>256</code>)</li>
     *  <li>Coins: Canada (<code>3377</code>)</li>
     *  <li>Coins: Ancient (<code>4733</code>)</li>
     *  <li>Coins: Medieval (<code>18466</code>)</li>
     *  </ul>
     *  <br />
     *  Note that these coin categories are not leaf categories, so condition grading is available for all leaf categories descending from the above categories (except for rolls, sets, and lots).
     *  <br /><br />
     *  Additionally, condition grading is available for Salvage items in select categories for eligible users. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies" target="_blank">getItemConditionPolicies</a> method to see supported categories.
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
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card leaf categories (<b>CategoryID</b>):<br />
     *  <ul>
     *  <li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li>
     *  </ul>
     *  and the following coin categories:
     *  <ul>
     *  <li>Coins: US (<code>253</code>)</li>
     *  <li>Coins: World (<code>256</code>)</li>
     *  <li>Coins: Canada (<code>3377</code>)</li>
     *  <li>Coins: Ancient (<code>4733</code>)</li>
     *  <li>Coins: Medieval (<code>18466</code>)</li>
     *  </ul>
     *  <br />
     *  Note that these coin categories are not leaf categories, so condition grading is available for all leaf categories descending from the above categories (except for rolls, sets, and lots).
     *  <br /><br />
     *  Additionally, condition grading is available for Salvage items in select categories for eligible users. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies" target="_blank">getItemConditionPolicies</a> method to see supported categories.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ConditionDescriptorType $conditionDescriptor
     */
    public function addToConditionDescriptor(\Nogrod\eBaySDK\Trading\ConditionDescriptorType $conditionDescriptor)
    {
        if (!is_array($this->conditionDescriptor)) {
            throw new \LogicException('conditionDescriptor is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->conditionDescriptor[] = $conditionDescriptor;
        return $this;
    }

    /**
     * isset conditionDescriptor
     *
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card leaf categories (<b>CategoryID</b>):<br />
     *  <ul>
     *  <li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li>
     *  </ul>
     *  and the following coin categories:
     *  <ul>
     *  <li>Coins: US (<code>253</code>)</li>
     *  <li>Coins: World (<code>256</code>)</li>
     *  <li>Coins: Canada (<code>3377</code>)</li>
     *  <li>Coins: Ancient (<code>4733</code>)</li>
     *  <li>Coins: Medieval (<code>18466</code>)</li>
     *  </ul>
     *  <br />
     *  Note that these coin categories are not leaf categories, so condition grading is available for all leaf categories descending from the above categories (except for rolls, sets, and lots).
     *  <br /><br />
     *  Additionally, condition grading is available for Salvage items in select categories for eligible users. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies" target="_blank">getItemConditionPolicies</a> method to see supported categories.
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
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card leaf categories (<b>CategoryID</b>):<br />
     *  <ul>
     *  <li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li>
     *  </ul>
     *  and the following coin categories:
     *  <ul>
     *  <li>Coins: US (<code>253</code>)</li>
     *  <li>Coins: World (<code>256</code>)</li>
     *  <li>Coins: Canada (<code>3377</code>)</li>
     *  <li>Coins: Ancient (<code>4733</code>)</li>
     *  <li>Coins: Medieval (<code>18466</code>)</li>
     *  </ul>
     *  <br />
     *  Note that these coin categories are not leaf categories, so condition grading is available for all leaf categories descending from the above categories (except for rolls, sets, and lots).
     *  <br /><br />
     *  Additionally, condition grading is available for Salvage items in select categories for eligible users. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies" target="_blank">getItemConditionPolicies</a> method to see supported categories.
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
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card leaf categories (<b>CategoryID</b>):<br />
     *  <ul>
     *  <li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li>
     *  </ul>
     *  and the following coin categories:
     *  <ul>
     *  <li>Coins: US (<code>253</code>)</li>
     *  <li>Coins: World (<code>256</code>)</li>
     *  <li>Coins: Canada (<code>3377</code>)</li>
     *  <li>Coins: Ancient (<code>4733</code>)</li>
     *  <li>Coins: Medieval (<code>18466</code>)</li>
     *  </ul>
     *  <br />
     *  Note that these coin categories are not leaf categories, so condition grading is available for all leaf categories descending from the above categories (except for rolls, sets, and lots).
     *  <br /><br />
     *  Additionally, condition grading is available for Salvage items in select categories for eligible users. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies" target="_blank">getItemConditionPolicies</a> method to see supported categories.
     *  </span>
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\ConditionDescriptorType>
     */
    public function getConditionDescriptor()
    {
        return $this->conditionDescriptor;
    }

    /**
     * Sets a new conditionDescriptor
     *
     * This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either closed set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br>
     *  <span class="tablenote"><b>Note: </b> The use of Condition Descriptors is currently only available for the following trading card leaf categories (<b>CategoryID</b>):<br />
     *  <ul>
     *  <li>Non-Sport Trading Card Singles (<code>183050</code>)</li>
     *  <li>CCG Individual Cards (<code>183454</code>)</li>
     *  <li>Sports Trading Card Singles (<code>261328</code>)</li>
     *  </ul>
     *  and the following coin categories:
     *  <ul>
     *  <li>Coins: US (<code>253</code>)</li>
     *  <li>Coins: World (<code>256</code>)</li>
     *  <li>Coins: Canada (<code>3377</code>)</li>
     *  <li>Coins: Ancient (<code>4733</code>)</li>
     *  <li>Coins: Medieval (<code>18466</code>)</li>
     *  </ul>
     *  <br />
     *  Note that these coin categories are not leaf categories, so condition grading is available for all leaf categories descending from the above categories (except for rolls, sets, and lots).
     *  <br /><br />
     *  Additionally, condition grading is available for Salvage items in select categories for eligible users. Use the <a href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies" target="_blank">getItemConditionPolicies</a> method to see supported categories.
     *  </span>
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\ConditionDescriptorType> $conditionDescriptor
     * @return self
     */
    public function setConditionDescriptor(iterable $conditionDescriptor)
    {
        $this->conditionDescriptor = $conditionDescriptor;
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
        $value = $this->conditionDescriptor;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'ConditionDescriptor', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ConditionDescriptorsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->conditionDescriptor = [];
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
                case 'ConditionDescriptor':
                    $this->conditionDescriptor[] = \Nogrod\eBaySDK\Trading\ConditionDescriptorType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ConditionDescriptor'] = Func::jsonList($this->conditionDescriptor);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
