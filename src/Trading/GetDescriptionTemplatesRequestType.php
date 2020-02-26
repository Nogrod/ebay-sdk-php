<?php

namespace Nogrod\eBaySDK\Trading;

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

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getCategoryID();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}CategoryID", $value);
        }
        $value = $this->getLastModifiedTime();
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}LastModifiedTime", $value);
        }
        $value = $this->getMotorVehicles();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{urn:ebay:apis:eBLBaseComponents}MotorVehicles", $value);
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
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}CategoryID');
        if (null !== $value) {
            $this->setCategoryID($value);
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}LastModifiedTime');
        if (null !== $value) {
            $this->setLastModifiedTime(new \DateTime($value));
        }
        $value = self::mapArray($keyValue, '{urn:ebay:apis:eBLBaseComponents}MotorVehicles');
        if (null !== $value) {
            $this->setMotorVehicles($value);
        }
    }

    public static function mapArray(array $array, string $name, bool $isArray = false)
    {
        $result = [];
        foreach ($array as $item) {
            if ($item['name'] !== $name) {
                continue;
            }
            if ($isArray) {
                $result[] = $item['value'];
            } else {
                return $item['value'];
            }
        }
        return $isArray ? $result : null;
    }
}
