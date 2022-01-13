<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendedProducerResponsibilityType
 *
 * <span class="tablenote"><b>Note:</b> Support for extended producer responsibility regulations and custom policies will become active mid-December 2021. Additional resources such as the custom policies resource (for the <b>Account API</b>), the <b>getExtendedProducerResponsibilityPolicies</b> method (for the <b>Sell Metadata API</b>), and the <a href="https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311" target="_blank">Custom Policies</a> help page will also become active.</span>
 *  This type is used by the <b>ExtendedProducerResponsibility</b> container, which provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as in France, this may be the importer of the item.
 * XSD Type: ExtendedProducerResponsibilityType
 */
class ExtendedProducerResponsibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This ID is the Unique Identifier of the producer related to the item. For instance, if the seller is selling a cell phone, it is the ID related to the cell phone.
     *
     * @var string $producerProductID
     */
    private $producerProductID = null;

    /**
     * This ID is the Unique Identifier of the producer of any packaging related to the product added by the seller. This does not include packaging in which the product is shipped (see <b>ShipmentPackageID</b>). For instance, if the seller adds bubble wrap, it is the ID related to the bubble wrap.
     *
     * @var string $productPackageID
     */
    private $productPackageID = null;

    /**
     * This ID is the Unique Identifier of the producer of any packaging used by the seller to ship the item. This does not include non-shipping packaging added to the product (see <b>ProductPackageID</b>). This ID is required when the seller uses packaging to ship the item. For instance, if the seller uses a different box to ship the item, it is the ID related to the box.
     *
     * @var string $shipmentPackageID
     */
    private $shipmentPackageID = null;

    /**
     * This ID is the Unique Identifier of the producer of any paper added to the parcel of the item by the seller. For example, this ID concerns any notice, leaflet, or paper that the seller adds to a cell phone parcel.
     *
     * @var string $productDocumentationID
     */
    private $productDocumentationID = null;

    /**
     * This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France). It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, the <b>EcoParticipationFee</b> in the <b>VariationExtendedProducerResponsibility</b> container is used for each variation in the listing, and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $ecoParticipationFee
     */
    private $ecoParticipationFee = null;

    /**
     * Gets as producerProductID
     *
     * This ID is the Unique Identifier of the producer related to the item. For instance, if the seller is selling a cell phone, it is the ID related to the cell phone.
     *
     * @return string
     */
    public function getProducerProductID()
    {
        return $this->producerProductID;
    }

    /**
     * Sets a new producerProductID
     *
     * This ID is the Unique Identifier of the producer related to the item. For instance, if the seller is selling a cell phone, it is the ID related to the cell phone.
     *
     * @param string $producerProductID
     * @return self
     */
    public function setProducerProductID($producerProductID)
    {
        $this->producerProductID = $producerProductID;
        return $this;
    }

    /**
     * Gets as productPackageID
     *
     * This ID is the Unique Identifier of the producer of any packaging related to the product added by the seller. This does not include packaging in which the product is shipped (see <b>ShipmentPackageID</b>). For instance, if the seller adds bubble wrap, it is the ID related to the bubble wrap.
     *
     * @return string
     */
    public function getProductPackageID()
    {
        return $this->productPackageID;
    }

    /**
     * Sets a new productPackageID
     *
     * This ID is the Unique Identifier of the producer of any packaging related to the product added by the seller. This does not include packaging in which the product is shipped (see <b>ShipmentPackageID</b>). For instance, if the seller adds bubble wrap, it is the ID related to the bubble wrap.
     *
     * @param string $productPackageID
     * @return self
     */
    public function setProductPackageID($productPackageID)
    {
        $this->productPackageID = $productPackageID;
        return $this;
    }

    /**
     * Gets as shipmentPackageID
     *
     * This ID is the Unique Identifier of the producer of any packaging used by the seller to ship the item. This does not include non-shipping packaging added to the product (see <b>ProductPackageID</b>). This ID is required when the seller uses packaging to ship the item. For instance, if the seller uses a different box to ship the item, it is the ID related to the box.
     *
     * @return string
     */
    public function getShipmentPackageID()
    {
        return $this->shipmentPackageID;
    }

    /**
     * Sets a new shipmentPackageID
     *
     * This ID is the Unique Identifier of the producer of any packaging used by the seller to ship the item. This does not include non-shipping packaging added to the product (see <b>ProductPackageID</b>). This ID is required when the seller uses packaging to ship the item. For instance, if the seller uses a different box to ship the item, it is the ID related to the box.
     *
     * @param string $shipmentPackageID
     * @return self
     */
    public function setShipmentPackageID($shipmentPackageID)
    {
        $this->shipmentPackageID = $shipmentPackageID;
        return $this;
    }

    /**
     * Gets as productDocumentationID
     *
     * This ID is the Unique Identifier of the producer of any paper added to the parcel of the item by the seller. For example, this ID concerns any notice, leaflet, or paper that the seller adds to a cell phone parcel.
     *
     * @return string
     */
    public function getProductDocumentationID()
    {
        return $this->productDocumentationID;
    }

    /**
     * Sets a new productDocumentationID
     *
     * This ID is the Unique Identifier of the producer of any paper added to the parcel of the item by the seller. For example, this ID concerns any notice, leaflet, or paper that the seller adds to a cell phone parcel.
     *
     * @param string $productDocumentationID
     * @return self
     */
    public function setProductDocumentationID($productDocumentationID)
    {
        $this->productDocumentationID = $productDocumentationID;
        return $this;
    }

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProducerProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProducerProductID", $value);
        }
        $value = $this->getProductPackageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductPackageID", $value);
        }
        $value = $this->getShipmentPackageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipmentPackageID", $value);
        }
        $value = $this->getProductDocumentationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductDocumentationID", $value);
        }
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProducerProductID');
        if (null !== $value) {
            $this->setProducerProductID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductPackageID');
        if (null !== $value) {
            $this->setProductPackageID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentPackageID');
        if (null !== $value) {
            $this->setShipmentPackageID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductDocumentationID');
        if (null !== $value) {
            $this->setProductDocumentationID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EcoParticipationFee');
        if (null !== $value) {
            $this->setEcoParticipationFee(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
