<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AddItemFromSellingManagerTemplateRequestType
 *
 * This is the base request type of the <b>AddItemFromSellingManagerTemplate</b> call, which is used to create listings based on settings contained in a Selling Manager template.
 * XSD Type: AddItemFromSellingManagerTemplateRequestType
 */
class AddItemFromSellingManagerTemplateRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the Selling Manager template that a seller is using to create a listing. Unique identifiers of Selling Manager templates can be retrieved programatically by using the <b>GetSellingManagerInventory</b> call.
     *
     * @var int $saleTemplateID
     */
    private $saleTemplateID = null;

    /**
     * This field allows the user to specify a time in the future when the listing being created becomes active. If this field is not used, the listing will become active immediately upon being created successfully. The time in this field should be specified in GMT format.
     *
     * @var \DateTime $scheduleTime
     */
    private $scheduleTime = null;

    /**
     * This container is intended for specifying setting in the listing that differ from values in the Selling Manager template being used.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Only the following three values of <b>ItemType</b> may be used for a <b>AddItemFromSellingManagerTemplate</b> call: <b>CategoryMappingAllowed</b>, <b>PaymentMethods</b>, and <b>PayPalEmailAddress</b>.
     *
     * @var \Nogrod\eBaySDK\Trading\ItemType $item
     */
    private $item = null;

    /**
     * Gets as saleTemplateID
     *
     * The unique identifier of the Selling Manager template that a seller is using to create a listing. Unique identifiers of Selling Manager templates can be retrieved programatically by using the <b>GetSellingManagerInventory</b> call.
     *
     * @return int
     */
    public function getSaleTemplateID()
    {
        return $this->saleTemplateID;
    }

    /**
     * Sets a new saleTemplateID
     *
     * The unique identifier of the Selling Manager template that a seller is using to create a listing. Unique identifiers of Selling Manager templates can be retrieved programatically by using the <b>GetSellingManagerInventory</b> call.
     *
     * @param int $saleTemplateID
     * @return self
     */
    public function setSaleTemplateID($saleTemplateID)
    {
        $this->saleTemplateID = $saleTemplateID;
        return $this;
    }

    /**
     * Gets as scheduleTime
     *
     * This field allows the user to specify a time in the future when the listing being created becomes active. If this field is not used, the listing will become active immediately upon being created successfully. The time in this field should be specified in GMT format.
     *
     * @return \DateTime
     */
    public function getScheduleTime()
    {
        return $this->scheduleTime;
    }

    /**
     * Sets a new scheduleTime
     *
     * This field allows the user to specify a time in the future when the listing being created becomes active. If this field is not used, the listing will become active immediately upon being created successfully. The time in this field should be specified in GMT format.
     *
     * @param \DateTime $scheduleTime
     * @return self
     */
    public function setScheduleTime(\DateTime $scheduleTime)
    {
        $this->scheduleTime = $scheduleTime;
        return $this;
    }

    /**
     * Gets as item
     *
     * This container is intended for specifying setting in the listing that differ from values in the Selling Manager template being used.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Only the following three values of <b>ItemType</b> may be used for a <b>AddItemFromSellingManagerTemplate</b> call: <b>CategoryMappingAllowed</b>, <b>PaymentMethods</b>, and <b>PayPalEmailAddress</b>.
     *
     * @return \Nogrod\eBaySDK\Trading\ItemType
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * This container is intended for specifying setting in the listing that differ from values in the Selling Manager template being used.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Only the following three values of <b>ItemType</b> may be used for a <b>AddItemFromSellingManagerTemplate</b> call: <b>CategoryMappingAllowed</b>, <b>PaymentMethods</b>, and <b>PayPalEmailAddress</b>.
     *
     * @param \Nogrod\eBaySDK\Trading\ItemType $item
     * @return self
     */
    public function setItem(\Nogrod\eBaySDK\Trading\ItemType $item)
    {
        $this->item = $item;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleTemplateID", $value);
        }
        $value = $this->getScheduleTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ScheduleTime", $value);
        }
        $value = $this->getItem();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Item", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleTemplateID');
        if (null !== $value) {
            $this->setSaleTemplateID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ScheduleTime');
        if (null !== $value) {
            $this->setScheduleTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Item');
        if (null !== $value) {
            $this->setItem(\Nogrod\eBaySDK\Trading\ItemType::fromKeyValue($value));
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
