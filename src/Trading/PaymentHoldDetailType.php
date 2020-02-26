<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing PaymentHoldDetailType
 *
 * This type defines the <b>PaymentHoldDetails</b> container, which
 *  consists of information related to the payment hold on the order, including the
 *  reason why the buyer's payment for the order is being held, the expected
 *  release date of the funds into the seller's account, and possible action(s) the
 *  seller can take to expedite the payout of funds into their account.
 * XSD Type: PaymentHoldDetailType
 */
class PaymentHoldDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Timestamp that indicates the expected date in which eBay/PayPal will
     *  distribute the funds to the seller's account. This is not a firm date and
     *  is subject to change. This field is only returned after checkout is complete and if the <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
     *
     * @var \DateTime $expectedReleaseDate
     */
    private $expectedReleaseDate = null;

    /**
     * Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
     *
     * @var string[] $requiredSellerActionArray
     */
    private $requiredSellerActionArray = null;

    /**
     * Integer value that indicates the number of possible actions that a seller
     *  can take to possibly expedite the release of funds into their account. This
     *  value should equal the number of <b>RequiredSellerAction</b>
     *  fields contained in the <b>RequiredSellerActionArray</b>
     *  container.
     *
     * @var int $numOfReqSellerActions
     */
    private $numOfReqSellerActions = null;

    /**
     * Enumerated value that indicates why the buyer's payment for the order is
     *  being held by PayPal instead of being distributed to the seller's account.
     *  A seller's funds for an order can be held by PayPal for as little as three
     *  days after the buyer receives the order, but the hold can be up to 21 days
     *  based on the scenario, and in some cases, the seller's lack of action in
     *  helping to expedite the release of funds.
     *
     * @var string $paymentHoldReason
     */
    private $paymentHoldReason = null;

    /**
     * Gets as expectedReleaseDate
     *
     * Timestamp that indicates the expected date in which eBay/PayPal will
     *  distribute the funds to the seller's account. This is not a firm date and
     *  is subject to change. This field is only returned after checkout is complete and if the <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
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
     * Timestamp that indicates the expected date in which eBay/PayPal will
     *  distribute the funds to the seller's account. This is not a firm date and
     *  is subject to change. This field is only returned after checkout is complete and if the <b>PaymentHoldStatus</b> indicates a hold has been placed on payment.
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
     * Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
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
     * Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
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
     * Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
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
     * Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
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
     * Container consisting of one or more <b>RequiredSellerAction</b> fields.
     *  <b>RequiredSellerAction</b> fields provide possible actions that a seller can take to
     *  expedite the release of funds into their account.
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
     * Integer value that indicates the number of possible actions that a seller
     *  can take to possibly expedite the release of funds into their account. This
     *  value should equal the number of <b>RequiredSellerAction</b>
     *  fields contained in the <b>RequiredSellerActionArray</b>
     *  container.
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
     * Integer value that indicates the number of possible actions that a seller
     *  can take to possibly expedite the release of funds into their account. This
     *  value should equal the number of <b>RequiredSellerAction</b>
     *  fields contained in the <b>RequiredSellerActionArray</b>
     *  container.
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
     * Enumerated value that indicates why the buyer's payment for the order is
     *  being held by PayPal instead of being distributed to the seller's account.
     *  A seller's funds for an order can be held by PayPal for as little as three
     *  days after the buyer receives the order, but the hold can be up to 21 days
     *  based on the scenario, and in some cases, the seller's lack of action in
     *  helping to expedite the release of funds.
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
     * Enumerated value that indicates why the buyer's payment for the order is
     *  being held by PayPal instead of being distributed to the seller's account.
     *  A seller's funds for an order can be held by PayPal for as little as three
     *  days after the buyer receives the order, but the hold can be up to 21 days
     *  based on the scenario, and in some cases, the seller's lack of action in
     *  helping to expedite the release of funds.
     *
     * @param string $paymentHoldReason
     * @return self
     */
    public function setPaymentHoldReason($paymentHoldReason)
    {
        $this->paymentHoldReason = $paymentHoldReason;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpectedReleaseDate');
        if (null !== $value) {
            $this->setExpectedReleaseDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RequiredSellerActionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setRequiredSellerActionArray($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NumOfReqSellerActions');
        if (null !== $value) {
            $this->setNumOfReqSellerActions($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaymentHoldReason');
        if (null !== $value) {
            $this->setPaymentHoldReason($value);
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
