<?php

namespace Nogrod\eBaySDK\OAuth;

trait StatusCodeTrait
{
    /**
     * @var int
     */
    private $statusCode;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
