<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ShippingCategoryDetailsType
 *
 * This type defines the <b>ShippingCategoryDetails</b> container. When the <b>DetailName</b> field
 *  is set to ShippingCategoryDetails in a <b>GeteBayDetails</b> request, one
 *  <b>ShippingCategoryDetails</b> container is returned for each valid shipping category
 *  used on the eBay site. Besides being useful to view the list of valid shipping
 *  categories, this container is also useful to discover when the last update to
 *  shipping categories was made by eBay.
 * XSD Type: ShippingCategoryDetailsType
 */
class ShippingCategoryDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates the shipping category. Shipping categories include the following: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, OTHER, and NONE. International shipping services are generally grouped into the NONE category. For more information on these shipping categories, and which services fall into which category, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186).
     *  </span>
     *
     * @var string $shippingCategory
     */
    private $shippingCategory = null;

    /**
     * Display string that applications can use to present a list of shipping categories in a more user-friendly format (such as in a drop-down list). This field is localized per site.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The current version number for shipping categories. Sellers can compare this
     *  version number to their version number to determine if and when to refresh
     *  cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Indicates the time of the last version update.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as shippingCategory
     *
     * Indicates the shipping category. Shipping categories include the following: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, OTHER, and NONE. International shipping services are generally grouped into the NONE category. For more information on these shipping categories, and which services fall into which category, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186).
     *  </span>
     *
     * @return string
     */
    public function getShippingCategory()
    {
        return $this->shippingCategory;
    }

    /**
     * Sets a new shippingCategory
     *
     * Indicates the shipping category. Shipping categories include the following: ECONOMY, STANDARD, EXPEDITED, ONE_DAY, PICKUP, OTHER, and NONE. International shipping services are generally grouped into the NONE category. For more information on these shipping categories, and which services fall into which category, see the <a href="http://pages.ebay.com/sellerinformation/shipping/chooseservice.html">Shipping Basics</a> page on the eBay Shipping Center site.
     *  <br/><br/>
     *  <span class="tablenote">
     *  <strong>Note:</strong> This field is returned only for those sites that support shipping categories: US (0), CA (2), CAFR (210), UK (3), AU (15), FR (71), DE (77), IT (101) and ES (186).
     *  </span>
     *
     * @param string $shippingCategory
     * @return self
     */
    public function setShippingCategory($shippingCategory)
    {
        $this->shippingCategory = $shippingCategory;
        return $this;
    }

    /**
     * Gets as description
     *
     * Display string that applications can use to present a list of shipping categories in a more user-friendly format (such as in a drop-down list). This field is localized per site.
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
     * Display string that applications can use to present a list of shipping categories in a more user-friendly format (such as in a drop-down list). This field is localized per site.
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
     * The current version number for shipping categories. Sellers can compare this
     *  version number to their version number to determine if and when to refresh
     *  cached client data.
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
     * The current version number for shipping categories. Sellers can compare this
     *  version number to their version number to determine if and when to refresh
     *  cached client data.
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
     * Indicates the time of the last version update.
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
     * Indicates the time of the last version update.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getShippingCategory();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ShippingCategory", $value);
        }
        $value = $this->getDescription();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Description", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ShippingCategory');
        if (null !== $value) {
            $this->setShippingCategory($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Description');
        if (null !== $value) {
            $this->setDescription($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
