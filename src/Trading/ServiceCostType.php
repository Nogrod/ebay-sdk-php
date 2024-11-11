<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ServiceCostType
 *
 * Type used by the <b>ServiceCost</b> container to display any service cost to the buyer for an item that will go through the Authenticity Guarantee process.
 * XSD Type: ServiceCostType
 */
class ServiceCostType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $amount
     */
    private $amount = null;

    /**
     * The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a different currency than the currency of the listing site.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $convertedFromAmount
     */
    private $convertedFromAmount = null;

    /**
     * Gets as amount
     *
     * The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $amount
     * @return self
     */
    public function setAmount(\Nogrod\eBaySDK\Trading\AmountType $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as convertedFromAmount
     *
     * The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a different currency than the currency of the listing site.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getConvertedFromAmount()
    {
        return $this->convertedFromAmount;
    }

    /**
     * Sets a new convertedFromAmount
     *
     * The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a different currency than the currency of the listing site.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $convertedFromAmount
     * @return self
     */
    public function setConvertedFromAmount(\Nogrod\eBaySDK\Trading\AmountType $convertedFromAmount)
    {
        $this->convertedFromAmount = $convertedFromAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Amount", $value);
        }
        $value = $this->getConvertedFromAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ConvertedFromAmount", $value);
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}Amount');
        if (null !== $value) {
            $this->setAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ConvertedFromAmount');
        if (null !== $value) {
            $this->setConvertedFromAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
