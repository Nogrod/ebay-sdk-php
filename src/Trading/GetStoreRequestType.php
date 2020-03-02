<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreRequestType
 *
 * This call is used to retrieve detailed information on a seller's eBay Store, including store theme information and eBay Store category hierarchy.
 * XSD Type: GetStoreRequestType
 */
class GetStoreRequestType extends AbstractRequestType
{

    /**
     * Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data. If this field is not included or set to <code>false</code>, store category hierarchy and all store configuration data is returned.
     *
     * @var bool $categoryStructureOnly
     */
    private $categoryStructureOnly = null;

    /**
     * The unique identifier of an eBay Store category. This field is used if the user wants to isolate the category hierarchy data to one particular eBay category (and its subcategories if applicable). The <b>LevelLimit</b> value will determine how many additional levels of categories are returned.
     *
     * @var int $rootCategoryID
     */
    private $rootCategoryID = null;

    /**
     * This field allows the seller to limit the number of levels of eBay Store categories that are returned. To return only top-level eBay Store categories, the user can include this field and set its value to <code>1</code> (and not use a <b>RootCategoryID</b> value). To retrieve a specific eBay Store Category and that category's child categories, the user could specify the unique eBay Store Category ID in the <b>RootCategoryID</b> field and then set the <b>LevelLimit</b> value to <code>2</code>.
     *  <br/><br/>
     *  If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. Currently, eBay Stores support only three levels of store categories.
     *
     * @var int $levelLimit
     */
    private $levelLimit = null;

    /**
     * The unique identifier for an eBay Store owner. This field is only required if the user wants to view the eBay Store theme and category information for a different eBay Store owner. If this field is omitted, eBay Store theme and category information is returned for the eBay Store owner that is making the call.
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * Gets as categoryStructureOnly
     *
     * Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data. If this field is not included or set to <code>false</code>, store category hierarchy and all store configuration data is returned.
     *
     * @return bool
     */
    public function getCategoryStructureOnly()
    {
        return $this->categoryStructureOnly;
    }

    /**
     * Sets a new categoryStructureOnly
     *
     * Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data. If this field is not included or set to <code>false</code>, store category hierarchy and all store configuration data is returned.
     *
     * @param bool $categoryStructureOnly
     * @return self
     */
    public function setCategoryStructureOnly($categoryStructureOnly)
    {
        $this->categoryStructureOnly = $categoryStructureOnly;
        return $this;
    }

    /**
     * Gets as rootCategoryID
     *
     * The unique identifier of an eBay Store category. This field is used if the user wants to isolate the category hierarchy data to one particular eBay category (and its subcategories if applicable). The <b>LevelLimit</b> value will determine how many additional levels of categories are returned.
     *
     * @return int
     */
    public function getRootCategoryID()
    {
        return $this->rootCategoryID;
    }

    /**
     * Sets a new rootCategoryID
     *
     * The unique identifier of an eBay Store category. This field is used if the user wants to isolate the category hierarchy data to one particular eBay category (and its subcategories if applicable). The <b>LevelLimit</b> value will determine how many additional levels of categories are returned.
     *
     * @param int $rootCategoryID
     * @return self
     */
    public function setRootCategoryID($rootCategoryID)
    {
        $this->rootCategoryID = $rootCategoryID;
        return $this;
    }

    /**
     * Gets as levelLimit
     *
     * This field allows the seller to limit the number of levels of eBay Store categories that are returned. To return only top-level eBay Store categories, the user can include this field and set its value to <code>1</code> (and not use a <b>RootCategoryID</b> value). To retrieve a specific eBay Store Category and that category's child categories, the user could specify the unique eBay Store Category ID in the <b>RootCategoryID</b> field and then set the <b>LevelLimit</b> value to <code>2</code>.
     *  <br/><br/>
     *  If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. Currently, eBay Stores support only three levels of store categories.
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
     * This field allows the seller to limit the number of levels of eBay Store categories that are returned. To return only top-level eBay Store categories, the user can include this field and set its value to <code>1</code> (and not use a <b>RootCategoryID</b> value). To retrieve a specific eBay Store Category and that category's child categories, the user could specify the unique eBay Store Category ID in the <b>RootCategoryID</b> field and then set the <b>LevelLimit</b> value to <code>2</code>.
     *  <br/><br/>
     *  If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. Currently, eBay Stores support only three levels of store categories.
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
     * Gets as userID
     *
     * The unique identifier for an eBay Store owner. This field is only required if the user wants to view the eBay Store theme and category information for a different eBay Store owner. If this field is omitted, eBay Store theme and category information is returned for the eBay Store owner that is making the call.
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * The unique identifier for an eBay Store owner. This field is only required if the user wants to view the eBay Store theme and category information for a different eBay Store owner. If this field is omitted, eBay Store theme and category information is returned for the eBay Store owner that is making the call.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryStructureOnly();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryStructureOnly", $value);
        }
        $value = $this->getRootCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RootCategoryID", $value);
        }
        $value = $this->getLevelLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LevelLimit", $value);
        }
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryStructureOnly');
        if (null !== $value) {
            $this->setCategoryStructureOnly($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RootCategoryID');
        if (null !== $value) {
            $this->setRootCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LevelLimit');
        if (null !== $value) {
            $this->setLevelLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
    }
}
