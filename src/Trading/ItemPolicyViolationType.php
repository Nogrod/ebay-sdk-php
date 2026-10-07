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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->policyID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PolicyID', null, (string) $value);
        }
        $value = $this->policyText;
        if (null !== $value) {
            $writer->writeElementNs(null, 'PolicyText', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ItemPolicyViolationType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'PolicyID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->policyID = (int) $value;
                    }
                    return true;
                case 'PolicyText':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->policyText = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
