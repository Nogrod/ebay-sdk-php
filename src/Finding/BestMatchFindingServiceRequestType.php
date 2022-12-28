<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BestMatchFindingServiceRequestType
 *
 * This is the base request container for all Finding Service operations.
 * XSD Type: BestMatchFindingServiceRequest
 */
class BestMatchFindingServiceRequestType extends BaseServiceRequestType
{
    /**
     * Controls the pagination of the result set. Child elements specify the
     *  maximum number of item listings to return per call and the page of
     *  data to return. Controls the number of listings returned in the
     *  response, but does not specify the details to return for each
     *  listing.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  No more than 10,000 items can be retrieved for a given search,
     *  regardless of how many matches are found. This limit is enforced
     *  by the maximum page number allowed (100) and the maximum entries per
     *  page allowed (100). </span>
     *
     * @var \Nogrod\eBaySDK\Finding\PaginationInputType $paginationInput
     */
    private $paginationInput = null;

    /**
     * The postal code of the buyer. This is used as the basis for proximity
     *  searches as well as local searches.
     *  <br><br>
     *  A proximity search requires <b
     *  class="con">buyerPostalCode</b> and a <b
     *  class="con">MaxDistance</b> item filter.
     *  A local search requires <b
     *  class="con">buyerPostalCode</b> and item filters for <b
     *  class="con">MaxDistance</b> and <b
     *  class="con">LocalSearch</b>.
     *  <br><br>
     *  <b>Note: </b> To get the accurate shipping cost for items
     *  listed using a rate table, you <i>must</i> include
     *  <b>buyerPostalCode</b> in the request.
     *
     * @var string $buyerPostalCode
     */
    private $buyerPostalCode = null;

    /**
     * Container for affiliate details. eBay uses the specified affiliate
     *  information to build a View Item URL and Product URL string with
     *  correctly formatted affiliate tracking information, which it returns
     *  in the response. You can publish these URLs, and if a user clicks
     *  them to access eBay, the respective affiliate might get a commission,
     *  depending on the user's actions.
     *
     * @var \Nogrod\eBaySDK\Finding\AffiliateType $affiliate
     */
    private $affiliate = null;

    /**
     * Gets as paginationInput
     *
     * Controls the pagination of the result set. Child elements specify the
     *  maximum number of item listings to return per call and the page of
     *  data to return. Controls the number of listings returned in the
     *  response, but does not specify the details to return for each
     *  listing.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  No more than 10,000 items can be retrieved for a given search,
     *  regardless of how many matches are found. This limit is enforced
     *  by the maximum page number allowed (100) and the maximum entries per
     *  page allowed (100). </span>
     *
     * @return \Nogrod\eBaySDK\Finding\PaginationInputType
     */
    public function getPaginationInput()
    {
        return $this->paginationInput;
    }

    /**
     * Sets a new paginationInput
     *
     * Controls the pagination of the result set. Child elements specify the
     *  maximum number of item listings to return per call and the page of
     *  data to return. Controls the number of listings returned in the
     *  response, but does not specify the details to return for each
     *  listing.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  No more than 10,000 items can be retrieved for a given search,
     *  regardless of how many matches are found. This limit is enforced
     *  by the maximum page number allowed (100) and the maximum entries per
     *  page allowed (100). </span>
     *
     * @param \Nogrod\eBaySDK\Finding\PaginationInputType $paginationInput
     * @return self
     */
    public function setPaginationInput(\Nogrod\eBaySDK\Finding\PaginationInputType $paginationInput)
    {
        $this->paginationInput = $paginationInput;
        return $this;
    }

    /**
     * Gets as buyerPostalCode
     *
     * The postal code of the buyer. This is used as the basis for proximity
     *  searches as well as local searches.
     *  <br><br>
     *  A proximity search requires <b
     *  class="con">buyerPostalCode</b> and a <b
     *  class="con">MaxDistance</b> item filter.
     *  A local search requires <b
     *  class="con">buyerPostalCode</b> and item filters for <b
     *  class="con">MaxDistance</b> and <b
     *  class="con">LocalSearch</b>.
     *  <br><br>
     *  <b>Note: </b> To get the accurate shipping cost for items
     *  listed using a rate table, you <i>must</i> include
     *  <b>buyerPostalCode</b> in the request.
     *
     * @return string
     */
    public function getBuyerPostalCode()
    {
        return $this->buyerPostalCode;
    }

    /**
     * Sets a new buyerPostalCode
     *
     * The postal code of the buyer. This is used as the basis for proximity
     *  searches as well as local searches.
     *  <br><br>
     *  A proximity search requires <b
     *  class="con">buyerPostalCode</b> and a <b
     *  class="con">MaxDistance</b> item filter.
     *  A local search requires <b
     *  class="con">buyerPostalCode</b> and item filters for <b
     *  class="con">MaxDistance</b> and <b
     *  class="con">LocalSearch</b>.
     *  <br><br>
     *  <b>Note: </b> To get the accurate shipping cost for items
     *  listed using a rate table, you <i>must</i> include
     *  <b>buyerPostalCode</b> in the request.
     *
     * @param string $buyerPostalCode
     * @return self
     */
    public function setBuyerPostalCode($buyerPostalCode)
    {
        $this->buyerPostalCode = $buyerPostalCode;
        return $this;
    }

    /**
     * Gets as affiliate
     *
     * Container for affiliate details. eBay uses the specified affiliate
     *  information to build a View Item URL and Product URL string with
     *  correctly formatted affiliate tracking information, which it returns
     *  in the response. You can publish these URLs, and if a user clicks
     *  them to access eBay, the respective affiliate might get a commission,
     *  depending on the user's actions.
     *
     * @return \Nogrod\eBaySDK\Finding\AffiliateType
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }

    /**
     * Sets a new affiliate
     *
     * Container for affiliate details. eBay uses the specified affiliate
     *  information to build a View Item URL and Product URL string with
     *  correctly formatted affiliate tracking information, which it returns
     *  in the response. You can publish these URLs, and if a user clicks
     *  them to access eBay, the respective affiliate might get a commission,
     *  depending on the user's actions.
     *
     * @param \Nogrod\eBaySDK\Finding\AffiliateType $affiliate
     * @return self
     */
    public function setAffiliate(\Nogrod\eBaySDK\Finding\AffiliateType $affiliate)
    {
        $this->affiliate = $affiliate;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getPaginationInput();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}paginationInput", $value);
        }
        $value = $this->getBuyerPostalCode();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}buyerPostalCode", $value);
        }
        $value = $this->getAffiliate();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}affiliate", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}paginationInput');
        if (null !== $value) {
            $this->setPaginationInput(\Nogrod\eBaySDK\Finding\PaginationInputType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}buyerPostalCode');
        if (null !== $value) {
            $this->setBuyerPostalCode($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}affiliate');
        if (null !== $value) {
            $this->setAffiliate(\Nogrod\eBaySDK\Finding\AffiliateType::fromKeyValue($value));
        }
    }
}
