<?php

namespace Nogrod\eBaySDK\Trading;

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
class MarkUpMarkDownEventType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->type;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Type', null, (string) $value);
        }
        $value = $this->time;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Time', null, Func::formatDateTime($value));
        }
        $value = $this->reason;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Reason', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MarkUpMarkDownEventType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Type':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->type = $value;
                    }
                    return true;
                case 'Time':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->time = new \DateTime($value);
                    }
                    return true;
                case 'Reason':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->reason = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Type'] = $this->type;
        $data['Time'] = Func::jsonDate($this->time);
        $data['Reason'] = $this->reason;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
