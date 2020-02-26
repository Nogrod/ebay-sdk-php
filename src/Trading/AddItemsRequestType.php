<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddItemsRequestType
 *
 * Defines from one to five items and lists them on a specified eBay site.
 * XSD Type: AddItemsRequestType
 */
class AddItemsRequestType extends AbstractRequestType
{

    /**
     * Defines a single item to be listed on eBay. This container is similar to an <b>AddItem</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @var \Nogrod\eBaySDK\Trading\AddItemRequestContainerType[] $addItemRequestContainer
     */
    private $addItemRequestContainer = [
        
    ];

    /**
     * Adds as addItemRequestContainer
     *
     * Defines a single item to be listed on eBay. This container is similar to an <b>AddItem</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemRequestContainerType $addItemRequestContainer
     */
    public function addToAddItemRequestContainer(\Nogrod\eBaySDK\Trading\AddItemRequestContainerType $addItemRequestContainer)
    {
        $this->addItemRequestContainer[] = $addItemRequestContainer;
        return $this;
    }

    /**
     * isset addItemRequestContainer
     *
     * Defines a single item to be listed on eBay. This container is similar to an <b>AddItem</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddItemRequestContainer($index)
    {
        return isset($this->addItemRequestContainer[$index]);
    }

    /**
     * unset addItemRequestContainer
     *
     * Defines a single item to be listed on eBay. This container is similar to an <b>AddItem</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddItemRequestContainer($index)
    {
        unset($this->addItemRequestContainer[$index]);
    }

    /**
     * Gets as addItemRequestContainer
     *
     * Defines a single item to be listed on eBay. This container is similar to an <b>AddItem</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @return \Nogrod\eBaySDK\Trading\AddItemRequestContainerType[]
     */
    public function getAddItemRequestContainer()
    {
        return $this->addItemRequestContainer;
    }

    /**
     * Sets a new addItemRequestContainer
     *
     * Defines a single item to be listed on eBay. This container is similar to an <b>AddItem</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @param \Nogrod\eBaySDK\Trading\AddItemRequestContainerType[] $addItemRequestContainer
     * @return self
     */
    public function setAddItemRequestContainer(array $addItemRequestContainer)
    {
        $this->addItemRequestContainer = $addItemRequestContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getAddItemRequestContainer();
        if (null !== $value && !empty($this->getAddItemRequestContainer())) {
            $writer->write(array_map(function ($v) {
                return ["AddItemRequestContainer" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddItemRequestContainer', true);
        if (null !== $value && !empty($value)) {
            $this->setAddItemRequestContainer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddItemRequestContainerType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
