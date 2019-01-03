<?php

namespace Actions;


function shortenLink($url)
{
    $url = \VkApi\Utils::checkLink($url);

    if ($url->response->status == 'banned') {
        return 'link is banned';
    } else {
        $url = \VkApi\Utils::getShortLink($url);

        $url = $url->response->short_url;

        return $url;
    }
}
