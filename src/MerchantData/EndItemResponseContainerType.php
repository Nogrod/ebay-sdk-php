<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemResponseContainerType
 *
 * This type includes the acknowledgement of the date and time when an eBay listing was ended due to the call to <b>EndItems</b>.
 * XSD Type: EndItemResponseContainerType
 */
class EndItemResponseContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>EndItems</b>, the seller can pass in a different
     *  <b>MessageID</b> value for
     *  each <b>EndItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>EndItemResponseContainer</b> container is used to correlate each
     *  End Item request container with its corresponding End Item response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *  <br>
     *  <br>
     *  If you do not pass in a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @var \Nogrod\eBaySDK\MerchantData\ErrorType[] $errors
     */
    private $errors = [

    ];

    /**
     * Gets as endTime
     *
     * This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * This timestamp indicates the date and time (returned in GMT) when the specified eBay listing was ended.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>EndItems</b>, the seller can pass in a different
     *  <b>MessageID</b> value for
     *  each <b>EndItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>EndItemResponseContainer</b> container is used to correlate each
     *  End Item request container with its corresponding End Item response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *  <br>
     *  <br>
     *  If you do not pass in a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Most Trading API calls support a <b>MessageID</b> element in the request
     *  and a <b>CorrelationID</b> element in the response. With
     *  <b>EndItems</b>, the seller can pass in a different
     *  <b>MessageID</b> value for
     *  each <b>EndItemRequestContainer</b> container that is used in the request. The
     *  <b>CorrelationID</b> value returned under each
     *  <b>EndItemResponseContainer</b> container is used to correlate each
     *  End Item request container with its corresponding End Item response container. The same <b>MessageID</b> value that you pass into a request will
     *  be returned in the <b>CorrelationID</b> field in the response.
     *  <br>
     *  <br>
     *  If you do not pass in a <b>MessageID</b> value in the request,
     *  <b>CorrelationID</b> is not returned.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Adds as errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\MerchantData\ErrorType $errors)
    {
        $this->errors[] = $errors;
        return $this;
    }

    /**
     * isset errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @return \Nogrod\eBaySDK\MerchantData\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * A list of application-level errors or warnings (if any) that were raised
     *  when eBay processed the request. <br>
     *  <br>
     *  Application-level errors occur due to
     *  problems with business-level data on the client side or on the eBay
     *  server side. For example, an error would occur if the request contains
     *  an invalid combination of fields, or it is missing a required field,
     *  or the value of the field is not recognized. An error could also occur
     *  if eBay encountered a problem in our internal business logic while
     *  processing the request.<br>
     *  <br>
     *  Only returned if there were warnings or errors.
     *
     * @param \Nogrod\eBaySDK\MerchantData\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEndTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EndTime", $value);
        }
        $value = $this->getCorrelationID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CorrelationID", $value);
        }
        $value = $this->getErrors();
        if (null !== $value && !empty($this->getErrors())) {
            $writer->write(array_map(function ($v) {
                return ["Errors" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EndTime');
        if (null !== $value) {
            $this->setEndTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CorrelationID');
        if (null !== $value) {
            $this->setCorrelationID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Errors', true);
        if (null !== $value && !empty($value)) {
            $this->setErrors(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\ErrorType::fromKeyValue($v);
            }, $value));
        }
    }
}
