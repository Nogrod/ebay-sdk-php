<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PictureManagerDetailsType
 *
 *
 * XSD Type: PictureManagerDetailsType
 */
class PictureManagerDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This type is deprecated.
     *
     * @var string $subscriptionLevel
     */
    private $subscriptionLevel = null;

    /**
     * This field is deprecated.
     *
     * @var int $storageUsed
     */
    private $storageUsed = null;

    /**
     * This field is deprecated.
     *
     * @var int $totalStorageAvailable
     */
    private $totalStorageAvailable = null;

    /**
     * This field is deprecated.
     *
     * @var bool $keepOriginal
     */
    private $keepOriginal = null;

    /**
     * This field is deprecated.
     *
     * @var bool $watermarkEPS
     */
    private $watermarkEPS = null;

    /**
     * This field is deprecated.
     *
     * @var bool $watermarkUserID
     */
    private $watermarkUserID = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\MerchantData\PictureManagerFolderType[] $folder
     */
    private $folder = [

    ];

    /**
     * Gets as subscriptionLevel
     *
     * This type is deprecated.
     *
     * @return string
     */
    public function getSubscriptionLevel()
    {
        return $this->subscriptionLevel;
    }

    /**
     * Sets a new subscriptionLevel
     *
     * This type is deprecated.
     *
     * @param string $subscriptionLevel
     * @return self
     */
    public function setSubscriptionLevel($subscriptionLevel)
    {
        $this->subscriptionLevel = $subscriptionLevel;
        return $this;
    }

    /**
     * Gets as storageUsed
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getStorageUsed()
    {
        return $this->storageUsed;
    }

    /**
     * Sets a new storageUsed
     *
     * This field is deprecated.
     *
     * @param int $storageUsed
     * @return self
     */
    public function setStorageUsed($storageUsed)
    {
        $this->storageUsed = $storageUsed;
        return $this;
    }

    /**
     * Gets as totalStorageAvailable
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getTotalStorageAvailable()
    {
        return $this->totalStorageAvailable;
    }

    /**
     * Sets a new totalStorageAvailable
     *
     * This field is deprecated.
     *
     * @param int $totalStorageAvailable
     * @return self
     */
    public function setTotalStorageAvailable($totalStorageAvailable)
    {
        $this->totalStorageAvailable = $totalStorageAvailable;
        return $this;
    }

    /**
     * Gets as keepOriginal
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getKeepOriginal()
    {
        return $this->keepOriginal;
    }

    /**
     * Sets a new keepOriginal
     *
     * This field is deprecated.
     *
     * @param bool $keepOriginal
     * @return self
     */
    public function setKeepOriginal($keepOriginal)
    {
        $this->keepOriginal = $keepOriginal;
        return $this;
    }

    /**
     * Gets as watermarkEPS
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getWatermarkEPS()
    {
        return $this->watermarkEPS;
    }

    /**
     * Sets a new watermarkEPS
     *
     * This field is deprecated.
     *
     * @param bool $watermarkEPS
     * @return self
     */
    public function setWatermarkEPS($watermarkEPS)
    {
        $this->watermarkEPS = $watermarkEPS;
        return $this;
    }

    /**
     * Gets as watermarkUserID
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getWatermarkUserID()
    {
        return $this->watermarkUserID;
    }

    /**
     * Sets a new watermarkUserID
     *
     * This field is deprecated.
     *
     * @param bool $watermarkUserID
     * @return self
     */
    public function setWatermarkUserID($watermarkUserID)
    {
        $this->watermarkUserID = $watermarkUserID;
        return $this;
    }

    /**
     * Adds as folder
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\PictureManagerFolderType $folder
     */
    public function addToFolder(\Nogrod\eBaySDK\MerchantData\PictureManagerFolderType $folder)
    {
        $this->folder[] = $folder;
        return $this;
    }

    /**
     * isset folder
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFolder($index)
    {
        return isset($this->folder[$index]);
    }

    /**
     * unset folder
     *
     * This field is deprecated.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFolder($index)
    {
        unset($this->folder[$index]);
    }

    /**
     * Gets as folder
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\MerchantData\PictureManagerFolderType[]
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Sets a new folder
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\MerchantData\PictureManagerFolderType[] $folder
     * @return self
     */
    public function setFolder(array $folder)
    {
        $this->folder = $folder;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSubscriptionLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubscriptionLevel", $value);
        }
        $value = $this->getStorageUsed();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StorageUsed", $value);
        }
        $value = $this->getTotalStorageAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalStorageAvailable", $value);
        }
        $value = $this->getKeepOriginal();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}KeepOriginal", $value);
        }
        $value = $this->getWatermarkEPS();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatermarkEPS", $value);
        }
        $value = $this->getWatermarkUserID();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatermarkUserID", $value);
        }
        $value = $this->getFolder();
        if (null !== $value && !empty($this->getFolder())) {
            $writer->write(array_map(function ($v) {return ["Folder" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubscriptionLevel');
        if (null !== $value) {
            $this->setSubscriptionLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StorageUsed');
        if (null !== $value) {
            $this->setStorageUsed($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalStorageAvailable');
        if (null !== $value) {
            $this->setTotalStorageAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}KeepOriginal');
        if (null !== $value) {
            $this->setKeepOriginal($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatermarkEPS');
        if (null !== $value) {
            $this->setWatermarkEPS($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatermarkUserID');
        if (null !== $value) {
            $this->setWatermarkUserID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Folder', true);
        if (null !== $value && !empty($value)) {
            $this->setFolder(array_map(function ($v) {return \Nogrod\eBaySDK\MerchantData\PictureManagerFolderType::fromKeyValue($v);}, $value));
        }
    }
}
