<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryItemSpecificsType
 *
 * This type is used by the <b>CategorySpecific</b> container in the <b>GetCategorySpecifics</b> request. The <b>CategorySpecific</b> container is used when a seller wants to pass in Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific.
 * XSD Type: CategoryItemSpecificsType
 */
class CategoryItemSpecificsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * An eBay category ID is passed into this field to identify the eBay category for which the seller is providing Item Specific name-value(s) pairs. Multiple <b>CategoryID</b> fields can be passed in if the Item Specific name-value(s) pairs are applicable for multiple categories. However, more categories can result in longer call response times. If your request times out, specify fewer category IDs.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The call request requires either one or more <b>CategoryID</b> values (at the root level), one or more <b>CategorySpecific.CategoryID</b> values, or the <b>CategorySpecificsFileInfo</b> boolean field. The <b>CategorySpecificsFileInfo</b> field is only used if the user plans to use the <b>downloadFile</b> call of the <b>FileTransfer</b> API to retrieve Item Specifics. <b>CategoryID</b> and <b>CategorySpecific.CategoryID</b> can both be used in the same call request.
     *  </span>
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be
     *  an arbitrary name that the user wants to check, or it could
     *  be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $itemSpecifics
     */
    private $itemSpecifics = null;

    /**
     * Gets as categoryID
     *
     * An eBay category ID is passed into this field to identify the eBay category for which the seller is providing Item Specific name-value(s) pairs. Multiple <b>CategoryID</b> fields can be passed in if the Item Specific name-value(s) pairs are applicable for multiple categories. However, more categories can result in longer call response times. If your request times out, specify fewer category IDs.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The call request requires either one or more <b>CategoryID</b> values (at the root level), one or more <b>CategorySpecific.CategoryID</b> values, or the <b>CategorySpecificsFileInfo</b> boolean field. The <b>CategorySpecificsFileInfo</b> field is only used if the user plans to use the <b>downloadFile</b> call of the <b>FileTransfer</b> API to retrieve Item Specifics. <b>CategoryID</b> and <b>CategorySpecific.CategoryID</b> can both be used in the same call request.
     *  </span>
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
     * An eBay category ID is passed into this field to identify the eBay category for which the seller is providing Item Specific name-value(s) pairs. Multiple <b>CategoryID</b> fields can be passed in if the Item Specific name-value(s) pairs are applicable for multiple categories. However, more categories can result in longer call response times. If your request times out, specify fewer category IDs.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  The call request requires either one or more <b>CategoryID</b> values (at the root level), one or more <b>CategorySpecific.CategoryID</b> values, or the <b>CategorySpecificsFileInfo</b> boolean field. The <b>CategorySpecificsFileInfo</b> field is only used if the user plans to use the <b>downloadFile</b> call of the <b>FileTransfer</b> API to retrieve Item Specifics. <b>CategoryID</b> and <b>CategorySpecific.CategoryID</b> can both be used in the same call request.
     *  </span>
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
     * Adds as nameValueList
     *
     * This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be
     *  an arbitrary name that the user wants to check, or it could
     *  be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToItemSpecifics(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->itemSpecifics[] = $nameValueList;
        return $this;
    }

    /**
     * isset itemSpecifics
     *
     * This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be
     *  an arbitrary name that the user wants to check, or it could
     *  be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemSpecifics($index)
    {
        return isset($this->itemSpecifics[$index]);
    }

    /**
     * unset itemSpecifics
     *
     * This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be
     *  an arbitrary name that the user wants to check, or it could
     *  be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemSpecifics($index)
    {
        unset($this->itemSpecifics[$index]);
    }

    /**
     * Gets as itemSpecifics
     *
     * This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be
     *  an arbitrary name that the user wants to check, or it could
     *  be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getItemSpecifics()
    {
        return $this->itemSpecifics;
    }

    /**
     * Sets a new itemSpecifics
     *
     * This container is used to input Item Specific name-value(s) pairs for a specific category to discover if eBay has better name or value recommendations for that Item Specific. The Item Specific name can be
     *  an arbitrary name that the user wants to check, or it could
     *  be a name that was returned in a prior <b>GetCategorySpecifics</b> response. At least one <b>NameValueList</b> container must be used if the <b>CategorySpecific</b> container is used.
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $itemSpecifics
     * @return self
     */
    public function setItemSpecifics(array $itemSpecifics)
    {
        $this->itemSpecifics = $itemSpecifics;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getItemSpecifics();
        if (null !== $value && !empty($this->getItemSpecifics())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemSpecifics", array_map(function ($v) {
                return ["NameValueList" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemSpecifics', true);
        if (null !== $value && !empty($value)) {
            $this->setItemSpecifics(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);
            }, $value));
        }
    }
}
