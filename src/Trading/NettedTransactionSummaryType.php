<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing NettedTransactionSummaryType
 *
 * This type is used by the <b>NettedTransactionSummary</b> container, which shows the total amount of fees (and credits if applicable) that have already been paid through seller payout deductions.
 * XSD Type: NettedTransactionSummaryType
 */
class NettedTransactionSummaryType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The amount in this field is the total amount of all charges/fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' fees in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each fee in <b>AccountEntries</b> array will show as <code>true</code> if the fee has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalNettedChargeAmount
     */
    private $totalNettedChargeAmount = null;

    /**
     * The amount in this field is the total amount of all credits for fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' credit in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each credit in <b>AccountEntries</b> array will show as <code>true</code> if the credit is for a fee that has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $totalNettedCreditAmount
     */
    private $totalNettedCreditAmount = null;

    /**
     * Gets as totalNettedChargeAmount
     *
     * The amount in this field is the total amount of all charges/fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' fees in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each fee in <b>AccountEntries</b> array will show as <code>true</code> if the fee has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalNettedChargeAmount()
    {
        return $this->totalNettedChargeAmount;
    }

    /**
     * Sets a new totalNettedChargeAmount
     *
     * The amount in this field is the total amount of all charges/fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' fees in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each fee in <b>AccountEntries</b> array will show as <code>true</code> if the fee has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalNettedChargeAmount
     * @return self
     */
    public function setTotalNettedChargeAmount(\Nogrod\eBaySDK\Trading\AmountType $totalNettedChargeAmount)
    {
        $this->totalNettedChargeAmount = $totalNettedChargeAmount;
        return $this;
    }

    /**
     * Gets as totalNettedCreditAmount
     *
     * The amount in this field is the total amount of all credits for fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' credit in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each credit in <b>AccountEntries</b> array will show as <code>true</code> if the credit is for a fee that has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getTotalNettedCreditAmount()
    {
        return $this->totalNettedCreditAmount;
    }

    /**
     * Sets a new totalNettedCreditAmount
     *
     * The amount in this field is the total amount of all credits for fees that have been deducted from seller payouts, and not invoiced to the seller. This value should equal the total sum of all the 'netted' credit in the <b>AccountEntries</b> array. The corresponding <b>Netted</b> boolean field for each credit in <b>AccountEntries</b> array will show as <code>true</code> if the credit is for a fee that has already been deducted from a seller payout.
     *  <br>
     *  <br>
     *  This field is returned even if <code>0.0</code>.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $totalNettedCreditAmount
     * @return self
     */
    public function setTotalNettedCreditAmount(\Nogrod\eBaySDK\Trading\AmountType $totalNettedCreditAmount)
    {
        $this->totalNettedCreditAmount = $totalNettedCreditAmount;
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
        $value = $this->totalNettedChargeAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalNettedChargeAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->totalNettedCreditAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'TotalNettedCreditAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\NettedTransactionSummaryType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'TotalNettedChargeAmount':
                    $this->totalNettedChargeAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'TotalNettedCreditAmount':
                    $this->totalNettedCreditAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
