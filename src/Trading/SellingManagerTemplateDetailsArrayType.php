<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerTemplateDetailsArrayType
 *
 * Type used by the <strong>SellingManagerTemplateDetailsArray</strong> container that is returned in the <strong>GetSellingManagerInventory</strong> and <strong>GetSellingManagerTemplates</strong> calls. The <strong>SellingManagerTemplateDetailsArray</strong> container consists of one or more Selling Manager Templates that match the input criteria.
 * XSD Type: SellingManagerTemplateDetailsArrayType
 */
class SellingManagerTemplateDetailsArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of detailed information for one Selling Manager Template.
     *  <br/><br/>
     *  <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that matches the input criteria.
     *  <br/><br/>
     *  <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the corresponding Selling Manager Product (if any).
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetails
     */
    private $sellingManagerTemplateDetails = [

    ];

    /**
     * Adds as sellingManagerTemplateDetails
     *
     * This container consists of detailed information for one Selling Manager Template.
     *  <br/><br/>
     *  <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that matches the input criteria.
     *  <br/><br/>
     *  <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the corresponding Selling Manager Product (if any).
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails
     */
    public function addToSellingManagerTemplateDetails(\Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails)
    {
        $this->sellingManagerTemplateDetails[] = $sellingManagerTemplateDetails;
        return $this;
    }

    /**
     * isset sellingManagerTemplateDetails
     *
     * This container consists of detailed information for one Selling Manager Template.
     *  <br/><br/>
     *  <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that matches the input criteria.
     *  <br/><br/>
     *  <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the corresponding Selling Manager Product (if any).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellingManagerTemplateDetails($index)
    {
        return isset($this->sellingManagerTemplateDetails[$index]);
    }

    /**
     * unset sellingManagerTemplateDetails
     *
     * This container consists of detailed information for one Selling Manager Template.
     *  <br/><br/>
     *  <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that matches the input criteria.
     *  <br/><br/>
     *  <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the corresponding Selling Manager Product (if any).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellingManagerTemplateDetails($index)
    {
        unset($this->sellingManagerTemplateDetails[$index]);
    }

    /**
     * Gets as sellingManagerTemplateDetails
     *
     * This container consists of detailed information for one Selling Manager Template.
     *  <br/><br/>
     *  <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that matches the input criteria.
     *  <br/><br/>
     *  <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the corresponding Selling Manager Product (if any).
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[]
     */
    public function getSellingManagerTemplateDetails()
    {
        return $this->sellingManagerTemplateDetails;
    }

    /**
     * Sets a new sellingManagerTemplateDetails
     *
     * This container consists of detailed information for one Selling Manager Template.
     *  <br/><br/>
     *  <strong>For GetSellingManagerTemplates</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that matches the input criteria.
     *  <br/><br/>
     *  <strong>For GetSellingManagerInventory</strong>: A <strong>SellingManagerTemplateDetails</strong> container is returned for each Selling Manager Template that is associated with the corresponding Selling Manager Product (if any).
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetails
     * @return self
     */
    public function setSellingManagerTemplateDetails(array $sellingManagerTemplateDetails)
    {
        $this->sellingManagerTemplateDetails = $sellingManagerTemplateDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSellingManagerTemplateDetails();
        if (null !== $value && !empty($this->getSellingManagerTemplateDetails())) {
            $writer->write(array_map(function ($v) {
                return ["SellingManagerTemplateDetails" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerTemplateDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setSellingManagerTemplateDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
