<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreType
 *
 * This type is used to provide details about a seller's eBay Store.
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
     * The seller-provided description of the eBay Store.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * This container provides information about a Store logo.
     *  <br>
     *  <br>
     *  The <b>GetStore</b> call now only returns the <b>Logo.URL</b> value, but not <b>Logo.LogoID</b> or <b>Logo.Name</b>.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreLogoType $logo
     */
    private $logo = null;

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
     * Gets as description
     *
     * The seller-provided description of the eBay Store.
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
     * The seller-provided description of the eBay Store.
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
     * This container provides information about a Store logo.
     *  <br>
     *  <br>
     *  The <b>GetStore</b> call now only returns the <b>Logo.URL</b> value, but not <b>Logo.LogoID</b> or <b>Logo.Name</b>.
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
     * This container provides information about a Store logo.
     *  <br>
     *  <br>
     *  The <b>GetStore</b> call now only returns the <b>Logo.URL</b> value, but not <b>Logo.LogoID</b> or <b>Logo.Name</b>.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getLogo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Logo", $value);
        }
        $value = $this->getCustomCategories();
        if (null !== $value && !empty($this->getCustomCategories())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomCategories", array_map(function ($v) {return ["CustomCategory" => $v];}, $value));
        }
        $value = $this->getMerchDisplay();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MerchDisplay", $value);
        }
        $value = $this->getLastOpenedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastOpenedTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Logo');
        if (null !== $value) {
            $this->setLogo(\Nogrod\eBaySDK\Trading\StoreLogoType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomCategories', true);
        if (null !== $value && !empty($value)) {
            $this->setCustomCategories(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::fromKeyValue(Func::mapArray($v, '{urn:ebay:apis:eBLBaseComponents}CustomCategory'));}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MerchDisplay');
        if (null !== $value) {
            $this->setMerchDisplay($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastOpenedTime');
        if (null !== $value) {
            $this->setLastOpenedTime(new \DateTime($value));
        }
    }
}
