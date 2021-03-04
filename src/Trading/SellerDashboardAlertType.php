<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerDashboardAlertType
 *
 * A message to help the you understand your status as a seller (PowerSeller status,
 *  policy compliance status, etc.).
 * XSD Type: SellerDashboardAlertType
 */
class SellerDashboardAlertType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The severity level helps you understand whether the alert is identifying a
     *  problem (a warning or strong warning) or if it is informational in nature.
     *  This field is present if an alert has been issued to your account.
     *
     * @var string $severity
     */
    private $severity = null;

    /**
     * The warning or informational alert text. When you parse this text, note that
     *  some alerts may use plain text while others can include HTML. Returned only
     *  if the seller has been issued an alert.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Gets as severity
     *
     * The severity level helps you understand whether the alert is identifying a
     *  problem (a warning or strong warning) or if it is informational in nature.
     *  This field is present if an alert has been issued to your account.
     *
     * @return string
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Sets a new severity
     *
     * The severity level helps you understand whether the alert is identifying a
     *  problem (a warning or strong warning) or if it is informational in nature.
     *  This field is present if an alert has been issued to your account.
     *
     * @param string $severity
     * @return self
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
        return $this;
    }

    /**
     * Gets as text
     *
     * The warning or informational alert text. When you parse this text, note that
     *  some alerts may use plain text while others can include HTML. Returned only
     *  if the seller has been issued an alert.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The warning or informational alert text. When you parse this text, note that
     *  some alerts may use plain text while others can include HTML. Returned only
     *  if the seller has been issued an alert.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSeverity();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Severity", $value);
        }
        $value = $this->getText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Text", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Severity');
        if (null !== $value) {
            $this->setSeverity($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Text');
        if (null !== $value) {
            $this->setText($value);
        }
    }
}
