<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TrustProviderAffiliationDetailsArrayType
 *
 * Container for a list of questions.
 * XSD Type: TrustProviderAffiliationDetailsArrayType
 */
class TrustProviderAffiliationDetailsArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Contains details about Seller to Trust Provider affiliations.
     *
     * @var \Nogrod\eBaySDK\MerchantData\TrustProviderAffiliationDetailsType[] $trustProviderAffiliation
     */
    private $trustProviderAffiliation = [
        
    ];

    /**
     * Adds as trustProviderAffiliation
     *
     * Contains details about Seller to Trust Provider affiliations.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\TrustProviderAffiliationDetailsType $trustProviderAffiliation
     */
    public function addToTrustProviderAffiliation(\Nogrod\eBaySDK\MerchantData\TrustProviderAffiliationDetailsType $trustProviderAffiliation)
    {
        $this->trustProviderAffiliation[] = $trustProviderAffiliation;
        return $this;
    }

    /**
     * isset trustProviderAffiliation
     *
     * Contains details about Seller to Trust Provider affiliations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrustProviderAffiliation($index)
    {
        return isset($this->trustProviderAffiliation[$index]);
    }

    /**
     * unset trustProviderAffiliation
     *
     * Contains details about Seller to Trust Provider affiliations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrustProviderAffiliation($index)
    {
        unset($this->trustProviderAffiliation[$index]);
    }

    /**
     * Gets as trustProviderAffiliation
     *
     * Contains details about Seller to Trust Provider affiliations.
     *
     * @return \Nogrod\eBaySDK\MerchantData\TrustProviderAffiliationDetailsType[]
     */
    public function getTrustProviderAffiliation()
    {
        return $this->trustProviderAffiliation;
    }

    /**
     * Sets a new trustProviderAffiliation
     *
     * Contains details about Seller to Trust Provider affiliations.
     *
     * @param \Nogrod\eBaySDK\MerchantData\TrustProviderAffiliationDetailsType[] $trustProviderAffiliation
     * @return self
     */
    public function setTrustProviderAffiliation(array $trustProviderAffiliation)
    {
        $this->trustProviderAffiliation = $trustProviderAffiliation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTrustProviderAffiliation();
        if (null !== $value && !empty($this->getTrustProviderAffiliation())) {
            $writer->write(array_map(function ($v) {
                return ["TrustProviderAffiliation" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TrustProviderAffiliation', true);
        if (null !== $value && !empty($value)) {
            $this->setTrustProviderAffiliation(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\TrustProviderAffiliationDetailsType::fromKeyValue($v);
            }, $value));
        }
    }
}
