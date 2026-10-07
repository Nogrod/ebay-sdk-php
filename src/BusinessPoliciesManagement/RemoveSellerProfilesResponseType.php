<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RemoveSellerProfilesResponseType
 *
 * The response container for the <b>removeSellerProfiles</b> call.
 * XSD Type: RemoveSellerProfilesResponse
 */
class RemoveSellerProfilesResponseType extends BaseResponseType
{
    /**
     * Container consisting of the <b>profileId</b> values for business policies that were successfully deleted, as well as an <b>ack</b> value to indicate if the call was successful. An <b>errorMessage</b> container will be returned if the call generated any errors or warnings.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType[] $sellerProfileResponseStatus
     */
    private $sellerProfileResponseStatus = [

    ];

    /**
     * Adds as sellerProfileResponseStatus
     *
     * Container consisting of the <b>profileId</b> values for business policies that were successfully deleted, as well as an <b>ack</b> value to indicate if the call was successful. An <b>errorMessage</b> container will be returned if the call generated any errors or warnings.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType $sellerProfileResponseStatus
     */
    public function addToSellerProfileResponseStatus(\Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType $sellerProfileResponseStatus)
    {
        if (!is_array($this->sellerProfileResponseStatus)) {
            throw new \LogicException('sellerProfileResponseStatus is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->sellerProfileResponseStatus[] = $sellerProfileResponseStatus;
        return $this;
    }

    /**
     * isset sellerProfileResponseStatus
     *
     * Container consisting of the <b>profileId</b> values for business policies that were successfully deleted, as well as an <b>ack</b> value to indicate if the call was successful. An <b>errorMessage</b> container will be returned if the call generated any errors or warnings.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerProfileResponseStatus($index)
    {
        return isset($this->sellerProfileResponseStatus[$index]);
    }

    /**
     * unset sellerProfileResponseStatus
     *
     * Container consisting of the <b>profileId</b> values for business policies that were successfully deleted, as well as an <b>ack</b> value to indicate if the call was successful. An <b>errorMessage</b> container will be returned if the call generated any errors or warnings.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerProfileResponseStatus($index)
    {
        unset($this->sellerProfileResponseStatus[$index]);
    }

    /**
     * Gets as sellerProfileResponseStatus
     *
     * Container consisting of the <b>profileId</b> values for business policies that were successfully deleted, as well as an <b>ack</b> value to indicate if the call was successful. An <b>errorMessage</b> container will be returned if the call generated any errors or warnings.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType>
     */
    public function getSellerProfileResponseStatus()
    {
        return $this->sellerProfileResponseStatus;
    }

    /**
     * Sets a new sellerProfileResponseStatus
     *
     * Container consisting of the <b>profileId</b> values for business policies that were successfully deleted, as well as an <b>ack</b> value to indicate if the call was successful. An <b>errorMessage</b> container will be returned if the call generated any errors or warnings.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType> $sellerProfileResponseStatus
     * @return self
     */
    public function setSellerProfileResponseStatus(iterable $sellerProfileResponseStatus)
    {
        $this->sellerProfileResponseStatus = $sellerProfileResponseStatus;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->sellerProfileResponseStatus;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'sellerProfileResponseStatus', null);
                $v->xmlSerialize($writer);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
        $this->sellerProfileResponseStatus = [];
    }

    /**
     * Called by Func::readObject(): reads the attribute the reader is positioned on,
     * if it belongs to this type.
     */
    public function xmlReadAttribute(\XMLReader $reader): bool
    {
        return parent::xmlReadAttribute($reader);
    }

    /**
     * Called by Func::readObject(): reads the child element the reader is positioned
     * on, if it belongs to this type, and moves past its end.
     */
    public function xmlReadElement(\XMLReader $reader): bool
    {
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'sellerProfileResponseStatus':
                    $this->sellerProfileResponseStatus[] = \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }
}
