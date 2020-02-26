<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing FetchTokenResponseType
 *
 * Includes the authentication token for the user and the date it expires.
 * XSD Type: FetchTokenResponseType
 */
class FetchTokenResponseType extends AbstractResponseType
{

    /**
     * The authentication token for the user.
     *
     * @var string $eBayAuthToken
     */
    private $eBayAuthToken = null;

    /**
     * Date and time at which the token returned in eBayAuthToken expires
     *  and can no longer be used to authenticate the user for that application.
     *
     * @var \DateTime $hardExpirationTime
     */
    private $hardExpirationTime = null;

    /**
     * The REST authentication token for the user.
     *
     * @var string $rESTToken
     */
    private $rESTToken = null;

    /**
     * Gets as eBayAuthToken
     *
     * The authentication token for the user.
     *
     * @return string
     */
    public function getEBayAuthToken()
    {
        return $this->eBayAuthToken;
    }

    /**
     * Sets a new eBayAuthToken
     *
     * The authentication token for the user.
     *
     * @param string $eBayAuthToken
     * @return self
     */
    public function setEBayAuthToken($eBayAuthToken)
    {
        $this->eBayAuthToken = $eBayAuthToken;
        return $this;
    }

    /**
     * Gets as hardExpirationTime
     *
     * Date and time at which the token returned in eBayAuthToken expires
     *  and can no longer be used to authenticate the user for that application.
     *
     * @return \DateTime
     */
    public function getHardExpirationTime()
    {
        return $this->hardExpirationTime;
    }

    /**
     * Sets a new hardExpirationTime
     *
     * Date and time at which the token returned in eBayAuthToken expires
     *  and can no longer be used to authenticate the user for that application.
     *
     * @param \DateTime $hardExpirationTime
     * @return self
     */
    public function setHardExpirationTime(\DateTime $hardExpirationTime)
    {
        $this->hardExpirationTime = $hardExpirationTime;
        return $this;
    }

    /**
     * Gets as rESTToken
     *
     * The REST authentication token for the user.
     *
     * @return string
     */
    public function getRESTToken()
    {
        return $this->rESTToken;
    }

    /**
     * Sets a new rESTToken
     *
     * The REST authentication token for the user.
     *
     * @param string $rESTToken
     * @return self
     */
    public function setRESTToken($rESTToken)
    {
        $this->rESTToken = $rESTToken;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getEBayAuthToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}eBayAuthToken", $value);
        }
        $value = $this->getHardExpirationTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}HardExpirationTime", $value);
        }
        $value = $this->getRESTToken();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}RESTToken", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}eBayAuthToken');
        if (null !== $value) {
            $this->setEBayAuthToken($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}HardExpirationTime');
        if (null !== $value) {
            $this->setHardExpirationTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RESTToken');
        if (null !== $value) {
            $this->setRESTToken($value);
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
