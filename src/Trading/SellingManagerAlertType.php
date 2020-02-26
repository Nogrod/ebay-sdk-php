<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SellingManagerAlertType
 *
 * Type defining the Alert container, which contains summary information on one type of
 *  Selling Manager alert.
 * XSD Type: SellingManagerAlertType
 */
class SellingManagerAlertType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field indicates the type of Selling Manager alert returned to the seller. This
     *  field is always returned with the <b>Alert</b> container in the
     *  <b>GetSellingManagerAlerts</b> response.
     *
     * @var string $alertType
     */
    private $alertType = null;

    /**
     * This value indicates an alert related to a sold item. This field is only returned
     *  if <b>AlertType</b>='Sold'.
     *
     * @var string $soldAlert
     */
    private $soldAlert = null;

    /**
     * This value indicates an alert related to the seller's inventory, such as a
     *  restocking alert. This field is only returned if
     *  <b>AlertType</b>='Inventory'.
     *
     * @var string $inventoryAlert
     */
    private $inventoryAlert = null;

    /**
     * This value indicates an alert related to listing automation, and may be received
     *  when a listing does not conform to listing automation rules. This field is only
     *  returned if <b>AlertType</b>='Automation'.
     *
     * @var string $automationAlert
     */
    private $automationAlert = null;

    /**
     * This value indicates an alert related to a PaisaPay issue. This field is only
     *  returned if <b>AlertType</b>='PaisaPay'.
     *
     * @var string $paisaPayAlert
     */
    private $paisaPayAlert = null;

    /**
     * This value indicates a general alert was received, such as negative feedback
     *  received or an unpaid item dispute. This field is only returned if <b>
     *  AlertType</b>='General'.
     *
     * @var string $generalAlert
     */
    private $generalAlert = null;

    /**
     * Represents the duration for which this alert is computed. This field is only
     *  returned if the alert is based on duration.
     *
     * @var int $durationInDays
     */
    private $durationInDays = null;

    /**
     * This field indicates the number of items affected by the alert. This field is not
     *  returned if the count is 0.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Gets as alertType
     *
     * This field indicates the type of Selling Manager alert returned to the seller. This
     *  field is always returned with the <b>Alert</b> container in the
     *  <b>GetSellingManagerAlerts</b> response.
     *
     * @return string
     */
    public function getAlertType()
    {
        return $this->alertType;
    }

    /**
     * Sets a new alertType
     *
     * This field indicates the type of Selling Manager alert returned to the seller. This
     *  field is always returned with the <b>Alert</b> container in the
     *  <b>GetSellingManagerAlerts</b> response.
     *
     * @param string $alertType
     * @return self
     */
    public function setAlertType($alertType)
    {
        $this->alertType = $alertType;
        return $this;
    }

    /**
     * Gets as soldAlert
     *
     * This value indicates an alert related to a sold item. This field is only returned
     *  if <b>AlertType</b>='Sold'.
     *
     * @return string
     */
    public function getSoldAlert()
    {
        return $this->soldAlert;
    }

    /**
     * Sets a new soldAlert
     *
     * This value indicates an alert related to a sold item. This field is only returned
     *  if <b>AlertType</b>='Sold'.
     *
     * @param string $soldAlert
     * @return self
     */
    public function setSoldAlert($soldAlert)
    {
        $this->soldAlert = $soldAlert;
        return $this;
    }

    /**
     * Gets as inventoryAlert
     *
     * This value indicates an alert related to the seller's inventory, such as a
     *  restocking alert. This field is only returned if
     *  <b>AlertType</b>='Inventory'.
     *
     * @return string
     */
    public function getInventoryAlert()
    {
        return $this->inventoryAlert;
    }

    /**
     * Sets a new inventoryAlert
     *
     * This value indicates an alert related to the seller's inventory, such as a
     *  restocking alert. This field is only returned if
     *  <b>AlertType</b>='Inventory'.
     *
     * @param string $inventoryAlert
     * @return self
     */
    public function setInventoryAlert($inventoryAlert)
    {
        $this->inventoryAlert = $inventoryAlert;
        return $this;
    }

    /**
     * Gets as automationAlert
     *
     * This value indicates an alert related to listing automation, and may be received
     *  when a listing does not conform to listing automation rules. This field is only
     *  returned if <b>AlertType</b>='Automation'.
     *
     * @return string
     */
    public function getAutomationAlert()
    {
        return $this->automationAlert;
    }

    /**
     * Sets a new automationAlert
     *
     * This value indicates an alert related to listing automation, and may be received
     *  when a listing does not conform to listing automation rules. This field is only
     *  returned if <b>AlertType</b>='Automation'.
     *
     * @param string $automationAlert
     * @return self
     */
    public function setAutomationAlert($automationAlert)
    {
        $this->automationAlert = $automationAlert;
        return $this;
    }

    /**
     * Gets as paisaPayAlert
     *
     * This value indicates an alert related to a PaisaPay issue. This field is only
     *  returned if <b>AlertType</b>='PaisaPay'.
     *
     * @return string
     */
    public function getPaisaPayAlert()
    {
        return $this->paisaPayAlert;
    }

    /**
     * Sets a new paisaPayAlert
     *
     * This value indicates an alert related to a PaisaPay issue. This field is only
     *  returned if <b>AlertType</b>='PaisaPay'.
     *
     * @param string $paisaPayAlert
     * @return self
     */
    public function setPaisaPayAlert($paisaPayAlert)
    {
        $this->paisaPayAlert = $paisaPayAlert;
        return $this;
    }

    /**
     * Gets as generalAlert
     *
     * This value indicates a general alert was received, such as negative feedback
     *  received or an unpaid item dispute. This field is only returned if <b>
     *  AlertType</b>='General'.
     *
     * @return string
     */
    public function getGeneralAlert()
    {
        return $this->generalAlert;
    }

    /**
     * Sets a new generalAlert
     *
     * This value indicates a general alert was received, such as negative feedback
     *  received or an unpaid item dispute. This field is only returned if <b>
     *  AlertType</b>='General'.
     *
     * @param string $generalAlert
     * @return self
     */
    public function setGeneralAlert($generalAlert)
    {
        $this->generalAlert = $generalAlert;
        return $this;
    }

    /**
     * Gets as durationInDays
     *
     * Represents the duration for which this alert is computed. This field is only
     *  returned if the alert is based on duration.
     *
     * @return int
     */
    public function getDurationInDays()
    {
        return $this->durationInDays;
    }

    /**
     * Sets a new durationInDays
     *
     * Represents the duration for which this alert is computed. This field is only
     *  returned if the alert is based on duration.
     *
     * @param int $durationInDays
     * @return self
     */
    public function setDurationInDays($durationInDays)
    {
        $this->durationInDays = $durationInDays;
        return $this;
    }

    /**
     * Gets as count
     *
     * This field indicates the number of items affected by the alert. This field is not
     *  returned if the count is 0.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * This field indicates the number of items affected by the alert. This field is not
     *  returned if the count is 0.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAlertType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AlertType", $value);
        }
        $value = $this->getSoldAlert();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldAlert", $value);
        }
        $value = $this->getInventoryAlert();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InventoryAlert", $value);
        }
        $value = $this->getAutomationAlert();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}AutomationAlert", $value);
        }
        $value = $this->getPaisaPayAlert();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaisaPayAlert", $value);
        }
        $value = $this->getGeneralAlert();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}GeneralAlert", $value);
        }
        $value = $this->getDurationInDays();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DurationInDays", $value);
        }
        $value = $this->getCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Count", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AlertType');
        if (null !== $value) {
            $this->setAlertType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldAlert');
        if (null !== $value) {
            $this->setSoldAlert($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InventoryAlert');
        if (null !== $value) {
            $this->setInventoryAlert($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AutomationAlert');
        if (null !== $value) {
            $this->setAutomationAlert($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaisaPayAlert');
        if (null !== $value) {
            $this->setPaisaPayAlert($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}GeneralAlert');
        if (null !== $value) {
            $this->setGeneralAlert($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DurationInDays');
        if (null !== $value) {
            $this->setDurationInDays($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Count');
        if (null !== $value) {
            $this->setCount($value);
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
