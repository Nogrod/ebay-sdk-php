<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteSellingManagerItemAutomationRuleRequestType
 *
 * Removes the association of Selling Manager automation rules
 *  to an item. Returns the remaining rules in the response.
 *  <br><br>
 *  This call is subject to change without notice; the
 *  deprecation process is inapplicable to this call.
 * XSD Type: DeleteSellingManagerItemAutomationRuleRequestType
 */
class DeleteSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the listing from which to delete automation rules.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the listing.
     *
     * @var bool $deleteAutomatedRelistingRule
     */
    private $deleteAutomatedRelistingRule = null;

    /**
     * This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the listing.
     *
     * @var bool $deleteAutomatedSecondChanceOfferRule
     */
    private $deleteAutomatedSecondChanceOfferRule = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing from which to delete automation rules.
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
     * The unique identifier of the listing from which to delete automation rules.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as deleteAutomatedRelistingRule
     *
     * This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the listing.
     *
     * @return bool
     */
    public function getDeleteAutomatedRelistingRule()
    {
        return $this->deleteAutomatedRelistingRule;
    }

    /**
     * Sets a new deleteAutomatedRelistingRule
     *
     * This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the listing.
     *
     * @param bool $deleteAutomatedRelistingRule
     * @return self
     */
    public function setDeleteAutomatedRelistingRule($deleteAutomatedRelistingRule)
    {
        $this->deleteAutomatedRelistingRule = $deleteAutomatedRelistingRule;
        return $this;
    }

    /**
     * Gets as deleteAutomatedSecondChanceOfferRule
     *
     * This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the listing.
     *
     * @return bool
     */
    public function getDeleteAutomatedSecondChanceOfferRule()
    {
        return $this->deleteAutomatedSecondChanceOfferRule;
    }

    /**
     * Sets a new deleteAutomatedSecondChanceOfferRule
     *
     * This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the listing.
     *
     * @param bool $deleteAutomatedSecondChanceOfferRule
     * @return self
     */
    public function setDeleteAutomatedSecondChanceOfferRule($deleteAutomatedSecondChanceOfferRule)
    {
        $this->deleteAutomatedSecondChanceOfferRule = $deleteAutomatedSecondChanceOfferRule;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getDeleteAutomatedRelistingRule();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeleteAutomatedRelistingRule", $value);
        }
        $value = $this->getDeleteAutomatedSecondChanceOfferRule();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeleteAutomatedSecondChanceOfferRule", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeleteAutomatedRelistingRule');
        if (null !== $value) {
            $this->setDeleteAutomatedRelistingRule($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeleteAutomatedSecondChanceOfferRule');
        if (null !== $value) {
            $this->setDeleteAutomatedSecondChanceOfferRule($value);
        }
    }
}
