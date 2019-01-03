<?php

namespace Actions;


function removeChatUser($peerId, $userId)
{
    $chatId = intval($peerId);
    $chatId = $chatId - 2000000000;

    \VkApi\Messages::removeChatUser($chatId, $userId);
}
