<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellingManagerProductDetailsType
 *
 * Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 * XSD Type: SellingManagerProductDetailsType
 */
class SellingManagerProductDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The name of a Selling Manager product. The AddSellingManagerProduct call is used to create a
     *  Selling Manager product.
     *
     * @var string $productName
     */
    private $productName = null;

    /**
     * The ID of a Selling Manager product. When you call AddSellingManagerProduct, a product ID is
     *  returned for the product created. When you use this ID to make subsequent calls, such as
     *  AddSellingManagerTemplate, the ProductID you provide on input is returned in the output.
     *
     * @var int $productID
     */
    private $productID = null;

    /**
     * Custom label of this product.
     *
     * @var string $customLabel
     */
    private $customLabel = null;

    /**
     * Quantity of items in the seller's inventory for this product.
     *
     * @var int $quantityAvailable
     */
    private $quantityAvailable = null;

    /**
     * Cost of each item of this product.
     *
     * @var \Nogrod\eBaySDK\MerchantData\AmountType $unitCost
     */
    private $unitCost = null;

    /**
     * ID of the inventory folder that contains the product. Value is initially returned in
     *  the AddSellingManagerInventoryFolder response.
     *
     * @var int $folderID
     */
    private $folderID = null;

    /**
     * Specifies whether a restock alert is triggered for the product or not.
     *
     * @var bool $restockAlert
     */
    private $restockAlert = null;

    /**
     * Specifies the quantity at which a restock alert should be triggered.
     *
     * @var int $restockThreshold
     */
    private $restockThreshold = null;

    /**
     * Primary vendor information. Vendor information is returned only if it has been
     *  set.
     *
     * @var \Nogrod\eBaySDK\MerchantData\SellingManagerVendorDetailsType $vendorInfo
     */
    private $vendorInfo = null;

    /**
     * Seller's note about this product.
     *
     * @var string $note
     */
    private $note = null;

    /**
     * Gets as productName
     *
     * The name of a Selling Manager product. The AddSellingManagerProduct call is used to create a
     *  Selling Manager product.
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets a new productName
     *
     * The name of a Selling Manager product. The AddSellingManagerProduct call is used to create a
     *  Selling Manager product.
     *
     * @param string $productName
     * @return self
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * Gets as productID
     *
     * The ID of a Selling Manager product. When you call AddSellingManagerProduct, a product ID is
     *  returned for the product created. When you use this ID to make subsequent calls, such as
     *  AddSellingManagerTemplate, the ProductID you provide on input is returned in the output.
     *
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Sets a new productID
     *
     * The ID of a Selling Manager product. When you call AddSellingManagerProduct, a product ID is
     *  returned for the product created. When you use this ID to make subsequent calls, such as
     *  AddSellingManagerTemplate, the ProductID you provide on input is returned in the output.
     *
     * @param int $productID
     * @return self
     */
    public function setProductID($productID)
    {
        $this->productID = $productID;
        return $this;
    }

    /**
     * Gets as customLabel
     *
     * Custom label of this product.
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
     * Custom label of this product.
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
     * Gets as quantityAvailable
     *
     * Quantity of items in the seller's inventory for this product.
     *
     * @return int
     */
    public function getQuantityAvailable()
    {
        return $this->quantityAvailable;
    }

    /**
     * Sets a new quantityAvailable
     *
     * Quantity of items in the seller's inventory for this product.
     *
     * @param int $quantityAvailable
     * @return self
     */
    public function setQuantityAvailable($quantityAvailable)
    {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Gets as unitCost
     *
     * Cost of each item of this product.
     *
     * @return \Nogrod\eBaySDK\MerchantData\AmountType
     */
    public function getUnitCost()
    {
        return $this->unitCost;
    }

    /**
     * Sets a new unitCost
     *
     * Cost of each item of this product.
     *
     * @param \Nogrod\eBaySDK\MerchantData\AmountType $unitCost
     * @return self
     */
    public function setUnitCost(\Nogrod\eBaySDK\MerchantData\AmountType $unitCost)
    {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * Gets as folderID
     *
     * ID of the inventory folder that contains the product. Value is initially returned in
     *  the AddSellingManagerInventoryFolder response.
     *
     * @return int
     */
    public function getFolderID()
    {
        return $this->folderID;
    }

    /**
     * Sets a new folderID
     *
     * ID of the inventory folder that contains the product. Value is initially returned in
     *  the AddSellingManagerInventoryFolder response.
     *
     * @param int $folderID
     * @return self
     */
    public function setFolderID($folderID)
    {
        $this->folderID = $folderID;
        return $this;
    }

    /**
     * Gets as restockAlert
     *
     * Specifies whether a restock alert is triggered for the product or not.
     *
     * @return bool
     */
    public function getRestockAlert()
    {
        return $this->restockAlert;
    }

    /**
     * Sets a new restockAlert
     *
     * Specifies whether a restock alert is triggered for the product or not.
     *
     * @param bool $restockAlert
     * @return self
     */
    public function setRestockAlert($restockAlert)
    {
        $this->restockAlert = $restockAlert;
        return $this;
    }

    /**
     * Gets as restockThreshold
     *
     * Specifies the quantity at which a restock alert should be triggered.
     *
     * @return int
     */
    public function getRestockThreshold()
    {
        return $this->restockThreshold;
    }

    /**
     * Sets a new restockThreshold
     *
     * Specifies the quantity at which a restock alert should be triggered.
     *
     * @param int $restockThreshold
     * @return self
     */
    public function setRestockThreshold($restockThreshold)
    {
        $this->restockThreshold = $restockThreshold;
        return $this;
    }

    /**
     * Gets as vendorInfo
     *
     * Primary vendor information. Vendor information is returned only if it has been
     *  set.
     *
     * @return \Nogrod\eBaySDK\MerchantData\SellingManagerVendorDetailsType
     */
    public function getVendorInfo()
    {
        return $this->vendorInfo;
    }

    /**
     * Sets a new vendorInfo
     *
     * Primary vendor information. Vendor information is returned only if it has been
     *  set.
     *
     * @param \Nogrod\eBaySDK\MerchantData\SellingManagerVendorDetailsType $vendorInfo
     * @return self
     */
    public function setVendorInfo(\Nogrod\eBaySDK\MerchantData\SellingManagerVendorDetailsType $vendorInfo)
    {
        $this->vendorInfo = $vendorInfo;
        return $this;
    }

    /**
     * Gets as note
     *
     * Seller's note about this product.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * Seller's note about this product.
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getProductName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductName", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getCustomLabel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CustomLabel", $value);
        }
        $value = $this->getQuantityAvailable();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuantityAvailable", $value);
        }
        $value = $this->getUnitCost();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UnitCost", $value);
        }
        $value = $this->getFolderID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FolderID", $value);
        }
        $value = $this->getRestockAlert();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RestockAlert", $value);
        }
        $value = $this->getRestockThreshold();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RestockThreshold", $value);
        }
        $value = $this->getVendorInfo();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}VendorInfo", $value);
        }
        $value = $this->getNote();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Note", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductName');
        if (null !== $value) {
            $this->setProductName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CustomLabel');
        if (null !== $value) {
            $this->setCustomLabel($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuantityAvailable');
        if (null !== $value) {
            $this->setQuantityAvailable($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UnitCost');
        if (null !== $value) {
            $this->setUnitCost(\Nogrod\eBaySDK\MerchantData\AmountType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FolderID');
        if (null !== $value) {
            $this->setFolderID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockAlert');
        if (null !== $value) {
            $this->setRestockAlert($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RestockThreshold');
        if (null !== $value) {
            $this->setRestockThreshold($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}VendorInfo');
        if (null !== $value) {
            $this->setVendorInfo(\Nogrod\eBaySDK\MerchantData\SellingManagerVendorDetailsType::fromKeyValue($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Note');
        if (null !== $value) {
            $this->setNote($value);
        }
    }
}
