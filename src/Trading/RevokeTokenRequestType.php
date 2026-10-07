<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RevokeTokenRequestType
 *
 * Revokes a token before it would otherwise expire.
 * XSD Type: RevokeTokenRequestType
 */
class RevokeTokenRequestType extends AbstractRequestType
{
    /**
     * Cancels notification subscriptions for the user/application if set to true. Default value is false.
     *
     * @var bool $unsubscribeNotification
     */
    private $unsubscribeNotification = null;

    /**
     * Gets as unsubscribeNotification
     *
     * Cancels notification subscriptions for the user/application if set to true. Default value is false.
     *
     * @return bool
     */
    public function getUnsubscribeNotification()
    {
        return $this->unsubscribeNotification;
    }

    /**
     * Sets a new unsubscribeNotification
     *
     * Cancels notification subscriptions for the user/application if set to true. Default value is false.
     *
     * @param bool $unsubscribeNotification
     * @return self
     */
    public function setUnsubscribeNotification($unsubscribeNotification)
    {
        $this->unsubscribeNotification = $unsubscribeNotification;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->unsubscribeNotification;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UnsubscribeNotification', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RevokeTokenRequestType
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
                case 'UnsubscribeNotification':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->unsubscribeNotification = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
