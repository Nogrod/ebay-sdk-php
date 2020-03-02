<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddDisputeResponseRequestType
 *
 * This call enables the seller to respond to an Item Not Received (INR) dispute opened by a buyer through PayPal's Purchase Protection program, or to update an Unpaid Item case. To respond to a case opened by the buyer through eBay's Resolution Center, the seller should use the <a href="http://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b>, the <a href="http://developer.ebay.com/Devzone/resolution-case-management/CallRef/index.html" target="_blank">Resolution Case Management API</a>, or manage the case manually through the eBay Resolution Center.
 * XSD Type: AddDisputeResponseRequestType
 */
class AddDisputeResponseRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the eBay Unpaid Item case or PayPal INR dispute. This identifier is created by eBay or PayPal upon case/dispute creation.
     *
     * @var string $disputeID
     */
    private $disputeID = null;

    /**
     * The text of a comment or response being posted to the case/dispute. Required when <b>DisputeActivity</b> is <b>SellerAddInformation</b>, <b>SellerComment</b>, or <b>SellerPaymentNotReceived</b>. Otherwise, this field is optional.
     *
     * @var string $messageText
     */
    private $messageText = null;

    /**
     * The type of activity the seller plans to take on the case/dispute. The allowed value is determined by the current state of the case/dispute and whether the seller is updating an Unpaid Item case or responding to a PayPal INR dispute.
     *
     * @var string $disputeActivity
     */
    private $disputeActivity = null;

    /**
     * The shipping carrier used to ship the item in dispute. This field is not case sensitive in the <strong>AddDisputeResponse</strong> request. Non-alphanumeric characters are not allowed. This field (along with <b>ShipmentTrackNumber</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
     *
     * @var string $shippingCarrierUsed
     */
    private $shippingCarrierUsed = null;

    /**
     * The tracking number associated with one package of a shipment. The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number. This field (along with <b>ShippingCarrierUsed</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
     *
     * @var string $shipmentTrackNumber
     */
    private $shipmentTrackNumber = null;

    /**
     * This timestamp indicates the date and time when the item under dispute was
     *  shipped. This field is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
     *
     * @var \DateTime $shippingTime
     */
    private $shippingTime = null;

    /**
     * Gets as disputeID
     *
     * The unique identifier of the eBay Unpaid Item case or PayPal INR dispute. This identifier is created by eBay or PayPal upon case/dispute creation.
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
     * The unique identifier of the eBay Unpaid Item case or PayPal INR dispute. This identifier is created by eBay or PayPal upon case/dispute creation.
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
     * The text of a comment or response being posted to the case/dispute. Required when <b>DisputeActivity</b> is <b>SellerAddInformation</b>, <b>SellerComment</b>, or <b>SellerPaymentNotReceived</b>. Otherwise, this field is optional.
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
     * The text of a comment or response being posted to the case/dispute. Required when <b>DisputeActivity</b> is <b>SellerAddInformation</b>, <b>SellerComment</b>, or <b>SellerPaymentNotReceived</b>. Otherwise, this field is optional.
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
     * The type of activity the seller plans to take on the case/dispute. The allowed value is determined by the current state of the case/dispute and whether the seller is updating an Unpaid Item case or responding to a PayPal INR dispute.
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
     * The type of activity the seller plans to take on the case/dispute. The allowed value is determined by the current state of the case/dispute and whether the seller is updating an Unpaid Item case or responding to a PayPal INR dispute.
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
     * The shipping carrier used to ship the item in dispute. This field is not case sensitive in the <strong>AddDisputeResponse</strong> request. Non-alphanumeric characters are not allowed. This field (along with <b>ShipmentTrackNumber</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
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
     * The shipping carrier used to ship the item in dispute. This field is not case sensitive in the <strong>AddDisputeResponse</strong> request. Non-alphanumeric characters are not allowed. This field (along with <b>ShipmentTrackNumber</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
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
     * The tracking number associated with one package of a shipment. The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number. This field (along with <b>ShippingCarrierUsed</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
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
     * The tracking number associated with one package of a shipment. The seller is responsible for the accuracy of the shipment tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number. This field (along with <b>ShippingCarrierUsed</b>) is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
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
     * This timestamp indicates the date and time when the item under dispute was
     *  shipped. This field is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
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
     * This timestamp indicates the date and time when the item under dispute was
     *  shipped. This field is required if the value of <b>DisputeActivity</b> is set to <code>SellerShippedItem</code>.
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
