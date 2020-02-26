<?php
namespace Nogrod\eBaySDK\OAuth;

use ReflectionClass;

class BaseType
{
    public function toArray()
    {
        $array = [];
        $reflect = new ReflectionClass($this);
        $props = $reflect->getProperties();
        foreach ($props as $prop) {
            $prop->setAccessible(true);
            $array[$this->translateName($prop->getName())] = $prop->getValue($this);
        }

        return $array;
    }

    public function fromArray(array $array)
    {
        $reflect = new ReflectionClass($this);
        foreach ($array as $key => $item) {
            if (!($prop = $reflect->getProperty($this->camelize($key)))) {
                continue;
            }
            $prop->setAccessible(true);
            $prop->setValue($this, $item);
        }
    }

    protected function translateName(string $property, string $separator = '_', bool $lowerCase = true): string
    {
        $name = preg_replace('/[A-Z]+/', $separator.'\\0', $property);

        if ($lowerCase) {
            return strtolower($name);
        }

        return ucfirst($name);
    }

    protected function camelize(string $input, string $separator = '_'): string
    {
        return str_replace($separator, '', lcfirst(ucwords($input, $separator)));
    }
}
