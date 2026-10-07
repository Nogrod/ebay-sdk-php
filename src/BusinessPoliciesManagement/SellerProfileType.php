<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerProfileType
 *
 * This type defines the common elements used by all business policies.
 * XSD Type: SellerProfile
 */
class SellerProfileType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This value is for future use.
     *
     * @var bool $forceDuplicate
     */
    private $forceDuplicate = null;

    /**
     * This string value indicates the name of the business policy. This policy name must be unique among all of seller's business policies. A <b>profileName</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls.
     *
     * @var string $profileName
     */
    private $profileName = null;

    /**
     * The unique identifier of a business policy. This value is created by eBay when a business policy is created (on the site or through the API). A <b>profileId</b> value is required when using the <b>setSellerProfile</b> and <b>removeSellerProfile</b> calls. It can be used as a filter in a <b>getSellerProfiles</b> to identify a specific business policy to retrieve. This field is always returned with all Business Policies Management calls.
     *  <br><br>
     *  A <b>profileId</b> value returned in the response of an <b>addSellerProfile</b> call indicates that the business policy was successfully created.
     *
     * @var int $profileId
     */
    private $profileId = null;

    /**
     * This field indicates the type of the business policy. A <b>profileType</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. It can be used as a filter in a <b>getSellerProfiles</b> call to identify and retrieve business policies of a specific type.
     *
     * @var string $profileType
     */
    private $profileType = null;

    /**
     * This field is for internal use only.
     *
     * @var int $profileVersion
     */
    private $profileVersion = null;

    /**
     * This field is used by the seller to provide a description of the business policy. The <b>profileDesc</b> field is optional in the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. This field is only returned for a business policy if a description exists for that policy.
     *
     * @var string $profileDesc
     */
    private $profileDesc = null;

    /**
     * This timestamp indicates when a business policy was deleted. This field is only returned in <b>getSellerProfiles</b> for business policies that have been deleted. For business policies that have been deleted by the seller, <b>deletedDate</b> is the only field that will be returned for the matching policy (in addition to the identifying fields like <b>profileId</b> and <b>profileName</b>).
     *
     * @var \DateTime $deletedDate
     */
    private $deletedDate = null;

    /**
     * Unique identifier of the eBay site. This value is always returned in the <b>getSellerProfiles</b> call. It is optional in the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. If it is not used in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, the <b>siteId</b> value defaults to the seller's eBay registration site.
     *
     * @var int $siteId
     */
    private $siteId = null;

    /**
     * This container consists of one or more <b>categoryGroup</b> containers. One or more category groups are linked to each business policy.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType[] $categoryGroups
     */
    private $categoryGroups = null;

    /**
     * Gets as forceDuplicate
     *
     * This value is for future use.
     *
     * @return bool
     */
    public function getForceDuplicate()
    {
        return $this->forceDuplicate;
    }

    /**
     * Sets a new forceDuplicate
     *
     * This value is for future use.
     *
     * @param bool $forceDuplicate
     * @return self
     */
    public function setForceDuplicate($forceDuplicate)
    {
        $this->forceDuplicate = $forceDuplicate;
        return $this;
    }

    /**
     * Gets as profileName
     *
     * This string value indicates the name of the business policy. This policy name must be unique among all of seller's business policies. A <b>profileName</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls.
     *
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName;
    }

    /**
     * Sets a new profileName
     *
     * This string value indicates the name of the business policy. This policy name must be unique among all of seller's business policies. A <b>profileName</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls.
     *
     * @param string $profileName
     * @return self
     */
    public function setProfileName($profileName)
    {
        $this->profileName = $profileName;
        return $this;
    }

    /**
     * Gets as profileId
     *
     * The unique identifier of a business policy. This value is created by eBay when a business policy is created (on the site or through the API). A <b>profileId</b> value is required when using the <b>setSellerProfile</b> and <b>removeSellerProfile</b> calls. It can be used as a filter in a <b>getSellerProfiles</b> to identify a specific business policy to retrieve. This field is always returned with all Business Policies Management calls.
     *  <br><br>
     *  A <b>profileId</b> value returned in the response of an <b>addSellerProfile</b> call indicates that the business policy was successfully created.
     *
     * @return int
     */
    public function getProfileId()
    {
        return $this->profileId;
    }

    /**
     * Sets a new profileId
     *
     * The unique identifier of a business policy. This value is created by eBay when a business policy is created (on the site or through the API). A <b>profileId</b> value is required when using the <b>setSellerProfile</b> and <b>removeSellerProfile</b> calls. It can be used as a filter in a <b>getSellerProfiles</b> to identify a specific business policy to retrieve. This field is always returned with all Business Policies Management calls.
     *  <br><br>
     *  A <b>profileId</b> value returned in the response of an <b>addSellerProfile</b> call indicates that the business policy was successfully created.
     *
     * @param int $profileId
     * @return self
     */
    public function setProfileId($profileId)
    {
        $this->profileId = $profileId;
        return $this;
    }

    /**
     * Gets as profileType
     *
     * This field indicates the type of the business policy. A <b>profileType</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. It can be used as a filter in a <b>getSellerProfiles</b> call to identify and retrieve business policies of a specific type.
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * This field indicates the type of the business policy. A <b>profileType</b> value is required when using the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. It can be used as a filter in a <b>getSellerProfiles</b> call to identify and retrieve business policies of a specific type.
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }

    /**
     * Gets as profileVersion
     *
     * This field is for internal use only.
     *
     * @return int
     */
    public function getProfileVersion()
    {
        return $this->profileVersion;
    }

    /**
     * Sets a new profileVersion
     *
     * This field is for internal use only.
     *
     * @param int $profileVersion
     * @return self
     */
    public function setProfileVersion($profileVersion)
    {
        $this->profileVersion = $profileVersion;
        return $this;
    }

    /**
     * Gets as profileDesc
     *
     * This field is used by the seller to provide a description of the business policy. The <b>profileDesc</b> field is optional in the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. This field is only returned for a business policy if a description exists for that policy.
     *
     * @return string
     */
    public function getProfileDesc()
    {
        return $this->profileDesc;
    }

    /**
     * Sets a new profileDesc
     *
     * This field is used by the seller to provide a description of the business policy. The <b>profileDesc</b> field is optional in the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. This field is only returned for a business policy if a description exists for that policy.
     *
     * @param string $profileDesc
     * @return self
     */
    public function setProfileDesc($profileDesc)
    {
        $this->profileDesc = $profileDesc;
        return $this;
    }

    /**
     * Gets as deletedDate
     *
     * This timestamp indicates when a business policy was deleted. This field is only returned in <b>getSellerProfiles</b> for business policies that have been deleted. For business policies that have been deleted by the seller, <b>deletedDate</b> is the only field that will be returned for the matching policy (in addition to the identifying fields like <b>profileId</b> and <b>profileName</b>).
     *
     * @return \DateTime
     */
    public function getDeletedDate()
    {
        return $this->deletedDate;
    }

    /**
     * Sets a new deletedDate
     *
     * This timestamp indicates when a business policy was deleted. This field is only returned in <b>getSellerProfiles</b> for business policies that have been deleted. For business policies that have been deleted by the seller, <b>deletedDate</b> is the only field that will be returned for the matching policy (in addition to the identifying fields like <b>profileId</b> and <b>profileName</b>).
     *
     * @param \DateTime $deletedDate
     * @return self
     */
    public function setDeletedDate(\DateTime $deletedDate)
    {
        $this->deletedDate = $deletedDate;
        return $this;
    }

    /**
     * Gets as siteId
     *
     * Unique identifier of the eBay site. This value is always returned in the <b>getSellerProfiles</b> call. It is optional in the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. If it is not used in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, the <b>siteId</b> value defaults to the seller's eBay registration site.
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->siteId;
    }

    /**
     * Sets a new siteId
     *
     * Unique identifier of the eBay site. This value is always returned in the <b>getSellerProfiles</b> call. It is optional in the <b>addSellerProfile</b> and <b>setSellerProfile</b> calls. If it is not used in an <b>addSellerProfile</b> or <b>setSellerProfile</b> call, the <b>siteId</b> value defaults to the seller's eBay registration site.
     *
     * @param int $siteId
     * @return self
     */
    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        return $this;
    }

    /**
     * Adds as categoryGroup
     *
     * This container consists of one or more <b>categoryGroup</b> containers. One or more category groups are linked to each business policy.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType $categoryGroup
     */
    public function addToCategoryGroups(\Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType $categoryGroup)
    {
        if (!is_array($this->categoryGroups)) {
            throw new \LogicException('categoryGroups is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->categoryGroups[] = $categoryGroup;
        return $this;
    }

    /**
     * isset categoryGroups
     *
     * This container consists of one or more <b>categoryGroup</b> containers. One or more category groups are linked to each business policy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategoryGroups($index)
    {
        return isset($this->categoryGroups[$index]);
    }

    /**
     * unset categoryGroups
     *
     * This container consists of one or more <b>categoryGroup</b> containers. One or more category groups are linked to each business policy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategoryGroups($index)
    {
        unset($this->categoryGroups[$index]);
    }

    /**
     * Gets as categoryGroups
     *
     * This container consists of one or more <b>categoryGroup</b> containers. One or more category groups are linked to each business policy.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType>
     */
    public function getCategoryGroups()
    {
        return $this->categoryGroups;
    }

    /**
     * Sets a new categoryGroups
     *
     * This container consists of one or more <b>categoryGroup</b> containers. One or more category groups are linked to each business policy.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType> $categoryGroups
     * @return self
     */
    public function setCategoryGroups(iterable $categoryGroups)
    {
        $this->categoryGroups = $categoryGroups;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->forceDuplicate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'forceDuplicate', null, ($value ? 'true' : 'false'));
        }
        $value = $this->profileName;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileName', null, (string) $value);
        }
        $value = $this->profileId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileId', null, (string) $value);
        }
        $value = $this->profileType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileType', null, (string) $value);
        }
        $value = $this->profileVersion;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileVersion', null, (string) $value);
        }
        $value = $this->profileDesc;
        if (null !== $value) {
            $writer->writeElementNs(null, 'profileDesc', null, (string) $value);
        }
        $value = $this->deletedDate;
        if (null !== $value) {
            $writer->writeElementNs(null, 'deletedDate', null, Func::formatDateTime($value));
        }
        $value = $this->siteId;
        if (null !== $value) {
            $writer->writeElementNs(null, 'siteId', null, (string) $value);
        }
        $value = $this->categoryGroups;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'categoryGroups', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'categoryGroup', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->categoryGroups = [];
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'forceDuplicate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->forceDuplicate = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'profileName':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileName = $value;
                    }
                    return true;
                case 'profileId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileId = (int) $value;
                    }
                    return true;
                case 'profileType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileType = $value;
                    }
                    return true;
                case 'profileVersion':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileVersion = (int) $value;
                    }
                    return true;
                case 'profileDesc':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->profileDesc = $value;
                    }
                    return true;
                case 'deletedDate':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->deletedDate = new \DateTime($value);
                    }
                    return true;
                case 'siteId':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->siteId = (int) $value;
                    }
                    return true;
                case 'categoryGroups':
                    $this->categoryGroups = Func::readList($reader, 'categoryGroup', 'http://www.ebay.com/marketplace/selling/v1/services', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\BusinessPoliciesManagement\CategoryGroupType::xmlRead($reader));
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['forceDuplicate'] = $this->forceDuplicate;
        $data['profileName'] = $this->profileName;
        $data['profileId'] = $this->profileId;
        $data['profileType'] = $this->profileType;
        $data['profileVersion'] = $this->profileVersion;
        $data['profileDesc'] = $this->profileDesc;
        $data['deletedDate'] = Func::jsonDate($this->deletedDate);
        $data['siteId'] = $this->siteId;
        $data['categoryGroups'] = Func::jsonList($this->categoryGroups);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
