<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing MyMessagesForwardDetailsType
 *
 * This type is deprecated.
 * XSD Type: MyMessagesForwardDetailsType
 */
class MyMessagesForwardDetailsType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This field is deprecated.
     *
     * @var \DateTime $userForwardDate
     */
    private $userForwardDate = null;

    /**
     * This field is deprecated.
     *
     * @var string $forwardMessageEncoding
     */
    private $forwardMessageEncoding = null;

    /**
     * Gets as userForwardDate
     *
     * This field is deprecated.
     *
     * @return \DateTime
     */
    public function getUserForwardDate()
    {
        return $this->userForwardDate;
    }

    /**
     * Sets a new userForwardDate
     *
     * This field is deprecated.
     *
     * @param \DateTime $userForwardDate
     * @return self
     */
    public function setUserForwardDate(\DateTime $userForwardDate)
    {
        $this->userForwardDate = $userForwardDate;
        return $this;
    }

    /**
     * Gets as forwardMessageEncoding
     *
     * This field is deprecated.
     *
     * @return string
     */
    public function getForwardMessageEncoding()
    {
        return $this->forwardMessageEncoding;
    }

    /**
     * Sets a new forwardMessageEncoding
     *
     * This field is deprecated.
     *
     * @param string $forwardMessageEncoding
     * @return self
     */
    public function setForwardMessageEncoding($forwardMessageEncoding)
    {
        $this->forwardMessageEncoding = $forwardMessageEncoding;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getUserForwardDate();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}UserForwardDate", $value);
        }
        $value = $this->getForwardMessageEncoding();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ForwardMessageEncoding", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}UserForwardDate');
        if (null !== $value) {
            $this->setUserForwardDate(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ForwardMessageEncoding');
        if (null !== $value) {
            $this->setForwardMessageEncoding($value);
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
