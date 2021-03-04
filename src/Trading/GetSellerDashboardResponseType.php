<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellerDashboardResponseType
 *
 * The base response type for the <b>GetSellerDashboard</b> call. This call retrieves seller performance data, including seller standards level, Power Seller status, Buyer Satisfaction status, eBay Search standing, and any seller fee discounts.
 * XSD Type: GetSellerDashboardResponseType
 */
class GetSellerDashboardResponseType extends AbstractResponseType
{
    /**
     * Provides information about the visibility level you have earned for your
     *  listings. The higher your search standing rating, the higher your items
     *  will be placed in search results sorted by Best Match. Because your search
     *  standing rating is directly tied to your customer service record, this
     *  rating is an important way that eBay rewards you as a good seller--it
     *  encourages you to give buyers the best possible shopping experience.
     *  <br><br>
     *  This field is returned <b>only</b> for the following sites.
     *  <br><br>
     *  <table>
     *  <tr> <th>Site</th> <th>Id</th> </tr>
     *  <tr> <td>AU</td> <td>15</td> </tr>
     *  <tr> <td>BEFR</td> <td>23</td> </tr>
     *  <tr> <td>BENL</td> <td>123</td> </tr>
     *  <tr> <td>CA</td> <td>2</td> </tr>
     *  <tr> <td>ES</td> <td>186</td> </tr>
     *  <tr> <td>FR</td> <td>71</td> </tr>
     *  <tr> <td>IN</td> <td>203</td> </tr>
     *  <tr> <td>IT</td> <td>101</td> </tr>
     *  <tr> <td>MOTORS</td> <td>100</td> </tr>
     *  <tr> <td>NL</td> <td>146</td> </tr>
     *  <tr> <td>PL</td> <td>212</td> </tr>
     *  </table>
     *
     * @var \Nogrod\eBaySDK\Trading\SearchStandingDashboardType $searchStanding
     */
    private $searchStanding = null;

    /**
     * This container provides the percentage discount that the seller is eligible to receive on the Final Value Fee for each order line item. Top-Rated Sellers may be eligible for Final Value Fee discounts if their listings meet all requirements for the discount.
     *  <br><br>
     *  This container is still returned even if the seller is not receiving a Final Value Fee discount (returned as <code>0.0</code>)
     *
     * @var \Nogrod\eBaySDK\Trading\SellerFeeDiscountDashboardType $sellerFeeDiscount
     */
    private $sellerFeeDiscount = null;

    /**
     * This container provides the seller's PowerSeller status, as well as any informational alerts related to the seller's PowerSeller status. If the seller has not achieved Power Seller status, a value of <code>None</code> will be returned in the <b>PowerSellerStatus.Level</b> field. A <b>PowerSellerStatus.Alert</b> container will only be returned if there is an alert/message related to the seller's PowerSeller status.
     *  <br><br>
     *  For eBay Germany and France, you must be a registered business seller to
     *  see your Power Seller status.
     *
     * @var \Nogrod\eBaySDK\Trading\PowerSellerDashboardType $powerSellerStatus
     */
    private $powerSellerStatus = null;

    /**
     * This container is no longer returned in <b>GetSellerDashboard</b>.
     *
     * @var \Nogrod\eBaySDK\Trading\PolicyComplianceDashboardType $policyCompliance
     */
    private $policyCompliance = null;

    /**
     * This container provides the seller's Buyer Satisfaction status, as well as any informational alerts related to the seller's Buyer Satisfaction status. A <b>BuyerSatisfaction.Alert</b> container will only be returned if there is an alert/message related to the seller's Buyer Satisfaction status.
     *  <br><br>
     *  This field is not returned for all sites.
     *
     * @var \Nogrod\eBaySDK\Trading\BuyerSatisfactionDashboardType $buyerSatisfaction
     */
    private $buyerSatisfaction = null;

    /**
     * This container provides the seller's account status, as well as any informational alerts related to the seller's account status. A seller's account status can either be 'current' (all selling fees paid), 'past due' (seller is late paying selling fees), or 'on hold' (seller will be blocked from listing and is in danger of being suspended until selling fees are brought current). A <b>SellerAccount.Alert</b> container will only be returned if there is an alert/message related to the seller's account status.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerAccountDashboardType $sellerAccount
     */
    private $sellerAccount = null;

    /**
     * This container provides the seller's performance level, as well as any informational alerts related to the seller's performance level. A <b>Performance.Alert</b> container will only be returned if there is an alert/message related to the seller's performance level.
     *
     * @var \Nogrod\eBaySDK\Trading\PerformanceDashboardType[] $performance
     */
    private $performance = [
        
    ];

    /**
     * Gets as searchStanding
     *
     * Provides information about the visibility level you have earned for your
     *  listings. The higher your search standing rating, the higher your items
     *  will be placed in search results sorted by Best Match. Because your search
     *  standing rating is directly tied to your customer service record, this
     *  rating is an important way that eBay rewards you as a good seller--it
     *  encourages you to give buyers the best possible shopping experience.
     *  <br><br>
     *  This field is returned <b>only</b> for the following sites.
     *  <br><br>
     *  <table>
     *  <tr> <th>Site</th> <th>Id</th> </tr>
     *  <tr> <td>AU</td> <td>15</td> </tr>
     *  <tr> <td>BEFR</td> <td>23</td> </tr>
     *  <tr> <td>BENL</td> <td>123</td> </tr>
     *  <tr> <td>CA</td> <td>2</td> </tr>
     *  <tr> <td>ES</td> <td>186</td> </tr>
     *  <tr> <td>FR</td> <td>71</td> </tr>
     *  <tr> <td>IN</td> <td>203</td> </tr>
     *  <tr> <td>IT</td> <td>101</td> </tr>
     *  <tr> <td>MOTORS</td> <td>100</td> </tr>
     *  <tr> <td>NL</td> <td>146</td> </tr>
     *  <tr> <td>PL</td> <td>212</td> </tr>
     *  </table>
     *
     * @return \Nogrod\eBaySDK\Trading\SearchStandingDashboardType
     */
    public function getSearchStanding()
    {
        return $this->searchStanding;
    }

    /**
     * Sets a new searchStanding
     *
     * Provides information about the visibility level you have earned for your
     *  listings. The higher your search standing rating, the higher your items
     *  will be placed in search results sorted by Best Match. Because your search
     *  standing rating is directly tied to your customer service record, this
     *  rating is an important way that eBay rewards you as a good seller--it
     *  encourages you to give buyers the best possible shopping experience.
     *  <br><br>
     *  This field is returned <b>only</b> for the following sites.
     *  <br><br>
     *  <table>
     *  <tr> <th>Site</th> <th>Id</th> </tr>
     *  <tr> <td>AU</td> <td>15</td> </tr>
     *  <tr> <td>BEFR</td> <td>23</td> </tr>
     *  <tr> <td>BENL</td> <td>123</td> </tr>
     *  <tr> <td>CA</td> <td>2</td> </tr>
     *  <tr> <td>ES</td> <td>186</td> </tr>
     *  <tr> <td>FR</td> <td>71</td> </tr>
     *  <tr> <td>IN</td> <td>203</td> </tr>
     *  <tr> <td>IT</td> <td>101</td> </tr>
     *  <tr> <td>MOTORS</td> <td>100</td> </tr>
     *  <tr> <td>NL</td> <td>146</td> </tr>
     *  <tr> <td>PL</td> <td>212</td> </tr>
     *  </table>
     *
     * @param \Nogrod\eBaySDK\Trading\SearchStandingDashboardType $searchStanding
     * @return self
     */
    public function setSearchStanding(\Nogrod\eBaySDK\Trading\SearchStandingDashboardType $searchStanding)
    {
        $this->searchStanding = $searchStanding;
        return $this;
    }

    /**
     * Gets as sellerFeeDiscount
     *
     * This container provides the percentage discount that the seller is eligible to receive on the Final Value Fee for each order line item. Top-Rated Sellers may be eligible for Final Value Fee discounts if their listings meet all requirements for the discount.
     *  <br><br>
     *  This container is still returned even if the seller is not receiving a Final Value Fee discount (returned as <code>0.0</code>)
     *
     * @return \Nogrod\eBaySDK\Trading\SellerFeeDiscountDashboardType
     */
    public function getSellerFeeDiscount()
    {
        return $this->sellerFeeDiscount;
    }

    /**
     * Sets a new sellerFeeDiscount
     *
     * This container provides the percentage discount that the seller is eligible to receive on the Final Value Fee for each order line item. Top-Rated Sellers may be eligible for Final Value Fee discounts if their listings meet all requirements for the discount.
     *  <br><br>
     *  This container is still returned even if the seller is not receiving a Final Value Fee discount (returned as <code>0.0</code>)
     *
     * @param \Nogrod\eBaySDK\Trading\SellerFeeDiscountDashboardType $sellerFeeDiscount
     * @return self
     */
    public function setSellerFeeDiscount(\Nogrod\eBaySDK\Trading\SellerFeeDiscountDashboardType $sellerFeeDiscount)
    {
        $this->sellerFeeDiscount = $sellerFeeDiscount;
        return $this;
    }

    /**
     * Gets as powerSellerStatus
     *
     * This container provides the seller's PowerSeller status, as well as any informational alerts related to the seller's PowerSeller status. If the seller has not achieved Power Seller status, a value of <code>None</code> will be returned in the <b>PowerSellerStatus.Level</b> field. A <b>PowerSellerStatus.Alert</b> container will only be returned if there is an alert/message related to the seller's PowerSeller status.
     *  <br><br>
     *  For eBay Germany and France, you must be a registered business seller to
     *  see your Power Seller status.
     *
     * @return \Nogrod\eBaySDK\Trading\PowerSellerDashboardType
     */
    public function getPowerSellerStatus()
    {
        return $this->powerSellerStatus;
    }

    /**
     * Sets a new powerSellerStatus
     *
     * This container provides the seller's PowerSeller status, as well as any informational alerts related to the seller's PowerSeller status. If the seller has not achieved Power Seller status, a value of <code>None</code> will be returned in the <b>PowerSellerStatus.Level</b> field. A <b>PowerSellerStatus.Alert</b> container will only be returned if there is an alert/message related to the seller's PowerSeller status.
     *  <br><br>
     *  For eBay Germany and France, you must be a registered business seller to
     *  see your Power Seller status.
     *
     * @param \Nogrod\eBaySDK\Trading\PowerSellerDashboardType $powerSellerStatus
     * @return self
     */
    public function setPowerSellerStatus(\Nogrod\eBaySDK\Trading\PowerSellerDashboardType $powerSellerStatus)
    {
        $this->powerSellerStatus = $powerSellerStatus;
        return $this;
    }

    /**
     * Gets as policyCompliance
     *
     * This container is no longer returned in <b>GetSellerDashboard</b>.
     *
     * @return \Nogrod\eBaySDK\Trading\PolicyComplianceDashboardType
     */
    public function getPolicyCompliance()
    {
        return $this->policyCompliance;
    }

    /**
     * Sets a new policyCompliance
     *
     * This container is no longer returned in <b>GetSellerDashboard</b>.
     *
     * @param \Nogrod\eBaySDK\Trading\PolicyComplianceDashboardType $policyCompliance
     * @return self
     */
    public function setPolicyCompliance(\Nogrod\eBaySDK\Trading\PolicyComplianceDashboardType $policyCompliance)
    {
        $this->policyCompliance = $policyCompliance;
        return $this;
    }

    /**
     * Gets as buyerSatisfaction
     *
     * This container provides the seller's Buyer Satisfaction status, as well as any informational alerts related to the seller's Buyer Satisfaction status. A <b>BuyerSatisfaction.Alert</b> container will only be returned if there is an alert/message related to the seller's Buyer Satisfaction status.
     *  <br><br>
     *  This field is not returned for all sites.
     *
     * @return \Nogrod\eBaySDK\Trading\BuyerSatisfactionDashboardType
     */
    public function getBuyerSatisfaction()
    {
        return $this->buyerSatisfaction;
    }

    /**
     * Sets a new buyerSatisfaction
     *
     * This container provides the seller's Buyer Satisfaction status, as well as any informational alerts related to the seller's Buyer Satisfaction status. A <b>BuyerSatisfaction.Alert</b> container will only be returned if there is an alert/message related to the seller's Buyer Satisfaction status.
     *  <br><br>
     *  This field is not returned for all sites.
     *
     * @param \Nogrod\eBaySDK\Trading\BuyerSatisfactionDashboardType $buyerSatisfaction
     * @return self
     */
    public function setBuyerSatisfaction(\Nogrod\eBaySDK\Trading\BuyerSatisfactionDashboardType $buyerSatisfaction)
    {
        $this->buyerSatisfaction = $buyerSatisfaction;
        return $this;
    }

    /**
     * Gets as sellerAccount
     *
     * This container provides the seller's account status, as well as any informational alerts related to the seller's account status. A seller's account status can either be 'current' (all selling fees paid), 'past due' (seller is late paying selling fees), or 'on hold' (seller will be blocked from listing and is in danger of being suspended until selling fees are brought current). A <b>SellerAccount.Alert</b> container will only be returned if there is an alert/message related to the seller's account status.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerAccountDashboardType
     */
    public function getSellerAccount()
    {
        return $this->sellerAccount;
    }

    /**
     * Sets a new sellerAccount
     *
     * This container provides the seller's account status, as well as any informational alerts related to the seller's account status. A seller's account status can either be 'current' (all selling fees paid), 'past due' (seller is late paying selling fees), or 'on hold' (seller will be blocked from listing and is in danger of being suspended until selling fees are brought current). A <b>SellerAccount.Alert</b> container will only be returned if there is an alert/message related to the seller's account status.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerAccountDashboardType $sellerAccount
     * @return self
     */
    public function setSellerAccount(\Nogrod\eBaySDK\Trading\SellerAccountDashboardType $sellerAccount)
    {
        $this->sellerAccount = $sellerAccount;
        return $this;
    }

    /**
     * Adds as performance
     *
     * This container provides the seller's performance level, as well as any informational alerts related to the seller's performance level. A <b>Performance.Alert</b> container will only be returned if there is an alert/message related to the seller's performance level.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\PerformanceDashboardType $performance
     */
    public function addToPerformance(\Nogrod\eBaySDK\Trading\PerformanceDashboardType $performance)
    {
        $this->performance[] = $performance;
        return $this;
    }

    /**
     * isset performance
     *
     * This container provides the seller's performance level, as well as any informational alerts related to the seller's performance level. A <b>Performance.Alert</b> container will only be returned if there is an alert/message related to the seller's performance level.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerformance($index)
    {
        return isset($this->performance[$index]);
    }

    /**
     * unset performance
     *
     * This container provides the seller's performance level, as well as any informational alerts related to the seller's performance level. A <b>Performance.Alert</b> container will only be returned if there is an alert/message related to the seller's performance level.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerformance($index)
    {
        unset($this->performance[$index]);
    }

    /**
     * Gets as performance
     *
     * This container provides the seller's performance level, as well as any informational alerts related to the seller's performance level. A <b>Performance.Alert</b> container will only be returned if there is an alert/message related to the seller's performance level.
     *
     * @return \Nogrod\eBaySDK\Trading\PerformanceDashboardType[]
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * Sets a new performance
     *
     * This container provides the seller's performance level, as well as any informational alerts related to the seller's performance level. A <b>Performance.Alert</b> container will only be returned if there is an alert/message related to the seller's performance level.
     *
     * @param \Nogrod\eBaySDK\Trading\PerformanceDashboardType[] $performance
     * @return self
     */
    public function setPerformance(array $performance)
    {
        $this->performance = $performance;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSearchStanding();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SearchStanding", $value);
        }
        $value = $this->getSellerFeeDiscount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerFeeDiscount", $value);
        }
        $value = $this->getPowerSellerStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PowerSellerStatus", $value);
        }
        $value = $this->getPolicyCompliance();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PolicyCompliance", $value);
        }
        $value = $this->getBuyerSatisfaction();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BuyerSatisfaction", $value);
        }
        $value = $this->getSellerAccount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerAccount", $value);
        }
        $value = $this->getPerformance();
        if (null !== $value && !empty($this->getPerformance())) {
            $writer->write(array_map(function ($v) {
                return ["Performance" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SearchStanding');
        if (null !== $value) {
            $this->setSearchStanding(\Nogrod\eBaySDK\Trading\SearchStandingDashboardType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerFeeDiscount');
        if (null !== $value) {
            $this->setSellerFeeDiscount(\Nogrod\eBaySDK\Trading\SellerFeeDiscountDashboardType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PowerSellerStatus');
        if (null !== $value) {
            $this->setPowerSellerStatus(\Nogrod\eBaySDK\Trading\PowerSellerDashboardType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PolicyCompliance');
        if (null !== $value) {
            $this->setPolicyCompliance(\Nogrod\eBaySDK\Trading\PolicyComplianceDashboardType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerSatisfaction');
        if (null !== $value) {
            $this->setBuyerSatisfaction(\Nogrod\eBaySDK\Trading\BuyerSatisfactionDashboardType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerAccount');
        if (null !== $value) {
            $this->setSellerAccount(\Nogrod\eBaySDK\Trading\SellerAccountDashboardType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Performance', true);
        if (null !== $value && !empty($value)) {
            $this->setPerformance(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\PerformanceDashboardType::fromKeyValue($v);
            }, $value));
        }
    }
}
