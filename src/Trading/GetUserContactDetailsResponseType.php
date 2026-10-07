<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserContactDetailsResponseType
 *
 * Returns contact information to a seller for both bidders
 *  and users who have made offers (via Best Offer) during
 *  an active listing.
 * XSD Type: GetUserContactDetailsResponseType
 */
class GetUserContactDetailsResponseType extends AbstractResponseType
{
    /**
     * An eBay ID that uniquely identifies the given user whose information is given in the call response.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @var string $userID
     */
    private $userID = null;

    /**
     * Contact information for the requested contact.
     *  Note that the email address is NOT returned.
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $contactAddress
     */
    private $contactAddress = null;

    /**
     * The date and time that the requested contact
     *  registered with eBay.
     *
     * @var \DateTime $registrationDate
     */
    private $registrationDate = null;

    /**
     * Gets as userID
     *
     * An eBay ID that uniquely identifies the given user whose information is given in the call response.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * An eBay ID that uniquely identifies the given user whose information is given in the call response.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as contactAddress
     *
     * Contact information for the requested contact.
     *  Note that the email address is NOT returned.
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Sets a new contactAddress
     *
     * Contact information for the requested contact.
     *  Note that the email address is NOT returned.
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $contactAddress
     * @return self
     */
    public function setContactAddress(\Nogrod\eBaySDK\Trading\AddressType $contactAddress)
    {
        $this->contactAddress = $contactAddress;
        return $this;
    }

    /**
     * Gets as registrationDate
     *
     * The date and time that the requested contact
     *  registered with eBay.
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets a new registrationDate
     *
     * The date and time that the requested contact
     *  registered with eBay.
     *
     * @param \DateTime $registrationDate
     * @return self
     */
    public function setRegistrationDate(\DateTime $registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->userID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UserID', null, (string) $value);
        }
        $value = $this->contactAddress;
        if (null !== $value) {
            $writer->startElementNs(null, 'ContactAddress', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->registrationDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RegistrationDate', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetUserContactDetailsResponseType
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
                case 'UserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userID = $value;
                    }
                    return true;
                case 'ContactAddress':
                    $this->contactAddress = \Nogrod\eBaySDK\Trading\AddressType::xmlRead($reader);
                    return true;
                case 'RegistrationDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->registrationDate = new \DateTime($value);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['UserID'] = $this->userID;
        $data['ContactAddress'] = $this->contactAddress;
        $data['RegistrationDate'] = Func::jsonDate($this->registrationDate);
        return $data;
    }
}
