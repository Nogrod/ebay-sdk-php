<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumUnpaidItemStrikesCountDetailsType
 *
 * Type defining the <b>MaximumUnpaidItemStrikesCount</b> container that is returned
 *  in the <b>GeteBayDetails</b> response. The <b>MaximumUnpaidItemStrikesCount</b>
 *  container consists of multiple <b>Count</b> fields with values that can be
 *  used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
 *  field when using the Trading API to add, revise, or relist an item.
 *  <br><br>
 *  The <b>Item.MaximumUnpaidItemStrikesInfo</b> container in Add/Revise/Relist
 *  API calls is used to block buyers with unpaid item strikes equal to or exceeding
 *  the specified <b>Count</b> value during the specified <b>Period</b>
 *  value from buying/bidding on the item.
 * XSD Type: MaximumUnpaidItemStrikesCountDetailsType
 */
class MaximumUnpaidItemStrikesCountDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @var int[] $count
     */
    private $count = [
        
    ];

    /**
     * Adds as count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @return self
     * @param int $count
     */
    public function addToCount($count)
    {
        $this->count[] = $count;
        return $this;
    }

    /**
     * isset count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCount($index)
    {
        return isset($this->count[$index]);
    }

    /**
     * unset count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCount($index)
    {
        unset($this->count[$index]);
    }

    /**
     * Gets as count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @return int[]
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * Each value returned in each <b>MaximumUnpaidItemStrikesCount.Count</b> field
     *  can be used in the <b>BuyerRequirementDetails.MaximumUnpaidItemStrikesInfo.Count</b>
     *  field when using the Trading API to add, revise, or relist an item.
     *
     * @param int[] $count
     * @return self
     */
    public function setCount(array $count)
    {
        $this->count = $count;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCount();
        if (null !== $value && !empty($this->getCount())) {
            $writer->write(array_map(function ($v) {
                return ["Count" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Count', true);
        if (null !== $value && !empty($value)) {
            $this->setCount($value);
        }
    }
}
