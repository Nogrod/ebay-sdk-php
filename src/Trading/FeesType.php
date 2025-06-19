<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FeesType
 *
 * Type used to express all fees associated with listing an item. These are the fees that the seller will pay to eBay.
 * XSD Type: FeesType
 */
class FeesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @var \Nogrod\eBaySDK\Trading\FeeType[] $fee
     */
    private $fee = [

    ];

    /**
     * Adds as fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\FeeType $fee
     */
    public function addToFee(\Nogrod\eBaySDK\Trading\FeeType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @return \Nogrod\eBaySDK\Trading\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @param \Nogrod\eBaySDK\Trading\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFee();
        if (null !== $value && [] !== $this->getFee()) {
            $writer->write(array_map(function ($v) {return ["Fee" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\FeesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fee');
        if (null !== $value) {
            $this->setFee(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\FeeType::fromKeyValue($v);}, $value));
        }
    }
}
