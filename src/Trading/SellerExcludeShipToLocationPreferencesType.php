<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerExcludeShipToLocationPreferencesType
 *
 * Type used by the <b>SellerExcludeShipToLocationPreferences</b> container which is returned in the <b>GetUserPreferences</b> response to indicate which geographical regions and/or individual countries the seller has added as excluded ship-to locations.
 * XSD Type: SellerExcludeShipToLocationPreferencesType
 */
class SellerExcludeShipToLocationPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * One <b>ExcludeShipToLocation</b> field is returned for each geographical region or country excluded
     *  as a possible shipping location in the seller's My eBay Shipping Preferences.
     *  Sellers can also exclude Alaska/Hawaii and Army Post Office/Fleet Post Office as
     *  possible shipping locations. For excluded countries, <a href="http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a>
     *  country codes are returned.
     *  <br><br>
     *  Domestically, the seller can specify Alaska/Hawaii, US Protectorates (including
     *  American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau,
     *  Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to.
     *  Internationally, the sellers can exclude entire regions (including Africa, Asia,
     *  Central America and Caribbean, Europe, Middle East, North America, Oceania,
     *  Southeast Asia, and South America) or specific countries within those regions.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
     *  <br><br>
     *  To see the valid exclude ship-to locations for a specified site, call
     *  <b>GeteBayDetails</b> with a <b>DetailName</b> field set to <b>ExcludeShippingLocationDetails</b>.
     *
     * @var string[] $excludeShipToLocation
     */
    private $excludeShipToLocation = [

    ];

    /**
     * Adds as excludeShipToLocation
     *
     * One <b>ExcludeShipToLocation</b> field is returned for each geographical region or country excluded
     *  as a possible shipping location in the seller's My eBay Shipping Preferences.
     *  Sellers can also exclude Alaska/Hawaii and Army Post Office/Fleet Post Office as
     *  possible shipping locations. For excluded countries, <a href="http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a>
     *  country codes are returned.
     *  <br><br>
     *  Domestically, the seller can specify Alaska/Hawaii, US Protectorates (including
     *  American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau,
     *  Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to.
     *  Internationally, the sellers can exclude entire regions (including Africa, Asia,
     *  Central America and Caribbean, Europe, Middle East, North America, Oceania,
     *  Southeast Asia, and South America) or specific countries within those regions.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
     *  <br><br>
     *  To see the valid exclude ship-to locations for a specified site, call
     *  <b>GeteBayDetails</b> with a <b>DetailName</b> field set to <b>ExcludeShippingLocationDetails</b>.
     *
     * @return self
     * @param string $excludeShipToLocation
     */
    public function addToExcludeShipToLocation($excludeShipToLocation)
    {
        $this->excludeShipToLocation[] = $excludeShipToLocation;
        return $this;
    }

    /**
     * isset excludeShipToLocation
     *
     * One <b>ExcludeShipToLocation</b> field is returned for each geographical region or country excluded
     *  as a possible shipping location in the seller's My eBay Shipping Preferences.
     *  Sellers can also exclude Alaska/Hawaii and Army Post Office/Fleet Post Office as
     *  possible shipping locations. For excluded countries, <a href="http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a>
     *  country codes are returned.
     *  <br><br>
     *  Domestically, the seller can specify Alaska/Hawaii, US Protectorates (including
     *  American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau,
     *  Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to.
     *  Internationally, the sellers can exclude entire regions (including Africa, Asia,
     *  Central America and Caribbean, Europe, Middle East, North America, Oceania,
     *  Southeast Asia, and South America) or specific countries within those regions.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
     *  <br><br>
     *  To see the valid exclude ship-to locations for a specified site, call
     *  <b>GeteBayDetails</b> with a <b>DetailName</b> field set to <b>ExcludeShippingLocationDetails</b>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludeShipToLocation($index)
    {
        return isset($this->excludeShipToLocation[$index]);
    }

    /**
     * unset excludeShipToLocation
     *
     * One <b>ExcludeShipToLocation</b> field is returned for each geographical region or country excluded
     *  as a possible shipping location in the seller's My eBay Shipping Preferences.
     *  Sellers can also exclude Alaska/Hawaii and Army Post Office/Fleet Post Office as
     *  possible shipping locations. For excluded countries, <a href="http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a>
     *  country codes are returned.
     *  <br><br>
     *  Domestically, the seller can specify Alaska/Hawaii, US Protectorates (including
     *  American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau,
     *  Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to.
     *  Internationally, the sellers can exclude entire regions (including Africa, Asia,
     *  Central America and Caribbean, Europe, Middle East, North America, Oceania,
     *  Southeast Asia, and South America) or specific countries within those regions.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
     *  <br><br>
     *  To see the valid exclude ship-to locations for a specified site, call
     *  <b>GeteBayDetails</b> with a <b>DetailName</b> field set to <b>ExcludeShippingLocationDetails</b>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludeShipToLocation($index)
    {
        unset($this->excludeShipToLocation[$index]);
    }

    /**
     * Gets as excludeShipToLocation
     *
     * One <b>ExcludeShipToLocation</b> field is returned for each geographical region or country excluded
     *  as a possible shipping location in the seller's My eBay Shipping Preferences.
     *  Sellers can also exclude Alaska/Hawaii and Army Post Office/Fleet Post Office as
     *  possible shipping locations. For excluded countries, <a href="http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a>
     *  country codes are returned.
     *  <br><br>
     *  Domestically, the seller can specify Alaska/Hawaii, US Protectorates (including
     *  American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau,
     *  Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to.
     *  Internationally, the sellers can exclude entire regions (including Africa, Asia,
     *  Central America and Caribbean, Europe, Middle East, North America, Oceania,
     *  Southeast Asia, and South America) or specific countries within those regions.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
     *  <br><br>
     *  To see the valid exclude ship-to locations for a specified site, call
     *  <b>GeteBayDetails</b> with a <b>DetailName</b> field set to <b>ExcludeShippingLocationDetails</b>.
     *
     * @return string[]
     */
    public function getExcludeShipToLocation()
    {
        return $this->excludeShipToLocation;
    }

    /**
     * Sets a new excludeShipToLocation
     *
     * One <b>ExcludeShipToLocation</b> field is returned for each geographical region or country excluded
     *  as a possible shipping location in the seller's My eBay Shipping Preferences.
     *  Sellers can also exclude Alaska/Hawaii and Army Post Office/Fleet Post Office as
     *  possible shipping locations. For excluded countries, <a href="http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm">ISO 3166</a>
     *  country codes are returned.
     *  <br><br>
     *  Domestically, the seller can specify Alaska/Hawaii, US Protectorates (including
     *  American Samoa, Guam, Mariana Island, Marshall Islands, Micronesia, Palau,
     *  Puerto Rico, and U.S. Virgin Islands) as places he/she will not ship to.
     *  Internationally, the sellers can exclude entire regions (including Africa, Asia,
     *  Central America and Caribbean, Europe, Middle East, North America, Oceania,
     *  Southeast Asia, and South America) or specific countries within those regions.
     *  <br><br>
     *  If a buyer's primary ship-to location is a location that you have listed as
     *  an excluded ship-to location (or if the buyer does not have a primary ship-to
     *  location), they will receive an error message if they attempt to buy or place
     *  a bid on your item.
     *  <br><br>
     *  To see the valid exclude ship-to locations for a specified site, call
     *  <b>GeteBayDetails</b> with a <b>DetailName</b> field set to <b>ExcludeShippingLocationDetails</b>.
     *
     * @param string[] $excludeShipToLocation
     * @return self
     */
    public function setExcludeShipToLocation(array $excludeShipToLocation)
    {
        $this->excludeShipToLocation = $excludeShipToLocation;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getExcludeShipToLocation();
        if (null !== $value && [] !== $this->getExcludeShipToLocation()) {
            $writer->write(array_map(function ($v) {return ["ExcludeShipToLocation" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\SellerExcludeShipToLocationPreferencesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ExcludeShipToLocation', true);
        if (null !== $value) {
            $this->setExcludeShipToLocation($value);
        }
    }
}
