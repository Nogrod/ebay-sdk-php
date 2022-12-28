<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingFeatureDetailsType
 *
 * This type is used by the <b>ListingFeatureDetails</b> container in the <b>GeteBayDetails</b> response. This container indicates the listing features that are enabled or disabled for an eBay site.
 * XSD Type: ListingFeatureDetailsType
 */
class ListingFeatureDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The enumeration value returned in this field indicates whether or not the Bold Title featured is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>BoldTitle</code> as an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     *
     * @var string $boldTitle
     */
    private $boldTitle = null;

    /**
     * <span class="tablenote"><b>Note:</b>
     *  The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Defines the availability of the Picture Border feature for the site.
     *
     * @var string $border
     */
    private $border = null;

    /**
     * <span class="tablenote"><b>Note:</b>
     *  The Highlight feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Defines the availability of the Highlight feature for the site.
     *
     * @var string $highlight
     */
    private $highlight = null;

    /**
     * <span class="tablenote"><b>Note:</b>
     *  The Gift Icon feature is no longer available on any eBay Marketplace sites.
     *  </span>
     *  <br>
     *  Defines the availability of the Gift Icon feature for the site.
     *
     * @var string $giftIcon
     */
    private $giftIcon = null;

    /**
     * The enumeration value returned in this field indicates whether or not the Home Page Featured feature is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>HomePageFeatured</code> as an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     *
     * @var string $homePageFeatured
     */
    private $homePageFeatured = null;

    /**
     * The enumeration value returned in this field indicates whether or not the Featured First feature is enabled for the eBay site. As of October 2017, this listing feature is only available to Top-Rated Sellers on the Germany site.
     *
     * @var string $featuredFirst
     */
    private $featuredFirst = null;

    /**
     * The enumeration value returned in this field indicates whether or not the Featured Plus feature is enabled for the eBay site.
     *
     * @var string $featuredPlus
     */
    private $featuredPlus = null;

    /**
     * <span class="tablenote"><b>Note:</b>
     *  The Pro Pack Bundle feature is no longer available on any eBay Marketplace sites.
     *  </span>
     *  <br>
     *  Defines the availability of the Pro Pack Bundle for the site.
     *
     * @var string $proPack
     */
    private $proPack = null;

    /**
     * Returns the current version of details.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the
     *  details were last updated.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as boldTitle
     *
     * The enumeration value returned in this field indicates whether or not the Bold Title featured is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>BoldTitle</code> as an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     *
     * @return string
     */
    public function getBoldTitle()
    {
        return $this->boldTitle;
    }

    /**
     * Sets a new boldTitle
     *
     * The enumeration value returned in this field indicates whether or not the Bold Title featured is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>BoldTitle</code> as an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     *
     * @param string $boldTitle
     * @return self
     */
    public function setBoldTitle($boldTitle)
    {
        $this->boldTitle = $boldTitle;
        return $this;
    }

    /**
     * Gets as border
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Defines the availability of the Picture Border feature for the site.
     *
     * @return string
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Sets a new border
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Picture Border feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Defines the availability of the Picture Border feature for the site.
     *
     * @param string $border
     * @return self
     */
    public function setBorder($border)
    {
        $this->border = $border;
        return $this;
    }

    /**
     * Gets as highlight
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Highlight feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Defines the availability of the Highlight feature for the site.
     *
     * @return string
     */
    public function getHighlight()
    {
        return $this->highlight;
    }

    /**
     * Sets a new highlight
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Highlight feature is no longer available on any eBay Marketplace sites, so this value should not be used in Add/Revise/Relist calls, and will not be returned in 'Get' calls.
     *  </span>
     *  <br>
     *  Defines the availability of the Highlight feature for the site.
     *
     * @param string $highlight
     * @return self
     */
    public function setHighlight($highlight)
    {
        $this->highlight = $highlight;
        return $this;
    }

    /**
     * Gets as giftIcon
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Gift Icon feature is no longer available on any eBay Marketplace sites.
     *  </span>
     *  <br>
     *  Defines the availability of the Gift Icon feature for the site.
     *
     * @return string
     */
    public function getGiftIcon()
    {
        return $this->giftIcon;
    }

    /**
     * Sets a new giftIcon
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Gift Icon feature is no longer available on any eBay Marketplace sites.
     *  </span>
     *  <br>
     *  Defines the availability of the Gift Icon feature for the site.
     *
     * @param string $giftIcon
     * @return self
     */
    public function setGiftIcon($giftIcon)
    {
        $this->giftIcon = $giftIcon;
        return $this;
    }

    /**
     * Gets as homePageFeatured
     *
     * The enumeration value returned in this field indicates whether or not the Home Page Featured feature is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>HomePageFeatured</code> as an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     *
     * @return string
     */
    public function getHomePageFeatured()
    {
        return $this->homePageFeatured;
    }

    /**
     * Sets a new homePageFeatured
     *
     * The enumeration value returned in this field indicates whether or not the Home Page Featured feature is enabled for the eBay site. If this feature is available for an eBay site, the seller can pass in <code>HomePageFeatured</code> as an enumeration value in the <b>ListingEnhancement</b> field of an Add/Revise/Relist call.
     *
     * @param string $homePageFeatured
     * @return self
     */
    public function setHomePageFeatured($homePageFeatured)
    {
        $this->homePageFeatured = $homePageFeatured;
        return $this;
    }

    /**
     * Gets as featuredFirst
     *
     * The enumeration value returned in this field indicates whether or not the Featured First feature is enabled for the eBay site. As of October 2017, this listing feature is only available to Top-Rated Sellers on the Germany site.
     *
     * @return string
     */
    public function getFeaturedFirst()
    {
        return $this->featuredFirst;
    }

    /**
     * Sets a new featuredFirst
     *
     * The enumeration value returned in this field indicates whether or not the Featured First feature is enabled for the eBay site. As of October 2017, this listing feature is only available to Top-Rated Sellers on the Germany site.
     *
     * @param string $featuredFirst
     * @return self
     */
    public function setFeaturedFirst($featuredFirst)
    {
        $this->featuredFirst = $featuredFirst;
        return $this;
    }

    /**
     * Gets as featuredPlus
     *
     * The enumeration value returned in this field indicates whether or not the Featured Plus feature is enabled for the eBay site.
     *
     * @return string
     */
    public function getFeaturedPlus()
    {
        return $this->featuredPlus;
    }

    /**
     * Sets a new featuredPlus
     *
     * The enumeration value returned in this field indicates whether or not the Featured Plus feature is enabled for the eBay site.
     *
     * @param string $featuredPlus
     * @return self
     */
    public function setFeaturedPlus($featuredPlus)
    {
        $this->featuredPlus = $featuredPlus;
        return $this;
    }

    /**
     * Gets as proPack
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Pro Pack Bundle feature is no longer available on any eBay Marketplace sites.
     *  </span>
     *  <br>
     *  Defines the availability of the Pro Pack Bundle for the site.
     *
     * @return string
     */
    public function getProPack()
    {
        return $this->proPack;
    }

    /**
     * Sets a new proPack
     *
     * <span class="tablenote"><b>Note:</b>
     *  The Pro Pack Bundle feature is no longer available on any eBay Marketplace sites.
     *  </span>
     *  <br>
     *  Defines the availability of the Pro Pack Bundle for the site.
     *
     * @param string $proPack
     * @return self
     */
    public function setProPack($proPack)
    {
        $this->proPack = $proPack;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the current version of details.
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
     * Returns the current version of details.
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
     * Gives the time in GMT that the feature flags for the
     *  details were last updated.
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
     * Gives the time in GMT that the feature flags for the
     *  details were last updated.
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBoldTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BoldTitle", $value);
        }
        $value = $this->getBorder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Border", $value);
        }
        $value = $this->getHighlight();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Highlight", $value);
        }
        $value = $this->getGiftIcon();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GiftIcon", $value);
        }
        $value = $this->getHomePageFeatured();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HomePageFeatured", $value);
        }
        $value = $this->getFeaturedFirst();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeaturedFirst", $value);
        }
        $value = $this->getFeaturedPlus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeaturedPlus", $value);
        }
        $value = $this->getProPack();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProPack", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BoldTitle');
        if (null !== $value) {
            $this->setBoldTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Border');
        if (null !== $value) {
            $this->setBorder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Highlight');
        if (null !== $value) {
            $this->setHighlight($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GiftIcon');
        if (null !== $value) {
            $this->setGiftIcon($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HomePageFeatured');
        if (null !== $value) {
            $this->setHomePageFeatured($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeaturedFirst');
        if (null !== $value) {
            $this->setFeaturedFirst($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeaturedPlus');
        if (null !== $value) {
            $this->setFeaturedPlus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProPack');
        if (null !== $value) {
            $this->setProPack($value);
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
