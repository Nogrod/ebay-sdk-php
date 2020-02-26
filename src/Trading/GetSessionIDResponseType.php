<?php

namespace Nogrod\eBaySDK\Trading;

/**
 * Class representing GetSessionIDResponseType
 *
 * The base response of the <b>GetSessionID</b> call. This response will include the generated <b>SessionID</b> value, which is a unique identifier for authenticating data entry during the process that creates a user token.
 * XSD Type: GetSessionIDResponseType
 */
class GetSessionIDResponseType extends AbstractResponseType
{

    /**
     * A 40-character identifier supplied by eBay to an application. Used to confirm the
     *  identities of the user and the application in a URL redirect during the
     *  process in which the user agrees to let the application wield a user token that
     *  grants the application the right to access eBay data on behalf of the user.
     *  Subsequently also used as input for the <b>FetchToken</b> API call. The
     *  <b>SessionID</b> value is valid for five minutes after it is retrieved.
     *
     * @var string $sessionID
     */
    private $sessionID = null;

    /**
     * Gets as sessionID
     *
     * A 40-character identifier supplied by eBay to an application. Used to confirm the
     *  identities of the user and the application in a URL redirect during the
     *  process in which the user agrees to let the application wield a user token that
     *  grants the application the right to access eBay data on behalf of the user.
     *  Subsequently also used as input for the <b>FetchToken</b> API call. The
     *  <b>SessionID</b> value is valid for five minutes after it is retrieved.
     *
     * @return string
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * Sets a new sessionID
     *
     * A 40-character identifier supplied by eBay to an application. Used to confirm the
     *  identities of the user and the application in a URL redirect during the
     *  process in which the user agrees to let the application wield a user token that
     *  grants the application the right to access eBay data on behalf of the user.
     *  Subsequently also used as input for the <b>FetchToken</b> API call. The
     *  <b>SessionID</b> value is valid for five minutes after it is retrieved.
     *
     * @param string $sessionID
     * @return self
     */
    public function setSessionID($sessionID)
    {
        $this->sessionID = $sessionID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSessionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}SessionID", $value);
        }
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}SessionID');
        if (null !== $value) {
            $this->setSessionID($value);
        }
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
