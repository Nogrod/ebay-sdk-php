<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetSellingManagerItemAutomationRuleRequestType
 *
 * Revises, or adds to, the set of Selling Manager automation rules associated with an item.
 *  <br>
 *  <br>
 *  This call is subject to change without notice; the deprecation process is inapplicable to this call. You must have a Selling Manager Pro subscription to use this call.
 *  <br>
 *  <br>
 *  Using this call, you can add an automated relisting rule. You also can add a Second Chance Offer rule. Note that automated relisting rules can only be set on templates. An automated relisting rule for an item is inherited from a template.
 *  <br>
 *  <br>
 *  This call also enables you to specify particular information about automation rules.
 *  <br>
 *  <br>
 *  If a node is not passed in the call, the setting for the corresponding
 *  automation rule remains unchanged.
 * XSD Type: SetSellingManagerItemAutomationRuleRequestType
 */
class SetSellingManagerItemAutomationRuleRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the listing whose automation rules you want to change.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The information for the automated relisting rule to be associated with the listing.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoRelistType $automatedRelistingRule
     */
    private $automatedRelistingRule = null;

    /**
     * The information for the automated Second Chance Offer rule to be associated with the listing.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     */
    private $automatedSecondChanceOfferRule = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the listing whose automation rules you want to change.
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
     * The unique identifier of the listing whose automation rules you want to change.
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
     * Gets as automatedRelistingRule
     *
     * The information for the automated relisting rule to be associated with the listing.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerAutoRelistType
     */
    public function getAutomatedRelistingRule()
    {
        return $this->automatedRelistingRule;
    }

    /**
     * Sets a new automatedRelistingRule
     *
     * The information for the automated relisting rule to be associated with the listing.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerAutoRelistType $automatedRelistingRule
     * @return self
     */
    public function setAutomatedRelistingRule(\Nogrod\eBaySDK\Trading\SellingManagerAutoRelistType $automatedRelistingRule)
    {
        $this->automatedRelistingRule = $automatedRelistingRule;
        return $this;
    }

    /**
     * Gets as automatedSecondChanceOfferRule
     *
     * The information for the automated Second Chance Offer rule to be associated with the listing.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType
     */
    public function getAutomatedSecondChanceOfferRule()
    {
        return $this->automatedSecondChanceOfferRule;
    }

    /**
     * Sets a new automatedSecondChanceOfferRule
     *
     * The information for the automated Second Chance Offer rule to be associated with the listing.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @return self
     */
    public function setAutomatedSecondChanceOfferRule(\Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule)
    {
        $this->automatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getAutomatedRelistingRule();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutomatedRelistingRule", $value);
        }
        $value = $this->getAutomatedSecondChanceOfferRule();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutomatedSecondChanceOfferRule", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutomatedRelistingRule');
        if (null !== $value) {
            $this->setAutomatedRelistingRule(\Nogrod\eBaySDK\Trading\SellingManagerAutoRelistType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutomatedSecondChanceOfferRule');
        if (null !== $value) {
            $this->setAutomatedSecondChanceOfferRule(\Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType::fromKeyValue($value));
        }
    }
}
