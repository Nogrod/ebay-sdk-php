<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RelevanceIndicatorType
 *
 * This type is used by the <b>RelevanceIndicator</b> container, which is returned for an item specific if eBay has data on how many eBay users have searched for an item in the category using that item specific.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b>
 *  This container is restricted to applications that have been granted permission to access this feature. You must submit an <a href="https://developer.ebay.com/my/support/tickets?tab=app-check" target="_blank">App Check ticket</a> to request this access. In the App Check form, add a note to the <b>Application Title/Summary</b> and/or <b>Application Details</b> fields that you want access to 'Buyer Demand Data' in <b>GetCategorySpecifics</b>.
 *  </span>
 * XSD Type: RelevanceIndicatorType
 */
class RelevanceIndicatorType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The integer in this field indicates how many searches have been performed for listings in the category (in the last 30 days) using that item specific.
     *
     * @var int $searchCount
     */
    private $searchCount = null;

    /**
     * Gets as searchCount
     *
     * The integer in this field indicates how many searches have been performed for listings in the category (in the last 30 days) using that item specific.
     *
     * @return int
     */
    public function getSearchCount()
    {
        return $this->searchCount;
    }

    /**
     * Sets a new searchCount
     *
     * The integer in this field indicates how many searches have been performed for listings in the category (in the last 30 days) using that item specific.
     *
     * @param int $searchCount
     * @return self
     */
    public function setSearchCount($searchCount)
    {
        $this->searchCount = $searchCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSearchCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchCount');
        if (null !== $value) {
            $this->setSearchCount($value);
        }
    }
}
