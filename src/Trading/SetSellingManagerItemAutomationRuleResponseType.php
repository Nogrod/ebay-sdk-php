<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetSellingManagerItemAutomationRuleResponseType
 *
 * Contains the set of automation rules associated with the specified item.
 * XSD Type: SetSellingManagerItemAutomationRuleResponseType
 */
class SetSellingManagerItemAutomationRuleResponseType extends AbstractResponseType
{

    /**
     * Contains the automated listing rule associated with this item.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoListType $automatedListingRule
     */
    private $automatedListingRule = null;

    /**
     * Contains the automated relisting rule associated with this item.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoRelistType $automatedRelistingRule
     */
    private $automatedRelistingRule = null;

    /**
     * Contains the automated Second Chance Offer rule associated with this item.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     */
    private $automatedSecondChanceOfferRule = null;

    /**
     * Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fees
     */
    private $fees = null;

    /**
     * Gets as automatedListingRule
     *
     * Contains the automated listing rule associated with this item.
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
     * Contains the automated listing rule associated with this item.
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
     * Contains the automated relisting rule associated with this item.
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
     * Contains the automated relisting rule associated with this item.
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
     * Contains the automated Second Chance Offer rule associated with this item.
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
     * Contains the automated Second Chance Offer rule associated with this item.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule
     * @return self
     */
    public function setAutomatedSecondChanceOfferRule(\Nogrod\eBaySDK\Trading\SellingManagerAutoSecondChanceOfferType $automatedSecondChanceOfferRule)
    {
        $this->automatedSecondChanceOfferRule = $automatedSecondChanceOfferRule;
        return $this;
    }

    /**
     * Adds as fee
     *
     * Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeeType $fee
     */
    public function addToFees(\Nogrod\eBaySDK\Trading\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     *
     * @return \Nogrod\eBaySDK\Trading\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Contains fees that may be incurred when items are listed using the automation rules (e.g., a scheduled listing fee). Use of an automation rule does not in itself have a fee, but use can result in a fee.
     *
     * @param \Nogrod\eBaySDK\Trading\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
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
        $value = $this->getFees();
        if (null !== $value && !empty($this->getFees())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fees", array_map(function ($v) {
                return ["Fee" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fees', true);
        if (null !== $value && !empty($value)) {
            $this->setFees(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);
            }, $value));
        }
    }
}
