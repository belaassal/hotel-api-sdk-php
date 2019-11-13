<?php

/**
 * User: Brahim EL AASSAL 
 * email: belaassal@gmail.com
 * Date: 11/12/2019 17:25 
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\model\AuditData;

/**
 * Class BookingDetailsRS
 * @package hotelbeds\hotel_api_sdk\messages
 */
class BookingDetailsRS extends ApiResponse
{
    /**
     * BookingDetailsRS constructor.
     * @param array $rsData Array of data response for populating response object.
     */
    public function __construct(array $rsData)
    {
        parent::__construct($rsData);
    }

    /**
     * Get audit data object from response
     * @return AuditData Return class of audit
     */
    public function auditData()
    {
        return new AuditData($this->auditData);
    }
}
