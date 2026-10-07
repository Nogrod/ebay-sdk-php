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
        if (!is_array($this->memberMessage)) {
            throw new \LogicException('memberMessage is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\MemberMessageExchangeType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\MemberMessageExchangeType> $memberMessage
     * @return self
     */
    public function setMemberMessage(iterable $memberMessage)
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

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->memberMessage;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'MemberMessage', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'MemberMessageExchange', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->paginationResult;
        if (null !== $value) {
            $writer->startElementNs(null, 'PaginationResult', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->hasMoreItems;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HasMoreItems', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMemberMessagesResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->memberMessage = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'MemberMessage':
                    $this->memberMessage = Func::readList($reader, 'MemberMessageExchange', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\MemberMessageExchangeType::xmlRead($reader));
                    return true;
                case 'PaginationResult':
                    $this->paginationResult = \Nogrod\eBaySDK\Trading\PaginationResultType::xmlRead($reader);
                    return true;
                case 'HasMoreItems':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hasMoreItems = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['MemberMessage'] = Func::jsonList($this->memberMessage);
        $data['PaginationResult'] = $this->paginationResult;
        $data['HasMoreItems'] = $this->hasMoreItems;
        return $data;
    }
}
