<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing BuyerType
 *
 * This type is used by various <b>Get</b> calls, including <b>GetItem</b> and <b>GetOrders</b>. Only the order management calls return the <b>BuyerTaxIdentifier</b> container, and each call that uses <b>BuyerType</b> uses the <b>ShippingAddress</b> container a little differently.
 * XSD Type: BuyerType
 */
class BuyerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container shows the buyer's shipping address.
     *  <br>
     *  <br>
     *  <p><span class="tablenote"><b>Note:</b> For an Authenticity Guarantee program order returned in <b>GetItemTransactions</b> or <b>GetSellerTransactions</b>, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For In-Store Pickup and Click and Collect orders, this is the address of the merchant's store where the buyer will pick up the order. This is only applicable for <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> calls.
     *  </span></p>
     *  <p><span class="tablenote"><b>Note:</b>
     *  For eBay Vault scenarios: <strong>GetItemTransactions</strong> calls, and <strong>GetSellerTransactions</strong> calls (Seller View only), mock address details are returned for: <br><br>-<em> Vault to vault orders: Buyer and Seller View</em><br><br>-<em> Ship to vault orders</em>: Mock addresses are returned for the Buyer View (only); the address returned for the Seller View will be the authenticator&amp;apos;s address.<br><br>-<em> Vault in-hand submission orders</em>: the address returned for the Buyer View will be the authenticator's address (<b>GetItemTransactions</b> only).<br> <br>
     *  The following address details are returned for mock addresses:
     *  <pre>
     *  &lt;ShippingAddress&gt;
     *  <br/>
     *  <code> &nbsp;&lt;Name&gt;eBay Vault&lt;/Name&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressID&gt;Invalid Request&lt;/AddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressOwner&gt;eBay&lt;/AddressOwner&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressUsage&gt;Invalid&lt;/AddressUsage&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CityName&gt;Invalid Request&lt;/CityName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Country&gt;US&lt;/Country&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CountryName&gt;Invalid Request&lt;/CountryName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;ExternalAddressID&gt;Invalid Request&lt;/ExternalAddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Phone&gt;Invalid Request&lt;/Phone&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;PostalCode&gt;Invalid Request&lt;/PostalCode&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;StateOrProvince&gt;Invalid Request&lt;/StateOrProvince&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street1&gt;Invalid Request&lt;/Street1&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street2&gt;&lt;/Street2&gt;</code>
     *  <br/>
     *  &lt;/ShippingAddress&gt;
     *  </pre>
     *  <br/> </span></p>
     *
     * @var \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of the buyer.
     *  <br/><br/>
     *  It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is associated with the buyer's account.
     *
     * @var \Nogrod\eBaySDK\Trading\TaxIdentifierType[] $buyerTaxIdentifier
     */
    private $buyerTaxIdentifier = [

    ];

    /**
     * Gets as shippingAddress
     *
     * This container shows the buyer's shipping address.
     *  <br>
     *  <br>
     *  <p><span class="tablenote"><b>Note:</b> For an Authenticity Guarantee program order returned in <b>GetItemTransactions</b> or <b>GetSellerTransactions</b>, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For In-Store Pickup and Click and Collect orders, this is the address of the merchant's store where the buyer will pick up the order. This is only applicable for <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> calls.
     *  </span></p>
     *  <p><span class="tablenote"><b>Note:</b>
     *  For eBay Vault scenarios: <strong>GetItemTransactions</strong> calls, and <strong>GetSellerTransactions</strong> calls (Seller View only), mock address details are returned for: <br><br>-<em> Vault to vault orders: Buyer and Seller View</em><br><br>-<em> Ship to vault orders</em>: Mock addresses are returned for the Buyer View (only); the address returned for the Seller View will be the authenticator&amp;apos;s address.<br><br>-<em> Vault in-hand submission orders</em>: the address returned for the Buyer View will be the authenticator's address (<b>GetItemTransactions</b> only).<br> <br>
     *  The following address details are returned for mock addresses:
     *  <pre>
     *  &lt;ShippingAddress&gt;
     *  <br/>
     *  <code> &nbsp;&lt;Name&gt;eBay Vault&lt;/Name&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressID&gt;Invalid Request&lt;/AddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressOwner&gt;eBay&lt;/AddressOwner&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressUsage&gt;Invalid&lt;/AddressUsage&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CityName&gt;Invalid Request&lt;/CityName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Country&gt;US&lt;/Country&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CountryName&gt;Invalid Request&lt;/CountryName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;ExternalAddressID&gt;Invalid Request&lt;/ExternalAddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Phone&gt;Invalid Request&lt;/Phone&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;PostalCode&gt;Invalid Request&lt;/PostalCode&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;StateOrProvince&gt;Invalid Request&lt;/StateOrProvince&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street1&gt;Invalid Request&lt;/Street1&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street2&gt;&lt;/Street2&gt;</code>
     *  <br/>
     *  &lt;/ShippingAddress&gt;
     *  </pre>
     *  <br/> </span></p>
     *
     * @return \Nogrod\eBaySDK\Trading\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * This container shows the buyer's shipping address.
     *  <br>
     *  <br>
     *  <p><span class="tablenote"><b>Note:</b> For an Authenticity Guarantee program order returned in <b>GetItemTransactions</b> or <b>GetSellerTransactions</b>, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer's shipping address.
     *  </span></p>
     *  <p><span class="tablenote">
     *  <strong>Note:</strong> For In-Store Pickup and Click and Collect orders, this is the address of the merchant's store where the buyer will pick up the order. This is only applicable for <b>GetItemTransactions</b> and <b>GetSellerTransactions</b> calls.
     *  </span></p>
     *  <p><span class="tablenote"><b>Note:</b>
     *  For eBay Vault scenarios: <strong>GetItemTransactions</strong> calls, and <strong>GetSellerTransactions</strong> calls (Seller View only), mock address details are returned for: <br><br>-<em> Vault to vault orders: Buyer and Seller View</em><br><br>-<em> Ship to vault orders</em>: Mock addresses are returned for the Buyer View (only); the address returned for the Seller View will be the authenticator&amp;apos;s address.<br><br>-<em> Vault in-hand submission orders</em>: the address returned for the Buyer View will be the authenticator's address (<b>GetItemTransactions</b> only).<br> <br>
     *  The following address details are returned for mock addresses:
     *  <pre>
     *  &lt;ShippingAddress&gt;
     *  <br/>
     *  <code> &nbsp;&lt;Name&gt;eBay Vault&lt;/Name&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressID&gt;Invalid Request&lt;/AddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressOwner&gt;eBay&lt;/AddressOwner&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;AddressUsage&gt;Invalid&lt;/AddressUsage&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CityName&gt;Invalid Request&lt;/CityName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Country&gt;US&lt;/Country&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;CountryName&gt;Invalid Request&lt;/CountryName&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;ExternalAddressID&gt;Invalid Request&lt;/ExternalAddressID&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Phone&gt;Invalid Request&lt;/Phone&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;PostalCode&gt;Invalid Request&lt;/PostalCode&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;StateOrProvince&gt;Invalid Request&lt;/StateOrProvince&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street1&gt;Invalid Request&lt;/Street1&gt;</code>
     *  <br/>
     *  <code> &nbsp;&lt;Street2&gt;&lt;/Street2&gt;</code>
     *  <br/>
     *  &lt;/ShippingAddress&gt;
     *  </pre>
     *  <br/> </span></p>
     *
     * @param \Nogrod\eBaySDK\Trading\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Adds as buyerTaxIdentifier
     *
     * This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of the buyer.
     *  <br/><br/>
     *  It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is associated with the buyer's account.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\TaxIdentifierType $buyerTaxIdentifier
     */
    public function addToBuyerTaxIdentifier(\Nogrod\eBaySDK\Trading\TaxIdentifierType $buyerTaxIdentifier)
    {
        $this->buyerTaxIdentifier[] = $buyerTaxIdentifier;
        return $this;
    }

    /**
     * isset buyerTaxIdentifier
     *
     * This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of the buyer.
     *  <br/><br/>
     *  It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is associated with the buyer's account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerTaxIdentifier($index)
    {
        return isset($this->buyerTaxIdentifier[$index]);
    }

    /**
     * unset buyerTaxIdentifier
     *
     * This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of the buyer.
     *  <br/><br/>
     *  It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is associated with the buyer's account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerTaxIdentifier($index)
    {
        unset($this->buyerTaxIdentifier[$index]);
    }

    /**
     * Gets as buyerTaxIdentifier
     *
     * This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of the buyer.
     *  <br/><br/>
     *  It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is associated with the buyer's account.
     *
     * @return \Nogrod\eBaySDK\Trading\TaxIdentifierType[]
     */
    public function getBuyerTaxIdentifier()
    {
        return $this->buyerTaxIdentifier;
    }

    /**
     * Sets a new buyerTaxIdentifier
     *
     * This container consists of taxpayer identification for the buyer. Although this container may be used for other purposes at a later date, it is currently used by sellers selling on the Italy or Spain site to retrieve the taxpayer ID of the buyer.
     *  <br/><br/>
     *  It is now required that buyers registered on the Italy site provide their Codice Fiscale ID (similar to the Social Security Number for US citizens) before buying an item on the Italy site.
     *  <br/><br/>
     *  On the Spain site, a Spanish seller has the option to require that Spanish buyers (registered on Spain site) provide a tax ID before checkout. This option is set by the seller at the account level. Once a Spanish buyer provides a tax ID, this tax ID is associated with his/her account, and once a tax ID is associated with the account, Spanish buyer will be asked to provide the tax ID during checkout on all eBay sites. Buyers with a registered address outside of Spain will not be asked to provide a tax ID during checkout.
     *  <br/><br/>
     *  This container is only returned for Spanish or Italian sellers when the buyer was asked to provide tax identifier information during checkout. A <strong>BuyerTaxIdentifier</strong> will be returned for each tax ID that is associated with the buyer's account.
     *
     * @param \Nogrod\eBaySDK\Trading\TaxIdentifierType[] $buyerTaxIdentifier
     * @return self
     */
    public function setBuyerTaxIdentifier(array $buyerTaxIdentifier)
    {
        $this->buyerTaxIdentifier = $buyerTaxIdentifier;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingAddress", $value);
        }
        $value = $this->getBuyerTaxIdentifier();
        if (null !== $value && [] !== $this->getBuyerTaxIdentifier()) {
            $writer->write(array_map(function ($v) {return ["BuyerTaxIdentifier" => $v];}, $value));
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
        $value = Func::mapObject($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\Trading\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerTaxIdentifier');
        if (null !== $value) {
            $this->setBuyerTaxIdentifier(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\TaxIdentifierType::fromKeyValue($v);}, $value));
        }
    }
}
