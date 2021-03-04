<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreOptionsResponseType
 *
 * The base response of the <b>GetStoreOptions</b> call.
 * XSD Type: GetStoreOptionsResponseType
 */
class GetStoreOptionsResponseType extends AbstractResponseType
{
    /**
     * This container consists of the current set of basic themes available for eBay Stores. Each basic theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to set/modify the theme for an eBay Store.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreThemeArrayType $basicThemeArray
     */
    private $basicThemeArray = null;

    /**
     * This container consists of the current set of advanced themes available for eBay Stores. Each advanced theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to set/modify the theme for an eBay Store. Unlike basic themes, you can use any color scheme with an advanced theme. These themes are suitable for more advanced customization.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreThemeArrayType $advancedThemeArray
     */
    private $advancedThemeArray = null;

    /**
     * An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreLogoType[] $logoArray
     */
    private $logoArray = null;

    /**
     * This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreSubscriptionType[] $subscriptionArray
     */
    private $subscriptionArray = null;

    /**
     * This value indicates the maximum number of categories (meta and leaf) that can be set up in an eBay Store.
     *
     * @var int $maxCategories
     */
    private $maxCategories = null;

    /**
     * This is the maximum number of category levels that can be set up in an eBay Store.
     *
     * @var int $maxCategoryLevels
     */
    private $maxCategoryLevels = null;

    /**
     * Gets as basicThemeArray
     *
     * This container consists of the current set of basic themes available for eBay Stores. Each basic theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to set/modify the theme for an eBay Store.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreThemeArrayType
     */
    public function getBasicThemeArray()
    {
        return $this->basicThemeArray;
    }

    /**
     * Sets a new basicThemeArray
     *
     * This container consists of the current set of basic themes available for eBay Stores. Each basic theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to set/modify the theme for an eBay Store.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreThemeArrayType $basicThemeArray
     * @return self
     */
    public function setBasicThemeArray(\Nogrod\eBaySDK\Trading\StoreThemeArrayType $basicThemeArray)
    {
        $this->basicThemeArray = $basicThemeArray;
        return $this;
    }

    /**
     * Gets as advancedThemeArray
     *
     * This container consists of the current set of advanced themes available for eBay Stores. Each advanced theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to set/modify the theme for an eBay Store. Unlike basic themes, you can use any color scheme with an advanced theme. These themes are suitable for more advanced customization.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreThemeArrayType
     */
    public function getAdvancedThemeArray()
    {
        return $this->advancedThemeArray;
    }

    /**
     * Sets a new advancedThemeArray
     *
     * This container consists of the current set of advanced themes available for eBay Stores. Each advanced theme definition consists of settings like colors, font style, and font size. This theme data can be reused in a <b>SetStore</b> call to set/modify the theme for an eBay Store. Unlike basic themes, you can use any color scheme with an advanced theme. These themes are suitable for more advanced customization.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreThemeArrayType $advancedThemeArray
     * @return self
     */
    public function setAdvancedThemeArray(\Nogrod\eBaySDK\Trading\StoreThemeArrayType $advancedThemeArray)
    {
        $this->advancedThemeArray = $advancedThemeArray;
        return $this;
    }

    /**
     * Adds as logo
     *
     * An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreLogoType $logo
     */
    public function addToLogoArray(\Nogrod\eBaySDK\Trading\StoreLogoType $logo)
    {
        $this->logoArray[] = $logo;
        return $this;
    }

    /**
     * isset logoArray
     *
     * An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLogoArray($index)
    {
        return isset($this->logoArray[$index]);
    }

    /**
     * unset logoArray
     *
     * An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLogoArray($index)
    {
        unset($this->logoArray[$index]);
    }

    /**
     * Gets as logoArray
     *
     * An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreLogoType[]
     */
    public function getLogoArray()
    {
        return $this->logoArray;
    }

    /**
     * Sets a new logoArray
     *
     * An array of logo identifiers for numerous product categories. These <b>LogoID</b> values can be reused in a <b>SetStore</b> call to set the logo for an eBay Store.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreLogoType[] $logoArray
     * @return self
     */
    public function setLogoArray(array $logoArray)
    {
        $this->logoArray = $logoArray;
        return $this;
    }

    /**
     * Adds as subscription
     *
     * This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\StoreSubscriptionType $subscription
     */
    public function addToSubscriptionArray(\Nogrod\eBaySDK\Trading\StoreSubscriptionType $subscription)
    {
        $this->subscriptionArray[] = $subscription;
        return $this;
    }

    /**
     * isset subscriptionArray
     *
     * This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubscriptionArray($index)
    {
        return isset($this->subscriptionArray[$index]);
    }

    /**
     * unset subscriptionArray
     *
     * This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubscriptionArray($index)
    {
        unset($this->subscriptionArray[$index]);
    }

    /**
     * Gets as subscriptionArray
     *
     * This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreSubscriptionType[]
     */
    public function getSubscriptionArray()
    {
        return $this->subscriptionArray;
    }

    /**
     * Sets a new subscriptionArray
     *
     * This container consists of the different levels of eBay Store subscriptions along with the monthly subscription price.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreSubscriptionType[] $subscriptionArray
     * @return self
     */
    public function setSubscriptionArray(array $subscriptionArray)
    {
        $this->subscriptionArray = $subscriptionArray;
        return $this;
    }

    /**
     * Gets as maxCategories
     *
     * This value indicates the maximum number of categories (meta and leaf) that can be set up in an eBay Store.
     *
     * @return int
     */
    public function getMaxCategories()
    {
        return $this->maxCategories;
    }

    /**
     * Sets a new maxCategories
     *
     * This value indicates the maximum number of categories (meta and leaf) that can be set up in an eBay Store.
     *
     * @param int $maxCategories
     * @return self
     */
    public function setMaxCategories($maxCategories)
    {
        $this->maxCategories = $maxCategories;
        return $this;
    }

    /**
     * Gets as maxCategoryLevels
     *
     * This is the maximum number of category levels that can be set up in an eBay Store.
     *
     * @return int
     */
    public function getMaxCategoryLevels()
    {
        return $this->maxCategoryLevels;
    }

    /**
     * Sets a new maxCategoryLevels
     *
     * This is the maximum number of category levels that can be set up in an eBay Store.
     *
     * @param int $maxCategoryLevels
     * @return self
     */
    public function setMaxCategoryLevels($maxCategoryLevels)
    {
        $this->maxCategoryLevels = $maxCategoryLevels;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getBasicThemeArray();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BasicThemeArray", $value);
        }
        $value = $this->getAdvancedThemeArray();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdvancedThemeArray", $value);
        }
        $value = $this->getLogoArray();
        if (null !== $value && !empty($this->getLogoArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoArray", array_map(function ($v) {
                return ["Logo" => $v];
            }, $value));
        }
        $value = $this->getSubscriptionArray();
        if (null !== $value && !empty($this->getSubscriptionArray())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubscriptionArray", array_map(function ($v) {
                return ["Subscription" => $v];
            }, $value));
        }
        $value = $this->getMaxCategories();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxCategories", $value);
        }
        $value = $this->getMaxCategoryLevels();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MaxCategoryLevels", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BasicThemeArray');
        if (null !== $value) {
            $this->setBasicThemeArray(\Nogrod\eBaySDK\Trading\StoreThemeArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdvancedThemeArray');
        if (null !== $value) {
            $this->setAdvancedThemeArray(\Nogrod\eBaySDK\Trading\StoreThemeArrayType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoArray', true);
        if (null !== $value && !empty($value)) {
            $this->setLogoArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\StoreLogoType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubscriptionArray', true);
        if (null !== $value && !empty($value)) {
            $this->setSubscriptionArray(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\StoreSubscriptionType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxCategories');
        if (null !== $value) {
            $this->setMaxCategories($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MaxCategoryLevels');
        if (null !== $value) {
            $this->setMaxCategoryLevels($value);
        }
    }
}
