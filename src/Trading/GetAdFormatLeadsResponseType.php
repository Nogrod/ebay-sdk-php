<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetAdFormatLeadsResponseType
 *
 * Returns number of leads and contact and other information for each lead. One
 *  AdFormatLead node is returned for each lead.
 * XSD Type: GetAdFormatLeadsResponseType
 */
class GetAdFormatLeadsResponseType extends AbstractResponseType
{
    /**
     * Contains contact and other information for one lead. One node is
     *  returned for each lead. Only returned at a detail level of ReturnAll. At
     *  least one lead must be available for the specified item to return
     *  AdFormatLead.
     *
     * @var \Nogrod\eBaySDK\Trading\AdFormatLeadType[] $adFormatLead
     */
    private $adFormatLead = [

    ];

    /**
     * The total number of leads returned. Only returned if you do not
     *  specify a detail level.
     *
     * @var int $adFormatLeadCount
     */
    private $adFormatLeadCount = null;

    /**
     * Adds as adFormatLead
     *
     * Contains contact and other information for one lead. One node is
     *  returned for each lead. Only returned at a detail level of ReturnAll. At
     *  least one lead must be available for the specified item to return
     *  AdFormatLead.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AdFormatLeadType $adFormatLead
     */
    public function addToAdFormatLead(\Nogrod\eBaySDK\Trading\AdFormatLeadType $adFormatLead)
    {
        $this->adFormatLead[] = $adFormatLead;
        return $this;
    }

    /**
     * isset adFormatLead
     *
     * Contains contact and other information for one lead. One node is
     *  returned for each lead. Only returned at a detail level of ReturnAll. At
     *  least one lead must be available for the specified item to return
     *  AdFormatLead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdFormatLead($index)
    {
        return isset($this->adFormatLead[$index]);
    }

    /**
     * unset adFormatLead
     *
     * Contains contact and other information for one lead. One node is
     *  returned for each lead. Only returned at a detail level of ReturnAll. At
     *  least one lead must be available for the specified item to return
     *  AdFormatLead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdFormatLead($index)
    {
        unset($this->adFormatLead[$index]);
    }

    /**
     * Gets as adFormatLead
     *
     * Contains contact and other information for one lead. One node is
     *  returned for each lead. Only returned at a detail level of ReturnAll. At
     *  least one lead must be available for the specified item to return
     *  AdFormatLead.
     *
     * @return \Nogrod\eBaySDK\Trading\AdFormatLeadType[]
     */
    public function getAdFormatLead()
    {
        return $this->adFormatLead;
    }

    /**
     * Sets a new adFormatLead
     *
     * Contains contact and other information for one lead. One node is
     *  returned for each lead. Only returned at a detail level of ReturnAll. At
     *  least one lead must be available for the specified item to return
     *  AdFormatLead.
     *
     * @param \Nogrod\eBaySDK\Trading\AdFormatLeadType[] $adFormatLead
     * @return self
     */
    public function setAdFormatLead(array $adFormatLead)
    {
        $this->adFormatLead = $adFormatLead;
        return $this;
    }

    /**
     * Gets as adFormatLeadCount
     *
     * The total number of leads returned. Only returned if you do not
     *  specify a detail level.
     *
     * @return int
     */
    public function getAdFormatLeadCount()
    {
        return $this->adFormatLeadCount;
    }

    /**
     * Sets a new adFormatLeadCount
     *
     * The total number of leads returned. Only returned if you do not
     *  specify a detail level.
     *
     * @param int $adFormatLeadCount
     * @return self
     */
    public function setAdFormatLeadCount($adFormatLeadCount)
    {
        $this->adFormatLeadCount = $adFormatLeadCount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getAdFormatLead();
        if (null !== $value && !empty($this->getAdFormatLead())) {
            $writer->write(array_map(function ($v) {return ["AdFormatLead" => $v];}, $value));
        }
        $value = $this->getAdFormatLeadCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdFormatLeadCount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdFormatLead');
        if (null !== $value) {
            $this->setAdFormatLead(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AdFormatLeadType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdFormatLeadCount');
        if (null !== $value) {
            $this->setAdFormatLeadCount($value);
        }
    }
}
