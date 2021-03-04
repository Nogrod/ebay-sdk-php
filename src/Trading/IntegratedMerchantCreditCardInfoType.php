<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing IntegratedMerchantCreditCardInfoType
 *
 * <span class="tablenote"><b>Note: </b>
 *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay managed payments program (if the program is available to that seller).
 *  </span>
 *  <br/>
 *  This type is used by the <b>IntegratedMerchantCreditCardInfo</b> container that is returned in the <b>GetUser</b> response if the seller has a payment gateway account on one or more eBay marketplaces.
 * XSD Type: IntegratedMerchantCreditCardInfoType
 */
class IntegratedMerchantCreditCardInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay managed payments program (if the program is available to that seller).
     *  </span>
     *  <br/>
     *  This enumeration value indicates the eBay marketplace on which the seller has a payment gateway account, an account that allows the seller to accept credit card payments from buyers.
     *
     * @var string[] $supportedSite
     */
    private $supportedSite = [
        
    ];

    /**
     * Adds as supportedSite
     *
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay managed payments program (if the program is available to that seller).
     *  </span>
     *  <br/>
     *  This enumeration value indicates the eBay marketplace on which the seller has a payment gateway account, an account that allows the seller to accept credit card payments from buyers.
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
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay managed payments program (if the program is available to that seller).
     *  </span>
     *  <br/>
     *  This enumeration value indicates the eBay marketplace on which the seller has a payment gateway account, an account that allows the seller to accept credit card payments from buyers.
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
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay managed payments program (if the program is available to that seller).
     *  </span>
     *  <br/>
     *  This enumeration value indicates the eBay marketplace on which the seller has a payment gateway account, an account that allows the seller to accept credit card payments from buyers.
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
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay managed payments program (if the program is available to that seller).
     *  </span>
     *  <br/>
     *  This enumeration value indicates the eBay marketplace on which the seller has a payment gateway account, an account that allows the seller to accept credit card payments from buyers.
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
     * <span class="tablenote"><b>Note: </b>
     *  As of May 1, 2019, eBay no longer support electronic payments through Integrated Merchant Credit Card accounts. To accept online credit card payments from buyers, a seller must use specify PayPal as an accepted payment method, or opt in to eBay managed payments program (if the program is available to that seller).
     *  </span>
     *  <br/>
     *  This enumeration value indicates the eBay marketplace on which the seller has a payment gateway account, an account that allows the seller to accept credit card payments from buyers.
     *
     * @param string $supportedSite
     * @return self
     */
    public function setSupportedSite(array $supportedSite)
    {
        $this->supportedSite = $supportedSite;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSupportedSite();
        if (null !== $value && !empty($this->getSupportedSite())) {
            $writer->write(array_map(function ($v) {
                return ["SupportedSite" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SupportedSite', true);
        if (null !== $value && !empty($value)) {
            $this->setSupportedSite($value);
        }
    }
}
