<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AuthenticityVerificationType
 *
 * This type is used by the <b>AuthenticityVerification</b> container, which gives status on whether the order line
 *  item has passed or failed the authenticity inspection, or if the test is still pending. The following table
 *  describes the relationship between the <b>Status</b> and <b>OutcomeReason</b> fields.
 *  <table>
 *  <col />
 *  <col />
 *  <col />
 *  <thead>
 *  <tr>
 *  <th>
 *  <p>Status</p>
 *  </th>
 *  <th>
 *  <p>OutcomeReason</p>
 *  </th>
 *  <th>
 *  <p>Description</p>
 *  </th>
 *  </tr>
 *  </thead>
 *  <tbody>
 *  <tr>
 *  <td>PENDING</td>
 *  <td><em>Not applicable</em></td>
 *  <td>Authenticity checks have not completed (the authentication status is pending). The order's authenticity
 *  is still unknown</td>
 *  </tr>
 *  <tr>
 *  <td>PASSED</td>
 *  <td><em>Not applicable</em></td>
 *  <td>The authentication has been accepted. The order is authentic. The authentication partner sends the order
 *  line item to the buyer with the message that the item is authentic</td>
 *  </tr>
 *  <tr>
 *  <td rowspan="2">PASSED_WITH_EXCEPTION <br />There may be legal reasons or requirements such that the item
 *  cannot be labeled authentic. </td>
 *  <td>CUSTOMIZED</td>
 *  <td>The order line item has been altered or customized, and cannot be labeled as authentic but will be sent
 *  to the buyer</td>
 *  </tr>
 *  <tr>
 *  <td>MISCATEGORIZED</td>
 *  <td>The order line item was in the wrong eBay category and cannot be labeled as authentic but will be sent
 *  to the buyer</td>
 *  </tr>
 *  <tr>
 *  <td>PASSED_WITH_PARTIAL_FAILURE </td>
 *  <td><em>Dependent</em></td>
 *  <td>Multi-quantity use case where part of the order is authentic, but the other part of the order FAILED</td>
 *  </tr>
 *  <tr>
 *  <td rowspan="3">FAILED</td>
 *  <td>NOT_AUTHENTIC</td>
 *  <td>The order could not be authenticated. The authentication partner returns the order line item to the
 *  seller; refunds the buyer</td>
 *  </tr>
 *  <tr>
 *  <td>NOT_AS_DESCRIBED</td>
 *  <td>The order is not as described. The authentication partner returns the order line item to the seller;
 *  refunds the buyer</td>
 *  </tr>
 *  <tr>
 *  <td>NOT_AUTHENTIC_NO_RETURN</td>
 *  <td>This enumeration value indicates that the order line item was found as counterfeit and cannot be
 *  returned to the seller because of legal constraints; refunds the buyer</td>
 *  </tr>
 *  </tbody>
 *  </table>
 * XSD Type: AuthenticityVerificationType
 */
class AuthenticityVerificationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The value in this field indicates whether the order line item has passed or failed the authenticity inspection, or if the test and/or results are still pending. The possible values returned here are <code>PENDING</code>, <code>PASSED</code>, <code>PASSED_WITH_EXCEPTION</code>, <code>PASSED_WITH_PARTIAL_FAILURE</code>, or <code>FAILED</code>.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * This field is returned after the third-party authenticator has performed the authentication inspection on the order line item.
     *  <br/><br/>
     *  Different values will be returned based on whether the item passed or failed the authentication inspection. This field is not returned when the status value of the order line item is <code>PENDING</code> or <code>PASSED</code>. The possible values returned here are <code>CUSTOMIZED</code>, <code>MISCATEGORIZED</code>, <code>NOT_AUTHENTIC</code>, <code>NOT_AS_DESCRIBED</code>, or <code>NOT_AUTHENTIC_NO_RETURN</code>.
     *
     * @var string $outcomeReason
     */
    private $outcomeReason = null;

    /**
     * This container shows service cost to the buyer for an item that will go through the Authenticity Guarantee process.
     *
     * @var \Nogrod\eBaySDK\Trading\ServiceCostType $serviceCost
     */
    private $serviceCost = null;

    /**
     * Gets as status
     *
     * The value in this field indicates whether the order line item has passed or failed the authenticity inspection, or if the test and/or results are still pending. The possible values returned here are <code>PENDING</code>, <code>PASSED</code>, <code>PASSED_WITH_EXCEPTION</code>, <code>PASSED_WITH_PARTIAL_FAILURE</code>, or <code>FAILED</code>.
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
     * The value in this field indicates whether the order line item has passed or failed the authenticity inspection, or if the test and/or results are still pending. The possible values returned here are <code>PENDING</code>, <code>PASSED</code>, <code>PASSED_WITH_EXCEPTION</code>, <code>PASSED_WITH_PARTIAL_FAILURE</code>, or <code>FAILED</code>.
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
     * Gets as outcomeReason
     *
     * This field is returned after the third-party authenticator has performed the authentication inspection on the order line item.
     *  <br/><br/>
     *  Different values will be returned based on whether the item passed or failed the authentication inspection. This field is not returned when the status value of the order line item is <code>PENDING</code> or <code>PASSED</code>. The possible values returned here are <code>CUSTOMIZED</code>, <code>MISCATEGORIZED</code>, <code>NOT_AUTHENTIC</code>, <code>NOT_AS_DESCRIBED</code>, or <code>NOT_AUTHENTIC_NO_RETURN</code>.
     *
     * @return string
     */
    public function getOutcomeReason()
    {
        return $this->outcomeReason;
    }

    /**
     * Sets a new outcomeReason
     *
     * This field is returned after the third-party authenticator has performed the authentication inspection on the order line item.
     *  <br/><br/>
     *  Different values will be returned based on whether the item passed or failed the authentication inspection. This field is not returned when the status value of the order line item is <code>PENDING</code> or <code>PASSED</code>. The possible values returned here are <code>CUSTOMIZED</code>, <code>MISCATEGORIZED</code>, <code>NOT_AUTHENTIC</code>, <code>NOT_AS_DESCRIBED</code>, or <code>NOT_AUTHENTIC_NO_RETURN</code>.
     *
     * @param string $outcomeReason
     * @return self
     */
    public function setOutcomeReason($outcomeReason)
    {
        $this->outcomeReason = $outcomeReason;
        return $this;
    }

    /**
     * Gets as serviceCost
     *
     * This container shows service cost to the buyer for an item that will go through the Authenticity Guarantee process.
     *
     * @return \Nogrod\eBaySDK\Trading\ServiceCostType
     */
    public function getServiceCost()
    {
        return $this->serviceCost;
    }

    /**
     * Sets a new serviceCost
     *
     * This container shows service cost to the buyer for an item that will go through the Authenticity Guarantee process.
     *
     * @param \Nogrod\eBaySDK\Trading\ServiceCostType $serviceCost
     * @return self
     */
    public function setServiceCost(\Nogrod\eBaySDK\Trading\ServiceCostType $serviceCost)
    {
        $this->serviceCost = $serviceCost;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getOutcomeReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OutcomeReason", $value);
        }
        $value = $this->getServiceCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ServiceCost", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AuthenticityVerificationType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}OutcomeReason');
        if (null !== $value) {
            $this->setOutcomeReason($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ServiceCost');
        if (null !== $value) {
            $this->setServiceCost(\Nogrod\eBaySDK\Trading\ServiceCostType::fromKeyValue($value));
        }
    }
}
