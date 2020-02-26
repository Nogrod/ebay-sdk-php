<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing UnpaidItemType
 *
 * Type defining the <strong>UnpaidItem</strong> container, which consists of
 *  details related to the type and status of an Unpaid Item case.
 * XSD Type: UnpaidItemType
 */
class UnpaidItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field indicates the status of the Unpaid Item case. This field is always
     *  returned with the <strong>UnpaidItem</strong> container.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * This field indicates if the Unpaid Item case was opened manually by the customer or
     *  opened automatically by eBay's Unpaid Item Assistant feature. This field is always
     *  returned with the <strong>UnpaidItem</strong> container.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Gets as status
     *
     * This field indicates the status of the Unpaid Item case. This field is always
     *  returned with the <strong>UnpaidItem</strong> container.
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
     * This field indicates the status of the Unpaid Item case. This field is always
     *  returned with the <strong>UnpaidItem</strong> container.
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
     * This field indicates if the Unpaid Item case was opened manually by the customer or
     *  opened automatically by eBay's Unpaid Item Assistant feature. This field is always
     *  returned with the <strong>UnpaidItem</strong> container.
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
     * This field indicates if the Unpaid Item case was opened manually by the customer or
     *  opened automatically by eBay's Unpaid Item Assistant feature. This field is always
     *  returned with the <strong>UnpaidItem</strong> container.
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
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
