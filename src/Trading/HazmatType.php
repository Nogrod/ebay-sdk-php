<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing HazmatType
 *
 * Type defining the <b>Pictograms</b> and <b>Statements</b> containers, and the <b>Component</b> and <b>SignalWord</b> fields, that provide hazardous material related information. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
 * XSD Type: HazmatType
 */
class HazmatType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable, \JsonSerializable
{
    /**
     * This container is used by the seller to provide pictograms for the listing.
     *
     * @var string[] $pictograms
     */
    private $pictograms = null;

    /**
     * This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     *
     * @var string $signalWord
     */
    private $signalWord = null;

    /**
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     *
     * @var string[] $statements
     */
    private $statements = null;

    /**
     * This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
     *
     * @var string $component
     */
    private $component = null;

    /**
     * Adds as pictogram
     *
     * This container is used by the seller to provide pictograms for the listing.
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
     * This container is used by the seller to provide pictograms for the listing.
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
     * This container is used by the seller to provide pictograms for the listing.
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
     * This container is used by the seller to provide pictograms for the listing.
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
     * This container is used by the seller to provide pictograms for the listing.
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
     * Gets as signalWord
     *
     * This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     *
     * @return string
     */
    public function getSignalWord()
    {
        return $this->signalWord;
    }

    /**
     * Sets a new signalWord
     *
     * This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data Sheet. The selected hazard information will be displayed on your listing. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     *
     * @param string $signalWord
     * @return self
     */
    public function setSignalWord($signalWord)
    {
        $this->signalWord = $signalWord;
        return $this;
    }

    /**
     * Adds as statement
     *
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
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
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
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
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
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
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
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
     * This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
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
     * This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
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
     * This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
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
        $value = $this->signalWord;
        if (null !== $value) {
            $writer->writeElementNs(null, 'SignalWord', null, (string) $value);
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
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\HazmatType
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
                case 'SignalWord':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->signalWord = $value;
                    }
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

    protected function jsonProperties(): array
    {
        $data = [];
        $data['Pictograms'] = Func::jsonList($this->pictograms);
        $data['SignalWord'] = $this->signalWord;
        $data['Statements'] = Func::jsonList($this->statements);
        $data['Component'] = $this->component;
        return $data;
    }

    public function jsonSerialize(): mixed
    {
        return array_filter($this->jsonProperties(), static fn ($v) => null !== $v);
    }
}
