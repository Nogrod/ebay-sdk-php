<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerProductType
 *
 * Describes a Selling Manager Product
 * XSD Type: SellingManagerProductType
 */
class SellingManagerProductType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container for information about the product.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetailsArray
     */
    private $sellingManagerTemplateDetailsArray = null;

    /**
     * Container for statistics about the product.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     */
    private $sellingManagerProductInventoryStatus = null;

    /**
     * Specifies an eBay category associated with the product,
     *  defines Item Specifics that are relevant to the product,
     *  and defines variations available for the product
     *  (which may be used to create multivariation listings).
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     */
    private $sellingManagerProductSpecifics = null;

    /**
     * Gets as sellingManagerProductDetails
     *
     * Container for information about the product.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerProductDetailsType
     */
    public function getSellingManagerProductDetails()
    {
        return $this->sellingManagerProductDetails;
    }

    /**
     * Sets a new sellingManagerProductDetails
     *
     * Container for information about the product.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return self
     */
    public function setSellingManagerProductDetails(\Nogrod\eBaySDK\MerchantData\SellingManagerProductDetailsType $sellingManagerProductDetails)
    {
        $this->sellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }

    /**
     * Adds as sellingManagerTemplateDetails
     *
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails
     */
    public function addToSellingManagerTemplateDetailsArray(\Nogrod\eBaySDK\MerchantData\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails)
    {
        $this->sellingManagerTemplateDetailsArray[] = $sellingManagerTemplateDetails;
        return $this;
    }

    /**
     * isset sellingManagerTemplateDetailsArray
     *
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellingManagerTemplateDetailsArray($index)
    {
        return isset($this->sellingManagerTemplateDetailsArray[$index]);
    }

    /**
     * unset sellingManagerTemplateDetailsArray
     *
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellingManagerTemplateDetailsArray($index)
    {
        unset($this->sellingManagerTemplateDetailsArray[$index]);
    }

    /**
     * Gets as sellingManagerTemplateDetailsArray
     *
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerTemplateDetailsType[]
     */
    public function getSellingManagerTemplateDetailsArray()
    {
        return $this->sellingManagerTemplateDetailsArray;
    }

    /**
     * Sets a new sellingManagerTemplateDetailsArray
     *
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetailsArray
     * @return self
     */
    public function setSellingManagerTemplateDetailsArray(array $sellingManagerTemplateDetailsArray)
    {
        $this->sellingManagerTemplateDetailsArray = $sellingManagerTemplateDetailsArray;
        return $this;
    }

    /**
     * Gets as sellingManagerProductInventoryStatus
     *
     * Container for statistics about the product.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerProductInventoryStatusType
     */
    public function getSellingManagerProductInventoryStatus()
    {
        return $this->sellingManagerProductInventoryStatus;
    }

    /**
     * Sets a new sellingManagerProductInventoryStatus
     *
     * Container for statistics about the product.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @return self
     */
    public function setSellingManagerProductInventoryStatus(\Nogrod\eBaySDK\MerchantData\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus)
    {
        $this->sellingManagerProductInventoryStatus = $sellingManagerProductInventoryStatus;
        return $this;
    }

    /**
     * Gets as sellingManagerProductSpecifics
     *
     * Specifies an eBay category associated with the product,
     *  defines Item Specifics that are relevant to the product,
     *  and defines variations available for the product
     *  (which may be used to create multivariation listings).
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerProductSpecificsType
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
     *  (which may be used to create multivariation listings).
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     * @return self
     */
    public function setSellingManagerProductSpecifics(\Nogrod\eBaySDK\MerchantData\SellingManagerProductSpecificsType $sellingManagerProductSpecifics)
    {
        $this->sellingManagerProductSpecifics = $sellingManagerProductSpecifics;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellingManagerProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails", $value);
        }
        $value = $this->getSellingManagerTemplateDetailsArray();
        if (null !== $value && !empty($this->getSellingManagerTemplateDetailsArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerTemplateDetailsArray", array_map(function ($v) {
                return ["SellingManagerTemplateDetails" => $v];
            }, $value));
        }
        $value = $this->getSellingManagerProductInventoryStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductInventoryStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails');
        if (null !== $value) {
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\MerchantData\SellingManagerProductDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerTemplateDetailsArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSellingManagerTemplateDetailsArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SellingManagerTemplateDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductInventoryStatus');
        if (null !== $value) {
            $this->setSellingManagerProductInventoryStatus(\Nogrod\eBaySDK\MerchantData\SellingManagerProductInventoryStatusType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductSpecifics');
        if (null !== $value) {
            $this->setSellingManagerProductSpecifics(\Nogrod\eBaySDK\MerchantData\SellingManagerProductSpecificsType::fromKeyValue($value));
        }
    }
}
