<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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
     * @var \Nogrod\eBaySDK\Trading\VeROSiteDetailType[] $veROSiteDetail
     */
    private $veROSiteDetail = [

    ];

    /**
     * Adds as veROSiteDetail
     *
     * Contains reason code details for a site.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\VeROSiteDetailType $veROSiteDetail
     */
    public function addToVeROSiteDetail(\Nogrod\eBaySDK\Trading\VeROSiteDetailType $veROSiteDetail)
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
     * @return \Nogrod\eBaySDK\Trading\VeROSiteDetailType[]
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
     * @param \Nogrod\eBaySDK\Trading\VeROSiteDetailType[] $veROSiteDetail
     * @return self
     */
    public function setVeROSiteDetail(array $veROSiteDetail)
    {
        $this->veROSiteDetail = $veROSiteDetail;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getVeROSiteDetail();
        if (null !== $value && [] !== $this->getVeROSiteDetail()) {
            $writer->write(array_map(function ($v) {return ["VeROSiteDetail" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\VeROReasonCodeDetailsType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROSiteDetail');
        if (null !== $value) {
            $this->setVeROSiteDetail(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\VeROSiteDetailType::fromKeyValue($v);}, $value));
        }
    }
}
