<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AccountEntriesType
 *
 * Type defining the array of <b>AccountEntry</b> objects that are conditionally returned in the <b>GetAccount</b> response.
 * XSD Type: AccountEntriesType
 */
class AccountEntriesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     *
     * @var \Nogrod\eBaySDK\Trading\AccountEntryType[] $accountEntry
     */
    private $accountEntry = [

    ];

    /**
     * Adds as accountEntry
     *
     * Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AccountEntryType $accountEntry
     */
    public function addToAccountEntry(\Nogrod\eBaySDK\Trading\AccountEntryType $accountEntry)
    {
        if (!is_array($this->accountEntry)) {
            throw new \LogicException('accountEntry is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->accountEntry[] = $accountEntry;
        return $this;
    }

    /**
     * isset accountEntry
     *
     * Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccountEntry($index)
    {
        return isset($this->accountEntry[$index]);
    }

    /**
     * unset accountEntry
     *
     * Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccountEntry($index)
    {
        unset($this->accountEntry[$index]);
    }

    /**
     * Gets as accountEntry
     *
     * Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\AccountEntryType>
     */
    public function getAccountEntry()
    {
        return $this->accountEntry;
    }

    /**
     * Sets a new accountEntry
     *
     * Container consisting of detailed information for each debit or credit transaction that occurs on an eBay user's account.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\AccountEntryType> $accountEntry
     * @return self
     */
    public function setAccountEntry(iterable $accountEntry)
    {
        $this->accountEntry = $accountEntry;
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
        $value = $this->accountEntry;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'AccountEntry', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\AccountEntriesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->accountEntry = [];
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
                case 'AccountEntry':
                    $this->accountEntry[] = \Nogrod\eBaySDK\Trading\AccountEntryType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
