<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SearchStandingDashboardType
 *
 * Provides information about the visibility level you've earned for your eBay listings.
 *  When you have a better search standing, your listings may receive higher
 *  placement in Best Match search results.
 * XSD Type: SearchStandingDashboardType
 */
class SearchStandingDashboardType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Your earned search standing status. To qualify for a Standard or Raised
     *  search standing, make sure your ratings meet or exceed the required minimum
     *  levels in buyer satisfaction (see <b>BuyerSatisfaction.Status</b> in this call) and
     *  detailed seller ratings (DSRs). See <b>GetFeedback</b> for details.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * Your earned search standing status. To qualify for a Standard or Raised
     *  search standing, make sure your ratings meet or exceed the required minimum
     *  levels in buyer satisfaction (see <b>BuyerSatisfaction.Status</b> in this call) and
     *  detailed seller ratings (DSRs). See <b>GetFeedback</b> for details.
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
     * Your earned search standing status. To qualify for a Standard or Raised
     *  search standing, make sure your ratings meet or exceed the required minimum
     *  levels in buyer satisfaction (see <b>BuyerSatisfaction.Status</b> in this call) and
     *  detailed seller ratings (DSRs). See <b>GetFeedback</b> for details.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
    }
}
