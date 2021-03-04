<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseSellingManagerProductRequestType
 *
 * Revises a Selling Manager Product.
 *  <br><br>
 *  This call is subject to change without notice; the
 *  deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: ReviseSellingManagerProductRequestType
 */
class ReviseSellingManagerProductRequestType extends AbstractRequestType
{
    /**
     * The details of the product that is being revised.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * The details of the folder for this product.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $sellingManagerFolderDetails
     */
    private $sellingManagerFolderDetails = null;

    /**
     * Specifies the name of a field to remove from a Selling Manager product.
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:<br><br>
     *  SellingManagerProductDetails.CustomLabel<br>
     *  SellingManagerProductDetails.QuantityAvailable<br>
     *  SellingManagerProductDetails.UnitCost<br>
     *  These values are case-sensitive. Use values that match the case of the schema element names.
     *
     * @var string[] $deletedField
     */
    private $deletedField = [
        
    ];

    /**
     * Specifies an eBay category associated with the product,
     *  defines Item Specifics that are relevant to the product,
     *  and defines variations available for the product
     *  (which may be used to create multi-variation listings).
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     */
    private $sellingManagerProductSpecifics = null;

    /**
     * Gets as sellingManagerProductDetails
     *
     * The details of the product that is being revised.
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
     * The details of the product that is being revised.
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
     * Gets as sellingManagerFolderDetails
     *
     * The details of the folder for this product.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType
     */
    public function getSellingManagerFolderDetails()
    {
        return $this->sellingManagerFolderDetails;
    }

    /**
     * Sets a new sellingManagerFolderDetails
     *
     * The details of the folder for this product.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $sellingManagerFolderDetails
     * @return self
     */
    public function setSellingManagerFolderDetails(\Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType $sellingManagerFolderDetails)
    {
        $this->sellingManagerFolderDetails = $sellingManagerFolderDetails;
        return $this;
    }

    /**
     * Adds as deletedField
     *
     * Specifies the name of a field to remove from a Selling Manager product.
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:<br><br>
     *  SellingManagerProductDetails.CustomLabel<br>
     *  SellingManagerProductDetails.QuantityAvailable<br>
     *  SellingManagerProductDetails.UnitCost<br>
     *  These values are case-sensitive. Use values that match the case of the schema element names.
     *
     * @return self
     * @param string $deletedField
     */
    public function addToDeletedField($deletedField)
    {
        $this->deletedField[] = $deletedField;
        return $this;
    }

    /**
     * isset deletedField
     *
     * Specifies the name of a field to remove from a Selling Manager product.
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:<br><br>
     *  SellingManagerProductDetails.CustomLabel<br>
     *  SellingManagerProductDetails.QuantityAvailable<br>
     *  SellingManagerProductDetails.UnitCost<br>
     *  These values are case-sensitive. Use values that match the case of the schema element names.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeletedField($index)
    {
        return isset($this->deletedField[$index]);
    }

    /**
     * unset deletedField
     *
     * Specifies the name of a field to remove from a Selling Manager product.
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:<br><br>
     *  SellingManagerProductDetails.CustomLabel<br>
     *  SellingManagerProductDetails.QuantityAvailable<br>
     *  SellingManagerProductDetails.UnitCost<br>
     *  These values are case-sensitive. Use values that match the case of the schema element names.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeletedField($index)
    {
        unset($this->deletedField[$index]);
    }

    /**
     * Gets as deletedField
     *
     * Specifies the name of a field to remove from a Selling Manager product.
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:<br><br>
     *  SellingManagerProductDetails.CustomLabel<br>
     *  SellingManagerProductDetails.QuantityAvailable<br>
     *  SellingManagerProductDetails.UnitCost<br>
     *  These values are case-sensitive. Use values that match the case of the schema element names.
     *
     * @return string[]
     */
    public function getDeletedField()
    {
        return $this->deletedField;
    }

    /**
     * Sets a new deletedField
     *
     * Specifies the name of a field to remove from a Selling Manager product.
     *  The request can contain zero, one, or many instances of DeletedField (one for each field to be removed).
     *  DeletedField accepts the following path names, which remove the corresponding fields:<br><br>
     *  SellingManagerProductDetails.CustomLabel<br>
     *  SellingManagerProductDetails.QuantityAvailable<br>
     *  SellingManagerProductDetails.UnitCost<br>
     *  These values are case-sensitive. Use values that match the case of the schema element names.
     *
     * @param string[] $deletedField
     * @return self
     */
    public function setDeletedField(array $deletedField)
    {
        $this->deletedField = $deletedField;
        return $this;
    }

    /**
     * Gets as sellingManagerProductSpecifics
     *
     * Specifies an eBay category associated with the product,
     *  defines Item Specifics that are relevant to the product,
     *  and defines variations available for the product
     *  (which may be used to create multi-variation listings).
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
     * Specifies an eBay category associated with the product,
     *  defines Item Specifics that are relevant to the product,
     *  and defines variations available for the product
     *  (which may be used to create multi-variation listings).
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
        $value = $this->getSellingManagerFolderDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerFolderDetails", $value);
        }
        $value = $this->getDeletedField();
        if (null !== $value && !empty($this->getDeletedField())) {
            $writer->write(array_map(function ($v) {
                return ["DeletedField" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails');
        if (null !== $value) {
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerFolderDetails');
        if (null !== $value) {
            $this->setSellingManagerFolderDetails(\Nogrod\eBaySDK\Trading\SellingManagerFolderDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedField', true);
        if (null !== $value && !empty($value)) {
            $this->setDeletedField($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductSpecifics');
        if (null !== $value) {
            $this->setSellingManagerProductSpecifics(\Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType::fromKeyValue($value));
        }
    }
}
