<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MembershipDetailsType
 *
 * Type used by the <b>Membership</b> container that is returned in the response of the <b>GetUser</b> call if the seller is enrolled in one or more eBay membership programs such as eBay Plus.
 *  <br/><br/>
 *  <span class="tablenote"><b>Note:</b> Currently, eBay Plus is available only to buyers on Germany and Australia marketplaces.
 *  </span>
 * XSD Type: MembershipDetailsType
 */
class MembershipDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MembershipDetailType[] $program
     */
    private $program = [

    ];

    /**
     * Adds as program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\MembershipDetailType $program
     */
    public function addToProgram(\Nogrod\eBaySDK\MerchantData\MembershipDetailType $program)
    {
        $this->program[] = $program;
        return $this;
    }

    /**
     * isset program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgram($index)
    {
        return isset($this->program[$index]);
    }

    /**
     * unset program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgram($index)
    {
        unset($this->program[$index]);
    }

    /**
     * Gets as program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MembershipDetailType[]
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
     *
     * A <b>Program</b> container will be returned for each eBay membership program for which the seller is enrolled. This container provides the the eBay site, the membership program (such as '<code>EBAYPLUS</code>'), and the membership expiration date.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MembershipDetailType[] $program
     * @return self
     */
    public function setProgram(array $program)
    {
        $this->program = $program;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProgram();
        if (null !== $value && !empty($this->getProgram())) {
            $writer->write(array_map(function ($v) {
                return ["Program" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Program', true);
        if (null !== $value && !empty($value)) {
            $this->setProgram(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\MembershipDetailType::fromKeyValue($v);
            }, $value));
        }
    }
}
