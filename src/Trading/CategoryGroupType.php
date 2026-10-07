<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing CategoryGroupType
 *
 * Type defining the <b>CategoryGroup</b> container, which defines the category group to which the corresponding Business Policies profile will be applied, and a flag that indicates whether or not that Business Policies profile is the default for that category group.
 * XSD Type: CategoryGroupType
 */
class CategoryGroupType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Defines the name of the category group tied to a Business Policies profile. Valid values are
     *  <code>ALL</code> (referring to all non-motor vehicle category groups) or <code>MOTORS_VEHICLE</code> (referring to
     *  only motor vehicle category groups).
     *  <br><br>
     *  The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b>
     *  if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * This boolean value indicates whether the corresponding Business Policies profile is the default for the category group.
     *  <br><br>
     *  The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b>
     *  if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * Gets as name
     *
     * Defines the name of the category group tied to a Business Policies profile. Valid values are
     *  <code>ALL</code> (referring to all non-motor vehicle category groups) or <code>MOTORS_VEHICLE</code> (referring to
     *  only motor vehicle category groups).
     *  <br><br>
     *  The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b>
     *  if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
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
     * Defines the name of the category group tied to a Business Policies profile. Valid values are
     *  <code>ALL</code> (referring to all non-motor vehicle category groups) or <code>MOTORS_VEHICLE</code> (referring to
     *  only motor vehicle category groups).
     *  <br><br>
     *  The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b>
     *  if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
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
     * Gets as isDefault
     *
     * This boolean value indicates whether the corresponding Business Policies profile is the default for the category group.
     *  <br><br>
     *  The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b>
     *  if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * This boolean value indicates whether the corresponding Business Policies profile is the default for the category group.
     *  <br><br>
     *  The <b>CategoryGroup</b> container is only returned in <b>GetUserPreferences</b>
     *  if the <b>ShowSellerProfilePreferences</b> field is included in the request and set to <code>true</code>.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->name;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Name', null, (string) $value);
        }
        $value = $this->isDefault;
        if (null !== $value) {
            $writer->writeElementNs(null, 'IsDefault', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\CategoryGroupType
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
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Name':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->name = $value;
                    }
                    return true;
                case 'IsDefault':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->isDefault = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
