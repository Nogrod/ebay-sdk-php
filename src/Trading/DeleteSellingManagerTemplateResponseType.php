<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteSellingManagerTemplateResponseType
 *
 * Response for deleting a Selling Manager template.
 * XSD Type: DeleteSellingManagerTemplateResponseType
 */
class DeleteSellingManagerTemplateResponseType extends AbstractResponseType
{

    /**
     * The unique identifier of the Selling Manager template.
     *
     * @var string $deletedSaleTemplateID
     */
    private $deletedSaleTemplateID = null;

    /**
     * The name of the Selling Manager template.
     *
     * @var string $deletedSaleTemplateName
     */
    private $deletedSaleTemplateName = null;

    /**
     * Gets as deletedSaleTemplateID
     *
     * The unique identifier of the Selling Manager template.
     *
     * @return string
     */
    public function getDeletedSaleTemplateID()
    {
        return $this->deletedSaleTemplateID;
    }

    /**
     * Sets a new deletedSaleTemplateID
     *
     * The unique identifier of the Selling Manager template.
     *
     * @param string $deletedSaleTemplateID
     * @return self
     */
    public function setDeletedSaleTemplateID($deletedSaleTemplateID)
    {
        $this->deletedSaleTemplateID = $deletedSaleTemplateID;
        return $this;
    }

    /**
     * Gets as deletedSaleTemplateName
     *
     * The name of the Selling Manager template.
     *
     * @return string
     */
    public function getDeletedSaleTemplateName()
    {
        return $this->deletedSaleTemplateName;
    }

    /**
     * Sets a new deletedSaleTemplateName
     *
     * The name of the Selling Manager template.
     *
     * @param string $deletedSaleTemplateName
     * @return self
     */
    public function setDeletedSaleTemplateName($deletedSaleTemplateName)
    {
        $this->deletedSaleTemplateName = $deletedSaleTemplateName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDeletedSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedSaleTemplateID", $value);
        }
        $value = $this->getDeletedSaleTemplateName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeletedSaleTemplateName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedSaleTemplateID');
        if (null !== $value) {
            $this->setDeletedSaleTemplateID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeletedSaleTemplateName');
        if (null !== $value) {
            $this->setDeletedSaleTemplateName($value);
        }
    }
}
