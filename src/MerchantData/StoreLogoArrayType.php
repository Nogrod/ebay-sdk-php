<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreLogoArrayType
 *
 * Set of Store logos.
 * XSD Type: StoreLogoArrayType
 */
class StoreLogoArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A Store logo.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreLogoType[] $logo
     */
    private $logo = [

    ];

    /**
     * Adds as logo
     *
     * A Store logo.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\StoreLogoType $logo
     */
    public function addToLogo(\Nogrod\eBaySDK\MerchantData\StoreLogoType $logo)
    {
        $this->logo[] = $logo;
        return $this;
    }

    /**
     * isset logo
     *
     * A Store logo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLogo($index)
    {
        return isset($this->logo[$index]);
    }

    /**
     * unset logo
     *
     * A Store logo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLogo($index)
    {
        unset($this->logo[$index]);
    }

    /**
     * Gets as logo
     *
     * A Store logo.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreLogoType[]
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets a new logo
     *
     * A Store logo.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreLogoType[] $logo
     * @return self
     */
    public function setLogo(array $logo)
    {
        $this->logo = $logo;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLogo();
        if (null !== $value && !empty($this->getLogo())) {
            $writer->write(array_map(function ($v) {
                return ["Logo" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Logo', true);
        if (null !== $value && !empty($value)) {
            $this->setLogo(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\StoreLogoType::fromKeyValue($v);
            }, $value));
        }
    }
}
