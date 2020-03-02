<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingTipType
 *
 * This type is deprecated.
 * XSD Type: ListingTipType
 */
class ListingTipType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $listingTipID
     */
    private $listingTipID = null;

    /**
     * This field is deprecated.
     *
     * @var int $priority
     */
    private $priority = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingTipMessageType $message
     */
    private $message = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ListingTipFieldType $field
     */
    private $field = null;

    /**
     * Gets as listingTipID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getListingTipID()
    {
        return $this->listingTipID;
    }

    /**
     * Sets a new listingTipID
     *
     * This field is deprecated.
     *
     * @param string $listingTipID
     * @return self
     */
    public function setListingTipID($listingTipID)
    {
        $this->listingTipID = $listingTipID;
        return $this;
    }

    /**
     * Gets as priority
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * This field is deprecated.
     *
     * @param int $priority
     * @return self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as message
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingTipMessageType
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingTipMessageType $message
     * @return self
     */
    public function setMessage(\Nogrod\eBaySDK\Trading\ListingTipMessageType $message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Gets as field
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ListingTipFieldType
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ListingTipFieldType $field
     * @return self
     */
    public function setField(\Nogrod\eBaySDK\Trading\ListingTipFieldType $field)
    {
        $this->field = $field;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingTipID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingTipID", $value);
        }
        $value = $this->getPriority();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Priority", $value);
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Message", $value);
        }
        $value = $this->getField();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Field", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTipID');
        if (null !== $value) {
            $this->setListingTipID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Priority');
        if (null !== $value) {
            $this->setPriority($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message');
        if (null !== $value) {
            $this->setMessage(\Nogrod\eBaySDK\Trading\ListingTipMessageType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Field');
        if (null !== $value) {
            $this->setField(\Nogrod\eBaySDK\Trading\ListingTipFieldType::fromKeyValue($value));
        }
    }
}
