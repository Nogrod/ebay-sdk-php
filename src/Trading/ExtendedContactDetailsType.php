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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->contactHoursDetails;
        if (null !== $value) {
            $writer->startElementNs(null, 'ContactHoursDetails', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->classifiedAdContactByEmailEnabled;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ClassifiedAdContactByEmailEnabled', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ExtendedContactDetailsType
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
                case 'ContactHoursDetails':
                    $this->contactHoursDetails = \Nogrod\eBaySDK\Trading\ContactHoursDetailsType::xmlRead($reader);
                    return true;
                case 'ClassifiedAdContactByEmailEnabled':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->classifiedAdContactByEmailEnabled = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
