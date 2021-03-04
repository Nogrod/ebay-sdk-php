<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseReasonType
 *
 * containves the data that tells the reason for revising the item.
 * XSD Type: ReviseReasonType
 */
class ReviseReasonType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Specifies the reason for revising the item.
     *
     * @var string $reviseReasonCode
     */
    private $reviseReasonCode = null;

    /**
     * Containes the data specific to the revise.
     *
     * @var string $reviseReasonData
     */
    private $reviseReasonData = null;

    /**
     * Gets as reviseReasonCode
     *
     * Specifies the reason for revising the item.
     *
     * @return string
     */
    public function getReviseReasonCode()
    {
        return $this->reviseReasonCode;
    }

    /**
     * Sets a new reviseReasonCode
     *
     * Specifies the reason for revising the item.
     *
     * @param string $reviseReasonCode
     * @return self
     */
    public function setReviseReasonCode($reviseReasonCode)
    {
        $this->reviseReasonCode = $reviseReasonCode;
        return $this;
    }

    /**
     * Gets as reviseReasonData
     *
     * Containes the data specific to the revise.
     *
     * @return string
     */
    public function getReviseReasonData()
    {
        return $this->reviseReasonData;
    }

    /**
     * Sets a new reviseReasonData
     *
     * Containes the data specific to the revise.
     *
     * @param string $reviseReasonData
     * @return self
     */
    public function setReviseReasonData($reviseReasonData)
    {
        $this->reviseReasonData = $reviseReasonData;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getReviseReasonCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviseReasonCode", $value);
        }
        $value = $this->getReviseReasonData();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReviseReasonData", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseReasonCode');
        if (null !== $value) {
            $this->setReviseReasonCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReviseReasonData');
        if (null !== $value) {
            $this->setReviseReasonData($value);
        }
    }
}
