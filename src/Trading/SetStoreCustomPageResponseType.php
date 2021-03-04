<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetStoreCustomPageResponseType
 *
 * The base response for the <b>SetStoreCustomPage</b> call. This serves as
 *  confirmation that the custom page was successfully submitted.
 * XSD Type: SetStoreCustomPageResponseType
 */
class SetStoreCustomPageResponseType extends AbstractResponseType
{
    /**
     * This container consists of details for the newly-added or modified eBay Store custom page.
     *
     * @var \Nogrod\eBaySDK\Trading\StoreCustomPageType $customPage
     */
    private $customPage = null;

    /**
     * Gets as customPage
     *
     * This container consists of details for the newly-added or modified eBay Store custom page.
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
     * This container consists of details for the newly-added or modified eBay Store custom page.
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
