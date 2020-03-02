<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BidAssistantListType
 *
 * This type is deprecated.
 * XSD Type: BidAssistantListType
 */
class BidAssistantListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var int $bidGroupID
     */
    private $bidGroupID = null;

    /**
     * This field is deprecated.
     *
     * @var bool $includeNotes
     */
    private $includeNotes = null;

    /**
     * Gets as bidGroupID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getBidGroupID()
    {
        return $this->bidGroupID;
    }

    /**
     * Sets a new bidGroupID
     *
     * This field is deprecated.
     *
     * @param int $bidGroupID
     * @return self
     */
    public function setBidGroupID($bidGroupID)
    {
        $this->bidGroupID = $bidGroupID;
        return $this;
    }

    /**
     * Gets as includeNotes
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getIncludeNotes()
    {
        return $this->includeNotes;
    }

    /**
     * Sets a new includeNotes
     *
     * This field is deprecated.
     *
     * @param bool $includeNotes
     * @return self
     */
    public function setIncludeNotes($includeNotes)
    {
        $this->includeNotes = $includeNotes;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBidGroupID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BidGroupID", $value);
        }
        $value = $this->getIncludeNotes();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeNotes", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BidGroupID');
        if (null !== $value) {
            $this->setBidGroupID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeNotes');
        if (null !== $value) {
            $this->setIncludeNotes($value);
        }
    }
}
