<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetRecommendationsResponseContainerType
 *
 * This type is deprecated.
 * XSD Type: GetRecommendationsResponseContainerType
 */
class GetRecommendationsResponseContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations
     */
    private $listingAnalyzerRecommendations = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\SIFFTASRecommendationsType $sIFFTASRecommendations
     */
    private $sIFFTASRecommendations = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\PricingRecommendationsType $pricingRecommendations
     */
    private $pricingRecommendations = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AttributeRecommendationsType $attributeRecommendations
     */
    private $attributeRecommendations = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductInfoType[] $productRecommendations
     */
    private $productRecommendations = null;

    /**
     * This field is deprecated.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * This field is deprecated.
     *
     * @var string $recommendations
     */
    private $recommendations = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ProductListingDetailsType $productListingDetails
     */
    private $productListingDetails = null;

    /**
     * This field is deprecated.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * Gets as listingAnalyzerRecommendations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingAnalyzerRecommendationsType
     */
    public function getListingAnalyzerRecommendations()
    {
        return $this->listingAnalyzerRecommendations;
    }

    /**
     * Sets a new listingAnalyzerRecommendations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations
     * @return self
     */
    public function setListingAnalyzerRecommendations(\Nogrod\eBaySDK\Trading\ListingAnalyzerRecommendationsType $listingAnalyzerRecommendations)
    {
        $this->listingAnalyzerRecommendations = $listingAnalyzerRecommendations;
        return $this;
    }

    /**
     * Gets as sIFFTASRecommendations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\SIFFTASRecommendationsType
     */
    public function getSIFFTASRecommendations()
    {
        return $this->sIFFTASRecommendations;
    }

    /**
     * Sets a new sIFFTASRecommendations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\SIFFTASRecommendationsType $sIFFTASRecommendations
     * @return self
     */
    public function setSIFFTASRecommendations(\Nogrod\eBaySDK\Trading\SIFFTASRecommendationsType $sIFFTASRecommendations)
    {
        $this->sIFFTASRecommendations = $sIFFTASRecommendations;
        return $this;
    }

    /**
     * Gets as pricingRecommendations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\PricingRecommendationsType
     */
    public function getPricingRecommendations()
    {
        return $this->pricingRecommendations;
    }

    /**
     * Sets a new pricingRecommendations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\PricingRecommendationsType $pricingRecommendations
     * @return self
     */
    public function setPricingRecommendations(\Nogrod\eBaySDK\Trading\PricingRecommendationsType $pricingRecommendations)
    {
        $this->pricingRecommendations = $pricingRecommendations;
        return $this;
    }

    /**
     * Gets as attributeRecommendations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AttributeRecommendationsType
     */
    public function getAttributeRecommendations()
    {
        return $this->attributeRecommendations;
    }

    /**
     * Sets a new attributeRecommendations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AttributeRecommendationsType $attributeRecommendations
     * @return self
     */
    public function setAttributeRecommendations(\Nogrod\eBaySDK\Trading\AttributeRecommendationsType $attributeRecommendations)
    {
        $this->attributeRecommendations = $attributeRecommendations;
        return $this;
    }

    /**
     * Adds as product
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ProductInfoType $product
     */
    public function addToProductRecommendations(\Nogrod\eBaySDK\Trading\ProductInfoType $product)
    {
        $this->productRecommendations[] = $product;
        return $this;
    }

    /**
     * isset productRecommendations
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProductRecommendations($index)
    {
        return isset($this->productRecommendations[$index]);
    }

    /**
     * unset productRecommendations
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProductRecommendations($index)
    {
        unset($this->productRecommendations[$index]);
    }

    /**
     * Gets as productRecommendations
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductInfoType[]
     */
    public function getProductRecommendations()
    {
        return $this->productRecommendations;
    }

    /**
     * Sets a new productRecommendations
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductInfoType[] $productRecommendations
     * @return self
     */
    public function setProductRecommendations(array $productRecommendations)
    {
        $this->productRecommendations = $productRecommendations;
        return $this;
    }

    /**
     * Gets as correlationID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * This field is deprecated.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Gets as recommendations
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getRecommendations()
    {
        return $this->recommendations;
    }

    /**
     * Sets a new recommendations
     *
     * This field is deprecated.
     *
     * @param string $recommendations
     * @return self
     */
    public function setRecommendations($recommendations)
    {
        $this->recommendations = $recommendations;
        return $this;
    }

    /**
     * Gets as productListingDetails
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ProductListingDetailsType
     */
    public function getProductListingDetails()
    {
        return $this->productListingDetails;
    }

    /**
     * Sets a new productListingDetails
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ProductListingDetailsType $productListingDetails
     * @return self
     */
    public function setProductListingDetails(\Nogrod\eBaySDK\Trading\ProductListingDetailsType $productListingDetails)
    {
        $this->productListingDetails = $productListingDetails;
        return $this;
    }

    /**
     * Gets as title
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * This field is deprecated.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingAnalyzerRecommendations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingAnalyzerRecommendations", $value);
        }
        $value = $this->getSIFFTASRecommendations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SIFFTASRecommendations", $value);
        }
        $value = $this->getPricingRecommendations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PricingRecommendations", $value);
        }
        $value = $this->getAttributeRecommendations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AttributeRecommendations", $value);
        }
        $value = $this->getProductRecommendations();
        if (null !== $value && !empty($this->getProductRecommendations())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductRecommendations", array_map(function ($v) {
                return ["Product" => $v];
            }, $value));
        }
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
        }
        $value = $this->getRecommendations();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Recommendations", $value);
        }
        $value = $this->getProductListingDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductListingDetails", $value);
        }
        $value = $this->getTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Title", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingAnalyzerRecommendations');
        if (null !== $value) {
            $this->setListingAnalyzerRecommendations(\Nogrod\eBaySDK\Trading\ListingAnalyzerRecommendationsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SIFFTASRecommendations');
        if (null !== $value) {
            $this->setSIFFTASRecommendations(\Nogrod\eBaySDK\Trading\SIFFTASRecommendationsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PricingRecommendations');
        if (null !== $value) {
            $this->setPricingRecommendations(\Nogrod\eBaySDK\Trading\PricingRecommendationsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AttributeRecommendations');
        if (null !== $value) {
            $this->setAttributeRecommendations(\Nogrod\eBaySDK\Trading\AttributeRecommendationsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductRecommendations', true);
        if (null !== $value && !empty($value)) {
            $this->setProductRecommendations(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ProductInfoType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Recommendations');
        if (null !== $value) {
            $this->setRecommendations($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductListingDetails');
        if (null !== $value) {
            $this->setProductListingDetails(\Nogrod\eBaySDK\Trading\ProductListingDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Title');
        if (null !== $value) {
            $this->setTitle($value);
        }
    }
}
