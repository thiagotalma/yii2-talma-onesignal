<?php

namespace talma\onesignal\helpers;

/**
 * Class Device
 *
 * Contains device types to be used for [[Notifications]] and [[Player]] models
 */
class Device
{
    // Device types
    const TYPE_IOS = 0;
    const TYPE_ANDROID = 1;
    const TYPE_AMAZON = 2;
    const TYPE_WINDOWS_PHONE_MPNS = 3;
    const TYPE_CHROME_APP = 4;
    const TYPE_CHROME_WEB = 5;
    const TYPE_WINDOWS_PHONE_WNS = 6;
    const TYPE_SAFARI = 7;
    const TYPE_FIREFOX = 8;
    const TYPE_MAC_OSX = 9;
}
