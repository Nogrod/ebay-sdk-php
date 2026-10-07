<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RefundTransactionInfoType
 *
 * Type defining the <strong>Refund</strong> container, where the refund could be initiated either from the seller or eBay.
 * XSD Type: RefundTransactionInfoType
 */
class RefundTransactionInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Since BOPIS (Buy Online, Pick Up In Store) is no longer supported, this field should no longer be used in the Trading API.
     *
     * @var string $refundType
     */
    private $refundType = null;

    /**
     * This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct refund recipient is returned to the buyer or seller, but the refund recipient will be masked to all third parties.
     *
     * @var \Nogrod\eBaySDK\Trading\UserIdentityType $refundTo
     */
    private $refundTo = null;

    /**
     * This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED).
     *
     * @var \DateTime $refundTime
     */
    private $refundTime = null;

    /**
     * This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned for Click and Collect orders where the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, the final value fee amount deducted from the seller's payout funds for the sale is not included in this field, which means that the amount in this field may not reflect the buyer's actual refund amount.
     *  <br/><br/>
     *  The logic will remain the same for <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, but the <strong>GetOrders</strong> call will be updated to include the the seller's final value fee amount in this field, so the amount in this field should match the buyer's actual refund amount. To pick up this new logic in <strong>GetOrders</strong> responses, a Trading WSDL version of 1311 or above must be used, or the user can use an older Trading WSDL version but include and set the <strong>X-EBAY-API-COMPATIBILITY-LEVEL</strong> header value to 1311 or above.
     *  </span>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     */
    private $refundAmount = null;

    /**
     * <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
     *  <br/>
     *
     * @var \Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID
     */
    private $referenceID = null;

    /**
     * <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
     *  <br/>
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount
     */
    private $feeOrCreditAmount = null;

    /**
     * Gets as refundType
     *
     * Since BOPIS (Buy Online, Pick Up In Store) is no longer supported, this field should no longer be used in the Trading API.
     *
     * @return string
     */
    public function getRefundType()
    {
        return $this->refundType;
    }

    /**
     * Sets a new refundType
     *
     * Since BOPIS (Buy Online, Pick Up In Store) is no longer supported, this field should no longer be used in the Trading API.
     *
     * @param string $refundType
     * @return self
     */
    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;
        return $this;
    }

    /**
     * Gets as refundTo
     *
     * This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct refund recipient is returned to the buyer or seller, but the refund recipient will be masked to all third parties.
     *
     * @return \Nogrod\eBaySDK\Trading\UserIdentityType
     */
    public function getRefundTo()
    {
        return $this->refundTo;
    }

    /**
     * Sets a new refundTo
     *
     * This field is the eBay user ID of the buyer who is receiving the refund or store credit from the merchant. This field is always returned with the <strong>Refund</strong> container.
     *  <br/><br/>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *  <br/><br/>
     *  <b>For GetOrders and GetItemTransactions only:</b> If using Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If using a Trading WSDL older than Version 1019, the correct refund recipient is returned to the buyer or seller, but the refund recipient will be masked to all third parties.
     *
     * @param \Nogrod\eBaySDK\Trading\UserIdentityType $refundTo
     * @return self
     */
    public function setRefundTo(\Nogrod\eBaySDK\Trading\UserIdentityType $refundTo)
    {
        $this->refundTo = $refundTo;
        return $this;
    }

    /**
     * Gets as refundTime
     *
     * This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED).
     *
     * @return \DateTime
     */
    public function getRefundTime()
    {
        return $this->refundTime;
    }

    /**
     * Sets a new refundTime
     *
     * This date/time value is the timestamp for the refund transaction. This field is not returned if the refund was not successful (RefundStatus=FAILED).
     *
     * @param \DateTime $refundTime
     * @return self
     */
    public function setRefundTime(\DateTime $refundTime)
    {
        $this->refundTime = $refundTime;
        return $this;
    }

    /**
     * Gets as refundAmount
     *
     * This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned for Click and Collect orders where the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, the final value fee amount deducted from the seller's payout funds for the sale is not included in this field, which means that the amount in this field may not reflect the buyer's actual refund amount.
     *  <br/><br/>
     *  The logic will remain the same for <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, but the <strong>GetOrders</strong> call will be updated to include the the seller's final value fee amount in this field, so the amount in this field should match the buyer's actual refund amount. To pick up this new logic in <strong>GetOrders</strong> responses, a Trading WSDL version of 1311 or above must be used, or the user can use an older Trading WSDL version but include and set the <strong>X-EBAY-API-COMPATIBILITY-LEVEL</strong> header value to 1311 or above.
     *  </span>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets a new refundAmount
     *
     * This dollar value is the amount of the refund to the buyer for this specific refund transaction. This field is not returned for Click and Collect orders where the merchant issued the buyer a store credit instead of a refund (RefundType=STORE_CREDIT).
     *  <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> For <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, the final value fee amount deducted from the seller's payout funds for the sale is not included in this field, which means that the amount in this field may not reflect the buyer's actual refund amount.
     *  <br/><br/>
     *  The logic will remain the same for <strong>GetItemTransactions</strong> and <strong>GetSellerTransactions</strong>, but the <strong>GetOrders</strong> call will be updated to include the the seller's final value fee amount in this field, so the amount in this field should match the buyer's actual refund amount. To pick up this new logic in <strong>GetOrders</strong> responses, a Trading WSDL version of 1311 or above must be used, or the user can use an older Trading WSDL version but include and set the <strong>X-EBAY-API-COMPATIBILITY-LEVEL</strong> header value to 1311 or above.
     *  </span>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $refundAmount
     * @return self
     */
    public function setRefundAmount(\Nogrod\eBaySDK\Trading\AmountType $refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }

    /**
     * Gets as referenceID
     *
     * <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
     *  <br/>
     *
     * @return \Nogrod\eBaySDK\Trading\TransactionReferenceType
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
     *  <br/>
     *
     * @param \Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID
     * @return self
     */
    public function setReferenceID(\Nogrod\eBaySDK\Trading\TransactionReferenceType $referenceID)
    {
        $this->referenceID = $referenceID;
        return $this;
    }

    /**
     * Gets as feeOrCreditAmount
     *
     * <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
     *  <br/>
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getFeeOrCreditAmount()
    {
        return $this->feeOrCreditAmount;
    }

    /**
     * Sets a new feeOrCreditAmount
     *
     * <br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong>
     *  Since BOPIS (Buy Online, Pick Up In Store) is no longer available, this container and its associated fields are no longer available for active use in the Trading API.
     *  </span>
     *  <br/>
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount
     * @return self
     */
    public function setFeeOrCreditAmount(\Nogrod\eBaySDK\Trading\AmountType $feeOrCreditAmount)
    {
        $this->feeOrCreditAmount = $feeOrCreditAmount;
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
        $value = $this->refundType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RefundType', null, (string) $value);
        }
        $value = $this->refundTo;
        if (null !== $value) {
            $writer->startElementNs(null, 'RefundTo', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->refundTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'RefundTime', null, Func::formatDateTime($value));
        }
        $value = $this->refundAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'RefundAmount', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->referenceID;
        if (null !== $value) {
            $writer->startElementNs(null, 'ReferenceID', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->feeOrCreditAmount;
        if (null !== $value) {
            $writer->startElementNs(null, 'FeeOrCreditAmount', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RefundTransactionInfoType
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
                case 'RefundType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->refundType = $value;
                    }
                    return true;
                case 'RefundTo':
                    $this->refundTo = \Nogrod\eBaySDK\Trading\UserIdentityType::xmlRead($reader);
                    return true;
                case 'RefundTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->refundTime = new \DateTime($value);
                    }
                    return true;
                case 'RefundAmount':
                    $this->refundAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
                case 'ReferenceID':
                    $this->referenceID = \Nogrod\eBaySDK\Trading\TransactionReferenceType::xmlRead($reader);
                    return true;
                case 'FeeOrCreditAmount':
                    $this->feeOrCreditAmount = \Nogrod\eBaySDK\Trading\AmountType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }
}
