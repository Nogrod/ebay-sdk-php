<?php
namespace Nogrod\eBaySDK;

class Sdk
{
    const VERSION = '1.0.0';

    private $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function __call($name, array $args)
    {
        if (strpos($name, 'create') === 0) {
            return $this->createClient(
                substr($name, 6),
                isset($args[0]) ? $args[0] : []
            );
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    public function createClient($name, array $config = [])
    {
        $configuration = $this->config;
        if (isset($this->config[$name])) {
            $configuration = array_merge($configuration, $this->config[$name]);
        }
        $configuration = array_merge($configuration, $config);
        $service = "Nogrod\\eBaySDK\\{$name}\\Client\\{$name}Client";

        return new $service($configuration);
    }
}
