<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetSellingManagerSaleRecordResponseType
 *
 * The base response to a <b>GetSellingManagerSaleRecord</b> call.
 * XSD Type: GetSellingManagerSaleRecordResponseType
 */
class GetSellingManagerSaleRecordResponseType extends AbstractResponseType
{

    /**
     * Contains the data in a Selling Manager Sale Record.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $sellingManagerSoldOrder
     */
    private $sellingManagerSoldOrder = null;

    /**
     * Gets as sellingManagerSoldOrder
     *
     * Contains the data in a Selling Manager Sale Record.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType
     */
    public function getSellingManagerSoldOrder()
    {
        return $this->sellingManagerSoldOrder;
    }

    /**
     * Sets a new sellingManagerSoldOrder
     *
     * Contains the data in a Selling Manager Sale Record.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $sellingManagerSoldOrder
     * @return self
     */
    public function setSellingManagerSoldOrder(\Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType $sellingManagerSoldOrder)
    {
        $this->sellingManagerSoldOrder = $sellingManagerSoldOrder;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellingManagerSoldOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerSoldOrder", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerSoldOrder');
        if (null !== $value) {
            $this->setSellingManagerSoldOrder(\Nogrod\eBaySDK\Trading\SellingManagerSoldOrderType::fromKeyValue($value));
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
