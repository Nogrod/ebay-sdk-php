<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetUserResponseType
 *
 * Base response of the <b>GetUser</b> call. This response includes detailed information about the user, including Feedback data, eBay registration date, selling feature eligibility, valid subsriptions, etc.
 * XSD Type: GetUserResponseType
 */
class GetUserResponseType extends AbstractResponseType
{
    /**
     * This container consists of detailed information about the user specified in the call request (through the <b>UserID</b> field) or the eBay user account that is tied to the <strong>eBayAuthToken</strong> value that is passed in the call request.
     *  <br><br>
     *  Some sensitive data will be masked/omitted if the returned eBay user is not the person making the <b>GetUser</b> call. More information on another eBay user will be revealed to the person making the call if that person has an order relationship for an eBay listing specified in the <strong>ItemID</strong> field of the call request.
     *
     * @var \Nogrod\eBaySDK\Trading\UserType $user
     */
    private $user = null;

    /**
     * Gets as user
     *
     * This container consists of detailed information about the user specified in the call request (through the <b>UserID</b> field) or the eBay user account that is tied to the <strong>eBayAuthToken</strong> value that is passed in the call request.
     *  <br><br>
     *  Some sensitive data will be masked/omitted if the returned eBay user is not the person making the <b>GetUser</b> call. More information on another eBay user will be revealed to the person making the call if that person has an order relationship for an eBay listing specified in the <strong>ItemID</strong> field of the call request.
     *
     * @return \Nogrod\eBaySDK\Trading\UserType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * This container consists of detailed information about the user specified in the call request (through the <b>UserID</b> field) or the eBay user account that is tied to the <strong>eBayAuthToken</strong> value that is passed in the call request.
     *  <br><br>
     *  Some sensitive data will be masked/omitted if the returned eBay user is not the person making the <b>GetUser</b> call. More information on another eBay user will be revealed to the person making the call if that person has an order relationship for an eBay listing specified in the <strong>ItemID</strong> field of the call request.
     *
     * @param \Nogrod\eBaySDK\Trading\UserType $user
     * @return self
     */
    public function setUser(\Nogrod\eBaySDK\Trading\UserType $user)
    {
        $this->user = $user;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->user;
        if (null !== $value) {
            $writer->startElementNs(null, 'User', null);
            $value->xmlSerialize($writer);
            $writer->endElement();
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetUserResponseType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        parent::xmlInitLists();
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
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'User':
                    $this->user = \Nogrod\eBaySDK\Trading\UserType::xmlRead($reader);
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['User'] = $this->user;
        return $data;
    }
}
