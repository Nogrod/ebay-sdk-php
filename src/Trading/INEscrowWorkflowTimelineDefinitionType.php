<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing INEscrowWorkflowTimelineDefinitionType
 *
 * <span class="tablenote"><b>Note:</b>
 *  This type is deprecated since it is only applicable to the eBay India site, and this marketplace is no longer available.</span>
 * XSD Type: INEscrowWorkflowTimelineDefinitionType
 */
class INEscrowWorkflowTimelineDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\INEscrowWorkflowTimelineDefinitionType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
    }
}
