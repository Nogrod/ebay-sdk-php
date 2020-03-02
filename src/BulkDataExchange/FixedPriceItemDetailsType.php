<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FixedPriceItemDetailsType
 *
 * Type defining the <b>fixedPriceItemDetails</b> container, which is used to specify whether or not variation-level data is returned in the <b>ActiveInventoryReport</b> response.
 * XSD Type: FixedPriceItemDetails
 */
class FixedPriceItemDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The boolean value in this field will control whether or not the <b>Variations</b> container is returned in a <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This field is required if the <b>fixedPriceItemDetails</b> container is used in the call request.
     *
     * @var bool $includeVariations
     */
    private $includeVariations = null;

    /**
     * Gets as includeVariations
     *
     * The boolean value in this field will control whether or not the <b>Variations</b> container is returned in a <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This field is required if the <b>fixedPriceItemDetails</b> container is used in the call request.
     *
     * @return bool
     */
    public function getIncludeVariations()
    {
        return $this->includeVariations;
    }

    /**
     * Sets a new includeVariations
     *
     * The boolean value in this field will control whether or not the <b>Variations</b> container is returned in a <b>ActiveInventoryReport</b> response.
     *  <br><br>
     *  This field is required if the <b>fixedPriceItemDetails</b> container is used in the call request.
     *
     * @param bool $includeVariations
     * @return self
     */
    public function setIncludeVariations($includeVariations)
    {
        $this->includeVariations = $includeVariations;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getIncludeVariations();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}includeVariations", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}includeVariations');
        if (null !== $value) {
            $this->setIncludeVariations($value);
        }
    }
}
