<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ActiveInventoryReportResponseType
 *
 * A report that contains all of the active listings for a specific seller. The eBay
 *  servers read the token information passed in by the seller's application to
 *  determine which seller's data to retrieve.
 * XSD Type: ActiveInventoryReportResponseType
 */
class ActiveInventoryReportResponseType extends AbstractResponseType
{

    /**
     * Describes or includes keywords associated with the SKU.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SKUDetailsType[] $sKUDetails
     */
    private $sKUDetails = [
        
    ];

    /**
     * Adds as sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SKUDetailsType $sKUDetails
     */
    public function addToSKUDetails(\Nogrod\eBaySDK\MerchantData\SKUDetailsType $sKUDetails)
    {
        $this->sKUDetails[] = $sKUDetails;
        return $this;
    }

    /**
     * isset sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSKUDetails($index)
    {
        return isset($this->sKUDetails[$index]);
    }

    /**
     * unset sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSKUDetails($index)
    {
        unset($this->sKUDetails[$index]);
    }

    /**
     * Gets as sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SKUDetailsType[]
     */
    public function getSKUDetails()
    {
        return $this->sKUDetails;
    }

    /**
     * Sets a new sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SKUDetailsType[] $sKUDetails
     * @return self
     */
    public function setSKUDetails(array $sKUDetails)
    {
        $this->sKUDetails = $sKUDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSKUDetails();
        if (null !== $value && !empty($this->getSKUDetails())) {
            $writer->write(array_map(function ($v) {
                return ["SKUDetails" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SKUDetails', true);
        if (null !== $value && !empty($value)) {
            $this->setSKUDetails(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SKUDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
