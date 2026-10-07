<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReviseMyMessagesFoldersRequestType
 *
 * This call can be used to add, remove, or rename a custom folder in <b>My eBay Messages</b>. Note that the Inbox and Sent folders cannot be removed or renamed in <b>My eBay Messages</b>.
 *  <br/><br/>
 *  A user can have up to 10 custom folders in <b>My eBay Messages</b>, and it is possible to add, remove, or rename up to 10 custom folders with one <b>ReviseMyMessagesFolders</b> call
 * XSD Type: ReviseMyMessagesFoldersRequestType
 */
class ReviseMyMessagesFoldersRequestType extends AbstractRequestType
{
    /**
     * This required field is used to indicate the type of operation to perform (add, remove, or rename a folder). See the enumeration descriptions below for more information on the usage, requirements, and limitations on each operation.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * The eBay-generated unique identifier for a custom folder in <b>My eBay Messages</b>. The <b>FolderID</b> value is required for the 'Rename' and 'Remove' operations, but not for the 'Display' (add) operation. <b>FolderID</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderID</b> value for a <b>My eBay Messages</b> folder can be seen at the end of the browser's URL field when you navigate to that folder in <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @var int[] $folderID
     */
    private $folderID = [

    ];

    /**
     * The user-specified name of the <b>My eBay Messages</b> folder. The <b>FolderName</b> value is required for the 'Display' (add) and 'Rename' operations, but not for the 'Remove' operation. In a 'Display' (add) operation, the name passed into the <b>FolderName</b> field is the name of the new folder. In a 'Rename' operation, the name passed into the <b>FolderName</b> field will be the new name of the existing folder that is specified through the corresponding <b>FolderID</b> field.
     *  <br/><br/>
     *  <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderName</b> value for a <b>My eBay Messages</b> folder can be seen when you navigate to <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @var string[] $folderName
     */
    private $folderName = [

    ];

    /**
     * Gets as operation
     *
     * This required field is used to indicate the type of operation to perform (add, remove, or rename a folder). See the enumeration descriptions below for more information on the usage, requirements, and limitations on each operation.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * This required field is used to indicate the type of operation to perform (add, remove, or rename a folder). See the enumeration descriptions below for more information on the usage, requirements, and limitations on each operation.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Adds as folderID
     *
     * The eBay-generated unique identifier for a custom folder in <b>My eBay Messages</b>. The <b>FolderID</b> value is required for the 'Rename' and 'Remove' operations, but not for the 'Display' (add) operation. <b>FolderID</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderID</b> value for a <b>My eBay Messages</b> folder can be seen at the end of the browser's URL field when you navigate to that folder in <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @return self
     * @param int $folderID
     */
    public function addToFolderID($folderID)
    {
        if (!is_array($this->folderID)) {
            throw new \LogicException('folderID is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->folderID[] = $folderID;
        return $this;
    }

    /**
     * isset folderID
     *
     * The eBay-generated unique identifier for a custom folder in <b>My eBay Messages</b>. The <b>FolderID</b> value is required for the 'Rename' and 'Remove' operations, but not for the 'Display' (add) operation. <b>FolderID</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderID</b> value for a <b>My eBay Messages</b> folder can be seen at the end of the browser's URL field when you navigate to that folder in <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFolderID($index)
    {
        return isset($this->folderID[$index]);
    }

    /**
     * unset folderID
     *
     * The eBay-generated unique identifier for a custom folder in <b>My eBay Messages</b>. The <b>FolderID</b> value is required for the 'Rename' and 'Remove' operations, but not for the 'Display' (add) operation. <b>FolderID</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderID</b> value for a <b>My eBay Messages</b> folder can be seen at the end of the browser's URL field when you navigate to that folder in <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFolderID($index)
    {
        unset($this->folderID[$index]);
    }

    /**
     * Gets as folderID
     *
     * The eBay-generated unique identifier for a custom folder in <b>My eBay Messages</b>. The <b>FolderID</b> value is required for the 'Rename' and 'Remove' operations, but not for the 'Display' (add) operation. <b>FolderID</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderID</b> value for a <b>My eBay Messages</b> folder can be seen at the end of the browser's URL field when you navigate to that folder in <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @return iterable<int>
     */
    public function getFolderID()
    {
        return $this->folderID;
    }

    /**
     * Sets a new folderID
     *
     * The eBay-generated unique identifier for a custom folder in <b>My eBay Messages</b>. The <b>FolderID</b> value is required for the 'Rename' and 'Remove' operations, but not for the 'Display' (add) operation. <b>FolderID</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderID</b> value for a <b>My eBay Messages</b> folder can be seen at the end of the browser's URL field when you navigate to that folder in <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @param iterable<int> $folderID
     * @return self
     */
    public function setFolderID(iterable $folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    /**
     * Adds as folderName
     *
     * The user-specified name of the <b>My eBay Messages</b> folder. The <b>FolderName</b> value is required for the 'Display' (add) and 'Rename' operations, but not for the 'Remove' operation. In a 'Display' (add) operation, the name passed into the <b>FolderName</b> field is the name of the new folder. In a 'Rename' operation, the name passed into the <b>FolderName</b> field will be the new name of the existing folder that is specified through the corresponding <b>FolderID</b> field.
     *  <br/><br/>
     *  <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderName</b> value for a <b>My eBay Messages</b> folder can be seen when you navigate to <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @return self
     * @param string $folderName
     */
    public function addToFolderName($folderName)
    {
        if (!is_array($this->folderName)) {
            throw new \LogicException('folderName is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->folderName[] = $folderName;
        return $this;
    }

    /**
     * isset folderName
     *
     * The user-specified name of the <b>My eBay Messages</b> folder. The <b>FolderName</b> value is required for the 'Display' (add) and 'Rename' operations, but not for the 'Remove' operation. In a 'Display' (add) operation, the name passed into the <b>FolderName</b> field is the name of the new folder. In a 'Rename' operation, the name passed into the <b>FolderName</b> field will be the new name of the existing folder that is specified through the corresponding <b>FolderID</b> field.
     *  <br/><br/>
     *  <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderName</b> value for a <b>My eBay Messages</b> folder can be seen when you navigate to <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFolderName($index)
    {
        return isset($this->folderName[$index]);
    }

    /**
     * unset folderName
     *
     * The user-specified name of the <b>My eBay Messages</b> folder. The <b>FolderName</b> value is required for the 'Display' (add) and 'Rename' operations, but not for the 'Remove' operation. In a 'Display' (add) operation, the name passed into the <b>FolderName</b> field is the name of the new folder. In a 'Rename' operation, the name passed into the <b>FolderName</b> field will be the new name of the existing folder that is specified through the corresponding <b>FolderID</b> field.
     *  <br/><br/>
     *  <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderName</b> value for a <b>My eBay Messages</b> folder can be seen when you navigate to <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFolderName($index)
    {
        unset($this->folderName[$index]);
    }

    /**
     * Gets as folderName
     *
     * The user-specified name of the <b>My eBay Messages</b> folder. The <b>FolderName</b> value is required for the 'Display' (add) and 'Rename' operations, but not for the 'Remove' operation. In a 'Display' (add) operation, the name passed into the <b>FolderName</b> field is the name of the new folder. In a 'Rename' operation, the name passed into the <b>FolderName</b> field will be the new name of the existing folder that is specified through the corresponding <b>FolderID</b> field.
     *  <br/><br/>
     *  <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderName</b> value for a <b>My eBay Messages</b> folder can be seen when you navigate to <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @return iterable<string>
     */
    public function getFolderName()
    {
        return $this->folderName;
    }

    /**
     * Sets a new folderName
     *
     * The user-specified name of the <b>My eBay Messages</b> folder. The <b>FolderName</b> value is required for the 'Display' (add) and 'Rename' operations, but not for the 'Remove' operation. In a 'Display' (add) operation, the name passed into the <b>FolderName</b> field is the name of the new folder. In a 'Rename' operation, the name passed into the <b>FolderName</b> field will be the new name of the existing folder that is specified through the corresponding <b>FolderID</b> field.
     *  <br/><br/>
     *  <b>FolderName</b> values can be retrieved by calling <b>GetMyMessages</b> with a <b>DetailLevel</b> value set to <code>ReturnSummary</code>, or the <b>FolderName</b> value for a <b>My eBay Messages</b> folder can be seen when you navigate to <b>My eBay Messages</b>.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> If multiple folders will be renamed with one call, the user must pay close attention to the order of the <b>FolderID</b> and <b>FolderName</b> fields, as eBay will process these requests in order according to the placement of the the <b>FolderID</b> and <b>FolderName</b> fields. So, the existing folder identified by the first <b>FolderID</b> field in the request payload will get renamed to the folder name passed into the first <b>FolderName</b> field in the request payload, and so on.
     *  </span>
     *
     * @param iterable<string> $folderName
     * @return self
     */
    public function setFolderName(iterable $folderName)
    {
        $this->folderName = $folderName;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->operation;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Operation', null, (string) $value);
        }
        $value = $this->folderID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'FolderID', null, (string) $v);
            }
        }
        $value = $this->folderName;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'FolderName', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ReviseMyMessagesFoldersRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->folderID = [];
        $this->folderName = [];
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
                case 'Operation':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->operation = $value;
                    }
                    return true;
                case 'FolderID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->folderID[] = (int) $value;
                    }
                    return true;
                case 'FolderName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->folderName[] = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['Operation'] = $this->operation;
        $data['FolderID'] = Func::jsonList($this->folderID);
        $data['FolderName'] = Func::jsonList($this->folderName);
        return $data;
    }
}
