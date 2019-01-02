<?php

namespace Actions;


function shortenLink($url, $private = 0)
{
    $url = \VkApi\Utils::checkLink($url);

    $url = $url->response->status == 'banned' ? 'link is banned' : $url;

    $url = \VkApi\Utils::getShortLink($url, $private);

    $url = $url->response->short_url;

    return $url;
}
