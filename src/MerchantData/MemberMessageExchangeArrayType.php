<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing MemberMessageExchangeArrayType
 *
 * Type is used by the <b>MemberMessage</b> container that is returned in the <b>GetMemberMessages</b> and <b>GetAdFormatLeads</b> calls. The <b>MemberMessage</b> container will consists of one or more member messages that meet the input criteria in the call request.
 * XSD Type: MemberMessageExchangeArrayType
 */
class MemberMessageExchangeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @var \Nogrod\eBaySDK\MerchantData\MemberMessageExchangeType[] $memberMessageExchange
     */
    private $memberMessageExchange = [

    ];

    /**
     * Adds as memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\MemberMessageExchangeType $memberMessageExchange
     */
    public function addToMemberMessageExchange(\Nogrod\eBaySDK\MerchantData\MemberMessageExchangeType $memberMessageExchange)
    {
        $this->memberMessageExchange[] = $memberMessageExchange;
        return $this;
    }

    /**
     * isset memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMemberMessageExchange($index)
    {
        return isset($this->memberMessageExchange[$index]);
    }

    /**
     * unset memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMemberMessageExchange($index)
    {
        unset($this->memberMessageExchange[$index]);
    }

    /**
     * Gets as memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @return \Nogrod\eBaySDK\MerchantData\MemberMessageExchangeType[]
     */
    public function getMemberMessageExchange()
    {
        return $this->memberMessageExchange;
    }

    /**
     * Sets a new memberMessageExchange
     *
     * Each <b>MemberMessageExchange</b> container consists of detailed information about a member-to-member message.
     *
     * @param \Nogrod\eBaySDK\MerchantData\MemberMessageExchangeType[] $memberMessageExchange
     * @return self
     */
    public function setMemberMessageExchange(array $memberMessageExchange)
    {
        $this->memberMessageExchange = $memberMessageExchange;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getMemberMessageExchange();
        if (null !== $value && !empty($this->getMemberMessageExchange())) {
            $writer->write(array_map(function ($v) {
                return ["MemberMessageExchange" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MemberMessageExchange', true);
        if (null !== $value && !empty($value)) {
            $this->setMemberMessageExchange(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\MemberMessageExchangeType::fromKeyValue($v);
            }, $value));
        }
    }
}
