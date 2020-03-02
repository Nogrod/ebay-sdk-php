<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyingGuideDetailsType
 *
 * This type is deprecated.
 * XSD Type: BuyingGuideDetailsType
 */
class BuyingGuideDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Information that identifies a buying guide. A buying guide contains content about particular
     *  product areas, categories, or subjects to help buyers decide which type of item
     *  to purchase based on their particular interests.
     *  Buying guides are useful to buyers who do not have a specific product in mind.
     *  For example, a digital camera buying guide could help a buyer determine what kind of
     *  digital camera is right for them.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyingGuideType[] $buyingGuide
     */
    private $buyingGuide = [
        
    ];

    /**
     * URL of the buying guide home page for the site being searched.
     *  Your application can present this URL as a link. Optionally,
     *  you can use a value like "See all buying guides" as the link's
     *  display name.
     *
     * @var string $buyingGuideHub
     */
    private $buyingGuideHub = null;

    /**
     * Adds as buyingGuide
     *
     * Information that identifies a buying guide. A buying guide contains content about particular
     *  product areas, categories, or subjects to help buyers decide which type of item
     *  to purchase based on their particular interests.
     *  Buying guides are useful to buyers who do not have a specific product in mind.
     *  For example, a digital camera buying guide could help a buyer determine what kind of
     *  digital camera is right for them.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\BuyingGuideType $buyingGuide
     */
    public function addToBuyingGuide(\Nogrod\eBaySDK\Trading\BuyingGuideType $buyingGuide)
    {
        $this->buyingGuide[] = $buyingGuide;
        return $this;
    }

    /**
     * isset buyingGuide
     *
     * Information that identifies a buying guide. A buying guide contains content about particular
     *  product areas, categories, or subjects to help buyers decide which type of item
     *  to purchase based on their particular interests.
     *  Buying guides are useful to buyers who do not have a specific product in mind.
     *  For example, a digital camera buying guide could help a buyer determine what kind of
     *  digital camera is right for them.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyingGuide($index)
    {
        return isset($this->buyingGuide[$index]);
    }

    /**
     * unset buyingGuide
     *
     * Information that identifies a buying guide. A buying guide contains content about particular
     *  product areas, categories, or subjects to help buyers decide which type of item
     *  to purchase based on their particular interests.
     *  Buying guides are useful to buyers who do not have a specific product in mind.
     *  For example, a digital camera buying guide could help a buyer determine what kind of
     *  digital camera is right for them.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyingGuide($index)
    {
        unset($this->buyingGuide[$index]);
    }

    /**
     * Gets as buyingGuide
     *
     * Information that identifies a buying guide. A buying guide contains content about particular
     *  product areas, categories, or subjects to help buyers decide which type of item
     *  to purchase based on their particular interests.
     *  Buying guides are useful to buyers who do not have a specific product in mind.
     *  For example, a digital camera buying guide could help a buyer determine what kind of
     *  digital camera is right for them.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyingGuideType[]
     */
    public function getBuyingGuide()
    {
        return $this->buyingGuide;
    }

    /**
     * Sets a new buyingGuide
     *
     * Information that identifies a buying guide. A buying guide contains content about particular
     *  product areas, categories, or subjects to help buyers decide which type of item
     *  to purchase based on their particular interests.
     *  Buying guides are useful to buyers who do not have a specific product in mind.
     *  For example, a digital camera buying guide could help a buyer determine what kind of
     *  digital camera is right for them.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyingGuideType[] $buyingGuide
     * @return self
     */
    public function setBuyingGuide(array $buyingGuide)
    {
        $this->buyingGuide = $buyingGuide;
        return $this;
    }

    /**
     * Gets as buyingGuideHub
     *
     * URL of the buying guide home page for the site being searched.
     *  Your application can present this URL as a link. Optionally,
     *  you can use a value like "See all buying guides" as the link's
     *  display name.
     *
     * @return string
     */
    public function getBuyingGuideHub()
    {
        return $this->buyingGuideHub;
    }

    /**
     * Sets a new buyingGuideHub
     *
     * URL of the buying guide home page for the site being searched.
     *  Your application can present this URL as a link. Optionally,
     *  you can use a value like "See all buying guides" as the link's
     *  display name.
     *
     * @param string $buyingGuideHub
     * @return self
     */
    public function setBuyingGuideHub($buyingGuideHub)
    {
        $this->buyingGuideHub = $buyingGuideHub;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBuyingGuide();
        if (null !== $value && !empty($this->getBuyingGuide())) {
            $writer->write(array_map(function ($v) {
                return ["BuyingGuide" => $v];
            }, $value));
        }
        $value = $this->getBuyingGuideHub();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyingGuideHub", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingGuide', true);
        if (null !== $value && !empty($value)) {
            $this->setBuyingGuide(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\BuyingGuideType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingGuideHub');
        if (null !== $value) {
            $this->setBuyingGuideHub($value);
        }
    }
}
