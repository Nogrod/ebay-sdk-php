<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseInventoryStatusResponseType
 *
 * The base response type for the <b>ReviseInventoryStatus</b> call. The response includes a <b>Fees</b> container and an <b>InventoryStatus</b> container for each item and/or item variation that was revised.
 * XSD Type: ReviseInventoryStatusResponseType
 */
class ReviseInventoryStatusResponseType extends AbstractResponseType
{
    /**
     * One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *  <br>
     *  <br>
     *  Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an empty tag if it is not defined for a single-variation listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\InventoryStatusType[] $inventoryStatus
     */
    private $inventoryStatus = [

    ];

    /**
     * A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     *  <br>
     *  <br>
     *  Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within the same multiple-variation listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\InventoryFeesType[] $fees
     */
    private $fees = [

    ];

    /**
     * Adds as inventoryStatus
     *
     * One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *  <br>
     *  <br>
     *  Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an empty tag if it is not defined for a single-variation listing.
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
     * One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *  <br>
     *  <br>
     *  Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an empty tag if it is not defined for a single-variation listing.
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
     * One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *  <br>
     *  <br>
     *  Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an empty tag if it is not defined for a single-variation listing.
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
     * One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *  <br>
     *  <br>
     *  Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an empty tag if it is not defined for a single-variation listing.
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
     * One <b>InventoryStatus</b> container is returned for each item or item variation that was revised. Whether updating the price and/or quantity of a single-variation listing or a specific variation within a multiple-variation listing, the limit of items or item variations that can be modified with one call is four.
     *  <br>
     *  <br>
     *  Note that all four elements of this container are returned even if these fields would not supplied in the call request. The <b>SKU</b> field is returned as an empty tag if it is not defined for a single-variation listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\InventoryStatusType[] $inventoryStatus
     * @return self
     */
    public function setInventoryStatus(array $inventoryStatus)
    {
        $this->inventoryStatus = $inventoryStatus;
        return $this;
    }

    /**
     * Adds as fees
     *
     * A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     *  <br>
     *  <br>
     *  Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within the same multiple-variation listing.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\InventoryFeesType $fees
     */
    public function addToFees(\Nogrod\eBaySDK\MerchantData\InventoryFeesType $fees)
    {
        $this->fees[] = $fees;
        return $this;
    }

    /**
     * isset fees
     *
     * A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     *  <br>
     *  <br>
     *  Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within the same multiple-variation listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     *  <br>
     *  <br>
     *  Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within the same multiple-variation listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     *  <br>
     *  <br>
     *  Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within the same multiple-variation listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\InventoryFeesType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A <b>Fees</b> container is returned for each fixed-price listing that was modified with the <b>ReviseInventoryStatus</b> call. This container consists of the estimated listing fees for the revised listing, and the listing is identified in the <b>ItemID</b> field. Each type of fee is returned even if it is not appplicable (has a value of <code>0.0</code>. The Final Value Fee (FVF) is not in this container, as this value cannot be determined until a sale is made. Note that these fees are at the listing level, so if multiple variations within a multiple-variation listing were modified, the fees in this container would be cumulative totals, and would not single out the fees associated with each modified item variation.
     *  <br>
     *  <br>
     *  Please note that since fees are returned at the listing level, it is possible that the response will include one <b>Fees</b> container and four <b>InventoryStatus</b> containers if you made revisions to four different item variations within the same multiple-variation listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\InventoryFeesType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getInventoryStatus();
        if (null !== $value && !empty($this->getInventoryStatus())) {
            $writer->write(array_map(function ($v) {return ["InventoryStatus" => $v];}, $value));
        }
        $value = $this->getFees();
        if (null !== $value && !empty($this->getFees())) {
            $writer->write(array_map(function ($v) {return ["Fees" => $v];}, $value));
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
            $this->setInventoryStatus(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\InventoryStatusType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees', true);
        if (null !== $value && !empty($value)) {
            $this->setFees(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\InventoryFeesType::fromKeyValue($v);}, $value));
        }
    }
}
