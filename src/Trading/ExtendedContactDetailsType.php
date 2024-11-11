<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtendedContactDetailsType
 *
 * This type is used to provide contact hours for a seller of a Classified Ad listing, including motor vehicles. There is also a boolean field in this type that indicates whether or not potential buyer can contact the seller by email.
 * XSD Type: ExtendedContactDetailsType
 */
class ExtendedContactDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This containers consists of fields that allows the seller of a Classified Ad listing to tell potential buyers what days and times they may be contacted to inquire about the listing.
     *
     * @var \Nogrod\eBaySDK\Trading\ContactHoursDetailsType $contactHoursDetails
     */
    private $contactHoursDetails = null;

    /**
     * A value of <code>true</code> in this field indicates that potential buyers can contact the seller of the Classified Ad listing by email.
     *
     * @var bool $classifiedAdContactByEmailEnabled
     */
    private $classifiedAdContactByEmailEnabled = null;

    /**
     * Gets as contactHoursDetails
     *
     * This containers consists of fields that allows the seller of a Classified Ad listing to tell potential buyers what days and times they may be contacted to inquire about the listing.
     *
     * @return \Nogrod\eBaySDK\Trading\ContactHoursDetailsType
     */
    public function getContactHoursDetails()
    {
        return $this->contactHoursDetails;
    }

    /**
     * Sets a new contactHoursDetails
     *
     * This containers consists of fields that allows the seller of a Classified Ad listing to tell potential buyers what days and times they may be contacted to inquire about the listing.
     *
     * @param \Nogrod\eBaySDK\Trading\ContactHoursDetailsType $contactHoursDetails
     * @return self
     */
    public function setContactHoursDetails(\Nogrod\eBaySDK\Trading\ContactHoursDetailsType $contactHoursDetails)
    {
        $this->contactHoursDetails = $contactHoursDetails;
        return $this;
    }

    /**
     * Gets as classifiedAdContactByEmailEnabled
     *
     * A value of <code>true</code> in this field indicates that potential buyers can contact the seller of the Classified Ad listing by email.
     *
     * @return bool
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->classifiedAdContactByEmailEnabled;
    }

    /**
     * Sets a new classifiedAdContactByEmailEnabled
     *
     * A value of <code>true</code> in this field indicates that potential buyers can contact the seller of the Classified Ad listing by email.
     *
     * @param bool $classifiedAdContactByEmailEnabled
     * @return self
     */
    public function setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled)
    {
        $this->classifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getContactHoursDetails();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ContactHoursDetails", $value);
        }
        $value = $this->getClassifiedAdContactByEmailEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ContactHoursDetails');
        if (null !== $value) {
            $this->setContactHoursDetails(\Nogrod\eBaySDK\Trading\ContactHoursDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ClassifiedAdContactByEmailEnabled');
        if (null !== $value) {
            $this->setClassifiedAdContactByEmailEnabled(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
