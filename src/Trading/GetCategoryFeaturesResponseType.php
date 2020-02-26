<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetCategoryFeaturesResponseType
 *
 *
 * XSD Type: GetCategoryFeaturesResponseType
 */
class GetCategoryFeaturesResponseType extends AbstractResponseType
{

    /**
     * Returns the current version of the set of feature meta-data.
     *  Compare this value to the version of the last version you
     *  downloaded to determine whether the data may have changed.
     *
     * @var string $categoryVersion
     */
    private $categoryVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the
     *  category hierarchy were last updated.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * A category whose feature settings are different from the settings of its parent category.<br>
     *  <br>
     *  For example, suppose there is a branch of the category tree with 5 category levels
     *  (L1, L2, L3, L4, and L5). Suppose the feature settings for SiteDefaults, L1, L4, and L5
     *  are all "A", and the settings for L2 and L3 are "B". In this case:<br>
     *  L1's settings (A) match the site default, so L1 is not returned.<br>
     *  L2's settings (B) are different from L1's, so L2 is returned.<br>
     *  L3's settings (B) are the same as L2's, so L3 is not returned<br>
     *  L4's settings (A) are different from L3's, so L4 is returned<br>
     *  L5's settings (A) are the same as L4's, so L5 is not returned.<br>
     *  <br>
     *  If you specified a particular FeatureID in the request, this field
     *  only returns feature settings for that feature.
     *  Only returned when the category is different from its parent.
     *  If the category has children and they aren't returned,
     *  it means the children inherit the category's feature settings.
     *
     * @var \Nogrod\eBaySDK\Trading\CategoryFeatureType[] $category
     */
    private $category = [
        
    ];

    /**
     * Returns the feature settings defined for most categories on the site. Most categories share these settings. However, some categories can override some settings, as indicated in the Category nodes (if any).
     *
     * @var \Nogrod\eBaySDK\Trading\SiteDefaultsType $siteDefaults
     */
    private $siteDefaults = null;

    /**
     * Returns definitions of the various features on the site,
     *  or the features you requested in FeatureID (if any).
     *  Each feature has a node within FeatureDefinitions.
     *
     * @var \Nogrod\eBaySDK\Trading\FeatureDefinitionsType $featureDefinitions
     */
    private $featureDefinitions = null;

    /**
     * Gets as categoryVersion
     *
     * Returns the current version of the set of feature meta-data.
     *  Compare this value to the version of the last version you
     *  downloaded to determine whether the data may have changed.
     *
     * @return string
     */
    public function getCategoryVersion()
    {
        return $this->categoryVersion;
    }

    /**
     * Sets a new categoryVersion
     *
     * Returns the current version of the set of feature meta-data.
     *  Compare this value to the version of the last version you
     *  downloaded to determine whether the data may have changed.
     *
     * @param string $categoryVersion
     * @return self
     */
    public function setCategoryVersion($categoryVersion)
    {
        $this->categoryVersion = $categoryVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the
     *  category hierarchy were last updated.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the
     *  category hierarchy were last updated.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * Adds as category
     *
     * A category whose feature settings are different from the settings of its parent category.<br>
     *  <br>
     *  For example, suppose there is a branch of the category tree with 5 category levels
     *  (L1, L2, L3, L4, and L5). Suppose the feature settings for SiteDefaults, L1, L4, and L5
     *  are all "A", and the settings for L2 and L3 are "B". In this case:<br>
     *  L1's settings (A) match the site default, so L1 is not returned.<br>
     *  L2's settings (B) are different from L1's, so L2 is returned.<br>
     *  L3's settings (B) are the same as L2's, so L3 is not returned<br>
     *  L4's settings (A) are different from L3's, so L4 is returned<br>
     *  L5's settings (A) are the same as L4's, so L5 is not returned.<br>
     *  <br>
     *  If you specified a particular FeatureID in the request, this field
     *  only returns feature settings for that feature.
     *  Only returned when the category is different from its parent.
     *  If the category has children and they aren't returned,
     *  it means the children inherit the category's feature settings.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CategoryFeatureType $category
     */
    public function addToCategory(\Nogrod\eBaySDK\Trading\CategoryFeatureType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * A category whose feature settings are different from the settings of its parent category.<br>
     *  <br>
     *  For example, suppose there is a branch of the category tree with 5 category levels
     *  (L1, L2, L3, L4, and L5). Suppose the feature settings for SiteDefaults, L1, L4, and L5
     *  are all "A", and the settings for L2 and L3 are "B". In this case:<br>
     *  L1's settings (A) match the site default, so L1 is not returned.<br>
     *  L2's settings (B) are different from L1's, so L2 is returned.<br>
     *  L3's settings (B) are the same as L2's, so L3 is not returned<br>
     *  L4's settings (A) are different from L3's, so L4 is returned<br>
     *  L5's settings (A) are the same as L4's, so L5 is not returned.<br>
     *  <br>
     *  If you specified a particular FeatureID in the request, this field
     *  only returns feature settings for that feature.
     *  Only returned when the category is different from its parent.
     *  If the category has children and they aren't returned,
     *  it means the children inherit the category's feature settings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * A category whose feature settings are different from the settings of its parent category.<br>
     *  <br>
     *  For example, suppose there is a branch of the category tree with 5 category levels
     *  (L1, L2, L3, L4, and L5). Suppose the feature settings for SiteDefaults, L1, L4, and L5
     *  are all "A", and the settings for L2 and L3 are "B". In this case:<br>
     *  L1's settings (A) match the site default, so L1 is not returned.<br>
     *  L2's settings (B) are different from L1's, so L2 is returned.<br>
     *  L3's settings (B) are the same as L2's, so L3 is not returned<br>
     *  L4's settings (A) are different from L3's, so L4 is returned<br>
     *  L5's settings (A) are the same as L4's, so L5 is not returned.<br>
     *  <br>
     *  If you specified a particular FeatureID in the request, this field
     *  only returns feature settings for that feature.
     *  Only returned when the category is different from its parent.
     *  If the category has children and they aren't returned,
     *  it means the children inherit the category's feature settings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * A category whose feature settings are different from the settings of its parent category.<br>
     *  <br>
     *  For example, suppose there is a branch of the category tree with 5 category levels
     *  (L1, L2, L3, L4, and L5). Suppose the feature settings for SiteDefaults, L1, L4, and L5
     *  are all "A", and the settings for L2 and L3 are "B". In this case:<br>
     *  L1's settings (A) match the site default, so L1 is not returned.<br>
     *  L2's settings (B) are different from L1's, so L2 is returned.<br>
     *  L3's settings (B) are the same as L2's, so L3 is not returned<br>
     *  L4's settings (A) are different from L3's, so L4 is returned<br>
     *  L5's settings (A) are the same as L4's, so L5 is not returned.<br>
     *  <br>
     *  If you specified a particular FeatureID in the request, this field
     *  only returns feature settings for that feature.
     *  Only returned when the category is different from its parent.
     *  If the category has children and they aren't returned,
     *  it means the children inherit the category's feature settings.
     *
     * @return \Nogrod\eBaySDK\Trading\CategoryFeatureType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * A category whose feature settings are different from the settings of its parent category.<br>
     *  <br>
     *  For example, suppose there is a branch of the category tree with 5 category levels
     *  (L1, L2, L3, L4, and L5). Suppose the feature settings for SiteDefaults, L1, L4, and L5
     *  are all "A", and the settings for L2 and L3 are "B". In this case:<br>
     *  L1's settings (A) match the site default, so L1 is not returned.<br>
     *  L2's settings (B) are different from L1's, so L2 is returned.<br>
     *  L3's settings (B) are the same as L2's, so L3 is not returned<br>
     *  L4's settings (A) are different from L3's, so L4 is returned<br>
     *  L5's settings (A) are the same as L4's, so L5 is not returned.<br>
     *  <br>
     *  If you specified a particular FeatureID in the request, this field
     *  only returns feature settings for that feature.
     *  Only returned when the category is different from its parent.
     *  If the category has children and they aren't returned,
     *  it means the children inherit the category's feature settings.
     *
     * @param \Nogrod\eBaySDK\Trading\CategoryFeatureType[] $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as siteDefaults
     *
     * Returns the feature settings defined for most categories on the site. Most categories share these settings. However, some categories can override some settings, as indicated in the Category nodes (if any).
     *
     * @return \Nogrod\eBaySDK\Trading\SiteDefaultsType
     */
    public function getSiteDefaults()
    {
        return $this->siteDefaults;
    }

    /**
     * Sets a new siteDefaults
     *
     * Returns the feature settings defined for most categories on the site. Most categories share these settings. However, some categories can override some settings, as indicated in the Category nodes (if any).
     *
     * @param \Nogrod\eBaySDK\Trading\SiteDefaultsType $siteDefaults
     * @return self
     */
    public function setSiteDefaults(\Nogrod\eBaySDK\Trading\SiteDefaultsType $siteDefaults)
    {
        $this->siteDefaults = $siteDefaults;
        return $this;
    }

    /**
     * Gets as featureDefinitions
     *
     * Returns definitions of the various features on the site,
     *  or the features you requested in FeatureID (if any).
     *  Each feature has a node within FeatureDefinitions.
     *
     * @return \Nogrod\eBaySDK\Trading\FeatureDefinitionsType
     */
    public function getFeatureDefinitions()
    {
        return $this->featureDefinitions;
    }

    /**
     * Sets a new featureDefinitions
     *
     * Returns definitions of the various features on the site,
     *  or the features you requested in FeatureID (if any).
     *  Each feature has a node within FeatureDefinitions.
     *
     * @param \Nogrod\eBaySDK\Trading\FeatureDefinitionsType $featureDefinitions
     * @return self
     */
    public function setFeatureDefinitions(\Nogrod\eBaySDK\Trading\FeatureDefinitionsType $featureDefinitions)
    {
        $this->featureDefinitions = $featureDefinitions;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
        }
        $value = $this->getCategory();
        if (null !== $value && !empty($this->getCategory())) {
            $writer->write(array_map(function ($v) {
                return ["Category" => $v];
            }, $value));
        }
        $value = $this->getSiteDefaults();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SiteDefaults", $value);
        }
        $value = $this->getFeatureDefinitions();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FeatureDefinitions", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryVersion');
        if (null !== $value) {
            $this->setCategoryVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Category', true);
        if (null !== $value && !empty($value)) {
            $this->setCategory(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CategoryFeatureType::fromKeyValue($v);
            }, $value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SiteDefaults');
        if (null !== $value) {
            $this->setSiteDefaults(\Nogrod\eBaySDK\Trading\SiteDefaultsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeatureDefinitions');
        if (null !== $value) {
            $this->setFeatureDefinitions(\Nogrod\eBaySDK\Trading\FeatureDefinitionsType::fromKeyValue($value));
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
