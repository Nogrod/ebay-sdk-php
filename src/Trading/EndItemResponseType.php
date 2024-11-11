<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemResponseType
 *
 * This type includes the acknowledgement of the date and time when the eBay listing was ended due to the call to <b>EndItem</b>.
 * XSD Type: EndItemResponseType
 */
class EndItemResponseType extends AbstractResponseType
{
    /**
     * This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Gets as endTime
     *
     * This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
    }
}
