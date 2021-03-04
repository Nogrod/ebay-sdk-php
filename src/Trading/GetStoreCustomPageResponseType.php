<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreCustomPageResponseType
 *
 * The base response of the <b>GetStoreCustomPage</b> call.
 * XSD Type: GetStoreCustomPageResponseType
 */
class GetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomPageType[] $customPageArray
     */
    private $customPageArray = null;

    /**
     * Adds as customPage
     *
     * This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreCustomPageType $customPage
     */
    public function addToCustomPageArray(\Nogrod\eBaySDK\Trading\StoreCustomPageType $customPage)
    {
        $this->customPageArray[] = $customPage;
        return $this;
    }

    /**
     * isset customPageArray
     *
     * This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomPageArray($index)
    {
        return isset($this->customPageArray[$index]);
    }

    /**
     * unset customPageArray
     *
     * This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomPageArray($index)
    {
        unset($this->customPageArray[$index]);
    }

    /**
     * Gets as customPageArray
     *
     * This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreCustomPageType[]
     */
    public function getCustomPageArray()
    {
        return $this->customPageArray;
    }

    /**
     * Sets a new customPageArray
     *
     * This array consists of details for one or more of the seller's custom pages. A <b>CustomPage</b> container is returned for each custom page that matches the input criteria.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomPageType[] $customPageArray
     * @return self
     */
    public function setCustomPageArray(array $customPageArray)
    {
        $this->customPageArray = $customPageArray;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCustomPageArray();
        if (null !== $value && !empty($this->getCustomPageArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomPageArray", array_map(function ($v) {
                return ["CustomPage" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomPageArray', true);
        if (null !== $value && !empty($value)) {
            $this->setCustomPageArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\StoreCustomPageType::fromKeyValue($v);
            }, $value));
        }
    }
}
