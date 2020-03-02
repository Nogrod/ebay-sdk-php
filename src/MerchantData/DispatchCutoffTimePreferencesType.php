<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DispatchCutoffTimePreferencesType
 *
 * Contains a seller's cut off time preferences for same day handling for item shipping.
 * XSD Type: DispatchCutoffTimePreferencesType
 */
class DispatchCutoffTimePreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * If the seller specifies a <strong>DispatchTimeMax</strong> value of <code>0</code> to indicate same-day handling for an item, the seller's shipping commitment depends on the value of <strong>CutoffTime</strong> for the eBay site on which the item is listed.
     *  <br/><br/>
     *  For orders placed (and cleared payment received) before the indicated cut off time, the item must be shipped by the end of the current day. For orders completed on or after the cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time is not applicable. This cutoff time cannot be changed with the <strong>SetUserPreferences</strong> call, and the value returned in the <strong>GetUserPreferences</strong> call may not be accurate if the seller has customized this cutoff time for one or more business days. In order for the seller to change and/or confirm the actual order cutoff times for same-day handling, that seller should go to Shipping Preferences in My eBay.
     *  </span>
     *  <strong>CutoffTime</strong> has a default initial value for each eBay site, but you can use <strong>SetUserPreferences</strong> to override the default for individual sellers. The default value for most eBay sites is 2:00PM local time. Enter times in 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for <strong>TimeZoneID</strong>.
     *  <br/>
     *
     * @var \DateTime $cutoffTime
     */
    private $cutoffTime = null;

    /**
     * Gets as cutoffTime
     *
     * If the seller specifies a <strong>DispatchTimeMax</strong> value of <code>0</code> to indicate same-day handling for an item, the seller's shipping commitment depends on the value of <strong>CutoffTime</strong> for the eBay site on which the item is listed.
     *  <br/><br/>
     *  For orders placed (and cleared payment received) before the indicated cut off time, the item must be shipped by the end of the current day. For orders completed on or after the cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time is not applicable. This cutoff time cannot be changed with the <strong>SetUserPreferences</strong> call, and the value returned in the <strong>GetUserPreferences</strong> call may not be accurate if the seller has customized this cutoff time for one or more business days. In order for the seller to change and/or confirm the actual order cutoff times for same-day handling, that seller should go to Shipping Preferences in My eBay.
     *  </span>
     *  <strong>CutoffTime</strong> has a default initial value for each eBay site, but you can use <strong>SetUserPreferences</strong> to override the default for individual sellers. The default value for most eBay sites is 2:00PM local time. Enter times in 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for <strong>TimeZoneID</strong>.
     *  <br/>
     *
     * @return \DateTime
     */
    public function getCutoffTime()
    {
        return $this->cutoffTime;
    }

    /**
     * Sets a new cutoffTime
     *
     * If the seller specifies a <strong>DispatchTimeMax</strong> value of <code>0</code> to indicate same-day handling for an item, the seller's shipping commitment depends on the value of <strong>CutoffTime</strong> for the eBay site on which the item is listed.
     *  <br/><br/>
     *  For orders placed (and cleared payment received) before the indicated cut off time, the item must be shipped by the end of the current day. For orders completed on or after the cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For sellers opted in to the feature that supports different order cutoff times for each business day, the order cutoff time is not applicable. This cutoff time cannot be changed with the <strong>SetUserPreferences</strong> call, and the value returned in the <strong>GetUserPreferences</strong> call may not be accurate if the seller has customized this cutoff time for one or more business days. In order for the seller to change and/or confirm the actual order cutoff times for same-day handling, that seller should go to Shipping Preferences in My eBay.
     *  </span>
     *  <strong>CutoffTime</strong> has a default initial value for each eBay site, but you can use <strong>SetUserPreferences</strong> to override the default for individual sellers. The default value for most eBay sites is 2:00PM local time. Enter times in 30 minute increments from the top of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for <strong>TimeZoneID</strong>.
     *  <br/>
     *
     * @param \DateTime $cutoffTime
     * @return self
     */
    public function setCutoffTime(\DateTime $cutoffTime)
    {
        $this->cutoffTime = $cutoffTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCutoffTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CutoffTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CutoffTime');
        if (null !== $value) {
            $this->setCutoffTime($value);
        }
    }
}
