<?php

namespace VkApi;


class Messages extends Method
{
    public static function send($message, $peerId)
    {
        $res = self::requestGet('messages.send', [
            'message' => $message,
            'peer_id' => $peerId,
            'access_token' => VK_API_ACCESS_TOKEN,
            'v' => VK_API_V
        ]);
        $res = json_decode($res, true);

        return $res;
    }
}
