<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing AddMemberMessagesAAQToBidderRequestType
 *
 * The base request of the <b>AddMemberMessagesAAQToBidder</b> call, which allows a seller to send up to 10 messages to bidders/potential buyers regarding an active listing. These potential buyers may include those who have made a Best Offer on a listing.
 * XSD Type: AddMemberMessagesAAQToBidderRequestType
 */
class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
    /**
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @var \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType[] $addMemberMessagesAAQToBidderRequestContainer
     */
    private $addMemberMessagesAAQToBidderRequestContainer = [

    ];

    /**
     * Adds as addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType $addMemberMessagesAAQToBidderRequestContainer
     */
    public function addToAddMemberMessagesAAQToBidderRequestContainer(\Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType $addMemberMessagesAAQToBidderRequestContainer)
    {
        $this->addMemberMessagesAAQToBidderRequestContainer[] = $addMemberMessagesAAQToBidderRequestContainer;
        return $this;
    }

    /**
     * isset addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddMemberMessagesAAQToBidderRequestContainer($index)
    {
        return isset($this->addMemberMessagesAAQToBidderRequestContainer[$index]);
    }

    /**
     * unset addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddMemberMessagesAAQToBidderRequestContainer($index)
    {
        unset($this->addMemberMessagesAAQToBidderRequestContainer[$index]);
    }

    /**
     * Gets as addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @return \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType[]
     */
    public function getAddMemberMessagesAAQToBidderRequestContainer()
    {
        return $this->addMemberMessagesAAQToBidderRequestContainer;
    }

    /**
     * Sets a new addMemberMessagesAAQToBidderRequestContainer
     *
     * An <b>AddMemberMessagesAAQToBidderRequestContainer</b> container is required for each message being sent to unique bidders/potential buyers. A seller can send up to 10 messages to unique bidders/potential buyers in one <b>AddMemberMessagesAAQToBidder</b> call.
     *
     * @param \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType[] $addMemberMessagesAAQToBidderRequestContainer
     * @return self
     */
    public function setAddMemberMessagesAAQToBidderRequestContainer(array $addMemberMessagesAAQToBidderRequestContainer)
    {
        $this->addMemberMessagesAAQToBidderRequestContainer = $addMemberMessagesAAQToBidderRequestContainer;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getAddMemberMessagesAAQToBidderRequestContainer();
        if (null !== $value && !empty($this->getAddMemberMessagesAAQToBidderRequestContainer())) {
            $writer->write(array_map(function ($v) {
                return ["AddMemberMessagesAAQToBidderRequestContainer" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}AddMemberMessagesAAQToBidderRequestContainer', true);
        if (null !== $value && !empty($value)) {
            $this->setAddMemberMessagesAAQToBidderRequestContainer(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\AddMemberMessagesAAQToBidderRequestContainerType::fromKeyValue($v);
            }, $value));
        }
    }
}
