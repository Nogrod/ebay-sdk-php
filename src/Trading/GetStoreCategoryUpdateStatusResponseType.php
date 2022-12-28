<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetStoreCategoryUpdateStatusResponseType
 *
 * The base response of a <b>GetStoreCategoryUpdateStatus</b> call. The response includes the status of an eBay Store Category hierarchy change that was made with a <b>SetStoreCategories</b> call.
 * XSD Type: GetStoreCategoryUpdateStatusResponseType
 */
class GetStoreCategoryUpdateStatusResponseType extends AbstractResponseType
{
    /**
     * The enumeration value indicates the status of an update to the
     *  eBay Store Category hierarchy.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * The enumeration value indicates the status of an update to the
     *  eBay Store Category hierarchy.
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
     * The enumeration value indicates the status of an update to the
     *  eBay Store Category hierarchy.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
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
    }
}
