<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorDataType
 *
 * A container for error details.
 * XSD Type: ErrorData
 */
class ErrorDataType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique code that identifies the particular error condition that
     *  occurred. Your application can use error codes as identifiers in your
     *  customized error-handling algorithms.
     *
     * @var int $errorId
     */
    private $errorId = null;

    /**
     * Name of the domain in which the error occurred.
     *  <dl>
     *  <dt>
     *  <strong>domain values:</strong>
     *  </dt>
     *  <dt>
     *  Marketplace
     *  </dt>
     *  <dd>
     *  A business or validation error occurred in the service.
     *  </dd>
     *  <dt>
     *  SOA
     *  </dt>
     *  <dd>
     *  An exception occurred in the Service Oriented Architecture (SOA)
     *  framework.
     *  </dd>
     *  </dl>
     *
     * @var string $domain
     */
    private $domain = null;

    /**
     * Indicates whether the reported problem is fatal (an error) or is less-
     *  severe (a warning). Review the error message details for information on
     *  the cause.
     *  <br><br>
     *  If the request fails and the application is the source of the error (for
     *  example, a required element is missing), update the application before
     *  you retry the request. If the problem is due to incorrect user data,
     *  alert the end-user to the problem and provide the means for them to
     *  correct the data. Once the problem in the application or data is
     *  resolved, re-send the request to eBay.
     *  <br><br>
     *  If the source of the problem is on eBay's side, you can retry the request
     *  a reasonable number of times (eBay recommends you try the request twice).
     *  If the error persists, contact Developer Technical Support. Once the
     *  problem has been resolved, you can resend the request in its original
     *  form.
     *  <br><br>
     *  If a warning occurs, warning information is returned in addition to the
     *  business data. Normally, you do not need to resend the request (as the
     *  original request was successful). However, depending on the cause of the
     *  warning, you might need to contact the end user, or eBay, to effect a
     *  long term solution to the problem.
     *
     * @var string $severity
     */
    private $severity = null;

    /**
     * There are three categories of errors: request errors, application
     *  errors, and system errors.
     *
     * @var string $category
     */
    private $category = null;

    /**
     * A detailed description of the condition that caused in the error.
     *
     * @var string $message
     */
    private $message = null;

    /**
     * Name of the subdomain in which the error occurred.
     *  <dl>
     *  <dt>
     *  <strong>subdomain values:</strong>
     *  </dt>
     *  <dt>
     *  Finding
     *  </dt>
     *  <dd>
     *  The error is specific to the Finding service.
     *  </dd>
     *  <dt>
     *  MarketplaceCommon
     *  </dt>
     *  <dd>
     *  The error is common to all Marketplace services.
     *  </dd>
     *  </dl>
     *
     * @var string $subdomain
     */
    private $subdomain = null;

    /**
     * Unique identifier for an exception associated with an error.
     *
     * @var string $exceptionId
     */
    private $exceptionId = null;

    /**
     * Various warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *
     * @var \Nogrod\eBaySDK\Finding\ErrorParameterType[] $parameter
     */
    private $parameter = [

    ];

    /**
     * Gets as errorId
     *
     * A unique code that identifies the particular error condition that
     *  occurred. Your application can use error codes as identifiers in your
     *  customized error-handling algorithms.
     *
     * @return int
     */
    public function getErrorId()
    {
        return $this->errorId;
    }

    /**
     * Sets a new errorId
     *
     * A unique code that identifies the particular error condition that
     *  occurred. Your application can use error codes as identifiers in your
     *  customized error-handling algorithms.
     *
     * @param int $errorId
     * @return self
     */
    public function setErrorId($errorId)
    {
        $this->errorId = $errorId;
        return $this;
    }

    /**
     * Gets as domain
     *
     * Name of the domain in which the error occurred.
     *  <dl>
     *  <dt>
     *  <strong>domain values:</strong>
     *  </dt>
     *  <dt>
     *  Marketplace
     *  </dt>
     *  <dd>
     *  A business or validation error occurred in the service.
     *  </dd>
     *  <dt>
     *  SOA
     *  </dt>
     *  <dd>
     *  An exception occurred in the Service Oriented Architecture (SOA)
     *  framework.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
     *
     * Name of the domain in which the error occurred.
     *  <dl>
     *  <dt>
     *  <strong>domain values:</strong>
     *  </dt>
     *  <dt>
     *  Marketplace
     *  </dt>
     *  <dd>
     *  A business or validation error occurred in the service.
     *  </dd>
     *  <dt>
     *  SOA
     *  </dt>
     *  <dd>
     *  An exception occurred in the Service Oriented Architecture (SOA)
     *  framework.
     *  </dd>
     *  </dl>
     *
     * @param string $domain
     * @return self
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Gets as severity
     *
     * Indicates whether the reported problem is fatal (an error) or is less-
     *  severe (a warning). Review the error message details for information on
     *  the cause.
     *  <br><br>
     *  If the request fails and the application is the source of the error (for
     *  example, a required element is missing), update the application before
     *  you retry the request. If the problem is due to incorrect user data,
     *  alert the end-user to the problem and provide the means for them to
     *  correct the data. Once the problem in the application or data is
     *  resolved, re-send the request to eBay.
     *  <br><br>
     *  If the source of the problem is on eBay's side, you can retry the request
     *  a reasonable number of times (eBay recommends you try the request twice).
     *  If the error persists, contact Developer Technical Support. Once the
     *  problem has been resolved, you can resend the request in its original
     *  form.
     *  <br><br>
     *  If a warning occurs, warning information is returned in addition to the
     *  business data. Normally, you do not need to resend the request (as the
     *  original request was successful). However, depending on the cause of the
     *  warning, you might need to contact the end user, or eBay, to effect a
     *  long term solution to the problem.
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * Indicates whether the reported problem is fatal (an error) or is less-
     *  severe (a warning). Review the error message details for information on
     *  the cause.
     *  <br><br>
     *  If the request fails and the application is the source of the error (for
     *  example, a required element is missing), update the application before
     *  you retry the request. If the problem is due to incorrect user data,
     *  alert the end-user to the problem and provide the means for them to
     *  correct the data. Once the problem in the application or data is
     *  resolved, re-send the request to eBay.
     *  <br><br>
     *  If the source of the problem is on eBay's side, you can retry the request
     *  a reasonable number of times (eBay recommends you try the request twice).
     *  If the error persists, contact Developer Technical Support. Once the
     *  problem has been resolved, you can resend the request in its original
     *  form.
     *  <br><br>
     *  If a warning occurs, warning information is returned in addition to the
     *  business data. Normally, you do not need to resend the request (as the
     *  original request was successful). However, depending on the cause of the
     *  warning, you might need to contact the end user, or eBay, to effect a
     *  long term solution to the problem.
     *
     * @param string $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as category
     *
     * There are three categories of errors: request errors, application
     *  errors, and system errors.
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * There are three categories of errors: request errors, application
     *  errors, and system errors.
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as message
     *
     * A detailed description of the condition that caused in the error.
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
     * A detailed description of the condition that caused in the error.
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
     * Gets as subdomain
     *
     * Name of the subdomain in which the error occurred.
     *  <dl>
     *  <dt>
     *  <strong>subdomain values:</strong>
     *  </dt>
     *  <dt>
     *  Finding
     *  </dt>
     *  <dd>
     *  The error is specific to the Finding service.
     *  </dd>
     *  <dt>
     *  MarketplaceCommon
     *  </dt>
     *  <dd>
     *  The error is common to all Marketplace services.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getSubdomain()
    {
        return $this->subdomain;
    }

    /**
     * Sets a new subdomain
     *
     * Name of the subdomain in which the error occurred.
     *  <dl>
     *  <dt>
     *  <strong>subdomain values:</strong>
     *  </dt>
     *  <dt>
     *  Finding
     *  </dt>
     *  <dd>
     *  The error is specific to the Finding service.
     *  </dd>
     *  <dt>
     *  MarketplaceCommon
     *  </dt>
     *  <dd>
     *  The error is common to all Marketplace services.
     *  </dd>
     *  </dl>
     *
     * @param string $subdomain
     * @return self
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = $subdomain;
        return $this;
    }

    /**
     * Gets as exceptionId
     *
     * Unique identifier for an exception associated with an error.
     *
     * @return string
     */
    public function getExceptionId()
    {
        return $this->exceptionId;
    }

    /**
     * Sets a new exceptionId
     *
     * Unique identifier for an exception associated with an error.
     *
     * @param string $exceptionId
     * @return self
     */
    public function setExceptionId($exceptionId)
    {
        $this->exceptionId = $exceptionId;
        return $this;
    }

    /**
     * Adds as parameter
     *
     * Various warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Finding\ErrorParameterType $parameter
     */
    public function addToParameter(\Nogrod\eBaySDK\Finding\ErrorParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Various warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParameter($index)
    {
        return isset($this->parameter[$index]);
    }

    /**
     * unset parameter
     *
     * Various warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParameter($index)
    {
        unset($this->parameter[$index]);
    }

    /**
     * Gets as parameter
     *
     * Various warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *
     * @return \Nogrod\eBaySDK\Finding\ErrorParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Various warning and error messages return one or more variables that
     *  contain contextual information about the error. This is often the
     *  field or value that triggered the error.
     *
     * @param \Nogrod\eBaySDK\Finding\ErrorParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getErrorId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}errorId", $value);
        }
        $value = $this->getDomain();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}domain", $value);
        }
        $value = $this->getSeverity();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}severity", $value);
        }
        $value = $this->getCategory();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}category", $value);
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}message", $value);
        }
        $value = $this->getSubdomain();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}subdomain", $value);
        }
        $value = $this->getExceptionId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}exceptionId", $value);
        }
        $value = $this->getParameter();
        if (null !== $value && !empty($this->getParameter())) {
            $writer->write(array_map(function ($v) {return ["parameter" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}errorId');
        if (null !== $value) {
            $this->setErrorId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}domain');
        if (null !== $value) {
            $this->setDomain($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}severity');
        if (null !== $value) {
            $this->setSeverity($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}category');
        if (null !== $value) {
            $this->setCategory($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}message');
        if (null !== $value) {
            $this->setMessage($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}subdomain');
        if (null !== $value) {
            $this->setSubdomain($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}exceptionId');
        if (null !== $value) {
            $this->setExceptionId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}parameter', true);
        if (null !== $value && !empty($value)) {
            $this->setParameter(array_map(function ($v) {return \Nogrod\eBaySDK\Finding\ErrorParameterType::fromKeyValue($v);}, $value));
        }
    }
}
