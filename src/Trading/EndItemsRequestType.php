<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemsRequestType
 *
 * The <b>EndItems</b> call is used to end up to 10 specified eBay listings before the date and time at which those listings would normally end per the listing duration.
 * XSD Type: EndItemsRequestType
 */
class EndItemsRequestType extends AbstractRequestType
{
    /**
     * An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     *
     * @var \Nogrod\eBaySDK\Trading\EndItemRequestContainerType[] $endItemRequestContainer
     */
    private $endItemRequestContainer = [

    ];

    /**
     * Adds as endItemRequestContainer
     *
     * An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\EndItemRequestContainerType $endItemRequestContainer
     */
    public function addToEndItemRequestContainer(\Nogrod\eBaySDK\Trading\EndItemRequestContainerType $endItemRequestContainer)
    {
        if (!is_array($this->endItemRequestContainer)) {
            throw new \LogicException('endItemRequestContainer is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->endItemRequestContainer[] = $endItemRequestContainer;
        return $this;
    }

    /**
     * isset endItemRequestContainer
     *
     * An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEndItemRequestContainer($index)
    {
        return isset($this->endItemRequestContainer[$index]);
    }

    /**
     * unset endItemRequestContainer
     *
     * An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEndItemRequestContainer($index)
    {
        unset($this->endItemRequestContainer[$index]);
    }

    /**
     * Gets as endItemRequestContainer
     *
     * An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\EndItemRequestContainerType>
     */
    public function getEndItemRequestContainer()
    {
        return $this->endItemRequestContainer;
    }

    /**
     * Sets a new endItemRequestContainer
     *
     * An <b>EndItemRequestContainer</b> container is required for each eBay listing that the seller plans to end through the <b>EndItems</b> call. Up to 10 eBay listings can be ended with one <b>EndItems</b> call.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\EndItemRequestContainerType> $endItemRequestContainer
     * @return self
     */
    public function setEndItemRequestContainer(iterable $endItemRequestContainer)
    {
        $this->endItemRequestContainer = $endItemRequestContainer;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->endItemRequestContainer;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'EndItemRequestContainer', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\EndItemsRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->endItemRequestContainer = [];
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
                case 'EndItemRequestContainer':
                    $this->endItemRequestContainer[] = \Nogrod\eBaySDK\Trading\EndItemRequestContainerType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
