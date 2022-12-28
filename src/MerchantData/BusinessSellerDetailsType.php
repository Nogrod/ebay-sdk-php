<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BusinessSellerDetailsType
 *
 * Type used by the <b>BusinessSellerDetails</b> container, which is returned in an <b>Item</b> node if the item's seller is registered on eBay as a Business Seller.
 * XSD Type: BusinessSellerDetailsType
 */
class BusinessSellerDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field shows the address on file for the Business Seller.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $address
     */
    private $address = null;

    /**
     * This field shows the Fax number on file for the Business Seller. This field is only returned if known and available.
     *
     * @var string $fax
     */
    private $fax = null;

    /**
     * This field shows the email address on file for the Business Seller.
     *
     * @var string $email
     */
    private $email = null;

    /**
     * This field shows any additional contact for the Business Seller in free-form text. This field is only returned if known and available.
     *
     * @var string $additionalContactInformation
     */
    private $additionalContactInformation = null;

    /**
     * This field shows the Trade Registration Number for the Business Seller.
     *
     * @var string $tradeRegistrationNumber
     */
    private $tradeRegistrationNumber = null;

    /**
     * This boolean field is returned as <code>true</code> if the Business Seller provides legal invoices to buyers.
     *
     * @var bool $legalInvoice
     */
    private $legalInvoice = null;

    /**
     * This free-form text field provides the Business Seller's terms and conditions for doing business.
     *
     * @var string $termsAndConditions
     */
    private $termsAndConditions = null;

    /**
     * This container provides Value-Added Tax (VAT) details for the Business Seller, including the seller's VAT ID and the VAT percentage rate applicable to the item. VAT is similar to a sales and/or consumption tax, and it is only applicable to sellers selling on European sites.
     *
     * @var \Nogrod\eBaySDK\MerchantData\VATDetailsType $vATDetails
     */
    private $vATDetails = null;

    /**
     * Gets as address
     *
     * This field shows the address on file for the Business Seller.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * This field shows the address on file for the Business Seller.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $address
     * @return self
     */
    public function setAddress(\Nogrod\eBaySDK\MerchantData\AddressType $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as fax
     *
     * This field shows the Fax number on file for the Business Seller. This field is only returned if known and available.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * This field shows the Fax number on file for the Business Seller. This field is only returned if known and available.
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as email
     *
     * This field shows the email address on file for the Business Seller.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * This field shows the email address on file for the Business Seller.
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as additionalContactInformation
     *
     * This field shows any additional contact for the Business Seller in free-form text. This field is only returned if known and available.
     *
     * @return string
     */
    public function getAdditionalContactInformation()
    {
        return $this->additionalContactInformation;
    }

    /**
     * Sets a new additionalContactInformation
     *
     * This field shows any additional contact for the Business Seller in free-form text. This field is only returned if known and available.
     *
     * @param string $additionalContactInformation
     * @return self
     */
    public function setAdditionalContactInformation($additionalContactInformation)
    {
        $this->additionalContactInformation = $additionalContactInformation;
        return $this;
    }

    /**
     * Gets as tradeRegistrationNumber
     *
     * This field shows the Trade Registration Number for the Business Seller.
     *
     * @return string
     */
    public function getTradeRegistrationNumber()
    {
        return $this->tradeRegistrationNumber;
    }

    /**
     * Sets a new tradeRegistrationNumber
     *
     * This field shows the Trade Registration Number for the Business Seller.
     *
     * @param string $tradeRegistrationNumber
     * @return self
     */
    public function setTradeRegistrationNumber($tradeRegistrationNumber)
    {
        $this->tradeRegistrationNumber = $tradeRegistrationNumber;
        return $this;
    }

    /**
     * Gets as legalInvoice
     *
     * This boolean field is returned as <code>true</code> if the Business Seller provides legal invoices to buyers.
     *
     * @return bool
     */
    public function getLegalInvoice()
    {
        return $this->legalInvoice;
    }

    /**
     * Sets a new legalInvoice
     *
     * This boolean field is returned as <code>true</code> if the Business Seller provides legal invoices to buyers.
     *
     * @param bool $legalInvoice
     * @return self
     */
    public function setLegalInvoice($legalInvoice)
    {
        $this->legalInvoice = $legalInvoice;
        return $this;
    }

    /**
     * Gets as termsAndConditions
     *
     * This free-form text field provides the Business Seller's terms and conditions for doing business.
     *
     * @return string
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    /**
     * Sets a new termsAndConditions
     *
     * This free-form text field provides the Business Seller's terms and conditions for doing business.
     *
     * @param string $termsAndConditions
     * @return self
     */
    public function setTermsAndConditions($termsAndConditions)
    {
        $this->termsAndConditions = $termsAndConditions;
        return $this;
    }

    /**
     * Gets as vATDetails
     *
     * This container provides Value-Added Tax (VAT) details for the Business Seller, including the seller's VAT ID and the VAT percentage rate applicable to the item. VAT is similar to a sales and/or consumption tax, and it is only applicable to sellers selling on European sites.
     *
     * @return \Nogrod\eBaySDK\MerchantData\VATDetailsType
     */
    public function getVATDetails()
    {
        return $this->vATDetails;
    }

    /**
     * Sets a new vATDetails
     *
     * This container provides Value-Added Tax (VAT) details for the Business Seller, including the seller's VAT ID and the VAT percentage rate applicable to the item. VAT is similar to a sales and/or consumption tax, and it is only applicable to sellers selling on European sites.
     *
     * @param \Nogrod\eBaySDK\MerchantData\VATDetailsType $vATDetails
     * @return self
     */
    public function setVATDetails(\Nogrod\eBaySDK\MerchantData\VATDetailsType $vATDetails)
    {
        $this->vATDetails = $vATDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Address", $value);
        }
        $value = $this->getFax();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Fax", $value);
        }
        $value = $this->getEmail();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Email", $value);
        }
        $value = $this->getAdditionalContactInformation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AdditionalContactInformation", $value);
        }
        $value = $this->getTradeRegistrationNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TradeRegistrationNumber", $value);
        }
        $value = $this->getLegalInvoice();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LegalInvoice", $value);
        }
        $value = $this->getTermsAndConditions();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TermsAndConditions", $value);
        }
        $value = $this->getVATDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VATDetails", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Address');
        if (null !== $value) {
            $this->setAddress(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Fax');
        if (null !== $value) {
            $this->setFax($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Email');
        if (null !== $value) {
            $this->setEmail($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AdditionalContactInformation');
        if (null !== $value) {
            $this->setAdditionalContactInformation($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TradeRegistrationNumber');
        if (null !== $value) {
            $this->setTradeRegistrationNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LegalInvoice');
        if (null !== $value) {
            $this->setLegalInvoice($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TermsAndConditions');
        if (null !== $value) {
            $this->setTermsAndConditions($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VATDetails');
        if (null !== $value) {
            $this->setVATDetails(\Nogrod\eBaySDK\MerchantData\VATDetailsType::fromKeyValue($value));
        }
    }
}
