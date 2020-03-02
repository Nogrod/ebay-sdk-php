<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SaveItemToSellingManagerTemplateResponseType
 *
 * The base response of the <b>SaveItemToSellingManagerTemplate</b> call. A successful call will return a <b>TemplateID</b> value for the newly-created Selling Manager template.
 * XSD Type: SaveItemToSellingManagerTemplateResponseType
 */
class SaveItemToSellingManagerTemplateResponseType extends AbstractResponseType
{

    /**
     * The unique identifier of the newly-created Selling Manager template. As long as the call was successful, this field is always returned.
     *
     * @var int $templateID
     */
    private $templateID = null;

    /**
     * Gets as templateID
     *
     * The unique identifier of the newly-created Selling Manager template. As long as the call was successful, this field is always returned.
     *
     * @return int
     */
    public function getTemplateID()
    {
        return $this->templateID;
    }

    /**
     * Sets a new templateID
     *
     * The unique identifier of the newly-created Selling Manager template. As long as the call was successful, this field is always returned.
     *
     * @param int $templateID
     * @return self
     */
    public function setTemplateID($templateID)
    {
        $this->templateID = $templateID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TemplateID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TemplateID');
        if (null !== $value) {
            $this->setTemplateID($value);
        }
    }
}
