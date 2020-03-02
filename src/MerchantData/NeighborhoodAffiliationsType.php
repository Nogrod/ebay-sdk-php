<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NeighborhoodAffiliationsType
 *
 *
 * XSD Type: NeighborhoodAffiliationsType
 */
class NeighborhoodAffiliationsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Contains Id of a neighborhood.
     *
     * @var int[] $neighborhoodID
     */
    private $neighborhoodID = [
        
    ];

    /**
     * Adds as neighborhoodID
     *
     * Contains Id of a neighborhood.
     *
     * @return self
     * @param int $neighborhoodID
     */
    public function addToNeighborhoodID($neighborhoodID)
    {
        $this->neighborhoodID[] = $neighborhoodID;
        return $this;
    }

    /**
     * isset neighborhoodID
     *
     * Contains Id of a neighborhood.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNeighborhoodID($index)
    {
        return isset($this->neighborhoodID[$index]);
    }

    /**
     * unset neighborhoodID
     *
     * Contains Id of a neighborhood.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNeighborhoodID($index)
    {
        unset($this->neighborhoodID[$index]);
    }

    /**
     * Gets as neighborhoodID
     *
     * Contains Id of a neighborhood.
     *
     * @return int[]
     */
    public function getNeighborhoodID()
    {
        return $this->neighborhoodID;
    }

    /**
     * Sets a new neighborhoodID
     *
     * Contains Id of a neighborhood.
     *
     * @param int $neighborhoodID
     * @return self
     */
    public function setNeighborhoodID(array $neighborhoodID)
    {
        $this->neighborhoodID = $neighborhoodID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getNeighborhoodID();
        if (null !== $value && !empty($this->getNeighborhoodID())) {
            $writer->write(array_map(function ($v) {
                return ["NeighborhoodID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NeighborhoodID', true);
        if (null !== $value && !empty($value)) {
            $this->setNeighborhoodID($value);
        }
    }
}
