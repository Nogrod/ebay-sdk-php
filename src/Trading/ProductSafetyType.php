<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ProductSafetyType
 *
 * Type defining the <b>Pictograms</b> and <b>Statements</b> containers, and the <b>Component</b> field, that provide product safety and compliance related information.
 *  <br />
 *  <span class="tablenote"><b>Note: </b> As a part of General Product Safety Regulation (GPSR) requirements effective on December 13th, 2024, sellers sellers operating in, or shipping to, EU-based countries or Northern Ireland are conditionally required to provide product safety and compliance information in their eBay listings. For more information on GPSR, see <a href = "https://www.ebay.com/sellercenter/resources/general-product-safety-regulation" target="_blank">General Product Safety Regulation (GPSR)</a>.</span>
 * XSD Type: ProductSafetyType
 */
class ProductSafetyType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * This container is used by the seller to provide product safety pictograms for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @var string[] $pictograms
     */
    private $pictograms = null;

    /**
     * This container is used by the seller to provide product safety statements for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @var string[] $statements
     */
    private $statements = null;

    /**
     * This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. This field is optional for Product Safety.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Component information can only be specified if used with the <b>Pictograms</b> and/or <b>Statements</b> field; if the component is provided without one or both of these fields, an error will occur. </span>
     *
     * @var string $component
     */
    private $component = null;

    /**
     * Adds as pictogram
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @return self
     * @param string $pictogram
     */
    public function addToPictograms($pictogram)
    {
        if (!is_array($this->pictograms)) {
            throw new \LogicException('pictograms is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->pictograms[] = $pictogram;
        return $this;
    }

    /**
     * isset pictograms
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPictograms($index)
    {
        return isset($this->pictograms[$index]);
    }

    /**
     * unset pictograms
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPictograms($index)
    {
        unset($this->pictograms[$index]);
    }

    /**
     * Gets as pictograms
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @return iterable<string>
     */
    public function getPictograms()
    {
        return $this->pictograms;
    }

    /**
     * Sets a new pictograms
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @param iterable<string> $pictograms
     * @return self
     */
    public function setPictograms(iterable $pictograms)
    {
        $this->pictograms = $pictograms;
        return $this;
    }

    /**
     * Adds as statement
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @return self
     * @param string $statement
     */
    public function addToStatements($statement)
    {
        if (!is_array($this->statements)) {
            throw new \LogicException('statements is a lazy iterable and cannot be appended to; set an array instead.');
        }
        $this->statements[] = $statement;
        return $this;
    }

    /**
     * isset statements
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatements($index)
    {
        return isset($this->statements[$index]);
    }

    /**
     * unset statements
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatements($index)
    {
        unset($this->statements[$index]);
    }

    /**
     * Gets as statements
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @return iterable<string>
     */
    public function getStatements()
    {
        return $this->statements;
    }

    /**
     * Sets a new statements
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is conditionally required if product safety information is supplied.
     *  <br />
     *  <span class="tablenote"><b>Note:</b> When supplying product safety information, one of the following elements is required: <b>Pictograms</b> or <b>Statements</b>. Both elements can be included on a listing, but only one is required.</span>
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @param iterable<string> $statements
     * @return self
     */
    public function setStatements(iterable $statements)
    {
        $this->statements = $statements;
        return $this;
    }

    /**
     * Gets as component
     *
     * This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. This field is optional for Product Safety.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Component information can only be specified if used with the <b>Pictograms</b> and/or <b>Statements</b> field; if the component is provided without one or both of these fields, an error will occur. </span>
     *
     * @return string
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Sets a new component
     *
     * This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. This field is optional for Product Safety.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Component information can only be specified if used with the <b>Pictograms</b> and/or <b>Statements</b> field; if the component is provided without one or both of these fields, an error will occur. </span>
     *
     * @param string $component
     * @return self
     */
    public function setComponent($component)
    {
        $this->component = $component;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer): void
    {
        $this->xmlSerializeAttributes($writer);
        $this->xmlSerializeElements($writer);
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        Func::writeDefaultNamespace($writer, "urn:ebay:apis:eBLBaseComponents");
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        $value = $this->pictograms;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'Pictograms', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'Pictogram', null, (string) $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->statements;
        if (null !== $value) {
            $open = false;
            foreach ($value as $v) {
                if (!$open) {
                    $writer->startElementNs(null, 'Statements', null);
                    $open = true;
                }
                $writer->writeElementNs(null, 'Statement', null, (string) $v);
            }
            if ($open) {
                $writer->endElement();
            }
        }
        $value = $this->component;
        if (null !== $value) {
            $writer->writeElementNs(null, 'Component', null, (string) $value);
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\ProductSafetyType
    {
        $self = new self();
        $self->xmlInitLists();
        Func::readObject($reader, $self);
        return $self;
    }

    protected function xmlInitLists(): void
    {
        $this->pictograms = [];
        $this->statements = [];
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
        if ('urn:ebay:apis:eBLBaseComponents' === $reader->namespaceURI) {
            switch ($reader->localName) {
                case 'Pictograms':
                    $this->pictograms = Func::readList($reader, 'Pictogram', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? $value : null;
                    });
                    return true;
                case 'Statements':
                    $this->statements = Func::readList($reader, 'Statement', 'urn:ebay:apis:eBLBaseComponents', static function (\XMLReader $reader) {
                        $value = Func::readText($reader);
                        return '' !== $value ? $value : null;
                    });
                    return true;
                case 'Component':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->component = $value;
                    }
                    return true;
            }
        }
        return false;
    }
}
