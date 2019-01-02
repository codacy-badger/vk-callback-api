<?php

namespace VkApi;


class Utils extends Method
{
    public static function checkLink($url)
    {
        $res = self::requestGet('utils.checkLink', [
            'url' => $url,
            'access_token' => VK_API_ACCESS_TOKEN,
            'v' => VK_API_V
        ]);
        $res = json_decode($res, true);

        return $res;
    }

    public static function getShortLink($url, $private = 0)
    {
        $res = self::requestGet('utils.getShortLink', [
            'url' => $url,
            'private' => $private,
            'access_token' => VK_API_ACCESS_TOKEN,
            'v' => VK_API_V
        ]);
        $res = json_decode($res, true);

        return $res;
    }

    public static function resolveScreenName($screenName)
    {
        $res = self::requestGet('utils.resolveScreenName', [
            'screen_name' => $screenName,
            'access_token' => VK_API_ACCESS_TOKEN,
            'v' => VK_API_V
        ]);
        $res = json_decode($res, true);

        return $res;
    }
}
