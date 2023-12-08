<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RecoupmentPolicyConsentType
 *
 * Type used by the <strong>RecoupmentPolicyConsent</strong> container that is returned in the <strong>GetItem</strong> call response to indicate which sites the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement.
 * XSD Type: RecoupmentPolicyConsentType
 */
class RecoupmentPolicyConsentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     *
     * @var string[] $site
     */
    private $site = [

    ];

    /**
     * Adds as site
     *
     * A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     *
     * @return self
     * @param string $site
     */
    public function addToSite($site)
    {
        $this->site[] = $site;
        return $this;
    }

    /**
     * isset site
     *
     * A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSite($index)
    {
        return isset($this->site[$index]);
    }

    /**
     * unset site
     *
     * A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSite($index)
    {
        unset($this->site[$index]);
    }

    /**
     * Gets as site
     *
     * A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     *
     * @return string[]
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Sets a new site
     *
     * A unique identifier for an eBay site. Each site where the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement is returned. The enumeration values that represent these eBay sites can be found in <strong>SiteCodeType</strong>.
     *
     * @param string $site
     * @return self
     */
    public function setSite(array $site)
    {
        $this->site = $site;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getSite();
        if (null !== $value && !empty($this->getSite())) {
            $writer->write(array_map(function ($v) {return ["Site" => $v];}, $value));
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Site', true);
        if (null !== $value && !empty($value)) {
            $this->setSite($value);
        }
    }
}
