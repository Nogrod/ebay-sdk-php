<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing QuestionType
 *
 * TBD.
 * XSD Type: QuestionType
 */
class QuestionType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The self claims question id selected by the user during listing
     *
     * @var int $questionID
     */
    private $questionID = null;

    /**
     * Tier Level
     *
     * @var string $answer
     */
    private $answer = null;

    /**
     * Gets as questionID
     *
     * The self claims question id selected by the user during listing
     *
     * @return int
     */
    public function getQuestionID()
    {
        return $this->questionID;
    }

    /**
     * Sets a new questionID
     *
     * The self claims question id selected by the user during listing
     *
     * @param int $questionID
     * @return self
     */
    public function setQuestionID($questionID)
    {
        $this->questionID = $questionID;
        return $this;
    }

    /**
     * Gets as answer
     *
     * Tier Level
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * Tier Level
     *
     * @param string $answer
     * @return self
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getQuestionID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}QuestionID", $value);
        }
        $value = $this->getAnswer();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Answer", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}QuestionID');
        if (null !== $value) {
            $this->setQuestionID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Answer');
        if (null !== $value) {
            $this->setAnswer($value);
        }
    }
}
