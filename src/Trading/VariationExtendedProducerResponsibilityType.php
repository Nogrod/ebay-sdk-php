<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationExtendedProducerResponsibilityType
 *
 * <span class="tablenote"><b>Note:</b> Support for extended producer responsibility regulations and custom policies will become active mid-December 2021. Additional resources such as the custom policies resource (for the <b>Account API</b>), the <b>getExtendedProducerResponsibilityPolicies</b> method (for the <b>Sell Metadata API</b>), and the <a href="https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311" target="_blank">Custom Policies</a> help page will also become active.</span>
 *  This type specifies variation-specific Extended Producer Responsibility information, specifically the <strong>EcoParticipationFee</strong>. For multiple-variation listings, the <b>EcoParticipationFee</b> in this container is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
 * XSD Type: VariationExtendedProducerResponsibilityType
 */
class VariationExtendedProducerResponsibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France) fee for each variation in a multiple-variation listing. It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, this <b>EcoParticipationFee</b> (in the <b>VariationExtendedProducerResponsibility</b> container) is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $ecoParticipationFee
     */
    private $ecoParticipationFee = null;

    /**
     * Gets as ecoParticipationFee
     *
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France) fee for each variation in a multiple-variation listing. It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, this <b>EcoParticipationFee</b> (in the <b>VariationExtendedProducerResponsibility</b> container) is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getEcoParticipationFee()
    {
        return $this->ecoParticipationFee;
    }

    /**
     * Sets a new ecoParticipationFee
     *
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France) fee for each variation in a multiple-variation listing. It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, this <b>EcoParticipationFee</b> (in the <b>VariationExtendedProducerResponsibility</b> container) is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $ecoParticipationFee
     * @return self
     */
    public function setEcoParticipationFee(\Nogrod\eBaySDK\Trading\AmountType $ecoParticipationFee)
    {
        $this->ecoParticipationFee = $ecoParticipationFee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEcoParticipationFee();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EcoParticipationFee", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EcoParticipationFee');
        if (null !== $value) {
            $this->setEcoParticipationFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
