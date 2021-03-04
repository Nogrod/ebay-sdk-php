<?php

namespace Nogrod\eBaySDK\Shopping;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemStatusRequestType
 *
 * The base request type of the <b>GetItemStatus</b> call. This call retrieves the current status of up to 20 eBay listings.
 * XSD Type: GetItemStatusRequestType
 */
class GetItemStatusRequestType extends AbstractRequestType
{
    /**
     * The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     *
     * @var string[] $itemID
     */
    private $itemID = [
        
    ];

    /**
     * Adds as itemID
     *
     * The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     *
     * @return self
     * @param string $itemID
     */
    public function addToItemID($itemID)
    {
        $this->itemID[] = $itemID;
        return $this;
    }

    /**
     * isset itemID
     *
     * The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItemID($index)
    {
        return isset($this->itemID[$index]);
    }

    /**
     * unset itemID
     *
     * The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItemID($index)
    {
        unset($this->itemID[$index]);
    }

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     *
     * @return string[]
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * The unique identifier of the eBay listing to retrieve. You can retrieve the status of up to 20 listings per call, and a separate <b>ItemID</b> field is required for each listing.
     *
     * @param string[] $itemID
     * @return self
     */
    public function setItemID(array $itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value && !empty($this->getItemID())) {
            $writer->write(array_map(function ($v) {
                return ["ItemID" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID', true);
        if (null !== $value && !empty($value)) {
            $this->setItemID($value);
        }
    }
}
