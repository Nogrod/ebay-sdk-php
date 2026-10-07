<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorMessageType
 *
 * Information regarding an error or warning that occurred when eBay processed the request. Not returned when the <b>ack</b> value is <b>Success</b>.
 * XSD Type: ErrorMessage
 */
class ErrorMessageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Details about a single error.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType[] $error
     */
    private $error = [

    ];

    /**
     * Adds as error
     *
     * Details about a single error.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error
     */
    public function addToError(\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType $error)
    {
        if (!is_array($this->error)) {
            throw new \LogicException('error is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * Details about a single error.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * Details about a single error.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * Details about a single error.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType>
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * Details about a single error.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType> $error
     * @return self
     */
    public function setError(iterable $error)
    {
        $this->error = $error;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->error;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'error', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorMessageType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->error = [];
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'error':
                    $this->error[] = \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorDataType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['error'] = Func::jsonList($this->error);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
