<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExternalAlertIDArrayType
 *
 * This type is deprecated.
 * XSD Type: ExternalAlertIDArrayType
 */
class ExternalAlertIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string[] $externalAlertID
     */
    private $externalAlertID = [

    ];

    /**
     * Adds as externalAlertID
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $externalAlertID
     */
    public function addToExternalAlertID($externalAlertID)
    {
        $this->externalAlertID[] = $externalAlertID;
        return $this;
    }

    /**
     * isset externalAlertID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExternalAlertID($index)
    {
        return isset($this->externalAlertID[$index]);
    }

    /**
     * unset externalAlertID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExternalAlertID($index)
    {
        unset($this->externalAlertID[$index]);
    }

    /**
     * Gets as externalAlertID
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getExternalAlertID()
    {
        return $this->externalAlertID;
    }

    /**
     * Sets a new externalAlertID
     *
     * This field is deprecated.
     *
     * @param string[] $externalAlertID
     * @return self
     */
    public function setExternalAlertID(array $externalAlertID)
    {
        $this->externalAlertID = $externalAlertID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExternalAlertID();
        if (null !== $value && !empty($this->getExternalAlertID())) {
            $writer->write(array_map(function ($v) {
                return ["ExternalAlertID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExternalAlertID', true);
        if (null !== $value && !empty($value)) {
            $this->setExternalAlertID($value);
        }
    }
}
