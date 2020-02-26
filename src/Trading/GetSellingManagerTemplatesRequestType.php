<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetSellingManagerTemplatesRequestType
 *
 * Retrieves Selling Manager templates. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: GetSellingManagerTemplatesRequestType
 */
class GetSellingManagerTemplatesRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @var int[] $saleTemplateID
     */
    private $saleTemplateID = [
        
    ];

    /**
     * Adds as saleTemplateID
     *
     * The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @return self
     * @param int $saleTemplateID
     */
    public function addToSaleTemplateID($saleTemplateID)
    {
        $this->saleTemplateID[] = $saleTemplateID;
        return $this;
    }

    /**
     * isset saleTemplateID
     *
     * The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSaleTemplateID($index)
    {
        return isset($this->saleTemplateID[$index]);
    }

    /**
     * unset saleTemplateID
     *
     * The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSaleTemplateID($index)
    {
        unset($this->saleTemplateID[$index]);
    }

    /**
     * Gets as saleTemplateID
     *
     * The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @return int[]
     */
    public function getSaleTemplateID()
    {
        return $this->saleTemplateID;
    }

    /**
     * Sets a new saleTemplateID
     *
     * The unique identifier of the Selling Manager Template whose data will be returned. A Selling Manager Template contains the data needed to list an item. One or more template IDs can be specified, each in its own field. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @param int[] $saleTemplateID
     * @return self
     */
    public function setSaleTemplateID(array $saleTemplateID)
    {
        $this->saleTemplateID = $saleTemplateID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSaleTemplateID();
        if (null !== $value && !empty($this->getSaleTemplateID())) {
            $writer->write(array_map(function ($v) {
                return ["SaleTemplateID" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID', true);
        if (null !== $value && !empty($value)) {
            $this->setSaleTemplateID($value);
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
