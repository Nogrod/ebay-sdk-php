<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetVeROReasonCodeDetailsRequestType
 *
 * <span class="tablenote">
 *  <strong>Note:</strong> This call has been deprecated and will be decommissioned on February 2nd, 2026. Users are recommended to migrate to the <a href="https://developer.ebay.com/api-docs/commerce/vero/resources/methods" target="_blank">VeRO API</a> to create and manage VeRO reports.
 *  </span>
 *  Retrieves details for VeRO reason codes and their descriptions. You can specify a
 *  reason code ID to get details for a specific reason on the site specified in the
 *  request header. If <strong>ReasonCodeID</strong> is not passed in the request, all reason codes are
 *  returned. Set <strong>ReturnAllSites</strong> to <code>true</code> to retrieve reason codes for all sites.
 *  You must be a member of the Verified Rights Owner (VeRO) Program to use this call.
 * XSD Type: GetVeROReasonCodeDetailsRequestType
 */
class GetVeROReasonCodeDetailsRequestType extends AbstractRequestType
{
    /**
     * Unique identifier for a reason code. If this <strong>ReasonCodeID</strong> field is passed in, only the details related to this <strong>ReasonCodeID</strong> will be returned. If no reason code is specified, all reason codes are returned.
     *
     * @var int $reasonCodeID
     */
    private $reasonCodeID = null;

    /**
     * Set to true to retrieve reason codes for all sites. If not specified, reason codes are returned for the site specified in the request header only. If a <strong>ReasonCodeID</strong> value is specified, this parameter is ignored.
     *
     * @var bool $returnAllSites
     */
    private $returnAllSites = null;

    /**
     * Gets as reasonCodeID
     *
     * Unique identifier for a reason code. If this <strong>ReasonCodeID</strong> field is passed in, only the details related to this <strong>ReasonCodeID</strong> will be returned. If no reason code is specified, all reason codes are returned.
     *
     * @return int
     */
    public function getReasonCodeID()
    {
        return $this->reasonCodeID;
    }

    /**
     * Sets a new reasonCodeID
     *
     * Unique identifier for a reason code. If this <strong>ReasonCodeID</strong> field is passed in, only the details related to this <strong>ReasonCodeID</strong> will be returned. If no reason code is specified, all reason codes are returned.
     *
     * @param int $reasonCodeID
     * @return self
     */
    public function setReasonCodeID($reasonCodeID)
    {
        $this->reasonCodeID = $reasonCodeID;
        return $this;
    }

    /**
     * Gets as returnAllSites
     *
     * Set to true to retrieve reason codes for all sites. If not specified, reason codes are returned for the site specified in the request header only. If a <strong>ReasonCodeID</strong> value is specified, this parameter is ignored.
     *
     * @return bool
     */
    public function getReturnAllSites()
    {
        return $this->returnAllSites;
    }

    /**
     * Sets a new returnAllSites
     *
     * Set to true to retrieve reason codes for all sites. If not specified, reason codes are returned for the site specified in the request header only. If a <strong>ReasonCodeID</strong> value is specified, this parameter is ignored.
     *
     * @param bool $returnAllSites
     * @return self
     */
    public function setReturnAllSites($returnAllSites)
    {
        $this->returnAllSites = $returnAllSites;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getReasonCodeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReasonCodeID", $value);
        }
        $value = $this->getReturnAllSites();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReturnAllSites", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetVeROReasonCodeDetailsRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReasonCodeID');
        if (null !== $value) {
            $this->setReasonCodeID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReturnAllSites');
        if (null !== $value) {
            $this->setReturnAllSites(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
