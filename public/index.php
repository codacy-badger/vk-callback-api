<?php
/**
 * @author holyflexer
 * @copyright 2018-2019 Stasyan Team
 */

if (!isset($_REQUEST)) {
    return;
}

require_once "../vendor/autoload.php";

$req = json_decode(file_get_contents("php://input"), true);

$config = json_decode(file_get_contents("../config.json"), true);

define("VK_API_ACCESS_TOKEN", $config['vk_api']['access_token']);
define("VK_API_CONFIRMATION_TOKEN", $config['vk_api']['confirmation_token']);
define("VK_API_V", $config['vk_api']['v']);

switch ($req['type']) {
    case 'confirmation':
        echo VK_API_CONFIRMATION_TOKEN;
        break;
    case 'message_new':
        list(
            'date' => $date,
            'from_id' => $fromId,
            'peer_id' => $peerId,
            'text' => $text
            ) = $req['object'];
        $text = explode(" ", $text);

        switch ($text[0]) {
            case '!hello':
                Actions\sayHello($peerId);
                break;
            case '!shorten':
                $message = Actions\shortenLink($text[1]);
                VkApi\Messages::send($message, $peerId);
        }

        echo 'ok';
        break;
}
