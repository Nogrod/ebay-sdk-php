<?php

namespace Nogrod\eBaySDK\MerchantData;

/**
 * Class representing TicketEventTypeCodeType
 *
 * This enumerated type is deprecated.
 * XSD Type: TicketEventTypeCodeType
 */
class TicketEventTypeCodeType
{

    /**
     * Constant for 'Any' value.
     *
     * (in) Any event (applicable to US, UK, and DE)
     */
    public const VAL_ANY = 'Any';

    /**
     * Constant for 'DE_ComedyAndKabarett' value.
     *
     * (in) Comedy & Kabarett (Comedy and Cabaret)
     */
    public const VAL_DE__COMEDY_AND_KABARETT = 'DE_ComedyAndKabarett';

    /**
     * Constant for 'DE_FreizeitAndEvents' value.
     *
     * (in) Freizeit & Events (Leisure and Events)
     */
    public const VAL_DE__FREIZEIT_AND_EVENTS = 'DE_FreizeitAndEvents';

    /**
     * Constant for 'DE_KonzerteAndFestivals' value.
     *
     * (in) Konzerte & Festivals (Concerts and Festivals)
     */
    public const VAL_DE__KONZERTE_AND_FESTIVALS = 'DE_KonzerteAndFestivals';

    /**
     * Constant for 'DE_KulturAndKlassik' value.
     *
     * (in) Kultur & Klassik (Culture and Classical)
     */
    public const VAL_DE__KULTUR_AND_KLASSIK = 'DE_KulturAndKlassik';

    /**
     * Constant for 'DE_MusicalsAndShows' value.
     *
     * (in) Musicals & Shows
     */
    public const VAL_DE__MUSICALS_AND_SHOWS = 'DE_MusicalsAndShows';

    /**
     * Constant for 'DE_Sportveranstaltungen' value.
     *
     * (in) Sportveranstaltungen (Sporting Events)
     */
    public const VAL_DE__SPORTVERANSTALTUNGEN = 'DE_Sportveranstaltungen';

    /**
     * Constant for 'DE_Sonstige' value.
     *
     * (in) Other events that are not the above Germany event types
     *  (applicable to listings on the DE site)
     */
    public const VAL_DE__SONSTIGE = 'DE_Sonstige';

    /**
     * Constant for 'UK_AmusementParks' value.
     *
     * (in) Amusement Parks (applicable to listings on the UK site)
     */
    public const VAL_UK__AMUSEMENT_PARKS = 'UK_AmusementParks';

    /**
     * Constant for 'UK_Comedy' value.
     *
     * (in) Comedy (applicable to listings on the UK site)
     */
    public const VAL_UK__COMEDY = 'UK_Comedy';

    /**
     * Constant for 'UK_ConcertsAndGigs' value.
     *
     * (in) Concerts/Gigs (applicable to listings on the UK site)
     */
    public const VAL_UK__CONCERTS_AND_GIGS = 'UK_ConcertsAndGigs';

    /**
     * Constant for 'UK_ConferencesAndSeminars' value.
     *
     * (in) Conferences/Seminars (applicable to listings on the UK site)
     */
    public const VAL_UK__CONFERENCES_AND_SEMINARS = 'UK_ConferencesAndSeminars';

    /**
     * Constant for 'UK_ExhibitionsAndShows' value.
     *
     * (in) Exhibitions/Shows (applicable to listings on the UK site)
     */
    public const VAL_UK__EXHIBITIONS_AND_SHOWS = 'UK_ExhibitionsAndShows';

    /**
     * Constant for 'UK_Experiences' value.
     *
     * (in) Experiences (applicable to listings on the UK site)
     */
    public const VAL_UK__EXPERIENCES = 'UK_Experiences';

    /**
     * Constant for 'UK_SportingEvents' value.
     *
     * (in) Sporting events (applicable to listings on the UK site)
     */
    public const VAL_UK__SPORTING_EVENTS = 'UK_SportingEvents';

    /**
     * Constant for 'UK_TheatreCinemaAndCircus' value.
     *
     * (in) Theatre/Cinema/Circus (applicable to listings on the UK site)
     */
    public const VAL_UK__THEATRE_CINEMA_AND_CIRCUS = 'UK_TheatreCinemaAndCircus';

    /**
     * Constant for 'UK_Other' value.
     *
     * (in) Other. Events that are not the above UK types
     *  (applicable to listings on the UK site)
     */
    public const VAL_UK__OTHER = 'UK_Other';

    /**
     * Constant for 'US_Concerts' value.
     *
     * (in) Concerts (applicable to listings on the US site)
     */
    public const VAL_US__CONCERTS = 'US_Concerts';

    /**
     * Constant for 'US_Movies' value.
     *
     * (in) Movies (applicable to listings on the US site)
     */
    public const VAL_US__MOVIES = 'US_Movies';

    /**
     * Constant for 'US_SportingEvents' value.
     *
     * (in) Sporting events (applicable to listings on the US site)
     */
    public const VAL_US__SPORTING_EVENTS = 'US_SportingEvents';

    /**
     * Constant for 'US_Theater' value.
     *
     * (in) Theater (applicable to listings on the US site)
     */
    public const VAL_US__THEATER = 'US_Theater';

    /**
     * Constant for 'US_Other' value.
     *
     * (in) Events that are not concerts,
     *  movies, sporting events, or theater events
     *  (applicable to listings on the US site)
     */
    public const VAL_US__OTHER = 'US_Other';

    /**
     * Constant for 'CustomCode' value.
     *
     * Reserved for internal or future use.
     */
    public const VAL_CUSTOM_CODE = 'CustomCode';

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }
}
