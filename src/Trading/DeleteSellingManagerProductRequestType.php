<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteSellingManagerProductRequestType
 *
 * Deletes a Selling Manager product.
 *  This call is subject to change without notice; the
 *  deprecation process is inapplicable to this call.
 * XSD Type: DeleteSellingManagerProductRequestType
 */
class DeleteSellingManagerProductRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the Selling Manager product to be deleted.
     *
     * @var int $productID
     */
    private $productID = null;

    /**
     * Gets as productID
     *
     * The unique identifier of the Selling Manager product to be deleted.
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
     * The unique identifier of the Selling Manager product to be deleted.
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID($value);
        }
    }
}
