<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ValidateChallengeInputResponseType
 *
 * Base response of the <b>ValidateChallengeInput</b> call. The response indicates whether the botblock challenge was successful.
 * XSD Type: ValidateChallengeInputResponseType
 */
class ValidateChallengeInputResponseType extends AbstractResponseType
{
    /**
     * Indicates whether the token is valid.
     *
     * @var bool $validToken
     */
    private $validToken = null;

    /**
     * Gets as validToken
     *
     * Indicates whether the token is valid.
     *
     * @return bool
     */
    public function getValidToken()
    {
        return $this->validToken;
    }

    /**
     * Sets a new validToken
     *
     * Indicates whether the token is valid.
     *
     * @param bool $validToken
     * @return self
     */
    public function setValidToken($validToken)
    {
        $this->validToken = $validToken;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getValidToken();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ValidToken", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ValidToken');
        if (null !== $value) {
            $this->setValidToken(filter_var($value, FILTER_VALIDATE_BOOLEAN));
        }
    }
}
