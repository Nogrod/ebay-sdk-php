<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerAccountDashboardType
 *
 * Type defining the <b>SellerAccount</b> container returned in the
 *  <b>GetSellerDashboard</b> response.
 * XSD Type: SellerAccountDashboardType
 */
class SellerAccountDashboardType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field indicates the status of your seller's account. Specifically, you'll find out if your
     *  account is current and active, or if your account has a past due balance or is on
     *  hold. For more details about your account, you can go to your Seller Account page
     *  on the eBay site (login to My eBay), or you can call <b>GetAccount</b>.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The <b>SellerAccount.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages to the seller's account.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType[] $alert
     */
    private $alert = [

    ];

    /**
     * Gets as status
     *
     * This field indicates the status of your seller's account. Specifically, you'll find out if your
     *  account is current and active, or if your account has a past due balance or is on
     *  hold. For more details about your account, you can go to your Seller Account page
     *  on the eBay site (login to My eBay), or you can call <b>GetAccount</b>.
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
     * This field indicates the status of your seller's account. Specifically, you'll find out if your
     *  account is current and active, or if your account has a past due balance or is on
     *  hold. For more details about your account, you can go to your Seller Account page
     *  on the eBay site (login to My eBay), or you can call <b>GetAccount</b>.
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
     * The <b>SellerAccount.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages to the seller's account.
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
     * The <b>SellerAccount.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages to the seller's account.
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
     * The <b>SellerAccount.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages to the seller's account.
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
     * The <b>SellerAccount.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages to the seller's account.
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
     * The <b>SellerAccount.Alert</b> container is only returned if eBay has
     *  posted one or more informational or warning messages to the seller's account.
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Alert', true);
        if (null !== $value && !empty($value)) {
            $this->setAlert(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\SellerDashboardAlertType::fromKeyValue($v);
            }, $value));
        }
    }
}
