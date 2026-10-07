<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyerProtectionDetailsType
 *
 * Type defining the <strong>ApplyBuyerProtection</strong> container, which
 *  consists of details related to whether or not the item is eligible for buyer protection
 *  and which of the buyer protection programs will cover the item.
 * XSD Type: BuyerProtectionDetailsType
 */
class BuyerProtectionDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This value indicates the type of buyer protection program applicable for the item.
     *  This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     *
     * @var string $buyerProtectionSource
     */
    private $buyerProtectionSource = null;

    /**
     * This value indicates the item's eligibility for the buyer protection program listed
     *  in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field.
     *  This field is always returned with the
     *  <strong>ApplyBuyerProtection</strong> container.
     *
     * @var string $buyerProtectionStatus
     */
    private $buyerProtectionStatus = null;

    /**
     * Gets as buyerProtectionSource
     *
     * This value indicates the type of buyer protection program applicable for the item.
     *  This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     *
     * @return string
     */
    public function getBuyerProtectionSource()
    {
        return $this->buyerProtectionSource;
    }

    /**
     * Sets a new buyerProtectionSource
     *
     * This value indicates the type of buyer protection program applicable for the item.
     *  This field is always returned with the <strong>ApplyBuyerProtection</strong> container.
     *
     * @param string $buyerProtectionSource
     * @return self
     */
    public function setBuyerProtectionSource($buyerProtectionSource)
    {
        $this->buyerProtectionSource = $buyerProtectionSource;
        return $this;
    }

    /**
     * Gets as buyerProtectionStatus
     *
     * This value indicates the item's eligibility for the buyer protection program listed
     *  in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field.
     *  This field is always returned with the
     *  <strong>ApplyBuyerProtection</strong> container.
     *
     * @return string
     */
    public function getBuyerProtectionStatus()
    {
        return $this->buyerProtectionStatus;
    }

    /**
     * Sets a new buyerProtectionStatus
     *
     * This value indicates the item's eligibility for the buyer protection program listed
     *  in the <strong>ApplyBuyerProtection.BuyerProtectionSource</strong> field.
     *  This field is always returned with the
     *  <strong>ApplyBuyerProtection</strong> container.
     *
     * @param string $buyerProtectionStatus
     * @return self
     */
    public function setBuyerProtectionStatus($buyerProtectionStatus)
    {
        $this->buyerProtectionStatus = $buyerProtectionStatus;
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
        $value = $this->buyerProtectionSource;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyerProtectionSource', null, (string) $value);
        }
        $value = $this->buyerProtectionStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'BuyerProtectionStatus', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BuyerProtectionDetailsType
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
                case 'BuyerProtectionSource':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerProtectionSource = $value;
                    }
                    return true;
                case 'BuyerProtectionStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->buyerProtectionStatus = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['BuyerProtectionSource'] = $this->buyerProtectionSource;
        $data['BuyerProtectionStatus'] = $this->buyerProtectionStatus;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
