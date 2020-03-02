<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SetPromotionalSaleResponseType
 *
 * <span class="tablenote"><b>Note: </b> While the Trading API continues to support item promotions for an eBay store owner, the Trading API will no longer be enhanced with any new item promotion capabilities as they are developed by eBay. In addition, Promoted Listings are also not supported by the Trading API. For these two reasons, it is recommended that sellers/developers make plans to migrate to the
 *  <a href="https://developer.ebay.com/api-docs/sell/marketing/overview.html">Marketing API</a>, which provides all Promotions Manager and Promoted Listings capabilities, and this API will continue to be improved and enhanced as more marketing features become available to sellers.
 *  </span>
 *  The base response of the <b>SetPromotionalSale</b> call. Contains the status of a promotional sale.
 * XSD Type: SetPromotionalSaleResponseType
 */
class SetPromotionalSaleResponseType extends AbstractResponseType
{

    /**
     * The enumeration value in this field indicates the status of the promotional sale action (add or delete). See <b>PromotionalSaleStatusCodeType</b> for more information on status values.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The unique identifier of the new promotional sale, or in the case of a delete or modify action, the unique identifier of the existing promotional sale that was deleted or modified.
     *
     * @var int $promotionalSaleID
     */
    private $promotionalSaleID = null;

    /**
     * Gets as status
     *
     * The enumeration value in this field indicates the status of the promotional sale action (add or delete). See <b>PromotionalSaleStatusCodeType</b> for more information on status values.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The enumeration value in this field indicates the status of the promotional sale action (add or delete). See <b>PromotionalSaleStatusCodeType</b> for more information on status values.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as promotionalSaleID
     *
     * The unique identifier of the new promotional sale, or in the case of a delete or modify action, the unique identifier of the existing promotional sale that was deleted or modified.
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
     * The unique identifier of the new promotional sale, or in the case of a delete or modify action, the unique identifier of the existing promotional sale that was deleted or modified.
     *
     * @param int $promotionalSaleID
     * @return self
     */
    public function setPromotionalSaleID($promotionalSaleID)
    {
        $this->promotionalSaleID = $promotionalSaleID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getPromotionalSaleID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PromotionalSaleID');
        if (null !== $value) {
            $this->setPromotionalSaleID($value);
        }
    }
}
