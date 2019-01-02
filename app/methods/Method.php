<?php

namespace VkApi;


class Method
{
    public $name;
    public $params;

    public static function requestGet($name, $params)
    {
        $endpoint = "https://api.vk.com/method/";

        $params = http_build_query($params);

        $url = "$endpoint$name?$params";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $res = curl_exec($ch);

        curl_close($ch);

        return $res;
    }
}
