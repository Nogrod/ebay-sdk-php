<?php

namespace Nogrod\eBaySDK\Finding;

use Nogrod\XMLClientRuntime\Func;

/**
 * Class representing GetSearchKeywordsRecommendationRequestType
 *
 * Checks specified keywords for spelling errors and returns corrected keywords
 *  that will provide better search results. If you make a keyword query search
 *  that returns no results, use this call to check the keywords for
 *  misspellings. The call checks the words in context of the entire query. For
 *  example, if you submit "arry potter" in the request, the response will
 *  recommend "harry potter." However, if you submit "potter arry" in the
 *  request, the response will recommend "potter army." <br><br>
 *  The response will not return recommended keywords in the following
 *  conditions:
 *  <ul>
 *  <li>
 *  Keywords value returns results (even a single item) in either
 *  findItemsByKeywords or findItemsAdvanced.
 *  </li>
 *  <li>
 *  Keywords value contains no misspelled words
 *  (even if the keywords query returns no items).
 *  </li>
 *  </ul>
 * XSD Type: GetSearchKeywordsRecommendationRequest
 */
class GetSearchKeywordsRecommendationRequestType extends BaseServiceRequestType
{

    /**
     * Specify one or more words to use in a search query for finding items
     *  on eBay. It is best to include the complete keywords value, as words
     *  are checked in context with each other. If you are using a URL
     *  request and your keyword query consists of multiple words, use
     *  <code>%20</code> to separate the words (for example,
     *  <code>arry%20Potter</code>). Submitted keywords are not
     *  case sensitive.
     *  <br> <br>
     *  Keyword recommendations will not be returned if the submitted
     *  keywords are accepted standard spellings for item listings. For
     *  example, no recommended keywords are returned for "nrfb" (Never
     *  Removed From Box) even if the keywords query does not return any
     *  search results, because this is an accepted listing term. If no
     *  correct spelling can be identified for submitted keywords (such as
     *  <code>aabbccdd</code>), no recommended keywords are
     *  returned, even though the keyword is obviously not a word and will
     *  not return search results.
     *
     * @var string $keywords
     */
    private $keywords = null;

    /**
     * Gets as keywords
     *
     * Specify one or more words to use in a search query for finding items
     *  on eBay. It is best to include the complete keywords value, as words
     *  are checked in context with each other. If you are using a URL
     *  request and your keyword query consists of multiple words, use
     *  <code>%20</code> to separate the words (for example,
     *  <code>arry%20Potter</code>). Submitted keywords are not
     *  case sensitive.
     *  <br> <br>
     *  Keyword recommendations will not be returned if the submitted
     *  keywords are accepted standard spellings for item listings. For
     *  example, no recommended keywords are returned for "nrfb" (Never
     *  Removed From Box) even if the keywords query does not return any
     *  search results, because this is an accepted listing term. If no
     *  correct spelling can be identified for submitted keywords (such as
     *  <code>aabbccdd</code>), no recommended keywords are
     *  returned, even though the keyword is obviously not a word and will
     *  not return search results.
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * Specify one or more words to use in a search query for finding items
     *  on eBay. It is best to include the complete keywords value, as words
     *  are checked in context with each other. If you are using a URL
     *  request and your keyword query consists of multiple words, use
     *  <code>%20</code> to separate the words (for example,
     *  <code>arry%20Potter</code>). Submitted keywords are not
     *  case sensitive.
     *  <br> <br>
     *  Keyword recommendations will not be returned if the submitted
     *  keywords are accepted standard spellings for item listings. For
     *  example, no recommended keywords are returned for "nrfb" (Never
     *  Removed From Box) even if the keywords query does not return any
     *  search results, because this is an accepted listing term. If no
     *  correct spelling can be identified for submitted keywords (such as
     *  <code>aabbccdd</code>), no recommended keywords are
     *  returned, even though the keyword is obviously not a word and will
     *  not return search results.
     *
     * @param string $keywords
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    public function xmlSerialize(\Sabre\Xml\Writer $writer)
    {
        parent::xmlSerialize($writer);
        $value = $this->getKeywords();
        if (null !== $value) {
            $writer->writeElement("{http://www.ebay.com/marketplace/search/v1/services}keywords", $value);
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
        $value = Func::mapArray($keyValue, '{http://www.ebay.com/marketplace/search/v1/services}keywords');
        if (null !== $value) {
            $this->setKeywords($value);
        }
    }
}
