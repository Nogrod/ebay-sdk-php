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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->aSQPreferences;
        if (null !== $value) {
            $writer->startElementNs(null, 'ASQPreferences', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SetMessagePreferencesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'ASQPreferences':
                    $this->aSQPreferences = \Nogrod\eBaySDK\Trading\ASQPreferencesType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
