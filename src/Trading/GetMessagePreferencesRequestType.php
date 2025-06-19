<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMessagePreferencesRequestType
 *
 * Returns a seller's Ask Seller a Question (ASQ) subjects, each in
 *  its own <b>Subject</b> field.
 * XSD Type: GetMessagePreferencesRequestType
 */
class GetMessagePreferencesRequestType extends AbstractRequestType
{
    /**
     * The eBay user ID of the seller to retrieve ASQ subjects for. A user can retrieve their own ASQ subjects or those of another eBay user with a seller account.
     *
     * @var string $sellerID
     */
    private $sellerID = null;

    /**
     * This field must be included and set to <code>true</code> to retrieve the ASQ subjects for the specified eBay user.
     *
     * @var bool $includeASQPreferences
     */
    private $includeASQPreferences = null;

    /**
     * Gets as sellerID
     *
     * The eBay user ID of the seller to retrieve ASQ subjects for. A user can retrieve their own ASQ subjects or those of another eBay user with a seller account.
     *
     * @return string
     */
    public function getSellerID()
    {
        return $this->sellerID;
    }

    /**
     * Sets a new sellerID
     *
     * The eBay user ID of the seller to retrieve ASQ subjects for. A user can retrieve their own ASQ subjects or those of another eBay user with a seller account.
     *
     * @param string $sellerID
     * @return self
     */
    public function setSellerID($sellerID)
    {
        $this->sellerID = $sellerID;
        return $this;
    }

    /**
     * Gets as includeASQPreferences
     *
     * This field must be included and set to <code>true</code> to retrieve the ASQ subjects for the specified eBay user.
     *
     * @return bool
     */
    public function getIncludeASQPreferences()
    {
        return $this->includeASQPreferences;
    }

    /**
     * Sets a new includeASQPreferences
     *
     * This field must be included and set to <code>true</code> to retrieve the ASQ subjects for the specified eBay user.
     *
     * @param bool $includeASQPreferences
     * @return self
     */
    public function setIncludeASQPreferences($includeASQPreferences)
    {
        $this->includeASQPreferences = $includeASQPreferences;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellerID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SellerID", $value);
        }
        $value = $this->getIncludeASQPreferences();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IncludeASQPreferences", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetMessagePreferencesRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}SellerID');
        if (null !== $value) {
            $this->setSellerID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}IncludeASQPreferences');
        if (null !== $value) {
            $this->setIncludeASQPreferences(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
