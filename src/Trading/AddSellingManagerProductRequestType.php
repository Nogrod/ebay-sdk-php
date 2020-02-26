<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddSellingManagerProductRequestType
 *
 * The base request type of the <b>AddSellingManagerProduct</b> call, which is used to create a product or a group of product variations within the Selling Manager Pro system. Once a Selling Manager Pro product or production variation group is created, the product settings and product specifics can be transferred over into a Selling Manager Pro listing template with the <b>AddSellingManagerTemplate</b> call.
 * XSD Type: AddSellingManagerProductRequestType
 */
class AddSellingManagerProductRequestType extends AbstractRequestType
{

    /**
     * This container is used to provide details about the Selling Manager product, such as product name, quantity available, and unit price.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * This is the unique identifier of the folder in which the new product will be placed. This folder can be a new folder or a folder that already exists for the seller in Selling Manager Pro. If no folder is specified through this field, the new product is place into the <em>My Products</em> folder by default.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * This container allows the seller to specify item specifics for a product, to create a product variation group and variation specifics, and/or to specify a listing category for the product or product variation group. A product variation group can be transferred into a listing template that can create a multiple-variation listing. The listing category can either be provided through the <b>PrimaryCategoryID</b> value of this call, or through the <b>Item.PrimaryCategory.CategoryID</b> field of the subsequent <b>AddSellingManagerTemplate</b> call.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     */
    private $sellingManagerProductSpecifics = null;

    /**
     * Gets as sellingManagerProductDetails
     *
     * This container is used to provide details about the Selling Manager product, such as product name, quantity available, and unit price.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType
     */
    public function getSellingManagerProductDetails()
    {
        return $this->sellingManagerProductDetails;
    }

    /**
     * Sets a new sellingManagerProductDetails
     *
     * This container is used to provide details about the Selling Manager product, such as product name, quantity available, and unit price.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return self
     */
    public function setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails)
    {
        $this->sellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }

    /**
     * Gets as folderID
     *
     * This is the unique identifier of the folder in which the new product will be placed. This folder can be a new folder or a folder that already exists for the seller in Selling Manager Pro. If no folder is specified through this field, the new product is place into the <em>My Products</em> folder by default.
     *
     * @return int
     */
    public function getFolderID()
    {
        return $this->folderID;
    }

    /**
     * Sets a new folderID
     *
     * This is the unique identifier of the folder in which the new product will be placed. This folder can be a new folder or a folder that already exists for the seller in Selling Manager Pro. If no folder is specified through this field, the new product is place into the <em>My Products</em> folder by default.
     *
     * @param int $folderID
     * @return self
     */
    public function setFolderID($folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    /**
     * Gets as sellingManagerProductSpecifics
     *
     * This container allows the seller to specify item specifics for a product, to create a product variation group and variation specifics, and/or to specify a listing category for the product or product variation group. A product variation group can be transferred into a listing template that can create a multiple-variation listing. The listing category can either be provided through the <b>PrimaryCategoryID</b> value of this call, or through the <b>Item.PrimaryCategory.CategoryID</b> field of the subsequent <b>AddSellingManagerTemplate</b> call.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType
     */
    public function getSellingManagerProductSpecifics()
    {
        return $this->sellingManagerProductSpecifics;
    }

    /**
     * Sets a new sellingManagerProductSpecifics
     *
     * This container allows the seller to specify item specifics for a product, to create a product variation group and variation specifics, and/or to specify a listing category for the product or product variation group. A product variation group can be transferred into a listing template that can create a multiple-variation listing. The listing category can either be provided through the <b>PrimaryCategoryID</b> value of this call, or through the <b>Item.PrimaryCategory.CategoryID</b> field of the subsequent <b>AddSellingManagerTemplate</b> call.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @return self
     */
    public function setSellingManagerProductSpecifics(\Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType $sellingManagerProductSpecifics)
    {
        $this->sellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellingManagerProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails", $value);
        }
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getSellingManagerProductSpecifics();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductSpecifics", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails');
        if (null !== $value) {
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductSpecifics');
        if (null !== $value) {
            $this->setSellingManagerProductSpecifics(\Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType::fromKeyValue($value));
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
