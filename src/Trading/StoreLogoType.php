<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreLogoType
 *
 * Store logo.
 * XSD Type: StoreLogoType
 */
class StoreLogoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     *
     * @var int $logoID
     */
    private $logoID = null;

    /**
     * Store logo name. Provides a user-friendly name for the logo.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * URL of the logo. Must have a .gif or .jpg extention. Specified when
     *  you are using a customized logo.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Gets as logoID
     *
     * Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     *
     * @return int
     */
    public function getLogoID()
    {
        return $this->logoID;
    }

    /**
     * Sets a new logoID
     *
     * Store logo ID (use GetStoreOptions to get the list of valid logo IDs).
     *
     * @param int $logoID
     * @return self
     */
    public function setLogoID($logoID)
    {
        $this->logoID = $logoID;
        return $this;
    }

    /**
     * Gets as name
     *
     * Store logo name. Provides a user-friendly name for the logo.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Store logo name. Provides a user-friendly name for the logo.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * URL of the logo. Must have a .gif or .jpg extention. Specified when
     *  you are using a customized logo.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URL of the logo. Must have a .gif or .jpg extention. Specified when
     *  you are using a customized logo.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getLogoID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoID", $value);
        }
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoID');
        if (null !== $value) {
            $this->setLogoID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
    }
}
