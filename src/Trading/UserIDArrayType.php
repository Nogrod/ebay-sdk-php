<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing UserIDArrayType
 *
 * Contains an array of eBay UserID entries.
 * XSD Type: UserIDArrayType
 */
class UserIDArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Unique eBay user ID for the user.
     *  Applies to eBay Motors Pro applications only.
     *
     * @var string[] $userID
     */
    private $userID = [

    ];

    /**
     * Adds as userID
     *
     * Unique eBay user ID for the user.
     *  Applies to eBay Motors Pro applications only.
     *
     * @return self
     * @param string $userID
     */
    public function addToUserID($userID)
    {
        $this->userID[] = $userID;
        return $this;
    }

    /**
     * isset userID
     *
     * Unique eBay user ID for the user.
     *  Applies to eBay Motors Pro applications only.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserID($index)
    {
        return isset($this->userID[$index]);
    }

    /**
     * unset userID
     *
     * Unique eBay user ID for the user.
     *  Applies to eBay Motors Pro applications only.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserID($index)
    {
        unset($this->userID[$index]);
    }

    /**
     * Gets as userID
     *
     * Unique eBay user ID for the user.
     *  Applies to eBay Motors Pro applications only.
     *
     * @return string[]
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * Unique eBay user ID for the user.
     *  Applies to eBay Motors Pro applications only.
     *
     * @param string $userID
     * @return self
     */
    public function setUserID(array $userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUserID();
        if (null !== $value && [] !== $this->getUserID()) {
            $writer->write(array_map(function ($v) {return ["UserID" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserID', true);
        if (null !== $value) {
            $this->setUserID($value);
        }
    }
}
