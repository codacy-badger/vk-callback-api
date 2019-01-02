<?php

namespace Actions;


function sayHello($peerId)
{
    \VkApi\Messages::send("hello", $peerId);
}
