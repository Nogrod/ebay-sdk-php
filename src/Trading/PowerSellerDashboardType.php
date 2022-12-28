<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PowerSellerDashboardType
 *
 * Type defining the <b>PowerSellerStatus</b> container returned in the
 *  <b>GetSellerDashboard</b> response. The <b>PowerSellerStatus</b>
 *  container is only returned if the seller making the call is a Power Seller.
 * XSD Type: PowerSellerDashboardType
 */
class PowerSellerDashboardType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field indicates the seller's eBay PowerSeller tier. PowerSellers are
     *  distinguished in five tiers based on average monthly sales. Benefits and services vary
     *  for each tier. eBay calculates eligibility for each tier on a monthly basis.
     *
     * @var string $level
     */
    private $level = null;

    /**
     * The <b>PowerSellerStatus.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  PowerSeller status.
     *
     * @var \Nogrod\eBaySDK\Trading\SellerDashboardAlertType[] $alert
     */
    private $alert = [

    ];

    /**
     * Gets as level
     *
     * This field indicates the seller's eBay PowerSeller tier. PowerSellers are
     *  distinguished in five tiers based on average monthly sales. Benefits and services vary
     *  for each tier. eBay calculates eligibility for each tier on a monthly basis.
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * This field indicates the seller's eBay PowerSeller tier. PowerSellers are
     *  distinguished in five tiers based on average monthly sales. Benefits and services vary
     *  for each tier. eBay calculates eligibility for each tier on a monthly basis.
     *
     * @param string $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Adds as alert
     *
     * The <b>PowerSellerStatus.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  PowerSeller status.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellerDashboardAlertType $alert
     */
    public function addToAlert(\Nogrod\eBaySDK\Trading\SellerDashboardAlertType $alert)
    {
        $this->alert[] = $alert;
        return $this;
    }

    /**
     * isset alert
     *
     * The <b>PowerSellerStatus.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  PowerSeller status.
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
     * The <b>PowerSellerStatus.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  PowerSeller status.
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
     * The <b>PowerSellerStatus.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  PowerSeller status.
     *
     * @return \Nogrod\eBaySDK\Trading\SellerDashboardAlertType[]
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * The <b>PowerSellerStatus.Alert</b> container is only returned if eBay
     *  has posted one or more informational or warning messages related to the seller's
     *  PowerSeller status.
     *
     * @param \Nogrod\eBaySDK\Trading\SellerDashboardAlertType[] $alert
     * @return self
     */
    public function setAlert(array $alert)
    {
        $this->alert = $alert;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Level", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Level');
        if (null !== $value) {
            $this->setLevel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Alert', true);
        if (null !== $value && !empty($value)) {
            $this->setAlert(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellerDashboardAlertType::fromKeyValue($v);
            }, $value));
        }
    }
}
