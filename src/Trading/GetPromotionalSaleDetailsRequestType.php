<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetPromotionalSaleDetailsRequestType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 * <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  The base request type for the <b>GetPromotionalSaleDetails</b> call. This call retrieves information about promotional sales set up by an eBay store owner. The eBay store owner has the option to retrieve all promotional sales, a specific promotional sale, or promotional sales in a specific state.
 * XSD Type: GetPromotionalSaleDetailsRequestType
 */
class GetPromotionalSaleDetailsRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the promotional sale to retrieve. This field is used if the eBay store owner only wants to retrieve a specific promotional sale. Any <b>PromotionalSaleStatus</b> fields that are included will be ignored if the <b>PromotionalSaleID</b> field is used.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @var int $promotionalSaleID
     */
    private $promotionalSaleID = null;

    /**
     * One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @var string[] $promotionalSaleStatus
     */
    private $promotionalSaleStatus = [
        
    ];

    /**
     * Gets as promotionalSaleID
     *
     * The unique identifier of the promotional sale to retrieve. This field is used if the eBay store owner only wants to retrieve a specific promotional sale. Any <b>PromotionalSaleStatus</b> fields that are included will be ignored if the <b>PromotionalSaleID</b> field is used.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @return int
     */
    public function getPromotionalSaleID()
    {
        return $this->promotionalSaleID;
    }

    /**
     * Sets a new promotionalSaleID
     *
     * The unique identifier of the promotional sale to retrieve. This field is used if the eBay store owner only wants to retrieve a specific promotional sale. Any <b>PromotionalSaleStatus</b> fields that are included will be ignored if the <b>PromotionalSaleID</b> field is used.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @param int $promotionalSaleID
     * @return self
     */
    public function setPromotionalSaleID($promotionalSaleID)
    {
        $this->promotionalSaleID = $promotionalSaleID;
        return $this;
    }

    /**
     * Adds as promotionalSaleStatus
     *
     * One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @return self
     * @param string $promotionalSaleStatus
     */
    public function addToPromotionalSaleStatus($promotionalSaleStatus)
    {
        $this->promotionalSaleStatus[] = $promotionalSaleStatus;
        return $this;
    }

    /**
     * isset promotionalSaleStatus
     *
     * One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalSaleStatus($index)
    {
        return isset($this->promotionalSaleStatus[$index]);
    }

    /**
     * unset promotionalSaleStatus
     *
     * One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalSaleStatus($index)
    {
        unset($this->promotionalSaleStatus[$index]);
    }

    /**
     * Gets as promotionalSaleStatus
     *
     * One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @return string[]
     */
    public function getPromotionalSaleStatus()
    {
        return $this->promotionalSaleStatus;
    }

    /**
     * Sets a new promotionalSaleStatus
     *
     * One or more <b>PromotionalSaleStatus</b> fields are used if the eBay store owner wants to retrieve promotional sales in a specific state, such as <code>Active</code>, <code>Scheduled</code>, or <code>Deleted</code>. A <b>PromotionalSaleStatus</b> field is included for each status. See <a href="types/PromotionalSaleStatusCodeType.html">PromotionalSaleStatusCodeType</a> for a description of the status values that can be used in this field.
     *  <br><br>
     *  If neither the <b>PromotionalSaleID</b> nor a <b>PromotionalSaleStatus</b> field is used, then all promotional sales for the eBay store owner are returned.
     *
     * @param string $promotionalSaleStatus
     * @return self
     */
    public function setPromotionalSaleStatus(array $promotionalSaleStatus)
    {
        $this->promotionalSaleStatus = $promotionalSaleStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getPromotionalSaleID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID", $value);
        }
        $value = $this->getPromotionalSaleStatus();
        if (null !== $value && !empty($this->getPromotionalSaleStatus())) {
            $writer->write(array_map(function ($v) {
                return ["PromotionalSaleStatus" => $v];
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID');
        if (null !== $value) {
            $this->setPromotionalSaleID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleStatus', true);
        if (null !== $value && !empty($value)) {
            $this->setPromotionalSaleStatus($value);
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
