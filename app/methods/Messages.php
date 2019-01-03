<?php

namespace VkApi;


class Messages extends Method
{
    public static function delete($messageIds, $deleteForAll = 1)
    {
        $res = self::requestGet('messages.delete', [
            'message_ids' => $messageIds,
            'delete_for_all' => $deleteForAll,
            'access_token' => VK_API_ACCESS_TOKEN,
            'v' => VK_API_V
        ]);
        $res = json_decode($res, true);

        return $res;
    }

    public static function deleteChatPhoto($chatId)
    {
        $res = self::requestGet('messages.deleteChatPhoto', [
            'chat_id' => $chatId,
            'access_token' => VK_API_ACCESS_TOKEN,
            'v' => VK_API_V
        ]);
        $res = json_decode($res, true);

        return $res;
    }

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

    public static function removeChatUser($chatId, $userId)
    {
        $res = self::requestGet('messages.removeChatUser', [
            'chat_id' => $chatId,
            'user_id' => $userId,
            'access_token' => VK_API_ACCESS_TOKEN,
            'v' => VK_API_V
        ]);
        $res = json_decode($res, true);

        return $res;
    }
}
