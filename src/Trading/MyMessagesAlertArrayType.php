<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MyMessagesAlertArrayType
 *
 * This type is deprecated.
 * XSD Type: MyMessagesAlertArrayType
 */
class MyMessagesAlertArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field is deprecated.
     *
     * @var \Nogrod\eBaySDK\Trading\MyMessagesAlertType[] $alert
     */
    private $alert = [
        
    ];

    /**
     * Adds as alert
     *
     * This field is deprecated.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MyMessagesAlertType $alert
     */
    public function addToAlert(\Nogrod\eBaySDK\Trading\MyMessagesAlertType $alert)
    {
        $this->alert[] = $alert;
        return $this;
    }

    /**
     * isset alert
     *
     * This field is deprecated.
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
     * This field is deprecated.
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
     * This field is deprecated.
     *
     * @return \Nogrod\eBaySDK\Trading\MyMessagesAlertType[]
     */
    public function getAlert()
    {
        return $this->alert;
    }

    /**
     * Sets a new alert
     *
     * This field is deprecated.
     *
     * @param \Nogrod\eBaySDK\Trading\MyMessagesAlertType[] $alert
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Alert', true);
        if (null !== $value && !empty($value)) {
            $this->setAlert(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\MyMessagesAlertType::fromKeyValue($v);
            }, $value));
        }
    }
}
