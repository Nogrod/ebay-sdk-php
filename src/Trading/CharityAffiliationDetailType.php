<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CharityAffiliationDetailType
 *
 * Type defining the <b>CharityAffiliationDetail</b> container that is returned in the <b>GetUser</b> response. The <b>CharityAffiliationDetail</b> container consists of information on a nonprofit charity organization associated with the seller's account. A separate <b>CharityAffiliationDetail</b> container is returned for each nonprofit charity organization associated with the seller's account.
 * XSD Type: CharityAffiliationDetailType
 */
class CharityAffiliationDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The eBay unique identifier of the nonprofit organization associated with the seller's account. Once a nonprofit organization comes aboard as an eBay for Charity organization, eBay creates and assigns this ID to the nonprofit organization.
     *
     * @var string $charityID
     */
    private $charityID = null;

    /**
     * The enumeration value returned here indicates whether the eBay user is just selling on the behalf of the nonprofit organization, or if the eBay user is directly affiliated with/representing the nonprofit organization, or the eBay user has been added as a Direct Seller by the nonprofit organization.
     *
     * @var string $affiliationType
     */
    private $affiliationType = null;

    /**
     * This timestamp indicates when the eBay user last contributed to the nonprofit organization through the donated proceeds of an eBay sale.
     *
     * @var \DateTime $lastUsedTime
     */
    private $lastUsedTime = null;

    /**
     * Gets as charityID
     *
     * The eBay unique identifier of the nonprofit organization associated with the seller's account. Once a nonprofit organization comes aboard as an eBay for Charity organization, eBay creates and assigns this ID to the nonprofit organization.
     *
     * @return string
     */
    public function getCharityID()
    {
        return $this->charityID;
    }

    /**
     * Sets a new charityID
     *
     * The eBay unique identifier of the nonprofit organization associated with the seller's account. Once a nonprofit organization comes aboard as an eBay for Charity organization, eBay creates and assigns this ID to the nonprofit organization.
     *
     * @param string $charityID
     * @return self
     */
    public function setCharityID($charityID)
    {
        $this->charityID = $charityID;
        return $this;
    }

    /**
     * Gets as affiliationType
     *
     * The enumeration value returned here indicates whether the eBay user is just selling on the behalf of the nonprofit organization, or if the eBay user is directly affiliated with/representing the nonprofit organization, or the eBay user has been added as a Direct Seller by the nonprofit organization.
     *
     * @return string
     */
    public function getAffiliationType()
    {
        return $this->affiliationType;
    }

    /**
     * Sets a new affiliationType
     *
     * The enumeration value returned here indicates whether the eBay user is just selling on the behalf of the nonprofit organization, or if the eBay user is directly affiliated with/representing the nonprofit organization, or the eBay user has been added as a Direct Seller by the nonprofit organization.
     *
     * @param string $affiliationType
     * @return self
     */
    public function setAffiliationType($affiliationType)
    {
        $this->affiliationType = $affiliationType;
        return $this;
    }

    /**
     * Gets as lastUsedTime
     *
     * This timestamp indicates when the eBay user last contributed to the nonprofit organization through the donated proceeds of an eBay sale.
     *
     * @return \DateTime
     */
    public function getLastUsedTime()
    {
        return $this->lastUsedTime;
    }

    /**
     * Sets a new lastUsedTime
     *
     * This timestamp indicates when the eBay user last contributed to the nonprofit organization through the donated proceeds of an eBay sale.
     *
     * @param \DateTime $lastUsedTime
     * @return self
     */
    public function setLastUsedTime(\DateTime $lastUsedTime)
    {
        $this->lastUsedTime = $lastUsedTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCharityID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityID", $value);
        }
        $value = $this->getAffiliationType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AffiliationType", $value);
        }
        $value = $this->getLastUsedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastUsedTime", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\CharityAffiliationDetailType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID');
        if (null !== $value) {
            $this->setCharityID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}AffiliationType');
        if (null !== $value) {
            $this->setAffiliationType($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastUsedTime');
        if (null !== $value) {
            $this->setLastUsedTime(new \DateTime($value));
        }
    }
}
