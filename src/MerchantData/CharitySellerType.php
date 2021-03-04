<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharitySellerType
 *
 * Contains information about one seller associated with a registered eBay for Charity nonprofit organization.
 * XSD Type: CharitySellerType
 */
class CharitySellerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the status of the seller's charity seller account.
     *
     * @var string $charitySellerStatus
     */
    private $charitySellerStatus = null;

    /**
     * Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     *
     * @var \Nogrod\eBaySDK\MerchantData\CharityAffiliationType[] $charityAffiliation
     */
    private $charityAffiliation = [
        
    ];

    /**
     * Indicates if the seller has accepted the PayPal Giving Fund Terms and Conditions.
     *
     * @var bool $termsAndConditionsAccepted
     */
    private $termsAndConditionsAccepted = null;

    /**
     * Gets as charitySellerStatus
     *
     * Indicates the status of the seller's charity seller account.
     *
     * @return string
     */
    public function getCharitySellerStatus()
    {
        return $this->charitySellerStatus;
    }

    /**
     * Sets a new charitySellerStatus
     *
     * Indicates the status of the seller's charity seller account.
     *
     * @param string $charitySellerStatus
     * @return self
     */
    public function setCharitySellerStatus($charitySellerStatus)
    {
        $this->charitySellerStatus = $charitySellerStatus;
        return $this;
    }

    /**
     * Adds as charityAffiliation
     *
     * Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\CharityAffiliationType $charityAffiliation
     */
    public function addToCharityAffiliation(\Nogrod\eBaySDK\MerchantData\CharityAffiliationType $charityAffiliation)
    {
        $this->charityAffiliation[] = $charityAffiliation;
        return $this;
    }

    /**
     * isset charityAffiliation
     *
     * Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharityAffiliation($index)
    {
        return isset($this->charityAffiliation[$index]);
    }

    /**
     * unset charityAffiliation
     *
     * Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharityAffiliation($index)
    {
        unset($this->charityAffiliation[$index]);
    }

    /**
     * Gets as charityAffiliation
     *
     * Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     *
     * @return \Nogrod\eBaySDK\MerchantData\CharityAffiliationType[]
     */
    public function getCharityAffiliation()
    {
        return $this->charityAffiliation;
    }

    /**
     * Sets a new charityAffiliation
     *
     * Indicates the affiliation status for nonprofit charity organizations registered with the PayPal Giving Fund.
     *
     * @param \Nogrod\eBaySDK\MerchantData\CharityAffiliationType[] $charityAffiliation
     * @return self
     */
    public function setCharityAffiliation(array $charityAffiliation)
    {
        $this->charityAffiliation = $charityAffiliation;
        return $this;
    }

    /**
     * Gets as termsAndConditionsAccepted
     *
     * Indicates if the seller has accepted the PayPal Giving Fund Terms and Conditions.
     *
     * @return bool
     */
    public function getTermsAndConditionsAccepted()
    {
        return $this->termsAndConditionsAccepted;
    }

    /**
     * Sets a new termsAndConditionsAccepted
     *
     * Indicates if the seller has accepted the PayPal Giving Fund Terms and Conditions.
     *
     * @param bool $termsAndConditionsAccepted
     * @return self
     */
    public function setTermsAndConditionsAccepted($termsAndConditionsAccepted)
    {
        $this->termsAndConditionsAccepted = $termsAndConditionsAccepted;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCharitySellerStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharitySellerStatus", $value);
        }
        $value = $this->getCharityAffiliation();
        if (null !== $value && !empty($this->getCharityAffiliation())) {
            $writer->write(array_map(function ($v) {
                return ["CharityAffiliation" => $v];
            }, $value));
        }
        $value = $this->getTermsAndConditionsAccepted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TermsAndConditionsAccepted", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharitySellerStatus');
        if (null !== $value) {
            $this->setCharitySellerStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityAffiliation', true);
        if (null !== $value && !empty($value)) {
            $this->setCharityAffiliation(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\CharityAffiliationType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TermsAndConditionsAccepted');
        if (null !== $value) {
            $this->setTermsAndConditionsAccepted($value);
        }
    }
}
