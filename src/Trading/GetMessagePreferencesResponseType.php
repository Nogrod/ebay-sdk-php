<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMessagePreferencesResponseType
 *
 * Contains the ASQ subjects for the user specified in the request.
 * XSD Type: GetMessagePreferencesResponseType
 */
class GetMessagePreferencesResponseType extends AbstractResponseType
{
    /**
     * Returns a seller's ASQ subjects, each in its own Subject
     *  node. If the seller has not customized the ASQ subjects
     *  using SetMessagePreferences, the call will return the
     *  current default values. Returned if
     *  IncludeASQPreferences = true was specified in the
     *  request.
     *
     * @var \Nogrod\eBaySDK\Trading\ASQPreferencesType $aSQPreferences
     */
    private $aSQPreferences = null;

    /**
     * Gets as aSQPreferences
     *
     * Returns a seller's ASQ subjects, each in its own Subject
     *  node. If the seller has not customized the ASQ subjects
     *  using SetMessagePreferences, the call will return the
     *  current default values. Returned if
     *  IncludeASQPreferences = true was specified in the
     *  request.
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
     * Returns a seller's ASQ subjects, each in its own Subject
     *  node. If the seller has not customized the ASQ subjects
     *  using SetMessagePreferences, the call will return the
     *  current default values. Returned if
     *  IncludeASQPreferences = true was specified in the
     *  request.
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMessagePreferencesResponseType
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

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ASQPreferences'] = $this->aSQPreferences;
        return $data;
    }
}
