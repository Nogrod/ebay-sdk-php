<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SafePaymentRequiredDefinitionType
 *
 * For the US, Canada and Australia sites, users are
 *  required to offer at least one safe payment method (i.e. PayPal/PaisaPay, or one
 *  of the credit cards specified in Item.PaymentMethods).
 *  <br>
 *  If a seller has a 'SafePaymentExempt' status, they are exempt from the category
 *  requirement to offer at least one safe payment method when listing an item on a
 *  site that has the safe payment requirement.
 *  <br>
 *  The safe payment requirement also applies to two-category listings that have one
 *  ship-to or available-to location in the US, Canada, or Australia. The French
 *  Canadian (CAFR) site is a special case, because listings on the CAFR site with
 *  ship-to or available-to locations in Canada do not require a Safe Payment method,
 *  yet listings on the CAFR site with ship-to or available-to locations in the US or
 *  Australia do require a safe payment method.
 *  <br>
 *  The Business and Industrial, Motors, Real Estate, and Mature Audiences categories,
 *  and all listings that don't support Item.PaymentMethods are exempt from this
 *  requirement. Therefore, listings in those categories do not require a safe payment
 *  method.
 *  <br>
 *  Currently, this field contains no other special meta-data.(An empty element is
 *  returned.)
 *  <br>
 *  Use SiteDefaults.SafePaymentRequired and Category.SafePaymentRequired to determine
 *  which categories require a safe payment method.
 * XSD Type: SafePaymentRequiredDefinitionType
 */
class SafePaymentRequiredDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
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
    }
}
