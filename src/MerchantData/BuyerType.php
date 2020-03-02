<?php

namespace Nogrod\eBaySDK\MerchantData;

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
     * This container uses <b>AddressType</b>, and each call that uses <b>BuyerType</b> uses the <b>ShippingAddress</b> container a little differently. See the Call Reference documentation for each call to see what fields of <b>AddressType</b> are used by each call.
     *  Output only.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress
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
     * @var \Nogrod\eBaySDK\MerchantData\TaxIdentifierType[] $buyerTaxIdentifier
     */
    private $buyerTaxIdentifier = [
        
    ];

    /**
     * Gets as shippingAddress
     *
     * This container uses <b>AddressType</b>, and each call that uses <b>BuyerType</b> uses the <b>ShippingAddress</b> container a little differently. See the Call Reference documentation for each call to see what fields of <b>AddressType</b> are used by each call.
     *  Output only.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * This container uses <b>AddressType</b>, and each call that uses <b>BuyerType</b> uses the <b>ShippingAddress</b> container a little differently. See the Call Reference documentation for each call to see what fields of <b>AddressType</b> are used by each call.
     *  Output only.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress
     * @return self
     */
    public function setShippingAddress(\Nogrod\eBaySDK\MerchantData\AddressType $shippingAddress)
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
     * @param \Nogrod\eBaySDK\MerchantData\TaxIdentifierType $buyerTaxIdentifier
     */
    public function addToBuyerTaxIdentifier(\Nogrod\eBaySDK\MerchantData\TaxIdentifierType $buyerTaxIdentifier)
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
     * @return \Nogrod\eBaySDK\MerchantData\TaxIdentifierType[]
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
     * @param \Nogrod\eBaySDK\MerchantData\TaxIdentifierType[] $buyerTaxIdentifier
     * @return self
     */
    public function setBuyerTaxIdentifier(array $buyerTaxIdentifier)
    {
        $this->buyerTaxIdentifier = $buyerTaxIdentifier;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingAddress();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingAddress", $value);
        }
        $value = $this->getBuyerTaxIdentifier();
        if (null !== $value && !empty($this->getBuyerTaxIdentifier())) {
            $writer->write(array_map(function ($v) {
                return ["BuyerTaxIdentifier" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingAddress');
        if (null !== $value) {
            $this->setShippingAddress(\Nogrod\eBaySDK\MerchantData\AddressType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BuyerTaxIdentifier', true);
        if (null !== $value && !empty($value)) {
            $this->setBuyerTaxIdentifier(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\TaxIdentifierType::fromKeyValue($v);
            }, $value));
        }
    }
}
