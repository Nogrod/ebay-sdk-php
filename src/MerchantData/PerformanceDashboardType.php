<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PerformanceDashboardType
 *
 * Type defining the <b>Performance</b> container returned in the
 *  <b>GetSellerDashboard</b> response. The <b>Performance</b>
 *  container consists of the seller's overall selling performance rating on all eBay sites
 *  on which the seller is sellling, as well as any alerts related to performance.
 * XSD Type: PerformanceDashboardType
 */
class PerformanceDashboardType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The eBay site(s) on which the seller's performance is being evaluated.
     *  <br />
     *  A seller's performance status is evaluated for three specific regions: US,
     *  UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is
     *  repeated to show all sites in each region, if applicable.
     *
     * @var string[] $site
     */
    private $site = [

    ];

    /**
     * This field indicates the seller's performance rating. This rating is an overall
     *  performance for the eBay site(s) found in the <b>Site</b> field(s).
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The <b>Performance.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages related to the seller's
     *  performance rating.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType $alert
     */
    private $alert = null;

    /**
     * Adds as site
     *
     * The eBay site(s) on which the seller's performance is being evaluated.
     *  <br />
     *  A seller's performance status is evaluated for three specific regions: US,
     *  UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is
     *  repeated to show all sites in each region, if applicable.
     *
     * @return self
     * @param string $site
     */
    public function addToSite($site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * The eBay site(s) on which the seller's performance is being evaluated.
     *  <br />
     *  A seller's performance status is evaluated for three specific regions: US,
     *  UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is
     *  repeated to show all sites in each region, if applicable.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSite($index)
    {
        return isset($this->site[$index]);
    }

    /**
     * unset site
     *
     * The eBay site(s) on which the seller's performance is being evaluated.
     *  <br />
     *  A seller's performance status is evaluated for three specific regions: US,
     *  UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is
     *  repeated to show all sites in each region, if applicable.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSite($index)
    {
        unset($this->site[$index]);
    }

    /**
     * Gets as site
     *
     * The eBay site(s) on which the seller's performance is being evaluated.
     *  <br />
     *  A seller's performance status is evaluated for three specific regions: US,
     *  UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is
     *  repeated to show all sites in each region, if applicable.
     *
     * @return string[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * The eBay site(s) on which the seller's performance is being evaluated.
     *  <br />
     *  A seller's performance status is evaluated for three specific regions: US,
     *  UK/Ireland, and Germany/Switzerland/Austria. The <b>Site</b> field is
     *  repeated to show all sites in each region, if applicable.
     *
     * @param string $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as status
     *
     * This field indicates the seller's performance rating. This rating is an overall
     *  performance for the eBay site(s) found in the <b>Site</b> field(s).
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
     * This field indicates the seller's performance rating. This rating is an overall
     *  performance for the eBay site(s) found in the <b>Site</b> field(s).
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
     * Gets as alert
     *
     * The <b>Performance.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages related to the seller's
     *  performance rating.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * The <b>Performance.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages related to the seller's
     *  performance rating.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType $alert
     * @return self
     */
    public function setAlert(\Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType $alert)
    {
        $this->alert = $alert;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSite();
        if (null !== $value && !empty($this->getSite())) {
            $writer->write(array_map(function ($v) {return ["Site" => $v];}, $value));
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getAlert();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Alert", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site', true);
        if (null !== $value && !empty($value)) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Alert');
        if (null !== $value) {
            $this->setAlert(\Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType::fromKeyValue($value));
        }
    }
}
