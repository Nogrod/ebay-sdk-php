<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing RequiredSellerActionArrayType
 *
 * This type defines the <b>RequiredSellerActionArray</b> container,
 *  which may contain one or more <b>RequiredSellerAction</b> fields.
 * XSD Type: RequiredSellerActionArrayType
 */
class RequiredSellerActionArrayType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This field contains a possible action that a seller can take to expedite the
     *  release of a payment hold. There can be one or more <b>RequiredSellerAction</b>
     *  fields in the <b>RequiredSellerActionArray</b> container.
     *
     * @var string[] $requiredSellerAction
     */
    private $requiredSellerAction = [

    ];

    /**
     * Adds as requiredSellerAction
     *
     * This field contains a possible action that a seller can take to expedite the
     *  release of a payment hold. There can be one or more <b>RequiredSellerAction</b>
     *  fields in the <b>RequiredSellerActionArray</b> container.
     *
     * @return self
     * @param string $requiredSellerAction
     */
    public function addToRequiredSellerAction($requiredSellerAction)
    {
        $this->requiredSellerAction[] = $requiredSellerAction;
        return $this;
    }

    /**
     * isset requiredSellerAction
     *
     * This field contains a possible action that a seller can take to expedite the
     *  release of a payment hold. There can be one or more <b>RequiredSellerAction</b>
     *  fields in the <b>RequiredSellerActionArray</b> container.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredSellerAction($index)
    {
        return isset($this->requiredSellerAction[$index]);
    }

    /**
     * unset requiredSellerAction
     *
     * This field contains a possible action that a seller can take to expedite the
     *  release of a payment hold. There can be one or more <b>RequiredSellerAction</b>
     *  fields in the <b>RequiredSellerActionArray</b> container.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredSellerAction($index)
    {
        unset($this->requiredSellerAction[$index]);
    }

    /**
     * Gets as requiredSellerAction
     *
     * This field contains a possible action that a seller can take to expedite the
     *  release of a payment hold. There can be one or more <b>RequiredSellerAction</b>
     *  fields in the <b>RequiredSellerActionArray</b> container.
     *
     * @return string[]
     */
    public function getRequiredSellerAction()
    {
        return $this->requiredSellerAction;
    }

    /**
     * Sets a new requiredSellerAction
     *
     * This field contains a possible action that a seller can take to expedite the
     *  release of a payment hold. There can be one or more <b>RequiredSellerAction</b>
     *  fields in the <b>RequiredSellerActionArray</b> container.
     *
     * @param string $requiredSellerAction
     * @return self
     */
    public function setRequiredSellerAction(array $requiredSellerAction)
    {
        $this->requiredSellerAction = $requiredSellerAction;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getRequiredSellerAction();
        if (null !== $value && !empty($this->getRequiredSellerAction())) {
            $writer->write(array_map(function ($v) {
                return ["RequiredSellerAction" => $v];
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}RequiredSellerAction', true);
        if (null !== $value && !empty($value)) {
            $this->setRequiredSellerAction($value);
        }
    }
}
