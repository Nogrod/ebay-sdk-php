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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @return self
     * @param string $userID
     */
    public function addToUserID($userID)
    {
        if (!is_array($this->userID)) {
            throw new \LogicException('userID is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->userID[] = $userID;
        return $this;
    }

    /**
     * isset userID
     *
     * Unique eBay user ID for the user.
     *  Applies to eBay Motors Pro applications only.
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @return iterable<string>
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
     *  <br><br>
     *  <span class="tablenote"><strong>Note:</strong>
     *  Effective September 26, 2025, both usernames and public user IDs will be accepted in this field. For more information, please refer to <a href="https://developer.ebay.com/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.
     *  </span>
     *
     * @param string $userID
     * @return self
     */
    public function setUserID(iterable $userID)
    {
        $this->userID = $userID;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->userID;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'UserID', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\UserIDArrayType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->userID = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return false;
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'UserID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->userID[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
