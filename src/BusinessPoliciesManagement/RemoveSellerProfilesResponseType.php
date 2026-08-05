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

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellerProfileResponseStatus();
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->write([["sellerProfileResponseStatus" => $v]]);
            }
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::fromKeyValue($reader->parseInnerTree([]));
    }

    public static function fromKeyValue($keyValue): \Nogrod\eBaySDK\BusinessPoliciesManagement\RemoveSellerProfilesResponseType
    {
        $self = new self();
        $self->setKeyValue($keyValue);
        return $self;
    }

    public function setKeyValue($keyValue): void
    {
        parent::setKeyValue($keyValue);
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}sellerProfileResponseStatus');
        if (null !== $value) {
            $this->setSellerProfileResponseStatus(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType::fromKeyValue($v);
            }, $value));
        }
    }
}
