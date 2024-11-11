<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyingGuideDetailsType
 *
 * <br/><br/>
 *  <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
 *  </span>
 * XSD Type: BuyingGuideDetailsType
 */
class BuyingGuideDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Shopping\BuyingGuideType[] $buyingGuide
     */
    private $buyingGuide = [

    ];

    /**
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @var string $buyingGuideHub
     */
    private $buyingGuideHub = null;

    /**
     * Adds as buyingGuide
     *
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return self
     * @param \Nogrod\eBaySDK\Shopping\BuyingGuideType $buyingGuide
     */
    public function addToBuyingGuide(\Nogrod\eBaySDK\Shopping\BuyingGuideType $buyingGuide)
    {
        $this->buyingGuide[] = $buyingGuide;
        return $this;
    }

    /**
     * isset buyingGuide
     *
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyingGuide($index)
    {
        return isset($this->buyingGuide[$index]);
    }

    /**
     * unset buyingGuide
     *
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyingGuide($index)
    {
        unset($this->buyingGuide[$index]);
    }

    /**
     * Gets as buyingGuide
     *
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Shopping\BuyingGuideType[]
     */
    public function getBuyingGuide()
    {
        return $this->buyingGuide;
    }

    /**
     * Sets a new buyingGuide
     *
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Shopping\BuyingGuideType[] $buyingGuide
     * @return self
     */
    public function setBuyingGuide(array $buyingGuide)
    {
        $this->buyingGuide = $buyingGuide;
        return $this;
    }

    /**
     * Gets as buyingGuideHub
     *
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @return string
     */
    public function getBuyingGuideHub()
    {
        return $this->buyingGuideHub;
    }

    /**
     * Sets a new buyingGuideHub
     *
     * <span class="tablenote"><b>Note: </b> <b>BuyingGuideDetailsType</b> and all of its elements are deprecated along with the <b>FindReviewsAndGuides</b> call.
     *  </span>
     *
     * @param string $buyingGuideHub
     * @return self
     */
    public function setBuyingGuideHub($buyingGuideHub)
    {
        $this->buyingGuideHub = $buyingGuideHub;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getBuyingGuide();
        if (null !== $value && [] !== $this->getBuyingGuide()) {
            $writer->write(array_map(function ($v) {return ["BuyingGuide" => $v];}, $value));
        }
        $value = $this->getBuyingGuideHub();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyingGuideHub", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingGuide');
        if (null !== $value) {
            $this->setBuyingGuide(array_map(function ($v) {return \Nogrod\eBaySDK\Shopping\BuyingGuideType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyingGuideHub');
        if (null !== $value) {
            $this->setBuyingGuideHub($value);
        }
    }
}
