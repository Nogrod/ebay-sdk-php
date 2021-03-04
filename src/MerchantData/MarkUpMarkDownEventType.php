<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MarkUpMarkDownEventType
 *
 * Describes an individual mark-up or mark-down event. eBay will automatically
 *  mark an application as down if attempts to deliver a notification fail
 *  repeatedly. eBay may mark an application down manually under certain
 *  circumstances.
 * XSD Type: MarkUpMarkDownEventType
 */
class MarkUpMarkDownEventType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Whether the application has been marked up or marked down.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Time when the application was marked up or marked down.
     *
     * @var \DateTime $time
     */
    private $time = null;

    /**
     * Describes how the application was marked down, automatically or
     *  manually. When an application is automatically marked down, eBay will
     *  ping the application periodically, and if communication is restored, eBay
     *  will automatically mark the application up. If your application is marked
     *  down manually, you must contact eBay Developer Support to get your
     *  application marked up. A Reason is not provided for mark up events.
     *
     * @var string $reason
     */
    private $reason = null;

    /**
     * Gets as type
     *
     * Whether the application has been marked up or marked down.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Whether the application has been marked up or marked down.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as time
     *
     * Time when the application was marked up or marked down.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Time when the application was marked up or marked down.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Gets as reason
     *
     * Describes how the application was marked down, automatically or
     *  manually. When an application is automatically marked down, eBay will
     *  ping the application periodically, and if communication is restored, eBay
     *  will automatically mark the application up. If your application is marked
     *  down manually, you must contact eBay Developer Support to get your
     *  application marked up. A Reason is not provided for mark up events.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets a new reason
     *
     * Describes how the application was marked down, automatically or
     *  manually. When an application is automatically marked down, eBay will
     *  ping the application periodically, and if communication is restored, eBay
     *  will automatically mark the application up. If your application is marked
     *  down manually, you must contact eBay Developer Support to get your
     *  application marked up. A Reason is not provided for mark up events.
     *
     * @param string $reason
     * @return self
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
        }
        $value = $this->getTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Time", $value);
        }
        $value = $this->getReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Reason", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Time');
        if (null !== $value) {
            $this->setTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Reason');
        if (null !== $value) {
            $this->setReason($value);
        }
    }
}
