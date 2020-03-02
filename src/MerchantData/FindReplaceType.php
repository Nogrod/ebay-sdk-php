<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing FindReplaceType
 *
 * Details of the search/replace.
 * XSD Type: FindReplaceType
 */
class FindReplaceType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The phrase or pattern for which to search. See FindMode.
     *
     * @var string $find
     */
    private $find = null;

    /**
     * The replacement phrase if a match is found for Find and FindMode.
     *
     * @var string $replace
     */
    private $replace = null;

    /**
     * What style of match to be performed for search/replace:
     *  1. Simple: exact match.
     *  <br>
     *  2. WholeWord: match whole words or group of words.
     *  <br>
     *  3. Pattern: regex match (see rules in java.lang.String.replaceAll()).
     *
     * @var string $findMode
     */
    private $findMode = null;

    /**
     * Whether to perform a case-sensitive search. If true, the search is case-sensitive.
     *
     * @var bool $caseSensitive
     */
    private $caseSensitive = null;

    /**
     * The name of the item field whose value is to be tested
     *  for possible replacement. The only valid value at this
     *  time is "Description".
     *
     * @var string $field
     */
    private $field = null;

    /**
     * Gets as find
     *
     * The phrase or pattern for which to search. See FindMode.
     *
     * @return string
     */
    public function getFind()
    {
        return $this->find;
    }

    /**
     * Sets a new find
     *
     * The phrase or pattern for which to search. See FindMode.
     *
     * @param string $find
     * @return self
     */
    public function setFind($find)
    {
        $this->find = $find;
        return $this;
    }

    /**
     * Gets as replace
     *
     * The replacement phrase if a match is found for Find and FindMode.
     *
     * @return string
     */
    public function getReplace()
    {
        return $this->replace;
    }

    /**
     * Sets a new replace
     *
     * The replacement phrase if a match is found for Find and FindMode.
     *
     * @param string $replace
     * @return self
     */
    public function setReplace($replace)
    {
        $this->replace = $replace;
        return $this;
    }

    /**
     * Gets as findMode
     *
     * What style of match to be performed for search/replace:
     *  1. Simple: exact match.
     *  <br>
     *  2. WholeWord: match whole words or group of words.
     *  <br>
     *  3. Pattern: regex match (see rules in java.lang.String.replaceAll()).
     *
     * @return string
     */
    public function getFindMode()
    {
        return $this->findMode;
    }

    /**
     * Sets a new findMode
     *
     * What style of match to be performed for search/replace:
     *  1. Simple: exact match.
     *  <br>
     *  2. WholeWord: match whole words or group of words.
     *  <br>
     *  3. Pattern: regex match (see rules in java.lang.String.replaceAll()).
     *
     * @param string $findMode
     * @return self
     */
    public function setFindMode($findMode)
    {
        $this->findMode = $findMode;
        return $this;
    }

    /**
     * Gets as caseSensitive
     *
     * Whether to perform a case-sensitive search. If true, the search is case-sensitive.
     *
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    /**
     * Sets a new caseSensitive
     *
     * Whether to perform a case-sensitive search. If true, the search is case-sensitive.
     *
     * @param bool $caseSensitive
     * @return self
     */
    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
        return $this;
    }

    /**
     * Gets as field
     *
     * The name of the item field whose value is to be tested
     *  for possible replacement. The only valid value at this
     *  time is "Description".
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * The name of the item field whose value is to be tested
     *  for possible replacement. The only valid value at this
     *  time is "Description".
     *
     * @param string $field
     * @return self
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getFind();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Find", $value);
        }
        $value = $this->getReplace();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Replace", $value);
        }
        $value = $this->getFindMode();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}FindMode", $value);
        }
        $value = $this->getCaseSensitive();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CaseSensitive", $value);
        }
        $value = $this->getField();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Field", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Find');
        if (null !== $value) {
            $this->setFind($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Replace');
        if (null !== $value) {
            $this->setReplace($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}FindMode');
        if (null !== $value) {
            $this->setFindMode($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CaseSensitive');
        if (null !== $value) {
            $this->setCaseSensitive($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Field');
        if (null !== $value) {
            $this->setField($value);
        }
    }
}
