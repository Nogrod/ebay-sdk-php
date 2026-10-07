<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing EndOfAuctionEmailPreferencesType
 *
 * Contains the seller's preferences for the email that can be sent to the winner of an auction listing.
 * XSD Type: EndOfAuctionEmailPreferencesType
 */
class EndOfAuctionEmailPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        $value = $this->templateText;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TemplateText', null, (string) $value);
        }
        $value = $this->logoURL;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LogoURL', null, (string) $value);
        }
        $value = $this->logoType;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LogoType', null, (string) $value);
        }
        $value = $this->emailCustomized;
        if (null !== $value) {
            $writer->writeElementNs(null, 'EmailCustomized', null, ($value ? 'true' : 'false'));
        }
        $value = $this->textCustomized;
        if (null !== $value) {
            $writer->writeElementNs(null, 'TextCustomized', null, ($value ? 'true' : 'false'));
        }
        $value = $this->logoCustomized;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LogoCustomized', null, ($value ? 'true' : 'false'));
        }
        $value = $this->copyEmail;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CopyEmail', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\EndOfAuctionEmailPreferencesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
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
                case 'TemplateText':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->templateText = $value;
                    }
                    return true;
                case 'LogoURL':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->logoURL = $value;
                    }
                    return true;
                case 'LogoType':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->logoType = $value;
                    }
                    return true;
                case 'EmailCustomized':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->emailCustomized = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'TextCustomized':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->textCustomized = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'LogoCustomized':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->logoCustomized = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'CopyEmail':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->copyEmail = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['TemplateText'] = $this->templateText;
        $data['LogoURL'] = $this->logoURL;
        $data['LogoType'] = $this->logoType;
        $data['EmailCustomized'] = $this->emailCustomized;
        $data['TextCustomized'] = $this->textCustomized;
        $data['LogoCustomized'] = $this->logoCustomized;
        $data['CopyEmail'] = $this->copyEmail;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
