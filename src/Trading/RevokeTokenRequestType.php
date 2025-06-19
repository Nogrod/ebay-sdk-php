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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getUnsubscribeNotification();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnsubscribeNotification", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\RevokeTokenRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnsubscribeNotification');
        if (null !== $value) {
            $this->setUnsubscribeNotification(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
