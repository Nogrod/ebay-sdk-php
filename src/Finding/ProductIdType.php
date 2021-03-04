<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing ProductIdType
 *
 * Type that represents the unique identifier for a single product.
 * XSD Type: ProductId
 */
class ProductIdType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The nature of the identifier being used. For findItemsByProduct, search
     *  by a single type.
     *  <dl>
     *  <dt>
     *  <strong>productId values:</strong>
     *  </dt>
     *  <dt>
     *  ReferenceID
     *  </dt>
     *  <dd>
     *  The global reference ID (ePID) for an eBay catalog product. A
     *  reference ID is a fixed reference to a product, regardless of
     *  version. Use FindProducts in the Shopping API to determine valid ePID
     *  values that you can use as input to findItemsByProduct. Each product
     *  in the response includes its reference ID.
     *  </dd>
     *  <dt>
     *  ISBN
     *  </dt>
     *  <dd>
     *  ISBN-10 or ISBN-13 value for books. (The string length of ProductID
     *  indicates whether the ID is 10 or 13 characters.) If you know a
     *  book's ISBN, you can use this instead of the eBay Reference ID to
     *  search for that book. Max length of corresponding value: 13
     *  </dd>
     *  <dt>
     *  UPC
     *  </dt>
     *  <dd>
     *  UPC value for products in Music (e.g., CDs), DVDs & Movies, and
     *  Video Games categories (or domains). If you know a product's UPC, you
     *  can use this instead of the eBay Reference ID to search for that
     *  product. Max length of corresponding value: 12
     *  </dd>
     *  <dt>
     *  EAN
     *  </dt>
     *  <dd>
     *  EAN value for books. (This is used more commonly in European
     *  countries.) If you know a book's EAN, you can use this instead of the
     *  eBay Reference ID to search for that book. Max length of
     *  corresponding value: 13
     *  </dd>
     *  </dl>
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as type
     *
     * The nature of the identifier being used. For findItemsByProduct, search
     *  by a single type.
     *  <dl>
     *  <dt>
     *  <strong>productId values:</strong>
     *  </dt>
     *  <dt>
     *  ReferenceID
     *  </dt>
     *  <dd>
     *  The global reference ID (ePID) for an eBay catalog product. A
     *  reference ID is a fixed reference to a product, regardless of
     *  version. Use FindProducts in the Shopping API to determine valid ePID
     *  values that you can use as input to findItemsByProduct. Each product
     *  in the response includes its reference ID.
     *  </dd>
     *  <dt>
     *  ISBN
     *  </dt>
     *  <dd>
     *  ISBN-10 or ISBN-13 value for books. (The string length of ProductID
     *  indicates whether the ID is 10 or 13 characters.) If you know a
     *  book's ISBN, you can use this instead of the eBay Reference ID to
     *  search for that book. Max length of corresponding value: 13
     *  </dd>
     *  <dt>
     *  UPC
     *  </dt>
     *  <dd>
     *  UPC value for products in Music (e.g., CDs), DVDs & Movies, and
     *  Video Games categories (or domains). If you know a product's UPC, you
     *  can use this instead of the eBay Reference ID to search for that
     *  product. Max length of corresponding value: 12
     *  </dd>
     *  <dt>
     *  EAN
     *  </dt>
     *  <dd>
     *  EAN value for books. (This is used more commonly in European
     *  countries.) If you know a book's EAN, you can use this instead of the
     *  eBay Reference ID to search for that book. Max length of
     *  corresponding value: 13
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The nature of the identifier being used. For findItemsByProduct, search
     *  by a single type.
     *  <dl>
     *  <dt>
     *  <strong>productId values:</strong>
     *  </dt>
     *  <dt>
     *  ReferenceID
     *  </dt>
     *  <dd>
     *  The global reference ID (ePID) for an eBay catalog product. A
     *  reference ID is a fixed reference to a product, regardless of
     *  version. Use FindProducts in the Shopping API to determine valid ePID
     *  values that you can use as input to findItemsByProduct. Each product
     *  in the response includes its reference ID.
     *  </dd>
     *  <dt>
     *  ISBN
     *  </dt>
     *  <dd>
     *  ISBN-10 or ISBN-13 value for books. (The string length of ProductID
     *  indicates whether the ID is 10 or 13 characters.) If you know a
     *  book's ISBN, you can use this instead of the eBay Reference ID to
     *  search for that book. Max length of corresponding value: 13
     *  </dd>
     *  <dt>
     *  UPC
     *  </dt>
     *  <dd>
     *  UPC value for products in Music (e.g., CDs), DVDs & Movies, and
     *  Video Games categories (or domains). If you know a product's UPC, you
     *  can use this instead of the eBay Reference ID to search for that
     *  product. Max length of corresponding value: 12
     *  </dd>
     *  <dt>
     *  EAN
     *  </dt>
     *  <dd>
     *  EAN value for books. (This is used more commonly in European
     *  countries.) If you know a book's EAN, you can use this instead of the
     *  eBay Reference ID to search for that book. Max length of
     *  corresponding value: 13
     *  </dd>
     *  </dl>
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->value();
        $writer->write($value);
        $value = $this->getType();
        if (null !== $value) {
            $writer->writeAttribute("type", $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader)
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue)
    {
        $self = new self($keyValue);
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue)
    {
    }
}
