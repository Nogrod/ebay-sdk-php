<?php

namespace Nogrod\eBaySDK\Trading;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getMessageBody();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageBody", $value);
        }
        $value = $this->getEIAS();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EIAS", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageBody');
        if (null !== $value) {
            $this->setMessageBody($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EIAS');
        if (null !== $value) {
            $this->setEIAS($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
