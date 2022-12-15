<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeFilterCountType
 *
 * This type is used by the <strong>DisputeFilterCount</strong> containers of the <b>GetUserDisputes</b> response to show how many disputes of a certain type that the user is involved in.
 * XSD Type: DisputeFilterCountType
 */
class DisputeFilterCountType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The enumeration value returned here indicates the type/category of the dispute for which a count is being shown. For example, disputes awaiting a response, closed disputes, disputes eligible for Final Value Fee credit, etc.
     *
     * @var string $disputeFilterType
     */
    private $disputeFilterType = null;

    /**
     * This integer value indicates the number of disputes that match the input criteria for the corresponding type/category of dispute.
     *  <br/><br/>
     *  Note that this field will not be returned for the type/category of dispute that was used as a filter in the <b>DisputeFilterType</b> field of the request, or if this filter is not used at all, this field (with the count) will not be returned for <code>DisputesAwaitingMyResponse</code>, which is the default value.
     *
     * @var int $totalAvailable
     */
    private $totalAvailable = null;

    /**
     * Gets as disputeFilterType
     *
     * The enumeration value returned here indicates the type/category of the dispute for which a count is being shown. For example, disputes awaiting a response, closed disputes, disputes eligible for Final Value Fee credit, etc.
     *
     * @return string
     */
    public function getDisputeFilterType()
    {
        return $this->disputeFilterType;
    }

    /**
     * Sets a new disputeFilterType
     *
     * The enumeration value returned here indicates the type/category of the dispute for which a count is being shown. For example, disputes awaiting a response, closed disputes, disputes eligible for Final Value Fee credit, etc.
     *
     * @param string $disputeFilterType
     * @return self
     */
    public function setDisputeFilterType($disputeFilterType)
    {
        $this->disputeFilterType = $disputeFilterType;
        return $this;
    }

    /**
     * Gets as totalAvailable
     *
     * This integer value indicates the number of disputes that match the input criteria for the corresponding type/category of dispute.
     *  <br/><br/>
     *  Note that this field will not be returned for the type/category of dispute that was used as a filter in the <b>DisputeFilterType</b> field of the request, or if this filter is not used at all, this field (with the count) will not be returned for <code>DisputesAwaitingMyResponse</code>, which is the default value.
     *
     * @return int
     */
    public function getTotalAvailable()
    {
        return $this->totalAvailable;
    }

    /**
     * Sets a new totalAvailable
     *
     * This integer value indicates the number of disputes that match the input criteria for the corresponding type/category of dispute.
     *  <br/><br/>
     *  Note that this field will not be returned for the type/category of dispute that was used as a filter in the <b>DisputeFilterType</b> field of the request, or if this filter is not used at all, this field (with the count) will not be returned for <code>DisputesAwaitingMyResponse</code>, which is the default value.
     *
     * @param int $totalAvailable
     * @return self
     */
    public function setTotalAvailable($totalAvailable)
    {
        $this->totalAvailable = $totalAvailable;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDisputeFilterType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DisputeFilterType", $value);
        }
        $value = $this->getTotalAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TotalAvailable", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DisputeFilterType');
        if (null !== $value) {
            $this->setDisputeFilterType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TotalAvailable');
        if (null !== $value) {
            $this->setTotalAvailable($value);
        }
    }
}
