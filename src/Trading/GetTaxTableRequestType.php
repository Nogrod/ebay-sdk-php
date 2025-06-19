<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetTaxTableRequestType
 *
 * The base request type of the <b>GetTaxTable</b> call, which retrieves information on the seller's Sales Tax Table. This information includes all of the site's tax jurisdictions, a boolean field to indicate if sales tax is applied to shipping and handling charges, and the sales tax rate for each jurisdiction (if a sales tax rate is set for that jurisdiction).
 *  <br/><br/>
 *  Sales tax tables are only supported on the eBay US and Candada marketplaces.
 * XSD Type: GetTaxTableRequestType
 */
class GetTaxTableRequestType extends AbstractRequestType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\GetTaxTableRequestType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
    }
}
