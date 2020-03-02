<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VerifyAddItemRequestType
 *
 * Enables a seller to specify the definition of a new item and submit the definition to eBay without creating a listing.
 *  <br><br>
 *  Sellers who engage in cross-border trade on sites that require a recoupment agreement, must agree to the
 *  recoupment terms before adding or verifying items. This agreement allows eBay to reimburse
 *  a buyer during a dispute and then recoup the cost from the seller. The US site is a recoupment site, and
 *  the agreement is located <a href="https://scgi.ebay.com/ws/eBayISAPI.dll?CBTRecoupAgreement">here</a>.
 *  The list of the sites where a user has agreed to the recoupment terms is returned by the GetUser response.
 * XSD Type: VerifyAddItemRequestType
 */
class VerifyAddItemRequestType extends AbstractRequestType
{

    /**
     * Root container holding all values that define a new
     *  listing.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * Gets as item
     *
     * Root container holding all values that define a new
     *  listing.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * Root container holding all values that define a new
     *  listing.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
    }
}
