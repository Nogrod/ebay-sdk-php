<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DocumentType
 *
 * Type defining the unique identifier of a regulatory document associated with the listing.
 * XSD Type: DocumentType
 */
class DocumentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier of a regulatory document associated with the listing. <br /><br /> This value can be found in the response of the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API.
     *
     * @var string $documentID
     */
    private $documentID = null;

    /**
     * Gets as documentID
     *
     * The unique identifier of a regulatory document associated with the listing. <br /><br /> This value can be found in the response of the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API.
     *
     * @return string
     */
    public function getDocumentID()
    {
        return $this->documentID;
    }

    /**
     * Sets a new documentID
     *
     * The unique identifier of a regulatory document associated with the listing. <br /><br /> This value can be found in the response of the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API.
     *
     * @param string $documentID
     * @return self
     */
    public function setDocumentID($documentID)
    {
        $this->documentID = $documentID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDocumentID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DocumentID", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DocumentID');
        if (null !== $value) {
            $this->setDocumentID($value);
        }
    }
}
