<?php
namespace Nogrod\eBaySDK\OAuth;

class GetUserTokenRestRequest extends BaseType
{
    private $grantType;

    private $redirectUri;

    private $code;

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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }
}
