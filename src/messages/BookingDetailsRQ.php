<?php

/**
 * User: Brahim EL AASSAL 
 * email: belaassal@gmail.com
 * Date: 11/12/2019 17:25 
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\types\ApiUri;
use Zend\Http\Request;

/**
 * Class BookingDetailsRQ
 * @package hotelbeds\hotel_api_sdk\messages
 */
class BookingDetailsRQ extends ApiRequest
{
    /**
     * BookingDetailsRQ constructor.
     * @param ApiUri $baseUri
     * @param string $bookingId
     */
    public function __construct(ApiUri $baseUri, $bookingId)
    {
        parent::__construct($baseUri, self::BOOKING);
        $this->request->setMethod(Request::METHOD_DELETE);
        $this->baseUri->setPath($baseUri->getPath() . "/" . self::BOOKING . "/$bookingId");
    }
}
