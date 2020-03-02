<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindItemsForFavoriteSearchRequestType
 *
 * Reserved for future use.
 * XSD Type: FindItemsForFavoriteSearchRequest
 */
class FindItemsForFavoriteSearchRequestType extends BaseServiceRequestType
{

    /**
     * Reserved for future use.
     *
     * @var int $searchId
     */
    private $searchId = null;

    /**
     * Reserved for future use.
     *
     * @var string $searchName
     */
    private $searchName = null;

    /**
     * Reserved for future use.
     *
     * @var \DateTime $startTimeFrom
     */
    private $startTimeFrom = null;

    /**
     * @var \Nogrod\eBaySDK\Finding\PaginationInputType $paginationInput
     */
    private $paginationInput = null;

    /**
     * Gets as searchId
     *
     * Reserved for future use.
     *
     * @return int
     */
    public function getSearchId()
    {
        return $this->searchId;
    }

    /**
     * Sets a new searchId
     *
     * Reserved for future use.
     *
     * @param int $searchId
     * @return self
     */
    public function setSearchId($searchId)
    {
        $this->searchId = $searchId;
        return $this;
    }

    /**
     * Gets as searchName
     *
     * Reserved for future use.
     *
     * @return string
     */
    public function getSearchName()
    {
        return $this->searchName;
    }

    /**
     * Sets a new searchName
     *
     * Reserved for future use.
     *
     * @param string $searchName
     * @return self
     */
    public function setSearchName($searchName)
    {
        $this->searchName = $searchName;
        return $this;
    }

    /**
     * Gets as startTimeFrom
     *
     * Reserved for future use.
     *
     * @return \DateTime
     */
    public function getStartTimeFrom()
    {
        return $this->startTimeFrom;
    }

    /**
     * Sets a new startTimeFrom
     *
     * Reserved for future use.
     *
     * @param \DateTime $startTimeFrom
     * @return self
     */
    public function setStartTimeFrom(\DateTime $startTimeFrom)
    {
        $this->startTimeFrom = $startTimeFrom;
        return $this;
    }

    /**
     * Gets as paginationInput
     *
     * @return \Nogrod\eBaySDK\Finding\PaginationInputType
     */
    public function getPaginationInput()
    {
        return $this->paginationInput;
    }

    /**
     * Sets a new paginationInput
     *
     * @param \Nogrod\eBaySDK\Finding\PaginationInputType $paginationInput
     * @return self
     */
    public function setPaginationInput(\Nogrod\eBaySDK\Finding\PaginationInputType $paginationInput)
    {
        $this->paginationInput = $paginationInput;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSearchId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}searchId", $value);
        }
        $value = $this->getSearchName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}searchName", $value);
        }
        $value = $this->getStartTimeFrom();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}startTimeFrom", $value);
        }
        $value = $this->getPaginationInput();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}paginationInput", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}searchId');
        if (null !== $value) {
            $this->setSearchId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}searchName');
        if (null !== $value) {
            $this->setSearchName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}startTimeFrom');
        if (null !== $value) {
            $this->setStartTimeFrom(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}paginationInput');
        if (null !== $value) {
            $this->setPaginationInput(\Nogrod\eBaySDK\Finding\PaginationInputType::fromKeyValue($value));
        }
    }
}
