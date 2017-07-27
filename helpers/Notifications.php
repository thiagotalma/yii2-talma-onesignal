<?php

namespace talma\onesignal\helpers;

use GuzzleHttp\Client;

/**
 * Class Notifications
 */
class Notifications extends Request
{
    public $id;

    public $methodName = 'notifications';

    /**
     * TODO: View sent notification info
     *
     * @param integer $id OneSignal notification ID
     *
     * @return array notification info from OneSignal API
     */
    public function view($id)
    {

    }

    /**
     * TODO: View all sent notification
     *
     * @return [type] [description]
     */
    public function viewAll()
    {

    }

    /**
     * TODO: Tracks notification state
     *
     * @param integer $id OneSignal notification ID
     *
     * @return array notification info from OneSignal API
     */
    public function track($id)
    {

    }

    /**
     * Posts notification to OneSignal API
     *
     * @param  array $contents array with lang id as keys and message as value
     * **Example:**
     * ```
     * ['en' => 'Notification in english', 'ru' => 'Уведомление на русском']
     * ```
     * @param  array $options additional options.
     * Visit [onesignal.com](https://documentation.onesignal.com/) for more details.
     *
     * @return array  json encoded array, that contains result from OneSignal API
     */
    public function create($contents, $options = [])
    {
        $client = new Client();

        $result = $client->post($this->apiBaseUrl . $this->methodName, array_merge(['contents' => $contents, 'app_id' => $this->appId], $options));

        $result = json_decode($result, true);

        return $result;
    }

    /**
     * Used to stop a scheduled or currently outgoing notification.
     *
     * @param $id string
     *
     * @return array
     */
    public function cancel($id)
    {
        $result = $this->curl->delete(
            $this->apiBaseUrl . $this->methodName . "/{$id}?app_id={$this->appId}"
        );

        return json_decode($result);
    }
}
