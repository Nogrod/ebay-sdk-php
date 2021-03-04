<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DigitalGoodInfoType
 *
 * This type is used by the <b>DigitalGoodInfo</b> container, which is used in <b>Add</b>/<b>Relist</b>/<b>Revise</b>/<b>Verify</b> listing calls to designate the listing as a digital gift card listing.
 * XSD Type: DigitalGoodInfoType
 */
class DigitalGoodInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards.
     *  <br><br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, use the <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in a <b>CategoryID</b> value and a <b>DigitalGoodDeliveryEnabled</b> value in the <b>FeatureID</b> field. Look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @var bool $digitalDelivery
     */
    private $digitalDelivery = null;

    /**
     * Gets as digitalDelivery
     *
     * This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards.
     *  <br><br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, use the <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in a <b>CategoryID</b> value and a <b>DigitalGoodDeliveryEnabled</b> value in the <b>FeatureID</b> field. Look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @return bool
     */
    public function getDigitalDelivery()
    {
        return $this->digitalDelivery;
    }

    /**
     * Sets a new digitalDelivery
     *
     * This field must be included in the request and set to <code>true</code> if the seller plans to list a digital gift card in a category that supports digital gift cards.
     *  <br><br>
     *  To verify if a specific category on a specific eBay site supports digital gift card listings, use the <a href="http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/GetCategoryFeatures.html">GetCategoryFeatures</a> call, passing in a <b>CategoryID</b> value and a <b>DigitalGoodDeliveryEnabled</b> value in the <b>FeatureID</b> field. Look for a <code>true</code> value in the <b>DigitalGoodDeliveryEnabled</b> field of the corresponding <b>Category</b> node (match up the <b>CategoryID</b> values if more than one Category IDs were passed in the request).
     *
     * @param bool $digitalDelivery
     * @return self
     */
    public function setDigitalDelivery($digitalDelivery)
    {
        $this->digitalDelivery = $digitalDelivery;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDigitalDelivery();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DigitalDelivery", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DigitalDelivery');
        if (null !== $value) {
            $this->setDigitalDelivery($value);
        }
    }
}
