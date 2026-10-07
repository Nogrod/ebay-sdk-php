<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MembershipDetailsType
 *
 * Type used by the <b>Membership</b> container that is returned in the response of the <b>GetUser</b> call if the seller is enrolled in one or more eBay membership programs such as eBay Plus.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers on Germany and Australia marketplaces.
 *  </span>
 * XSD Type: MembershipDetailsType
 */
class MembershipDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @var \Nogrod\eBaySDK\Trading\MembershipDetailType[] $program
     */
    private $program = [

    ];

    /**
     * Adds as program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MembershipDetailType $program
     */
    public function addToProgram(\Nogrod\eBaySDK\Trading\MembershipDetailType $program)
    {
        if (!is_array($this->program)) {
            throw new \LogicException('program is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->program[] = $program;
        return $this;
    }

    /**
     * isset program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgram($index)
    {
        return isset($this->program[$index]);
    }

    /**
     * unset program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgram($index)
    {
        unset($this->program[$index]);
    }

    /**
     * Gets as program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\MembershipDetailType>
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\MembershipDetailType> $program
     * @return self
     */
    public function setProgram(iterable $program)
    {
        $this->program = $program;
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
        $value = $this->program;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Program', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MembershipDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->program = [];
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
                case 'Program':
                    $this->program[] = \Nogrod\eBaySDK\Trading\MembershipDetailType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
