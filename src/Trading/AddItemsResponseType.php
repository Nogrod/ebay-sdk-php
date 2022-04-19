<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddItemsResponseType
 *
 * The response of the <b>AddItems</b> call. The response includes the Item IDs of the newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
 * XSD Type: AddItemsResponseType
 */
class AddItemsResponseType extends AbstractResponseType
{
    /**
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @var \Nogrod\eBaySDK\Trading\AddItemResponseContainerType[] $addItemResponseContainer
     */
    private $addItemResponseContainer = [

    ];

    /**
     * Adds as addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddItemResponseContainerType $addItemResponseContainer
     */
    public function addToAddItemResponseContainer(\Nogrod\eBaySDK\Trading\AddItemResponseContainerType $addItemResponseContainer)
    {
        $this->addItemResponseContainer[] = $addItemResponseContainer;
        return $this;
    }

    /**
     * isset addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddItemResponseContainer($index)
    {
        return isset($this->addItemResponseContainer[$index]);
    }

    /**
     * unset addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddItemResponseContainer($index)
    {
        unset($this->addItemResponseContainer[$index]);
    }

    /**
     * Gets as addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @return \Nogrod\eBaySDK\Trading\AddItemResponseContainerType[]
     */
    public function getAddItemResponseContainer()
    {
        return $this->addItemResponseContainer;
    }

    /**
     * Sets a new addItemResponseContainer
     *
     * One <b>AddItemResponseContainer</b> container is returned for each listing that was created with the <b>AddItems</b> call. Each container includes the <b>ItemID</b> of each newly created listings, the eBay category each item is listed under, the seller-defined SKUs of the items (if any), the listing recommendations for each item (if applicable), the start and end time of each listing, and the estimated fees that each listing will incur.
     *
     * @param \Nogrod\eBaySDK\Trading\AddItemResponseContainerType[] $addItemResponseContainer
     * @return self
     */
    public function setAddItemResponseContainer(array $addItemResponseContainer)
    {
        $this->addItemResponseContainer = $addItemResponseContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getAddItemResponseContainer();
        if (null !== $value && !empty($this->getAddItemResponseContainer())) {
            $writer->write(array_map(function ($v) {
                return ["AddItemResponseContainer" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddItemResponseContainer', true);
        if (null !== $value && !empty($value)) {
            $this->setAddItemResponseContainer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddItemResponseContainerType::fromKeyValue($v);
            }, $value));
        }
    }
}
