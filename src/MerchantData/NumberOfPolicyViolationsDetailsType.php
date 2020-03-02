<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NumberOfPolicyViolationsDetailsType
 *
 * This type is deprecated, as the maximum number of policy violations for a buyer is no longer a valid Buyer Requirement at the account or listing level.
 * XSD Type: NumberOfPolicyViolationsDetailsType
 */
class NumberOfPolicyViolationsDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var int[] $count
     */
    private $count = [
        
    ];

    /**
     * Adds as count
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
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
