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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getUser();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}User", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}User');
        if (null !== $value) {
            $this->setUser(\Nogrod\eBaySDK\Trading\UserType::fromKeyValue($value));
        }
    }
}
