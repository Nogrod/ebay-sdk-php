<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing VeROReportItemType
 *
 * This type is used by the <b>ReportItem</b> container. A <b>ReportItem</b> container is required for each eBay item that the product owner is reporting as violating the product owner's copyright, trademark, or intellectual property rights.
 * XSD Type: VeROReportItemType
 */
class VeROReportItemType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The unique identifier for the listing being reported for the alleged infringement, which is specified in the <b>VeROReasonCodeID</b> field.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * The unique identifier for the type of claimed infringement. The
     *  <b>GetVeROReasonCodeDetails</b> call can be used to retrieve a list of reason codes for a given eBay site.
     *
     * @var int $veROReasonCodeID
     */
    private $veROReasonCodeID = null;

    /**
     * This field is used by the VeRO Program member to provide more details to the seller about why the item is being reported as violating copyright, trademark, or intellectual property rights.
     *
     * @var string $messageToSeller
     */
    private $messageToSeller = null;

    /**
     * If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically sent to the seller of the reported item.
     *
     * @var bool $copyEmailToRightsOwner
     */
    private $copyEmailToRightsOwner = null;

    /**
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     *
     * @var string[] $region
     */
    private $region = [

    ];

    /**
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field. Supported values for <b>Country</b> are found in <b>CountryCodeType</b>.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b>
     *  is 9037 (Item(s) is unlawful importation of product bearing trademark).
     *
     * @var string[] $country
     */
    private $country = [

    ];

    /**
     * This string field is used to specify the number of a product patent that is being violated.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b> is 9048 (Item(s) infringes a valid patent).
     *
     * @var string $patent
     */
    private $patent = null;

    /**
     * The brand name of the item being reported for VeRO violation.
     *
     * @var string $brand
     */
    private $brand = null;

    /**
     * Explanatory text from the VeRO Program member. This field is conditionally required when the
     *  <b>VeROReasonCodeID</b> is <code>Others</code>. Note that there is a 1000-character restriction on this text field when the items are being reported with the <code>Others</code> reason code.
     *
     * @var string $detailedMessage
     */
    private $detailedMessage = null;

    /**
     * Gets as itemID
     *
     * The unique identifier for the listing being reported for the alleged infringement, which is specified in the <b>VeROReasonCodeID</b> field.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier for the listing being reported for the alleged infringement, which is specified in the <b>VeROReasonCodeID</b> field.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as veROReasonCodeID
     *
     * The unique identifier for the type of claimed infringement. The
     *  <b>GetVeROReasonCodeDetails</b> call can be used to retrieve a list of reason codes for a given eBay site.
     *
     * @return int
     */
    public function getVeROReasonCodeID()
    {
        return $this->veROReasonCodeID;
    }

    /**
     * Sets a new veROReasonCodeID
     *
     * The unique identifier for the type of claimed infringement. The
     *  <b>GetVeROReasonCodeDetails</b> call can be used to retrieve a list of reason codes for a given eBay site.
     *
     * @param int $veROReasonCodeID
     * @return self
     */
    public function setVeROReasonCodeID($veROReasonCodeID)
    {
        $this->veROReasonCodeID = $veROReasonCodeID;
        return $this;
    }

    /**
     * Gets as messageToSeller
     *
     * This field is used by the VeRO Program member to provide more details to the seller about why the item is being reported as violating copyright, trademark, or intellectual property rights.
     *
     * @return string
     */
    public function getMessageToSeller()
    {
        return $this->messageToSeller;
    }

    /**
     * Sets a new messageToSeller
     *
     * This field is used by the VeRO Program member to provide more details to the seller about why the item is being reported as violating copyright, trademark, or intellectual property rights.
     *
     * @param string $messageToSeller
     * @return self
     */
    public function setMessageToSeller($messageToSeller)
    {
        $this->messageToSeller = $messageToSeller;
        return $this;
    }

    /**
     * Gets as copyEmailToRightsOwner
     *
     * If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically sent to the seller of the reported item.
     *
     * @return bool
     */
    public function getCopyEmailToRightsOwner()
    {
        return $this->copyEmailToRightsOwner;
    }

    /**
     * Sets a new copyEmailToRightsOwner
     *
     * If the VeRO Program member wants a copy of the Notice of Claimed Infringement (NOCI) document sent to their email address, this field should be included in the request and set to <code>true</code>. This same document is automatically sent to the seller of the reported item.
     *
     * @param bool $copyEmailToRightsOwner
     * @return self
     */
    public function setCopyEmailToRightsOwner($copyEmailToRightsOwner)
    {
        $this->copyEmailToRightsOwner = $copyEmailToRightsOwner;
        return $this;
    }

    /**
     * Adds as region
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     *
     * @return self
     * @param string $region
     */
    public function addToRegion($region)
    {
        $this->region[] = $region;
        return $this;
    }

    /**
     * isset region
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegion($index)
    {
        return isset($this->region[$index]);
    }

    /**
     * unset region
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegion($index)
    {
        unset($this->region[$index]);
    }

    /**
     * Gets as region
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     *
     * @return string[]
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which geographical region the item is shipped to, each region that would trigger this infringement type should be specified in its own <b>Region</b> field. Supported values for <b>Region</b> are found in <b>ShippingRegionCodeType</b>.
     *
     * @param string $region
     * @return self
     */
    public function setRegion(array $region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Adds as country
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field. Supported values for <b>Country</b> are found in <b>CountryCodeType</b>.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b>
     *  is 9037 (Item(s) is unlawful importation of product bearing trademark).
     *
     * @return self
     * @param string $country
     */
    public function addToCountry($country)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * isset country
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field. Supported values for <b>Country</b> are found in <b>CountryCodeType</b>.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b>
     *  is 9037 (Item(s) is unlawful importation of product bearing trademark).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountry($index)
    {
        return isset($this->country[$index]);
    }

    /**
     * unset country
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field. Supported values for <b>Country</b> are found in <b>CountryCodeType</b>.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b>
     *  is 9037 (Item(s) is unlawful importation of product bearing trademark).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountry($index)
    {
        unset($this->country[$index]);
    }

    /**
     * Gets as country
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field. Supported values for <b>Country</b> are found in <b>CountryCodeType</b>.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b>
     *  is 9037 (Item(s) is unlawful importation of product bearing trademark).
     *
     * @return string[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * If the infringement type stated in the <b>VeROReasonCodeID</b> has anything to do about which country the item is shipped to, each country that would trigger this infringement type should be specified in its own <b>Country</b> field. Supported values for <b>Country</b> are found in <b>CountryCodeType</b>.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b>
     *  is 9037 (Item(s) is unlawful importation of product bearing trademark).
     *
     * @param string $country
     * @return self
     */
    public function setCountry(array $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as patent
     *
     * This string field is used to specify the number of a product patent that is being violated.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b> is 9048 (Item(s) infringes a valid patent).
     *
     * @return string
     */
    public function getPatent()
    {
        return $this->patent;
    }

    /**
     * Sets a new patent
     *
     * This string field is used to specify the number of a product patent that is being violated.
     *  <br><br>
     *  This field is required when the <b>VeROReasonCodeID</b> is 9048 (Item(s) infringes a valid patent).
     *
     * @param string $patent
     * @return self
     */
    public function setPatent($patent)
    {
        $this->patent = $patent;
        return $this;
    }

    /**
     * Gets as brand
     *
     * The brand name of the item being reported for VeRO violation.
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets a new brand
     *
     * The brand name of the item being reported for VeRO violation.
     *
     * @param string $brand
     * @return self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Gets as detailedMessage
     *
     * Explanatory text from the VeRO Program member. This field is conditionally required when the
     *  <b>VeROReasonCodeID</b> is <code>Others</code>. Note that there is a 1000-character restriction on this text field when the items are being reported with the <code>Others</code> reason code.
     *
     * @return string
     */
    public function getDetailedMessage()
    {
        return $this->detailedMessage;
    }

    /**
     * Sets a new detailedMessage
     *
     * Explanatory text from the VeRO Program member. This field is conditionally required when the
     *  <b>VeROReasonCodeID</b> is <code>Others</code>. Note that there is a 1000-character restriction on this text field when the items are being reported with the <code>Others</code> reason code.
     *
     * @param string $detailedMessage
     * @return self
     */
    public function setDetailedMessage($detailedMessage)
    {
        $this->detailedMessage = $detailedMessage;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getVeROReasonCodeID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VeROReasonCodeID", $value);
        }
        $value = $this->getMessageToSeller();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageToSeller", $value);
        }
        $value = $this->getCopyEmailToRightsOwner();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CopyEmailToRightsOwner", $value);
        }
        $value = $this->getRegion();
        if (null !== $value && [] !== $this->getRegion()) {
            $writer->write(array_map(function ($v) {return ["Region" => $v];}, $value));
        }
        $value = $this->getCountry();
        if (null !== $value && [] !== $this->getCountry()) {
            $writer->write(array_map(function ($v) {return ["Country" => $v];}, $value));
        }
        $value = $this->getPatent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Patent", $value);
        }
        $value = $this->getBrand();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Brand", $value);
        }
        $value = $this->getDetailedMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailedMessage", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}VeROReasonCodeID');
        if (null !== $value) {
            $this->setVeROReasonCodeID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageToSeller');
        if (null !== $value) {
            $this->setMessageToSeller($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}CopyEmailToRightsOwner');
        if (null !== $value) {
            $this->setCopyEmailToRightsOwner(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Region');
        if (null !== $value) {
            $this->setRegion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Country');
        if (null !== $value) {
            $this->setCountry($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Patent');
        if (null !== $value) {
            $this->setPatent($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Brand');
        if (null !== $value) {
            $this->setBrand($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailedMessage');
        if (null !== $value) {
            $this->setDetailedMessage($value);
        }
    }
}
