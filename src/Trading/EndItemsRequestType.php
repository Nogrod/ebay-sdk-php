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
     * @return \Nogrod\eBaySDK\Trading\EndItemRequestContainerType[]
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
     * @param \Nogrod\eBaySDK\Trading\EndItemRequestContainerType[] $endItemRequestContainer
     * @return self
     */
    public function setEndItemRequestContainer(array $endItemRequestContainer)
    {
        $this->endItemRequestContainer = $endItemRequestContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getEndItemRequestContainer();
        if (null !== $value && [] !== $this->getEndItemRequestContainer()) {
            $writer->write(array_map(function ($v) {return ["EndItemRequestContainer" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\EndItemsRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndItemRequestContainer');
        if (null !== $value) {
            $this->setEndItemRequestContainer(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\EndItemRequestContainerType::fromKeyValue($v);}, $value));
        }
    }
}
