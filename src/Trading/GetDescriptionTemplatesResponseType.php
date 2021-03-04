<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetDescriptionTemplatesResponseType
 *
 * This is the base response type for the <b>GetDescriptionTemplates</b> call. This call retrieves the Listing Designer templates that are available for use by the seller. The user has the option of retrieving all available Listing Designer templates for all categories, for all motor vehicle categories, or for a specific eBay category.
 *  <br>
 *  <br>
 *  <span class="tablenote"><b>Note:</b> As of May 31, 2020, sellers are no longer able to use Listing Designer templates when they create or revise listings. Existing listings that are already using a Listing Designer template will remain unchanged. The <b>GetDescriptionTemplates</b> call will eventually get deprecated and decommissioned, and more information will be provided on timing at a later date. The <b>GetDescriptionTemplates</b> call will still retrieve Listing Designer template data, but none of retrieved templates will be usable to create or revise a listing.</span>
 * XSD Type: GetDescriptionTemplatesResponseType
 */
class GetDescriptionTemplatesResponseType extends AbstractResponseType
{
    /**
     * A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     *
     * @var \Nogrod\eBaySDK\Trading\DescriptionTemplateType[] $descriptionTemplate
     */
    private $descriptionTemplate = [
        
    ];

    /**
     * This integer value indicates the total number of Listing Designer Layout templates that were retrieved. This field is always returned, even if it is <code>0</code>
     *
     * @var int $layoutTotal
     */
    private $layoutTotal = null;

    /**
     * The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     *
     * @var int[] $obsoleteLayoutID
     */
    private $obsoleteLayoutID = [
        
    ];

    /**
     * The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     *
     * @var int[] $obsoleteThemeID
     */
    private $obsoleteThemeID = [
        
    ];

    /**
     * A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer Theme template that belong to that Theme Group.
     *
     * @var \Nogrod\eBaySDK\Trading\ThemeGroupType[] $themeGroup
     */
    private $themeGroup = [
        
    ];

    /**
     * This integer value indicates the total number of Listing Designer Theme templates that were retrieved. This field is always returned, even if it is <code>0</code>
     *
     * @var int $themeTotal
     */
    private $themeTotal = null;

    /**
     * Adds as descriptionTemplate
     *
     * A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DescriptionTemplateType $descriptionTemplate
     */
    public function addToDescriptionTemplate(\Nogrod\eBaySDK\Trading\DescriptionTemplateType $descriptionTemplate)
    {
        $this->descriptionTemplate[] = $descriptionTemplate;
        return $this;
    }

    /**
     * isset descriptionTemplate
     *
     * A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptionTemplate($index)
    {
        return isset($this->descriptionTemplate[$index]);
    }

    /**
     * unset descriptionTemplate
     *
     * A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptionTemplate($index)
    {
        unset($this->descriptionTemplate[$index]);
    }

    /**
     * Gets as descriptionTemplate
     *
     * A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     *
     * @return \Nogrod\eBaySDK\Trading\DescriptionTemplateType[]
     */
    public function getDescriptionTemplate()
    {
        return $this->descriptionTemplate;
    }

    /**
     * Sets a new descriptionTemplate
     *
     * A <b>DescriptionTemplate</b> container is retrieved for each available Listing Designer template. Each <b>DescriptionTemplate</b> container includes the unique identifier of the template, the Listing Designer Theme Group that it belongs to, the CDATA representation of the Listing Designer template, and the URL to an image that serves as an example of the Listing Designer template.
     *
     * @param \Nogrod\eBaySDK\Trading\DescriptionTemplateType[] $descriptionTemplate
     * @return self
     */
    public function setDescriptionTemplate(array $descriptionTemplate)
    {
        $this->descriptionTemplate = $descriptionTemplate;
        return $this;
    }

    /**
     * Gets as layoutTotal
     *
     * This integer value indicates the total number of Listing Designer Layout templates that were retrieved. This field is always returned, even if it is <code>0</code>
     *
     * @return int
     */
    public function getLayoutTotal()
    {
        return $this->layoutTotal;
    }

    /**
     * Sets a new layoutTotal
     *
     * This integer value indicates the total number of Listing Designer Layout templates that were retrieved. This field is always returned, even if it is <code>0</code>
     *
     * @param int $layoutTotal
     * @return self
     */
    public function setLayoutTotal($layoutTotal)
    {
        $this->layoutTotal = $layoutTotal;
        return $this;
    }

    /**
     * Adds as obsoleteLayoutID
     *
     * The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     *
     * @return self
     * @param int $obsoleteLayoutID
     */
    public function addToObsoleteLayoutID($obsoleteLayoutID)
    {
        $this->obsoleteLayoutID[] = $obsoleteLayoutID;
        return $this;
    }

    /**
     * isset obsoleteLayoutID
     *
     * The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObsoleteLayoutID($index)
    {
        return isset($this->obsoleteLayoutID[$index]);
    }

    /**
     * unset obsoleteLayoutID
     *
     * The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObsoleteLayoutID($index)
    {
        unset($this->obsoleteLayoutID[$index]);
    }

    /**
     * Gets as obsoleteLayoutID
     *
     * The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     *
     * @return int[]
     */
    public function getObsoleteLayoutID()
    {
        return $this->obsoleteLayoutID;
    }

    /**
     * Sets a new obsoleteLayoutID
     *
     * The unique identifier of a Listing Designer Layout template that is now obsolete. An <b>ObsoleteLayoutID</b> field is returned for each obsolete Listing Designer Layout template.
     *
     * @param int[] $obsoleteLayoutID
     * @return self
     */
    public function setObsoleteLayoutID(array $obsoleteLayoutID)
    {
        $this->obsoleteLayoutID = $obsoleteLayoutID;
        return $this;
    }

    /**
     * Adds as obsoleteThemeID
     *
     * The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     *
     * @return self
     * @param int $obsoleteThemeID
     */
    public function addToObsoleteThemeID($obsoleteThemeID)
    {
        $this->obsoleteThemeID[] = $obsoleteThemeID;
        return $this;
    }

    /**
     * isset obsoleteThemeID
     *
     * The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObsoleteThemeID($index)
    {
        return isset($this->obsoleteThemeID[$index]);
    }

    /**
     * unset obsoleteThemeID
     *
     * The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObsoleteThemeID($index)
    {
        unset($this->obsoleteThemeID[$index]);
    }

    /**
     * Gets as obsoleteThemeID
     *
     * The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     *
     * @return int[]
     */
    public function getObsoleteThemeID()
    {
        return $this->obsoleteThemeID;
    }

    /**
     * Sets a new obsoleteThemeID
     *
     * The unique identifier of a Listing Designer Theme template that is now obsolete. An <b>ObsoleteThemeID</b> field is returned for each obsolete Listing Designer Theme template.
     *
     * @param int[] $obsoleteThemeID
     * @return self
     */
    public function setObsoleteThemeID(array $obsoleteThemeID)
    {
        $this->obsoleteThemeID = $obsoleteThemeID;
        return $this;
    }

    /**
     * Adds as themeGroup
     *
     * A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer Theme template that belong to that Theme Group.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\ThemeGroupType $themeGroup
     */
    public function addToThemeGroup(\Nogrod\eBaySDK\Trading\ThemeGroupType $themeGroup)
    {
        $this->themeGroup[] = $themeGroup;
        return $this;
    }

    /**
     * isset themeGroup
     *
     * A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer Theme template that belong to that Theme Group.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetThemeGroup($index)
    {
        return isset($this->themeGroup[$index]);
    }

    /**
     * unset themeGroup
     *
     * A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer Theme template that belong to that Theme Group.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetThemeGroup($index)
    {
        unset($this->themeGroup[$index]);
    }

    /**
     * Gets as themeGroup
     *
     * A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer Theme template that belong to that Theme Group.
     *
     * @return \Nogrod\eBaySDK\Trading\ThemeGroupType[]
     */
    public function getThemeGroup()
    {
        return $this->themeGroup;
    }

    /**
     * Sets a new themeGroup
     *
     * A <b>ThemeGroup</b> container is retrieved for each available Listing Designer Theme Group. Each <b>ThemeGroup</b> container includes the unique identifier of the Theme Group, the Theme Group name, and all of the Listing Designer Theme template that belong to that Theme Group.
     *
     * @param \Nogrod\eBaySDK\Trading\ThemeGroupType[] $themeGroup
     * @return self
     */
    public function setThemeGroup(array $themeGroup)
    {
        $this->themeGroup = $themeGroup;
        return $this;
    }

    /**
     * Gets as themeTotal
     *
     * This integer value indicates the total number of Listing Designer Theme templates that were retrieved. This field is always returned, even if it is <code>0</code>
     *
     * @return int
     */
    public function getThemeTotal()
    {
        return $this->themeTotal;
    }

    /**
     * Sets a new themeTotal
     *
     * This integer value indicates the total number of Listing Designer Theme templates that were retrieved. This field is always returned, even if it is <code>0</code>
     *
     * @param int $themeTotal
     * @return self
     */
    public function setThemeTotal($themeTotal)
    {
        $this->themeTotal = $themeTotal;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getDescriptionTemplate();
        if (null !== $value && !empty($this->getDescriptionTemplate())) {
            $writer->write(array_map(function ($v) {
                return ["DescriptionTemplate" => $v];
            }, $value));
        }
        $value = $this->getLayoutTotal();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LayoutTotal", $value);
        }
        $value = $this->getObsoleteLayoutID();
        if (null !== $value && !empty($this->getObsoleteLayoutID())) {
            $writer->write(array_map(function ($v) {
                return ["ObsoleteLayoutID" => $v];
            }, $value));
        }
        $value = $this->getObsoleteThemeID();
        if (null !== $value && !empty($this->getObsoleteThemeID())) {
            $writer->write(array_map(function ($v) {
                return ["ObsoleteThemeID" => $v];
            }, $value));
        }
        $value = $this->getThemeGroup();
        if (null !== $value && !empty($this->getThemeGroup())) {
            $writer->write(array_map(function ($v) {
                return ["ThemeGroup" => $v];
            }, $value));
        }
        $value = $this->getThemeTotal();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}ThemeTotal", $value);
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
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}DescriptionTemplate', true);
        if (null !== $value && !empty($value)) {
            $this->setDescriptionTemplate(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DescriptionTemplateType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LayoutTotal');
        if (null !== $value) {
            $this->setLayoutTotal($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ObsoleteLayoutID', true);
        if (null !== $value && !empty($value)) {
            $this->setObsoleteLayoutID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ObsoleteThemeID', true);
        if (null !== $value && !empty($value)) {
            $this->setObsoleteThemeID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThemeGroup', true);
        if (null !== $value && !empty($value)) {
            $this->setThemeGroup(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\ThemeGroupType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}ThemeTotal');
        if (null !== $value) {
            $this->setThemeTotal($value);
        }
    }
}
