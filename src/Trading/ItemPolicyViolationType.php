<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemPolicyViolationType
 *
 * Specifies the details of policy violations if the item was administratively canceled.
 *  The details are the policy ID and the policy text.
 * XSD Type: ItemPolicyViolationType
 */
class ItemPolicyViolationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Policy ID of the violated policy which resulted in item being administratively canceled.
     *
     * @var int $policyID
     */
    private $policyID = null;

    /**
     * Brief information of the violated policy which resulted in item being administratively canceled.
     *
     * @var string $policyText
     */
    private $policyText = null;

    /**
     * Gets as policyID
     *
     * Policy ID of the violated policy which resulted in item being administratively canceled.
     *
     * @return int
     */
    public function getPolicyID()
    {
        return $this->policyID;
    }

    /**
     * Sets a new policyID
     *
     * Policy ID of the violated policy which resulted in item being administratively canceled.
     *
     * @param int $policyID
     * @return self
     */
    public function setPolicyID($policyID)
    {
        $this->policyID = $policyID;
        return $this;
    }

    /**
     * Gets as policyText
     *
     * Brief information of the violated policy which resulted in item being administratively canceled.
     *
     * @return string
     */
    public function getPolicyText()
    {
        return $this->policyText;
    }

    /**
     * Sets a new policyText
     *
     * Brief information of the violated policy which resulted in item being administratively canceled.
     *
     * @param string $policyText
     * @return self
     */
    public function setPolicyText($policyText)
    {
        $this->policyText = $policyText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPolicyID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PolicyID", $value);
        }
        $value = $this->getPolicyText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PolicyText", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PolicyID');
        if (null !== $value) {
            $this->setPolicyID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PolicyText');
        if (null !== $value) {
            $this->setPolicyText($value);
        }
    }
}
