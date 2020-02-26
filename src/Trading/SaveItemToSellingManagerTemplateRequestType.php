<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing SaveItemToSellingManagerTemplateRequestType
 *
 * Creates a Selling Manager template based on an existing eBay listing.
 *  This call is subject to change without notice; the
 *  deprecation process is inapplicable to this call. The user must have a Selling Manager Pro subscription to use this call.
 * XSD Type: SaveItemToSellingManagerTemplateRequestType
 */
class SaveItemToSellingManagerTemplateRequestType extends AbstractRequestType
{

    /**
     * The unique identifier of the eBay listing which should be used as a model to create the Selling Manager template and save it to Selling Manager inventory.
     *
     * @var string $itemID
     */
    private $itemID = null;

    /**
     * Associates the new template with a product.
     *
     * @var int $productID
     */
    private $productID = null;

    /**
     * Name associated with the template. If no name is submitted, the template will be named automatically.
     *
     * @var string $templateName
     */
    private $templateName = null;

    /**
     * Gets as itemID
     *
     * The unique identifier of the eBay listing which should be used as a model to create the Selling Manager template and save it to Selling Manager inventory.
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
     * The unique identifier of the eBay listing which should be used as a model to create the Selling Manager template and save it to Selling Manager inventory.
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
     * Gets as productID
     *
     * Associates the new template with a product.
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
     * Associates the new template with a product.
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
     * Gets as templateName
     *
     * Name associated with the template. If no name is submitted, the template will be named automatically.
     *
     * @return string
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Sets a new templateName
     *
     * Name associated with the template. If no name is submitted, the template will be named automatically.
     *
     * @param string $templateName
     * @return self
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getItemID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ItemID", $value);
        }
        $value = $this->getProductID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ProductID", $value);
        }
        $value = $this->getTemplateName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TemplateName", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ItemID');
        if (null !== $value) {
            $this->setItemID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ProductID');
        if (null !== $value) {
            $this->setProductID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TemplateName');
        if (null !== $value) {
            $this->setTemplateName($value);
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
