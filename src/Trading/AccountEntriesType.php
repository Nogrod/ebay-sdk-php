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
     * @return \Nogrod\eBaySDK\Trading\AccountEntryType[]
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
     * @param \Nogrod\eBaySDK\Trading\AccountEntryType[] $accountEntry
     * @return self
     */
    public function setAccountEntry(array $accountEntry)
    {
        $this->accountEntry = $accountEntry;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getAccountEntry();
        if (null !== $value && [] !== $this->getAccountEntry()) {
            $writer->write(array_map(function ($v) {return ["AccountEntry" => $v];}, $value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\Trading\AccountEntriesType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AccountEntry');
        if (null !== $value) {
            $this->setAccountEntry(array_map(function ($v) {return \Nogrod\eBaySDK\Trading\AccountEntryType::fromKeyValue($v);}, $value));
        }
    }
}
