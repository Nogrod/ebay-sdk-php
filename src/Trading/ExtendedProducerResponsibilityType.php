<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendedProducerResponsibilityType
 *
 * This type is used by the <b>ExtendedProducerResponsibility</b> container, which provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as in France, this may be the importer of the item. For more information, see the <b>Extended Producer Responsibility for business sellers</b> page for your site (for example, <a href="https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314" target="_blank">https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314</a>).
 *  <br/><br/>For <b>GetItem</b> calls, this container is only returned to the listing owner, if the container is available.
 * XSD Type: ExtendedProducerResponsibilityType
 */
class ExtendedProducerResponsibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France). It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, the <b>EcoParticipationFee</b> in the <b>VariationExtendedProducerResponsibility</b> container is used for each variation in the listing, and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $ecoParticipationFee
     */
    private $ecoParticipationFee = null;

    /**
     * Gets as ecoParticipationFee
     *
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France). It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, the <b>EcoParticipationFee</b> in the <b>VariationExtendedProducerResponsibility</b> container is used for each variation in the listing, and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
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
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France). It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, the <b>EcoParticipationFee</b> in the <b>VariationExtendedProducerResponsibility</b> container is used for each variation in the listing, and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $ecoParticipationFee
     * @return self
     */
    public function setEcoParticipationFee(\Nogrod\eBaySDK\Trading\AmountType $ecoParticipationFee)
    {
        $this->ecoParticipationFee = $ecoParticipationFee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
