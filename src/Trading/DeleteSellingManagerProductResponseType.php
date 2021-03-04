<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteSellingManagerProductResponseType
 *
 * Response for deleting a Selling Manager product.
 * XSD Type: DeleteSellingManagerProductResponseType
 */
class DeleteSellingManagerProductResponseType extends AbstractResponseType
{
    /**
     * This container consists of the unique identifier and name of the Seller
     *  Manager product.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     */
    private $deletedSellingManagerProductDetails = null;

    /**
     * Gets as deletedSellingManagerProductDetails
     *
     * This container consists of the unique identifier and name of the Seller
     *  Manager product.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType
     */
    public function getDeletedSellingManagerProductDetails()
    {
        return $this->deletedSellingManagerProductDetails;
    }

    /**
     * Sets a new deletedSellingManagerProductDetails
     *
     * This container consists of the unique identifier and name of the Seller
     *  Manager product.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $deletedSellingManagerProductDetails
     * @return self
     */
    public function setDeletedSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType $deletedSellingManagerProductDetails)
    {
        $this->deletedSellingManagerProductDetails = $deletedSellingManagerProductDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDeletedSellingManagerProductDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedSellingManagerProductDetails", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedSellingManagerProductDetails');
        if (null !== $value) {
            $this->setDeletedSellingManagerProductDetails(\Nogrod\eBaySDK\Trading\SellingManagerProductDetailsType::fromKeyValue($value));
        }
    }
}
