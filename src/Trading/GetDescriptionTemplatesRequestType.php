<?php

namespace Nogrod\eBaySDK\Trading;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetDescriptionTemplatesRequestType
 *
 * This is the base request type for the <b>GetDescriptionTemplates</b> call. This call retrieves detailed information on the Listing Designer templates that are available for use by the seller.
 * XSD Type: GetDescriptionTemplatesRequestType
 */
class GetDescriptionTemplatesRequestType extends AbstractRequestType
{
    /**
     * A <b>CategoryID</b> value can be specified if the seller would like to only see the Listing Designer templates that are available for that eBay category. This field will be ignored if the <b>MotorVehicles</b> boolean field is also included in the call request and set to <code>true</code>.
     *
     * @var string $categoryID
     */
    private $categoryID = null;

    /**
     * This dateTime filter can be included and used if the user only wants to check for recently-added Listing Designer templates. If this filter is used, only the Listing Designer templates that have been added/modified after the specified timestamp will be returned in the response.
     *  <br/><br/>
     *  Typically, you will pass in the timestamp value that was returned the last time you refreshed the list of Listing Designer templates.
     *
     * @var \DateTime $lastModifiedTime
     */
    private $lastModifiedTime = null;

    /**
     * This boolean field should be included and set to <code>true</code> if the user would only like to see the Listing Designer templates that are available for motor vehicle categories. This field will override any <b>CategoryID</b> value that is specified in the call request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Motor vehicle-related Listing Designer templates are only available for eBay Motors on the US and Canada (English) marketplaces. To retrieve eBay US Motors Listing Designer templates, the <b>SITEID</b> HTTP header value must be set to <code>100</code>, which is the identifier of the eBay US Motors vertical (ebay.com/motors).
     *  </span>
     *
     * @var bool $motorVehicles
     */
    private $motorVehicles = null;

    /**
     * Gets as categoryID
     *
     * A <b>CategoryID</b> value can be specified if the seller would like to only see the Listing Designer templates that are available for that eBay category. This field will be ignored if the <b>MotorVehicles</b> boolean field is also included in the call request and set to <code>true</code>.
     *
     * @return string
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * Sets a new categoryID
     *
     * A <b>CategoryID</b> value can be specified if the seller would like to only see the Listing Designer templates that are available for that eBay category. This field will be ignored if the <b>MotorVehicles</b> boolean field is also included in the call request and set to <code>true</code>.
     *
     * @param string $categoryID
     * @return self
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
        return $this;
    }

    /**
     * Gets as lastModifiedTime
     *
     * This dateTime filter can be included and used if the user only wants to check for recently-added Listing Designer templates. If this filter is used, only the Listing Designer templates that have been added/modified after the specified timestamp will be returned in the response.
     *  <br/><br/>
     *  Typically, you will pass in the timestamp value that was returned the last time you refreshed the list of Listing Designer templates.
     *
     * @return \DateTime
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * Sets a new lastModifiedTime
     *
     * This dateTime filter can be included and used if the user only wants to check for recently-added Listing Designer templates. If this filter is used, only the Listing Designer templates that have been added/modified after the specified timestamp will be returned in the response.
     *  <br/><br/>
     *  Typically, you will pass in the timestamp value that was returned the last time you refreshed the list of Listing Designer templates.
     *
     * @param \DateTime $lastModifiedTime
     * @return self
     */
    public function setLastModifiedTime(\DateTime $lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
        return $this;
    }

    /**
     * Gets as motorVehicles
     *
     * This boolean field should be included and set to <code>true</code> if the user would only like to see the Listing Designer templates that are available for motor vehicle categories. This field will override any <b>CategoryID</b> value that is specified in the call request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Motor vehicle-related Listing Designer templates are only available for eBay Motors on the US and Canada (English) marketplaces. To retrieve eBay US Motors Listing Designer templates, the <b>SITEID</b> HTTP header value must be set to <code>100</code>, which is the identifier of the eBay US Motors vertical (ebay.com/motors).
     *  </span>
     *
     * @return bool
     */
    public function getMotorVehicles()
    {
        return $this->motorVehicles;
    }

    /**
     * Sets a new motorVehicles
     *
     * This boolean field should be included and set to <code>true</code> if the user would only like to see the Listing Designer templates that are available for motor vehicle categories. This field will override any <b>CategoryID</b> value that is specified in the call request.
     *  <br>
     *  <br>
     *  <span class="tablenote"><b>Note:</b>
     *  Motor vehicle-related Listing Designer templates are only available for eBay Motors on the US and Canada (English) marketplaces. To retrieve eBay US Motors Listing Designer templates, the <b>SITEID</b> HTTP header value must be set to <code>100</code>, which is the identifier of the eBay US Motors vertical (ebay.com/motors).
     *  </span>
     *
     * @param bool $motorVehicles
     * @return self
     */
    public function setMotorVehicles($motorVehicles)
    {
        $this->motorVehicles = $motorVehicles;
        return $this;
    }

    protected function xmlSerializeAttributes(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeAttributes($writer);
    }

    protected function xmlSerializeElements(\Sabre\Xml\Writer $writer): void
    {
        parent::xmlSerializeElements($writer);
        $value = $this->categoryID;
        if (null !== $value) {
            $writer->writeElementNs(null, 'CategoryID', null, (string) $value);
        }
        $value = $this->lastModifiedTime;
        if (null !== $value) {
            $writer->writeElementNs(null, 'LastModifiedTime', null, Func::formatDateTime($value));
        }
        $value = $this->motorVehicles;
        if (null !== $value) {
            $writer->writeElementNs(null, 'MotorVehicles', null, ($value ? 'true' : 'false'));
        }
    }

    public static function xmlDeserialize(\Sabre\Xml\Reader $reader): mixed
    {
        return self::xmlRead($reader);
    }

    /**
     * Reads the element the reader is positioned on and moves past its end.
     */
    public static function xmlRead(\XMLReader $reader): \Nogrod\eBaySDK\Trading\GetDescriptionTemplatesRequestType
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
                case 'CategoryID':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->categoryID = $value;
                    }
                    return true;
                case 'LastModifiedTime':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->lastModifiedTime = new \DateTime($value);
                    }
                    return true;
                case 'MotorVehicles':
                    $value = Func::readText($reader);
                    if ('' !== $value) {
                        $this->motorVehicles = filter_var($value, FILTER_VALIDATE_BOOLEAN);
                    }
                    return true;
            }
        }
        return parent::xmlReadElement($reader);
    }

    protected function jsonProperties(): array
    {
        $data = parent::jsonProperties();
        $data['CategoryID'] = $this->categoryID;
        $data['LastModifiedTime'] = Func::jsonDate($this->lastModifiedTime);
        $data['MotorVehicles'] = $this->motorVehicles;
        return $data;
    }
}
