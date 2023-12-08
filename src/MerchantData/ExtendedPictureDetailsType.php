<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendedPictureDetailsType
 *
 * This container returns the URLs of the seller's self-hosted (hosted outside of eBay) pictures and the URL for the corresponding eBay
 *  Picture Services (EPS), that was generated when the self-hosted picture was uploaded.
 * XSD Type: ExtendedPictureDetailsType
 */
class ExtendedPictureDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container returns the <b>eBayPictureURL</b> (images hosted by eBay
     *  Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PictureURLsType[] $pictureURLs
     */
    private $pictureURLs = [

    ];

    /**
     * Adds as pictureURLs
     *
     * This container returns the <b>eBayPictureURL</b> (images hosted by eBay
     *  Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\PictureURLsType $pictureURLs
     */
    public function addToPictureURLs(\Nogrod\eBaySDK\MerchantData\PictureURLsType $pictureURLs)
    {
        $this->pictureURLs[] = $pictureURLs;
        return $this;
    }

    /**
     * isset pictureURLs
     *
     * This container returns the <b>eBayPictureURL</b> (images hosted by eBay
     *  Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictureURLs($index)
    {
        return isset($this->pictureURLs[$index]);
    }

    /**
     * unset pictureURLs
     *
     * This container returns the <b>eBayPictureURL</b> (images hosted by eBay
     *  Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictureURLs($index)
    {
        unset($this->pictureURLs[$index]);
    }

    /**
     * Gets as pictureURLs
     *
     * This container returns the <b>eBayPictureURL</b> (images hosted by eBay
     *  Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PictureURLsType[]
     */
    public function getPictureURLs()
    {
        return $this->pictureURLs;
    }

    /**
     * Sets a new pictureURLs
     *
     * This container returns the <b>eBayPictureURL</b> (images hosted by eBay
     *  Picture Services) and the <b>ExternalPictureURL</b> (images hosted outside of eBay) fields.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PictureURLsType[] $pictureURLs
     * @return self
     */
    public function setPictureURLs(array $pictureURLs)
    {
        $this->pictureURLs = $pictureURLs;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPictureURLs();
        if (null !== $value && !empty($this->getPictureURLs())) {
            $writer->write(array_map(function ($v) {return ["PictureURLs" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PictureURLs', true);
        if (null !== $value && !empty($value)) {
            $this->setPictureURLs(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\PictureURLsType::fromKeyValue($v);}, $value));
        }
    }
}
