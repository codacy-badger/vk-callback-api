<?php

namespace VkApi;


class Utils extends Method
{
    public static function checkLink($url)
    {
        $res = self::requestGet('utils.checkLink', $url);
        $res = json_decode($res, true);

        return $res;
    }

    public static function getShortLink($url, $private = 0)
    {
        $res = self::requestGet('utils.getShortLink', [$url, $private]);
        $res = json_decode($res, true);

        return $res;
    }
}
