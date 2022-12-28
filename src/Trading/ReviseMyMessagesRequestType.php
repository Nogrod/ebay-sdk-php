<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseMyMessagesRequestType
 *
 * This call can be used to mark one or more messages as 'Read', to flag one or more messages, and/or to move one or more messages to another My Messages folder. Any of these actions can be applied on up to 10 messages with one call.
 * XSD Type: ReviseMyMessagesRequestType
 */
class ReviseMyMessagesRequestType extends AbstractRequestType
{
    /**
     * This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @var string[] $messageIDs
     */
    private $messageIDs = null;

    /**
     * This field is deprecated.
     *
     * @var string[] $alertIDs
     */
    private $alertIDs = null;

    /**
     * This boolean field is used to change the 'Read' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will mark all messages in the <b>MessageIDs</b> container as 'Read'. Conversely, including this field and setting its value to <code>false</code> will mark all messages in the <b>MessageIDs</b> container as 'Unread'. The 'Read' status of a message can be retrieved by looking at the <b>Message.Read</b> boolean field of the <b>GetMyMessages</b> call response.
     *  <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @var bool $read
     */
    private $read = null;

    /**
     * This boolean field is used to change the 'Flagged' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will flag all messages in the <b>MessageIDs</b> container. Conversely, including this field and setting its value to <code>false</code> will unflag all messages in the <b>MessageIDs</b> container. The 'Flagged' status of a message can be retrieved by looking at the <b>Message.Flagged</b> boolean field of the <b>GetMyMessages</b> call response.
     *  <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @var bool $flagged
     */
    private $flagged = null;

    /**
     * A unique identifier of My Messages folder. A <b>FolderID</b> value is supplied if the user want to move the message(s) in the <b>MessageIDs</b> container to a different folder. <b>FolderID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnSummary</code>. <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * Adds as messageID
     *
     * This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
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
     * This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
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
     * This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
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
     * This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
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
     * This container is used to specify up to 10 messages (specified with their <b>MessageID</b> values) on which to perform on or more actions. At least one <b>MessageID</b> value must be included in the request. <b>MessageID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnHeaders</code>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @param string $messageIDs
     * @return self
     */
    public function setMessageIDs(array $messageIDs)
    {
        $this->messageIDs = $messageIDs;
        return $this;
    }

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
     * Gets as read
     *
     * This boolean field is used to change the 'Read' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will mark all messages in the <b>MessageIDs</b> container as 'Read'. Conversely, including this field and setting its value to <code>false</code> will mark all messages in the <b>MessageIDs</b> container as 'Unread'. The 'Read' status of a message can be retrieved by looking at the <b>Message.Read</b> boolean field of the <b>GetMyMessages</b> call response.
     *  <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @return bool
     */
    public function getRead()
    {
        return $this->read;
    }

    /**
     * Sets a new read
     *
     * This boolean field is used to change the 'Read' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will mark all messages in the <b>MessageIDs</b> container as 'Read'. Conversely, including this field and setting its value to <code>false</code> will mark all messages in the <b>MessageIDs</b> container as 'Unread'. The 'Read' status of a message can be retrieved by looking at the <b>Message.Read</b> boolean field of the <b>GetMyMessages</b> call response.
     *  <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @param bool $read
     * @return self
     */
    public function setRead($read)
    {
        $this->read = $read;
        return $this;
    }

    /**
     * Gets as flagged
     *
     * This boolean field is used to change the 'Flagged' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will flag all messages in the <b>MessageIDs</b> container. Conversely, including this field and setting its value to <code>false</code> will unflag all messages in the <b>MessageIDs</b> container. The 'Flagged' status of a message can be retrieved by looking at the <b>Message.Flagged</b> boolean field of the <b>GetMyMessages</b> call response.
     *  <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @return bool
     */
    public function getFlagged()
    {
        return $this->flagged;
    }

    /**
     * Sets a new flagged
     *
     * This boolean field is used to change the 'Flagged' status of the message(s) in the <b>MessageIDs</b> container. Including this field and setting its value to <code>true</code> will flag all messages in the <b>MessageIDs</b> container. Conversely, including this field and setting its value to <code>false</code> will unflag all messages in the <b>MessageIDs</b> container. The 'Flagged' status of a message can be retrieved by looking at the <b>Message.Flagged</b> boolean field of the <b>GetMyMessages</b> call response.
     *  <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @param bool $flagged
     * @return self
     */
    public function setFlagged($flagged)
    {
        $this->flagged = $flagged;
        return $this;
    }

    /**
     * Gets as folderID
     *
     * A unique identifier of My Messages folder. A <b>FolderID</b> value is supplied if the user want to move the message(s) in the <b>MessageIDs</b> container to a different folder. <b>FolderID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnSummary</code>. <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @return int
     */
    public function getFolderID()
    {
        return $this->folderID;
    }

    /**
     * Sets a new folderID
     *
     * A unique identifier of My Messages folder. A <b>FolderID</b> value is supplied if the user want to move the message(s) in the <b>MessageIDs</b> container to a different folder. <b>FolderID</b> values can be retrieved with the <b>GetMyMessages</b> call with the <b>DetailLevel</b> value set to <code>ReturnSummary</code>. <br>
     *  <br>
     *  In each <b>ReviseMyMessages</b> call, at least one of the following fields must be specified in the request: <b>Read</b>, <b>Flagged</b>, and <b>FolderID</b>.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b> Messages in the Sent folder of My Messages cannot be moved, marked as read, or flagged. </span>
     *
     * @param int $folderID
     * @return self
     */
    public function setFolderID($folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getMessageIDs();
        if (null !== $value && !empty($this->getMessageIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageIDs", array_map(function ($v) {
                return ["MessageID" => $v];
            }, $value));
        }
        $value = $this->getAlertIDs();
        if (null !== $value && !empty($this->getAlertIDs())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlertIDs", array_map(function ($v) {
                return ["AlertID" => $v];
            }, $value));
        }
        $value = $this->getRead();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Read", $value);
        }
        $value = $this->getFlagged();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Flagged", $value);
        }
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setMessageIDs($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertIDs', true);
        if (null !== $value && !empty($value)) {
            $this->setAlertIDs($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Read');
        if (null !== $value) {
            $this->setRead($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Flagged');
        if (null !== $value) {
            $this->setFlagged($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
    }
}
