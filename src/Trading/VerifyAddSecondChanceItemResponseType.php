<?php

namespace Nogrod\eBaySDK\Trading;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getStartTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartTime", $value);
        }
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartTime');
        if (null !== $value) {
            $this->setStartTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
