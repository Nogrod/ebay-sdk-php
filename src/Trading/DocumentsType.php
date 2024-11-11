<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DocumentsType
 *
 * Type that provides an array of one or more regulatory documents associated with a listing for Regulatory Compliance.
 *  <br />
 *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective from December 13th, 2024, sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide document information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
 * XSD Type: DocumentsType
 */
class DocumentsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A regulatory document associated with the listing.<br /><br />Regulatory documents can be created and uploaded using the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API. A variety of document types can be provided for regulatory compliance. For a list of supported document types, see <a href = "/api-docs/commerce/media/types/api:DocumentTypeEnum" target="_blank">DocumentTypeEnum</a>.
     *
     * @var \Nogrod\eBaySDK\Trading\DocumentType[] $document
     */
    private $document = [

    ];

    /**
     * Adds as document
     *
     * A regulatory document associated with the listing.<br /><br />Regulatory documents can be created and uploaded using the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API. A variety of document types can be provided for regulatory compliance. For a list of supported document types, see <a href = "/api-docs/commerce/media/types/api:DocumentTypeEnum" target="_blank">DocumentTypeEnum</a>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DocumentType $document
     */
    public function addToDocument(\Nogrod\eBaySDK\Trading\DocumentType $document)
    {
        $this->document[] = $document;
        return $this;
    }

    /**
     * isset document
     *
     * A regulatory document associated with the listing.<br /><br />Regulatory documents can be created and uploaded using the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API. A variety of document types can be provided for regulatory compliance. For a list of supported document types, see <a href = "/api-docs/commerce/media/types/api:DocumentTypeEnum" target="_blank">DocumentTypeEnum</a>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * A regulatory document associated with the listing.<br /><br />Regulatory documents can be created and uploaded using the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API. A variety of document types can be provided for regulatory compliance. For a list of supported document types, see <a href = "/api-docs/commerce/media/types/api:DocumentTypeEnum" target="_blank">DocumentTypeEnum</a>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * A regulatory document associated with the listing.<br /><br />Regulatory documents can be created and uploaded using the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API. A variety of document types can be provided for regulatory compliance. For a list of supported document types, see <a href = "/api-docs/commerce/media/types/api:DocumentTypeEnum" target="_blank">DocumentTypeEnum</a>.
     *
     * @return \Nogrod\eBaySDK\Trading\DocumentType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * A regulatory document associated with the listing.<br /><br />Regulatory documents can be created and uploaded using the <a href = "/api-docs/commerce/media/resources/document/methods/createDocument" target="_blank">createDocument</a> method of the Media API. A variety of document types can be provided for regulatory compliance. For a list of supported document types, see <a href = "/api-docs/commerce/media/types/api:DocumentTypeEnum" target="_blank">DocumentTypeEnum</a>.
     *
     * @param \Nogrod\eBaySDK\Trading\DocumentType[] $document
     * @return self
     */
    public function setDocument(array $document)
    {
        $this->document = $document;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDocument();
        if (null !== $value && [] !== $this->getDocument()) {
            $writer->write(array_map(function ($v) {return ["Document" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Document');
        if (null !== $value) {
            $this->setDocument(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\DocumentType::fromKeyValue($v);}, $value));
        }
    }
}
