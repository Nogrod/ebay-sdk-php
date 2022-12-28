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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPreferenceLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PreferenceLevel", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PreferenceLevel');
        if (null !== $value) {
            $this->setPreferenceLevel($value);
        }
    }
}
