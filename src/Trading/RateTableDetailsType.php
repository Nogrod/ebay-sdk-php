<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RateTableDetailsType
 *
 * This type is used to reference a seller's specific domestic and/or international shipping rate tables. Shipping rate tables allow sellers to configure specific shipping costs based on the shipping destinations and level of service (e.g. economy, standard, expedite, and one-day). Generally speaking, sellers want to use these shipping rate tables so they can charge a higher shipping cost to the buyer whenever shipping costs are higher for them as well. For example, shipping to Alaska or Hawaii is generally more expensive than shipping to any other of the 48 US states, or in regards to international shipping, shipping to some regions and countries are more expensive than others.
 *  <br><br>
 *  Sellers configure domestic, international, and regional shipping rate tables in My eBay Shipping Preferences. To apply shipping rate tables, the shipping cost type must be flat-rate.
 *  <br><br>
 *  For domestic shipping rate tables, the three supported domestic regions are Alaska & Hawaii, US Protectorates (e.g. Puerto Rico and Guam), and APO/FPO destinations, which are US military bases/locations outside of the continental US. In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead.
 *  <br><br>
 *  For international shipping rate tables, specific rates may be set up for any and all geographical regions and individual countries within those regions. Similar to domestic shipping rate tables, the seller has the option of adding an extra charge based on the weight of the shipping package. Sellers cannot add a surcharge for international shipping.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
 * XSD Type: RateTableDetailsType
 */
class RateTableDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is used in an Add/Revise/Relist/Verify call to apply the domestic shipping rate table to the listing. Domestic shipping rate tables can be used only for items listed on the eBay US, Australia, UK, Germany, Canada (English and French), and Italy sites.
     *  <br><br>
     *  In all cases, sellers pass in a string value of <code>Default</code> to apply the domestic shipping rate table. The shipping rates and/or surcharges set up in the domestic shipping rate table will only be applicable based on the location of the buyer, and if that shipping service level is covered in one of the specified shipping service options in the listing. Basically, domestic shipping costs and surcharges are set in one or more <b>ShippingServiceOptions</b> containers in the listing, and based on the settings and costs in the domestic shipping rate table, these shipping costs and/or surcharges may be overridden based on the buyer's location. For example, if the buyer lives in Alaska, and the domestic shipping rate table has one or more shipping rates set up for the <em>Alaska & Hawaii</em> domestic region, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>ShippingServiceOptions</b> containers.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTable /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @var string $domesticRateTable
     */
    private $domesticRateTable = null;

    /**
     * This field is used in an Add/Revise/Relist/Verify call to apply the international shipping rate table to the listing. International shipping rate tables can be used only for items listed on the eBay US, UK, and DE sites.
     *  <br><br>
     *  In all cases, sellers pass in a string value of <code>Default</code> to apply the international shipping rate table. The shipping rates set up in the international shipping rate table will only be applicable based on the location of the buyer, and if that shipping service level is covered in one of the specified international shipping service options in the listing. Basically, international shipping costs are set in one or more <b>InternationalShippingServiceOption</b> containers in the listing, and based on the settings and costs in the international shipping rate table, these shipping costs may be overridden based on the buyer's location. For example, if the buyer lives in Argentina, and the international shipping rate table has one or more shipping rates set up for the country of <em>Argentina</em>, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>InternationalShippingServiceOption</b> containers.
     *  <br><br>
     *  If a seller is revising or relisting an item, the international shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTable /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if an international rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @var string $internationalRateTable
     */
    private $internationalRateTable = null;

    /**
     * <span class="tablenote"><b>Note: </b>This field is only available for sellers on the US, Australia, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay.
     *  </span>
     *  <br>
     *  This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized domestic shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If the <b>DomesticRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur.
     *  <br><br>
     *  In domestic shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (region/state/province) and shipping service level (one-day, expedited, standard, economy in US). In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead.
     *  <br><br>
     *  If the seller is using the Revise or Relist call, they must include the <b>DomesticRateTableId</b> field or the domestic shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same domestic shipping rate table, the seller will pass in this identifier. The seller can also change the domestic shipping rate table by passing in the identifier for a different domestic shipping rate table.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTableId /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a customized domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @var string $domesticRateTableId
     */
    private $domesticRateTableId = null;

    /**
     * <span class="tablenote"><b>Note: </b>This field is only available to sellers on the US, Australia, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay.
     *  </span>
     *  <br>
     *  This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized international shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If the <b>InternationalRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur.
     *  <br><br>
     *  In international shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (continent/region/country) and shipping service level (expedited, standard, economy in US). In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package. Unlike domestic shipping, sellers cannot add a surcharge for international shipping.
     *  <br><br>
     *  If the seller is using the Revise or Relist call, they must include the <b>InternationalRateTableId</b> field or the international shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same international shipping rate table, the seller will pass in this identifier. The seller can also change the international shipping rate table by passing in the identifier for a different international shipping rate table.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTableId /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a customized international rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @var string $internationalRateTableId
     */
    private $internationalRateTableId = null;

    /**
     * Gets as domesticRateTable
     *
     * This field is used in an Add/Revise/Relist/Verify call to apply the domestic shipping rate table to the listing. Domestic shipping rate tables can be used only for items listed on the eBay US, Australia, UK, Germany, Canada (English and French), and Italy sites.
     *  <br><br>
     *  In all cases, sellers pass in a string value of <code>Default</code> to apply the domestic shipping rate table. The shipping rates and/or surcharges set up in the domestic shipping rate table will only be applicable based on the location of the buyer, and if that shipping service level is covered in one of the specified shipping service options in the listing. Basically, domestic shipping costs and surcharges are set in one or more <b>ShippingServiceOptions</b> containers in the listing, and based on the settings and costs in the domestic shipping rate table, these shipping costs and/or surcharges may be overridden based on the buyer's location. For example, if the buyer lives in Alaska, and the domestic shipping rate table has one or more shipping rates set up for the <em>Alaska & Hawaii</em> domestic region, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>ShippingServiceOptions</b> containers.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTable /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @return string
     */
    public function getDomesticRateTable()
    {
        return $this->domesticRateTable;
    }

    /**
     * Sets a new domesticRateTable
     *
     * This field is used in an Add/Revise/Relist/Verify call to apply the domestic shipping rate table to the listing. Domestic shipping rate tables can be used only for items listed on the eBay US, Australia, UK, Germany, Canada (English and French), and Italy sites.
     *  <br><br>
     *  In all cases, sellers pass in a string value of <code>Default</code> to apply the domestic shipping rate table. The shipping rates and/or surcharges set up in the domestic shipping rate table will only be applicable based on the location of the buyer, and if that shipping service level is covered in one of the specified shipping service options in the listing. Basically, domestic shipping costs and surcharges are set in one or more <b>ShippingServiceOptions</b> containers in the listing, and based on the settings and costs in the domestic shipping rate table, these shipping costs and/or surcharges may be overridden based on the buyer's location. For example, if the buyer lives in Alaska, and the domestic shipping rate table has one or more shipping rates set up for the <em>Alaska & Hawaii</em> domestic region, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>ShippingServiceOptions</b> containers.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTable /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @param string $domesticRateTable
     * @return self
     */
    public function setDomesticRateTable($domesticRateTable)
    {
        $this->domesticRateTable = $domesticRateTable;
        return $this;
    }

    /**
     * Gets as internationalRateTable
     *
     * This field is used in an Add/Revise/Relist/Verify call to apply the international shipping rate table to the listing. International shipping rate tables can be used only for items listed on the eBay US, UK, and DE sites.
     *  <br><br>
     *  In all cases, sellers pass in a string value of <code>Default</code> to apply the international shipping rate table. The shipping rates set up in the international shipping rate table will only be applicable based on the location of the buyer, and if that shipping service level is covered in one of the specified international shipping service options in the listing. Basically, international shipping costs are set in one or more <b>InternationalShippingServiceOption</b> containers in the listing, and based on the settings and costs in the international shipping rate table, these shipping costs may be overridden based on the buyer's location. For example, if the buyer lives in Argentina, and the international shipping rate table has one or more shipping rates set up for the country of <em>Argentina</em>, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>InternationalShippingServiceOption</b> containers.
     *  <br><br>
     *  If a seller is revising or relisting an item, the international shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTable /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if an international rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @return string
     */
    public function getInternationalRateTable()
    {
        return $this->internationalRateTable;
    }

    /**
     * Sets a new internationalRateTable
     *
     * This field is used in an Add/Revise/Relist/Verify call to apply the international shipping rate table to the listing. International shipping rate tables can be used only for items listed on the eBay US, UK, and DE sites.
     *  <br><br>
     *  In all cases, sellers pass in a string value of <code>Default</code> to apply the international shipping rate table. The shipping rates set up in the international shipping rate table will only be applicable based on the location of the buyer, and if that shipping service level is covered in one of the specified international shipping service options in the listing. Basically, international shipping costs are set in one or more <b>InternationalShippingServiceOption</b> containers in the listing, and based on the settings and costs in the international shipping rate table, these shipping costs may be overridden based on the buyer's location. For example, if the buyer lives in Argentina, and the international shipping rate table has one or more shipping rates set up for the country of <em>Argentina</em>, the buyer will see these rates in the View Item page and not the rates/costs that are defined in the <b>InternationalShippingServiceOption</b> containers.
     *  <br><br>
     *  If a seller is revising or relisting an item, the international shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTable /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if an international rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. Currently, for sites other than the ones stated, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @param string $internationalRateTable
     * @return self
     */
    public function setInternationalRateTable($internationalRateTable)
    {
        $this->internationalRateTable = $internationalRateTable;
        return $this;
    }

    /**
     * Gets as domesticRateTableId
     *
     * <span class="tablenote"><b>Note: </b>This field is only available for sellers on the US, Australia, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay.
     *  </span>
     *  <br>
     *  This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized domestic shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If the <b>DomesticRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur.
     *  <br><br>
     *  In domestic shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (region/state/province) and shipping service level (one-day, expedited, standard, economy in US). In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead.
     *  <br><br>
     *  If the seller is using the Revise or Relist call, they must include the <b>DomesticRateTableId</b> field or the domestic shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same domestic shipping rate table, the seller will pass in this identifier. The seller can also change the domestic shipping rate table by passing in the identifier for a different domestic shipping rate table.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTableId /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a customized domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @return string
     */
    public function getDomesticRateTableId()
    {
        return $this->domesticRateTableId;
    }

    /**
     * Sets a new domesticRateTableId
     *
     * <span class="tablenote"><b>Note: </b>This field is only available for sellers on the US, Australia, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay.
     *  </span>
     *  <br>
     *  This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized domestic shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If the <b>DomesticRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur.
     *  <br><br>
     *  In domestic shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (region/state/province) and shipping service level (one-day, expedited, standard, economy in US). In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package, or they can add a surcharge instead.
     *  <br><br>
     *  If the seller is using the Revise or Relist call, they must include the <b>DomesticRateTableId</b> field or the domestic shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same domestic shipping rate table, the seller will pass in this identifier. The seller can also change the domestic shipping rate table by passing in the identifier for a different domestic shipping rate table.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;DomesticRateTableId /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a customized domestic rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br><br>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @param string $domesticRateTableId
     * @return self
     */
    public function setDomesticRateTableId($domesticRateTableId)
    {
        $this->domesticRateTableId = $domesticRateTableId;
        return $this;
    }

    /**
     * Gets as internationalRateTableId
     *
     * <span class="tablenote"><b>Note: </b>This field is only available to sellers on the US, Australia, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay.
     *  </span>
     *  <br>
     *  This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized international shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If the <b>InternationalRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur.
     *  <br><br>
     *  In international shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (continent/region/country) and shipping service level (expedited, standard, economy in US). In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package. Unlike domestic shipping, sellers cannot add a surcharge for international shipping.
     *  <br><br>
     *  If the seller is using the Revise or Relist call, they must include the <b>InternationalRateTableId</b> field or the international shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same international shipping rate table, the seller will pass in this identifier. The seller can also change the international shipping rate table by passing in the identifier for a different international shipping rate table.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTableId /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a customized international rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @return string
     */
    public function getInternationalRateTableId()
    {
        return $this->internationalRateTableId;
    }

    /**
     * Sets a new internationalRateTableId
     *
     * <span class="tablenote"><b>Note: </b>This field is only available to sellers on the US, Australia, Canada (English and French), and Italy sites. The unique shipping rate identifiers that will be passed into this field can be retrieved using the <b>getRateTables</b> call of the <b>Account API</b>, or these identifiers can be viewed in the displayed URL when the seller selects a specific shipping rate table in the Shipping rate tables UI in My eBay.
     *  </span>
     *  <br>
     *  This field is included in an Add/Revise/Relist/Verify call if the seller wants to apply a customized international shipping rate table to the listing. The string value that is supplied in this field is the unique identifier of the shipping rate table. If the <b>InternationalRateTableId</b> field is used, the seller must make sure that the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> fields are not used, as the old and new rate tables cannot be used together or an error will occur.
     *  <br><br>
     *  In international shipping rate tables, sellers customize the flat-rate cost of shipping based on shipping destination (continent/region/country) and shipping service level (expedited, standard, economy in US). In addition to setting one flat rate based on the destination and service level, the seller also has the option of adding an extra charge based on the weight of the shipping package. Unlike domestic shipping, sellers cannot add a surcharge for international shipping.
     *  <br><br>
     *  If the seller is using the Revise or Relist call, they must include the <b>InternationalRateTableId</b> field or the international shipping rate table currently being applied to the listing will be unassociated from the listing. If they want to continue using the same international shipping rate table, the seller will pass in this identifier. The seller can also change the international shipping rate table by passing in the identifier for a different international shipping rate table.
     *  <br><br>
     *  If a seller is revising or relisting an item, the domestic shipping rate table can be unassociated from the listing by using the empty tag: <code>&lt;InternationalRateTableId /&gt;</code>
     *  <br><br>
     *  This field is returned in the 'Get' calls if a customized international rate table is being applied to the listing, and it is only returned for the seller who listed the item.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b> The capability to create and use multiple domestic and international shipping rate tables (up to 40 per seller account) has rolled out to the US, Australia, Canada (English and French), and Italy sites. For other sites, only one domestic and one international shipping rate table may be set up per seller. Until the seller's account is updated with the new shipping rate tables in My eBay, the seller will continue to use the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags and pass in <code>Default</code> as the value. Once the seller's account is updated with the new shipping rate tables in My eBay, the seller will be required to use the new <b>DomesticRateTableId</b> and <b>InternationalRateTableId</b> tags, and the <b>DomesticRateTable</b> and <b>InternationalRateTable</b> tags will not work. Note that shipping rate tables can also be applied to Shipping business policies that are applied against a listing. The new shipping rate tables have all of the functionality of the old shipping rate tables, plus the seller has access to all domestic regions and not just the special regions (such as Alaska & Hawaii, US Protectorates, and APO/FPO locations in US).</span>
     *
     * @param string $internationalRateTableId
     * @return self
     */
    public function setInternationalRateTableId($internationalRateTableId)
    {
        $this->internationalRateTableId = $internationalRateTableId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDomesticRateTable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticRateTable", $value);
        }
        $value = $this->getInternationalRateTable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRateTable", $value);
        }
        $value = $this->getDomesticRateTableId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DomesticRateTableId", $value);
        }
        $value = $this->getInternationalRateTableId();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InternationalRateTableId", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRateTable');
        if (null !== $value) {
            $this->setDomesticRateTable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRateTable');
        if (null !== $value) {
            $this->setInternationalRateTable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DomesticRateTableId');
        if (null !== $value) {
            $this->setDomesticRateTableId($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InternationalRateTableId');
        if (null !== $value) {
            $this->setInternationalRateTableId($value);
        }
    }
}
