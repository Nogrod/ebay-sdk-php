<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteSellingManagerTemplateRequestType
 *
 * Deletes a Selling Manager template.
 *  This call is subject to change without notice; the
 *  deprecation process is inapplicable to this call.
 * XSD Type: DeleteSellingManagerTemplateRequestType
 */
class DeleteSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * Unique identifier of the Selling Manager template to be deleted.
     *  You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @var int $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * Gets as saleTemplateID
     *
     * Unique identifier of the Selling Manager template to be deleted.
     *  You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
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
     * Unique identifier of the Selling Manager template to be deleted.
     *  You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @param int $saleTemplateID
     * @return self
     */
    public function setSaleTemplateID($saleTemplateID)
    {
        $this->saleTemplateID = $saleTemplateID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
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
    }
}
