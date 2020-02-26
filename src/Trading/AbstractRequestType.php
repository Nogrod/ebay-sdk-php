<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing AbstractRequestType
 *
 * Base type definition of the request payload, which can carry any type of payload
 *  content plus optional versioning information and detail level requirements. All
 *  concrete request types (e.g., AddItemRequestType) are derived from the abstract
 *  request type. The naming convention we use for the concrete type names is the name
 *  of the service (the verb or call name) followed by "RequestType":
 *  VerbNameRequestType
 * XSD Type: AbstractRequestType
 */
class AbstractRequestType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Detail levels are instructions that define standard subsets of
     *  data to return for particular data components (e.g., each
     *  Item, Transaction, or User) within the response payload.
     *  For example, a particular detail level might cause the
     *  response to include buyer-related data in every result
     *  (e.g., for every Item), but no seller-related data.
     *  <br/><br/>
     *  Specifying a detail level is like using a
     *  predefined attribute list in the SELECT clause of an SQL query.
     *  Use the <b>DetailLevel</b> element to specify the required detail level
     *  that the client application needs pertaining to the data components
     *  that are applicable to the request.
     *  <br><br>
     *  The <b>DetailLevelCodeType</b> defines the
     *  global list of available detail levels for all request types.
     *  Most request types support certain detail
     *  levels or none at all. If you pass a detail level that exists
     *  in the schema but that isn't valid for a particular request,
     *  eBay ignores it and processes the request without it.
     *  <br/><br/>
     *  For each request type, see the detail level tables in the
     *  Input/Output Reference to determine which detail levels are
     *  applicable and which elements are returned for each applicable
     *  detail level.
     *  <br><br>Note that <b>DetailLevel</b> is required input for
     *  <b>GetMyMessages</b>. <br>
     *  <br>
     *  With <b>GetSellerList</b> and other calls that retrieve large data sets,
     *  please avoid using <b>ReturnAll</b> when possible. For example, if you use
     *  <b>GetSellerList</b>, use <b>GranularityLevel</b> instead, or use <b>GetSellerEvents</b>. If you do use 'ReturnAll' with
     *  <b>GetSellerList</b>, use a small <b>Pagination.EntriesPerPage</b> value and a narrow
     *  <b>EndTimeFrom</b>/<b>EndTimeTo</b> date range for better performance.
     *
     * @var string[] $detailLevel
     */
    private $detailLevel = [
        
    ];

    /**
     * Use <b>ErrorLanguage</b> to return error strings for the call in a different language
     *  from the language commonly associated with the site that the requesting user
     *  is registered with. Below are some examples from different countries.
     *  <br><br>
     *  <table border="0">
     *  <tr>
     *  <th>ID</th>
     *  <th>Country</th>
     *  </tr>
     *  <tr>
     *  <td>en_AU</td>
     *  <td>Australia</td>
     *  </tr>
     *  <tr>
     *  <td>de_AT</td>
     *  <td>Austria</td>
     *  </tr>
     *  <tr>
     *  <td>nl_BE</td>
     *  <td>Belgium (Dutch)</td>
     *  </tr>
     *  <tr>
     *  <td>fr_BE</td>
     *  <td>Belgium (French)</td>
     *  </tr>
     *  <tr>
     *  <td>en_CA</td>
     *  <td>Canada</td>
     *  </tr>
     *  <tr>
     *  <td>fr_CA</td>
     *  <td>Canada (French)</td>
     *  </tr>
     *  <tr>
     *  <td>zh_CN</td>
     *  <td>China</td>
     *  </tr>
     *  <tr>
     *  <td>fr_FR</td>
     *  <td>France</td>
     *  </tr>
     *  <tr>
     *  <td>de_DE</td>
     *  <td>Germany</td>
     *  </tr>
     *  <tr>
     *  <td>zh_HK</td>
     *  <td>Hong Kong</td>
     *  </tr>
     *  <tr>
     *  <td>en_IN</td>
     *  <td>India</td>
     *  </tr>
     *  <tr>
     *  <td>en_IE</td>
     *  <td>Ireland</td>
     *  </tr>
     *  <tr>
     *  <td>it_IT</td>
     *  <td>Italy</td>
     *  </tr>
     *  <tr>
     *  <td>nl_NL</td>
     *  <td>Netherlands</td>
     *  </tr>
     *  <tr>
     *  <td>en_SG</td>
     *  <td>Singapore</td>
     *  </tr>
     *  <tr>
     *  <td>es_ES</td>
     *  <td>Spain</td>
     *  </tr>
     *  <tr>
     *  <td>de_CH</td>
     *  <td>Switzerland</td>
     *  </tr>
     *  <tr>
     *  <td>en_GB</td>
     *  <td>United Kingdom</td>
     *  </tr>
     *  <tr>
     *  <td>en_US</td>
     *  <td> United States</td>
     *  </tr>
     *  </table>
     *
     * @var string $errorLanguage
     */
    private $errorLanguage = null;

    /**
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. If you pass in a
     *  <b>MessageID</b> in a request, the same value will be returned in the
     *  <b>CorrelationID</b> field in the response. Pairing these values can
     *  help you track and confirm that a response is returned for every request and to
     *  match specific responses to specific requests.
     *  If you do not pass a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetCategories</b> is designed to retrieve very large sets of metadata
     *  that change once a day or less often. To improve performance, these calls return
     *  cached responses when you request all available data (with no filters). When this
     *  occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields
     *  aren't applicable. However, if you specify an input filter to reduce the amount of
     *  data returned, the calls retrieve the latest data (not cached). When this occurs,
     *  <b>MessageID</b> and <b>CorrelationID</b> are applicable.
     *  </span>
     *
     * @var string $messageID
     */
    private $messageID = null;

    /**
     * The version number of the API code that you are
     *  programming against (e.g., 859).
     *  The version you specify for a call has these basic effects:
     *  <b></b>
     *  <ul>
     *  <li>It indicates the version of the code lists and other
     *  data that eBay should use to process your request.</li>
     *  <li>It indicates the schema version you are using.</li>
     *  </ul>
     *  You need to use a version that is greater than or equal to the
     *  lowest supported version.
     *  <br>
     *  <b>For the SOAP API:</b> If you are using the SOAP API,
     *  this field is required. Specify the version of the WSDL your
     *  application is using.<br>
     *  <br>
     *  <b>For the XML API:</b> If you are using the XML API,
     *  this field has no effect. Instead, specify the version in the
     *  <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header.
     *  (If you specify <b>Version</b> in the body of an XML API request and it
     *  is different from the value in the HTTP header, eBay returns an
     *  informational warning that the value in the HTTP header was used
     *  instead.)
     *
     * @var string $version
     */
    private $version = null;

    /**
     * The public IP address of the machine from which the request is sent.
     *  Your application captures that IP address and includes it in
     *  a call request. eBay evaluates requests for safety (also see
     *  the <b>BotBlock</b> container
     *  in the request and response of this call).
     *
     * @var string $endUserIP
     */
    private $endUserIP = null;

    /**
     * Error tolerance level for the call. This is a preference
     *  that specifies how eBay should handle requests that contain
     *  invalid data or that could partially fail. This gives you some control
     *  over whether eBay returns warnings or blocking errors
     *  and how eBay processes the invalid data.<br>
     *  <br>
     *  This field is only applicable to <b>AddItem</b> and related calls,
     *  and only when the listing includes <b>ProductListingDetails</b>.
     *
     * @var string $errorHandling
     */
    private $errorHandling = null;

    /**
     * A unique identifier for a particular call. If the same <b>InvocationID</b> is passed
     *  in after it has been passed in once on a call that succeeded for a particular
     *  application and user, then an error will be returned. The identifier can
     *  only contain digits from 0-9 and letters from A-F. The
     *  identifier must be 32 characters long. For example,
     *  1FB02B2-9D27-3acb-ABA2-9D539C374228.
     *
     * @var string $invocationID
     */
    private $invocationID = null;

    /**
     * You can use the <b>OutputSelector</b> field to restrict the data returned by a call. This field can make the call response easier to manage, especially when a large payload is returned. If you use the <b>OutputSelector</b> field, the output data will only include the field(s) you specified in the request, as well as all of its child fields (if a field is a container) and its parent fields (if any). Note that it is possible that a field included through an <b>OutputSelector</b> field may still not be returned if it is not applicable, or if it is not found based on other criteria set up in the request payload.
     *  <br>
     *  <br>
     *  For example, if you are using <b>GetItem</b> and you only want to retrieve the URL of the View Item page (emitted in <b>ViewItemURL</b> field) and the item's Buy It Now price (emitted in <b>BuyItNowPrice</b> field), you would include two separate <b>OutputSelector</b> fields and set the value for each one as <b>ViewItemURL</b> and <b>BuyItNowPrice</b> as in the following example:
     *  <br>
     *  <br>
     *  <pre>
     *  <b>If the following output selectors are used:</b>
     *  <br><br>...<br>
     *  <code>&lt;OutputSelector&gt;ViewItemURL&lt;/OutputSelector&gt;<br>
     *  &lt;OutputSelector&gt;BuyItNowPrice&lt;/OutputSelector&gt;
     *  </code><br>...
     *  <br><br>
     *  <b>...the response might look like the following</b>
     *  <br><br>
     *  <code>
     *  &lt;Item&gt;<br>
     *  &lt;BuyItNowPrice currencyID="USD"&gt;0.0&lt;/BuyItNowPrice&gt;<br>
     *  &lt;ListingDetails&gt;<br>
     *  &lt;ViewItemURL&gt;http://www.ebay.com/itm/Tag-Heuer-Mens-Watch/182879833261&lt;/ViewItemURL&gt;<br>
     *  &lt;/ListingDetails&gt;<br>
     *  &lt;/Item&gt;
     *  </code>
     *  </pre>
     *
     * @var string[] $outputSelector
     */
    private $outputSelector = [
        
    ];

    /**
     * Controls whether or not to return warnings when the application passes
     *  unrecognized or deprecated elements in a request.<br>
     *  <br>
     *  An unrecognized element is one that is not defined in any supported
     *  version of the schema. Schema element names are case-sensitive,
     *  so using <b>WarningLevel</b> can also help you remove any potential hidden
     *  bugs within your application due to incorrect case or spelling in
     *  field names before you put your application into the
     *  Production environment.<br>
     *  <br>
     *  <b>WarningLevel</b> only validates elements; it doesn't validate
     *  XML attributes. It also doesn't control warnings related to
     *  user-entered strings or numbers, or warnings for
     *  logical errors.<br>
     *  <br>
     *  We recommend that you only use this during development and debugging.
     *  Do not use this in requests performed in the Production environment.
     *
     * @var string $warningLevel
     */
    private $warningLevel = null;

    /**
     * This container is only used by the <b>PlaceOffer</b> call request if the previous <b>PlaceOffer</b> call resulted in a <b>BotBlock</b> container in the response. If the caller receives this container in the response, that caller must make another <b>PlaceOffer</b> call, this time, passing in the encrypted token and URL that is returned in the <b>BotBlock</b> container in the response. This safeguard lets eBay know that a real user is making a <b>PlaceOffer</b> call and not a bot.
     *
     * @var \Nogrod\eBaySDK\Trading\BotBlockRequestType $botBlock
     */
    private $botBlock = null;

    /**
     * @var \Nogrod\eBaySDK\Trading\XMLRequesterCredentialsType $requesterCredentials
     */
    private $requesterCredentials = null;

    /**
     * Adds as detailLevel
     *
     * Detail levels are instructions that define standard subsets of
     *  data to return for particular data components (e.g., each
     *  Item, Transaction, or User) within the response payload.
     *  For example, a particular detail level might cause the
     *  response to include buyer-related data in every result
     *  (e.g., for every Item), but no seller-related data.
     *  <br/><br/>
     *  Specifying a detail level is like using a
     *  predefined attribute list in the SELECT clause of an SQL query.
     *  Use the <b>DetailLevel</b> element to specify the required detail level
     *  that the client application needs pertaining to the data components
     *  that are applicable to the request.
     *  <br><br>
     *  The <b>DetailLevelCodeType</b> defines the
     *  global list of available detail levels for all request types.
     *  Most request types support certain detail
     *  levels or none at all. If you pass a detail level that exists
     *  in the schema but that isn't valid for a particular request,
     *  eBay ignores it and processes the request without it.
     *  <br/><br/>
     *  For each request type, see the detail level tables in the
     *  Input/Output Reference to determine which detail levels are
     *  applicable and which elements are returned for each applicable
     *  detail level.
     *  <br><br>Note that <b>DetailLevel</b> is required input for
     *  <b>GetMyMessages</b>. <br>
     *  <br>
     *  With <b>GetSellerList</b> and other calls that retrieve large data sets,
     *  please avoid using <b>ReturnAll</b> when possible. For example, if you use
     *  <b>GetSellerList</b>, use <b>GranularityLevel</b> instead, or use <b>GetSellerEvents</b>. If you do use 'ReturnAll' with
     *  <b>GetSellerList</b>, use a small <b>Pagination.EntriesPerPage</b> value and a narrow
     *  <b>EndTimeFrom</b>/<b>EndTimeTo</b> date range for better performance.
     *
     * @return self
     * @param string $detailLevel
     */
    public function addToDetailLevel($detailLevel)
    {
        $this->detailLevel[] = $detailLevel;
        return $this;
    }

    /**
     * isset detailLevel
     *
     * Detail levels are instructions that define standard subsets of
     *  data to return for particular data components (e.g., each
     *  Item, Transaction, or User) within the response payload.
     *  For example, a particular detail level might cause the
     *  response to include buyer-related data in every result
     *  (e.g., for every Item), but no seller-related data.
     *  <br/><br/>
     *  Specifying a detail level is like using a
     *  predefined attribute list in the SELECT clause of an SQL query.
     *  Use the <b>DetailLevel</b> element to specify the required detail level
     *  that the client application needs pertaining to the data components
     *  that are applicable to the request.
     *  <br><br>
     *  The <b>DetailLevelCodeType</b> defines the
     *  global list of available detail levels for all request types.
     *  Most request types support certain detail
     *  levels or none at all. If you pass a detail level that exists
     *  in the schema but that isn't valid for a particular request,
     *  eBay ignores it and processes the request without it.
     *  <br/><br/>
     *  For each request type, see the detail level tables in the
     *  Input/Output Reference to determine which detail levels are
     *  applicable and which elements are returned for each applicable
     *  detail level.
     *  <br><br>Note that <b>DetailLevel</b> is required input for
     *  <b>GetMyMessages</b>. <br>
     *  <br>
     *  With <b>GetSellerList</b> and other calls that retrieve large data sets,
     *  please avoid using <b>ReturnAll</b> when possible. For example, if you use
     *  <b>GetSellerList</b>, use <b>GranularityLevel</b> instead, or use <b>GetSellerEvents</b>. If you do use 'ReturnAll' with
     *  <b>GetSellerList</b>, use a small <b>Pagination.EntriesPerPage</b> value and a narrow
     *  <b>EndTimeFrom</b>/<b>EndTimeTo</b> date range for better performance.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetailLevel($index)
    {
        return isset($this->detailLevel[$index]);
    }

    /**
     * unset detailLevel
     *
     * Detail levels are instructions that define standard subsets of
     *  data to return for particular data components (e.g., each
     *  Item, Transaction, or User) within the response payload.
     *  For example, a particular detail level might cause the
     *  response to include buyer-related data in every result
     *  (e.g., for every Item), but no seller-related data.
     *  <br/><br/>
     *  Specifying a detail level is like using a
     *  predefined attribute list in the SELECT clause of an SQL query.
     *  Use the <b>DetailLevel</b> element to specify the required detail level
     *  that the client application needs pertaining to the data components
     *  that are applicable to the request.
     *  <br><br>
     *  The <b>DetailLevelCodeType</b> defines the
     *  global list of available detail levels for all request types.
     *  Most request types support certain detail
     *  levels or none at all. If you pass a detail level that exists
     *  in the schema but that isn't valid for a particular request,
     *  eBay ignores it and processes the request without it.
     *  <br/><br/>
     *  For each request type, see the detail level tables in the
     *  Input/Output Reference to determine which detail levels are
     *  applicable and which elements are returned for each applicable
     *  detail level.
     *  <br><br>Note that <b>DetailLevel</b> is required input for
     *  <b>GetMyMessages</b>. <br>
     *  <br>
     *  With <b>GetSellerList</b> and other calls that retrieve large data sets,
     *  please avoid using <b>ReturnAll</b> when possible. For example, if you use
     *  <b>GetSellerList</b>, use <b>GranularityLevel</b> instead, or use <b>GetSellerEvents</b>. If you do use 'ReturnAll' with
     *  <b>GetSellerList</b>, use a small <b>Pagination.EntriesPerPage</b> value and a narrow
     *  <b>EndTimeFrom</b>/<b>EndTimeTo</b> date range for better performance.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetailLevel($index)
    {
        unset($this->detailLevel[$index]);
    }

    /**
     * Gets as detailLevel
     *
     * Detail levels are instructions that define standard subsets of
     *  data to return for particular data components (e.g., each
     *  Item, Transaction, or User) within the response payload.
     *  For example, a particular detail level might cause the
     *  response to include buyer-related data in every result
     *  (e.g., for every Item), but no seller-related data.
     *  <br/><br/>
     *  Specifying a detail level is like using a
     *  predefined attribute list in the SELECT clause of an SQL query.
     *  Use the <b>DetailLevel</b> element to specify the required detail level
     *  that the client application needs pertaining to the data components
     *  that are applicable to the request.
     *  <br><br>
     *  The <b>DetailLevelCodeType</b> defines the
     *  global list of available detail levels for all request types.
     *  Most request types support certain detail
     *  levels or none at all. If you pass a detail level that exists
     *  in the schema but that isn't valid for a particular request,
     *  eBay ignores it and processes the request without it.
     *  <br/><br/>
     *  For each request type, see the detail level tables in the
     *  Input/Output Reference to determine which detail levels are
     *  applicable and which elements are returned for each applicable
     *  detail level.
     *  <br><br>Note that <b>DetailLevel</b> is required input for
     *  <b>GetMyMessages</b>. <br>
     *  <br>
     *  With <b>GetSellerList</b> and other calls that retrieve large data sets,
     *  please avoid using <b>ReturnAll</b> when possible. For example, if you use
     *  <b>GetSellerList</b>, use <b>GranularityLevel</b> instead, or use <b>GetSellerEvents</b>. If you do use 'ReturnAll' with
     *  <b>GetSellerList</b>, use a small <b>Pagination.EntriesPerPage</b> value and a narrow
     *  <b>EndTimeFrom</b>/<b>EndTimeTo</b> date range for better performance.
     *
     * @return string[]
     */
    public function getDetailLevel()
    {
        return $this->detailLevel;
    }

    /**
     * Sets a new detailLevel
     *
     * Detail levels are instructions that define standard subsets of
     *  data to return for particular data components (e.g., each
     *  Item, Transaction, or User) within the response payload.
     *  For example, a particular detail level might cause the
     *  response to include buyer-related data in every result
     *  (e.g., for every Item), but no seller-related data.
     *  <br/><br/>
     *  Specifying a detail level is like using a
     *  predefined attribute list in the SELECT clause of an SQL query.
     *  Use the <b>DetailLevel</b> element to specify the required detail level
     *  that the client application needs pertaining to the data components
     *  that are applicable to the request.
     *  <br><br>
     *  The <b>DetailLevelCodeType</b> defines the
     *  global list of available detail levels for all request types.
     *  Most request types support certain detail
     *  levels or none at all. If you pass a detail level that exists
     *  in the schema but that isn't valid for a particular request,
     *  eBay ignores it and processes the request without it.
     *  <br/><br/>
     *  For each request type, see the detail level tables in the
     *  Input/Output Reference to determine which detail levels are
     *  applicable and which elements are returned for each applicable
     *  detail level.
     *  <br><br>Note that <b>DetailLevel</b> is required input for
     *  <b>GetMyMessages</b>. <br>
     *  <br>
     *  With <b>GetSellerList</b> and other calls that retrieve large data sets,
     *  please avoid using <b>ReturnAll</b> when possible. For example, if you use
     *  <b>GetSellerList</b>, use <b>GranularityLevel</b> instead, or use <b>GetSellerEvents</b>. If you do use 'ReturnAll' with
     *  <b>GetSellerList</b>, use a small <b>Pagination.EntriesPerPage</b> value and a narrow
     *  <b>EndTimeFrom</b>/<b>EndTimeTo</b> date range for better performance.
     *
     * @param string $detailLevel
     * @return self
     */
    public function setDetailLevel(array $detailLevel)
    {
        $this->detailLevel = $detailLevel;
        return $this;
    }

    /**
     * Gets as errorLanguage
     *
     * Use <b>ErrorLanguage</b> to return error strings for the call in a different language
     *  from the language commonly associated with the site that the requesting user
     *  is registered with. Below are some examples from different countries.
     *  <br><br>
     *  <table border="0">
     *  <tr>
     *  <th>ID</th>
     *  <th>Country</th>
     *  </tr>
     *  <tr>
     *  <td>en_AU</td>
     *  <td>Australia</td>
     *  </tr>
     *  <tr>
     *  <td>de_AT</td>
     *  <td>Austria</td>
     *  </tr>
     *  <tr>
     *  <td>nl_BE</td>
     *  <td>Belgium (Dutch)</td>
     *  </tr>
     *  <tr>
     *  <td>fr_BE</td>
     *  <td>Belgium (French)</td>
     *  </tr>
     *  <tr>
     *  <td>en_CA</td>
     *  <td>Canada</td>
     *  </tr>
     *  <tr>
     *  <td>fr_CA</td>
     *  <td>Canada (French)</td>
     *  </tr>
     *  <tr>
     *  <td>zh_CN</td>
     *  <td>China</td>
     *  </tr>
     *  <tr>
     *  <td>fr_FR</td>
     *  <td>France</td>
     *  </tr>
     *  <tr>
     *  <td>de_DE</td>
     *  <td>Germany</td>
     *  </tr>
     *  <tr>
     *  <td>zh_HK</td>
     *  <td>Hong Kong</td>
     *  </tr>
     *  <tr>
     *  <td>en_IN</td>
     *  <td>India</td>
     *  </tr>
     *  <tr>
     *  <td>en_IE</td>
     *  <td>Ireland</td>
     *  </tr>
     *  <tr>
     *  <td>it_IT</td>
     *  <td>Italy</td>
     *  </tr>
     *  <tr>
     *  <td>nl_NL</td>
     *  <td>Netherlands</td>
     *  </tr>
     *  <tr>
     *  <td>en_SG</td>
     *  <td>Singapore</td>
     *  </tr>
     *  <tr>
     *  <td>es_ES</td>
     *  <td>Spain</td>
     *  </tr>
     *  <tr>
     *  <td>de_CH</td>
     *  <td>Switzerland</td>
     *  </tr>
     *  <tr>
     *  <td>en_GB</td>
     *  <td>United Kingdom</td>
     *  </tr>
     *  <tr>
     *  <td>en_US</td>
     *  <td> United States</td>
     *  </tr>
     *  </table>
     *
     * @return string
     */
    public function getErrorLanguage()
    {
        return $this->errorLanguage;
    }

    /**
     * Sets a new errorLanguage
     *
     * Use <b>ErrorLanguage</b> to return error strings for the call in a different language
     *  from the language commonly associated with the site that the requesting user
     *  is registered with. Below are some examples from different countries.
     *  <br><br>
     *  <table border="0">
     *  <tr>
     *  <th>ID</th>
     *  <th>Country</th>
     *  </tr>
     *  <tr>
     *  <td>en_AU</td>
     *  <td>Australia</td>
     *  </tr>
     *  <tr>
     *  <td>de_AT</td>
     *  <td>Austria</td>
     *  </tr>
     *  <tr>
     *  <td>nl_BE</td>
     *  <td>Belgium (Dutch)</td>
     *  </tr>
     *  <tr>
     *  <td>fr_BE</td>
     *  <td>Belgium (French)</td>
     *  </tr>
     *  <tr>
     *  <td>en_CA</td>
     *  <td>Canada</td>
     *  </tr>
     *  <tr>
     *  <td>fr_CA</td>
     *  <td>Canada (French)</td>
     *  </tr>
     *  <tr>
     *  <td>zh_CN</td>
     *  <td>China</td>
     *  </tr>
     *  <tr>
     *  <td>fr_FR</td>
     *  <td>France</td>
     *  </tr>
     *  <tr>
     *  <td>de_DE</td>
     *  <td>Germany</td>
     *  </tr>
     *  <tr>
     *  <td>zh_HK</td>
     *  <td>Hong Kong</td>
     *  </tr>
     *  <tr>
     *  <td>en_IN</td>
     *  <td>India</td>
     *  </tr>
     *  <tr>
     *  <td>en_IE</td>
     *  <td>Ireland</td>
     *  </tr>
     *  <tr>
     *  <td>it_IT</td>
     *  <td>Italy</td>
     *  </tr>
     *  <tr>
     *  <td>nl_NL</td>
     *  <td>Netherlands</td>
     *  </tr>
     *  <tr>
     *  <td>en_SG</td>
     *  <td>Singapore</td>
     *  </tr>
     *  <tr>
     *  <td>es_ES</td>
     *  <td>Spain</td>
     *  </tr>
     *  <tr>
     *  <td>de_CH</td>
     *  <td>Switzerland</td>
     *  </tr>
     *  <tr>
     *  <td>en_GB</td>
     *  <td>United Kingdom</td>
     *  </tr>
     *  <tr>
     *  <td>en_US</td>
     *  <td> United States</td>
     *  </tr>
     *  </table>
     *
     * @param string $errorLanguage
     * @return self
     */
    public function setErrorLanguage($errorLanguage)
    {
        $this->errorLanguage = $errorLanguage;
        return $this;
    }

    /**
     * Gets as messageID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. If you pass in a
     *  <b>MessageID</b> in a request, the same value will be returned in the
     *  <b>CorrelationID</b> field in the response. Pairing these values can
     *  help you track and confirm that a response is returned for every request and to
     *  match specific responses to specific requests.
     *  If you do not pass a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetCategories</b> is designed to retrieve very large sets of metadata
     *  that change once a day or less often. To improve performance, these calls return
     *  cached responses when you request all available data (with no filters). When this
     *  occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields
     *  aren't applicable. However, if you specify an input filter to reduce the amount of
     *  data returned, the calls retrieve the latest data (not cached). When this occurs,
     *  <b>MessageID</b> and <b>CorrelationID</b> are applicable.
     *  </span>
     *
     * @return string
     */
    public function getMessageID()
    {
        return $this->messageID;
    }

    /**
     * Sets a new messageID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. If you pass in a
     *  <b>MessageID</b> in a request, the same value will be returned in the
     *  <b>CorrelationID</b> field in the response. Pairing these values can
     *  help you track and confirm that a response is returned for every request and to
     *  match specific responses to specific requests.
     *  If you do not pass a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.<br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  <b>GetCategories</b> is designed to retrieve very large sets of metadata
     *  that change once a day or less often. To improve performance, these calls return
     *  cached responses when you request all available data (with no filters). When this
     *  occurs, the <b>MessageID</b> and <b>CorrelationID</b> fields
     *  aren't applicable. However, if you specify an input filter to reduce the amount of
     *  data returned, the calls retrieve the latest data (not cached). When this occurs,
     *  <b>MessageID</b> and <b>CorrelationID</b> are applicable.
     *  </span>
     *
     * @param string $messageID
     * @return self
     */
    public function setMessageID($messageID)
    {
        $this->messageID = $messageID;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version number of the API code that you are
     *  programming against (e.g., 859).
     *  The version you specify for a call has these basic effects:
     *  <b></b>
     *  <ul>
     *  <li>It indicates the version of the code lists and other
     *  data that eBay should use to process your request.</li>
     *  <li>It indicates the schema version you are using.</li>
     *  </ul>
     *  You need to use a version that is greater than or equal to the
     *  lowest supported version.
     *  <br>
     *  <b>For the SOAP API:</b> If you are using the SOAP API,
     *  this field is required. Specify the version of the WSDL your
     *  application is using.<br>
     *  <br>
     *  <b>For the XML API:</b> If you are using the XML API,
     *  this field has no effect. Instead, specify the version in the
     *  <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header.
     *  (If you specify <b>Version</b> in the body of an XML API request and it
     *  is different from the value in the HTTP header, eBay returns an
     *  informational warning that the value in the HTTP header was used
     *  instead.)
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version number of the API code that you are
     *  programming against (e.g., 859).
     *  The version you specify for a call has these basic effects:
     *  <b></b>
     *  <ul>
     *  <li>It indicates the version of the code lists and other
     *  data that eBay should use to process your request.</li>
     *  <li>It indicates the schema version you are using.</li>
     *  </ul>
     *  You need to use a version that is greater than or equal to the
     *  lowest supported version.
     *  <br>
     *  <b>For the SOAP API:</b> If you are using the SOAP API,
     *  this field is required. Specify the version of the WSDL your
     *  application is using.<br>
     *  <br>
     *  <b>For the XML API:</b> If you are using the XML API,
     *  this field has no effect. Instead, specify the version in the
     *  <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header.
     *  (If you specify <b>Version</b> in the body of an XML API request and it
     *  is different from the value in the HTTP header, eBay returns an
     *  informational warning that the value in the HTTP header was used
     *  instead.)
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as endUserIP
     *
     * The public IP address of the machine from which the request is sent.
     *  Your application captures that IP address and includes it in
     *  a call request. eBay evaluates requests for safety (also see
     *  the <b>BotBlock</b> container
     *  in the request and response of this call).
     *
     * @return string
     */
    public function getEndUserIP()
    {
        return $this->endUserIP;
    }

    /**
     * Sets a new endUserIP
     *
     * The public IP address of the machine from which the request is sent.
     *  Your application captures that IP address and includes it in
     *  a call request. eBay evaluates requests for safety (also see
     *  the <b>BotBlock</b> container
     *  in the request and response of this call).
     *
     * @param string $endUserIP
     * @return self
     */
    public function setEndUserIP($endUserIP)
    {
        $this->endUserIP = $endUserIP;
        return $this;
    }

    /**
     * Gets as errorHandling
     *
     * Error tolerance level for the call. This is a preference
     *  that specifies how eBay should handle requests that contain
     *  invalid data or that could partially fail. This gives you some control
     *  over whether eBay returns warnings or blocking errors
     *  and how eBay processes the invalid data.<br>
     *  <br>
     *  This field is only applicable to <b>AddItem</b> and related calls,
     *  and only when the listing includes <b>ProductListingDetails</b>.
     *
     * @return string
     */
    public function getErrorHandling()
    {
        return $this->errorHandling;
    }

    /**
     * Sets a new errorHandling
     *
     * Error tolerance level for the call. This is a preference
     *  that specifies how eBay should handle requests that contain
     *  invalid data or that could partially fail. This gives you some control
     *  over whether eBay returns warnings or blocking errors
     *  and how eBay processes the invalid data.<br>
     *  <br>
     *  This field is only applicable to <b>AddItem</b> and related calls,
     *  and only when the listing includes <b>ProductListingDetails</b>.
     *
     * @param string $errorHandling
     * @return self
     */
    public function setErrorHandling($errorHandling)
    {
        $this->errorHandling = $errorHandling;
        return $this;
    }

    /**
     * Gets as invocationID
     *
     * A unique identifier for a particular call. If the same <b>InvocationID</b> is passed
     *  in after it has been passed in once on a call that succeeded for a particular
     *  application and user, then an error will be returned. The identifier can
     *  only contain digits from 0-9 and letters from A-F. The
     *  identifier must be 32 characters long. For example,
     *  1FB02B2-9D27-3acb-ABA2-9D539C374228.
     *
     * @return string
     */
    public function getInvocationID()
    {
        return $this->invocationID;
    }

    /**
     * Sets a new invocationID
     *
     * A unique identifier for a particular call. If the same <b>InvocationID</b> is passed
     *  in after it has been passed in once on a call that succeeded for a particular
     *  application and user, then an error will be returned. The identifier can
     *  only contain digits from 0-9 and letters from A-F. The
     *  identifier must be 32 characters long. For example,
     *  1FB02B2-9D27-3acb-ABA2-9D539C374228.
     *
     * @param string $invocationID
     * @return self
     */
    public function setInvocationID($invocationID)
    {
        $this->invocationID = $invocationID;
        return $this;
    }

    /**
     * Adds as outputSelector
     *
     * You can use the <b>OutputSelector</b> field to restrict the data returned by a call. This field can make the call response easier to manage, especially when a large payload is returned. If you use the <b>OutputSelector</b> field, the output data will only include the field(s) you specified in the request, as well as all of its child fields (if a field is a container) and its parent fields (if any). Note that it is possible that a field included through an <b>OutputSelector</b> field may still not be returned if it is not applicable, or if it is not found based on other criteria set up in the request payload.
     *  <br>
     *  <br>
     *  For example, if you are using <b>GetItem</b> and you only want to retrieve the URL of the View Item page (emitted in <b>ViewItemURL</b> field) and the item's Buy It Now price (emitted in <b>BuyItNowPrice</b> field), you would include two separate <b>OutputSelector</b> fields and set the value for each one as <b>ViewItemURL</b> and <b>BuyItNowPrice</b> as in the following example:
     *  <br>
     *  <br>
     *  <pre>
     *  <b>If the following output selectors are used:</b>
     *  <br><br>...<br>
     *  <code>&lt;OutputSelector&gt;ViewItemURL&lt;/OutputSelector&gt;<br>
     *  &lt;OutputSelector&gt;BuyItNowPrice&lt;/OutputSelector&gt;
     *  </code><br>...
     *  <br><br>
     *  <b>...the response might look like the following</b>
     *  <br><br>
     *  <code>
     *  &lt;Item&gt;<br>
     *  &lt;BuyItNowPrice currencyID="USD"&gt;0.0&lt;/BuyItNowPrice&gt;<br>
     *  &lt;ListingDetails&gt;<br>
     *  &lt;ViewItemURL&gt;http://www.ebay.com/itm/Tag-Heuer-Mens-Watch/182879833261&lt;/ViewItemURL&gt;<br>
     *  &lt;/ListingDetails&gt;<br>
     *  &lt;/Item&gt;
     *  </code>
     *  </pre>
     *
     * @return self
     * @param string $outputSelector
     */
    public function addToOutputSelector($outputSelector)
    {
        $this->outputSelector[] = $outputSelector;
        return $this;
    }

    /**
     * isset outputSelector
     *
     * You can use the <b>OutputSelector</b> field to restrict the data returned by a call. This field can make the call response easier to manage, especially when a large payload is returned. If you use the <b>OutputSelector</b> field, the output data will only include the field(s) you specified in the request, as well as all of its child fields (if a field is a container) and its parent fields (if any). Note that it is possible that a field included through an <b>OutputSelector</b> field may still not be returned if it is not applicable, or if it is not found based on other criteria set up in the request payload.
     *  <br>
     *  <br>
     *  For example, if you are using <b>GetItem</b> and you only want to retrieve the URL of the View Item page (emitted in <b>ViewItemURL</b> field) and the item's Buy It Now price (emitted in <b>BuyItNowPrice</b> field), you would include two separate <b>OutputSelector</b> fields and set the value for each one as <b>ViewItemURL</b> and <b>BuyItNowPrice</b> as in the following example:
     *  <br>
     *  <br>
     *  <pre>
     *  <b>If the following output selectors are used:</b>
     *  <br><br>...<br>
     *  <code>&lt;OutputSelector&gt;ViewItemURL&lt;/OutputSelector&gt;<br>
     *  &lt;OutputSelector&gt;BuyItNowPrice&lt;/OutputSelector&gt;
     *  </code><br>...
     *  <br><br>
     *  <b>...the response might look like the following</b>
     *  <br><br>
     *  <code>
     *  &lt;Item&gt;<br>
     *  &lt;BuyItNowPrice currencyID="USD"&gt;0.0&lt;/BuyItNowPrice&gt;<br>
     *  &lt;ListingDetails&gt;<br>
     *  &lt;ViewItemURL&gt;http://www.ebay.com/itm/Tag-Heuer-Mens-Watch/182879833261&lt;/ViewItemURL&gt;<br>
     *  &lt;/ListingDetails&gt;<br>
     *  &lt;/Item&gt;
     *  </code>
     *  </pre>
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutputSelector($index)
    {
        return isset($this->outputSelector[$index]);
    }

    /**
     * unset outputSelector
     *
     * You can use the <b>OutputSelector</b> field to restrict the data returned by a call. This field can make the call response easier to manage, especially when a large payload is returned. If you use the <b>OutputSelector</b> field, the output data will only include the field(s) you specified in the request, as well as all of its child fields (if a field is a container) and its parent fields (if any). Note that it is possible that a field included through an <b>OutputSelector</b> field may still not be returned if it is not applicable, or if it is not found based on other criteria set up in the request payload.
     *  <br>
     *  <br>
     *  For example, if you are using <b>GetItem</b> and you only want to retrieve the URL of the View Item page (emitted in <b>ViewItemURL</b> field) and the item's Buy It Now price (emitted in <b>BuyItNowPrice</b> field), you would include two separate <b>OutputSelector</b> fields and set the value for each one as <b>ViewItemURL</b> and <b>BuyItNowPrice</b> as in the following example:
     *  <br>
     *  <br>
     *  <pre>
     *  <b>If the following output selectors are used:</b>
     *  <br><br>...<br>
     *  <code>&lt;OutputSelector&gt;ViewItemURL&lt;/OutputSelector&gt;<br>
     *  &lt;OutputSelector&gt;BuyItNowPrice&lt;/OutputSelector&gt;
     *  </code><br>...
     *  <br><br>
     *  <b>...the response might look like the following</b>
     *  <br><br>
     *  <code>
     *  &lt;Item&gt;<br>
     *  &lt;BuyItNowPrice currencyID="USD"&gt;0.0&lt;/BuyItNowPrice&gt;<br>
     *  &lt;ListingDetails&gt;<br>
     *  &lt;ViewItemURL&gt;http://www.ebay.com/itm/Tag-Heuer-Mens-Watch/182879833261&lt;/ViewItemURL&gt;<br>
     *  &lt;/ListingDetails&gt;<br>
     *  &lt;/Item&gt;
     *  </code>
     *  </pre>
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutputSelector($index)
    {
        unset($this->outputSelector[$index]);
    }

    /**
     * Gets as outputSelector
     *
     * You can use the <b>OutputSelector</b> field to restrict the data returned by a call. This field can make the call response easier to manage, especially when a large payload is returned. If you use the <b>OutputSelector</b> field, the output data will only include the field(s) you specified in the request, as well as all of its child fields (if a field is a container) and its parent fields (if any). Note that it is possible that a field included through an <b>OutputSelector</b> field may still not be returned if it is not applicable, or if it is not found based on other criteria set up in the request payload.
     *  <br>
     *  <br>
     *  For example, if you are using <b>GetItem</b> and you only want to retrieve the URL of the View Item page (emitted in <b>ViewItemURL</b> field) and the item's Buy It Now price (emitted in <b>BuyItNowPrice</b> field), you would include two separate <b>OutputSelector</b> fields and set the value for each one as <b>ViewItemURL</b> and <b>BuyItNowPrice</b> as in the following example:
     *  <br>
     *  <br>
     *  <pre>
     *  <b>If the following output selectors are used:</b>
     *  <br><br>...<br>
     *  <code>&lt;OutputSelector&gt;ViewItemURL&lt;/OutputSelector&gt;<br>
     *  &lt;OutputSelector&gt;BuyItNowPrice&lt;/OutputSelector&gt;
     *  </code><br>...
     *  <br><br>
     *  <b>...the response might look like the following</b>
     *  <br><br>
     *  <code>
     *  &lt;Item&gt;<br>
     *  &lt;BuyItNowPrice currencyID="USD"&gt;0.0&lt;/BuyItNowPrice&gt;<br>
     *  &lt;ListingDetails&gt;<br>
     *  &lt;ViewItemURL&gt;http://www.ebay.com/itm/Tag-Heuer-Mens-Watch/182879833261&lt;/ViewItemURL&gt;<br>
     *  &lt;/ListingDetails&gt;<br>
     *  &lt;/Item&gt;
     *  </code>
     *  </pre>
     *
     * @return string[]
     */
    public function getOutputSelector()
    {
        return $this->outputSelector;
    }

    /**
     * Sets a new outputSelector
     *
     * You can use the <b>OutputSelector</b> field to restrict the data returned by a call. This field can make the call response easier to manage, especially when a large payload is returned. If you use the <b>OutputSelector</b> field, the output data will only include the field(s) you specified in the request, as well as all of its child fields (if a field is a container) and its parent fields (if any). Note that it is possible that a field included through an <b>OutputSelector</b> field may still not be returned if it is not applicable, or if it is not found based on other criteria set up in the request payload.
     *  <br>
     *  <br>
     *  For example, if you are using <b>GetItem</b> and you only want to retrieve the URL of the View Item page (emitted in <b>ViewItemURL</b> field) and the item's Buy It Now price (emitted in <b>BuyItNowPrice</b> field), you would include two separate <b>OutputSelector</b> fields and set the value for each one as <b>ViewItemURL</b> and <b>BuyItNowPrice</b> as in the following example:
     *  <br>
     *  <br>
     *  <pre>
     *  <b>If the following output selectors are used:</b>
     *  <br><br>...<br>
     *  <code>&lt;OutputSelector&gt;ViewItemURL&lt;/OutputSelector&gt;<br>
     *  &lt;OutputSelector&gt;BuyItNowPrice&lt;/OutputSelector&gt;
     *  </code><br>...
     *  <br><br>
     *  <b>...the response might look like the following</b>
     *  <br><br>
     *  <code>
     *  &lt;Item&gt;<br>
     *  &lt;BuyItNowPrice currencyID="USD"&gt;0.0&lt;/BuyItNowPrice&gt;<br>
     *  &lt;ListingDetails&gt;<br>
     *  &lt;ViewItemURL&gt;http://www.ebay.com/itm/Tag-Heuer-Mens-Watch/182879833261&lt;/ViewItemURL&gt;<br>
     *  &lt;/ListingDetails&gt;<br>
     *  &lt;/Item&gt;
     *  </code>
     *  </pre>
     *
     * @param string[] $outputSelector
     * @return self
     */
    public function setOutputSelector(array $outputSelector)
    {
        $this->outputSelector = $outputSelector;
        return $this;
    }

    /**
     * Gets as warningLevel
     *
     * Controls whether or not to return warnings when the application passes
     *  unrecognized or deprecated elements in a request.<br>
     *  <br>
     *  An unrecognized element is one that is not defined in any supported
     *  version of the schema. Schema element names are case-sensitive,
     *  so using <b>WarningLevel</b> can also help you remove any potential hidden
     *  bugs within your application due to incorrect case or spelling in
     *  field names before you put your application into the
     *  Production environment.<br>
     *  <br>
     *  <b>WarningLevel</b> only validates elements; it doesn't validate
     *  XML attributes. It also doesn't control warnings related to
     *  user-entered strings or numbers, or warnings for
     *  logical errors.<br>
     *  <br>
     *  We recommend that you only use this during development and debugging.
     *  Do not use this in requests performed in the Production environment.
     *
     * @return string
     */
    public function getWarningLevel()
    {
        return $this->warningLevel;
    }

    /**
     * Sets a new warningLevel
     *
     * Controls whether or not to return warnings when the application passes
     *  unrecognized or deprecated elements in a request.<br>
     *  <br>
     *  An unrecognized element is one that is not defined in any supported
     *  version of the schema. Schema element names are case-sensitive,
     *  so using <b>WarningLevel</b> can also help you remove any potential hidden
     *  bugs within your application due to incorrect case or spelling in
     *  field names before you put your application into the
     *  Production environment.<br>
     *  <br>
     *  <b>WarningLevel</b> only validates elements; it doesn't validate
     *  XML attributes. It also doesn't control warnings related to
     *  user-entered strings or numbers, or warnings for
     *  logical errors.<br>
     *  <br>
     *  We recommend that you only use this during development and debugging.
     *  Do not use this in requests performed in the Production environment.
     *
     * @param string $warningLevel
     * @return self
     */
    public function setWarningLevel($warningLevel)
    {
        $this->warningLevel = $warningLevel;
        return $this;
    }

    /**
     * Gets as botBlock
     *
     * This container is only used by the <b>PlaceOffer</b> call request if the previous <b>PlaceOffer</b> call resulted in a <b>BotBlock</b> container in the response. If the caller receives this container in the response, that caller must make another <b>PlaceOffer</b> call, this time, passing in the encrypted token and URL that is returned in the <b>BotBlock</b> container in the response. This safeguard lets eBay know that a real user is making a <b>PlaceOffer</b> call and not a bot.
     *
     * @return \Nogrod\eBaySDK\Trading\BotBlockRequestType
     */
    public function getBotBlock()
    {
        return $this->botBlock;
    }

    /**
     * Sets a new botBlock
     *
     * This container is only used by the <b>PlaceOffer</b> call request if the previous <b>PlaceOffer</b> call resulted in a <b>BotBlock</b> container in the response. If the caller receives this container in the response, that caller must make another <b>PlaceOffer</b> call, this time, passing in the encrypted token and URL that is returned in the <b>BotBlock</b> container in the response. This safeguard lets eBay know that a real user is making a <b>PlaceOffer</b> call and not a bot.
     *
     * @param \Nogrod\eBaySDK\Trading\BotBlockRequestType $botBlock
     * @return self
     */
    public function setBotBlock(\Nogrod\eBaySDK\Trading\BotBlockRequestType $botBlock)
    {
        $this->botBlock = $botBlock;
        return $this;
    }

    /**
     * Gets as requesterCredentials
     *
     * @return \Nogrod\eBaySDK\Trading\XMLRequesterCredentialsType
     */
    public function getRequesterCredentials()
    {
        return $this->requesterCredentials;
    }

    /**
     * Sets a new requesterCredentials
     *
     * @param \Nogrod\eBaySDK\Trading\XMLRequesterCredentialsType $requesterCredentials
     * @return self
     */
    public function setRequesterCredentials(\Nogrod\eBaySDK\Trading\XMLRequesterCredentialsType $requesterCredentials)
    {
        $this->requesterCredentials = $requesterCredentials;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDetailLevel();
        if (null !== $value && !empty($this->getDetailLevel())) {
            $writer->write(array_map(function ($v) {
                return ["DetailLevel" => $v];
            }, $value));
        }
        $value = $this->getErrorLanguage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorLanguage", $value);
        }
        $value = $this->getMessageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MessageID", $value);
        }
        $value = $this->getVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Version", $value);
        }
        $value = $this->getEndUserIP();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndUserIP", $value);
        }
        $value = $this->getErrorHandling();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ErrorHandling", $value);
        }
        $value = $this->getInvocationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}InvocationID", $value);
        }
        $value = $this->getOutputSelector();
        if (null !== $value && !empty($this->getOutputSelector())) {
            $writer->write(array_map(function ($v) {
                return ["OutputSelector" => $v];
            }, $value));
        }
        $value = $this->getWarningLevel();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}WarningLevel", $value);
        }
        $value = $this->getBotBlock();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BotBlock", $value);
        }
        $value = $this->getRequesterCredentials();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RequesterCredentials", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailLevel', true);
        if (null !== $value && !empty($value)) {
            $this->setDetailLevel($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorLanguage');
        if (null !== $value) {
            $this->setErrorLanguage($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MessageID');
        if (null !== $value) {
            $this->setMessageID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Version');
        if (null !== $value) {
            $this->setVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndUserIP');
        if (null !== $value) {
            $this->setEndUserIP($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ErrorHandling');
        if (null !== $value) {
            $this->setErrorHandling($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}InvocationID');
        if (null !== $value) {
            $this->setInvocationID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}OutputSelector', true);
        if (null !== $value && !empty($value)) {
            $this->setOutputSelector($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}WarningLevel');
        if (null !== $value) {
            $this->setWarningLevel($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}BotBlock');
        if (null !== $value) {
            $this->setBotBlock(\Nogrod\eBaySDK\Trading\BotBlockRequestType::fromKeyValue($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RequesterCredentials');
        if (null !== $value) {
            $this->setRequesterCredentials(\Nogrod\eBaySDK\Trading\XMLRequesterCredentialsType::fromKeyValue($value));
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
