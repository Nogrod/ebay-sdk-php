<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VeROSiteDetailType
 *
 * Type used by the <b>VeROSiteDetailType</b> container, which is returned in <b>GetVeROReasonCodeDetails</b>. Each <b>VeROSiteDetailType</b> container will contain one or more reasons how an eBay listing could possibly infringe upon the intellectual property rights of a product owner.
 * XSD Type: VeROSiteDetailType
 */
class VeROSiteDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This enumeration value indicates the eBay site for which reason code details are returned.
     *
     * @var string $site
     */
    private $site = null;

    /**
     * This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ReasonCodeDetailType[] $reasonCodeDetail
     */
    private $reasonCodeDetail = [

    ];

    /**
     * Gets as site
     *
     * This enumeration value indicates the eBay site for which reason code details are returned.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * This enumeration value indicates the eBay site for which reason code details are returned.
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Adds as reasonCodeDetail
     *
     * This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ReasonCodeDetailType $reasonCodeDetail
     */
    public function addToReasonCodeDetail(\Nogrod\eBaySDK\MerchantData\ReasonCodeDetailType $reasonCodeDetail)
    {
        $this->reasonCodeDetail[] = $reasonCodeDetail;
        return $this;
    }

    /**
     * isset reasonCodeDetail
     *
     * This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReasonCodeDetail($index)
    {
        return isset($this->reasonCodeDetail[$index]);
    }

    /**
     * unset reasonCodeDetail
     *
     * This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReasonCodeDetail($index)
    {
        unset($this->reasonCodeDetail[$index]);
    }

    /**
     * Gets as reasonCodeDetail
     *
     * This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ReasonCodeDetailType[]
     */
    public function getReasonCodeDetail()
    {
        return $this->reasonCodeDetail;
    }

    /**
     * Sets a new reasonCodeDetail
     *
     * This container includes brief and detailed text descriptions for the VeRO program intellectual property right infringement reason. There can be multiple <b>ReasonCodeDetail</b> containers returned for each eBay site. This container also consists of a <b>codeID</b> attribute, which is the unique identifier of the reason code.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ReasonCodeDetailType[] $reasonCodeDetail
     * @return self
     */
    public function setReasonCodeDetail(array $reasonCodeDetail)
    {
        $this->reasonCodeDetail = $reasonCodeDetail;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getReasonCodeDetail();
        if (null !== $value && !empty($this->getReasonCodeDetail())) {
            $writer->write(array_map(function ($v) {
                return ["ReasonCodeDetail" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReasonCodeDetail', true);
        if (null !== $value && !empty($value)) {
            $this->setReasonCodeDetail(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ReasonCodeDetailType::fromKeyValue($v);
            }, $value));
        }
    }
}
