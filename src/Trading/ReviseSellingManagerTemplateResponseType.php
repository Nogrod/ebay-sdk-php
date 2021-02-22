<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseSellingManagerTemplateResponseType
 *
 * Returns the template ID and the estimated fees for the revised listing.
 * XSD Type: ReviseSellingManagerTemplateResponseType
 */
class ReviseSellingManagerTemplateResponseType extends AbstractResponseType
{

    /**
     * This sale template ID uniquely identifies the template that was revised
     *  in the request. This sale template ID should match the
     *  template ID specified in the request.
     *  specified for the call.
     *
     * @var int $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * This container is an array of fees associated with the revised Selling Manager template. These fees may only be hypothetical in nature, unless there are one or more active listings based on this Selling Manager template. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the revised template/listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>ReviseSellingManagerTemplate</b> call to revise a template/item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fees
     */
    private $fees = null;

    /**
     * ID of the primary category in which the item was listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID passed in Item.PrimaryCategory was mapped to a new ID by eBay.
     *  If the primary category has not changed or it has expired with no replacement,
     *  CategoryID does not return a value.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * ID of the secondary category in which the item was listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID passed in Item.SecondaryCategory was mapped to a new ID by eBay.
     *  If the secondary category has not changed or it has expired with no replacement,
     *  Category2ID does not return a value.
     *
     * @var string $category2ID
     */
    private $category2ID = null;

    /**
     * Instead of revising, only verifies the template.
     *
     * @var bool $verifyOnly
     */
    private $verifyOnly = null;

    /**
     * The name of the sale template.
     *
     * @var string $saleTemplateName
     */
    private $saleTemplateName = null;

    /**
     * The details of the product that this template belongs to.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * Gets as saleTemplateID
     *
     * This sale template ID uniquely identifies the template that was revised
     *  in the request. This sale template ID should match the
     *  template ID specified in the request.
     *  specified for the call.
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
     * This sale template ID uniquely identifies the template that was revised
     *  in the request. This sale template ID should match the
     *  template ID specified in the request.
     *  specified for the call.
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
     * Adds as fee
     *
     * This container is an array of fees associated with the revised Selling Manager template. These fees may only be hypothetical in nature, unless there are one or more active listings based on this Selling Manager template. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the revised template/listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>ReviseSellingManagerTemplate</b> call to revise a template/item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the revised Selling Manager template. These fees may only be hypothetical in nature, unless there are one or more active listings based on this Selling Manager template. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the revised template/listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>ReviseSellingManagerTemplate</b> call to revise a template/item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the revised Selling Manager template. These fees may only be hypothetical in nature, unless there are one or more active listings based on this Selling Manager template. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the revised template/listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>ReviseSellingManagerTemplate</b> call to revise a template/item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the revised Selling Manager template. These fees may only be hypothetical in nature, unless there are one or more active listings based on this Selling Manager template. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the revised template/listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>ReviseSellingManagerTemplate</b> call to revise a template/item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
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
     * This container is an array of fees associated with the revised Selling Manager template. These fees may only be hypothetical in nature, unless there are one or more active listings based on this Selling Manager template. The fees in this container will not include any fees that are based on the purchase price (such as Final Value Fee) and only come into play when the listing has a sale.
     *  <br>
     *  <br>
     *  All listing fee types are returned, even if those fees are not applicable for the revised template/listing and are '0.0'.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> The currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>ReviseSellingManagerTemplate</b> call to revise a template/item on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as categoryID
     *
     * ID of the primary category in which the item was listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID passed in Item.PrimaryCategory was mapped to a new ID by eBay.
     *  If the primary category has not changed or it has expired with no replacement,
     *  CategoryID does not return a value.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * ID of the primary category in which the item was listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID passed in Item.PrimaryCategory was mapped to a new ID by eBay.
     *  If the primary category has not changed or it has expired with no replacement,
     *  CategoryID does not return a value.
     *
     * @param string $categoryID
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
     * ID of the secondary category in which the item was listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID passed in Item.SecondaryCategory was mapped to a new ID by eBay.
     *  If the secondary category has not changed or it has expired with no replacement,
     *  Category2ID does not return a value.
     *
     * @return string
     */
    public function getCategory2ID()
    {
        return $this->category2ID;
    }

    /**
     * Sets a new category2ID
     *
     * ID of the secondary category in which the item was listed.
     *  Only returned if you set Item.CategoryMappingAllowed to true in the request
     *  and the ID passed in Item.SecondaryCategory was mapped to a new ID by eBay.
     *  If the secondary category has not changed or it has expired with no replacement,
     *  Category2ID does not return a value.
     *
     * @param string $category2ID
     * @return self
     */
    public function setCategory2ID($category2ID)
    {
        $this->category2ID = $category2ID;
        return $this;
    }

    /**
     * Gets as verifyOnly
     *
     * Instead of revising, only verifies the template.
     *
     * @return bool
     */
    public function getVerifyOnly()
    {
        return $this->verifyOnly;
    }

    /**
     * Sets a new verifyOnly
     *
     * Instead of revising, only verifies the template.
     *
     * @param bool $verifyOnly
     * @return self
     */
    public function setVerifyOnly($verifyOnly)
    {
        $this->verifyOnly = $verifyOnly;
        return $this;
    }

    /**
     * Gets as saleTemplateName
     *
     * The name of the sale template.
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
     * The name of the sale template.
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
     * The details of the product that this template belongs to.
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
     * The details of the product that this template belongs to.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return self
     */
    public function setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails)
    {
        $this->sellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
        }
        $value = $this->getFees();
        if (null !== $value && !empty($this->getFees())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {
                return ["Fee" => $v];
            }, $value));
        }
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getCategory2ID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Category2ID", $value);
        }
        $value = $this->getVerifyOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VerifyOnly", $value);
        }
        $value = $this->getSaleTemplateName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateName", $value);
        }
        $value = $this->getSellingManagerProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID');
        if (null !== $value) {
            $this->setSaleTemplateID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees', true);
        if (null !== $value && !empty($value)) {
            $this->setFees(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category2ID');
        if (null !== $value) {
            $this->setCategory2ID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VerifyOnly');
        if (null !== $value) {
            $this->setVerifyOnly($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateName');
        if (null !== $value) {
            $this->setSaleTemplateName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails');
        if (null !== $value) {
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
    }
}
