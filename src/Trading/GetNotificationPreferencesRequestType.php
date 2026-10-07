<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetNotificationPreferencesRequestType
 *
 * Retrieves the requesting application's notification preferences. Details are only returned for events for which a preference has been set. For example, if you enabled notification for the <b>EndOfAuction</b> event and later disabled it, the <b>GetNotificationPreferences</b> response would cite the <b>EndOfAuction</b> event preference as <b>Disabled</b>. Otherwise, no details would be returned regarding <b>EndOfAuction</b>.
 * XSD Type: GetNotificationPreferencesRequestType
 */
class GetNotificationPreferencesRequestType extends AbstractRequestType
{
    /**
     * Specifies the type of preferences to retrieve. For example, preferences can be associated with a user, with
     *  an application, or with events.
     *  <br>
     *
     * @var string $preferenceLevel
     */
    private $preferenceLevel = null;

    /**
     * Gets as preferenceLevel
     *
     * Specifies the type of preferences to retrieve. For example, preferences can be associated with a user, with
     *  an application, or with events.
     *  <br>
     *
     * @return string
     */
    public function getPreferenceLevel()
    {
        return $this->preferenceLevel;
    }

    /**
     * Sets a new preferenceLevel
     *
     * Specifies the type of preferences to retrieve. For example, preferences can be associated with a user, with
     *  an application, or with events.
     *  <br>
     *
     * @param string $preferenceLevel
     * @return self
     */
    public function setPreferenceLevel($preferenceLevel)
    {
        $this->preferenceLevel = $preferenceLevel;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->preferenceLevel;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PreferenceLevel', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetNotificationPreferencesRequestType
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
                case 'PreferenceLevel':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->preferenceLevel = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
