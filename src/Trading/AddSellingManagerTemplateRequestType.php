<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddSellingManagerTemplateRequestType
 *
 * The base request for the <b>AddSellingManagerTemplate</b> call, which is used to create a Selling Manager listing template. Each Selling Manager listing template must be associated with an existing Selling Manager product, and each product can have up to 20 listing templates associated with it.
 * XSD Type: AddSellingManagerTemplateRequestType
 */
class AddSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * This <b>Item</b> container is similar to the one that is used in standard Add/Revise/Relist/Verify Item calls, with the difference being that some of the product-specific data/settings will be inherited through the Selling Manager product that is referenced in the call request, and not through this <b>Item</b> container. The data that is passed in this container will become part of the listing template that is created with this call.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * The name of the Selling Manager listing template is provided in this field. If you don't specify a name, then the value in the <b>Item.Title</b> field will be used as the name instead.
     *
     * @var string $saleTemplateName
     */
    private $saleTemplateName = null;

    /**
     * The unique identifier of the Selling Manager product that will be associated with the listing template being created. Selling Manager Product IDs are returned in the response of a <b>AddSellingManagerProduct</b> call.
     *  Alternatively, the <b>GetSellingManagerInventory</b> call can be used to retrieve active Selling Manager products for the user's account.
     *
     * @var int $productID
     */
    private $productID = null;

    /**
     * Gets as item
     *
     * This <b>Item</b> container is similar to the one that is used in standard Add/Revise/Relist/Verify Item calls, with the difference being that some of the product-specific data/settings will be inherited through the Selling Manager product that is referenced in the call request, and not through this <b>Item</b> container. The data that is passed in this container will become part of the listing template that is created with this call.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * This <b>Item</b> container is similar to the one that is used in standard Add/Revise/Relist/Verify Item calls, with the difference being that some of the product-specific data/settings will be inherited through the Selling Manager product that is referenced in the call request, and not through this <b>Item</b> container. The data that is passed in this container will become part of the listing template that is created with this call.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as saleTemplateName
     *
     * The name of the Selling Manager listing template is provided in this field. If you don't specify a name, then the value in the <b>Item.Title</b> field will be used as the name instead.
     *
     * @return string
     */
    public function getSaleTemplateName()
    {
        return $this->saleTemplateName;
    }

    /**
     * Sets a new saleTemplateName
     *
     * The name of the Selling Manager listing template is provided in this field. If you don't specify a name, then the value in the <b>Item.Title</b> field will be used as the name instead.
     *
     * @param string $saleTemplateName
     * @return self
     */
    public function setSaleTemplateName($saleTemplateName)
    {
        $this->saleTemplateName = $saleTemplateName;
        return $this;
    }

    /**
     * Gets as productID
     *
     * The unique identifier of the Selling Manager product that will be associated with the listing template being created. Selling Manager Product IDs are returned in the response of a <b>AddSellingManagerProduct</b> call.
     *  Alternatively, the <b>GetSellingManagerInventory</b> call can be used to retrieve active Selling Manager products for the user's account.
     *
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * The unique identifier of the Selling Manager product that will be associated with the listing template being created. Selling Manager Product IDs are returned in the response of a <b>AddSellingManagerProduct</b> call.
     *  Alternatively, the <b>GetSellingManagerInventory</b> call can be used to retrieve active Selling Manager products for the user's account.
     *
     * @param int $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getSaleTemplateName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateName", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateName');
        if (null !== $value) {
            $this->setSaleTemplateName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID($value);
        }
    }
}
