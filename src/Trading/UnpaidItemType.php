<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UnpaidItemType
 *
 * <span class="tablenote"> <strong>Note:</strong> This type is deprecated since Unpaid Item cases are no longer supported. </span><br>
 * XSD Type: UnpaidItemType
 */
class UnpaidItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"> <strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span><br>
     *
     * @var string $status
     */
    private $status = null;

    /**
     * <span class="tablenote"> <strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span><br>
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Gets as status
     *
     * <span class="tablenote"> <strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span><br>
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
     * <span class="tablenote"> <strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span><br>
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
     * Gets as type
     *
     * <span class="tablenote"> <strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span><br>
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * <span class="tablenote"> <strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span><br>
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
    }
}
