<?php

namespace Nogrod\eBaySDK\FileTransfer;

/**
 * Class representing ErrorDataType
 *
 * Error details.
 * XSD Type: ErrorData
 */
class ErrorDataType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * A unique code that identifies the particular error condition that occurred.
     *  Your application can use error codes as identifiers in your customized
     *  error-handling algorithms.
     *
     * @var int $errorId
     */
    private $errorId = null;

    /**
     * Name of the domain upon which the error occurred.
     *  <dl>
     *  <lh>Domains include:</lh>
     *  <dt>
     *  Marketplace
     *  </dt>
     *  <dd>
     *  A business or validation error occurred for the Merchandising Service.
     *  </dd>
     *  <dt>
     *  SOA
     *  </dt>
     *  <dd>
     *  An exception occurred in the Service Oriented Architecture (SOA) framework.
     *  </dd>
     *  </dl>
     *
     * @var string $domain
     */
    private $domain = null;

    /**
     * Indicates whether the error caused the request to fail (Error) or not
     *  (Warning).
     *  <br><br>
     *  If the request fails and the source of the problem is within the application
     *  (such as a missing required element), please change the application before you
     *  retry the request. If the problem is due to end-user input data, please alert
     *  the end-user to the problem and provide the means for them to correct the data.
     *  Once the problem in the application or data is resolved, you can attempt to re-
     *  send the request to eBay.
     *  <br><br>
     *  If the source of the problem is on eBay's side, you can retry the request as-is
     *  a reasonable number of times (eBay recommends twice). If the error persists,
     *  contact Developer Technical Support. Once the problem has been resolved, the
     *  request may be resent in its original form.
     *  <br><br>
     *  When a warning occurs, the error is returned in addition to the business data.
     *  In this case, you do not need to retry the request (as the original request was
     *  successful). However, depending on the cause or nature of the warning, you
     *  might need to contact either the end user or eBay to effect a long term
     *  solution to the problem to prevent it from reoccurring in the future.
     *
     * @var string $severity
     */
    private $severity = null;

    /**
     * There are three categories of errors: request errors, application errors, and
     *  system errors.
     *
     * @var string $category
     */
    private $category = null;

    /**
     * A detailed description of the condition that resulted in the error.
     *
     * @var string $message
     */
    private $message = null;

    /**
     * Name of the subdomain upon which the error occurred.
     *  <dl>
     *  <lh>Subdomains include:</lh>
     *  <dt>
     *  Merchandising
     *  </dt>
     *  <dd>
     *  The error is specific to the Merchandising service.
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
     * Some warning and error messages return one or more variables that contain
     *  contextual information about the error. This is often the field or value that
     *  triggered the error.
     *
     * @var \Nogrod\eBaySDK\FileTransfer\ErrorParameterType[] $parameter
     */
    private $parameter = [
        
    ];

    /**
     * Gets as errorId
     *
     * A unique code that identifies the particular error condition that occurred.
     *  Your application can use error codes as identifiers in your customized
     *  error-handling algorithms.
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
     * A unique code that identifies the particular error condition that occurred.
     *  Your application can use error codes as identifiers in your customized
     *  error-handling algorithms.
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
     * Name of the domain upon which the error occurred.
     *  <dl>
     *  <lh>Domains include:</lh>
     *  <dt>
     *  Marketplace
     *  </dt>
     *  <dd>
     *  A business or validation error occurred for the Merchandising Service.
     *  </dd>
     *  <dt>
     *  SOA
     *  </dt>
     *  <dd>
     *  An exception occurred in the Service Oriented Architecture (SOA) framework.
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
     * Name of the domain upon which the error occurred.
     *  <dl>
     *  <lh>Domains include:</lh>
     *  <dt>
     *  Marketplace
     *  </dt>
     *  <dd>
     *  A business or validation error occurred for the Merchandising Service.
     *  </dd>
     *  <dt>
     *  SOA
     *  </dt>
     *  <dd>
     *  An exception occurred in the Service Oriented Architecture (SOA) framework.
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
     * Indicates whether the error caused the request to fail (Error) or not
     *  (Warning).
     *  <br><br>
     *  If the request fails and the source of the problem is within the application
     *  (such as a missing required element), please change the application before you
     *  retry the request. If the problem is due to end-user input data, please alert
     *  the end-user to the problem and provide the means for them to correct the data.
     *  Once the problem in the application or data is resolved, you can attempt to re-
     *  send the request to eBay.
     *  <br><br>
     *  If the source of the problem is on eBay's side, you can retry the request as-is
     *  a reasonable number of times (eBay recommends twice). If the error persists,
     *  contact Developer Technical Support. Once the problem has been resolved, the
     *  request may be resent in its original form.
     *  <br><br>
     *  When a warning occurs, the error is returned in addition to the business data.
     *  In this case, you do not need to retry the request (as the original request was
     *  successful). However, depending on the cause or nature of the warning, you
     *  might need to contact either the end user or eBay to effect a long term
     *  solution to the problem to prevent it from reoccurring in the future.
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
     * Indicates whether the error caused the request to fail (Error) or not
     *  (Warning).
     *  <br><br>
     *  If the request fails and the source of the problem is within the application
     *  (such as a missing required element), please change the application before you
     *  retry the request. If the problem is due to end-user input data, please alert
     *  the end-user to the problem and provide the means for them to correct the data.
     *  Once the problem in the application or data is resolved, you can attempt to re-
     *  send the request to eBay.
     *  <br><br>
     *  If the source of the problem is on eBay's side, you can retry the request as-is
     *  a reasonable number of times (eBay recommends twice). If the error persists,
     *  contact Developer Technical Support. Once the problem has been resolved, the
     *  request may be resent in its original form.
     *  <br><br>
     *  When a warning occurs, the error is returned in addition to the business data.
     *  In this case, you do not need to retry the request (as the original request was
     *  successful). However, depending on the cause or nature of the warning, you
     *  might need to contact either the end user or eBay to effect a long term
     *  solution to the problem to prevent it from reoccurring in the future.
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
     * There are three categories of errors: request errors, application errors, and
     *  system errors.
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
     * There are three categories of errors: request errors, application errors, and
     *  system errors.
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
     * A detailed description of the condition that resulted in the error.
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
     * A detailed description of the condition that resulted in the error.
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
     * Name of the subdomain upon which the error occurred.
     *  <dl>
     *  <lh>Subdomains include:</lh>
     *  <dt>
     *  Merchandising
     *  </dt>
     *  <dd>
     *  The error is specific to the Merchandising service.
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
     * Name of the subdomain upon which the error occurred.
     *  <dl>
     *  <lh>Subdomains include:</lh>
     *  <dt>
     *  Merchandising
     *  </dt>
     *  <dd>
     *  The error is specific to the Merchandising service.
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
     * Some warning and error messages return one or more variables that contain
     *  contextual information about the error. This is often the field or value that
     *  triggered the error.
     *
     * @return self
     * @param \Nogrod\eBaySDK\FileTransfer\ErrorParameterType $parameter
     */
    public function addToParameter(\Nogrod\eBaySDK\FileTransfer\ErrorParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
     *
     * Some warning and error messages return one or more variables that contain
     *  contextual information about the error. This is often the field or value that
     *  triggered the error.
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
     * Some warning and error messages return one or more variables that contain
     *  contextual information about the error. This is often the field or value that
     *  triggered the error.
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
     * Some warning and error messages return one or more variables that contain
     *  contextual information about the error. This is often the field or value that
     *  triggered the error.
     *
     * @return \Nogrod\eBaySDK\FileTransfer\ErrorParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * Some warning and error messages return one or more variables that contain
     *  contextual information about the error. This is often the field or value that
     *  triggered the error.
     *
     * @param \Nogrod\eBaySDK\FileTransfer\ErrorParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getErrorId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}errorId", $value);
        }
        $value = $this->getDomain();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}domain", $value);
        }
        $value = $this->getSeverity();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}severity", $value);
        }
        $value = $this->getCategory();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}category", $value);
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}message", $value);
        }
        $value = $this->getSubdomain();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}subdomain", $value);
        }
        $value = $this->getExceptionId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}exceptionId", $value);
        }
        $value = $this->getParameter();
        if (null !== $value && !empty($this->getParameter())) {
            $writer->write(array_map(function ($v) {
                return ["parameter" => $v];
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}errorId');
        if (null !== $value) {
            $this->setErrorId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}domain');
        if (null !== $value) {
            $this->setDomain($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}severity');
        if (null !== $value) {
            $this->setSeverity($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}category');
        if (null !== $value) {
            $this->setCategory($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}message');
        if (null !== $value) {
            $this->setMessage($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}subdomain');
        if (null !== $value) {
            $this->setSubdomain($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}exceptionId');
        if (null !== $value) {
            $this->setExceptionId($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}parameter', true);
        if (null !== $value && !empty($value)) {
            $this->setParameter(array_map(function ($v) {
                return \Nogrod\eBaySDK\FileTransfer\ErrorParameterType::fromKeyValue($v);
            }, $value));
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
