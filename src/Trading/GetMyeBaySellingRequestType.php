<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetMyeBaySellingRequestType
 *
 * Retrieves information regarding the user's selling activity, such as items that the user is currently selling (the Active list), auction listings that have bids, sold items, and unsold items.
 * XSD Type: GetMyeBaySellingRequestType
 */
class GetMyeBaySellingRequestType extends AbstractRequestType
{
    /**
     * Include this container and set the <b>ScheduledList.Include</b> field to <code>true</code> to return the list of items that are scheduled to become active listings on eBay.com at a future date/time.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of Scheduled listings that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $scheduledList
     */
    private $scheduledList = null;

    /**
     * Include this container and set the <b>ActiveList.Include</b> field to <code>true</code> to return the list of active listings on eBay.com.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of active listings that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $activeList
     */
    private $activeList = null;

    /**
     * Include this container and set the <b>SoldList.Include</b> field to <code>true</code> to return the list of sold order line items.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of sold items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $soldList
     */
    private $soldList = null;

    /**
     * Include this container and set the <b>UnsoldList.Include</b> field to <code>true</code> to return the listings that have ended without a purchase.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of unsold items that will be returned.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $unsoldList
     */
    private $unsoldList = null;

    /**
     * Include this container and set the <b>SellingSummary.Include</b> field to <code>true</code> to return the <b>SellingSummary</b> container in the response. The <b>SellingSummary</b> container consists of selling activity counts and values.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemListCustomizationType $sellingSummary
     */
    private $sellingSummary = null;

    /**
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the <b>Variations</b> node is returned for all multiple-variation listings in the response.
     *  <br>
     *
     * @var bool $hideVariations
     */
    private $hideVariations = null;

    /**
     * Gets as scheduledList
     *
     * Include this container and set the <b>ScheduledList.Include</b> field to <code>true</code> to return the list of items that are scheduled to become active listings on eBay.com at a future date/time.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of Scheduled listings that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getScheduledList()
    {
        return $this->scheduledList;
    }

    /**
     * Sets a new scheduledList
     *
     * Include this container and set the <b>ScheduledList.Include</b> field to <code>true</code> to return the list of items that are scheduled to become active listings on eBay.com at a future date/time.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of Scheduled listings that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $scheduledList
     * @return self
     */
    public function setScheduledList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $scheduledList)
    {
        $this->scheduledList = $scheduledList;
        return $this;
    }

    /**
     * Gets as activeList
     *
     * Include this container and set the <b>ActiveList.Include</b> field to <code>true</code> to return the list of active listings on eBay.com.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of active listings that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getActiveList()
    {
        return $this->activeList;
    }

    /**
     * Sets a new activeList
     *
     * Include this container and set the <b>ActiveList.Include</b> field to <code>true</code> to return the list of active listings on eBay.com.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of active listings that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $activeList
     * @return self
     */
    public function setActiveList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $activeList)
    {
        $this->activeList = $activeList;
        return $this;
    }

    /**
     * Gets as soldList
     *
     * Include this container and set the <b>SoldList.Include</b> field to <code>true</code> to return the list of sold order line items.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of sold items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getSoldList()
    {
        return $this->soldList;
    }

    /**
     * Sets a new soldList
     *
     * Include this container and set the <b>SoldList.Include</b> field to <code>true</code> to return the list of sold order line items.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of sold items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $soldList
     * @return self
     */
    public function setSoldList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $soldList)
    {
        $this->soldList = $soldList;
        return $this;
    }

    /**
     * Gets as unsoldList
     *
     * Include this container and set the <b>UnsoldList.Include</b> field to <code>true</code> to return the listings that have ended without a purchase.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of unsold items that will be returned.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getUnsoldList()
    {
        return $this->unsoldList;
    }

    /**
     * Sets a new unsoldList
     *
     * Include this container and set the <b>UnsoldList.Include</b> field to <code>true</code> to return the listings that have ended without a purchase.
     *  <br><br>
     *  The user also has the option of using pagination and sorting for the list of unsold items that will be returned.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $unsoldList
     * @return self
     */
    public function setUnsoldList(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $unsoldList)
    {
        $this->unsoldList = $unsoldList;
        return $this;
    }

    /**
     * Gets as sellingSummary
     *
     * Include this container and set the <b>SellingSummary.Include</b> field to <code>true</code> to return the <b>SellingSummary</b> container in the response. The <b>SellingSummary</b> container consists of selling activity counts and values.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemListCustomizationType
     */
    public function getSellingSummary()
    {
        return $this->sellingSummary;
    }

    /**
     * Sets a new sellingSummary
     *
     * Include this container and set the <b>SellingSummary.Include</b> field to <code>true</code> to return the <b>SellingSummary</b> container in the response. The <b>SellingSummary</b> container consists of selling activity counts and values.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemListCustomizationType $sellingSummary
     * @return self
     */
    public function setSellingSummary(\Nogrod\eBaySDK\Trading\ItemListCustomizationType $sellingSummary)
    {
        $this->sellingSummary = $sellingSummary;
        return $this;
    }

    /**
     * Gets as hideVariations
     *
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the <b>Variations</b> node is returned for all multiple-variation listings in the response.
     *  <br>
     *
     * @return bool
     */
    public function getHideVariations()
    {
        return $this->hideVariations;
    }

    /**
     * Sets a new hideVariations
     *
     * If this field is included and set to <code>true</code>, the <b>Variations</b> node (and all variation data) is omitted for all multiple-variation listings in the response. If this field is omitted or set to <code>false</code>, the <b>Variations</b> node is returned for all multiple-variation listings in the response.
     *  <br>
     *
     * @param bool $hideVariations
     * @return self
     */
    public function setHideVariations($hideVariations)
    {
        $this->hideVariations = $hideVariations;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->scheduledList;
        if (null !== $value) {
            $writer->startElementNs(null, 'ScheduledList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->activeList;
        if (null !== $value) {
            $writer->startElementNs(null, 'ActiveList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->soldList;
        if (null !== $value) {
            $writer->startElementNs(null, 'SoldList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->unsoldList;
        if (null !== $value) {
            $writer->startElementNs(null, 'UnsoldList', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->sellingSummary;
        if (null !== $value) {
            $writer->startElementNs(null, 'SellingSummary', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
        $value = $this->hideVariations;
        if (null !== $value) {
            $writer->writeElementNs(null, 'HideVariations', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetMyeBaySellingRequestType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
                case 'ScheduledList':
                    $this->scheduledList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'ActiveList':
                    $this->activeList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'SoldList':
                    $this->soldList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'UnsoldList':
                    $this->unsoldList = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'SellingSummary':
                    $this->sellingSummary = \Nogrod\eBaySDK\Trading\ItemListCustomizationType::xmlRead($reader);
                    return true;
                case 'HideVariations':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->hideVariations = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['ScheduledList'] = $this->scheduledList;
        $data['ActiveList'] = $this->activeList;
        $data['SoldList'] = $this->soldList;
        $data['UnsoldList'] = $this->unsoldList;
        $data['SellingSummary'] = $this->sellingSummary;
        $data['HideVariations'] = $this->hideVariations;
        return $data;
    }
}
