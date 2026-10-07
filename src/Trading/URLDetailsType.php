<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

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
     *  https://developer.ebay.com/join/licenses/apilogousage
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
     *  https://developer.ebay.com/join/licenses/apilogousage
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
     *  https://developer.ebay.com/join/licenses/apilogousage
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
        $value = $this->uRLType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'URLType', null, (string) $value);
        }
        $value = $this->uRL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'URL', null, (string) $value);
        }
        $value = $this->detailVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'DetailVersion', null, (string) $value);
        }
        $value = $this->updateTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'UpdateTime', null, Func::formatDateTime($value));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\URLDetailsType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'URLType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uRLType = $value;
                    }
                    return true;
                case 'URL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->uRL = $value;
                    }
                    return true;
                case 'DetailVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->detailVersion = $value;
                    }
                    return true;
                case 'UpdateTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->updateTime = new \DateTime($value);
                    }
                    return true;
            }
        }
        return false;
    }
}
