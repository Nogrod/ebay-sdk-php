<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MaximumItemRequirementsType
 *
 * Type used by the <b>MaximumItemRequirements</b> container to specify the maximum quantity of an order line item that a prospective buyer may purchase during any given 10-day period.
 * XSD Type: MaximumItemRequirementsType
 */
class MaximumItemRequirementsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is conditionally required if the <b>MaximumItemRequirements</b>
     *  container is used.
     *  <br/><br/>
     *  The value of this field specifies the maximum quantity of an order line item that a prospective buyer may
     *  purchase from the seller during any given 10-day period. The prospective buyer will be blocked
     *  from bidding/buying once this value is reached.
     *  <br/><br/>
     *  <b>Valid values
     *  for the US site:</b> 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 50, 75, and 100.
     *  <br/>
     *  To see the valid values for your site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>BuyerRequirementDetails</b>,
     *  and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MaximumItemCount</b> fields.
     *  <br/><br/>
     *  If the <b>MaximumItemRequirements.MinimumFeedbackScore</b> field is also
     *  specified, the <b>MaximumItemCount</b> limit will only apply to those
     *  prospective buyers who don't meet the specified Minimum Feedback Score threshold.
     *
     * @var int $maximumItemCount
     */
    private $maximumItemCount = null;

    /**
     * This is an optional field that is ignored if a <b>MaximumItemCount</b>
     *  value has not been provided.
     *  <br><br>
     *  If this field is used, a prospective buyer is blocked from bidding/buying if they have
     *  reached or exceeded the <b>MaximumItemCount</b> and their feedback score
     *  is less than the value of this field.
     *  <br/><br/>
     *  <b>Valid values for the US site:</b> 0, 1, 2, 3, 4, and 5.
     *  <br/>
     *  To see the valid values for your site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>BuyerRequirementDetails</b>,
     *  and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MinimumFeedbackScore</b> fields.
     *
     * @var int $minimumFeedbackScore
     */
    private $minimumFeedbackScore = null;

    /**
     * Gets as maximumItemCount
     *
     * This field is conditionally required if the <b>MaximumItemRequirements</b>
     *  container is used.
     *  <br/><br/>
     *  The value of this field specifies the maximum quantity of an order line item that a prospective buyer may
     *  purchase from the seller during any given 10-day period. The prospective buyer will be blocked
     *  from bidding/buying once this value is reached.
     *  <br/><br/>
     *  <b>Valid values
     *  for the US site:</b> 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 50, 75, and 100.
     *  <br/>
     *  To see the valid values for your site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>BuyerRequirementDetails</b>,
     *  and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MaximumItemCount</b> fields.
     *  <br/><br/>
     *  If the <b>MaximumItemRequirements.MinimumFeedbackScore</b> field is also
     *  specified, the <b>MaximumItemCount</b> limit will only apply to those
     *  prospective buyers who don't meet the specified Minimum Feedback Score threshold.
     *
     * @return int
     */
    public function getMaximumItemCount()
    {
        return $this->maximumItemCount;
    }

    /**
     * Sets a new maximumItemCount
     *
     * This field is conditionally required if the <b>MaximumItemRequirements</b>
     *  container is used.
     *  <br/><br/>
     *  The value of this field specifies the maximum quantity of an order line item that a prospective buyer may
     *  purchase from the seller during any given 10-day period. The prospective buyer will be blocked
     *  from bidding/buying once this value is reached.
     *  <br/><br/>
     *  <b>Valid values
     *  for the US site:</b> 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 25, 50, 75, and 100.
     *  <br/>
     *  To see the valid values for your site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>BuyerRequirementDetails</b>,
     *  and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MaximumItemCount</b> fields.
     *  <br/><br/>
     *  If the <b>MaximumItemRequirements.MinimumFeedbackScore</b> field is also
     *  specified, the <b>MaximumItemCount</b> limit will only apply to those
     *  prospective buyers who don't meet the specified Minimum Feedback Score threshold.
     *
     * @param int $maximumItemCount
     * @return self
     */
    public function setMaximumItemCount($maximumItemCount)
    {
        $this->maximumItemCount = $maximumItemCount;
        return $this;
    }

    /**
     * Gets as minimumFeedbackScore
     *
     * This is an optional field that is ignored if a <b>MaximumItemCount</b>
     *  value has not been provided.
     *  <br><br>
     *  If this field is used, a prospective buyer is blocked from bidding/buying if they have
     *  reached or exceeded the <b>MaximumItemCount</b> and their feedback score
     *  is less than the value of this field.
     *  <br/><br/>
     *  <b>Valid values for the US site:</b> 0, 1, 2, 3, 4, and 5.
     *  <br/>
     *  To see the valid values for your site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>BuyerRequirementDetails</b>,
     *  and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MinimumFeedbackScore</b> fields.
     *
     * @return int
     */
    public function getMinimumFeedbackScore()
    {
        return $this->minimumFeedbackScore;
    }

    /**
     * Sets a new minimumFeedbackScore
     *
     * This is an optional field that is ignored if a <b>MaximumItemCount</b>
     *  value has not been provided.
     *  <br><br>
     *  If this field is used, a prospective buyer is blocked from bidding/buying if they have
     *  reached or exceeded the <b>MaximumItemCount</b> and their feedback score
     *  is less than the value of this field.
     *  <br/><br/>
     *  <b>Valid values for the US site:</b> 0, 1, 2, 3, 4, and 5.
     *  <br/>
     *  To see the valid values for your site, call <b>GeteBayDetails</b>
     *  with <b>DetailName</b> set to <b>BuyerRequirementDetails</b>,
     *  and then look for the <b>BuyerRequirementDetails.MaximumItemRequirements.MinimumFeedbackScore</b> fields.
     *
     * @param int $minimumFeedbackScore
     * @return self
     */
    public function setMinimumFeedbackScore($minimumFeedbackScore)
    {
        $this->minimumFeedbackScore = $minimumFeedbackScore;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaximumItemCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaximumItemCount", $value);
        }
        $value = $this->getMinimumFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaximumItemCount');
        if (null !== $value) {
            $this->setMaximumItemCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MinimumFeedbackScore');
        if (null !== $value) {
            $this->setMinimumFeedbackScore($value);
        }
    }
}
