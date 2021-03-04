<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerTemplateDetailsType
 *
 * Describes a Selling Manager Template
 * XSD Type: SellingManagerTemplateDetailsType
 */
class SellingManagerTemplateDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * ID of the template.
     *
     * @var string $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * Name of the template.
     *
     * @var string $saleTemplateName
     */
    private $saleTemplateName = null;

    /**
     * Success ratio.
     *
     * @var float $successPercent
     */
    private $successPercent = null;

    /**
     * The details of the product that this template belongs to.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $sellingManagerProductDetails
     */
    private $sellingManagerProductDetails = null;

    /**
     * ItemType object that contains the data for the specified template.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $template
     */
    private $template = null;

    /**
     * Gets as saleTemplateID
     *
     * ID of the template.
     *
     * @return string
     */
    public function getSaleTemplateID()
    {
        return $this->saleTemplateID;
    }

    /**
     * Sets a new saleTemplateID
     *
     * ID of the template.
     *
     * @param string $saleTemplateID
     * @return self
     */
    public function setSaleTemplateID($saleTemplateID)
    {
        $this->saleTemplateID = $saleTemplateID;
        return $this;
    }

    /**
     * Gets as saleTemplateName
     *
     * Name of the template.
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
     * Name of the template.
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
     * Gets as successPercent
     *
     * Success ratio.
     *
     * @return float
     */
    public function getSuccessPercent()
    {
        return $this->successPercent;
    }

    /**
     * Sets a new successPercent
     *
     * Success ratio.
     *
     * @param float $successPercent
     * @return self
     */
    public function setSuccessPercent($successPercent)
    {
        $this->successPercent = $successPercent;
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

    /**
     * Gets as template
     *
     * ItemType object that contains the data for the specified template.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Sets a new template
     *
     * ItemType object that contains the data for the specified template.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $template
     * @return self
     */
    public function setTemplate(\Nogrod\eBaySDK\Trading\ItemType $template)
    {
        $this->template = $template;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
        }
        $value = $this->getSaleTemplateName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateName", $value);
        }
        $value = $this->getSuccessPercent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SuccessPercent", $value);
        }
        $value = $this->getSellingManagerProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails", $value);
        }
        $value = $this->getTemplate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Template", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID');
        if (null !== $value) {
            $this->setSaleTemplateID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateName');
        if (null !== $value) {
            $this->setSaleTemplateName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SuccessPercent');
        if (null !== $value) {
            $this->setSuccessPercent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerProductDetails');
        if (null !== $value) {
            $this->setSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Template');
        if (null !== $value) {
            $this->setTemplate(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
    }
}
