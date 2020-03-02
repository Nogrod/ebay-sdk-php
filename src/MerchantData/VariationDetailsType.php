<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VariationDetailsType
 *
 * Type defining the <b>VariationDetails</b> container that is returned in
 *  <b>GeteBayDetails</b> if <b>VariationDetails</b> is included
 *  in the request as a <b>DetailName</b> filter, or if <b>GeteBayDetails</b>
 *  is called with no <b>DetailName</b> filters.
 * XSD Type: VariationDetailsType
 */
class VariationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This value indicates the maximum number of item variations that the site will allow within one multi-variation listing.
     *
     * @var int $maxVariationsPerItem
     */
    private $maxVariationsPerItem = null;

    /**
     * This value indicates the maximum number of variation specific sets that the site will allow per listing. Typical variation specific sets for clothing may be 'Color', 'Size', 'Long Sleeve', etc.
     *
     * @var int $maxNamesPerVariationSpecificsSet
     */
    private $maxNamesPerVariationSpecificsSet = null;

    /**
     * This value indicates the maximum number of values that the site will allow within one variation specific set. For example, if the variation specific set was 'Color', the seller could specify as many colors that are available up to this maximum value.
     *
     * @var int $maxValuesPerVariationSpecificsSetName
     */
    private $maxValuesPerVariationSpecificsSetName = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as maxVariationsPerItem
     *
     * This value indicates the maximum number of item variations that the site will allow within one multi-variation listing.
     *
     * @return int
     */
    public function getMaxVariationsPerItem()
    {
        return $this->maxVariationsPerItem;
    }

    /**
     * Sets a new maxVariationsPerItem
     *
     * This value indicates the maximum number of item variations that the site will allow within one multi-variation listing.
     *
     * @param int $maxVariationsPerItem
     * @return self
     */
    public function setMaxVariationsPerItem($maxVariationsPerItem)
    {
        $this->maxVariationsPerItem = $maxVariationsPerItem;
        return $this;
    }

    /**
     * Gets as maxNamesPerVariationSpecificsSet
     *
     * This value indicates the maximum number of variation specific sets that the site will allow per listing. Typical variation specific sets for clothing may be 'Color', 'Size', 'Long Sleeve', etc.
     *
     * @return int
     */
    public function getMaxNamesPerVariationSpecificsSet()
    {
        return $this->maxNamesPerVariationSpecificsSet;
    }

    /**
     * Sets a new maxNamesPerVariationSpecificsSet
     *
     * This value indicates the maximum number of variation specific sets that the site will allow per listing. Typical variation specific sets for clothing may be 'Color', 'Size', 'Long Sleeve', etc.
     *
     * @param int $maxNamesPerVariationSpecificsSet
     * @return self
     */
    public function setMaxNamesPerVariationSpecificsSet($maxNamesPerVariationSpecificsSet)
    {
        $this->maxNamesPerVariationSpecificsSet = $maxNamesPerVariationSpecificsSet;
        return $this;
    }

    /**
     * Gets as maxValuesPerVariationSpecificsSetName
     *
     * This value indicates the maximum number of values that the site will allow within one variation specific set. For example, if the variation specific set was 'Color', the seller could specify as many colors that are available up to this maximum value.
     *
     * @return int
     */
    public function getMaxValuesPerVariationSpecificsSetName()
    {
        return $this->maxValuesPerVariationSpecificsSetName;
    }

    /**
     * Sets a new maxValuesPerVariationSpecificsSetName
     *
     * This value indicates the maximum number of values that the site will allow within one variation specific set. For example, if the variation specific set was 'Color', the seller could specify as many colors that are available up to this maximum value.
     *
     * @param int $maxValuesPerVariationSpecificsSetName
     * @return self
     */
    public function setMaxValuesPerVariationSpecificsSetName($maxValuesPerVariationSpecificsSetName)
    {
        $this->maxValuesPerVariationSpecificsSetName = $maxValuesPerVariationSpecificsSetName;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMaxVariationsPerItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxVariationsPerItem", $value);
        }
        $value = $this->getMaxNamesPerVariationSpecificsSet();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxNamesPerVariationSpecificsSet", $value);
        }
        $value = $this->getMaxValuesPerVariationSpecificsSetName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxValuesPerVariationSpecificsSetName", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxVariationsPerItem');
        if (null !== $value) {
            $this->setMaxVariationsPerItem($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxNamesPerVariationSpecificsSet');
        if (null !== $value) {
            $this->setMaxNamesPerVariationSpecificsSet($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxValuesPerVariationSpecificsSetName');
        if (null !== $value) {
            $this->setMaxValuesPerVariationSpecificsSetName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
