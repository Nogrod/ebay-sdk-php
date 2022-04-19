<?php

namespace Nogrod\eBaySDK\OAuth;

class GetAppTokenRestRequest extends BaseType
{
    private $grantType;

    private $redirectUri;

    private $scope;

    /**
     * @return string
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @param string $grantType
     */
    public function setGrantType($grantType): void
    {
        $this->grantType = $grantType;
    }

    /**
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     */
    public function setRedirectUri($redirectUri): void
    {
        $this->redirectUri = $redirectUri;
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope($scope): void
    {
        $this->scope = $scope;
    }
}
