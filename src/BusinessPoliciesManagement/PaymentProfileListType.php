<?php

namespace Nogrod\eBaySDK\BusinessPoliciesManagement;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing PaymentProfileListType
 *
 * Container consisting of one or more payment policies that match the input criteria in a <b>getSellerProfiles<
 *  /b> call request.
 * XSD Type: PaymentProfileList
 */
class PaymentProfileListType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @var \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType[] $paymentProfile
     */
    private $paymentProfile = [

    ];

    /**
     * Adds as paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @return self
     * @param \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile
     */
    public function addToPaymentProfile(\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType $paymentProfile)
    {
        if (!is_array($this->paymentProfile)) {
            throw new \LogicException('paymentProfile is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->paymentProfile[] = $paymentProfile;
        return $this;
    }

    /**
     * isset paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentProfile($index)
    {
        return isset($this->paymentProfile[$index]);
    }

    /**
     * unset paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentProfile($index)
    {
        unset($this->paymentProfile[$index]);
    }

    /**
     * Gets as paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @return iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType>
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets a new paymentProfile
     *
     * Container consisting of details for a specific payment policy. A <b>PaymentProfile</b> container is returned in <b>getSellerProfiles</b> for each payment policy that matches the input criteria.
     *
     * @param iterable<\Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType> $paymentProfile
     * @return self
     */
    public function setPaymentProfile(iterable $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "http://www.ebay.com/marketplace/selling/v1/services");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->paymentProfile;
        if (null !== $value) {
            foreach ($value as $v) {
                $writer->startElementNs(null, 'PaymentProfile', null);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileListType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->paymentProfile = [];
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
        if ('http://www.ebay.com/marketplace/selling/v1/services' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'PaymentProfile':
                    $this->paymentProfile[] = \Nogrod\eBaySDK\BusinessPoliciesManagement\PaymentProfileType::xmlRead($reader);
                    return true;
            }
        }
        return false;
    }

    protected function jsonProperties(): array
    {
        $data = [];
        $data['PaymentProfile'] = Func::jsonList($this->paymentProfile);
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
