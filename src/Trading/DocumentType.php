<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DocumentType
 *
 * Type defining the unique identifier of a regulatory document associated with the listing.
 * XSD Type: DocumentType
 */
class DocumentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->documentID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DocumentID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DocumentType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'DocumentID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->documentID = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['DocumentID'] = $this->documentID;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
