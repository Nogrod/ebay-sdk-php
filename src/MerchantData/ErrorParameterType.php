<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorParameterType
 *
 * This type is used by the <b>ErrorParameters</b> container if one or more errors or warnings occur with the call, and if a specific request parameter has been pinpointed as the reason why the error or warning was triggered.
 * XSD Type: ErrorParameterType
 */
class ErrorParameterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This is name of the request parameter that has been pinpointed as the reason why the error or warning was triggered. This value might be <b>ItemID</b>, in which case the identifier of that item would be returned in the <b>Value</b> field.
     *
     * @var string $paramID
     */
    private $paramID = null;

    /**
     * This is the value of the request parameter noted in the <b>ParamID</b> attribute. So, if the <b>ParamID</b> value was <b>ItemID</b>, the value in this field would be the actual value of that <b>ItemID</b>.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as paramID
     *
     * This is name of the request parameter that has been pinpointed as the reason why the error or warning was triggered. This value might be <b>ItemID</b>, in which case the identifier of that item would be returned in the <b>Value</b> field.
     *
     * @return string
     */
    public function getParamID()
    {
        return $this->paramID;
    }

    /**
     * Sets a new paramID
     *
     * This is name of the request parameter that has been pinpointed as the reason why the error or warning was triggered. This value might be <b>ItemID</b>, in which case the identifier of that item would be returned in the <b>Value</b> field.
     *
     * @param string $paramID
     * @return self
     */
    public function setParamID($paramID)
    {
        $this->paramID = $paramID;
        return $this;
    }

    /**
     * Gets as value
     *
     * This is the value of the request parameter noted in the <b>ParamID</b> attribute. So, if the <b>ParamID</b> value was <b>ItemID</b>, the value in this field would be the actual value of that <b>ItemID</b>.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * This is the value of the request parameter noted in the <b>ParamID</b> attribute. So, if the <b>ParamID</b> value was <b>ItemID</b>, the value in this field would be the actual value of that <b>ItemID</b>.
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getParamID();
        if (null !== $value) {
            $writer->writeAttribute("ParamID", $value);
        }
        $value = $this->getValue();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Value", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value');
        if (null !== $value) {
            $this->setValue($value);
        }
    }
}
