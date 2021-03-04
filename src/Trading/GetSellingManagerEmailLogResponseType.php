<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSellingManagerEmailLogResponseType
 *
 * Returns the log of emails not sent.
 * XSD Type: GetSellingManagerEmailLogResponseType
 */
class GetSellingManagerEmailLogResponseType extends AbstractResponseType
{
    /**
     * Email logs associated with this order.
     *
     * @var \Nogrod\eBaySDK\Trading\SellingManagerEmailLogType[] $emailLog
     */
    private $emailLog = [
        
    ];

    /**
     * Adds as emailLog
     *
     * Email logs associated with this order.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SellingManagerEmailLogType $emailLog
     */
    public function addToEmailLog(\Nogrod\eBaySDK\Trading\SellingManagerEmailLogType $emailLog)
    {
        $this->emailLog[] = $emailLog;
        return $this;
    }

    /**
     * isset emailLog
     *
     * Email logs associated with this order.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmailLog($index)
    {
        return isset($this->emailLog[$index]);
    }

    /**
     * unset emailLog
     *
     * Email logs associated with this order.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmailLog($index)
    {
        unset($this->emailLog[$index]);
    }

    /**
     * Gets as emailLog
     *
     * Email logs associated with this order.
     *
     * @return \Nogrod\eBaySDK\Trading\SellingManagerEmailLogType[]
     */
    public function getEmailLog()
    {
        return $this->emailLog;
    }

    /**
     * Sets a new emailLog
     *
     * Email logs associated with this order.
     *
     * @param \Nogrod\eBaySDK\Trading\SellingManagerEmailLogType[] $emailLog
     * @return self
     */
    public function setEmailLog(array $emailLog)
    {
        $this->emailLog = $emailLog;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getEmailLog();
        if (null !== $value && !empty($this->getEmailLog())) {
            $writer->write(array_map(function ($v) {
                return ["EmailLog" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailLog', true);
        if (null !== $value && !empty($value)) {
            $this->setEmailLog(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\SellingManagerEmailLogType::fromKeyValue($v);
            }, $value));
        }
    }
}
