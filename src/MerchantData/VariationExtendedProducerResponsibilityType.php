<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationExtendedProducerResponsibilityType
 *
 * This type specifies variation-specific Extended Producer Responsibility information, specifically the <strong>EcoParticipationFee</strong>. For multiple-variation listings, this type's <b>EcoParticipationFee</b> is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> type. This type is supported by a limited number of sites and specific categories. Use the <a href="../../../../../api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies" target="_blank">getExtendedProducerResponsibilityPolicies</a> method of the <b>Sell Metadata API</b> to retrieve valid categories for a site. <br/><br/>For <b>GetItem</b> calls, this container is only returned to the listing owner, if the container is available.
 * XSD Type: VariationExtendedProducerResponsibilityType
 */
class VariationExtendedProducerResponsibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France) fee for each variation in a multiple-variation listing. It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, this <b>EcoParticipationFee</b> (in the <b>VariationExtendedProducerResponsibility</b> container) is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $ecoParticipationFee
     */
    private $ecoParticipationFee = null;

    /**
     * Gets as ecoParticipationFee
     *
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France) fee for each variation in a multiple-variation listing. It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, this <b>EcoParticipationFee</b> (in the <b>VariationExtendedProducerResponsibility</b> container) is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
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
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $ecoParticipationFee
     * @return self
     */
    public function setEcoParticipationFee(\Nogrod\eBaySDK\MerchantData\AmountType $ecoParticipationFee)
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
            $this->setEcoParticipationFee(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
    }
}
