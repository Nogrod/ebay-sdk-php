<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ExtensionType
 *
 * Reserved for future use.
 * XSD Type: ExtensionType
 */
class ExtensionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Reserved for future use.
     *
     * @var int $id
     */
    private $id = null;

    /**
     * Reserved for future use.
     *
     * @var string $version
     */
    private $version = null;

    /**
     * Reserved for future use.
     *
     * @var string $contentType
     */
    private $contentType = null;

    /**
     * Reserved for future use.
     *
     * @var string $value
     */
    private $value = null;

    /**
     * Gets as id
     *
     * Reserved for future use.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Reserved for future use.
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as version
     *
     * Reserved for future use.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Reserved for future use.
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as contentType
     *
     * Reserved for future use.
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Sets a new contentType
     *
     * Reserved for future use.
     *
     * @param string $contentType
     * @return self
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * Gets as value
     *
     * Reserved for future use.
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
     * Reserved for future use.
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
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->id;
        if (null !== $value) {
            $writer->writeElementNs(null, 'id', null, (string) $value);
        }
        $value = $this->version;
        if (null !== $value) {
            $writer->writeElementNs(null, 'version', null, (string) $value);
        }
        $value = $this->contentType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'contentType', null, (string) $value);
        }
        $value = $this->value;
        if (null !== $value) {
            $writer->writeElementNs(null, 'value', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ExtensionType
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
                case 'id':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->id = (int) $value;
                    }
                    return true;
                case 'version':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->version = $value;
                    }
                    return true;
                case 'contentType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->contentType = $value;
                    }
                    return true;
                case 'value':
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
        $data['id'] = $this->id;
        $data['version'] = $this->version;
        $data['contentType'] = $this->contentType;
        $data['value'] = $this->value;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
