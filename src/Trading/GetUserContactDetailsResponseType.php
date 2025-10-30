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
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
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
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
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
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getUserID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserID", $value);
        }
        $value = $this->getContactAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ContactAddress", $value);
        }
        $value = $this->getRegistrationDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RegistrationDate", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetUserContactDetailsResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID');
        if (null !== $value) {
            $this->setUserID($value);
        }
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContactAddress');
        if (null !== $value) {
            $this->setContactAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}RegistrationDate');
        if (null !== $value) {
            $this->setRegistrationDate(new \DateTime($value));
        }
    }
}
