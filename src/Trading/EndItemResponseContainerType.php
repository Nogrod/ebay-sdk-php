<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndItemResponseContainerType
 *
 * This type includes the acknowledgement of the date and time when an eBay listing was ended due to the call to <b>EndItems</b>.
 * XSD Type: EndItemResponseContainerType
 */
class EndItemResponseContainerType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
     * @var \Nogrod\eBaySDK\Trading\ErrorType[] $errors
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
     * @param \Nogrod\eBaySDK\Trading\ErrorType $errors
     */
    public function addToErrors(\Nogrod\eBaySDK\Trading\ErrorType $errors)
    {
        if (!is_array($this->errors)) {
            throw new \LogicException('errors is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<\Nogrod\eBaySDK\Trading\ErrorType>
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
     * @param iterable<\Nogrod\eBaySDK\Trading\ErrorType> $errors
     * @return self
     */
    public function setErrors(iterable $errors)
    {
        $this->errors = $errors;
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
        $value = $this->endTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EndTime', null, Func::formatDateTime($value));
        }
        $value = $this->correlationID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CorrelationID', null, (string) $value);
        }
        $value = $this->errors;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'Errors', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\EndItemResponseContainerType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->errors = [];
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
                case 'EndTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->endTime = new \DateTime($value);
                    }
                    return true;
                case 'CorrelationID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->correlationID = $value;
                    }
                    return true;
                case 'Errors':
                    $this->errors[] = \Nogrod\eBaySDK\Trading\ErrorType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['EndTime'] = Func::jsonDate($this->endTime);
        $data['CorrelationID'] = $this->correlationID;
        $data['Errors'] = Func::jsonList($this->errors);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
