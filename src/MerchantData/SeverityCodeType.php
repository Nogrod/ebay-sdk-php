<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing SeverityCodeType
 *
 * SeverityCodeType - Type declaration to be used by other schema.
 * This code identifies the severity of an API error. A code indicates
 * whether there is an API-level error or warning that needs to be
 * communicated to the client.
 * XSD Type: SeverityCodeType
 */
class SeverityCodeType
{
    /**
     * Constant for 'Warning' value.
     *
     * The request was processed successfully, but something occurred that may affect
     * your application or the user. For example, eBay may have changed a value the
     * user sent in. In this case, eBay returns a normal, successful response and also
     * returns the warning.
     *  <br/><br/>
     *  When a warning occurs, the error is returned in addition to the business data.
     * In this case, you do not need to retry the request (as the original request was
     * successful). However, depending on the cause or nature of the warning, you might
     * need to contact either the end user or eBay to effect a long term solution to
     * the problem to prevent it from reoccurring in the future.
     */
    public const VAL_WARNING = 'Warning';

    /**
     * Constant for 'Error' value.
     *
     * The request that triggered the error was not processed successfully. When a
     * serious application-level error occurs, the error is returned instead of the
     * business data.
     *  <br/><br/>
     *  If the source of the problem is within the application (such as a missing
     * required element), change the application before you retry the request.
     *  <ul>
     *  <li>If the problem is due to end-user input data, please alert the end-user to
     * the problem and provide the means for them to correct the data. Once the problem
     * in the application or data is resolved, you can attempt to re-send the request
     * to eBay.
     *  </li>
     *  <li>If the source of the problem is on eBay's side, An application can retry
     * the request as-is a reasonable number of times (eBay recommends twice). If the
     * error persists, contact Developer Technical Support. Once the problem has been
     * resolved, the request may be resent in its original form.
     *  </li>
     *  </ul>
     *  <br/><br/>
     *  See the <a
     * href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#Basics/Call-UsingLiveData.html#CompatibleApplicationCheck">Compatible
     * Application Check</a> section of the
     *  eBay Features Guide for more information.
     */
    public const VAL_ERROR = 'Error';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
