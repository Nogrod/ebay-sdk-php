<?php
namespace Nogrod\eBaySDK\OAuth;

class RefreshUserTokenRestRequest extends BaseType
{
    private $grantType;

    private $refreshToken;

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
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param mixed $refreshToken
     */
    public function setRefreshToken($refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return array
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @param array $scope
     */
    public function setScope($scope): void
    {
        $this->scope = $scope;
    }
}
