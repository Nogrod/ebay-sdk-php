<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingRecommendationsType
 *
 * Type defining the <b>ListingRecommendations</b> container that is
 *  conditionally returned in all Add/Revise/Relist/Verify API calls. A
 *  <b>ListingRecommendations</b> container consists of one or
 *  more <b>Recommendation</b> containers, and each
 *  <b>Recommendation</b> container provides a message to the seller on how a
 *  listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping.
 *  <br><br>
 *  The <b>ListingRecommendations</b> container is only returned if the
 *  <b>IncludeRecommendations</b> flag is included and set to 'true' in the
 *  API call request.
 * XSD Type: ListingRecommendationsType
 */
class ListingRecommendationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned for each listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ListingRecommendationType[] $recommendation
     */
    private $recommendation = [

    ];

    /**
     * Adds as recommendation
     *
     * Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned for each listing.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ListingRecommendationType $recommendation
     */
    public function addToRecommendation(\Nogrod\eBaySDK\MerchantData\ListingRecommendationType $recommendation)
    {
        $this->recommendation[] = $recommendation;
        return $this;
    }

    /**
     * isset recommendation
     *
     * Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned for each listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecommendation($index)
    {
        return isset($this->recommendation[$index]);
    }

    /**
     * unset recommendation
     *
     * Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned for each listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecommendation($index)
    {
        unset($this->recommendation[$index]);
    }

    /**
     * Gets as recommendation
     *
     * Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned for each listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ListingRecommendationType[]
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * Sets a new recommendation
     *
     * Each <b>Recommendation</b> container provides a message to the seller on how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping. <br><br> One or more <b>Recommendation</b> containers can be returned for each listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ListingRecommendationType[] $recommendation
     * @return self
     */
    public function setRecommendation(array $recommendation)
    {
        $this->recommendation = $recommendation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRecommendation();
        if (null !== $value && !empty($this->getRecommendation())) {
            $writer->write(array_map(function ($v) {
                return ["Recommendation" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Recommendation', true);
        if (null !== $value && !empty($value)) {
            $this->setRecommendation(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ListingRecommendationType::fromKeyValue($v);
            }, $value));
        }
    }
}
