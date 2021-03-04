<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerItemAutomationRuleRequestType
 *
 * Retrieves the set of Selling Manager automation rules associated with an item. This call is subject to change without notice; the deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: GetSellingManagerItemAutomationRuleRequestType
 */
class GetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the listing whose Selling Manager automation rules you want to retrieve.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing whose Selling Manager automation rules you want to retrieve.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of the listing whose Selling Manager automation rules you want to retrieve.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
    }
}
