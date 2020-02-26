<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing VeROReasonCodeDetailsType
 *
 * Container for reason code details for all sites.
 * XSD Type: VeROReasonCodeDetailsType
 */
class VeROReasonCodeDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Contains reason code details for a site.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VeROSiteDetailType[] $veROSiteDetail
     */
    private $veROSiteDetail = [
        
    ];

    /**
     * Adds as veROSiteDetail
     *
     * Contains reason code details for a site.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\VeROSiteDetailType $veROSiteDetail
     */
    public function addToVeROSiteDetail(\Nogrod\eBaySDK\MerchantData\VeROSiteDetailType $veROSiteDetail)
    {
        $this->veROSiteDetail[] = $veROSiteDetail;
        return $this;
    }

    /**
     * isset veROSiteDetail
     *
     * Contains reason code details for a site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVeROSiteDetail($index)
    {
        return isset($this->veROSiteDetail[$index]);
    }

    /**
     * unset veROSiteDetail
     *
     * Contains reason code details for a site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVeROSiteDetail($index)
    {
        unset($this->veROSiteDetail[$index]);
    }

    /**
     * Gets as veROSiteDetail
     *
     * Contains reason code details for a site.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VeROSiteDetailType[]
     */
    public function getVeROSiteDetail()
    {
        return $this->veROSiteDetail;
    }

    /**
     * Sets a new veROSiteDetail
     *
     * Contains reason code details for a site.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VeROSiteDetailType[] $veROSiteDetail
     * @return self
     */
    public function setVeROSiteDetail(array $veROSiteDetail)
    {
        $this->veROSiteDetail = $veROSiteDetail;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVeROSiteDetail();
        if (null !== $value && !empty($this->getVeROSiteDetail())) {
            $writer->write(array_map(function ($v) {
                return ["VeROSiteDetail" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROSiteDetail', true);
        if (null !== $value && !empty($value)) {
            $this->setVeROSiteDetail(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\VeROSiteDetailType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
