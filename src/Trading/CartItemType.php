<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CartItemType
 *
 * This type is deprecated.
 * XSD Type: CartItemType
 */
class CartItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * This field is deprecated.
     *
     * @var int $referenceID
     */
    private $referenceID = null;

    /**
     * This field is deprecated.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * Gets as item
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as referenceID
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * This field is deprecated.
     *
     * @param int $referenceID
     * @return self
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as action
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * This field is deprecated.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getReferenceID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReferenceID", $value);
        }
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Action", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReferenceID');
        if (null !== $value) {
            $this->setReferenceID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Action');
        if (null !== $value) {
            $this->setAction($value);
        }
    }
}
