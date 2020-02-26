<?php

namespace Nogrod\eBaySDK\Finding;

/**
 * Class representing SellerInfoType
 *
 * Container for information about this listing's seller.
 * XSD Type: SellerInfo
 */
class SellerInfoType implements \Sabre\Xml\XmlSerializable, \Sabre\Xml\XmlDeserializable
{

    /**
     * The seller's eBay user name; a unique value.
     *
     * @var string $sellerUserName
     */
    private $sellerUserName = null;

    /**
     * The aggregate feedback score of the seller. A seller's feedback score is
     *  their net positive feedback minus their net negative feedback. Feedback
     *  scores are a quantitative expression of the desirability of dealing with
     *  a seller in a transaction.
     *
     * @var int $feedbackScore
     */
    private $feedbackScore = null;

    /**
     * The percentage value of a user's positive feedback (their positive
     *  feedbackScore divided by their total positive plus negative feedback).
     *
     * @var float $positiveFeedbackPercent
     */
    private $positiveFeedbackPercent = null;

    /**
     * Visual indicator of user's feedback score.
     *  <dl>
     *  <dt>
     *  <strong>feedbackRatingStar values:</strong>
     *  </dt>
     *  <dt>
     *  None
     *  </dt>
     *  <dd>
     *  No graphic displayed, feedback score 0-9.
     *  </dd>
     *  <dt>
     *  Yellow
     *  </dt>
     *  <dd>
     *  Yellow Star, feedback score 10-49.
     *  </dd>
     *  <dt>
     *  Blue
     *  </dt>
     *  <dd>
     *  Blue Star, feedback score 50-99.
     *  </dd>
     *  <dt>
     *  Turquoise
     *  </dt>
     *  <dd>
     *  Turquoise Star, feedback score 100-499.
     *  </dd>
     *  <dt>
     *  Purple
     *  </dt>
     *  <dd>
     *  Purple Star, feedback score 500-999.
     *  </dd>
     *  <dt>
     *  Red
     *  </dt>
     *  <dd>
     *  Red Star, feedback score 1,000-4,999.
     *  </dd>
     *  <dt>
     *  Green
     *  </dt>
     *  <dd>
     *  Green Star, feedback score 5,000-9,999.
     *  </dd>
     *  <dt>
     *  YellowShooting
     *  </dt>
     *  <dd>
     *  Yellow Shooting Star, feedback score 10,000-24,999.
     *  </dd>
     *  <dt>
     *  TurquoiseShooting
     *  </dt>
     *  <dd>
     *  Turquoise Shooting Star, feedback score 25,000-49,999.
     *  </dd>
     *  <dt>
     *  PurpleShooting
     *  </dt>
     *  <dd>
     *  Purple Shooting Star, feedback score 50,000-99,999.
     *  </dd>
     *  <dt>
     *  RedShooting
     *  </dt>
     *  <dd>
     *  Red Shooting Star, feedback score 100,000-499,000 and above.
     *  </dd>
     *  <dt>
     *  GreenShooting
     *  </dt>
     *  <dd>
     *  Green Shooting Star, feedback score 500,000-999,000 and above.
     *  </dd>
     *  <dt>
     *  SilverShooting
     *  </dt>
     *  <dd>
     *  Silver Shooting Star, feedback score 1,000,000 or more.
     *  </dd>
     *  </dl>
     *
     * @var string $feedbackRatingStar
     */
    private $feedbackRatingStar = null;

    /**
     * Indicates whether the seller of the item is top-rated. A top-rated
     *  seller:
     *  <ul>
     *  <li>Consistently receives highest buyers' ratings</li>
     *  <li>Ships items quickly</li>
     *  <li>Has earned a track record of excellent service</li>
     *  </ul>
     *  eBay regularly reviews the performance of these sellers to confirm
     *  they continue to meet the program's requirements.
     *  <br><br>
     *  This field is returned for the following sites only: US (EBAY-US), Motors
     *  (EBAY-MOTOR), DE (EBAY-DE), AT (EBAY-AT), and CH (EBAY-CH).
     *
     * @var bool $topRatedSeller
     */
    private $topRatedSeller = null;

    /**
     * @var string $delimiter
     */
    private $delimiter = null;

    /**
     * Gets as sellerUserName
     *
     * The seller's eBay user name; a unique value.
     *
     * @return string
     */
    public function getSellerUserName()
    {
        return $this->sellerUserName;
    }

    /**
     * Sets a new sellerUserName
     *
     * The seller's eBay user name; a unique value.
     *
     * @param string $sellerUserName
     * @return self
     */
    public function setSellerUserName($sellerUserName)
    {
        $this->sellerUserName = $sellerUserName;
        return $this;
    }

    /**
     * Gets as feedbackScore
     *
     * The aggregate feedback score of the seller. A seller's feedback score is
     *  their net positive feedback minus their net negative feedback. Feedback
     *  scores are a quantitative expression of the desirability of dealing with
     *  a seller in a transaction.
     *
     * @return int
     */
    public function getFeedbackScore()
    {
        return $this->feedbackScore;
    }

    /**
     * Sets a new feedbackScore
     *
     * The aggregate feedback score of the seller. A seller's feedback score is
     *  their net positive feedback minus their net negative feedback. Feedback
     *  scores are a quantitative expression of the desirability of dealing with
     *  a seller in a transaction.
     *
     * @param int $feedbackScore
     * @return self
     */
    public function setFeedbackScore($feedbackScore)
    {
        $this->feedbackScore = $feedbackScore;
        return $this;
    }

    /**
     * Gets as positiveFeedbackPercent
     *
     * The percentage value of a user's positive feedback (their positive
     *  feedbackScore divided by their total positive plus negative feedback).
     *
     * @return float
     */
    public function getPositiveFeedbackPercent()
    {
        return $this->positiveFeedbackPercent;
    }

    /**
     * Sets a new positiveFeedbackPercent
     *
     * The percentage value of a user's positive feedback (their positive
     *  feedbackScore divided by their total positive plus negative feedback).
     *
     * @param float $positiveFeedbackPercent
     * @return self
     */
    public function setPositiveFeedbackPercent($positiveFeedbackPercent)
    {
        $this->positiveFeedbackPercent = $positiveFeedbackPercent;
        return $this;
    }

    /**
     * Gets as feedbackRatingStar
     *
     * Visual indicator of user's feedback score.
     *  <dl>
     *  <dt>
     *  <strong>feedbackRatingStar values:</strong>
     *  </dt>
     *  <dt>
     *  None
     *  </dt>
     *  <dd>
     *  No graphic displayed, feedback score 0-9.
     *  </dd>
     *  <dt>
     *  Yellow
     *  </dt>
     *  <dd>
     *  Yellow Star, feedback score 10-49.
     *  </dd>
     *  <dt>
     *  Blue
     *  </dt>
     *  <dd>
     *  Blue Star, feedback score 50-99.
     *  </dd>
     *  <dt>
     *  Turquoise
     *  </dt>
     *  <dd>
     *  Turquoise Star, feedback score 100-499.
     *  </dd>
     *  <dt>
     *  Purple
     *  </dt>
     *  <dd>
     *  Purple Star, feedback score 500-999.
     *  </dd>
     *  <dt>
     *  Red
     *  </dt>
     *  <dd>
     *  Red Star, feedback score 1,000-4,999.
     *  </dd>
     *  <dt>
     *  Green
     *  </dt>
     *  <dd>
     *  Green Star, feedback score 5,000-9,999.
     *  </dd>
     *  <dt>
     *  YellowShooting
     *  </dt>
     *  <dd>
     *  Yellow Shooting Star, feedback score 10,000-24,999.
     *  </dd>
     *  <dt>
     *  TurquoiseShooting
     *  </dt>
     *  <dd>
     *  Turquoise Shooting Star, feedback score 25,000-49,999.
     *  </dd>
     *  <dt>
     *  PurpleShooting
     *  </dt>
     *  <dd>
     *  Purple Shooting Star, feedback score 50,000-99,999.
     *  </dd>
     *  <dt>
     *  RedShooting
     *  </dt>
     *  <dd>
     *  Red Shooting Star, feedback score 100,000-499,000 and above.
     *  </dd>
     *  <dt>
     *  GreenShooting
     *  </dt>
     *  <dd>
     *  Green Shooting Star, feedback score 500,000-999,000 and above.
     *  </dd>
     *  <dt>
     *  SilverShooting
     *  </dt>
     *  <dd>
     *  Silver Shooting Star, feedback score 1,000,000 or more.
     *  </dd>
     *  </dl>
     *
     * @return string
     */
    public function getFeedbackRatingStar()
    {
        return $this->feedbackRatingStar;
    }

    /**
     * Sets a new feedbackRatingStar
     *
     * Visual indicator of user's feedback score.
     *  <dl>
     *  <dt>
     *  <strong>feedbackRatingStar values:</strong>
     *  </dt>
     *  <dt>
     *  None
     *  </dt>
     *  <dd>
     *  No graphic displayed, feedback score 0-9.
     *  </dd>
     *  <dt>
     *  Yellow
     *  </dt>
     *  <dd>
     *  Yellow Star, feedback score 10-49.
     *  </dd>
     *  <dt>
     *  Blue
     *  </dt>
     *  <dd>
     *  Blue Star, feedback score 50-99.
     *  </dd>
     *  <dt>
     *  Turquoise
     *  </dt>
     *  <dd>
     *  Turquoise Star, feedback score 100-499.
     *  </dd>
     *  <dt>
     *  Purple
     *  </dt>
     *  <dd>
     *  Purple Star, feedback score 500-999.
     *  </dd>
     *  <dt>
     *  Red
     *  </dt>
     *  <dd>
     *  Red Star, feedback score 1,000-4,999.
     *  </dd>
     *  <dt>
     *  Green
     *  </dt>
     *  <dd>
     *  Green Star, feedback score 5,000-9,999.
     *  </dd>
     *  <dt>
     *  YellowShooting
     *  </dt>
     *  <dd>
     *  Yellow Shooting Star, feedback score 10,000-24,999.
     *  </dd>
     *  <dt>
     *  TurquoiseShooting
     *  </dt>
     *  <dd>
     *  Turquoise Shooting Star, feedback score 25,000-49,999.
     *  </dd>
     *  <dt>
     *  PurpleShooting
     *  </dt>
     *  <dd>
     *  Purple Shooting Star, feedback score 50,000-99,999.
     *  </dd>
     *  <dt>
     *  RedShooting
     *  </dt>
     *  <dd>
     *  Red Shooting Star, feedback score 100,000-499,000 and above.
     *  </dd>
     *  <dt>
     *  GreenShooting
     *  </dt>
     *  <dd>
     *  Green Shooting Star, feedback score 500,000-999,000 and above.
     *  </dd>
     *  <dt>
     *  SilverShooting
     *  </dt>
     *  <dd>
     *  Silver Shooting Star, feedback score 1,000,000 or more.
     *  </dd>
     *  </dl>
     *
     * @param string $feedbackRatingStar
     * @return self
     */
    public function setFeedbackRatingStar($feedbackRatingStar)
    {
        $this->feedbackRatingStar = $feedbackRatingStar;
        return $this;
    }

    /**
     * Gets as topRatedSeller
     *
     * Indicates whether the seller of the item is top-rated. A top-rated
     *  seller:
     *  <ul>
     *  <li>Consistently receives highest buyers' ratings</li>
     *  <li>Ships items quickly</li>
     *  <li>Has earned a track record of excellent service</li>
     *  </ul>
     *  eBay regularly reviews the performance of these sellers to confirm
     *  they continue to meet the program's requirements.
     *  <br><br>
     *  This field is returned for the following sites only: US (EBAY-US), Motors
     *  (EBAY-MOTOR), DE (EBAY-DE), AT (EBAY-AT), and CH (EBAY-CH).
     *
     * @return bool
     */
    public function getTopRatedSeller()
    {
        return $this->topRatedSeller;
    }

    /**
     * Sets a new topRatedSeller
     *
     * Indicates whether the seller of the item is top-rated. A top-rated
     *  seller:
     *  <ul>
     *  <li>Consistently receives highest buyers' ratings</li>
     *  <li>Ships items quickly</li>
     *  <li>Has earned a track record of excellent service</li>
     *  </ul>
     *  eBay regularly reviews the performance of these sellers to confirm
     *  they continue to meet the program's requirements.
     *  <br><br>
     *  This field is returned for the following sites only: US (EBAY-US), Motors
     *  (EBAY-MOTOR), DE (EBAY-DE), AT (EBAY-AT), and CH (EBAY-CH).
     *
     * @param bool $topRatedSeller
     * @return self
     */
    public function setTopRatedSeller($topRatedSeller)
    {
        $this->topRatedSeller = $topRatedSeller;
        return $this;
    }

    /**
     * Gets as delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Sets a new delimiter
     *
     * @param string $delimiter
     * @return self
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        $writer->writeAttribute("xmlns", "http://www.ebay.com/marketplace/search/v1/services");
        $value = $this->getSellerUserName();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}sellerUserName", $value);
        }
        $value = $this->getFeedbackScore();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}feedbackScore", $value);
        }
        $value = $this->getPositiveFeedbackPercent();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}positiveFeedbackPercent", $value);
        }
        $value = $this->getFeedbackRatingStar();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}feedbackRatingStar", $value);
        }
        $value = $this->getTopRatedSeller();
        $value = null !== $value ? ($value ? 'true' : 'false') : null;
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}topRatedSeller", $value);
        }
        $value = $this->getDelimiter();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}delimiter", $value);
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
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}sellerUserName');
        if (null !== $value) {
            $this->setSellerUserName($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}feedbackScore');
        if (null !== $value) {
            $this->setFeedbackScore($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}positiveFeedbackPercent');
        if (null !== $value) {
            $this->setPositiveFeedbackPercent($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}feedbackRatingStar');
        if (null !== $value) {
            $this->setFeedbackRatingStar($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}topRatedSeller');
        if (null !== $value) {
            $this->setTopRatedSeller($value);
        }
        $value = self::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}delimiter');
        if (null !== $value) {
            $this->setDelimiter($value);
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
