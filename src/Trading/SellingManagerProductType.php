<?php

namespace Nogrod\eBaySDK\Trading;

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
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetailsArray
     */
    private $sellingManagerTemplateDetailsArray = null;

    /**
     * Container for statistics about the product.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     */
    private $sellingManagerProductInventoryStatus = null;

    /**
     * Specifies an eBay category associated with the product,
     *  defines Item Specifics that are relevant to the product,
     *  and defines variations available for the product
     *  (which may be used to create multivariation listings).
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType $sellingManagerProductSpecifics
     */
    private $sellingManagerProductSpecifics = null;

    /**
     * Gets as sellingManagerProductDetails
     *
     * Container for information about the product.
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
     * Container for information about the product.
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
     * Adds as sellingManagerTemplateDetails
     *
     * Contains the list of the seller's templates contained in the product, one
     *  SellingManagerTemplateType object per template.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails
     */
    public function addToSellingManagerTemplateDetailsArray(\Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails)
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
     * @return \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[]
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
     * @param \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetailsArray
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
     * @return \Nogrod\eBaySDK\Trading\SellingManagerProductInventoryStatusType
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
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus
     * @return self
     */
    public function setSellingManagerProductInventoryStatus(\Nogrod\eBaySDK\Trading\SellingManagerProductInventoryStatusType $sellingManagerProductInventoryStatus)
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
     *  (which may be used to create multivariation listings).
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
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerTemplateDetailsArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSellingManagerTemplateDetailsArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductInventoryStatus');
        if (null !== $value) {
            $this->setSellingManagerProductInventoryStatus(\Nogrod\eBaySDK\Trading\SellingManagerProductInventoryStatusType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductSpecifics');
        if (null !== $value) {
            $this->setSellingManagerProductSpecifics(\Nogrod\eBaySDK\Trading\SellingManagerProductSpecificsType::fromKeyValue($value));
        }
    }
}
