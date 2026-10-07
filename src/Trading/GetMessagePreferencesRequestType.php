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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->sellerID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SellerID', null, (string) $value);
        }
        $value = $this->includeASQPreferences;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IncludeASQPreferences', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMessagePreferencesRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'SellerID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sellerID = $value;
                    }
                    return true;
                case 'IncludeASQPreferences':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->includeASQPreferences = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['SellerID'] = $this->sellerID;
        $data['IncludeASQPreferences'] = $this->includeASQPreferences;
        return $data;
    }
}
