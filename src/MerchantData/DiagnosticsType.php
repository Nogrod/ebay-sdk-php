<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DiagnosticsType
 *
 * Contains a seller's preferences for listing items on Ebay Express.
 * XSD Type: DiagnosticsType
 */
class DiagnosticsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * only returns for if showdiag is defined in the header and the request is from internal IP
     *
     * @var string $rLogId
     */
    private $rLogId = null;

    /**
     * Gets as rLogId
     *
     * only returns for if showdiag is defined in the header and the request is from internal IP
     *
     * @return string
     */
    public function getRLogId()
    {
        return $this->rLogId;
    }

    /**
     * Sets a new rLogId
     *
     * only returns for if showdiag is defined in the header and the request is from internal IP
     *
     * @param string $rLogId
     * @return self
     */
    public function setRLogId($rLogId)
    {
        $this->rLogId = $rLogId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRLogId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}rLogId", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}rLogId');
        if (null !== $value) {
            $this->setRLogId($value);
        }
    }
}
