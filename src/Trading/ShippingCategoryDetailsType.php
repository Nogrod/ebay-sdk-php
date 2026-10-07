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
        $value = $this->shippingCategory;
        if (null !== $value) {
            $writer->writeElementNs(null, 'ShippingCategory', null, (string) $value);
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
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ShippingCategoryDetailsType
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
                case 'ShippingCategory':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->shippingCategory = $value;
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
            }
        }
        return false;
    }
}
