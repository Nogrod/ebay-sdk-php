<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PolicyComplianceDashboardType
 *
 * This type has been deprecated.
 * XSD Type: PolicyComplianceDashboardType
 */
class PolicyComplianceDashboardType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerDashboardAlertType[] $alert
     */
    private $alert = [
        
    ];

    /**
     * Gets as status
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * Adds as alert
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellerDashboardAlertType $alert
     */
    public function addToAlert(\Nogrod\eBaySDK\Trading\SellerDashboardAlertType $alert)
    {
        $this->alert[] = $alert;
        return $this;
    }

    /**
     * isset alert
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlert($index)
    {
        return isset($this->alert[$index]);
    }

    /**
     * unset alert
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlert($index)
    {
        unset($this->alert[$index]);
    }

    /**
     * Gets as alert
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerDashboardAlertType[]
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerDashboardAlertType[] $alert
     * @return self
     */
    public function setAlert(array $alert)
    {
        $this->alert = $alert;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getAlert();
        if (null !== $value && !empty($this->getAlert())) {
            $writer->write(array_map(function ($v) {
                return ["Alert" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Alert', true);
        if (null !== $value && !empty($value)) {
            $this->setAlert(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellerDashboardAlertType::fromKeyValue($v);
            }, $value));
        }
    }
}
