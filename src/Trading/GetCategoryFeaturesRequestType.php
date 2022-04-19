<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCategoryFeaturesRequestType
 *
 * Returns information about the features that are applicable to different categories,
 *  such as listing durations, shipping term requirements, and Best Offer support.
 * XSD Type: GetCategoryFeaturesRequestType
 */
class GetCategoryFeaturesRequestType extends AbstractRequestType
{
    /**
     * Specifies the category for which you want to retrieve the feature settings.
     *  <br><br>
     *  Specify a CategoryID, set DetailLevel to ReturnAll, and set
     *  ViewAllNodes to true to return the default site settings, the
     *  overrides for the specified category, plus all the child
     *  categories that have overrides on the features they inherit.
     *  <br><br>
     *  If you also set AllFeaturesForCategory to true, eBay returns the site
     *  defaults, plus all the settings for the specified category. Child
     *  category information is not returned in this case.
     *  <br><br>
     *  If CategoryID is not specified, eBay returns the feature settings for
     *  the site. To return details on all categories that have overrides on
     *  the properties they inherit, set DetailLevel to ReturnAll, and set
     *  ViewAllNodes to true. If you also set AllFeaturesForCategory to true,
     *  eBay returns only the site defaults with no child category information.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, and no <b>CategoryID</b> is specified, eBay feature metadata for every eBay category from the root on down will be returned. If this field is omitted, but a <b>CategoryID</b> is specified, the specified category and all of its children (down to the leaf categories) are returned.
     *  <br>
     *  <br>
     *  If the <b>CategoryID</b> field is not used, but the <b>LevelLimit</b> field is used and set to <code>1</code>, eBay feature metadata is only returned for the top-level categories (also known as L1 categories).
     *
     * @var int $levelLimit
     */
    private $levelLimit = null;

    /**
     * You must set <b>DetailLevel</b> to <code>ReturnAll</code> in order to correctly populate the
     *  response when you set <b>ViewAllNodes</b> to true. In this case, eBay returns the
     *  site defaults along with all the categories that override the feature
     *  settings they inherit. Here, each Category container shows only the
     *  features that it has overridden from its parent node.
     *  <br><br>
     *  If you also specify a <b>CategoryID</b>, eBay returns the details for that category,
     *  along with containers for each of its child categories that have feature
     *  overrides.
     *  <br><br>
     *  Note that if <b>ViewAllNodes</b> is set to false (the default) and <b>DetailLevel</b> is
     *  set to <code>ReturnAll</code>, eBay returns only the leaf categories that have features
     *  that override the settings they inherit. In this case, the call will not
     *  return leaf categories that do not have overrides.
     *
     * @var bool $viewAllNodes
     */
    private $viewAllNodes = null;

    /**
     * Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data for all features, as applicable to the other request parameters.
     *
     * @var string[] $featureID
     */
    private $featureID = [

    ];

    /**
     * Use this switch to view all of the feature settings for a specific category.
     *  All feature settings are returned, regardless of the site default settings.
     *  This element works in conjunction with CategoryID--refer to the notes for
     *  that element for more details.
     *  <br><br>
     *  If you also set FeatureID, eBay returns the status of the specified
     *  features only, for the specified category.
     *
     * @var bool $allFeaturesForCategory
     */
    private $allFeaturesForCategory = null;

    /**
     * Gets as categoryID
     *
     * Specifies the category for which you want to retrieve the feature settings.
     *  <br><br>
     *  Specify a CategoryID, set DetailLevel to ReturnAll, and set
     *  ViewAllNodes to true to return the default site settings, the
     *  overrides for the specified category, plus all the child
     *  categories that have overrides on the features they inherit.
     *  <br><br>
     *  If you also set AllFeaturesForCategory to true, eBay returns the site
     *  defaults, plus all the settings for the specified category. Child
     *  category information is not returned in this case.
     *  <br><br>
     *  If CategoryID is not specified, eBay returns the feature settings for
     *  the site. To return details on all categories that have overrides on
     *  the properties they inherit, set DetailLevel to ReturnAll, and set
     *  ViewAllNodes to true. If you also set AllFeaturesForCategory to true,
     *  eBay returns only the site defaults with no child category information.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * Specifies the category for which you want to retrieve the feature settings.
     *  <br><br>
     *  Specify a CategoryID, set DetailLevel to ReturnAll, and set
     *  ViewAllNodes to true to return the default site settings, the
     *  overrides for the specified category, plus all the child
     *  categories that have overrides on the features they inherit.
     *  <br><br>
     *  If you also set AllFeaturesForCategory to true, eBay returns the site
     *  defaults, plus all the settings for the specified category. Child
     *  category information is not returned in this case.
     *  <br><br>
     *  If CategoryID is not specified, eBay returns the feature settings for
     *  the site. To return details on all categories that have overrides on
     *  the properties they inherit, set DetailLevel to ReturnAll, and set
     *  ViewAllNodes to true. If you also set AllFeaturesForCategory to true,
     *  eBay returns only the site defaults with no child category information.
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as levelLimit
     *
     * This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, and no <b>CategoryID</b> is specified, eBay feature metadata for every eBay category from the root on down will be returned. If this field is omitted, but a <b>CategoryID</b> is specified, the specified category and all of its children (down to the leaf categories) are returned.
     *  <br>
     *  <br>
     *  If the <b>CategoryID</b> field is not used, but the <b>LevelLimit</b> field is used and set to <code>1</code>, eBay feature metadata is only returned for the top-level categories (also known as L1 categories).
     *
     * @return int
     */
    public function getLevelLimit()
    {
        return $this->levelLimit;
    }

    /**
     * Sets a new levelLimit
     *
     * This field is used if the user wants to control the maximum depth of the category hierarchy to retrieve, or in other words, how many levels of eBay categories that are returned in the response. If this field is omitted, and no <b>CategoryID</b> is specified, eBay feature metadata for every eBay category from the root on down will be returned. If this field is omitted, but a <b>CategoryID</b> is specified, the specified category and all of its children (down to the leaf categories) are returned.
     *  <br>
     *  <br>
     *  If the <b>CategoryID</b> field is not used, but the <b>LevelLimit</b> field is used and set to <code>1</code>, eBay feature metadata is only returned for the top-level categories (also known as L1 categories).
     *
     * @param int $levelLimit
     * @return self
     */
    public function setLevelLimit($levelLimit)
    {
        $this->levelLimit = $levelLimit;
        return $this;
    }

    /**
     * Gets as viewAllNodes
     *
     * You must set <b>DetailLevel</b> to <code>ReturnAll</code> in order to correctly populate the
     *  response when you set <b>ViewAllNodes</b> to true. In this case, eBay returns the
     *  site defaults along with all the categories that override the feature
     *  settings they inherit. Here, each Category container shows only the
     *  features that it has overridden from its parent node.
     *  <br><br>
     *  If you also specify a <b>CategoryID</b>, eBay returns the details for that category,
     *  along with containers for each of its child categories that have feature
     *  overrides.
     *  <br><br>
     *  Note that if <b>ViewAllNodes</b> is set to false (the default) and <b>DetailLevel</b> is
     *  set to <code>ReturnAll</code>, eBay returns only the leaf categories that have features
     *  that override the settings they inherit. In this case, the call will not
     *  return leaf categories that do not have overrides.
     *
     * @return bool
     */
    public function getViewAllNodes()
    {
        return $this->viewAllNodes;
    }

    /**
     * Sets a new viewAllNodes
     *
     * You must set <b>DetailLevel</b> to <code>ReturnAll</code> in order to correctly populate the
     *  response when you set <b>ViewAllNodes</b> to true. In this case, eBay returns the
     *  site defaults along with all the categories that override the feature
     *  settings they inherit. Here, each Category container shows only the
     *  features that it has overridden from its parent node.
     *  <br><br>
     *  If you also specify a <b>CategoryID</b>, eBay returns the details for that category,
     *  along with containers for each of its child categories that have feature
     *  overrides.
     *  <br><br>
     *  Note that if <b>ViewAllNodes</b> is set to false (the default) and <b>DetailLevel</b> is
     *  set to <code>ReturnAll</code>, eBay returns only the leaf categories that have features
     *  that override the settings they inherit. In this case, the call will not
     *  return leaf categories that do not have overrides.
     *
     * @param bool $viewAllNodes
     * @return self
     */
    public function setViewAllNodes($viewAllNodes)
    {
        $this->viewAllNodes = $viewAllNodes;
        return $this;
    }

    /**
     * Adds as featureID
     *
     * Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data for all features, as applicable to the other request parameters.
     *
     * @return self
     * @param string $featureID
     */
    public function addToFeatureID($featureID)
    {
        $this->featureID[] = $featureID;
        return $this;
    }

    /**
     * isset featureID
     *
     * Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data for all features, as applicable to the other request parameters.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatureID($index)
    {
        return isset($this->featureID[$index]);
    }

    /**
     * unset featureID
     *
     * Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data for all features, as applicable to the other request parameters.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatureID($index)
    {
        unset($this->featureID[$index]);
    }

    /**
     * Gets as featureID
     *
     * Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data for all features, as applicable to the other request parameters.
     *
     * @return string[]
     */
    public function getFeatureID()
    {
        return $this->featureID;
    }

    /**
     * Sets a new featureID
     *
     * Use this field if you want to know if specific features are enabled at the site or root category level. Multiple <b>FeatureID</b> elements can be used in the request. If no <b>FeatureID</b> elements are used, the call retrieves data for all features, as applicable to the other request parameters.
     *
     * @param string $featureID
     * @return self
     */
    public function setFeatureID(array $featureID)
    {
        $this->featureID = $featureID;
        return $this;
    }

    /**
     * Gets as allFeaturesForCategory
     *
     * Use this switch to view all of the feature settings for a specific category.
     *  All feature settings are returned, regardless of the site default settings.
     *  This element works in conjunction with CategoryID--refer to the notes for
     *  that element for more details.
     *  <br><br>
     *  If you also set FeatureID, eBay returns the status of the specified
     *  features only, for the specified category.
     *
     * @return bool
     */
    public function getAllFeaturesForCategory()
    {
        return $this->allFeaturesForCategory;
    }

    /**
     * Sets a new allFeaturesForCategory
     *
     * Use this switch to view all of the feature settings for a specific category.
     *  All feature settings are returned, regardless of the site default settings.
     *  This element works in conjunction with CategoryID--refer to the notes for
     *  that element for more details.
     *  <br><br>
     *  If you also set FeatureID, eBay returns the status of the specified
     *  features only, for the specified category.
     *
     * @param bool $allFeaturesForCategory
     * @return self
     */
    public function setAllFeaturesForCategory($allFeaturesForCategory)
    {
        $this->allFeaturesForCategory = $allFeaturesForCategory;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getLevelLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LevelLimit", $value);
        }
        $value = $this->getViewAllNodes();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ViewAllNodes", $value);
        }
        $value = $this->getFeatureID();
        if (null !== $value && !empty($this->getFeatureID())) {
            $writer->write(array_map(function ($v) {
                return ["FeatureID" => $v];
            }, $value));
        }
        $value = $this->getAllFeaturesForCategory();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AllFeaturesForCategory", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LevelLimit');
        if (null !== $value) {
            $this->setLevelLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ViewAllNodes');
        if (null !== $value) {
            $this->setViewAllNodes($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FeatureID', true);
        if (null !== $value && !empty($value)) {
            $this->setFeatureID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AllFeaturesForCategory');
        if (null !== $value) {
            $this->setAllFeaturesForCategory($value);
        }
    }
}
