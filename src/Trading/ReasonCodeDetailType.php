<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ReasonCodeDetailType
 *
 * A container for VeRO reason code details.
 * XSD Type: ReasonCodeDetailType
 */
class ReasonCodeDetailType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier assigned to a reason code.
     *
     * @var int $codeID
     */
    private $codeID = null;

    /**
     * The short description of the infringement associated with the reason code ID.
     *
     * @var string $briefText
     */
    private $briefText = null;

    /**
     * The long description of the infringement associated with the reason code ID.
     *
     * @var string $detailedText
     */
    private $detailedText = null;

    /**
     * Gets as codeID
     *
     * A unique identifier assigned to a reason code.
     *
     * @return int
     */
    public function getCodeID()
    {
        return $this->codeID;
    }

    /**
     * Sets a new codeID
     *
     * A unique identifier assigned to a reason code.
     *
     * @param int $codeID
     * @return self
     */
    public function setCodeID($codeID)
    {
        $this->codeID = $codeID;
        return $this;
    }

    /**
     * Gets as briefText
     *
     * The short description of the infringement associated with the reason code ID.
     *
     * @return string
     */
    public function getBriefText()
    {
        return $this->briefText;
    }

    /**
     * Sets a new briefText
     *
     * The short description of the infringement associated with the reason code ID.
     *
     * @param string $briefText
     * @return self
     */
    public function setBriefText($briefText)
    {
        $this->briefText = $briefText;
        return $this;
    }

    /**
     * Gets as detailedText
     *
     * The long description of the infringement associated with the reason code ID.
     *
     * @return string
     */
    public function getDetailedText()
    {
        return $this->detailedText;
    }

    /**
     * Sets a new detailedText
     *
     * The long description of the infringement associated with the reason code ID.
     *
     * @param string $detailedText
     * @return self
     */
    public function setDetailedText($detailedText)
    {
        $this->detailedText = $detailedText;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getCodeID();
        if (null !== $value) {
            $writer->writeAttribute("codeID", $value);
        }
        $value = $this->getBriefText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}BriefText", $value);
        }
        $value = $this->getDetailedText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}DetailedText", $value);
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
        $value = Func::mapValue($keyValue, 'codeID');
        if (null !== $value) {
            $this->setCodeID($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}BriefText');
        if (null !== $value) {
            $this->setBriefText($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}DetailedText');
        if (null !== $value) {
            $this->setDetailedText($value);
        }
    }
}
