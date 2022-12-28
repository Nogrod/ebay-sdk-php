<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing StoreCustomPageType
 *
 *
 * XSD Type: StoreCustomPageType
 */
class StoreCustomPageType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Name of the eBay Store custom page. This value is required if you are creating a new
     *  page (and omitting a <b>PageID</b> value). Note that you must include a
     *  name for the page even if you are using the <b>PreviewEnabled</b> flag.
     *  However, since using the preview functionality means that the page will not be
     *  persisted, you can enter a dummy value for this field if you have not decided on a
     *  name for the page. The <b>Name</b> value is used in links to the page.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Unique identifier for an eBay Store custom page. If you specify a valid
     *  <b>PageID</b> value in a
     *  <b>SetStoreCustomPage</b> call, the existing custom page
     *  is updated. If you do not specify a <b>PageID</b> value, you are
     *  creating a new custom page.
     *  <br/><br/>
     *  The <b>PageID</b> field is always returned in
     *  <b>GetStoreCustomPage</b>.
     *
     * @var int $pageID
     */
    private $pageID = null;

    /**
     * The URL path of the eBay Store custom page. This field is only required if you are
     *  using Chinese characters in the <b>Name</b> field. The URL path of the
     *  eBay Store custom page is normally derived from the <b>Name</b> field, but
     *  the URL path cannot be derived from the name of the custom page if it contains Chinese
     *  characters because URLs cannot contain Chinese characters.
     *  <br/><br/>
     *  The <b>URLPath</b> is only returned in the <b>GetStoreCustomPage</b>
     *  response if it is defined for the eBay Store custom page, and if a <b>PageID</b>
     *  value is included in the request.
     *
     * @var string $uRLPath
     */
    private $uRLPath = null;

    /**
     * The full URL of the eBay Store custom page, which is generally derived from the
     *  <b>CustomPage.Name</b> value. The exception to this rule is if the seller
     *  specified a custom URL using the <b>CustomPage.URLPath</b> field in a
     *  <b>SetStoreCustomPage</b> call.
     *  <br/><br/>
     *  The <b>URL</b> is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * This value indicates the status of the eBay custom page. In a
     *  <b>SetStoreCustomPage</b> call, the seller uses the optional
     *  <b>Status</b> field to make an inactive custom page active, to make an
     *  active custom page inactive, or to delete an active or inactive custom page. To
     *  change the status (including delete) of a custom page, a <b>PageID</b>
     *  value must be included to identify the custom page to modify.
     *  <br/><br/>
     *  The <b>Status</b> value is always returned in the
     *  <b>GetStoreCustomPage</b> response.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The HTML content of the eBay Store custom page. This field has a maximum size of 96
     *  kilobytes. If the <b>PreviewEnabled</b> field is set to 'true', then
     *  this field is required in a <b>SetStoreCustomPage</b> call. Otherwise,
     *  it is optional.
     *  <br/><br/>
     *  The <b>Content</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @var string $content
     */
    private $content = null;

    /**
     * This flag controls whether or not the left navigation bar is included in the eBay
     *  Store custom page. To include the left navigation bar in a custom page, the seller
     *  will include the <b>LeftNav</b> field in the <b>SetStoreCustomPage</b>
     *  request and set it to 'true'.
     *  <br/><br/>
     *  The <b>LeftNav</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @var bool $leftNav
     */
    private $leftNav = null;

    /**
     * This flag controls whether or not a custom page preview is enabled. To enable the
     *  a custom page preview, the seller will include the
     *  <b>PreviewEnabled</b> field in the <b>SetStoreCustomPage</b>
     *  request and set it to 'true'.
     *  <br/><br/>
     *  The <b>PreviewEnabled</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @var bool $previewEnabled
     */
    private $previewEnabled = null;

    /**
     * This integer value controls the order in which the corresponding eBay Store custom
     *  page is displayed in the list of custom pages. To make the corresponding custom
     *  page appear first in the list of custom pages, the seller would include the
     *  <b>Order</b> field and set its value to '1'.
     *  <br/><br/>
     *  The <b>Order</b> value is always returned in the
     *  <b>GetStoreCustomPage</b> response.
     *
     * @var int $order
     */
    private $order = null;

    /**
     * Gets as name
     *
     * Name of the eBay Store custom page. This value is required if you are creating a new
     *  page (and omitting a <b>PageID</b> value). Note that you must include a
     *  name for the page even if you are using the <b>PreviewEnabled</b> flag.
     *  However, since using the preview functionality means that the page will not be
     *  persisted, you can enter a dummy value for this field if you have not decided on a
     *  name for the page. The <b>Name</b> value is used in links to the page.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the eBay Store custom page. This value is required if you are creating a new
     *  page (and omitting a <b>PageID</b> value). Note that you must include a
     *  name for the page even if you are using the <b>PreviewEnabled</b> flag.
     *  However, since using the preview functionality means that the page will not be
     *  persisted, you can enter a dummy value for this field if you have not decided on a
     *  name for the page. The <b>Name</b> value is used in links to the page.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as pageID
     *
     * Unique identifier for an eBay Store custom page. If you specify a valid
     *  <b>PageID</b> value in a
     *  <b>SetStoreCustomPage</b> call, the existing custom page
     *  is updated. If you do not specify a <b>PageID</b> value, you are
     *  creating a new custom page.
     *  <br/><br/>
     *  The <b>PageID</b> field is always returned in
     *  <b>GetStoreCustomPage</b>.
     *
     * @return int
     */
    public function getPageID()
    {
        return $this->pageID;
    }

    /**
     * Sets a new pageID
     *
     * Unique identifier for an eBay Store custom page. If you specify a valid
     *  <b>PageID</b> value in a
     *  <b>SetStoreCustomPage</b> call, the existing custom page
     *  is updated. If you do not specify a <b>PageID</b> value, you are
     *  creating a new custom page.
     *  <br/><br/>
     *  The <b>PageID</b> field is always returned in
     *  <b>GetStoreCustomPage</b>.
     *
     * @param int $pageID
     * @return self
     */
    public function setPageID($pageID)
    {
        $this->pageID = $pageID;
        return $this;
    }

    /**
     * Gets as uRLPath
     *
     * The URL path of the eBay Store custom page. This field is only required if you are
     *  using Chinese characters in the <b>Name</b> field. The URL path of the
     *  eBay Store custom page is normally derived from the <b>Name</b> field, but
     *  the URL path cannot be derived from the name of the custom page if it contains Chinese
     *  characters because URLs cannot contain Chinese characters.
     *  <br/><br/>
     *  The <b>URLPath</b> is only returned in the <b>GetStoreCustomPage</b>
     *  response if it is defined for the eBay Store custom page, and if a <b>PageID</b>
     *  value is included in the request.
     *
     * @return string
     */
    public function getURLPath()
    {
        return $this->uRLPath;
    }

    /**
     * Sets a new uRLPath
     *
     * The URL path of the eBay Store custom page. This field is only required if you are
     *  using Chinese characters in the <b>Name</b> field. The URL path of the
     *  eBay Store custom page is normally derived from the <b>Name</b> field, but
     *  the URL path cannot be derived from the name of the custom page if it contains Chinese
     *  characters because URLs cannot contain Chinese characters.
     *  <br/><br/>
     *  The <b>URLPath</b> is only returned in the <b>GetStoreCustomPage</b>
     *  response if it is defined for the eBay Store custom page, and if a <b>PageID</b>
     *  value is included in the request.
     *
     * @param string $uRLPath
     * @return self
     */
    public function setURLPath($uRLPath)
    {
        $this->uRLPath = $uRLPath;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * The full URL of the eBay Store custom page, which is generally derived from the
     *  <b>CustomPage.Name</b> value. The exception to this rule is if the seller
     *  specified a custom URL using the <b>CustomPage.URLPath</b> field in a
     *  <b>SetStoreCustomPage</b> call.
     *  <br/><br/>
     *  The <b>URL</b> is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * The full URL of the eBay Store custom page, which is generally derived from the
     *  <b>CustomPage.Name</b> value. The exception to this rule is if the seller
     *  specified a custom URL using the <b>CustomPage.URLPath</b> field in a
     *  <b>SetStoreCustomPage</b> call.
     *  <br/><br/>
     *  The <b>URL</b> is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as status
     *
     * This value indicates the status of the eBay custom page. In a
     *  <b>SetStoreCustomPage</b> call, the seller uses the optional
     *  <b>Status</b> field to make an inactive custom page active, to make an
     *  active custom page inactive, or to delete an active or inactive custom page. To
     *  change the status (including delete) of a custom page, a <b>PageID</b>
     *  value must be included to identify the custom page to modify.
     *  <br/><br/>
     *  The <b>Status</b> value is always returned in the
     *  <b>GetStoreCustomPage</b> response.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * This value indicates the status of the eBay custom page. In a
     *  <b>SetStoreCustomPage</b> call, the seller uses the optional
     *  <b>Status</b> field to make an inactive custom page active, to make an
     *  active custom page inactive, or to delete an active or inactive custom page. To
     *  change the status (including delete) of a custom page, a <b>PageID</b>
     *  value must be included to identify the custom page to modify.
     *  <br/><br/>
     *  The <b>Status</b> value is always returned in the
     *  <b>GetStoreCustomPage</b> response.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as content
     *
     * The HTML content of the eBay Store custom page. This field has a maximum size of 96
     *  kilobytes. If the <b>PreviewEnabled</b> field is set to 'true', then
     *  this field is required in a <b>SetStoreCustomPage</b> call. Otherwise,
     *  it is optional.
     *  <br/><br/>
     *  The <b>Content</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * The HTML content of the eBay Store custom page. This field has a maximum size of 96
     *  kilobytes. If the <b>PreviewEnabled</b> field is set to 'true', then
     *  this field is required in a <b>SetStoreCustomPage</b> call. Otherwise,
     *  it is optional.
     *  <br/><br/>
     *  The <b>Content</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Gets as leftNav
     *
     * This flag controls whether or not the left navigation bar is included in the eBay
     *  Store custom page. To include the left navigation bar in a custom page, the seller
     *  will include the <b>LeftNav</b> field in the <b>SetStoreCustomPage</b>
     *  request and set it to 'true'.
     *  <br/><br/>
     *  The <b>LeftNav</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @return bool
     */
    public function getLeftNav()
    {
        return $this->leftNav;
    }

    /**
     * Sets a new leftNav
     *
     * This flag controls whether or not the left navigation bar is included in the eBay
     *  Store custom page. To include the left navigation bar in a custom page, the seller
     *  will include the <b>LeftNav</b> field in the <b>SetStoreCustomPage</b>
     *  request and set it to 'true'.
     *  <br/><br/>
     *  The <b>LeftNav</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @param bool $leftNav
     * @return self
     */
    public function setLeftNav($leftNav)
    {
        $this->leftNav = $leftNav;
        return $this;
    }

    /**
     * Gets as previewEnabled
     *
     * This flag controls whether or not a custom page preview is enabled. To enable the
     *  a custom page preview, the seller will include the
     *  <b>PreviewEnabled</b> field in the <b>SetStoreCustomPage</b>
     *  request and set it to 'true'.
     *  <br/><br/>
     *  The <b>PreviewEnabled</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @return bool
     */
    public function getPreviewEnabled()
    {
        return $this->previewEnabled;
    }

    /**
     * Sets a new previewEnabled
     *
     * This flag controls whether or not a custom page preview is enabled. To enable the
     *  a custom page preview, the seller will include the
     *  <b>PreviewEnabled</b> field in the <b>SetStoreCustomPage</b>
     *  request and set it to 'true'.
     *  <br/><br/>
     *  The <b>PreviewEnabled</b> field is only returned in the
     *  <b>GetStoreCustomPage</b> response if a <b>PageID</b> value
     *  is included in the request.
     *
     * @param bool $previewEnabled
     * @return self
     */
    public function setPreviewEnabled($previewEnabled)
    {
        $this->previewEnabled = $previewEnabled;
        return $this;
    }

    /**
     * Gets as order
     *
     * This integer value controls the order in which the corresponding eBay Store custom
     *  page is displayed in the list of custom pages. To make the corresponding custom
     *  page appear first in the list of custom pages, the seller would include the
     *  <b>Order</b> field and set its value to '1'.
     *  <br/><br/>
     *  The <b>Order</b> value is always returned in the
     *  <b>GetStoreCustomPage</b> response.
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * This integer value controls the order in which the corresponding eBay Store custom
     *  page is displayed in the list of custom pages. To make the corresponding custom
     *  page appear first in the list of custom pages, the seller would include the
     *  <b>Order</b> field and set its value to '1'.
     *  <br/><br/>
     *  The <b>Order</b> value is always returned in the
     *  <b>GetStoreCustomPage</b> response.
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getName();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Name", $value);
        }
        $value = $this->getPageID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PageID", $value);
        }
        $value = $this->getURLPath();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URLPath", $value);
        }
        $value = $this->getURL();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}URL", $value);
        }
        $value = $this->getStatus();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Status", $value);
        }
        $value = $this->getContent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Content", $value);
        }
        $value = $this->getLeftNav();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LeftNav", $value);
        }
        $value = $this->getPreviewEnabled();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}PreviewEnabled", $value);
        }
        $value = $this->getOrder();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Order", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Name');
        if (null !== $value) {
            $this->setName($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PageID');
        if (null !== $value) {
            $this->setPageID($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URLPath');
        if (null !== $value) {
            $this->setURLPath($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}URL');
        if (null !== $value) {
            $this->setURL($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Status');
        if (null !== $value) {
            $this->setStatus($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Content');
        if (null !== $value) {
            $this->setContent($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LeftNav');
        if (null !== $value) {
            $this->setLeftNav($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}PreviewEnabled');
        if (null !== $value) {
            $this->setPreviewEnabled($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Order');
        if (null !== $value) {
            $this->setOrder($value);
        }
    }
}
