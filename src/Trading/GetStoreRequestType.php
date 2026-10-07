<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreRequestType
 *
 * This call is used to retrieve information on a seller's eBay Store, including detailed information on all customized Store categories that the seller has set up.
 * XSD Type: GetStoreRequestType
 */
class GetStoreRequestType extends AbstractRequestType
{
    /**
     * Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data.
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
     *  If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. eBay Stores support only three levels of store categories.
     *
     * @var int $levelLimit
     */
    private $levelLimit = null;

    /**
     * The eBay user ID of the eBay seller that owns the eBay Store to be retrieved. This field is only needed if the user wants to view the eBay Store information owned by a different seller (than the seller associated with the authenticated user token). If this field is omitted, the eBay Store information for the seller associated with the authenticated user token is returned.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * Gets as categoryStructureOnly
     *
     * Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data.
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
     * Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data.
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
     *  If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. eBay Stores support only three levels of store categories.
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
     *  If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. eBay Stores support only three levels of store categories.
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
     * The eBay user ID of the eBay seller that owns the eBay Store to be retrieved. This field is only needed if the user wants to view the eBay Store information owned by a different seller (than the seller associated with the authenticated user token). If this field is omitted, the eBay Store information for the seller associated with the authenticated user token is returned.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     * The eBay user ID of the eBay seller that owns the eBay Store to be retrieved. This field is only needed if the user wants to view the eBay Store information owned by a different seller (than the seller associated with the authenticated user token). If this field is omitted, the eBay Store information for the seller associated with the authenticated user token is returned.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->categoryStructureOnly;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CategoryStructureOnly', null, ($value ? 'true' : 'false'));
        }
        $value = $this->rootCategoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RootCategoryID', null, (string) $value);
        }
        $value = $this->levelLimit;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LevelLimit', null, (string) $value);
        }
        $value = $this->userID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UserID', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetStoreRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'CategoryStructureOnly':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->categoryStructureOnly = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'RootCategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->rootCategoryID = (int) $value;
                    }
                    return true;
                case 'LevelLimit':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->levelLimit = (int) $value;
                    }
                    return true;
                case 'UserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userID = $value;
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['CategoryStructureOnly'] = $this->categoryStructureOnly;
        $data['RootCategoryID'] = $this->rootCategoryID;
        $data['LevelLimit'] = $this->levelLimit;
        $data['UserID'] = $this->userID;
        return $data;
    }
}
