<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseInventoryStatusRequestType
 *
 * Enables a seller to change the price and/or quantity of one to four
 *  active, fixed-price listings. The fixed-price listing to modify is identified with the <b>ItemID</b> of the listing and/or the <b>SKU</b> value of the item (if a seller-defined SKU value exists for the listing). If the seller is modifying one or more variations within a multiple-variation listing, the <b>ItemID</b> and <b>SKU</b> fields in the <b>InventoryStatus</b> container become required, with the <b>ItemID</b> value identifying the listing, and the <b>SKU</b> value identifying the specific product variation within that multiple-variation listing. Each variation within a multiple-variation listing requires a seller-defined SKU value.
 *  <br/><br/>
 *  Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
 * XSD Type: ReviseInventoryStatusRequestType
 */
class ReviseInventoryStatusRequestType extends AbstractRequestType
{
    /**
     * One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *
     * @var \Nogrod\eBaySDK\MerchantData\InventoryStatusType[] $inventoryStatus
     */
    private $inventoryStatus = [
        
    ];

    /**
     * Adds as inventoryStatus
     *
     * One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\InventoryStatusType $inventoryStatus
     */
    public function addToInventoryStatus(\Nogrod\eBaySDK\MerchantData\InventoryStatusType $inventoryStatus)
    {
        $this->inventoryStatus[] = $inventoryStatus;
        return $this;
    }

    /**
     * isset inventoryStatus
     *
     * One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventoryStatus($index)
    {
        return isset($this->inventoryStatus[$index]);
    }

    /**
     * unset inventoryStatus
     *
     * One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventoryStatus($index)
    {
        unset($this->inventoryStatus[$index]);
    }

    /**
     * Gets as inventoryStatus
     *
     * One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *
     * @return \Nogrod\eBaySDK\MerchantData\InventoryStatusType[]
     */
    public function getInventoryStatus()
    {
        return $this->inventoryStatus;
    }

    /**
     * Sets a new inventoryStatus
     *
     * One <b>InventoryStatus</b> container is required for each item or item variation that is being revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *
     * @param \Nogrod\eBaySDK\MerchantData\InventoryStatusType[] $inventoryStatus
     * @return self
     */
    public function setInventoryStatus(array $inventoryStatus)
    {
        $this->inventoryStatus = $inventoryStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getInventoryStatus();
        if (null !== $value && !empty($this->getInventoryStatus())) {
            $writer->write(array_map(function ($v) {
                return ["InventoryStatus" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InventoryStatus', true);
        if (null !== $value && !empty($value)) {
            $this->setInventoryStatus(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\InventoryStatusType::fromKeyValue($v);
            }, $value));
        }
    }
}
