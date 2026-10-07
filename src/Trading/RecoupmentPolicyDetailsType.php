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
class RecoupmentPolicyDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->enforcedOnListingSite;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EnforcedOnListingSite', null, ($value ? 'true' : 'false'));
        }
        $value = $this->enforcedOnRegistrationSite;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EnforcedOnRegistrationSite', null, ($value ? 'true' : 'false'));
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RecoupmentPolicyDetailsType
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
                case 'EnforcedOnListingSite':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->enforcedOnListingSite = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'EnforcedOnRegistrationSite':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->enforcedOnRegistrationSite = filter_var($value, FILTER_VALIDATE_BOOLEAN);
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

    protected function jsonProperties(): array
    {
        $data = [];
        $data['EnforcedOnListingSite'] = $this->enforcedOnListingSite;
        $data['EnforcedOnRegistrationSite'] = $this->enforcedOnRegistrationSite;
        $data['DetailVersion'] = $this->detailVersion;
        $data['UpdateTime'] = Func::jsonDate($this->updateTime);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
