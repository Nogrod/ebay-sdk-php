<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing QuestionSetArrayType
 *
 * Container for a list of questions.
 * XSD Type: QuestionSetArrayType
 */
class QuestionSetArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * Contains details about self claims questions selected and answers provided by seller during listing.
     *
     * @var \Nogrod\eBaySDK\MerchantData\QuestionType[] $question
     */
    private $question = [
        
    ];

    /**
     * Adds as question
     *
     * Contains details about self claims questions selected and answers provided by seller during listing.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\QuestionType $question
     */
    public function addToQuestion(\Nogrod\eBaySDK\MerchantData\QuestionType $question)
    {
        $this->question[] = $question;
        return $this;
    }

    /**
     * isset question
     *
     * Contains details about self claims questions selected and answers provided by seller during listing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetQuestion($index)
    {
        return isset($this->question[$index]);
    }

    /**
     * unset question
     *
     * Contains details about self claims questions selected and answers provided by seller during listing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetQuestion($index)
    {
        unset($this->question[$index]);
    }

    /**
     * Gets as question
     *
     * Contains details about self claims questions selected and answers provided by seller during listing.
     *
     * @return \Nogrod\eBaySDK\MerchantData\QuestionType[]
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Sets a new question
     *
     * Contains details about self claims questions selected and answers provided by seller during listing.
     *
     * @param \Nogrod\eBaySDK\MerchantData\QuestionType[] $question
     * @return self
     */
    public function setQuestion(array $question)
    {
        $this->question = $question;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getQuestion();
        if (null !== $value && !empty($this->getQuestion())) {
            $writer->write(array_map(function ($v) {
                return ["Question" => $v];
            }, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Question', true);
        if (null !== $value && !empty($value)) {
            $this->setQuestion(array_map(function ($v) {
                return \Nogrod\eBaySDK\MerchantData\QuestionType::fromKeyValue($v);
            }, $value));
        }
    }
}
