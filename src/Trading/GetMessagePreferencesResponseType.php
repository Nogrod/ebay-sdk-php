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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ASQPreferences');
        if (null !== $value) {
            $this->setASQPreferences(\Nogrod\eBaySDK\Trading\ASQPreferencesType::fromKeyValue($value));
        }
    }
}
