<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerDiscountType
 *
 * Type that defines the <b>SellerDiscount</b> container, which contains the ID,
 *  name, and amount of the seller discount.
 * XSD Type: SellerDiscountType
 */
class SellerDiscountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Unique identifier for a seller discount campaign. This ID is automatically
     *  created when the seller creates the discount campaign. This field is always returned
     *  with the <b>SellerDiscount</b> container.
     *
     * @var int $campaignID
     */
    private $campaignID = null;

    /**
     * The name of the seller discount campaign. This field will only be
     *  returned with the <b>SellerDiscount</b> container if defined
     *  for the seller discount campaign.
     *
     * @var string $campaignDisplayName
     */
    private $campaignDisplayName = null;

    /**
     * The dollar amount of the order line item discount. The original purchase price (denoted
     *  in <b>OriginalItemPrice</b>) will be reduced by this value. The amount of the
     *  item discount will depend on the rules defined in the the seller discount
     *  campaign.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Prior to Version 895, this field worked a little differently. Instead of this field showing the amount of the discount, it was actually showing the final item price after the discount was applied. So, if an item price is 10.0 dollars and the discount is 2.0 dollars, someone using Version 895 (and going forward) will see a value of '2.0' (amount of the discount) in this field, but anyone using Version 893 or lower will see a value of '8.0' (item price after discount) in this field.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $itemDiscountAmount
     */
    private $itemDiscountAmount = null;

    /**
     * The dollar amount of the shipping discount applied to the order line item.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $shippingDiscountAmount
     */
    private $shippingDiscountAmount = null;

    /**
     * Gets as campaignID
     *
     * Unique identifier for a seller discount campaign. This ID is automatically
     *  created when the seller creates the discount campaign. This field is always returned
     *  with the <b>SellerDiscount</b> container.
     *
     * @return int
     */
    public function getCampaignID()
    {
        return $this->campaignID;
    }

    /**
     * Sets a new campaignID
     *
     * Unique identifier for a seller discount campaign. This ID is automatically
     *  created when the seller creates the discount campaign. This field is always returned
     *  with the <b>SellerDiscount</b> container.
     *
     * @param int $campaignID
     * @return self
     */
    public function setCampaignID($campaignID)
    {
        $this->campaignID = $campaignID;
        return $this;
    }

    /**
     * Gets as campaignDisplayName
     *
     * The name of the seller discount campaign. This field will only be
     *  returned with the <b>SellerDiscount</b> container if defined
     *  for the seller discount campaign.
     *
     * @return string
     */
    public function getCampaignDisplayName()
    {
        return $this->campaignDisplayName;
    }

    /**
     * Sets a new campaignDisplayName
     *
     * The name of the seller discount campaign. This field will only be
     *  returned with the <b>SellerDiscount</b> container if defined
     *  for the seller discount campaign.
     *
     * @param string $campaignDisplayName
     * @return self
     */
    public function setCampaignDisplayName($campaignDisplayName)
    {
        $this->campaignDisplayName = $campaignDisplayName;
        return $this;
    }

    /**
     * Gets as itemDiscountAmount
     *
     * The dollar amount of the order line item discount. The original purchase price (denoted
     *  in <b>OriginalItemPrice</b>) will be reduced by this value. The amount of the
     *  item discount will depend on the rules defined in the the seller discount
     *  campaign.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Prior to Version 895, this field worked a little differently. Instead of this field showing the amount of the discount, it was actually showing the final item price after the discount was applied. So, if an item price is 10.0 dollars and the discount is 2.0 dollars, someone using Version 895 (and going forward) will see a value of '2.0' (amount of the discount) in this field, but anyone using Version 893 or lower will see a value of '8.0' (item price after discount) in this field.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getItemDiscountAmount()
    {
        return $this->itemDiscountAmount;
    }

    /**
     * Sets a new itemDiscountAmount
     *
     * The dollar amount of the order line item discount. The original purchase price (denoted
     *  in <b>OriginalItemPrice</b>) will be reduced by this value. The amount of the
     *  item discount will depend on the rules defined in the the seller discount
     *  campaign.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Prior to Version 895, this field worked a little differently. Instead of this field showing the amount of the discount, it was actually showing the final item price after the discount was applied. So, if an item price is 10.0 dollars and the discount is 2.0 dollars, someone using Version 895 (and going forward) will see a value of '2.0' (amount of the discount) in this field, but anyone using Version 893 or lower will see a value of '8.0' (item price after discount) in this field.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $itemDiscountAmount
     * @return self
     */
    public function setItemDiscountAmount(\Nogrod\eBaySDK\Trading\AmountType $itemDiscountAmount)
    {
        $this->itemDiscountAmount = $itemDiscountAmount;
        return $this;
    }

    /**
     * Gets as shippingDiscountAmount
     *
     * The dollar amount of the shipping discount applied to the order line item.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getShippingDiscountAmount()
    {
        return $this->shippingDiscountAmount;
    }

    /**
     * Sets a new shippingDiscountAmount
     *
     * The dollar amount of the shipping discount applied to the order line item.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $shippingDiscountAmount
     * @return self
     */
    public function setShippingDiscountAmount(\Nogrod\eBaySDK\Trading\AmountType $shippingDiscountAmount)
    {
        $this->shippingDiscountAmount = $shippingDiscountAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCampaignID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CampaignID", $value);
        }
        $value = $this->getCampaignDisplayName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CampaignDisplayName", $value);
        }
        $value = $this->getItemDiscountAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemDiscountAmount", $value);
        }
        $value = $this->getShippingDiscountAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingDiscountAmount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CampaignID');
        if (null !== $value) {
            $this->setCampaignID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CampaignDisplayName');
        if (null !== $value) {
            $this->setCampaignDisplayName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemDiscountAmount');
        if (null !== $value) {
            $this->setItemDiscountAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingDiscountAmount');
        if (null !== $value) {
            $this->setShippingDiscountAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
