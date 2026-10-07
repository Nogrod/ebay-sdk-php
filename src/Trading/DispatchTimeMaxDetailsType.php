<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DispatchTimeMaxDetailsType
 *
 * Details about the maximum number of business days required to ship an item to domestic buyers after receiving a cleared payment.
 * XSD Type: DispatchTimeMaxDetailsType
 */
class DispatchTimeMaxDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Integer value that indicates the maximum number of business days that the eBay site allows as a seller's handling time. The clock starts ticking when the buyer pays for the order. This means that if a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday) if the <b>DispatchTimeMax</b> value is set to <code>1</code>. Typical values for this field are 0, 1, 2, 3, 4, 5, 10, 15, or 20.
     *  <br/><br/>
     *  A <b>DispatchTimeMax</b> value of <code>0</code> indicates <em>same day handling</em> for an item. In this case, the seller's handling time commitment depends on the <em>order cut off time</em> set in the seller's user preferences. This defaults to 2:00 PM local time on most eBay sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     *  <br/><br/>
     *
     *  <span class="tablenote">
     *  <strong>Note:</strong> If a same day shipping carrier is selected, and the carrier delivers on one or both weekend days, sellers on the eBay US site are assumed to be open for business on the same days, and those days will be used when calculating total shipping time.
     *  </span>
     *
     *  If using <b>GeteBayDetails</b> specifically to return this value, the caller sets the DetailName field in the request to <b>DispatchTimeMaxDetails</b>.
     *  <br/><br/>
     *  When creating, revising, or relisting an item, the seller cannot set the <b>Item.DispatchTimeMax</b> value higher than the value returned in this field.
     *
     * @var int $dispatchTimeMax
     */
    private $dispatchTimeMax = null;

    /**
     * Value and unit (e.g., 10 Days) for the maximum dispatch time.
     *  Useful for display purposes.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the
     *  details were last updated. This timestamp can be used to determine
     *  if and when to refresh cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * A value of <code>true</code> indicates that the seller has specified a handling time of 4 business days or more (an <em>exception handling time</em>). Sellers should be aware that long handling times might adversely affect the buying decisions of potential customers.
     *
     * @var bool $extendedHandling
     */
    private $extendedHandling = null;

    /**
     * Gets as dispatchTimeMax
     *
     * Integer value that indicates the maximum number of business days that the eBay site allows as a seller's handling time. The clock starts ticking when the buyer pays for the order. This means that if a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday) if the <b>DispatchTimeMax</b> value is set to <code>1</code>. Typical values for this field are 0, 1, 2, 3, 4, 5, 10, 15, or 20.
     *  <br/><br/>
     *  A <b>DispatchTimeMax</b> value of <code>0</code> indicates <em>same day handling</em> for an item. In this case, the seller's handling time commitment depends on the <em>order cut off time</em> set in the seller's user preferences. This defaults to 2:00 PM local time on most eBay sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     *  <br/><br/>
     *
     *  <span class="tablenote">
     *  <strong>Note:</strong> If a same day shipping carrier is selected, and the carrier delivers on one or both weekend days, sellers on the eBay US site are assumed to be open for business on the same days, and those days will be used when calculating total shipping time.
     *  </span>
     *
     *  If using <b>GeteBayDetails</b> specifically to return this value, the caller sets the DetailName field in the request to <b>DispatchTimeMaxDetails</b>.
     *  <br/><br/>
     *  When creating, revising, or relisting an item, the seller cannot set the <b>Item.DispatchTimeMax</b> value higher than the value returned in this field.
     *
     * @return int
     */
    public function getDispatchTimeMax()
    {
        return $this->dispatchTimeMax;
    }

    /**
     * Sets a new dispatchTimeMax
     *
     * Integer value that indicates the maximum number of business days that the eBay site allows as a seller's handling time. The clock starts ticking when the buyer pays for the order. This means that if a buyer pays for the order on a Wednesday, the seller would have to ship the item by the next day (Thursday) if the <b>DispatchTimeMax</b> value is set to <code>1</code>. Typical values for this field are 0, 1, 2, 3, 4, 5, 10, 15, or 20.
     *  <br/><br/>
     *  A <b>DispatchTimeMax</b> value of <code>0</code> indicates <em>same day handling</em> for an item. In this case, the seller's handling time commitment depends on the <em>order cut off time</em> set in the seller's user preferences. This defaults to 2:00 PM local time on most eBay sites. For orders placed (and cleared payment received) before the local order cut off time, the item must be shipped by the end of the current day. For orders completed on or after the order cut off time, the item must be shipped by the end of the following day (excluding weekends and local holidays).
     *  <br/><br/>
     *
     *  <span class="tablenote">
     *  <strong>Note:</strong> If a same day shipping carrier is selected, and the carrier delivers on one or both weekend days, sellers on the eBay US site are assumed to be open for business on the same days, and those days will be used when calculating total shipping time.
     *  </span>
     *
     *  If using <b>GeteBayDetails</b> specifically to return this value, the caller sets the DetailName field in the request to <b>DispatchTimeMaxDetails</b>.
     *  <br/><br/>
     *  When creating, revising, or relisting an item, the seller cannot set the <b>Item.DispatchTimeMax</b> value higher than the value returned in this field.
     *
     * @param int $dispatchTimeMax
     * @return self
     */
    public function setDispatchTimeMax($dispatchTimeMax)
    {
        $this->dispatchTimeMax = $dispatchTimeMax;
        return $this;
    }

    /**
     * Gets as description
     *
     * Value and unit (e.g., 10 Days) for the maximum dispatch time.
     *  Useful for display purposes.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Value and unit (e.g., 10 Days) for the maximum dispatch time.
     *  Useful for display purposes.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the
     *  details were last updated. This timestamp can be used to determine
     *  if and when to refresh cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the
     *  details were last updated. This timestamp can be used to determine
     *  if and when to refresh cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    /**
     * Gets as extendedHandling
     *
     * A value of <code>true</code> indicates that the seller has specified a handling time of 4 business days or more (an <em>exception handling time</em>). Sellers should be aware that long handling times might adversely affect the buying decisions of potential customers.
     *
     * @return bool
     */
    public function getExtendedHandling()
    {
        return $this->extendedHandling;
    }

    /**
     * Sets a new extendedHandling
     *
     * A value of <code>true</code> indicates that the seller has specified a handling time of 4 business days or more (an <em>exception handling time</em>). Sellers should be aware that long handling times might adversely affect the buying decisions of potential customers.
     *
     * @param bool $extendedHandling
     * @return self
     */
    public function setExtendedHandling($extendedHandling)
    {
        $this->extendedHandling = $extendedHandling;
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
        $value = $this->dispatchTimeMax;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DispatchTimeMax', null, (string) $value);
        }
        $value = $this->description;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Description', null, (string) $value);
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
        $value = $this->extendedHandling;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ExtendedHandling', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\DispatchTimeMaxDetailsType
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
                case 'DispatchTimeMax':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->dispatchTimeMax = (int) $value;
                    }
                    return true;
                case 'Description':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->description = $value;
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
                case 'ExtendedHandling':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->extendedHandling = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }
}
