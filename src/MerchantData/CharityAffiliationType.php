<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing CharityAffiliationType
 *
 * This type is deprecated. Replaced by <b>CharityAffiliationDetailType</b>
 * XSD Type: CharityAffiliationType
 */
class CharityAffiliationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This attribute is deprecated. Replaced by the <b>CharityID</b> field of <b>CharityAffiliationDetailType</b>.
     *
     * @var string $id
     */
    private $id = null;

    /**
     * This attribute is deprecated. Replaced by the <b>AffiliationType</b> field of <b>CharityAffiliationDetailType</b>.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Gets as id
     *
     * This attribute is deprecated. Replaced by the <b>CharityID</b> field of <b>CharityAffiliationDetailType</b>.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * This attribute is deprecated. Replaced by the <b>CharityID</b> field of <b>CharityAffiliationDetailType</b>.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as type
     *
     * This attribute is deprecated. Replaced by the <b>AffiliationType</b> field of <b>CharityAffiliationDetailType</b>.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * This attribute is deprecated. Replaced by the <b>AffiliationType</b> field of <b>CharityAffiliationDetailType</b>.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getId();
        if (null !== $value) {
            $writer->writeAttribute("id", $value);
        }
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeAttribute("type", $value);
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
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
