<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityAffiliationDetailsType
 *
 * This type is used to hold an array of one or more eBay for Charity organizations that are affiliated with the seller's account.
 * XSD Type: CharityAffiliationDetailsType
 */
class CharityAffiliationDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @var \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType[] $charityAffiliationDetail
     */
    private $charityAffiliationDetail = [

    ];

    /**
     * Adds as charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType $charityAffiliationDetail
     */
    public function addToCharityAffiliationDetail(\Nogrod\eBaySDK\Trading\CharityAffiliationDetailType $charityAffiliationDetail)
    {
        if (!is_array($this->charityAffiliationDetail)) {
            throw new \LogicException('charityAffiliationDetail is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->charityAffiliationDetail[] = $charityAffiliationDetail;
        return $this;
    }

    /**
     * isset charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharityAffiliationDetail($index)
    {
        return isset($this->charityAffiliationDetail[$index]);
    }

    /**
     * unset charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharityAffiliationDetail($index)
    {
        unset($this->charityAffiliationDetail[$index]);
    }

    /**
     * Gets as charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\CharityAffiliationDetailType>
     */
    public function getCharityAffiliationDetail()
    {
        return $this->charityAffiliationDetail;
    }

    /**
     * Sets a new charityAffiliationDetail
     *
     * A <b>CharityAffiliationDetail</b> container will be returned for each eBay for Charity organization that is associated with the seller's account.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\CharityAffiliationDetailType> $charityAffiliationDetail
     * @return self
     */
    public function setCharityAffiliationDetail(iterable $charityAffiliationDetail)
    {
        $this->charityAffiliationDetail = $charityAffiliationDetail;
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
        $value = $this->charityAffiliationDetail;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'CharityAffiliationDetail', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CharityAffiliationDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->charityAffiliationDetail = [];
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
                case 'CharityAffiliationDetail':
                    $this->charityAffiliationDetail[] = \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
