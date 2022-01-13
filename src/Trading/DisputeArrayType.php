<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeArrayType
 *
 * Type used by the <b>DisputeArray</b> container that is returned in the response of the <b>GetUserDisputes</b> call. The <b>DisputeArray</b> container holds an array of one or more Unpaid Item cases that match the filter criteria in the call request.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  The <b>GetUserDisputes</b> call now only retrieves Unpaid Item cases, and is no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and these calls do not support eBay Money Back Guarantee cases.
 *  <br><br>
 *  To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center.
 *  </span>
 * XSD Type: DisputeArrayType
 */
class DisputeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container consists of detailed information on each Unpaid Item case that matches the input criteria.
     *
     * @var \Nogrod\eBaySDK\Trading\DisputeType[] $dispute
     */
    private $dispute = [
        
    ];

    /**
     * Adds as dispute
     *
     * This container consists of detailed information on each Unpaid Item case that matches the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\DisputeType $dispute
     */
    public function addToDispute(\Nogrod\eBaySDK\Trading\DisputeType $dispute)
    {
        $this->dispute[] = $dispute;
        return $this;
    }

    /**
     * isset dispute
     *
     * This container consists of detailed information on each Unpaid Item case that matches the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDispute($index)
    {
        return isset($this->dispute[$index]);
    }

    /**
     * unset dispute
     *
     * This container consists of detailed information on each Unpaid Item case that matches the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDispute($index)
    {
        unset($this->dispute[$index]);
    }

    /**
     * Gets as dispute
     *
     * This container consists of detailed information on each Unpaid Item case that matches the input criteria.
     *
     * @return \Nogrod\eBaySDK\Trading\DisputeType[]
     */
    public function getDispute()
    {
        return $this->dispute;
    }

    /**
     * Sets a new dispute
     *
     * This container consists of detailed information on each Unpaid Item case that matches the input criteria.
     *
     * @param \Nogrod\eBaySDK\Trading\DisputeType[] $dispute
     * @return self
     */
    public function setDispute(array $dispute)
    {
        $this->dispute = $dispute;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDispute();
        if (null !== $value && !empty($this->getDispute())) {
            $writer->write(array_map(function ($v) {
                return ["Dispute" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Dispute', true);
        if (null !== $value && !empty($value)) {
            $this->setDispute(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\DisputeType::fromKeyValue($v);
            }, $value));
        }
    }
}
