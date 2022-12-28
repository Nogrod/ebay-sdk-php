<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SoldReportFilterType
 *
 * Type defining the <b>soldReportFilter</b> container, which allows the user to control whether (and when) the buyers' shipping addresses are returned in Merchant Data's <b>SoldReport</b> response.
 *  <br/><br/>
 *  The <b>soldReportFilter</b> container is only applicable if the <b>downloadJobType</b> value is set to 'SoldReport'.
 * XSD Type: SoldReportFilter
 */
class SoldReportFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The enumeration value in this field will control whether buyers' shipping addresses are always returned in Merchant Data's <b>SoldReport</b> response, or only when payment has been cleared.
     *
     * @var string $includeShippingAddress
     */
    private $includeShippingAddress = null;

    /**
     * Gets as includeShippingAddress
     *
     * The enumeration value in this field will control whether buyers' shipping addresses are always returned in Merchant Data's <b>SoldReport</b> response, or only when payment has been cleared.
     *
     * @return string
     */
    public function getIncludeShippingAddress()
    {
        return $this->includeShippingAddress;
    }

    /**
     * Sets a new includeShippingAddress
     *
     * The enumeration value in this field will control whether buyers' shipping addresses are always returned in Merchant Data's <b>SoldReport</b> response, or only when payment has been cleared.
     *
     * @param string $includeShippingAddress
     * @return self
     */
    public function setIncludeShippingAddress($includeShippingAddress)
    {
        $this->includeShippingAddress = $includeShippingAddress;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getIncludeShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeShippingAddress", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeShippingAddress');
        if (null !== $value) {
            $this->setIncludeShippingAddress($value);
        }
    }
}
