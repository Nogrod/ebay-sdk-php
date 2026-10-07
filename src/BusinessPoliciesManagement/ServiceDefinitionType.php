<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ServiceDefinitionType
 *
 * This type is reserved for future use.
 * XSD Type: ServiceDefinition
 */
class ServiceDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This field is reserved for future use.
     *
     * @var string $superscript
     */
    private $superscript = null;

    /**
     * This field is reserved for future use.
     *
     * @var int $maxDeliveryServiceDefinition
     */
    private $maxDeliveryServiceDefinition = null;

    /**
     * This field is reserved for future use.
     *
     * @var int $minDeliveryServiceDefinition
     */
    private $minDeliveryServiceDefinition = null;

    /**
     * This field is reserved for future use.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as superscript
     *
     * This field is reserved for future use.
     *
     * @return string
     */
    public function getSuperscript()
    {
        return $this->superscript;
    }

    /**
     * Sets a new superscript
     *
     * This field is reserved for future use.
     *
     * @param string $superscript
     * @return self
     */
    public function setSuperscript($superscript)
    {
        $this->superscript = $superscript;
        return $this;
    }

    /**
     * Gets as maxDeliveryServiceDefinition
     *
     * This field is reserved for future use.
     *
     * @return int
     */
    public function getMaxDeliveryServiceDefinition()
    {
        return $this->maxDeliveryServiceDefinition;
    }

    /**
     * Sets a new maxDeliveryServiceDefinition
     *
     * This field is reserved for future use.
     *
     * @param int $maxDeliveryServiceDefinition
     * @return self
     */
    public function setMaxDeliveryServiceDefinition($maxDeliveryServiceDefinition)
    {
        $this->maxDeliveryServiceDefinition = $maxDeliveryServiceDefinition;
        return $this;
    }

    /**
     * Gets as minDeliveryServiceDefinition
     *
     * This field is reserved for future use.
     *
     * @return int
     */
    public function getMinDeliveryServiceDefinition()
    {
        return $this->minDeliveryServiceDefinition;
    }

    /**
     * Sets a new minDeliveryServiceDefinition
     *
     * This field is reserved for future use.
     *
     * @param int $minDeliveryServiceDefinition
     * @return self
     */
    public function setMinDeliveryServiceDefinition($minDeliveryServiceDefinition)
    {
        $this->minDeliveryServiceDefinition = $minDeliveryServiceDefinition;
        return $this;
    }

    /**
     * Gets as name
     *
     * This field is reserved for future use.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * This field is reserved for future use.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
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
        $value = $this->superscript;
        if (null !== $value) {
            $writer->writeElementNs(null, 'superscript', null, (string) $value);
        }
        $value = $this->maxDeliveryServiceDefinition;
        if (null !== $value) {
            $writer->writeElementNs(null, 'maxDeliveryServiceDefinition', null, (string) $value);
        }
        $value = $this->minDeliveryServiceDefinition;
        if (null !== $value) {
            $writer->writeElementNs(null, 'minDeliveryServiceDefinition', null, (string) $value);
        }
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'name', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ServiceDefinitionType
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
                case 'superscript':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->superscript = $value;
                    }
                    return true;
                case 'maxDeliveryServiceDefinition':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->maxDeliveryServiceDefinition = (int) $value;
                    }
                    return true;
                case 'minDeliveryServiceDefinition':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->minDeliveryServiceDefinition = (int) $value;
                    }
                    return true;
                case 'name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['superscript'] = $this->superscript;
        $data['maxDeliveryServiceDefinition'] = $this->maxDeliveryServiceDefinition;
        $data['minDeliveryServiceDefinition'] = $this->minDeliveryServiceDefinition;
        $data['name'] = $this->name;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
