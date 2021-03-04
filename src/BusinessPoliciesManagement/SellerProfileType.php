<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerProfileType
 *
 *
 * XSD Type: SellerProfile
 */
class SellerProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var bool $forceDuplicate
     */
    private $forceDuplicate = null;

    /**
     * @var string $profileName
     */
    private $profileName = null;

    /**
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * @var string $profileType
     */
    private $profileType = null;

    /**
     * @var int $profileVersion
     */
    private $profileVersion = null;

    /**
     * @var string $profileDesc
     */
    private $profileDesc = null;

    /**
     * @var \DateTime $deletedDate
     */
    private $deletedDate = null;

    /**
     * @var int $siteId
     */
    private $siteId = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType[] $categoryGroups
     */
    private $categoryGroups = null;

    /**
     * Gets as forceDuplicate
     *
     * @return bool
     */
    public function getForceDuplicate()
    {
        return $this->forceDuplicate;
    }

    /**
     * Sets a new forceDuplicate
     *
     * @param bool $forceDuplicate
     * @return self
     */
    public function setForceDuplicate($forceDuplicate)
    {
        $this->forceDuplicate = $forceDuplicate;
        return $this;
    }

    /**
     * Gets as profileName
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Sets a new profileName
     *
     * @param string $profileName
     * @return self
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * Gets as profileId
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * @param int $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * Gets as profileType
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }

    /**
     * Gets as profileVersion
     *
     * @return int
     */
    public function getProfileVersion()
    {
        return $this->profileVersion;
    }

    /**
     * Sets a new profileVersion
     *
     * @param int $profileVersion
     * @return self
     */
    public function setProfileVersion($profileVersion)
    {
        $this->profileVersion = $profileVersion;
        return $this;
    }

    /**
     * Gets as profileDesc
     *
     * @return string
     */
    public function getProfileDesc()
    {
        return $this->profileDesc;
    }

    /**
     * Sets a new profileDesc
     *
     * @param string $profileDesc
     * @return self
     */
    public function setProfileDesc($profileDesc)
    {
        $this->profileDesc = $profileDesc;
        return $this;
    }

    /**
     * Gets as deletedDate
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }

    /**
     * Sets a new deletedDate
     *
     * @param \DateTime $deletedDate
     * @return self
     */
    public function setDeletedDate(\DateTime $deletedDate)
    {
        $this->deletedDate = $deletedDate;
        return $this;
    }

    /**
     * Gets as siteId
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Sets a new siteId
     *
     * @param int $siteId
     * @return self
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * Adds as categoryGroup
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType $categoryGroup
     */
    public function addToCategoryGroups(\Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType $categoryGroup)
    {
        $this->categoryGroups[] = $categoryGroup;
        return $this;
    }

    /**
     * isset categoryGroups
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryGroups($index)
    {
        return isset($this->categoryGroups[$index]);
    }

    /**
     * unset categoryGroups
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryGroups($index)
    {
        unset($this->categoryGroups[$index]);
    }

    /**
     * Gets as categoryGroups
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType[]
     */
    public function getCategoryGroups()
    {
        return $this->categoryGroups;
    }

    /**
     * Sets a new categoryGroups
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType[] $categoryGroups
     * @return self
     */
    public function setCategoryGroups(array $categoryGroups)
    {
        $this->categoryGroups = $categoryGroups;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getForceDuplicate();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}forceDuplicate", $value);
        }
        $value = $this->getProfileName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}profileName", $value);
        }
        $value = $this->getProfileId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}profileId", $value);
        }
        $value = $this->getProfileType();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}profileType", $value);
        }
        $value = $this->getProfileVersion();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}profileVersion", $value);
        }
        $value = $this->getProfileDesc();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}profileDesc", $value);
        }
        $value = $this->getDeletedDate();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}deletedDate", $value);
        }
        $value = $this->getSiteId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}siteId", $value);
        }
        $value = $this->getCategoryGroups();
        if (null !== $value && !empty($this->getCategoryGroups())) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}categoryGroups", array_map(function ($v) {
                return ["categoryGroup" => $v];
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}forceDuplicate');
        if (null !== $value) {
            $this->setForceDuplicate($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileName');
        if (null !== $value) {
            $this->setProfileName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileId');
        if (null !== $value) {
            $this->setProfileId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileType');
        if (null !== $value) {
            $this->setProfileType($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileVersion');
        if (null !== $value) {
            $this->setProfileVersion($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}profileDesc');
        if (null !== $value) {
            $this->setProfileDesc($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}deletedDate');
        if (null !== $value) {
            $this->setDeletedDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}siteId');
        if (null !== $value) {
            $this->setSiteId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}categoryGroups', true);
        if (null !== $value && !empty($value)) {
            $this->setCategoryGroups(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType::fromKeyValue($v);
            }, $value));
        }
    }
}
