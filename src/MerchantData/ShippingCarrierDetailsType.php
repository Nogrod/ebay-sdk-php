<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingCarrierDetailsType
 *
 * Details about type of Carrier used to ship an item.
 * XSD Type: ShippingCarrierDetailsType
 */
class ShippingCarrierDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Numeric identifier.
     *  Some applications use this ID
     *  to look up shipping Carriers more efficiently.
     *
     * @var int $shippingCarrierID
     */
    private $shippingCarrierID = null;

    /**
     * Display string that applications can use to present a list of shipping carriers in
     *  a more user-friendly format (such as in a drop-down list).
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The code for the shipping carrier.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @var string $shippingCarrier
     */
    private $shippingCarrier = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as shippingCarrierID
     *
     * Numeric identifier.
     *  Some applications use this ID
     *  to look up shipping Carriers more efficiently.
     *
     * @return int
     */
    public function getShippingCarrierID()
    {
        return $this->shippingCarrierID;
    }

    /**
     * Sets a new shippingCarrierID
     *
     * Numeric identifier.
     *  Some applications use this ID
     *  to look up shipping Carriers more efficiently.
     *
     * @param int $shippingCarrierID
     * @return self
     */
    public function setShippingCarrierID($shippingCarrierID)
    {
        $this->shippingCarrierID = $shippingCarrierID;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present a list of shipping carriers in
     *  a more user-friendly format (such as in a drop-down list).
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Display string that applications can use to present a list of shipping carriers in
     *  a more user-friendly format (such as in a drop-down list).
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as shippingCarrier
     *
     * The code for the shipping carrier.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @return string
     */
    public function getShippingCarrier()
    {
        return $this->shippingCarrier;
    }

    /**
     * Sets a new shippingCarrier
     *
     * The code for the shipping carrier.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> Commonly used shipping carriers can also be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field.
     *  </span>
     *
     * @param string $shippingCarrier
     * @return self
     */
    public function setShippingCarrier($shippingCarrier)
    {
        $this->shippingCarrier = $shippingCarrier;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingCarrierID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCarrierID", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getShippingCarrier();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCarrier", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCarrierID');
        if (null !== $value) {
            $this->setShippingCarrierID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCarrier');
        if (null !== $value) {
            $this->setShippingCarrier($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
