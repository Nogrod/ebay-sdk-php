<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InternationalReturnsAcceptedCodeType
 *
 * This type defines the available options the seller has for accepting international returns.
 * XSD Type: InternationalReturnsAcceptedCodeType
 */
class InternationalReturnsAcceptedCodeType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     *
     * @var string[] $internationalReturnsAccepted
     */
    private $internationalReturnsAccepted = [

    ];

    /**
     * Adds as internationalReturnsAccepted
     *
     * Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     *
     * @return self
     * @param string $internationalReturnsAccepted
     */
    public function addToInternationalReturnsAccepted($internationalReturnsAccepted)
    {
        $this->internationalReturnsAccepted[] = $internationalReturnsAccepted;
        return $this;
    }

    /**
     * isset internationalReturnsAccepted
     *
     * Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInternationalReturnsAccepted($index)
    {
        return isset($this->internationalReturnsAccepted[$index]);
    }

    /**
     * unset internationalReturnsAccepted
     *
     * Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInternationalReturnsAccepted($index)
    {
        unset($this->internationalReturnsAccepted[$index]);
    }

    /**
     * Gets as internationalReturnsAccepted
     *
     * Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     *
     * @return string[]
     */
    public function getInternationalReturnsAccepted()
    {
        return $this->internationalReturnsAccepted;
    }

    /**
     * Sets a new internationalReturnsAccepted
     *
     * Defines the available options the seller has for accepting international returns in the specified marketplace and category.
     *
     * @param string $internationalReturnsAccepted
     * @return self
     */
    public function setInternationalReturnsAccepted(array $internationalReturnsAccepted)
    {
        $this->internationalReturnsAccepted = $internationalReturnsAccepted;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInternationalReturnsAccepted();
        if (null !== $value && !empty($this->getInternationalReturnsAccepted())) {
            $writer->write(array_map(function ($v) {
                return ["InternationalReturnsAccepted" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalReturnsAccepted', true);
        if (null !== $value && !empty($value)) {
            $this->setInternationalReturnsAccepted($value);
        }
    }
}
