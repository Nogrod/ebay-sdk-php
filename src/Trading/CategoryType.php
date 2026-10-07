<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryType
 *
 * Container for data on one listing category. Many of the <b>CategoryType</b> fields are returned <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategoryTree" target="_blank">getCategoryTree</a> or <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySubtree" target="_blank">getCategorySubtree</a> methods of the <b>Taxonomy API</b>. Add/Revise/Relist calls only use the <b>CategoryID</b> field to specify which eBay category in which to list the item.
 * XSD Type: CategoryType
 */
class CategoryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This string value is the unique identifier of an eBay category. For listing calls, this ID must be a valid leaf on the category tree for the listing site. Validate against that marketplace's Taxonomy tree (for example, <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySubtree" target="_blank">getCategorySubtree</a> on tree 100 for eBay Motors).
     *  In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of
     *  the category. The parent category of this eBay category can be retrieved through the <a href="../../../../../api-docs/commerce/taxonomy/resources/methods" target="_blank">Taxonomy API's</a> <b>getCategoryTree</b> or <b>getCategorySubtree</b> methods and inspecting the <b>parentCategoryTreeNodeHref</b> field in the response.
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  When listing in categoryID 173651 (Auto Performance Tuning Devices & Software), use of catalog products is required. For more information, see <a href="../../../../../api-docs/user-guides/static/trading-user-guide/tuning-devices-and-software.html" target="_blank">Tuning devices and software</a>.
     *  </span>
     *  In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the listing.
     *  <br>
     *  <br>
     *  In an Add/Revise/Relist call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary Category can incur a listing fee. The secondary category ID must be a valid leaf category on the category tree for the listing site; an ID valid only on another marketplace tree is rejected. Validate against that marketplace's Taxonomy tree (for example, <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySubtree" target="_blank">getCategorySubtree</a> on tree 100 for eBay Motors).
     *  <br><br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *  <br>
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     *
     * @var string $categoryName
     */
    private $categoryName = null;

    /**
     * This field is deprecated.
     *
     * @var int $numOfItems
     */
    private $numOfItems = null;

    /**
     * This field is deprecated.
     *
     * @var string $keywords
     */
    private $keywords = null;

    /**
     * Gets as categoryID
     *
     * This string value is the unique identifier of an eBay category. For listing calls, this ID must be a valid leaf on the category tree for the listing site. Validate against that marketplace's Taxonomy tree (for example, <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySubtree" target="_blank">getCategorySubtree</a> on tree 100 for eBay Motors).
     *  In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of
     *  the category. The parent category of this eBay category can be retrieved through the <a href="../../../../../api-docs/commerce/taxonomy/resources/methods" target="_blank">Taxonomy API's</a> <b>getCategoryTree</b> or <b>getCategorySubtree</b> methods and inspecting the <b>parentCategoryTreeNodeHref</b> field in the response.
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  When listing in categoryID 173651 (Auto Performance Tuning Devices & Software), use of catalog products is required. For more information, see <a href="../../../../../api-docs/user-guides/static/trading-user-guide/tuning-devices-and-software.html" target="_blank">Tuning devices and software</a>.
     *  </span>
     *  In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the listing.
     *  <br>
     *  <br>
     *  In an Add/Revise/Relist call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary Category can incur a listing fee. The secondary category ID must be a valid leaf category on the category tree for the listing site; an ID valid only on another marketplace tree is rejected. Validate against that marketplace's Taxonomy tree (for example, <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySubtree" target="_blank">getCategorySubtree</a> on tree 100 for eBay Motors).
     *  <br><br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *  <br>
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
     * This string value is the unique identifier of an eBay category. For listing calls, this ID must be a valid leaf on the category tree for the listing site. Validate against that marketplace's Taxonomy tree (for example, <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySubtree" target="_blank">getCategorySubtree</a> on tree 100 for eBay Motors).
     *  In <b>GetItem</b> and related calls, see the <b>CategoryName</b> field for the text name of
     *  the category. The parent category of this eBay category can be retrieved through the <a href="../../../../../api-docs/commerce/taxonomy/resources/methods" target="_blank">Taxonomy API's</a> <b>getCategoryTree</b> or <b>getCategorySubtree</b> methods and inspecting the <b>parentCategoryTreeNodeHref</b> field in the response.
     *  <br>
     *  <span class="tablenote"><b>Note: </b>
     *  When listing in categoryID 173651 (Auto Performance Tuning Devices & Software), use of catalog products is required. For more information, see <a href="../../../../../api-docs/user-guides/static/trading-user-guide/tuning-devices-and-software.html" target="_blank">Tuning devices and software</a>.
     *  </span>
     *  In an Add call, the <b>PrimaryCategory.CategoryID</b> is conditionally required unless the seller successfully uses the <b>ProductListingDetails</b> container to find an eBay catalog product match. When the seller successfully uses an eBay catalog product to create a listing, the listing title, listing description, item specifics, listing category, and stock photo defined in the catalog product is used to create the listing.
     *  <br>
     *  <br>
     *  In an Add/Revise/Relist call, the <b>SecondaryCategory.CategoryID</b> is conditionally required if a Secondary Category is used. Using a Secondary Category can incur a listing fee. The secondary category ID must be a valid leaf category on the category tree for the listing site; an ID valid only on another marketplace tree is rejected. Validate against that marketplace's Taxonomy tree (for example, <a href="../../../../../api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySubtree" target="_blank">getCategorySubtree</a> on tree 100 for eBay Motors).
     *  <br><br>
     *  <b>For ReviseItem only:</b> Previously, removing the listing from a secondary category was only possible within 12 hours of the listing's scheduled end time when an auction listing had no active bids or a multiple-quantity, fixed-price listing had no items sold, but this restriction no longer exists. Now, the secondary category can be dropped for any active listing at any time, regardless of whether an auction listing has bids or a fixed-price listing has sales. To drop a secondary category, the seller passes in a value of <code>0</code> in the <b>SecondaryCategory.CategoryID</b> field.
     *  <br>
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
     * Gets as categoryName
     *
     * This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * This string value is the display name of the eBay primary category, as it would appear on the eBay site. In <b>GetItem</b>, this will be a fully-qualified category name (e.g., Collectibles:Decorative Collectibles:Hummel, Goebel).
     *
     * @param string $categoryName
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Gets as numOfItems
     *
     * This field is deprecated.
     *
     * @return int
     */
    public function getNumOfItems()
    {
        return $this->numOfItems;
    }

    /**
     * Sets a new numOfItems
     *
     * This field is deprecated.
     *
     * @param int $numOfItems
     * @return self
     */
    public function setNumOfItems($numOfItems)
    {
        $this->numOfItems = $numOfItems;
        return $this;
    }

    /**
     * Gets as keywords
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * This field is deprecated.
     *
     * @param string $keywords
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->categoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CategoryID', null, (string) $value);
        }
        $value = $this->categoryName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CategoryName', null, (string) $value);
        }
        $value = $this->numOfItems;
        if (null !== $value) {
            $writer->writeElementNs(null, 'NumOfItems', null, (string) $value);
        }
        $value = $this->keywords;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Keywords', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CategoryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'CategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->categoryID = $value;
                    }
                    return true;
                case 'CategoryName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->categoryName = $value;
                    }
                    return true;
                case 'NumOfItems':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->numOfItems = (int) $value;
                    }
                    return true;
                case 'Keywords':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->keywords = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['CategoryID'] = $this->categoryID;
        $data['CategoryName'] = $this->categoryName;
        $data['NumOfItems'] = $this->numOfItems;
        $data['Keywords'] = $this->keywords;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
