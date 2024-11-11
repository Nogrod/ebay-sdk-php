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
     * This container is used by the seller to provide product safety pictograms for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @var string[] $pictograms
     */
    private $pictograms = null;

    /**
     * This container is used by the seller to provide product safety statements for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @var string[] $statements
     */
    private $statements = null;

    /**
     * This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. This field is optional for Product Safety.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Component information can only be specified if used with the <b>Pictograms</b> and <b>Statements</b> fields; if the component is provided without these fields, an error will occur. </span>
     *
     * @var string $component
     */
    private $component = null;

    /**
     * Adds as pictogram
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @return self
     * @param string $pictogram
     */
    public function addToPictograms($pictogram)
    {
        $this->pictograms[] = $pictogram;
        return $this;
    }

    /**
     * isset pictograms
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
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
     * This container is used by the seller to provide product safety pictograms for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
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
     * This container is used by the seller to provide product safety pictograms for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @return string[]
     */
    public function getPictograms()
    {
        return $this->pictograms;
    }

    /**
     * Sets a new pictograms
     *
     * This container is used by the seller to provide product safety pictograms for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 2 pictograms are allowed for product safety.
     *
     * @param string[] $pictograms
     * @return self
     */
    public function setPictograms(array $pictograms)
    {
        $this->pictograms = $pictograms;
        return $this;
    }

    /**
     * Adds as statement
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @return self
     * @param string $statement
     */
    public function addToStatements($statement)
    {
        $this->statements[] = $statement;
        return $this;
    }

    /**
     * isset statements
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
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
     * This container is used by the seller to provide product safety statements for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
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
     * This container is used by the seller to provide product safety statements for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @return string[]
     */
    public function getStatements()
    {
        return $this->statements;
    }

    /**
     * Sets a new statements
     *
     * This container is used by the seller to provide product safety statements for the listing. This field is required if product safety information is supplied.
     *  <br /><br />
     *  A maximum of 8 statements are allowed for product safety.
     *
     * @param string[] $statements
     * @return self
     */
    public function setStatements(array $statements)
    {
        $this->statements = $statements;
        return $this;
    }

    /**
     * Gets as component
     *
     * This field is used by the seller to provide product safety component information for the listing. For example, component information can include specific warnings related to product safety, such as 'Tipping hazard'. This field is optional for Product Safety.
     *  <br />
     *  <span class="tablenote"><b>Note: </b> Component information can only be specified if used with the <b>Pictograms</b> and <b>Statements</b> fields; if the component is provided without these fields, an error will occur. </span>
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
     *  <span class="tablenote"><b>Note: </b> Component information can only be specified if used with the <b>Pictograms</b> and <b>Statements</b> fields; if the component is provided without these fields, an error will occur. </span>
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
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getPictograms();
        if (null !== $value && !empty($this->getPictograms())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Pictograms", array_map(function ($v) {return ["Pictogram" => $v];}, $value));
        }
        $value = $this->getStatements();
        if (null !== $value && !empty($this->getStatements())) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Statements", array_map(function ($v) {return ["Statement" => $v];}, $value));
        }
        $value = $this->getComponent();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Component", $value);
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
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Pictograms');
        if (null !== $value) {
            $this->setPictograms($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Statements');
        if (null !== $value) {
            $this->setStatements($value);
        }
        $value = Func::mapValue($keyValue, '{urn:ebay:apis:eBLBaseComponents}Component');
        if (null !== $value) {
            $this->setComponent($value);
        }
    }
}
