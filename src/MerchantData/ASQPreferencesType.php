<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing ASQPreferencesType
 *
 * This type is used by the <b>ASQPreferences</b> container to allow the seller to add custom Ask Seller a Question (ASQ) subjects to item listings, or to reset the custom subjects to the default eBay values.
 * XSD Type: ASQPreferencesType
 */
class ASQPreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * This boolean field can be used in the <b>SetMessagePreferences</b> call to reset all custom Ask Seller a Question (ASQ) subjects to their default eBay values. For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call.
     *
     * @var bool $resetDefaultSubjects
     */
    private $resetDefaultSubjects = null;

    /**
     * Each <b>Subject</b> field contains one custom Ask a Question (ASQ) subject. A maximum of nine custom ASQ subjects can be created. eBay's "General question about this item" subject will always be included in all listings.
     *  <br><br>
     *  For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call. ASQ subjects are displayed on the drop-down list in the same order as they are passed in to the request. So, if the seller would like to rearrange the order of the ASQ subjects, they should keep this behavior in mind.
     *  <br><br>
     *  Note that the default ASQ subjects will display in the site's
     *  language if retrieved from a site other than the seller's own.
     *  For example, if a US seller sells on the German and French
     *  sites, the default subjects will display in German and French,
     *  respectively. However, if the seller adds custom subjects through the API on these sites, the custom subjects will display in the seller's own language - English in this use case.
     *  <br><br>
     *  The <b>GetMessagePreferences</b> call will retrieve all custom ASQ subjects that have been set by the seller. If custom ASQ subjects have not been set up by the seller, the eBay default ASQ subjects will be returned in the <b>Subject</b> fields instead.
     *
     * @var string[] $subject
     */
    private $subject = [
        
    ];

    /**
     * Gets as resetDefaultSubjects
     *
     * This boolean field can be used in the <b>SetMessagePreferences</b> call to reset all custom Ask Seller a Question (ASQ) subjects to their default eBay values. For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call.
     *
     * @return bool
     */
    public function getResetDefaultSubjects()
    {
        return $this->resetDefaultSubjects;
    }

    /**
     * Sets a new resetDefaultSubjects
     *
     * This boolean field can be used in the <b>SetMessagePreferences</b> call to reset all custom Ask Seller a Question (ASQ) subjects to their default eBay values. For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call.
     *
     * @param bool $resetDefaultSubjects
     * @return self
     */
    public function setResetDefaultSubjects($resetDefaultSubjects)
    {
        $this->resetDefaultSubjects = $resetDefaultSubjects;
        return $this;
    }

    /**
     * Adds as subject
     *
     * Each <b>Subject</b> field contains one custom Ask a Question (ASQ) subject. A maximum of nine custom ASQ subjects can be created. eBay's "General question about this item" subject will always be included in all listings.
     *  <br><br>
     *  For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call. ASQ subjects are displayed on the drop-down list in the same order as they are passed in to the request. So, if the seller would like to rearrange the order of the ASQ subjects, they should keep this behavior in mind.
     *  <br><br>
     *  Note that the default ASQ subjects will display in the site's
     *  language if retrieved from a site other than the seller's own.
     *  For example, if a US seller sells on the German and French
     *  sites, the default subjects will display in German and French,
     *  respectively. However, if the seller adds custom subjects through the API on these sites, the custom subjects will display in the seller's own language - English in this use case.
     *  <br><br>
     *  The <b>GetMessagePreferences</b> call will retrieve all custom ASQ subjects that have been set by the seller. If custom ASQ subjects have not been set up by the seller, the eBay default ASQ subjects will be returned in the <b>Subject</b> fields instead.
     *
     * @return self
     * @param string $subject
     */
    public function addToSubject($subject)
    {
        $this->subject[] = $subject;
        return $this;
    }

    /**
     * isset subject
     *
     * Each <b>Subject</b> field contains one custom Ask a Question (ASQ) subject. A maximum of nine custom ASQ subjects can be created. eBay's "General question about this item" subject will always be included in all listings.
     *  <br><br>
     *  For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call. ASQ subjects are displayed on the drop-down list in the same order as they are passed in to the request. So, if the seller would like to rearrange the order of the ASQ subjects, they should keep this behavior in mind.
     *  <br><br>
     *  Note that the default ASQ subjects will display in the site's
     *  language if retrieved from a site other than the seller's own.
     *  For example, if a US seller sells on the German and French
     *  sites, the default subjects will display in German and French,
     *  respectively. However, if the seller adds custom subjects through the API on these sites, the custom subjects will display in the seller's own language - English in this use case.
     *  <br><br>
     *  The <b>GetMessagePreferences</b> call will retrieve all custom ASQ subjects that have been set by the seller. If custom ASQ subjects have not been set up by the seller, the eBay default ASQ subjects will be returned in the <b>Subject</b> fields instead.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubject($index)
    {
        return isset($this->subject[$index]);
    }

    /**
     * unset subject
     *
     * Each <b>Subject</b> field contains one custom Ask a Question (ASQ) subject. A maximum of nine custom ASQ subjects can be created. eBay's "General question about this item" subject will always be included in all listings.
     *  <br><br>
     *  For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call. ASQ subjects are displayed on the drop-down list in the same order as they are passed in to the request. So, if the seller would like to rearrange the order of the ASQ subjects, they should keep this behavior in mind.
     *  <br><br>
     *  Note that the default ASQ subjects will display in the site's
     *  language if retrieved from a site other than the seller's own.
     *  For example, if a US seller sells on the German and French
     *  sites, the default subjects will display in German and French,
     *  respectively. However, if the seller adds custom subjects through the API on these sites, the custom subjects will display in the seller's own language - English in this use case.
     *  <br><br>
     *  The <b>GetMessagePreferences</b> call will retrieve all custom ASQ subjects that have been set by the seller. If custom ASQ subjects have not been set up by the seller, the eBay default ASQ subjects will be returned in the <b>Subject</b> fields instead.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubject($index)
    {
        unset($this->subject[$index]);
    }

    /**
     * Gets as subject
     *
     * Each <b>Subject</b> field contains one custom Ask a Question (ASQ) subject. A maximum of nine custom ASQ subjects can be created. eBay's "General question about this item" subject will always be included in all listings.
     *  <br><br>
     *  For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call. ASQ subjects are displayed on the drop-down list in the same order as they are passed in to the request. So, if the seller would like to rearrange the order of the ASQ subjects, they should keep this behavior in mind.
     *  <br><br>
     *  Note that the default ASQ subjects will display in the site's
     *  language if retrieved from a site other than the seller's own.
     *  For example, if a US seller sells on the German and French
     *  sites, the default subjects will display in German and French,
     *  respectively. However, if the seller adds custom subjects through the API on these sites, the custom subjects will display in the seller's own language - English in this use case.
     *  <br><br>
     *  The <b>GetMessagePreferences</b> call will retrieve all custom ASQ subjects that have been set by the seller. If custom ASQ subjects have not been set up by the seller, the eBay default ASQ subjects will be returned in the <b>Subject</b> fields instead.
     *
     * @return string[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets a new subject
     *
     * Each <b>Subject</b> field contains one custom Ask a Question (ASQ) subject. A maximum of nine custom ASQ subjects can be created. eBay's "General question about this item" subject will always be included in all listings.
     *  <br><br>
     *  For any given <b>SetMessagePreferences</b> call, either <b>ResetDefaultSubjects</b> or one or more <b>Subject</b> fields can be used, but not both in the same call. ASQ subjects are displayed on the drop-down list in the same order as they are passed in to the request. So, if the seller would like to rearrange the order of the ASQ subjects, they should keep this behavior in mind.
     *  <br><br>
     *  Note that the default ASQ subjects will display in the site's
     *  language if retrieved from a site other than the seller's own.
     *  For example, if a US seller sells on the German and French
     *  sites, the default subjects will display in German and French,
     *  respectively. However, if the seller adds custom subjects through the API on these sites, the custom subjects will display in the seller's own language - English in this use case.
     *  <br><br>
     *  The <b>GetMessagePreferences</b> call will retrieve all custom ASQ subjects that have been set by the seller. If custom ASQ subjects have not been set up by the seller, the eBay default ASQ subjects will be returned in the <b>Subject</b> fields instead.
     *
     * @param string[] $subject
     * @return self
     */
    public function setSubject(array $subject)
    {
        $this->subject = $subject;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getResetDefaultSubjects();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ResetDefaultSubjects", $value);
        }
        $value = $this->getSubject();
        if (null !== $value && !empty($this->getSubject())) {
            $writer->write(array_map(function ($v) {
                return ["Subject" => $v];
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ResetDefaultSubjects');
        if (null !== $value) {
            $this->setResetDefaultSubjects($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Subject', true);
        if (null !== $value && !empty($value)) {
            $this->setSubject($value);
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
