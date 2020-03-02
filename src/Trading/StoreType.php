<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreType
 *
 * The configuration of an eBay Store.
 * XSD Type: StoreType
 */
class StoreType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Name of the eBay Store. The name is shown
     *  at the top of the Store page.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The URL path of the Store (58 characters maximum). Only if you
     *  are using Chinese characters in the Name property do you need to
     *  use this field, such as if you are opening a Store on the Taiwan
     *  site. The reason for this is that the URL path is normally derived
     *  from the Store name, but it cannot be derived from the name of the
     *  Store if it contains Chinese characters because URLs cannot
     *  contain Chinese characters.
     *
     * @var string $uRLPath
     */
    private $uRLPath = null;

    /**
     * The complete URL of the user's Store. This field is only ever
     *  returned, and does not need to be explicitly set.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * For the <b>GetStore</b> call, the value returned in this field indicates the user's eBay Store subscription level.
     *  <br>
     *  <br>
     *  For the <b>SetStore</b> call, the user can only cancel the current eBay Store subscription (using the <b>Close</b> enumeration value), and cannot change the subscription level. A seller will have to go to the Subscriptions area of My eBay to change their subscription level. Keep in mind that an early termination fee may apply if a user has a yearly subscription, and then either cancels their subscription, or downgrades their subscription level.
     *
     * @var string $subscriptionLevel
     */
    private $subscriptionLevel = null;

    /**
     * Store description (300 characters maximum).
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Store logo.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreLogoType $logo
     */
    private $logo = null;

    /**
     * Store theme.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreThemeType $theme
     */
    private $theme = null;

    /**
     * Style for the Store header.
     *
     * @var string $headerStyle
     */
    private $headerStyle = null;

    /**
     * Page to use as the Store's homepage (default is 0). To change the
     *  homepage, specify the PageID of one of the Store's custom pages.
     *
     * @var int $homePage
     */
    private $homePage = null;

    /**
     * The default layout type to use for the Store items.
     *
     * @var string $itemListLayout
     */
    private $itemListLayout = null;

    /**
     * The default sort order to use for the items for sale in the Store.
     *
     * @var string $itemListSortOrder
     */
    private $itemListSortOrder = null;

    /**
     * Layout for the Store's custom header.
     *
     * @var string $customHeaderLayout
     */
    private $customHeaderLayout = null;

    /**
     * Custom header text for the Store.
     *
     * @var string $customHeader
     */
    private $customHeader = null;

    /**
     * Specifies whether to export the Store listings to comparison
     *  shopping websites.
     *
     * @var bool $exportListings
     */
    private $exportListings = null;

    /**
     * Container consisting of an array of one or more <b>CustomCategory</b>
     *  containers. Each <b>CustomCategory</b> container consists of details
     *  related to an eBay Store custom category.
     *  <br>
     *  <br>
     *  To modify an eBay Store's custom categories, an eBay Store owner would use the
     *  <b>StoreCategories</b> container in the request of a
     *  <b>SetStoreCategories</b> call.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategories
     */
    private $customCategories = null;

    /**
     * Custom listing header for the Store.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomListingHeaderType $customListingHeader
     */
    private $customListingHeader = null;

    /**
     * This field is deprecated.
     *
     * @var string $merchDisplay
     */
    private $merchDisplay = null;

    /**
     * Indicates the time the store was last opened or reopened.
     *
     * @var \DateTime $lastOpenedTime
     */
    private $lastOpenedTime = null;

    /**
     * A flag indicating if a Compatibility tab exists for the Store item listing. This
     *  field is only applicable to Parts & Accessories listings in eBay US Motors.
     *  The Compatibility tab will contain vehicles that are compatible with the part
     *  in the listing. The seller specifies this information at listing time.
     *
     * @var bool $titleWithCompatibility
     */
    private $titleWithCompatibility = null;

    /**
     * Gets as name
     *
     * Name of the eBay Store. The name is shown
     *  at the top of the Store page.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the eBay Store. The name is shown
     *  at the top of the Store page.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as uRLPath
     *
     * The URL path of the Store (58 characters maximum). Only if you
     *  are using Chinese characters in the Name property do you need to
     *  use this field, such as if you are opening a Store on the Taiwan
     *  site. The reason for this is that the URL path is normally derived
     *  from the Store name, but it cannot be derived from the name of the
     *  Store if it contains Chinese characters because URLs cannot
     *  contain Chinese characters.
     *
     * @return string
     */
    public function getURLPath()
    {
        return $this->uRLPath;
    }

    /**
     * Sets a new uRLPath
     *
     * The URL path of the Store (58 characters maximum). Only if you
     *  are using Chinese characters in the Name property do you need to
     *  use this field, such as if you are opening a Store on the Taiwan
     *  site. The reason for this is that the URL path is normally derived
     *  from the Store name, but it cannot be derived from the name of the
     *  Store if it contains Chinese characters because URLs cannot
     *  contain Chinese characters.
     *
     * @param string $uRLPath
     * @return self
     */
    public function setURLPath($uRLPath)
    {
        $this->uRLPath = $uRLPath;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * The complete URL of the user's Store. This field is only ever
     *  returned, and does not need to be explicitly set.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * The complete URL of the user's Store. This field is only ever
     *  returned, and does not need to be explicitly set.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as subscriptionLevel
     *
     * For the <b>GetStore</b> call, the value returned in this field indicates the user's eBay Store subscription level.
     *  <br>
     *  <br>
     *  For the <b>SetStore</b> call, the user can only cancel the current eBay Store subscription (using the <b>Close</b> enumeration value), and cannot change the subscription level. A seller will have to go to the Subscriptions area of My eBay to change their subscription level. Keep in mind that an early termination fee may apply if a user has a yearly subscription, and then either cancels their subscription, or downgrades their subscription level.
     *
     * @return string
     */
    public function getSubscriptionLevel()
    {
        return $this->subscriptionLevel;
    }

    /**
     * Sets a new subscriptionLevel
     *
     * For the <b>GetStore</b> call, the value returned in this field indicates the user's eBay Store subscription level.
     *  <br>
     *  <br>
     *  For the <b>SetStore</b> call, the user can only cancel the current eBay Store subscription (using the <b>Close</b> enumeration value), and cannot change the subscription level. A seller will have to go to the Subscriptions area of My eBay to change their subscription level. Keep in mind that an early termination fee may apply if a user has a yearly subscription, and then either cancels their subscription, or downgrades their subscription level.
     *
     * @param string $subscriptionLevel
     * @return self
     */
    public function setSubscriptionLevel($subscriptionLevel)
    {
        $this->subscriptionLevel = $subscriptionLevel;
        return $this;
    }

    /**
     * Gets as description
     *
     * Store description (300 characters maximum).
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Store description (300 characters maximum).
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as logo
     *
     * Store logo.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreLogoType
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets a new logo
     *
     * Store logo.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreLogoType $logo
     * @return self
     */
    public function setLogo(\Nogrod\eBaySDK\Trading\StoreLogoType $logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Gets as theme
     *
     * Store theme.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreThemeType
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Sets a new theme
     *
     * Store theme.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreThemeType $theme
     * @return self
     */
    public function setTheme(\Nogrod\eBaySDK\Trading\StoreThemeType $theme)
    {
        $this->theme = $theme;
        return $this;
    }

    /**
     * Gets as headerStyle
     *
     * Style for the Store header.
     *
     * @return string
     */
    public function getHeaderStyle()
    {
        return $this->headerStyle;
    }

    /**
     * Sets a new headerStyle
     *
     * Style for the Store header.
     *
     * @param string $headerStyle
     * @return self
     */
    public function setHeaderStyle($headerStyle)
    {
        $this->headerStyle = $headerStyle;
        return $this;
    }

    /**
     * Gets as homePage
     *
     * Page to use as the Store's homepage (default is 0). To change the
     *  homepage, specify the PageID of one of the Store's custom pages.
     *
     * @return int
     */
    public function getHomePage()
    {
        return $this->homePage;
    }

    /**
     * Sets a new homePage
     *
     * Page to use as the Store's homepage (default is 0). To change the
     *  homepage, specify the PageID of one of the Store's custom pages.
     *
     * @param int $homePage
     * @return self
     */
    public function setHomePage($homePage)
    {
        $this->homePage = $homePage;
        return $this;
    }

    /**
     * Gets as itemListLayout
     *
     * The default layout type to use for the Store items.
     *
     * @return string
     */
    public function getItemListLayout()
    {
        return $this->itemListLayout;
    }

    /**
     * Sets a new itemListLayout
     *
     * The default layout type to use for the Store items.
     *
     * @param string $itemListLayout
     * @return self
     */
    public function setItemListLayout($itemListLayout)
    {
        $this->itemListLayout = $itemListLayout;
        return $this;
    }

    /**
     * Gets as itemListSortOrder
     *
     * The default sort order to use for the items for sale in the Store.
     *
     * @return string
     */
    public function getItemListSortOrder()
    {
        return $this->itemListSortOrder;
    }

    /**
     * Sets a new itemListSortOrder
     *
     * The default sort order to use for the items for sale in the Store.
     *
     * @param string $itemListSortOrder
     * @return self
     */
    public function setItemListSortOrder($itemListSortOrder)
    {
        $this->itemListSortOrder = $itemListSortOrder;
        return $this;
    }

    /**
     * Gets as customHeaderLayout
     *
     * Layout for the Store's custom header.
     *
     * @return string
     */
    public function getCustomHeaderLayout()
    {
        return $this->customHeaderLayout;
    }

    /**
     * Sets a new customHeaderLayout
     *
     * Layout for the Store's custom header.
     *
     * @param string $customHeaderLayout
     * @return self
     */
    public function setCustomHeaderLayout($customHeaderLayout)
    {
        $this->customHeaderLayout = $customHeaderLayout;
        return $this;
    }

    /**
     * Gets as customHeader
     *
     * Custom header text for the Store.
     *
     * @return string
     */
    public function getCustomHeader()
    {
        return $this->customHeader;
    }

    /**
     * Sets a new customHeader
     *
     * Custom header text for the Store.
     *
     * @param string $customHeader
     * @return self
     */
    public function setCustomHeader($customHeader)
    {
        $this->customHeader = $customHeader;
        return $this;
    }

    /**
     * Gets as exportListings
     *
     * Specifies whether to export the Store listings to comparison
     *  shopping websites.
     *
     * @return bool
     */
    public function getExportListings()
    {
        return $this->exportListings;
    }

    /**
     * Sets a new exportListings
     *
     * Specifies whether to export the Store listings to comparison
     *  shopping websites.
     *
     * @param bool $exportListings
     * @return self
     */
    public function setExportListings($exportListings)
    {
        $this->exportListings = $exportListings;
        return $this;
    }

    /**
     * Adds as customCategory
     *
     * Container consisting of an array of one or more <b>CustomCategory</b>
     *  containers. Each <b>CustomCategory</b> container consists of details
     *  related to an eBay Store custom category.
     *  <br>
     *  <br>
     *  To modify an eBay Store's custom categories, an eBay Store owner would use the
     *  <b>StoreCategories</b> container in the request of a
     *  <b>SetStoreCategories</b> call.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory
     */
    public function addToCustomCategories(\Nogrod\eBaySDK\Trading\StoreCustomCategoryType $customCategory)
    {
        $this->customCategories[] = $customCategory;
        return $this;
    }

    /**
     * isset customCategories
     *
     * Container consisting of an array of one or more <b>CustomCategory</b>
     *  containers. Each <b>CustomCategory</b> container consists of details
     *  related to an eBay Store custom category.
     *  <br>
     *  <br>
     *  To modify an eBay Store's custom categories, an eBay Store owner would use the
     *  <b>StoreCategories</b> container in the request of a
     *  <b>SetStoreCategories</b> call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomCategories($index)
    {
        return isset($this->customCategories[$index]);
    }

    /**
     * unset customCategories
     *
     * Container consisting of an array of one or more <b>CustomCategory</b>
     *  containers. Each <b>CustomCategory</b> container consists of details
     *  related to an eBay Store custom category.
     *  <br>
     *  <br>
     *  To modify an eBay Store's custom categories, an eBay Store owner would use the
     *  <b>StoreCategories</b> container in the request of a
     *  <b>SetStoreCategories</b> call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomCategories($index)
    {
        unset($this->customCategories[$index]);
    }

    /**
     * Gets as customCategories
     *
     * Container consisting of an array of one or more <b>CustomCategory</b>
     *  containers. Each <b>CustomCategory</b> container consists of details
     *  related to an eBay Store custom category.
     *  <br>
     *  <br>
     *  To modify an eBay Store's custom categories, an eBay Store owner would use the
     *  <b>StoreCategories</b> container in the request of a
     *  <b>SetStoreCategories</b> call.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[]
     */
    public function getCustomCategories()
    {
        return $this->customCategories;
    }

    /**
     * Sets a new customCategories
     *
     * Container consisting of an array of one or more <b>CustomCategory</b>
     *  containers. Each <b>CustomCategory</b> container consists of details
     *  related to an eBay Store custom category.
     *  <br>
     *  <br>
     *  To modify an eBay Store's custom categories, an eBay Store owner would use the
     *  <b>StoreCategories</b> container in the request of a
     *  <b>SetStoreCategories</b> call.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomCategoryType[] $customCategories
     * @return self
     */
    public function setCustomCategories(array $customCategories)
    {
        $this->customCategories = $customCategories;
        return $this;
    }

    /**
     * Gets as customListingHeader
     *
     * Custom listing header for the Store.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreCustomListingHeaderType
     */
    public function getCustomListingHeader()
    {
        return $this->customListingHeader;
    }

    /**
     * Sets a new customListingHeader
     *
     * Custom listing header for the Store.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomListingHeaderType $customListingHeader
     * @return self
     */
    public function setCustomListingHeader(\Nogrod\eBaySDK\Trading\StoreCustomListingHeaderType $customListingHeader)
    {
        $this->customListingHeader = $customListingHeader;
        return $this;
    }

    /**
     * Gets as merchDisplay
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getMerchDisplay()
    {
        return $this->merchDisplay;
    }

    /**
     * Sets a new merchDisplay
     *
     * This field is deprecated.
     *
     * @param string $merchDisplay
     * @return self
     */
    public function setMerchDisplay($merchDisplay)
    {
        $this->merchDisplay = $merchDisplay;
        return $this;
    }

    /**
     * Gets as lastOpenedTime
     *
     * Indicates the time the store was last opened or reopened.
     *
     * @return \DateTime
     */
    public function getLastOpenedTime()
    {
        return $this->lastOpenedTime;
    }

    /**
     * Sets a new lastOpenedTime
     *
     * Indicates the time the store was last opened or reopened.
     *
     * @param \DateTime $lastOpenedTime
     * @return self
     */
    public function setLastOpenedTime(\DateTime $lastOpenedTime)
    {
        $this->lastOpenedTime = $lastOpenedTime;
        return $this;
    }

    /**
     * Gets as titleWithCompatibility
     *
     * A flag indicating if a Compatibility tab exists for the Store item listing. This
     *  field is only applicable to Parts & Accessories listings in eBay US Motors.
     *  The Compatibility tab will contain vehicles that are compatible with the part
     *  in the listing. The seller specifies this information at listing time.
     *
     * @return bool
     */
    public function getTitleWithCompatibility()
    {
        return $this->titleWithCompatibility;
    }

    /**
     * Sets a new titleWithCompatibility
     *
     * A flag indicating if a Compatibility tab exists for the Store item listing. This
     *  field is only applicable to Parts & Accessories listings in eBay US Motors.
     *  The Compatibility tab will contain vehicles that are compatible with the part
     *  in the listing. The seller specifies this information at listing time.
     *
     * @param bool $titleWithCompatibility
     * @return self
     */
    public function setTitleWithCompatibility($titleWithCompatibility)
    {
        $this->titleWithCompatibility = $titleWithCompatibility;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getURLPath();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URLPath", $value);
        }
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
        }
        $value = $this->getSubscriptionLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubscriptionLevel", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getLogo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Logo", $value);
        }
        $value = $this->getTheme();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Theme", $value);
        }
        $value = $this->getHeaderStyle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HeaderStyle", $value);
        }
        $value = $this->getHomePage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HomePage", $value);
        }
        $value = $this->getItemListLayout();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemListLayout", $value);
        }
        $value = $this->getItemListSortOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemListSortOrder", $value);
        }
        $value = $this->getCustomHeaderLayout();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomHeaderLayout", $value);
        }
        $value = $this->getCustomHeader();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomHeader", $value);
        }
        $value = $this->getExportListings();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExportListings", $value);
        }
        $value = $this->getCustomCategories();
        if (null !== $value && !empty($this->getCustomCategories())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomCategories", array_map(function ($v) {
                return ["CustomCategory" => $v];
            }, $value));
        }
        $value = $this->getCustomListingHeader();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomListingHeader", $value);
        }
        $value = $this->getMerchDisplay();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MerchDisplay", $value);
        }
        $value = $this->getLastOpenedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastOpenedTime", $value);
        }
        $value = $this->getTitleWithCompatibility();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TitleWithCompatibility", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URLPath');
        if (null !== $value) {
            $this->setURLPath($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubscriptionLevel');
        if (null !== $value) {
            $this->setSubscriptionLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Logo');
        if (null !== $value) {
            $this->setLogo(\Nogrod\eBaySDK\Trading\StoreLogoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Theme');
        if (null !== $value) {
            $this->setTheme(\Nogrod\eBaySDK\Trading\StoreThemeType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HeaderStyle');
        if (null !== $value) {
            $this->setHeaderStyle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HomePage');
        if (null !== $value) {
            $this->setHomePage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemListLayout');
        if (null !== $value) {
            $this->setItemListLayout($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemListSortOrder');
        if (null !== $value) {
            $this->setItemListSortOrder($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomHeaderLayout');
        if (null !== $value) {
            $this->setCustomHeaderLayout($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomHeader');
        if (null !== $value) {
            $this->setCustomHeader($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExportListings');
        if (null !== $value) {
            $this->setExportListings($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomCategories', true);
        if (null !== $value && !empty($value)) {
            $this->setCustomCategories(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomListingHeader');
        if (null !== $value) {
            $this->setCustomListingHeader(\Nogrod\eBaySDK\Trading\StoreCustomListingHeaderType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MerchDisplay');
        if (null !== $value) {
            $this->setMerchDisplay($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastOpenedTime');
        if (null !== $value) {
            $this->setLastOpenedTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TitleWithCompatibility');
        if (null !== $value) {
            $this->setTitleWithCompatibility($value);
        }
    }
}
