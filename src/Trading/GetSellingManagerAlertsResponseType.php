<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetSellingManagerAlertsResponseType
 *
 * Type defining the call-specific response fields for the <b>GetSellingManagerAlerts</b>
 *  call.
 * XSD Type: GetSellingManagerAlertsResponseType
 */
class GetSellingManagerAlertsResponseType extends AbstractResponseType
{

    /**
     * Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, item sold, and a general alert.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerAlertType[] $alert
     */
    private $alert = [
        
    ];

    /**
     * Adds as alert
     *
     * Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, item sold, and a general alert.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellingManagerAlertType $alert
     */
    public function addToAlert(\Nogrod\eBaySDK\Trading\SellingManagerAlertType $alert)
    {
        $this->alert[] = $alert;
        return $this;
    }

    /**
     * isset alert
     *
     * Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, item sold, and a general alert.
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
     * Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, item sold, and a general alert.
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
     * Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, item sold, and a general alert.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerAlertType[]
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * Container consisting of details related to a Selling Manager alert. Alert types include listing automation, inventory, item sold, and a general alert.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerAlertType[] $alert
     * @return self
     */
    public function setAlert(array $alert)
    {
        $this->alert = $alert;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Alert', true);
        if (null !== $value && !empty($value)) {
            $this->setAlert(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellingManagerAlertType::fromKeyValue($v);
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
