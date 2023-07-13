<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentHoldDetailType
 *
 * This type defines the <b>PaymentHoldDetails</b> container, which consists of information related to eBay holding the payment proceeds for an order, including the reason why eBay is holding the money, the expected release date of the funds to the seller, and possible action(s) the seller can take to expedite the release of funds.
 * XSD Type: PaymentHoldDetailType
 */
class PaymentHoldDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <br>
     *  Timestamp that indicates the expected date in which eBay will distribute the funds to the seller's account. This is not a firm date and is subject to change. This field is only returned after checkout is complete and if the <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @var \DateTime $expectedReleaseDate
     */
    private $expectedReleaseDate = null;

    /**
     * <br>
     *  Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @var string[] $requiredSellerActionArray
     */
    private $requiredSellerActionArray = null;

    /**
     * <br>
     *  Integer value that indicates the number of possible actions that a seller can take to possibly expedite the release of funds into their account. This value should equal the number of <b>RequiredSellerAction</b> fields contained in the <b>RequiredSellerActionArray</b> container.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @var int $numOfReqSellerActions
     */
    private $numOfReqSellerActions = null;

    /**
     * <br>
     *  Enumerated value that indicates why the buyer's payment for the order is being held by eBay instead of being distributed to the seller's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @var string $paymentHoldReason
     */
    private $paymentHoldReason = null;

    /**
     * Gets as expectedReleaseDate
     *
     * <br>
     *  Timestamp that indicates the expected date in which eBay will distribute the funds to the seller's account. This is not a firm date and is subject to change. This field is only returned after checkout is complete and if the <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @return \DateTime
     */
    public function getExpectedReleaseDate()
    {
        return $this->expectedReleaseDate;
    }

    /**
     * Sets a new expectedReleaseDate
     *
     * <br>
     *  Timestamp that indicates the expected date in which eBay will distribute the funds to the seller's account. This is not a firm date and is subject to change. This field is only returned after checkout is complete and if the <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @param \DateTime $expectedReleaseDate
     * @return self
     */
    public function setExpectedReleaseDate(\DateTime $expectedReleaseDate)
    {
        $this->expectedReleaseDate = $expectedReleaseDate;
        return $this;
    }

    /**
     * Adds as requiredSellerAction
     *
     * <br>
     *  Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @return self
     * @param string $requiredSellerAction
     */
    public function addToRequiredSellerActionArray($requiredSellerAction)
    {
        $this->requiredSellerActionArray[] = $requiredSellerAction;
        return $this;
    }

    /**
     * isset requiredSellerActionArray
     *
     * <br>
     *  Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredSellerActionArray($index)
    {
        return isset($this->requiredSellerActionArray[$index]);
    }

    /**
     * unset requiredSellerActionArray
     *
     * <br>
     *  Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredSellerActionArray($index)
    {
        unset($this->requiredSellerActionArray[$index]);
    }

    /**
     * Gets as requiredSellerActionArray
     *
     * <br>
     *  Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @return string[]
     */
    public function getRequiredSellerActionArray()
    {
        return $this->requiredSellerActionArray;
    }

    /**
     * Sets a new requiredSellerActionArray
     *
     * <br>
     *  Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @param string $requiredSellerActionArray
     * @return self
     */
    public function setRequiredSellerActionArray(array $requiredSellerActionArray)
    {
        $this->requiredSellerActionArray = $requiredSellerActionArray;
        return $this;
    }

    /**
     * Gets as numOfReqSellerActions
     *
     * <br>
     *  Integer value that indicates the number of possible actions that a seller can take to possibly expedite the release of funds into their account. This value should equal the number of <b>RequiredSellerAction</b> fields contained in the <b>RequiredSellerActionArray</b> container.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @return int
     */
    public function getNumOfReqSellerActions()
    {
        return $this->numOfReqSellerActions;
    }

    /**
     * Sets a new numOfReqSellerActions
     *
     * <br>
     *  Integer value that indicates the number of possible actions that a seller can take to possibly expedite the release of funds into their account. This value should equal the number of <b>RequiredSellerAction</b> fields contained in the <b>RequiredSellerActionArray</b> container.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @param int $numOfReqSellerActions
     * @return self
     */
    public function setNumOfReqSellerActions($numOfReqSellerActions)
    {
        $this->numOfReqSellerActions = $numOfReqSellerActions;
        return $this;
    }

    /**
     * Gets as paymentHoldReason
     *
     * <br>
     *  Enumerated value that indicates why the buyer's payment for the order is being held by eBay instead of being distributed to the seller's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @return string
     */
    public function getPaymentHoldReason()
    {
        return $this->paymentHoldReason;
    }

    /**
     * Sets a new paymentHoldReason
     *
     * <br>
     *  Enumerated value that indicates why the buyer's payment for the order is being held by eBay instead of being distributed to the seller's account.
     *  <br>
     *  <span class="tablenote"><b>Note: </b> The <b>Order.PaymentHoldDetails</b> and <b>ContainingOrder.PaymentHoldDetails</b> containers and child fields will stop being returned on January 31, 2024 and will be removed from the Trading WSDL. Payment hold details can be viewed at the transaction level instead.
     *  </span>
     *
     * @param string $paymentHoldReason
     * @return self
     */
    public function setPaymentHoldReason($paymentHoldReason)
    {
        $this->paymentHoldReason = $paymentHoldReason;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExpectedReleaseDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpectedReleaseDate", $value);
        }
        $value = $this->getRequiredSellerActionArray();
        if (null !== $value && !empty($this->getRequiredSellerActionArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RequiredSellerActionArray", array_map(function ($v) {
                return ["RequiredSellerAction" => $v];
            }, $value));
        }
        $value = $this->getNumOfReqSellerActions();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}NumOfReqSellerActions", $value);
        }
        $value = $this->getPaymentHoldReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaymentHoldReason", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpectedReleaseDate');
        if (null !== $value) {
            $this->setExpectedReleaseDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RequiredSellerActionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setRequiredSellerActionArray($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumOfReqSellerActions');
        if (null !== $value) {
            $this->setNumOfReqSellerActions($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentHoldReason');
        if (null !== $value) {
            $this->setPaymentHoldReason($value);
        }
    }
}
