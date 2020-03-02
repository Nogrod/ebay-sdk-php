<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerReturnPreferencesType
 *
 * Type defining the <b>SellerReturnPreferences</b> container, which consists of the <b>OptedIn</b> flag that indicates whether or not the seller has opted in to eBay Managed Returns.
 * XSD Type: SellerReturnPreferencesType
 */
class SellerReturnPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This flag indicates whether or not an eligible seller has opted in to eBay
     *  Managed Returns through the Return Preferences of My eBay.
     *
     * @var bool $optedIn
     */
    private $optedIn = null;

    /**
     * Gets as optedIn
     *
     * This flag indicates whether or not an eligible seller has opted in to eBay
     *  Managed Returns through the Return Preferences of My eBay.
     *
     * @return bool
     */
    public function getOptedIn()
    {
        return $this->optedIn;
    }

    /**
     * Sets a new optedIn
     *
     * This flag indicates whether or not an eligible seller has opted in to eBay
     *  Managed Returns through the Return Preferences of My eBay.
     *
     * @param bool $optedIn
     * @return self
     */
    public function setOptedIn($optedIn)
    {
        $this->optedIn = $optedIn;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getOptedIn();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OptedIn", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OptedIn');
        if (null !== $value) {
            $this->setOptedIn($value);
        }
    }
}
