<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing CompleteSaleResponseType
 *
 * This type defines the response of the <b>CompleteSale</b> call. There are no call-specific fields in this response, but the seller should look for an <b>Ack</b> value of <code>true</code> in the response, as this value will indicate that the action(s) in the <b>CompleteSale</b> call were successful. If any other <b>Ack</b> value besides <code>true</code> is returned, the seller should look for any returned error messages or warnings.
 * XSD Type: CompleteSaleResponseType
 */
class CompleteSaleResponseType extends AbstractResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
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
        parent::setKeyValue($keyValue);
    }
}
