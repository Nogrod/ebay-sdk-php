<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RecoupmentPolicyDetailsType
 *
 * Details the recoupment policy on this site. There are two sites involved in recoupment - the listing site
 *  and the user registration site, each of which must agree before eBay enforces recoupment for a seller and listing.
 * XSD Type: RecoupmentPolicyDetailsType
 */
class RecoupmentPolicyDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Indicates whether recoupment policy is enforced on the site on which the item is listed.
     *
     * @var bool $enforcedOnListingSite
     */
    private $enforcedOnListingSite = null;

    /**
     * Indicates whether recoupment policy is enforced on the registration site for which the call is made.
     *
     * @var bool $enforcedOnRegistrationSite
     */
    private $enforcedOnRegistrationSite = null;

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
     * Gets as enforcedOnListingSite
     *
     * Indicates whether recoupment policy is enforced on the site on which the item is listed.
     *
     * @return bool
     */
    public function getEnforcedOnListingSite()
    {
        return $this->enforcedOnListingSite;
    }

    /**
     * Sets a new enforcedOnListingSite
     *
     * Indicates whether recoupment policy is enforced on the site on which the item is listed.
     *
     * @param bool $enforcedOnListingSite
     * @return self
     */
    public function setEnforcedOnListingSite($enforcedOnListingSite)
    {
        $this->enforcedOnListingSite = $enforcedOnListingSite;
        return $this;
    }

    /**
     * Gets as enforcedOnRegistrationSite
     *
     * Indicates whether recoupment policy is enforced on the registration site for which the call is made.
     *
     * @return bool
     */
    public function getEnforcedOnRegistrationSite()
    {
        return $this->enforcedOnRegistrationSite;
    }

    /**
     * Sets a new enforcedOnRegistrationSite
     *
     * Indicates whether recoupment policy is enforced on the registration site for which the call is made.
     *
     * @param bool $enforcedOnRegistrationSite
     * @return self
     */
    public function setEnforcedOnRegistrationSite($enforcedOnRegistrationSite)
    {
        $this->enforcedOnRegistrationSite = $enforcedOnRegistrationSite;
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getEnforcedOnListingSite();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EnforcedOnListingSite", $value);
        }
        $value = $this->getEnforcedOnRegistrationSite();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EnforcedOnRegistrationSite", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EnforcedOnListingSite');
        if (null !== $value) {
            $this->setEnforcedOnListingSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EnforcedOnRegistrationSite');
        if (null !== $value) {
            $this->setEnforcedOnRegistrationSite($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailVersion');
        if (null !== $value) {
            $this->setDetailVersion($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UpdateTime');
        if (null !== $value) {
            $this->setUpdateTime(new \DateTime($value));
        }
    }
}
