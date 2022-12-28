<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSessionIDRequestType
 *
 * Retrieves a session ID that identifies a user and your application when you make a <b>FetchToken</b> request.
 * XSD Type: GetSessionIDRequestType
 */
class GetSessionIDRequestType extends AbstractRequestType
{
    /**
     * The eBay Registered URL must be specified in this field. An eBay Registered URL is created and associated with a developer's Sandbox or Production key set by logging into the user's developer account on <b>developer.ebay.com</b> and going to the <b>User Tokens</b> page. The <b>RuName</b> value passed in this field must match the one specified for the specific Sandbox or Production key set being used to make the <b>GetSessionID</b> call. For more information on adding and registering your <b class="con">RuName</b>, see the <a href="../../HowTo/Tokens/GettingTokens.html#step1">Setting Up an Application to Receive Tokens</a> tutorial.
     *
     * @var string $ruName
     */
    private $ruName = null;

    /**
     * Gets as ruName
     *
     * The eBay Registered URL must be specified in this field. An eBay Registered URL is created and associated with a developer's Sandbox or Production key set by logging into the user's developer account on <b>developer.ebay.com</b> and going to the <b>User Tokens</b> page. The <b>RuName</b> value passed in this field must match the one specified for the specific Sandbox or Production key set being used to make the <b>GetSessionID</b> call. For more information on adding and registering your <b class="con">RuName</b>, see the <a href="../../HowTo/Tokens/GettingTokens.html#step1">Setting Up an Application to Receive Tokens</a> tutorial.
     *
     * @return string
     */
    public function getRuName()
    {
        return $this->ruName;
    }

    /**
     * Sets a new ruName
     *
     * The eBay Registered URL must be specified in this field. An eBay Registered URL is created and associated with a developer's Sandbox or Production key set by logging into the user's developer account on <b>developer.ebay.com</b> and going to the <b>User Tokens</b> page. The <b>RuName</b> value passed in this field must match the one specified for the specific Sandbox or Production key set being used to make the <b>GetSessionID</b> call. For more information on adding and registering your <b class="con">RuName</b>, see the <a href="../../HowTo/Tokens/GettingTokens.html#step1">Setting Up an Application to Receive Tokens</a> tutorial.
     *
     * @param string $ruName
     * @return self
     */
    public function setRuName($ruName)
    {
        $this->ruName = $ruName;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getRuName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RuName", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RuName');
        if (null !== $value) {
            $this->setRuName($value);
        }
    }
}
