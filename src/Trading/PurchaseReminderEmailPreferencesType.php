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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->purchaseReminderEmailPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PurchaseReminderEmailPreferences', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\PurchaseReminderEmailPreferencesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'PurchaseReminderEmailPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->purchaseReminderEmailPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
