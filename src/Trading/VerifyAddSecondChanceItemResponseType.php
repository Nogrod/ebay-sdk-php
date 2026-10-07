<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VerifyAddSecondChanceItemResponseType
 *
 * Base response of the <b>VerifyAddSecondChanceItem</b> call.
 * XSD Type: VerifyAddSecondChanceItemResponseType
 */
class VerifyAddSecondChanceItemResponseType extends AbstractResponseType
{
    /**
     * Indicates the date and time when the the new
     *  Second Chance Offer listing became active and
     *  the recipient user could purchase the item.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * Indicates the date and time when the Second Chance Offer listing expires, at which time
     *  the listing ends (if the recipient user does
     *  not purchase the item first).
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as startTime
     *
     * Indicates the date and time when the the new
     *  Second Chance Offer listing became active and
     *  the recipient user could purchase the item.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * Indicates the date and time when the the new
     *  Second Chance Offer listing became active and
     *  the recipient user could purchase the item.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * Indicates the date and time when the Second Chance Offer listing expires, at which time
     *  the listing ends (if the recipient user does
     *  not purchase the item first).
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
     * Indicates the date and time when the Second Chance Offer listing expires, at which time
     *  the listing ends (if the recipient user does
     *  not purchase the item first).
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->startTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'StartTime', null, Func::formatDateTime($value));
        }
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\VerifyAddSecondChanceItemResponseType
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
                case 'StartTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->startTime = new \DateTime($value);
                    }
                    return true;
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
