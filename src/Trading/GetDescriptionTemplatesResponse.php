<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetDescriptionTemplatesResponse
 *
 * Retrieves detailed information on Listing Designer templates that are available for use by the seller.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise listings. Existing listings that are already using a Listing Designer template will remain unchanged. The <b>GetDescriptionTemplates</b> call will eventually get deprecated and decommissioned, and more information will be provided on timing at a later date. The <b>GetDescriptionTemplates</b> call will still retrieve Listing Designer template data, but none of retrieved templates will be usable to create or revise a listing.</span>
 */
class GetDescriptionTemplatesResponse extends GetDescriptionTemplatesResponseType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
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
