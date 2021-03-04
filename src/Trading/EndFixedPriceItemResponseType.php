<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndFixedPriceItemResponseType
 *
 * Acknowledgement that includes SKU, as well as the date and time that the listing ended due to the call to EndFixedPriceItem.
 * XSD Type: EndFixedPriceItemResponseType
 */
class EndFixedPriceItemResponseType extends AbstractResponseType
{
    /**
     * Timestamp that indicates the date and time (GMT) that the specified listing was ended.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * If a SKU (stock-keeping unit) exists for the item in the listing, it is returned in the response.
     *
     * @var string $sKU
     */
    private $sKU = null;

    /**
     * Gets as endTime
     *
     * Timestamp that indicates the date and time (GMT) that the specified listing was ended.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * Timestamp that indicates the date and time (GMT) that the specified listing was ended.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as sKU
     *
     * If a SKU (stock-keeping unit) exists for the item in the listing, it is returned in the response.
     *
     * @return string
     */
    public function getSKU()
    {
        return $this->sKU;
    }

    /**
     * Sets a new sKU
     *
     * If a SKU (stock-keeping unit) exists for the item in the listing, it is returned in the response.
     *
     * @param string $sKU
     * @return self
     */
    public function setSKU($sKU)
    {
        $this->sKU = $sKU;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getSKU();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SKU", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKU');
        if (null !== $value) {
            $this->setSKU($value);
        }
    }
}
