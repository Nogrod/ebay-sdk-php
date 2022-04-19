<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemsResponseType
 *
 * Contains a response of the resulting status of ending each item.
 * XSD Type: EndItemsResponseType
 */
class EndItemsResponseType extends AbstractResponseType
{
    /**
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @var \Nogrod\eBaySDK\Trading\EndItemResponseContainerType[] $endItemResponseContainer
     */
    private $endItemResponseContainer = [

    ];

    /**
     * Adds as endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndItemResponseContainerType $endItemResponseContainer
     */
    public function addToEndItemResponseContainer(\Nogrod\eBaySDK\Trading\EndItemResponseContainerType $endItemResponseContainer)
    {
        $this->endItemResponseContainer[] = $endItemResponseContainer;
        return $this;
    }

    /**
     * isset endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndItemResponseContainer($index)
    {
        return isset($this->endItemResponseContainer[$index]);
    }

    /**
     * unset endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndItemResponseContainer($index)
    {
        unset($this->endItemResponseContainer[$index]);
    }

    /**
     * Gets as endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @return \Nogrod\eBaySDK\Trading\EndItemResponseContainerType[]
     */
    public function getEndItemResponseContainer()
    {
        return $this->endItemResponseContainer;
    }

    /**
     * Sets a new endItemResponseContainer
     *
     * Returns a response for an individually ended item. Mutiple containers will be listed if multiple items are ended.
     *
     * @param \Nogrod\eBaySDK\Trading\EndItemResponseContainerType[] $endItemResponseContainer
     * @return self
     */
    public function setEndItemResponseContainer(array $endItemResponseContainer)
    {
        $this->endItemResponseContainer = $endItemResponseContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getEndItemResponseContainer();
        if (null !== $value && !empty($this->getEndItemResponseContainer())) {
            $writer->write(array_map(function ($v) {
                return ["EndItemResponseContainer" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndItemResponseContainer', true);
        if (null !== $value && !empty($value)) {
            $this->setEndItemResponseContainer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\EndItemResponseContainerType::fromKeyValue($v);
            }, $value));
        }
    }
}
