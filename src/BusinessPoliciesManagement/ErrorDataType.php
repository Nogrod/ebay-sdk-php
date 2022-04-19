<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ErrorDataType
 *
 * Documentation goes here
 * XSD Type: ErrorData
 */
class ErrorDataType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var int $errorId
     */
    private $errorId = null;

    /**
     * @var string $domain
     */
    private $domain = null;

    /**
     * @var string $subdomain
     */
    private $subdomain = null;

    /**
     * @var string $severity
     */
    private $severity = null;

    /**
     * @var string $category
     */
    private $category = null;

    /**
     * @var string $message
     */
    private $message = null;

    /**
     * @var string $exceptionId
     */
    private $exceptionId = null;

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorParameterType[] $parameter
     */
    private $parameter = [

    ];

    /**
     * Gets as errorId
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
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Sets a new domain
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
     * Gets as subdomain
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
     * @param string $subdomain
     * @return self
     */
    public function setSubdomain($subdomain)
    {
        $this->subdomain = $subdomain;
        return $this;
    }

    /**
     * Gets as severity
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
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
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
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
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
     * Gets as exceptionId
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
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorParameterType $parameter
     */
    public function addToParameter(\Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorParameterType $parameter)
    {
        $this->parameter[] = $parameter;
        return $this;
    }

    /**
     * isset parameter
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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorParameterType[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Sets a new parameter
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorParameterType[] $parameter
     * @return self
     */
    public function setParameter(array $parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/selling/v1/services");
        $value = $this->getErrorId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}errorId", $value);
        }
        $value = $this->getDomain();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}domain", $value);
        }
        $value = $this->getSubdomain();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}subdomain", $value);
        }
        $value = $this->getSeverity();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}severity", $value);
        }
        $value = $this->getCategory();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}category", $value);
        }
        $value = $this->getMessage();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}message", $value);
        }
        $value = $this->getExceptionId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/selling/v1/services}exceptionId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}errorId');
        if (null !== $value) {
            $this->setErrorId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}domain');
        if (null !== $value) {
            $this->setDomain($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}subdomain');
        if (null !== $value) {
            $this->setSubdomain($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}severity');
        if (null !== $value) {
            $this->setSeverity($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}category');
        if (null !== $value) {
            $this->setCategory($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}message');
        if (null !== $value) {
            $this->setMessage($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}exceptionId');
        if (null !== $value) {
            $this->setExceptionId($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}parameter', true);
        if (null !== $value && !empty($value)) {
            $this->setParameter(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\ErrorParameterType::fromKeyValue($v);
            }, $value));
        }
    }
}
