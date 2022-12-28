<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TicketListingDetailsType
 *
 * Type defining the <b>TicketListingDetails</b> container, which is used in
 *  an <b>Add</b>/<b>Revise</b>/<b>Relist</b> call to provide more details about event tickets.
 * XSD Type: TicketListingDetailsType
 */
class TicketListingDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of the event, as shown on the ticket. Typically the
     *  headliner. There is no maximum number of words or characters.
     *  However, the words in the name must be an exact match (or a subset
     *  consisting of complete words) to the words in the product title in
     *  the catalog. The words in the name are matched using OR logic
     *  (the order of the words does not matter). As with all strings, you
     *  need to escape reserved characters such as ampersand.
     *  <br>
     *
     * @var string $eventTitle
     */
    private $eventTitle = null;

    /**
     * The name of the venue, as shown on the ticket.
     *  The validation rules are the same as the rules for the event name.
     *  In addition, eBay supports both US English and UK English spelling
     *  variations for typical words found on tickets (such as "theater" and
     *  "theatre"). As with all strings, you need to escape reserved
     *  characters such as ampersand.
     *  <br>
     *
     * @var string $venue
     */
    private $venue = null;

    /**
     * The date of the event, as shown on the ticket. Use the date shown on
     *  the ticket, without attempting to adjust it for a different time
     *  zone (such as Pacific time or GMT).<br>
     *  <br>
     *  In most cases, you should be able to specify any numeric date format
     *  in month/day/year order. eBay supports m or mm for the month,
     *  d or dd for the day, and yy or yyyy for the year, in all
     *  combinations. The delimiters must be forward slashes (/).
     *
     * @var string $printedDate
     */
    private $printedDate = null;

    /**
     * The time of the event, as shown on the ticket. Use the time value
     *  shown on the ticket, without attempting to convert it to a different
     *  time zone (such as Pacific time or GMT). Do not round the value up
     *  or down (e.g., do not round 7:01 PM to 7:00 PM).<br>
     *  <br>
     *  In most cases, you should be able to specify the time format exactly
     *  as shown on the ticket.
     *
     * @var string $printedTime
     */
    private $printedTime = null;

    /**
     * Gets as eventTitle
     *
     * The name of the event, as shown on the ticket. Typically the
     *  headliner. There is no maximum number of words or characters.
     *  However, the words in the name must be an exact match (or a subset
     *  consisting of complete words) to the words in the product title in
     *  the catalog. The words in the name are matched using OR logic
     *  (the order of the words does not matter). As with all strings, you
     *  need to escape reserved characters such as ampersand.
     *  <br>
     *
     * @return string
     */
    public function getEventTitle()
    {
        return $this->eventTitle;
    }

    /**
     * Sets a new eventTitle
     *
     * The name of the event, as shown on the ticket. Typically the
     *  headliner. There is no maximum number of words or characters.
     *  However, the words in the name must be an exact match (or a subset
     *  consisting of complete words) to the words in the product title in
     *  the catalog. The words in the name are matched using OR logic
     *  (the order of the words does not matter). As with all strings, you
     *  need to escape reserved characters such as ampersand.
     *  <br>
     *
     * @param string $eventTitle
     * @return self
     */
    public function setEventTitle($eventTitle)
    {
        $this->eventTitle = $eventTitle;
        return $this;
    }

    /**
     * Gets as venue
     *
     * The name of the venue, as shown on the ticket.
     *  The validation rules are the same as the rules for the event name.
     *  In addition, eBay supports both US English and UK English spelling
     *  variations for typical words found on tickets (such as "theater" and
     *  "theatre"). As with all strings, you need to escape reserved
     *  characters such as ampersand.
     *  <br>
     *
     * @return string
     */
    public function getVenue()
    {
        return $this->venue;
    }

    /**
     * Sets a new venue
     *
     * The name of the venue, as shown on the ticket.
     *  The validation rules are the same as the rules for the event name.
     *  In addition, eBay supports both US English and UK English spelling
     *  variations for typical words found on tickets (such as "theater" and
     *  "theatre"). As with all strings, you need to escape reserved
     *  characters such as ampersand.
     *  <br>
     *
     * @param string $venue
     * @return self
     */
    public function setVenue($venue)
    {
        $this->venue = $venue;
        return $this;
    }

    /**
     * Gets as printedDate
     *
     * The date of the event, as shown on the ticket. Use the date shown on
     *  the ticket, without attempting to adjust it for a different time
     *  zone (such as Pacific time or GMT).<br>
     *  <br>
     *  In most cases, you should be able to specify any numeric date format
     *  in month/day/year order. eBay supports m or mm for the month,
     *  d or dd for the day, and yy or yyyy for the year, in all
     *  combinations. The delimiters must be forward slashes (/).
     *
     * @return string
     */
    public function getPrintedDate()
    {
        return $this->printedDate;
    }

    /**
     * Sets a new printedDate
     *
     * The date of the event, as shown on the ticket. Use the date shown on
     *  the ticket, without attempting to adjust it for a different time
     *  zone (such as Pacific time or GMT).<br>
     *  <br>
     *  In most cases, you should be able to specify any numeric date format
     *  in month/day/year order. eBay supports m or mm for the month,
     *  d or dd for the day, and yy or yyyy for the year, in all
     *  combinations. The delimiters must be forward slashes (/).
     *
     * @param string $printedDate
     * @return self
     */
    public function setPrintedDate($printedDate)
    {
        $this->printedDate = $printedDate;
        return $this;
    }

    /**
     * Gets as printedTime
     *
     * The time of the event, as shown on the ticket. Use the time value
     *  shown on the ticket, without attempting to convert it to a different
     *  time zone (such as Pacific time or GMT). Do not round the value up
     *  or down (e.g., do not round 7:01 PM to 7:00 PM).<br>
     *  <br>
     *  In most cases, you should be able to specify the time format exactly
     *  as shown on the ticket.
     *
     * @return string
     */
    public function getPrintedTime()
    {
        return $this->printedTime;
    }

    /**
     * Sets a new printedTime
     *
     * The time of the event, as shown on the ticket. Use the time value
     *  shown on the ticket, without attempting to convert it to a different
     *  time zone (such as Pacific time or GMT). Do not round the value up
     *  or down (e.g., do not round 7:01 PM to 7:00 PM).<br>
     *  <br>
     *  In most cases, you should be able to specify the time format exactly
     *  as shown on the ticket.
     *
     * @param string $printedTime
     * @return self
     */
    public function setPrintedTime($printedTime)
    {
        $this->printedTime = $printedTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEventTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EventTitle", $value);
        }
        $value = $this->getVenue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Venue", $value);
        }
        $value = $this->getPrintedDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrintedDate", $value);
        }
        $value = $this->getPrintedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PrintedTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EventTitle');
        if (null !== $value) {
            $this->setEventTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Venue');
        if (null !== $value) {
            $this->setVenue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrintedDate');
        if (null !== $value) {
            $this->setPrintedDate($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PrintedTime');
        if (null !== $value) {
            $this->setPrintedTime($value);
        }
    }
}
