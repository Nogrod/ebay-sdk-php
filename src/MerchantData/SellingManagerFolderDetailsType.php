<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerFolderDetailsType
 *
 * Contains information about a Selling Manager folder.
 * XSD Type: SellingManagerFolderDetailsType
 */
class SellingManagerFolderDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Unique ID of the folder. Originally returned in the AddSellingManagerInventoryFolder response.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * Unique ID of the parent folder. If it exists, it is returned.
     *
     * @var int $parentFolderID
     */
    private $parentFolderID = null;

    /**
     * Level of this folder in the folder tree hierarchy. Root folder is at level 1.
     *
     * @var int $folderLevel
     */
    private $folderLevel = null;

    /**
     * Name assigned to the folder by the user in the AddSellingManagerInventoryFolder or
     *  the ReviseSellingManagerInventoryFolder call.
     *
     * @var string $folderName
     */
    private $folderName = null;

    /**
     * Comments associated with the folder. Returned if it exists.
     *
     * @var string $folderComment
     */
    private $folderComment = null;

    /**
     * Container for sub-folder information. Returned if requested.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerFolderDetailsType[] $childFolder
     */
    private $childFolder = [
        
    ];

    /**
     * Date when this folder was created.
     *
     * @var \DateTime $creationTime
     */
    private $creationTime = null;

    /**
     * Gets as folderID
     *
     * Unique ID of the folder. Originally returned in the AddSellingManagerInventoryFolder response.
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
     * Unique ID of the folder. Originally returned in the AddSellingManagerInventoryFolder response.
     *
     * @param int $folderID
     * @return self
     */
    public function setFolderID($folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    /**
     * Gets as parentFolderID
     *
     * Unique ID of the parent folder. If it exists, it is returned.
     *
     * @return int
     */
    public function getParentFolderID()
    {
        return $this->parentFolderID;
    }

    /**
     * Sets a new parentFolderID
     *
     * Unique ID of the parent folder. If it exists, it is returned.
     *
     * @param int $parentFolderID
     * @return self
     */
    public function setParentFolderID($parentFolderID)
    {
        $this->parentFolderID = $parentFolderID;
        return $this;
    }

    /**
     * Gets as folderLevel
     *
     * Level of this folder in the folder tree hierarchy. Root folder is at level 1.
     *
     * @return int
     */
    public function getFolderLevel()
    {
        return $this->folderLevel;
    }

    /**
     * Sets a new folderLevel
     *
     * Level of this folder in the folder tree hierarchy. Root folder is at level 1.
     *
     * @param int $folderLevel
     * @return self
     */
    public function setFolderLevel($folderLevel)
    {
        $this->folderLevel = $folderLevel;
        return $this;
    }

    /**
     * Gets as folderName
     *
     * Name assigned to the folder by the user in the AddSellingManagerInventoryFolder or
     *  the ReviseSellingManagerInventoryFolder call.
     *
     * @return string
     */
    public function getFolderName()
    {
        return $this->folderName;
    }

    /**
     * Sets a new folderName
     *
     * Name assigned to the folder by the user in the AddSellingManagerInventoryFolder or
     *  the ReviseSellingManagerInventoryFolder call.
     *
     * @param string $folderName
     * @return self
     */
    public function setFolderName($folderName)
    {
        $this->folderName = $folderName;
        return $this;
    }

    /**
     * Gets as folderComment
     *
     * Comments associated with the folder. Returned if it exists.
     *
     * @return string
     */
    public function getFolderComment()
    {
        return $this->folderComment;
    }

    /**
     * Sets a new folderComment
     *
     * Comments associated with the folder. Returned if it exists.
     *
     * @param string $folderComment
     * @return self
     */
    public function setFolderComment($folderComment)
    {
        $this->folderComment = $folderComment;
        return $this;
    }

    /**
     * Adds as childFolder
     *
     * Container for sub-folder information. Returned if requested.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerFolderDetailsType $childFolder
     */
    public function addToChildFolder(\Nogrod\eBaySDK\MerchantData\SellingManagerFolderDetailsType $childFolder)
    {
        $this->childFolder[] = $childFolder;
        return $this;
    }

    /**
     * isset childFolder
     *
     * Container for sub-folder information. Returned if requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildFolder($index)
    {
        return isset($this->childFolder[$index]);
    }

    /**
     * unset childFolder
     *
     * Container for sub-folder information. Returned if requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildFolder($index)
    {
        unset($this->childFolder[$index]);
    }

    /**
     * Gets as childFolder
     *
     * Container for sub-folder information. Returned if requested.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerFolderDetailsType[]
     */
    public function getChildFolder()
    {
        return $this->childFolder;
    }

    /**
     * Sets a new childFolder
     *
     * Container for sub-folder information. Returned if requested.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerFolderDetailsType[] $childFolder
     * @return self
     */
    public function setChildFolder(array $childFolder)
    {
        $this->childFolder = $childFolder;
        return $this;
    }

    /**
     * Gets as creationTime
     *
     * Date when this folder was created.
     *
     * @return \DateTime
     */
    public function getCreationTime()
    {
        return $this->creationTime;
    }

    /**
     * Sets a new creationTime
     *
     * Date when this folder was created.
     *
     * @param \DateTime $creationTime
     * @return self
     */
    public function setCreationTime(\DateTime $creationTime)
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getParentFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ParentFolderID", $value);
        }
        $value = $this->getFolderLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderLevel", $value);
        }
        $value = $this->getFolderName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderName", $value);
        }
        $value = $this->getFolderComment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderComment", $value);
        }
        $value = $this->getChildFolder();
        if (null !== $value && !empty($this->getChildFolder())) {
            $writer->write(array_map(function ($v) {
                return ["ChildFolder" => $v];
            }, $value));
        }
        $value = $this->getCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CreationTime", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ParentFolderID');
        if (null !== $value) {
            $this->setParentFolderID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderLevel');
        if (null !== $value) {
            $this->setFolderLevel($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderName');
        if (null !== $value) {
            $this->setFolderName($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderComment');
        if (null !== $value) {
            $this->setFolderComment($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ChildFolder', true);
        if (null !== $value && !empty($value)) {
            $this->setChildFolder(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SellingManagerFolderDetailsType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CreationTime');
        if (null !== $value) {
            $this->setCreationTime(new \DateTime($value));
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
