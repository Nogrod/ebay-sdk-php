<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NotificationMessageType
 *
 * A template for an SMS notification message.
 * XSD Type: NotificationMessageType
 */
class NotificationMessageType extends AbstractResponseType
{
    /**
     * The SMS message.
     *
     * @var string $messageBody
     */
    private $messageBody = null;

    /**
     * The EIAS userId.
     *
     * @var string $eIAS
     */
    private $eIAS = null;

    /**
     * Gets as messageBody
     *
     * The SMS message.
     *
     * @return string
     */
    public function getMessageBody()
    {
        return $this->messageBody;
    }

    /**
     * Sets a new messageBody
     *
     * The SMS message.
     *
     * @param string $messageBody
     * @return self
     */
    public function setMessageBody($messageBody)
    {
        $this->messageBody = $messageBody;
        return $this;
    }

    /**
     * Gets as eIAS
     *
     * The EIAS userId.
     *
     * @return string
     */
    public function getEIAS()
    {
        return $this->eIAS;
    }

    /**
     * Sets a new eIAS
     *
     * The EIAS userId.
     *
     * @param string $eIAS
     * @return self
     */
    public function setEIAS($eIAS)
    {
        $this->eIAS = $eIAS;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->messageBody;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MessageBody', null, (string) $value);
        }
        $value = $this->eIAS;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EIAS', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NotificationMessageType
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
                case 'MessageBody':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->messageBody = $value;
                    }
                    return true;
                case 'EIAS':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->eIAS = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
