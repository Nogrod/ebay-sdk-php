<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RecoupmentPolicyConsentType
 *
 * Type used by the <strong>RecoupmentPolicyConsent</strong> container that is returned in the <strong>GetItem</strong> call response to indicate which sites the user (specified in <strong>UserID</strong> field of call request) has signed a cross-border trade Recoupment Policy Agreement.
 * XSD Type: RecoupmentPolicyConsentType
 */
class RecoupmentPolicyConsentType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
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
        if (!is_array($this->site)) {
            throw new \LogicException('site is a lazy iterable and cannot be appended to; set an array instead.');
        }
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
     * @return iterable<string>
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
    public function setSite(iterable $site)
    {
        $this->site = $site;
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
        $value = $this->site;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->writeElementNs(null, 'Site', null, (string) $v);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\RecoupmentPolicyConsentType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->site = [];
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
                case 'Site':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->site[] = $value;
                    }
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Site'] = Func::jsonList($this->site);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
