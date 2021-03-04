<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSingleItemResponseType
 *
 * The base response type of the <b>GetSingleItem</b> call, which contains detailed information about one eBay item.
 * XSD Type: GetSingleItemResponseType
 */
class GetSingleItemResponseType extends AbstractResponseType
{
    /**
     * Contains details about the listing whose ID was specified in
     *  the request.
     *
     * @var \Nogrod\eBaySDK\Shopping\SimpleItemType $item
     */
    private $item = null;

    /**
     * Gets as item
     *
     * Contains details about the listing whose ID was specified in
     *  the request.
     *
     * @return \Nogrod\eBaySDK\Shopping\SimpleItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Contains details about the listing whose ID was specified in
     *  the request.
     *
     * @param \Nogrod\eBaySDK\Shopping\SimpleItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Shopping\SimpleItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Shopping\SimpleItemType::fromKeyValue($value));
        }
    }
}
