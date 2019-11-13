<?php

/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 11/24/2015
 * Time: 1:43 AM
 */

namespace hotelbeds\hotel_api_sdk\helpers;

/**
 * Class CheckRate
 * @package hotelbeds\hotel_api_sdk\helpers
 * @property array $rooms List of rooms,
 * @property string $language Response language,
 * @property boolean $upselling Parameter to add or remove the upselling options node to the response,
 */

class CheckRate extends ApiHelper
{
    public function __construct()
    {
        $this->validFields = [
            "rooms" => "array",
            "language" => "string",
            "upselling" => "boolean"
        ];
    }
}
