<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryGroupType
 *
 *
 * XSD Type: CategoryGroup
 */
class CategoryGroupType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var bool $default
     */
    private $default = null;

    /**
     * @var string $name
     */
    private $name = null;

    /**
     * @var bool $eTRS
     */
    private $eTRS = null;

    /**
     * Gets as default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
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

    /**
     * Gets as eTRS
     *
     * @return bool
     */
    public function getETRS()
    {
        return $this->eTRS;
    }

    /**
     * Sets a new eTRS
     *
     * @param bool $eTRS
     * @return self
     */
    public function setETRS($eTRS)
    {
        $this->eTRS = $eTRS;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getDefault();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}default", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}name", $value);
        }
        $value = $this->getETRS();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}ETRS", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}default');
        if (null !== $value) {
            $this->setDefault($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}ETRS');
        if (null !== $value) {
            $this->setETRS($value);
        }
    }
}
