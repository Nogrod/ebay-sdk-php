<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DeleteMyMessagesRequestType
 *
 * Removes selected messages for a given user.
 * XSD Type: DeleteMyMessagesRequestType
 */
class DeleteMyMessagesRequestType extends AbstractRequestType
{
    /**
     * This field is deprecated.
     *
     * @var string[] $alertIDs
     */
    private $alertIDs = null;

    /**
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @var string[] $messageIDs
     */
    private $messageIDs = null;

    /**
     * Adds as alertID
     *
     * This field is deprecated.
     *
     * @return self
     * @param string $alertID
     */
    public function addToAlertIDs($alertID)
    {
        $this->alertIDs[] = $alertID;
        return $this;
    }

    /**
     * isset alertIDs
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlertIDs($index)
    {
        return isset($this->alertIDs[$index]);
    }

    /**
     * unset alertIDs
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlertIDs($index)
    {
        unset($this->alertIDs[$index]);
    }

    /**
     * Gets as alertIDs
     *
     * This field is deprecated.
     *
     * @return string[]
     */
    public function getAlertIDs()
    {
        return $this->alertIDs;
    }

    /**
     * Sets a new alertIDs
     *
     * This field is deprecated.
     *
     * @param string $alertIDs
     * @return self
     */
    public function setAlertIDs(array $alertIDs)
    {
        $this->alertIDs = $alertIDs;
        return $this;
    }

    /**
     * Adds as messageID
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @return self
     * @param string $messageID
     */
    public function addToMessageIDs($messageID)
    {
        $this->messageIDs[] = $messageID;
        return $this;
    }

    /**
     * isset messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessageIDs($index)
    {
        return isset($this->messageIDs[$index]);
    }

    /**
     * unset messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessageIDs($index)
    {
        unset($this->messageIDs[$index]);
    }

    /**
     * Gets as messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @return string[]
     */
    public function getMessageIDs()
    {
        return $this->messageIDs;
    }

    /**
     * Sets a new messageIDs
     *
     * Contains a list of up to 10 <b>MessageID</b> values.
     *
     * @param string $messageIDs
     * @return self
     */
    public function setMessageIDs(array $messageIDs)
    {
        $this->messageIDs = $messageIDs;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getAlertIDs();
        if (null !== $value && !empty($this->getAlertIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlertIDs", array_map(function ($v) {
                return ["AlertID" => $v];
            }, $value));
        }
        $value = $this->getMessageIDs();
        if (null !== $value && !empty($this->getMessageIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageIDs", array_map(function ($v) {
                return ["MessageID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setAlertIDs($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setMessageIDs($value);
        }
    }
}
