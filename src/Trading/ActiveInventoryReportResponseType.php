<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ActiveInventoryReportResponseType
 *
 * A report that contains all of the active listings for a specific seller. The eBay
 *  servers read the token information passed in by the seller's application to
 *  determine which seller's data to retrieve.
 * XSD Type: ActiveInventoryReportResponseType
 */
class ActiveInventoryReportResponseType extends AbstractResponseType
{
    /**
     * Describes or includes keywords associated with the SKU.
     *
     * @var \Nogrod\eBaySDK\Trading\SKUDetailsType[] $sKUDetails
     */
    private $sKUDetails = [

    ];

    /**
     * Adds as sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SKUDetailsType $sKUDetails
     */
    public function addToSKUDetails(\Nogrod\eBaySDK\Trading\SKUDetailsType $sKUDetails)
    {
        if (!is_array($this->sKUDetails)) {
            throw new \LogicException('sKUDetails is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->sKUDetails[] = $sKUDetails;
        return $this;
    }

    /**
     * isset sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSKUDetails($index)
    {
        return isset($this->sKUDetails[$index]);
    }

    /**
     * unset sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSKUDetails($index)
    {
        unset($this->sKUDetails[$index]);
    }

    /**
     * Gets as sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\SKUDetailsType>
     */
    public function getSKUDetails()
    {
        return $this->sKUDetails;
    }

    /**
     * Sets a new sKUDetails
     *
     * Describes or includes keywords associated with the SKU.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\SKUDetailsType> $sKUDetails
     * @return self
     */
    public function setSKUDetails(iterable $sKUDetails)
    {
        $this->sKUDetails = $sKUDetails;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->sKUDetails;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'SKUDetails', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ActiveInventoryReportResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->sKUDetails = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'SKUDetails':
                    $this->sKUDetails[] = \Nogrod\eBaySDK\Trading\SKUDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['SKUDetails'] = Func::jsonList($this->sKUDetails);
        return $data;
    }
}
