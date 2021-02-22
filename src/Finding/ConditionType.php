<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConditionType
 *
 * Information that describes an item's condition.
 * XSD Type: Condition
 */
class ConditionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The numeric ID (e.g., 1000) for the item condition.<br>
     *  <br>
     *  In item results, this is only returned when the seller listed the
     *  item with a condition ID.
     *  Some categories don't support or require condition IDs
     *  (e.g., most Antiques categories don't). <br>
     *  <br>
     *  If you Condition as a <strong>itemFilter</strong>, the response returns items
     *  with the correctly matching condition(s), even if <strong>conditionId</strong> is
     *  not returned.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @var int $conditionId
     */
    private $conditionId = null;

    /**
     * The human-readable label for the item condition.
     *  Display names are localized for the site on which they're listed
     *  (not necessarily the site on which they're viewed).<br>
     *  <br>
     *  In item results, this is only returned when the seller specified the item's condition
     *  using a structured format eBay recognizes.<br>
     *  <br>
     *  <b>When conditionId is also present:</b>
     *  Most categories use the same display name for the same
     *  condition ID. Some categories may override the display name based
     *  on buyer expectations for items in the category.
     *  For example, condition ID 1000 could be called "New"
     *  in one category and "New with tags" in another.
     *  If an item is listed in two categories, the primary category
     *  controls the display name.<br>
     *  <br>
     *  Behind the scenes, eBay's search engine uses the ID (not the
     *  display name) to determine whether items are new, used, or
     *  refurbished. So, if you need to normalize the conditions
     *  across categories (such as to group items by condition),
     *  it may be easier to use the ID and then show the varying
     *  display names for reference.<br>
     *  <br>
     *  <b>In condition histograms:</b> If you search against
     *  a specific category and some items match based on their
     *  secondary category, the histogram only shows the display name
     *  if the secondary category supports the condition.
     *  (Condition IDs and names are dependent on the primary category.)
     *  However, the histogram shows the condition ID and item counts.
     *  This should only occur in a very small percent of results.
     *  As a workaround, you can fill in the missing name based on the
     *  "Item Condition IDs and Names" (link below) or based on
     *  the condition from an applicable item in the results.<br>
     *  <br>
     *  For example, suppose a seller lists a concert T-shirt in a
     *  clothing category with the condition "New without tags" (1500),
     *  and also in a music accessories secondary category (where
     *  "New without tags" isn't a recognized condition).
     *  If you specify the music accessories category in your request,
     *  the condition ID (1500) is shown in the histogram, but not the
     *  display name. However, the display name is shown within the items.
     *
     * @var string $conditionDisplayName
     */
    private $conditionDisplayName = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as conditionId
     *
     * The numeric ID (e.g., 1000) for the item condition.<br>
     *  <br>
     *  In item results, this is only returned when the seller listed the
     *  item with a condition ID.
     *  Some categories don't support or require condition IDs
     *  (e.g., most Antiques categories don't). <br>
     *  <br>
     *  If you Condition as a <strong>itemFilter</strong>, the response returns items
     *  with the correctly matching condition(s), even if <strong>conditionId</strong> is
     *  not returned.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @return int
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }

    /**
     * Sets a new conditionId
     *
     * The numeric ID (e.g., 1000) for the item condition.<br>
     *  <br>
     *  In item results, this is only returned when the seller listed the
     *  item with a condition ID.
     *  Some categories don't support or require condition IDs
     *  (e.g., most Antiques categories don't). <br>
     *  <br>
     *  If you Condition as a <strong>itemFilter</strong>, the response returns items
     *  with the correctly matching condition(s), even if <strong>conditionId</strong> is
     *  not returned.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  In all eBay marketplaces, Condition ID 2000 now maps to an item condition of 'Certified Refurbished', and not 'Manufacturer Refurbished'. To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature.
     *  </span>
     *
     * @param int $conditionId
     * @return self
     */
    public function setConditionId($conditionId)
    {
        $this->conditionId = $conditionId;
        return $this;
    }

    /**
     * Gets as conditionDisplayName
     *
     * The human-readable label for the item condition.
     *  Display names are localized for the site on which they're listed
     *  (not necessarily the site on which they're viewed).<br>
     *  <br>
     *  In item results, this is only returned when the seller specified the item's condition
     *  using a structured format eBay recognizes.<br>
     *  <br>
     *  <b>When conditionId is also present:</b>
     *  Most categories use the same display name for the same
     *  condition ID. Some categories may override the display name based
     *  on buyer expectations for items in the category.
     *  For example, condition ID 1000 could be called "New"
     *  in one category and "New with tags" in another.
     *  If an item is listed in two categories, the primary category
     *  controls the display name.<br>
     *  <br>
     *  Behind the scenes, eBay's search engine uses the ID (not the
     *  display name) to determine whether items are new, used, or
     *  refurbished. So, if you need to normalize the conditions
     *  across categories (such as to group items by condition),
     *  it may be easier to use the ID and then show the varying
     *  display names for reference.<br>
     *  <br>
     *  <b>In condition histograms:</b> If you search against
     *  a specific category and some items match based on their
     *  secondary category, the histogram only shows the display name
     *  if the secondary category supports the condition.
     *  (Condition IDs and names are dependent on the primary category.)
     *  However, the histogram shows the condition ID and item counts.
     *  This should only occur in a very small percent of results.
     *  As a workaround, you can fill in the missing name based on the
     *  "Item Condition IDs and Names" (link below) or based on
     *  the condition from an applicable item in the results.<br>
     *  <br>
     *  For example, suppose a seller lists a concert T-shirt in a
     *  clothing category with the condition "New without tags" (1500),
     *  and also in a music accessories secondary category (where
     *  "New without tags" isn't a recognized condition).
     *  If you specify the music accessories category in your request,
     *  the condition ID (1500) is shown in the histogram, but not the
     *  display name. However, the display name is shown within the items.
     *
     * @return string
     */
    public function getConditionDisplayName()
    {
        return $this->conditionDisplayName;
    }

    /**
     * Sets a new conditionDisplayName
     *
     * The human-readable label for the item condition.
     *  Display names are localized for the site on which they're listed
     *  (not necessarily the site on which they're viewed).<br>
     *  <br>
     *  In item results, this is only returned when the seller specified the item's condition
     *  using a structured format eBay recognizes.<br>
     *  <br>
     *  <b>When conditionId is also present:</b>
     *  Most categories use the same display name for the same
     *  condition ID. Some categories may override the display name based
     *  on buyer expectations for items in the category.
     *  For example, condition ID 1000 could be called "New"
     *  in one category and "New with tags" in another.
     *  If an item is listed in two categories, the primary category
     *  controls the display name.<br>
     *  <br>
     *  Behind the scenes, eBay's search engine uses the ID (not the
     *  display name) to determine whether items are new, used, or
     *  refurbished. So, if you need to normalize the conditions
     *  across categories (such as to group items by condition),
     *  it may be easier to use the ID and then show the varying
     *  display names for reference.<br>
     *  <br>
     *  <b>In condition histograms:</b> If you search against
     *  a specific category and some items match based on their
     *  secondary category, the histogram only shows the display name
     *  if the secondary category supports the condition.
     *  (Condition IDs and names are dependent on the primary category.)
     *  However, the histogram shows the condition ID and item counts.
     *  This should only occur in a very small percent of results.
     *  As a workaround, you can fill in the missing name based on the
     *  "Item Condition IDs and Names" (link below) or based on
     *  the condition from an applicable item in the results.<br>
     *  <br>
     *  For example, suppose a seller lists a concert T-shirt in a
     *  clothing category with the condition "New without tags" (1500),
     *  and also in a music accessories secondary category (where
     *  "New without tags" isn't a recognized condition).
     *  If you specify the music accessories category in your request,
     *  the condition ID (1500) is shown in the histogram, but not the
     *  display name. However, the display name is shown within the items.
     *
     * @param string $conditionDisplayName
     * @return self
     */
    public function setConditionDisplayName($conditionDisplayName)
    {
        $this->conditionDisplayName = $conditionDisplayName;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getConditionId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}conditionId", $value);
        }
        $value = $this->getConditionDisplayName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}conditionDisplayName", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}conditionId');
        if (null !== $value) {
            $this->setConditionId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}conditionDisplayName');
        if (null !== $value) {
            $this->setConditionDisplayName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
