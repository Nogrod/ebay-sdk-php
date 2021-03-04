<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetStoreCustomPageRequestType
 *
 * Creates or updates a custom page on a user's eBay Store. Sellers must have an eBay Store subscription in order to use this call.
 * XSD Type: SetStoreCustomPageRequestType
 */
class SetStoreCustomPageRequestType extends AbstractRequestType
{
    /**
     * This container is used to create a new eBay Store custom page or modify an existing custom page.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomPageType $customPage
     */
    private $customPage = null;

    /**
     * Gets as customPage
     *
     * This container is used to create a new eBay Store custom page or modify an existing custom page.
     *
     * @return \Nogrod\eBaySDK\Trading\StoreCustomPageType
     */
    public function getCustomPage()
    {
        return $this->customPage;
    }

    /**
     * Sets a new customPage
     *
     * This container is used to create a new eBay Store custom page or modify an existing custom page.
     *
     * @param \Nogrod\eBaySDK\Trading\StoreCustomPageType $customPage
     * @return self
     */
    public function setCustomPage(\Nogrod\eBaySDK\Trading\StoreCustomPageType $customPage)
    {
        $this->customPage = $customPage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCustomPage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomPage", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomPage');
        if (null !== $value) {
            $this->setCustomPage(\Nogrod\eBaySDK\Trading\StoreCustomPageType::fromKeyValue($value));
        }
    }
}
