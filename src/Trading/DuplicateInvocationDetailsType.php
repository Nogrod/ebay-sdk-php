<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DuplicateInvocationDetailsType
 *
 * This type is used by the <b>DuplicateInvocationDetails</b> container that is returned in some calls if a duplicate <b>InvocationID</b> or <b>InvocationTrackingID</b> is used in the call request.
 * XSD Type: DuplicateInvocationDetailsType
 */
class DuplicateInvocationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDuplicateInvocationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DuplicateInvocationID", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getInvocationTrackingID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvocationTrackingID", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DuplicateInvocationID');
        if (null !== $value) {
            $this->setDuplicateInvocationID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvocationTrackingID');
        if (null !== $value) {
            $this->setInvocationTrackingID($value);
        }
    }
}
