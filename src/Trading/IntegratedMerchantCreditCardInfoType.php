<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing IntegratedMerchantCreditCardInfoType
 *
 * This type is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments, and the <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container is no longer returned in <b>GetUser</b> response.
 * XSD Type: IntegratedMerchantCreditCardInfoType
 */
class IntegratedMerchantCreditCardInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container (and this field) are no longer returned in <b>GetUser</b> response, as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @var string[] $supportedSite
     */
    private $supportedSite = [

    ];

    /**
     * Adds as supportedSite
     *
     * The <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container (and this field) are no longer returned in <b>GetUser</b> response, as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @return self
     * @param string $supportedSite
     */
    public function addToSupportedSite($supportedSite)
    {
        $this->supportedSite[] = $supportedSite;
        return $this;
    }

    /**
     * isset supportedSite
     *
     * The <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container (and this field) are no longer returned in <b>GetUser</b> response, as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedSite($index)
    {
        return isset($this->supportedSite[$index]);
    }

    /**
     * unset supportedSite
     *
     * The <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container (and this field) are no longer returned in <b>GetUser</b> response, as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedSite($index)
    {
        unset($this->supportedSite[$index]);
    }

    /**
     * Gets as supportedSite
     *
     * The <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container (and this field) are no longer returned in <b>GetUser</b> response, as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @return string[]
     */
    public function getSupportedSite()
    {
        return $this->supportedSite;
    }

    /**
     * Sets a new supportedSite
     *
     * The <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container (and this field) are no longer returned in <b>GetUser</b> response, as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     *
     * @param string $supportedSite
     * @return self
     */
    public function setSupportedSite(array $supportedSite)
    {
        $this->supportedSite = $supportedSite;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSupportedSite();
        if (null !== $value && [] !== $this->getSupportedSite()) {
            $writer->write(array_map(function ($v) {return ["SupportedSite" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SupportedSite');
        if (null !== $value) {
            $this->setSupportedSite($value);
        }
    }
}
