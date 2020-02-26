<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddSellingManagerTemplateResponseType
 *
 * The base response of the <b>AddSellingManagerTemplate</b> call. The response includes the unique identifier and name of the new Selling Manager template, the listing category, some information on the Selling Manager product associated with the template, and the expected listing fees if a listing is created using this Selling Manager template.
 * XSD Type: AddSellingManagerTemplateResponseType
 */
class AddSellingManagerTemplateResponseType extends AbstractResponseType
{

    /**
     * The unique identifier of the eBay category in which the product associated with the Selling Manager template will be listed. The primary listing category is provided through the <b>PrimaryCategoryID</b> field of an <b>AddSellingManagerProduct</b> call or through the <b>Item.PrimaryCategory.CategoryID</b> field.
     *
     * @var int $categoryID
     */
    private $categoryID = null;

    /**
     * The unique identifier of the secondary eBay category in which the product associated with the Selling Manager template will be listed. This field will only be returned if defined through a <b>Item.SecondaryCategory.CategoryID</b> field.
     *
     * @var int $category2ID
     */
    private $category2ID = null;

    /**
     * This is the unique identifier of the new Selling Manager template. This value is created by eBay upon successful creation of the Selling Manager template.
     *
     * @var int $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * Ihis field is deprecated.
     *
     * @var int $saleTemplateGroupID
     */
    private $saleTemplateGroupID = null;

    /**
     * This is the unique name of the newly created Selling Manager template. This name will be the value that was provided in the <b>SaleTemplateName</b> field of the call request. If the <b>SaleTemplateName</b> field was omitted the Selling Manager template inherits the name specified in the <b>Item.Title</b> field instead.
     *
     * @var string $saleTemplateName
     */
    private $saleTemplateName = null;

    /**
     * This container consists of details related to the Selling Manager product associated with the Selling Manager template, including the unique identifer, product name, and current quantity available.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * This container consists of listing fees that can be expected to be assessed against an eBay listing created with Selling Manager template. Each <b>Fee</b> container will contain the name of the listing fee, the expected amount, and any eBay promotional discount that will be applied towards the expected fee. The Final Value Fee (FVF) will never be returned in this container, as this fee cannot be determined until an item is sold.
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fees
     */
    private $fees = null;

    /**
     * Gets as categoryID
     *
     * The unique identifier of the eBay category in which the product associated with the Selling Manager template will be listed. The primary listing category is provided through the <b>PrimaryCategoryID</b> field of an <b>AddSellingManagerProduct</b> call or through the <b>Item.PrimaryCategory.CategoryID</b> field.
     *
     * @return int
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * The unique identifier of the eBay category in which the product associated with the Selling Manager template will be listed. The primary listing category is provided through the <b>PrimaryCategoryID</b> field of an <b>AddSellingManagerProduct</b> call or through the <b>Item.PrimaryCategory.CategoryID</b> field.
     *
     * @param int $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as category2ID
     *
     * The unique identifier of the secondary eBay category in which the product associated with the Selling Manager template will be listed. This field will only be returned if defined through a <b>Item.SecondaryCategory.CategoryID</b> field.
     *
     * @return int
     */
    public function getCategory2ID()
    {
        return $this->category2ID;
    }

    /**
     * Sets a new category2ID
     *
     * The unique identifier of the secondary eBay category in which the product associated with the Selling Manager template will be listed. This field will only be returned if defined through a <b>Item.SecondaryCategory.CategoryID</b> field.
     *
     * @param int $category2ID
     * @return self
     */
    public function setCategory2ID($category2ID)
    {
        $this->category2ID = $category2ID;
        return $this;
    }

    /**
     * Gets as saleTemplateID
     *
     * This is the unique identifier of the new Selling Manager template. This value is created by eBay upon successful creation of the Selling Manager template.
     *
     * @return int
     */
    public function getSaleTemplateID()
    {
        return $this->saleTemplateID;
    }

    /**
     * Sets a new saleTemplateID
     *
     * This is the unique identifier of the new Selling Manager template. This value is created by eBay upon successful creation of the Selling Manager template.
     *
     * @param int $saleTemplateID
     * @return self
     */
    public function setSaleTemplateID($saleTemplateID)
    {
        $this->saleTemplateID = $saleTemplateID;
        return $this;
    }

    /**
     * Gets as saleTemplateGroupID
     *
     * Ihis field is deprecated.
     *
     * @return int
     */
    public function getSaleTemplateGroupID()
    {
        return $this->saleTemplateGroupID;
    }

    /**
     * Sets a new saleTemplateGroupID
     *
     * Ihis field is deprecated.
     *
     * @param int $saleTemplateGroupID
     * @return self
     */
    public function setSaleTemplateGroupID($saleTemplateGroupID)
    {
        $this->saleTemplateGroupID = $saleTemplateGroupID;
        return $this;
    }

    /**
     * Gets as saleTemplateName
     *
     * This is the unique name of the newly created Selling Manager template. This name will be the value that was provided in the <b>SaleTemplateName</b> field of the call request. If the <b>SaleTemplateName</b> field was omitted the Selling Manager template inherits the name specified in the <b>Item.Title</b> field instead.
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
     * This is the unique name of the newly created Selling Manager template. This name will be the value that was provided in the <b>SaleTemplateName</b> field of the call request. If the <b>SaleTemplateName</b> field was omitted the Selling Manager template inherits the name specified in the <b>Item.Title</b> field instead.
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
     * Gets as sellingManagerProductDetails
     *
     * This container consists of details related to the Selling Manager product associated with the Selling Manager template, including the unique identifer, product name, and current quantity available.
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
     * This container consists of details related to the Selling Manager product associated with the Selling Manager template, including the unique identifer, product name, and current quantity available.
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
     * Adds as fee
     *
     * This container consists of listing fees that can be expected to be assessed against an eBay listing created with Selling Manager template. Each <b>Fee</b> container will contain the name of the listing fee, the expected amount, and any eBay promotional discount that will be applied towards the expected fee. The Final Value Fee (FVF) will never be returned in this container, as this fee cannot be determined until an item is sold.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeeType $fee
     */
    public function addToFees(\Nogrod\eBaySDK\Trading\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * This container consists of listing fees that can be expected to be assessed against an eBay listing created with Selling Manager template. Each <b>Fee</b> container will contain the name of the listing fee, the expected amount, and any eBay promotional discount that will be applied towards the expected fee. The Final Value Fee (FVF) will never be returned in this container, as this fee cannot be determined until an item is sold.
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
     * This container consists of listing fees that can be expected to be assessed against an eBay listing created with Selling Manager template. Each <b>Fee</b> container will contain the name of the listing fee, the expected amount, and any eBay promotional discount that will be applied towards the expected fee. The Final Value Fee (FVF) will never be returned in this container, as this fee cannot be determined until an item is sold.
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
     * This container consists of listing fees that can be expected to be assessed against an eBay listing created with Selling Manager template. Each <b>Fee</b> container will contain the name of the listing fee, the expected amount, and any eBay promotional discount that will be applied towards the expected fee. The Final Value Fee (FVF) will never be returned in this container, as this fee cannot be determined until an item is sold.
     *
     * @return \Nogrod\eBaySDK\Trading\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * This container consists of listing fees that can be expected to be assessed against an eBay listing created with Selling Manager template. Each <b>Fee</b> container will contain the name of the listing fee, the expected amount, and any eBay promotional discount that will be applied towards the expected fee. The Final Value Fee (FVF) will never be returned in this container, as this fee cannot be determined until an item is sold.
     *
     * @param \Nogrod\eBaySDK\Trading\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getCategory2ID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Category2ID", $value);
        }
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
        }
        $value = $this->getSaleTemplateGroupID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateGroupID", $value);
        }
        $value = $this->getSaleTemplateName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateName", $value);
        }
        $value = $this->getSellingManagerProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails", $value);
        }
        $value = $this->getFees();
        if (null !== $value && !empty($this->getFees())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {
                return ["Fee" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category2ID');
        if (null !== $value) {
            $this->setCategory2ID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID');
        if (null !== $value) {
            $this->setSaleTemplateID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateGroupID');
        if (null !== $value) {
            $this->setSaleTemplateGroupID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateName');
        if (null !== $value) {
            $this->setSaleTemplateName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails');
        if (null !== $value) {
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees', true);
        if (null !== $value && !empty($value)) {
            $this->setFees(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);
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
