<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing ItemCompatibilityType
 *
 * All information corresponding to an individual parts compatibility by application.
 * XSD Type: ItemCompatibilityType
 */
class ItemCompatibilityType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{
    /**
     * Removes individual parts compatibility nodes from the compatibility list. Set
     *  to <code>true</code> within the compatibility to delete.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This field can only be used with <b>Revise</b> calls or when revising a template.
     *  </span>
     *  If the listing has bids or ends within 12 hours, you cannot delete item parts
     *  compatibilities.
     *
     * @var bool $delete
     */
    private $delete = null;

    /**
     * A name-value pair describing a single compatible application. The
     *  allowed names and values are specific to the primary category in which the
     *  item is listed. For example, when listing in a Parts & Accessories
     *  category, where the applications are vehicles, the allowed names might include
     *  Year, Make, and Model, and the values would correspond to specific vehicles in
     *  eBay's catalog. For details and examples, see the
     *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/CompatibleParts-Listing.html#SpecifyingPartsCompatibilityManually"
     *  target="_blank">Features Guide</a>.
     *  <br><br>
     *  The eBay Germany, UK, Austria, France, Italy, and Spain sites support the use of <em>K type</em> vehicle numbers to specify vehicle
     *  parts compatibility. To use a K type number, set the <b>Name</b> field to "<code>KType</code>"
     *  and set the corresponding <b>Value</b> field to the appropriate K type number.
     *  <br><br>
     *  The DE and UK eBay sites also support the use of an <em>eBay Product ID</em> (or <em>ePID</em>)
     *  number/value pair to specify motorcycle and scooter parts compatibility (currently, only DE supports scooter parts
     *  compatibily). To use an ePID number to specify part compatibilities, set the <b>Name</b>
     *  field to "<code>ePID</code>" and the corresponding <b>Value</b> field to the ePID
     *  number that matches the motorcycle for the part(s) you are listing. Motorcycle ePID numbers are provided
     *  by the <em>Master Motorcycle List</em> (MML) file, which contains the ePID numbers and
     *  their associated vehicle mappings). For motorcycles, an ePID number contains the vehicle make, model, CCM,
     *  year, and submodel data. Please use the following links to obtain the DE and UK MML data files:
     *  <br><br>
     *  - DE seller help page: http://verkaeuferportal.ebay.de/fahrzeugteile-und-zubehoer-optimal-einstellen<br>
     *  - UK seller help page: http://pages.ebay.co.uk/help/sell/contextual/master-motorcycle-list-manually.html
     *
     * @var \Nogrod\eBaySDK\Trading\NameValueListType[] $nameValueList
     */
    private $nameValueList = [
        
    ];

    /**
     * The seller may optionally enter any notes pertaining to the parts compatibility being specified.
     *  Use this field to specify the placement of the part on a vehicle or the type of vehicle a part fits.
     *
     * @var string $compatibilityNotes
     */
    private $compatibilityNotes = null;

    /**
     * Gets as delete
     *
     * Removes individual parts compatibility nodes from the compatibility list. Set
     *  to <code>true</code> within the compatibility to delete.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This field can only be used with <b>Revise</b> calls or when revising a template.
     *  </span>
     *  If the listing has bids or ends within 12 hours, you cannot delete item parts
     *  compatibilities.
     *
     * @return bool
     */
    public function getDelete()
    {
        return $this->delete;
    }

    /**
     * Sets a new delete
     *
     * Removes individual parts compatibility nodes from the compatibility list. Set
     *  to <code>true</code> within the compatibility to delete.
     *  <br/><br/>
     *  <span class="tablenote"><b>Note: </b>
     *  This field can only be used with <b>Revise</b> calls or when revising a template.
     *  </span>
     *  If the listing has bids or ends within 12 hours, you cannot delete item parts
     *  compatibilities.
     *
     * @param bool $delete
     * @return self
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * Adds as nameValueList
     *
     * A name-value pair describing a single compatible application. The
     *  allowed names and values are specific to the primary category in which the
     *  item is listed. For example, when listing in a Parts & Accessories
     *  category, where the applications are vehicles, the allowed names might include
     *  Year, Make, and Model, and the values would correspond to specific vehicles in
     *  eBay's catalog. For details and examples, see the
     *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/CompatibleParts-Listing.html#SpecifyingPartsCompatibilityManually"
     *  target="_blank">Features Guide</a>.
     *  <br><br>
     *  The eBay Germany, UK, Austria, France, Italy, and Spain sites support the use of <em>K type</em> vehicle numbers to specify vehicle
     *  parts compatibility. To use a K type number, set the <b>Name</b> field to "<code>KType</code>"
     *  and set the corresponding <b>Value</b> field to the appropriate K type number.
     *  <br><br>
     *  The DE and UK eBay sites also support the use of an <em>eBay Product ID</em> (or <em>ePID</em>)
     *  number/value pair to specify motorcycle and scooter parts compatibility (currently, only DE supports scooter parts
     *  compatibily). To use an ePID number to specify part compatibilities, set the <b>Name</b>
     *  field to "<code>ePID</code>" and the corresponding <b>Value</b> field to the ePID
     *  number that matches the motorcycle for the part(s) you are listing. Motorcycle ePID numbers are provided
     *  by the <em>Master Motorcycle List</em> (MML) file, which contains the ePID numbers and
     *  their associated vehicle mappings). For motorcycles, an ePID number contains the vehicle make, model, CCM,
     *  year, and submodel data. Please use the following links to obtain the DE and UK MML data files:
     *  <br><br>
     *  - DE seller help page: http://verkaeuferportal.ebay.de/fahrzeugteile-und-zubehoer-optimal-einstellen<br>
     *  - UK seller help page: http://pages.ebay.co.uk/help/sell/contextual/master-motorcycle-list-manually.html
     *
     * @return self
     * @param \Nogrod\eBaySDK\Trading\NameValueListType $nameValueList
     */
    public function addToNameValueList(\Nogrod\eBaySDK\Trading\NameValueListType $nameValueList)
    {
        $this->nameValueList[] = $nameValueList;
        return $this;
    }

    /**
     * isset nameValueList
     *
     * A name-value pair describing a single compatible application. The
     *  allowed names and values are specific to the primary category in which the
     *  item is listed. For example, when listing in a Parts & Accessories
     *  category, where the applications are vehicles, the allowed names might include
     *  Year, Make, and Model, and the values would correspond to specific vehicles in
     *  eBay's catalog. For details and examples, see the
     *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/CompatibleParts-Listing.html#SpecifyingPartsCompatibilityManually"
     *  target="_blank">Features Guide</a>.
     *  <br><br>
     *  The eBay Germany, UK, Austria, France, Italy, and Spain sites support the use of <em>K type</em> vehicle numbers to specify vehicle
     *  parts compatibility. To use a K type number, set the <b>Name</b> field to "<code>KType</code>"
     *  and set the corresponding <b>Value</b> field to the appropriate K type number.
     *  <br><br>
     *  The DE and UK eBay sites also support the use of an <em>eBay Product ID</em> (or <em>ePID</em>)
     *  number/value pair to specify motorcycle and scooter parts compatibility (currently, only DE supports scooter parts
     *  compatibily). To use an ePID number to specify part compatibilities, set the <b>Name</b>
     *  field to "<code>ePID</code>" and the corresponding <b>Value</b> field to the ePID
     *  number that matches the motorcycle for the part(s) you are listing. Motorcycle ePID numbers are provided
     *  by the <em>Master Motorcycle List</em> (MML) file, which contains the ePID numbers and
     *  their associated vehicle mappings). For motorcycles, an ePID number contains the vehicle make, model, CCM,
     *  year, and submodel data. Please use the following links to obtain the DE and UK MML data files:
     *  <br><br>
     *  - DE seller help page: http://verkaeuferportal.ebay.de/fahrzeugteile-und-zubehoer-optimal-einstellen<br>
     *  - UK seller help page: http://pages.ebay.co.uk/help/sell/contextual/master-motorcycle-list-manually.html
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNameValueList($index)
    {
        return isset($this->nameValueList[$index]);
    }

    /**
     * unset nameValueList
     *
     * A name-value pair describing a single compatible application. The
     *  allowed names and values are specific to the primary category in which the
     *  item is listed. For example, when listing in a Parts & Accessories
     *  category, where the applications are vehicles, the allowed names might include
     *  Year, Make, and Model, and the values would correspond to specific vehicles in
     *  eBay's catalog. For details and examples, see the
     *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/CompatibleParts-Listing.html#SpecifyingPartsCompatibilityManually"
     *  target="_blank">Features Guide</a>.
     *  <br><br>
     *  The eBay Germany, UK, Austria, France, Italy, and Spain sites support the use of <em>K type</em> vehicle numbers to specify vehicle
     *  parts compatibility. To use a K type number, set the <b>Name</b> field to "<code>KType</code>"
     *  and set the corresponding <b>Value</b> field to the appropriate K type number.
     *  <br><br>
     *  The DE and UK eBay sites also support the use of an <em>eBay Product ID</em> (or <em>ePID</em>)
     *  number/value pair to specify motorcycle and scooter parts compatibility (currently, only DE supports scooter parts
     *  compatibily). To use an ePID number to specify part compatibilities, set the <b>Name</b>
     *  field to "<code>ePID</code>" and the corresponding <b>Value</b> field to the ePID
     *  number that matches the motorcycle for the part(s) you are listing. Motorcycle ePID numbers are provided
     *  by the <em>Master Motorcycle List</em> (MML) file, which contains the ePID numbers and
     *  their associated vehicle mappings). For motorcycles, an ePID number contains the vehicle make, model, CCM,
     *  year, and submodel data. Please use the following links to obtain the DE and UK MML data files:
     *  <br><br>
     *  - DE seller help page: http://verkaeuferportal.ebay.de/fahrzeugteile-und-zubehoer-optimal-einstellen<br>
     *  - UK seller help page: http://pages.ebay.co.uk/help/sell/contextual/master-motorcycle-list-manually.html
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNameValueList($index)
    {
        unset($this->nameValueList[$index]);
    }

    /**
     * Gets as nameValueList
     *
     * A name-value pair describing a single compatible application. The
     *  allowed names and values are specific to the primary category in which the
     *  item is listed. For example, when listing in a Parts & Accessories
     *  category, where the applications are vehicles, the allowed names might include
     *  Year, Make, and Model, and the values would correspond to specific vehicles in
     *  eBay's catalog. For details and examples, see the
     *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/CompatibleParts-Listing.html#SpecifyingPartsCompatibilityManually"
     *  target="_blank">Features Guide</a>.
     *  <br><br>
     *  The eBay Germany, UK, Austria, France, Italy, and Spain sites support the use of <em>K type</em> vehicle numbers to specify vehicle
     *  parts compatibility. To use a K type number, set the <b>Name</b> field to "<code>KType</code>"
     *  and set the corresponding <b>Value</b> field to the appropriate K type number.
     *  <br><br>
     *  The DE and UK eBay sites also support the use of an <em>eBay Product ID</em> (or <em>ePID</em>)
     *  number/value pair to specify motorcycle and scooter parts compatibility (currently, only DE supports scooter parts
     *  compatibily). To use an ePID number to specify part compatibilities, set the <b>Name</b>
     *  field to "<code>ePID</code>" and the corresponding <b>Value</b> field to the ePID
     *  number that matches the motorcycle for the part(s) you are listing. Motorcycle ePID numbers are provided
     *  by the <em>Master Motorcycle List</em> (MML) file, which contains the ePID numbers and
     *  their associated vehicle mappings). For motorcycles, an ePID number contains the vehicle make, model, CCM,
     *  year, and submodel data. Please use the following links to obtain the DE and UK MML data files:
     *  <br><br>
     *  - DE seller help page: http://verkaeuferportal.ebay.de/fahrzeugteile-und-zubehoer-optimal-einstellen<br>
     *  - UK seller help page: http://pages.ebay.co.uk/help/sell/contextual/master-motorcycle-list-manually.html
     *
     * @return \Nogrod\eBaySDK\Trading\NameValueListType[]
     */
    public function getNameValueList()
    {
        return $this->nameValueList;
    }

    /**
     * Sets a new nameValueList
     *
     * A name-value pair describing a single compatible application. The
     *  allowed names and values are specific to the primary category in which the
     *  item is listed. For example, when listing in a Parts & Accessories
     *  category, where the applications are vehicles, the allowed names might include
     *  Year, Make, and Model, and the values would correspond to specific vehicles in
     *  eBay's catalog. For details and examples, see the
     *  <a href="http://developer.ebay.com/DevZone/guides/features-guide/default.html#development/CompatibleParts-Listing.html#SpecifyingPartsCompatibilityManually"
     *  target="_blank">Features Guide</a>.
     *  <br><br>
     *  The eBay Germany, UK, Austria, France, Italy, and Spain sites support the use of <em>K type</em> vehicle numbers to specify vehicle
     *  parts compatibility. To use a K type number, set the <b>Name</b> field to "<code>KType</code>"
     *  and set the corresponding <b>Value</b> field to the appropriate K type number.
     *  <br><br>
     *  The DE and UK eBay sites also support the use of an <em>eBay Product ID</em> (or <em>ePID</em>)
     *  number/value pair to specify motorcycle and scooter parts compatibility (currently, only DE supports scooter parts
     *  compatibily). To use an ePID number to specify part compatibilities, set the <b>Name</b>
     *  field to "<code>ePID</code>" and the corresponding <b>Value</b> field to the ePID
     *  number that matches the motorcycle for the part(s) you are listing. Motorcycle ePID numbers are provided
     *  by the <em>Master Motorcycle List</em> (MML) file, which contains the ePID numbers and
     *  their associated vehicle mappings). For motorcycles, an ePID number contains the vehicle make, model, CCM,
     *  year, and submodel data. Please use the following links to obtain the DE and UK MML data files:
     *  <br><br>
     *  - DE seller help page: http://verkaeuferportal.ebay.de/fahrzeugteile-und-zubehoer-optimal-einstellen<br>
     *  - UK seller help page: http://pages.ebay.co.uk/help/sell/contextual/master-motorcycle-list-manually.html
     *
     * @param \Nogrod\eBaySDK\Trading\NameValueListType[] $nameValueList
     * @return self
     */
    public function setNameValueList(array $nameValueList)
    {
        $this->nameValueList = $nameValueList;
        return $this;
    }

    /**
     * Gets as compatibilityNotes
     *
     * The seller may optionally enter any notes pertaining to the parts compatibility being specified.
     *  Use this field to specify the placement of the part on a vehicle or the type of vehicle a part fits.
     *
     * @return string
     */
    public function getCompatibilityNotes()
    {
        return $this->compatibilityNotes;
    }

    /**
     * Sets a new compatibilityNotes
     *
     * The seller may optionally enter any notes pertaining to the parts compatibility being specified.
     *  Use this field to specify the placement of the part on a vehicle or the type of vehicle a part fits.
     *
     * @param string $compatibilityNotes
     * @return self
     */
    public function setCompatibilityNotes($compatibilityNotes)
    {
        $this->compatibilityNotes = $compatibilityNotes;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "urn:ebay:apis:eBLBaseComponents");
        $value = $this->getDelete();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}Delete", $value);
        }
        $value = $this->getNameValueList();
        if (null !== $value && !empty($this->getNameValueList())) {
            $writer->write(array_map(function ($v) {
                return ["NameValueList" => $v];
            }, $value));
        }
        $value = $this->getCompatibilityNotes();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CompatibilityNotes", $value);
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
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}Delete');
        if (null !== $value) {
            $this->setDelete($value);
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}NameValueList', true);
        if (null !== $value && !empty($value)) {
            $this->setNameValueList(array_map(function ($v) {
                return \Nogrod\eBaySDK\Trading\NameValueListType::fromKeyValue($v);
            }, $value));
        }
        $value = Func::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CompatibilityNotes');
        if (null !== $value) {
            $this->setCompatibilityNotes($value);
        }
    }
}
