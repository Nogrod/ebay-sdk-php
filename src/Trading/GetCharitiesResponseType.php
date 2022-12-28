<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetCharitiesResponseType
 *
 * This is the base response type for the <b>GetCharities</b> call. This call is used to search for eBay for Charity nonprofit organizations. A <b>Charity</b> container is returned for each nonprofit organization that matches the criteria in the call request.
 * XSD Type: GetCharitiesResponseType
 */
class GetCharitiesResponseType extends AbstractResponseType
{
    /**
     * Each <b>Charity</b> container consists of information about a specific nonprofit organization. The eBay unique identifier of each nonprofit organization is shown in the <b>id</b> attribute of the container. If no nonprofit organizations are found that match the input criteria, no <b>Charity</b> containers are returned.
     *
     * @var \Nogrod\eBaySDK\Trading\CharityInfoType[] $charity
     */
    private $charity = [

    ];

    /**
     * Adds as charity
     *
     * Each <b>Charity</b> container consists of information about a specific nonprofit organization. The eBay unique identifier of each nonprofit organization is shown in the <b>id</b> attribute of the container. If no nonprofit organizations are found that match the input criteria, no <b>Charity</b> containers are returned.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\CharityInfoType $charity
     */
    public function addToCharity(\Nogrod\eBaySDK\Trading\CharityInfoType $charity)
    {
        $this->charity[] = $charity;
        return $this;
    }

    /**
     * isset charity
     *
     * Each <b>Charity</b> container consists of information about a specific nonprofit organization. The eBay unique identifier of each nonprofit organization is shown in the <b>id</b> attribute of the container. If no nonprofit organizations are found that match the input criteria, no <b>Charity</b> containers are returned.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharity($index)
    {
        return isset($this->charity[$index]);
    }

    /**
     * unset charity
     *
     * Each <b>Charity</b> container consists of information about a specific nonprofit organization. The eBay unique identifier of each nonprofit organization is shown in the <b>id</b> attribute of the container. If no nonprofit organizations are found that match the input criteria, no <b>Charity</b> containers are returned.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharity($index)
    {
        unset($this->charity[$index]);
    }

    /**
     * Gets as charity
     *
     * Each <b>Charity</b> container consists of information about a specific nonprofit organization. The eBay unique identifier of each nonprofit organization is shown in the <b>id</b> attribute of the container. If no nonprofit organizations are found that match the input criteria, no <b>Charity</b> containers are returned.
     *
     * @return \Nogrod\eBaySDK\Trading\CharityInfoType[]
     */
    public function getCharity()
    {
        return $this->charity;
    }

    /**
     * Sets a new charity
     *
     * Each <b>Charity</b> container consists of information about a specific nonprofit organization. The eBay unique identifier of each nonprofit organization is shown in the <b>id</b> attribute of the container. If no nonprofit organizations are found that match the input criteria, no <b>Charity</b> containers are returned.
     *
     * @param \Nogrod\eBaySDK\Trading\CharityInfoType[] $charity
     * @return self
     */
    public function setCharity(array $charity)
    {
        $this->charity = $charity;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getCharity();
        if (null !== $value && !empty($this->getCharity())) {
            $writer->write(array_map(function ($v) {
                return ["Charity" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Charity', true);
        if (null !== $value && !empty($value)) {
            $this->setCharity(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\CharityInfoType::fromKeyValue($v);
            }, $value));
        }
    }
}
