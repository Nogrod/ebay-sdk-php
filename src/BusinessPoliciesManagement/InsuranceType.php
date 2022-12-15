<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing InsuranceType
 *
 * Type defining the <b>insurance</b> container, which contains the type and cost of domestic and international shipping insurance. The <b>insurance</b> container is required in the shipping policy if the seller offers shipping insurance to domestic and/or international buyers. Only sellers listing on the AU, FR, and IT sites can offer shipping insurance directly to the buyer.
 * XSD Type: Insurance
 */
class InsuranceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This dollar value indicates the cost to the buyer to purchase domestic shipping insurance for the item. This field is only applicable to AU, FR, or IT sellers. This field is conditionally required if the seller is offering domestic shipping insurance to the buyer, and the <b>domesticInsuranceOption</b> is 'Optional' or 'Required'.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $domesticInsuranceFee
     */
    private $domesticInsuranceFee = null;

    /**
     * This string value indicates the seller's policy on offering domestic shipping insurance to the buyer. Valid values include:
     *  <ul>
     *  <li><b>IncludedInShippingHandling</b>: the seller is not charging the buyer separately for shipping insurance costs, as the cost of shipping insurance is already included in the base shipping cost for the item</li>
     *  <li><b>NotOffered</b>: the seller does not offer shipping insurance to the buyer</li>
     *  <li><b>Optional</b>: purchasing shipping insurance for the item is at the discretion of the buyer</li> <li><b>Required</b>: the seller requires that the buyer purchase shipping insurance for the item</li>
     *  </ul>
     *  This field is required if an AU, FR, or IT seller is offering domestic shipping insurance to the buyer.
     *
     * @var string $domesticInsuranceOption
     */
    private $domesticInsuranceOption = null;

    /**
     * This string value indicates the seller's policy on offering international shipping insurance to the buyer. Valid values
     *  include:
     *  <ul>
     *  <li><b>IncludedInShippingHandling</b>: the seller is not charging the buyer separately for shipping
     *  insurance costs, as the cost of shipping insurance is already included in the base shipping cost for the item</li>
     *  <li><b>NotOffered</b>: the seller does not offer shipping insurance to the buyer</li>
     *  <li><b>Optional</b>: purchasing shipping insurance for the item is at the discretion of the buyer</li>
     *  <li><b>Required</b>: the seller requires that the buyer purchase shipping insurance for the item</li>
     *  </ul>
     *  This field is required if an AU, FR, or IT seller is offering international shipping insurance to the buyer.
     *
     * @var string $intlInsuranceOption
     */
    private $intlInsuranceOption = null;

    /**
     * This dollar value indicates the cost to the buyer to purchase international shipping insurance for the item. This field is only applicable to AU, FR, or IT sellers. This field is conditionally required if the seller is offering international shipping insurance to the buyer, and the <b>internationalInsuranceOption</b> is 'Optional' or 'Required'.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $intlInsuranceFee
     */
    private $intlInsuranceFee = null;

    /**
     * Gets as domesticInsuranceFee
     *
     * This dollar value indicates the cost to the buyer to purchase domestic shipping insurance for the item. This field is only applicable to AU, FR, or IT sellers. This field is conditionally required if the seller is offering domestic shipping insurance to the buyer, and the <b>domesticInsuranceOption</b> is 'Optional' or 'Required'.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getDomesticInsuranceFee()
    {
        return $this->domesticInsuranceFee;
    }

    /**
     * Sets a new domesticInsuranceFee
     *
     * This dollar value indicates the cost to the buyer to purchase domestic shipping insurance for the item. This field is only applicable to AU, FR, or IT sellers. This field is conditionally required if the seller is offering domestic shipping insurance to the buyer, and the <b>domesticInsuranceOption</b> is 'Optional' or 'Required'.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $domesticInsuranceFee
     * @return self
     */
    public function setDomesticInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $domesticInsuranceFee)
    {
        $this->domesticInsuranceFee = $domesticInsuranceFee;
        return $this;
    }

    /**
     * Gets as domesticInsuranceOption
     *
     * This string value indicates the seller's policy on offering domestic shipping insurance to the buyer. Valid values include:
     *  <ul>
     *  <li><b>IncludedInShippingHandling</b>: the seller is not charging the buyer separately for shipping insurance costs, as the cost of shipping insurance is already included in the base shipping cost for the item</li>
     *  <li><b>NotOffered</b>: the seller does not offer shipping insurance to the buyer</li>
     *  <li><b>Optional</b>: purchasing shipping insurance for the item is at the discretion of the buyer</li> <li><b>Required</b>: the seller requires that the buyer purchase shipping insurance for the item</li>
     *  </ul>
     *  This field is required if an AU, FR, or IT seller is offering domestic shipping insurance to the buyer.
     *
     * @return string
     */
    public function getDomesticInsuranceOption()
    {
        return $this->domesticInsuranceOption;
    }

    /**
     * Sets a new domesticInsuranceOption
     *
     * This string value indicates the seller's policy on offering domestic shipping insurance to the buyer. Valid values include:
     *  <ul>
     *  <li><b>IncludedInShippingHandling</b>: the seller is not charging the buyer separately for shipping insurance costs, as the cost of shipping insurance is already included in the base shipping cost for the item</li>
     *  <li><b>NotOffered</b>: the seller does not offer shipping insurance to the buyer</li>
     *  <li><b>Optional</b>: purchasing shipping insurance for the item is at the discretion of the buyer</li> <li><b>Required</b>: the seller requires that the buyer purchase shipping insurance for the item</li>
     *  </ul>
     *  This field is required if an AU, FR, or IT seller is offering domestic shipping insurance to the buyer.
     *
     * @param string $domesticInsuranceOption
     * @return self
     */
    public function setDomesticInsuranceOption($domesticInsuranceOption)
    {
        $this->domesticInsuranceOption = $domesticInsuranceOption;
        return $this;
    }

    /**
     * Gets as intlInsuranceOption
     *
     * This string value indicates the seller's policy on offering international shipping insurance to the buyer. Valid values
     *  include:
     *  <ul>
     *  <li><b>IncludedInShippingHandling</b>: the seller is not charging the buyer separately for shipping
     *  insurance costs, as the cost of shipping insurance is already included in the base shipping cost for the item</li>
     *  <li><b>NotOffered</b>: the seller does not offer shipping insurance to the buyer</li>
     *  <li><b>Optional</b>: purchasing shipping insurance for the item is at the discretion of the buyer</li>
     *  <li><b>Required</b>: the seller requires that the buyer purchase shipping insurance for the item</li>
     *  </ul>
     *  This field is required if an AU, FR, or IT seller is offering international shipping insurance to the buyer.
     *
     * @return string
     */
    public function getIntlInsuranceOption()
    {
        return $this->intlInsuranceOption;
    }

    /**
     * Sets a new intlInsuranceOption
     *
     * This string value indicates the seller's policy on offering international shipping insurance to the buyer. Valid values
     *  include:
     *  <ul>
     *  <li><b>IncludedInShippingHandling</b>: the seller is not charging the buyer separately for shipping
     *  insurance costs, as the cost of shipping insurance is already included in the base shipping cost for the item</li>
     *  <li><b>NotOffered</b>: the seller does not offer shipping insurance to the buyer</li>
     *  <li><b>Optional</b>: purchasing shipping insurance for the item is at the discretion of the buyer</li>
     *  <li><b>Required</b>: the seller requires that the buyer purchase shipping insurance for the item</li>
     *  </ul>
     *  This field is required if an AU, FR, or IT seller is offering international shipping insurance to the buyer.
     *
     * @param string $intlInsuranceOption
     * @return self
     */
    public function setIntlInsuranceOption($intlInsuranceOption)
    {
        $this->intlInsuranceOption = $intlInsuranceOption;
        return $this;
    }

    /**
     * Gets as intlInsuranceFee
     *
     * This dollar value indicates the cost to the buyer to purchase international shipping insurance for the item. This field is only applicable to AU, FR, or IT sellers. This field is conditionally required if the seller is offering international shipping insurance to the buyer, and the <b>internationalInsuranceOption</b> is 'Optional' or 'Required'.
     *
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType
     */
    public function getIntlInsuranceFee()
    {
        return $this->intlInsuranceFee;
    }

    /**
     * Sets a new intlInsuranceFee
     *
     * This dollar value indicates the cost to the buyer to purchase international shipping insurance for the item. This field is only applicable to AU, FR, or IT sellers. This field is conditionally required if the seller is offering international shipping insurance to the buyer, and the <b>internationalInsuranceOption</b> is 'Optional' or 'Required'.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $intlInsuranceFee
     * @return self
     */
    public function setIntlInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType $intlInsuranceFee)
    {
        $this->intlInsuranceFee = $intlInsuranceFee;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDomesticInsuranceFee();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceFee", $value);
        }
        $value = $this->getDomesticInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceOption", $value);
        }
        $value = $this->getIntlInsuranceOption();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceOption", $value);
        }
        $value = $this->getIntlInsuranceFee();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceFee", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceFee');
        if (null !== $value) {
            $this->setDomesticInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domesticInsuranceOption');
        if (null !== $value) {
            $this->setDomesticInsuranceOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceOption');
        if (null !== $value) {
            $this->setIntlInsuranceOption($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}intlInsuranceFee');
        if (null !== $value) {
            $this->setIntlInsuranceFee(\Nogrod\eBaySDK\BusinessPoliciesManagement\AmountType::fromKeyValue($value));
        }
    }
}
