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
        if (!is_array($this->supportedSite)) {
            throw new \LogicException('supportedSite is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setSupportedSite(iterable $supportedSite)
    {
        $this->supportedSite = $supportedSite;
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
        $value = $this->supportedSite;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'SupportedSite', null, (string) $v);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\IntegratedMerchantCreditCardInfoType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->supportedSite = [];
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
                case 'SupportedSite':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->supportedSite[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
