<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing RequesterCredentials
 *
 * Authentication information for the user on whose behalf the
 *  application is making the request. Only registered eBay users are
 *  allowed to make API calls. To verify that a user is registered,
 *  your application needs to pass a user-specific value called an
 *  "authentication token" in the request. This is equivalent to
 *  signing in on the eBay Web site. As API calls do not pass session
 *  information, you need to pass the user's authentication token every
 *  time you invoke a call on their behalf. All calls require an
 *  authentication token, except the calls you use to retrieve a token
 *  in the first place. (For such calls, you use the eBay member's
 *  username and password instead.)
 */
class RequesterCredentials extends CustomSecurityHeaderType
{
    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
        parent::setKeyValue($keyValue);
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
