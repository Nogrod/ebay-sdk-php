<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EBayPaymentMismatchDetailsType
 *
 * This type is deprecated.
 * XSD Type: eBayPaymentMismatchDetailsType
 */
class EBayPaymentMismatchDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var string $mismatchType
     */
    private $mismatchType = null;

    /**
     * This field is deprecated.
     *
     * @var \DateTime $actionRequiredBy
     */
    private $actionRequiredBy = null;

    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $mismatchAmount
     */
    private $mismatchAmount = null;

    /**
     * Gets as mismatchType
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getMismatchType()
    {
        return $this->mismatchType;
    }

    /**
     * Sets a new mismatchType
     *
     * This field is deprecated.
     *
     * @param string $mismatchType
     * @return self
     */
    public function setMismatchType($mismatchType)
    {
        $this->mismatchType = $mismatchType;
        return $this;
    }

    /**
     * Gets as actionRequiredBy
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getActionRequiredBy()
    {
        return $this->actionRequiredBy;
    }

    /**
     * Sets a new actionRequiredBy
     *
     * This field is deprecated.
     *
     * @param \DateTime $actionRequiredBy
     * @return self
     */
    public function setActionRequiredBy(\DateTime $actionRequiredBy)
    {
        $this->actionRequiredBy = $actionRequiredBy;
        return $this;
    }

    /**
     * Gets as mismatchAmount
     *
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getMismatchAmount()
    {
        return $this->mismatchAmount;
    }

    /**
     * Sets a new mismatchAmount
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $mismatchAmount
     * @return self
     */
    public function setMismatchAmount(\Nogrod\eBaySDK\Trading\AmountType $mismatchAmount)
    {
        $this->mismatchAmount = $mismatchAmount;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMismatchType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MismatchType", $value);
        }
        $value = $this->getActionRequiredBy();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ActionRequiredBy", $value);
        }
        $value = $this->getMismatchAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MismatchAmount", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MismatchType');
        if (null !== $value) {
            $this->setMismatchType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ActionRequiredBy');
        if (null !== $value) {
            $this->setActionRequiredBy(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MismatchAmount');
        if (null !== $value) {
            $this->setMismatchAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
    }
}
