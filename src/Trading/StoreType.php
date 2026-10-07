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
        if (!is_array($this->customCategories)) {
            throw new \LogicException('customCategories is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\StoreCustomCategoryType> $customCategories
     * @return self
     */
    public function setCustomCategories(iterable $customCategories)
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->uRLPath;
        if (null !== $value) {
            $writer->writeElementNs(null, 'URLPath', null, (string) $value);
        }
        $value = $this->uRL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'URL', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
        $value = $this->logo;
        if (null !== $value) {
            $writer->startElementNs(null, 'Logo', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->customCategories;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'CustomCategories', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'CustomCategory', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->merchDisplay;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MerchDisplay', null, (string) $value);
        }
        $value = $this->lastOpenedTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LastOpenedTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\StoreType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->customCategories = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'URLPath':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uRLPath = $value;
                    }
                    return true;
                case 'URL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uRL = $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
                case 'Logo':
                    $this->logo = \Nogrod\eBaySDK\Trading\StoreLogoType::xmlRead($reader);
                    return true;
                case 'CustomCategories':
                    $this->customCategories = Func::readList($reader, 'CustomCategory', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\StoreCustomCategoryType::xmlRead($reader));
                    return true;
                case 'MerchDisplay':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->merchDisplay = $value;
                    }
                    return true;
                case 'LastOpenedTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->lastOpenedTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }
}
