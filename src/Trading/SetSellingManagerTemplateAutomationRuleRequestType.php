<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetSellingManagerTemplateAutomationRuleRequestType
 *
 * Revises, or adds to, the Selling Manager automation rules associated with a template.
 *  <br>
 *  <br>
 *  This call is subject to change without notice; the deprecation process is inapplicable to this call. You must have a Selling Manager Pro subscription to use this call.
 *  <br>
 *  <br>
 *  Using this call, you can add either an automated listing or relisting rule, but not both. You also can add a Second Chance Offer rule.
 *  <br>
 *  <br>
 *  This call also enables you to specify particular information about automation rules.
 *  <br>
 *  <br>
 *  If a node is not passed in the call, the setting for the corresponding automation rule remains unchanged.
 * XSD Type: SetSellingManagerTemplateAutomationRuleRequestType
 */
class SetSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{

    /**
     * The ID of the Selling Manager template whose automation rules you want to change. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @var int $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * The information for the automated listing rule to be associated with the template.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoListType $automatedListingRule
     */
    private $automatedListingRule = null;

    /**
     * The information for the automated relisting rule to be associated with the template.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoRelistType $automatedRelistingRule
     */
    private $automatedRelistingRule = null;

    /**
     * The information for the automated Second Chance Offer rule to be associated with the template.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     */
    private $automatedSecondChanceOfferRule = null;

    /**
     * Gets as saleTemplateID
     *
     * The ID of the Selling Manager template whose automation rules you want to change. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @return int
     */
    public function getSaleTemplateID()
    {
        return $this->saleTemplateID;
    }

    /**
     * Sets a new saleTemplateID
     *
     * The ID of the Selling Manager template whose automation rules you want to change. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @param int $saleTemplateID
     * @return self
     */
    public function setSaleTemplateID($saleTemplateID)
    {
        $this->saleTemplateID = $saleTemplateID;
        return $this;
    }

    /**
     * Gets as automatedListingRule
     *
     * The information for the automated listing rule to be associated with the template.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerAutoListType
     */
    public function getAutomatedListingRule()
    {
        return $this->automatedListingRule;
    }

    /**
     * Sets a new automatedListingRule
     *
     * The information for the automated listing rule to be associated with the template.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerAutoListType $automatedListingRule
     * @return self
     */
    public function setAutomatedListingRule(\Nogrod\eBaySDK\Trading\SellingManagerAutoListType $automatedListingRule)
    {
        $this->automatedListingRule = $automatedListingRule;
        return $this;
    }

    /**
     * Gets as automatedRelistingRule
     *
     * The information for the automated relisting rule to be associated with the template.
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
     * The information for the automated relisting rule to be associated with the template.
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
     * The information for the automated Second Chance Offer rule to be associated with the template.
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
     * The information for the automated Second Chance Offer rule to be associated with the template.
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
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
        }
        $value = $this->getAutomatedListingRule();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutomatedListingRule", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID');
        if (null !== $value) {
            $this->setSaleTemplateID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutomatedListingRule');
        if (null !== $value) {
            $this->setAutomatedListingRule(\Nogrod\eBaySDK\Trading\SellingManagerAutoListType::fromKeyValue($value));
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
