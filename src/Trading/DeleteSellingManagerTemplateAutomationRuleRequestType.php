<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteSellingManagerTemplateAutomationRuleRequestType
 *
 * Removes the association of Selling Manager automation rules
 *  to a template. Returns the remaining rules in the response.
 *  This call is subject to change without notice; the
 *  deprecation process is inapplicable to this call.
 * XSD Type: DeleteSellingManagerTemplateAutomationRuleRequestType
 */
class DeleteSellingManagerTemplateAutomationRuleRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the Selling Manager template from which you want to remove automation rules.
     *  You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     *
     * @var int $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * This field is included and set to <code>true</code> if the user would like to disable the automated listing rule for the Selling Manager template.
     *
     * @var bool $deleteAutomatedListingRule
     */
    private $deleteAutomatedListingRule = null;

    /**
     * This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the Selling Manager template.
     *
     * @var bool $deleteAutomatedRelistingRule
     */
    private $deleteAutomatedRelistingRule = null;

    /**
     * This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the Selling Manager template.
     *
     * @var bool $deleteAutomatedSecondChanceOfferRule
     */
    private $deleteAutomatedSecondChanceOfferRule = null;

    /**
     * Gets as saleTemplateID
     *
     * The unique identifier of the Selling Manager template from which you want to remove automation rules.
     *  You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
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
     * The unique identifier of the Selling Manager template from which you want to remove automation rules.
     *  You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
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
     * Gets as deleteAutomatedListingRule
     *
     * This field is included and set to <code>true</code> if the user would like to disable the automated listing rule for the Selling Manager template.
     *
     * @return bool
     */
    public function getDeleteAutomatedListingRule()
    {
        return $this->deleteAutomatedListingRule;
    }

    /**
     * Sets a new deleteAutomatedListingRule
     *
     * This field is included and set to <code>true</code> if the user would like to disable the automated listing rule for the Selling Manager template.
     *
     * @param bool $deleteAutomatedListingRule
     * @return self
     */
    public function setDeleteAutomatedListingRule($deleteAutomatedListingRule)
    {
        $this->deleteAutomatedListingRule = $deleteAutomatedListingRule;
        return $this;
    }

    /**
     * Gets as deleteAutomatedRelistingRule
     *
     * This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the Selling Manager template.
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
     * This field is included and set to <code>true</code> if the user would like to disable the automated relisting rule for the Selling Manager template.
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
     * This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the Selling Manager template.
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
     * This field is included and set to <code>true</code> if the user would like to disable the automated Second Chance Offer rule for the Selling Manager template.
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
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
        }
        $value = $this->getDeleteAutomatedListingRule();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DeleteAutomatedListingRule", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID');
        if (null !== $value) {
            $this->setSaleTemplateID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DeleteAutomatedListingRule');
        if (null !== $value) {
            $this->setDeleteAutomatedListingRule($value);
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
