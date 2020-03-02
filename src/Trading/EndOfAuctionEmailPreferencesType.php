<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndOfAuctionEmailPreferencesType
 *
 * Contains the seller's preferences for the email that can be sent to the winner of an auction listing.
 * XSD Type: EndOfAuctionEmailPreferencesType
 */
class EndOfAuctionEmailPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The seller can customize the text of the email that is sent to the winner of an auction listing. The text of the email is provided in this field. If the seller is going to customize the text of the email through this field, the seller must also include the <b>TextCustomized</b> field and set its value to <code>true</code>.The text of the custom message for the email.
     *  <br>
     *  <br>
     *  This field is only returned if set for the account.
     *
     * @var string $templateText
     */
    private $templateText = null;

    /**
     * The seller can include a customized logo in the email that is sent to the winner of an auction listing. The full URI to this logo image should be applied in this field. If the seller is going to include a customized logo in the email through this field, the seller must also include the <b>LogoCustomized</b> field and set its value to <code>true</code>, and include the <b>LogoType</b> field and set its value to <code>Customized</code>.
     *  <br>
     *  <br>
     *  This field is only returned if a customized logo is being used for the customized email.
     *
     * @var string $logoURL
     */
    private $logoURL = null;

    /**
     * This field is needed in the <b>SetUserPreferences</b> call if the seller would like to use a customized or eBay Store logo. If the seller would like to use a customized logo, this field's value will be set to <code>Customized</code>. If the seller would like to use their eBay Store logo (if it exists), this field's value will be set to <code>Store</code>.
     *  <br>
     *  <br>
     *  This field is always returned, and its value will be <code>None</code> if no logo is used in the customized email.
     *
     * @var string $logoType
     */
    private $logoType = null;

    /**
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized email will be sent to the winning bidder or not.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not a customized email will be sent to the winning bidder.
     *
     * @var bool $emailCustomized
     */
    private $emailCustomized = null;

    /**
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether customized text will be used or not in the customized email that is sent to the winning bidder. Customized text is provided through the <b>LogoURL</b> field.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not customized text is used in a customized email that is sent to the winning bidder.
     *
     * @var bool $textCustomized
     */
    private $textCustomized = null;

    /**
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized logo will be used or not in the customized email that is sent to the winning bidder. The URI to a customized logo is provided through the <b>TemplateText</b> field. If the seller would like to use a customized logo, the <b>LogoType</b> field must also be included, and its value will be set to <code>Customized</code>.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not a customized logo is used in a customized email that is sent to the winning bidder.
     *
     * @var bool $logoCustomized
     */
    private $logoCustomized = null;

    /**
     * This field is deprecated.
     *
     * @var bool $copyEmail
     */
    private $copyEmail = null;

    /**
     * Gets as templateText
     *
     * The seller can customize the text of the email that is sent to the winner of an auction listing. The text of the email is provided in this field. If the seller is going to customize the text of the email through this field, the seller must also include the <b>TextCustomized</b> field and set its value to <code>true</code>.The text of the custom message for the email.
     *  <br>
     *  <br>
     *  This field is only returned if set for the account.
     *
     * @return string
     */
    public function getTemplateText()
    {
        return $this->templateText;
    }

    /**
     * Sets a new templateText
     *
     * The seller can customize the text of the email that is sent to the winner of an auction listing. The text of the email is provided in this field. If the seller is going to customize the text of the email through this field, the seller must also include the <b>TextCustomized</b> field and set its value to <code>true</code>.The text of the custom message for the email.
     *  <br>
     *  <br>
     *  This field is only returned if set for the account.
     *
     * @param string $templateText
     * @return self
     */
    public function setTemplateText($templateText)
    {
        $this->templateText = $templateText;
        return $this;
    }

    /**
     * Gets as logoURL
     *
     * The seller can include a customized logo in the email that is sent to the winner of an auction listing. The full URI to this logo image should be applied in this field. If the seller is going to include a customized logo in the email through this field, the seller must also include the <b>LogoCustomized</b> field and set its value to <code>true</code>, and include the <b>LogoType</b> field and set its value to <code>Customized</code>.
     *  <br>
     *  <br>
     *  This field is only returned if a customized logo is being used for the customized email.
     *
     * @return string
     */
    public function getLogoURL()
    {
        return $this->logoURL;
    }

    /**
     * Sets a new logoURL
     *
     * The seller can include a customized logo in the email that is sent to the winner of an auction listing. The full URI to this logo image should be applied in this field. If the seller is going to include a customized logo in the email through this field, the seller must also include the <b>LogoCustomized</b> field and set its value to <code>true</code>, and include the <b>LogoType</b> field and set its value to <code>Customized</code>.
     *  <br>
     *  <br>
     *  This field is only returned if a customized logo is being used for the customized email.
     *
     * @param string $logoURL
     * @return self
     */
    public function setLogoURL($logoURL)
    {
        $this->logoURL = $logoURL;
        return $this;
    }

    /**
     * Gets as logoType
     *
     * This field is needed in the <b>SetUserPreferences</b> call if the seller would like to use a customized or eBay Store logo. If the seller would like to use a customized logo, this field's value will be set to <code>Customized</code>. If the seller would like to use their eBay Store logo (if it exists), this field's value will be set to <code>Store</code>.
     *  <br>
     *  <br>
     *  This field is always returned, and its value will be <code>None</code> if no logo is used in the customized email.
     *
     * @return string
     */
    public function getLogoType()
    {
        return $this->logoType;
    }

    /**
     * Sets a new logoType
     *
     * This field is needed in the <b>SetUserPreferences</b> call if the seller would like to use a customized or eBay Store logo. If the seller would like to use a customized logo, this field's value will be set to <code>Customized</code>. If the seller would like to use their eBay Store logo (if it exists), this field's value will be set to <code>Store</code>.
     *  <br>
     *  <br>
     *  This field is always returned, and its value will be <code>None</code> if no logo is used in the customized email.
     *
     * @param string $logoType
     * @return self
     */
    public function setLogoType($logoType)
    {
        $this->logoType = $logoType;
        return $this;
    }

    /**
     * Gets as emailCustomized
     *
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized email will be sent to the winning bidder or not.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not a customized email will be sent to the winning bidder.
     *
     * @return bool
     */
    public function getEmailCustomized()
    {
        return $this->emailCustomized;
    }

    /**
     * Sets a new emailCustomized
     *
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized email will be sent to the winning bidder or not.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not a customized email will be sent to the winning bidder.
     *
     * @param bool $emailCustomized
     * @return self
     */
    public function setEmailCustomized($emailCustomized)
    {
        $this->emailCustomized = $emailCustomized;
        return $this;
    }

    /**
     * Gets as textCustomized
     *
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether customized text will be used or not in the customized email that is sent to the winning bidder. Customized text is provided through the <b>LogoURL</b> field.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not customized text is used in a customized email that is sent to the winning bidder.
     *
     * @return bool
     */
    public function getTextCustomized()
    {
        return $this->textCustomized;
    }

    /**
     * Sets a new textCustomized
     *
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether customized text will be used or not in the customized email that is sent to the winning bidder. Customized text is provided through the <b>LogoURL</b> field.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not customized text is used in a customized email that is sent to the winning bidder.
     *
     * @param bool $textCustomized
     * @return self
     */
    public function setTextCustomized($textCustomized)
    {
        $this->textCustomized = $textCustomized;
        return $this;
    }

    /**
     * Gets as logoCustomized
     *
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized logo will be used or not in the customized email that is sent to the winning bidder. The URI to a customized logo is provided through the <b>TemplateText</b> field. If the seller would like to use a customized logo, the <b>LogoType</b> field must also be included, and its value will be set to <code>Customized</code>.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not a customized logo is used in a customized email that is sent to the winning bidder.
     *
     * @return bool
     */
    public function getLogoCustomized()
    {
        return $this->logoCustomized;
    }

    /**
     * Sets a new logoCustomized
     *
     * This field is used in a <b>SetUserPreferences</b> call to set/change the setting of whether a customized logo will be used or not in the customized email that is sent to the winning bidder. The URI to a customized logo is provided through the <b>TemplateText</b> field. If the seller would like to use a customized logo, the <b>LogoType</b> field must also be included, and its value will be set to <code>Customized</code>.
     *  <br>
     *  <br>
     *  This field is always returned to indicate whether or not a customized logo is used in a customized email that is sent to the winning bidder.
     *
     * @param bool $logoCustomized
     * @return self
     */
    public function setLogoCustomized($logoCustomized)
    {
        $this->logoCustomized = $logoCustomized;
        return $this;
    }

    /**
     * Gets as copyEmail
     *
     * This field is deprecated.
     *
     * @return bool
     */
    public function getCopyEmail()
    {
        return $this->copyEmail;
    }

    /**
     * Sets a new copyEmail
     *
     * This field is deprecated.
     *
     * @param bool $copyEmail
     * @return self
     */
    public function setCopyEmail($copyEmail)
    {
        $this->copyEmail = $copyEmail;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getTemplateText();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TemplateText", $value);
        }
        $value = $this->getLogoURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoURL", $value);
        }
        $value = $this->getLogoType();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoType", $value);
        }
        $value = $this->getEmailCustomized();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}EmailCustomized", $value);
        }
        $value = $this->getTextCustomized();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}TextCustomized", $value);
        }
        $value = $this->getLogoCustomized();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LogoCustomized", $value);
        }
        $value = $this->getCopyEmail();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CopyEmail", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TemplateText');
        if (null !== $value) {
            $this->setTemplateText($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoURL');
        if (null !== $value) {
            $this->setLogoURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoType');
        if (null !== $value) {
            $this->setLogoType($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}EmailCustomized');
        if (null !== $value) {
            $this->setEmailCustomized($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}TextCustomized');
        if (null !== $value) {
            $this->setTextCustomized($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LogoCustomized');
        if (null !== $value) {
            $this->setLogoCustomized($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CopyEmail');
        if (null !== $value) {
            $this->setCopyEmail($value);
        }
    }
}
