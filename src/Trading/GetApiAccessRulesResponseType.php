<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetApiAccessRulesResponseType
 *
 * Responds to a call to GetApiAccessRules.
 * XSD Type: GetApiAccessRulesResponseType
 */
class GetApiAccessRulesResponseType extends AbstractResponseType
{
    /**
     * Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     *
     * @var \Nogrod\eBaySDK\Trading\ApiAccessRuleType[] $apiAccessRule
     */
    private $apiAccessRule = [

    ];

    /**
     * Adds as apiAccessRule
     *
     * Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ApiAccessRuleType $apiAccessRule
     */
    public function addToApiAccessRule(\Nogrod\eBaySDK\Trading\ApiAccessRuleType $apiAccessRule)
    {
        $this->apiAccessRule[] = $apiAccessRule;
        return $this;
    }

    /**
     * isset apiAccessRule
     *
     * Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApiAccessRule($index)
    {
        return isset($this->apiAccessRule[$index]);
    }

    /**
     * unset apiAccessRule
     *
     * Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApiAccessRule($index)
    {
        unset($this->apiAccessRule[$index]);
    }

    /**
     * Gets as apiAccessRule
     *
     * Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     *
     * @return \Nogrod\eBaySDK\Trading\ApiAccessRuleType[]
     */
    public function getApiAccessRule()
    {
        return $this->apiAccessRule;
    }

    /**
     * Sets a new apiAccessRule
     *
     * Each returned <b>ApiAccessRule</b> container includes the application's current daily, hourly, and periodic usage of a call, and the maximum amount of times that the application can make that call during the given period.
     *
     * @param \Nogrod\eBaySDK\Trading\ApiAccessRuleType[] $apiAccessRule
     * @return self
     */
    public function setApiAccessRule(array $apiAccessRule)
    {
        $this->apiAccessRule = $apiAccessRule;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getApiAccessRule();
        if (null !== $value && !empty($this->getApiAccessRule())) {
            $writer->write(array_map(function ($v) {
                return ["ApiAccessRule" => $v];
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ApiAccessRule', true);
        if (null !== $value && !empty($value)) {
            $this->setApiAccessRule(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ApiAccessRuleType::fromKeyValue($v);
            }, $value));
        }
    }
}
