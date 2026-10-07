<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReturnsAcceptedDetailsType
 *
 * <br><br>
 *  <span class="tablenote"><b>Note:</b> This type is used by the deprecated <b>ReturnPolicyDetails.ReturnsAccepted</b> container returned in <b>GeteBayDetails</b>. This container contains the values that may be used in the <b>ReturnPolicy.ReturnsAcceptedOption</b> field of Add/Revise/Relist API calls. For most categories within a given eBay site, the supported Return Policy options/values are the same, but there a few exceptions. To determine whether returns are supported for a specific leaf category on a specific eBay marketplace, use the <b>Metadata API</b> <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getReturnPolicies" target="_blank">getReturnPolicies</a> method. Pass the target <b>marketplace_id</b> and the category ID in the filter query parameter, and then inspect the <b>returnPolicies.domestic.returnsAcceptanceEnabled</b> and <b>returnPolicies.international.returnsAcceptanceEnabled</b> fields in the response.
 * XSD Type: ReturnsAcceptedDetailsType
 */
class ReturnsAcceptedDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Whether the seller allows the buyer to return the item.
     *  This value can be passed in the AddItem family of calls.
     *
     * @var string $returnsAcceptedOption
     */
    private $returnsAcceptedOption = null;

    /**
     * Display string that applications can use to present ReturnsAcceptedOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as returnsAcceptedOption
     *
     * Whether the seller allows the buyer to return the item.
     *  This value can be passed in the AddItem family of calls.
     *
     * @return string
     */
    public function getReturnsAcceptedOption()
    {
        return $this->returnsAcceptedOption;
    }

    /**
     * Sets a new returnsAcceptedOption
     *
     * Whether the seller allows the buyer to return the item.
     *  This value can be passed in the AddItem family of calls.
     *
     * @param string $returnsAcceptedOption
     * @return self
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption)
    {
        $this->returnsAcceptedOption = $returnsAcceptedOption;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present ReturnsAcceptedOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Display string that applications can use to present ReturnsAcceptedOption in
     *  a more user-friendly format (such as in a drop-down list).
     *  Not applicable as input to the AddItem family of calls. (Use ReturnsAcceptedOption instead.)
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
        $value = $this->returnsAcceptedOption;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ReturnsAcceptedOption', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ReturnsAcceptedDetailsType
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
                case 'ReturnsAcceptedOption':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->returnsAcceptedOption = $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
