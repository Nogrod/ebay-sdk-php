<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ResponsiblePersonCodeTypesType
 *
 * Container for collection of possible responsible person enumerations.
 * XSD Type: ResponsiblePersonCodeTypes
 */
class ResponsiblePersonCodeTypesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @var string[] $type
     */
    private $type = [

    ];

    /**
     * Adds as type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @return self
     * @param string $type
     */
    public function addToType($type)
    {
        if (!is_array($this->type)) {
            throw new \LogicException('type is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->type[] = $type;
        return $this;
    }

    /**
     * isset type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetType($index)
    {
        return isset($this->type[$index]);
    }

    /**
     * unset type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetType($index)
    {
        unset($this->type[$index]);
    }

    /**
     * Gets as type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @return iterable<string>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of Responsible Person associated with the listing.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Currently, the only supported value is <code>EUResponsiblePerson</code>.</span>
     *
     * @param string $type
     * @return self
     */
    public function setType(iterable $type)
    {
        $this->type = $type;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getType();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["Type" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\ResponsiblePersonCodeTypesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type', true);
        if (null !== $value) {
            $this->setType($value);
        }
    }
}
