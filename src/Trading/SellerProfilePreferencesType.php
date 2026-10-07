<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing SellerProfilePreferencesType
 *
 * Type defining the <b>SellerProfilePreferences</b> container. This container
 *  consists of a flag that indicates whether or not the seller has opted into Business
 *  Policies, as well as a list of Business Policies profiles that have been set up for the
 *  seller's account.
 * XSD Type: SellerProfilePreferencesType
 */
class SellerProfilePreferencesType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Boolean flag indicating whether or not a seller has opted in to Business
     *  Policies. Sellers must opt in to Business Policies to create and manage payment,
     *  return policy, and shipping profiles.
     *
     * @var bool $sellerProfileOptedIn
     */
    private $sellerProfileOptedIn = null;

    /**
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @var \Nogrod\eBaySDK\Trading\SupportedSellerProfileType[] $supportedSellerProfiles
     */
    private $supportedSellerProfiles = null;

    /**
     * Gets as sellerProfileOptedIn
     *
     * Boolean flag indicating whether or not a seller has opted in to Business
     *  Policies. Sellers must opt in to Business Policies to create and manage payment,
     *  return policy, and shipping profiles.
     *
     * @return bool
     */
    public function getSellerProfileOptedIn()
    {
        return $this->sellerProfileOptedIn;
    }

    /**
     * Sets a new sellerProfileOptedIn
     *
     * Boolean flag indicating whether or not a seller has opted in to Business
     *  Policies. Sellers must opt in to Business Policies to create and manage payment,
     *  return policy, and shipping profiles.
     *
     * @param bool $sellerProfileOptedIn
     * @return self
     */
    public function setSellerProfileOptedIn($sellerProfileOptedIn)
    {
        $this->sellerProfileOptedIn = $sellerProfileOptedIn;
        return $this;
    }

    /**
     * Adds as supportedSellerProfile
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\SupportedSellerProfileType $supportedSellerProfile
     */
    public function addToSupportedSellerProfiles(\Nogrod\eBaySDK\Trading\SupportedSellerProfileType $supportedSellerProfile)
    {
        if (!is_array($this->supportedSellerProfiles)) {
            throw new \LogicException('supportedSellerProfiles is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->supportedSellerProfiles[] = $supportedSellerProfile;
        return $this;
    }

    /**
     * isset supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedSellerProfiles($index)
    {
        return isset($this->supportedSellerProfiles[$index]);
    }

    /**
     * unset supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedSellerProfiles($index)
    {
        unset($this->supportedSellerProfiles[$index]);
    }

    /**
     * Gets as supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @return iterable<\Nogrod\eBaySDK\Trading\SupportedSellerProfileType>
     */
    public function getSupportedSellerProfiles()
    {
        return $this->supportedSellerProfiles;
    }

    /**
     * Sets a new supportedSellerProfiles
     *
     * Container consisting of one or more Business Policies profiles active for a
     *  seller's account. This container is only returned if <b>SellerProfileOptedIn</b> = SellerProfilePreferences
     *  and the seller has one or more Business Policies profiles active on the account.
     *
     * @param iterable<\Nogrod\eBaySDK\Trading\SupportedSellerProfileType> $supportedSellerProfiles
     * @return self
     */
    public function setSupportedSellerProfiles(iterable $supportedSellerProfiles)
    {
        $this->supportedSellerProfiles = $supportedSellerProfiles;
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
        $value = $this->sellerProfileOptedIn;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SellerProfileOptedIn', null, ($value ? 'true' : 'false'));
        }
        $value = $this->supportedSellerProfiles;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'SupportedSellerProfiles', null);
                    $open = true;
                }
                $writer->startElementNs(null, 'SupportedSellerProfile', null);
                $v->xmlSerialize($writer);
                $writer->endElement();
            }
            if ($open) {
                $writer->endElement();
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\SellerProfilePreferencesType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->supportedSellerProfiles = [];
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
                case 'SellerProfileOptedIn':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->sellerProfileOptedIn = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
                case 'SupportedSellerProfiles':
                    $this->supportedSellerProfiles = Func::readList($reader, 'SupportedSellerProfile', 'urn:ebay:apis:eBLBaseComponents', static fn (\XMLReader $reader) => \Nogrod\eBaySDK\Trading\SupportedSellerProfileType::xmlRead($reader));
                    return true;
            }
        }
        return false;
    }
}
