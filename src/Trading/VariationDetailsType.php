<?php

namespace Nogrod\eBaySDK\Trading;

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
class VariationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->maxVariationsPerItem;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxVariationsPerItem', null, (string) $value);
        }
        $value = $this->maxNamesPerVariationSpecificsSet;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxNamesPerVariationSpecificsSet', null, (string) $value);
        }
        $value = $this->maxValuesPerVariationSpecificsSetName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MaxValuesPerVariationSpecificsSetName', null, (string) $value);
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\VariationDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'MaxVariationsPerItem':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxVariationsPerItem = (int) $value;
                    }
                    return true;
                case 'MaxNamesPerVariationSpecificsSet':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxNamesPerVariationSpecificsSet = (int) $value;
                    }
                    return true;
                case 'MaxValuesPerVariationSpecificsSetName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxValuesPerVariationSpecificsSetName = (int) $value;
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['MaxVariationsPerItem'] = $this->maxVariationsPerItem;
        $data['MaxNamesPerVariationSpecificsSet'] = $this->maxNamesPerVariationSpecificsSet;
        $data['MaxValuesPerVariationSpecificsSetName'] = $this->maxValuesPerVariationSpecificsSetName;
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
