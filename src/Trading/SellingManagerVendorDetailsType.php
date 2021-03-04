<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerVendorDetailsType
 *
 * Describes vendor information.
 * XSD Type: SellingManagerVendorDetailsType
 */
class SellingManagerVendorDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Primary vendor name. Vendor information is returned only if it has been set.
     *
     * @var string $vendorName
     */
    private $vendorName = null;

    /**
     * Contact information of vendor. Vendor information is returned only if it has been set.
     *
     * @var string $vendorContactInfo
     */
    private $vendorContactInfo = null;

    /**
     * Gets as vendorName
     *
     * Primary vendor name. Vendor information is returned only if it has been set.
     *
     * @return string
     */
    public function getVendorName()
    {
        return $this->vendorName;
    }

    /**
     * Sets a new vendorName
     *
     * Primary vendor name. Vendor information is returned only if it has been set.
     *
     * @param string $vendorName
     * @return self
     */
    public function setVendorName($vendorName)
    {
        $this->vendorName = $vendorName;
        return $this;
    }

    /**
     * Gets as vendorContactInfo
     *
     * Contact information of vendor. Vendor information is returned only if it has been set.
     *
     * @return string
     */
    public function getVendorContactInfo()
    {
        return $this->vendorContactInfo;
    }

    /**
     * Sets a new vendorContactInfo
     *
     * Contact information of vendor. Vendor information is returned only if it has been set.
     *
     * @param string $vendorContactInfo
     * @return self
     */
    public function setVendorContactInfo($vendorContactInfo)
    {
        $this->vendorContactInfo = $vendorContactInfo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVendorName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VendorName", $value);
        }
        $value = $this->getVendorContactInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VendorContactInfo", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VendorName');
        if (null !== $value) {
            $this->setVendorName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VendorContactInfo');
        if (null !== $value) {
            $this->setVendorContactInfo($value);
        }
    }
}
