<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharacteristicSetIDsType
 *
 * This type is deprecated.
 * XSD Type: CharacteristicSetIDsType
 */
class CharacteristicSetIDsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string[] $iD
     */
    private $iD = [
        
    ];

    /**
     * Adds as iD
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $iD
     */
    public function addToID($iD)
    {
        $this->iD[] = $iD;
        return $this;
    }

    /**
     * isset iD
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetID($index)
    {
        return isset($this->iD[$index]);
    }

    /**
     * unset iD
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetID($index)
    {
        unset($this->iD[$index]);
    }

    /**
     * Gets as iD
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * This field is deprecated.
     *
     * @param string[] $iD
     * @return self
     */
    public function setID(array $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getID();
        if (null !== $value && !empty($this->getID())) {
            $writer->write(array_map(function ($v) {
                return ["ID" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ID', true);
        if (null !== $value && !empty($value)) {
            $this->setID($value);
        }
    }
}
