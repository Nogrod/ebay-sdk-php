<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DuplicateInvocationDetailsType
 *
 * This type is used by the <b>DuplicateInvocationDetails</b> container that is returned in some calls if a duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> is used in the call request.
 * XSD Type: DuplicateInvocationDetailsType
 */
class DuplicateInvocationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This value represents the duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> that was used in the call request.
     *
     * @var string $duplicateInvocationID
     */
    private $duplicateInvocationID = null;

    /**
     * This enumeration value indicates the status of the previous call that used the <b>InvocationID</b> or <b>InvocationTrackingID</b> specified in the <b>DuplicateInvocationID</b>.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * This unique identifier identifies the business item the previous API invocation
     *  created. For example, the Item ID of the item created by an <b>AddItem</b> call.
     *
     * @var string $invocationTrackingID
     */
    private $invocationTrackingID = null;

    /**
     * Gets as duplicateInvocationID
     *
     * This value represents the duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> that was used in the call request.
     *
     * @return string
     */
    public function getDuplicateInvocationID()
    {
        return $this->duplicateInvocationID;
    }

    /**
     * Sets a new duplicateInvocationID
     *
     * This value represents the duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> that was used in the call request.
     *
     * @param string $duplicateInvocationID
     * @return self
     */
    public function setDuplicateInvocationID($duplicateInvocationID)
    {
        $this->duplicateInvocationID = $duplicateInvocationID;
        return $this;
    }

    /**
     * Gets as status
     *
     * This enumeration value indicates the status of the previous call that used the <b>InvocationID</b> or <b>InvocationTrackingID</b> specified in the <b>DuplicateInvocationID</b>.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * This enumeration value indicates the status of the previous call that used the <b>InvocationID</b> or <b>InvocationTrackingID</b> specified in the <b>DuplicateInvocationID</b>.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as invocationTrackingID
     *
     * This unique identifier identifies the business item the previous API invocation
     *  created. For example, the Item ID of the item created by an <b>AddItem</b> call.
     *
     * @return string
     */
    public function getInvocationTrackingID()
    {
        return $this->invocationTrackingID;
    }

    /**
     * Sets a new invocationTrackingID
     *
     * This unique identifier identifies the business item the previous API invocation
     *  created. For example, the Item ID of the item created by an <b>AddItem</b> call.
     *
     * @param string $invocationTrackingID
     * @return self
     */
    public function setInvocationTrackingID($invocationTrackingID)
    {
        $this->invocationTrackingID = $invocationTrackingID;
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
        $value = $this->duplicateInvocationID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DuplicateInvocationID', null, (string) $value);
        }
        $value = $this->status;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Status', null, (string) $value);
        }
        $value = $this->invocationTrackingID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'InvocationTrackingID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DuplicateInvocationDetailsType
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
                case 'DuplicateInvocationID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->duplicateInvocationID = $value;
                    }
                    return true;
                case 'Status':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->status = $value;
                    }
                    return true;
                case 'InvocationTrackingID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->invocationTrackingID = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['DuplicateInvocationID'] = $this->duplicateInvocationID;
        $data['Status'] = $this->status;
        $data['InvocationTrackingID'] = $this->invocationTrackingID;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
