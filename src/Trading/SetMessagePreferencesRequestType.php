<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetMessagePreferencesRequestType
 *
 * Enables a seller to add custom Ask Seller a Question (ASQ) subjects to their
 *  Ask a Question page, or to reset any custom subjects to their default values.
 * XSD Type: SetMessagePreferencesRequestType
 */
class SetMessagePreferencesRequestType extends AbstractRequestType
{

    /**
     * This container can be used to set customized ASQ subjects, or it can be used to reset the ASQ subjects to the eBay defaults. Up to nine customized ASQ subjects can be set.
     *
     * @var \Nogrod\eBaySDK\Trading\ASQPreferencesType $aSQPreferences
     */
    private $aSQPreferences = null;

    /**
     * Gets as aSQPreferences
     *
     * This container can be used to set customized ASQ subjects, or it can be used to reset the ASQ subjects to the eBay defaults. Up to nine customized ASQ subjects can be set.
     *
     * @return \Nogrod\eBaySDK\Trading\ASQPreferencesType
     */
    public function getASQPreferences()
    {
        return $this->aSQPreferences;
    }

    /**
     * Sets a new aSQPreferences
     *
     * This container can be used to set customized ASQ subjects, or it can be used to reset the ASQ subjects to the eBay defaults. Up to nine customized ASQ subjects can be set.
     *
     * @param \Nogrod\eBaySDK\Trading\ASQPreferencesType $aSQPreferences
     * @return self
     */
    public function setASQPreferences(\Nogrod\eBaySDK\Trading\ASQPreferencesType $aSQPreferences)
    {
        $this->aSQPreferences = $aSQPreferences;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getASQPreferences();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ASQPreferences", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ASQPreferences');
        if (null !== $value) {
            $this->setASQPreferences(\Nogrod\eBaySDK\Trading\ASQPreferencesType::fromKeyValue($value));
        }
    }
}
