<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyerPackageEnclosuresType
 *
 * Type defining the <b>BuyerPackageEnclosures</b> container, which is returned in <b>GetOrders</b> (and other order management calls) if the 'Pay Upon Invoice' option is being offered to the buyer, and the seller is including payment instructions in the shipping package(s). A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
 * XSD Type: BuyerPackageEnclosuresType
 */
class BuyerPackageEnclosuresType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     */
    private $buyerPackageEnclosure = [

    ];

    /**
     * Adds as buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType $buyerPackageEnclosure
     */
    public function addToBuyerPackageEnclosure(\Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType $buyerPackageEnclosure)
    {
        $this->buyerPackageEnclosure[] = $buyerPackageEnclosure;
        return $this;
    }

    /**
     * isset buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerPackageEnclosure($index)
    {
        return isset($this->buyerPackageEnclosure[$index]);
    }

    /**
     * unset buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerPackageEnclosure($index)
    {
        unset($this->buyerPackageEnclosure[$index]);
    }

    /**
     * Gets as buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType[]
     */
    public function getBuyerPackageEnclosure()
    {
        return $this->buyerPackageEnclosure;
    }

    /**
     * Sets a new buyerPackageEnclosure
     *
     * A <b>BuyerPackageEnclosure</b> container will be returned for each shipping package containing payment instructions. The 'Pay Upon Invoice' option is only available on the German site.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType[] $buyerPackageEnclosure
     * @return self
     */
    public function setBuyerPackageEnclosure(array $buyerPackageEnclosure)
    {
        $this->buyerPackageEnclosure = $buyerPackageEnclosure;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBuyerPackageEnclosure();
        if (null !== $value && !empty($this->getBuyerPackageEnclosure())) {
            $writer->write(array_map(function ($v) {return ["BuyerPackageEnclosure" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerPackageEnclosure');
        if (null !== $value) {
            $this->setBuyerPackageEnclosure(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\BuyerPackageEnclosureType::fromKeyValue($v);}, $value));
        }
    }
}
