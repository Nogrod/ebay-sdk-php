<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing ListingTipMessageType
 *
 * This type is deprecated.
 * XSD Type: ListingTipMessageType
 */
class ListingTipMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $listingTipMessageID
     */
    private $listingTipMessageID = null;

    /**
     * This field is deprecated.
     *
     * @var string $shortMessage
     */
    private $shortMessage = null;

    /**
     * This field is deprecated.
     *
     * @var string $longMessage
     */
    private $longMessage = null;

    /**
     * This field is deprecated.
     *
     * @var string $helpURLPath
     */
    private $helpURLPath = null;

    /**
     * Gets as listingTipMessageID
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getListingTipMessageID()
    {
        return $this->listingTipMessageID;
    }

    /**
     * Sets a new listingTipMessageID
     *
     * This field is deprecated.
     *
     * @param string $listingTipMessageID
     * @return self
     */
    public function setListingTipMessageID($listingTipMessageID)
    {
        $this->listingTipMessageID = $listingTipMessageID;
        return $this;
    }

    /**
     * Gets as shortMessage
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getShortMessage()
    {
        return $this->shortMessage;
    }

    /**
     * Sets a new shortMessage
     *
     * This field is deprecated.
     *
     * @param string $shortMessage
     * @return self
     */
    public function setShortMessage($shortMessage)
    {
        $this->shortMessage = $shortMessage;
        return $this;
    }

    /**
     * Gets as longMessage
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getLongMessage()
    {
        return $this->longMessage;
    }

    /**
     * Sets a new longMessage
     *
     * This field is deprecated.
     *
     * @param string $longMessage
     * @return self
     */
    public function setLongMessage($longMessage)
    {
        $this->longMessage = $longMessage;
        return $this;
    }

    /**
     * Gets as helpURLPath
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getHelpURLPath()
    {
        return $this->helpURLPath;
    }

    /**
     * Sets a new helpURLPath
     *
     * This field is deprecated.
     *
     * @param string $helpURLPath
     * @return self
     */
    public function setHelpURLPath($helpURLPath)
    {
        $this->helpURLPath = $helpURLPath;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getListingTipMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingTipMessageID", $value);
        }
        $value = $this->getShortMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShortMessage", $value);
        }
        $value = $this->getLongMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LongMessage", $value);
        }
        $value = $this->getHelpURLPath();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HelpURLPath", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingTipMessageID');
        if (null !== $value) {
            $this->setListingTipMessageID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShortMessage');
        if (null !== $value) {
            $this->setShortMessage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LongMessage');
        if (null !== $value) {
            $this->setLongMessage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HelpURLPath');
        if (null !== $value) {
            $this->setHelpURLPath($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
