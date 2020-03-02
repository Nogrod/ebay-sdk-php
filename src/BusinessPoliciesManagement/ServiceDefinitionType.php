<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ServiceDefinitionType
 *
 * ServiceDefinition:
 * XSD Type: ServiceDefinition
 */
class ServiceDefinitionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * @var string $superscript
     */
    private $superscript = null;

    /**
     * @var int $maxDeliveryServiceDefinition
     */
    private $maxDeliveryServiceDefinition = null;

    /**
     * @var int $minDeliveryServiceDefinition
     */
    private $minDeliveryServiceDefinition = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as superscript
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
     * @return int
     */
    public function getMaxDeliveryServiceDefinition()
    {
        return $this->maxDeliveryServiceDefinition;
    }

    /**
     * Sets a new maxDeliveryServiceDefinition
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
     * @return int
     */
    public function getMinDeliveryServiceDefinition()
    {
        return $this->minDeliveryServiceDefinition;
    }

    /**
     * Sets a new minDeliveryServiceDefinition
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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getSuperscript();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}superscript", $value);
        }
        $value = $this->getMaxDeliveryServiceDefinition();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}maxDeliveryServiceDefinition", $value);
        }
        $value = $this->getMinDeliveryServiceDefinition();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}minDeliveryServiceDefinition", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}name", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}superscript');
        if (null !== $value) {
            $this->setSuperscript($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}maxDeliveryServiceDefinition');
        if (null !== $value) {
            $this->setMaxDeliveryServiceDefinition($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}minDeliveryServiceDefinition');
        if (null !== $value) {
            $this->setMinDeliveryServiceDefinition($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}name');
        if (null !== $value) {
            $this->setName($value);
        }
    }
}
