<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use Telegram\Bot\Api;

class ChannelController extends Controller
{
    public function getAndListChannels()
    {
        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $telegram = new Api($telegramToken);

        $response = $telegram->getChannels();

        foreach ($response as $channel) {
            Channel::updateOrCreate(
                ['channel_id' => $channel['id']],
                ['name' => $channel['title'], 'description' => $channel['description'], 'number_of_subscribers' => $channel['members_count']]
            );
        }

        $channels = Channel::paginate(10);

        return view('list.channel_list', ['channels' => $channels]);
    }

    public function List()
    {
        $channels = Channel::paginate(10);

        return view('lists.channel_list', ['channels' => $channels]);
    }

    public function filterChannels()
    {

    }
}
