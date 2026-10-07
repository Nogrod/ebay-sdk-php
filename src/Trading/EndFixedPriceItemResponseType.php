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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
        $value = $this->sKU;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SKU', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\EndFixedPriceItemResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
                case 'SKU':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sKU = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
