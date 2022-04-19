<?php

namespace Nogrod\eBaySDK\MerchantData;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing DisputeArrayType
 *
 * Type used by the <b>DisputeArray</b> container that is returned in the response of the <b>GetUserDisputes</b> call. The <b>DisputeArray</b> container holds an array of one or more disputes that match the filter criteria in the call request.
 *  <br/><br/>
 *  <span class="tablenote"><strong>Note:</strong>
 *  'Item Not Received' or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetUserDisputes</b>. The <a href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to retrieve Money Back Guarantee cases programmatically.
 *  </span>
 * XSD Type: DisputeArrayType
 */
class DisputeArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * The information that describes a dispute, including
     *  the buyer's name, the transaction ID, the dispute state
     *  and status, whether the dispute is resolved,
     *  and any messages posted to the dispute.
     *
     * @var \Nogrod\eBaySDK\MerchantData\DisputeType[] $dispute
     */
    private $dispute = [

    ];

    /**
     * Adds as dispute
     *
     * The information that describes a dispute, including
     *  the buyer's name, the transaction ID, the dispute state
     *  and status, whether the dispute is resolved,
     *  and any messages posted to the dispute.
     *
     * @return self
     * @param \Nogrod\eBaySDK\MerchantData\DisputeType $dispute
     */
    public function addToDispute(\Nogrod\eBaySDK\MerchantData\DisputeType $dispute)
    {
        $this->dispute[] = $dispute;
        return $this;
    }

    /**
     * isset dispute
     *
     * The information that describes a dispute, including
     *  the buyer's name, the transaction ID, the dispute state
     *  and status, whether the dispute is resolved,
     *  and any messages posted to the dispute.
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
     * The information that describes a dispute, including
     *  the buyer's name, the transaction ID, the dispute state
     *  and status, whether the dispute is resolved,
     *  and any messages posted to the dispute.
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
     * The information that describes a dispute, including
     *  the buyer's name, the transaction ID, the dispute state
     *  and status, whether the dispute is resolved,
     *  and any messages posted to the dispute.
     *
     * @return \Nogrod\eBaySDK\MerchantData\DisputeType[]
     */
    public function getDispute()
    {
        return $this->dispute;
    }

    /**
     * Sets a new dispute
     *
     * The information that describes a dispute, including
     *  the buyer's name, the transaction ID, the dispute state
     *  and status, whether the dispute is resolved,
     *  and any messages posted to the dispute.
     *
     * @param \Nogrod\eBaySDK\MerchantData\DisputeType[] $dispute
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
                return \Nogrod\eBaySDK\MerchantData\DisputeType::fromKeyValue($v);
            }, $value));
        }
    }
}
