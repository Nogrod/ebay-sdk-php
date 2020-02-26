<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing DateType
 *
 * Defines year, month, and day as individual components of a date.
 *  Only applicable to use cases that support incomplete dates.
 *  Otherwise, we use xs:dateTime (or xs:date, as appropriate).
 * XSD Type: DateType
 */
class DateType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A year in the form YYYY.
     *
     * @var int $year
     */
    private $year = null;

    /**
     * A calendar month (e.g., 2 or 02 for February).
     *  For ticket searches, Month is required if
     *  Day is specified.
     *
     * @var int $month
     */
    private $month = null;

    /**
     * A calendar day (e.g., 2 or 02). For ticket searches,
     *  Day is only valid if Month is also specified.
     *
     * @var int $day
     */
    private $day = null;

    /**
     * Gets as year
     *
     * A year in the form YYYY.
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year
     *
     * A year in the form YYYY.
     *
     * @param int $year
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * Gets as month
     *
     * A calendar month (e.g., 2 or 02 for February).
     *  For ticket searches, Month is required if
     *  Day is specified.
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Sets a new month
     *
     * A calendar month (e.g., 2 or 02 for February).
     *  For ticket searches, Month is required if
     *  Day is specified.
     *
     * @param int $month
     * @return self
     */
    public function setMonth($month)
    {
        $this->month = $month;
        return $this;
    }

    /**
     * Gets as day
     *
     * A calendar day (e.g., 2 or 02). For ticket searches,
     *  Day is only valid if Month is also specified.
     *
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Sets a new day
     *
     * A calendar day (e.g., 2 or 02). For ticket searches,
     *  Day is only valid if Month is also specified.
     *
     * @param int $day
     * @return self
     */
    public function setDay($day)
    {
        $this->day = $day;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getYear();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Year", $value);
        }
        $value = $this->getMonth();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Month", $value);
        }
        $value = $this->getDay();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Day", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Year');
        if (null !== $value) {
            $this->setYear($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Month');
        if (null !== $value) {
            $this->setMonth($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Day');
        if (null !== $value) {
            $this->setDay($value);
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
