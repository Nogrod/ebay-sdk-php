<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing URLDetailsType
 *
 * This type is used by the <b>URLDetails</b> containers that are returned in the response of <b>GeteBayDetails</b> if the <code>URLDetails</code> value is used in the <b>DetailName</b> field of the call request. Each <b>URLDetails</b> container conists of the URL of the different eBay pages, such as the View Item URL, the eBay Store URL, and others.
 * XSD Type: URLDetailsType
 */
class URLDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This enumeration value indicates the type of eBay page.
     *
     * @var string $uRLType
     */
    private $uRLType = null;

    /**
     * A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL)
     *  to launch eBay Web site pages in a browser.<br><br>
     *  Logo URLs are required to be used in certain types of applications.
     *  See your API license agreement. Also see this page for logo usage rules:<br>
     *  http://developer.ebay.com/join/licenses/apilogousage
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @var string $detailVersion
     */
    private $detailVersion = null;

    /**
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @var \DateTime $updateTime
     */
    private $updateTime = null;

    /**
     * Gets as uRLType
     *
     * This enumeration value indicates the type of eBay page.
     *
     * @return string
     */
    public function getURLType()
    {
        return $this->uRLType;
    }

    /**
     * Sets a new uRLType
     *
     * This enumeration value indicates the type of eBay page.
     *
     * @param string $uRLType
     * @return self
     */
    public function setURLType($uRLType)
    {
        $this->uRLType = $uRLType;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL)
     *  to launch eBay Web site pages in a browser.<br><br>
     *  Logo URLs are required to be used in certain types of applications.
     *  See your API license agreement. Also see this page for logo usage rules:<br>
     *  http://developer.ebay.com/join/licenses/apilogousage
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * A commonly used eBay URL. Applications use some of these URLs (such as the View Item URL)
     *  to launch eBay Web site pages in a browser.<br><br>
     *  Logo URLs are required to be used in certain types of applications.
     *  See your API license agreement. Also see this page for logo usage rules:<br>
     *  http://developer.ebay.com/join/licenses/apilogousage
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @return string
     */
    public function getDetailVersion()
    {
        return $this->detailVersion;
    }

    /**
     * Sets a new detailVersion
     *
     * Returns the latest version number for this field. The version can be
     *  used to determine if and when to refresh cached client data.
     *
     * @param string $detailVersion
     * @return self
     */
    public function setDetailVersion($detailVersion)
    {
        $this->detailVersion = $detailVersion;
        return $this;
    }

    /**
     * Gets as updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * Sets a new updateTime
     *
     * Gives the time in GMT that the feature flags for the details were last
     *  updated. This timestamp can be used to determine if and when to refresh
     *  cached client data.
     *
     * @param \DateTime $updateTime
     * @return self
     */
    public function setUpdateTime(\DateTime $updateTime)
    {
        $this->updateTime = $updateTime;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getURLType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URLType", $value);
        }
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
        }
        $value = $this->getDetailVersion();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailVersion", $value);
        }
        $value = $this->getUpdateTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UpdateTime", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URLType');
        if (null !== $value) {
            $this->setURLType($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
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
