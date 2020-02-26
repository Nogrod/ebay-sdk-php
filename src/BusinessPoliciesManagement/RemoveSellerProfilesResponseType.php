<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

/**
 * Class representing RemoveSellerProfilesResponseType
 *
 *
 * XSD Type: RemoveSellerProfilesResponse
 */
class RemoveSellerProfilesResponseType extends BaseResponseType
{

    /**
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType[] $sellerProfileResponseStatus
     */
    private $sellerProfileResponseStatus = [
        
    ];

    /**
     * Adds as sellerProfileResponseStatus
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType $sellerProfileResponseStatus
     */
    public function addToSellerProfileResponseStatus(\Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType $sellerProfileResponseStatus)
    {
        $this->sellerProfileResponseStatus[] = $sellerProfileResponseStatus;
        return $this;
    }

    /**
     * isset sellerProfileResponseStatus
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
     * @return \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType[]
     */
    public function getSellerProfileResponseStatus()
    {
        return $this->sellerProfileResponseStatus;
    }

    /**
     * Sets a new sellerProfileResponseStatus
     *
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType[] $sellerProfileResponseStatus
     * @return self
     */
    public function setSellerProfileResponseStatus(array $sellerProfileResponseStatus)
    {
        $this->sellerProfileResponseStatus = $sellerProfileResponseStatus;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getSellerProfileResponseStatus();
        if (null !== $value && !empty($this->getSellerProfileResponseStatus())) {
            $writer->write(array_map(function ($v) {
                return ["sellerProfileResponseStatus" => $v];
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
        parent::setKeyValue($keyValue);
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/selling/v1/services}sellerProfileResponseStatus', true);
        if (null !== $value && !empty($value)) {
            $this->setSellerProfileResponseStatus(array_map(function ($v) {
                return \Nogrod\eBaySDK\BusinessPoliciesManagement\SellerProfileResponseStatusType::fromKeyValue($v);
            }, $value));
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
