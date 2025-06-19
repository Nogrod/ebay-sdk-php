<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PurchaseReminderEmailPreferencesType
 *
 * Contains a seller's preference for sending a "Payment Reminder Email" to buyers.
 * XSD Type: PurchaseReminderEmailPreferencesType
 */
class PurchaseReminderEmailPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * If true, a payment reminder Email is sent to buyers.
     *
     * @var bool $purchaseReminderEmailPreferences
     */
    private $purchaseReminderEmailPreferences = null;

    /**
     * Gets as purchaseReminderEmailPreferences
     *
     * If true, a payment reminder Email is sent to buyers.
     *
     * @return bool
     */
    public function getPurchaseReminderEmailPreferences()
    {
        return $this->purchaseReminderEmailPreferences;
    }

    /**
     * Sets a new purchaseReminderEmailPreferences
     *
     * If true, a payment reminder Email is sent to buyers.
     *
     * @param bool $purchaseReminderEmailPreferences
     * @return self
     */
    public function setPurchaseReminderEmailPreferences($purchaseReminderEmailPreferences)
    {
        $this->purchaseReminderEmailPreferences = $purchaseReminderEmailPreferences;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPurchaseReminderEmailPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PurchaseReminderEmailPreferences", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}PurchaseReminderEmailPreferences');
        if (null !== $value) {
            $this->setPurchaseReminderEmailPreferences(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
