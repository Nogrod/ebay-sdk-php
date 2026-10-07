<?php

namespace Nogrod\eBaySDK\Trading;

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
     * @var \Nogrod\eBaySDK\Trading\AddressType $address
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
     * @var \Nogrod\eBaySDK\Trading\VATDetailsType $vATDetails
     */
    private $vATDetails = null;

    /**
     * Gets as address
     *
     * This field shows the address on file for the Business Seller.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
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
     * @param \Nogrod\eBaySDK\Trading\AddressType $address
     * @return self
     */
    public function setAddress(\Nogrod\eBaySDK\Trading\AddressType $address)
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
     * @return \Nogrod\eBaySDK\Trading\VATDetailsType
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
     * @param \Nogrod\eBaySDK\Trading\VATDetailsType $vATDetails
     * @return self
     */
    public function setVATDetails(\Nogrod\eBaySDK\Trading\VATDetailsType $vATDetails)
    {
        $this->vATDetails = $vATDetails;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->address;
        if (null !== $value) {
            $writer->startElementNs(null, 'Address', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->fax;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Fax', null, (string) $value);
        }
        $value = $this->email;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Email', null, (string) $value);
        }
        $value = $this->additionalContactInformation;
        if (null !== $value) {
            $writer->writeElementNs(null, 'AdditionalContactInformation', null, (string) $value);
        }
        $value = $this->tradeRegistrationNumber;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TradeRegistrationNumber', null, (string) $value);
        }
        $value = $this->legalInvoice;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LegalInvoice', null, ($value ? 'true' : 'false'));
        }
        $value = $this->termsAndConditions;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TermsAndConditions', null, (string) $value);
        }
        $value = $this->vATDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'VATDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\BusinessSellerDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Address':
                    $this->address = \Nogrod\eBaySDK\Trading\AddressType::xmlRead($reader);
                    return true;
                case 'Fax':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->fax = $value;
                    }
                    return true;
                case 'Email':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->email = $value;
                    }
                    return true;
                case 'AdditionalContactInformation':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->additionalContactInformation = $value;
                    }
                    return true;
                case 'TradeRegistrationNumber':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->tradeRegistrationNumber = $value;
                    }
                    return true;
                case 'LegalInvoice':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->legalInvoice = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'TermsAndConditions':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->termsAndConditions = $value;
                    }
                    return true;
                case 'VATDetails':
                    $this->vATDetails = \Nogrod\eBaySDK\Trading\VATDetailsType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
