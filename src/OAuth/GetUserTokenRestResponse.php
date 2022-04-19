<?php

namespace Nogrod\eBaySDK\OAuth;

class GetUserTokenRestResponse extends BaseType
{
    use StatusCodeTrait;

    private $accessToken;

    private $tokenType;

    private $expiresIn;

    private $refreshToken;

    private $refreshTokenExpiresIn;

    private $error;

    private $errorDescription;

    private $errorUri;

    public function __construct($statusCode = 200)
    {
        $this->statusCode = (int)$statusCode;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken): void
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     */
    public function setTokenType($tokenType): void
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return string
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @param string $expiresIn
     */
    public function setExpiresIn($expiresIn): void
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken($refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return string
     */
    public function getRefreshTokenExpiresIn()
    {
        return $this->refreshTokenExpiresIn;
    }

    /**
     * @param string $refreshTokenExpiresIn
     */
    public function setRefreshTokenExpiresIn($refreshTokenExpiresIn): void
    {
        $this->refreshTokenExpiresIn = $refreshTokenExpiresIn;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $error
     */
    public function setError($error): void
    {
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @param string $errorDescription
     */
    public function setErrorDescription($errorDescription): void
    {
        $this->errorDescription = $errorDescription;
    }

    /**
     * @return string
     */
    public function getErrorUri()
    {
        return $this->errorUri;
    }

    /**
     * @param string $errorUri
     */
    public function setErrorUri($errorUri): void
    {
        $this->errorUri = $errorUri;
    }
}
