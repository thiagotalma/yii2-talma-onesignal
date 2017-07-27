<?php

namespace talma\onesignal\helpers;

use linslin\yii2\curl\Curl;
use yii\base\Object;

/**
 * Class Request
 */
class Request extends Object
{
    /**
     * Curl object for RESTful API
     *
     * @var Curl
     */
    public $curl;

    /**
     * App ID and Api key can be found in onesignal.com
     * (App -> App Settings -> Keys & IDs)
     *
     * @var string
     */
    public $appId;

    /**
     * Reference to appId description
     *
     * @var string
     */
    public $apiKey;

    /**
     * API base URL
     *
     * @var string
     */
    public $apiBaseUrl = 'https://onesignal.com/api/v1/';

    /**
     * Initializes Curl for OneSignal RESTful API
     *
     * @return void
     */
    public function init()
    {
        $this->curl = (new Curl())->setOption(
            CURLOPT_HTTPHEADER, [
                'Authorization: Basic ' . $this->apiKey,
                'Content-Type: application/json'
            ]
        );
    }
}
