<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require __DIR__ . '/vendor/autoload.php';

$API_KEY = '352611600:AAF80boWKZFQ__0uD7UFB_aO2-fxUeIegM4';
$BOT_NAME = 'AyuBot';
$hook_url = 'https://ayutelegrambot.herokuapp.com/hook.php';
try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($API_KEY, $BOT_NAME);

    // Set webhook
    $result = $telegram->setWebhook($hook_url);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e;
}
?>