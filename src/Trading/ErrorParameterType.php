<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorParameterType
 *
 * This type is used by the <b>ErrorParameters</b> container if one or more errors or warnings occur with the call, and if a specific request parameter has been pinpointed as the reason why the error or warning was triggered.
 * XSD Type: ErrorParameterType
 */
class ErrorParameterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
        $value = $this->paramID;
        if (null !== $value) {
            $writer->writeAttribute('ParamID', (string) $value);
        }
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->value;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Value', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ErrorParameterType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        switch ($reader->localName) {
            case 'ParamID':
                $this->paramID = $reader->value;
                return true;
        }
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
                case 'Value':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->value = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['ParamID'] = $this->paramID;
        $data['Value'] = $this->value;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
