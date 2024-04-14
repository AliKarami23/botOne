<?php

namespace App\Http\Controllers;


use App\Models\Channel;
use App\Models\Group;
use Illuminate\Http\Request;
use Telegram\Bot\Api;
use Telegram\Bot\FileUpload\InputFile;

class NotificationController extends Controller
{
    public function sendMessageToGroupOrChannel(Request $request)
    {
        $text = $request->text;
        $file = $request->file('file');
        $groups = $request->groups;
        $channels = $request->channels;

        $telegramToken = env('TELEGRAM_BOT_TOKEN');
        $telegram = new Api($telegramToken);

        if (!empty($groups)) {
            foreach ($groups as $groupId) {
                $params = ['chat_id' => $groupId, 'text' => $text];
                if (!is_null($file)) {
                    $inputFile = new InputFile($file);
                    $params['document'] = $inputFile;
                }
                $telegram->sendMessage($params);
            }
        }

        if (!empty($channels)) {
            foreach ($channels as $channelId) {
                $params = ['chat_id' => $channelId, 'text' => $text];
                if (!is_null($file)) {
                    $inputFile = new InputFile($file);
                    $params['document'] = $inputFile;
                }
                $telegram->sendMessage($params);
            }
        }
    }

    public function showForm()
    {
        $groups = Group::all();
        $channels = Channel::all();

        return view('pages.send_notification', compact('groups', 'channels'));
    }

    public function List()
    {
        return view('lists.massage_list');
    }
}
