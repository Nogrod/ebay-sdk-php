<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerSoldTransactionType
 *
 * Contains information about a single line item (transaction) in an order created
 *  through Selling Manager.
 * XSD Type: SellingManagerSoldTransactionType
 */
class SellingManagerSoldTransactionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Seller's customized invoice number.
     *
     * @var string $invoiceNumber
     */
    private $invoiceNumber = null;

    /**
     * Unique identifier for an eBay order line item. An order line
     *  item is created once there is a commitment from a buyer to
     *  purchase an item. Since an auction listing can only have one order line
     *  item during the duration of the listing, the <b>TransactionID</b>
     *  for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a
     *  <b>TransactionID</b> is used and referenced during an order checkout flow and
     *  after checkout has been completed.
     *
     * @var int $transactionID
     */
    private $transactionID = null;

    /**
     * Unique identifier for a Selling Manager sale record. This field is created
     *  at the same time as the order line item (transaction). A sale record is
     *  displayed in the Sold view in Selling Manager and contains information on
     *  the buyer and shipping. In the <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>,
     *  <b>GetOrders</b>, and <b>GetOrderTransactions</b> calls, the <b>SaleRecordID</b> value is
     *  reflected in the <b>ShippingDetails.SellingManagerSalesRecordNumber</b> field.
     *  <br/><br/>
     *  For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings
     *  request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container
     *  must also be used, passing in a date range that includes the date on which the specific sale occurred.
     *
     * @var int $saleRecordID
     */
    private $saleRecordID = null;

    /**
     * Unique identifier for an eBay listing.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Total number of identical items sold in the order line item.
     *
     * @var int $quantitySold
     */
    private $quantitySold = null;

    /**
     * Price per item.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $itemPrice
     */
    private $itemPrice = null;

    /**
     * This value is calculated by multplying the <b>ItemPrice</b> value by the
     *  <b>QuantitySold</b> value.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $subtotalAmount
     */
    private $subtotalAmount = null;

    /**
     * The title of the item listing.
     *
     * @var string $itemTitle
     */
    private $itemTitle = null;

    /**
     * The item listing type.
     *
     * @var string $listingType
     */
    private $listingType = null;

    /**
     * Boolean value indicating whether the item is a relisted item.
     *
     * @var bool $relisted
     */
    private $relisted = null;

    /**
     * Number of users watching the item.
     *
     * @var int $watchCount
     */
    private $watchCount = null;

    /**
     * Start price of the item.
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $startPrice
     */
    private $startPrice = null;

    /**
     * Reserve Price of the item (if a Reserve Price was set for the item).
     *
     * @var \Nogrod\eBaySDK\Trading\AmountType $reservePrice
     */
    private $reservePrice = null;

    /**
     * Boolean value indicating whether or not a Second Chance offer was sent by
     *  the seller to an eligible bidder.
     *
     * @var bool $secondChanceOfferSent
     */
    private $secondChanceOfferSent = null;

    /**
     * Custom label associated with this order line item.
     *
     * @var string $customLabel
     */
    private $customLabel = null;

    /**
     * The platform on which the item was sold.
     *
     * @var string $soldOn
     */
    private $soldOn = null;

    /**
     * The platform on which the item was listed.
     *
     * @var string[] $listedOn
     */
    private $listedOn = [
        
    ];

    /**
     * Container consisting of tracking information for the shipment.
     *
     * @var \Nogrod\eBaySDK\Trading\ShipmentType $shipment
     */
    private $shipment = null;

    /**
     * This field is returned as 'true' if the item is listed as a charity item.
     *
     * @var bool $charityListing
     */
    private $charityListing = null;

    /**
     * In a fixed-priced listing, a seller can offer variations of the same item.
     *  For example, the seller could create a fixed-priced listing for a t-shirt
     *  design and offer the shirt in different colors and sizes. In this case, each
     *  color and size combination is a separate variation. Each variation can have
     *  a different quantity and price. Due to the possible price differentiation,
     *  buyers can buy multiple items from this listing at the same time, but all of
     *  the items must be of the same variation. One order line item is created
     *  whether one or multiple items of the same variation are purchased.
     *  <br><br>
     *  The <b>Variation</b> node contains information about which variation was purchased.
     *  Therefore, applications that process order line items should always check to see
     *  if this node is present.
     *
     * @var \Nogrod\eBaySDK\Trading\VariationType $variation
     */
    private $variation = null;

    /**
     * A unique identifier for an eBay order line item. .
     *
     * @var string $orderLineItemID
     */
    private $orderLineItemID = null;

    /**
     * Gets as invoiceNumber
     *
     * Seller's customized invoice number.
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Sets a new invoiceNumber
     *
     * Seller's customized invoice number.
     *
     * @param string $invoiceNumber
     * @return self
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * Unique identifier for an eBay order line item. An order line
     *  item is created once there is a commitment from a buyer to
     *  purchase an item. Since an auction listing can only have one order line
     *  item during the duration of the listing, the <b>TransactionID</b>
     *  for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a
     *  <b>TransactionID</b> is used and referenced during an order checkout flow and
     *  after checkout has been completed.
     *
     * @return int
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * Unique identifier for an eBay order line item. An order line
     *  item is created once there is a commitment from a buyer to
     *  purchase an item. Since an auction listing can only have one order line
     *  item during the duration of the listing, the <b>TransactionID</b>
     *  for auction listings is always 0. Along with its corresponding <b>ItemID</b>, a
     *  <b>TransactionID</b> is used and referenced during an order checkout flow and
     *  after checkout has been completed.
     *
     * @param int $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as saleRecordID
     *
     * Unique identifier for a Selling Manager sale record. This field is created
     *  at the same time as the order line item (transaction). A sale record is
     *  displayed in the Sold view in Selling Manager and contains information on
     *  the buyer and shipping. In the <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>,
     *  <b>GetOrders</b>, and <b>GetOrderTransactions</b> calls, the <b>SaleRecordID</b> value is
     *  reflected in the <b>ShippingDetails.SellingManagerSalesRecordNumber</b> field.
     *  <br/><br/>
     *  For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings
     *  request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container
     *  must also be used, passing in a date range that includes the date on which the specific sale occurred.
     *
     * @return int
     */
    public function getSaleRecordID()
    {
        return $this->saleRecordID;
    }

    /**
     * Sets a new saleRecordID
     *
     * Unique identifier for a Selling Manager sale record. This field is created
     *  at the same time as the order line item (transaction). A sale record is
     *  displayed in the Sold view in Selling Manager and contains information on
     *  the buyer and shipping. In the <b>GetItemTransactions</b>, <b>GetSellerTransactions</b>,
     *  <b>GetOrders</b>, and <b>GetOrderTransactions</b> calls, the <b>SaleRecordID</b> value is
     *  reflected in the <b>ShippingDetails.SellingManagerSalesRecordNumber</b> field.
     *  <br/><br/>
     *  For orders that occurred within the last 30 days, passing only the SaleRecordID into the GetSellingManagerSoldListings
     *  request will return the sale record. However, for sales that occurred more than 30 days ago, the SaleDateRange container
     *  must also be used, passing in a date range that includes the date on which the specific sale occurred.
     *
     * @param int $saleRecordID
     * @return self
     */
    public function setSaleRecordID($saleRecordID)
    {
        $this->saleRecordID = $saleRecordID;
        return $this;
    }

    /**
     * Gets as itemID
     *
     * Unique identifier for an eBay listing.
     *
     * @return string
     */
    public function getItemID()
    {
        return $this->itemID;
    }

    /**
     * Sets a new itemID
     *
     * Unique identifier for an eBay listing.
     *
     * @param string $itemID
     * @return self
     */
    public function setItemID($itemID)
    {
        $this->itemID = $itemID;
        return $this;
    }

    /**
     * Gets as quantitySold
     *
     * Total number of identical items sold in the order line item.
     *
     * @return int
     */
    public function getQuantitySold()
    {
        return $this->quantitySold;
    }

    /**
     * Sets a new quantitySold
     *
     * Total number of identical items sold in the order line item.
     *
     * @param int $quantitySold
     * @return self
     */
    public function setQuantitySold($quantitySold)
    {
        $this->quantitySold = $quantitySold;
        return $this;
    }

    /**
     * Gets as itemPrice
     *
     * Price per item.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    /**
     * Sets a new itemPrice
     *
     * Price per item.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $itemPrice
     * @return self
     */
    public function setItemPrice(\Nogrod\eBaySDK\Trading\AmountType $itemPrice)
    {
        $this->itemPrice = $itemPrice;
        return $this;
    }

    /**
     * Gets as subtotalAmount
     *
     * This value is calculated by multplying the <b>ItemPrice</b> value by the
     *  <b>QuantitySold</b> value.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getSubtotalAmount()
    {
        return $this->subtotalAmount;
    }

    /**
     * Sets a new subtotalAmount
     *
     * This value is calculated by multplying the <b>ItemPrice</b> value by the
     *  <b>QuantitySold</b> value.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $subtotalAmount
     * @return self
     */
    public function setSubtotalAmount(\Nogrod\eBaySDK\Trading\AmountType $subtotalAmount)
    {
        $this->subtotalAmount = $subtotalAmount;
        return $this;
    }

    /**
     * Gets as itemTitle
     *
     * The title of the item listing.
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->itemTitle;
    }

    /**
     * Sets a new itemTitle
     *
     * The title of the item listing.
     *
     * @param string $itemTitle
     * @return self
     */
    public function setItemTitle($itemTitle)
    {
        $this->itemTitle = $itemTitle;
        return $this;
    }

    /**
     * Gets as listingType
     *
     * The item listing type.
     *
     * @return string
     */
    public function getListingType()
    {
        return $this->listingType;
    }

    /**
     * Sets a new listingType
     *
     * The item listing type.
     *
     * @param string $listingType
     * @return self
     */
    public function setListingType($listingType)
    {
        $this->listingType = $listingType;
        return $this;
    }

    /**
     * Gets as relisted
     *
     * Boolean value indicating whether the item is a relisted item.
     *
     * @return bool
     */
    public function getRelisted()
    {
        return $this->relisted;
    }

    /**
     * Sets a new relisted
     *
     * Boolean value indicating whether the item is a relisted item.
     *
     * @param bool $relisted
     * @return self
     */
    public function setRelisted($relisted)
    {
        $this->relisted = $relisted;
        return $this;
    }

    /**
     * Gets as watchCount
     *
     * Number of users watching the item.
     *
     * @return int
     */
    public function getWatchCount()
    {
        return $this->watchCount;
    }

    /**
     * Sets a new watchCount
     *
     * Number of users watching the item.
     *
     * @param int $watchCount
     * @return self
     */
    public function setWatchCount($watchCount)
    {
        $this->watchCount = $watchCount;
        return $this;
    }

    /**
     * Gets as startPrice
     *
     * Start price of the item.
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getStartPrice()
    {
        return $this->startPrice;
    }

    /**
     * Sets a new startPrice
     *
     * Start price of the item.
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $startPrice
     * @return self
     */
    public function setStartPrice(\Nogrod\eBaySDK\Trading\AmountType $startPrice)
    {
        $this->startPrice = $startPrice;
        return $this;
    }

    /**
     * Gets as reservePrice
     *
     * Reserve Price of the item (if a Reserve Price was set for the item).
     *
     * @return \Nogrod\eBaySDK\Trading\AmountType
     */
    public function getReservePrice()
    {
        return $this->reservePrice;
    }

    /**
     * Sets a new reservePrice
     *
     * Reserve Price of the item (if a Reserve Price was set for the item).
     *
     * @param \Nogrod\eBaySDK\Trading\AmountType $reservePrice
     * @return self
     */
    public function setReservePrice(\Nogrod\eBaySDK\Trading\AmountType $reservePrice)
    {
        $this->reservePrice = $reservePrice;
        return $this;
    }

    /**
     * Gets as secondChanceOfferSent
     *
     * Boolean value indicating whether or not a Second Chance offer was sent by
     *  the seller to an eligible bidder.
     *
     * @return bool
     */
    public function getSecondChanceOfferSent()
    {
        return $this->secondChanceOfferSent;
    }

    /**
     * Sets a new secondChanceOfferSent
     *
     * Boolean value indicating whether or not a Second Chance offer was sent by
     *  the seller to an eligible bidder.
     *
     * @param bool $secondChanceOfferSent
     * @return self
     */
    public function setSecondChanceOfferSent($secondChanceOfferSent)
    {
        $this->secondChanceOfferSent = $secondChanceOfferSent;
        return $this;
    }

    /**
     * Gets as customLabel
     *
     * Custom label associated with this order line item.
     *
     * @return string
     */
    public function getCustomLabel()
    {
        return $this->customLabel;
    }

    /**
     * Sets a new customLabel
     *
     * Custom label associated with this order line item.
     *
     * @param string $customLabel
     * @return self
     */
    public function setCustomLabel($customLabel)
    {
        $this->customLabel = $customLabel;
        return $this;
    }

    /**
     * Gets as soldOn
     *
     * The platform on which the item was sold.
     *
     * @return string
     */
    public function getSoldOn()
    {
        return $this->soldOn;
    }

    /**
     * Sets a new soldOn
     *
     * The platform on which the item was sold.
     *
     * @param string $soldOn
     * @return self
     */
    public function setSoldOn($soldOn)
    {
        $this->soldOn = $soldOn;
        return $this;
    }

    /**
     * Adds as listedOn
     *
     * The platform on which the item was listed.
     *
     * @return self
     * @param string $listedOn
     */
    public function addToListedOn($listedOn)
    {
        $this->listedOn[] = $listedOn;
        return $this;
    }

    /**
     * isset listedOn
     *
     * The platform on which the item was listed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetListedOn($index)
    {
        return isset($this->listedOn[$index]);
    }

    /**
     * unset listedOn
     *
     * The platform on which the item was listed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetListedOn($index)
    {
        unset($this->listedOn[$index]);
    }

    /**
     * Gets as listedOn
     *
     * The platform on which the item was listed.
     *
     * @return string[]
     */
    public function getListedOn()
    {
        return $this->listedOn;
    }

    /**
     * Sets a new listedOn
     *
     * The platform on which the item was listed.
     *
     * @param string $listedOn
     * @return self
     */
    public function setListedOn(array $listedOn)
    {
        $this->listedOn = $listedOn;
        return $this;
    }

    /**
     * Gets as shipment
     *
     * Container consisting of tracking information for the shipment.
     *
     * @return \Nogrod\eBaySDK\Trading\ShipmentType
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * Container consisting of tracking information for the shipment.
     *
     * @param \Nogrod\eBaySDK\Trading\ShipmentType $shipment
     * @return self
     */
    public function setShipment(\Nogrod\eBaySDK\Trading\ShipmentType $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Gets as charityListing
     *
     * This field is returned as 'true' if the item is listed as a charity item.
     *
     * @return bool
     */
    public function getCharityListing()
    {
        return $this->charityListing;
    }

    /**
     * Sets a new charityListing
     *
     * This field is returned as 'true' if the item is listed as a charity item.
     *
     * @param bool $charityListing
     * @return self
     */
    public function setCharityListing($charityListing)
    {
        $this->charityListing = $charityListing;
        return $this;
    }

    /**
     * Gets as variation
     *
     * In a fixed-priced listing, a seller can offer variations of the same item.
     *  For example, the seller could create a fixed-priced listing for a t-shirt
     *  design and offer the shirt in different colors and sizes. In this case, each
     *  color and size combination is a separate variation. Each variation can have
     *  a different quantity and price. Due to the possible price differentiation,
     *  buyers can buy multiple items from this listing at the same time, but all of
     *  the items must be of the same variation. One order line item is created
     *  whether one or multiple items of the same variation are purchased.
     *  <br><br>
     *  The <b>Variation</b> node contains information about which variation was purchased.
     *  Therefore, applications that process order line items should always check to see
     *  if this node is present.
     *
     * @return \Nogrod\eBaySDK\Trading\VariationType
     */
    public function getVariation()
    {
        return $this->variation;
    }

    /**
     * Sets a new variation
     *
     * In a fixed-priced listing, a seller can offer variations of the same item.
     *  For example, the seller could create a fixed-priced listing for a t-shirt
     *  design and offer the shirt in different colors and sizes. In this case, each
     *  color and size combination is a separate variation. Each variation can have
     *  a different quantity and price. Due to the possible price differentiation,
     *  buyers can buy multiple items from this listing at the same time, but all of
     *  the items must be of the same variation. One order line item is created
     *  whether one or multiple items of the same variation are purchased.
     *  <br><br>
     *  The <b>Variation</b> node contains information about which variation was purchased.
     *  Therefore, applications that process order line items should always check to see
     *  if this node is present.
     *
     * @param \Nogrod\eBaySDK\Trading\VariationType $variation
     * @return self
     */
    public function setVariation(\Nogrod\eBaySDK\Trading\VariationType $variation)
    {
        $this->variation = $variation;
        return $this;
    }

    /**
     * Gets as orderLineItemID
     *
     * A unique identifier for an eBay order line item. .
     *
     * @return string
     */
    public function getOrderLineItemID()
    {
        return $this->orderLineItemID;
    }

    /**
     * Sets a new orderLineItemID
     *
     * A unique identifier for an eBay order line item. .
     *
     * @param string $orderLineItemID
     * @return self
     */
    public function setOrderLineItemID($orderLineItemID)
    {
        $this->orderLineItemID = $orderLineItemID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getInvoiceNumber();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvoiceNumber", $value);
        }
        $value = $this->getTransactionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TransactionID", $value);
        }
        $value = $this->getSaleRecordID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SaleRecordID", $value);
        }
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getQuantitySold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantitySold", $value);
        }
        $value = $this->getItemPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemPrice", $value);
        }
        $value = $this->getSubtotalAmount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SubtotalAmount", $value);
        }
        $value = $this->getItemTitle();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemTitle", $value);
        }
        $value = $this->getListingType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ListingType", $value);
        }
        $value = $this->getRelisted();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Relisted", $value);
        }
        $value = $this->getWatchCount();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WatchCount", $value);
        }
        $value = $this->getStartPrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}StartPrice", $value);
        }
        $value = $this->getReservePrice();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ReservePrice", $value);
        }
        $value = $this->getSecondChanceOfferSent();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SecondChanceOfferSent", $value);
        }
        $value = $this->getCustomLabel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomLabel", $value);
        }
        $value = $this->getSoldOn();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SoldOn", $value);
        }
        $value = $this->getListedOn();
        if (null !== $value && !empty($this->getListedOn())) {
            $writer->write(array_map(function ($v) {
                return ["ListedOn" => $v];
            }, $value));
        }
        $value = $this->getShipment();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Shipment", $value);
        }
        $value = $this->getCharityListing();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CharityListing", $value);
        }
        $value = $this->getVariation();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Variation", $value);
        }
        $value = $this->getOrderLineItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}OrderLineItemID", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvoiceNumber');
        if (null !== $value) {
            $this->setInvoiceNumber($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TransactionID');
        if (null !== $value) {
            $this->setTransactionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SaleRecordID');
        if (null !== $value) {
            $this->setSaleRecordID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantitySold');
        if (null !== $value) {
            $this->setQuantitySold($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemPrice');
        if (null !== $value) {
            $this->setItemPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SubtotalAmount');
        if (null !== $value) {
            $this->setSubtotalAmount(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemTitle');
        if (null !== $value) {
            $this->setItemTitle($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListingType');
        if (null !== $value) {
            $this->setListingType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Relisted');
        if (null !== $value) {
            $this->setRelisted($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WatchCount');
        if (null !== $value) {
            $this->setWatchCount($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}StartPrice');
        if (null !== $value) {
            $this->setStartPrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ReservePrice');
        if (null !== $value) {
            $this->setReservePrice(\Nogrod\eBaySDK\Trading\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SecondChanceOfferSent');
        if (null !== $value) {
            $this->setSecondChanceOfferSent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomLabel');
        if (null !== $value) {
            $this->setCustomLabel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SoldOn');
        if (null !== $value) {
            $this->setSoldOn($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ListedOn', true);
        if (null !== $value && !empty($value)) {
            $this->setListedOn($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Shipment');
        if (null !== $value) {
            $this->setShipment(\Nogrod\eBaySDK\Trading\ShipmentType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CharityListing');
        if (null !== $value) {
            $this->setCharityListing($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Variation');
        if (null !== $value) {
            $this->setVariation(\Nogrod\eBaySDK\Trading\VariationType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OrderLineItemID');
        if (null !== $value) {
            $this->setOrderLineItemID($value);
        }
    }
}
