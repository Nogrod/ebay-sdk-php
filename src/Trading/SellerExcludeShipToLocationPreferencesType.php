<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerExcludeShipToLocationPreferencesType
 *
 * Type used by the <b>SellerExcludeShipToLocationPreferences</b> container which is returned in the <b>GetUserPreferences</b> response to indicate which geographical regions and/or individual countries the seller has added as excluded ship-to locations.
 * XSD Type: SellerExcludeShipToLocationPreferencesType
 */
class SellerExcludeShipToLocationPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->excludeShipToLocation)) {
            throw new \LogicException('excludeShipToLocation is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
     * @param iterable<string> $excludeShipToLocation
     * @return self
     */
    public function setExcludeShipToLocation(iterable $excludeShipToLocation)
    {
        $this->excludeShipToLocation = $excludeShipToLocation;
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
        $value = $this->excludeShipToLocation;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'ExcludeShipToLocation', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerExcludeShipToLocationPreferencesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->excludeShipToLocation = [];
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
                case 'ExcludeShipToLocation':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->excludeShipToLocation[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ExcludeShipToLocation'] = Func::jsonList($this->excludeShipToLocation);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
