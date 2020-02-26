<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SellingManagerAutoListType
 *
 * Provides information about an automated listing rule.
 *  Automated listing rules cannot be combined with automated relisting rules.
 *  A template can have one set of information per automated listing rule specified.
 * XSD Type: SellingManagerAutoListType
 */
class SellingManagerAutoListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The source template ID for the rule that was retrieved.
     *  In the case of automated listing rules retrieved for an item, even if the item
     *  does not have an associated automation rule, an automated listing rule is
     *  inherited from the source template.
     *
     * @var int $sourceSaleTemplateID
     */
    private $sourceSaleTemplateID = null;

    /**
     * Specifies an automated listing rule that keeps a minimum number of listings on the site.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerAutoListMinActiveItemsType $keepMinActive
     */
    private $keepMinActive = null;

    /**
     * Specifies an automated listing rule that lists items according to a specified schedule.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     */
    private $listAccordingToSchedule = null;

    /**
     * Gets as sourceSaleTemplateID
     *
     * The source template ID for the rule that was retrieved.
     *  In the case of automated listing rules retrieved for an item, even if the item
     *  does not have an associated automation rule, an automated listing rule is
     *  inherited from the source template.
     *
     * @return int
     */
    public function getSourceSaleTemplateID()
    {
        return $this->sourceSaleTemplateID;
    }

    /**
     * Sets a new sourceSaleTemplateID
     *
     * The source template ID for the rule that was retrieved.
     *  In the case of automated listing rules retrieved for an item, even if the item
     *  does not have an associated automation rule, an automated listing rule is
     *  inherited from the source template.
     *
     * @param int $sourceSaleTemplateID
     * @return self
     */
    public function setSourceSaleTemplateID($sourceSaleTemplateID)
    {
        $this->sourceSaleTemplateID = $sourceSaleTemplateID;
        return $this;
    }

    /**
     * Gets as keepMinActive
     *
     * Specifies an automated listing rule that keeps a minimum number of listings on the site.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerAutoListMinActiveItemsType
     */
    public function getKeepMinActive()
    {
        return $this->keepMinActive;
    }

    /**
     * Sets a new keepMinActive
     *
     * Specifies an automated listing rule that keeps a minimum number of listings on the site.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerAutoListMinActiveItemsType $keepMinActive
     * @return self
     */
    public function setKeepMinActive(\Nogrod\eBaySDK\MerchantData\SellingManagerAutoListMinActiveItemsType $keepMinActive)
    {
        $this->keepMinActive = $keepMinActive;
        return $this;
    }

    /**
     * Gets as listAccordingToSchedule
     *
     * Specifies an automated listing rule that lists items according to a specified schedule.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerAutoListAccordingToScheduleType
     */
    public function getListAccordingToSchedule()
    {
        return $this->listAccordingToSchedule;
    }

    /**
     * Sets a new listAccordingToSchedule
     *
     * Specifies an automated listing rule that lists items according to a specified schedule.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule
     * @return self
     */
    public function setListAccordingToSchedule(\Nogrod\eBaySDK\MerchantData\SellingManagerAutoListAccordingToScheduleType $listAccordingToSchedule)
    {
        $this->listAccordingToSchedule = $listAccordingToSchedule;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSourceSaleTemplateID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SourceSaleTemplateID", $value);
        }
        $value = $this->getKeepMinActive();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}KeepMinActive", $value);
        }
        $value = $this->getListAccordingToSchedule();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListAccordingToSchedule", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SourceSaleTemplateID');
        if (null !== $value) {
            $this->setSourceSaleTemplateID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}KeepMinActive');
        if (null !== $value) {
            $this->setKeepMinActive(\Nogrod\eBaySDK\MerchantData\SellingManagerAutoListMinActiveItemsType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListAccordingToSchedule');
        if (null !== $value) {
            $this->setListAccordingToSchedule(\Nogrod\eBaySDK\MerchantData\SellingManagerAutoListAccordingToScheduleType::fromKeyValue($value));
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
