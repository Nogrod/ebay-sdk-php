<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomPageArrayType
 *
 * Set of Store custom pages.
 * XSD Type: StoreCustomPageArrayType
 */
class StoreCustomPageArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A Store custom page.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreCustomPageType[] $customPage
     */
    private $customPage = [

    ];

    /**
     * Adds as customPage
     *
     * A Store custom page.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\StoreCustomPageType $customPage
     */
    public function addToCustomPage(\Nogrod\eBaySDK\MerchantData\StoreCustomPageType $customPage)
    {
        $this->customPage[] = $customPage;
        return $this;
    }

    /**
     * isset customPage
     *
     * A Store custom page.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomPage($index)
    {
        return isset($this->customPage[$index]);
    }

    /**
     * unset customPage
     *
     * A Store custom page.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomPage($index)
    {
        unset($this->customPage[$index]);
    }

    /**
     * Gets as customPage
     *
     * A Store custom page.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreCustomPageType[]
     */
    public function getCustomPage()
    {
        return $this->customPage;
    }

    /**
     * Sets a new customPage
     *
     * A Store custom page.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreCustomPageType[] $customPage
     * @return self
     */
    public function setCustomPage(array $customPage)
    {
        $this->customPage = $customPage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCustomPage();
        if (null !== $value && !empty($this->getCustomPage())) {
            $writer->write(array_map(function ($v) {return ["CustomPage" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomPage', true);
        if (null !== $value && !empty($value)) {
            $this->setCustomPage(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\StoreCustomPageType::fromKeyValue($v);}, $value));
        }
    }
}
