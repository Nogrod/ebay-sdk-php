<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing TopRatedSellerDetailsType
 *
 * Container for Top-Rated Seller program information.
 * XSD Type: TopRatedSellerDetailsType
 */
class TopRatedSellerDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @var string[] $topRatedProgram
     */
    private $topRatedProgram = [

    ];

    /**
     * Adds as topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @return self
     * @param string $topRatedProgram
     */
    public function addToTopRatedProgram($topRatedProgram)
    {
        $this->topRatedProgram[] = $topRatedProgram;
        return $this;
    }

    /**
     * isset topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTopRatedProgram($index)
    {
        return isset($this->topRatedProgram[$index]);
    }

    /**
     * unset topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTopRatedProgram($index)
    {
        unset($this->topRatedProgram[$index]);
    }

    /**
     * Gets as topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @return string[]
     */
    public function getTopRatedProgram()
    {
        return $this->topRatedProgram;
    }

    /**
     * Sets a new topRatedProgram
     *
     * A <b>TopRatedProgram</b> field is returned for each Top-Rated Seller program that the eBay user qualifies for.
     *
     * @param string $topRatedProgram
     * @return self
     */
    public function setTopRatedProgram(array $topRatedProgram)
    {
        $this->topRatedProgram = $topRatedProgram;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTopRatedProgram();
        if (null !== $value && !empty($this->getTopRatedProgram())) {
            $writer->write(array_map(function ($v) {
                return ["TopRatedProgram" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TopRatedProgram', true);
        if (null !== $value && !empty($value)) {
            $this->setTopRatedProgram($value);
        }
    }
}
