<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddItemRequestContainerType
 *
 * Type defining the <b>AddItemRequestContainer</b> containers that are used in an <b>AddItems</b> call. An <b>AddItemRequestContainer</b> container is required for each item being created through an <b>AddItems</b> call. Each item being created through an <b>AddItems</b> call is identified through a unique <b>AddItemRequestContainer.MessageID</b> value that is defined by the seller.
 * XSD Type: AddItemRequestContainerType
 */
class AddItemRequestContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container holding all values that define a new listing. One <b>Item</b>
     *  container is required for each <b>AddItemRequestContainer</b>.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ItemType $item
     */
    private $item = null;

    /**
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>AddItems</b>, a unique <b>MessageID</b> value is required for
     *  each <b>AddItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddItemResponseContainer</b> container is used to correlate each
     *  item request container with its corresponding response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * Gets as item
     *
     * Container holding all values that define a new listing. One <b>Item</b>
     *  container is required for each <b>AddItemRequestContainer</b>.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Container holding all values that define a new listing. One <b>Item</b>
     *  container is required for each <b>AddItemRequestContainer</b>.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\MerchantData\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as messageID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>AddItems</b>, a unique <b>MessageID</b> value is required for
     *  each <b>AddItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddItemResponseContainer</b> container is used to correlate each
     *  item request container with its corresponding response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @return string
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>AddItems</b>, a unique <b>MessageID</b> value is required for
     *  each <b>AddItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>AddItemResponseContainer</b> container is used to correlate each
     *  item request container with its corresponding response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *
     * @param string $messageID
     * @return self
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
        }
        $value = $this->getMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $value);
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
            $this->setItem(\Nogrod\eBaySDK\MerchantData\ItemType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID');
        if (null !== $value) {
            $this->setMessageID($value);
        }
    }
}
