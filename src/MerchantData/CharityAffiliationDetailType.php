<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * The affiliation ID for nonprofit charity organizations
     *  registered with the PayPal Giving Fund.
     *
     * @var string $charityID
     */
    private $charityID = null;

    /**
     * Indicates the affiliation status of the nonprofit charity
     *  organization registered with the PayPal Giving Fund.
     *
     * @var string $affiliationType
     */
    private $affiliationType = null;

    /**
     * Indicates the affiliation last used date of the nonprofit charity
     *  organization registered with the PayPal Giving Fund.
     *
     * @var \DateTime $lastUsedTime
     */
    private $lastUsedTime = null;

    /**
     * Gets as charityID
     *
     * The affiliation ID for nonprofit charity organizations
     *  registered with the PayPal Giving Fund.
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
     * The affiliation ID for nonprofit charity organizations
     *  registered with the PayPal Giving Fund.
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
     * Indicates the affiliation status of the nonprofit charity
     *  organization registered with the PayPal Giving Fund.
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
     * Indicates the affiliation status of the nonprofit charity
     *  organization registered with the PayPal Giving Fund.
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
     * Indicates the affiliation last used date of the nonprofit charity
     *  organization registered with the PayPal Giving Fund.
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
     * Indicates the affiliation last used date of the nonprofit charity
     *  organization registered with the PayPal Giving Fund.
     *
     * @param \DateTime $lastUsedTime
     * @return self
     */
    public function setLastUsedTime(\DateTime $lastUsedTime)
    {
        $this->lastUsedTime = $lastUsedTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityID');
        if (null !== $value) {
            $this->setCharityID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AffiliationType');
        if (null !== $value) {
            $this->setAffiliationType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastUsedTime');
        if (null !== $value) {
            $this->setLastUsedTime(new \DateTime($value));
        }
    }
}
