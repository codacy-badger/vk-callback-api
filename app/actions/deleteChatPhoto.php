<?php

namespace Actions;


function deleteChatPhoto($peerId)
{
    $chatId = intval($peerId);
    $chatId = $chatId - 2000000000;

    \VkApi\Messages::deleteChatPhoto($chatId);
}
