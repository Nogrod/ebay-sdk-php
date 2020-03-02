<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomListingHeaderLinkType
 *
 * Custom listing header link.
 * XSD Type: StoreCustomListingHeaderLinkType
 */
class StoreCustomListingHeaderLinkType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Link ID for the listing header link. The ID is used when the link
     *  is a custom category or for a custom page, and it is not needed
     *  when the LinkType property is "AboutMe" or "None".
     *
     * @var int $linkID
     */
    private $linkID = null;

    /**
     * Order in which to show the custom listing header link.
     *
     * @var int $order
     */
    private $order = null;

    /**
     * Type of link to include in the custom listing header.
     *
     * @var string $linkType
     */
    private $linkType = null;

    /**
     * Gets as linkID
     *
     * Link ID for the listing header link. The ID is used when the link
     *  is a custom category or for a custom page, and it is not needed
     *  when the LinkType property is "AboutMe" or "None".
     *
     * @return int
     */
    public function getLinkID()
    {
        return $this->linkID;
    }

    /**
     * Sets a new linkID
     *
     * Link ID for the listing header link. The ID is used when the link
     *  is a custom category or for a custom page, and it is not needed
     *  when the LinkType property is "AboutMe" or "None".
     *
     * @param int $linkID
     * @return self
     */
    public function setLinkID($linkID)
    {
        $this->linkID = $linkID;
        return $this;
    }

    /**
     * Gets as order
     *
     * Order in which to show the custom listing header link.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * Order in which to show the custom listing header link.
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as linkType
     *
     * Type of link to include in the custom listing header.
     *
     * @return string
     */
    public function getLinkType()
    {
        return $this->linkType;
    }

    /**
     * Sets a new linkType
     *
     * Type of link to include in the custom listing header.
     *
     * @param string $linkType
     * @return self
     */
    public function setLinkType($linkType)
    {
        $this->linkType = $linkType;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLinkID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LinkID", $value);
        }
        $value = $this->getOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Order", $value);
        }
        $value = $this->getLinkType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LinkType", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LinkID');
        if (null !== $value) {
            $this->setLinkID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Order');
        if (null !== $value) {
            $this->setOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LinkType');
        if (null !== $value) {
            $this->setLinkType($value);
        }
    }
}
