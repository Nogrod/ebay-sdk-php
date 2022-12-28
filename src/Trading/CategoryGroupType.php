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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getIsDefault();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}IsDefault", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}IsDefault');
        if (null !== $value) {
            $this->setIsDefault($value);
        }
    }
}
