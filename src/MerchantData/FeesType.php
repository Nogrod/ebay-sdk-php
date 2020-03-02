<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * @var \Nogrod\eBaySDK\MerchantData\FeeType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Adds as fee
     *
     * A <b>Fee</b> container is returned for each listing fee associated with listing an item. Each <b>Fee</b> container consists of the fee type, the amount of the fee, and any applicable eBay promotional discount on that listing fee. A <b>Fee</b> container is returned for each listing feature, even if the associated cost is 0.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\FeeType $fee
     */
    public function addToFee(\Nogrod\eBaySDK\MerchantData\FeeType $fee)
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
     * @return \Nogrod\eBaySDK\MerchantData\FeeType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFee();
        if (null !== $value && !empty($this->getFee())) {
            $writer->write(array_map(function ($v) {
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fee', true);
        if (null !== $value && !empty($value)) {
            $this->setFee(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\FeeType::fromKeyValue($v);
            }, $value));
        }
    }
}
