<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemFilterType
 *
 * Reduce the number of items returned by a find request using itemFilters.
 *  Use the itemFilter container to specify itemFilter Name/Value pairs.
 *  You can include multiple itemFilters in a single request.
 * XSD Type: ItemFilter
 */
class ItemFilterType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * In addition to filter Name/Value pairs, some itemFilters use an
     *  additional parameter Name/Value pair. Specifically, filters that use
     *  currency values (MaxPrice and MinPrice) make use of addition parameters.
     *  When you use these itemFilters, set paramName to Currency and provide the
     *  currency ID in paramValue.
     *  <br><br>
     *  For example, if you use the MaxPrice itemFilter, you will need to specify
     *  a parameter Name of Currency with a parameter Value that specifies the
     *  type of currency desired.
     *  <br><br>
     *  Note that for MaxPrice and MinPrice itemFilters, the default value for
     *  paramName is Currency.
     *
     * @var string $paramName
     */
    private $paramName = null;

    /**
     * The currency value associated with the respective itemFilter parameter
     *  Name.
     *  <br><br>
     *  Usually paramName is set to Currency and paramValue is set to the
     *  currency type in which the monetary transaction occurs.
     *  <br><br>
     *  Note that for MaxPrice and MinPrice itemFilters, the default value for
     *  paramValue is USD.
     *
     * @var string $paramValue
     */
    private $paramValue = null;

    /**
     * Specify the name of the item filter you want to use. The itemFilter name
     *  must have a corresponding value. You can apply multiple itemFilter
     *  Name/Value pairs in a single request.
     *  <br><br>
     *  <b>Item Filter Names</b>:
     *  <br><br>
     *  <ul>
     *  <li>AvailableTo</li>
     *  <li>BestOfferOnly</li>
     *  <li>CharityOnly</li>
     *  <li>Condition</li>
     *  <li>Currency</li>
     *  <li>EndTimeFrom</li>
     *  <li>EndTimeTo</li>
     *  <li>ExcludeAutoPay</li>
     *  <li>ExcludeCategory</li>
     *  <li>ExcludeSeller</li>
     *  <li>ExpeditedShippingType</li>
     *  <li>FeaturedOnly</li>
     *  <li>FeedbackScoreMax</li>
     *  <li>FeedbackScoreMin</li>
     *  <li>FreeShippingOnly</li>
     *  <li>GetItFastOnly</li>
     *  <li>HideDuplicateItems</li>
     *  <li>ListedIn</li>
     *  <li>ListingType</li>
     *  <li>LocalPickupOnly</li>
     *  <li>LocalSearchOnly</li>
     *  <li>LocatedIn</li>
     *  <li>LotsOnly</li>
     *  <li>MaxBids</li>
     *  <li>MaxDistance</li>
     *  <li>MaxHandlingTime</li>
     *  <li>MaxPrice</li>
     *  <li>MaxQuantity</li>
     *  <li>MinBids</li>
     *  <li>MinPrice</li>
     *  <li>MinQuantity</li>
     *  <li>ModTimeFrom</li>
     *  <li>PaymentMethod</li>
     *  <li>ReturnsAcceptedOnly</li>
     *  <li>Seller</li>
     *  <li>SellerBusinessType</li>
     *  <li>TopRatedSellerOnly</li>
     *  <li>ValueBoxInventory</li>
     *  <li>WorldOfGoodOnly</li>
     *  </ul>
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The value associated with the respective item filter name. Allowed values
     *  and datatypes vary for a given filter name.
     *
     * @var string[] $value
     */
    private $value = [
        
    ];

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as paramName
     *
     * In addition to filter Name/Value pairs, some itemFilters use an
     *  additional parameter Name/Value pair. Specifically, filters that use
     *  currency values (MaxPrice and MinPrice) make use of addition parameters.
     *  When you use these itemFilters, set paramName to Currency and provide the
     *  currency ID in paramValue.
     *  <br><br>
     *  For example, if you use the MaxPrice itemFilter, you will need to specify
     *  a parameter Name of Currency with a parameter Value that specifies the
     *  type of currency desired.
     *  <br><br>
     *  Note that for MaxPrice and MinPrice itemFilters, the default value for
     *  paramName is Currency.
     *
     * @return string
     */
    public function getParamName()
    {
        return $this->paramName;
    }

    /**
     * Sets a new paramName
     *
     * In addition to filter Name/Value pairs, some itemFilters use an
     *  additional parameter Name/Value pair. Specifically, filters that use
     *  currency values (MaxPrice and MinPrice) make use of addition parameters.
     *  When you use these itemFilters, set paramName to Currency and provide the
     *  currency ID in paramValue.
     *  <br><br>
     *  For example, if you use the MaxPrice itemFilter, you will need to specify
     *  a parameter Name of Currency with a parameter Value that specifies the
     *  type of currency desired.
     *  <br><br>
     *  Note that for MaxPrice and MinPrice itemFilters, the default value for
     *  paramName is Currency.
     *
     * @param string $paramName
     * @return self
     */
    public function setParamName($paramName)
    {
        $this->paramName = $paramName;
        return $this;
    }

    /**
     * Gets as paramValue
     *
     * The currency value associated with the respective itemFilter parameter
     *  Name.
     *  <br><br>
     *  Usually paramName is set to Currency and paramValue is set to the
     *  currency type in which the monetary transaction occurs.
     *  <br><br>
     *  Note that for MaxPrice and MinPrice itemFilters, the default value for
     *  paramValue is USD.
     *
     * @return string
     */
    public function getParamValue()
    {
        return $this->paramValue;
    }

    /**
     * Sets a new paramValue
     *
     * The currency value associated with the respective itemFilter parameter
     *  Name.
     *  <br><br>
     *  Usually paramName is set to Currency and paramValue is set to the
     *  currency type in which the monetary transaction occurs.
     *  <br><br>
     *  Note that for MaxPrice and MinPrice itemFilters, the default value for
     *  paramValue is USD.
     *
     * @param string $paramValue
     * @return self
     */
    public function setParamValue($paramValue)
    {
        $this->paramValue = $paramValue;
        return $this;
    }

    /**
     * Gets as name
     *
     * Specify the name of the item filter you want to use. The itemFilter name
     *  must have a corresponding value. You can apply multiple itemFilter
     *  Name/Value pairs in a single request.
     *  <br><br>
     *  <b>Item Filter Names</b>:
     *  <br><br>
     *  <ul>
     *  <li>AvailableTo</li>
     *  <li>BestOfferOnly</li>
     *  <li>CharityOnly</li>
     *  <li>Condition</li>
     *  <li>Currency</li>
     *  <li>EndTimeFrom</li>
     *  <li>EndTimeTo</li>
     *  <li>ExcludeAutoPay</li>
     *  <li>ExcludeCategory</li>
     *  <li>ExcludeSeller</li>
     *  <li>ExpeditedShippingType</li>
     *  <li>FeaturedOnly</li>
     *  <li>FeedbackScoreMax</li>
     *  <li>FeedbackScoreMin</li>
     *  <li>FreeShippingOnly</li>
     *  <li>GetItFastOnly</li>
     *  <li>HideDuplicateItems</li>
     *  <li>ListedIn</li>
     *  <li>ListingType</li>
     *  <li>LocalPickupOnly</li>
     *  <li>LocalSearchOnly</li>
     *  <li>LocatedIn</li>
     *  <li>LotsOnly</li>
     *  <li>MaxBids</li>
     *  <li>MaxDistance</li>
     *  <li>MaxHandlingTime</li>
     *  <li>MaxPrice</li>
     *  <li>MaxQuantity</li>
     *  <li>MinBids</li>
     *  <li>MinPrice</li>
     *  <li>MinQuantity</li>
     *  <li>ModTimeFrom</li>
     *  <li>PaymentMethod</li>
     *  <li>ReturnsAcceptedOnly</li>
     *  <li>Seller</li>
     *  <li>SellerBusinessType</li>
     *  <li>TopRatedSellerOnly</li>
     *  <li>ValueBoxInventory</li>
     *  <li>WorldOfGoodOnly</li>
     *  </ul>
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Specify the name of the item filter you want to use. The itemFilter name
     *  must have a corresponding value. You can apply multiple itemFilter
     *  Name/Value pairs in a single request.
     *  <br><br>
     *  <b>Item Filter Names</b>:
     *  <br><br>
     *  <ul>
     *  <li>AvailableTo</li>
     *  <li>BestOfferOnly</li>
     *  <li>CharityOnly</li>
     *  <li>Condition</li>
     *  <li>Currency</li>
     *  <li>EndTimeFrom</li>
     *  <li>EndTimeTo</li>
     *  <li>ExcludeAutoPay</li>
     *  <li>ExcludeCategory</li>
     *  <li>ExcludeSeller</li>
     *  <li>ExpeditedShippingType</li>
     *  <li>FeaturedOnly</li>
     *  <li>FeedbackScoreMax</li>
     *  <li>FeedbackScoreMin</li>
     *  <li>FreeShippingOnly</li>
     *  <li>GetItFastOnly</li>
     *  <li>HideDuplicateItems</li>
     *  <li>ListedIn</li>
     *  <li>ListingType</li>
     *  <li>LocalPickupOnly</li>
     *  <li>LocalSearchOnly</li>
     *  <li>LocatedIn</li>
     *  <li>LotsOnly</li>
     *  <li>MaxBids</li>
     *  <li>MaxDistance</li>
     *  <li>MaxHandlingTime</li>
     *  <li>MaxPrice</li>
     *  <li>MaxQuantity</li>
     *  <li>MinBids</li>
     *  <li>MinPrice</li>
     *  <li>MinQuantity</li>
     *  <li>ModTimeFrom</li>
     *  <li>PaymentMethod</li>
     *  <li>ReturnsAcceptedOnly</li>
     *  <li>Seller</li>
     *  <li>SellerBusinessType</li>
     *  <li>TopRatedSellerOnly</li>
     *  <li>ValueBoxInventory</li>
     *  <li>WorldOfGoodOnly</li>
     *  </ul>
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as value
     *
     * The value associated with the respective item filter name. Allowed values
     *  and datatypes vary for a given filter name.
     *
     * @return self
     * @param string $value
     */
    public function addToValue($value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * The value associated with the respective item filter name. Allowed values
     *  and datatypes vary for a given filter name.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * The value associated with the respective item filter name. Allowed values
     *  and datatypes vary for a given filter name.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * The value associated with the respective item filter name. Allowed values
     *  and datatypes vary for a given filter name.
     *
     * @return string[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value associated with the respective item filter name. Allowed values
     *  and datatypes vary for a given filter name.
     *
     * @param string[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getParamName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}paramName", $value);
        }
        $value = $this->getParamValue();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}paramValue", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}name", $value);
        }
        $value = $this->getValue();
        if (null !== $value && !empty($this->getValue())) {
            $writer->write(array_map(function ($v) {
                return ["value" => $v];
            }, $value));
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}paramName');
        if (null !== $value) {
            $this->setParamName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}paramValue');
        if (null !== $value) {
            $this->setParamValue($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}value', true);
        if (null !== $value && !empty($value)) {
            $this->setValue($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
        }
    }
}
