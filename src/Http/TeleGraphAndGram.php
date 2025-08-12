<?php

namespace App\Http;

use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use Illuminate\Support\Stringable;

class TeleGraphAndGram extends WebhookHandler
{
    public function handleUnknownCommand(Stringable $text): void
    {
        $this->reply('<b>No such command</b>');
        // or Telegraph::message('...')->send();
        // or $this->chat->html('Your text is: <i>'.$text.'</i>')->send();
    }


    public function start(): void
    {
        $this->reply('Time to start');
    }


    public function handleChatMessage(Stringable $text): void
    {
        $this->chat->html('Your text is: <i>'.$text.'</i>')->send();

        /**
         * To receive a photo (not a document!!)
         */
        //$photo = $this->message->photos()->toArray();
        //$data = count($photo)-1;
        //$id_photo = $photo[$data]['id'];
        //$this->bot->store($id_photo, $this->folder_for_photo(), Str::random(11).'.jpg');
    }

}