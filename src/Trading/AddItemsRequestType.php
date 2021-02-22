<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddItemsRequestType
 *
 * Base request type for the <b>AddItems</b> call, which is used to create one to five fixed-price, auction, or classified ad listings. The <b>AddItems</b> call does not support multiple-variation listings, so multiple-variation listings cannot be created with this call.
 * XSD Type: AddItemsRequestType
 */
class AddItemsRequestType extends AbstractRequestType
{

    /**
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
     *
     * @var \Nogrod\eBaySDK\Trading\AddItemRequestContainerType[] $addItemRequestContainer
     */
    private $addItemRequestContainer = [
        
    ];

    /**
     * Adds as addItemRequestContainer
     *
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
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
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
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
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
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
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
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
     * An <b>AddItemRequestContainer</b> container is required for each listing that will be created with the <b>AddItems</b> request. Up to five of these containers can be included in one <b>AddItems</b> request.
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddItemRequestContainer', true);
        if (null !== $value && !empty($value)) {
            $this->setAddItemRequestContainer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddItemRequestContainerType::fromKeyValue($v);
            }, $value));
        }
    }
}
