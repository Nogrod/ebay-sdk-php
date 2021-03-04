<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityAffiliationsType
 *
 * This type is deprecated.
 * XSD Type: CharityAffiliationsType
 */
class CharityAffiliationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\CharityIDType[] $charityID
     */
    private $charityID = [
        
    ];

    /**
     * Adds as charityID
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CharityIDType $charityID
     */
    public function addToCharityID(\Nogrod\eBaySDK\Trading\CharityIDType $charityID)
    {
        $this->charityID[] = $charityID;
        return $this;
    }

    /**
     * isset charityID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharityID($index)
    {
        return isset($this->charityID[$index]);
    }

    /**
     * unset charityID
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharityID($index)
    {
        unset($this->charityID[$index]);
    }

    /**
     * Gets as charityID
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\CharityIDType[]
     */
    public function getCharityID()
    {
        return $this->charityID;
    }

    /**
     * Sets a new charityID
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\CharityIDType[] $charityID
     * @return self
     */
    public function setCharityID(array $charityID)
    {
        $this->charityID = $charityID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCharityID();
        if (null !== $value && !empty($this->getCharityID())) {
            $writer->write(array_map(function ($v) {
                return ["CharityID" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID', true);
        if (null !== $value && !empty($value)) {
            $this->setCharityID(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CharityIDType::fromKeyValue($v);
            }, $value));
        }
    }
}
