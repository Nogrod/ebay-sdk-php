<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement\Client;

/**
 * Class representing SellerProfilesManagementServicePort
 */
class SellerProfilesManagementBaseClient extends \Nogrod\XMLClientRuntime\Client
{
    /**
     * Call getVersion
     *
     *  				Documentation goes here.
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\GetVersionRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\GetVersionResponse
     */
    public function getVersion(\Nogrod\eBaySDK\BusinessPoliciesManagement\GetVersionRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetVersionResponse
    {
        return $this->call('getVersion', 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetVersionResponse', $params);
    }

    /**
     * Call removeProfile
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileResponse
     */
    public function removeProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileResponse
    {
        return $this->call('removeProfile', 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveProfileResponse', $params);
    }

    /**
     * Call addSellerProfile
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileResponse
     */
    public function addSellerProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileResponse
    {
        return $this->call('addSellerProfile', 'Nogrod\eBaySDK\BusinessPoliciesManagement\AddSellerProfileResponse', $params);
    }

    /**
     * Call getSellerProfiles
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesResponse
     */
    public function getSellerProfiles(\Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesResponse
    {
        return $this->call('getSellerProfiles', 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetSellerProfilesResponse', $params);
    }

    /**
     * Call setSellerProfile
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileResponse
     */
    public function setSellerProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileResponse
    {
        return $this->call('setSellerProfile', 'Nogrod\eBaySDK\BusinessPoliciesManagement\SetSellerProfileResponse', $params);
    }

    /**
     * Call removeSellerProfiles
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesResponse
     */
    public function removeSellerProfiles(\Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesResponse
    {
        return $this->call('removeSellerProfiles', 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesResponse', $params);
    }

    /**
     * Call consolidateShippingProfiles
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesResponse
     */
    public function consolidateShippingProfiles(\Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesResponse
    {
        return $this->call('consolidateShippingProfiles', 'Nogrod\eBaySDK\BusinessPoliciesManagement\ConsolidateShippingProfilesResponse', $params);
    }

    /**
     * Call getConsolidationJobStatus
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusResponse
     */
    public function getConsolidationJobStatus(\Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusResponse
    {
        return $this->call('getConsolidationJobStatus', 'Nogrod\eBaySDK\BusinessPoliciesManagement\GetConsolidationJobStatusResponse', $params);
    }

    /**
     * Call removeOverrides
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesRequest $params
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesResponse
     */
    public function removeOverrides(\Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesRequest $params): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesResponse
    {
        return $this->call('removeOverrides', 'Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveOverridesResponse', $params);
    }

    protected function getJmsMetaPath()
    {
        return [
            'Nogrod\eBaySDK\BusinessPoliciesManagement' => __DIR__.'/../../../metadata/BusinessPoliciesManagement',
        ];
    }

    protected function getSabre()
    {
        $service = new \Sabre\Xml\Service();
        $service->classMap = BusinessPoliciesManagementClassMap::Get();
        $service->elementMap = BusinessPoliciesManagementClassMap::GetElements();
        $service->namespaceMap = BusinessPoliciesManagementClassMap::GetNamespaces();
        return $service;
    }
}
