<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ConsolidationJobType
 *
 * Enumerated type defining the possible shipping policies consolidation job types.
 * XSD Type: ConsolidationJobType
 */
class ConsolidationJobType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Constant for 'ShippingProfilesConsolidation' value.
     *
     * This value indicates that the job type is a shipping policies consolidation job.
     */
    public const VAL_SHIPPING_PROFILES_CONSOLIDATION = 'ShippingProfilesConsolidation';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
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
        $value = $this->jobId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'JobId', null, (string) $value);
        }
        $value = $this->jobType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'JobType', null, (string) $value);
        }
        $value = $this->jobStatus;
        if (null !== $value) {
            $writer->writeElementNs(null, 'JobStatus', null, (string) $value);
        }
        $value = $this->siteId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SiteId', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidationJobType
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
                case 'JobId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->jobId = (int) $value;
                    }
                    return true;
                case 'JobType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->jobType = $value;
                    }
                    return true;
                case 'JobStatus':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->jobStatus = $value;
                    }
                    return true;
                case 'SiteId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->siteId = (int) $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['JobId'] = $this->jobId;
        $data['JobType'] = $this->jobType;
        $data['JobStatus'] = $this->jobStatus;
        $data['SiteId'] = $this->siteId;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
