<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ApiAccessRuleType
 *
 * This type is used by the <b>ApiAccessRule</b> container that is returned in the <b>GetApiAccessRules</b> call response. An <b>ApiAccessRule</b> container will be returned for every Trading API call that the user/application has used. The <b>ApiAccessRule</b> container consists of hourly, daily, and periodic call limits for the call, the total number of times the call was used, and other information about usage of the call.
 * XSD Type: ApiAccessRuleType
 */
class ApiAccessRuleType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The value in this field can be the name of a Trading API call, or it can be <code>ApplicationAggregate</code> (returns totals for all calls),
     *  <code>PasswordAuthenticationLimiter</code> (dummy call), or <code>NonUTF8UsageLimiter</code>. All of the other data in the <b>ApiAccessRule</b> container will pertain to this call, including the call limits.
     *
     * @var string $callName
     */
    private $callName = null;

    /**
     * This boolean field will indicate whether or not the use of the call (indicated in <b>CallName</b> field) counts toward the application's
     *  aggregate limit for all calls.
     *
     * @var bool $countsTowardAggregate
     */
    private $countsTowardAggregate = null;

    /**
     * This value indicates the total number of calls per day that the application can make to this call before being blocked.
     *  The day starts at midnight, 00:00:00 PST (not GMT).
     *
     * @var int $dailyHardLimit
     */
    private $dailyHardLimit = null;

    /**
     * This value indicates the total number of calls per day that the application can make to this call before you receive a warning.
     *  The day starts at midnight, 00:00:00 PST.
     *
     * @var int $dailySoftLimit
     */
    private $dailySoftLimit = null;

    /**
     * This value indicates the number of times that the application has used this
     *  call today. The day starts at midnight, 00:00:00 PST.
     *
     * @var int $dailyUsage
     */
    private $dailyUsage = null;

    /**
     * This value indicates the total number of calls per hour that the application can make to this call before being blocked. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @var int $hourlyHardLimit
     */
    private $hourlyHardLimit = null;

    /**
     * This value indicates the total number of calls per hour that the application can make to this call before you receive a warning. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @var int $hourlySoftLimit
     */
    private $hourlySoftLimit = null;

    /**
     * This value indicates the number of times that the application has used this
     *  call during this hour. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @var int $hourlyUsage
     */
    private $hourlyUsage = null;

    /**
     * The length of time before your application's periodic usage counter restarts
     *  for this call. If the number of calls you make exceeds the periodic hard limit
     *  before the current period ends, further calls will be blocked until the next
     *  period starts. Possible values: -1 (Periodic limit not enforced, could be any
     *  negative integer), 0 (Calendar month), 30 (Number of days, could be any
     *  positive integer). If the period is based on the calendar month, the usage
     *  counters restart on the same day of every month, regardless of the number of
     *  days in the month.
     *
     * @var int $period
     */
    private $period = null;

    /**
     * This value indicates the number of calls per period that your application may make before a call is blocked, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     *
     * @var int $periodicHardLimit
     */
    private $periodicHardLimit = null;

    /**
     * This value indicates the number of calls per period that your application may make before receiving a warning, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     *
     * @var int $periodicSoftLimit
     */
    private $periodicSoftLimit = null;

    /**
     * This value indicates the number of times that the application has used this call during this period. <code>0</code> is returned if the periodic access rule has not been configured for the application. The length of the period is specified in <b>Period</b> field and the start date of the period is specified in <b>PeriodicStartDate</b> field.
     *
     * @var int $periodicUsage
     */
    private $periodicUsage = null;

    /**
     * This timestamp (in GMT) marks the date and time when the access rule's period started. The period starts at midnight Pacific time. For example, if the period begins on June 29 in 2005 when California is on Pacific Daylight Time, the GMT value returned would be 2005-06-29T07:00:00.000Z If the period begins on December 29 in 2005 when California is on Pacific Standard Time, the GMT value returned would be 2005-12-29T08:00:00.000Z. This field is only returned when the eBay Developers Program has configured the start date for the access rule. The start date can vary per application and per call name.
     *
     * @var \DateTime $periodicStartDate
     */
    private $periodicStartDate = null;

    /**
     * This timestamp marks the date and time when the access rule was last modified by eBay.
     *
     * @var \DateTime $modTime
     */
    private $modTime = null;

    /**
     * This enumeration value will only be returned if a hourly, daily, or periodic hard or soft call limit is exceeded by the application, or if call limits do not apply to the call.
     *
     * @var string $ruleCurrentStatus
     */
    private $ruleCurrentStatus = null;

    /**
     * This enumeration value will indicate whether the access rule is on or off, or if the application is currently being blocked due to exceeding a hard call limit.
     *
     * @var string $ruleStatus
     */
    private $ruleStatus = null;

    /**
     * Gets as callName
     *
     * The value in this field can be the name of a Trading API call, or it can be <code>ApplicationAggregate</code> (returns totals for all calls),
     *  <code>PasswordAuthenticationLimiter</code> (dummy call), or <code>NonUTF8UsageLimiter</code>. All of the other data in the <b>ApiAccessRule</b> container will pertain to this call, including the call limits.
     *
     * @return string
     */
    public function getCallName()
    {
        return $this->callName;
    }

    /**
     * Sets a new callName
     *
     * The value in this field can be the name of a Trading API call, or it can be <code>ApplicationAggregate</code> (returns totals for all calls),
     *  <code>PasswordAuthenticationLimiter</code> (dummy call), or <code>NonUTF8UsageLimiter</code>. All of the other data in the <b>ApiAccessRule</b> container will pertain to this call, including the call limits.
     *
     * @param string $callName
     * @return self
     */
    public function setCallName($callName)
    {
        $this->callName = $callName;
        return $this;
    }

    /**
     * Gets as countsTowardAggregate
     *
     * This boolean field will indicate whether or not the use of the call (indicated in <b>CallName</b> field) counts toward the application's
     *  aggregate limit for all calls.
     *
     * @return bool
     */
    public function getCountsTowardAggregate()
    {
        return $this->countsTowardAggregate;
    }

    /**
     * Sets a new countsTowardAggregate
     *
     * This boolean field will indicate whether or not the use of the call (indicated in <b>CallName</b> field) counts toward the application's
     *  aggregate limit for all calls.
     *
     * @param bool $countsTowardAggregate
     * @return self
     */
    public function setCountsTowardAggregate($countsTowardAggregate)
    {
        $this->countsTowardAggregate = $countsTowardAggregate;
        return $this;
    }

    /**
     * Gets as dailyHardLimit
     *
     * This value indicates the total number of calls per day that the application can make to this call before being blocked.
     *  The day starts at midnight, 00:00:00 PST (not GMT).
     *
     * @return int
     */
    public function getDailyHardLimit()
    {
        return $this->dailyHardLimit;
    }

    /**
     * Sets a new dailyHardLimit
     *
     * This value indicates the total number of calls per day that the application can make to this call before being blocked.
     *  The day starts at midnight, 00:00:00 PST (not GMT).
     *
     * @param int $dailyHardLimit
     * @return self
     */
    public function setDailyHardLimit($dailyHardLimit)
    {
        $this->dailyHardLimit = $dailyHardLimit;
        return $this;
    }

    /**
     * Gets as dailySoftLimit
     *
     * This value indicates the total number of calls per day that the application can make to this call before you receive a warning.
     *  The day starts at midnight, 00:00:00 PST.
     *
     * @return int
     */
    public function getDailySoftLimit()
    {
        return $this->dailySoftLimit;
    }

    /**
     * Sets a new dailySoftLimit
     *
     * This value indicates the total number of calls per day that the application can make to this call before you receive a warning.
     *  The day starts at midnight, 00:00:00 PST.
     *
     * @param int $dailySoftLimit
     * @return self
     */
    public function setDailySoftLimit($dailySoftLimit)
    {
        $this->dailySoftLimit = $dailySoftLimit;
        return $this;
    }

    /**
     * Gets as dailyUsage
     *
     * This value indicates the number of times that the application has used this
     *  call today. The day starts at midnight, 00:00:00 PST.
     *
     * @return int
     */
    public function getDailyUsage()
    {
        return $this->dailyUsage;
    }

    /**
     * Sets a new dailyUsage
     *
     * This value indicates the number of times that the application has used this
     *  call today. The day starts at midnight, 00:00:00 PST.
     *
     * @param int $dailyUsage
     * @return self
     */
    public function setDailyUsage($dailyUsage)
    {
        $this->dailyUsage = $dailyUsage;
        return $this;
    }

    /**
     * Gets as hourlyHardLimit
     *
     * This value indicates the total number of calls per hour that the application can make to this call before being blocked. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @return int
     */
    public function getHourlyHardLimit()
    {
        return $this->hourlyHardLimit;
    }

    /**
     * Sets a new hourlyHardLimit
     *
     * This value indicates the total number of calls per hour that the application can make to this call before being blocked. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @param int $hourlyHardLimit
     * @return self
     */
    public function setHourlyHardLimit($hourlyHardLimit)
    {
        $this->hourlyHardLimit = $hourlyHardLimit;
        return $this;
    }

    /**
     * Gets as hourlySoftLimit
     *
     * This value indicates the total number of calls per hour that the application can make to this call before you receive a warning. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @return int
     */
    public function getHourlySoftLimit()
    {
        return $this->hourlySoftLimit;
    }

    /**
     * Sets a new hourlySoftLimit
     *
     * This value indicates the total number of calls per hour that the application can make to this call before you receive a warning. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @param int $hourlySoftLimit
     * @return self
     */
    public function setHourlySoftLimit($hourlySoftLimit)
    {
        $this->hourlySoftLimit = $hourlySoftLimit;
        return $this;
    }

    /**
     * Gets as hourlyUsage
     *
     * This value indicates the number of times that the application has used this
     *  call during this hour. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @return int
     */
    public function getHourlyUsage()
    {
        return $this->hourlyUsage;
    }

    /**
     * Sets a new hourlyUsage
     *
     * This value indicates the number of times that the application has used this
     *  call during this hour. Each count begins at the top of each hour (e.g. 1:00:00).
     *
     * @param int $hourlyUsage
     * @return self
     */
    public function setHourlyUsage($hourlyUsage)
    {
        $this->hourlyUsage = $hourlyUsage;
        return $this;
    }

    /**
     * Gets as period
     *
     * The length of time before your application's periodic usage counter restarts
     *  for this call. If the number of calls you make exceeds the periodic hard limit
     *  before the current period ends, further calls will be blocked until the next
     *  period starts. Possible values: -1 (Periodic limit not enforced, could be any
     *  negative integer), 0 (Calendar month), 30 (Number of days, could be any
     *  positive integer). If the period is based on the calendar month, the usage
     *  counters restart on the same day of every month, regardless of the number of
     *  days in the month.
     *
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The length of time before your application's periodic usage counter restarts
     *  for this call. If the number of calls you make exceeds the periodic hard limit
     *  before the current period ends, further calls will be blocked until the next
     *  period starts. Possible values: -1 (Periodic limit not enforced, could be any
     *  negative integer), 0 (Calendar month), 30 (Number of days, could be any
     *  positive integer). If the period is based on the calendar month, the usage
     *  counters restart on the same day of every month, regardless of the number of
     *  days in the month.
     *
     * @param int $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as periodicHardLimit
     *
     * This value indicates the number of calls per period that your application may make before a call is blocked, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     *
     * @return int
     */
    public function getPeriodicHardLimit()
    {
        return $this->periodicHardLimit;
    }

    /**
     * Sets a new periodicHardLimit
     *
     * This value indicates the number of calls per period that your application may make before a call is blocked, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     *
     * @param int $periodicHardLimit
     * @return self
     */
    public function setPeriodicHardLimit($periodicHardLimit)
    {
        $this->periodicHardLimit = $periodicHardLimit;
        return $this;
    }

    /**
     * Gets as periodicSoftLimit
     *
     * This value indicates the number of calls per period that your application may make before receiving a warning, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     *
     * @return int
     */
    public function getPeriodicSoftLimit()
    {
        return $this->periodicSoftLimit;
    }

    /**
     * Sets a new periodicSoftLimit
     *
     * This value indicates the number of calls per period that your application may make before receiving a warning, if the periodic limit is enforced. The length of the period is specified in the <b>Period</b> field.
     *
     * @param int $periodicSoftLimit
     * @return self
     */
    public function setPeriodicSoftLimit($periodicSoftLimit)
    {
        $this->periodicSoftLimit = $periodicSoftLimit;
        return $this;
    }

    /**
     * Gets as periodicUsage
     *
     * This value indicates the number of times that the application has used this call during this period. <code>0</code> is returned if the periodic access rule has not been configured for the application. The length of the period is specified in <b>Period</b> field and the start date of the period is specified in <b>PeriodicStartDate</b> field.
     *
     * @return int
     */
    public function getPeriodicUsage()
    {
        return $this->periodicUsage;
    }

    /**
     * Sets a new periodicUsage
     *
     * This value indicates the number of times that the application has used this call during this period. <code>0</code> is returned if the periodic access rule has not been configured for the application. The length of the period is specified in <b>Period</b> field and the start date of the period is specified in <b>PeriodicStartDate</b> field.
     *
     * @param int $periodicUsage
     * @return self
     */
    public function setPeriodicUsage($periodicUsage)
    {
        $this->periodicUsage = $periodicUsage;
        return $this;
    }

    /**
     * Gets as periodicStartDate
     *
     * This timestamp (in GMT) marks the date and time when the access rule's period started. The period starts at midnight Pacific time. For example, if the period begins on June 29 in 2005 when California is on Pacific Daylight Time, the GMT value returned would be 2005-06-29T07:00:00.000Z If the period begins on December 29 in 2005 when California is on Pacific Standard Time, the GMT value returned would be 2005-12-29T08:00:00.000Z. This field is only returned when the eBay Developers Program has configured the start date for the access rule. The start date can vary per application and per call name.
     *
     * @return \DateTime
     */
    public function getPeriodicStartDate()
    {
        return $this->periodicStartDate;
    }

    /**
     * Sets a new periodicStartDate
     *
     * This timestamp (in GMT) marks the date and time when the access rule's period started. The period starts at midnight Pacific time. For example, if the period begins on June 29 in 2005 when California is on Pacific Daylight Time, the GMT value returned would be 2005-06-29T07:00:00.000Z If the period begins on December 29 in 2005 when California is on Pacific Standard Time, the GMT value returned would be 2005-12-29T08:00:00.000Z. This field is only returned when the eBay Developers Program has configured the start date for the access rule. The start date can vary per application and per call name.
     *
     * @param \DateTime $periodicStartDate
     * @return self
     */
    public function setPeriodicStartDate(\DateTime $periodicStartDate)
    {
        $this->periodicStartDate = $periodicStartDate;
        return $this;
    }

    /**
     * Gets as modTime
     *
     * This timestamp marks the date and time when the access rule was last modified by eBay.
     *
     * @return \DateTime
     */
    public function getModTime()
    {
        return $this->modTime;
    }

    /**
     * Sets a new modTime
     *
     * This timestamp marks the date and time when the access rule was last modified by eBay.
     *
     * @param \DateTime $modTime
     * @return self
     */
    public function setModTime(\DateTime $modTime)
    {
        $this->modTime = $modTime;
        return $this;
    }

    /**
     * Gets as ruleCurrentStatus
     *
     * This enumeration value will only be returned if a hourly, daily, or periodic hard or soft call limit is exceeded by the application, or if call limits do not apply to the call.
     *
     * @return string
     */
    public function getRuleCurrentStatus()
    {
        return $this->ruleCurrentStatus;
    }

    /**
     * Sets a new ruleCurrentStatus
     *
     * This enumeration value will only be returned if a hourly, daily, or periodic hard or soft call limit is exceeded by the application, or if call limits do not apply to the call.
     *
     * @param string $ruleCurrentStatus
     * @return self
     */
    public function setRuleCurrentStatus($ruleCurrentStatus)
    {
        $this->ruleCurrentStatus = $ruleCurrentStatus;
        return $this;
    }

    /**
     * Gets as ruleStatus
     *
     * This enumeration value will indicate whether the access rule is on or off, or if the application is currently being blocked due to exceeding a hard call limit.
     *
     * @return string
     */
    public function getRuleStatus()
    {
        return $this->ruleStatus;
    }

    /**
     * Sets a new ruleStatus
     *
     * This enumeration value will indicate whether the access rule is on or off, or if the application is currently being blocked due to exceeding a hard call limit.
     *
     * @param string $ruleStatus
     * @return self
     */
    public function setRuleStatus($ruleStatus)
    {
        $this->ruleStatus = $ruleStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCallName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CallName", $value);
        }
        $value = $this->getCountsTowardAggregate();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CountsTowardAggregate", $value);
        }
        $value = $this->getDailyHardLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DailyHardLimit", $value);
        }
        $value = $this->getDailySoftLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DailySoftLimit", $value);
        }
        $value = $this->getDailyUsage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DailyUsage", $value);
        }
        $value = $this->getHourlyHardLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HourlyHardLimit", $value);
        }
        $value = $this->getHourlySoftLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HourlySoftLimit", $value);
        }
        $value = $this->getHourlyUsage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HourlyUsage", $value);
        }
        $value = $this->getPeriod();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Period", $value);
        }
        $value = $this->getPeriodicHardLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PeriodicHardLimit", $value);
        }
        $value = $this->getPeriodicSoftLimit();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PeriodicSoftLimit", $value);
        }
        $value = $this->getPeriodicUsage();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PeriodicUsage", $value);
        }
        $value = $this->getPeriodicStartDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PeriodicStartDate", $value);
        }
        $value = $this->getModTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ModTime", $value);
        }
        $value = $this->getRuleCurrentStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RuleCurrentStatus", $value);
        }
        $value = $this->getRuleStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RuleStatus", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CallName');
        if (null !== $value) {
            $this->setCallName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CountsTowardAggregate');
        if (null !== $value) {
            $this->setCountsTowardAggregate($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DailyHardLimit');
        if (null !== $value) {
            $this->setDailyHardLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DailySoftLimit');
        if (null !== $value) {
            $this->setDailySoftLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DailyUsage');
        if (null !== $value) {
            $this->setDailyUsage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HourlyHardLimit');
        if (null !== $value) {
            $this->setHourlyHardLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HourlySoftLimit');
        if (null !== $value) {
            $this->setHourlySoftLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HourlyUsage');
        if (null !== $value) {
            $this->setHourlyUsage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Period');
        if (null !== $value) {
            $this->setPeriod($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PeriodicHardLimit');
        if (null !== $value) {
            $this->setPeriodicHardLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PeriodicSoftLimit');
        if (null !== $value) {
            $this->setPeriodicSoftLimit($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PeriodicUsage');
        if (null !== $value) {
            $this->setPeriodicUsage($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PeriodicStartDate');
        if (null !== $value) {
            $this->setPeriodicStartDate(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ModTime');
        if (null !== $value) {
            $this->setModTime(new \DateTime($value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RuleCurrentStatus');
        if (null !== $value) {
            $this->setRuleCurrentStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RuleStatus');
        if (null !== $value) {
            $this->setRuleStatus($value);
        }
    }
}
