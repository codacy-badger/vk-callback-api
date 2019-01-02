<?php

namespace Actions;


function shortenLink($url, $private = 0)
{
    $url = \VkApi\Utils::checkLink($url);

    if ($url->response->status == 'banned') {
        return 'link is banned';
    } else {
        $url = \VkApi\Utils::getShortLink($url, $private);

        $url = $url->response->short_url;

        return $url;
    }
}
