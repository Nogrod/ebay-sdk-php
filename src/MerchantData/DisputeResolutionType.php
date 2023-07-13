<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeResolutionType
 *
 * Type used by the <strong>DisputeResolution</strong> container of <strong>GetUserDisputes</strong>, which provides details about the resolution of an Unpaid Item case. An Unpaid Item case can have a resolution even if the seller does not receive payment. A separate <strong>DisputeResolution</strong> container is returned for each different outcome. For example, if the resolution including the seller getting a Final Value Fee credit and the buyer getting an Unpaid Item strike, a separate <strong>DisputeResolution</strong> container is returned for each of these outcomes.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <strong>GetUserDisputes</strong> call of the Trading API now only supports Unpaid Item cases, and no longer supports Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR or SNAD case through eBay's Resolution Center, and this call also does not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
 * XSD Type: DisputeResolutionType
 */
class DisputeResolutionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The action resulting from the resolution, affecting either
     *  the buyer or the seller.
     *
     * @var string $disputeResolutionRecordType
     */
    private $disputeResolutionRecordType = null;

    /**
     * The reason for the resolution.
     *
     * @var string $disputeResolutionReason
     */
    private $disputeResolutionReason = null;

    /**
     * The date and time of the outcome that resulted from the resolution of the Unpaid Item case, in GMT.
     *
     * @var \DateTime $resolutionTime
     */
    private $resolutionTime = null;

    /**
     * Gets as disputeResolutionRecordType
     *
     * The action resulting from the resolution, affecting either
     *  the buyer or the seller.
     *
     * @return string
     */
    public function getDisputeResolutionRecordType()
    {
        return $this->disputeResolutionRecordType;
    }

    /**
     * Sets a new disputeResolutionRecordType
     *
     * The action resulting from the resolution, affecting either
     *  the buyer or the seller.
     *
     * @param string $disputeResolutionRecordType
     * @return self
     */
    public function setDisputeResolutionRecordType($disputeResolutionRecordType)
    {
        $this->disputeResolutionRecordType = $disputeResolutionRecordType;
        return $this;
    }

    /**
     * Gets as disputeResolutionReason
     *
     * The reason for the resolution.
     *
     * @return string
     */
    public function getDisputeResolutionReason()
    {
        return $this->disputeResolutionReason;
    }

    /**
     * Sets a new disputeResolutionReason
     *
     * The reason for the resolution.
     *
     * @param string $disputeResolutionReason
     * @return self
     */
    public function setDisputeResolutionReason($disputeResolutionReason)
    {
        $this->disputeResolutionReason = $disputeResolutionReason;
        return $this;
    }

    /**
     * Gets as resolutionTime
     *
     * The date and time of the outcome that resulted from the resolution of the Unpaid Item case, in GMT.
     *
     * @return \DateTime
     */
    public function getResolutionTime()
    {
        return $this->resolutionTime;
    }

    /**
     * Sets a new resolutionTime
     *
     * The date and time of the outcome that resulted from the resolution of the Unpaid Item case, in GMT.
     *
     * @param \DateTime $resolutionTime
     * @return self
     */
    public function setResolutionTime(\DateTime $resolutionTime)
    {
        $this->resolutionTime = $resolutionTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisputeResolutionRecordType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeResolutionRecordType", $value);
        }
        $value = $this->getDisputeResolutionReason();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason", $value);
        }
        $value = $this->getResolutionTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResolutionTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionRecordType');
        if (null !== $value) {
            $this->setDisputeResolutionRecordType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeResolutionReason');
        if (null !== $value) {
            $this->setDisputeResolutionReason($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResolutionTime');
        if (null !== $value) {
            $this->setResolutionTime(new \DateTime($value));
        }
    }
}
