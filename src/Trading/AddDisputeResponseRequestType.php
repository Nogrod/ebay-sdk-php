<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddDisputeResponseRequestType
 *
 * This call enables the seller to update an Unpaid Item case.
 *  <br>
 *  <br>
 *  <span class="tablenote"><strong>Note:</strong>
 *  This call is deprecated and is scheduled for decommission on January 31, 2023. There is no alternative to this call since eBay no longer supports Unpaid Item cases. However, there is a page in Selling Preferences in My eBay that allows a seller to cancel and relist any items that have not been paid for after a specified amount of days.
 *  </span>
 * XSD Type: AddDisputeResponseRequestType
 */
class AddDisputeResponseRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the Unpaid Item case. This identifier is created by eBay upon case creation.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * This field is used to provide a text-based comment regarding the Unpaid Item case.
     *
     * @var string $messageText
     */
    private $messageText = null;

    /**
     * This field is used to indicate the type of action or update that the seller is making with the <b>AddDisputeResponse</b> call.
     *
     * @var string $disputeActivity
     */
    private $disputeActivity = null;

    /**
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @var string $shippingCarrierUsed
     */
    private $shippingCarrierUsed = null;

    /**
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @var string $shipmentTrackNumber
     */
    private $shipmentTrackNumber = null;

    /**
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @var \DateTime $shippingTime
     */
    private $shippingTime = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of the Unpaid Item case. This identifier is created by eBay upon case creation.
     *
     * @return string
     */
    public function getDisputeID()
    {
        return $this->disputeID;
    }

    /**
     * Sets a new disputeID
     *
     * The unique identifier of the Unpaid Item case. This identifier is created by eBay upon case creation.
     *
     * @param string $disputeID
     * @return self
     */
    public function setDisputeID($disputeID)
    {
        $this->disputeID = $disputeID;
        return $this;
    }

    /**
     * Gets as messageText
     *
     * This field is used to provide a text-based comment regarding the Unpaid Item case.
     *
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * Sets a new messageText
     *
     * This field is used to provide a text-based comment regarding the Unpaid Item case.
     *
     * @param string $messageText
     * @return self
     */
    public function setMessageText($messageText)
    {
        $this->messageText = $messageText;
        return $this;
    }

    /**
     * Gets as disputeActivity
     *
     * This field is used to indicate the type of action or update that the seller is making with the <b>AddDisputeResponse</b> call.
     *
     * @return string
     */
    public function getDisputeActivity()
    {
        return $this->disputeActivity;
    }

    /**
     * Sets a new disputeActivity
     *
     * This field is used to indicate the type of action or update that the seller is making with the <b>AddDisputeResponse</b> call.
     *
     * @param string $disputeActivity
     * @return self
     */
    public function setDisputeActivity($disputeActivity)
    {
        $this->disputeActivity = $disputeActivity;
        return $this;
    }

    /**
     * Gets as shippingCarrierUsed
     *
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @return string
     */
    public function getShippingCarrierUsed()
    {
        return $this->shippingCarrierUsed;
    }

    /**
     * Sets a new shippingCarrierUsed
     *
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @param string $shippingCarrierUsed
     * @return self
     */
    public function setShippingCarrierUsed($shippingCarrierUsed)
    {
        $this->shippingCarrierUsed = $shippingCarrierUsed;
        return $this;
    }

    /**
     * Gets as shipmentTrackNumber
     *
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @return string
     */
    public function getShipmentTrackNumber()
    {
        return $this->shipmentTrackNumber;
    }

    /**
     * Sets a new shipmentTrackNumber
     *
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @param string $shipmentTrackNumber
     * @return self
     */
    public function setShipmentTrackNumber($shipmentTrackNumber)
    {
        $this->shipmentTrackNumber = $shipmentTrackNumber;
        return $this;
    }

    /**
     * Gets as shippingTime
     *
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @return \DateTime
     */
    public function getShippingTime()
    {
        return $this->shippingTime;
    }

    /**
     * Sets a new shippingTime
     *
     * <b>DO NOT USE</b>. This field is no longer applicable.
     *
     * @param \DateTime $shippingTime
     * @return self
     */
    public function setShippingTime(\DateTime $shippingTime)
    {
        $this->shippingTime = $shippingTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDisputeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeID", $value);
        }
        $value = $this->getMessageText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageText", $value);
        }
        $value = $this->getDisputeActivity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeActivity", $value);
        }
        $value = $this->getShippingCarrierUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCarrierUsed", $value);
        }
        $value = $this->getShipmentTrackNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShipmentTrackNumber", $value);
        }
        $value = $this->getShippingTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeID');
        if (null !== $value) {
            $this->setDisputeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageText');
        if (null !== $value) {
            $this->setMessageText($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeActivity');
        if (null !== $value) {
            $this->setDisputeActivity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCarrierUsed');
        if (null !== $value) {
            $this->setShippingCarrierUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShipmentTrackNumber');
        if (null !== $value) {
            $this->setShipmentTrackNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingTime');
        if (null !== $value) {
            $this->setShippingTime(new \DateTime($value));
        }
    }
}
