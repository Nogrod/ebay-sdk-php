<?php

namespace Nogrod\eBaySDK\Trading;

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
class MembershipDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->programName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ProgramName', null, (string) $value);
        }
        $value = $this->site;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Site', null, (string) $value);
        }
        $value = $this->expiryDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExpiryDate', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\MembershipDetailType
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
                case 'ProgramName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->programName = $value;
                    }
                    return true;
                case 'Site':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->site = $value;
                    }
                    return true;
                case 'ExpiryDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->expiryDate = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ProgramName'] = $this->programName;
        $data['Site'] = $this->site;
        $data['ExpiryDate'] = Func::jsonDate($this->expiryDate);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
