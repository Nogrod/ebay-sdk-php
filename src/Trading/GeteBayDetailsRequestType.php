<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GeteBayDetailsRequestType
 *
 * This is the base request type for the <b>GeteBayDetails</b> call. This call retrieves the latest eBay feature-related metadata values that are supported when listing items. This metadata includes country codes, currency codes, Item Specifics thresholds, supported Return Policy values, available shipping carriers and shipping service options, and more. This call may be used to keep metadata up-to-date in your applications.
 *  <br><br>
 *  In some cases, the data returned in the response will vary according to the eBay site that you use for the request.
 * XSD Type: GeteBayDetailsRequestType
 */
class GeteBayDetailsRequestType extends AbstractRequestType
{
    /**
     * One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     *
     * @var string[] $detailName
     */
    private $detailName = [

    ];

    /**
     * Adds as detailName
     *
     * One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     *
     * @return self
     * @param string $detailName
     */
    public function addToDetailName($detailName)
    {
        $this->detailName[] = $detailName;
        return $this;
    }

    /**
     * isset detailName
     *
     * One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetailName($index)
    {
        return isset($this->detailName[$index]);
    }

    /**
     * unset detailName
     *
     * One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetailName($index)
    {
        unset($this->detailName[$index]);
    }

    /**
     * Gets as detailName
     *
     * One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     *
     * @return string[]
     */
    public function getDetailName()
    {
        return $this->detailName;
    }

    /**
     * Sets a new detailName
     *
     * One or more <b>DetailName</b> fields may be used to control the the type of metadata that is returned in the response. If no <b>DetailName</b> fields are used, all metadata will be returned in the response. It is a good idea to familiarize yourself with the metadata that can be returned with <b>GeteBayDetails</b> by reading through the enumeration values in <a href="types/DetailNameCodeType.html">DetailNameCodeType</a>.
     *
     * @param string $detailName
     * @return self
     */
    public function setDetailName(array $detailName)
    {
        $this->detailName = $detailName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getDetailName();
        if (null !== $value && [] !== $this->getDetailName()) {
            $writer->write(array_map(function ($v) {return ["DetailName" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailName');
        if (null !== $value) {
            $this->setDetailName($value);
        }
    }
}
