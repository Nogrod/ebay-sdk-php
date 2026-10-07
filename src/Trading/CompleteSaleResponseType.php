<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CompleteSaleResponseType
 *
 * This type defines the response of the <b>CompleteSale</b> call. There are no call-specific fields in this response, but the seller should look for an <b>Ack</b> value of <code>true</code> in the response, as this value will indicate that the action(s) in the <b>CompleteSale</b> call were successful. If any other <b>Ack</b> value besides <code>true</code> is returned, the seller should look for any returned error messages or warnings.
 * XSD Type: CompleteSaleResponseType
 */
class CompleteSaleResponseType extends AbstractResponseType
{
    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CompleteSaleResponseType
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
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        return $data;
    }
}
