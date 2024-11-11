<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyerProtectionDetailsType
 *
 * Type defining the <strong>ApplyBuyerProtection</strong> container, which
 *  consists of details related to whether or not the item is eligible for buyer protection
 *  and which of the buyer protection programs will cover the item.
 * XSD Type: BuyerProtectionDetailsType
 */
class BuyerProtectionDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the type of buyer protection program applicable for the item.
     *  This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     *
     * @var string $buyerProtectionSource
     */
    private $buyerProtectionSource = null;

    /**
     * This value indicates the item's eligibility for the buyer protection program listed
     *  in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field.
     *  This field is always returned with the
     *  <strong>ApplyBuyerProtection</strong> container.
     *
     * @var string $buyerProtectionStatus
     */
    private $buyerProtectionStatus = null;

    /**
     * Gets as buyerProtectionSource
     *
     * This value indicates the type of buyer protection program applicable for the item.
     *  This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     *
     * @return string
     */
    public function getBuyerProtectionSource()
    {
        return $this->buyerProtectionSource;
    }

    /**
     * Sets a new buyerProtectionSource
     *
     * This value indicates the type of buyer protection program applicable for the item.
     *  This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     *
     * @param string $buyerProtectionSource
     * @return self
     */
    public function setBuyerProtectionSource($buyerProtectionSource)
    {
        $this->buyerProtectionSource = $buyerProtectionSource;
        return $this;
    }

    /**
     * Gets as buyerProtectionStatus
     *
     * This value indicates the item's eligibility for the buyer protection program listed
     *  in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field.
     *  This field is always returned with the
     *  <strong>ApplyBuyerProtection</strong> container.
     *
     * @return string
     */
    public function getBuyerProtectionStatus()
    {
        return $this->buyerProtectionStatus;
    }

    /**
     * Sets a new buyerProtectionStatus
     *
     * This value indicates the item's eligibility for the buyer protection program listed
     *  in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field.
     *  This field is always returned with the
     *  <strong>ApplyBuyerProtection</strong> container.
     *
     * @param string $buyerProtectionStatus
     * @return self
     */
    public function setBuyerProtectionStatus($buyerProtectionStatus)
    {
        $this->buyerProtectionStatus = $buyerProtectionStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBuyerProtectionSource();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerProtectionSource", $value);
        }
        $value = $this->getBuyerProtectionStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerProtectionStatus", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerProtectionSource');
        if (null !== $value) {
            $this->setBuyerProtectionSource($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerProtectionStatus');
        if (null !== $value) {
            $this->setBuyerProtectionStatus($value);
        }
    }
}
