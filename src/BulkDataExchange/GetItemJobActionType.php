<?php

namespace Nogrod\eBaySDK\BulkDataExchange;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetItemJobActionType
 *
 * Reserved for internal or future use.
 * XSD Type: GetItemJobActionType
 */
class GetItemJobActionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Reserved for internal or future use.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * Reserved for internal or future use.
     *
     * @var string $jobId
     */
    private $jobId = null;

    /**
     * Gets as action
     *
     * Reserved for internal or future use.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Reserved for internal or future use.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as jobId
     *
     * Reserved for internal or future use.
     *
     * @return string
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Sets a new jobId
     *
     * Reserved for internal or future use.
     *
     * @param string $jobId
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/services");
        $value = $this->getAction();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}action", $value);
        }
        $value = $this->getJobId();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/services}jobId", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}action');
        if (null !== $value) {
            $this->setAction($value);
        }
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/services}jobId');
        if (null !== $value) {
            $this->setJobId($value);
        }
    }
}
