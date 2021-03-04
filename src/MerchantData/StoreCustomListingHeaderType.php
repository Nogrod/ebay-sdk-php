<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomListingHeaderType
 *
 * Configuration of a Store custom listing header.
 * XSD Type: StoreCustomListingHeaderType
 */
class StoreCustomListingHeaderType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Display type for the custom listing header.
     *
     * @var string $displayType
     */
    private $displayType = null;

    /**
     * Specifies whether the custom header has a logo.
     *
     * @var bool $logo
     */
    private $logo = null;

    /**
     * Specifies whether the custom header has a search box.
     *
     * @var bool $searchBox
     */
    private $searchBox = null;

    /**
     * Link to include in the custom header.
     *
     * @var \Nogrod\eBaySDK\MerchantData\StoreCustomListingHeaderLinkType[] $linkToInclude
     */
    private $linkToInclude = [
        
    ];

    /**
     * Specifies whether the custom header has a link to Add to
     *  Favorite Stores.
     *
     * @var bool $addToFavoriteStores
     */
    private $addToFavoriteStores = null;

    /**
     * Specifies whether the custom header has a link to Sign up for Store
     *  Newsletter.
     *
     * @var bool $signUpForStoreNewsletter
     */
    private $signUpForStoreNewsletter = null;

    /**
     * Gets as displayType
     *
     * Display type for the custom listing header.
     *
     * @return string
     */
    public function getDisplayType()
    {
        return $this->displayType;
    }

    /**
     * Sets a new displayType
     *
     * Display type for the custom listing header.
     *
     * @param string $displayType
     * @return self
     */
    public function setDisplayType($displayType)
    {
        $this->displayType = $displayType;
        return $this;
    }

    /**
     * Gets as logo
     *
     * Specifies whether the custom header has a logo.
     *
     * @return bool
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets a new logo
     *
     * Specifies whether the custom header has a logo.
     *
     * @param bool $logo
     * @return self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Gets as searchBox
     *
     * Specifies whether the custom header has a search box.
     *
     * @return bool
     */
    public function getSearchBox()
    {
        return $this->searchBox;
    }

    /**
     * Sets a new searchBox
     *
     * Specifies whether the custom header has a search box.
     *
     * @param bool $searchBox
     * @return self
     */
    public function setSearchBox($searchBox)
    {
        $this->searchBox = $searchBox;
        return $this;
    }

    /**
     * Adds as linkToInclude
     *
     * Link to include in the custom header.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\StoreCustomListingHeaderLinkType $linkToInclude
     */
    public function addToLinkToInclude(\Nogrod\eBaySDK\MerchantData\StoreCustomListingHeaderLinkType $linkToInclude)
    {
        $this->linkToInclude[] = $linkToInclude;
        return $this;
    }

    /**
     * isset linkToInclude
     *
     * Link to include in the custom header.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLinkToInclude($index)
    {
        return isset($this->linkToInclude[$index]);
    }

    /**
     * unset linkToInclude
     *
     * Link to include in the custom header.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLinkToInclude($index)
    {
        unset($this->linkToInclude[$index]);
    }

    /**
     * Gets as linkToInclude
     *
     * Link to include in the custom header.
     *
     * @return \Nogrod\eBaySDK\MerchantData\StoreCustomListingHeaderLinkType[]
     */
    public function getLinkToInclude()
    {
        return $this->linkToInclude;
    }

    /**
     * Sets a new linkToInclude
     *
     * Link to include in the custom header.
     *
     * @param \Nogrod\eBaySDK\MerchantData\StoreCustomListingHeaderLinkType[] $linkToInclude
     * @return self
     */
    public function setLinkToInclude(array $linkToInclude)
    {
        $this->linkToInclude = $linkToInclude;
        return $this;
    }

    /**
     * Gets as addToFavoriteStores
     *
     * Specifies whether the custom header has a link to Add to
     *  Favorite Stores.
     *
     * @return bool
     */
    public function getAddToFavoriteStores()
    {
        return $this->addToFavoriteStores;
    }

    /**
     * Sets a new addToFavoriteStores
     *
     * Specifies whether the custom header has a link to Add to
     *  Favorite Stores.
     *
     * @param bool $addToFavoriteStores
     * @return self
     */
    public function setAddToFavoriteStores($addToFavoriteStores)
    {
        $this->addToFavoriteStores = $addToFavoriteStores;
        return $this;
    }

    /**
     * Gets as signUpForStoreNewsletter
     *
     * Specifies whether the custom header has a link to Sign up for Store
     *  Newsletter.
     *
     * @return bool
     */
    public function getSignUpForStoreNewsletter()
    {
        return $this->signUpForStoreNewsletter;
    }

    /**
     * Sets a new signUpForStoreNewsletter
     *
     * Specifies whether the custom header has a link to Sign up for Store
     *  Newsletter.
     *
     * @param bool $signUpForStoreNewsletter
     * @return self
     */
    public function setSignUpForStoreNewsletter($signUpForStoreNewsletter)
    {
        $this->signUpForStoreNewsletter = $signUpForStoreNewsletter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisplayType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisplayType", $value);
        }
        $value = $this->getLogo();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Logo", $value);
        }
        $value = $this->getSearchBox();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchBox", $value);
        }
        $value = $this->getLinkToInclude();
        if (null !== $value && !empty($this->getLinkToInclude())) {
            $writer->write(array_map(function ($v) {
                return ["LinkToInclude" => $v];
            }, $value));
        }
        $value = $this->getAddToFavoriteStores();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AddToFavoriteStores", $value);
        }
        $value = $this->getSignUpForStoreNewsletter();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SignUpForStoreNewsletter", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisplayType');
        if (null !== $value) {
            $this->setDisplayType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Logo');
        if (null !== $value) {
            $this->setLogo($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchBox');
        if (null !== $value) {
            $this->setSearchBox($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LinkToInclude', true);
        if (null !== $value && !empty($value)) {
            $this->setLinkToInclude(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\StoreCustomListingHeaderLinkType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddToFavoriteStores');
        if (null !== $value) {
            $this->setAddToFavoriteStores($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SignUpForStoreNewsletter');
        if (null !== $value) {
            $this->setSignUpForStoreNewsletter($value);
        }
    }
}
