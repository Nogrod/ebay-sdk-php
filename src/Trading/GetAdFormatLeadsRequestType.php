<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetAdFormatLeadsRequestType
 *
 * Retrieves sales lead information for a lead generation listing.
 * XSD Type: GetAdFormatLeadsRequestType
 */
class GetAdFormatLeadsRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of an item listed on the eBay site.
     *  Returned by eBay when the item is created. This ID must correspond
     *  to an ad format item.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Filters the leads based on their status.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Boolean which indicates whether to return mail messages for this lead in a MemberMessage node.
     *
     * @var bool $includeMemberMessages
     */
    private $includeMemberMessages = null;

    /**
     * Used with EndCreationTime to limit the returned leads for a user to only
     *  those with a creation date greater than or equal to the specified date and
     *  time.
     *
     * @var \DateTime $startCreationTime
     */
    private $startCreationTime = null;

    /**
     * Used with StartCreationTime to limit the returned leads for a user to only
     *  those with a creation date less than or equal to the specified date and
     *  time.
     *
     * @var \DateTime $endCreationTime
     */
    private $endCreationTime = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of an item listed on the eBay site.
     *  Returned by eBay when the item is created. This ID must correspond
     *  to an ad format item.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of an item listed on the eBay site.
     *  Returned by eBay when the item is created. This ID must correspond
     *  to an ad format item.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as status
     *
     * Filters the leads based on their status.
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
     * Filters the leads based on their status.
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
     * Gets as includeMemberMessages
     *
     * Boolean which indicates whether to return mail messages for this lead in a MemberMessage node.
     *
     * @return bool
     */
    public function getIncludeMemberMessages()
    {
        return $this->includeMemberMessages;
    }

    /**
     * Sets a new includeMemberMessages
     *
     * Boolean which indicates whether to return mail messages for this lead in a MemberMessage node.
     *
     * @param bool $includeMemberMessages
     * @return self
     */
    public function setIncludeMemberMessages($includeMemberMessages)
    {
        $this->includeMemberMessages = $includeMemberMessages;
        return $this;
    }

    /**
     * Gets as startCreationTime
     *
     * Used with EndCreationTime to limit the returned leads for a user to only
     *  those with a creation date greater than or equal to the specified date and
     *  time.
     *
     * @return \DateTime
     */
    public function getStartCreationTime()
    {
        return $this->startCreationTime;
    }

    /**
     * Sets a new startCreationTime
     *
     * Used with EndCreationTime to limit the returned leads for a user to only
     *  those with a creation date greater than or equal to the specified date and
     *  time.
     *
     * @param \DateTime $startCreationTime
     * @return self
     */
    public function setStartCreationTime(\DateTime $startCreationTime)
    {
        $this->startCreationTime = $startCreationTime;
        return $this;
    }

    /**
     * Gets as endCreationTime
     *
     * Used with StartCreationTime to limit the returned leads for a user to only
     *  those with a creation date less than or equal to the specified date and
     *  time.
     *
     * @return \DateTime
     */
    public function getEndCreationTime()
    {
        return $this->endCreationTime;
    }

    /**
     * Sets a new endCreationTime
     *
     * Used with StartCreationTime to limit the returned leads for a user to only
     *  those with a creation date less than or equal to the specified date and
     *  time.
     *
     * @param \DateTime $endCreationTime
     * @return self
     */
    public function setEndCreationTime(\DateTime $endCreationTime)
    {
        $this->endCreationTime = $endCreationTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getIncludeMemberMessages();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeMemberMessages", $value);
        }
        $value = $this->getStartCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartCreationTime", $value);
        }
        $value = $this->getEndCreationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndCreationTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeMemberMessages');
        if (null !== $value) {
            $this->setIncludeMemberMessages($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartCreationTime');
        if (null !== $value) {
            $this->setStartCreationTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndCreationTime');
        if (null !== $value) {
            $this->setEndCreationTime(new \DateTime($value));
        }
    }
}
