<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesAlertIDArrayType
 *
 * This type is deprecated.
 * XSD Type: MyMessagesAlertIDArrayType
 */
class MyMessagesAlertIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string[] $alertID
     */
    private $alertID = [
        
    ];

    /**
     * Adds as alertID
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $alertID
     */
    public function addToAlertID($alertID)
    {
        $this->alertID[] = $alertID;
        return $this;
    }

    /**
     * isset alertID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlertID($index)
    {
        return isset($this->alertID[$index]);
    }

    /**
     * unset alertID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlertID($index)
    {
        unset($this->alertID[$index]);
    }

    /**
     * Gets as alertID
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getAlertID()
    {
        return $this->alertID;
    }

    /**
     * Sets a new alertID
     *
     * This field is deprecated.
     *
     * @param string $alertID
     * @return self
     */
    public function setAlertID(array $alertID)
    {
        $this->alertID = $alertID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAlertID();
        if (null !== $value && !empty($this->getAlertID())) {
            $writer->write(array_map(function ($v) {
                return ["AlertID" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertID', true);
        if (null !== $value && !empty($value)) {
            $this->setAlertID($value);
        }
    }
}
