<?php

namespace Nogrod\eBaySDK\Tests;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * PSR-18 client that records the request and answers with a fixed response.
 */
final class FakeHttpClient implements ClientInterface
{
    public ?RequestInterface $request = null;

    public function __construct(
        private string $body,
        private string $contentType = 'text/xml;charset=utf-8',
        private int $status = 200,
    ) {
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $this->request = $request;

        return new Response($this->status, ['Content-Type' => $this->contentType], $this->body);
    }
}
