<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ListingRecommendationType
 *
 * Type defining the <b>Recommendation</b> container(s) that are
 *  conditionally returned in all Add/Revise/Relist/Verify API calls.
 *  Each <b>Recommendation</b> container provides a message to the seller on
 *  how a listing can be improved or brought up to standard in regards to top-rated seller/listing requirements, mandated or recommended Item Specifics, picture quality requirements, pricing and/or listing format recommendations, recommended keywords and/or Item Specifics in a Title, and/or a recommendation to use Fast 'N Free shipping.
 *  <br><br>
 *  One or more <b>Recommendation</b> containers can be returned for each
 *  listing.
 * XSD Type: ListingRecommendationType
 */
class ListingRecommendationType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This value indicates the specific type of listing recommendation being provided to
     *  the seller. Possible values include the following:
     *  <ul>
     *  <li>eTRS - this recommendation type advises the seller that the listing
     *  is not meeting a specific Top-Rated listing requirement, such as same-day or 1-day handling or a 14-day (or longer) Money Back Return Policy;</li>
     *  <li>ItemSpecifics - this recommendation type advises the seller that the
     *  listing is missing a required or recommended Item Specifics name/value pair;</li>
     *  <li>Picture - this recommendation type advises the seller that a specific
     *  picture in the listing is not meeting a specific picture qualityrequirement;</li>
     *  <li>Price - this recommendation type provides a recommended price and/or a recommended price range for auction and fixed-price listings. These price recommendation values are based on similar items that have recently sold on eBay. Along with pricing recommendations, a recommended listing format (auction vs. fixed-price) is also returned. This recommendation type is currently only supported on the US, UK, and DE sites; </li>
     *  <li>Title - this recommendation type provides guidance on forming an effective listing title, and will suggest valuable keywords or recommended Item Specifics that the listing title is missing. This recommendation type will also call out keywords that do not accurately describe the item. The keywords or Item Specifics are called out in the response. This recommendation type is currently only supported on the US, UK, DE, and AU sites; and</li>
     *  <li>FnF - this recommendation type advises the seller to offer expedited shipping for the item (same-day shipping or handling time of 1 day) and/or offer at least one free shipping service option.</li>
     *  </ul>
     *
     * @var string $type
     */
    private $type = null;

    /**
     * This value indicates the group that a specific listing recommendation belongs to.
     *  There may be multiple groups for each listing recommendation type. For example,
     *  two groups of the <b>eTRS</b> listing recommendation type are
     *  'SHIPPING' and 'RETURNS'.
     *
     * @var string $group
     */
    private $group = null;

    /**
     * The <b>FieldName</b> value will vary based on the recommendation type. The <b>FieldName</b> values for each recommendation type are summarized below:
     *  <br><br>
     *  For <b>eTRS</b> listing recommendations, the <b>FieldName</b> value will indicate the specific Trading API field that the seller needs to update to bring the listing up to top-rated listing standards. For example, if the <b>Recommendation.Type</b> value is 'eTRS' and the <b>Recommendation.Group</b> value is 'SHIPPING', the <b>FieldName</b> value may be 'DispatchTimeMax'. If the seller is returned a listing recommendation like this, it would most likely indicate that the seller must reduce the handling time (<b>DispatchTimeMax</b> value) in the listing to '0' (same-day shipping) or '1' (one-day handling time) in order for the listing to qualify as a top-rated listing and receive a Top Rated Plus seal in View Item and Search Results pages.
     *  <br><br>
     *  For an <b>ItemSpecifics</b> listing recommendation, the <b>FieldName</b> value will be the name of the recommended Item Specific. If the seller gets a <b>ItemSpecifics</b> listing recommendation, the seller will perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the recommended Item Specific (with one or more values) through the <b>ItemSpecifics.NameValueList</b> container. If available, eBay will also return recommended Item Specific value(s) through the <b>Recommendation.Value</b> field.
     *  <br><br>
     *  For a <b>Picture</b> listing recommendation, the <b>FieldName</b> value will be the URL of the image that needs to be brought up to picture quality standards. If the seller gets a <b>Picture</b> listing recommendation for this image in the listing, the seller will need to make the required picture quality update, and then perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the URL of the image through the <b>PictureURL</b> field in the <b>PictureDetails</b> container.
     *  <br><br>
     *  If the seller gets a <b>Picture</b> listing recommendation for this image in the listing, the seller will need to make the required picture quality update, and then perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the URL of the image through the <b>PictureURL</b> field in the <b>PictureDetails</b> container.
     *  <br><br>
     *  For a <b>Price</b> listing recommendation, the <b>FieldName</b> value will be one of the following:
     *  <ul>
     *  <li><b>BuyItNowPrice</b>: the recommended price for an item in a fixed-price listing or for the "Buy It Now" price in an auction listing; this value will be shown in the <b>Recommendation.Value</b> field. Upon getting a <b>BuyItNowPrice</b> recommendation, the seller may consider revising their listing with a price matching or closer to the recommended price.</li>
     *  <li><b>ListingType</b>: this value is returned if a different listing type (auction vs. fixed-price) is being suggested for the item. Upon getting a <b>ListingType</b> recommendation, the seller may consider the recommended listing type the next time they list a similar item.</li>
     *  <li><b>StartPrice</b>: the recommended starting bid price for an item in an auction listing; this value will be shown in the <b>Recommendation.Value</b> field. Upon getting a <b>StartPrice</b> recommendation, the seller may consider the recommended starting bid price the next time they list a similar item.</li>
     *  </ul>
     *  Two other pricing recommendations, <b>BuyItNowPriceRange</b> and <b>StartPriceRange</b>, are supported in the Listing Recommendation API, but are not yet supported by the Trading API.
     *  <br><br>
     *  For a <b>Title</b> listing recommendation, the <b>FieldName</b> value will be 'Title' for any of the three use cases - missing keywords, missing Item Specifics, or inaccurate keywords. Upon getting a <b>Title</b> recommendation, the seller may consider the <b>Title</b> recommendation (adding keywords, adding Item Specifics, removing inaccurate keywords) the next time they list a similar item.
     *  <br><br>
     *  For an <b>FnF</b> listing recommendation, either one or two <b>recommendation</b> containers will be returned, based on whether a listing needs fast handling (same-day handling or handling time of 1 day), at least one free shipping service, or both. These two <b>fieldName</b> values are described below:
     *  <ul>
     *  <li><strong>shipsWithinDays</strong>: this <strong>fieldName</strong> value is returned if the seller needs to implement fast handling (same-day handling or a handling time of 1 day). To implement fast handling, the seller will perform a <strong>ReviseItem</strong>/<strong>ReviseFixedPriceItem</strong> call, passing a value of '0' or '1' into the <strong>DispatchTimeMax</strong> field.</li>
     *  <li><strong>shippingServiceCost</strong>: this <strong>fieldName</strong> value is returned if the seller needs to offer a free shipping service option in the listing. To add a free shipping service option, the seller will perform a <strong>ReviseItem</strong>/<strong>ReviseFixedPriceItem</strong> call, passing in one or more <b>ShippingDetails.ShippingServiceOptions</b> containers where the shipping service is free (<b>ShippingServiceOptions.FreeShipping</b> boolean value set to 'true').</li>
     *  </ul>
     *  <br><br>
     *  This <b>FieldName</b> field is always returned with each <b>Recommendation</b> container.
     *
     * @var string $fieldName
     */
    private $fieldName = null;

    /**
     * This code value provides a generic, "human-friendly" message summarizing what is wrong with the listing, or how it can be improved. These values include:
     *  <ul>
     *  <li>FIELD_VALUE_INCORRECT</li>
     *  <li>FIELD_VALUE_RECOMMENDATION</li>
     *  <li>MANDATED_FIELD_VALUE_MISSING</li>
     *  <li>MANDATORY_STANDARDS_NOT_MET</li>
     *  <li>RECOMMENDED_FIELD_VALUE_MISSING</li>
     *  <li>RECOMMENDED_FIELD_VALUE_TO_REMOVE</li>
     *  <li>RECOMMENDED_STANDARDS_NOT_MET</li>
     *  </ul>
     *  This field is always returned with each <b>recommendation</b> container.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * The <b>Value</b> field is only applicable for <b>ItemSpecifics</b>, <b>Pricing</b>, and <b>Title</b> listing recommendation types, and it is only returned for these recommendation types.
     *  <br><br>
     *  For the <b>ItemSpecifics</b> recommendation type, the value in the <b>Value</b> field is a recommended value for the recommended Item Specific name found in the <b>Recommendation.FieldName</b> field. Each Item Specific name can have more than one recommended value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation. It is also possible that a recommended Item Specific name will have no recommended values, hence no <b>Recommendation.FieldName</b> values are returned.
     *  <br><br>
     *  For the <b>Pricing</b> recommendation type, the value in the <b>Value</b> field is either:
     *  <ul>
     *  <li>a recommended value for the starting bid price (if <b>Recommendation.FieldName</b> value is 'StartPrice');</li>
     *  <li>a recommended value for a fixed-price item (if <b>Recommendation.FieldName</b> value is 'BuyItNowPrice'); or</li>
     *  <li>a recommended value for the listing type (if <b>Recommendation.FieldName</b> value is 'ListingType'). </li>
     *  </ul>
     *  For the <b>Title</b> recommendation type, the value in the <b>value</b> field is either:
     *  <ul>
     *  <li>a recommended keyword to include in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_MISSING');</li>
     *  <li>a recommended keyword to remove (to maintain accuracy) in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_TO_REMOVE');</li>
     *  <li>a recommended Item Specific to include in the listing Title (if <b>Recommendation.Code</b> value is 'FIELD_VALUE_RECOMMENDATION');</li>
     *  </ul>
     *  Each <b>Title</b> recommendation can have more than one keyword or Item Specific value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation.
     *
     * @var string[] $value
     */
    private $value = [

    ];

    /**
     * This textual message is the detailed description of a specific action that a seller can take to improve the quality of the listing, or bring it up to Picture or eTRS standards. For some recommendations, the fields may be revised on an active listing through a <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> call of the Trading API. For other recommendations, it may not be possible to revise the fields on an active listing.
     *  <br><br>
     *  This field is returned in the <b>Recommendation</b> container when available/applicable.
     *
     * @var string $message
     */
    private $message = null;

    /**
     * This container contains price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items. This container is only returned for price recommendations and when the pricing data is available.
     *  <br><br>
     *  A <b>Metadata</b> container is returned for each price guidance parameter that is applicable/available for the pricing recommendation.
     *
     * @var \Nogrod\eBaySDK\Trading\MetadataType[] $metadata
     */
    private $metadata = [

    ];

    /**
     * Gets as type
     *
     * This value indicates the specific type of listing recommendation being provided to
     *  the seller. Possible values include the following:
     *  <ul>
     *  <li>eTRS - this recommendation type advises the seller that the listing
     *  is not meeting a specific Top-Rated listing requirement, such as same-day or 1-day handling or a 14-day (or longer) Money Back Return Policy;</li>
     *  <li>ItemSpecifics - this recommendation type advises the seller that the
     *  listing is missing a required or recommended Item Specifics name/value pair;</li>
     *  <li>Picture - this recommendation type advises the seller that a specific
     *  picture in the listing is not meeting a specific picture qualityrequirement;</li>
     *  <li>Price - this recommendation type provides a recommended price and/or a recommended price range for auction and fixed-price listings. These price recommendation values are based on similar items that have recently sold on eBay. Along with pricing recommendations, a recommended listing format (auction vs. fixed-price) is also returned. This recommendation type is currently only supported on the US, UK, and DE sites; </li>
     *  <li>Title - this recommendation type provides guidance on forming an effective listing title, and will suggest valuable keywords or recommended Item Specifics that the listing title is missing. This recommendation type will also call out keywords that do not accurately describe the item. The keywords or Item Specifics are called out in the response. This recommendation type is currently only supported on the US, UK, DE, and AU sites; and</li>
     *  <li>FnF - this recommendation type advises the seller to offer expedited shipping for the item (same-day shipping or handling time of 1 day) and/or offer at least one free shipping service option.</li>
     *  </ul>
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * This value indicates the specific type of listing recommendation being provided to
     *  the seller. Possible values include the following:
     *  <ul>
     *  <li>eTRS - this recommendation type advises the seller that the listing
     *  is not meeting a specific Top-Rated listing requirement, such as same-day or 1-day handling or a 14-day (or longer) Money Back Return Policy;</li>
     *  <li>ItemSpecifics - this recommendation type advises the seller that the
     *  listing is missing a required or recommended Item Specifics name/value pair;</li>
     *  <li>Picture - this recommendation type advises the seller that a specific
     *  picture in the listing is not meeting a specific picture qualityrequirement;</li>
     *  <li>Price - this recommendation type provides a recommended price and/or a recommended price range for auction and fixed-price listings. These price recommendation values are based on similar items that have recently sold on eBay. Along with pricing recommendations, a recommended listing format (auction vs. fixed-price) is also returned. This recommendation type is currently only supported on the US, UK, and DE sites; </li>
     *  <li>Title - this recommendation type provides guidance on forming an effective listing title, and will suggest valuable keywords or recommended Item Specifics that the listing title is missing. This recommendation type will also call out keywords that do not accurately describe the item. The keywords or Item Specifics are called out in the response. This recommendation type is currently only supported on the US, UK, DE, and AU sites; and</li>
     *  <li>FnF - this recommendation type advises the seller to offer expedited shipping for the item (same-day shipping or handling time of 1 day) and/or offer at least one free shipping service option.</li>
     *  </ul>
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as group
     *
     * This value indicates the group that a specific listing recommendation belongs to.
     *  There may be multiple groups for each listing recommendation type. For example,
     *  two groups of the <b>eTRS</b> listing recommendation type are
     *  'SHIPPING' and 'RETURNS'.
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * This value indicates the group that a specific listing recommendation belongs to.
     *  There may be multiple groups for each listing recommendation type. For example,
     *  two groups of the <b>eTRS</b> listing recommendation type are
     *  'SHIPPING' and 'RETURNS'.
     *
     * @param string $group
     * @return self
     */
    public function setGroup($group)
    {
        $this->group = $group;
        return $this;
    }

    /**
     * Gets as fieldName
     *
     * The <b>FieldName</b> value will vary based on the recommendation type. The <b>FieldName</b> values for each recommendation type are summarized below:
     *  <br><br>
     *  For <b>eTRS</b> listing recommendations, the <b>FieldName</b> value will indicate the specific Trading API field that the seller needs to update to bring the listing up to top-rated listing standards. For example, if the <b>Recommendation.Type</b> value is 'eTRS' and the <b>Recommendation.Group</b> value is 'SHIPPING', the <b>FieldName</b> value may be 'DispatchTimeMax'. If the seller is returned a listing recommendation like this, it would most likely indicate that the seller must reduce the handling time (<b>DispatchTimeMax</b> value) in the listing to '0' (same-day shipping) or '1' (one-day handling time) in order for the listing to qualify as a top-rated listing and receive a Top Rated Plus seal in View Item and Search Results pages.
     *  <br><br>
     *  For an <b>ItemSpecifics</b> listing recommendation, the <b>FieldName</b> value will be the name of the recommended Item Specific. If the seller gets a <b>ItemSpecifics</b> listing recommendation, the seller will perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the recommended Item Specific (with one or more values) through the <b>ItemSpecifics.NameValueList</b> container. If available, eBay will also return recommended Item Specific value(s) through the <b>Recommendation.Value</b> field.
     *  <br><br>
     *  For a <b>Picture</b> listing recommendation, the <b>FieldName</b> value will be the URL of the image that needs to be brought up to picture quality standards. If the seller gets a <b>Picture</b> listing recommendation for this image in the listing, the seller will need to make the required picture quality update, and then perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the URL of the image through the <b>PictureURL</b> field in the <b>PictureDetails</b> container.
     *  <br><br>
     *  If the seller gets a <b>Picture</b> listing recommendation for this image in the listing, the seller will need to make the required picture quality update, and then perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the URL of the image through the <b>PictureURL</b> field in the <b>PictureDetails</b> container.
     *  <br><br>
     *  For a <b>Price</b> listing recommendation, the <b>FieldName</b> value will be one of the following:
     *  <ul>
     *  <li><b>BuyItNowPrice</b>: the recommended price for an item in a fixed-price listing or for the "Buy It Now" price in an auction listing; this value will be shown in the <b>Recommendation.Value</b> field. Upon getting a <b>BuyItNowPrice</b> recommendation, the seller may consider revising their listing with a price matching or closer to the recommended price.</li>
     *  <li><b>ListingType</b>: this value is returned if a different listing type (auction vs. fixed-price) is being suggested for the item. Upon getting a <b>ListingType</b> recommendation, the seller may consider the recommended listing type the next time they list a similar item.</li>
     *  <li><b>StartPrice</b>: the recommended starting bid price for an item in an auction listing; this value will be shown in the <b>Recommendation.Value</b> field. Upon getting a <b>StartPrice</b> recommendation, the seller may consider the recommended starting bid price the next time they list a similar item.</li>
     *  </ul>
     *  Two other pricing recommendations, <b>BuyItNowPriceRange</b> and <b>StartPriceRange</b>, are supported in the Listing Recommendation API, but are not yet supported by the Trading API.
     *  <br><br>
     *  For a <b>Title</b> listing recommendation, the <b>FieldName</b> value will be 'Title' for any of the three use cases - missing keywords, missing Item Specifics, or inaccurate keywords. Upon getting a <b>Title</b> recommendation, the seller may consider the <b>Title</b> recommendation (adding keywords, adding Item Specifics, removing inaccurate keywords) the next time they list a similar item.
     *  <br><br>
     *  For an <b>FnF</b> listing recommendation, either one or two <b>recommendation</b> containers will be returned, based on whether a listing needs fast handling (same-day handling or handling time of 1 day), at least one free shipping service, or both. These two <b>fieldName</b> values are described below:
     *  <ul>
     *  <li><strong>shipsWithinDays</strong>: this <strong>fieldName</strong> value is returned if the seller needs to implement fast handling (same-day handling or a handling time of 1 day). To implement fast handling, the seller will perform a <strong>ReviseItem</strong>/<strong>ReviseFixedPriceItem</strong> call, passing a value of '0' or '1' into the <strong>DispatchTimeMax</strong> field.</li>
     *  <li><strong>shippingServiceCost</strong>: this <strong>fieldName</strong> value is returned if the seller needs to offer a free shipping service option in the listing. To add a free shipping service option, the seller will perform a <strong>ReviseItem</strong>/<strong>ReviseFixedPriceItem</strong> call, passing in one or more <b>ShippingDetails.ShippingServiceOptions</b> containers where the shipping service is free (<b>ShippingServiceOptions.FreeShipping</b> boolean value set to 'true').</li>
     *  </ul>
     *  <br><br>
     *  This <b>FieldName</b> field is always returned with each <b>Recommendation</b> container.
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Sets a new fieldName
     *
     * The <b>FieldName</b> value will vary based on the recommendation type. The <b>FieldName</b> values for each recommendation type are summarized below:
     *  <br><br>
     *  For <b>eTRS</b> listing recommendations, the <b>FieldName</b> value will indicate the specific Trading API field that the seller needs to update to bring the listing up to top-rated listing standards. For example, if the <b>Recommendation.Type</b> value is 'eTRS' and the <b>Recommendation.Group</b> value is 'SHIPPING', the <b>FieldName</b> value may be 'DispatchTimeMax'. If the seller is returned a listing recommendation like this, it would most likely indicate that the seller must reduce the handling time (<b>DispatchTimeMax</b> value) in the listing to '0' (same-day shipping) or '1' (one-day handling time) in order for the listing to qualify as a top-rated listing and receive a Top Rated Plus seal in View Item and Search Results pages.
     *  <br><br>
     *  For an <b>ItemSpecifics</b> listing recommendation, the <b>FieldName</b> value will be the name of the recommended Item Specific. If the seller gets a <b>ItemSpecifics</b> listing recommendation, the seller will perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the recommended Item Specific (with one or more values) through the <b>ItemSpecifics.NameValueList</b> container. If available, eBay will also return recommended Item Specific value(s) through the <b>Recommendation.Value</b> field.
     *  <br><br>
     *  For a <b>Picture</b> listing recommendation, the <b>FieldName</b> value will be the URL of the image that needs to be brought up to picture quality standards. If the seller gets a <b>Picture</b> listing recommendation for this image in the listing, the seller will need to make the required picture quality update, and then perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the URL of the image through the <b>PictureURL</b> field in the <b>PictureDetails</b> container.
     *  <br><br>
     *  If the seller gets a <b>Picture</b> listing recommendation for this image in the listing, the seller will need to make the required picture quality update, and then perform a <b>ReviseItem</b>/<b>ReviseFixedPriceItem</b> call, passing in the URL of the image through the <b>PictureURL</b> field in the <b>PictureDetails</b> container.
     *  <br><br>
     *  For a <b>Price</b> listing recommendation, the <b>FieldName</b> value will be one of the following:
     *  <ul>
     *  <li><b>BuyItNowPrice</b>: the recommended price for an item in a fixed-price listing or for the "Buy It Now" price in an auction listing; this value will be shown in the <b>Recommendation.Value</b> field. Upon getting a <b>BuyItNowPrice</b> recommendation, the seller may consider revising their listing with a price matching or closer to the recommended price.</li>
     *  <li><b>ListingType</b>: this value is returned if a different listing type (auction vs. fixed-price) is being suggested for the item. Upon getting a <b>ListingType</b> recommendation, the seller may consider the recommended listing type the next time they list a similar item.</li>
     *  <li><b>StartPrice</b>: the recommended starting bid price for an item in an auction listing; this value will be shown in the <b>Recommendation.Value</b> field. Upon getting a <b>StartPrice</b> recommendation, the seller may consider the recommended starting bid price the next time they list a similar item.</li>
     *  </ul>
     *  Two other pricing recommendations, <b>BuyItNowPriceRange</b> and <b>StartPriceRange</b>, are supported in the Listing Recommendation API, but are not yet supported by the Trading API.
     *  <br><br>
     *  For a <b>Title</b> listing recommendation, the <b>FieldName</b> value will be 'Title' for any of the three use cases - missing keywords, missing Item Specifics, or inaccurate keywords. Upon getting a <b>Title</b> recommendation, the seller may consider the <b>Title</b> recommendation (adding keywords, adding Item Specifics, removing inaccurate keywords) the next time they list a similar item.
     *  <br><br>
     *  For an <b>FnF</b> listing recommendation, either one or two <b>recommendation</b> containers will be returned, based on whether a listing needs fast handling (same-day handling or handling time of 1 day), at least one free shipping service, or both. These two <b>fieldName</b> values are described below:
     *  <ul>
     *  <li><strong>shipsWithinDays</strong>: this <strong>fieldName</strong> value is returned if the seller needs to implement fast handling (same-day handling or a handling time of 1 day). To implement fast handling, the seller will perform a <strong>ReviseItem</strong>/<strong>ReviseFixedPriceItem</strong> call, passing a value of '0' or '1' into the <strong>DispatchTimeMax</strong> field.</li>
     *  <li><strong>shippingServiceCost</strong>: this <strong>fieldName</strong> value is returned if the seller needs to offer a free shipping service option in the listing. To add a free shipping service option, the seller will perform a <strong>ReviseItem</strong>/<strong>ReviseFixedPriceItem</strong> call, passing in one or more <b>ShippingDetails.ShippingServiceOptions</b> containers where the shipping service is free (<b>ShippingServiceOptions.FreeShipping</b> boolean value set to 'true').</li>
     *  </ul>
     *  <br><br>
     *  This <b>FieldName</b> field is always returned with each <b>Recommendation</b> container.
     *
     * @param string $fieldName
     * @return self
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * Gets as code
     *
     * This code value provides a generic, "human-friendly" message summarizing what is wrong with the listing, or how it can be improved. These values include:
     *  <ul>
     *  <li>FIELD_VALUE_INCORRECT</li>
     *  <li>FIELD_VALUE_RECOMMENDATION</li>
     *  <li>MANDATED_FIELD_VALUE_MISSING</li>
     *  <li>MANDATORY_STANDARDS_NOT_MET</li>
     *  <li>RECOMMENDED_FIELD_VALUE_MISSING</li>
     *  <li>RECOMMENDED_FIELD_VALUE_TO_REMOVE</li>
     *  <li>RECOMMENDED_STANDARDS_NOT_MET</li>
     *  </ul>
     *  This field is always returned with each <b>recommendation</b> container.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * This code value provides a generic, "human-friendly" message summarizing what is wrong with the listing, or how it can be improved. These values include:
     *  <ul>
     *  <li>FIELD_VALUE_INCORRECT</li>
     *  <li>FIELD_VALUE_RECOMMENDATION</li>
     *  <li>MANDATED_FIELD_VALUE_MISSING</li>
     *  <li>MANDATORY_STANDARDS_NOT_MET</li>
     *  <li>RECOMMENDED_FIELD_VALUE_MISSING</li>
     *  <li>RECOMMENDED_FIELD_VALUE_TO_REMOVE</li>
     *  <li>RECOMMENDED_STANDARDS_NOT_MET</li>
     *  </ul>
     *  This field is always returned with each <b>recommendation</b> container.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Adds as value
     *
     * The <b>Value</b> field is only applicable for <b>ItemSpecifics</b>, <b>Pricing</b>, and <b>Title</b> listing recommendation types, and it is only returned for these recommendation types.
     *  <br><br>
     *  For the <b>ItemSpecifics</b> recommendation type, the value in the <b>Value</b> field is a recommended value for the recommended Item Specific name found in the <b>Recommendation.FieldName</b> field. Each Item Specific name can have more than one recommended value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation. It is also possible that a recommended Item Specific name will have no recommended values, hence no <b>Recommendation.FieldName</b> values are returned.
     *  <br><br>
     *  For the <b>Pricing</b> recommendation type, the value in the <b>Value</b> field is either:
     *  <ul>
     *  <li>a recommended value for the starting bid price (if <b>Recommendation.FieldName</b> value is 'StartPrice');</li>
     *  <li>a recommended value for a fixed-price item (if <b>Recommendation.FieldName</b> value is 'BuyItNowPrice'); or</li>
     *  <li>a recommended value for the listing type (if <b>Recommendation.FieldName</b> value is 'ListingType'). </li>
     *  </ul>
     *  For the <b>Title</b> recommendation type, the value in the <b>value</b> field is either:
     *  <ul>
     *  <li>a recommended keyword to include in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_MISSING');</li>
     *  <li>a recommended keyword to remove (to maintain accuracy) in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_TO_REMOVE');</li>
     *  <li>a recommended Item Specific to include in the listing Title (if <b>Recommendation.Code</b> value is 'FIELD_VALUE_RECOMMENDATION');</li>
     *  </ul>
     *  Each <b>Title</b> recommendation can have more than one keyword or Item Specific value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation.
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
     * The <b>Value</b> field is only applicable for <b>ItemSpecifics</b>, <b>Pricing</b>, and <b>Title</b> listing recommendation types, and it is only returned for these recommendation types.
     *  <br><br>
     *  For the <b>ItemSpecifics</b> recommendation type, the value in the <b>Value</b> field is a recommended value for the recommended Item Specific name found in the <b>Recommendation.FieldName</b> field. Each Item Specific name can have more than one recommended value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation. It is also possible that a recommended Item Specific name will have no recommended values, hence no <b>Recommendation.FieldName</b> values are returned.
     *  <br><br>
     *  For the <b>Pricing</b> recommendation type, the value in the <b>Value</b> field is either:
     *  <ul>
     *  <li>a recommended value for the starting bid price (if <b>Recommendation.FieldName</b> value is 'StartPrice');</li>
     *  <li>a recommended value for a fixed-price item (if <b>Recommendation.FieldName</b> value is 'BuyItNowPrice'); or</li>
     *  <li>a recommended value for the listing type (if <b>Recommendation.FieldName</b> value is 'ListingType'). </li>
     *  </ul>
     *  For the <b>Title</b> recommendation type, the value in the <b>value</b> field is either:
     *  <ul>
     *  <li>a recommended keyword to include in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_MISSING');</li>
     *  <li>a recommended keyword to remove (to maintain accuracy) in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_TO_REMOVE');</li>
     *  <li>a recommended Item Specific to include in the listing Title (if <b>Recommendation.Code</b> value is 'FIELD_VALUE_RECOMMENDATION');</li>
     *  </ul>
     *  Each <b>Title</b> recommendation can have more than one keyword or Item Specific value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation.
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
     * The <b>Value</b> field is only applicable for <b>ItemSpecifics</b>, <b>Pricing</b>, and <b>Title</b> listing recommendation types, and it is only returned for these recommendation types.
     *  <br><br>
     *  For the <b>ItemSpecifics</b> recommendation type, the value in the <b>Value</b> field is a recommended value for the recommended Item Specific name found in the <b>Recommendation.FieldName</b> field. Each Item Specific name can have more than one recommended value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation. It is also possible that a recommended Item Specific name will have no recommended values, hence no <b>Recommendation.FieldName</b> values are returned.
     *  <br><br>
     *  For the <b>Pricing</b> recommendation type, the value in the <b>Value</b> field is either:
     *  <ul>
     *  <li>a recommended value for the starting bid price (if <b>Recommendation.FieldName</b> value is 'StartPrice');</li>
     *  <li>a recommended value for a fixed-price item (if <b>Recommendation.FieldName</b> value is 'BuyItNowPrice'); or</li>
     *  <li>a recommended value for the listing type (if <b>Recommendation.FieldName</b> value is 'ListingType'). </li>
     *  </ul>
     *  For the <b>Title</b> recommendation type, the value in the <b>value</b> field is either:
     *  <ul>
     *  <li>a recommended keyword to include in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_MISSING');</li>
     *  <li>a recommended keyword to remove (to maintain accuracy) in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_TO_REMOVE');</li>
     *  <li>a recommended Item Specific to include in the listing Title (if <b>Recommendation.Code</b> value is 'FIELD_VALUE_RECOMMENDATION');</li>
     *  </ul>
     *  Each <b>Title</b> recommendation can have more than one keyword or Item Specific value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation.
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
     * The <b>Value</b> field is only applicable for <b>ItemSpecifics</b>, <b>Pricing</b>, and <b>Title</b> listing recommendation types, and it is only returned for these recommendation types.
     *  <br><br>
     *  For the <b>ItemSpecifics</b> recommendation type, the value in the <b>Value</b> field is a recommended value for the recommended Item Specific name found in the <b>Recommendation.FieldName</b> field. Each Item Specific name can have more than one recommended value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation. It is also possible that a recommended Item Specific name will have no recommended values, hence no <b>Recommendation.FieldName</b> values are returned.
     *  <br><br>
     *  For the <b>Pricing</b> recommendation type, the value in the <b>Value</b> field is either:
     *  <ul>
     *  <li>a recommended value for the starting bid price (if <b>Recommendation.FieldName</b> value is 'StartPrice');</li>
     *  <li>a recommended value for a fixed-price item (if <b>Recommendation.FieldName</b> value is 'BuyItNowPrice'); or</li>
     *  <li>a recommended value for the listing type (if <b>Recommendation.FieldName</b> value is 'ListingType'). </li>
     *  </ul>
     *  For the <b>Title</b> recommendation type, the value in the <b>value</b> field is either:
     *  <ul>
     *  <li>a recommended keyword to include in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_MISSING');</li>
     *  <li>a recommended keyword to remove (to maintain accuracy) in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_TO_REMOVE');</li>
     *  <li>a recommended Item Specific to include in the listing Title (if <b>Recommendation.Code</b> value is 'FIELD_VALUE_RECOMMENDATION');</li>
     *  </ul>
     *  Each <b>Title</b> recommendation can have more than one keyword or Item Specific value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation.
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
     * The <b>Value</b> field is only applicable for <b>ItemSpecifics</b>, <b>Pricing</b>, and <b>Title</b> listing recommendation types, and it is only returned for these recommendation types.
     *  <br><br>
     *  For the <b>ItemSpecifics</b> recommendation type, the value in the <b>Value</b> field is a recommended value for the recommended Item Specific name found in the <b>Recommendation.FieldName</b> field. Each Item Specific name can have more than one recommended value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation. It is also possible that a recommended Item Specific name will have no recommended values, hence no <b>Recommendation.FieldName</b> values are returned.
     *  <br><br>
     *  For the <b>Pricing</b> recommendation type, the value in the <b>Value</b> field is either:
     *  <ul>
     *  <li>a recommended value for the starting bid price (if <b>Recommendation.FieldName</b> value is 'StartPrice');</li>
     *  <li>a recommended value for a fixed-price item (if <b>Recommendation.FieldName</b> value is 'BuyItNowPrice'); or</li>
     *  <li>a recommended value for the listing type (if <b>Recommendation.FieldName</b> value is 'ListingType'). </li>
     *  </ul>
     *  For the <b>Title</b> recommendation type, the value in the <b>value</b> field is either:
     *  <ul>
     *  <li>a recommended keyword to include in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_MISSING');</li>
     *  <li>a recommended keyword to remove (to maintain accuracy) in the listing Title (if <b>Recommendation.Code</b> value is 'RECOMMENDED_FIELD_VALUE_TO_REMOVE');</li>
     *  <li>a recommended Item Specific to include in the listing Title (if <b>Recommendation.Code</b> value is 'FIELD_VALUE_RECOMMENDATION');</li>
     *  </ul>
     *  Each <b>Title</b> recommendation can have more than one keyword or Item Specific value, so it is possible to have multiple <b>Recommendation.Value</b> fields for that recommendation.
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
     * Gets as message
     *
     * This textual message is the detailed description of a specific action that a seller can take to improve the quality of the listing, or bring it up to Picture or eTRS standards. For some recommendations, the fields may be revised on an active listing through a <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> call of the Trading API. For other recommendations, it may not be possible to revise the fields on an active listing.
     *  <br><br>
     *  This field is returned in the <b>Recommendation</b> container when available/applicable.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * This textual message is the detailed description of a specific action that a seller can take to improve the quality of the listing, or bring it up to Picture or eTRS standards. For some recommendations, the fields may be revised on an active listing through a <b>ReviseItem</b> or <b>ReviseFixedPriceItem</b> call of the Trading API. For other recommendations, it may not be possible to revise the fields on an active listing.
     *  <br><br>
     *  This field is returned in the <b>Recommendation</b> container when available/applicable.
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Adds as metadata
     *
     * This container contains price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items. This container is only returned for price recommendations and when the pricing data is available.
     *  <br><br>
     *  A <b>Metadata</b> container is returned for each price guidance parameter that is applicable/available for the pricing recommendation.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\MetadataType $metadata
     */
    public function addToMetadata(\Nogrod\eBaySDK\Trading\MetadataType $metadata)
    {
        $this->metadata[] = $metadata;
        return $this;
    }

    /**
     * isset metadata
     *
     * This container contains price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items. This container is only returned for price recommendations and when the pricing data is available.
     *  <br><br>
     *  A <b>Metadata</b> container is returned for each price guidance parameter that is applicable/available for the pricing recommendation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMetadata($index)
    {
        return isset($this->metadata[$index]);
    }

    /**
     * unset metadata
     *
     * This container contains price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items. This container is only returned for price recommendations and when the pricing data is available.
     *  <br><br>
     *  A <b>Metadata</b> container is returned for each price guidance parameter that is applicable/available for the pricing recommendation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMetadata($index)
    {
        unset($this->metadata[$index]);
    }

    /**
     * Gets as metadata
     *
     * This container contains price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items. This container is only returned for price recommendations and when the pricing data is available.
     *  <br><br>
     *  A <b>Metadata</b> container is returned for each price guidance parameter that is applicable/available for the pricing recommendation.
     *
     * @return \Nogrod\eBaySDK\Trading\MetadataType[]
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Sets a new metadata
     *
     * This container contains price guidance information, which includes the minimum and maximum recommended prices for the item, which are based on recent sales of similar items. This container is only returned for price recommendations and when the pricing data is available.
     *  <br><br>
     *  A <b>Metadata</b> container is returned for each price guidance parameter that is applicable/available for the pricing recommendation.
     *
     * @param \Nogrod\eBaySDK\Trading\MetadataType[] $metadata
     * @return self
     */
    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Type", $value);
        }
        $value = $this->getGroup();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Group", $value);
        }
        $value = $this->getFieldName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FieldName", $value);
        }
        $value = $this->getCode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Code", $value);
        }
        $value = $this->getValue();
        if (null !== $value && !empty($this->getValue())) {
            $writer->write(array_map(function ($v) {
                return ["Value" => $v];
            }, $value));
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Message", $value);
        }
        $value = $this->getMetadata();
        if (null !== $value && !empty($this->getMetadata())) {
            $writer->write(array_map(function ($v) {
                return ["Metadata" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Type');
        if (null !== $value) {
            $this->setType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Group');
        if (null !== $value) {
            $this->setGroup($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FieldName');
        if (null !== $value) {
            $this->setFieldName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Code');
        if (null !== $value) {
            $this->setCode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Value', true);
        if (null !== $value && !empty($value)) {
            $this->setValue($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Message');
        if (null !== $value) {
            $this->setMessage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Metadata', true);
        if (null !== $value && !empty($value)) {
            $this->setMetadata(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\MetadataType::fromKeyValue($v);
            }, $value));
        }
    }
}
