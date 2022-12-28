<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MembershipDetailType
 *
 * Type used by the <b>Program</b> container that is returned in the response of the <b>GetUser</b> call if the seller is enrolled in one or more eBay membership programs, such as eBay Plus. The <b>Program</b> container provides the eBay site, program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers on Germany and Australia marketplaces. In Australia, the seller has no control/responsibility over setting the eBay Plus feature for a listing. Instead, eBay will evaluate/determine whether a listing is eligible for eBay Plus.
 *  </span>
 * XSD Type: MembershipDetailType
 */
class MembershipDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the name of the membership program, such as <code>EBAYPLUS</code>. This field will always be returned with each <b>Program</b> container.
     *
     * @var string $programName
     */
    private $programName = null;

    /**
     * This enumeration value indicates the eBay site for which the seller is enrolled in a membership program. This field will always be returned with each <b>Program</b> container.
     *
     * @var string $site
     */
    private $site = null;

    /**
     * This dateTime value is the expiration date of the seller's membership within the program specified in the <b>ProgramName</b> field. This field will always be returned with each <b>Program</b> container.
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * Gets as programName
     *
     * This value indicates the name of the membership program, such as <code>EBAYPLUS</code>. This field will always be returned with each <b>Program</b> container.
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Sets a new programName
     *
     * This value indicates the name of the membership program, such as <code>EBAYPLUS</code>. This field will always be returned with each <b>Program</b> container.
     *
     * @param string $programName
     * @return self
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * Gets as site
     *
     * This enumeration value indicates the eBay site for which the seller is enrolled in a membership program. This field will always be returned with each <b>Program</b> container.
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * This enumeration value indicates the eBay site for which the seller is enrolled in a membership program. This field will always be returned with each <b>Program</b> container.
     *
     * @param string $site
     * @return self
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * This dateTime value is the expiration date of the seller's membership within the program specified in the <b>ProgramName</b> field. This field will always be returned with each <b>Program</b> container.
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * This dateTime value is the expiration date of the seller's membership within the program specified in the <b>ProgramName</b> field. This field will always be returned with each <b>Program</b> container.
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProgramName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProgramName", $value);
        }
        $value = $this->getSite();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Site", $value);
        }
        $value = $this->getExpiryDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ExpiryDate", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProgramName');
        if (null !== $value) {
            $this->setProgramName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site');
        if (null !== $value) {
            $this->setSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExpiryDate');
        if (null !== $value) {
            $this->setExpiryDate(new \DateTime($value));
        }
    }
}
