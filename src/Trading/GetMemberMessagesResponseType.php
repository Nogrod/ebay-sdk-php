<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMemberMessagesResponseType
 *
 * Retrieves a list of the messages buyers have posted about your active item listings.
 * XSD Type: GetMemberMessagesResponseType
 */
class GetMemberMessagesResponseType extends AbstractResponseType
{
    /**
     * The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     *
     * @var \Nogrod\eBaySDK\Trading\MemberMessageExchangeType[] $memberMessage
     */
    private $memberMessage = null;

    /**
     * Shows the pagination of data returned by requests.
     *
     * @var \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     */
    private $paginationResult = null;

    /**
     * Specifies whether the response has more items.
     *
     * @var bool $hasMoreItems
     */
    private $hasMoreItems = null;

    /**
     * Adds as memberMessageExchange
     *
     * The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MemberMessageExchangeType $memberMessageExchange
     */
    public function addToMemberMessage(\Nogrod\eBaySDK\Trading\MemberMessageExchangeType $memberMessageExchange)
    {
        $this->memberMessage[] = $memberMessageExchange;
        return $this;
    }

    /**
     * isset memberMessage
     *
     * The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMemberMessage($index)
    {
        return isset($this->memberMessage[$index]);
    }

    /**
     * unset memberMessage
     *
     * The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMemberMessage($index)
    {
        unset($this->memberMessage[$index]);
    }

    /**
     * Gets as memberMessage
     *
     * The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     *
     * @return \Nogrod\eBaySDK\Trading\MemberMessageExchangeType[]
     */
    public function getMemberMessage()
    {
        return $this->memberMessage;
    }

    /**
     * Sets a new memberMessage
     *
     * The returned member messages. Returned if messages that meet the request criteria exist. Note that <b>GetMemberMessages</b> does not return messages when, in the request, the <b>MailMessageType</b> is <b>AskSellerQuestion</b>.
     *
     * @param \Nogrod\eBaySDK\Trading\MemberMessageExchangeType[] $memberMessage
     * @return self
     */
    public function setMemberMessage(array $memberMessage)
    {
        $this->memberMessage = $memberMessage;
        return $this;
    }

    /**
     * Gets as paginationResult
     *
     * Shows the pagination of data returned by requests.
     *
     * @return \Nogrod\eBaySDK\Trading\PaginationResultType
     */
    public function getPaginationResult()
    {
        return $this->paginationResult;
    }

    /**
     * Sets a new paginationResult
     *
     * Shows the pagination of data returned by requests.
     *
     * @param \Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult
     * @return self
     */
    public function setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType $paginationResult)
    {
        $this->paginationResult = $paginationResult;
        return $this;
    }

    /**
     * Gets as hasMoreItems
     *
     * Specifies whether the response has more items.
     *
     * @return bool
     */
    public function getHasMoreItems()
    {
        return $this->hasMoreItems;
    }

    /**
     * Sets a new hasMoreItems
     *
     * Specifies whether the response has more items.
     *
     * @param bool $hasMoreItems
     * @return self
     */
    public function setHasMoreItems($hasMoreItems)
    {
        $this->hasMoreItems = $hasMoreItems;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getMemberMessage();
        if (null !== $value && !empty($this->getMemberMessage())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MemberMessage", array_map(function ($v) {return ["MemberMessageExchange" => $v];}, $value));
        }
        $value = $this->getPaginationResult();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PaginationResult", $value);
        }
        $value = $this->getHasMoreItems();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HasMoreItems", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MemberMessage', true);
        if (null !== $value && !empty($value)) {
            $this->setMemberMessage(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\MemberMessageExchangeType::fromKeyValue($v);}, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PaginationResult');
        if (null !== $value) {
            $this->setPaginationResult(\Nogrod\eBaySDK\Trading\PaginationResultType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HasMoreItems');
        if (null !== $value) {
            $this->setHasMoreItems($value);
        }
    }
}
