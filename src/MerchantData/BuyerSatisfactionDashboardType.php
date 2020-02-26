<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing BuyerSatisfactionDashboardType
 *
 * Type defining the <b>BuyerSatisfaction</b> container returned in the
 *  <b>GetSellerDashboard</b> response. The <b>BuyerSatisfaction</b>
 *  container consists of the seller's buyer satisfaction rating, as well as any alerts
 *  related to customer service.
 * XSD Type: BuyerSatisfactionDashboardType
 */
class BuyerSatisfactionDashboardType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field indicates the seller's buyer satisfaction rating. To determine this
     *  rating, eBay considers your detailed seller ratings, your overall feedback rating,
     *  and whatever buyer protection claims might exist on your account. eBay uses the
     *  buyer satisfaction rating to see if you are eligible for certain rewards, or if you
     *  need additional guidance to help you give better service.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The <b>BuyerSatisfaction.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  buyer satisfaction rating.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType[] $alert
     */
    private $alert = [
        
    ];

    /**
     * Gets as status
     *
     * This field indicates the seller's buyer satisfaction rating. To determine this
     *  rating, eBay considers your detailed seller ratings, your overall feedback rating,
     *  and whatever buyer protection claims might exist on your account. eBay uses the
     *  buyer satisfaction rating to see if you are eligible for certain rewards, or if you
     *  need additional guidance to help you give better service.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * This field indicates the seller's buyer satisfaction rating. To determine this
     *  rating, eBay considers your detailed seller ratings, your overall feedback rating,
     *  and whatever buyer protection claims might exist on your account. eBay uses the
     *  buyer satisfaction rating to see if you are eligible for certain rewards, or if you
     *  need additional guidance to help you give better service.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as alert
     *
     * The <b>BuyerSatisfaction.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  buyer satisfaction rating.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType $alert
     */
    public function addToAlert(\Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType $alert)
    {
        $this->alert[] = $alert;
        return $this;
    }

    /**
     * isset alert
     *
     * The <b>BuyerSatisfaction.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  buyer satisfaction rating.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlert($index)
    {
        return isset($this->alert[$index]);
    }

    /**
     * unset alert
     *
     * The <b>BuyerSatisfaction.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  buyer satisfaction rating.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlert($index)
    {
        unset($this->alert[$index]);
    }

    /**
     * Gets as alert
     *
     * The <b>BuyerSatisfaction.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  buyer satisfaction rating.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType[]
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * The <b>BuyerSatisfaction.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  buyer satisfaction rating.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType[] $alert
     * @return self
     */
    public function setAlert(array $alert)
    {
        $this->alert = $alert;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getAlert();
        if (null !== $value && !empty($this->getAlert())) {
            $writer->write(array_map(function ($v) {
                return ["Alert" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Alert', true);
        if (null !== $value && !empty($value)) {
            $this->setAlert(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType::fromKeyValue($v);
            }, $value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
