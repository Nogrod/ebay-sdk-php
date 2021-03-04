<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerTemplatesResponseType
 *
 * The base response of the <b>GetSellingManagerTemplates</b> call. A <b>SellingManagerTemplateDetails</b> container is returned for each Selling Manager Template that matches the input criteria.
 * XSD Type: GetSellingManagerTemplatesResponseType
 */
class GetSellingManagerTemplatesResponseType extends AbstractResponseType
{
    /**
     * This container consists of an array of Selling Manager Templates that match the input criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetailsArray
     */
    private $sellingManagerTemplateDetailsArray = null;

    /**
     * Adds as sellingManagerTemplateDetails
     *
     * This container consists of an array of Selling Manager Templates that match the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails
     */
    public function addToSellingManagerTemplateDetailsArray(\Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType $sellingManagerTemplateDetails)
    {
        $this->sellingManagerTemplateDetailsArray[] = $sellingManagerTemplateDetails;
        return $this;
    }

    /**
     * isset sellingManagerTemplateDetailsArray
     *
     * This container consists of an array of Selling Manager Templates that match the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellingManagerTemplateDetailsArray($index)
    {
        return isset($this->sellingManagerTemplateDetailsArray[$index]);
    }

    /**
     * unset sellingManagerTemplateDetailsArray
     *
     * This container consists of an array of Selling Manager Templates that match the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellingManagerTemplateDetailsArray($index)
    {
        unset($this->sellingManagerTemplateDetailsArray[$index]);
    }

    /**
     * Gets as sellingManagerTemplateDetailsArray
     *
     * This container consists of an array of Selling Manager Templates that match the input criteria.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[]
     */
    public function getSellingManagerTemplateDetailsArray()
    {
        return $this->sellingManagerTemplateDetailsArray;
    }

    /**
     * Sets a new sellingManagerTemplateDetailsArray
     *
     * This container consists of an array of Selling Manager Templates that match the input criteria.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType[] $sellingManagerTemplateDetailsArray
     * @return self
     */
    public function setSellingManagerTemplateDetailsArray(array $sellingManagerTemplateDetailsArray)
    {
        $this->sellingManagerTemplateDetailsArray = $sellingManagerTemplateDetailsArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellingManagerTemplateDetailsArray();
        if (null !== $value && !empty($this->getSellingManagerTemplateDetailsArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellingManagerTemplateDetailsArray", array_map(function ($v) {
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellingManagerTemplateDetailsArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSellingManagerTemplateDetailsArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellingManagerTemplateDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
